<?php

namespace app\helpers\abstracts\jobs;

use app\helpers\traits\AppTrait;
use yii\base\BaseObject;
use yii\queue\JobInterface;

/**
 * Class JobTemplate
 *
 * @package app\helpers\abstracts
 * @description Класс для работы с Queue
 * @version 1.1
 * @revision 20231229
 */
abstract class JobTemplate extends BaseObject implements JobInterface
{

    use AppTrait;

    /**
     * @param $queue
     * @return mixed
     */
    abstract public function execute($queue);


}