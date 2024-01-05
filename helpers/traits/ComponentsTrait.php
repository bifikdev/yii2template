<?php

namespace app\helpers\traits;

use app\helpers\abstracts\jobs\JobTemplate;
use Yii;
use yii\base\Security;
use yii\mail\MailerInterface;
use yii\queue\Queue;
use yii\swiftmailer\Mailer;

/**
 * Trait ComponentsTrait
 * @package app\helpers\traits
 */
trait ComponentsTrait
{

    /**
     * @return \yii\console\ErrorHandler|\yii\web\ErrorHandler
     */
    protected function getErrorHandler()
    {
        return Yii::$app->getErrorHandler();
    }

    /**
     * @return Security
     */
    protected function getSecurity(): Security
    {
        return Yii::$app->getSecurity();
    }

    /**
     * @return Queue
     */
    protected function getQueue(): Queue
    {
        return Yii::$app->queue;
    }

    /**
     * @param JobTemplate $queue
     * @return void
     */
    protected function queuePush(JobTemplate $queue)
    {
        $this->getQueue()->push($queue);
    }

    /**
     * @return MailerInterface
     */
    protected function getMailer(): MailerInterface
    {
        return Yii::$app->mailer;
    }

}