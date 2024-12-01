<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{

    //index
    public function index()
    {
        return view('components.register');
    }

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


    // Update Customer Details
    public function updateDetails(Request $request)
    {
        $customer = auth('customer')->user();

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'current_password' => 'nullable',
            'new_password' => 'nullable|min:6|confirmed',
        ]);

        // Update basic details
        $customer->first_name = $validatedData['first_name'];
        $customer->last_name = $validatedData['last_name'];
        $customer->email = $validatedData['email'];

        // Password update logic
        if ($request->filled('new_password')) {
            // Check current password
            if (!Hash::check($request->current_password, $customer->password)) {
                return back()->withErrors(['current_password' => 'Current password is incorrect']);
            }

            $customer->password = Hash::make($validatedData['new_password']);
        }

        $customer->update();

        return back()->with('success', 'Account details updated successfully');
    }

    // Login Index
    public function loginIndex()
    {
        return view('components.login');
    }

    // Login Customer
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Customer logged in successfully');
        }

        return redirect()->route('account')->with('error', 'Invalid Email or Password');
    }
}
