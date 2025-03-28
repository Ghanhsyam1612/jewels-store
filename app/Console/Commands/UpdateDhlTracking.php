<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use App\Services\DHLShippingService;
use Illuminate\Support\Facades\Log;

class UpdateDhlTracking extends Command
{
    protected $signature = 'dhl:track';
    protected $description = 'Update tracking status for DHL shipments';

    protected $dhlService;

    public function __construct(DHLShippingService $dhlService)
    {
        parent::__construct();
        $this->dhlService = $dhlService;
    }

    public function handle()
    {
        $orders = Order::where('carrier', 'DHL')
            ->whereNotNull('tracking_number')
            ->whereIn('shipping_status', ['shipped'])
            ->get();

        foreach ($orders as $order) {
            try {
                $trackingInfo = $this->dhlService->getShipmentStatus($order->tracking_number);
                if ($trackingInfo['status'] === 'Delivered') {
                    $order->update(['shipping_status' => 'completed']);
                }
                $this->info("Updated tracking for order #{$order->order_number}: {$trackingInfo['status']}");
            } catch (\Exception $e) {
                Log::error('DHL Tracking Update Error', [
                    'order_id' => $order->id,
                    'error' => $e->getMessage(),
                ]);
            }
        }
    }
}