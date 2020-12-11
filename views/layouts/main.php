<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\icons\Icon;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style type="text/css">
        .recuadro{
            border: solid 1px black;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar navbar-default',
        ],
    ]);
    ?>
    <div style="width: 40%; display: inline-block; margin: 7px 230px;">
        <p class="pull-left">Creditos ganados: 2000 </p>
        <p class="pull-right"> Creditos disponibles: 1000</p>
    </div>
    <?php
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            [
                'label' => 'User',
                'items' => [
                    Yii::$app->user->isGuest ? (
                        ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                    )
                ],
            ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="text-center">
                    <img src="https://www.yiiframework.com/image/logo.svg" width="165px" height="165px" class="img-circle" style="border: solid 1px black; margin-bottom: 30px;">
                </div>
            <?= Nav::widget([

            'options' => ['class' => 'nav-pills nav-stacked'],
                'items' =>  [
                    ['label' => 'Panel', 'url' => ['/link/to']],
                    ['label' => 'Notificaciones', 'url' => ['/link/to']],
                    ['label' => 'Mis Recursos', 'url' => ['/prueba/network']],
                    ['label' => 'Propuestas', 'url' => ['/link/to']],
                    ['label' => 'Compensar', 'url' => ['/link/to']],
                    ['label' => 'Cuenta', 'url' => ['/link/to']],
                ],
            ]); ?>
            </div>
            <div class="col-lg-9" style="border-left: solid 1px black;">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
                <br>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">www.wearecontent.com<br>Valor: 200 créditos</p>
        <div class="pull-left" style="margin-left: 140px; width: 300px; border-top: solid 1px black; padding-top: 5px;">
            <p class="pull-left">
                <?= Icon::show('ok-circle', ['framework' => Icon::BSG]) ?>
            </p>
            <p class="pull-right">
                <?= Icon::show('ok-circle', ['framework' => Icon::BSG]) ?>
            </p>
        </div>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
