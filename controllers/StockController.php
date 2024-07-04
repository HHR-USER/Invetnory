<?php
namespace app\controllers;
use Yii;
use app\models\Stock;
use app\models\StockSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Request;
use\app\models\Users;
use yii\filters\AccessControl;
/**
 * StockController implements the CRUD actions for Stock model.
 */
class StockController extends Controller
    {
    public function behaviors()
    {
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['create','index','index1','indexup','indexupa','view','approve','cancel','update','update11'],
                'rules'=>[
                    [
                'actions'=>['create','index','index1','indexup','indexupa','view','approve','cancel','update','update11'],
                        'allow'=>true,
                        'roles'=>['@'],
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
     * Lists all Stock models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StockSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndexup()
    {
        $searchModel = new StockSearch();
        $dataProvider = $searchModel->search_up(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        return $this->render('indexup', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexupa()
    {
        $searchModel = new StockSearch();
        $dataProvider = $searchModel->search_upa(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        return $this->render('indexupa', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndex1()
    {
        $searchModel = new StockSearch();
        $dataProvider = $searchModel->searchap(Yii::$app->request->queryParams);

        return $this->render('index1', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Stock model.
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
     * Creates a new Stock model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Stock();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Stock model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionApprove($id,$notice)
    {
    //$model=app\models\Stock::find()->where(['id'=>$id])->one();
    //$model=Stock::find()->where(['id'=>$id])->one();
     $model=$this->findModel($id);
     $model->valuecheck=1;
     $model->notice=$notice;
     $model->status='Approved';
     $model->line_conf=2;
    $model->save();
    \Yii::$app->session->setFlash('Success','Approved BY'."  ".Yii::$app->user->identity->username);
    return $this->redirect(['request/index1', 'id' => $model->id]);
                }
public function actionCancel($id,$type)
    {
    //$model=app\models\Stock::find()->where(['id'=>$id])->one();
     //$model=Stock::find()->where(['id'=>$id])->one();
     $model=$this->findModel($id);
     $model->valuecheck=0;
     $model->notice=$type;
     $model->status='Cancelled';
     $model->line_conf=0;
     $model->save();
     \Yii::$app->session->setFlash('Success','Cancelled BY'."  ".Yii::$app->user->identity->username);
    return $this->redirect(['request/index1', 'id' => $model->id]);
                }
    public function actionUpdate($id)
       {
        $model = $this->findModel($id);
        $var_data=Request::find()->where(['id'=>$model->vendorid])->one();
if($model->load(Yii::$app->request->post()) && $model->save()) {
      // Always set content-type when sending HTML email
/*$headers="MIME-Version: 1.0" . "\r\n";
$headers .="Content-type:text/html;charset=UTF-8"."\r\n";
// More headers
$headers .='From: From inventory system <admin@example.com>' . "\r\n";
//$headers .= 'Cc: adibbazli1@gmail.com' . "\r\n";
$to="yetsedaw.y@gmail.com";
$subject ="I want stock "."\r\n".$model->noi.",";
$message="<b>"."Congratulations!"."</b>"." "."Click here to login <a href='http://hhrweb/inventory/web/index.php'>http://hhrweb/inventory/web/index.php</a>";
/*mail($to,$subject,$message,$headers);*/
$idds=Users::find()->where(['Type'=>Yii::$app->user->identity->Type,'role'=>'Linemanager'])->one();
    $ademail=$idds->email;
$body="<b>"."Congratulations!"."</b>"." "."Click here to login <a href='https://hhrweb/inventory/web/index.php'>https://hhrweb/inventory/web/index.php</a>"."<br>"."Please see the update stock I request and replay your feedback ,".$model->noi.","."Quantity:"." ".$model->quantity;
    $var_data->personnelid=Yii::$app->user->identity->personnelid;
        // Always set content-type when sending HTML email
    $headers="MIME-Version: 1.0" . "\r\n";
    $headers.="Content-type:text/html;charset=UTF-8"."\r\n";
   // More headers
    $headers.='From: From Inventory System <admin@example.com>' . "\r\n";
       $message="Hi,"." ".$idds->fname." ".$idds->mname;
$v_from=Yii::$app->user->identity->Type;
  $m="This is latest update stock request approval";
    if($v_from=="Microlab"){
       //mail($ademail,$message,$body,$headers);
    $model->sendHHRMail($ademail,$m,$body);
             }
    if($v_from=="Admin"){
          //mail($ademail,$message,$body,$headers);
     $model->sendHHRMail($ademail,$m,$body);
             }
    if($v_from=="IT"){
          //mail($ademail,$message,$body,$headers);
         $model->sendHHRMail($ademail,$m,$body);
             }
    if($v_from=="SBS"){
    //mail($ademail,$message,$body,$headers);
         $model->sendHHRMail($ademail,$m,$body);
             }
    if($v_from=="Pathology"){
              $model->department="Microlab";
    // mail($ademail,$message,$body,$headers);
     $model->sendHHRMail($ademail,$m,$body);
             }
    if($v_from=="Clinical"&&Yii::$app->user->identity->role!="PI"){
        $model->department="Microlab";
    //mail($ademail,$message,$body,$headers);
         $model->sendHHRMail($ademail,$m,$body);
             }
    if($v_from=="PSU"){
    //mail($ademail,$message,$body,$headers);
     $model->sendHHRMail($ademail,$m,$body);
             }
    if($v_from=="KHDSS"){
       //mail($ademail,$subject,$body,$email);
         $model->sendHHRMail($ademail,$m,$body);
             }
    if($v_from=="Clinical"&&Yii::$app->user->identity->role=="PI"){
            $model->department="Admin";
            //mail("mahlu.mek@gmail.com",$message,$body,$headers);
    $model->sendHHRMail("mahlu.mek@gmail.com",$m,$body);
             }
            $var_data->office=$model->department;
            $var_data->fname=$model->fname;
            $var_data->save();
            return $this->redirect(['stock/indexup', 'id'=>$model->id]);
           }
        return $this->render('update',[
            'model'=>$model,
        ]);
    }
public function actionUpdate11($id)
    {
        $model = $this->findModel($id);
       // $var_data=Request::find()->where(['id'=>$model->vendorid])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
          //  $var_data->office=$model->department;
           // $var_data->fname=$model->fname;
           // $var_data->save();
            return $this->redirect(['request/index1', 'id'=>$model->id]);}
        return $this->render('update',[
            'model'=>$model,
        ]);
    }
public function actionUpdate1($id)
    {
        $model = $this->findModel($id);
        $var_data=Request::find()->where(['id'=>$model->vendorid])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $headers="MIME-Version: 1.0" . "\r\n";
$headers .="Content-type:text/html;charset=UTF-8"."\r\n";
// More headers
$headers .='From: From inventory system <admin@example.com>' . "\r\n";
//$headers .= 'Cc: adibbazli1@gmail.com' . "\r\n";
$to="yetsedaw.y@gmail.com";
$subject ="I want stock "."\r\n".$model->noi.",";
$message="<b>"."Congratulations!"."</b>"." "."Click here to login <a href='https://hhrweb/inventory/web/index.php'>https://hhrweb/inventory/web/index.php</a>";
mail($to,$subject,$message,$headers);
            $var_data->office=$model->department;
            $var_data->fname=$model->fname;
            $var_data->save();
            return $this->redirect(['stock/indexup', 'id'=>$model->id]);
        }
        return $this->render('update1',[
            'model'=>$model,
        ]);
    }
    /**
     * Deletes an existing Stock model.
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
     * Finds the Stock model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Stock the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Stock::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
