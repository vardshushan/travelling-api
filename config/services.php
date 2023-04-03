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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => env('FB_CLIENT_ID', '5979983332087612'),
        'client_secret' => env('FB_CLIENT_SECRET', 'db4c2e15c1cec0bc72f2dfc695b4139e'),
        'redirect' => env('FB_REDIRECT', 'http://localhost:8000/callback'),
    ],
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID', '646113785483-1mq0f27ucvo56eidmfpdpaguqmu6ap49.apps.googleusercontent.com'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET', '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'),
        'redirect' => env('GOOGLE_REDIRECT','http://localhost:8000/callbackGoogle'),
    ],
];
