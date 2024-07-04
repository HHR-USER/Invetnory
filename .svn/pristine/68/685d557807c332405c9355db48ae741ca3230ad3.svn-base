<?php
namespace app\controllers;
use Yii;
use app\models\Consumables;
use app\models\Tbltrashhold;
use app\models\Cart;
use app\models\ConsumablesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Withdrow;
use app\models\WithdrowSearch;
use app\models\Personnel;
use app\models\Logtable;
use kartik\mpdf\Pdf;
use app\models\StockSearch;
use yii\filters\AccessControl;
use yii\db\Expression;
class ConsumablesController extends Controller
 {
   public function checkStockLevel()
    {
        $stockThreshold=10;
        //Retrieve the stock level from the database table
        $stockLevel=Consumables::find()->where(['<=','quantity',$stockThreshold])->count();
        if($stockLevel>0){
            $message=Yii::$app->mailer->compose()
                ->setFrom('do_not_reply@hararghe.org')
                ->setTo('yetsedaw.y@gmail.com')
                ->setSubject('Low Stock Notification')
                ->setTextBody('The stock level is low.Please reorder.');
            $message->send();
        }
     }
public function behaviors()
       {
        return[
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['create','update','index','createmore','index1','index2','index3','index4','index5','index6','index7','index8','index9',
					'indexb','cartconsumable','Cartconsumables','barcode','receive','transfer','createas',
				'update_up','update_lotup','update_expiredate','create2','create3','rejected','received','view','cartconsumablebalance'],
                'rules'=>[
                    [
                    'actions'=>['create','update','index','index1','index2','index3','index4','index5','index6','index7','index8','index9',
					'indexb','createmore','cartconsumable','cartconsumables','barcode','receive','transfer','createas','update_up','create2','create3','rejected','received','view','update_expiredate','cartconsumablebalance','update_lotup'],
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
     * Lists all Consumables models.
     * @return mixed
     */
public function actionBarcode() 
    { 
       $model=Consumables::find()->where('store'==Yii::$app->user->identity->Type)->all();
       $content=$this->renderPartial('barcode', ['model'=>$model]);
        $pdf=new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_UTF8,
            // A4 paper format
            'format' => [300, 200],//Pdf::FORMAT_A4,
            'marginLeft' => false,
            'marginRight' => false,
            'marginTop' => 1,
            'marginBottom' => false,
            'marginHeader' => false,
            'marginFooter' => false,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@web/css/kv-mpdf-bootstrap.css',
            // any css to be embedded if required
            'cssInline' => 'body{font-size:11px}',
            // set mPDF properties on the fly
            'options' => ['title' => 'Print barcode', ],
            // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=>false,//['Krajee Report Header'],
                'SetFooter'=>false,//['{PAGENO}'],
            ]
        ]);
   return $this->render('barcode',[
            'model' => $model,
            
        ]);
         }
public function actionIndex()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider=$searchModel->search(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('index',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionSame_name($noi,$st_avail=['ini_n','ini'])
    {
         $searchModel=new ConsumablesSearch();
         $dataProvider=$searchModel->search_sname(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
         $dataProvider->pagination->pageSize=10;
         $dataProvider->query->andWhere(['=','LOWER(noi)',strtolower($noi)])->andWhere(['consumables.st_avail'=>in_array($st_avail,['ini_n','ini'])])->andWhere(['NOT', ['consumables.st_avail' => 'Avail']]);
        return $this->render('same_name',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
            'noi'=>$noi, // Pass $noi variable to the view
        ]);
    }
public function actionBalanclon()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider=$searchModel->balanclon(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('balanclon',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionCartconsumablebalance()
    {
        $searchModel=new WithdrowSearch();
        $dataProvider=$searchModel->cartconsumablebalance(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('cartconsumablebalance',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionReceive()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider=$searchModel->searchrec(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('receive', [
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionCreatemore($id)
         {
        $orders=$this->findModel($id);
        $model=new Consumables();
    if($model->load(Yii::$app->request->post())){
        $model->noi=$orders->noi;
        if($model->save()){
            return $this->redirect(['index', 'id' => $model->id]);
        }}
        return $this->render('createmore',[
            'model'=>$model,'id'=>$id,
        ]);
    }
public function actionIndex1($id)
         {
        $searchModel = new ConsumablesSearch();
        $dataProvider = $searchModel->search2(Yii::$app->request->queryParams,$id);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('index1', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndex2()
    {
        $searchModel = new WithdrowSearch();
        $dataProvider = $searchModel->searchwt(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndex3()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider=$searchModel->search3(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('index3',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionIndex4()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider=$searchModel->search4(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('index4',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionIndex5()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider=$searchModel->search5(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('index5',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionIndex6()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('index6',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionIndex7()
    {
        $searchModel = new ConsumablesSearch();
        $dataProvider = $searchModel->search7(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=30;
        return $this->render('index7', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndex8()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider=$searchModel->search8(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=40;
        return $this->render('index8',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionIndex9()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider=$searchModel->search9(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['id'=>SORT_ASC];
        $dataProvider->pagination->pageSize=30;
        return $this->render('index9',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionIndexb()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider=$searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['noi'=>SORT_DESC];
        $dataProvider->pagination->pageSize=30;
        return $this->render('indexb',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionExpaire()
    {
        $searchModel=new ConsumablesSearch();
        $dataProvider=$searchModel->search1(Yii::$app->request->queryParams);
         $dataProvider->sort->defaultOrder=['expairedate'=>SORT_DESC];
        $dataProvider->pagination->pageSize=20;
      return $this->render('expaire',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionCartconsumable()
   {
    $searchModel=new ConsumablesSearch();
    $searchModelOld=new WithdrowSearch();
    $searchModelNew=new StockSearch();
    $dataProvider=$searchModel->searchok(Yii::$app->request->queryParams);
    $dataProviderOld=$searchModelOld->search(Yii::$app->request->queryParams);
    $dataProviderNew=$searchModelNew->searchh(Yii::$app->request->queryParams);
    $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
    $dataProviderOld->sort->defaultOrder=['id'=>SORT_DESC];
    $dataProviderNew->sort->defaultOrder=['id'=>SORT_DESC];
    $dataProvider->pagination->pageSize=10;
    $dataProviderOld->pagination->pageSize=20;
    $dataProviderNew->pagination->pageSize=20;
    return $this->render('cartconsumable',[
        'searchModelOld'=>$searchModelOld,
        'searchModel'=>$searchModel,
        'searchModelNew'=>$searchModelNew,
        'dataProvider'=>$dataProvider,
        'dataProviderOld'=>$dataProviderOld,
        'dataProviderNew'=>$dataProviderNew,
    ]);
  }
  //for acrt
public function actionCartconsumables()
   {
    $searchModel = new ConsumablesSearch();
    $searchModelOld = new WithdrowSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $dataProviderOld = $searchModelOld->searchsbs(Yii::$app->request->queryParams);
    $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
    $dataProvider->pagination->pageSize=20;
    return $this->render('cartconsumables', [
        'searchModelOld' => $searchModelOld,
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
        'dataProviderOld' => $dataProviderOld,
    ]);
  }
  /**
     * Displays a single Consumables model.
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
    /**
     * Creates a new Consumables model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
	 //action report
public function actionReport()
    {
        $report=new \app\reports\MyReport;
        $report->run();
        return $this->render('report',array(
            "report"=>$report
        ));
    }
    public function actionCreate()
         {
        $model=new Consumables();
           // $item =new Itemc();
        //$model->fk_forcata=$id;
        //$model->fk_consumable=$id;
                $model->department="Admin";
    if($model->load(Yii::$app->request->post())){
       if($model->save()){
            //$item->save();
         \Yii::$app->session->setFlash('success', 'Consumables Equipment  informations  Saved Successfully' );
            return $this->redirect(['view', 'id' => $model->id]);
           }}
        return $this->render('create', [
            'model' => $model,
        ]);
    }
   public function actionCreate1($id,$consbarcode){
        $model =Consumables::find()->where(['id'=>$id])->one();
        $model->consbarcode=$consbarcode;
        $model->forserial=1;
   if($model->load(Yii::$app->request->post())){
        }
    if($model->save()) {
                \Yii::$app->session->setFlash('success', 'Barcode scanned' );
        return $this->redirect(['index', 'id' => $model->id]);
      }
   return $this->redirect(['index', 'id' => $model->id]);
  }
  //Transfer consumables
public function actionCreate2($id,$personnelid,$wot,$quantity,$dt,$office,$consbarcode)
         {
    $model =Consumables::find()->where(['id'=>$id])->one();
    $modell=Personnel::find()->where(['personnel.personnelid'=>$personnelid])->one();
        $addp=new Consumables();
        $addw=new Withdrow();
        $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->stockname=$model->noi;
        $log->quantity=$quantity;
        $log->action="Transfer";  
        $log->dateentered=date('Y-m-d-H:i'); 
       $log->personnelid=Yii::$app->user->identity->personnelid;
       $log->pid=$id;
//Copying data
        $addw->monthlyreport=date('m'); 
        $addw->yearlyreport=date('Y');     
        $addw->noi=$model->noi;
        $addw->packsize=$model->packsize;
        $addw->consbarcode=$consbarcode;
        $addw->unit=$model->unit;
        $addw->lot=$model->lot;
		$addw->wot=$wot;
        $addw->quantity=$quantity;
        $addw->dp=$model->dp;
        $addw->expairedate=$model->expairedate;
        $addw->shelflife=$model->shelflife;
        $addw->location=$model->location;
        $addw->shelfname=$model->shelfname;
        $addw->shelfno=$model->shelfno;
        $addw->pc=$model->pc;
        $addw->dr=$model->dr;
        $addw->am=$model->am;
        $addw->consbarcode=$model->consbarcode;
        $addw->vendorid=$model->vendorid;
        $addw->department=$model->department;
        $addw->birrformat=$model->birrformat;
        $addw->cost=$model->cost;
        $addw->totalcost=$model->cost*$quantity;
        $addw->purchasefrom=$model->purchasefrom;
        $addw->remark=$model->remark;
        $addw->firstname=$modell->firstname;
        $addw->lastname=$modell->lastname;
        $addw->dep=Yii::$app->user->identity->Type;//"Admin";
        $addw->dt=$dt;
        $addw->fka=$id;
        $addw->stat="Transfered";
        $addw->store=Yii::$app->user->identity->Type;
        $addw->personnelid=$personnelid;
        $addw->office=$office;
        $addw->username=Yii::$app->user->identity->fname;
//Copying data
        $addp->monthlyreport=date('m'); 
        $addp->yearlyreport=date('Y');    
        $addp->noi=$model->noi;
        $addp->packsize=$model->packsize;
        $addp->consbarcode=$consbarcode;
        $addp->unit=$model->unit;
        $addp->lot=$model->lot;
		$addp->wot=$wot;
        $addp->qty=$quantity;
        $addp->totalcost=$model->cost*$quantity;
        $addp->dp=$model->dp;
        $addp->vendorid=$model->vendorid;
        $addp->expairedate=$model->expairedate;
        $addp->pc=$model->pc;
        $addp->shelflife=$model->shelflife;
        $addp->location=$model->location;
        $addp->shelfname=$model->shelfname;
        $addp->shelfno=$model->shelfno;
        $addp->dr=$model->dr;
        $addp->am=$model->am;
        $addp->consbarcode=$model->consbarcode;
        $addp->department=$model->department;
        $addp->birrformat=$model->birrformat;
        $addp->cost=$model->cost;
        $addp->purchasefrom=$model->purchasefrom;
        $addp->remark=$model->remark;
        $addp->firstname=$model->firstname;
        $addp->lastname=$modell->lastname;
        $addp->dt=$dt;
        $addp->dep=Yii::$app->user->identity->Type;
        $addp->store=$office;
        $addp->personnelid=$personnelid;
        $addp->office=$office;
        $addp->received=21;
        $addp->idm=$id;
        $addp->username=Yii::$app->user->identity->fname;
        $model->quantity=$model->quantity-$quantity;
        $model->totalcost=$model->totalcost-$model->cost*$quantity;
        $off="all are transfered";
if($addp->office=="Microlab"&&Yii::$app->user->identity->Type!="Microlab"){
        $addp->rep=0;
        }
if($addp->office=="Pathology"&&Yii::$app->user->identity->Type!="Pathology"){
        $addp->rep=1;
        }
if($addp->office=="IT"&&Yii::$app->user->identity->Type!="IT"){
  $addp->rep=2;
        }
if($addp->office=="SBS"&&Yii::$app->user->identity->Type!="SBS"){
      $addp->rep=3;
        }
if($addp->office=="Clinical"&&Yii::$app->user->identity->Type!="Clinical"){
     $addp->rep=4;
        }
if($addp->office=="KHDSS"&&Yii::$app->user->identity->Type!="KHDSS"){
    $addp->rep=5;
        }
if($addp->office=="Admin"&&Yii::$app->user->identity->Type!="Admin"){
     $addp->rep=6;
        }
if($addp->office=="PSU"&&Yii::$app->user->identity->Type!="PSU"){
     $addp->rep=7;
        }
$qtsum=Consumables::find()->where(['idm'=>$id,'store'=>$office])->one();
if($model->load(Yii::$app->request->post())){
        }
if($addp->office=="Clinical"&&$model->quantity>=0){
   //if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $addw->save();
              $log->save();
              $addp->save();
        $sq="UPDATE  consumables SET stat=0,store='$off',received=21 WHERE id=$id";
        $query=Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->noi==$model->noi){
    $amou=$qtsum->qty+$quantity;
    $addw->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE consumables SET stat=0,quantity='$model->quantity' WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE  consumables SET store='$off',stat=0,quantity='$model->quantity',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }  
    }}
else{  
          $addw->save();
          $log->save();
          $addp->save();
    $command="UPDATE consumables SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
            }}
        //}
//MIROLAB SECTION
if($addp->office=="Microlab"&&$model->quantity>=0){
  // if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $addw->save();
              $log->save();
              $addp->save();
$sq="UPDATE  consumables SET stat=0,store='$off',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->noi==$model->noi){
    $amou=$qtsum->qty+$quantity;
    $addw->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE consumables SET stat=0,quantity='$model->quantity' WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }
     if($model->quantity==0){
          $addw->save();
          $log->save();
          $addp->save();
    $sq="UPDATE  consumables SET store='$off',stat=0,quantity='$model->quantity',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }  
    }}
else{  
          $addw->save();
          $log->save();
          $addp->save();
 $command="UPDATE consumables SET quantity='$model->quantity' where id='$id'";
Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
                  }}//}
//KHDSS Section
if($addp->office=="KHDSS"&&$model->quantity>=0){
  // if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $addw->save();
              $log->save();
              $addp->save();
$sq="UPDATE  consumables SET stat=0,store='$off',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->noi==$model->noi){
    $amou=$qtsum->qty+$quantity;
    $addw->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE consumables SET stat=0,quantity='$model->quantity' WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }
     if($model->quantity==0){
          $addw->save();
          $log->save();
          $addp->save();
    $sq="UPDATE  consumables SET store='$off',stat=0,quantity='$model->quantity',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }  
    }}
else{  
          $addw->save();
          $log->save();
          $addp->save();
 $command="UPDATE consumables SET quantity='$model->quantity' where id='$id'";
Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
                  }}//}
//Pathology Section
if($addp->office=="Pathology"&&$model->quantity>=0){
    //if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $addw->save();
              $addp->save();
              $log->save();
$sq="UPDATE  consumables SET stat=0,store='$off',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $addp->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->noi==$model->noi){
    $amou=$qtsum->qty+$quantity;
    $addw->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE consumables SET stat=0,quantity='$model->quantity' WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }
if($model->quantity==0){
$sq="UPDATE  consumables SET store='$off',stat=0,quantity='$model->quantity',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }  
    }}
else{  
          $addw->save();
          $log->save();
          $addp->save();
$command="UPDATE consumables SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
                  }}//}
//PREGNANCY Section
if($addp->office=="PSU"&&$model->quantity>=0){
    //if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $addw->save();
              $addp->save();
              $log->save();
$sq="UPDATE  consumables SET stat=0,store='$off',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $addp->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->noi==$model->noi){
    $amou=$qtsum->qty+$quantity;
    $addw->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE consumables SET stat=0,quantity='$model->quantity' WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE  consumables SET store='$off',stat=0,quantity='$model->quantity',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }  
    }}
else{  
          $addw->save();
          $log->save();
          $addp->save();
$command="UPDATE consumables SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
                  }}//}
//IT Section
if($addp->office=="IT"&&$model->quantity>=0){
   //if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $addw->save();
              $addp->save();
              $log->save();
$sq="UPDATE  consumables SET stat=0,store='$off',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->noi==$model->noi){
    $amou=$qtsum->qty+$quantity;
    $addw->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE consumables SET stat=0,quantity='$model->quantity' WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE  consumables SET store='$off',stat=0,quantity='$model->quantity',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }  
    }}
else{  
      $addw->save();
      $log->save();
      $addp->save();
 $command="UPDATE consumables SET quantity='$model->quantity' where id='$id'";
Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
                  }}//}
if($addp->office=="SBS"&&$model->quantity>=0){
     //if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $addw->save();
              $addp->save();
              $log->save();
$sq="UPDATE  consumables SET stat=0,store='$off',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $addp->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->noi==$model->noi){
    $amou=$qtsum->qty+$quantity;
    $addw->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE consumables SET stat=0,quantity='$model->quantity' WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE consumables SET store='$off',stat=0,quantity='$model->quantity',received=21 WHERE id=$id";
        $query=Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }  
    }}
else{  
          $addw->save();
          $log->save();
          $addp->save();
$command="UPDATE consumables SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
                  }}//}
//if condtion to transfer to CHAMPS or Admin
if($addp->office=="Admin"&&$model->quantity>=0){
  // if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $addw->save();
              $log->save();
              $addp->save();
$sq="UPDATE  consumables SET stat=0,store='$off',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->noi==$model->noi){
    $amou=$qtsum->qty+$quantity;
    $addw->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE consumables SET stat=0,quantity='$model->quantity' WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }
     if($model->quantity==0){
          $addw->save();
          $log->save();
          $addp->save();
    $sq="UPDATE  consumables SET store='$off',stat=0,quantity='$model->quantity',received=21 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE consumables SET received=21,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
         }  
    }}
else{  
          $addw->save();
          $log->save();
          $addp->save();
 $command="UPDATE consumables SET quantity='$model->quantity' where id='$id'";
Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
                  }}//}
 \Yii::$app->session->setFlash('error','Not done try again');
            return $this->redirect(['consumables/cartconsumable', 'id' => $model->id]);
  }
public function actionCreate3($id)
         {
        $add=new Consumables();
        $model =Cart::find()->where(['id'=>$id])->one();
        $add->noi=$model->noi;
        $add->quantity=$model->quantity;
        $add->dr=$model->dr;
        $add->am=$model->am;
        $add->dp=$model->dp;
        $add->expairedate=$model->expairedate;
        $add->shelflife=$model->shelflife;
        $add->department=$model->department;
        $add->remark=$model->remark;
   if($model->load(Yii::$app->request->post())){
        }
    if($add->save()) {
                $this->findModel($model->id)->delete();
            return $this->redirect(['cartconsumable', 'id' => $add->id]);
           }
        return $this->render('create2', [
            'model' => $add,
        ]);
    }
public function actionUndo($id)
          {
        $model=Withdrow::find()->where(['id'=>$id])->one();
        $add=new Consumables();
        $reback=Consumables::find()->where(['id'=>$model->fka])->one();
    //Copying the data
        $add->noi=$model->noi;
        $add->packsize=$model->packsize;
        $add->unit=$model->unit;
        $add->lot=$model->lot;
        $add->dp=$model->dp;
        $add->expairedate=$model->expairedate;
        $add->shelflife=$model->shelflife;
        $add->location=$model->location;
        $add->shelfname=$model->shelfname;
        $add->shelfno=$model->shelfno;
        $add->dr=$model->dr;
        $add->am=$model->am;
        $add->department=$model->department;
        $add->birrformat=$model->birrformat;
        $add->cost=$model->cost;
        $add->purchasefrom=$model->purchasefrom;
        $add->remark=$model->remark;
        $add->quantity=$model->quantity;
        $add->store=$model->dep;
        $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->stockname=$model->noi;
        $log->quantity=$model->quantity;
        $log->action="Return";  
        $log->dateentered=date('Y-m-d-H:i'); 
        $log->personnelid=Yii::$app->user->identity->personnelid;
        $stat=1;
///if($reback==false){
    $add->save();
    $log->save();
$sq="UPDATE withdrow SET stat='$stat' WHERE id=$id";
        $query=Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumables/cartconsumable', 'id' => $add->id]);
            }
    public function actionReceived($id,$descfr,$consbarcode)
    {
    $model=Consumables::find()->where(['id'=>$id])->one();
     $model->received=1;
     $model->consbarcode=$consbarcode;
     $model->descfr=$descfr;
     $model->quantity=$model->quantity+$model->qty;
     $model->qty=0;
        $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->stockname=$model->noi;
        $log->action="Receive";  
        $log->dateentered=date('Y-m-d-H:i');  
        $log->pid=$id;
        $log->quantity=$model->quantity+$model->qty;
        $log->save();
             $model->save();
            \Yii::$app->session->setFlash('Success', ' You received the items you request' );
            return $this->redirect(['receive', 'id' => $model->id]);
                }

    public function actionRejected($id,$descfr)
    {
    $model=Consumables::find()->where(['id'=>$id])->one();
     $model->received=2;
     $model->descfr=$descfr;
     $model->store="Admin";
        $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->stockname=$model->noi;
        $log->action="Reject";  
        $log->dateentered=date('Y-m-d-H:i');  
        $log->pid=$id;
        $log->save();
    $command="UPDATE consumables SET store='$model->store',received='$model->received',descfr='$model->descfr',rep=10 where id='$id'";
     Yii::$app->db->createCommand($command)->execute();
        /*  //$model->save();
    $body="Your order already aproved:"." ".$model->noi.","."Amount:-"." ".$model->quantity.", "."Description:"." ".$model->remark;
          //$email=$model->email;
        $fullname=Yii::$app->user->identity->fname."  ".Yii::$app->user->identity->mname;
              $subject="I am"." ".$fullname;
                  $emails=Yii::$app->user->identity->email;
     if(Yii::$app->user->identity->Type=="Admin"){
      $ademail="aalemayehu@hararghe.org";
       mail($ademail,$subject,$body,$email);
             }*/
            // $model->save();
            \Yii::$app->session->setFlash('Success', ' You reject the items you request' );
            return $this->redirect(['consumables/receive', 'id' => $id]);
                }
    /**
     * Updates an existing Consumables model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())){
              $model->totalcost=$model->cost*$model->quantity;

    if($model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }}

        return $this->render('update', [
            'model' => $model,
        ]);
    }
	//Edit LOT number_format
 public function actionUpdate_lotup($id)
    {
        $model=$this->findModel($id);
        if ($model->load(Yii::$app->request->post())&&$model->save()){
                  \Yii::$app->session->setFlash('success','Successfully lot number changed');
            return $this->redirect(['indexb','id'=>$model->id]);
        }
    return $this->redirect(['indexb','id'=>$model->id]);
    }
public function actionUpdate_up($id)
    {
    $model=$this->findModel($id);
    $qtold=$model->quantity;
    if($model->load(Yii::$app->request->post())) {
        $m=Consumables::find()->where(['st_avail'=>'Avail'])->andWhere(new Expression('LOWER(noi)=LOWER(:noi)',[':noi'=>$model->noi]))->one();
        if($m&&$m->st_avail=="Avail"){
        $model->getSum($model,$qtold,$m);
        }
       if($model->st_avail=="ini"){
        $model->save();
        \Yii::$app->session->setFlash('success','Successfully updated the quantity');
       }
      }
    return $this->redirect(['indexb','id'=>$model->id]);
}
//EDIT EXPIREDATE FROM GRIDView
public function actionUpdate_expiredate($id)
       {
        $model=$this->findModel($id);
        $qtold=$model->quantity;
    if($model->load(Yii::$app->request->post())) {
        $m=Consumables::find()->where(['st_avail'=>'Avail'])->andWhere(new Expression('LOWER(noi)=LOWER(:noi)',[':noi'=>$model->noi]))->one();
        if($m&&$m->st_avail=="Avail"){
        $model->getRedExp($model,$qtold,$m);
         }
       if($model->st_avail=="ini"){
         $model->getRedExp($model,$qtold,$m);
        //$model->save();
        //\Yii::$app->session->setFlash('success', '<div class="alert alert-success rounded"><span class="mr-2">&#10003;</span>Successfully updated the Expire Date</div>');
       }
      }
      return $this->redirect(['indexb','id'=>$model->id]);
   }
   //update lot number 
public function actionUpdate_uplot($id)
       {
        $model=$this->findModel($id);
        if($model->load(Yii::$app->request->post())&&$model->save()) {
        \Yii::$app->session->setFlash('success','<div class="alert alert-success rounded"><span class="mr-2">&#10003;</span>Successfully updated the lot number</div>');
            return $this->redirect(['indexb','id'=>$model->id]);
        }
    return $this->redirect(['index','id'=>$model->id]);
    }
//tresh hold
public function actionUpdate_tshold($id)
{
    $model=Tbltrashhold::find()->where(['id' => $id])->one();
    if(!$model){
        throw new NotFoundHttpException('The requested page does not exist.');
    }
    if($model->load(Yii::$app->request->post()) && $model->save()) {
        \Yii::$app->session->setFlash('success', '<div class="alert alert-success rounded"><span class="mr-2">&#10003;</span>Successfully updated the min balance</div>');
        return $this->redirect(['indexb', 'id' => $model->id]);
    }
    \Yii::$app->session->setFlash('error', '<div class="alert alert-success rounded"><span class="mr-2">&#10003;</span>Fail updating min minblance</div>');
    return $this->redirect(['indexb', 'id' => $model->id]);
}
public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }
protected function findModel($id)
    {
        if(($model=Consumables::findOne($id))!==null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
public function actionSetminbalance($id,$noi,$quantity)
    {
        $cons=Consumables::find()->where(['id'=>$id])->one();
        if($cons===null){
            \Yii::$app->session->setFlash('error','Invalid consumable stock.');
            return $this->redirect(['indexb']);
        }else{
        $existingModel=Tbltrashhold::findOne(['st_name'=>$noi]);
        }
        if($existingModel!==null){
            \Yii::$app->session->setFlash('error','The balance with the same NOI already exists.');
            return $this->redirect(['indexb']);
        }
        $model=new Tbltrashhold();
        $model->st_name=$cons->noi;
        $model->q_blance=$quantity;
        $model->fk_cons=$cons->id;
        $model->status=1;
        $logs=new Logtable();
        $logs->fullname=Yii::$app->user->identity->fname." ".Yii::$app->user->identity->mname." ".Yii::$app->user->identity->lname;
        $logs->action="Set minimum amount";
        $logs->dateentered=date("Y-m-d H:i:s");
        if($model->save(false)){
            $logs->save();
            \Yii::$app->session->setFlash('success','You have successfully set the balance for '.$model->st_name);
            return $this->redirect(['consumables/indexb','id'=>$model->id]);
           }
        \Yii::$app->session->setFlash('error','Setting min balance failed');
        return $this->redirect(['indexb','id'=>$model->id]);
    }
  }
