<?php

namespace app\helpers\abstracts\controllers;


use yii\filters\Cors;
use yii\web\BadRequestHttpException;

/**
 * Class ControllerApiTemplate
 *
 * @package app\helpers\abstracts
 * @description Класс для работы в режиме API
 * @version 1.1
 * @revision 20231229
 */
abstract class ControllerApiTemplate extends ControllerWebTemplate
{

    /**
     * @var bool
     */
    public $enableCsrfValidation = false;

    /**
     * @return array
     */
    public function behaviors(): array
    {
        $behaviors = parent::behaviors();
        $behaviors['corsFilter'] = [
            'class' => Cors::class,
            'cors' => [
                'Access-Control-Request-Method' => ['*'],
                'Access-Control-Request-Headers' => ['*'],
                'Access-Control-Allow-Credentials' => true,
                'Access-Control-Max-Age' => 3600,
                'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
            ],
        ];
        return $behaviors;
    }

    /**
     * @param $action
     * @return bool
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        $this->setResponseJson();
        return parent::beforeAction($action);
    }

    /**
     * @return void
     */
    public function init()
    {
        $this->getUser()->enableSession = false;
        parent::init();
    }


}