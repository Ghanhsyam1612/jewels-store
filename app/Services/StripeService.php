<?php

namespace App\Services;

use Stripe\Stripe;
use Stripe\PaymentIntent;

class StripeService
{
    public function __construct()
    {
        Stripe::setApiKey(config('app.stripe.secret'));
    }

    public function createPaymentIntent($amount)
    {
        // return PaymentIntent::create([
        //     'amount' => $amount * 100, // Convert to cents
        //     'currency' => 'usd',
        //     'payment_method_types' => ['card', 'apple_pay', 'google_pay'],
        //     'metadata' => [
        //         'integration_check' => 'accept_a_payment',
        //     ],
        // ]);

        return PaymentIntent::create([
            'amount' => $amount * 100,
            'currency' => 'usd',
            'payment_method_types' => ['card', 'apple_pay', 'google_pay'],
            'payment_method_options' => [
                'card' => [
                    'allowed_card_networks' => ['visa'], // Only allow Visa cards
                ],
            ],
            'metadata' => [
                'integration_check' => 'accept_a_payment',
            ],
        ]);
    }
}
