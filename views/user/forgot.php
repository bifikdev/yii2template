<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Восстановление пароля';
$this->params['breadcrumbs'][] = $this->title;

$template = <<<HTML
<div class="row">
    <div class="col-5 col-sm-5 col-xs-5 col-md-5 col-lg-5">{image}</div>
    <div class="col-7 col-sm-7 col-xs-7 col-md-7 col-lg-7">{input}</div>
</div>
HTML;

?>

<div class="site-forgot">
    <div class="card">
        <? $form = ActiveForm::begin(['id' => 'forgot-form',]); ?>
        <div class="card-body">
            <h6 class="card-subtitle text-muted">
                Для процесса востановления пароля вам необходимо заполнить форму
            </h6>
            <div class="card-text">
                <input type="input" class="aniblock" name="username" value="antibotsystem">
                <?= $form->field($model, 'username')->textInput() ?>
                <?= $form->field($model, 'email')->textInput() ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), ['template' => $template]) ?>
            </div>
        </div>
        <div class="card-footer">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-sm btn-success', 'name' => 'forgot-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
