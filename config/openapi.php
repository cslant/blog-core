<?php

defined('L5_SWAGGER_API_DEV_URL')
|| define('L5_SWAGGER_API_DEV_URL', env('L5_SWAGGER_API_DEV_URL', 'http://localhost/api'));

defined('L5_SWAGGER_API_STAGING_URL')
|| define('L5_SWAGGER_API_STAGING_URL', env('L5_SWAGGER_API_STAGING_URL', 'https://staging.cslant.com/api'));

defined('L5_SWAGGER_API_PROD_URL')
|| define('L5_SWAGGER_API_PROD_URL', env('L5_SWAGGER_API_PROD_URL', 'https://cslant.com/api'));

return [
    //
];
