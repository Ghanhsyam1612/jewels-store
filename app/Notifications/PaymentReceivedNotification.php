<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentReceivedNotification extends Notification
{
    use Queueable;

    protected $payment;
    protected $order;

    public function __construct($payment, $order)
    {
        $this->payment = $payment;
        $this->order = $order;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'Payment Received',
            'message' => "Payment of $this->payment->amount received for order #$this->order->id",
            'type' => 'payment',
            'created_at' => now(),
        ];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'payment_id' => $this->payment->id,
            'order_id' => $this->order->id,
            'amount' => $this->payment->amount,
            'payment_method' => $this->payment->payment_method,
            'transaction_id' => $this->payment->transaction_id,
            'customer_name' => $this->order->customer->name,
            'created_at' => $this->payment->created_at
        ];
    }
}