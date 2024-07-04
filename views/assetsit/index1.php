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
<div class="assetsit-index">
<?php Pjax::begin(); ?>
<?php echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'showPageSummary' => true,
    'pjax' => true,
    'striped' => true,
    'hover' => true,
    'panel' => ['type' => 'info', 'heading' => 'Assets currently availabel in IT(Information Technology) store'],
    'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    'columns' => [
        //['class' => 'kartik\grid\SerialColumn'],
        [
            'attribute' => 'NOA', 
            'width' => '310px',
            'value' => function ($model, $key, $index, $widget) { 
                return $model->NOA;
            },
            'filterType' => GridView::FILTER_SELECT2,
            'filter' => ArrayHelper::map(app\models\Assetsit::find()->orderBy('NOA')->asArray()->all(), 'id', 'NOA'), 
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Any item'],
            'group' => true,  // enable grouping
        ],
    [
    'attribute' => 'serial',
    'pageSummary' => 'Summary',
    'pageSummaryOptions' => ['class' => 'text-right'],
'value' => function ($model, $key, $index, $widget) { 
                return $model->serial;
            },
        ],
        [
            'attribute' => 'MODEL',
            'width' => '150px',
            'hAlign' => 'right',
            //'format' => ['decimal', 0],
           // 'pageSummary' => true
        ],
  [
            'attribute' => 'cost',
            'width' => '150px',
            'hAlign' => 'right',
            //'format' => ['decimal', 0],
            'pageSummary' => true,
'value' => function ($model, $key, $index, $widget) { 
                return $model->cost.$model->birrformat;
            },
        ],
    ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
