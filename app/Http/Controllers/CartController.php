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
            'name' => $request->name ?? 'Name Not Available',
            'shape' => $request->shape ?? 'Shape Not Available',
            'original_price' => $request->original_price ?? 0,
            'carat' => $request->carat ?? 'Carat Not Available',
            'cut' => $request->cut ?? 'Cut Not Available',
            'color' => $request->color ?? 'Color Not Available',
            'intensity' => $request->intensity ?? 'Intensity Not Available',
            'clarity' => $request->clarity ?? 'Clarity Not Available',
            'images' => $request->images ?? 'default_image.jpg',
            'size' => $request->size ?? 'Size Not Available',
            'sku' => $request->sku ?? 'SKU Not Available',
            'quantity' => $request->quantity ?? 1,
            'mrp' => $request->mrp ?? 0,
        ];



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

            // Recalculate totals
            $subtotal = collect($cart)->sum(function ($item) {
                return $item['original_price'] * $item['quantity'];
            });

            $shipping = $subtotal >= 500 ? 0 : 35;
            $total = $subtotal + $shipping;

            return response()->json([
                'success' => true,
                'subtotal' => number_format($subtotal, 2),
                'shipping' => $shipping == 0 ? 'Free' : number_format($shipping, 2),
                'total' => number_format($total, 2)
            ]);
        }

        return response()->json(['success' => false]);
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
