<?php


namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

class Statics
{
    public static function getCategory()
    {
        return ArrayHelper::map(Category::find()->all(), 'id', 'name');
    }

    public static function getLang()
    {
        return ArrayHelper::map(Lang::find()->all(), 'id', 'name');
    }

    public static function getCountry()
    {
        return ArrayHelper::map(Country::find()->all(), 'id', 'name');
    }

    public static function printFilm($model)
    {

    }
}