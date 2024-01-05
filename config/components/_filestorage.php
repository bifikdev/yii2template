<?php

return [
    'class' => \yii2tech\filestorage\local\Storage::class,
    'basePath' => '@files',
    'baseUrl' => '@files',
    'buckets' => [
        'images',
        'news',
        'skins',
        'cloaks',
        'heads',
    ]
];