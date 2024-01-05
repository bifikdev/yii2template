<?php

return [
    'class' => \yii\caching\MemCache::class,
    'servers' => [
        [
            'host' => Secrets::getSecret('HOST', 'memcache/main'),
            'port' => Secrets::getSecret('PORT', 'memcache/main'),
            'weight' => Secrets::getSecret('WEIGHT', 'memcache/main'),
        ],
    ],
];
