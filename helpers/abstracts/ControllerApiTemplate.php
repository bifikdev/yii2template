<?php

namespace app\helpers\abstracts;


/**
 * Class ControllerApiTemplate
 * @package app\helpers\abstracts
 */
abstract class ControllerApiTemplate extends ControllerWebTemplate
{

    /**
     * @param $action
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        $this->setResponseJson();
        return parent::beforeAction($action);
    }



}