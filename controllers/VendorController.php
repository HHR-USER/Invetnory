<?php

namespace app\controllers;

use Yii;
use app\models\Vendor;
use app\models\VendorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VendorController implements the CRUD actions for Vendor model.
 */
class VendorController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Vendor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VendorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=5;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vendor model.
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
     * Creates a new Vendor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
public function actionCreate()
     {
        $model = new Vendor();
        $vnd="VND-00000";
       $model->country='Ethiopia';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           // if($model->vendorid!=NULL){
     /*$auto= \app\models\defualtidno::find()->where(['VND'=>$model->vendorid])->one();
          $auto->active=1;
         $auto->save();*/
         $model->vendorid=$vnd.$model->id;
         $model->save();
           \Yii::$app->session->setFlash('success','Successfully recoreded');
     return $this->redirect(['view', 'id' => $model->id]);
            }
        //else{
          //\Yii::$app->session->setFlash('error','Please enter vendor id');
    // return $this->redirect(['vendor/create', 'id' => $model->id]);
        return $this->render('create', [
            'model' => $model,
        ]);
    }
public function actionCreate1($vendorid,$vendorname,$phonenumber,$contactname,$email,$address1,$address2,$city,$state,$postalcode,$country,$autobarcode,$dateupdated,
    $datecreated,$website)
        {
        $model = new Vendor();
        $model->vendorid=$vendorid;
        $model->vendorname=$vendorname;
        $model->phonenumber=$phonenumber;
        $model->contactname=$contactname;
        $model->email=$email;
        $model->address1=$address1;
        $model->address2=$address2;
        $model->city=$city;
        $model->state=$state;
        $model->postalcode=$postalcode;
        $model->country=$country;
       //$model->vendornumber=$vendornumber;
        $model->autobarcode=$autobarcode;
        $model->dateupdated=$dateupdated;
        $model->datecreated=$datecreated;
        $model->website=$website;
    if ($model->load(Yii::$app->request->post())){
    }
    if($model->save()) {
        // $auto= \app\models\defualtidno::find()->where(['VND'=>$model->vendornumber])->one();
         // $auto->active=1;
         // $auto->save();
 \Yii::$app->session->setFlash('success', 'Informations  Saved Successfully' );
    return $this->redirect(['vendor/index', 'id' => $model->id]);
           }
 \Yii::$app->session->setFlash('danger', 'Informations not Saved Successfully now try' );
    return $this->redirect(['vendor/index', 'id' => $model->id]);
    }
    /**
     * Updates an existing Vendor model.
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
     * Deletes an existing Vendor model.
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
     * Finds the Vendor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Vendor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vendor::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
