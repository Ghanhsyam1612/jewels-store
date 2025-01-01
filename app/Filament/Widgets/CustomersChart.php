<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use Filament\Widgets\ChartWidget;

class CustomersChart extends ChartWidget
{
    protected static ?string $heading = 'Total Customers';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        // $customersPerMonth = Customer::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
        //     ->whereYear('created_at', date('Y'))
        //     ->groupBy('month')
        //     ->orderBy('month')
        //     ->pluck('count')
        //     ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Customers',
                    'data' => [4344, 5676, 6798, 7890, 8987, 9388, 10343, 10524, 13664, 14345, 15753, 17332],
                    // 'data' => array_pad($customersPerMonth, 12, 0), // Pad with zeros for months with no customers
                    'fill' => 'start',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
