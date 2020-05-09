<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "star_and_film".
 *
 * @property int $id
 * @property int $film_id
 * @property int $star_id
 *
 * @property Film $film
 * @property Star $star
 */
class StarAndFilm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'star_and_film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['film_id', 'star_id'], 'required'],
            [['film_id', 'star_id'], 'integer'],
            [['film_id'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['film_id' => 'id']],
            [['star_id'], 'exist', 'skipOnError' => true, 'targetClass' => Star::className(), 'targetAttribute' => ['star_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'film_id' => 'Film ID',
            'star_id' => 'Star ID',
        ];
    }

    /**
     * Gets query for [[Film]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::className(), ['id' => 'film_id']);
    }

    /**
     * Gets query for [[Star]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStar()
    {
        return $this->hasOne(Star::className(), ['id' => 'star_id']);
    }
}
