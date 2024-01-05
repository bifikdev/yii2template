<?php

namespace app\helpers\abstracts\controllers;

use app\components\response\ResponseDTO;
use yii\web\BadRequestHttpException;

/**
 * Class ControllerDTOTemplate
 *
 * @package app\helpers\abstracts
 * @description Класс для работы с DTO ответами
 * @version 1.1
 * @revision 20231229
 */
abstract class ControllerDTOTemplate extends ControllerApiTemplate
{

    /**
     * @var ResponseDTO
     */
    protected ResponseDTO $data;

    protected $badRequest = false;

    /**
     * @return void
     */
    public function init()
    {
        $this->data = new ResponseDTO();
        parent::init();
    }

    /**
     * @param $action
     * @return bool
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        return parent::beforeAction($action);
    }

    /**
     * @param $action
     * @param $result
     * @return ResponseDTO
     */
    public function afterAction($action, $result): ResponseDTO
    {
        if ($this->badRequest) { // Если пришел маркер badRequest - отображаем код 400
            $this->data->setBadRequestError();
            return $this->data;
        }

        if (!empty($result)) { // Если возвращаемые данные не пустые - выгружаем
            $this->data->setData($result);
        } else { // Если вернулась пустота - считаем, что данных нет - отображаем код 404
            $this->data->setNotFoundError();
        }

        return $this->data;
    }

}