<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../helpers/helpers.php';
require __DIR__ . '/../helpers/Secrets.php';

if (is_file(__DIR__ . '/../.env')) {
    $dotEnv = \Dotenv\Dotenv::create(__DIR__ . '/../', '.env');
    $dotEnv->load();
}

defined('YII_DEBUG') or define('YII_DEBUG', env('YII_DEBUG', false));
defined('YII_ENV') or define('YII_ENV', env('YII_ENV', 'prod'));

require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

Secrets::load(__DIR__ . '/../secrets/secrets.json');

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
