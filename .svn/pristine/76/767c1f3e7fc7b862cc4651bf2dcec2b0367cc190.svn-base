<?php
namespace app\controllers;
use Yii;
use app\models\OrderEq;
use app\models\OrderEqSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Orderitem;
use app\models\OrderitemSearch;
use app\models\Itemc;
use app\models\Logtable;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
/**
 * OrderEqController implements the CRUD actions for OrderEq model.
 */
class OrderEqController extends Controller
{
    /**
     * {@inheritdoc}
     */
    
public function behaviors()
       {
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['create','createcons','create1','createcon','update','index','index1','createas','createc','view'],
                'rules'=>[
                    [
                    'actions'=>['create','createcons','create1','createcon','update','index','index1','createas','createc','view'],
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
     * Lists all OrderEq models.
     * @return mixed
     */
public function actionIndex()
    {
        $searchModel=new OrderEqSearch();
        $dataProvider=$searchModel->search(Yii::$app->request->queryParams);
       $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=1000;
        return $this->render('index',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
 public function actionIndex1()
    {
        $searchModel=new OrderitemSearch();
        $dataProvider=$searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=1000;
        return $this->render('index1',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
    /**
     * Displays a single OrderEq model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
   public function actionView($id){
    $searchModel = new OrderitemSearch();
   $dataProvider = $searchModel->search1(Yii::$app->request->queryParams,$id);
    $dataProvider->pagination->pageSize=10000;
    return $this->render('view', [
        'model' => $this->findModel($id),
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]);
}
/**
     * Creates a new OrderEq model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
public function actionCreate()
    {
           $model =new OrderEq;
           $modelsAddress=[new Orderitem];
           $model->Doo=date('Y-m-d');
if ($model->load(Yii::$app->request->post())){
      $modelsAddress = Orderitem::createMultiple(Orderitem::classname());
        $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->action="order created";  
        $log->dateentered=date('Y-m-d'); 
        $log->personnelid=Yii::$app->user->identity->personnelid;//' '.Yii::$app->user->identity->mname;
            Orderitem::loadMultiple($modelsAddress, Yii::$app->request->post());
            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsAddress),
                    ActiveForm::validate($model)
                );
            }
            // validate all models
            $valid = $model->validate();
            $valid =Orderitem::validateMultiple($modelsAddress) && $valid;
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if($flag=$model->save(false)) {
                        foreach ($modelsAddress as $modelsAddress) {
                            $modelsAddress->foreign_key= $model->id;
                           // $modelsAddress->birrformat="$";
                            $modelsAddress->customename=$model->customename;
                            $modelsAddress->type=$model->type;
                            $modelsAddress->vendorid=$model->vendorid;
                            $modelsAddress->valuecheck=0;
                            $m=$modelsAddress->noi;
                            $modelsAddress->monthlyreport=date('m');
                            $model->noi=$m;
                            $modelsAddress->yearlyreport=date('Y'); 

                            if (!($flag=$modelsAddress->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
    if ($flag) {
                $transaction->commit();
            $log->ordernumber=$model->id;    
            $log->save(); 

        \Yii::$app->session->setFlash('Success', ' informations Saved Successfully' );
         return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }}
        return $this->render('create', [
            'model'=>$model,
            'modelsAddress'=>(empty($modelsAddress)) ? [new Orderitem]:$modelsAddress
        ]);
    }   
    //For update 
public function getaddressess($id)
    {
      $model = Orderitem::find()->where(['foreign_key' => $id])->all();
      return $model;
    }

  public function actionCreatecons($id)
         {
           $model = $this->findModel($id);
          $modelsAddress=$this->getaddressess($model->id);
      if ($model->load(Yii::$app->request->post())) {
            $oldIDs = ArrayHelper::map($modelsAddress, 'id', 'id');
            $modelsAddress =Orderitem::createMultiple(Orderitem::classname(), $modelsAddress);
            Orderitem::loadMultiple($modelsAddress, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsAddress, 'id', 'id')));
            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsAddress),
                    ActiveForm::validate($model)
                );
            }
            // validate all models
            $valid = $model->validate();
            $valid = Orderitem::validateMultiple($modelsAddress) && $valid;
        if($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($deletedIDs)) {
                            Orderitem::deleteAll(['id' => $deletedIDs]);
                        }
                        foreach ($modelsAddress as $modelAddress) {
                            $modelAddress->foreign_key= $model->id;
                            if (! ($flag = $modelAddress->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
      if($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }}}
        return $this->render('createcons', [
            'model' => $model,
            'modelsAddress' => (empty($modelsAddress)) ? [new Orderitem] : $modelsAddress
        ]);
    }
  //Action for update
  public function actionCreateas($id)
    {
           $model = $this->findModel($id);
          $modelsAddress=$this->getaddressess($model->id);
      if ($model->load(Yii::$app->request->post())) {  
            $oldIDs=ArrayHelper::map($modelsAddress, 'id', 'id');
            $modelsAddress=Orderitem::createMultiple(Orderitem::classname(), $modelsAddress);
            Orderitem::loadMultiple($modelsAddress, Yii::$app->request->post());
            $deletedIDs=array_diff($oldIDs, array_filter(ArrayHelper::map($modelsAddress, 'id', 'id')));
            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format=Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsAddress),
                    ActiveForm::validate($model)
                );
            }
            // validate all models
            $valid = $model->validate();
            $valid = Orderitem::validateMultiple($modelsAddress) && $valid;
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($deletedIDs)) {
                            Orderitem::deleteAll(['id' => $deletedIDs]);
                        }
                        foreach ($modelsAddress as $modelAddress) {
                            $modelAddress->foreign_key= $model->id;
                            if(!($flag=$modelAddress->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }
        return $this->render('createas', [
            'model' => $model,
            'modelsAddress'=>(empty($modelsAddress)) ? [new Orderitem] : $modelsAddress
        ]);
    }  
public function actionCreatec()
    {    
           $model =new OrderEq;
           $modelsAddress=[new Orderitem];
           $model->Doo=date('Y-m-d');
if ($model->load(Yii::$app->request->post())){
      $modelsAddress = Orderitem::createMultiple(Orderitem::classname());
          $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->action="order created";  
        $log->dateentered=date('Y-m-d'); 
        $log->personnelid=Yii::$app->user->identity->personnelid;//' '.Yii::$app->user->identity->mname;
            
            Orderitem::loadMultiple($modelsAddress, Yii::$app->request->post());
            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsAddress),
                    ActiveForm::validate($model)
                );
            }

            // validate all models
            $valid = $model->validate();
            $valid =Orderitem::validateMultiple($modelsAddress) && $valid;
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsAddress as $modelsAddress) {
                            $modelsAddress->foreign_key= $model->id;
                           // $modelsAddress->birrformat="$";
                        $modelsAddress->customename=$model->customename;
                            $modelsAddress->type=$model->type;
                            $modelsAddress->vendorid=$model->vendorid;
                            $modelsAddress->valuecheck=0;
                           $m=$modelsAddress->noi;
                           $modelsAddress->monthlyreport=date('m');
                            $model->noi=$m;
                           $modelsAddress->yearlyreport=date('Y'); 

                            if (!($flag=$modelsAddress->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
    if ($flag) {
                $transaction->commit();
            $log->ordernumber=$model->id;    
            $log->save(); 

        \Yii::$app->session->setFlash('Success', ' informations Saved Successfully' );
         return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }
        return $this->render('createc', [
            'model'=>$model,
            'modelsAddress'=>(empty($modelsAddress)) ? [new Orderitem]:$modelsAddress
        ]);
    }   
public function actionCreate1($noi,$type)
          {
        $model=new Itemc();
        $model->noi=$noi;
        $model->type=$type;
if($model->save()){
      \Yii::$app->session->setFlash('success','Success');
    return $this->redirect(['create','id' => $model->id]);  
        }
\Yii::$app->session->setFlash('danger','informations not Saved/It is allready exist' );
    return $this->redirect(['index','id' => $model->id]);  
    }
public function actionCreatecon($noi,$type)
          {
        $model=new Itemc();
        $model->noi=$noi;
        $model->type=$type;
if($model->save()){
      \Yii::$app->session->setFlash('success','Success');
    return $this->redirect(['createc','id' => $model->id]);  
        }
\Yii::$app->session->setFlash('danger','informations not Saved Successfully' );
    return $this->redirect(['index','id' => $model->id]);  
    }
    /**
     * Updates an existing OrderEq model.
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
     * Deletes an existing OrderEq model.
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
     * Finds the OrderEq model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OrderEq the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OrderEq::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
