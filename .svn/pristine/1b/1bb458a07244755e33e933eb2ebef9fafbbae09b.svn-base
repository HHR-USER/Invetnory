<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\models\Catagory;
use app\models\CatagorySearch;
use app\models\Assets;
use app\models\AssetsSearch;
use app\models\OrderEq;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Massets;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AssetsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
error_reporting(1);
?>
<div class="assets-index">
  <?php Pjax::begin(); ?>
<?php echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'showPageSummary' => true,
    'pjax'=>true,
    'striped'=>true,
    'hover'=>true,
    'panel'=>['type'=>'success',
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i> Fixed Asset Status</h3>'],
    'toggleDataContainer'=>['class'=>'btn-group mr-2'],
    'columns' => [
            ['header'=>'Seq','class'=>'yii\grid\SerialColumn'],
        [
            'attribute'=>'NOA', 
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->NOA;
            },
            'filterType'=>GridView::FILTER_SELECT2,
            'filter' => ArrayHelper::map(Assets::find()->orderBy('NOA')->asArray()->all(), 'NOA', 'NOA'), 
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear' =>true],
            ],
            'filterInputOptions' => ['placeholder' => 'Any item'],
            'group' => true,  // enable grouping
        ],
    [
    'attribute'=>'serial',
    'pageSummary'=>'Summary',
    'pageSummaryOptions'=>['class'=>'text-right'],
'value' => function ($model,$key,$index,$widget) { 
                return $model->serial;
            },
        ],
        [
            'attribute'=>'MODEL',
            'width'=>'150px',
            'hAlign'=>'right',
            //'format' => ['decimal', 0],
           // 'pageSummary' => true
        ],
        [
            'attribute' => 'MANUFACTURER',
            'width' => '150px',
            'hAlign' => 'right',
            //'format' => ['decimal', 0],
           // 'pageSummary' => true
        ],
/*[
            'attribute'=>'quantity',
            'width' => '150px',
            'hAlign' => 'right',
            'format' => ['decimal', 0],
           'pageSummary' => true
        ],*/
 [
            'attribute'=>'quantity',
           'pageSummary'=>true,			
            'value'=>function($model, $key, $index, $widget) { 
                return $model->quantity;
            },
            'filterType'=>GridView::FILTER_SELECT2,
            'filter'=>ArrayHelper::map(Assets::find()->orderBy('quantity')->asArray()->all(),'quantity','quantity'), 
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
            ],
            'filterInputOptions'=>['placeholder'=>'Filter'],
            'group'=>true,  // enable grouping
        ],
  [
            'attribute'=>'cost',
            'width'=>'150px',
            'hAlign'=>'right',
            //'format' => ['decimal', 0],
            'pageSummary'=>true,
'value'=>function ($model, $key,$index,$widget) { 
                return $model->cost.$model->birrformat;
            },
        ],
 [
            'attribute'=>'yearlyreport',
            'value'=>function($model,$key,$index,$widget) { 
                return $model->yearlyreport;
            },
            'filterType'=>GridView::FILTER_SELECT2,
            'filter'=>ArrayHelper::map(Assets::find()->orderBy('yearlyreport')->asArray()->all(),'yearlyreport','yearlyreport'), 
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
            ],
            'filterInputOptions'=>['placeholder'=>'Filter'],
            'group'=>true,  // enable grouping
        ],
[
        'format'=>'raw',
        'headerOptions'=>['style'=>'background-color:white;color:red'],
         'attribute'=> 'status',
         'value'=>function($model){
   $var=app\models\Assets::find()->where(['id'=>$model->id])->one();
  if($var->quantity<10){
 return Html::button('Low',['class'=>'btn btn-xs btn-danger glyphicon glyphicon-remove']);
           }
   else{
 return Html::button('Sufficient',['class'=>'btn btn-xs btn-success glyphicon glyphicon-ok']);
   }
   }],
    ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
