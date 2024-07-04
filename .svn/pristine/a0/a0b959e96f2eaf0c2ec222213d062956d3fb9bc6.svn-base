<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Stock;
use Yii;
/**
 * StockSearch represents the model behind the search form of `app\models\Stock`.
 */
class StockSearch extends Stock
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'quantity'], 'integer'],
            [['specification','dor','fname','catagory', 'noi', 'NOA', 'department', 'birrformat', 'purchasefrom', 'customename', 'type', 'vendorid'], 'safe'],
            [['cost'], 'number'],
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
    public function search($params,$id)
        {
        $query = Stock::find()->where(['vendorid'=>$id]);

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
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'customename', $this->customename])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid]);

        return $dataProvider;
    }
public function search_up($params)
        {
        $query=Stock::find()->where(['type'=>"Consumable",'email'=>Yii::$app->user->identity->email]);

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
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'customename', $this->customename])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid]);

        return $dataProvider;
    }
public function search_upa($params)
        {
        $query=Stock::find()->where(['type'=>"None-consumable",'email'=>Yii::$app->user->identity->email]);

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
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'customename', $this->customename])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid]);

        return $dataProvider;
    }
public function searchap($params)
    {
        $query =Stock::find()->where(['department'=>Yii::$app->user->identity->Type])->orWhere(['line_conf'=>2]);

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
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'customename', $this->customename])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid]);
        return $dataProvider;
    }
public function search1($params,$id)
        {
        $query = Stock::find()->where(['vendorid'=>$id]);

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
            'cost' => $this->cost,
        ]);
        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'customename', $this->customename])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid]);
        return $dataProvider;
    }
public function searchh($params)
        {
            $t="Consumable";
        $query=Stock::find()->where(['department'=>Yii::$app->user->identity->Type,'status'=>NULL])->where(['type'=>$t,'line_conf'=>1]);

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
            'cost' => $this->cost,
        ]);
        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'customename', $this->customename])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid]);
        return $dataProvider;
    }
public function search_h($params)
        {
            $t="None-consumable";
        $query=Stock::find()->where(['department'=>Yii::$app->user->identity->Type,'status'=>NULL])->where(['type'=>$t,'line_conf'=>1]);

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
            'cost' => $this->cost,
        ]);
        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'customename', $this->customename])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid]);
        return $dataProvider;
    }}