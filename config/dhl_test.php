<?php

return [
    /*
    |--------------------------------------------------------------------------
    | DHL Test Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration file contains test data for DHL shipping integration.
    | Use these values to test the shipping functionality in sandbox mode.
    |
    */

    'test_orders' => [
        [
            'customer' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'phone' => '+1234567890'
            ],
            'shipping_address' => [
                'address' => '123 Test Street',
                'city' => 'Test City',
                'postal_code' => '12345',
                'country_code' => 'US',
                'phone' => '+1234567890'
            ],
            'items' => [
                [
                    'name' => 'Test Diamond Ring',
                    'weight' => 0.5, // in kg
                    'dimensions' => [
                        'length' => 10, // in cm
                        'width' => 10,
                        'height' => 5
                    ]
                ]
            ]
        ]
    ],

    'test_tracking_responses' => [
        [
            'trackingNumber' => 'TEST123456789',
            'shipmentEvents' => [
                [
                    'timestamp' => '2024-03-25T10:00:00',
                    'location' => 'Test Origin Facility',
                    'description' => 'Shipment picked up'
                ],
                [
                    'timestamp' => '2024-03-25T14:00:00',
                    'location' => 'Test Sort Facility',
                    'description' => 'Arrived at Sort Facility'
                ]
            ]
        ]
    ],

    'test_credentials' => [
        'api_key' => 'demo-key',
        'api_secret' => 'demo-secret',
        'account_number' => '123456789',
        'base_url' => 'https://api-mock.dhl.com/mydhl/'
    ]
];