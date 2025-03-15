<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Payment;
use Stripe\Exception\CardException;
use Stripe\StripeClient;

class StripeService
{
    protected $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(config('services.stripe.secret_key'));
    }

// Update createPaymentIntent method to properly support digital wallets
public function createPaymentIntent(Order $order, $paymentMethod = 'card')
{
    try {
        $params = [
            'amount' => $order->total_amount * 100, // Convert to cents
            'currency' => 'usd',
            'payment_method_types' => ['card'],
            'metadata' => [
                'order_id' => $order->id,
                'order_number' => $order->order_number,
            ],
        ];

        // Add digital wallet support - Fix this part
        if ($paymentMethod === 'apple_pay') {
            $params['payment_method_types'] = ['card', 'apple_pay'];
        } elseif ($paymentMethod === 'google_pay') {
            // Google Pay is processed through 'card' type in Stripe
            $params['payment_method_types'] = ['card'];
        }

        // Create the PaymentIntent
        return $this->stripe->paymentIntents->create($params);
    } catch (CardException $e) {
        throw new \Exception('Payment intent creation failed: ' . $e->getMessage());
    }
}

    public function confirmPaymentIntent($paymentIntentId, $paymentMethodId = null)
    {
        try {
            $confirmParams = $paymentMethodId
                ? ['payment_method' => $paymentMethodId]
                : [];

            // Add return URL for 3D Secure authentication
            $confirmParams['return_url'] = route('checkout.success');

            return $this->stripe->paymentIntents->confirm($paymentIntentId, $confirmParams);

        } catch (CardException $e) {
            throw new \Exception('Payment confirmation failed: ' . $e->getMessage());
        }
    }

    public function createSetupIntent()
    {
        try {
            return $this->stripe->setupIntents->create([
                'payment_method_types' => ['card'],
                'usage' => 'on_session',
            ]);
        } catch (CardException $e) {
            throw new \Exception('Setup intent creation failed: ' . $e->getMessage());
        }
    }

    public function recordPayment(Order $order, $paymentIntent)
    {
        // Get payment method type
        $paymentMethod = isset($paymentIntent->payment_method_types[0]) ? 
            $paymentIntent->payment_method_types[0] : 'card';
        
        $paymentDetails = [];

        if (isset($paymentIntent->charges->data[0]->payment_method_details)) {
            $details = $paymentIntent->charges->data[0]->payment_method_details;

            if (isset($details->card)) {
                $paymentDetails = [
                    'payment_method' => $paymentIntent->payment_method,
                    'last4' => $details->card->last4,
                    'brand' => $details->card->brand,
                    'wallet' => $details->card->wallet->type ?? null
                ];
            }
        }

        return Payment::create([
            'order_id' => $order->id,
            'payment_method' => $paymentMethod,
            'payment_status' => $paymentIntent->status == 'succeeded' ? Payment::$PAYMENT_STATUS_PAID : Payment::$PAYMENT_STATUS_FAILED,
            'transaction_id' => $paymentIntent->id,
            'payment_date' => now(),
            'payment_amount' => $order->total_amount,
            'currency' => $paymentIntent->currency,
            'payment_gateway' => 'stripe',
            'refund_status' => $paymentIntent->status == 'succeeded' ? Payment::$REFUND_STATUS_REFUNDED : Payment::$REFUND_STATUS_FAILED,
            'refund_amount' => $order->total_amount,
            'refund_date' => now(),
            'refund_reason' => $paymentIntent->status,
            'payment_details' => json_encode($paymentDetails)
        ]);
    }
}