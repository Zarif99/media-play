<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property int $id
 * @property string $name
 *
 * @property GenreAndFilm[] $genreAndFilms
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[GenreAndFilms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenreAndFilms()
    {
        return $this->hasMany(GenreAndFilm::className(), ['genre_id' => 'id']);
    }
}
