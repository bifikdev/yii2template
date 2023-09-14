<?php

$secrets = $vault->getSecret('mysql/main');

return [
    'class' => \yii\db\Connection::class,
    'dsn' => sprintf('mysql:host=%s;port=%s;dbname=%s',
        $secrets->get('SERVER'),
        $secrets->get('PORT'),
        $secrets->get('BASENAME')
    ),
    'username' => $secrets->get('USERNAME'),
    'password' => $secrets->get('PASSWORD'),
    'charset' => $secrets->get('CHARSET'),

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache', 
];
