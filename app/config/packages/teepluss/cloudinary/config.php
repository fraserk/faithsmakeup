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

    'cloudname'  => getenv('CLOUDNAME'),
    'baseurl'    => getenv('BASEURL'),
    'secureurl'  => getenv('SECUREURL'),
    'apibaseurl' => getenv('APIBASEURL'),
    'apikey'     => getenv('APIKEY'),
    'apisecret'  => getenv('APISECRET'),

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