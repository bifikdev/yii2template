<?php

namespace app\helpers\traits;

use yii\rbac\ManagerInterface;
use yii\web\IdentityInterface;
use Yii;

/**
 * Class UserTrait
 * @package app\helpers\traits
 */
trait UserTrait
{

    /**
     * @return mixed|\yii\web\User
     */
    protected function getUser()
    {
        return Yii::$app->user;
    }

    /**
     * @return mixed
     */
    protected function isUserGuest()
    {
        return $this->getUser()->isGuest;
    }

    /**
     * @return \yii\web\IdentityInterface|null
     */
    protected function getUserIdentity()
    {
        return $this->getUser()->identity;
    }

    /**
     * @param IdentityInterface $identity
     * @return bool
     */
    protected function setUserLogin(IdentityInterface $identity): bool
    {
        return $this->getUser()->login($identity);
    }

    /**
     * @return bool
     */
    protected function setUserLogout(): bool
    {
        return $this->getUser()->logout();
    }

    /**
     * @param string $permission
     * @return bool
     */
    protected function checkPermission(string $permission): bool
    {
        return $this->getUser()->can($permission);
    }

    /**
     * @return \yii\rbac\ManagerInterface|null
     */
    protected function getUserAuthManager(): ManagerInterface
    {
        return Yii::$app->authManager;
    }

    /**
     * @return array
     */
    protected function getUserBlockIpList(): array
    {
        return Yii::$app->params['blockedIPs'];
    }

    /**
     * @return bool
     */
    protected function isUserIpBlocked(): bool
    {
        return in_array(Yii::$app->request->getUserIP(), $this->getUserBlockIpList());
    }

    /**
     * @return bool
     */
    protected function isUserBlocked(): bool
    {
        return ($this->getUserIdentity()->isBlock === 1);
    }


}