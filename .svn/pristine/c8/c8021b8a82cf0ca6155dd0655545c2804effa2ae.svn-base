<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Consumable List</h3>',
         //'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddConsumablecatagory', [''], ['class' => 'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
        'type'=>'primary',
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
    'itemLabelSingle' => 'book',
    'itemLabelPlural' => 'books',
      'columns' => [
            ['class'=>'yii\grid\SerialColumn'],
 [
         'attribute'=> 'Name of Items',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Cart::find()->where(['id'=>$data])->one();
        return $model['noi'];
           }
         ],
[
         'attribute'=> 'Date Registered',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Cart::find()->where(['dep'=>$data])->one();
        return $model['dr'];
           }
         ],
[
         'attribute'=> 'Date of Production',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Cart::find()->where(['id'=>$model->id])->one();
        return $model['dp'];
           }
         ],
        [
         'attribute'=> 'quantity',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Cart::find()->where(['id'=>$model->id])->one();
        return $model['quantity'];
           }
         ],
      [
         'attribute'=> 'Expire Date',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Cart::find()->where(['id'=>$model->id])->one();
        return $model['expairedate'];
           }
         ],
            
            //'shelflife',
            //'department',
            //'remark',
         ],
    ]); ?>
<?php Pjax::end(); ?>
</div>