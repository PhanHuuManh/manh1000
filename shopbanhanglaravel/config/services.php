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

    'facebook' => [
        'client_id' => '163881365816428',  //client face của bạn
        'client_secret' => '0c1c7928fcf746f32226e036c1376bca',  //client app service face của bạn
        'redirect' => 'http://localhost:8090/shopbanhanglaravel/admin/callback' //callback trả về
    ],

    'google' => [
        'client_id' => '104120939348-h2pm4elljmuplp1u5jae8baeopm22t7k.apps.googleusercontent.com',
        'client_secret' => 'NtuJuE8EXdw7fUijps1EsnyC',
        'redirect' => 'http://localhost:8090/shopbanhanglaravel/google/callback' 
    ],



];
