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
class CheckoutController extends Controller
{
    protected $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        $total = $this->calculateTotal($cart);
        return view('checkout.checkout', compact('cart', 'total'));
    }

    public function checkoutProcess(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:card,apple_pay,google_pay',
            'payment_method_id' => 'required_if:payment_method,card|string',
            'full_name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|string',
            'country' => 'required|string',
        ]);

        try {
            DB::beginTransaction();

            // Validate cart
            $cart = session()->get('cart', []);
            if (empty($cart)) {
                throw new \Exception('Cart is empty');
            }

            // Calculate total
            $total = $this->calculateTotal($cart);


            // Create order
            $order = $this->createOrder($request, $total);

            // Create order items
            $this->createOrderItems($order, $cart);

            // Process payment based on payment method
            $paymentIntent = $this->processPayment($request, $order);
            

            // Update order status
            $order->update([
                'shipping_status' => Order::$SHIPPING_STATUS_PROCESSING,
                'payment_status' => Order::$PAYMENT_STATUS_COMPLETED
            ]);

            // Record payment details
            $this->stripeService->recordPayment($order, $paymentIntent);

            DB::commit();

            // Clear cart
            session()->forget('cart');

            return redirect()->route('checkout.success')->with('success', 'Payment completed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Checkout Error: ' . $e->getMessage());
            return back()->withErrors(['payment' => $e->getMessage()])->withInput();
        }
    }

    private function processPayment(Request $request, Order $order)
    {
        switch ($request->input('payment_method')) {
            case 'card':
                // Create and confirm Payment Intent for card payments
                $paymentIntent = $this->stripeService->createPaymentIntent($order);
                return $this->stripeService->confirmPaymentIntent(
                    $paymentIntent->id,
                    $request->input('payment_method_id')
                );

            case 'apple_pay':
            case 'google_pay':
                // Create Payment Intent for digital wallets
                $paymentIntent = $this->stripeService->createPaymentIntent($order, $request->input('payment_method'));
                return $paymentIntent;

            default:
                throw new \Exception('Invalid payment method');
        }
    }

    // Calculate Total
    private function calculateTotal($cart)
    {
        $subtotal = collect($cart)->sum(function ($item) {
            return $item['original_price'] * $item['quantity'];
        });

        $shipping = $subtotal >= 500 ? 0 : 35;
        $total = $subtotal + $shipping;

        return $total;
    }


    // Create Order
    private function createOrder($request, $total)
    {
    
        $order = Order::create([
            'customer_id' => Auth::id() ? Auth::id() : Customer::create([
                'first_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
            ])->id,
            'order_number' => 'ORD-' . uniqid(),
            'order_date' => now(),
            'payment_status' => Order::$PAYMENT_STATUS_PENDING,
            'shipping_status' => Order::$SHIPPING_STATUS_PENDING,
            'total_amount' => $total,
            'coupon_code' => $request->coupon_code ?? null,
            'shipping_cost' => $total >= 500 ? 0 : 35,
            'shipping_address' => $request->shipping_address,
            'billing_address' => $request->billing_address,
        ]);
        return $order;
    }

    // Create Order Items
    private function createOrderItems($order, $cart)
    {
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'diamond_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['original_price'],
                'subtotal' => $item['original_price'] * $item['quantity']
            ]);
        }
    }

    // Success
    public function success()
    {
        return view('checkout.success');
    }
}
