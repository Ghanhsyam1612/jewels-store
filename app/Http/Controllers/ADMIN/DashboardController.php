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
        // Calculate weekly customer percentage change
        $customerPercentageChange = $lastWeek > 0 ? (($thisWeek - $lastWeek) / $lastWeek) * 100 : ($thisWeek > 0 ? 100 : 0);


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
        // Calculate weekly order percentage change
        $totalOrderPercentageChange = $lastWeek > 0 ? (($thisWeek - $lastWeek) / $lastWeek) * 100 : ($thisWeek > 0 ? 100 : 0);

        // Total Revenue 
        $totalRevenue = Order::sum('total_amount');
        $thisWeekRevenue = Order::where('created_at', '>=', Carbon::now()->startOfWeek())->sum('total_amount');
        $lastWeekRevenue = Order::whereBetween('created_at', [
            Carbon::now()->subWeek()->startOfWeek(),
            Carbon::now()->subWeek()->endOfWeek()
        ])->sum('total_amount');

        // Calculate weekly revenue percentage change
        $revenuePercentageChange = $lastWeekRevenue > 0
            ? (($thisWeekRevenue - $lastWeekRevenue) / $lastWeekRevenue) * 100
            : ($thisWeekRevenue > 0 ? 100 : 0);


        // Monthly Orders Chart Data
        $year = Carbon::now()->year;
        $monthNames = [];
        $monthlyOrderCounts = [];
        $monthlyCustomerCounts = [];

        for ($month = 1; $month <= 12; $month++) {
            $date = Carbon::createFromDate($year, $month, 1);
            $monthNames[] = $date->format('M');

            // Orders count
            $count = Order::whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->count();
            $monthlyOrderCounts[] = $count;

            // Customers count
            $customerCount = Customer::whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->count();
            $monthlyCustomerCounts[] = $customerCount;
        }

        $dailyOrders = Order::with('payments')->orderBy('created_at', 'desc')->paginate(10);


        return view('admin.dashboard', compact(
            'totalCustomers',
            'customerPercentageChange',
            'todayOrders',
            'orderPercentageChange',
            'totalOrders',
            'totalOrderPercentageChange',
            'totalRevenue',
            'revenuePercentageChange',
            'monthNames',
            'monthlyOrderCounts',
            'monthlyCustomerCounts', 
            'dailyOrders'
        ));
    }
}
