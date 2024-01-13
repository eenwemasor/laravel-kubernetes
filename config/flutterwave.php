<?php

return [

    /**
     * Flutterwave wave base urls
     */
    'base_url' => env('FLW_BASE_URL', 'https://api.flutterwave.com/v3/'),
    /**
     *  Flutterwave secret key
     */
    'secret_key' => env('FLW_SECRET_KEY'),


    /**
     * Flutterwave public key
     */
    'public_key' => env('FLW_PUBLIC_KEY'),


    /**
     * Flutterwave public key
     */
    'encryption_key' => env('FLW_ENCRYPTION_KEY'),
];
