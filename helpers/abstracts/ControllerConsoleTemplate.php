<?php

namespace app\helpers\abstracts;

use app\helpers\traits\AppTrait;
use yii\console\Controller;

/**
 * Class ControllerConsoleTemplate
 * @package app\helpers\abstracts
 */
abstract class ControllerConsoleTemplate extends Controller
{

    use AppTrait;

    /**
     * @param $action
     * @return bool
     */
    public function beforeAction($action): bool
    {
        return parent::beforeAction($action);
    }


}