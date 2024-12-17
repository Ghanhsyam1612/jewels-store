<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {

        $cart = session()->get('cart', []);
        return view('checkout.checkout', compact('cart'));
    }

    public function checkoutProcess(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|string',
            'country' => 'required|string',
            'payment_method' => 'required|in:bank_transfer,card,paypal',
        ]);
        $cart = session()->get('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['original_price'] * $item['quantity'];
        }
        $shipping = $total >= 500 ? 0 : 35;
        $total = $total + $shipping;

        try {
            $order = Order::create([
                'customer_id' => Auth::user()->id,
                'order_number' => 'ORD-' . rand(100000, 999999),
                'subtotal' => $total,
                'shipping_cost' => $shipping,
                'total' => $total,
                'shipping_status' => 'pending',
                'payment_status' => 'pending',
                'payment_method' => $validatedData['payment_method'],
                'full_name' => $validatedData['full_name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'address' => $validatedData['address'],
                'city' => $validatedData['city'],
                'state' => $validatedData['state'],
                'zip' => $validatedData['zip'],
                'country' => $validatedData['country'],
            ]);

            // Create Order Items
            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'diamond_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['original_price'],
                ]);
            }
            // Create Payment Record
            Payment::create([
                'order_id' => $order->id,
                'payment_method' => $validatedData['payment_method'],
                'transaction_id' => 'TRX-' . rand(100000, 999999),
                'amount' => $total,
                'status' => 'pending',
                'payment_details' => json_encode($validatedData),
            ]);

            session()->forget('cart');
            DB::commit();
            return view('checkout.checkout', compact('total'));
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create order: ' . $e->getMessage());
        }
    }
}
