<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ростовский театр драмы им.Горького</title>
    <meta name="description" content="">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
    <link rel="icon" href="img/core-img/favicon.ico">
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
<header class="header-area">
    <div class="musica-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid"  >
                <nav class="classy-navbar justify-content-between" id="musicaNav">
<?php
NavBar::begin([
    'options' => [
        'class' => 'classy-navbar-togler',
    ],

]);
?>
                    <a href="index.html" class="nav-brand" style="position: absolute;" ><img src="img/core-img/logo.png" alt=""></a>
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                <div class="classy-menu">
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
<?php
echo Nav::widget([
    'options' => ['class' => 'classynav  navbar-right'],
    'items' => [

        ['label' => 'Домой', 'url' => ['/site/index']],
        ['label' => 'О театре',  'url'=>['site/about']],
        ['label'=>'Афиша','url'=>['main/rep']],
        ['label'=>'Труппа','url'=>['main/rep']],
        ['label'=>'Репертуар','url'=>['main/rep']],
        ['label' => 'Музыканты', 'url' => ['/site/contact']],
        ['label'=>'Управлять','url'=>['/site/about'],'visible'=>Yii::$app->user->identity->role =="Admin"],
        Yii::$app->user->isGuest ? (
        ['label' => 'Вход', 'url' => ['/site/login']]
        ) : (

            '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выход (' . Yii::$app->user->identity->username . ')',
                ['class' => 'logout-btn']
            )

            . Html::endForm()

            . '</li>'

        ),
    ],

]);
NavBar::end();
?>
                </div>
                </nav>
            </div>
        </div>
    </div>
</header>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>


<footer class="footer-area section-padding-80-0">
    <div class="container-fluid">
        <div class="row">

            <!-- Footer Widget Area -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="footer-widget-area mb-50">
                    <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-xl-2">
                <div class="footer-widget-area mb-50">
                    <div class="widget-title">
                        <h4>Сервисы</h4>
                    </div>
                    <nav >
                        <ul class="footer-nav">
                            <li><a href="#">Арт-кафе</a></li>
                            <li><a href="#">Театр на подушках</a></li>
                            <li><a href="#">Мастер-класс</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-xl-2">
            <div class="footer-widget-area mb-50">
                <div class="widget-title">
                    <h4>Подписываетесь </h4>
                </div>
                    <div class="social-media">
                  <div class="social-img">
                      <a href="https://vk.com/rostov_teatrgorkogo"><img src="img/social-img/vk.png"> </a>
                  </div>
                    <div class="social-img">
                        <a href="https://www.instagram.com/gorky_teatr_rostov/"><img src="img/social-img/inst.png"> </a>
                    </div>
                        <div class="social-img">
                            <a href="https://www.facebook.com/ratd.gorky"><img src="img/social-img/facebook.png"> </a>
                        </div>
                        <div class="social-img">
                            <a href="https://twitter.com/"><img src="img/social-img/twitter.png"> </a>
                        </div>
                    </div>
            </div>
            </div>
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
