<?php

namespace app\controllers;

use app\helpers\abstracts\ControllerWebTemplate;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends ControllerWebTemplate
{

    /**
     * @return mixed
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }

}