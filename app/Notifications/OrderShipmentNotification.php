<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderShipmentNotification extends Notification
{
    use Queueable;

    protected $order;
    protected $shipmentDetails;

    public function __construct($order, $shipmentDetails)
    {
        $this->order = $order;
        $this->shipmentDetails = $shipmentDetails;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'Order Shipped',
            'message' => "Order #{$this->order->id} has been shipped via {$this->shipmentDetails['carrier']}.",
            'type' => 'shipment',
            'created_at' => now(),
        ];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'order_id' => $this->order->id,
            'carrier' => $this->shipmentDetails['carrier'],
            'tracking_number' => $this->shipmentDetails['tracking_number'],
            'estimated_delivery' => $this->shipmentDetails['estimated_delivery'],
            'customer_name' => $this->order->customer->name,
            'shipped_at' => now()
        ];
    }
}