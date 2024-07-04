<?php

namespace app\controllers;

use Yii;
use app\models\Catagory;
use app\models\CatagorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CatagoryController implements the CRUD actions for Catagory model.
 */
class CatagoryController extends Controller
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
     * Lists all Catagory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CatagorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=1000;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Catagory model.
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
     * Creates a new Catagory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
          {
        $model = new Catagory();
         $username=Yii::$app->user->identity->username;
if($model->load(Yii::$app->request->post())){
    //  $model->typeof_material=$typeof_material;
    //  $model->catagoryname=$catagoryname;

if($model->save()){
       return $this->redirect(['view', 'id' => $model->id]);
            }}
    return $this->render('create', [
                  'model' => $model,
              ]);     
    }
    public function actionCreate1($typeof_material,$purchasefrom,$location,$facl)
          {
        $model=new Catagory();
        $model->typeof_material=$typeof_material;
        $model->purchasefrom=$purchasefrom;
        $model->location=$location;
        $model->facl=$facl;
        $username=Yii::$app->user->identity->username;
        if($model->load(Yii::$app->request->post())){

        } 
    if($model->save()){
     \Yii::$app->session->setFlash('success','successful');
    return $this->redirect(['index', 'id' => $model->id]);
            }
         \Yii::$app->session->setFlash('error','Not done');
     return $this->redirect(['catagory/index', 'id' => $model->id]);
    }
    /**
     * Updates an existing Catagory model.
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
     * Deletes an existing Catagory model.
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
     * Finds the Catagory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Catagory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Catagory::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
