<?php

$secrets = $vault->getSecret('redis/queue');

//TODO: Условие работы - использовать библиотеку yiisoft/redis

return [
    'class' => \yii\queue\redis\Queue::class,
    'redis' => 'redis',
    'channel' => 'default',
];