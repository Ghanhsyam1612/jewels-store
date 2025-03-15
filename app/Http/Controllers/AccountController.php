<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    // Orders
    public function orders()
    {
        return view('account.orders');
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
