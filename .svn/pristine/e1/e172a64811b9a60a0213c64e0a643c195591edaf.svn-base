<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Assets;
use Yii;
/**
 * AssetsSearch represents the model behind the search form of `app\models\Assets`.
 */
class AssetsSearch extends Assets
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'quantity', 'shelflife', 'cost', 'totalcost', 'ASSETID', 'PARENTASSET_ID', 'ASSETGROUP_ID', 'LOCATION_ID', 'VENDOR_ID', 'OWNER_PERSONNELGROUP_ID', 'OWNER_PERSONNEL_ID', 'SERVICEAGREEMENT_ID', 'CUSTODIAN_PERSONNEL_ID', 'STATUS_ID', 'mobile'], 'integer'],
            [['catagoryname','unit','serial','MODEL','serviceyear','shelflifedeicide','shelfname', 'shelfno', 'birrformat', 'purchasefrom', 'NOA', 'DOM', 'DOC', 'RD', 'TD', 'Status', 'Place','RC','Picture','RNl','RM','assetbarcode','SERIALNUMBER','DEPARTMENT_ID','CONDITION_ID','SCRAPVALUE','CURRENTVALUE','PURCHASEPRICE','ACCOUNTCODE', 'PURCHASEORDERNUMBER', 'ISCHECKEDOUT', 'ASSETNAME', 'BRAND', 'MANUFACTURER', 'AUTOBARCODE', 'ASSETTYPE', 'LOCATION', 'CONDITIONs', 'CUSTODIAN', 'INCLUDEINAUDIT','DEPRECIATIONMETHOD','RECOVERYPERIOD','DATEINSERVICE','DATEAUDITED', 'DUEDATE', 'DATEPURCHASED', 'CHECKOUTDATE', 'DATECREATED', 'DATEUPDATED', 'LASTAUDITDATE', 'DATEWARRANTYEXPIRES', 'NEXTSERVICEDUEDATE', 'NOTES', 'fname', 'lname', 'office', 'username','dep','returnables','facl','asset_code','doreturnable','yearlyreport'],'safe'],
          ];}

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
       // $query = Assets::find();

        $store=Yii::$app->user->identity->Type;
        $v=1;
        $fx="fixed";
        $query=Assets::find()->where(['store'=>$store,'fxa'=>NULL])->andWhere(['quantity'=>$v]);
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
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);
        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep',$this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like','returnables', $this->returnables]);

        return $dataProvider;
    }
public function searchok($params)
    {
        $store=Yii::$app->user->identity->Type;
        $received=1;
        $adm="Admin";
        $query=Assets::find()->where(['assets.store'=>$store,'assets.received'=>$received])->orWhere(['assets.received'=>3,'assets.store'=>$store,'assets.fxa'=>NULL])->orWhere(['assets.received'=>1,'assets.store'=>$store])->andWhere(['>','quantity',0]);
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
            'quantity' => $this->quantity,
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);
        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);
        return $dataProvider;
    }
public function searchrec($params)
    {
        $store=Yii::$app->user->identity->Type;
        $query=Assets::find()->where(['wot'=>'For Units','store'=>$store,'assets.received'=>[4,21]])->orWhere(['assets.store'=>$store,'assets.received'=>[1,2]])->orWhere(['assets.store'=>"Admin",'assets.received'=>2,'assets.office'=>$store]);        // add conditions that should always apply here

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
            'quantity' => $this->quantity,
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);
        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);

        return $dataProvider;
    }
public function search2($params,$id)
    {
        $query = Assets::find()->where(['id'=>$id]);

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
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);

        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
		    ->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);

        return $dataProvider;
    }
public function search3($params)
    {
        $type="Admin";
        $query = Assets::find()->where(['assets.store'=>$type,'assets.received'=>3]);

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
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);

        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);

        return $dataProvider;
    }
public function search5($params)
    {
        $type="Microlab";
        $query=Assets::find()->where(['assets.store'=>$type,'assets.received'=>3]);

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
            'quantity' => $this->quantity,
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);

        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);

        return $dataProvider;
    }
public function search6($params)
    {
        $type="Pathology";
        $query =Assets::find()->where(['assets.store'=>$type,'assets.received'=>1]);

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
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);

        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like','dep',$this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like','returnables', $this->returnables]);

        return $dataProvider;
    }
public function search7($params)
    {
        $type="IT";
        $query =Assets::find()->where(['assets.store'=>$type,'assets.received'=>1]);

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
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);

        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);
        return $dataProvider;
    }
public function search8($params)
    {
        $type="SBS";
        $query = Assets::find()->where(['assets.store'=>$type,'assets.received'=>1]);

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
            'quantity' => $this->quantity,
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);

        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);

        return $dataProvider;
    }
public function search4($params)
    {
        $type="Clinical";
        $query = Assets::find()->where(['assets.store'=>$type,'assets.received'=>1]);

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
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);

        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);

        return $dataProvider;
    }
public function search9($params)
    {
        $type="KHDSS";
        $query=Assets::find()->where(['assets.store'=>$type,'assets.received'=>1]);
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
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);

        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);

        return $dataProvider;
    }
public function searchfixed($params)
    {
        $type="Admin";
        $fx="fixed";
        $query=Assets::find()->where(['assets.fxa'=>$fx]);
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
            'quantity' => $this->quantity,
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
            'loa'=>$this->loa,
        ]);

        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'asset_code', $this->asset_code])
            ->andFilterWhere(['like', 'loa', $this->loa])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'facl', $this->facl])
            ->andFilterWhere(['like','asset_code', $this->asset_code])
		    ->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like','returnables', $this->returnables]);

        return $dataProvider;
    }
public function search_list($params)
    {
       $store="Admin";
       $rep=6;
       $rec=3;
        $query=Assets::find()->where(['store'=>$store,'received'=>$rec,'rep'=>$rep]);
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
            'quantity' => $this->quantity,
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
        ]);
        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);
        return $dataProvider;
    }
public function searchnfixed($params)
    {
        $type="Admin";
        $fx="nfixed";
        $query=Assets::find()->where(['assets.fxa'=>$fx]);
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
            'quantity' => $this->quantity,
            'shelflife' => $this->shelflife,
            'cost' => $this->cost,
            'totalcost' => $this->totalcost,
            'ASSETID' => $this->ASSETID,
            'PARENTASSET_ID' => $this->PARENTASSET_ID,
            'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
            'LOCATION_ID' => $this->LOCATION_ID,
            'VENDOR_ID' => $this->VENDOR_ID,
            'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
            'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
            'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
            'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
            'STATUS_ID' => $this->STATUS_ID,
            'DATEINSERVICE' => $this->DATEINSERVICE,
            'DATEAUDITED' => $this->DATEAUDITED,
            'DUEDATE' => $this->DUEDATE,
            'DATEPURCHASED' => $this->DATEPURCHASED,
            'CHECKOUTDATE' => $this->CHECKOUTDATE,
            'DATECREATED' => $this->DATECREATED,
            'DATEUPDATED' => $this->DATEUPDATED,
            'LASTAUDITDATE' => $this->LASTAUDITDATE,
            'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
            'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
            'mobile' => $this->mobile,
            'doreturnable' => $this->doreturnable,
            'loa'=>$this->loa,
        ]);

        $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'serial', $this->serial])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
            ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
            ->andFilterWhere(['like', 'shelfname', $this->shelfname])
            ->andFilterWhere(['like', 'asset_code', $this->asset_code])
            ->andFilterWhere(['like', 'loa', $this->loa])
            ->andFilterWhere(['like', 'shelfno', $this->shelfno])
            ->andFilterWhere(['like', 'birrformat', $this->birrformat])
            ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
            ->andFilterWhere(['like', 'NOA', $this->NOA])
            ->andFilterWhere(['like', 'DOM', $this->DOM])
            ->andFilterWhere(['like', 'DOC', $this->DOC])
            ->andFilterWhere(['like', 'RD', $this->RD])
            ->andFilterWhere(['like', 'TD', $this->TD])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Place', $this->Place])
            ->andFilterWhere(['like', 'RC', $this->RC])
            ->andFilterWhere(['like', 'Picture', $this->Picture])
            ->andFilterWhere(['like', 'RNl', $this->RNl])
            ->andFilterWhere(['like', 'RM', $this->RM])
            ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
            ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
            ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
            ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
            ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
            ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
            ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
            ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
            ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
            ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
            ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
            ->andFilterWhere(['like', 'BRAND', $this->BRAND])
            ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
            ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
            ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
            ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
            ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
            ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
            ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
            ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
            ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
            ->andFilterWhere(['like', 'NOTES', $this->NOTES])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'office', $this->office])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'dep', $this->dep])
            ->andFilterWhere(['like', 'facl', $this->facl])
            ->andFilterWhere(['like', 'asset_code', $this->asset_code])
			->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
            ->andFilterWhere(['like', 'returnables', $this->returnables]);
        return $dataProvider;}
    
    public function searchlostindex($params)
        {
            $fx="flost";
            $query=Assets::find()->where(['assets.fxa'=>$fx]);
            // add conditions that should always apply here
            $dataProvider=new ActiveDataProvider([
                'query'=>$query,
            ]);
            $this->load($params);
            if (!$this->validate()) {
                 return $dataProvider;
            }
    
            // grid filtering conditions
            $query->andFilterWhere([
                'id' => $this->id,
                'quantity' => $this->quantity,
                'shelflife' => $this->shelflife,
                'cost' => $this->cost,
                'totalcost' => $this->totalcost,
                'ASSETID' => $this->ASSETID,
                'PARENTASSET_ID' => $this->PARENTASSET_ID,
                'ASSETGROUP_ID' => $this->ASSETGROUP_ID,
                'LOCATION_ID' => $this->LOCATION_ID,
                'VENDOR_ID' => $this->VENDOR_ID,
                'OWNER_PERSONNELGROUP_ID' => $this->OWNER_PERSONNELGROUP_ID,
                'OWNER_PERSONNEL_ID' => $this->OWNER_PERSONNEL_ID,
                'SERVICEAGREEMENT_ID' => $this->SERVICEAGREEMENT_ID,
                'CUSTODIAN_PERSONNEL_ID' => $this->CUSTODIAN_PERSONNEL_ID,
                'STATUS_ID' => $this->STATUS_ID,
                'DATEINSERVICE' => $this->DATEINSERVICE,
                'DATEAUDITED' => $this->DATEAUDITED,
                'DUEDATE' => $this->DUEDATE,
                'DATEPURCHASED' => $this->DATEPURCHASED,
                'CHECKOUTDATE' => $this->CHECKOUTDATE,
                'DATECREATED' => $this->DATECREATED,
                'DATEUPDATED' => $this->DATEUPDATED,
                'LASTAUDITDATE' => $this->LASTAUDITDATE,
                'DATEWARRANTYEXPIRES' => $this->DATEWARRANTYEXPIRES,
                'NEXTSERVICEDUEDATE' => $this->NEXTSERVICEDUEDATE,
                'mobile' => $this->mobile,
                'doreturnable' => $this->doreturnable,
                'loa'=>$this->loa,
            ]);
            $query->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
                ->andFilterWhere(['like', 'unit', $this->unit])
                ->andFilterWhere(['like', 'serial', $this->serial])
                ->andFilterWhere(['like', 'MODEL', $this->MODEL])
                ->andFilterWhere(['like', 'serviceyear', $this->serviceyear])
                ->andFilterWhere(['like', 'shelflifedeicide', $this->shelflifedeicide])
                ->andFilterWhere(['like', 'shelfname', $this->shelfname])
                ->andFilterWhere(['like', 'asset_code', $this->asset_code])
                ->andFilterWhere(['like', 'loa', $this->loa])
                ->andFilterWhere(['like', 'shelfno', $this->shelfno])
                ->andFilterWhere(['like', 'birrformat', $this->birrformat])
                ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom])
                ->andFilterWhere(['like', 'NOA', $this->NOA])
                ->andFilterWhere(['like', 'DOM', $this->DOM])
                ->andFilterWhere(['like', 'DOC', $this->DOC])
                ->andFilterWhere(['like', 'RD', $this->RD])
                ->andFilterWhere(['like', 'TD', $this->TD])
                ->andFilterWhere(['like', 'Status', $this->Status])
                ->andFilterWhere(['like', 'Place', $this->Place])
                ->andFilterWhere(['like', 'RC', $this->RC])
                ->andFilterWhere(['like', 'Picture', $this->Picture])
                ->andFilterWhere(['like', 'RNl', $this->RNl])
                ->andFilterWhere(['like', 'RM', $this->RM])
                ->andFilterWhere(['like', 'assetbarcode', $this->assetbarcode])
                ->andFilterWhere(['like', 'SERIALNUMBER', $this->SERIALNUMBER])
                ->andFilterWhere(['like', 'DEPARTMENT_ID', $this->DEPARTMENT_ID])
                ->andFilterWhere(['like', 'CONDITION_ID', $this->CONDITION_ID])
                ->andFilterWhere(['like', 'SCRAPVALUE', $this->SCRAPVALUE])
                ->andFilterWhere(['like', 'CURRENTVALUE', $this->CURRENTVALUE])
                ->andFilterWhere(['like', 'PURCHASEPRICE', $this->PURCHASEPRICE])
                ->andFilterWhere(['like', 'ACCOUNTCODE', $this->ACCOUNTCODE])
                ->andFilterWhere(['like', 'PURCHASEORDERNUMBER', $this->PURCHASEORDERNUMBER])
                ->andFilterWhere(['like', 'ISCHECKEDOUT', $this->ISCHECKEDOUT])
                ->andFilterWhere(['like', 'ASSETNAME', $this->ASSETNAME])
                ->andFilterWhere(['like', 'BRAND', $this->BRAND])
                ->andFilterWhere(['like', 'MANUFACTURER', $this->MANUFACTURER])
                ->andFilterWhere(['like', 'AUTOBARCODE', $this->AUTOBARCODE])
                ->andFilterWhere(['like', 'ASSETTYPE', $this->ASSETTYPE])
                ->andFilterWhere(['like', 'LOCATION', $this->LOCATION])
                ->andFilterWhere(['like', 'CONDITIONs', $this->CONDITIONs])
                ->andFilterWhere(['like', 'CUSTODIAN', $this->CUSTODIAN])
                ->andFilterWhere(['like', 'INCLUDEINAUDIT', $this->INCLUDEINAUDIT])
                ->andFilterWhere(['like', 'DEPRECIATIONMETHOD', $this->DEPRECIATIONMETHOD])
                ->andFilterWhere(['like', 'RECOVERYPERIOD', $this->RECOVERYPERIOD])
                ->andFilterWhere(['like', 'NOTES', $this->NOTES])
                ->andFilterWhere(['like', 'fname', $this->fname])
                ->andFilterWhere(['like', 'lname', $this->lname])
                ->andFilterWhere(['like', 'office', $this->office])
                ->andFilterWhere(['like', 'username', $this->username])
                ->andFilterWhere(['like', 'facl', $this->facl])
                ->andFilterWhere(['like','asset_code', $this->asset_code])
                ->andFilterWhere(['like','yearlyreport',$this->yearlyreport])
                ->andFilterWhere(['like','returnables', $this->returnables]);
    
            return $dataProvider;
        }
    }

