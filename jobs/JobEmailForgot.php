<?php

namespace app\jobs;

use app\helpers\abstracts\JobTemplate;

/**
 * Class JobEmailForgot
 * @package app\jobs
 */
class JobEmailForgot extends JobTemplate
{

    public $refreshToken;
    public $email;

    /**
     * @param \yii\queue\Queue $queue
     * @return mixed|void
     */
    public function execute($queue)
    {
        try {
            $this->getApp()->getMailer()
                ->compose('MailForgot', [
                    'refreshToken' => $this->refreshToken,
                ])
                ->setFrom('not_reply@technicalworld.ru')
                ->setSubject('Восстановление пароля')
                ->setTo($this->email)
                ->send();

        } catch (\Throwable $exception) {
//            Yii::getLogger()->log(Json::encode($exception->getMessage()), 'error', 'job');
        }
    }
}