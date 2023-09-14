<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use yii2mod\markdown\MarkdownEditor;

$this->title = 'Связь с администрацией';
$this->params['breadcrumbs'][] = $this->title;

$user = Yii::$app->user->identity;

$template = <<<HTML
<div class="row">
    <div class="col-5 col-sm-5 col-xs-5 col-md-5 col-lg-5">{image}</div>
    <div class="col-7 col-sm-7 col-xs-7 col-md-7 col-lg-7">{input}</div>
</div>
HTML;
?>
<div class="site-contact">
    <div class="card">
        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
        <div class="card-body">
            <h6 class="card-subtitle text-muted">
                Для того, что бы оставить сообщение администрации вам необходимо заполнить форму
            </h6>
            <div class="card-text">
                <? if (is_null($user)): ?>
                    <?= $form->field($model, 'username')->textInput() ?>
                    <?= $form->field($model, 'email')->textInput() ?>
                <? else: ?>
                    <?= $form->field($model, 'username')->textInput(['value' => $user->username]) ?>
                    <?= $form->field($model, 'email')->textInput(['value' => $user->email]) ?>
                <? endif; ?>
                <?= $form->field($model, 'title')->textInput() ?>
                <?= $form->field($model, 'body')->widget(MarkdownEditor::className()) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), ['template' => $template]) ?>
                <input type="input" class="aniblock" name="username" value="antibotsystem">
            </div>
        </div>
        <div class="card-footer">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-sm btn-success', 'name' => 'contact-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>