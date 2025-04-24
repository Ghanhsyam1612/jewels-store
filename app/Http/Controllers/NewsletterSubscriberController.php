<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;



class NewsletterSubscriberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
        ]);

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter_subscribers,email',
           
        ]);

        if ($validator->fails()) {
            Toastr::error($validator->errors()->first(), 'Error');
            return redirect()->back();
        }

        NewsletterSubscriber::create([
            'email' => $request->email,
        ]);

        Toastr::success('Thank you for subscribing!', 'Success');
        return redirect()->route('home');
    }
}
