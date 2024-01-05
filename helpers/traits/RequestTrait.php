<?php

namespace app\helpers\traits;

use Yii;
use yii\web\HeaderCollection;

/**
 * Trait RequestTrait
 * @package app\helpers\traits
 */
trait RequestTrait
{

    /**
     * @return \yii\console\Request|\yii\web\Request
     */
    protected function getRequest()
    {
        return Yii::$app->request;
    }

    /**
     * @return bool|mixed
     */
    protected function isRequestAjax(): bool
    {
        return $this->getRequest()->isAjax;
    }

    /**
     * @return bool|mixed
     */
    protected function isRequestPjax(): bool
    {
        return $this->getRequest()->isPjax;
    }

    /**
     * @return bool|mixed
     */
    protected function isRequestPost(): bool
    {
        return $this->getRequest()->isPost;
    }

    /**
     * @return array|mixed
     */
    protected function getRequestPostParams(): array
    {
        return $this->getRequest()->post();
    }

    /**
     * @param string $param
     * @param $default
     * @return array|mixed|object
     */
    protected function getRequestPostParam(string $param, $default = 0)
    {
        return $this->getRequest()->post($param, $default);
    }

    /**
     * @return bool|mixed
     */
    protected function isRequestGet(): bool
    {
        return $this->getRequest()->isGet;
    }

    /**
     * @return array|mixed
     */
    protected function getRequestGetParams(): array
    {
        return $this->getRequest()->get();
    }

    /**
     * @param string $param
     * @param $default
     * @return array|mixed
     */
    protected function getRequestGetParam(string $param, $default = 0)
    {
        return $this->getRequest()->get($param, $default);
    }

    /**
     * @return bool|mixed
     */
    protected function isRequestDelete(): bool
    {
        return $this->getRequest()->isDelete;
    }

    /**
     * @return bool|mixed
     */
    protected function isRequestPut(): bool
    {
        return $this->getRequest()->isPut;
    }

    /**
     * @return bool|mixed
     */
    protected function isRequestHead(): bool
    {
        return $this->getRequest()->isHead;
    }

    /**
     * @return bool|mixed
     */
    protected function isRequestPatch(): bool
    {
        return $this->getRequest()->isPatch;
    }

    /**
     * @return bool|mixed
     */
    protected function isRequestOptions(): bool
    {
        return $this->getRequest()->isOptions;
    }

    /**
     * @return array
     */
    protected function getRequestQueryParams(): array
    {
        return $this->getRequest()->getQueryParams();
    }

    /**
     * @param string $param
     * @return mixed
     */
    protected function getRequestQueryParam(string $param)
    {
        return $this->getRequest()->getQueryParam($param);
    }

    /**
     * @return string
     */
    protected function getRequestQueryString(): string
    {
        return $this->getRequest()->getQueryString();
    }

    /**
     * @return array|object
     * @throws \yii\base\InvalidConfigException
     */
    protected function getRequestBodyParams()
    {
        return $this->getRequest()->getBodyParams();
    }

    /**
     * @param string $param
     * @return mixed
     */
    protected function getRequestBodyParam(string $param)
    {
        return $this->getRequest()->getBodyParam($param);
    }

    /**
     * @return HeaderCollection
     */
    protected function getHeaders(): HeaderCollection
    {
        return $this->getRequest()->getHeaders();
    }

}