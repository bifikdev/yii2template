<?php

namespace app\helpers\abstracts\controllers;

use app\helpers\traits\AppTrait;
use app\helpers\traits\ComponentsTrait;
use yii\console\Controller;

/**
 * Class ControllerConsoleTemplate
 *
 * @package app\helpers\abstracts
 * @description
 * @version 1.1
 * @revision 20231229
 */
abstract class ControllerConsoleTemplate extends Controller
{

    use AppTrait;
    use ComponentsTrait;

    /**
     * @param $action
     * @return bool
     */
    public function beforeAction($action): bool
    {
        return parent::beforeAction($action);
    }


}