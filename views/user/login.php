<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-login">
    <div class="card">
        <? $form = ActiveForm::begin(['id' => 'login-form',]); ?>
        <div class="card-body">
            <h6 class="card-subtitle text-muted">Для авторизации введите данные от учетной записи:</h6>
            <div class="card-text">
                <?= $form->field($model, 'username')->textInput() ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-3 col-md-3 col-lg-3 col-xs-3 col-sm-3">
                    <?= Html::submitButton('Авторизация', ['class' => 'btn btn-sm btn-success', 'name' => 'login-button']) ?>
                </div>
                <div class="col-9 col-md-9 col-lg-9 col-xs-9 col-sm-9 text-right">
                    <?= Html::a('Регистрация',  Url::toRoute(['user/register']), ['class' => 'btn btn-sm btn-info']) ?>
                    <?= Html::a('Забыл пароль ?', Url::toRoute(['user/forgot']), ['class' => 'btn btn-sm btn-warning']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end() ?>
    </div>
</div>