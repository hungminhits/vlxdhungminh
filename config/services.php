<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

     'facebook' => [
        'client_id' => '253731135087090',
        'client_secret' => '7a687ddfc3ed8cdf3d88497310e4d074',
        'redirect' => 'http://localhost/vlxdHungMinh1/public/login/facebook/callback',
    ],
    'google' => [
        'client_id' => '373850082397-fc7sp15o80el1a42clu0l3fge3mdp96j.apps.googleusercontent.com',
        'client_secret' => 'hHcqcd2Ml8198UnTQ_Kt7htk',
        'redirect' => 'http://localhost/vlxdHungMinh1/public/login/google/callback',
    ],

];
