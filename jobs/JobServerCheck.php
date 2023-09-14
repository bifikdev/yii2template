<?php

namespace app\jobs;

use app\helpers\abstracts\JobTemplate;
use app\modules\main\models\Servers;
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

/**
 * Class JobServerCheck
 * @package app\jobs
 */
class JobServerCheck extends JobTemplate
{

    /**
     * @param \yii\queue\Queue $queue
     * @return mixed|void
     */
    public function execute($queue)
    {
        $model = Servers::find()->where(['isActive' => 1])->all();
        foreach ($model as $server) {
            $query = new MinecraftQuery();
            try {
                $query->Connect($server->ip, $server->port);

                $info = $query->GetInfo();
                $players = $query->GetPlayers();
                $message = null;
            } catch (MinecraftQueryException $e) {
                $info = $this->_defaultInfo();
                $players = [];
                $message = $e->getMessage();
            }

            $server->monitoring = $info;
            $server->players = $players;
            $server->message = $message;

            if ($server->validate()) {
                $server->save();
            }
        }
    }

    /**
     * @return array
     */
    private function _defaultInfo(): array
    {
        return [
            'HostName' => '',
            'GameType' => '',
            'GameName' => '',
            'Version' => '',
            'Plugins' => '',
            'Map' => '',
            'Players' => 0,
            'MaxPlayers' => 0,
            'HostPort' => 0,
            'HostIp' => '',
            'Software' => '',
        ];
    }


}
