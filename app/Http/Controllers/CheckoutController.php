<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CheckoutCreateRequest;

class CheckoutController extends Controller
{
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
            // Create Payment Record (Check if payment method is provided)
            if ($request->has('payment_method')) {
                Payment::create([
                    'order_id' => $order->id,
                    'payment_method' => $validatedData['payment_method'],
                    'payment_status' => 'pending',
                    'transaction_id' => 'TRX-' . rand(100000, 999999),
                    'payment_amount' => $total,
                    'currency' => 'USD',
                    'payment_details' => json_encode($validatedData),
                ]);
            }

            // Update Order Status
            $order->update(['payment_status' => Order::$PAYMENT_STATUS_COMPLETED]);

            // Send Order Confirmation Email
            // Mail::to($validatedData['shipping_address']['email'])->send(new OrderConfirmationEmail($order));

            // Clear the cart
            session()->forget('cart');

            DB::commit();
            
            return view('checkout.checkout', compact('total'));

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create order: ' . $e->getMessage());
        }
    }
}
