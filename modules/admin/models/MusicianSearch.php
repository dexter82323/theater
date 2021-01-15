<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Musician;

/**
 * MusicianSearch represents the model behind the search form of `app\modules\admin\models\Musician`.
 */
class MusicianSearch extends Musician
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_musician', 'age'], 'integer'],
            [['name_musician', 'gender', 'photo'], 'safe'],
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
        $query = Musician::find();

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
            'id_musician' => $this->id_musician,
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'name_musician', $this->name_musician])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
