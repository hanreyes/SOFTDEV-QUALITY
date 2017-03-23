<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Volunteer;

/**
 * VolunteerSearch represents the model behind the search form about `backend\models\Volunteer`.
 */
class VolunteerSearch extends Volunteer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['address', 'volunteer_experience', 'occupation', 'educational_attainment', 'availability', 'serve_more_than_one', 'driver_license', 'convicted', 'conviction_reason', 'physical_limitation', 'limitation_description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Volunteer::find();

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
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'volunteer_experience', $this->volunteer_experience])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'educational_attainment', $this->educational_attainment])
            ->andFilterWhere(['like', 'availability', $this->availability])
            ->andFilterWhere(['like', 'serve_more_than_one', $this->serve_more_than_one])
            ->andFilterWhere(['like', 'driver_license', $this->driver_license])
            ->andFilterWhere(['like', 'convicted', $this->convicted])
            ->andFilterWhere(['like', 'conviction_reason', $this->conviction_reason])
            ->andFilterWhere(['like', 'physical_limitation', $this->physical_limitation])
            ->andFilterWhere(['like', 'limitation_description', $this->limitation_description]);

        return $dataProvider;
    }
}
