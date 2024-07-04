<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Consumablesit;

/**
 * ConsumablesitSearch represents the model behind the search form of `app\models\Consumablesit`.
 */
class ConsumablesitSearch extends Consumablesit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'quantity', 'shelflife'], 'integer'],
            [['catagory', 'noi', 'serial', 'packsize', 'unit', 'lot', 'dp', 'expairedate', 'shelflifedeicide', 'location', 'shelfname', 'shelfno', 'dr', 'am', 'department', 'birrformat', 'purchasefrom', 'remark', 'firstname', 'lastname', 'username', 'mobile', 'personnelid', 'vendorid', 'dt', 'office', 'dep', 'description'], 'safe'],
            [['totalcost', 'cost', 'unitprice'], 'number'],
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
        $query = Consumablesit::find();

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
            'dp' => $this->dp,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'dr' => $this->dr,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'dt' => $this->dt,
            'unitprice' => $this->unitprice,
        ]);
        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'packsize', $this->packsize])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
