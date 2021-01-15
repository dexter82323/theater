<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\MusicianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Musicians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="musician-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Musician', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_musician',
            'name_musician',
            'gender',
            'age',
            'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
