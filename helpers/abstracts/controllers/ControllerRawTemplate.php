<?php

namespace app\helpers\abstracts\controllers;


use yii\web\BadRequestHttpException;

/**
 * Class ControllerRawTemplate
 *
 * @package app\helpers\abstracts
 * @description Класс для работы в режиме RAW (markdown документы)
 * @version 1.1
 * @revision 20231230
 */
abstract class ControllerRawTemplate extends ControllerWebTemplate
{

    /**
     * @param $action
     * @return bool
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        $this->setResponseRaw();
        return parent::beforeAction($action);
    }
}