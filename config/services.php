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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'paydunya' => [
        'master_key'        => env('PAYDUNYA_MASTERKEY'),
        'test_public_key'   => env('TEST_PUBLIC_KEY'),
        'test_private_key'  => env('TEST_PRIVATE_KEY'),
        'test_token'        => env('TEST_TOKEN'),
        'prod_public_key'   => env('PROD_PUBLIC_KEY'),
        'prod_private_key'  => env('PROD_PRIVATE_KEY'),
        'prod_token'        => env('PROD_TOKEN'),
        'mode'              => env('PAYMENT_MODE')
    ]
];
