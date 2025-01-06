<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class WelcomeEmailJob implements ShouldQueue
{
    use Queueable;
    public $customer;

    /**
     * Create a new job instance.
     */
    public function __construct($customer)
    {
        $this->customer = $customer;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->customer->email)->send(new WelcomeEmail($this->customer));
    }
}
