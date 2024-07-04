<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Consumablesuser;

/**
 * ConsumablesuserSearch represents the model behind the search form of `app\models\Consumablesuser`.
 */
class ConsumablesuserSearch extends Consumablesuser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'shelflife', 'fk_consumable', 'fk_forcata', 'fk_borrows', 'quantity'], 'integer'],
            [['catagory', 'noi', 'dr', 'am', 'dp', 'expairedate', 'department', 'purchasefrom', 'unit', 'remark', 'firstname', 'lastname', 'username', 'mobile', 'office'], 'safe'],
            [['totalcost', 'cost'], 'number'],
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
        $query = Consumablesuser::find();

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
            'dr' => $this->dr,
            'dp' => $this->dp,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'fk_consumable' => $this->fk_consumable,
            'fk_forcata' => $this->fk_forcata,
            'fk_borrows' => $this->fk_borrows,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office]);

        return $dataProvider;
    }
}
