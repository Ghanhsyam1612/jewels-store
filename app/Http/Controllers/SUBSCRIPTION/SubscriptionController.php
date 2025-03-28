<?php

namespace App\Http\Controllers\SUBSCRIPTION;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\StripeClient;
use App\Models\SubscriptionPlan;
use Illuminate\Support\Facades\Auth;
use Stripe\Exception\ApiErrorException;
use Illuminate\Support\Facades\Log;
use App\Models\Customer;
use App\Models\Subscription;
use App\Jobs\SendSubscriptionEmail;

class SubscriptionController extends Controller
{
    protected $stripe;
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret_key'));
        $this->stripe = new StripeClient(config('services.stripe.secret_key'));
    }

    // Show all subscription plans
    public function index()
    {
        $plans = SubscriptionPlan::where('is_active', true)->get();
        $customer = auth('customer')->user();
        $currentSubscription = $customer ? $customer->currentSubscription() : null;
        $subscriptionPlan = SubscriptionPlan::all();
        return view('components.subscription-plan', [
            'plans' => $plans,
            'currentSubscription' => $currentSubscription,
            'subscriptionPlan' => $subscriptionPlan,
        ]);
    }

    // Checkout for subscription
    public function checkout(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:subscription_plans,id',
            'billing_cycle' => 'required|in:monthly,yearly',
        ]);

        $customer = auth('customer')->user();
        $plan = SubscriptionPlan::findOrFail($request->plan_id);

        // Check if customer already has an active subscription
        if ($customer->currentSubscription() && $customer->subscription_status === 'active') {
            return redirect()->route('subscription.manage')
                ->withErrors('You already have an active subscription. Please manage your existing subscription.');
        }

        // Create or get Stripe customer
        if (!$customer->stripe_customer_id) {
            $stripeCustomer = $this->stripe->customers->create([
                'email' => $customer->email,
                'name' => $customer->name,
                'metadata' => [
                    'user_id' => $customer->id,
                ],
            ]);

            $customer->stripe_customer_id = $stripeCustomer->id;
            $customer->save();
        }

        // Determine price ID based on billing cycle
        $priceId = $request->billing_cycle === 'monthly'
            ? $plan->stripe_price_id_monthly
            : $plan->stripe_price_id_yearly;

        try {
            // Create checkout session
            $session = $this->stripe->checkout->sessions->create([
                'customer' => $customer->stripe_customer_id,
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price' => $priceId,
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'subscription',
                'success_url' => route('subscription.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('subscription.cancel'),
                'metadata' => [
                    'user_id' => $customer->id,
                    'plan_id' => $plan->id,
                    'billing_cycle' => $request->billing_cycle,
                ],
            ]);
            return redirect($session->url);
        } catch (ApiErrorException $e) {
            Log::error('Stripe error: ' . $e->getMessage());
            return redirect()->back()->withErrors('Subscription creation failed. Please try again.');
        }
    }

    // Handle successful subscription payment
    public function success(Request $request)
    {
        $sessionId = $request->query('session_id');
        if (!$sessionId) {
            return redirect()->route('subscription.plans')
                ->withErrors('Invalid session ID. Please try again.');
        }

        try {
            $session = $this->stripe->checkout->sessions->retrieve($sessionId);

            if ($session->payment_status !== 'paid' || !$session->subscription) {
                return redirect()->route('subscription.plans')
                    ->withErrors('Payment was not successful or subscription not created. Please try again.');
            }

            $customer = Customer::findOrFail($session->metadata->user_id);
            $plan = SubscriptionPlan::findOrFail($session->metadata->plan_id);
            $subscription = $this->stripe->subscriptions->retrieve($session->subscription);

            // Check if subscription already exists to avoid duplicates
            $existingSubscription = Subscription::where('stripe_subscription_id', $subscription->id)->first();
            if (!$existingSubscription) {
                $subscriptionRecord = Subscription::create([
                    'customer_id' => $customer->id,
                    'stripe_subscription_id' => $subscription->id,
                    'stripe_customer_id' => $subscription->customer,
                    'stripe_price_id' => $subscription->items->data[0]->price->id,
                    'stripe_product_id' => $subscription->items->data[0]->price->product,
                    'plan_name' => $plan->name,
                    'plan_type' => strtolower($plan->name),
                    'billing_cycle' => $session->metadata->billing_cycle,
                    'amount' => $subscription->items->data[0]->price->unit_amount / 100,
                    'status' => $subscription->status,
                    'current_period_start' => date('Y-m-d H:i:s', $subscription->current_period_start),
                    'current_period_end' => date('Y-m-d H:i:s', $subscription->current_period_end),
                ]);

                // Dispatch the email job for subscription success
                // SendSubscriptionEmail::dispatch($customer, $subscriptionRecord, 'success', $plan);
            }

            // Update customer subscription status
            $customer->subscription_status = $subscription->status;
            $customer->subscription_plan = $plan->name;
            $customer->is_member = $subscription->status === 'active'; // Set is_member to true if subscription is active (new or renewed)
            $customer->save();

            return view('subscription.success', [
                'plan' => $plan,
                'subscription' => $subscription,
            ]);
        } catch (ApiErrorException $e) {
            Log::error('Stripe error: ' . $e->getMessage());
            return redirect()->route('subscription.plans')
                ->withErrors('There was an error processing your subscription. Please try again.');
        }
    }

    // Cancel subscription
    public function cancel()
    {
        return redirect()->route('subscription.plans')
            ->with('message', 'You have canceled the subscription process.');
    }

    // Manage subscription
    public function manage()
    {
        $customer = auth('customer')->user();
        $subscription = $customer->currentSubscription();

        if (!$subscription) {
            return redirect()->route('subscription.plans')
                ->with('message', 'You do not have an active subscription.');
        }

        try {
            $stripeSubscription = $this->stripe->subscriptions->retrieve($subscription->stripe_subscription_id);
            dd($stripeSubscription);
            return view('subscription.manage', [
                'subscription' => $subscription,
                'stripeSubscription' => $stripeSubscription,
            ]);
        } catch (ApiErrorException $e) {
            Log::error('Stripe error: ' . $e->getMessage());
            return redirect()->route('subscription.plans')
                ->withErrors('There was an error retrieving your subscription. Please try again.');
        }
    }

    // Cancel subscription
    public function cancelSubscription(Request $request)
    {
        $customer = auth('customer')->user();
        $subscription = $customer->currentSubscription();

        if (!$subscription) {
            return redirect()->route('subscription.plans')
                ->with('message', 'You do not have an active subscription to cancel.');
        }

        try {
            // Cancel at period end
            $this->stripe->subscriptions->update($subscription->stripe_subscription_id, [
                'cancel_at_period_end' => true,
            ]);

            $subscription->cancel_at_period_end = true;
            $subscription->save();

            return redirect()->route('subscription.manage')
                ->with('message', 'Your subscription has been scheduled for cancellation at the end of the billing period.');
        } catch (ApiErrorException $e) {
            Log::error('Stripe error: ' . $e->getMessage());
            return redirect()->route('subscription.manage')
                ->withErrors('There was an error canceling your subscription. Please try again.');
        }
    }

    // Resume subscription
    public function resumeSubscription(Request $request)
    {
        $customer = auth('customer')->user();
        $subscription = $customer->currentSubscription();

        if (!$subscription || !$subscription->cancel_at_period_end) {
            return redirect()->route('subscription.plans')
                ->with('message', 'You do not have a canceled subscription to resume.');
        }

        try {
            // Resume subscription
            $this->stripe->subscriptions->update($subscription->stripe_subscription_id, [
                'cancel_at_period_end' => false,
            ]);

            $subscription->cancel_at_period_end = false;
            $subscription->save();

            // Update customer is_member status
            $customer->is_member = $subscription->status === 'active'; // Set is_member to true if subscription is active after resuming
            $customer->save();

            return redirect()->route('subscription.manage')
                ->with('message', 'Your subscription has been resumed successfully.');
        } catch (ApiErrorException $e) {
            Log::error('Stripe error: ' . $e->getMessage());
            return redirect()->route('subscription.manage')
                ->withErrors('There was an error resuming your subscription. Please try again.');
        }
    }
}
