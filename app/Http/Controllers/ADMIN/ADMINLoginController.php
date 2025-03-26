<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ADMINLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required.',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('toast', [
                'type' => 'error',
                'message' => 'Email not registered.',
            ]);
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('toast', [
                'type' => 'error',
                'message' => 'Invalid password.',
            ]);
        }

        // Log in using the 'web' guard for admin users
        Auth::guard('web')->login($user, $request->has('remember'));

        return redirect()->route('admin.dashboard')->with('toast', [
            'type' => 'success',
            'message' => 'Login successful!',
        ]);
    }

    // public function logout()
    // {
    //     Auth::guard('web')->logout();
    //     return redirect()->route('admin.login')->with('toast', [
    //         'type' => 'success',
    //         'message' => 'Logout successful!',
    //     ]);
    // }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth('web')->id(),
            'password' => 'nullable|string|min:8|confirmed'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $user = auth('web')->user();
            $user->name = $request->name;
            $user->email = $request->email;

            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }

            $user->save();

            return response()->json([
                'success' => true,
                'message' => 'Profile updated successfully',
                'user' => [
                    'name' => $user->name,
                    'email' => $user->email
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating profile',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
