<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Filament\Resources\OrderResource\Pages\ListOrders;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use App\Models\Order;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class OrderStats extends BaseWidget
{

    use InteractsWithPageTable;

    protected static ?string $pollingInterval = null;

    protected function getTablePage(): string
    {
        return ListOrders::class;
    }

    protected function getStats(): array
    {
        $orderData = Trend::model(Order::class)
            ->between(
                start: now()->subYear(),
                end: now(),
            )
            ->perMonth()
            ->count();

        return [
            // Stat::make('Orders', Order::count())
            //     ->chart(
            //         $orderData
            //             ->map(fn(TrendValue $value) => $value->aggregate)
            //             ->toArray()
            //     ),
            // Stat::make('Open orders', Order::whereIn('status', ['processing'])->count()),
            // Stat::make('Average price', number_format(Order::avg('total'), 2)),


            Stat::make('Orders', 1500)
            ->chart(
                $orderData
                    ->map(fn(TrendValue $value) => $value->aggregate)
                    ->toArray()
            ),
            Stat::make('Open orders', 1000),
            Stat::make('Average price', 100),
        ];
    }
}
