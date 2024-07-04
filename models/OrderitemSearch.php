<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Orderitem;

/**
 * OrderitemSearch represents the model behind the search form of `app\models\Orderitem`.
 */
class OrderitemSearch extends Orderitem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'quantity', 'foreign_key', 'valuecheck'], 'integer'],
            [['assetbarcode','vendorid', 'noi', 'measurement', 'customename', 'type', 'description', 'custid', 'unit', 'birrformat'], 'safe'],
            [['packsize', 'cost', 'Total'], 'number'],
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
        $query = Orderitem::find();

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
            'packsize' => $this->packsize,
            'quantity' => $this->quantity,
            'cost' => $this->cost,
            'Total' => $this->Total,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'measurement', $this->measurement])
            ->andFilterWhere(['like', 'customename', $this->customename])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'custid', $this->custid])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat]);

        return $dataProvider;
    }
public function search1($params,$id)
    {
        $query = Orderitem::find()->where(['foreign_key'=>$id]);

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
            'packsize' => $this->packsize,
            'quantity' => $this->quantity,
            'cost' => $this->cost,
            'Total' => $this->Total,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);
        $query->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'measurement', $this->measurement])
            ->andFilterWhere(['like', 'customename', $this->customename])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'custid', $this->custid])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat]);
        return $dataProvider;
    }
}
