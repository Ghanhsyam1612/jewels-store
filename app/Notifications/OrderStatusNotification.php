<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderStatusNotification extends Notification
{
    use Queueable;

    protected $order;
    protected $status;

    public function __construct($order, $status)
    {
        $this->order = $order;
        $this->status = $status;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        $statusMessage = $this->status === 'cancelled' 
            ? "Order #{$this->order->id} has been cancelled."
            : "Order #{$this->order->id} has been delivered.";

        return [
            'title' => ucfirst($this->status) . ' Order',
            'message' => $statusMessage,
            'type' => 'order_status',
            'status' => $this->status,
            'created_at' => now(),
        ];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'order_id' => $this->order->id,
            'status' => $this->status,
            'customer_name' => $this->order->customer->name,
            'total_amount' => $this->order->total_amount,
            'updated_at' => $this->order->updated_at
        ];
    }
}