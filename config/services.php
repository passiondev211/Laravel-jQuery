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
        'client_id'     => 'eGZ55RAeAvMfUYjy7T1ChJvIC',
        'client_secret' => 'zGbqxWows40paOw9IlLsBlwZpdMWzgfFx8HQH7SIM2rwaaAmsn',
        'redirect'      => "http://ec2-35-164-11-119.us-west-2.compute.amazonaws.com:83/auth/twitter/callback",
    ],
    'facebook' => [
        'client_id'     => "1471869312887506",
        'client_secret' => "d3d36f3f63e925547a70f03c0432b56f",
        'redirect'      => "http://ec2-35-164-11-119.us-west-2.compute.amazonaws.com:83/auth/facebook/callback",
    ],
    'google' => [
        'client_id'     => "124755301532-b3mli8a57elgqeuqc8nd17q7st9jdnvd.apps.googleusercontent.com",
        'client_secret' => "tXiCk0iAxbxi_ynmvVRVZ8tC",
        'redirect'      => "http://ec2-35-164-11-119.us-west-2.compute.amazonaws.com:83/auth/google/callback",
    ],
];
