<?php

namespace app\helpers\traits;

use Yii;
use yii\web\Response;

/**
 * Trait ResponseTrait
 * @package app\helpers\traits
 */
trait ResponseTrait
{

    /**
     * @return \yii\console\Response|\yii\web\Response
     */
    protected function getResponse()
    {
        return Yii::$app->response;
    }

    /**
     * @param string $format
     * @return string
     */
    protected function setResponse(string $format): string
    {
        return $this->getResponse()->format = $format;
    }

    /**
     * @return string
     */
    protected function setResponseJson(): string
    {
        return $this->setResponse(Response::FORMAT_JSON);
    }

    /**
     * @return string
     */
    protected function setResponseXml(): string
    {
        return $this->setResponse(Response::FORMAT_XML);
    }

    /**
     * @return string
     */
    protected function setResponseHtml(): string
    {
        return $this->setREsponse(Response::FORMAT_HTML);
    }

    /**
     * @return string
     */
    protected function setResponseRaw(): string
    {
        return $this->setResponse(Response::FORMAT_RAW);
    }

}