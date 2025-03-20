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
use App\Models\ColorDiamond;
use App\Models\Diamond;
use App\Models\NaturalDiamond;
use App\Models\AntiqueCutDiamond;
use Stripe\StripeClient;

class CheckoutController extends Controller
{
    protected $stripeService;
    protected $stripe;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
        $this->stripe = new StripeClient(config('services.stripe.secret_key'));
    }

    public function shipping()
    {
        $cart = session()->get('cart', []);
        $customer = auth('customer')->user();
        $address = $customer->shippingAddresses()->first();

        // Prepare shipping data from customer profile and address
        $shippingInfo = session('shipping', [
            'full_name' => $customer->first_name . ' ' . $customer->last_name ?? '',
            'email' => $customer->email ?? '',
            'phone' => $customer->phone ?? '',
            'address' => $address->address_line_1 ?? '',
            'city' => $address->city ?? '',
            'zip' => $address->zip_code ?? '',
            'country' => $address->country ?? 'US'
        ]);

        return view('checkout.shipping', compact('cart', 'shippingInfo', 'customer'));
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

        // Create a Setup Intent for digital wallets
        $setupIntent = $this->stripeService->createSetupIntent();
        $clientSecret = $setupIntent->client_secret;

        return view('checkout.payment-method', compact('cart', 'total', 'shipping', 'clientSecret'));
    }

    public function checkoutProcess(Request $request)
    {
        // Validate payment method
        $request->validate([
            'payment_method' => 'required|in:card,apple_pay,google_pay',
            'payment_method_id' => 'nullable|string',
            'payment_intent_id' => 'nullable|string',
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
            ]);

            // Create order items
            foreach ($cart as $item) {
                $orderItem = new OrderItem([
                    'order_id' => $order->id,
                    'quantity' => $item['quantity'],
                    'price' => $item['original_price'],
                    'subtotal' => $item['original_price'] * $item['quantity']
                ]);

                // Get diamond ID and type from cart item
                $diamondId = $item['diamond_id'];
                $diamondType = $item['diamond_type'];

                // Associate with the correct diamond type
                switch ($diamondType) {
                    case 'normal':
                        $diamond = Diamond::find($diamondId);
                        break;
                    case 'fancy':
                        $diamond = ColorDiamond::find($diamondId);
                        break;
                    case 'natural':
                        $diamond = NaturalDiamond::find($diamondId);
                        break;
                    case 'antique':
                        $diamond = AntiqueCutDiamond::find($diamondId);
                        break;
                }

                // Check if diamond exists
                if (!$diamond) {
                    Log::error("Diamond not found: Type $diamondType, ID $diamondId");
                    throw new \Exception("Diamond not found. Please try again.");
                }

                // Associate with the diamond and order
                $orderItem->diamond()->associate($diamond);
                $order->items()->save($orderItem);
            }

            // Process payment based on payment method
            $paymentIntent = $this->processPayment($request, $order);

            // Update order status
            $order->update([
                'payment_status' => $paymentIntent->status === 'succeeded' ?
                    Order::$PAYMENT_STATUS_COMPLETED : Order::$PAYMENT_STATUS_PENDING
            ]);

            // Record payment details
            $this->stripeService->recordPayment($order, $paymentIntent);

            DB::commit();

            // If payment is still in progress (requires confirmation or 3DS)
            if (
                $paymentIntent->status === 'requires_action' ||
                $paymentIntent->status === 'requires_confirmation' ||
                $paymentIntent->status === 'requires_payment_method'
            ) {
                return response()->json([
                    'requires_action' => true,
                    'payment_intent_client_secret' => $paymentIntent->client_secret,
                    'order_id' => $order->id
                ]);
            }

            // Clear cart and shipping session
            session()->forget(['cart', 'shipping']);

            // Dispatch SendOrderInvoiceJob
            SendOrderInvoiceJob::dispatch($order);

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'redirect' => route('checkout.success')
                ]);
            }

            return redirect()->route('checkout.success');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Checkout Process Error: ' . $e->getMessage());

            if ($request->expectsJson()) {
                return response()->json([
                    'error' => $e->getMessage()
                ], 400);
            }

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
        $paymentMethod = $request->input('payment_method');
        $paymentMethodId = $request->input('payment_method_id');
        $paymentIntentId = $request->input('payment_intent_id');

        // If payment intent ID is provided (for existing payments)
        if ($paymentIntentId) {
            $paymentIntent = $this->stripe->paymentIntents->retrieve($paymentIntentId);
            return $paymentIntent;
        }

        // Create a new payment intent
        $paymentIntent = $this->stripeService->createPaymentIntent($order, $paymentMethod);

        // Confirm the payment intent based on payment method
        if ($paymentMethodId) {
            if (in_array($paymentMethod, ['apple_pay', 'google_pay'])) {
                // Digital wallets: PaymentIntent is confirmed client-side, so just return it
                return $paymentIntent;
            } else {
                // Card payment: Confirm server-side
                $paymentIntent = $this->stripeService->confirmPaymentIntent(
                    $paymentIntent->id,
                    $paymentMethodId
                );
            }
        }

        return $paymentIntent;
    }
    public function success()
    {
        return view('checkout.success');
    }
}
