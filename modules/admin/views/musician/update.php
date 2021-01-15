<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Musician */

$this->title = 'Update Musician: ' . $model->id_musician;
$this->params['breadcrumbs'][] = ['label' => 'Musicians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_musician, 'url' => ['view', 'id' => $model->id_musician]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="musician-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
