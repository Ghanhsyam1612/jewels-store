<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'stripe' => [
        'secret_key' => env('STRIPE_SECRET_KEY'),
        'publishable_key' => env('STRIPE_PUBLISHABLE_KEY'),
        'webhook_secret' => env('STRIPE_WEBHOOK_SECRET'),
    ],

    'dhl' => [
        'api_key' => env('DHL_API_KEY'),
        'api_secret' => env('DHL_API_SECRET'),
        'export_account_number' => env('DHL_EXPORT_ACCOUNT_NUMBER'),
        'import_account_number' => env('DHL_IMPORT_ACCOUNT_NUMBER'),
        'base_url' => env('DHL_API_BASE_URL'),
        'sandbox_mode' => env('DHL_SANDBOX_MODE', true),
        'tracking_url' => env('DHL_TRACKING_URL'),

        // Shipper details
        'shipper_postal_code' => env('DHL_SHIPPER_POSTAL_CODE'),
        'shipper_state' => env('DHL_SHIPPER_STATE'),
        'shipper_city' => env('DHL_SHIPPER_CITY'),
        'shipper_country_code' => env('DHL_SHIPPER_COUNTRY_CODE'),
        'shipper_address_line1' => env('DHL_SHIPPER_ADDRESS_LINE1'),
        'shipper_email' => env('DHL_SHIPPER_EMAIL'),
        'shipper_phone' => env('DHL_SHIPPER_PHONE'),
        'shipper_company_name' => env('DHL_SHIPPER_COMPANY_NAME'),
        'shipper_full_name' => env('DHL_SHIPPER_FULL_NAME'),
    ],
];
