<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use App\Jobs\PasswordResetJob;
use App\Jobs\PasswordResetSuccessfullyJob;

use App\Jobs\WelcomeEmailJob;


class CustomerController extends Controller
{
    // Store New Customer
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|unique:customers,phone',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            toastr()->error($validator->errors()->first());
            return redirect()->back();
        }

        DB::beginTransaction();

        try {
            $customer = Customer::create(
                [
                    'first_name' => $request->full_name,
                    'phone' => $request->countryCode . $request->phone,
                    'email' => $request->email,
                    'is_email_verified' => true,
                    'password' => Hash::make($request->password),
                ]
            );

            DB::commit();

            // Send the welcome email
            WelcomeEmailJob::dispatch($customer);

            toastr()->success('Customer registered successfully');

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error('Something went wrong! Please try again.');
            return redirect()->back();
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

        // Update Password
        if ($request->filled('new_password')) {
            if (!Hash::check($request->current_password, $customer->password)) {
                toastr()->error('Current password is incorrect');
                return back();
            }
            $customer->password = Hash::make($validatedData['new_password']);
        }

        $customer->update();

        toastr()->success('Account details updated successfully');
        return back();
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
            toastr()->success('Customer logged in successfully');
            return redirect()->route('home');
        }

        toastr()->error('Invalid Email or Password');
        return redirect()->route('account');
    }

    // Password Reset 
    public function passwordReset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:customers,email'
        ]);

        // Check if user exists
        $user = Customer::where('email', $request->email)->first();


        if (!$user) {
            return back()->withErrors(['email' => 'Email not found in our records.']);
        }

        // Delete any existing tokens for this email
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        PasswordResetJob::dispatch($request->email);


        return response()->json(['success' => 'Password reset link has been sent to your email']);
    }

    // Show Password Reset Form
    public function showResetForm($token)
    {

        $resetRequest = DB::table('password_reset_tokens')->where('token', $token)->first();

        if (!$resetRequest || Carbon::parse($resetRequest->created_at)->addMinutes(2)->isPast()) {
            return response()->json(['error' => 'Invalid or expired token.'], 400);
        }


        return view('account.password-reset-form', ['token' => $token, 'email' => $resetRequest->email]);
    }

    // Update Password
    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email|exists:customers,email',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $resetRequest = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$resetRequest) {
            return response()->json(['error' => 'Invalid token or email.'], 400);
        }

        // Update Password
        Customer::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        // Delete Reset Token
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        // Send Password Reset Successfully Email
        PasswordResetSuccessfullyJob::dispatch($request->email);

        toastr()->success('Password updated successfully');
        return redirect()->route('account');
    }
}
