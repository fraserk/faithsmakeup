<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Cloudinary API configuration
    |--------------------------------------------------------------------------
    |
    | Before using Cloudinary you need to register and get some detail
    | to fill in below, please visit cloudinary.com.
    |
    */

    'cloudName'  => getenv('cloudName'),
    'baseUrl'    => getenv('baseurl'),
    'secureUrl'  => getenv('secureUrl'),
    'apiBaseUrl' => getenv('apiBaseUrl'),
    'apiKey'     => getenv('apiKey'),
    'apiSecret'  => getenv('apiSecret'),

    /*
    |--------------------------------------------------------------------------
    | Default image scaling to show.
    |--------------------------------------------------------------------------
    |
    | If you not pass options parameter to Cloudy::show the default
    | will be replaced.
    |
    */

    'scaling'    => array(
        'format' => 'png',
        'with'   => 150,
        'height' => 150,
        'crop'   => 'fit',
        'effect' => null
    )

);