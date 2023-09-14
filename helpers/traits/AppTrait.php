<?php

namespace app\helpers\traits;

use Yii;
use yii\base\Action;

/**
 * Trait AppTrait
 * @package app\helpers\traits
 */
trait AppTrait
{

    /**
     * @return \yii\base\Application|\yii\console\Application|\yii\web\Application
     */
    protected function getApp()
    {
        return Yii::$app;
    }

    /**
     * @return bool
     */
    protected function isConsoleApp(): bool
    {
        return ($this->getApp() instanceof \yii\console\Application);
    }

    /**
     * @return bool
     */
    protected function isWebApp(): bool
    {
        return ($this->getApp() instanceof \yii\web\Application);
    }

    /**
     * @return \yii\base\Controller|\yii\console\Controller|\yii\web\Controller
     */
    protected function getController()
    {
        return $this->getApp()->controller;
    }

    /**
     * @return Action|null
     */
    protected function getAction()
    {
        return $this->getController()->action;
    }

    /**
     * @return string
     */
    protected function getModuleId(): string
    {
        return $this->getController()->module->id;
    }

    /**
     * @return string
     */
    protected function getControllerId(): string
    {
        return $this->getController()->id;
    }

    /**
     * @return string
     */
    protected function getActionId(): string
    {
        return $this->getController()->action->id;
    }


}