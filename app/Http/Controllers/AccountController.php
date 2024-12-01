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
        return view('account.wishlist');
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

        return redirect()->route('home')->with('success', 'Customer logged out successfully');
    }
}
