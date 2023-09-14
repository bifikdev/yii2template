<?php

use yii\helpers\Html;
use app\widgets\Alert;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;
use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Url;

AppAsset::register($this);
$this->title = Yii::$app->name;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://<?= $_SERVER['SERVER_NAME'] ?>/web/favicon.ico">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php

    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar navbar-dark navbar-expand-lg bg-dark mr-auto shadow'],
    ]);

    // Меню слева
    $leftMenu = [];
    $rightMenu = [];

    // Левое меню
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav d-flex col-6'],
        'items' => $leftMenu,
        'encodeLabels' => false,
    ]);

    // Правое меню
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav d-flex col-6'],
        'items' => $leftMenu,
        'encodeLabels' => false,
    ]);

    NavBar::end();
    ?>

    <div class="container">
        <?php
        echo Alert::widget();
        echo Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []]);
        echo $content;
        ?>

    </div>
</div>

<br>

<footer class="footer">
    <div class="container">
        &copy; <?= Yii::$app->ScriptInfo->getLicence() ?> 2013-<?= date('Y') ?>
        <?= Yii::t('app', 'MAIN_FOOTER_VERSION', ['text' => Yii::$app->ScriptInfo->getVersion()]) ?>
        <?= Yii::t('app', 'MAIN_FOOTER_REVISION', ['text' => Yii::$app->ScriptInfo->getRevision()]) ?>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
