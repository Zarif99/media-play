<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "star".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 *
 * @property StarAndFilm[] $starAndFilms
 */
class Star extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'star';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'image'], 'required'],
            [['description'], 'string'],
            [['name', 'image'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'image' => 'Image',
        ];
    }

    /**
     * Gets query for [[StarAndFilms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStarAndFilms()
    {
        return $this->hasMany(StarAndFilm::className(), ['star_id' => 'id']);
    }
}
