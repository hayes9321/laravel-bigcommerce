<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Bigcommerce Api
    |--------------------------------------------------------------------------
    |
    | This file is for setting the credentials for bigcommerce api key and secret.
    |
    */
    'default' => env("BC_CONNECTION", 'oAuth'),


    'basicAuth' => [
        'store_url' => env("BC_STORE_URL", null),
        'username'  => env("BC_USERNAME", null),
        'api_key'   => env("BC_API_KEY", null)
    ],

    'oAuth' => [
        'store-hash' => env("BC_STORE_HASH", null),
        'client_id'     => env("BC_CLIENT_ID", null),
        'client_secret' => env("BC_CLIENT_SECRET", null),
        'redirect_url'  => env("BC_REDIRECT_URL", null)
    ],

    'store-hash' => env("BC_STORE_HASH", null),
    'client_secret' => env("BC_CLIENT_SECRET", null),
    'pagination-limit'  => env('BC_PAGINATION_LIMIT',1),
];
