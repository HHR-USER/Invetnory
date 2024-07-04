<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Logtable;

/**
 * LogtableSearch represents the model behind the search form of `app\models\Logtable`.
 */
class LogtableSearch extends Logtable
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pid', 'quantity', 'ordernumber'], 'integer'],
            [['fullname', 'stockname', 'action', 'dateentered', 'personnelid'], 'safe'],
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
        $query = Logtable::find();

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
            'pid' => $this->pid,
            'quantity' => $this->quantity,
            'dateentered' => $this->dateentered,
            'ordernumber' => $this->ordernumber,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'stockname', $this->stockname])
            ->andFilterWhere(['like', 'action', $this->action])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid]);

        return $dataProvider;
    }
}
