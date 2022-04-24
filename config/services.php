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


    'firebase' => [
        'api_key' => 'AIzaSyDjAvD435VYsH0jyrZ_Z9ePwH2_6EsVAYQ',
        'auth_domain' => 'ajaxcrud-438c2.firebaseapp.com',
        'database_url' => 'https://ajaxcrud-438c2.web.app/',
        'project_id' => 'ajaxcrud-438c2',
        'storage_bucket' => 'ajaxcrud-438c2.appspot.com',
        'messaging_sender_id' => '991307586312',
        'app_id' => '1:991307586312:web:d2d6465ba79e648ae22abd',
        'measurement_id' => 'G-6369ZM021F',
    ],

];
