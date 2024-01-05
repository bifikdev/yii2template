<?php

namespace app\helpers\abstracts\controllers;


use app\components\response\ResponsePayload;
use yii\web\BadRequestHttpException;

/**
 * Class ControllerPayloadTemplate
 *
 * @package app\helpers\abstracts
 * @description Класс для работы с Payload ответами
 * @version 1.1
 * @revision 20231229
 */
class ControllerPayloadTemplate extends ControllerApiTemplate
{

    /**
     * @var ResponsePayload
     */
    private ResponsePayload $data;

    /**
     * @return void
     */
    public function init()
    {
        $this->data = new ResponsePayload();
        parent::init();
    }

    /**
     * @param $action
     * @return bool
     */
    public function beforeAction($action): bool
    {
        try {
            return parent::beforeAction($action);
        } catch (BadRequestHttpException $exception) {
            $this->data->setPayloadData(ResponsePayload::STATUS_ERROR, $exception->getMessage());
        }

    }

}