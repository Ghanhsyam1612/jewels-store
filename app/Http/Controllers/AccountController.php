<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Order;
class AccountController extends Controller
{
    // Orders
    public function orders()
    {
        $customer = auth('customer')->user();
        $orders = $customer->orders()->with('items.diamond')->get();
        
        return view('account.orders', compact('orders'));
    }

    public function orderDetails($id)
    {
        // Find the order and eager load the necessary relationships
        $order = Order::with(['orderItems.diamond'])->findOrFail($id);
        
        // Check if this is an AJAX request
        if (request()->ajax() || request()->header('X-Requested-With') == 'XMLHttpRequest') {
            return response()->json($order);
        }
        
        // For non-AJAX requests, return the normal view
        return view('account.orders', compact('order'));
    }

    // Wishlist
    public function wishlist()
    {
        $customer = auth('customer')->user();
        $wishlists = $customer->wishlists;
        return view('account.wishlist', compact('wishlists'));
    }

    // Account Details
    public function details()
    {
        $customer = auth('customer')->user();
        return view('account.details', compact('customer'));
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toastr()->success('logged out successfully');

        return redirect()->route('account');
    }
}
