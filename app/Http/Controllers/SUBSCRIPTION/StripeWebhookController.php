<?php

namespace App\Http\Controllers\SUBSCRIPTION;

use App\Http\Controllers\Controller;
use App\Jobs\SendOrderInvoiceJob;
use Illuminate\Http\Request;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;
use Illuminate\Support\Facades\Log;
use App\Models\Customer;
use App\Models\Subscription;
use App\Jobs\SendSubscriptionEmail;
use App\Models\Order;
use App\Services\StripeService;
use Carbon\Carbon;

class StripeWebhookController extends Controller
{
    protected $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    // Handle webhook
    public function handleWebhook(Request $request)
    {
        $payload = $request->getContent();
        $sig_header = $request->header('Stripe-Signature');
        $endpoint_secret = config('services.stripe.webhook_secret');

        try {
            $event = Webhook::constructEvent($payload, $sig_header, $endpoint_secret);
        } catch (SignatureVerificationException $e) {
            Log::error('Webhook signature verification failed: ' . $e->getMessage());
            return response()->json(['error' => 'Webhook signature verification failed'], 400);
        }

        switch ($event->type) {
            // Subscription Events
            case 'customer.subscription.created':
                $this->handleSubscriptionCreated($event->data->object);
                break;
            case 'customer.subscription.updated':
                $this->handleSubscriptionUpdated($event->data->object);
                break;
            case 'customer.subscription.deleted':
                $this->handleSubscriptionDeleted($event->data->object);
                break;
            case 'invoice.payment_succeeded':
                $this->handleInvoicePaymentSucceeded($event->data->object);
                break;
            case 'invoice.payment_failed':
                $this->handleInvoicePaymentFailed($event->data->object);
                break;

             // Checkout Events
             case 'payment_intent.succeeded':
                $this->handlePaymentIntentSucceeded($event->data->object);
                break;
            case 'payment_intent.payment_failed':
                $this->handlePaymentIntentFailed($event->data->object);
                break;

            default:
                Log::info('Unhandled event type: ' . $event->type);
        }

        return response()->json(['status' => 'success']);
    }

    // Handle subscription created
    protected function handleSubscriptionCreated($subscriptionData)
    {
        Log::info('Subscription created: ' . $subscriptionData->id);
        $subscription = Subscription::where('stripe_subscription_id', $subscriptionData->id)->first();

        if (!$subscription) {
            $customer = Customer::where('stripe_customer_id', $subscriptionData->customer)->first();
            if ($customer) {
                $subscription = Subscription::create([
                    'customer_id' => $customer->id,
                    'stripe_subscription_id' => $subscriptionData->id,
                    'stripe_customer_id' => $subscriptionData->customer,
                    'stripe_price_id' => $subscriptionData->items->data[0]->price->id,
                    'stripe_product_id' => $subscriptionData->items->data[0]->price->product,
                    'plan_name' => null,
                    'plan_type' => null,
                    'billing_cycle' => $subscriptionData->items->data[0]->price->recurring->interval,
                    'amount' => $subscriptionData->items->data[0]->price->unit_amount / 100,
                    'status' => $subscriptionData->status,
                    'current_period_start' => date('Y-m-d H:i:s', $subscriptionData->current_period_start),
                    'current_period_end' => date('Y-m-d H:i:s', $subscriptionData->current_period_end),
                ]);

                // Update customer
                $customer->subscription_status = $subscriptionData->status;
                $customer->is_member = $subscriptionData->status === 'active'; // Set is_member to true if subscription is active
                $customer->save();
            } else {
                Log::warning('Customer not found for subscription: ' . $subscriptionData->id);
            }
        } else {
            Log::info('Subscription already exists: ' . $subscriptionData->id);
        }
    }

    // Handle subscription updated
    protected function handleSubscriptionUpdated($subscriptionData)
    {
        $subscription = Subscription::where('stripe_subscription_id', $subscriptionData->id)->first();

        if (!$subscription) {
            Log::warning('Subscription not found for update: ' . $subscriptionData->id);
            return;
        }

        $oldStatus = $subscription->status;
        $newStatus = $subscriptionData->status;

        $subscription->status = $newStatus;
        $subscription->current_period_start = date('Y-m-d H:i:s', $subscriptionData->current_period_start);
        $subscription->current_period_end = date('Y-m-d H:i:s', $subscriptionData->current_period_end);
        $subscription->cancel_at_period_end = $subscriptionData->cancel_at_period_end;

        if ($subscriptionData->canceled_at) {
            $subscription->canceled_at = date('Y-m-d H:i:s', $subscriptionData->canceled_at);
        }

        $subscription->save();

        // Update user subscription status
        $customer = Customer::find($subscription->customer_id);
        if ($customer) {
            $customer->subscription_status = $newStatus;

            // Check if subscription has ended (canceled and past the current_period_end)
            $currentPeriodEnd = Carbon::parse($subscription->current_period_end);
            $isSubscriptionEnded = $newStatus === 'canceled' && $currentPeriodEnd->isPast();

            // Set is_member based on subscription status and whether it has ended
            $customer->is_member = $newStatus === 'active' && !$isSubscriptionEnded;
            $customer->save();

            // If status changed from active to canceled, notify user
            // if ($oldStatus === 'active' && $newStatus === 'canceled') {
            //     SendSubscriptionEmail::dispatch($customer, $subscription, 'canceled');
            // }

            // If approaching expiration (7 days before), send reminder
            $expirationDate = \Carbon\Carbon::createFromTimestamp($subscriptionData->current_period_end);
            $now = \Carbon\Carbon::now();
            $daysUntilExpiration = $now->diffInDays($expirationDate);

            // if ($daysUntilExpiration <= 7 && $subscriptionData->cancel_at_period_end) {
            //     SendSubscriptionEmail::dispatch($customer, $subscription, 'expiring', null, [
            //         'daysUntilExpiration' => $daysUntilExpiration,
            //     ]);
            // }
        }
    }

    // Handle subscription deleted
    protected function handleSubscriptionDeleted($subscriptionData)
    {
        $subscription = Subscription::where('stripe_subscription_id', $subscriptionData->id)->first();

        if (!$subscription) {
            Log::warning('Subscription not found for deletion: ' . $subscriptionData->id);
            return;
        }

        $subscription->status = 'canceled';
        $subscription->canceled_at = date('Y-m-d H:i:s', $subscriptionData->canceled_at ?? time());
        $subscription->save();

        // Update user subscription status
        $customer = Customer::find($subscription->customer_id);
        if ($customer) {
            $customer->subscription_status = 'canceled';
            $customer->is_member = false; // Subscription is deleted, so customer is no longer a member
            $customer->save();

            // Notify user
            // SendSubscriptionEmail::dispatch($customer, $subscription, 'canceled');
        }
    }

    // Handle invoice payment succeeded
    protected function handleInvoicePaymentSucceeded($invoiceData)
    {
        if (!isset($invoiceData->subscription)) {
            return;
        }

        $subscription = Subscription::where('stripe_subscription_id', $invoiceData->subscription)->first();

        if (!$subscription) {
            Log::warning('Subscription not found for invoice payment: ' . $invoiceData->subscription);
            return;
        }

        // Update subscription status if needed
        if ($subscription->status !== 'active') {
            $subscription->status = 'active';
            $subscription->save();

            // Update user subscription status
            $customer = Customer::find($subscription->customer_id);
            if ($customer) {
                $customer->subscription_status = 'active';
                $customer->is_member = true; // Successful payment means customer is a member
                $customer->save();
            }
        }
    }

    // Handle invoice payment failed
    protected function handleInvoicePaymentFailed($invoiceData)
    {
        if (!isset($invoiceData->subscription)) {
            return;
        }

        $subscription = Subscription::where('stripe_subscription_id', $invoiceData->subscription)->first();

        if (!$subscription) {
            Log::warning('Subscription not found for invoice payment failure: ' . $invoiceData->subscription);
            return;
        }

        // Update subscription status
        $subscription->status = 'past_due';
        $subscription->save();

        // Update user subscription status
        $customer = Customer::find($subscription->customer_id);
        if ($customer) {
            $customer->subscription_status = 'past_due';
            $customer->is_member = false; // Payment failed, so customer is no longer a member
            $customer->save();

            // Notify user
            // SendSubscriptionEmail::dispatch($customer, $subscription, 'failed');
        }
    }

    // Checkout Handlers
    protected function handlePaymentIntentSucceeded($paymentIntent)
    {
        $orderId = $paymentIntent->metadata->order_id;
        $order = Order::find($orderId);

        if (!$order) {
            Log::warning("Order not found for PaymentIntent: {$paymentIntent->id}");
            return;
        }

        if ($order->payment_status === Order::$PAYMENT_STATUS_COMPLETED) {
            Log::info("Payment already processed for order: {$orderId}");
            return;
        }

        $order->update(['payment_status' => Order::$PAYMENT_STATUS_COMPLETED]);
        $this->stripeService->recordPayment($order, $paymentIntent);

        session()->forget(['cart', 'shipping']);
        SendOrderInvoiceJob::dispatch($order);

        Log::info("Payment succeeded for order: {$orderId}");
    }

    protected function handlePaymentIntentFailed($paymentIntent)
    {
        $orderId = $paymentIntent->metadata->order_id;
        $order = Order::find($orderId);

        if (!$order) {
            Log::warning("Order not found for PaymentIntent: {$paymentIntent->id}");
            return;
        }

        $order->update(['payment_status' => Order::$PAYMENT_STATUS_FAILED]);
        $this->stripeService->recordPayment($order, $paymentIntent);

        Log::info("Payment failed for order: {$orderId}");
    }
}
