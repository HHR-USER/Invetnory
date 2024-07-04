<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Personnel;
use app\models\PersonnelSearch;
use app\models\Massets;
use app\models\Mconsumables;
use app\models\MassetsSearch;
use app\models\Assets;
use app\models\Consumables;
use app\models\AssetsSearch;
use yii\web\NotFoundHttpException;
/**
 * PersonnelController implements the CRUD actions for Personnel model.
 */
class PersonnelController extends Controller
 {
    /**
     * {@inheritdoc}
     */
 public function behaviors()
       {
    return [
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['create','update','index','bconsumable','index1','bnconsumable','rconsumable','create1','cborrow','Cnborrow'],
                'rules'=>[
                    [
                    'actions'=>['create','update','index','index1','bconsumable','rconsumable','bnconsumable','create1','cborrow','cnborrow'],
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
     
    public function actionIndex()
    {
        $searchModel = new PersonnelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;
         return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionBconsumable()
    {
        $searchModel = new PersonnelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;
        return $this->render('bconsumable', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionBnconsumable()
    {    
      $searchModel = new PersonnelSearch();
        $dataProvider =$searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;
        return $this->render('bnconsumable', [
        'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionRconsumable()
    {
        $searchModel = new PersonnelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;
        return $this->render('rconsumable', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Personnel model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    /**
     * Creates a new Personnel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
       {
        $model=new Personnel();
        $psn="PSN-00000";
        $model->currentdate=date('Y-m-d');
        $model->username=Yii::$app->user->identity->username;
    if($model->load(Yii::$app->request->post())){

    if($model->save()) {
      //$auto= \app\models\defualtidno::find()->where(['PSN'=>$model->personnelid])->one();
      //$auto->active1=1;
          //$auto->save();
       $model->personnelid=$psn.$model->id;
         $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }}
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionCborrow($id)
        {
        $model=new Mconsumables();
        $connection=Consumables::find()->orderBy(['id'=>SORT_DESC])->one();
        $count=Consumables::find()->count();
    if($model->load(Yii::$app->request->post())&&$model->save()) {
            $model->shelflife=$connection->shelflife;
            $model->expairedate=$connection->expairedate;
            $model->dr=$connection->dr;
            $model->dp=$connection->dp;
            $model->remark=$connection->remark;
    if($connection->noi==$model->noi){
            $model->update();
              }
        return $this->redirect(['view', 'id' => $model->id]);
             }
        return $this->render('cborrow',[
            'model' => $model,'id'=>$id,
        ]);                        
    }
 public function actionCnborrow($id)
    {
        $model=new Massets();
        $connection=Assets::find()->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
          $model->NOA=$connection->NOA;
          $model->DOM=$connection->DOM;
          $model->DOC=$connection->DOC;
          $model->RD=$connection->RD;
          $model->TD=$connection->TD;
          $model->Place=$connection->Place;
          $model->RC=$connection->RC;
          $model->Picture=$connection->Picture;
          $model->RNl=$connection->RNl;
          $model->RM=$connection->RM;
          $model->PARENTASSET_ID=$connection->PARENTASSET_ID;
          $model->ASSETGROUP_ID=$connection->ASSETGROUP_ID;
          $model->VENDOR_ID=$connection->VENDOR_ID;
          $model->OWNER_PERSONNELGROUP_ID=$connection->OWNER_PERSONNELGROUP_ID;
          $model->SERVICEAGREEMENT_ID=$connection->SERVICEAGREEMENT_ID;
          $model->CUSTODIAN_PERSONNEL_ID=$connection->CUSTODIAN_PERSONNEL_ID;
          $model->STATUS_ID=$connection->STATUS_ID;
          $model->SERIALNUMBER=$connection->SERIALNUMBER;
          $model->DEPARTMENT_ID=$connection->DEPARTMENT_ID;
          $model->CONDITION_ID=$connection->CONDITION_ID;
          $model->SCRAPVALUE=$connection->SCRAPVALUE;
          $model->CURRENTVALUE=$connection->CURRENTVALUE;
          $model->PURCHASEPRICE=$connection->PURCHASEPRICE;
          $model->ACCOUNTCODE=$connection->ACCOUNTCODE;
          $model->PURCHASEORDERNUMBER=$connection->PURCHASEORDERNUMBER;
          $model->ISCHECKEDOUT=$connection->ISCHECKEDOUT;
          $model->ASSETNAME=$connection->ASSETNAME;
          $model->BRAND=$connection->BRAND;
          $model->MANUFACTURER=$connection->MANUFACTURER;
          $model->AUTOBARCODE=$connection->AUTOBARCODE;
          $model->firstname=$connection->FIRSTNAME;
          $model->lastname=$connection->LASTNAME;
          $model->PRBS=$connection->PRBS;
          $model->ASSETTYPE=$connection->ASSETTYPE;
          $model->LOCATION=$connection->LOCATION;
          $model->VENDOR=$connection->VENDOR;
          $model->CONDITIONs=$connection->CONDITIONs;
          $model->CUSTODIAN=$connection->CUSTODIAN;
          $model->INCLUDEINAUDIT=$connection->INCLUDEINAUDIT;
          $model->DEPRECIATIONMETHOD=$connection->DEPRECIATIONMETHOD;
          $model->RECOVERYPERIOD=$connection->RECOVERYPERIOD;
          $model->DATEINSERVICE=$connection->DATEINSERVICE;
          $model->DATEAUDITED=$connection->DATEAUDITED;
          $model->DUEDATE=$connection->DUEDATE;
          $model->DATEPURCHASED=$connection->DATEPURCHASED;
          $model->CHECKOUTDATE=$connection->CHECKOUTDATE;
          $model->DATECREATED=$connection->DATECREATED;
          $model->DATEUPDATED=$connection->DATEUPDATED;
          $model->LASTAUDITDATE=$connection->LASTAUDITDATE;
          $model->DATEWARRANTYEXPIRES=$connection->DATEWARRANTYEXPIRES;
          $model->NOTES=$connection->NOTES;
        if($connection->LOCATION_ID==$model->LOCATION_ID){
             $model->update();
             }
           \Yii::$app->session->setFlash('success', 'personnel  informations  Saved Successfully' );
            return $this->redirect(['view', 'id' => $model->id]);
            }
        return $this->render('cnborrow',[
            'model' => $model,'id'=>$id,
        ]);
    }
public function actionCreate1($personnelid,$personnelgroup_id,$prbs,$firstname,$lastname,$emailaddress,$workphonenumber,$homephonenumber,$mobilephonenumber,$pagernumber,$jobtile_id,$autobarcode,$jobtitle,$personnelgroup,$displayname,$displaynameandnumber,
$status_id,$personnelstatus,$datecreated,$dateupdated){
        $model=new Personnel();
       $model->personnelid=$personnelid;
       $model->personnelgroup_id=$personnelgroup_id;
       $model->prbs=$prbs;
       $model->firstname=$firstname;
       $model->lastname=$lastname;
       $model->emailaddress=$emailaddress;
       $model->workphonenumber=$workphonenumber;
       $model->homephonenumber=$homephonenumber;
       $model->mobilephonenumber=$mobilephonenumber;
       $model->pagernumber=$pagernumber;
       $model->jobtile_id=$jobtile_id;
       $model->autobarcode=$autobarcode;
       $model->jobtitle=$jobtitle;
       $model->personnelgroup=$personnelgroup;
       $model->displayname=$displayname;
       $model->displaynameandnumber=$displaynameandnumber;
       $model->status_id=$status_id;
       $model->personnelstatus=$personnelstatus;
       $model->datecreated=$datecreated;
       $model->dateupdated=$dateupdated;
if($model->load(Yii::$app->request->post())){
  
        }
    if($model->save()){
            \Yii::$app->session->setFlash('success', 'Informations  Saved Successfully');
         // $auto= \app\models\defualtidno::find()->where(['PSN'=>$model->prbs])->one();
          //$auto->active1=1;
        return $this->redirect(['personnel/index', 'id' => $model->id]);
         }
     \Yii::$app->session->setFlash('danger', 'Informations not Saved Successfully now try' );
    return $this->redirect(['personnel/index', 'id' => $model->id]);
    }
    /**
     * Updates an existing Personnel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->username=Yii::$app->user->identity->username;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Personnel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
            {
          // $product = Assets::findOne($id);
          // Yii::$app->Assets->remove($product);
          // Yii::$app->session->remove("ASSETID");
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
                 }

    /**
     * Finds the Personnel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Personnel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Personnel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
