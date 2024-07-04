<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
$this->title ='';//"For "." ".Yii::$app->user->identity->username;
//$this->params['breadcrumbs'][] = $this->title;
?> 
<h3 style="color:blue"><?= Html::encode("User"." "."<"." ".Yii::$app->user->identity->username).">" ?></h3>
<div class="mitsparticipant-index">
<?php if(Yii::$app->session->hasFlash('Success')):?>
<div class="alert alert-success" role="alert">
    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <?= Yii::$app->session->getFlash('Success') ?><span class="glyphicon glyphicon-ok"></span>
</div>
<?php endif; ?>
    <?php if(Yii::$app->session->hasFlash('danger')): ?>
<div class="alert alert-danger" role="alert">
    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <?= Yii::$app->session->getFlash('danger') ?><span class="glyphicon glyphicon-ok">          
    </span>
</div>
<?php 
endif;?>
<div class="request-index">
 <?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider'=>$dataProvider,
        'filterModel'=>$searchModel,
        'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
        'showPageSummary'=>false,
'panel'=>[
  'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i> Lists of requested stock history</h3>',
        'type'=>'success',
         ],
  'bootstrap' =>true,
        'hover'=>true,
      'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
    'headerRowOptions' => ['class' => 'kartik-sheet-style'],
    'filterRowOptions' => ['class' => 'kartik-sheet-style'],
          'pjax'=>true,
        'emptyCell'=>'-',
        'tableOptions' =>['class' => 'table table-hover table-striped table-responsive table-condensed'],
    'toolbar'=> [ 
            '{export}',
            '{toggleData}',
            ],
      'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    // set export properties
    'export' => [
        'fontAwesome'=>true
    ],
      'persistResize' => false,
    'toggleDataOptions' => ['minCount' => 10],
    'itemLabelSingle' => 'request',
    'itemLabelPlural' => 'request',
    'options'=>['style'=>'background-color:red;color:green'],
    'columns'=>[
        [
          'attribute'=>'requestno',
          'value'=>function ($data) {
                 $req=app\models\Request::find()->where(['id'=>$data->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
            return $req->requestno;
                }
               ],   
        [
                'attribute'=>"personnelid/Name",
                'value'=>function ($data) {
                 $req=app\models\Request::find()->where(['id'=>$data->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
                return $req->personnelid."/"." ".$req->fname;
                }
               ],                   
 [
                'attribute'=>'department',
                'value'=>function ($data) {
                 $req=app\models\Request::find()->where(['id'=>$data->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
                return $req->office;
                }
               ],  
      [
                'attribute'=>'foreign_key',
                'value'=>function ($data) {
                 $req=app\models\Request::find()->where(['id'=>$data->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
                return $req->foreign_key;
                }
          ],  
[
      'format'=>'raw',
      'header'=>'Action',
      'headerOptions'=>['class'=>'kartik-sheet-style'],
      'value'=>function($data){
        $id=$data->id;
        $item=app\models\Request::find()->where(['id'=>$id])->one();
        $count=app\models\Stock::find()->where(['vendorid'=>$id])->count('id');
 $cc=app\models\Stock::find()->where(['vendorid'=>$id])->andWhere(['stock.confirmbymicro'=>NULL])->count('id');
if($data->valuecheck==1&&$cc!=0){                
 $btn='<a style="background-color:blue" data-method="post" data-confirm="Are you sure you want to approve?" href="'.Url::to(["request/poview",'id'=>$id]).'"><i class="btn btn-xs btn-primary glyphicon glyphicon-ok">Review('.$cc.'leftof/'.$count.')'.'</i> </a>';                                                
        return $btn;
          }
 if($data->valuecheck==2&&$cc!=0){                
 $btn1 ='<a style="background-color:blue" data-method="post" data-confirm="Are you sure you want to Disqualified?" href="'.Url::to(["request/poview", 'id'=>$id]).'"><i class="btn btn-xs btn-primary glyphicon glyphicon-ok">Disqualified('.$cc.'leftof/'.$count.')'.'</i> </a>';                              
        return $btn1;
          }
 if($data->valuecheck==-1&&$cc!=0){                
   $btn2='<a style="background-color:blue" data-method="post" data-confirm="Are you sure you want to Reject?" href="'.Url::to(["request/poview",'id'=>$id]).'"><i class="btn btn-xs btn-danger glyphicon glyphicon-remove">Rejected('.$cc.'/of'.$count.')'.'</i> </a>';                                          
        return $btn2;
          }
if($cc==0){
   return Html::a('Completed',['request/poview','id'=>$id], ['class'=>'btn btn-xs btn-success glyphicon glyphicon-ok']);
      }
else{
   return Html::a('Pending', ['request/lview','id'=>$id], ['class'=>'btn btn-xs btn-danger glyphicon glyphicon-ok']);
          }}],      
        ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
