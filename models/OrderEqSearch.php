<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderEq;

/**
 * OrderEqSearch represents the model behind the search form of `app\models\OrderEq`.
 */
class OrderEqSearch extends OrderEq
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'quantity'], 'integer'],
            [['vendorid', 'customename', 'type', 'noi', 'Doo', 'description', 'status'], 'safe'],
            [['unitprice', 'Total'], 'number'],
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
        $query = OrderEq::find();

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
            'quantity' => $this->quantity,
            'Doo' => $this->Doo,
            'unitprice' => $this->unitprice,
            'Total' => $this->Total,
        ]);

        $query->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'customename', $this->customename])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
