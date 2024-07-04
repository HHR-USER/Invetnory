<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-index">
 <?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
        'showPageSummary'=>false,
'panel'=>[
  'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>List of request from other unit/staff for you</h3>',
       'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Createrequest', ['create'], ['class' => 'btn btn-primary','style'=>"float:right",'onClick'=>"popup()"]),
        //'type'=>'info',
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
        'fontAwesome' => true
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
//if($req->dep=="Microlab"){
  if($req->office==Yii::$app->user->identity->Type){
            return $req->requestno;
                }}
               ],   
        [
                'attribute'=>'personnelid',
                'value'=>function ($data) {
                 $req=app\models\Request::find()->where(['id'=>$data->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
      //if($req->dep=="Microlab"){
       if($req->office==Yii::$app->user->identity->Type){
                return $req->personnelid;
                }}
               ],                   
 [
                'attribute'=>'Department',
                'value'=>function ($data) {
                 $req=app\models\Request::find()->where(['id'=>$data->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
  //if($req->dep=="Microlab"){
   if($req->office==Yii::$app->user->identity->Type){
                return $req->office;
                }}
               ],                    
      [
                'attribute'=>'foreign_key',
                'value'=>function ($data) {
                 $req=app\models\Request::find()->where(['id'=>$data->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
        //if($req->dep=="Microlab"){
          if($req->office==Yii::$app->user->identity->Type){
                return $req->foreign_key;
                }}
               ],  
    /*[     
      'attribute'=>'quantity',
      'format'=>'raw',
      'value'=>function($model){
        $n='inledit'.$model->id;
    $req=app\models\Request::find()->where(['id'=>$model->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
        if($req->office=="Microlab"){
    $form=ActiveForm::begin(['id'=>$n,'action'=>['update1','id'=>$model->id], 'options' =>['name' => 'inleditfrm']]);
    $f=Html::activeTextInput($model,'quantity', ['form'=>$n,"oninput"=>"this.value=this.value.replace(/[^0-9]/g,'');", 'id'=>'inp'.$n, 'style' =>'width:100%;']);
    $btn=Html::submitButton(Yii::t('app', ''), ['class'=>'btn btn-primary btn-xs','style' => 'display: none;','form'=>$n]);
            ActiveForm::end();
        return $f.$btn;
        }}],*/
[
              'format'=>'raw',
               'header'=>'Action',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
               $id=$data->id;
                $item=app\models\Request::find()->where(['id'=>$id])->one();
    if($item->valuecheck==1){                
return Html::a('Viewapproved', ['request/viewnormal', 'id'=>$id], ['class'=>'btn btn-xs btn-success glyphicon glyphicon-eye-open']);
          }
    if($item->valuecheck==2){                
return Html::a('Disqualified', ['request/indexm', 'id'=>$id], ['class'=>'btn btn-xs btn-primary']);
          }
   if($item->valuecheck==-1){                
return Html::a('Viewrejected', ['request/viewnormal', 'id'=>$id], ['class'=>'btn btn-xs btn-danger glyphicon glyphicon-eye-open']);
          }
     else {
   return Html::a('view', ['request/view2', 'id'=>$id], ['class'=>'btn btn-xs btn-info glyphicon glyphicon-eye-open']);
          }}],      
        ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
