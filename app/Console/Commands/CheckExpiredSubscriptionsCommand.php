<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;
use App\Models\Subscription;
use App\Models\Customer;
use Carbon\Carbon;

class CheckExpiredSubscriptionsCommand extends Command
{

    protected $signature = 'subscriptions:check-expired';
    protected $description = 'Check for expired subscriptions and update customer is_member status';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Define the command's schedule.
     */
    public function schedule(Schedule $schedule)
    {
        // Schedule the command to run daily at midnight
        $schedule->command('subscriptions:check-expired')->daily();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking for expired subscriptions...');

        // Find subscriptions that are canceled and past their current_period_end
        $expiredSubscriptions = Subscription::where('status', 'canceled')
            ->where('current_period_end', '<', Carbon::now())
            ->get();

        foreach ($expiredSubscriptions as $subscription) {
            $customer = Customer::find($subscription->customer_id);
            if ($customer && $customer->is_member) {
                $customer->is_member = false;
                $customer->save();
                $this->info("Updated customer ID {$customer->id}: is_member set to false (subscription expired).");
            }
        }

        $this->info('Finished checking for expired subscriptions.');
    }
}
