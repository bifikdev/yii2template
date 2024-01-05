<?php

return [
    'gii' => [
        'class' => yii\gii\Module::class,
        'generators' => [
            'job' => [
                'class' => \yii\queue\gii\Generator::class,
            ]
        ],
        'allowedIPs' => [
            Secrets::getSecret('YII_ALLOWED_IP_GII', 'yii/config'),
        ],
    ],

];
