<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumablespathology-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'showPageSummary' => true,
    'pjax' => true,
    'striped' => true,
    'hover' => true,
    'panel' => ['type' => 'info', 'heading' => 'Consumables currently availabel in pathology store'],
    'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    'columns' => [
        ['class' => 'kartik\grid\SerialColumn'],
        [
            'attribute' => 'noi', 
            'width' => '310px',
            'value' => function ($model, $key, $index, $widget) { 
                return $model->noi;
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => ArrayHelper::map(app\models\Consumablespathology::find()->orderBy('noi')->asArray()->all(), 'id', 'noi'), 
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Any item'],
            'group' => true,  // enable grouping
        ],
    [
            'attribute' => 'lot',
            'pageSummary' => 'Summary',
            'pageSummaryOptions' => ['class' => 'text-right'],
        ],
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
           // 'format' => ['decimal', 0],
            'pageSummary' => true,
            'value' => function ($model, $key, $index, $widget) { 
                return $model->cost.$model->birrformat;
            },
        ],
        [
            'attribute' => 'Totalcost',
            'width' => '150px',
            'hAlign' => 'right',
            //'format' => ['decimal', 0],
            'pageSummary' => true,
             'value' => function ($model, $key, $index, $widget) { 
                return $model->quantity*$model->cost.$model->birrformat;
            },
        ],
    ],
    ]); ?>
<?php Pjax::end(); ?>
</div>

