<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="star-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Star', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'description:ntext',
            'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
