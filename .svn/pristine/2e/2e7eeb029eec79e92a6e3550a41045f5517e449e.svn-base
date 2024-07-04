<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\Consumables;
$this->title ='';
?>
<div class="consumables-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Expire consumable</h3>',
         //'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddConsumablecatagory', [''], ['class' => 'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
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
      'toggleDataContainer'=>['class'=>'btn-group mr-2'],
    // set export properties
    'export' => [
        'fontAwesome'=>true
    ],
      'persistResize'=>false,
    'toggleDataOptions'=>['minCount'=>10],
    'itemLabelSingle'=>'stock',
    'itemLabelPlural'=>'Expire stock',
      'columns'=>[
['class'=>'yii\grid\SerialColumn'],
  [
'headerOptions'=>["label label-danger"],
          'attribute'=>'noi',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($data){
          $id=$data->id;
        $var=app\models\Consumables::find()->where(['id'=>$id])->one();
        $doc=date('Y-m-d');
  if($var->expairedate<$doc&&$var->expairedate!=NULL){
        return $var->noi;
           }
      else{
        return " ";
           }},
         ],
[
'headerOptions'=>["label label-danger"],
          'attribute'=>'expairedate',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc&&$var->expairedate!=NULL){
        return $var->expairedate;
           }
           else{
        return " ";
           }},
           ],
  [
'headerOptions'=>["label label-danger"],
          'attribute'=>'dr',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($model){
          $data=$model->id;
        $var=app\models\Consumables::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc&&$var->expairedate!=NULL){
        return $var->dr;
           }
      else{
        return " ";
           }},
           ],
  [
'headerOptions'=>["label label-danger"],
          'attribute'=>'shelflife',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc&&$var->expairedate!=NULL){
           return $var->shelflife;
           }
      else{
        return " ";
           }},
        ],
  [
'headerOptions'=>["label label-danger"],
          'attribute'=>'department',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc&&$var->expairedate!=NULL){
        return $var->department;
           }
        else{
        return " ";
           }},
           ],
    [
'headerOptions'=>["label label-success"],
          'attribute'=>'quantity',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($model){
          $data=$model->id;
          $var=app\models\Consumables::find()->where(['id'=>$data])->one();
          $doc=date('Y-m-d');
    if($var->expairedate<$doc&&$var->expairedate!=NULL){
        return $var->quantity;
           }
      else{
          return " ";
           }},
           ],
         ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
