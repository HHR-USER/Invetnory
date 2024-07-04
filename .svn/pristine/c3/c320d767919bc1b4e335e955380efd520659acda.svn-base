<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Withdrow;
use Yii;
/**
 * WithdrowSearch represents the model behind the search form of `app\models\Withdrow`.
 */
class WithdrowSearch extends Withdrow
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'shelflife','quantity','monthlyreport','yearlyreport'], 'integer'],
            [['consbarcode','packsize','dt','lot','catagory', 'noi', 'dr', 'am', 'dp', 'expairedate', 'department', 'purchasefrom', 'unit', 'remark', 'firstname','lastname', 'username', 'mobile', 'office', 'dep'], 'safe'],
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
       // $dep="Admin";
        //$query =Withdrow::find()->where(['withdrow.dep'=>$dep]);

        $store=Yii::$app->user->identity->Type;
        $stat="Returned";
        $query = Withdrow::find()->where(['withdrow.store'=>$store,'withdrow.stat'=>!$stat]);
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'consbarcode', $this->consbarcode])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname',$this->firstname])
            ->andFilterWhere(['like', 'lastname',$this->lastname])
            ->andFilterWhere(['like', 'username',$this->username])
            ->andFilterWhere(['like', 'mobile',$this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);
        return $dataProvider;
    }
 public function searchwt($params)
    {
        $query =Withdrow::find();
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
        ]);
        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);

        return $dataProvider;
    }
public function search1($params)
    {
        $dep="Clinical";
        $query =Withdrow::find()->where(['withdrow.dep'=>$dep]);
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);

        return $dataProvider;
    }
public function searchm($params)
    {
        //$query = Withdrow::find();
        $dep="Microlab";
        $query =Withdrow::find()->where(['withdrow.dep'=>$dep]);
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);

        return $dataProvider;
    }
    public function searchp($params)
    {
        //$query = Withdrow::find();
        $dep="Pathology";
        $query =Withdrow::find()->where(['withdrow.dep'=>$dep]);
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);
        return $dataProvider;
    }
public function searchi($params)
    {
        //$query = Withdrow::find();
        $dep="IT";
    $query =Withdrow::find()->where(['withdrow.dep'=>$dep]);
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);

        return $dataProvider;
    }
public function searchsbs($params)
    {
        //$query = Withdrow::find();
        $dep="SBS";
        $query =Withdrow::find()->where(['withdrow.dep'=>$dep]);
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);

        return $dataProvider;
    }
public function searchxx($params)
    {
        $office="IT";
        $query =Withdrow::find()->where(['withdrow.office'=>$office]);
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);
        return $dataProvider;
    }
public function searchxxs($params)
    {
        $office="SBS";
        $query =Withdrow::find()->where(['withdrow.office'=>$office]);
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);
        return $dataProvider;
    }
	public function cartconsumablebalance($params)
    {
        $query =Withdrow::find();
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);

        return $dataProvider;
    }
    //find max usabel
 public function search_max($params)
    {
        $query =Withdrow::find();//->groupBy('office');
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
            'dt' => $this->dt,
            'expairedate' => $this->expairedate,
            'shelflife' => $this->shelflife,
            'totalcost' => $this->totalcost,
            'cost' => $this->cost,
            'quantity' => $this->quantity,
            'monthlyreport'=>$this->monthlyreport,
            'yearlyreport'=>$this->yearlyreport,

        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'dt', $this->dt])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like','mobile',$this->mobile])
            ->andFilterWhere(['like','office',$this->office])
            //->andFilterWhere(['like','monthlyreport',$this->monthlyreport])
            //->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like','dep',$this->dep]);
        return $dataProvider;
    }
	}

