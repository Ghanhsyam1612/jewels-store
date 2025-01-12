<?php

namespace App\Services;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
use Exception;

class PayPalService
{
    private $apiContext;

    public function __construct()
    {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.secret')
            )
        );
        $this->apiContext->setConfig([
            'mode' => config('paypal.mode'),
        ]);
    }

    public function createPayment($order)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $items = [];
        foreach ($order->items as $orderItem) {
            $item = new Item();
            $item->setName($orderItem->product_name)
                ->setCurrency('USD')
                ->setQuantity($orderItem->quantity)
                ->setPrice($orderItem->price);
            $items[] = $item;
        }

        $itemList = new ItemList();
        $itemList->setItems($items);

        $amount = new Amount();
        $amount->setCurrency('USD')
               ->setTotal($order->total);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
                    ->setItemList($itemList)
                    ->setDescription('Order Payment')
                    ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('paypal.success'))
                     ->setCancelUrl(route('paypal.cancel'));

        $payment = new Payment();
        $payment->setIntent('sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirectUrls)
                ->setTransactions([$transaction]);

        try {
            $payment->create($this->apiContext);
        } catch (Exception $e) {
            throw new \Exception('Failed to create PayPal payment: ' . $e->getMessage());
        }

        return $payment->getApprovalLink();
    }

    public function executePayment($paymentId, $payerId)
    {
        $payment = Payment::get($paymentId, $this->apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        try {
            $result = $payment->execute($execution, $this->apiContext);
        } catch (Exception $e) {
            throw new \Exception('Failed to execute PayPal payment: ' . $e->getMessage());
        }

        return $result;
    }
}

?>
