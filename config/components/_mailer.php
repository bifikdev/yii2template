<?php

return [
    'class' => \yii\swiftmailer\Mailer::class,
    'useFileTransport' => false,
    'transport' => [
        'class' => Swift_SmtpTransport::class,
        'host' => Secrets::getSecret('SERVER', 'mailer/main'),
        'port' => Secrets::getSecret('PORT', 'mailer/main'),
        'encryption' => Secrets::getSecret('ENCRYPTION', 'mailer/main'),
        'username' => Secrets::getSecret('USERNAME', 'mailer/main'),
        'password' => Secrets::getSecret('PASSWORD', 'mailer/main'),
    ]
];