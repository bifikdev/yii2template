<?php

namespace app\helpers\traits;

use Yii;
use yii\web\Session;

/**
 * Trait SessionTraits
 * @package app\helpers\traits
 */
trait SessionTraits
{

    /**
     * @return Session
     */
    protected function getSession(): Session
    {
        return Yii::$app->session;
    }

    /**
     * @param string $key
     * @param $message
     */
    protected function setSession(string $key, $message)
    {
        $this->getSession()->set($key, $message);
    }

    /**
     * @param string $key
     * @return bool
     */
    protected function hasInSession(string $key): bool
    {
        return $this->getSession()->has($key);
    }

    /**
     * @param string $key
     * @return mixed
     */
    protected function getInSession(string $key)
    {
        return $this->getSession()->get($key);
    }

    /**
     * @return string
     */
    protected function getSessionName(): string
    {
        return $this->getSession()->getName();
    }

    /**
     * @param string $key
     * @return mixed
     */
    protected function getFlash(string $key)
    {
        return $this->getSession()->getFlash($key);
    }

    /**
     * @param string $key
     * @param string $message
     */
    protected function setFlash(string $key, string $message)
    {
        $this->getSession()->setFlash($key, $message);
    }

    /**
     * @param string $message
     */
    protected function setFlashSuccess(string $message)
    {
        $this->getSession()->setFlash('success', $message);
    }

    /**
     * @param array $messages
     */
    protected function setFlashSuccessArray(array $messages)
    {
        foreach ($messages as $message) {
            $this->setFlashSuccess($message[0]);
        }
    }

    /**
     * @param string $message
     */
    protected function setFlashWarning(string $message)
    {
        $this->getSession()->setFlash('warning', $message);
    }

    /**
     * @param array $messages
     */
    protected function setFlashWarningArray(array $messages)
    {
        foreach ($messages as $message) {
            $this->setFlashWarning($message[0]);
        }
    }

    /**
     * @param string $message
     */
    protected function setFlashInfo(string $message)
    {
        $this->getSession()->setFlash('info', $message);
    }

    /**
     * @param array $messages
     */
    protected function setFlashInfoArray(array $messages)
    {
        foreach ($messages as $message) {
            $this->setFlashInfo($message[0]);
        }
    }

    /**
     * @param string $message
     */
    protected function setFlashError(string $message)
    {
        $this->getSession()->setFlash('error', $message);
    }

    /**
     * @param array $messages
     */
    protected function setFlashErrorMessage(array $messages)
    {
        foreach ($messages as $message) {
            $this->setFlashError($message[0]);
        }
    }


}