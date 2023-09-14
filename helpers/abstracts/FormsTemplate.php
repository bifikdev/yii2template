<?php

namespace app\helpers\abstracts;

use app\helpers\traits\SessionTraits;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * Class FormsTemplate
 * @package app\helpers\abstracts
 */
abstract class FormsTemplate extends Model
{

    use SessionTraits;

    /**
     * @return array
     */
    public function rules(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function attributeLabels(): array
    {
        return [];
    }

    /**
     * @param ActiveRecord $model
     */
    public function loadData(ActiveRecord $model)
    {
        foreach ($this->attributes as $attribute => $value) {
            try {
                $this->{$attribute} = $model->{$attribute};
            } catch (\Exception $e) {
                //TODO: Логирование ошибок или обработка ошибки
            }
        }
    }

    /**
     * @return bool
     */
    abstract public function update(): bool;

    /**
     * @return bool
     */
    abstract public function insert(): bool;

    /**
     * @return bool
     */
    abstract public function delete(): bool;


}