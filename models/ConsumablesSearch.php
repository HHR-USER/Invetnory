<?php
namespace app\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Consumables;
use Yii;
/**
 * ConsumablesSearch represents the model behind the search form of `app\models\Consumables`.
 */
class ConsumablesSearch extends Consumables
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','shelflife','quantity'], 'integer'],
            [['pc','consbarcode','packsize','catagory','noi','lot', 'dr', 'am', 'dp', 'expairedate', 'department', 'purchasefrom', 'unit', 'remark', 'firstname', 'lastname', 'username', 'mobile','office','dep','store'], 'safe'],
            [['totalcost', 'cost'],'number'],
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
		$qnt=0;
		$rep=6;
     $store=Yii::$app->user->identity->Type;
	 //$var=Consumables::find()->all();
     $curr=date('Y-m-d');
     //$query=Consumables::find()->where(['store'=>$store,'rep'=>$rep])->andWhere(['>','quantity',$qnt])->andWhere(['>=','expairedate',$curr])->orWhere(['!=','expairedate',NULL]); 
     $query=Consumables::find()->where(['store'=>$store,'rep'=>$rep,'consumables.st_avail'=>['Avail','ini']])->andWhere(['>','quantity',$qnt])->andWhere(['>=','expairedate',$curr])
             ->orWhere(['expairedate'=>NULL,'store'=>$store,'rep'=>$rep]);  
     // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
            'query'=>$query,
        ]);
        $this->load($params);
        if(!$this->validate()) {
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
            'consbarcode' => $this->consbarcode,
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
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'store', $this->store])
            ->andFilterWhere(['like', 'dep', $this->dep]);
        return $dataProvider;
    }
public function searchok($params)
       {
        $store=Yii::$app->user->identity->Type;
        $received=1;
        $query=Consumables::find()->where(['consumables.store'=>$store,'consumables.received'=>$received,'consumables.st_avail'=>'Avail'])->orWhere(['consumables.received'=>NULL,'consumables.store'=>$store,'consumables.st_avail'=>['ini','Avail']]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
            'query'=>$query,
        ]);
     $this->load($params);
    if(!$this->validate()){
            return $dataProvider;
        }
        // grid filtering conditions
        $query->andFilterWhere([
            'id'=>$this->id,
            'dr'=>$this->dr,
            'dp'=>$this->dp,
            'expairedate'=>$this->expairedate,
            'consbarcode'=>$this->consbarcode,
            'shelflife'=>$this->shelflife,
            'totalcost'=>$this->totalcost,
            'cost'=>$this->cost,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'store', $this->store])
            ->andFilterWhere(['like','st_avail',$this->st_avail])
            ->andFilterWhere(['like', 'dep', $this->dep]);

        return $dataProvider;
    }
public function searchrec($params)
    {
        $store=Yii::$app->user->identity->Type;
        $query = Consumables::find()->where(['store'=>$store,'wot'=>'For Units','consumables.received'=>21])->orWhere(['consumables.store'=>$store,'consumables.received'=>[1,2]])->orWhere(['consumables.store'=>"Admin",'consumables.received'=>2,'consumables.office'=>$store]);
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
            'consbarcode' => $this->consbarcode,
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
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'store', $this->store])
            ->andFilterWhere(['like', 'dep', $this->dep]);

        return $dataProvider;
    }
public function search1($params)
    {
        $var_d=date('Y-m-d');
        //$query=Consumables::find()->where(['<', 'expairedate',$var_d]);
        $query=Consumables::find()->where(['<','expairedate',$var_d])->andWhere(['>','quantity',0])->andWhere(['IS NOT','quantity',null])->andWhere(['store'=>'Admin','rep'=>6]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
            'query'=>$query,
        ]);
        $this->load($params);
        if(!$this->validate()){
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
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'consbarcode', $this->consbarcode])        
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'store', $this->store])
            ->andFilterWhere(['like', 'dep', $this->dep]);

        return $dataProvider;
    }
public function search2($params,$id)
    {
        $query = Consumables::find()->where(['id'=>$id]);

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
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'consbarcode', $this->consbarcode])         
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'lot', $this->lot])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'dep', $this->dep]);

        return $dataProvider;
    }
 public function search3($params)
    {
        $store="Admin";
        $query = Consumables::find()->where(['store'=>$store]);
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
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'consbarcode', $this->consbarcode])        
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
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
public function search4($params)
    {
        $store="Clinical";
        $query = Consumables::find()->where(['store'=>$store])->andWhere(['rep'=>4]);
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
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'consbarcode', $this->consbarcode])        
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
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
public function search5($params)
    {
        $store="Microlab";
    $query=Consumables::find()->where(['store'=>$store])->andWhere(['rep'=>0]);
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
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'consbarcode', $this->consbarcode])        
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
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
public function search6($params)
    {
     $store="Pathology";
    $d="Clinical";
    $query=Consumables::find()->where(['store'=>$store])->andWhere(['rep'=>1]);
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
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'consbarcode', $this->consbarcode])        
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
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
public function search7($params)
    {
        $store="IT";
        $query = Consumables::find()->where(['store'=>$store])->andWhere(['rep'=>2]);
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
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'consbarcode', $this->consbarcode])        
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
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
    public function search8($params)
    {
        $store="SBS";
        $query=Consumables::find()->where(['store'=>$store])->andWhere(['rep'=>3]);
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
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'consbarcode', $this->consbarcode])        
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
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
 public function search9($params)
    {
        $store="KHDSS";
        $query=Consumables::find()->where(['store'=>$store])->andWhere(['rep'=>5]);
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
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'catagory', $this->catagory])
            ->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'consbarcode', $this->consbarcode])        
            ->andFilterWhere(['like', 'am', $this->am])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
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
	public function balanclon($params)
    {
    $store="Admin";
	$var=Consumables::find()->all();
    $curr=date('Y-m-d');
	$rep=6;$qnt=0;
    //$query=Consumables::find()->where(['store'=>$store])->andWhere(['rep'=>[0,1,2,3,4,5,6,7]])->andWhere(['>=','expairedate',$curr]);
    $query=Consumables::find()->where(['store'=>$store,'rep'=>$rep])->andWhere(['>=','quantity',$qnt])->andWhere(['>=','expairedate',$curr])->orWhere(['!=','expairedate',NULL]);    
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
            'consbarcode' => $this->consbarcode,
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
     public function search_sname($params)
     {
		$qnt=0;
		$rep=6;
     $store=Yii::$app->user->identity->Type;
	 //$var=Consumables::find()->all();
     $curr=date('Y-m-d');
     $query=Consumables::find()->where(['store'=>$store,'rep'=>$rep])->andWhere(['>','quantity',$qnt])->andWhere(['>=','expairedate',$curr])
             ->orWhere(['expairedate'=>NULL,'store'=>$store,'rep'=>$rep]);  
     // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
            'query'=>$query,
        ]);
        $this->load($params);
        if(!$this->validate()) {
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
            'consbarcode' => $this->consbarcode,
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
	}
