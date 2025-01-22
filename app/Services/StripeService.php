<?php

namespace App\Services;

use App\Models\Order;

class StripeService
{
    // Create Payment Intent
    public function createPaymentIntent(Order $order)
    {
        $stripe = new \Stripe\StripeClient(config('services.stripe.stripe_secret_key'));

        return $stripe->paymentIntents->create([
            'amount' => $order->total_amount * 100,
            'currency' => 'usd',
            'payment_method_types' => ['card', 'apple_pay', 'google_pay'],
            'payment_method_options' => [
                'card' => [
                    'allowed_card_networks' => ['visa'],
                ],
            ],
            'customer' => $stripe->customers->create([
                'name' => $order->user->name,
                'email' => $order->user->email,
            ])->id,
            'metadata' => [
                'order_id' => $order->id,
                'order_number' => $order->order_number,
            ],
        ]);
    }

    // Confirm Payment Intent
    public function confirmPaymentIntent($paymentIntentId)
    {
        $stripe = new \Stripe\StripeClient(config('services.stripe.stripe_secret_key'));
        return $stripe->paymentIntents->confirm($paymentIntentId, [
            'return_url' => route('checkout.success'),
        ]);
    }
    
    // Get Payment Intent
    public function getPaymentIntent($paymentIntentId)
    {
        $stripe = new \Stripe\StripeClient(config('services.stripe.stripe_secret_key'));
        return $stripe->paymentIntents->retrieve($paymentIntentId);
    }

    // Cancel Payment Intent
    public function cancelPaymentIntent($paymentIntentId)
    {
        $stripe = new \Stripe\StripeClient(config('services.stripe.stripe_secret_key'));
        return $stripe->paymentIntents->cancel($paymentIntentId);
    }

    // // Refund Payment Intent
    // public function refundPaymentIntent($paymentIntentId)
    // {
    //     $stripe = new \Stripe\StripeClient(config('services.stripe.stripe_secret_key'));
    //     return $stripe->paymentIntents->refund($paymentIntentId);
    // }
}
