<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "assets".
 *
 * @property int $id
 * @property string $catagoryname
 * @property string $unit
 * @property string $lotnumber
 * @property string $serial
 * @property string $MODEL
 * @property string $serviceyear
 * @property int $quantity
 * @property string $shelflifedeicide
 * @property string $shelflife
 * @property string $shelfname
 * @property string $shelfno
 * @property string $birrformat
 * @property double $cost
 * @property string $purchasefrom
 * @property string $department
 * @property double $totalcost
 * @property string $NOA
 * @property string $DOM
 * @property string $DOC
 * @property string $RD
 * @property string $TD
 * @property string $Status
 * @property string $Place
 * @property string $RC
 * @property string $Picture
 * @property string $RNl
 * @property string $RM
 * @property int $ASSETID
 * @property int $PARENTASSET_ID
 * @property int $ASSETGROUP_ID
 * @property int $LOCATION_ID
 * @property string $VENDOR_ID
 * @property int $OWNER_PERSONNELGROUP_ID
 * @property int $OWNER_PERSONNEL_ID
 * @property int $SERVICEAGREEMENT_ID
 * @property int $CUSTODIAN_PERSONNEL_ID
 * @property int $STATUS_ID
 * @property string $ASSETBARCODE
 * @property string $SERIALNUMBER
 * @property string $DEPARTMENT_ID
 * @property string $CONDITION_ID
 * @property string $SCRAPVALUE
 * @property string $CURRENTVALUE
 * @property string $PURCHASEPRICE
 * @property string $ACCOUNTCODE
 * @property string $PURCHASEORDERNUMBER
 * @property string $ISCHECKEDOUT
 * @property string $ASSETNAME
 * @property string $BRAND
 * @property string $MANUFACTURER
 * @property string $AUTOBARCODE
 * @property string $ASSETTYPE
 * @property string $LOCATION
 * @property string $CONDITIONs
 * @property string $CUSTODIAN
 * @property string $INCLUDEINAUDIT
 * @property string $DEPRECIATIONMETHOD
 * @property string $RECOVERYPERIOD
 * @property string $DATEINSERVICE
 * @property string $DATEAUDITED
 * @property string $DUEDATE
 * @property string $DATEPURCHASED
 * @property string $CHECKOUTDATE
 * @property string $DATECREATED
 * @property string $DATEUPDATED
 * @property string $LASTAUDITDATE
 * @property string $DATEWARRANTYEXPIRES
 * @property string $NEXTSERVICEDUEDATE
 * @property string $NOTES
 * @property string $fname
 * @property string $lname
 * @property int $mobile
 * @property string $office
 * @property string $personnelid
 * @property string $username
 * @property string $dep
 * @property string $returnables
 * @property string $doreturnable
 * @property double $deollarmoney
 * @property double $birrmany
 * @property int $checks
 * @property int $checkforserial
 * @property string $monthlyreport
 * @property string $yearlyreport
 */
class Assets extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'ASSETID', 'PARENTASSET_ID', 'ASSETGROUP_ID', 'LOCATION_ID', 'OWNER_PERSONNELGROUP_ID', 'OWNER_PERSONNEL_ID', 'SERVICEAGREEMENT_ID', 'CUSTODIAN_PERSONNEL_ID', 'STATUS_ID', 'mobile', 'checks', 'checkforserial'], 'integer'],
            [['cost', 'totalcost', 'deollarmoney', 'birrmany'],'number'],
            [['assetbarcode','NOA', 'Picture', 'NOTES','yearlyreport'],'string'],
            [['catagoryname','LOCATION','serial','MANUFACTURER','descfr','RD', 'DATEINSERVICE', 'DATEAUDITED', 'DUEDATE', 'DATEPURCHASED', 'CHECKOUTDATE', 'DATECREATED', 'DATEUPDATED', 'LASTAUDITDATE', 'DATEWARRANTYEXPIRES', 'NEXTSERVICEDUEDATE', 'doreturnable','asset_code','grnumber','donor_funder','loa','depreciation','accumulated_dep','bva','plate_number','fcn','fen','fx_type','facl','yearlyreport'],'safe'],
            [['unit', 'MODEL', 'serviceyear', 'shelflifedeicide', 'shelflife', 'shelfname', 'shelfno', 'birrformat', 'purchasefrom','department', 'DOM', 'DOC', 'TD', 'Status', 'Place', 'RNl', 'BRAND'], 'string', 'max' => 1000],
            [['RC'], 'string','max' =>100],
            [['RM','VENDOR_ID','SERIALNUMBER','DEPARTMENT_ID','CONDITION_ID','SCRAPVALUE', 'CURRENTVALUE', 'PURCHASEPRICE', 'ACCOUNTCODE', 'PURCHASEORDERNUMBER', 'ISCHECKEDOUT', 'ASSETNAME', 'AUTOBARCODE', 'ASSETTYPE', 'CONDITIONs', 'CUSTODIAN', 'INCLUDEINAUDIT', 'DEPRECIATIONMETHOD', 'RECOVERYPERIOD', 'fname', 'lname', 'office', 'personnelid', 'username', 'dep', 'returnables',"InventoryMonthYear", 'monthlyreport','yearlyreport','st_avail'], 'string', 'max' => 45],
            [['LOCATION'],"required"],
	    [['serial'],"unique"],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'=>'ID',
            'catagoryname'=>'Catagory name',
            'unit' => 'Unit',
            'serial'=>'Serial number',
            'MODEL'=>'Model',
            'serviceyear'=>'Service year',
            'quantity'=>'Quantity',
            'shelflifedeicide' => 'Shelf life deicide',
            'shelflife' => 'Shelf life',
            'shelfname' => 'Shelf name',
            'shelfno' => 'Shelf number',
            'birrformat' => 'Birr format',
            'cost' => 'Cost',
            'purchasefrom' => 'Purchased from',
            'department' => 'Department',
            'totalcost' => 'Totalcost',
            'NOA' => 'Asset name',
            'DOM' => 'Date of manufacture',
            'DOC' => 'Date of checking',
            'RD' => 'Registration date',
            'TD' => 'The department',
            'Status' =>'Status',
            'Place' => 'Place',
            'RC' => 'Recommendation',
            'Picture' => 'Picture',
            'RNl' => 'Renewing date',
            'RM' => 'Rm',
            'ASSETID' => 'Assetid',
            'PARENTASSET_ID' => 'Parentasset iD',
            'ASSETGROUP_ID' => 'Assetgroup iD',
            'LOCATION_ID' => 'Location iD',
            'VENDOR_ID' => 'Vendor iD',
            'OWNER_PERSONNELGROUP_ID'=>'Owner personnelgroup id',
            'OWNER_PERSONNEL_ID' => 'Owner personnel id',
            'SERVICEAGREEMENT_ID' => 'Serviceagreement id',
            'CUSTODIAN_PERSONNEL_ID' => 'Custodian Personnel id',
            'STATUS_ID'=>'Status id',
            'assetbarcode' => 'Asset barcode',
            'SERIALNUMBER' => 'Serial number',
            'DEPARTMENT_ID' => 'Department ID',
            'CONDITION_ID' => 'Condition ID',
            'SCRAPVALUE' => 'Scrap value',
            'CURRENTVALUE' => 'Current value',
            'PURCHASEPRICE' => 'Purchase price',
            'ACCOUNTCODE' => 'Accountcode',
            'PURCHASEORDERNUMBER' => 'Purchase order number',
            'ISCHECKEDOUT' => 'Ischeckedout',
            'ASSETNAME' => 'Asset name',
            'BRAND' => 'Brand',
            'MANUFACTURER' => 'Manufacturer',
            'AUTOBARCODE' => 'Autobarcode',
            'ASSETTYPE' => 'Assettype',
            'LOCATION' => 'Location',
            'CONDITIONs' => 'Conditio Ns',
            'CUSTODIAN' => 'Custodian',
            'INCLUDEINAUDIT' => 'Include in audit',
            'DEPRECIATIONMETHOD' => 'Depreciation method',
            'RECOVERYPERIOD' => 'Recoveryperiod',
            'DATEINSERVICE' => 'Dateinservice',
            'DATEAUDITED'=>'Date audited',
            'DUEDATE' => 'Due date',
            'DATEPURCHASED' => 'Date purchased',
            'CHECKOUTDATE' => 'Checkoutdate',
            'DATECREATED' => 'Date created',
            'DATEUPDATED' => 'Date updated',
            'LASTAUDITDATE' => 'Lastauditdate',
            'DATEWARRANTYEXPIRES' => 'Datewarrantyexpires',
            'NEXTSERVICEDUEDATE' => 'Next service duedate',
            'accumulated_dep'=>'Accumulated depreciation',
            'NOTES' => 'Remarks',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'mobile' => 'Mobile',
            'office'=>'From which Unit/department/staff this user belongs?',
            'personnelid' => 'Personnelid',
            'username' => 'Username',
            'dep' => 'Department',
            'returnables' => 'Does it returnables',
            'doreturnable' => 'Date',
            'deollarmoney' => 'Deollarmoney',
            'birrmany' => 'Birrmany',
            'checks' => 'Checks',
            'checkforserial'=>'Checkforserial',
            'monthlyreport'=>'Monthly report',
	    'yearlyreport'=>'Year',
            'descfr'=>"Description for receive/reject asset",
            'facl'=>'Fixed asset category Llsting',
            'bva'=>'Book value of assets',
            'loa'=>'Life of asset',
            'fx_type'=>'Fixed Asset type',
            'stat'=>'Status',
            "InventoryMonthYear"=>"Inventory Month/Year",
            'st_avail'=>'st_avail',
        ];
    }
public function allData()
    {     
    $assets=Cartassets::find()->where(['monthlyreport'=>date('m'),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ1=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+1 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ2=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+2 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ3=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+3 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ4=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+4 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ5=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+5 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ6=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+6 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ7=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+7 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ8=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+8 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ9=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+9 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ10=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+10 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
   $champ11=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+11 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    //select from consumable
$Withdrow=Withdrow::find()->where(['monthlyreport'=>date('m'),'dep'=>"Admin",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow1=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+1 month")),'dep'=>"Microlab",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow2=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+2 month")),'dep'=>"Clinical",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow3=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+3 month")),'dep'=>"Pathology",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow4=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+4 month")),'dep'=>"IT",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow5=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+5 month")),'dep'=>"SBS",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow6=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+6 month")),'dep'=>"Microlab",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow7=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+7 month")),'dep'=>"Clinical",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow8=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+8 month")),'dep'=>"Pathology",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow9=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+9 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow10=Withdrow::find()->where(['monthlyreport'=>date('Y-m',strtotime("+10 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->sum('quantity');
$Withdrow11=Withdrow::find()->where(['monthlyreport'=>date('Y-m',strtotime("+11 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->sum('quantity');
    $part=[
    'assets'=>$assets+$Withdrow,
    'champ1' =>$champ1+$Withdrow1,
    'champ2' =>$champ2+$Withdrow2,
    'champ3' =>$champ3+$Withdrow3,
    'champ4' =>$champ4+$Withdrow4,
    'champ5' =>$champ5+$Withdrow5,
    'champ6' =>$champ6+$Withdrow6,
    'champ7' =>$champ7+$Withdrow7,
    'champ8' =>$champ8+$Withdrow8,
    'champ9' =>$champ9+$Withdrow9,
    'champ10' =>$champ10+$Withdrow10,
    'champ11' =>$champ11+$Withdrow11,
    //Order send and recieve 
    'orderitem' =>Orderitem::find()->where(['monthlyreport'=>date('M')])->count(),  
    'orderitem1'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+1 month"))])->count(), 
     'orderitem2' =>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+2 month"))])->count(), 
    'orderitem3'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+3 month"))])->count(),   
    'orderitem4'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+4 month"))])->count(),  
     'orderitem5' =>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+5 month"))])->count(), 
    'orderitem6'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+6 month"))])->count(),   
    'orderitem7'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+7 month"))])->count(), 
    'orderitem8'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+8 month"))])->count(), 
     'orderitem9' =>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+9 month"))])->count(), 
    'orderitem10'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+10 month"))])->count(), 
    'orderitem11'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+11 month"))])->count(),   
        ];
      return $part;
}
public function allDatapermonth()
    {     
    $assets=Cartassets::find()->where(['monthlyreport'=>date('m'),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ1=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+1 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ2=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+2 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ3=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+3 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ4=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+4 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ5=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+5 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ6=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+6 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ7=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+7 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ8=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+8 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ9=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+9 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $champ10=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+10 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
   $champ11=Cartassets::find()->where(['monthlyreport'=>date('m',strtotime("+11 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    //select from consumable
$Withdrow=Withdrow::find()->where(['monthlyreport'=>date('m'),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
$Withdrow1=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+1 month")),'dep'=>"Microlab",'yearlyreport'=>date('Y')])->count();
$Withdrow2=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+2 month")),'dep'=>"Clinical",'yearlyreport'=>date('Y')])->count();
$Withdrow3=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+3 month")),'dep'=>"Pathology",'yearlyreport'=>date('Y')])->count();
$Withdrow4=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+4 month")),'dep'=>"IT",'yearlyreport'=>date('Y')])->count();
$Withdrow5=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+5 month")),'dep'=>"SBS",'yearlyreport'=>date('Y')])->count();
$Withdrow6=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+6 month")),'dep'=>"Microlab",'yearlyreport'=>date('Y')])->count();
$Withdrow7=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+7 month")),'dep'=>"Clinical",'yearlyreport'=>date('Y')])->count();
$Withdrow8=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+8 month")),'dep'=>"Pathology",'yearlyreport'=>date('Y')])->count();
$Withdrow9=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+9 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
$Withdrow10=Withdrow::find()->where(['monthlyreport'=>date('Y-m',strtotime("+10 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
$Withdrow11=Withdrow::find()->where(['monthlyreport'=>date('Y-m',strtotime("+11 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $part=[
    'assets'=>$assets+$Withdrow,
    'champ1' =>$champ1+$Withdrow1,
    'champ2' =>$champ2+$Withdrow2,
    'champ3' =>$champ3+$Withdrow3,
    'champ4' =>$champ4+$Withdrow4,
    'champ5' =>$champ5+$Withdrow5,
    'champ6' =>$champ6+$Withdrow6,
    'champ7' =>$champ7+$Withdrow7,
    'champ8' =>$champ8+$Withdrow8,
    'champ9' =>$champ9+$Withdrow9,
    'champ10' =>$champ10+$Withdrow10,
    'champ11' =>$champ11+$Withdrow11,
    //Order send and recieve 
    'orderitem' =>Orderitem::find()->where(['monthlyreport'=>date('M')])->count(),  
    'orderitem1'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+1 month"))])->count(), 
     'orderitem2' =>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+2 month"))])->count(), 
    'orderitem3'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+3 month"))])->count(),   
    'orderitem4'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+4 month"))])->count(),  
     'orderitem5' =>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+5 month"))])->count(), 
    'orderitem6'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+6 month"))])->count(),   
    'orderitem7'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+7 month"))])->count(), 
    'orderitem8'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+8 month"))])->count(), 
     'orderitem9' =>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+9 month"))])->count(), 
    'orderitem10'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+10 month"))])->count(), 
    'orderitem11'=>Orderitem::find()->where(['monthlyreport'=>date('M',strtotime("+11 month"))])->count(),   
        ];
      return $part;
}
//Duplicate if quantity is greater than
public static function SaveDuplicate($model,$modelassets){
 for($n=0;$n<$model->quantity;$n++){
            $std=new Assets();
            $std->NOA=$model->noi;
            $std->cost=$model->cost;
            $std->personnelid=$model->customename;
            $std->VENDOR_ID=$model->vendorid; 
            $std->monthlyreport=date('m');
            $std->yearlyreport=date('Y'); 
            $std->birrformat=$modelassets->birrformat;
            $std->purchasefrom=$modelassets->purchasefrom;
            $std->VENDOR_ID=$model->vendorid; 
            $std->unit=$modelassets->unit;
            $std->assetbarcode=$model->assetbarcode;
            $std->serviceyear=$modelassets->serviceyear;
            $std->shelfname=$modelassets->shelfname;
            $std->shelfno=$modelassets->shelfno;
            $std->DOM=$modelassets->DOM;
            $std->DOC=$modelassets->DOC;
            $std->RD=$modelassets->RD;
            $std->TD=$modelassets->TD;
            $std->Status=$modelassets->Status;
            $std->RC=$modelassets->RC;//
            $std->RNl=$modelassets->RNl;
            $std->MANUFACTURER=$modelassets->MANUFACTURER;
            $std->LOCATION=$modelassets->LOCATION;
            $std->CONDITIONs=$modelassets->CONDITIONs;
            $std->CUSTODIAN=$modelassets->CUSTODIAN;
            $std->INCLUDEINAUDIT=$modelassets->INCLUDEINAUDIT;
            $std->DEPRECIATIONMETHOD=$modelassets->DEPRECIATIONMETHOD;
            $std->DATEINSERVICE=$modelassets->DATEINSERVICE;
            $std->DATEAUDITED=$modelassets->DATEAUDITED;
            $std->DUEDATE=$modelassets->DUEDATE;
            $std->DATEPURCHASED=$modelassets->DATEPURCHASED;
            $std->CHECKOUTDATE=$modelassets->CHECKOUTDATE;
            $std->DATECREATED=$modelassets->DATECREATED;
            $std->DATEUPDATED=$modelassets->DATEUPDATED;
            $std->LASTAUDITDATE=$modelassets->LASTAUDITDATE;
            $std->SCRAPVALUE=$modelassets->SCRAPVALUE;
            $std->SCRAPVALUE=$modelassets->SCRAPVALUE;
            $std->CURRENTVALUE=$modelassets->CURRENTVALUE;
            $std->DATEWARRANTYEXPIRES=$modelassets->DATEWARRANTYEXPIRES;
            $std->NEXTSERVICEDUEDATE=$modelassets->NEXTSERVICEDUEDATE;
            $std->quantity=1;
            $std->store="Admin";
            $std->save(); 
            $model->valuecheck=1;
          }   
        $model->save();
        $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->action="receive";  
        $log->dateentered=date('Y-m-d'); 
        $log->stockname=$std->NOA;
        $log->personnelid=Yii::$app->user->identity->personnelid;//' '.Yii::$app->user->identity->mname;
        $std->totalcost=$model->cost*$model->quantity;
        $log->save();
        $std->save(); 
      \Yii::$app->session->setFlash('success','Success');
      return true;//$model->redirect(['orderitem/index','id'=>$modelassets->id]);     
}
//Graphical report fo highly consumables
public function getHighlyused_boni()
    {     
//select from consumable
$Withdrow=Withdrow::find()->where(['monthlyreport'=>date('m'),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
$Withdrow1=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+1 month")),'dep'=>"Microlab",'yearlyreport'=>date('Y')])->count();
$Withdrow2=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+2 month")),'dep'=>"Clinical",'yearlyreport'=>date('Y')])->count();
$Withdrow3=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+3 month")),'dep'=>"Pathology",'yearlyreport'=>date('Y')])->count();
$Withdrow4=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+4 month")),'dep'=>"IT",'yearlyreport'=>date('Y')])->count();
$Withdrow5=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+5 month")),'dep'=>"SBS",'yearlyreport'=>date('Y')])->count();
$Withdrow6=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+6 month")),'dep'=>"Microlab",'yearlyreport'=>date('Y')])->count();
$Withdrow7=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+7 month")),'dep'=>"Clinical",'yearlyreport'=>date('Y')])->count();
$Withdrow8=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+8 month")),'dep'=>"Pathology",'yearlyreport'=>date('Y')])->count();
$Withdrow9=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+9 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
$Withdrow10=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+10 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
$Withdrow11=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+11 month")),'dep'=>"Admin",'yearlyreport'=>date('Y')])->count();
    $part=[
    'champ1'=>$Withdrow,
    'champ2'=>$Withdrow1,
    'champ3'=>$Withdrow2,
    'champ4'=>$Withdrow3,
    'champ5'=>$Withdrow4,
    'champ6'=>$Withdrow5,
    'champ7'=>$Withdrow6,
    'champ8'=>$Withdrow7,
    'champ9'=>$Withdrow8,
    'champ10'=>$Withdrow9,
    'champ11'=>$Withdrow10,
    'champ12'=>$Withdrow11,
           ];
      return $part;
  }
  public function getHighlyused()
  {
      $Withdrow=Withdrow::find()->where(['yearlyreport'=>date('Y')])->all();
      $part=[];
      for($i=1;$i<=12;$i++) {
          $part["champ".$i]=[
              'month'=>date('M',strtotime((intval(date('Y'))).'-'.$i.'-01')),
              'withdrow'=>Withdrow::find()->where(['monthlyreport'=>$i,'yearlyreport'=>date('Y')])->sum('quantity')
          ];
      }
      return $part;
  }
public function getHighlyused_last()
  {
      $Withdrow=Withdrow::find()->where(['yearlyreport'=>date('Y')-1])->all();
      $part=[];
      for ($i=1;$i<=12; $i++) {
          $part["champ".$i]=[
              'month'=>date('M', strtotime((intval(date('Y'))-1).'-'.$i.'-01')),
              'withdrow'=>Withdrow::find()->where(['monthlyreport'=>$i,'yearlyreport'=>date('Y')-1])->sum('quantity')
          ];
      }
      return $part;
  }  
public function getHighlyused_last_boni()
  {     
//select from consumable withdrow
$Withdrow=Withdrow::find()->where(['monthlyreport'=>date('m'),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow1=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+1 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow2=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+2 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow3=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+3 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow4=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+4 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow5=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+5 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow6=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+6 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow7=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+7 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow8=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+8 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow9=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+9 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow10=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+10 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
$Withdrow11=Withdrow::find()->where(['monthlyreport'=>date('m',strtotime("+11 month")),'yearlyreport'=>date('Y')-1])->sum('quantity');//count();
  $part=[
  'champ1'=>$Withdrow,
  'champ2'=>$Withdrow1,
  'champ3'=>$Withdrow2,
  'champ4'=>$Withdrow3,
  'champ5'=>$Withdrow4,
  'champ6'=>$Withdrow5,
  'champ7'=>$Withdrow6,
  'champ8'=>$Withdrow7,
  'champ9'=>$Withdrow8,
  'champ10'=>$Withdrow9,
  'champ11'=>$Withdrow10,
  'champ12'=>$Withdrow11,
         ];
    return $part;
  }
}