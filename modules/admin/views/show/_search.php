<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ShowSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="show-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_show') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'id_genre') ?>

    <?= $form->field($model, 'date_show') ?>

    <?= $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'id_director') ?>

    <?php // echo $form->field($model, 'id_troup') ?>

    <?php // echo $form->field($model, 'id_music_group') ?>

    <?php // echo $form->field($model, 'id_decor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
