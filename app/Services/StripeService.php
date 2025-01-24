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

            // Add digital wallet support
            if ($paymentMethod === 'apple_pay') {
                $params['payment_method_types'][] = 'apple_pay';
            }
            if ($paymentMethod === 'google_pay') {
                $params['payment_method_types'][] = 'google_pay';
            }

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

            return $this->stripe->paymentIntents->confirm($paymentIntentId, $confirmParams);
        } catch (CardException $e) {
            throw new \Exception('Payment confirmation failed: ' . $e->getMessage());
        }
    }

    public function recordPayment(Order $order, $paymentIntent)
    {
        return Payment::create([
            'order_id' => $order->id,
            'payment_method' => $paymentIntent->payment_method_types[0],
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
            'payment_details' => json_encode([
                'payment_method' => $paymentIntent->payment_method,
                'last4' => $paymentIntent->charges->data[0]->payment_method_details->card->last4 ?? null,
                'brand' => $paymentIntent->charges->data[0]->payment_method_details->card->brand ?? null,
            ])
        ]);
    }
}
