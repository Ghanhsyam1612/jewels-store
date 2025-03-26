<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\AdminNotification;
use Illuminate\Support\Facades\Log;

class NewCustomerNotification extends Notification
{
    use Queueable;

    protected $customer;

    public function __construct($customer)
    {
        $this->customer = $customer;
    }

    public function handle()
    {
        // Store the notification in the custom admin_notifications table
        Log::info('Storing new customer notification for customer: ' . $this->customer->id);
        AdminNotification::create([
            'title' => 'New Customer Registered',
            'message' => "A new customer {$this->customer->first_name} has registered with email {$this->customer->email}.",
            'type' => 'customer_registration',
            'customer_id' => $this->customer->id,
            'is_read' => false,
        ]);
    }
}
