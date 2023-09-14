<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Восстановление пароля';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-reset-password">
    <div class="card">
        <? $form = ActiveForm::begin(['id' => 'reset-form',]); ?>
        <div class="card-body">
            <h6 class="card-subtitle text-muted">
                Для изменения пароля необходимо заполнить форму
            </h6>
            <div class="card-text">
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'password2')->passwordInput() ?>
            </div>
        </div>
        <div class="card-footer">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-sm btn-success', 'name' => 'reset-password-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
