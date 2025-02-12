<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\ChartWidget;

class OrderChart extends ChartWidget
{
    protected static ?string $heading = 'Order per Month';

    protected static ?int $sort = 1;

    protected function getType(): string
    {
        return 'bar';
    }


    protected function getData(): array
    {
        $ordersPerMonth = Order::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count')
            ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Orders',
                    // 'data' => [2433, 3454, 4566, 3300, 5545, 5765, 6787, 8767, 7565, 8576, 9686, 8996],
                    'data' => array_pad($ordersPerMonth, 12, 0), // Pad with zeros for months with no orders
                    'fill' => 'start',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    
}
