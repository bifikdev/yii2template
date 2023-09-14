<?php

namespace app\models;

use app\modules\users\models\Users;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\web\IdentityInterface;

/**
 * Class User
 * @package app\models
 */
class User extends ActiveRecord implements IdentityInterface
{

    /**
     * Используемая для работы таблица
     *
     * @return string
     */
    public static function tableName()
    {
        return Users::tableName();
    }

    /**
     * @param int|string $id
     * @return User|IdentityInterface|null
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    /**
     * @param $token
     * @param null $type
     * @return User|bool|null
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        if (!is_null($type)) {
            return static::find()->andWhere(['=', new Expression("tokens->>'$.$type'"), $token]);
        }
        return false;
    }

    /**
     * @param $username
     * @return User|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * @param $email
     * @return User|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    /**
     * @param $ip
     * @return User|null
     */
    public static function findByIp($ip)
    {
        return static::findOne(['ip' => $ip]);
    }

    /**
     * @param $uuid
     * @return User|null
     */
    public static function findByUUID($uuid)
    {
        return static::findOne(['uuid' => $uuid]);
    }

    /**
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAuthKey()
    {
        return $this->tokens['authKey'];
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->tokens['refreshToken'];
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->tokens['accessToken'];
    }

    /**
     * @return mixed
     */
    public function getMinecraftToken()
    {
        return $this->tokens['minecraftToken'];
    }

    /**
     * @return mixed
     */
    public function getApiToken()
    {
        return $this->tokens['apiToken'];
    }

    /**
     * @param $activatedKey
     * @return bool
     */
    public function validateActivatedKey($activatedKey)
    {
        return $this->tokens['activateKey'] == $activatedKey;
    }

    /**
     * @param string $authKey
     * @return bool
     */
    public function validateAuthKey($authKey)
    {
        return $this->tokens['authKey'] === $authKey;
    }

    /**
     * @param $accessToken
     * @return bool
     */
    public function validateAccessToken($accessToken)
    {
        return $this->tokens['accessToken'] === $accessToken;
    }

    /**
     * @param $refreshToken
     * @return bool
     */
    public function validateRefreshToken($refreshToken)
    {
        return $this->tokens['refreshToken'] === $refreshToken;
    }

    /**
     * @param $minecraftToken
     * @return bool
     */
    public function validateMinecraftToken($minecraftToken)
    {
        return $this->tokens['minecraftToken'] === $minecraftToken;
    }

    /**
     * @param $apiToken
     * @return bool
     */
    public function validateApiToken($apiToken)
    {
        return $this->tokens['apiToken'] === $apiToken;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password);
    }
}
