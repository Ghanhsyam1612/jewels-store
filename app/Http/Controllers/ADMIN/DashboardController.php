<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Total Customer
        $totalCustomers = Customer::count();
        $thisWeek = Customer::where('created_at', '>=', Carbon::now()->startOfWeek())->count();
        $lastWeek = Customer::whereBetween('created_at', [
            Carbon::now()->subWeek()->startOfWeek(),
            Carbon::now()->subWeek()->endOfWeek()
        ])->count();
        $percentageChange = $lastWeek > 0 ? (($thisWeek - $lastWeek) / $lastWeek) * 100 : ($thisWeek > 0 ? 100 : 0);


        // New Order
        $todayOrders = Order::whereDate('created_at', Carbon::today())->count();
        $yesterdayOrders = Order::whereDate('created_at', Carbon::yesterday())->count();
        // Calculate daily order percentage change
        $orderPercentageChange = $yesterdayOrders > 0 
            ? (($todayOrders - $yesterdayOrders) / $yesterdayOrders) * 100 
            : ($todayOrders > 0 ? 100 : 0);

        
        // Total Orders
        $totalOrders = Order::count();
        $thisWeek = Order::where('created_at', '>=', Carbon::now()->startOfWeek())->count();
        $lastWeek = Order::whereBetween('created_at', [
            Carbon::now()->subWeek()->startOfWeek(),
            Carbon::now()->subWeek()->endOfWeek()
        ])->count();
        $orderPercentageChange = $lastWeek > 0 ? (($thisWeek - $lastWeek) / $lastWeek) * 100 : ($thisWeek > 0 ? 100 : 0);

        // Total Revenue 
        $totalRevenue = Order::sum('total_amount');
        $thisWeekRevenue = Order::where('created_at', '>=', Carbon::now()->startOfWeek())->sum('total_amount');
        $lastWeekRevenue = Order::whereBetween('created_at', [
            Carbon::now()->subWeek()->startOfWeek(),
            Carbon::now()->subWeek()->endOfWeek()
        ])->sum('total_amount');

        $revenuePercentageChange = $lastWeekRevenue > 0 
            ? (($thisWeekRevenue - $lastWeekRevenue) / $lastWeekRevenue) * 100 
            : ($thisWeekRevenue > 0 ? 100 : 0);

         
        // ADD THIS NEW CODE FOR MONTHLY ORDERS CHART
        // Get current year
        $year = Carbon::now()->year;
        $monthNames = [];
        $monthlyOrderCounts = [];
        
        // Loop through all months
        for ($month = 1; $month <= 12; $month++) {
            $date = Carbon::createFromDate($year, $month, 1);
            $monthNames[] = $date->format('M');
            
            // Count orders for this month
            $count = Order::whereYear('created_at', $year)
                          ->whereMonth('created_at', $month)
                          ->count();
            
            $monthlyOrderCounts[] = $count;
        }

        // Fetch daily orders with pagination
        // $dailyOrders = Order::whereDate('created_at', Carbon::today())
        //                     ->orderBy('created_at', 'desc')
        //                     ->paginate(10); // Adjust items per page as needed

            $dailyOrders =Order::orderBy('created_at', 'asc')->paginate(10); // Fetch all data latest first

        
        return view('admin.dashboard', compact(
        'totalCustomers' , 'percentageChange' , 'todayOrders' ,'orderPercentageChange',
        'totalOrders' , 'orderPercentageChange','totalRevenue', 'revenuePercentageChange',
        'monthNames', 'monthlyOrderCounts' , 'dailyOrders'
        ));
    }
}
