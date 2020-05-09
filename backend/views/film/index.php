<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FilmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Films';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Film', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'title',
            'source',
            'image',
            [
                    'attribute' => 'lang_id',
                    'value' => 'lang.name',
                    'filter' => Select2::widget([
                            'data' => \yii\helpers\ArrayHelper::map(\common\models\Lang::find()->all(), 'id', 'name'),
                            'model' => $searchModel,
                            'attribute' => 'lang_id',
                            'options' => ['placeholder' =>'search' ],
                            'pluginOptions' => [
                                    'allowClear'=>true
                            ]
                    ])
            ],

            'like',
            'dislike',
            'made_date',
         //   'country_id',
            [
                'attribute' => 'country_id',
                'value' => 'country.name',
                'filter' => Select2::widget([
                    'data' => \yii\helpers\ArrayHelper::map(\common\models\Country::find()->all(), 'id', 'name'),
                    'model' => $searchModel,
                    'attribute' => 'country_id',
                    'options' => ['placeholder' =>'search' ],
                    'pluginOptions' => [
                        'allowClear'=>true
                    ]
                ])
            ],
            'views',
            'duration',
            //'category_id',
            [
                'attribute' => 'category_id',
                'value' => 'category.name',
                'filter' => Select2::widget([
                    'data' => \yii\helpers\ArrayHelper::map(\common\models\Category::find()->all(), 'id', 'name'),
                    'model' => $searchModel,
                    'attribute' => 'category_id',
                    'options' => ['placeholder' =>'search' ],
                    'pluginOptions' => [
                        'allowClear'=>true
                    ]
                ])
            ],
//            'created_at',
//            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
