<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Visited;

/**
 * VisitedSearch represents the model behind the search form of `app\models\Visited`.
 */
class VisitedSearch extends Visited
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['name', 'vms_type_id', 'id_number', 'gender', 'phone', 'email', 'photo', 'address', 'visit_code', 'visit_date', 'visit_time', 'visit_long', 'employe_id', 'additional_info', 'created'], 'safe'],
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
        $query = Visited::find();
        // $query = Yii::$app->db->createCommand('SELECT * FROM visited WHERE status <> 2')->queryAll();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'created' => SORT_DESC
                ]
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andWhere(['!=', 'status', 2]);
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'visit_date' => $this->visit_date,
            'created' => $this->created,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'vms_type_id', $this->vms_type_id])
            ->andFilterWhere(['like', 'id_number', $this->id_number])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'visit_code', $this->visit_code])
            ->andFilterWhere(['like', 'visit_time', $this->visit_time])
            ->andFilterWhere(['like', 'visit_long', $this->visit_long])
            ->andFilterWhere(['like', 'employe_id', $this->employe_id])
            ->andFilterWhere(['like', 'additional_info', $this->additional_info]);

        return $dataProvider;
    }
}
