<?php

namespace app\helpers\abstracts\actions;

use app\helpers\traits\AppTrait;
use yii\base\Action;

/**
 * Class ActionTemplate
 *
 * @package app\helpers\abstracts
 * @description Класс для работы всех Action приложения
 * @version 1.1
 * @revision 20231229
 */
abstract class ActionTemplate extends Action
{

    use AppTrait;

    /**
     * @return mixed|string
     */
    abstract public function run();

}