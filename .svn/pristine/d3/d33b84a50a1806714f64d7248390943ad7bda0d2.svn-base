<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
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
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i> Request Lists</h3>',
      // 'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Createrequest', ['create'],['class'=>'btn btn-primary','style'=>"float:right",'onClick'=>"popup()"]),
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
      $req=app\models\Stock::find()->where(['vendorid'=>$data->id])->one(); 
      $var=app\models\Request::find()->where(['id'=>$req->vendorid])->one();
       if($req->vendorid==$var->id){
         return $var->requestno;
                }}],
[
                'attribute'=>'fname',
        'value'=>function ($data) {
      $req=app\models\Stock::find()->where(['vendorid'=>$data->id])->one(); 
      $var=app\models\Request::find()->where(['id'=>$req->vendorid])->one();
       if($req->vendorid==$var->id){
         return $var->fname;
                }}],
/*[
                'attribute'=>'noi',
        'value'=>function ($data) {
      $req=app\models\Stock::find()->where(['vendorid'=>$data->id])->one(); 
      $var=app\models\Request::find()->where(['id'=>$req->vendorid])->one();
       if($req->vendorid==$var->id){
         return $req['noi'];
                }}],*/
[
              'format'=>'raw',
               'header'=>'Action',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
               $id=$data->id;
                $item=app\models\Request::find()->where(['id'=>$id])->one();
    if($item->valuecheck==1||$item->valuecheck==0){                
return Html::a('View', ['request/viewnormal', 'id'=>$id], ['class'=>'btn btn-xs btn-primary glyphicon glyphicon-eye-open']);
          }
      else{
        return "This is not your request";
      }
        }],
        ],
    ]); ?>
</div>
