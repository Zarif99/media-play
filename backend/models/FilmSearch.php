<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Film;

/**
 * FilmSearch represents the model behind the search form of `common\models\Film`.
 */
class FilmSearch extends Film
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lang_id', 'like', 'dislike', 'country_id', 'views', 'duration', 'category_id'], 'integer'],
            [['title', 'source', 'image', 'made_date', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Film::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'lang_id' => $this->lang_id,
            'like' => $this->like,
            'dislike' => $this->dislike,
            'made_date' => $this->made_date,
            'country_id' => $this->country_id,
            'views' => $this->views,
            'duration' => $this->duration,
            'category_id' => $this->category_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'source', $this->source])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
