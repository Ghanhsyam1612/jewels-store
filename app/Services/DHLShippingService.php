<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;

class DHLShippingService
{
    protected $client;
    protected $apiKey;
    protected $apiSecret;
    protected $baseUrl;
    protected $accountNumber;
    protected $sandboxMode;

    public function __construct()
    {
        $this->apiKey = config('services.dhl.api_key');
        $this->apiSecret = config('services.dhl.api_secret');
        $this->baseUrl = config('services.dhl.base_url');
        $this->accountNumber = config('services.dhl.export_account_number');
        $this->sandboxMode = config('services.dhl.sandbox_mode');

        if (empty($this->apiKey) || empty($this->apiSecret)) {
            throw new \RuntimeException('DHL API credentials are not configured.');
        }

        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($this->apiKey . ':' . $this->apiSecret),
                'Content-Type' => 'application/json',
            ],
            'http_errors' => false,
        ]);
    }

    public function createShipment(Order $order)
    {
        try {
            $shipmentData = $this->prepareShipmentData($order);

            $response = $this->client->post('shipment', [
                'json' => $shipmentData
            ]);

            $statusCode = $response->getStatusCode();
            $result = json_decode($response->getBody()->getContents(), true);

            Log::info('DHL API Response', [
                'order_id' => $order->id,
                'status_code' => $statusCode,
                'response' => $result,
            ]);

            if ($statusCode === 401) {
                throw new \RuntimeException('DHL API Authentication Failed: Invalid credentials');
            }

            if ($statusCode !== 201) {
                throw new \RuntimeException('DHL API Error: ' . ($result['detail'] ?? 'Unknown error'));
            }

            $trackingNumber = $result['data']['trackingNumber'] ?? null;
            $labelUrl = $result['data']['documents'][0]['content'] ?? null;

            $order->update([
                'tracking_number' => $trackingNumber,
                'shipping_label_url' => $labelUrl,
                'carrier' => 'DHL',
                'shipping_status' => 'shipped',
            ]);

            return [
                'tracking_number' => $trackingNumber,
                'label_url' => $labelUrl,
            ];
        } catch (\Exception $e) {
            Log::error('DHL Shipment Creation Error', [
                'order_id' => $order->id,
                'error' => $e->getMessage(),
                'request_payload' => $shipmentData,
            ]);
            throw $e;
        }
    }

    public function getShipmentStatus($trackingNumber)
    {
        try {
            $response = $this->client->get("shipment/track?trackingNumber={$trackingNumber}");
            $result = json_decode($response->getBody()->getContents(), true);

            if ($response->getStatusCode() !== 200) {
                throw new \RuntimeException('DHL Tracking Error: ' . ($result['detail'] ?? 'Unknown error'));
            }

            return $result['data'] ?? [];
        } catch (\Exception $e) {
            Log::error('DHL Tracking Error', [
                'tracking_number' => $trackingNumber,
                'error' => $e->getMessage(),
            ]);
            throw $e;
        }
    }

    protected function prepareShipmentData(Order $order)
    {
        $shippingAddress = is_string($order->shipping_address) ? json_decode($order->shipping_address, true) : $order->shipping_address;
        $totalWeight = $order->items->sum(function ($item) {
            return $item->diamond->weight ?? 0.5;
        });

        return [
            'plannedShippingDateAndTime' => now()->addDay()->format('Y-m-d\TH:i:s\GMT+05:30'),
            'pickup' => [
                'isRequested' => true,
                'closeTime' => '18:00',
                'location' => 'Warehouse',
            ],
            'productCode' => 'P',
            'accounts' => [
                [
                    'typeCode' => 'shipper',
                    'number' => $this->accountNumber,
                ],
            ],
            'customerDetails' => [
                'shipperDetails' => [
                    'postalAddress' => [
                        'postalCode' => config('services.dhl.shipper_postal_code'),
                        'cityName' => config('services.dhl.shipper_city'),
                        'countryCode' => config('services.dhl.shipper_country_code'),
                        'addressLine1' => config('services.dhl.shipper_address_line1'),
                        'provinceCode' => config('services.dhl.shipper_state'),
                    ],
                    'contactInformation' => [
                        'email' => config('services.dhl.shipper_email'),
                        'phone' => config('services.dhl.shipper_phone'),
                        'companyName' => config('services.dhl.shipper_company_name'),
                        'fullName' => config('services.dhl.shipper_full_name'),
                    ],
                ],
                'receiverDetails' => [
                    'postalAddress' => [
                        'postalCode' => $shippingAddress['postal_code'],
                        'cityName' => $shippingAddress['city'],
                        'countryCode' => $shippingAddress['country'] ?? 'US',
                        'addressLine1' => $shippingAddress['address'],
                    ],
                    'contactInformation' => [
                        'email' => $order->customer->email,
                        'phone' => $shippingAddress['phone'] ?? $order->customer->phone,
                        'fullName' => $order->customer->first_name,
                    ],
                ],
            ],
            'content' => [
                'packages' => [
                    [
                        'weight' => $totalWeight,
                        'dimensions' => [
                            'length' => 20,
                            'width' => 15,
                            'height' => 10,
                        ],
                        'description' => "Order #{$order->order_number}",
                    ],
                ],
                'isCustomsDeclarable' => ($shippingAddress['country'] ?? 'US') !== 'IN',
                'declaredValue' => $order->total_amount,
                'declaredValueCurrency' => 'INR',
                'exportDeclaration' => [
                    'lineItems' => $order->items->map(function ($item) {
                        return [
                            'description' => $item->diamond->name ?? 'Jewelry Item',
                            'netWeight' => $item->diamond->weight ?? 0.5,
                            'grossWeight' => $item->diamond->weight ?? 0.5,
                            'quantity' => $item->quantity,
                            'price' => $item->price,
                            'currencyCode' => 'INR',
                            'originCountryCode' => 'IN',
                        ];
                    })->toArray(),
                    'exportReason' => 'Sale',
                ],
            ],
        ];
    }
}
