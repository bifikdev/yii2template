<?php

namespace app\commands;

use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = \Yii::$app->getAuthManager();
        $auth->removeAll(); //Удалить все прошлые привелегии|роли


    }

}