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

    public function process(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validate the cart
            $cart = session()->get('cart', []);
            if (empty($cart)) {
                throw new \Exception('Cart is empty');
            }

            // Calculate totals
            $total = $this->calculateTotal($cart);

            // Create order
            $order = $this->createOrder($request, $total);

            // Create order items
            $this->createOrderItems($order, $cart);

            // Create Stripe Payment Intent
            $paymentIntent = $this->stripeService->createPaymentIntent($order);

            // Confirm Payment Intent
            $this->stripeService->confirmPaymentIntent($paymentIntent->id);

            // Update order
            $order->update([
                'status' => 'processing',
                'payment_status' => Order::$PAYMENT_STATUS_COMPLETED
            ]);

            // Create payment record
            Payment::create([
                'order_id' => $order->id,
                'payment_method' => $paymentIntent->payment_method_types[0],
                'transaction_id' => $paymentIntent->id,
                'amount' => $order->total_amount,
                'status' => 'completed',
                'payment_details' => json_encode($paymentIntent->status)
            ]);

            DB::commit();
            // Clear cart
            session()->forget('cart');

            return redirect()->route('checkout.success')
                ->with('success', 'Payment completed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('checkout.cancel')
                ->with('error', $e->getMessage());
        }
    }

    public function success()
    {
        return view('checkout.success');
    }

    // Calculate Total
    private function calculateTotal($cart)
    {
        $subtotal = collect($cart)->sum(function ($item) {
            return $item['original_price'] * $item['quantity'];
        });

        $shipping = $subtotal >= 500 ? 0 : 35;
        return $subtotal + $shipping;
    }

    // Create Order
    private function createOrder($request, $total)
    {
        return Order::create([
            'user_id' => Auth::id(),
            'order_number' => 'ORD-' . uniqid(),
            'status' => 'pending',
            'payment_status' => Order::$PAYMENT_STATUS_PENDING,
            'shipping_status' => Order::$SHIPPING_STATUS_PENDING,
            'total_amount' => $total,
            'shipping_cost' => $total >= 500 ? 0 : 35,
            'shipping_address' => $request->shipping_address,
            'billing_address' => $request->billing_address,
        ]);
    }

    // Create Order Items
    private function createOrderItems($order, $cart)
    {
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['original_price'],
                'subtotal' => $item['original_price'] * $item['quantity']
            ]);
        }
    }
}
