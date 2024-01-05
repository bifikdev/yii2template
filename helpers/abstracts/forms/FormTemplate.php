<?php

namespace app\helpers\abstracts\forms;

use app\helpers\traits\AppTrait;
use app\helpers\traits\ComponentsTrait;
use app\helpers\traits\UserTrait;
use yii\base\Model;

/**
 * Class FormTemplate
 *
 * @package app\helpers\abstract
 * @description Класс для работы форм в приложении
 * @version 1.1
 * @revision 20231229
 */
abstract class FormTemplate extends Model
{

    use AppTrait;
    use ComponentsTrait;
    use UserTrait;

    /**
     * @return array
     */
    public function rules(): array
    {
        return parent::rules();
    }

    /**
     * @return array
     */
    public function attributeLabels(): array
    {
        return parent::attributeLabels();
    }

    /**
     * @return mixed
     */
    abstract function submit();

}