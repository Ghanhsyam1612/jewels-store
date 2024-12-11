<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add to Cart
    public function addToCart(Request $request)
    {
        // session()->forget('cart');

        $cart = session()->get('cart', []);


        // Replace the item or add it if it doesn't exist
        $cart[$request->id] = [
            'id' => $request->id,
            'images' => $request->images,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'original_price' => $request->original_price,
            'mrp' => $request->mrp,
        ];

        // dd($cart);

        // Save the updated cart back into the session
        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Item added to cart successfully');
    }

    // Cart Page
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('cart.cart', compact('cart'));
    }

    // Update Cart
    public function updateCart(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully');
    }

    // Remove from Cart
    public function removeFromCart(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Item removed from cart successfully');
    }
}
