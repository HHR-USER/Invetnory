<?php
namespace app\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Request;
use yii\helpers\ArrayHelper;
use Yii;
/**
 * RequestSearch represents the model behind the search form of `app\models\Request`.
 */
class RequestSearch extends Request
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'quantity', 'foreign_key', 'valuecheck'], 'integer'],
            [['noi', 'type', 'dor', 'fname', 'specification', 'personnelid', 'vendorid', 'email', 'requestno', 'dep', 'var_dep', 'confirm', 'office', 'department', 'f_l_s', 'confirmbymicro', 'status'], 'safe'],
            [['packsize'], 'number'],
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
        $query=Request::find();
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
            'query'=>$query,
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
public function searchap($params)
    {
     $query=Stock::find()->where(['department'=>Yii::$app->user->identity->Type,'status'=>NULL])->where(['line_conf'=>1]);
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
            'packsize' => $this->packsize,
            'quantity' => $this->quantity,
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);
        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
 public function search1($params)
    {
$dep="Clinical";
    $query =Request::find()->where(['request.dep'=>$dep]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }
public function search2($params)
    {
$dep="Microlab";
$t="Consumable";
    $query=Request::find()->where(['request.office'=>Yii::$app->user->identity->Type])->andWhere(['request.type'=>$t]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }
public function search3($params)
    {
     $dep="Pathology";
    $query =Request::find()->where(['request.dep'=>$dep]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }
public function search4($params)
    {
$dep="IT";
    $query =Request::find()->where(['request.dep'=>$dep]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }
public function search5($params)
    {
   $dep="SBS";
    $query =Request::find()->where(['request.dep'=>$dep]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }
public function search1a($params)
    {
     $dep="Clinicala";
    $query =Request::find()->where(['request.dep'=>$dep]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);
        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }
public function search2a($params)
    {
      $dep="Microlaba";
      $t="None-consumable";
    $query =Request::find()->where(['request.office'=>Yii::$app->user->identity->Type])->andWhere(['type'=>$t]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);
        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }
public function search3a($params)
    {
   $dep="Pathologya";
    $query =Request::find()->where(['request.dep'=>$dep]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);
        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }
public function search4a($params)
    {
    $dep="ITa";
    $query =Request::find()->where(['request.dep'=>$dep]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }
public function search5a($params)
    {
$dep="SBSa";
    $query =Request::find()->where(['request.dep'=>$dep]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
            'query' => $query,
        ]);
        $this->load($params);

        if (!$this->validate()){
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

 // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'packsize' => $this->packsize,
            'quantity' => $this->quantity,
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }
public function search_l($params)
    {

     $query=Request::find()->where(["request.lnm_email"=>Yii::$app->user->identity->lnm_email]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
            'query'=>$query,
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }

public function search_po($params)
    {
   $dep="None-consumable";
    $query =Request::find()->where(['request.type'=>$dep]);
        // add conditions that should always apply here
        $dataProvider=new ActiveDataProvider([
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
            'dor' => $this->dor,
            'foreign_key' => $this->foreign_key,
            'valuecheck' => $this->valuecheck,
        ]);

        $query->andFilterWhere(['like', 'noi', $this->noi])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'specification', $this->specification])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'requestno', $this->requestno])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'var_dep', $this->var_dep])
            ->andFilterWhere(['like', 'confirm', $this->confirm])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'f_l_s', $this->f_l_s])
            ->andFilterWhere(['like', 'confirmbymicro', $this->confirmbymicro])
            ->andFilterWhere(['like', 'status', $this->status]);
        return $dataProvider;
    }}