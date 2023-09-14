<?php

namespace app\helpers\abstracts;

use app\helpers\traits\AppTrait;
use app\helpers\traits\RequestTrait;
use app\helpers\traits\ResponseTrait;
use app\traits\SessionTrait;
use yii\web\Controller;

/**
 * Class ControllerWebTemplate
 * @package app\helpers\abstracts
 */
abstract class ControllerWebTemplate extends Controller
{

    use AppTrait;
    use RequestTrait;
    use ResponseTrait;
    use SessionTrait;

    /**
     * @param $action
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        return parent::beforeAction($action);
    }



}