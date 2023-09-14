<?php

namespace app\helpers\abstracts;

use app\helpers\traits\AppTrait;
use yii\base\BaseObject;
use yii\queue\JobInterface;

/**
 * Class JobTemplate
 * @package app\helpers\abstracts
 */
abstract class JobTemplate extends BaseObject implements JobInterface
{

    use AppTrait;

    /**
     * @param \yii\queue\Queue $queue
     * @return mixed|void
     */
    abstract public function execute($queue);


}