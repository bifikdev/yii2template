<?php

$secrets = $vault->getSecret('yii/config');

return [
    'cookieValidationKey' => $secrets->get('YII_COOKIE_KEY'),
    'baseurl' => $secrets->get('YII_BASE_URL'),
];