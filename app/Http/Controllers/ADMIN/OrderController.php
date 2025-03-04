<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $totalOrders = Order::all()->count();
        $totalProcessOrder = Order::where('shipping_status' , 'processing')->count();
        $totalCompleteOrder = Order::where('shipping_status' , 'completed')->count();
        $averagePrice = Order::avg('total_amount'); 

        return view('admin.order' , compact(
            'totalOrders' , 'totalProcessOrder' , 
            'totalCompleteOrder', 'averagePrice'
        ));
    }
}
