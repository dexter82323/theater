<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\UrlManager;
?>
<?php $this->title='Админка'; ?>

<div class="site-nav">

</div>
<div class="admin-default-index">
    <h1 align="center">Управлять базой данных</h1>
</div>
<div  align="center" style="width: 500px; margin: 0 auto" >
<?php echo Html::a(' Пользователи ' , ['/admin/users'], ['class' => 'btn btn-primary btn-lg  btn-block  active ']) ?>
<?php echo Html::a('Предстваления', ['/admin/show'], ['class' => 'btn btn-primary btn-lg  btn-block  active ']) ?>
<?php echo Html::a('Актеры', ['/admin/actor'], ['class' => 'btn btn-primary btn-lg btn-block   active']) ?>
<?php echo Html::a('Музыканты', ['/admin/musician'], ['class' => 'btn btn-primary btn-lg btn-block   active']) ?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

