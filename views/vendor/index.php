<?php
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VendorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendor-index">
<?php Pjax::begin(); ?>
     <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
        'showPageSummary'=>false,
'panel'=>[
   'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Vendor List</h3>',
    'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Create Vendor', ['create'], ['class' => 'btn btn-primary','style'=>'float:right']),//'onclick'=>'popup()']),
       // 'type'=>'info',
         ],
        'bootstrap'=>true,
        'hover'=>true,
      'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
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
    'itemLabelSingle' => 'Vendor',
    'itemLabelPlural' => 'Vendor',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //'id',
            'vendorid',
            'vendorname',
            'vendormiddlename',
            'contactname',
            'email:email',
            //'Address1',
            //'Address2',
            //'City',
            //'State',
            //'PostalCode',
            //'Country',
            //'VendorNumber',
            //'DateUpdated',
            //'DateCreated',
            //'Website',

          //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
