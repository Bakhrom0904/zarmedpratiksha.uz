<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Doctor;

/**
 * DoctorSearch represents the model behind the search form of `common\models\Doctor`.
 */
class DoctorSearch extends Doctor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'department_id'], 'integer'],
            [['phone', 'date', 'img', 'experience', 'about_uz', 'about_ru', 'about_en', 'first_name_ru', 'last_name_ru', 'middle_name_ru', 'first_name_uz', 'last_name_uz', 'middle_name_uz', 'first_name_en', 'last_name_en', 'middle_name_en'], 'safe'],
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
        $query = Doctor::find();

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
            'department_id' => $this->department_id,
        ]);

        $query->andFilterWhere(['like', 'first_name_uz', $this->first_name_uz])
            ->andFilterWhere(['like', 'first_name_ru', $this->first_name_ru])
            ->andFilterWhere(['like', 'first_name_en', $this->first_name_en])
            ->andFilterWhere(['like', 'last_name_uz', $this->last_name_uz])
            ->andFilterWhere(['like', 'last_name_ru', $this->last_name_ru])
            ->andFilterWhere(['like', 'last_name_en', $this->last_name_en])
            ->andFilterWhere(['like', 'middle_name_uz', $this->middle_name_uz])
            ->andFilterWhere(['like', 'middle_name_ru', $this->middle_name_ru])
            ->andFilterWhere(['like', 'middle_name_en', $this->middle_name_en])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'experience', $this->experience])
            ->andFilterWhere(['like', 'about_uz', $this->about_uz])
            ->andFilterWhere(['like', 'about_ru', $this->about_ru])
            ->andFilterWhere(['like', 'about_en', $this->about_en]);

        return $dataProvider;
    }
}
