<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
    // Store Customer
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|unique:customers,phone',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()],  422);
        }
        DB::beginTransaction();

        try {
            $customer = Customer::create(
                [
                    'first_name' => $request->full_name,
                    'phone' => $request->country_code . $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]
            );

            DB::commit();

            // Send the welcome email
            Mail::to($customer->email)->send(new WelcomeMail($customer));

            return redirect()->route('home')->with('success', 'Customer registered successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('home')->with('error', 'Customer registration failed');
        }
    }

    // Login Customer
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $customer = Customer::where('email', $request->email)->first();

        if (!$customer || !Hash::check($request->password, $customer->password)) {
            return redirect()->route('login')->with('error', 'Invalid Email or Password');
        }

        return redirect()->route('home')->with('success', 'Customer logged in successfully');
    }
}
