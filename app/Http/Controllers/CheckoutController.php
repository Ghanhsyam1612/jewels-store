<?php

    namespace App\Http\Controllers;

    use App\Models\Order;
    use App\Models\OrderItem;
    use App\Models\Payment;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use App\Http\Requests\CheckoutCreateRequest;
    use App\Services\StripeService;
    use Illuminate\Support\Facades\Log;
    use App\Models\Customer;
    use App\Jobs\SendOrderInvoiceJob;

    class CheckoutController extends Controller
    {
        protected $stripeService;

        public function __construct(StripeService $stripeService)
        {
            $this->stripeService = $stripeService;
        }

        public function shipping()
        {
            $cart = session()->get('cart', []);
            return view('checkout.shipping', compact('cart'));
        }

        public function storeShipping(Request $request)
        {
            $validated = $request->validate([
                'full_name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'address' => 'required|string',
                'city' => 'required|string',
                'zip' => 'required|string',
                'country' => 'required|string',
            ]);

            session(['shipping' => $validated]);

            return redirect()->route('checkout.payment');
        }

        public function payment()
        {
            if (!session()->has('shipping')) {
                return redirect()->route('checkout.shipping');
            }

            $cart = session()->get('cart', []);
            $total = $this->calculateTotal($cart);
            $shipping = session('shipping');
            return view('checkout.payment-method', compact('cart', 'total', 'shipping'));
        }

        public function checkoutProcess(Request $request)
        {
            // Validate payment method
            $request->validate([
                'payment_method' => 'required|in:card,apple_pay,google_pay',
                'payment_method_id' => 'required_if:payment_method,card|string',
            ]);

            // Check if shipping information exists
            if (!session()->has('shipping')) {
                return redirect()->route('checkout.shipping')
                    ->withErrors(['shipping' => 'Please provide shipping information']);
            }

            try {
                DB::beginTransaction();

                // Get shipping information from session
                $shippingInfo = session('shipping');

                // Validate cart
                $cart = session()->get('cart', []);
                if (empty($cart)) {
                    throw new \Exception('Cart is empty');
                }

                // Calculate total
                $total = $this->calculateTotal($cart);

                // Create or get customer
                $customer = $this->getOrCreateCustomer($shippingInfo);

                // Create order with shipping information
                $order = Order::create([
                    'customer_id' => $customer->id,
                    'order_number' => 'ORD-' . uniqid(),
                    'order_date' => now(),
                    'payment_status' => Order::$PAYMENT_STATUS_PENDING,
                    'shipping_status' => Order::$SHIPPING_STATUS_PENDING,
                    'total_amount' => $total,
                    'shipping_cost' => $total >= 500 ? 0 : 35,
                    'shipping_address' => $this->formatAddress($shippingInfo),
                    'billing_address' => $this->formatAddress($shippingInfo), // Using same address for billing
                    // Add any additional fields you need
                ]);
                

                // Create order items
                foreach ($cart as $item) {
                    OrderItem::create([
                        'order_id' => $order->id,
                        'diamond_id' => $item['id'],
                        'quantity' => $item['quantity'],
                        'price' => $item['original_price'],
                        'subtotal' => $item['original_price'] * $item['quantity']
                    ]);
                }

                // Process payment based on payment method
                $paymentIntent = $this->processPayment($request, $order);

                // Update order status
                $order->update([
                    'payment_status' => Order::$PAYMENT_STATUS_COMPLETED
                ]);

                // Record payment details
                $this->stripeService->recordPayment($order, $paymentIntent);

                DB::commit();

                // Clear cart and shipping session
                session()->forget(['cart', 'shipping']);

                // Dispatch SendOrderInvoiceJob
                SendOrderInvoiceJob::dispatch($order);

                return redirect()->route('checkout.success');
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error('Checkout Process Error: ' . $e->getMessage());
                return back()->withErrors(['payment' => $e->getMessage()])->withInput();
            }
        }

        private function getOrCreateCustomer($shippingInfo)
        {
            return Customer::firstOrCreate(
                ['email' => $shippingInfo['email']],
                [
                    'first_name' => $shippingInfo['full_name'],
                    'phone' => $shippingInfo['phone'],
                ]
            );
        }

        private function formatAddress($shippingInfo)
        {
            return json_encode([
                'address' => $shippingInfo['address'],
                'city' => $shippingInfo['city'],
                'postal_code' => $shippingInfo['zip'],
                'country' => $shippingInfo['country'],
            ]);
        }

        private function calculateTotal($cart)
        {
            $subtotal = collect($cart)->sum(function ($item) {
                return $item['original_price'] * $item['quantity'];
            });

            $shipping = $subtotal >= 500 ? 0 : 35;
            return $subtotal + $shipping;
        }

        private function processPayment(Request $request, Order $order)
        {
            switch ($request->input('payment_method')) {
                case 'card':
                    $paymentIntent = $this->stripeService->createPaymentIntent($order);
                    return $this->stripeService->confirmPaymentIntent(
                        $paymentIntent->id,
                        $request->input('payment_method_id')
                    );

                case 'apple_pay':
                case 'google_pay':
                    return $this->stripeService->createPaymentIntent($order, $request->input('payment_method'));

                default:
                    throw new \Exception('Invalid payment method');
            }
        }

        public function success()
        {
            return view('checkout.success');
        }
    }
