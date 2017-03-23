<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dead;

/**
 * DeadSearch represents the model behind the search form about `backend\models\Dead`.
 */
class DeadSearch extends Dead
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'post_id', 'post_user_id'], 'integer'],
            [['submission_id', 'general_condition', 'body_part_found', 'body_condition', 'apparent_sex', 'age_group', 'height', 'weight', 'hair_length', 'hair_color', 'facial_hair_type', 'facial_hair_length', 'facial_hair_color', 'distinguishing_features', 'scar_location', 'tattoo_location', 'birthmark_location', 'mole_location', 'upper_garment', 'upper_garment_color', 'lower_garment', 'lower_garment_color', 'footwear', 'eyewear', 'galsses_color', 'contact_lens_color', 'photo'], 'safe'],
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
        $query = Dead::find();

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
            'post_id' => $this->post_id,
            'post_user_id' => $this->post_user_id,
        ]);

        $query->andFilterWhere(['like', 'submission_id', $this->submission_id])
            ->andFilterWhere(['like', 'general_condition', $this->general_condition])
            ->andFilterWhere(['like', 'body_part_found', $this->body_part_found])
            ->andFilterWhere(['like', 'body_condition', $this->body_condition])
            ->andFilterWhere(['like', 'apparent_sex', $this->apparent_sex])
            ->andFilterWhere(['like', 'age_group', $this->age_group])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'hair_length', $this->hair_length])
            ->andFilterWhere(['like', 'hair_color', $this->hair_color])
            ->andFilterWhere(['like', 'facial_hair_type', $this->facial_hair_type])
            ->andFilterWhere(['like', 'facial_hair_length', $this->facial_hair_length])
            ->andFilterWhere(['like', 'facial_hair_color', $this->facial_hair_color])
            ->andFilterWhere(['like', 'distinguishing_features', $this->distinguishing_features])
            ->andFilterWhere(['like', 'scar_location', $this->scar_location])
            ->andFilterWhere(['like', 'tattoo_location', $this->tattoo_location])
            ->andFilterWhere(['like', 'birthmark_location', $this->birthmark_location])
            ->andFilterWhere(['like', 'mole_location', $this->mole_location])
            ->andFilterWhere(['like', 'upper_garment', $this->upper_garment])
            ->andFilterWhere(['like', 'upper_garment_color', $this->upper_garment_color])
            ->andFilterWhere(['like', 'lower_garment', $this->lower_garment])
            ->andFilterWhere(['like', 'lower_garment_color', $this->lower_garment_color])
            ->andFilterWhere(['like', 'footwear', $this->footwear])
            ->andFilterWhere(['like', 'eyewear', $this->eyewear])
            ->andFilterWhere(['like', 'galsses_color', $this->galsses_color])
            ->andFilterWhere(['like', 'contact_lens_color', $this->contact_lens_color])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
