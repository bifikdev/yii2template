<?php

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'language' => 'ru_RU',
    'controllerNamespace' => 'app\commands',
    'bootstrap' => require __DIR__ . '/configs/_bootstrap.php',
    'aliases' => require __DIR__ . '/configs/_aliases.php',
    'modules' => require __DIR__ . '/configs/_modules.php',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'log' => [
            'targets' => require __DIR__ . '/configs/_logs.php',
        ],
        'queue' => [
            'class' => \yii\queue\db\Queue::class,
            'mutex' => \yii\mutex\MysqlMutex::class,
            'db' => 'db',
            'tableName' => '{{%queue}}',
            'channel' => 'default',
        ],
        'filedb' => [
            'class' => \yii2tech\filedb\Connection::class,
            'path' => '@app/models/static',
        ],
        'db' => require __DIR__ . '/configs/_db.php',
        'authManager' => [
            'class' => \yii\rbac\PhpManager::class,
        ],
    ],
    'params' => require __DIR__ . '/params.php',
    'controllerMap' => [
        'migrate' => [
            'class' => yii\console\controllers\MigrateController::class,
            'migrationPath' => null,
            'migrationNamespaces' => [
                'yii\queue\db\migrations', // Миграции модуля queue
                'app\migrations', // Миграции из директории migrations
                'app\modules\main\migrations', // Миграции из модуля main
                'app\modules\users\migrations', // Миграции из модуля users
                'app\modules\news\migrations', // Миграции из модуля news
                'app\modules\forum\migrations', // Миграции из модуля forum
//                'app\modules\launcher\migrations', // Миграции из модуля launcher
//                'app\modules\external\migrations', // Миграции из модуля external
//                'app\modules\tasks\migrations', // Миграции из модуля tasks
            ],
        ],
    ],
];

unset($vault);

return $config;
