<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Order;

class DHLShipmentStatusNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $order;
    protected $trackingInfo;

    public function __construct(Order $order, array $trackingInfo)
    {
        $this->order = $order;
        $this->trackingInfo = $trackingInfo;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        $latestEvent = $this->trackingInfo['shipmentEvents'][0] ?? null;
        $trackingUrl = config('services.dhl.tracking_url') . $this->order->tracking_number;

        return (new MailMessage)
            ->subject('Order Shipment Update - ' . $this->order->order_number)
            ->greeting('Hello ' . $notifiable->first_name . '!')
            ->line('We have an update about your order #' . $this->order->order_number)
            ->when($latestEvent, function ($message) use ($latestEvent) {
                return $message->line('Status: ' . $latestEvent['description'])
                    ->line('Location: ' . $latestEvent['location'])
                    ->line('Time: ' . $latestEvent['timestamp']);
            })
            ->action('Track Your Order', $trackingUrl)
            ->line('Thank you for shopping with us!');
    }

    public function toDatabase($notifiable)
    {
        $latestEvent = $this->trackingInfo['shipmentEvents'][0] ?? null;

        return [
            'order_id' => $this->order->id,
            'order_number' => $this->order->order_number,
            'tracking_number' => $this->order->tracking_number,
            'status' => $latestEvent ? $latestEvent['description'] : null,
            'location' => $latestEvent ? $latestEvent['location'] : null,
            'timestamp' => $latestEvent ? $latestEvent['timestamp'] : null,
        ];
    }
}