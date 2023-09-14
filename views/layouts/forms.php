<?php

use yii\helpers\Html;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use app\assets\FormsAsset;

FormsAsset::register($this);
$this->title = Yii::$app->name;

// Обработка данных из SESSION массив
$session = Yii::$app->session;
$isBot = $session->get('isBot');
$botMessage = $session->get('botMessage');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="78d6769055b4171d"/>
    <meta name='wmail-verification' content='66a20a6a32299b6162ad6bb8f4d9bd3e'/>
    <link rel="icon" href="https://<?= $_SERVER['SERVER_NAME'] ?>/web/favicon.ico">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">
        <?
        echo Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]);

        // Если BotChecker прислал TRUE, то считаем пользователя ботов и выводим сообщение
        if ($isBot) {
            echo Alert::widget([
                'body' => $botMessage,
                'options' => ['class' => 'alert alert-warning'],
            ]);
        } else {
            echo Alert::widget();
            // Дефолтная часть отображения данных на экран пользователя
            echo Html::beginTag('main', ['id' => 'main']) . $content . Html::endTag('main');
        }
        ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted">
                &copy; <?= Yii::$app->ScriptInfo->getLicence() ?> 2013-<?= date('Y') ?>
                Version: <?= Yii::$app->ScriptInfo->getVersion() ?>
                Revision: <?= Yii::$app->ScriptInfo->getRevision() ?>
        </span>
        <? if ($_SERVER['HTTP_HOST'] != 'test.technicalworld.ru'): ?>
            <div style="display:none">
                <?= $this->render('metric/google') ?>
                <?= $this->render('metric/mail') ?>
                <?= $this->render('metric/yandex') ?>
            </div>
        <? endif ?>
        <span class="text-muted" style="float: right">
            <?= Html::a('Написать разработчикам', ["/contact.html"]) ?>
        </span>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
