<?php

$secrets = $vault->getSecret('mailer/main');

return [
    'class' => \yii\swiftmailer\Mailer::class,
    'useFileTransport' => false,
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => $secrets->get('SERVER'),
        'port' => $secrets->get('PORT'),
        'encryption' => $secrets->get('ENCRYPTION'),
        'username' => $secrets->get('USERNAME'),
        'password' => $secrets->get('PASSWORD'),
    ]
];