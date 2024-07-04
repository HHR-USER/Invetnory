<?php
namespace app\controllers;
use Yii;
use app\models\Assets;
use app\models\AssetsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Value;
use app\models\CatagorySearch;
use app\models\Cartassets;
use app\models\CartassetsSearch;
use app\models\StockSearch;
use yii\web\UploadedFile;
use app\models\Personnel;
use app\models\Logtable;
use kartik\mpdf\Pdf;
use yii\filters\AccessControl;
/**
 * AssetsController implements the CRUD actions for Assets model.
 */
class AssetsController extends Controller
{
    /**
     * {@inheritdoc}
     */

public function behaviors()
       {
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['create','indexx','update','index','fixed','nfixed','barcode','receive','transfer','createas',
				'cfixed','create2','create3','rejected','received','view','fview','nfixed','list','Update_up'],
                'rules'=>[
                    [
                    'actions'=>['create','indexx','update','index','fixed','nfixed','barcode','receive','transfer','createas','cfixed',
					'create2','create3','rejected','received','view','fview','nfixed','list','Update_up'],
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
     * Lists all Assets models.
     * @return mixed
     */
  public function actionBarcode() 
{ 
$model =Assets::find()->where(['assets.store'=>Yii::$app->user->identity->Type])->all();
       $content = $this->renderPartial('barcode', [
            'model' => $model
        ]);

$pdf = new Pdf([
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
            'model'=>$model,
        ]);
         }
public function actionFixed()
    {
        $searchModel=new AssetsSearch();
        $dataProvider=$searchModel->searchfixed(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=40;
        return $this->render('fixed', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionNfixed()
    {
        $searchModel=new AssetsSearch();
        $dataProvider=$searchModel->searchnfixed(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=10;
        return $this->render('nfixed', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndex()
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    //z-index for lost
public function actionLostindex()
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->searchlostindex(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;
        return $this->render('lostindex',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
    //action lost
public function actionLost($id){
      $model=Assets::find()->where(['id'=>$id])->one();
      $model->fxa="flost";
      if($model->save()){
       \Yii::$app->session->setFlash('success','Action success');
      return $this->redirect(['lostindex','id'=>$model->id]);
     }
      \Yii::$app->session->setFlash('error','Action Failled');
      return $this->redirect(['fixed','id'=>$model->id]);
     }
public function actionList()
    {
        $searchModel=new AssetsSearch();
        $dataProvider=$searchModel->search_list(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;
        $st_avail=['Avail','ini',''];
        $dataProvider->query->andWhere(['assets.st_avail'=>in_array($st_avail,['Avail','ini',''])])->andWhere(['NOT',['assets.st_avail'=>'ini_n']]);
        return $this->render('list',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionReceive()
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->searchrec(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;
        return $this->render('receive', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    //To display IT stock
  public function actionIndexx()
    {
        $searchModel = new CartassetsSearch();
        $dataProvider = $searchModel->searchxx(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;
        return $this->render('indexx', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    //To display the SBS stock
  public function actionIndexxs()
    {
        $searchModel = new CartassetsSearch();
        $dataProvider = $searchModel->searchxxs(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;

        return $this->render('indexxs', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndex3()
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->search3(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;

        return $this->render('index3', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndex4()
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->search4(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;

        return $this->render('index4', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
  public function actionIndex5()
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->search5(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;

        return $this->render('index5', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndex6()
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->search6(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;

        return $this->render('index6', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
  public function actionIndex7()
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->search7(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;

        return $this->render('index7', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndex8()
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->search8(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;

        return $this->render('index8', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndex9()
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->search9(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        $dataProvider->pagination->pageSize=100;

        return $this->render('index9', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndex1($id)
    {
        $searchModel = new AssetsSearch();
        $dataProvider = $searchModel->search2(Yii::$app->request->queryParams,$id);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       // $dataProvider->pagination->pageSize=10;
        return $this->render('index1', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndex2()
    {
        $searchModel = new CartassetsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
       // $dataProvider->pagination->pageSize=10;
        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionTransfer()
   {
    $searchModel = new AssetsSearch();
    $searchModelOld = new CartassetsSearch();
    $searchModelNew=new StockSearch();
    $dataProvider = $searchModel->searchok(Yii::$app->request->queryParams);
    $dataProviderOld = $searchModelOld->search(Yii::$app->request->queryParams);
    $dataProviderNew=$searchModelNew->search_h(Yii::$app->request->queryParams);
    $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
    $dataProviderOld->sort->defaultOrder=['id'=>SORT_DESC];
    $dataProviderNew->sort->defaultOrder=['id'=>SORT_DESC];
    $dataProvider->pagination->pageSize=10;
    $dataProviderOld->pagination->pageSize=10;
    $dataProviderNew->pagination->pageSize=6;
    $st_avail=['Avail','ini'];
    $dataProvider->query->andWhere(['assets.st_avail'=>in_array($st_avail,['Avail','ini'])])->andWhere(['NOT',['assets.st_avail'=>'ini_n']]);
    return $this->render('transfer',[
        'searchModelOld' => $searchModelOld,
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
        'dataProviderOld' => $dataProviderOld,
        'dataProviderNew'=>$dataProviderNew,
    ]);
  }
    /**
     * Displays a single Assets model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
        'model'=> $this->findModel($id),
        ]);
    }
  public function actionFview($id)
       {
        return $this->render('fview', [
        'model'=>$this->findModel($id),
        ]);
    }
    /**
     * Creates a new Assets model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
  public function actionCreateas(){
            $model=new Assets();
              $model->dep='Admin';
             // $model->TD='Admin';
  if ($model->load(Yii::$app->request->post())) {
      //$model->totalcost=$model->quantity*$model->cost;
          $image = UploadedFile::getInstance($model, 'Picture');
           if (!is_null($image)) {
             $model->Picture = $image->name;
             $ext = end((explode(".", $image->name)));
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/';
              $path = Yii::$app->params['uploadPath'] . $model->Picture;
               $image->saveAs($path);
            }
      if($model->save()) { 
           // if($model->ASSETBARCODE!=NULL){
           //$auto= \app\models\defualtidno::find()->where(['SBS'=>$model->ASSETBARCODE])->one();
          //$auto->active2=1;
      return $this->redirect(['view', 'id' => $model->id]); 
      }            
        else{
                var_dump ($model->getErrors()); die();
             }}
              return $this->render('createas', [
                  'model' => $model,
              ]);     
    }
  public function actionCfixed(){
            $model=new Assets();
            $model->store=$model->LOCATION;
            $model->quantity=1;
           // $model->received=3;
            $asset_code="HHR-";
  if($model->load(Yii::$app->request->post())) {
   $value=Value::find()->where(['id'=>1])->one();
  if($model->facl=="TABLE"){
         $f="01";
     $value->table_l=(new \yii\db\Query())->from('value')->max('table_l');
     $value->table_l=$value->table_l+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->table_l)));
      $back=$digit;
      $val=$value->table_l;
      }
 if($model->facl=="CHAIRS AND BENCHES"){
       $f="02";
     //$value=new Value();
     $value->chair=(new \yii\db\Query())->from('value')->max('chair');
     $value->chair=$value->chair+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->chair)));
      $back=$digit;
      $val=$value->chair;
        }
if($model->facl=="SHELVES"){
     $f="03";
     //$value=new Value();
     $value->shelf=(new \yii\db\Query())->from('value')->max('shelf');
     $value->shelf=$value->shelf+1;
     $value->save();
      $d="00001";
      $digit=substr($d,0,-(strlen($value->shelf)));
      $back=$digit;
      $val=$value->shelf;
        }
if($model->facl=="CUPBOARDS"){
     $f="04";
     //$value=new Value();
     $value->cupb=(new \yii\db\Query())->from('value')->max('cupb');
     $value->cupb=$value->cupb+1;
     $value->save();
     $d="00001";
      $digit=substr($d,0,-(strlen($value->cupb)));
      $back=$digit;
      $val=$value->cupb;
        }
if($model->facl=="FILING CABINETS AND SAFE BOXES"){
    $f="05";
     //$value=new Value();
     $value->fil=(new \yii\db\Query())->from('value')->max('fil');
     $value->fil=$value->fil+1;
     $value->save();
     $d="00001";
      $digit=substr($d,0,-(strlen($value->fil)));
      $back=$digit;
     $val=$value->fil;
       }
if($model->facl=="TV BOXES AND ELECTRICAL APPLLIANCES"){
     $f="06";
     //$value=new Value();
     $value->tvb=(new \yii\db\Query())->from('value')->max('tvb');
     $value->tvb=$value->tvb+1;
     $value->save();
     $d="00001";
      $digit=substr($d,0,-(strlen($value->tvb)));
      $back=$digit;
      $val=$value->tvb;
      }
if($model->facl=="LOCAL RECOVERY BEDS AND MEDICAL TROLLY"){
     $f="07";
     //$value=new Value();
     $value->loca=(new \yii\db\Query())->from('value')->max('loca');
     $value->loca=$value->loca+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->loca)));
     $back=$digit;
     $val=$value->loca;
    }
 if($model->facl=="ADDING MACHINES"){
   $f="08";
     //$value=new Value();
     $value->adding=(new \yii\db\Query())->from('value')->max('adding');
     $value->adding=$value->adding+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->adding)));
     $back=$digit;
     $val=$value->adding;
      }
 if($model->facl=="PHOTOCOPAIERS AND SCANNERS"){
     $f="09";
     //$value=new Value();
     $value->photo=(new \yii\db\Query())->from('value')->max('photo');
     $value->photo=$value->photo+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->photo)));
     $back=$digit;
     $val=$value->photo;
        }
  if($model->facl=="COMPUTERS AND PRINTERS"){
     $f="10";
     //$value=new Value();
     $value->comput=(new \yii\db\Query())->from('value')->max('comput');
     $value->comput=$value->comput+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->comput)));
     $back=$digit;
     $val=$value->comput;
       }
if($model->facl=="UPS"){
     $f="11";
     //$value=new Value();
     $value->ups=(new \yii\db\Query())->from('value')->max('ups');
     $value->ups=$value->ups+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->ups)));
     $back=$digit;
     $val=$value->ups;
       }
if($model->facl=="STABILIZERS"){
     $f="12";
     //$value=new Value();
     $value->stabl=(new \yii\db\Query())->from('value')->max('stabl');
     $value->stabl=$value->stabl+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->stabl)));
     $back=$digit;
     $val=$value->stabl;
      }
if($model->facl=="OVERHEAD PROJECTORS"){
     $f="13";
     //$value=new Value();
     $value->over=(new \yii\db\Query())->from('value')->max('over');
     $value->over=$value->over+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->over)));
     $back=$digit;
     $val=$value->over;
    }
if($model->facl=="TV AND DECK RECORDERS"){
     $f="14";
     //$value=new Value();
     $value->tv=(new \yii\db\Query())->from('value')->max('tv');
     $value->tv=$value->tv+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->tv)));
     $back=$digit;
     $val=$value->tv;
      }
if($model->facl=="PHOTO CAMERRA"){
     $f="15";
     //$value=new Value();
     $value->photocamera=(new \yii\db\Query())->from('value')->max('photocamera');
     $value->photocamera=$value->photocamera+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->photocamera)));
     $back=$digit;
     $val=$value->photocamera;
      }
if($model->facl=="GENERATORS"){
     $f="16";
     //$value=new Value();
     $value->generator=(new \yii\db\Query())->from('value')->max('generator');
     $value->generator=$value->generator+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->generator)));
     $back=$digit;
     $val=$value->generator;
      }
if($model->facl=="LABORATORY EQUIPMENTS"){
     $f="17";
     //$value=new Value();
     $value->labor=(new \yii\db\Query())->from('value')->max('labor');
     $value->labor=$value->labor+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->labor)));
     $back=$digit;
     $val=$value->labor;
     }
if($model->facl=="MEDICAL EQUIPMENTS"){
     $f="18";
     //$value=new Value();
     $value->medic=(new \yii\db\Query())->from('value')->max('medic');
     $value->medic=$value->medic+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->medic)));
     $back=$digit;
     $val=$value->medic;
      }
if($model->facl=="VEHICLES"){
     $f="19";
     //$value=new Value();
     $value->veh=(new \yii\db\Query())->from('value')->max('veh');
     $value->veh=$value->veh+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->veh)));
     $back=$digit;
     $val=$value->veh;
     }
if($model->facl=="MOTORCYCLES"){
     $f="20";
     //$value=new Value();
     $value->motor=(new \yii\db\Query())->from('value')->max('motor');
     $value->motor=$value->motor+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->motor)));
     $back=$digit;
     $val=$value->motor;
     }
if($model->facl=="IT EQUIPMENTS"){
     $f="21";
     //$value=new Value();
     $value->it_eq=(new \yii\db\Query())->from('value')->max('it_eq');
     $value->it_eq=$value->it_eq+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->it_eq)));
     $back=$digit;
     $val=$value->it_eq;
     }
if($model->facl=="CLINICAL EQUIPMENTS"){
     $f="22";
     //$value=new Value();
     $value->cleq=(new \yii\db\Query())->from('value')->max('cleq');
     $value->cleq=$value->cleq+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->cleq)));
     $back=$digit;
     $val=$value->cleq;
     }
if($model->facl=="OFFICE EQUIPMENTS"){
     $f="22";
     //$value=new Value();
     $value->offeq=(new \yii\db\Query())->from('value')->max('offeq');
     $value->offeq=$value->offeq+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->offeq)));
     $back=$digit;
     $val=$value->offeq;
    }
if($model->facl=="PATHOLOGY EQUIPMENTS"){
     $f="23";
     //$value=new Value();
     $value->pathoeq=(new \yii\db\Query())->from('value')->max('pathoeq');
     $value->pathoeq=$value->pathoeq+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->pathoeq)));
     $back=$digit;
     $val=$value->pathoeq;
    }
if($model->save()) { 
if($model->LOCATION=="PROJECT MANAGEMENT AND OPERATIONS UNIT"||$model->LOCATION=="CHAMPS"){
  $h="01";
  }
 if($model->LOCATION=="SBS UNIT"){
  $h="02";
  }
if($model->LOCATION=="COMMUNITY MITS"){
  $h="03";
  }
if($model->LOCATION=="MIS"){
  $h="04";
  }
if($model->LOCATION=="CLINICAL"){
  $h="05";
  }
if($model->LOCATION=="PATHOLOGY LAB UNIT"){
  $h="06";
  }
if($model->LOCATION=="MICROLAB UNIT"){
  $h="07";
  }
if($model->LOCATION=="MICROBIOLOGY LAB UNIT"){
  $h="07";
  }
if($model->LOCATION=="MOLECULAR LAB UNIT"){
  $h="08";
  }
if($model->LOCATION=="PREGNANCY SURVEIILANCE UNIT"||$model->LOCATION=="Pregnancy Surveillance "){
  $h="09";
  }
if($model->LOCATION=="HDSS UNIT"||$model->LOCATION=="KERSA CHAMPS Building"){
  $h="10";
  }
if($model->LOCATION=="SCIENTIFIC UNIT"){
  $h="11";
  }
if($model->LOCATION=="IT"){
  $h="12";
  }
if($model->LOCATION=="PI"){
  $h="13";
  }
if($model->LOCATION=="HHR"){
  $h="14";
  }
if($model->LOCATION=="ARM CHAMPS"){
    $h="15";
  }
if($model->cost>=5000){
$model->fxa='fixed';
  }
if($model->cost<5000){
    $model->fxa='nfixed';
  }
if($model->facl==""){
      \Yii::$app->session->setFlash('error','Fixed Asset Category is empty this field is required');
      return $this->redirect(['nfixed','id'=>$model->id]); 
      }
       $model->asset_code=$asset_code.$h."-".$f."-".$back.$val;
       $model->save();
      \Yii::$app->session->setFlash('Success','Fixed Asset register success');
       return $this->redirect(['fview','id'=>$model->id]); 
      }}  
        return $this->render('cfixed',[
          'model'=>$model,
      ]);}
public function actionFupdate($id){
     $models=$this->findModel($id);
     $model=Assets::find()->where(['id'=>$id])->one();
       $asset_code="HHR-";
  if($model->load(Yii::$app->request->post())) {
    $value=Value::find()->where(['id'=>1])->one();
if($model->facl!=$models->facl){
  if($model->facl=="TABLE"){
         $f="01";
     $value->table_l=(new \yii\db\Query())->from('value')->max('table_l');
     $value->table_l=$value->table_l+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->table_l)));
     $back=$digit;
     //$model->save();
    $val=$value->table_l;
      }
 if($model->facl=="CHAIRS AND BENCHES"){
       $f="02";
     $value->chair=(new \yii\db\Query())->from('value')->max('chair');
     $value->chair=$value->chair+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->chair)));
     $back=$digit;
     //$model->save();
     $val=$value->chair;
        }
if($model->facl=="SHELVES"){
     $f="03";
     $value->shelf=(new \yii\db\Query())->from('value')->max('shelf');
     $value->shelf=$value->shelf+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->shelf)));
     $back=$digit;
     //$model->save();
     $val=$value->shelf;
     }
if($model->facl=="CUPBOARDS"){
     $f="04";
     $value->cupb=(new \yii\db\Query())->from('value')->max('cupb');
     $value->cupb=$value->cupb+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->cupb)));
     $back=$digit;
     //$model->save();
     $val=$value->cupb;
        }
if($model->facl=="FILING CABINETS AND SAFE BOXES"&&$model->facl!=$models->facl){
     $f="05";
     $value->fil=(new \yii\db\Query())->from('value')->max('fil');
     $value->fil=$value->fil+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->fil)));
     $back=$digit;
     //$model->save();
     $val=$value->fil;
       }
if($model->facl=="TV BOXES AND ELECTRICAL APPLLIANCES"){
     $f="06";
     $value->tvb=(new \yii\db\Query())->from('value')->max('tvb');
     $value->tvb=$value->tvb+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->tvb)));
     $back=$digit;
     //$model->save();
     $val=$value->tvb;
      }
if($model->facl=="LOCAL RECOVERY BEDS AND MEDICAL TROLLY"){
     $f="07";
     $value->loca=(new \yii\db\Query())->from('value')->max('loca');
     $value->loca=$value->loca+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->loca)));
     $back=$digit;
     //$model->save();
     $val=$value->loca;
    }
 if($model->facl=="ADDING MACHINES"){
     $f="08";
     $value->adding=(new \yii\db\Query())->from('value')->max('adding');
     $value->adding=$value->adding+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->adding)));
     $back=$digit;
     //$model->save();
     $val=$value->adding;
      }
 if($model->facl=="PHOTOCOPAIERS AND SCANNERS"){
     $f="09";
     $value->photo=(new \yii\db\Query())->from('value')->max('photo');
     $value->photo=$value->photo+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->photo)));
     $back=$digit;
     //$model->save();
     $val=$value->photo;
        }
  if($model->facl=="COMPUTERS AND PRINTERS"){
     $f="10";
     $value->comput=(new \yii\db\Query())->from('value')->max('comput');
     $value->comput=$value->comput+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->comput)));
     $back=$digit;
     //$model->save();
     $val=$value->comput;
       }
if($model->facl=="UPS"){
     $f="11";
     $value->ups=(new \yii\db\Query())->from('value')->max('ups');
     $value->ups=$value->ups+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->ups)));
     $back=$digit;
     //$model->save();
     $val=$value->ups;
   }
if($model->facl=="STABILIZERS"){
     $f="12";
     $value->stabl=(new \yii\db\Query())->from('value')->max('stabl');
     $value->stabl=$value->stabl+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->stabl)));
     $back=$digit;
     //$model->save();
     $val=$value->stabl;
 }
if($model->facl=="OVERHEAD PROJECTORS"){
     $f="13";
     $value->over=(new \yii\db\Query())->from('value')->max('over');
     $value->over=$value->over+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->over)));
     $back=$digit;
     //$model->save();
     $val=$value->over;
    }
if($model->facl=="TV AND DECK RECORDERS"){
     $f="14";
     $value->tv=(new \yii\db\Query())->from('value')->max('tv');
     $value->tv=$value->tv+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->tv)));
     $back=$digit;
     //$model->save();
     $val=$value->tv;
      }
if($model->facl=="PHOTO CAMERRA"){
     $f="15";
     $value->photocamera=(new \yii\db\Query())->from('value')->max('photocamera');
     $value->photocamera=$value->photocamera+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->photocamera)));
     $back=$digit;
     //$model->save();
     $val=$value->photocamera;
      }
if($model->facl=="GENERATORS"){
     $f="16";
     $value->generator=(new \yii\db\Query())->from('value')->max('generator');
     $value->generator=$value->generator+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->generator)));
     $back=$digit;
     //$model->save();
     $val=$value->generator;
      }
if($model->facl=="LABORATORY EQUIPMENTS"){
     $f="17";
     $value->labor=(new \yii\db\Query())->from('value')->max('labor');
     $value->labor=$value->labor+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->labor)));
     $back=$digit;
     //$model->save();
     $val=$value->labor;
     }
if($model->facl=="MEDICAL EQUIPMENTS"){
     $f="18";
     $value->medic=(new \yii\db\Query())->from('value')->max('medic');
     $value->medic=$value->medic+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->medic)));
     $back=$digit;
     $val=$value->medic;
      }
if($model->facl=="VEHICLES"){
     $f="19";
     $value->veh=(new \yii\db\Query())->from('value')->max('veh');
     $value->veh=$value->veh+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->veh)));
     $back=$digit;
     //$model->save();
     $val=$value->veh;
     }
if($model->facl=="MOTORCYCLES"){
     $f="20";
     $value->motor=(new \yii\db\Query())->from('value')->max('motor');
     $value->motor=$value->motor+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->motor)));
     $back=$digit;
     //$model->save();
     $val=$value->motor;
     }
if($model->facl=="IT EQUIPMENTS"){
     $f="21";
     $value->it_eq=(new \yii\db\Query())->from('value')->max('it_eq');
     $value->it_eq=$value->it_eq+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->it_eq)));
     $back=$digit;
     //$model->save();
     $val=$value->it_eq;
     }
if($model->facl=="CLINICAL EQUIPMENTS"){
     $f="22";
     $value->cleq=(new \yii\db\Query())->from('value')->max('cleq');
     $value->cleq=$value->cleq+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->cleq)));
     $back=$digit;
     //$model->save();
     $val=$value->cleq;
     }
if($model->facl=="OFFICE EQUIPMENTS"){
     $f="22";
     $value->offeq=(new \yii\db\Query())->from('value')->max('offeq');
     $value->offeq=$value->offeq+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->offeq)));
     $back=$digit;
     $val=$value->offeq;
    }
if($model->facl=="PATHOLOGY EQUIPMENTS"){
     $f="23";
     $value->pathoeq=(new \yii\db\Query())->from('value')->max('pathoeq');
     $value->pathoeq=$value->pathoeq+1;
     $value->save();
     $d="00001";
     $digit=substr($d,0,-(strlen($value->pathoeq)));
     $back=$digit;
     $val=$value->pathoeq;
    }}
//For None Update
else{
if($model->facl=="TABLE"){
     $f="01";
      }
 if($model->facl=="CHAIRS AND BENCHES"){
       $f="02";
        }
if($model->facl=="SHELVES"){
     $f="03";
     }
if($model->facl=="CUPBOARDS"){
     $f="04";
        }
if($model->facl=="FILING CABINETS AND SAFE BOXES"&&$model->facl!=$models->facl){
     $f="05";
       }
if($model->facl=="TV BOXES AND ELECTRICAL APPLLIANCES"){
     $f="06";
      }
if($model->facl=="LOCAL RECOVERY BEDS AND MEDICAL TROLLY"){
     $f="07";
    }
 if($model->facl=="ADDING MACHINES"){
     $f="08";
      }
 if($model->facl=="PHOTOCOPAIERS AND SCANNERS"){
     $f="09";
        }
  if($model->facl=="COMPUTERS AND PRINTERS"){
     $f="10";
       }
if($model->facl=="UPS"){
     $f="11";
   }
if($model->facl=="STABILIZERS"){
     $f="12";
   }
if($model->facl=="OVERHEAD PROJECTORS"){
     $f="13";
    }
if($model->facl=="TV AND DECK RECORDERS"){
     $f="14";
      }
if($model->facl=="PHOTO CAMERRA"){
     $f="15";
      }
if($model->facl=="GENERATORS"){
     $f="16";
      }
if($model->facl=="LABORATORY EQUIPMENTS"){
     $f="17";
     }
if($model->facl=="MEDICAL EQUIPMENTS"){
     $f="18";
      }
if($model->facl=="VEHICLES"){
     $f="19";
     }
if($model->facl=="MOTORCYCLES"){
     $f="20";
     }
if($model->facl=="IT EQUIPMENTS"){
     $f="21";
     }
if($model->facl=="CLINICAL EQUIPMENTS"){
     $f="22";
     }
if($model->facl=="OFFICE EQUIPMENTS"){
     $f="22";
    }
if($model->facl=="PATHOLOGY EQUIPMENTS"){
     $f="23";
    }}
//end
if($model->save()) { 
if($model->LOCATION=="PROJECT MANAGEMENT AND OPERATIONS UNIT"||$model->LOCATION=="CHAMPS"){
  $h="01";
  }
if($model->LOCATION=="SBS UNIT"){
  $h="02";
  }
if($model->LOCATION=="COMMUNITY MITS"){
  $h="03";
  }
if($model->LOCATION=="MIS"){
  $h="04";
  }
if($model->LOCATION=="CLINICAL"){
  $h="05";
  }
if($model->LOCATION=="PATHOLOGY LAB UNIT"){
  $h="06";
  }
if($model->LOCATION=="MICROLAB UNIT"){
  $h="07";
  }
if($model->LOCATION=="MICROBIOLOGY LAB UNIT"){
  $h="07";
  }
if($model->LOCATION=="MOLECULAR LAB UNIT"){
  $h="08";
  }
if($model->LOCATION=="PREGNANCY SURVEIILANCE UNIT"||$model->LOCATION=="Pregnancy Surveillance "){
  $h="09";
  }
if($model->LOCATION=="HDSS UNIT"||$model->LOCATION=="KERSA CHAMPS Building"){
  $h="10";
  }
if($model->LOCATION=="SCIENTIFIC UNIT"){
  $h="11";
  }
if($model->LOCATION=="IT"){
  $h="12";
  }
if($model->LOCATION=="PI"){
  $h="13";
  }
if($model->LOCATION=="HHR"){
  $h="14";
  }
if($model->LOCATION=="ARM CHAMPS"){
    $h="15";
    }
if($model->cost>=5000){
 $model->fxa='fixed';
    }
if($model->cost<5000){
    $model->fxa='nfixed';
    }
if($model->facl==""){
      \Yii::$app->session->setFlash('error','Fixed Asset Category is empty this field is required');
      return $this->redirect(['nfixed','id'=>$model->id]); 
      }
if($model->facl==$models->facl){
     $val=substr($model->asset_code,10);
    $model->asset_code=$asset_code.$h."-".$f."-".$val;
   }
if($model->facl!=$models->facl){
    $model->asset_code=$asset_code.$h."-".$f."-".$back.$val;
     }
$model->save();
return $this->redirect(['fview','id'=>$model->id]); 
          }}  
    return $this->render('fupdate',[
          'model'=>$model,'id'=>$id,
              ]);}
public function actionCreate2($id,$personnelid,$office,$quantity,$returnables,$doreturnable)
        {
        $model=Assets::find()->where(['id'=>$id])->one(); 
        $modell=Personnel::find()->where(['personnel.personnelid'=>$personnelid])->one();     
        $add=new Cartassets();
        $addp=new Assets();
        $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->stockname=$model->NOA;
        $log->quantity=1;
        $log->action="Transfer";  
        $log->pid=$id;
        $log->dateentered=date('Y-m-d-H:i'); 
       $log->personnelid=Yii::$app->user->identity->personnelid;
  //copying data 
      $add->monthlyreport=date('m'); 
      $add->yearlyreport=date('Y'); 
      $add->unit=$model->unit;
      $add->serial=$model->serial;
      $add->asset_code=$model->asset_code;
      $add->grnumber=$model->grnumber;
      $add->donor_funder=$model->donor_funder;
      $add->loa=$model->loa;
      $add->depreciation=$model->depreciation;
      $add->accumulated_dep=$model->accumulated_dep;
      $add->bva=$model->bva;
      $add->plate_number=$model->plate_number;
      $add->fcn=$model->fcn;
      $add->fen=$model->fen;
      $add->fx_type=$model->fx_type;
      $add->fxa=$model->fxa;
      $add->facl=$model->facl;
      $add->quantity=$quantity;
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
      $add->assetbarcode=$model->assetbarcode;
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
      $add->ASSETTYPE=$model->ASSETTYPE;
      $add->LOCATION=$model->LOCATION;
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
      $add->fname=$modell->firstname;
      $add->lname=$modell->lastname;
      $add->personnelid=$personnelid;
      $add->office=$office;
      $add->dep=Yii::$app->user->identity->Type;
      $add->store=Yii::$app->user->identity->Type;
      $add->dt=date('Y-m-d');
      $add->returnables=$returnables;
      $add->doreturnable=$doreturnable;
      $add->username=Yii::$app->user->identity->fname;
     //copying data 
      $addp->monthlyreport=date('m');
      $addp->yearlyreport=date('Y'); 
      $addp->catagoryname=$model->catagoryname;
      $addp->unit=$model->unit;
      $addp->serial=$model->serial;
      $addp->asset_code=$model->asset_code;
      $addp->grnumber=$model->grnumber;
      $addp->donor_funder=$model->donor_funder;
      $addp->loa=$model->loa;
      $addp->depreciation=$model->depreciation;
      $addp->accumulated_dep=$model->accumulated_dep;
      $addp->bva=$model->bva;
      $addp->plate_number=$model->plate_number;
      $addp->fcn=$model->fcn;
      $addp->fen=$model->fen;
      $addp->fx_type=$model->fx_type;
      $addp->fxa=$model->fxa;
      $addp->facl=$model->facl;
      $addp->MODEL=$model->MODEL;
      $addp->qty=$quantity;
      $addp->serviceyear=$model->serviceyear;
      $addp->shelfname=$model->shelfname;
      $addp->shelfno=$model->shelfno;
      $addp->birrformat=$model->birrformat;
      $addp->cost=$model->cost;
      $addp->purchasefrom=$model->purchasefrom;
      $addp->NOA=$model->NOA;
      $addp->DOM=$model->DOM;
      $addp->DOC=$model->DOC;
      $addp->RD=$model->RD;
      $addp->TD=$model->TD;
      $addp->Status=$model->Status;
      $addp->Place=$model->Place;
      $addp->RC=$model->RC;
      $addp->Picture=$model->Picture;
      $addp->RNl=$model->RNl;
      $addp->RM=$model->RM;
      $addp->ASSETID=$model->ASSETID;
      $addp->PARENTASSET_ID=$model->PARENTASSET_ID;
      $addp->ASSETGROUP_ID=$model->ASSETGROUP_ID;
      $addp->LOCATION_ID=$model->LOCATION_ID;
      $addp->VENDOR_ID=$model->VENDOR_ID;
      $addp->OWNER_PERSONNELGROUP_ID=$model->OWNER_PERSONNELGROUP_ID;
      $addp->OWNER_PERSONNEL_ID=$model->OWNER_PERSONNEL_ID;
      $addp->SERVICEAGREEMENT_ID=$model->SERVICEAGREEMENT_ID;
      $addp->CUSTODIAN_PERSONNEL_ID=$model->CUSTODIAN_PERSONNEL_ID;
      $addp->STATUS_ID=$model->STATUS_ID;
      $addp->assetbarcode=$model->assetbarcode;
      $addp->SERIALNUMBER=$model->SERIALNUMBER;
      $addp->MODEL=$model->MODEL;
      $addp->DEPARTMENT_ID=$model->DEPARTMENT_ID;
      $addp->CONDITION_ID=$model->CONDITION_ID;
      $addp->SCRAPVALUE=$model->SCRAPVALUE;
      $addp->CURRENTVALUE=$model->CURRENTVALUE;
      $addp->PURCHASEPRICE=$model->PURCHASEPRICE;
      $addp->ACCOUNTCODE=$model->ACCOUNTCODE;
      $addp->PURCHASEORDERNUMBER=$model->PURCHASEORDERNUMBER;
      $addp->ISCHECKEDOUT=$model->ISCHECKEDOUT;
      $addp->ASSETNAME=$model->ASSETNAME;
      $addp->BRAND=$model->BRAND;
      $addp->MANUFACTURER=$model->MANUFACTURER;
      $addp->AUTOBARCODE=$model->AUTOBARCODE;
      $addp->ASSETTYPE=$model->ASSETTYPE;
      $addp->LOCATION=$model->LOCATION;
      $addp->CONDITIONs=$model->CONDITIONs;
      $addp->CUSTODIAN=$model->CUSTODIAN;
      $addp->INCLUDEINAUDIT=$model->INCLUDEINAUDIT;
      $addp->DEPRECIATIONMETHOD=$model->DEPRECIATIONMETHOD;
      $addp->RECOVERYPERIOD=$model->RECOVERYPERIOD;
      $addp->DATEINSERVICE=$model->DATEINSERVICE;
      $addp->DATEAUDITED=$model->DATEAUDITED;
      $addp->DUEDATE=$model->DUEDATE;
      $addp->DATEPURCHASED=$model->DATEPURCHASED;
      $addp->CHECKOUTDATE=$model->CHECKOUTDATE;
      $addp->DATECREATED=$model->DATECREATED;
      $addp->DATEUPDATED=$model->DATEUPDATED;
      $addp->LASTAUDITDATE=$model->LASTAUDITDATE;
      $addp->DATEWARRANTYEXPIRES=$model->DATEWARRANTYEXPIRES;
      $addp->NEXTSERVICEDUEDATE=$model->NEXTSERVICEDUEDATE;
      $addp->NOTES=$model->NOTES;
      $addp->fname=$modell->firstname;
      $addp->lname=$modell->lastname;
      $addp->personnelid=$personnelid;
      $addp->office=$office;
      $addp->dep="Admin";
      $addp->received=21;
      $addp->idm=$id;
      $addp->store=$office;
      $addp->returnables=$returnables;
      $addp->doreturnable=$doreturnable;
      $addp->username=Yii::$app->user->identity->fname;
      $model->quantity=$model->quantity-$quantity;
      $model->totalcost=$model->totalcost-$model->cost*$quantity;
      $stat=0;
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
     $qtsum=Assets::find()->where(['idm'=>$id,'store'=>$office])->one();
     if($model->load(Yii::$app->request->post())){
        }
if($addp->office=="Clinical"&&$model->quantity>=0){
   //if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $add->save();
              $log->save();
              $addp->save();
    $sq="UPDATE  assets SET stat=0,store='$off',received=21 WHERE id=$id";
        $query=Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer','id'=>$model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->NOA==$model->NOA){
    $amou=$qtsum->qty+$quantity;
    $add->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query=Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
if($model->quantity==0){
$sq="UPDATE  assets SET store='$off',stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query=Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer','id'=>$model->id]);
         }
         
    }}
    else{  
       $add->save();
       $log->save();
       $addp->save();
    $command="UPDATE assets SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
            }}
        //}
if($addp->office=="Microlab"&&$model->quantity>=0){
  // if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $add->save();
              $log->save();
              $addp->save();
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',qty='$quantity',store='$office',received=4 WHERE id=$id"; 
       $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->NOA==$model->NOA){
    $amou=$qtsum->qty+$quantity;
    $add->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE  assets SET store='$off',stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }   
    }}
else{  
 $command="UPDATE assets SET quantity='$model->quantity' where id='$id'";
Yii::$app->db->createCommand($command)->execute();
          $add->save();
          $log->save();
          $addp->save();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
                  }}//}  

//KHDSS Section
if($addp->office=="KHDSS"&&$model->quantity>=0){
  // if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $add->save();
              $log->save();
              $addp->save();
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',qty='$quantity',store='$office',received=4 WHERE id=$id"; 
       $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->NOA==$model->NOA){
    $amou=$qtsum->qty+$quantity;
    $add->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE  assets SET store='$off',stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }   
    }}
else{  
 $command="UPDATE assets SET quantity='$model->quantity' where id='$id'";
Yii::$app->db->createCommand($command)->execute();
          $add->save();
          $log->save();
          $addp->save();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
                  }}//}  
//PREGNANCY SECTION
if($addp->office=="PSU"&&$model->quantity>=0){
  // if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $add->save();
              $log->save();
              $addp->save();
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',qty='$quantity',store='$office',received=4 WHERE id=$id"; 
       $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->NOA==$model->NOA){
    $amou=$qtsum->qty+$quantity;
    $add->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE  assets SET store='$off',stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }   
    }}
else{  
 $command="UPDATE assets SET quantity='$model->quantity' where id='$id'";
Yii::$app->db->createCommand($command)->execute();
          $add->save();
          $log->save();
          $addp->save();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
                  }}//}  
//Pathology Section 
if($addp->office=="Pathology"&&$model->quantity>=0){
    //if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $add->save();
              $log->save();
              $addp->save();
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',qty='$quantity',store='$office',received=4 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->NOA==$model->NOA){
    $amou=$qtsum->qty+$quantity;
    $add->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE  assets SET store='$off',stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }   
    }}
else{  
      $add->save();
      $log->save();
      $addp->save();
$command="UPDATE assets SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
                  }}//}
if($addp->office=="IT"&&$model->quantity>=0){
   //if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $add->save();
              $log->save();
              $addp->save();
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',qty='$quantity',store='$office',received=4 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer','id'=>$model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->NOA==$model->NOA){
    $amou=$qtsum->qty+$quantity;
    $add->save();
    $log->save();
    //$addp->save();
    if($model->quantity!=0){
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE  assets SET store='$off',stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
         
    }}
else{  
      $add->save();
      $log->save();
      $addp->save();
 $command="UPDATE assets SET quantity='$model->quantity' where id='$id'";
Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
                  }}//}
        
if($addp->office=="SBS"&&$model->quantity>=0){
     //if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $add->save();
              $log->save();
              $addp->save();
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',qty='$quantity',store='$office',received=4 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
             }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->NOA==$model->NOA){
    $amou=$qtsum->qty+$quantity;
    $add->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE  assets SET store='$off',stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }       
    }}
else{  
$command="UPDATE assets SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
          $add->save();
          $log->save();
          $addp->save();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
                  }}//}
if($addp->office=="Admin"&&$model->quantity>=0){
   //if($addp->save()) {
if($model->quantity==0&&$qtsum==false){
              $addp->quantity=$quantity;
              $add->save();
              $log->save();
              $addp->save();
$sq="UPDATE  assets SET stat=0,store='$off',received=21 WHERE id=$id";
       $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
if($qtsum==true&&Yii::$app->user->identity->Type=="Admin"){
if($qtsum->NOA==$model->NOA){
    $amou=$qtsum->qty+$quantity;
    $add->save();
    $log->save();
    //$addp->save();
if($model->quantity!=0){
$sq="UPDATE  assets SET stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
     if($model->quantity==0){
$sq="UPDATE  assets SET store='$off',stat=0,quantity='$model->quantity',received=3 WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
    $command="UPDATE assets SET received=4,qty='$amou' where idm='$id'";
    Yii::$app->db->createCommand($command)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
         }
         
    }}
else{  
       $add->save();
       $log->save();
       //$addp->save();
    $command="UPDATE assets SET quantity='$model->quantity' where id='$id'";
    Yii::$app->db->createCommand($command)->execute();
       \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $model->id]);
            }}
 \Yii::$app->session->setFlash('error','Not done try again');
            return $this->redirect(['assets/transfer', 'id' => $model->id]);
      }
      /**
     * Updates an existing Assets model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
  public function actionCreate3($id)
          {
            $add=new Assets();
     $model=Cartassets::find()->where(['id'=>$id])->one();
      $add->catagoryname=$model->catagoryname;
      $add->unit=$model->unit;
      $add->serial=$model->serial;
      $add->MODEL=$model->MODEL;
      $add->serviceyear=$model->serviceyear;
      $add->shelfname=$model->shelfname;
      $add->shelfno=$model->shelfno;
      $add->birrformat=$model->birrformat;
      $add->cost=$model->cost;
      $add->quantity=$model->quantity;
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
      $add->assetbarcode=$model->assetbarcode;
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
      $add->ASSETTYPE=$model->ASSETTYPE;
      $add->LOCATION=$model->LOCATION;
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
      $add->store=$model->store;
      $add->office=$model->office;
      $add->dep=$model->dep;
      $add->store=$model->dep;
      $add->received=3;
      $add->returnables=$model->returnables;
      $add->doreturnable=$model->doreturnable;
      $add->username=Yii::$app->user->identity->fname;
      $stat=1;
     $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->stockname=$model->NOA;
        $log->quantity=$model->quantity;
        $log->action="Returned";  
        $log->dateentered=date('Y-m-d-H:i'); 
       $log->personnelid=Yii::$app->user->identity->personnelid;
    if($add->save()) {
    //if($model->quantity==0){
          //$add->save();
          $log->save();
$sq="UPDATE  cartassets SET stat='$stat' WHERE id=$id";
        $query = Yii::$app->db->createCommand($sq)->execute();
           \Yii::$app->session->setFlash('success','Success');
           return $this->redirect(['assets/transfer', 'id' => $add->id]);
       }
       // $add->save();
        //$model->save();
    \Yii::$app->session->setFlash('error','Not done');
           return $this->redirect(['assets/transfer', 'id' => $add->id]);
           }//}
  //receive and reject 
   public function actionReceived($id,$descfr,$assetbarcode)
       {
     $model=Assets::find()->where(['id'=>$id])->one();
     $model->received=1;
     $model->descfr=$descfr;
     $model->assetbarcode=$assetbarcode;
     $model->quantity=$model->quantity+$model->qty;
     $model->qty=0;
     $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->stockname=$model->NOA;
        $log->quantity=$model->quantity+$model->qty;
        $log->action="received";  
        $log->dateentered=date('Y-m-d-H:i'); 
       $log->personnelid=Yii::$app->user->identity->personnelid;
   // $command="UPDATE consumables SET received='$model->received',descfr='$model->descfr' where id='$id'";
    // Yii::$app->db->createCommand($command)->execute(); 
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
             $model->save();
             $log->save();
            \Yii::$app->session->setFlash('Success', ' You received the items you request' );
            return $this->redirect(['receive', 'id' => $model->id]);
                }

    public function actionRejected($id,$descfr)
    {
    $model=Assets::find()->where(['id'=>$id])->one();
     $model->received=2;
     $model->descfr=$descfr;

     $log=new Logtable();
        $log->fullname=Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname;
        $log->stockname=$model->NOA;
        $log->quantity=1;
        $log->action="Reject";  
        $log->dateentered=date('Y-m-d-H:i'); 
       $log->personnelid=Yii::$app->user->identity->personnelid;
       $log->save();
    $command="UPDATE assets SET received='$model->received',descfr='$model->descfr' where id='$id'";
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
    public function actionUpdate($id)
        {
        $model = $this->findModel($id);
      $model->checkforserial=1;
        if ($model->load(Yii::$app->request->post())){
         $image = UploadedFile::getInstance($model, 'Picture');
           if (!is_null($image)) {
             $model->Picture = $image->name;
            // $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
            //  $model->image_web_filename = Yii::$app->security->generateRandomString().".{$ext}";
             // $model->Picture=$model->image_web_filename;
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/';
              $path = Yii::$app->params['uploadPath'] . $model->Picture;
               $image->saveAs($path);
            }
      if($model->save()) { 
           // if($model->ASSETBARCODE!=NULL){
           //$auto= \app\models\defualtidno::find()->where(['SBS'=>$model->ASSETBARCODE])->one();
          //$auto->active2=1;
      return $this->redirect(['view', 'id' => $model->id]); 
      }            
        else{
                var_dump ($model->getErrors()); die();
             }}
              return $this->render('update', [
                  'model' => $model,'id'=>$id,
              ]);     
    }
      public function actionUpdate1($id)
        {
        $model = $this->findModel($id);
      //$model->checkforserial=1;
        if ($model->load(Yii::$app->request->post())){
         $image = UploadedFile::getInstance($model, 'Picture');
           if (!is_null($image)) {
             $model->Picture = $image->name;
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
            //  $model->image_web_filename = Yii::$app->security->generateRandomString().".{$ext}";
             // $model->Picture=$model->image_web_filename;
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/';
              $path = Yii::$app->params['uploadPath'] . $model->Picture;
               $image->saveAs($path);
            }
      if($model->save()) { 
           // if($model->ASSETBARCODE!=NULL){
           //$auto= \app\models\defualtidno::find()->where(['SBS'=>$model->ASSETBARCODE])->one();
          //$auto->active2=1;
      return $this->redirect(['view', 'id' => $model->id]); 
      }            
        else{
                var_dump ($model->getErrors()); die();
             }}
              return $this->render('update1', [
                  'model' => $model,'id'=>$id,
              ]);     
    }
    /**
     * Deletes an existing Assets model.
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
//Quantity update 
public function actionUpdate_up($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                  \Yii::$app->session->setFlash('success','Successfully changed');
            return $this->redirect(['transfer','id' => $model->id]);
        }
         \Yii::$app->session->setFlash('error','quantity changing failled' );
         return $this->redirect(['transfer', 'id' => $model->id]);
      }
    /**
     * Finds the Assets model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Assets the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Assets::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
