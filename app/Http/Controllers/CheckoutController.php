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
        return view('checkout.checkout', compact('cart'));
    }

    public function checkoutProcess(CheckoutCreateRequest $request)
    {
        DB::beginTransaction();

        try {
            $validatedData = $request->validated();

            $cart = session()->get('cart', []);
            if (empty($cart)) {
                return redirect()->back()->with('error', 'Your cart is empty.');
            }

            $total = 0;

            foreach ($cart as $item) {
                $total += $item['original_price'] * $item['quantity'];
            }

            $shipping = $total >= 500 ? 0 : 35;
            $total = $total + $shipping;

            // Create Order
            $order = Order::create([
                'customer_id' => Auth::user()->id,
                'order_number' => 'ORD-' . rand(100000, 999999),
                'order_date' => now(),
                'shipping_status' => Order::$SHIPPING_STATUS_PENDING,
                'shipping_cost' => $shipping,
                'tax_amount' => 0,
                'total_amount' => $total,
                'discount_amount' => 0,
                'shipping_address' => $validatedData['shipping_address'],
                'billing_address' => $validatedData['billing_address'],
            ]);

            // Create Order Items
            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'diamond_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['original_price'],
                    'subtotal' => $item['original_price'] * $item['quantity'],
                ]);
            }

            // PayPal Payment Creation
            $approvalLink = $this->stripeService->createPaymentIntent($order, $total);

            // Send Order Confirmation Email
            // Mail::to($validatedData['shipping_address']['email'])->send(new OrderConfirmationEmail($order));

            // Clear the cart
            session()->forget('cart');
            return redirect($approvalLink);

            DB::commit();

            return view('checkout.checkout', compact('total'));
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create order: ' . $e->getMessage());
        }
    }

    public function complete(Request $request)
    {
        try {
            $paymentIntent = $request->payment_intent;

            // Verify the payment intent with Stripe
            $stripe = new \Stripe\StripeClient(config('app.stripe.secret'));
            $intent = $stripe->paymentIntents->retrieve($paymentIntent);

            if ($intent->status !== 'succeeded') {
                throw new \Exception('Payment was not successful.');
            }

            // Update order status
            $order = Order::where('payment_intent_id', $paymentIntent)->first();
            if (!$order) {
                throw new \Exception('Order not found.');
            }

            DB::transaction(function () use ($order, $intent) {
                $order->update([
                    'payment_status' => Order::$PAYMENT_STATUS_COMPLETED,
                    'status' => 'processing'
                ]);

                // Create payment record
                Payment::create([
                    'order_id' => $order->id,
                    'payment_method' => $intent->payment_method_types[0],
                    'payment_status' => Payment::$PAYMENT_STATUS_COMPLETED,
                    'transaction_id' => $intent->id,
                    'payment_amount' => $order->total_amount,
                    'currency' => 'USD',
                    'payment_details' => json_encode($intent),
                ]);
            });

            // Clear the cart
            session()->forget('cart');

            return redirect()->route('checkout.success')->with('success', 'Payment completed successfully!');
        } catch (\Exception $e) {
            return redirect()->route('checkout.cancel')->with('error', $e->getMessage());
        }
    }

    public function success(Request $request)
    {
        return view('checkout.success', ['message' => 'Payment completed successfully.']);
    }

    public function cancel()
    {
        return view('checkout.cancel', ['message' => 'You cancelled the payment.']);
    }
}
