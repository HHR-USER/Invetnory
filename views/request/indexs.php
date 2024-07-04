<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\GridView;
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
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Your request history list</h3>',
       'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Createrequest', ['create'], ['class' => 'btn btn-primary','style'=>"float:right",'onClick'=>"popup()"]),
        'type'=>'info',
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
    'columns'=>[
        [
                'attribute'=>'requestno',
                'value'=>function ($data) {
                 $req=app\models\Request::find()->where(['id'=>$data->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
if($req->dep=="SBS"){
            return $req->requestno;
                }}
               ],     
        [
                'attribute'=>'personnelid',
                'value'=>function ($data) {
                 $req=app\models\Request::find()->where(['id'=>$data->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
            if($req->dep=="SBS"){
                return $req->personnelid;
                }}
               ],                    
        [
                'attribute'=>'foreign_key',
                'value'=>function ($data) {
                 $req=app\models\Request::find()->where(['id'=>$data->id])->one(); 
                $dicom=substr($req->requestno,0,1);
                $last=substr($dicom,-6);
        if($req->dep=="SBS"){
                return $req->foreign_key;
                }}
               ],  
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
