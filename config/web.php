<?php

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    //'language' => 'ru-RU',
    'language' => 'ru_RU',

    'bootstrap' => require __DIR__ . '/main/_bootstrap.php',
    'aliases' => require __DIR__ . '/main/_aliases.php',
    'modules' => require __DIR__ . '/main/_modules.php',

    'components' => [
        'assetManager' => [
            'linkAssets' => true,
        ],

        'i18n' => [
            'translations' => require __DIR__ . '/components/_i18n.php',
        ],

        'user' => [
            'identityClass' => \app\models\User::class,
            'enableAutoLogin' => false,
            'enableSession' => false,
        ],

        'errorHandler' => [
            'errorAction' => 'app/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require __DIR__ . '/components/_urls.php',
        ],

        'log' => [
            'targets' => require __DIR__ . '/components/_logs.php',
        ],
        'request' => require __DIR__ . '/components/_request.php',
        'storage' => require __DIR__ . '/components/_filestorage.php',
        'cache' => require __DIR__ . '/components/_cache.php',
//        'memcache' => require __DIR__ . '/components/_memcached.php',
        'db' => require __DIR__ . '/components/_db.php',
        'lite' => require __DIR__ . '/components/_sqlite.php',
        'mailer' => require __DIR__ . '/components/_mailer.php',
        'filedb' => require __DIR__ . '/components/_fileDB.php',
        'queue' => require __DIR__ . '/components/_queue_file.php',

        'authManager' => [
            'class' => \yii\rbac\PhpManager::class,
            'defaultRoles' => ['guest'],
        ],

        // Информация по скрипту
        'ScriptInfo' => [
            'class' => \app\components\ScriptInfo::class,
        ],

    ],
    'params' => require __DIR__ . '/params.php',
];

return $config;
