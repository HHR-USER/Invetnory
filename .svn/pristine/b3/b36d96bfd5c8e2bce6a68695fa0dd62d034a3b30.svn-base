<?php

namespace app\controllers;

use Yii;
use app\models\Consumablessbs;
use app\models\ConsumablessbsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Consumables;
use app\models\ConsumablesSearch;
use app\models\WithdrowSearch;
use app\models\Personnel;
use app\models\Withdrow;
use app\models\Consumablesmicro;
use app\models\Consumablespathology;
use app\models\Consumablesuser;
use app\models\Consumablesclinical;
use app\models\Consumablesit;
use app\models\Logtable;
/**
 * ConsumablessbsController implements the CRUD actions for Consumablessbs model.
 */
class ConsumablessbsController extends Controller
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
     * Lists all Consumablessbs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ConsumablessbsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndex1()
    {
        $searchModel = new ConsumablessbsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index1', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Consumablessbs model.
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
public function actionCartconsumables()
   {
    $searchModel = new ConsumablessbsSearch();
    $searchModelOld = new WithdrowSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $dataProviderOld = $searchModelOld->searchsbs(Yii::$app->request->queryParams);
 $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
$dataProvider->pagination->pageSize=1000;
    return $this->render('cartconsumables', [
        'searchModelOld' => $searchModelOld,
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
        'dataProviderOld' => $dataProviderOld,
    ]);
  }
    /**
     * Creates a new Consumablessbs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Consumablessbs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

public function actionCreate2($id,$personnelid,$quantity,$dt,$office)
         {
    $model =Consumablessbs::find()->where(['id'=>$id])->one();
    $modell =Personnel::find()->where(['personnel.personnelid'=>$personnelid])->one();
        $addp=new Consumablespathology();
        $addc=new Consumablesclinical();
        $addm=new Consumablesmicro();
        $addu=new Consumablesuser();
        $addi=new Consumablesit();
        $adds=new Consumables();
        $addw=new Withdrow();
        $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->stockname=$model->noi;
        $log->action="Transfer";
        $log->dateentered=date('Y-m-d');
        $log->quantity=$model->quantity;
    //Copying data
        $addw->monthlyreport=date('m');
        $addw->yearlyreport=date('Y'); 
        $addw->noi=$model->noi;
        $addw->packsize=$model->packsize;
        $addw->unit=$model->unit;
        $addw->lot=$model->lot;
        $addw->quantity=$quantity;
        $addw->dp=$model->dp;
        $addw->expairedate=$model->expairedate;
        $addw->shelflife=$model->shelflife;
        $addw->location=$model->location;
        $addw->shelfname=$model->shelfname;
        $addw->shelfno=$model->shelfno;
        $addw->dr=$model->dr;
        $addw->am=$model->am;
        $addw->vendorid=$model->vendorid;
        $addw->department=$model->department;
        $addw->birrformat=$model->birrformat;
        $addw->cost=$model->cost;
        $addw->totalcost=$model->cost*$quantity;
        $addw->purchasefrom=$model->purchasefrom;
        $addw->remark=$model->remark;
        $addw->firstname=$modell->firstname;
        $addw->lastname=$modell->lastname;
        $addw->dep="SBS";
        $addw->fks=$id;
        $addw->dt=$dt;
        $addw->personnelid=$personnelid;
        $addw->office=$office;
        $addw->username=Yii::$app->user->identity->fname;
//copying data
        $addu->monthlyreport=date('m'); 
        $addu->yearlyreport=date('Y'); 
        $addu->noi=$model->noi;
        $addu->packsize=$model->packsize;
        $addu->unit=$model->unit;
        $addu->lot=$model->lot;
        $addu->quantity=$quantity;
        $addu->dp=$model->dp;
        $addu->expairedate=$model->expairedate;
        $addu->shelflife=$model->shelflife;
        $addu->location=$model->location;
        $addu->shelfname=$model->shelfname;
        $addu->shelfno=$model->shelfno;
        $addu->quantity=$quantity;
        $addu->dr=$model->dr;
        $addu->am=$model->am;
        $addu->vendorid=$model->vendorid;
        $addu->department=$model->department;
        $addu->birrformat=$model->birrformat;
        $addu->cost=$model->cost;
        $addu->totalcost=$model->cost*$quantity;
        $addu->purchasefrom=$model->purchasefrom;
        $addu->remark=$model->remark;
        $addu->firstname=$modell->firstname;
        $addu->lastname=$modell->lastname;
        $addu->dt=$dt;
        $addu->personnelid=$personnelid;
        $addu->office=$office;
        $addu->dep="SBS";
        $addu->username=Yii::$app->user->identity->fname;
//copy to pathology
        $addp->monthlyreport=date('m'); 
        $addp->yearlyreport=date('Y'); 
        $addp->noi=$model->noi;
        $addp->packsize=$model->packsize;
        $addp->unit=$model->unit;
        $addp->lot=$model->lot;
        $addp->quantity=$quantity;
        $addp->totalcost=$model->cost*$quantity;
        $addp->dp=$model->dp;
        $addp->vendorid=$model->vendorid;
        $addp->expairedate=$model->expairedate;
        $addp->shelflife=$model->shelflife;
        $addp->location=$model->location;
        $addp->shelfname=$model->shelfname;
        $addp->shelfno=$model->shelfno;
        $addp->dr=$model->dr;
        $addp->am=$model->am;
        $addp->department=$model->department;
        $addp->birrformat=$model->birrformat;
        $addp->cost=$model->cost;
        $addp->purchasefrom=$model->purchasefrom;
        $addp->remark=$model->remark;
        $addp->firstname=$model->firstname;
        $addp->lastname=$modell->lastname;
        $addp->dep="SBS";
        $addp->dt=$dt;
        $addp->personnelid=$personnelid;
        $addp->office=$office;
        $addp->username=Yii::$app->user->identity->fname;
//Copying data 
        $addc->monthlyreport=date('m'); 
        $addc->yearlyreport=date('Y'); 
        $addc->noi=$model->noi;
        $addc->packsize=$model->packsize;
        $addc->unit=$model->unit;
        $addc->lot=$model->lot;
        $addc->quantity=$quantity;
        $addc->dp=$model->dp;
        $addc->vendorid=$model->vendorid;
        $addc->expairedate=$model->expairedate;
        $addc->shelflife=$model->shelflife;
        $addc->location=$model->location;
        $addc->shelfname=$model->shelfname;
        $addc->shelfno=$model->shelfno;
        $addc->dr=$model->dr;
        $addc->am=$model->am;
        $addc->department=$model->department;
        $addc->birrformat=$model->birrformat;
        $addc->cost=$model->cost;
        $addc->totalcost=$model->cost*$quantity;
        $addc->purchasefrom=$model->purchasefrom;
        $addc->remark=$model->remark;
        $addc->firstname=$modell->firstname;
        $addc->lastname=$modell->lastname;
        $addc->dt=$dt;
        $addc->personnelid=$personnelid;
        $addc->office=$office;
        $addc->dep="SBS";
        $addc->username=Yii::$app->user->identity->fname;
        //copying data
        $addm->monthlyreport=date('m'); 
        $addm->yearlyreport=date('Y'); 
        $addm->noi=$model->noi;
        $addm->packsize=$model->packsize;
        $addm->unit=$model->unit;
        $addm->lot=$model->lot;
        $addm->quantity=$quantity;
        $addm->dp=$model->dp;
        $addm->vendorid=$model->vendorid;
        $addm->expairedate=$model->expairedate;
        $addm->shelflife=$model->shelflife;
        $addm->location=$model->location;
        $addm->shelfname=$model->shelfname;
        $addm->shelfno=$model->shelfno;
        $addm->dr=$model->dr;
        $addm->am=$model->am;
        $addm->department=$model->department;
        $addm->birrformat=$model->birrformat;
        $addm->cost=$model->cost;
        $addm->totalcost=$model->cost*$quantity;
        $addm->purchasefrom=$model->purchasefrom;
        $addm->remark=$model->remark;
        $addm->firstname=$modell->firstname;
        $addm->lastname=$modell->lastname;
        $addm->dt=$dt;
        $addm->dep="SBS";
        $addm->personnelid=$personnelid;
        $addm->office=$office;
        $addm->username=Yii::$app->user->identity->fname;
//copy data to  it
        $addp->monthlyreport=date('m'); 
        $addp->yearlyreport=date('Y'); 
        $addp->noi=$model->noi;
        $addp->packsize=$model->packsize;
        $addp->unit=$model->unit;
        $addp->lot=$model->lot;
        $addp->quantity=$quantity;
        $addp->totalcost=$model->cost*$quantity;
        $addp->dp=$model->dp;
        $addp->vendorid=$model->vendorid;
        $addp->expairedate=$model->expairedate;
        $addp->shelflife=$model->shelflife;
        $addp->location=$model->location;
        $addp->shelfname=$model->shelfname;
        $addp->shelfno=$model->shelfno;
        $addp->dr=$model->dr;
        $addp->am=$model->am;
        $addp->department=$model->department;
        $addp->birrformat=$model->birrformat;
        $addp->cost=$model->cost;
        $addp->purchasefrom=$model->purchasefrom;
        $addp->remark=$model->remark;
        $addp->firstname=$model->firstname;
        $addp->lastname=$modell->lastname;
        $addp->dt=$dt;
        $addp->personnelid=$personnelid;
        $addp->office=$office;
        $addp->username=Yii::$app->user->identity->fname;
//copying data 
        $addi->monthlyreport=date('m'); 
        $addi->yearlyreport=date('Y'); 
        $addi->noi=$model->noi;
        $addi->packsize=$model->packsize;
        $addi->unit=$model->unit;
        $addi->lot=$model->lot;
        $addi->quantity=$quantity;
        $addi->dp=$model->dp;
        $addi->vendorid=$model->vendorid;
        $addi->expairedate=$model->expairedate;
        $addi->shelflife=$model->shelflife;
        $addi->location=$model->location;
        $addi->shelfname=$model->shelfname;
        $addi->shelfno=$model->shelfno;
        $addi->dr=$model->dr;
        $addi->am=$model->am;
        $addi->department=$model->department;
        $addi->birrformat=$model->birrformat;
        $addi->cost=$model->cost;
        $addi->totalcost=$model->cost*$quantity;
        $addi->purchasefrom=$model->purchasefrom;
        $addi->remark=$model->remark;
        $addi->firstname=$modell->firstname;
        $addi->lastname=$modell->lastname;
        $addi->dt=$dt;
        $addi->dep="SBS";
        $addi->personnelid=$personnelid;
        $addi->office=$office;
        $addi->username=Yii::$app->user->identity->fname;
 //copying data
        $adds->monthlyreport=date('m'); 
        $adds->yearlyreport=date('Y'); 
        $adds->noi=$model->noi;
        $adds->packsize=$model->packsize;
        $adds->unit=$model->unit;
        $adds->lot=$model->lot;
        $adds->quantity=$quantity;
        $adds->dp=$model->dp;
        $adds->vendorid=$model->vendorid;
        $adds->expairedate=$model->expairedate;
        $adds->shelflife=$model->shelflife;
        $adds->location=$model->location;
        $adds->shelfname=$model->shelfname;
        $adds->shelfno=$model->shelfno;
        $adds->dr=$model->dr;
        $adds->am=$model->am;
        $adds->department=$model->department;
        $adds->birrformat=$model->birrformat;
        $adds->cost=$model->cost;
        $adds->totalcost=$model->cost*$quantity;
        $adds->purchasefrom=$model->purchasefrom;
        $adds->remark=$model->remark;
        $adds->firstname=$modell->firstname;
        $adds->lastname=$modell->lastname;
        $adds->dt=$dt;
        $adds->dep="SBS";
        $adds->personnelid=$personnelid;
        $adds->office=$office;
        $adds->username=Yii::$app->user->identity->fname;
        $model->quantity=$model->quantity-$quantity;
        $model->totalcost=$model->totalcost-$model->cost*$quantity;
        //$dup=Withdrow::find()->where(['fk'=>$id])->one(); 
if($model->load(Yii::$app->request->post())){
        }
if($addc->office=="Clinical"&&$model->quantity>=0){
   if($addc->save()) {
if($model->quantity==0){
              $addw->save();
              $log->save();
        $sq="DELETE FROM consumablessbs WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
             }
else{  
    $command="UPDATE consumablessbs SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
          $addw->save();
          $log->save();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
            }}
        }
        
if($addm->office=="Microlab"&&$model->quantity>=0){
   if($addm->save()) {
if($model->quantity==0){
              $addw->save();
              $log->save();
        $sq="DELETE FROM consumablesbs WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
             }
else{  
 $command="UPDATE consumablessbs SET quantity='$model->quantity' where id='$id'";
Yii::$app->db->createCommand($command)->execute();
          $addw->save();
          $log->save();
       \Yii::$app->session->setFlash('success','Success');
            return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
                  }}}
        
if($addp->office=="Pathology"&&$model->quantity>=0){
    if($addp->save()) {
if($model->quantity==0){
              $addw->save();
              $log->save();
        $sq="DELETE FROM consumablessbs WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumablessbs/cartconsumables', 'id' => $addp->id]);
             }
else{  
$command="UPDATE consumablessbs SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
          $addw->save();
          $log->save();
       \Yii::$app->session->setFlash('success','Success');
return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
                  }}}
if($addi->office=="IT"&&$model->quantity>=0){
   if($addi->save()) {
if($model->quantity==0){
              $addw->save();
              $log->save();
        $sq="DELETE FROM consumablessbs WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
             }
else{  
 $command="UPDATE consumablessbs SET quantity='$model->quantity' where id='$id'";
Yii::$app->db->createCommand($command)->execute();
          $addw->save();
          $log->save();
       \Yii::$app->session->setFlash('success','Success');
            return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
                  }}}
        
if($adds->office=="Admin"&&$model->quantity>=0){
if($adds->save()) {
if($model->quantity==0){
              $addw->save();
              $log->save();
        $sq="DELETE FROM consumablessbs WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
             }
else{  
$command="UPDATE consumablessbs SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
          $addw->save();
          $log->save();
       \Yii::$app->session->setFlash('success','Success');
return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
                  }}}
if($addu->office=="SBS"&&$model->quantity>=0){
    if($addu->save()) {
if($model->quantity==0){
              $addw->save();
              $log->save();
        $sq="DELETE FROM consumablessbs WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
            return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
         }
  else{  
         $command="UPDATE consumablessbs SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
          $addw->save();
          $log->save();
       \Yii::$app->session->setFlash('success','Success');
            return $this->redirect(['consumablessbs/cartconsumables', 'id' => $model->id]);
                  }}}
 \Yii::$app->session->setFlash('error','Not den try again');
            return $this->redirect(['consumablessbs/cartconsumablesbs', 'id' => $model->id]);
  }
public function actionUndo($id)
          {
        $model=Withdrow::find()->where(['id'=>$id])->one();
        $add=new Consumablessbs();
        $reback=Consumablessbs::find()->where(['id'=>$model->fks])->one();
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
        $log=new Logtable();
        $log->stockname=$model->noi;
        $log->action="Returned";
if($reback==false){
    $add->save();
        $sq="DELETE FROM withdrow WHERE id=$id";
        $query=Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumablessbs/cartconsumables', 'id' => $add->id]);
    }
else{
    $q=$reback->quantity+$model->quantity;
     $cc="UPDATE consumablessbs SET quantity='$q' where id='$model->fks'";
    Yii::$app->db->createCommand($cc)->execute();
        $sq="DELETE FROM withdrow WHERE id=$id";
        $query=Yii::$app->db->createCommand($sq)->execute();
    \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['consumablessbs/cartconsumables', 'id' => $add->id]);
           }
   \Yii::$app->session->setFlash('error','Please try again');
            return $this->redirect(['consumablessbs/cartconsumables', 'id' => $add->id]);
      }
    /**
     * Updates an existing Consumablessbs model.
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
     * Deletes an existing Consumablessbs model.
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
     * Finds the Consumablessbs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Consumablessbs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Consumablessbs::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
