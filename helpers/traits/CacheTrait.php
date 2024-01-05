<?php

namespace app\helpers\traits;

use Yii;
use yii\caching\CacheInterface;

/**
 * Trait CacheTrait
 * @package app\helpers\traits
 */
trait CacheTrait
{

    public $duration = 15;

    /**
     * @return CacheInterface
     */
    protected function getCache(): CacheInterface
    {
        return Yii::$app->cache;
    }

    /**
     * @return int
     */
    protected function getDefaultDuration(): int
    {
        return $this->getCacheDuration() * 60;
    }

    /**
     * @return int
     */
    protected function getCacheDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duraction
     */
    protected function setCacheDuration(int $duraction)
    {
        $this->duration = $duraction;
    }

    /**
     * @param string $key
     * @param $callable
     * @return mixed
     */
    protected function cacheGetOrSet(string $key, $callable)
    {
        return $this->getCache()->getOrSet($key, $callable, $this->getDefaultDuration());
    }


}