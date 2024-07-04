<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Users;
use app\models\RequestSearch;
use app\models\SmsJob;
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
        {
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'only'=>['logout','logout1','index','index1','index2','index3','index4','index5','index6','back','backs','header'],
                'rules'=>[
                    [
                'actions'=>['logout','logout1','index','index1','index2','index3','index4','index5','index6','back','backs','header'],
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
     * {@inheritdoc}
     */
public function actions()
    {
        return [
            'error'=>[
                'class'=>'yii\web\ErrorAction',
            ],
            'captcha'=>[
                'class'=>'yii\captcha\CaptchaAction',
                'fixedVerifyCode'=>YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
public function actionHeader()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    public function actionIndex()
       {
        $model=new \app\models\Stock();
     $data=$model->allData();
     return $this->render('index',['data'=>$data,]);
                }
    public function actionIndex1()
       {
        $model=new \app\models\Assets();
     $data=$model->allData();
     return $this->render('index1',['data'=>$data,]);
                }
    public function actionIndex2()
       {
        $model=new \app\models\Assets();
     $data=$model->allDatapermonth();
     return $this->render('index2',['data'=>$data,]);
                }
public function actionIndex_2()
                {
                $monthlyreport=['champ1'=>date('M'),
                'champ2'=>date('M',strtotime("+1 month")),
                'champ3'=>date('M',strtotime("+2 month")),
                'champ4'=>date('M',strtotime("+3 month")),
                'champ5'=>date('M',strtotime("+4 month")),
                'champ6'=>date('M',strtotime("+5 month")),
                'champ7'=>date('M',strtotime("+6 month")),
                'champ8'=>date('M',strtotime("+7 month")),
                'champ9'=>date('M',strtotime("+8 month")),
                'champ10'=>date('M',strtotime("+9 month")),
                'champ11'=>date('M',strtotime("+10 month")),
                'champ12'=>date('M',strtotime("+11 month"))];
                $yearlyreport=date('Y');            
                $model=new \app\models\Assets();
                $data=$model->getHighlyused();
                return $this->render('index_2',[
                    'monthlyreport'=>$monthlyreport,
                    'yearlyreport'=>$yearlyreport,
                    'data'=>$data,
                ]);             
            }
public function actionIndex_2_last()
            {
            $monthlyreport=[
            'champ1'=>date('M'),
            'champ2'=>date('M',strtotime("+1 month")),
            'champ3'=>date('M',strtotime("+2 month")),
            'champ4'=>date('M',strtotime("+3 month")),
            'champ5'=>date('M',strtotime("+4 month")),
            'champ6'=>date('M',strtotime("+5 month")),
            'champ7'=>date('M',strtotime("+6 month")),
            'champ8'=>date('M',strtotime("+7 month")),
            'champ9'=>date('M',strtotime("+8 month")),
            'champ10'=>date('M',strtotime("+9 month")),
            'champ11'=>date('M',strtotime("+10 month")),
            'champ12'=>date('M',strtotime("+11 month"))];
            $yearlyreport=date('Y')-1;            
            $model=new \app\models\Assets();
            $data=$model->getHighlyused_last();
            return $this->render('index_2_last',[
                'monthlyreport'=>$monthlyreport,
                'yearlyreport'=>$yearlyreport,
                'data'=>$data,
            ]);             
        }
 public function actionIndex3()
       {
        $this->layout=false;
        return $this->render('index3');
            }
public function actionMaintenance()
       {
        $this->layout=false; // Disable the layout for the maintenance page
        return $this->render('maintenance');
        }
   public function actionIndex4()
    {
        $searchModel=new RequestSearch();
        $dataProvider=$searchModel->search_l(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        \Yii::$app->session->setFlash('warning',"Please,note button status under column action below."."
		You will see pending button like this"." "."<b style='color:red'>"."\n Pending"."</b>"." ".
		" which means not yet approved or rejected(i.e shows new request) so click this red color button labled as pending to see number of request  then click approve 
		if you want approve else click reject if you want reject
		.Your action will  reach to sender view email.\n I also provide user manaul to avoid  users confusion open the link manual on the lift panel 
		it will open on the browser as pdf file and use the system properly as provided in the manual.<br>"."<b style='color:blue'>
		<u>Note:</u>-If there is no request sent for, you will not see anything so don't be confused if you face such like situation.</b>
		");
        return $this->render('index4',[
            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }
public function actionIndex6(){
    return $this->render('index6');
   }
public function actionIndex5()
    {
        $searchModel=new RequestSearch();
        $dataProvider=$searchModel->search_po(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder=['id'=>SORT_DESC];
        \Yii::$app->session->setFlash('warning',"Please,note button status under column action below."."
		You will see pending button like this"." "."<b style='color:red'>"."\n Pending"."</b>"." ".
		" which means not yet approved or rejected(i.e shows new request) so click this red color button labled as pending to see number of request  then click approve 
		if you want approve else click reject if you want to reject
		.Your action will  reach to the sender view email.\n I also provide user manaul to avoid  users confusion open the link manual on the lift panel 
		it will open on the browser as pdf file and use the system properly as provided in the manual.<br>"."<b style='color:blue'>
		<u>Note:</u>-If there is no request sent for you will not see anything so don't be confused if you face such like situation.</b>
		");
        return $this->render('index5', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
public function actionLogin()
    {
    if(!Yii::$app->user->isGuest){
            return $this->goHome();
        }
        $model=new LoginForm();
        //$users=Users::find()->one();
if($model->load(Yii::$app->request->post())){
    $model->password=md5($model->password); 
    if($model->login()){
        $redirect=Yii::$app->getUser()->identity->active;
         $this->getActivity($redirect);
    }
    else{
       \Yii::$app->session->setFlash('danger','<b style="left:50%">'.'Username or password in correct,please try with correct one.If the problem persist contact to yetsedaw.y@gmail.com'.
	   '</b>');
      return $this->redirect(['site/logout1']);
       }}
           $model->password='';  
        return $this->render('login',[
            'model'=>$model,
        ]);
     }
public function actionLogout()
     {
      Yii::$app->user->logout();
     return $this->goHome();
      }
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact',[
            'model'=>$model,
        ]);
    }
 public function actionLogout1()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    /**
     * Displays about page.
     *
     * @return string
     */
public function actionAbout()
    {
        return $this->render('about');
    } 
public function actionReport()
    {
        $report = new \app\reports\MyReport;
        $report->run();
        return $this->render('report',array(
            "report"=>$report
        ));
        
    }	
public function getActivity($redirect){
       if(in_array($redirect,[1,2,3,5,6])){//||Yii::$app->getUser()->identity->active==2||Yii::$app->getUser()->identity->active==3){ 
	   \Yii::$app->session->setFlash('success','Thank you, thank you for visiting!',['duration' =>12]);
        return $this->redirect(['index6']);
              } 
       else if($redirect==4){  
              \Yii::$app->session->setFlash('success','Thank you for visiting us',['duration' =>12]);
                $this->redirect(['index']);
              }
       else if($redirect==0){  
              \Yii::$app->session->setFlash('success','Thank you, thank you for visiting!',['duration' =>12]);
            return $this->redirect(['index6']);
              }
       else if($redirect==99){  
              \Yii::$app->session->setFlash('success','Thank you, thank you for visiting!',['duration' =>12]);
             return $this->redirect(['maintenance']);
            }
       else if(Yii::$app->getUser()->identity->role=="PO"||Yii::$app->getUser()->identity->role=="Linemanager"){ 
           \Yii::$app->session->setFlash('success','Thank you, thank you for visiting!',['duration' =>12]);   
            return $this->redirect(['index6']);
         }   
}}