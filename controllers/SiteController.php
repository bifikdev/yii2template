<?php

namespace app\controllers;

use app\helpers\abstracts\controllers\ControllerWebTemplate;

/**
 * Class SiteController
 *
 * @package app\controllers
 * @description Класс для работы приложения
 * @version 1.1
 * @revision 20240105
 */
class SiteController extends ControllerWebTemplate
{

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}