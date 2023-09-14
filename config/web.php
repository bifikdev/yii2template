<?php

$config = [
    'id' => 'basic',
    'name' => 'Yii2Template',
    'basePath' => dirname(__DIR__),
    'language' => 'ru_RU',
    'bootstrap' => require __DIR__ . '/configs/_bootstrap.php',
    'aliases' => require __DIR__ . '/configs/_aliases.php',
    'modules' => require __DIR__ . '/configs/_modules.php',
    'container' => [
        'definitions' => [
            \yii\widgets\LinkPager::class => \yii\bootstrap4\LinkPager::class,
        ],
    ],
    'components' => [
        'assetManager' => [
            'linkAssets' => true,
        ],
        'request' => require __DIR__ . '/configs/_request.php',
        'response' => [
            'format' => \yii\web\Response::FORMAT_JSON,
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'i18n' => [
            'translations' => require __DIR__ . '/configs/_i18n.php',
        ],
        'user' => [
            'identityClass' => \app\models\User::class,
            'enableAutoLogin' => false,
        ],
        'errorHandler' => [
            'errorAction' => 'error/index',
        ],
        'log' => [
            'targets' => require __DIR__ . '/configs/_logs.php',
        ],
        'db' => require __DIR__ . '/configs/_db.php',
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require __DIR__ . '/configs/_urls.php',
        ],
        'mailer' => require __DIR__ . '/configs/_mailer.php',
        'authManager' => [
            'class' => \yii\rbac\PhpManager::class,
            'defaultRoles' => ['guest'],
        ],

        'filedb' => [
            'class' => \yii2tech\filedb\Connection::class,
            'path' => '@app/data',
        ],

        // Настройки очередей
        'queue' => [
            'class' => \yii\queue\db\Queue::class,
            'db' => 'db',
            'tableName' => '{{%queue}}',
            'channel' => 'default',
            'mutex' => \yii\mutex\MysqlMutex::class,
        ],

        // Информация по скрипту
        'ScriptInfo' => [
            'class' => \app\components\ScriptInfo::class,
        ],

        // Секреты
        'secrets' => [
            'class' => \app\components\Secrets::class,
            'vault' => $vault,
        ],

        // DTO
        'dto' => [
            'class' => \app\components\ResponseDTO::class,
        ],
    ],
    'params' => require __DIR__ . '/params.php',
];

unset($vault);

return $config;
