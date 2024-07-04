<?php
namespace app\controllers;
use Yii;
use app\models\Request;
use app\models\RequestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Users;
use app\models\Itemc;
use app\models\Stock;
use app\models\StockSearch;
use yii\helpers\ArrayHelper;
use app\models\Value;
use app\models\Consumables;
use yii\filters\AccessControl;
class RequestController extends Controller
       {
        public function behaviors()
    {
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['create','create1','create2','create3','createca','index','index1','indexc','indexca','indexm','indexi','indexs'
				,'indexia','indexma','indexp','indexpa','viewnormal','view','view1','approve','approve1','cancel','rejected',
				'edite1','edit2','update','update1','print','moreinformation','poview'],
                'rules'=>[
                    [
                'actions'=>['create','create1','create2','create3','createca','index','index1','indexc','indexca','indexm','indexi','indexs'
				,'indexia','indexma','indexp','indexpa','viewnormal','view','view1','approve','approve1','cancel','rejected',
				'edite1','edit2','update','update1','print','moreinformation','poview'],
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
     * Lists all Request models.
     * @return mixed
     */
public function actionIndex()
      {
        $searchModel=new RequestSearch();
        $dataProvider=$searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        return $this->render('index',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionIndex1()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->searchap(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        return $this->render('index1', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexc()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search1(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        //$dataProvider->pagination->pageSize=5;
        return $this->render('indexc', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexca()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search1a(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       // $dataProvider->pagination->pageSize=10;
        return $this->render('indexca', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexm()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search2(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       // $dataProvider->pagination->pageSize=10;

        return $this->render('indexm', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexi()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search4(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       // $dataProvider->pagination->pageSize=10;

        return $this->render('indexi', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexs()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search5(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       // $dataProvider->pagination->pageSize=10;

        return $this->render('indexs', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexia()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search4a(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       // $dataProvider->pagination->pageSize=10;

        return $this->render('indexia', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexsa()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search5a(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       $dataProvider->pagination->pageSize=10;

        return $this->render('indexsa', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexma()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search2a(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       $dataProvider->pagination->pageSize=10;
        return $this->render('indexma', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexp()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search3(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       // $dataProvider->pagination->pageSize=10;
        return $this->render('indexp', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexpa()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search3a(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       // $dataProvider->pagination->pageSize=10;

        return $this->render('indexpa', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
//SearchMethod for PO

public function actionIndex5()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search_po(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        return $this->render('index5', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    } 
    /**
     * Displays a single Request model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
public function actionView($id)
    {
$searchModel = new StockSearch();
   $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);
    return $this->render('view', [
        'model' => $this->findModel($id),
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]);
    }
public function actionViewnormal($id)
    {
$searchModel = new StockSearch();
   $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);
    return $this->render('viewnormal', [
        'model' => $this->findModel($id),
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]);
    }
public function actionView1($id)
    {
        return $this->render('view1', [
            'model' => $this->findModel($id),
        ]);
    }
public function actionView2($id) {
   $searchModel = new StockSearch();
   $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);
    return $this->render('view2', [
        'model' => $this->findModel($id),
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]);
}
public function actionLview($id) {
   $searchModel=new StockSearch();
   $dataProvider=$searchModel->search(Yii::$app->request->queryParams,$id);
    return $this->render('lview', [
        'model'=>$this->findModel($id),
        'searchModel'=>$searchModel,
        'dataProvider'=>$dataProvider,
    ]);
}

public function actionPoview($id) {
   $searchModel=new StockSearch();
   $dataProvider=$searchModel->search(Yii::$app->request->queryParams,$id);
    return $this->render('poview', [
        'model'=>$this->findModel($id),
        'searchModel'=>$searchModel,
        'dataProvider'=>$dataProvider,
    ]);
}
public function actionCreate()
         {
      $model=new Request();
      $model->var_dep=Yii::$app->user->identity->Type;
      $model->fname=Yii::$app->user->identity->fname." ".Yii::$app->user->identity->mname." ".Yii::$app->user->identity->lname;
      $modelsAddress=[new Stock];
      $model->type="Consumable";
      $email=Yii::$app->user->identity->email;
      $fullname=Yii::$app->user->identity->fname." ".Yii::$app->user->identity->mname;
        $model->valuecheck=0;
    if(Yii::$app->user->identity->role=="PI"){
        $model->department="Admin";
       }
    else{
    $model->department=Yii::$app->user->identity->Type;
    }
  if($model->load(Yii::$app->request->post())){
	//Set request number function;
     $value=Value::find()->where(['id'=>1])->one();
     $value->r_no=(new \yii\db\Query())->from('value')->max('r_no');
     $value->r_no=$value->r_no+1;
     $value->save();
     $d="000000";
     $digit=substr($d,0,-(strlen($value->r_no)));
     $back=$digit;
     $val=$back.$value->r_no;
     $modelsAddress =Stock::createMultiple(Stock::classname());
     Stock::loadMultiple($modelsAddress,Yii::$app->request->post());
     $valid=$model->validate();
     $valid=Stock::validateMultiple($modelsAddress)&&$valid;
        if($valid){
              $transaction=\Yii::$app->db->beginTransaction();
                try{
                    $txt1=" ";
                    $txt2=" ";
                    $txt3=" ";
                   if($flag=$model->save(false)){
                       foreach($modelsAddress as $modelAddress){
                        $modelAddress->vendorid=$model->id;
                        $modelAddress->department=$model->office;
                        $modelAddress->dor=$model->dor;
                        $modelAddress->fname=$model->fname;
                        $modelAddress->type=$model->type;
                        $modelAddress->office=$model->office;
                        $modelAddress->email=Yii::$app->user->identity->email;
                        $txt1.="<b>Stock Name:</b>".($modelAddress->noi.'</br>');
                        $txt2.="<b>Stock Quantity:</b>".($modelAddress->quantity.'</br>');
                        $txt3.="<b>Specification:<b/>".($modelAddress->specification.'</br>');
            $model->personnelid=Yii::$app->user->identity->personnelid;
            $v_from=Yii::$app->user->identity->Type;
            $idds=Users::find()->where(['Type'=>$v_from])->orWhere(['role'=>'Linemanager'])->one();
            $idspi=Users::find()->where(['Type'=>"Admin"])->andWhere(['pi_check'=>1])->one();
/*if($idds){
        $ademail=$idds->email;
          }
 else if(Yii::$app->user->identity->role="PI"&&$idspi!=NULL){
        $ademail=$idspi->email;
         }
    else if(!$idds||!$idspi){
            print_r("NO line manager has been assigned to you or your account is not properly set,please contact yetsedaw.y@gmail.com to proceed");
            exit;
        }*/
  if(Yii::$app->user->identity->lnm_email){
    $ademail=Yii::$app->user->identity->lnm_email;
    $model->lnm_email=Yii::$app->user->identity->lnm_email;
}
else{
    print_r("NO line manager has been assigned to you or your account is not properly set,please contact yetsedaw.y@gmail.com to proceed");
    exit; 
    }
    $link20="https://10.231.19.20/inventory/web/index.php";
    $link197="https://web.hararghe.org/inventory/web/index.php";
    $unitg=$idds->Type;
if(!($flag=$modelAddress->save(false))){
              $transaction->rollBack();
                    break;
                   }}}
   $model->AssugnCode($model,$val);
if($flag){
        $headers="MIME-Version: 1.0\r\n";
        $headers.="Content-type: text/html; charset=iso-8859-1\r\n";
        $headers.="X-Priority: 3\r\n";
        $headers.="X-Mailer: PHP".phpversion()."\r\n";
        $headers.="Reply-To: ".$model->fname."<{$model->email}>\r\n"; 
        $headers.="Return-Path: ".$model->fname."<{$model->email}>\r\n";
        $headers.="From: ".$model->fname." <{$model->email}>\r\n";
        $m='Req No:'.$model->requestno .', Stock Request Approval.';
        $body="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
    <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    </head><body><div style='width:800px; height:100% auto; border:3px solid #088ef6; border-radius:5px; padding:10px'>
    <table width='700' border='0' cellspacing='0' cellpadding='0'>
    <tr><td><div style='padding:10px'><div style='font-size:14px'><div align='left' style='color:#d50000;   font-weight:bold; font-family:Arial, Helvetica, sans-serif'>Hi ".$idds->fname.",</div> <br /><div align='left' style='font-family:Arial, Helvetica, sans-serif'>Received Contact Message from 
    ".Yii::$app->user->identity->fname.",<br /> 
    <tr><td colspan='2'><b><u>Section A:Sender Information</u></b></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
    <tr><td>Sender Name:</td><td>"."<b style='color:green'>".$idds->fname." ".$idds->lname."<b/>"."</td></tr>
    <tr><td>Sender Email:</td><td>"."<b style='color:green'>".Yii::$app->user->identity->email."</b>"."</td></tr>
    <tr><td>Unit/Staf:</td><td>"."<b style='color:green'>"."From ".$unitg."</b>"."</td></tr>
    <tr><td>User System Id(Emp.ID):</td><td>"."<b style='color:green'>".Yii::$app->user->identity->personnelid."</b>"."</td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
    <tr><td colspan='2'=style='color:red'><b><u>Section B:Stock Requested Information<u/><b/></td></tr>
                ".$txt1.".<br/> 
                ".$txt2.".<br/> 
               ". $txt3.".<br/>
                Stock Type:"."<b>".$modelAddress->type."<b/>".".<br/> 
                Request Date:"."<b>".$modelAddress->dor."<b/>".".<br/> 
                "." Click link below.<br/> 
                "."</tr><tr><td>"."<a href='".$link20."' target='_blank'>"."inventory at office"."</a>"." to access anywhere click "."<a href='".$link197."' target='_blank'>"."inventory any where"."</a><br/><br/>"." Warm regards,<br/> 
                CHAMPS ETHIOPIA IT Team"."</td></tr></div></div>
    </html>";
    //CHECK BALANCE
    $iv_url="http://localhost/inventory/web/index.php/site/index4";
    $bconsume=Consumables::find()->where(["noi"=>$modelAddress->noi,"st_avail"=>"Avail","store"=>"Admin"])
        ->orWhere(["noi"=>$modelAddress->noi,"st_avail"=>"ini","store"=>"Admin"])
        ->all();
    $totalQuantity=0;
    foreach($bconsume as $item){
        $totalQuantity+=$item->quantity;
      }
    if($totalQuantity<$modelAddress->quantity){
        echo "The item is either unavailable or the available balance is less than what you requested. The current balance is $totalQuantity.To go back,click <a href='$iv_url'>here</a>.";
        exit;
    }
    $transaction->commit();
    $model->save();
    $model->sendHHRMail($ademail,$m,$body);
    Yii::$app->session->setFlash('success',"Dear"." ".$fullname." "."your request sent successfully. An email will be sent to your line manager and it will be seen by him/her.Please check your email and click the link that has been sent to you will know response given by your line manager.");
    return $this->redirect(['viewnormal','id'=>$model->id]);
                   }
                } 
    catch (Exception $e){
                  $transaction->rollBack();
               }
            }
          }
    return $this->render('create',[
          'model'=>$model,
          'modelsAddress'=>(empty($modelsAddress))?[new Stock]:$modelsAddress
    ]);
     }
 //Non consumable asset requests
public function actionCreateca()
  {
    $model=new Request();
    $model->var_dep=Yii::$app->user->identity->Type;
    $modelsAddress=[new Stock];
    $model->fname=Yii::$app->user->identity->fname." ".Yii::$app->user->identity->mname." ".Yii::$app->user->identity->lname;
    $model->type="None-consumable";
    $email=Yii::$app->user->identity->email;
    $fullname=Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname;
     $model->valuecheck=0;
if(Yii::$app->user->identity->role=="PI"){
        $model->department="Admin";
       }
   else{
    $model->department=Yii::$app->user->identity->Type;
    }
if($model->load(Yii::$app->request->post())){
	//Set request number function;
     $value=Value::find()->where(['id'=>1])->one();
     $value->r_no=(new \yii\db\Query())->from('value')->max('r_no');
     $value->r_no=$value->r_no+1;
     $value->save();
     $d="000000";
     $digit=substr($d,0,-(strlen($value->r_no)));
      $back=$digit;
      $val=$back.$value->r_no;
          $modelsAddress=Stock::createMultiple(Stock::classname());
           Stock::loadMultiple($modelsAddress,Yii::$app->request->post());
           $valid=$model->validate();
           $valid=Stock::validateMultiple($modelsAddress)&&$valid;
           if($valid){
              $transaction=\Yii::$app->db->beginTransaction();
                try{
                    $dataArray=array('NOA','quantity','specification');
                    $txt1=" ";
                    $txt2=" ";
                    $txt3=" ";
             if($flag=$model->save(false)){
                       foreach ($modelsAddress as $modelAddress){
                        $modelAddress->vendorid=$model->id;
                        $modelAddress->department=$model->office;
                        $modelAddress->dor=$model->dor;
                        $modelAddress->fname=$model->fname;
                        $modelAddress->type=$model->type;
                        $modelAddress->office=$model->office;
                        $modelAddress->email=Yii::$app->user->identity->email;
                        $txt1.="<b>Stock Name:</b>".($modelAddress->noi.'</br>');
                        $txt2.="<b>Stock Quantity:</b>".($modelAddress->quantity.'</br>');
                        $txt3.="<b>Specification:<b/>".($modelAddress->specification.'</br>');
                        $idds=Users::find()->where(['Type'=>Yii::$app->user->identity->Type])->orWhere(['role'=>'Linemanager'])->one();
                        $idspi=Users::find()->where(['Type'=>"Admin"])->andWhere(['pi_check'=>1])->one();
      $v_from=Yii::$app->user->identity->Type;
//CHECK BALANCE
$iv_url="http://localhost/inventory/web/index.php/site/index4";
$bconsume=Consumables::find()->where(["noi"=>$modelAddress->noi,"st_avail"=>"Avail","store"=>"Admin"])
    ->orWhere(["noi"=>$modelAddress->noi,"st_avail"=>"ini","store"=>"Admin"])
    ->all();
$totalQuantity=0;
foreach($bconsume as $item){
    $totalQuantity+=$item->quantity;
  }
if($totalQuantity<$modelAddress->quantity){
    echo "The item is either unavailable or the available balance is less than what you requested. The current balance is $totalQuantity.To go back,click <a href='$iv_url'>here</a>.";
    exit;
}
if(Yii::$app->user->identity->lnm_email){
    $ademail=Yii::$app->user->identity->lnm_email;
    $model->lnm_email=Yii::$app->user->identity->lnm_email;
    }
else{
    print_r("NO line manager has been assigned to you or your account is not properly set,please contact yetsedaw.y@gmail.com to proceed");
    exit; 
    }
//start
     $link20="https://10.231.19.20/inventory/web/index.php";
     $link197="https://web.hararghe.org/inventory/web/index.php";
     $m='Req No:'.$model->requestno.',Stock Request Approval.';
if(!($flag=$modelAddress->save(false))){
        $transaction->rollBack();
        break;
         }
    }}
   $model->AssugnCodeasset($model,$val);
    if($flag){
        $names=$idds->fname." ".$idds->mname;
        $unitg=$model->type;
        $headers="MIME-Version: 1.0\r\n";
        $headers.="Content-type: text/html; charset=iso-8859-1\r\n";
        $headers.="X-Priority: 3\r\n";
        $headers.="X-Mailer: PHP".phpversion() ."\r\n";
        $headers.="Reply-To: ".$model->fname."<{$model->email}>\r\n"; 
        $headers.="Return-Path: ".$model->fname." <{$model->email}>\r\n";
        $headers.="From: ".$model->fname."<{$model->email}>\r\n";
        $m='Req No:'.$model->requestno.', Stock Request Approval.';
        $body="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
    <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    </head><body><div style='width:800px; height:100% auto; border:3px solid #088ef6; border-radius:5px; padding:10px'>
    <table width='700' border='0' cellspacing='0' cellpadding='0'>
    <tr><td><div style='padding:10px'><div style='font-size:14px'><div align='left' style='color:#d50000;   font-weight:bold; font-family:Arial, Helvetica, sans-serif'>Hi ".$idds->fname.",</div> <br /><div align='left' style='font-family:Arial, Helvetica, sans-serif'>Received Contact Message from 
    ".Yii::$app->user->identity->fname.",<br /> 
    <tr><td colspan='2'><b><u>Section A:Sender Information</u></b></td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
    <tr><td>Sender Name:</td><td>"."<b style='color:green'>".$idds->fname." ".$idds->lname."<b/>"."</td></tr>
    <tr><td>Sender Email:</td><td>"."<b style='color:green'>".Yii::$app->user->identity->email."</b>"."</td></tr>
    <tr><td>Unit/Staf:</td><td>"."<b style='color:green'>"."From ".$unitg."</b>"."</td></tr>
    <tr><td>User System Id(Emp.ID):</td><td>"."<b style='color:green'>".Yii::$app->user->identity->personnelid."</b>"."</td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
    <tr><td colspan='2'=style='color:red'><b><u>Section B:Stock Requested Information<u/><b/></td></tr>
                ".$txt1.".<br/> 
                ".$txt2.".<br/> 
               ". $txt3.".<br/>
                Stock Type:"."<b>".$modelAddress->type."<b/>".".<br/> 
                Request Date:"."<b>".$modelAddress->dor."<b/>".".<br/> 
                "." Click link below.<br/> 
                "."</tr><tr><td>"."<a href='".$link20."' target='_blank'>"."inventory at office"."</a>"." to access anywhere click "."<a href='".$link197."' target='_blank'>"."inventory any where"."</a><br/><br/>"." Warm regards,<br/> 
                CHAMPS ETHIOPIA IT Team"."</td></tr></div></div>
    </html>";
    $model->sendHHRMail($ademail,$m,$body);
    $transaction->commit();
    $model->save();
    Yii::$app->session->setFlash('success',"Dear"." ".$fullname." "."your request sent successfully. An email will be sent to your line manager and it will be seen by him/her.Please check your email and click the link that has been sent to you will know response given by your line manager.");
    return $this->redirect(['viewnormal','id'=>$model->id]);
            }
          } 
    catch(Exception $e){
                  $transaction->rollBack();
               }
            }}
    return $this->render('createca',[
          'model'=>$model,
          'modelsAddress' => (empty($modelsAddress)) ? [new Stock] :$modelsAddress
    ]);
     }
public function actionCreate1($id)
    {
        $model=$this->findModel($id);
        $model->personnelid=Yii::$app->user->identity->personnelid;
        if($model->load(Yii::$app->request->post())&&$model->save()){
            \Yii::$app->session->setFlash('Success',' informations Saved Successfully' );
            return $this->redirect(['view','id'=>$model->id]);
        }
        return $this->render('create1',[
            'model'=>$model,'id'=>$id,
        ]);
    }
public function actionCreate2($noi,$type)
          {
        $model=new Itemc();
        $model->noi=$noi;
        $model->type=$type;
if($model->save()){
      \Yii::$app->session->setFlash('success','Success');
    return $this->redirect(['create','id'=>$model->id]);  
        }
\Yii::$app->session->setFlash('danger','informations not Saved/Duplicated' );
    return $this->redirect(['request/create','id'=>$model->id]);  
    }
public function actionCreate3($noi,$type)
          {
        $model=new Itemc();
        $model->noi=$noi;
        $model->type=$type;
if($model->save()){
      \Yii::$app->session->setFlash('success','Success');
    return $this->redirect(['createca','id'=>$model->id]);  
        }
\Yii::$app->session->setFlash('danger','informations not Saved/Duplicated' );
    return $this->redirect(['request/createca','id' => $model->id]);  
    }
public function actionApprove($id,$notice)
       {
     $model=Request::find()->where(['id'=>$id])->one();
     $model->valuecheck=1;
     $model->notice=$notice;
     $model->status='Approved';
     $model->save();
      \Yii::$app->session->setFlash('Success', ' You received the items you request' );
          return $this->redirect(['index1', 'id' => $model->id]);
        }
public function actionCancel($id,$notice)
    {
     $model=Request::find()->where(['id'=>$id])->one();
     $model->valuecheck=0;
     $model->notice=$notice;
     $model->status='Cancelled';
     $model->save();
    \Yii::$app->session->setFlash('Success', ' You reject the items you request' );
    return $this->redirect(['index1', 'id' => $id]);
                }
public function actionApprove1($id)
    {
    $vas=Stock::find()->where(['id'=>$id])->one();
    $model=Request::find()->where(['id'=>$vas->vendorid])->one();
    $model->fname=$vas->fname;
    $model->valuecheck=" ";
    $vas->line_conf=1;
    $url="http://localhost/inventory/web/index.php/site/index4";
    //CHECK BALANCE
    /*$bconsume=Consumables::find()->where(["noi"=>$vas->noi,"st_avail"=>"Avail","store"=>"Admin"])->orWhere(["noi"=>$vas->noi,"st_avail"=>"ini","store"=>"Admin"])->all();
   $totalQuantity=0;
foreach($bconsume as $item){
    $totalQuantity+=$item->quantity;
  }
if($totalQuantity<$vas->quantity){
    echo "The item is either unavailable or the available balance is less than what you requested. The current balance is $totalQuantity.To go back,click <a href='$url'>here</a>.";
    exit;
      }
    else{*/
$vas->confirmbymicro="Approved by"."  ".Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname;
$vas->save();
    if($model->valuecheck!=1&&$model->valuecheck!=2&&$model->valuecheck!=-1){
     $model->valuecheck=1;
     $command="UPDATE request SET confirmbymicro='$model->confirmbymicro',valuecheck='$model->valuecheck' where id='$id'";
     Yii::$app->db->createCommand($command)->execute(); 
    $model->save();
    $body="Your request has been approved:"."by".Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname." ".$model->noi.","."Amount:-"." ".$model->quantity.", "."Description:"." ".$model->specification;
    $email="yetsedaw.y@gmail.com";
    $fullname=Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname.":";
    $subject="I am"." ".$fullname;
    $emails=Yii::$app->user->identity->email;
$linkh="https://web.hararghe.org/inventory/web/index.php/site/login";
$link20="https://web.hararghe.org/inventory/web/index.php/site/login";
$link197="https://10.231.19.20/inventory/web/index.php";
$m="Stock Request Approval Result";
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="X-Priority: 3\r\n";
$headers.="X-Mailer: PHP". phpversion() ."\r\n";
$headers.="Reply-To: ".$vas->fname." <{$vas->email}>\r\n"; 
$headers.="Return-Path: ".$vas->fname." <{$vas->email}>\r\n";
$headers.="From: ".$vas->fname." <{$vas->email}>\r\n";
$m='Req No:'.$model->requestno .', Stock Request Approval Result.';
$body="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
</head><body><div style='width:800px; height:100% auto; border:3px solid #088ef6; border-radius:5px; padding:10px'>
<table width='700' border='0' cellspacing='0' cellpadding='0'>
<tr><td><div style='padding:10px'><div style='font-size:14px'><div align='left' style='color:#d50000;   font-weight:bold; font-family:Arial, Helvetica, sans-serif'>Hi ".$vas->fname.",</div> <br /><div align='left' style='font-family:Arial, Helvetica, sans-serif'>Received Contact Message from 
".Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname.",<br /> 
<tr><td colspan='2'><b><u>Section A:Line Manager Information</u></b></td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>Sender Name:</td><td>"."<b style='color:green'>".Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname."<b/>"."</td></tr>
<tr><td>Sender Email:</td><td>"."<b style='color:green'>".Yii::$app->user->identity->email."</b>"."</td></tr>
<tr><td>Unit/Staf:</td><td>"."<b style='color:green'>"."From ".$vas->department."</b>"."</td></tr>
<tr><td>User System Id(Emp.ID):</td><td>"."<b style='color:green'>".Yii::$app->user->identity->personnelid."</b>"."</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td colspan='2'=style='color:red'><b><u>Section B:Stock Requested Approval result<u/><b/></td></tr>
        Stock Name:"."<b>".$vas->noi."</b>".".<br/> 
        Stock Quantity:"."<b>".$vas->quantity."<b/>".".<br/> 
        Specification: "."<b>".$vas->specification."<b/>".".<br/>
        Stock Type:"."<b>".$vas->type."<b/>".".<br/> 
        Request Date:"."<b>".$vas->dor."<b/>".".<br/> 
        Approval Result:"."<b>".$vas->confirmbymicro."<b/>".".<br/> 
        "." Click link below if you want to login and see result.<br/> 
        "."</tr><tr><td>"."<a href='".$link20."' target='_blank'>"."inventory at office"."</a>"." to access anywhere click "."<a href='".$link197."' target='_blank'>"."inventory any where"."</a><br/><br/>"." Warm regards,<br/> 
        CHAMPS ETHIOPIA IT Team"."</td></tr></div></div>
</html>";
    $idds=\app\models\StokeKeeper::find()->where(['st_status'=>1])->one();
    $addemailv=$vas->email;
    $appr=Users::find()->where(['Type'=>Yii::$app->user->identity->Type])->orWhere(['role'=>'Linemanager'])->one();
 if($idds){
    $ademail=$idds->st_email;
    }
if(!$appr){
  print_r("NO line manager has been assigned to the sender,please contact yetsedaw.y@gmail.com to proceed");
    exit;
  }
if($appr){
   $ap_email=$appr->email;
 }
if(!$idds){
    print_r("NO line manager has been assigned to the sender,please contact yetsedaw.y@gmail.com to proceed");
    exit;
    }
  $model->sendMailmulp($ademail,$addemailv,$ap_email,$m,$body);
   if(Yii::$app->user->identity->Type=="Microlab"){
    Yii::$app->session->setFlash('success',"This request approved successfully. An email will be sent");
             }
     if(Yii::$app->user->identity->Type=="Admin"){
      Yii::$app->session->setFlash('success',"This request approved successfully. An email will be sent");
             }
    if(Yii::$app->user->identity->Type=="IT"){
           Yii::$app->session->setFlash('success',"This request approved successfully. An email will be sent");
                  }
    if(Yii::$app->user->identity->Type=="SBS"){
     Yii::$app->session->setFlash('success',"This request approved successfully. An email will be sent");
                  }
    if(Yii::$app->user->identity->Type=="Pathology"){
        Yii::$app->session->setFlash('success',"This request approved successfully. An email will be sent");
                  }
    if(Yii::$app->user->identity->Type=="Clinical"){
     Yii::$app->session->setFlash('success',"This request approved successfully. An email will be sent");
                  }
    if(Yii::$app->user->identity->Type=="PSU"){
        Yii::$app->session->setFlash('success',"This request approved successfully. An email will be sent");
                  }
    if(Yii::$app->user->identity->Type=="KHDSS"){
     Yii::$app->session->setFlash('success',"This request approved successfully. An email will be sent");
             }
    \Yii::$app->session->setFlash('success','Approved' );
    return $this->redirect(['lview','id'=>$model->id]);
          }
      else {
      \Yii::$app->session->setFlash('success','it is Successfully approved');
      return $this->redirect(['lview','id'=>$model->id]);
    }}//}
public function actionRejected($id,$confirmbymicro)
    {
  $vas=Stock::find()->where(['id'=>$id])->one();
  $model=Request::find()->where(['id'=>$vas->vendorid])->one();
  $model->fname=$vas->fname;
  $vas->line_conf=5;
  $model->valuecheck=" ";
  $model->save();
  $model->confirmbymicro="Your request is rejected b/c".".".$confirmbymicro." ";
  $vas->confirmbymicro="Your request is rejected b/c"." ".$confirmbymicro." "." ";
   $vas->save();
  if($model->valuecheck!=1&&$model->valuecheck!=2&&$model->valuecheck!=-1){ 
    $model->valuecheck=-1;
    $command="UPDATE request SET confirmbymicro='$model->confirmbymicro',valuecheck='$model->valuecheck' where id='$id'";
     Yii::$app->db->createCommand($command)->execute(); 
     $model->save();
        $email=$model->email;
        $fullname=Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname;
        $subject="I am"." ".$fullname;
        $emails=Yii::$app->user->identity->email;
        $linkh="https://web.hararghe.org/inventory/web/index.php/site/login";
        $link20="https://10.231.19.20/inventory/web/index.php";
        $link197="https://web.hararghe.org/inventory/web/index.php/site/login";
$headers="MIME-Version: 1.0" . "\r\n";
$headers.="Content-type:text/html;charset=UTF-8"."\r\n";
$subject="Me"." ".Yii::$app->user->identity->fname." ".Yii::$app->user->identity->mname."I refused to receive  your request because the stock is."." " .$model->noi." ".$model->confirmbymicro;
$m="Stock Request Reject Detail";
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="X-Priority: 3\r\n";
$headers.="X-Mailer: PHP". phpversion() ."\r\n";
$headers.="Reply-To: ".$vas->fname." <{$vas->email}>\r\n"; 
$headers.="Return-Path: ".$vas->fname." <{$vas->email}>\r\n";
$headers.="From: ".$vas->fname." <{$vas->email}>\r\n";
$m='Req No:'.$model->requestno .', Stock Request Rejected Detail.';
$body="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
</head><body><div style='width:800px; height:100% auto; border:3px solid #088ef6; border-radius:5px; padding:10px'>
<table width='700' border='0' cellspacing='0' cellpadding='0'>
<tr><td><div style='padding:10px'><div style='font-size:14px'><div align='left' style='color:#d50000;   font-weight:bold; font-family:Arial, Helvetica, sans-serif'>Hi ".$vas->fname.",</div> <br /><div align='left' style='font-family:Arial, Helvetica, sans-serif'>Received Contact Message from 
".Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname.",<br /> 
<tr><td colspan='2'><b><u>Section A:Line Manager Information</u></b></td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td>Sender Name:</td><td>"."<b style='color:green'>".Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname."<b/>"."</td></tr>
<tr><td>Sender Email:</td><td>"."<b style='color:green'>".Yii::$app->user->identity->email."</b>"."</td></tr>
<tr><td>Unit/Staf:</td><td>"."<b style='color:green'>"."From ".$vas->department."</b>"."</td></tr>
<tr><td>User System Id(Emp.ID):</td><td>"."<b style='color:green'>".Yii::$app->user->identity->personnelid."</b>"."</td></tr>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr><td colspan='2'=style='color:red'><b><u>Section B:Stock Requested Approval result<u/><b/></td></tr>
        Stock Name:"."<b>".$vas->noi."</b>".".<br/> 
        Stock Quantity:"."<b>".$vas->quantity."<b/>".".<br/> 
        Specification: "."<b>".$vas->specification."<b/>".".<br/>
       Stock Type:"."<b>".$vas->type."<b/>".".<br/> 
        Request Date:"."<b>".$vas->dor."<b/>".".<br/> 
        Reject Result:"."<b>".$vas->confirmbymicro."<b/>".".<br/> 
        "." Click link below if you want to login and see result.<br/> 
        "."</tr><tr><td>"."<a href='".$link20."' target='_blank'>"."inventory at office"."</a>"." to access anywhere click "."<a href='".$link197."' target='_blank'>"."inventory any where"."</a><br/><br/>"." Warm regards,<br/> 
        CHAMPS ETHIOPIA IT Team"."</td></tr></div></div>
</html>";
   $ademail=$vas->email;
   $model->sendHHRMail($ademail,$m,$body);
if(Yii::$app->user->identity->Type=="Microlab"){
             }
if(Yii::$app->user->identity->Type=="Admin"){
             }
    if(Yii::$app->user->identity->Type=="IT"){
             }
  if(Yii::$app->user->identity->Type=="SBS"){
             }
  if(Yii::$app->user->identity->Type=="Pathology"){
             }
    if(Yii::$app->user->identity->Type=="Clinical"){
             }
if(Yii::$app->user->identity->Type=="PSU"){
             }
if(Yii::$app->user->identity->Type=="KHDSS"){
             }
    \Yii::$app->session->setFlash('error','Rejected' );
            return $this->redirect(['lview','id'=>$model->id]);
          }
    else{
        \Yii::$app->session->setFlash('error','Already you rejecte it' );
            return $this->redirect(['lview','id'=>$model->id]);
       }}
public function actionMoreinfromation($id,$confirmbymicro)
    {
    $model=Request::find()->where(['id'=>$id])->one();
    $model->confirmbymicro=$confirmbymicro;
      if($model->valuecheck!=1&&$model->valuecheck!=2&&$model->valuecheck!=-1){ 
     $model->valuecheck=2;
     $command="UPDATE request SET confirmbymicro='$model->confirmbymicro',valuecheck='$model->valuecheck' where id='$id'";
     Yii::$app->db->createCommand($command)->execute(); 
    $body="Your request has been Disqualified because the item requested is not valid:"."by".Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname." ".$model->noi.","."Amount:-"." ".$model->quantity.", "."Description:"." ".$model->specification;
        $email=$model->email;
        $fullname=Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname;
        $subject="I am"." ".$fullname;
        $emails=Yii::$app->user->identity->email;
            \Yii::$app->session->setFlash('Success', 'Request again');
    if($model->type=="Consumable"){
            return $this->redirect(['create','id'=>$model->id]);
          }
    if($model->type=="None-consumable"){
                  \Yii::$app->session->setFlash('Success','Request again');
            return $this->redirect(['createca','id'=>$model->id]);
          }}
      else{
          \Yii::$app->session->setFlash('error','Already you rejecte it' );
    return $this->redirect(['lview','id'=>$model->id]);
              }}
public function actionUpdate($id)
    {
        $model=$this->findModel($id);
        if($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index1','id'=>$model->id]);
        }
        return $this->render('update',[
            'model'=>$model,
        ]);
    }
public function actionPrint($id)
    {
     $searchModel=new StockSearch();
        $dataProvider=$searchModel->search1(Yii::$app->request->queryParams,$id);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        return $this->render('print',[
            'searchModel'=>$searchModel,
            'model' =>$this->findModel($id),
            'dataProvider'=>$dataProvider,
        ]);
    }
    public function actionUpdate1($id)
          {
        $model=$this->findModel($id);
        if ($model->load(Yii::$app->request->post())&&$model->save()){
            return $this->redirect(['indexm','id'=>$model->id]);
           }
        return $this->render('update1',[
            'model'=>$model,
        ]);
    }
public function getaddressess($id)
    {
      $model=Stock::find()->where(['vendorid'=>$id])->all();
      return $model;
    }
public function actionEdit1($id)
       {
    $model=$this->findModel($id);
    $modelsAddress=$this->getaddressess($model->id);
    $model->type="Consumable";
    $email=Yii::$app->user->identity->email;
    $fullname=Yii::$app->user->identity->fname."".Yii::$app->user->identity->mname;
      if ($model->load(Yii::$app->request->post())){   
            $oldIDs=ArrayHelper::map($modelsAddress, 'id', 'id');
            $modelsAddress =Stock::createMultiple(Stock::classname(), $modelsAddress);
            Stock::loadMultiple($modelsAddress, Yii::$app->request->post());
            $deletedIDs=array_diff($oldIDs, array_filter(ArrayHelper::map($modelsAddress, 'id', 'id')));
            // ajax validation
            if(Yii::$app->request->isAjax){
                Yii::$app->response->format=Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsAddress),
                    ActiveForm::validate($model)
                );
            }
            // validate all models
            $valid=$model->validate();
            $valid=Stock::validateMultiple($modelsAddress) && $valid;

            if($valid){
                $transaction=\Yii::$app->db->beginTransaction();
                try{
                    if($flag=$model->save(false)){
                        if(!empty($deletedIDs)) {
                          Stock::deleteAll(['id'=>$deletedIDs]);
                        }
                        foreach ($modelsAddress as $modelAddress){
                        $modelAddress->vendorid=$model->id;
                        $modelAddress->department=$model->office;
                        $modelAddress->dor=$model->dor;
                        $modelAddress->fname=$model->fname;
                        $subject="I am"." ".$fullname;
    $model->personnelid=Yii::$app->user->identity->personnelid;
    $body="I update this consumables item informations to:"." ".$modelAddress->noi.","."Amount:"." ".$modelAddress->quantity;
    $idds=Users::find()->where(['Type'=>Yii::$app->user->identity->Type,'role'=>'Linemanager'])->one();
    $ademail=$idds->email;
    $v_from=Yii::$app->user->identity->Type;
    $m="This is latest update stock request approval";
    $model->sendHHRMail($ademail,$m,$body);
    if($v_from=="Microlab"){
      $model->sendHHRMail($ademail,$m,$body);
             }
    if($v_from=="Admin"){
             }
    if($v_from=="IT"){
             }
   if($v_from=="SBS"){
             }
    if($v_from=="Pathology"){
             }
    if($v_from=="Clinical"){
             }
   if($v_from=="PSU"){
             }
   if($v_from==" KHDSS"){
             }
     if (!($flag=$modelAddress->save(false))) {
                            $transaction->rollBack();
                            break;
                          }
                       }
                    }
if(Yii::$app->user->identity->Type=="Clinical"){
                $model->requestno="C".'000'.$model->id;
                $model->dep="Clinical";
               }
if(Yii::$app->user->identity->Type=="Microlab"){
                $model->requestno="M".'000'.$model->id;
                $model->dep="Microlab";
               }
if(Yii::$app->user->identity->Type=="Pathology"){
                $model->requestno="P".'000'.$model->id;
                $model->dep="Pathology";
               }
if(Yii::$app->user->identity->Type=="IT"){
                $model->requestno="I".'000'.$model->id;
                $model->dep="IT";
               }
if(Yii::$app->user->identity->Type=="SBS"){
                $model->requestno="S".'000'.$model->id;
                $model->dep="SBS";
               }
if(Yii::$app->user->identity->Type=="Admin"){
                $model->requestno="A".'000'.$model->id;
                $model->dep="Admin";
               }
if(Yii::$app->user->identity->Type=="KHDSS"){
                $model->requestno="K".'000'.$model->id;
                $model->dep="KHDSS";
               }             
if(Yii::$app->user->identity->Type=="PSU"){
                $model->requestno="PSU".'000'.$model->id;
                $model->dep="PSU";
               }

          $model->save();
    if($flag) {
    $transaction->commit();
            return $this->redirect(['viewnormal','id'=>$model->id]);
                   }
                } 
    catch (Exception $e) {
                  $transaction->rollBack();
               }
            }
          }
         return $this->render('edit1', [
          'model' => $model,
          'modelsAddress' => (empty($modelsAddress)) ? [new Stock] :$modelsAddress
    ]);
     }
     //........................Assets
    public function actionEdit2($id)
          {
           $model = $this->findModel($id);
          $modelsAddress=$this->getaddressess($model->id);
        $model->type="None-consumable";
       // $model->dor=date('Y-m-d');
        //mail 
    $to = "yworku@hararghe.org";
    $headers = "From:web_admin@hararghe.org" . "\r\n";
    //$model->dor=date('Y-m-d');
    $model->type="None-consumable";
    $email=Yii::$app->user->identity->email;
    $fullname=Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname;
    //$model->personnelid=Yii::$app->user->identity->personnelid;
   // $model->email=$email;
     $model->valuecheck=0;
      if ($model->load(Yii::$app->request->post())) {   
            $oldIDs = ArrayHelper::map($modelsAddress, 'id', 'id');
            $modelsAddress =Stock::createMultiple(Stock::classname(), $modelsAddress);
            Stock::loadMultiple($modelsAddress, Yii::$app->request->post());
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
            $valid = Stock::validateMultiple($modelsAddress) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($deletedIDs)) {
                            Stock::deleteAll(['id' => $deletedIDs]);
                        }
                        foreach ($modelsAddress as $modelAddress) {
                                         $modelAddress->vendorid=$model->id;
                        $modelAddress->department=$model->office;
                        $modelAddress->dor=$model->dor;
                        $modelAddress->fname=$model->fname;
                        $subject="I am"." ".$fullname;
     $idds=Users::find()->where(['Type'=>Yii::$app->user->identity->Type,'role'=>'Linemanager'])->one();
    $ademail=$idds->email;
    $body="Hi"." ".$modelAddress->fname." "."<b>"."Congratulations!"."</b>"." "."Click here to login <a href='https://hhrweb/inventory/web/index.php'>https://hhrweb/inventory/web/index.php</a>";
        $model->personnelid=Yii::$app->user->identity->personnelid;
      $v_from=Yii::$app->user->identity->Type;
      $m="This is latest update stock request approval";
        $model->sendHHRMail($ademail,$m,$body);
    if($v_from=="Microlab"){
             }
     if($v_from=="Admin"){
             }
    if($v_from=="IT"){
             }
    if($v_from=="SBS"){
             }
  if($v_from=="Pathology"){
             }
if($v_from=="Clinical"){
             }
 if($v_from=="PSU"){
             }
   if($v_from=="KHDSS"){
             }
   if(!($flag=$modelAddress->save(false))) {
        $transaction->rollBack();
                break;
                }
              }}
if(Yii::$app->user->identity->Type=="Clinical"){
                $model->requestno="C".'000'.$model->id;
                $model->dep="Clinicala";//to display only clinical
               }
    if(Yii::$app->user->identity->Type=="Microlab"){
                $model->requestno="M".'000'.$model->id;
                $model->dep="Microlaba";//to display only microlab
               }
    if(Yii::$app->user->identity->Type=="Pathology"){
                $model->requestno="P".'000'.$model->id;
                $model->dep="Pathologya";//to display only pathology
               }
    if(Yii::$app->user->identity->Type=="IT"){
                $model->requestno="I".'000'.$model->id;
                $model->dep="ITa";//to display only IT
               }
    if(Yii::$app->user->identity->Type=="SBS"){
                $model->requestno="S".'000'.$model->id;
                $model->dep="SBSa";
               }
  if(Yii::$app->user->identity->Type=="Admin"){
                $model->requestno="A".'000'.$model->id;
                $model->dep="Admin";
               }
if(Yii::$app->user->identity->Type=="KHDSS"){
                $model->requestno="K".'000'.$model->id;
                $model->dep="KHDSSa";
               }
if(Yii::$app->user->identity->Type=="PSU"){
                $model->requestno="PSU".'000'.$model->id;
                $model->dep="PSUa";
               }
          $model->save();
    if($flag) {
    $transaction->commit();
            return $this->redirect(['viewnormal','id'=>$model->id]);
                   }
                } 
    catch (Exception $e) {
                  $transaction->rollBack();
               }
            }
          }
         return $this->render('edit2', [
          'model' => $model,
          'modelsAddress' => (empty($modelsAddress)) ? [new Stock] :$modelsAddress
    ]);
     }
    /**
     * Deletes an existing Request model.
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
    public function actionBack()
        {
        return $this->redirect(['site/index4']);
        }
    public function actionBacks()
        {
        return $this->redirect(['site/index5']);
        }
    /**
     * Finds the Request model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Request the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
        {
    if(($model=Request::findOne($id))!==null) {
            return $model;
        }
throw new NotFoundHttpException('The requested page does not exist.');
    }}
