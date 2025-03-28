<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Services\DHLShippingService;

class AccountController extends Controller
{
    protected $dhlService;

    public function __construct(DHLShippingService $dhlService)
    {
        $this->dhlService = $dhlService;
    }
    // Orders
    public function orders()
    {
        $customer = auth('customer')->user();
        $orders = $customer->orders()->with('items.diamond')->get();

        $orders->each(function ($order) {
            if ($order->tracking_number) {
                try {
                    $order->trackingInfo = $this->dhlService->getShipmentStatus($order->tracking_number);
                } catch (\Exception $e) {
                    $order->trackingInfo = null;
                }
            }
        });

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

    // My Subscription
    public function mySubscription()
    {
        $customer = auth('customer')->user();
        $subscription = $customer->subscriptions();
        dd($subscription);
        return view('account.my-subscription' , compact('customer','subscription'));
    }
}
