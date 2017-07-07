<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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
    
    'github' => [
        'client_id' => env('GITHUB_ID'),
        'client_secret' => env('GITHUB_SECRET'),
        'redirect' => env('GITHUB_REDIRECT'),
    ],
    'twitter' => [
        'client_id'     => env('TWITTER_ID'),
        'client_secret' => env('TWITTER_SECRET'),
        'redirect'      => env('TWITTER_URL'),
    ],
    'facebook' => [
        'client_id'     => "1471869312887506",
        'client_secret' => "d3d36f3f63e925547a70f03c0432b56f",
        'redirect'      => env('FACEBOOK_URL'),
    ],
    'google' => [
        'client_id'     => "611795058461-sug2crd0ka0jadgccm7jb8rg2rj57nkc.apps.googleusercontent.com",
        'client_secret' => "dyYIqV8su1ryTew2NHu56rmP",
        'redirect'      => "http://ec2-35-164-11-119.us-west-2.compute.amazonaws.com:83/auth/google/callback",
    ],
];
