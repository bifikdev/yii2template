<?php

namespace app\jobs;


/**
 * Class JobEmailRegister
 * @package app\jobs
 */
class JobEmailRegister extends \app\helpers\abstracts\JobTemplate
{

    public $email;
    public $username;
    public $activateKey;

    /**
     * @param \yii\queue\Queue $queue
     * @return mixed|void
     */
    public function execute($queue)
    {
        try {
            $this->getApp()->getMailer()
                ->compose('MailRegister', [
                    'username' => $this->username,
                    'activateKey' => $this->activateKey,
                ])
                ->setFrom('not_reply@technicalworld.ru')
                ->setSubject('Подтверждение регистрации пользователя')
                ->setTo($this->email)
                ->send();

        } catch (\Throwable $exception) {
            //Yii::getLogger()->log(Json::encode($exception->getMessage()), 'error', 'job');
        }
    }

}