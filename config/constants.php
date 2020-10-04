<?php

return [
    // STATUS
    'crud_active'   => 'active',
    'crud_inactive' => 'inactive',

    // TTL CACHE
    'ttl_cache'     => 5,
    'ttl_cache_lv1' => 15,
    'ttl_cache_lv2' => 30,
    'ttl_cache_lv3' => 60,
    'ttl_cache_lv4' => 120,
    'ttl_cache_lv5' => 1440,

    'cache_store' => env('CACHE_STORE'),
];
