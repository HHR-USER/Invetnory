<?php
namespace app\controllers;
use Yii;
use app\models\ValueList;
use app\models\ValueListSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Logtable;
use app\models\Users;
/**
 * ValueListController implements the CRUD actions for ValueList model.
 */
class ValueListController extends Controller
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
     * Lists all ValueList models.
     * @return mixed
     */
public function actionIndex()
    {
        $searchModel = new ValueListSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single ValueList model.
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
     * Creates a new ValueList model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
public function actionCreate()
    {
        $model = new ValueList();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
            'model'=>$model,
        ]);
    }
    /**
     * Updates an existing ValueList model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model=$this->findModel($id);

        if($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view','id'=>$model->id]);
        }
        return $this->render('update',[
            'model'=>$model,
        ]);
    }
public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }
public function actionLinemanager($value)
    {
      $model=new ValueList();
      $model->value=$value;
      $model->index=1;
      $usr=Users::find()->where(['email'=>$value])->one();
      $usr->role="Linemanager";
      $logs=new Logtable();
      $logs->fullname=Yii::$app->user->identity->fname." ".Yii::$app->user->identity->mname." ".Yii::$app->user->identity->lname;
      $logs->action="Assign line manager";
      $logs->dateentered=date("Y-m-d H:i:s");
  if($model->save(false)){
      $usr->save();
      $logs->save();
  \Yii::$app->getSession()->setFlash('Success','Unit'." ".$model->value." "."is created successful");
  return $this->redirect(['users/index']);
          }}
protected function findModel($id)
    {
        if(($model=ValueList::findOne($id))!==null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
