<?php

namespace app\helpers\abstracts;

use app\helpers\traits\AppTrait;
use yii\base\Action;

/**
 * Class ActionTemplate
 * @package app\helpers\abstracts
 */
abstract class ActionTemplate extends Action
{

    use AppTrait;

    /**
     * @return mixed
     */
    abstract public function run();

}