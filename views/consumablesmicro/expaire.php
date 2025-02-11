<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\Consumables;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
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
        'type'=>'info',
         ],
        'bootstrap' =>true,
        'hover'=>true,
      'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
    'headerRowOptions' => ['class' => 'kartik-sheet-style','style'=>'background-color:#cccc'],
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
    'itemLabelSingle' => 'Expire items',
    'itemLabelPlural' => 'Expire items',
      'columns' => [
           // ['class'=>'yii\grid\SerialColumn'],
      [
            'attribute'=> 'lot',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc){
        return $var->lot;
           }
      else{
        return " ";
           }
           },
           ],
       [
            'attribute'=> 'catagory',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc){
        return $var->catagory;
           }
      else{
        return " ";
           }
           },
           ],
  [
            'attribute'=> 'noi',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc){
        return $var->noi;
           }
           else{
        return " ";
           }
           },
         ],
[
'headerOptions'=>["label label-danger"],
            'attribute'=> 'Expire',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc){
        return $var->expairedate;
           }
           else{
        return " ";
           }
           },
           ],
  [
'headerOptions'=>["label label-danger"],
            'attribute'=> 'dr',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc){
        return $var->dr;
           }
                      else{
        return " ";
           }
           },
           ],
  [
'headerOptions'=>["label label-danger"],
            'attribute'=> 'shelflife',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc){
        return $var->shelflife;
           }
                     else{
        return " ";
           }
           },
           ],
  [
'headerOptions'=>["label label-danger"],
            'attribute'=> 'department',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc){
        return $var->department;
           }
        else{
        return " ";
           }
           },
           ],
    [
'headerOptions'=>["label label-danger"],
            'attribute'=> 'remark',
          'headerOptions'=>["class"=>"text-danger"],
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
        $doc=date('Y-m-d');
        if($var->expairedate<$doc){
        return $var->remark;
           }
      else{
        return " ";
           }
           },
           ],
         ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
