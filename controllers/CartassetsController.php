<?php

namespace app\controllers;

use Yii;
use app\models\Cartassets;
use app\models\CartassetsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Assets;
/**
 * CartassetsController implements the CRUD actions for Cartassets model.
 */
class CartassetsController extends Controller
{
    /**
     * {@inheritdoc}
     */
	
public function behaviors()
       {
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['create','index','Pview','create3','displayremain','view','update'],
                'rules'=>[
                    [
                    'actions'=>['create','index','Pview','create3','displayremain','view','update'],
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
     * Lists all Cartassets models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel=new CartassetsSearch();
        $dataProvider=$searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
	    public function actionDisplayremain()
    {
        $searchModel=new CartassetsSearch();
        $dataProvider=$searchModel->search_alltype(Yii::$app->request->queryParams);
        return $this->render('displayremain',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
    /**
     * Displays a single Cartassets model.
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

public function actionPview($id)
         {
        return $this->render('pview', [
            'model'=>$this->findModel($id),
        ]);
    }
    /**
     * Creates a new Cartassets model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cartassets();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
public function actionCreate3($id,$quantity)
          {
      $model =Cartassets::find()->where(['id'=>$id])->one();
      $add=new Assets();
      $add->catagoryname=$model->catagoryname;
      $add->unit=$model->unit;
      $add->serial=$model->serial;
      $add->MODEL=$model->MODEL;
      $add->serviceyear=$model->serviceyear;
      $add->shelfname=$model->shelfname;
      $add->shelfno=$model->shelfno;
      $add->birrformat=$model->birrformat;
      $add->cost=$model->cost;
      $add->purchasefrom=$model->purchasefrom;
      $add->NOA=$model->NOA;
      $add->DOM=$model->DOM;
      $add->DOC=$model->DOC;
      $add->RD=$model->RD;
      $add->TD=$model->TD;
      $add->Status=$model->Status;
      $add->Place=$model->Place;
      $add->RC=$model->RC;
      $add->Picture=$model->Picture;
      $add->RNl=$model->RNl;
      $add->RM=$model->RM;
      $add->ASSETID=$model->ASSETID;
      $add->PARENTASSET_ID=$model->PARENTASSET_ID;
      $add->ASSETGROUP_ID=$model->ASSETGROUP_ID;
      $add->LOCATION_ID=$model->LOCATION_ID;
      $add->VENDOR_ID=$model->VENDOR_ID;
      $add->OWNER_PERSONNELGROUP_ID=$model->OWNER_PERSONNELGROUP_ID;
      $add->OWNER_PERSONNEL_ID=$model->OWNER_PERSONNEL_ID;
      $add->SERVICEAGREEMENT_ID=$model->SERVICEAGREEMENT_ID;
      $add->CUSTODIAN_PERSONNEL_ID=$model->CUSTODIAN_PERSONNEL_ID;
      $add->STATUS_ID=$model->STATUS_ID;
      $add->ASSETBARCODE=$model->ASSETBARCODE;
      $add->SERIALNUMBER=$model->SERIALNUMBER;
      $add->DEPARTMENT_ID=$model->DEPARTMENT_ID;
      $add->CONDITION_ID=$model->CONDITION_ID;
      $add->SCRAPVALUE=$model->SCRAPVALUE;
      $add->CURRENTVALUE=$model->CURRENTVALUE;
      $add->PURCHASEPRICE=$model->PURCHASEPRICE;
      $add->ACCOUNTCODE=$model->ACCOUNTCODE;
      $add->PURCHASEORDERNUMBER=$model->PURCHASEORDERNUMBER;
      $add->ISCHECKEDOUT=$model->ISCHECKEDOUT;
      $add->ASSETNAME=$model->ASSETNAME;
      $add->BRAND=$model->BRAND;
      $add->MANUFACTURER=$model->MANUFACTURER;
      $add->AUTOBARCODE=$model->AUTOBARCODE;
      //$add->FIRSTNAME=$model->FIRSTNAME;
      //$add->LASTNAME=$model->LASTNAME;
      //$add->PRBS=$model->PRBS;
      $add->ASSETTYPE=$model->ASSETTYPE;
      $add->LOCATION=$model->LOCATION;
      //$add->VENDOR=$model->VENDOR;
      $add->CONDITIONs=$model->CONDITIONs;
      $add->CUSTODIAN=$model->CUSTODIAN;
      $add->INCLUDEINAUDIT=$model->INCLUDEINAUDIT;
      $add->DEPRECIATIONMETHOD=$model->DEPRECIATIONMETHOD;
      $add->RECOVERYPERIOD=$model->RECOVERYPERIOD;
      $add->DATEINSERVICE=$model->DATEINSERVICE;
      $add->DATEAUDITED=$model->DATEAUDITED;
      $add->DUEDATE=$model->DUEDATE;
      $add->DATEPURCHASED=$model->DATEPURCHASED;
      $add->CHECKOUTDATE=$model->CHECKOUTDATE;
      $add->DATECREATED=$model->DATECREATED;
      $add->DATEUPDATED=$model->DATEUPDATED;
      $add->LASTAUDITDATE=$model->LASTAUDITDATE;
      $add->DATEWARRANTYEXPIRES=$model->DATEWARRANTYEXPIRES;
      $add->NEXTSERVICEDUEDATE=$model->NEXTSERVICEDUEDATE;
      $add->NOTES=$model->NOTES;
      $add->fname=$model->fname;
      $add->lname=$model->lname;
      $add->mobile=$model->mobile;
      $add->quantity=$quantity;
      $add->office=$model->office;
      $add->dep=$model->dep;
      $add->returnables=$model->returnables;
      $add->doreturnable=$model->doreturnable;
      $add->username=Yii::$app->user->identity->fname;
     $model->quantity=$model->quantity-$quantity;
   if($model->load(Yii::$app->request->post())){
        }
    if($add->dep=="Admin"&&$model->quantity>=0){
    if($add->save()) {
    if($model->quantity==0){
        $sq="DELETE FROM cartassets WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $add->id]);
       }
        $model->save();
    \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $add->id]);
           }}
   \Yii::$app->session->setFlash('error','Assets is not transfer returned');
            return $this->redirect(['assets/transfer', 'id' => $add->id]);
      }
    /**
     * Updates an existing Cartassets model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
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

    /**
     * Deletes an existing Cartassets model.
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
     * Finds the Cartassets model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cartassets the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cartassets::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
