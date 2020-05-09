<?php

namespace frontend\models;

use common\models\Category;
use common\models\Country;
use common\models\Lang;
use Yii;

/**
 * This is the model class for table "film".
 *
 * @property int $id
 * @property string $title
 * @property string $source
 * @property string $image
 * @property int $lang_id
 * @property int $like
 * @property int $dislike
 * @property string $made_date
 * @property int $country_id
 * @property int $views
 * @property int $duration
 * @property int $category_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Lang $lang
 * @property Country $country
 * @property Category $category
 * @property GenreAndFilm[] $genreAndFilms
 * @property StarAndFilm[] $starAndFilms
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'source', 'image', 'lang_id', 'like', 'dislike', 'made_date', 'country_id', 'views', 'duration', 'category_id'], 'required'],
            [['lang_id', 'like', 'dislike', 'country_id', 'views', 'duration', 'category_id'], 'integer'],
            [['made_date', 'created_at', 'updated_at'], 'safe'],
            [['title', 'source', 'image'], 'string', 'max' => 255],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'source' => 'Source',
            'image' => 'Image',
            'lang_id' => 'Lang ID',
            'like' => 'Like',
            'dislike' => 'Dislike',
            'made_date' => 'Made Date',
            'country_id' => 'Country ID',
            'views' => 'Views',
            'duration' => 'Duration',
            'category_id' => 'Category ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Lang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[GenreAndFilms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenreAndFilms()
    {
        return $this->hasMany(GenreAndFilm::className(), ['film_id' => 'id']);
    }

    /**
     * Gets query for [[StarAndFilms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStarAndFilms()
    {
        return $this->hasMany(StarAndFilm::className(), ['film_id' => 'id']);
    }
}
