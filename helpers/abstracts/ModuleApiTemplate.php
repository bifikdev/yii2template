<?php

namespace app\helpers\abstracts;

/**
 * Class ModuleApiTemplate
 * @package app\helpers\abstracts
 */
abstract class ModuleApiTemplate extends ModuleWebTemplate
{

    /**
     * @param \yii\base\Action $action
     * @return bool
     */
    public function beforeAction($action): bool
    {
        $this->setResponseJson();
        return parent::beforeAction($action);
    }

}