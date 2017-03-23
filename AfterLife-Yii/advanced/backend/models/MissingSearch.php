<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Missing;

/**
 * MissingSearch represents the model behind the search form about `backend\models\Missing`.
 */
class MissingSearch extends Missing
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'post_id', 'post_user_id'], 'integer'],
            [['submission_id', 'photo', 'first_name', 'middle_name', 'last_name', 'address', 'marital_status', 'sex', 'birthdate', 'age', 'occupation', 'date_of_disappearance', 'time_of_disappearance', 'last_seen', 'relationship_with_person', 'height', 'weight', 'eye_color', 'hair_length', 'hair_color', 'facial_hair', 'facial_hair_color', 'facial_hair_length', 'ear_shape', 'eyebrows_size', 'nose_size', 'hand_size', 'feet_size', 'distinguishing_features', 'scar_location', 'tattoo_location', 'birthmark_location', 'mole_location', 'upper_garment', 'upper_garment_color', 'lower_garment', 'lower_garment_color', 'footwear', 'eyewear', 'glasses_color', 'contact_lens_color'], 'safe'],
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
        $query = Missing::find();

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
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'marital_status', $this->marital_status])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'birthdate', $this->birthdate])
            ->andFilterWhere(['like', 'age', $this->age])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'date_of_disappearance', $this->date_of_disappearance])
            ->andFilterWhere(['like', 'time_of_disappearance', $this->time_of_disappearance])
            ->andFilterWhere(['like', 'last_seen', $this->last_seen])
            ->andFilterWhere(['like', 'relationship_with_person', $this->relationship_with_person])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'eye_color', $this->eye_color])
            ->andFilterWhere(['like', 'hair_length', $this->hair_length])
            ->andFilterWhere(['like', 'hair_color', $this->hair_color])
            ->andFilterWhere(['like', 'facial_hair', $this->facial_hair])
            ->andFilterWhere(['like', 'facial_hair_color', $this->facial_hair_color])
            ->andFilterWhere(['like', 'facial_hair_length', $this->facial_hair_length])
            ->andFilterWhere(['like', 'ear_shape', $this->ear_shape])
            ->andFilterWhere(['like', 'eyebrows_size', $this->eyebrows_size])
            ->andFilterWhere(['like', 'nose_size', $this->nose_size])
            ->andFilterWhere(['like', 'hand_size', $this->hand_size])
            ->andFilterWhere(['like', 'feet_size', $this->feet_size])
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
            ->andFilterWhere(['like', 'glasses_color', $this->glasses_color])
            ->andFilterWhere(['like', 'contact_lens_color', $this->contact_lens_color]);

        return $dataProvider;
    }
}
