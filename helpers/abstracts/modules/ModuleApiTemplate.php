<?php

namespace app\helpers\abstracts\modules;

/**
 * Class ModuleApiTemplate
 *
 * @package app\helpers\abstracts
 * @description Класс для работы с модулями в режиме API
 * @version 1.1
 * @revision 20231229
 */
abstract class ModuleApiTemplate extends ModuleWebTemplate
{

    /**
     * @param $action
     * @return bool
     */
    public function beforeAction($action): bool
    {
        $this->setResponseJson();
        return parent::beforeAction($action);
    }

}