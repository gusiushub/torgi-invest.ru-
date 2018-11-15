<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RealtySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Realties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="realty-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Realty', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'address:ntext',
            'description:ntext',
            'img:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>