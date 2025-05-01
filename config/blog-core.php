<?php

return [
    'name' => 'BlogCore',

    'fe_path' => env('BLOG_FE_PATH', 'blog'),
    'fe_url' => env('BLOG_FE_URL', 'https://cslant.com'),
    'fe_url_with_path' => env('BLOG_FE_URL', 'https://cslant.com') . (env('BLOG_FE_PATH', 'blog') ? '/' . env('BLOG_FE_PATH', 'blog') : ''),

    'admin_path' => env('BLOG_ADMIN_PATH', 'admin/blog'),
    'admin_url' => env('BLOG_ADMIN_URL', 'https://cslant.com'),
    'admin_url_with_path' => env('BLOG_ADMIN_URL', 'https://cslant.com') . (env('BLOG_ADMIN_PATH', 'admin/blog') ? '/' . env('BLOG_ADMIN_PATH', 'admin/blog') : ''),

    'api_path' => env('BLOG_API_PATH', 'api/blog'),
    'api_url' => env('BLOG_API_URL', 'https://cslant.com'),
    'api_url_with_path' => env('BLOG_API_URL', 'https://cslant.com') . (env('BLOG_API_PATH', 'api/blog') ? '/' . env('BLOG_API_PATH', 'api/blog') : ''),

    'laravel_domain' => env('LARAVEL_BLOG_DOMAIN', 'no-accept-domain'),

    'view_throttle_minutes' => env('BLOG_VIEW_THROTTLE_MINUTES', 60),

    'blog_api_default_rate_limit' => env('BLOG_API_DEFAULT_RATE_LIMIT', 50),
];
