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
?>
<div class="assets-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Asset equipment clinical storehouse</h3>',
      //'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Createasset', ['createas'], ['class' => 'btn btn-primary','style'=>"float:right"]),
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
    'itemLabelSingle' => 'Stock',
    'itemLabelPlural' => 'Stock',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //['class' => 'yii\grid\CheckboxColumn'],
            'catagoryname',
            'unit',
            'serial',
            'MODEL',
            'serviceyear',
            'quantity',
            'shelfno',
            'shelflife',
            'shelfname',
            'shelfno',
            'cost',
            'totalcost',
            'NOA',
            'DOM',
            'DOC',
            'RD',
            'TD',
            'Status',
            'Place',
            'RC',
     [
        'attribute'=>'Picture',
        'format'=>'html',    
        'value'=>function ($data) {
            return Html::img(Yii::getAlias('@web').'/uploads/'. $data['Picture'],
                ['width' => '70px']);
        },
       ],
        'MANUFACTURER',
        'LOCATION',
        'DATEWARRANTYEXPIRES',
        'NOTES',

        ],
       
    ]); 
     ?>
    <?php Pjax::end(); ?>
