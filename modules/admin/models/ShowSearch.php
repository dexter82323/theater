<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Show;

/**
 * ShowSearch represents the model behind the search form of `app\modules\admin\models\Show`.
 */
class ShowSearch extends Show
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_show', 'id_genre', 'id_director', 'id_troup', 'id_music_group', 'id_decor'], 'integer'],
            [['title', 'date_show', 'duration'], 'safe'],
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
        $query = Show::find();

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
            'id_show' => $this->id_show,
            'id_genre' => $this->id_genre,
            'date_show' => $this->date_show,
            'id_director' => $this->id_director,
            'id_troup' => $this->id_troup,
            'id_music_group' => $this->id_music_group,
            'id_decor' => $this->id_decor,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'duration', $this->duration]);

        return $dataProvider;
    }
}
