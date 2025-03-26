<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewSubscriptionNotification extends Notification
{
    use Queueable;

    protected $subscription;
    protected $customer;

    public function __construct($subscription, $customer)
    {
        $this->subscription = $subscription;
        $this->customer = $customer;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'New Subscription',
            'message' => "{$this->customer->name} has subscribed to {$this->subscription->plan->name} plan.",
            'type' => 'subscription',
            'created_at' => now(),
        ];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'subscription_id' => $this->subscription->id,
            'plan_name' => $this->subscription->plan->name,
            'customer_id' => $this->customer->id,
            'customer_name' => $this->customer->name,
            'start_date' => $this->subscription->start_date,
            'end_date' => $this->subscription->end_date,
        ];
    }
}