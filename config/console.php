<?php

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'language' => 'ru_RU',
    'controllerNamespace' => 'app\commands',
    'bootstrap' => require __DIR__ . '/main/_bootstrap.php',
    'aliases' => require __DIR__ . '/main/_aliases.php',
    'modules' => require __DIR__ . '/main/_modules.php',
    'components' => [
        'log' => [
            'targets' => require __DIR__ . '/components/_logs.php',
        ],

        'storage' => require __DIR__ . '/components/_filestorage.php',
        'cache' => require __DIR__ . '/components/_cache.php',
//        'memcache' => require __DIR__ . '/configs/_memcached.php',
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
    'controllerMap' => [
        'migrate' => [
            'class' => yii\console\controllers\MigrateController::class,
            'migrationPath' => null,
            'migrationNamespaces' => [
                'yii\queue\db\migrations', // Миграции модуля queue
                'app\migrations\engine', // Миграции для движка (таблицы, триггеры)
                'app\migrations\data', // Миграции для наполнения данных
            ],
        ],
    ],
];

return $config;
