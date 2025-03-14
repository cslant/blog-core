<?php

defined('YOUR_DYNAMIC_URL_CONSTANT')
|| define('YOUR_DYNAMIC_URL_CONSTANT', env('L5_SWAGGER_API_LOCAL_URL', 'http://localhost/api'));

defined('YOUR_DYNAMIC_PROD_URL_CONSTANT')
|| define('YOUR_DYNAMIC_PROD_URL_CONSTANT', env('L5_SWAGGER_API_PROD_URL', 'https://cslant.com/api'));

return [
    //
];
