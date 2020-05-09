<?php

use common\models\Statics;
use yii\bootstrap\Dropdown;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Film */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="film-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source')->fileInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'lang_id')->dropDownList(Statics::getLang())?>

    <?= $form->field($model, 'like')->textInput() ?>

    <?= $form->field($model, 'dislike')->textInput() ?>

    <?= $form->field($model, 'made_date')->textInput() ?>

    <?= $form->field($model, 'country_id')->dropDownList(Statics::getCountry()) ?>

    <?= $form->field($model, 'views')->textInput() ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'category_id')->dropDownList(Statics::getCategory()) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
