<?php

return [
    'cookieValidationKey' => Secrets::getSecret('YII_COOKIE_KEY', 'yii/config'),
    'baseurl' => Secrets::getSecret('YII_BASE_URL', 'yii/config'),
];