<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\Consumables;
use yii\helpers\ArrayHelper;
error_reporting(1);
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
    'showPageSummary' => true,
    'pjax' => true,
    'striped'=>true,
    'hover' =>true,
    'panel'=>[//'type' => 'info',
     'heading' => 'Consumables currently availabel in CHAMPS store'],
    'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    'columns'=>[
    ['header'=>'Seq','class'=>'yii\grid\SerialColumn'],
        [
            'attribute'=>'noi', 
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->noi;
            },
            'filterType'=>GridView::FILTER_SELECT2,
            'filter' => ArrayHelper::map(Consumables::find()->orderBy('noi')->asArray()->all(), 'noi', 'noi'), 
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear' =>true],
            ],
            'filterInputOptions' => ['placeholder' => 'Any item'],
            'group' => true,  // enable grouping
        ],
[
            'attribute' => 'lot',
            'pageSummary' => 'Summary',
            'pageSummaryOptions' => ['class' => 'text-right'],
        ],
        'expairedate',
        'store',
[
            'attribute' => 'quantity',
            'width' => '150px',
            'hAlign' => 'right',
            'format' => ['decimal', 0],
            'pageSummary' => true
        ],
[
            'attribute' => 'cost',
            'width' => '150px',
            'hAlign' => 'right',
            'format'=>['decimal', 0],
            'pageSummary'=>true
        ],
    [
    'attribute'=>'Totalcost', 
            'value'=>function ($model, $key, $index, $widget) { 
    return number_format($model['cost']*$model['quantity'],2).$model['birrformat'];
},],
[
        'format'=>'raw',
        'headerOptions'=>['style'=>'background-color:white;color:red'],
         'attribute'=> 'Status',
         'value'=>function($model){
   $var=app\models\Consumables::find()->where(['id'=>$model->id])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($var->quantity<10){
 return Html::button('Low',['class'=>'btn btn-xs btn-danger glyphicon glyphicon-remove']);
           }
   else{
 return Html::button('Sufficient',['class'=>'btn btn-xs btn-success glyphicon glyphicon-ok']);
   }
   }],],
    ]); ?>
<?php Pjax::end(); ?>
</div>
