<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = "Регистрация";
$this->params['breadcrumbs'][] = $this->title;

$template = <<<HTML
<div class="row">
    <div class="col-5 col-sm-5 col-xs-5 col-md-5 col-lg-5">{image}</div>
    <div class="col-7 col-sm-7 col-xs-7 col-md-7 col-lg-7">{input}</div>
</div>
HTML;

?>

<div class="site-register">
    <div class="card">
        <? $form = ActiveForm::begin(['id' => 'register-form',]); ?>
        <div class="card-body">
            <h6 class="card-subtitle text-muted">
                Для регистрации на проекте вам необходимо заполнить форму.
            </h6>
            <div class="card-text">
                <input type="input" class="aniblock" name="username" value="antibotsystem">
                <?= $form->field($model, 'username')->textInput(); ?>
                <?= $form->field($model, 'password')->passwordInput(); ?>
                <?= $form->field($model, 'password2')->passwordInput(); ?>
                <?= $form->field($model, 'email')->textInput(); ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), ['template' => $template]) ?>
                <input type="hidden" name="antibot" value="antibotsystem">
            </div>
            <p>
                Нажимая на клавишу "Зарегистрироваться" вы подтверждаете прочтение и
                соблюдение <?= Html::a('правил проекта', "/rules.html") ?>
            </p>
        </div>
        <div class="card-footer">
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-sm btn-success']); ?>
        </div>
        <? ActiveForm::end(); ?>
    </div>
</div>
