<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalCustomers = Customer::count();
        $newOrders = Order::count();
        $totalRevenue = Order::sum('total_amount');

        return [
            // Total Customers
            Stat::make('Total Customers', $totalCustomers)
                ->description('7 Days')
                ->descriptionIcon(Customer::iconForCustomerCount($totalCustomers))
                ->chart(
                    Customer::selectRaw('COUNT(*) as count')
                        ->whereDate('created_at', '>=', now()->subDays(7))
                        ->groupBy('created_at')
                        ->orderBy('created_at')
                        ->pluck('count')
                        ->toArray()
                ),
                
            // New Orders
            Stat::make('New Orders', $newOrders)
                ->description('7 Days')
                ->descriptionIcon(Order::iconForNewOrderCount($newOrders))
                ->chart(
                    Order::selectRaw('COUNT(*) as count')
                        ->whereDate('created_at', '>=', now()->subDays(7))
                        ->groupBy('created_at')
                        ->orderBy('created_at')
                        ->pluck('count')
                        ->toArray()
                ),

               
            // Total Orders
            Stat::make('Total Orders', Order::count())
                ->description('7 Days')
                ->descriptionIcon(Order::iconForTotalOrderCount(Order::count()))
                ->chart(
                    Order::selectRaw('COUNT(*) as count')
                        ->whereDate('created_at', '>=', now()->subDays(7))
                        ->groupBy('created_at')
                        ->orderBy('created_at')
                        ->pluck('count')
                        ->toArray()
                ),
            // Total Revenue
            Stat::make('Total Revenue', '$' . number_format($totalRevenue, 2, '.', ','))
                ->description('7 Days')
                ->descriptionIcon(Order::iconForTotalRevenue($totalRevenue))
                ->chart(
                    Order::selectRaw('SUM(total_amount) as total_amount')
                        ->whereDate('created_at', '>=', now()->subDays(7))
                        ->groupBy('created_at')
                        ->orderBy('created_at')
                        ->pluck('total_amount')
                        ->toArray()
                ),
                
        ];
    }
}
