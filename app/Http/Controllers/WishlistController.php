<?php

namespace App\Http\Controllers;

use App\Models\ColorDiamond;
use App\Models\Diamond;
use App\Models\NaturalDiamond;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;


class WishlistController extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // Get the logged-in user ID

        $wishlistItems = Wishlist::where('customer_id', $userId)->get();

        // Load the products related to the wishlist items
        $wishlistProducts = $wishlistItems->map(function ($item) {
            $modelClass = $item->wishlistable_type; 
            $product = $modelClass::find($item->wishlistable_id); 

            return [
                'wishlist_id' => $item->id,
                'product' => $product,
                'type' => class_basename($modelClass), 
            ];
        });


        return view('account.wishlist', compact('wishlistProducts'));
    }

    public function toggle(Request $request)
    {
        $request->validate([
            'product_type' => 'required|string',
            'id' => 'required|integer'
        ]);

        if (!Auth::guard('customer')->check()) {
            return response()->json(['status' => 'error', 'message' => 'Please login first', 'redirect' => route('account')]);
        }

        $customer = Auth::guard('customer')->user();
        $modelClass = match ($request->product_type) {
            'diamond' => Diamond::class,
            'color-diamond' => ColorDiamond::class,
            'natural-diamond' => NaturalDiamond::class,
            default => null
        };

        if (!$modelClass || !$modelClass::find($request->id)) {
            return response()->json(['status' => 'error', 'message' => 'Invalid product']);
        }

        $wishlist = Wishlist::where('customer_id', $customer->id)
            ->where('wishlistable_id', $request->id)
            ->where('wishlistable_type', $modelClass)
            ->first();

        return response()->json([
            'status' => 'success',
            'action' => $wishlist ? ($wishlist->delete() ? 'removed' : 'added') : (Wishlist::create(['customer_id' => $customer->id, 'wishlistable_id' => $request->id, 'wishlistable_type' => $modelClass]) ? 'added' : 'removed')
        ]);
    }

    public function remove($wishlistId)
    {
        if (!Auth::guard('customer')->check()) {
            return redirect()->route('account')
                ->with('error', 'Please login first');
        }

        $customer = Auth::guard('customer')->user();
        $wishlistItem = Wishlist::where('id', $wishlistId)
            ->where('customer_id', $customer->id)
            ->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            return redirect()->back()
                ->with('success', 'Product removed from wishlist');
        }

        return redirect()->back()
            ->with('error', 'Wishlist item not found');
    }
}
