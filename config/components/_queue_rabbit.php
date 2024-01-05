<?php

$secrets = $vault->getSecret('rabbit/main');

return [
    'class' => \yii\queue\amqp_interop\Queue::class,
    'driver' => \yii\queue\amqp_interop\Queue::ENQUEUE_AMQP_BUNNY,

    'host' => $secrets->get('SERVER'),
    'port' => $secrets->get('PORT'),
    'user' => $secrets->get('USER'),
    'password' => $secrets->get('password'),
    'queueName' => 'default',
];