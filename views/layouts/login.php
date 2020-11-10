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
    <link rel="stylesheet" href="css/style_log.css">
</head>
<body>
<?php $this->beginBody() ?>

    <?= $content ?>


<?php $this->endBody() ?>
</body>
</html>
<script src="js/index_log.js"></script>
<?php $this->endPage() ?>
