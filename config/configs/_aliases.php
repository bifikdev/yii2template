<?php

return [
    '@bower' => '@vendor/bower-asset',
    '@npm' => '@vendor/npm-asset',
    '@app' => dirname(dirname(__DIR__)),
    '@tests' => '@app/tests',
    '@runtime' => '@app/runtime',
    '@static' => '@app/static',
    '@modules' => '@app/modules',
    '@logs' => '@runtime/logs'

];