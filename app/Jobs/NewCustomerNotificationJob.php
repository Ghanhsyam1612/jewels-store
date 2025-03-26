<?php

namespace App\Jobs;

use App\Models\AdminNotification;
use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewCustomerNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function handle()
    {
        // Store the notification in the custom admin_notifications table
        AdminNotification::create([
            'title' => 'New Customer Registered',
            'message' => "A new customer {$this->customer->first_name} has registered with email {$this->customer->email}.",
            'type' => 'customer_registration',
            'customer_id' => $this->customer->id,
            'is_read' => false,
        ]);
    }
}