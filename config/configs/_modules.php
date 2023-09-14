<?php

$secretsYii = $vault->getSecret('yii/config');

return [
    'gii' => [
        'class' => yii\gii\Module::class,
        'generators' => [
            'job' => [
                'class' => \yii\queue\gii\Generator::class,
            ]
        ],
        'allowedIPs' => $secretsYii->get('YII_ALLOWED_IP_GII'),
    ],

];
