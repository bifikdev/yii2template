<?php

namespace app\helpers\abstracts\controllers;

use app\helpers\traits\AppTrait;
use app\helpers\traits\CacheTrait;
use app\helpers\traits\ComponentsTrait;
use app\helpers\traits\RequestTrait;
use app\helpers\traits\ResponseTrait;
use app\helpers\traits\SessionTraits;
use app\helpers\traits\UserTrait;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Class ControllerWebTemplate
 *
 * @package app\helpers\abstracts
 * @description Класс для работы в режиме web приложения
 * @version 1.1
 * @revision 20231229
 */
abstract class ControllerWebTemplate extends Controller
{

    use AppTrait;
    use ComponentsTrait;
    use RequestTrait;
    use ResponseTrait;
    use SessionTraits;
    use CacheTrait;
    use UserTrait;

}