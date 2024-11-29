<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function orders()
    {
        return view('account.orders');
    }

    public function wishlist()
    {
        return view('account.wishlist');
    }

    public function addresses()
    {
        return view('account.addresses');
    }

    public function details()
    {
        return view('account.details');
    }

    public function logout()
    {
        return view('account.logout');
    }
}
