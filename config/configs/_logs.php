<?php

$class = \yii\log\FileTarget::class;
$levels = ['info', 'warning', 'error'];
//$logVars = ['_GET', '_POST'];
$logVars = [];

return [
    [
        'class' => $class,
        'levels' => $levels,
        'logVars' => $logVars,
        'logFile' => '@logs/app.log'
    ],
    [
        'categories' => ['jobs'],
        'class' => $class,
        'levels' => $levels,
        'logVars' => $logVars,
        'logFile' => '@logs/jobs.log',
    ],
    [
        'categories' => ['secrets'],
        'class' => $class,
        'levels' => $levels,
        'logVars' => $logVars,
        'logFile' => '@logs/secrets.log'
    ],
//    [
//        'categories' => [],
//        'class' => $class,
//        'levels' => $levels,
//        'logVars' => $logVars,
//        'logFile' => '@logs/'
//    ],
//    [
//        'categories' => [],
//        'class' => $class,
//        'levels' => $levels,
//        'logVars' => $logVars,
//        'logFile' => '@logs/'
//    ],

];