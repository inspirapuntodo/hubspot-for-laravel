<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Hubspot environment variables
    |--------------------------------------------------------------------------
    |
    |
    */

    'access_token' => env('HUBSPOT_ACCESS_TOKEN'),
    'use_oauth2' => env('HUBSPOT_USE_OAUTH2', true),

    /*
    |--------------------------------------------------------------------------
    | Hubspot client options
    |--------------------------------------------------------------------------
    |
    | Beware, this array will be passed as is to Hubspot API client.
    |
    */
    'client_options' => [
        'http_errors' => env('HUBSPOT_HTTP_ERRORS', true),
    ],
];
