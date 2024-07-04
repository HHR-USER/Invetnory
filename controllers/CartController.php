<?php

namespace app\controllers;

use Yii;
use app\models\Cart;
use app\models\CartSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
/**
 * CartController implements the CRUD actions for Cart model.
 */
class CartController extends Controller
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
     * Lists all Cart models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CartSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cart model.
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
     * Creates a new Cart model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cart();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cart model.
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
public function actionCreate2($id,$firstname,$lastname,$mobile,$quantity,$office)
         {
    $model =Consumables::find()->where('id=id')->one();
        $add=new Cart();
        $add->catagory=$model->catagory;
        $add->noi=$model->noi;
        $add->dr=$model->dr;
        $add->am=$model->am;
        $add->dp=$model->dp;
        $add->expairedate=$model->expairedate;
        $add->shelflife=$model->shelflife;
        $add->department=$model->department;
        $add->purchasefrom=$model->purchasefrom;
        $add->cost=$model->cost;
        $add->unit=$model->unit;
        $add->remark=$model->remark;
        $add->fk_consumable=$model->id;
        $add->firstname=$firstname;
        $add->lastname=$lastname;
        $add->mobile=$mobile;
        $add->quantity=$quantity;
        $add->office=$office;
        $add->username=Yii::$app->user->identity->fname;
        //$command="UPDATE cart SET firstname='$add->firstname',lastname='$add->lastname',mobile=' $add->mobile',quantity='$add->quantity',username='$add->username' where id='$model->id'";
    //$d=Yii::$app->db->createCommand($command)->execute(); 
  //$sql="UPDATE consumables SET quantity='$quantity' where id='$model->id'";
  //  $sq=Yii::$app->db->createCommand($sql)->execute(); 

   if($model->load(Yii::$app->request->post())){
        }
    if($add->save()) {
         $this->findModel($model->id)->delete();
    \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
           // $model->save();
           }
             \Yii::$app->session->setFlash('error','Try again');
            return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
      
    }
    /**
     * Deletes an existing Cart model.
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
     * Finds the Cart model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cart the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cart::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
