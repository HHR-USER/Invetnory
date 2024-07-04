<?php
namespace app\controllers;
use Yii;
use app\models\Orderitem;
use app\models\OrderitemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Assets;
use app\models\Consumables;
use app\models\Logtable;
use yii\filters\AccessControl;
use yii\db\Query;
/**
 * OrderitemController implements the CRUD actions for Orderitem model.
 */
class OrderitemController extends Controller
{
    /**
     * {@inheritdoc}
     */
public function behaviors()
       {
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['create','create2','createmore','update','index','confirm','confirm1','view','print','view1','view2'],
                'rules'=>[
                    [
                    'actions'=>['create','create2','createmore','update','index','confirm1','confirm1','view','print','view1','view2'],
                        'allow'=>true,
                        'roles'=>['@'],//for authenticated users only
                    ],
                ],
            ],
            'verbs'=>[
                'class'=>VerbFilter::className(),
                'actions'=>[
                    'logout'=>['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Orderitem models.
     * @return mixed
     */
    public function actionIndex()
       {
        $searchModel=new OrderitemSearch();
        $dataProvider=$searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=1000;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Orderitem model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
public function actionView($id)
    {
        return $this->render('view',[
            'model'=>$this->findModel($id),
        ]);
    }
public function actionView1($id)
    {
        return $this->render('view1', [
            'model' => $this->findModel($id),
        ]);
    }
public function actionView2($id)
    {
        return $this->render('view2', [
            'model' => $this->findModel($id),
        ]);
    }
    /**
     * Creates a new Orderitem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    //before correcting quantity
/*public function actionCreatemore_NAOLD($id)
    {
    $model=Orderitem::find()->where(['id'=>$id])->one();
    $status="confirmed";
    $command="UPDATE order_eq SET status='$status' where id='$model->foreign_key'";
    Yii::$app->db->createCommand($command)->execute(); 
    $modelassets=new Assets();
    if($modelassets->load(Yii::$app->request->post())){
//muliple duplicate data entry
 $std=new Assets();
            $std->quantity=$model->quantity;
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
            $std->MODEL=$modelassets->MODEL;
            $std->serial=$modelassets->serial;
            $std->BRAND=$modelassets->BRAND;
            $std->RD=$modelassets->RD;
            $std->TD=$modelassets->TD;
            $std->Status=$modelassets->Status;
            $std->RC=$modelassets->RC;
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
            $std->store="Admin";
            $std->received=3;
            $std->rep=6;
            $std->save(); 
     $model->valuecheck=1;
     $model->save();
if($model->quantity>1){
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
          //  $std->received=1;
            $std->save(); 
            $model->valuecheck=1;
        }
        $model->save();}
        $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->action="receive";  
        $log->dateentered=date('Y-m-d'); 
        $log->stockname=$std->NOA;
        $log->personnelid=Yii::$app->user->identity->personnelid;//' '.Yii::$app->user->identity->mname;
        $log->save();
        $std->totalcost=$model->cost*$model->quantity;
        $std->save(); 
      \Yii::$app->session->setFlash('success','Success');
      return $this->redirect(['index', 'id' => $modelassets->id]);
          }
return $this->render('createmore',[
            'model'=>$model,'id'=>$id,
        ]);
    }*/
//create consumables  item  
public function actionCreatemore($id)
    {
    $model=Orderitem::find()->where(['id'=>$id])->one();
    $status="confirmed";
    $command="UPDATE order_eq SET status='$status' where id='$model->foreign_key'";
    Yii::$app->db->createCommand($command)->execute(); 
    //For quntity sum
     $std=new Assets();
     $modelassets=new Assets();
   $qup=(new Query())->from('inventory.assets')->where(['LOWER(NOA)'=>mb_strtolower($model->noi)])->one();
  if($std->load(Yii::$app->request->post())){
     if($modelassets->load(Yii::$app->request->post())&&$qup){
        $qup['quantity']+=$model->quantity;
        $qup['st_avail']="Avail";
        $qup['totalcost']=$model->cost*$model->quantity;
//Muliple duplicate data entry
            $std->quantity=$model->quantity;
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
            $std->MODEL=$modelassets->MODEL;
            $std->serial=$modelassets->serial;
            $std->BRAND=$modelassets->BRAND;
            $std->RD=$modelassets->RD;
            $std->TD=$modelassets->TD;
            $std->Status=$modelassets->Status;
            $std->RC=$modelassets->RC;
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
            $std->store="Admin";
            $std->st_avail="ini_n";
            $std->received=3;
            $std->rep=6;
            $std->save(); 
            $model->valuecheck=1;
            $model->save();
    }
  else{
  $std->quantity=$model->quantity;
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
            $std->MODEL=$modelassets->MODEL;
            $std->serial=$modelassets->serial;
            $std->BRAND=$modelassets->BRAND;
            $std->RD=$modelassets->RD;
            $std->TD=$modelassets->TD;
            $std->Status=$modelassets->Status;
            $std->RC=$modelassets->RC;
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
            $std->store="Admin";
            $std->st_avail="ini";
            $std->received=3;
            $std->rep=6;
            $std->save(); 
            $model->valuecheck=1;
            $model->save();  
       //  \Yii::$app->session->setFlash('success','Success');
      //return $this->redirect(['index','id'=>$modelassets->id]); 
    }
    if($qup){
       Yii::$app->db->createCommand()->update('inventory.assets',$qup,['id'=>$qup['id']])->execute();
       }
if($model->quantity>1){
    //duplicate if quantity is greater than one
     Assets::SaveDuplicate($model,$modelassets);
         }
    else{
        return $this->redirect(['index','id'=>$model->id]); 
       }
      }
    return $this->render('createmore',[
            'model'=>$model,'id'=>$id,
        ]);
    }
public function actionCreate2($id)
    {
    $model=Orderitem::find()->where(['id'=>$id])->one();
        $status="confirmed";
      // $model->valuecheck=1;
    $command="UPDATE order_eq SET status='$status' where id='$model->foreign_key'";
    Yii::$app->db->createCommand($command)->execute();
    $std=new Consumables();
     //update quantity only
   $qup=(new Query())->from('inventory.consumables')->where(['LOWER(noi)' => mb_strtolower($model->noi)])->one();
if($std->load(Yii::$app->request->post())){
     if($qup){
        $qup['quantity'] += $model->quantity;
        $qup['st_avail'] = "Avail";
        $qup['totalcost'] = $model->cost * $model->quantity;
    //new records
    $std->quantity=$model->quantity;
    $std->noi=$model->noi;
    $std->cost=$model->cost;
    $std->pc=$model->pc;
    $std->consbarcode=$model->assetbarcode;
    $std->personnelid=$model->customename;
    $std->vendorid=$model->vendorid;
    $std->unit=$model->unit;
    $std->packsize=$model->packsize;
    $std->description=$model->description;
    $std->rep=6;
    $std->store="Admin";
    $std->totalcost=$model->cost*$model->quantity;
    $std->st_avail="ini_n";//if the item is not exist and registered for the first time
    }
   else{
    //new records
    $std->quantity=$model->quantity;
    $std->noi=$model->noi;
    $std->cost=$model->cost;
    $std->pc=$model->pc;
    $std->consbarcode=$model->assetbarcode;
    $std->personnelid=$model->customename;
    $std->vendorid=$model->vendorid;
    $std->unit=$model->unit;
    $std->packsize=$model->packsize;
    $std->description=$model->description;
    $std->rep=6;
    $std->store="Admin";
    $std->totalcost=$model->cost*$model->quantity;
    $std->st_avail="ini";//if the item is not exist and registered for the first time
        }
        $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->action="receive";  
        $log->dateentered=date('Y-m-d'); 
        $log->stockname=$std->noi;
        $log->quantity=$std->quantity;
        $log->personnelid=Yii::$app->user->identity->personnelid;//' '.Yii::$app->user->identity->mname;
        $log->save();
        $std->save(); 
       $model->valuecheck=1;
       $model->save();
       if($qup){
          Yii::$app->db->createCommand()->update('inventory.consumables',$qup,['id'=>$qup['id']])->execute();
          }
         \Yii::$app->session->setFlash('success','Success');
          return $this->redirect(['index','id'=>$std->id]);
          }
         return $this->render('create2',[
            'model'=>$model,'id'=>$id,
        ]);
    }
public function actionConfirm($id)
    {
        $model=$this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            \Yii::$app->session->setFlash('success','Success');
            return $this->redirect(['view1', 'id' => $model->id]);
        }
        return $this->render('confirm',[
            'model'=>$model,
        ]);
    }
public function actionConfirm1($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                       \Yii::$app->session->setFlash('success','Success');
            return $this->redirect(['view2','id'=>$model->id]);
        }
        return $this->render('confirm1',[
            'model' => $model,
        ]);
    }
public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

public function actionPrint($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())&&$model->save()) {
            return $this->redirect(['orderitem/print','id'=>$model->id]);
        }

        return $this->render('print',[
            'model'=>$model,
        ]);
    }
    /**
     * Deletes an existing Orderitem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Orderitem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Orderitem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
protected function findModel($id)
    {
        if (($model = Orderitem::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
