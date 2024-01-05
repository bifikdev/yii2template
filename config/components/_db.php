<?php

return [
    'class' => \yii\db\Connection::class,
    'dsn' => sprintf('mysql:host=%s;port=%s;dbname=%s',
        Secrets::getSecret('SERVER', 'mysql/main'),
        Secrets::getSecret('PORT', 'mysql/main'),
        Secrets::getSecret('BASENAME', 'mysql/main')
    ),
    'username' => Secrets::getSecret('USERNAME', 'mysql/main'),
    'password' => Secrets::getSecret('PASSWORD', 'mysql/main'),
    'charset' => Secrets::getSecret('CHARSET', 'mysql/main'),
];
