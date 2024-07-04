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
<div class="assets-index" style="width:100%">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i>  HARARGHE HEALTH RESEARCH PARTNERSHIP FIXED ASSET List/ CAPITALISED ASSET</h3>',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Create Fixed asset', ['cfixed'], ['class' => 'btn btn-success','style'=>'float:right']),
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
    'toggleDataOptions' => ['minCount' =>30],
    'itemLabelSingle' => 'Stock',
    'itemLabelPlural' => 'Stock',
        'columns' => [
            ['header'=>'Seq','class'=>'yii\grid\SerialColumn'],
           'asset_code',
            'NOA',
            'serial',
            'facl',
            'MODEL',
            'LOCATION',
            'DATEPURCHASED',
            'cost',
            'NOTES',
            //'dep',
            //'quantity',
['format'=>'raw',
 'header'=>'Action',
 'headerOptions'=>['class'=>'kartik-sheet-style'],
 'value'=>function($data){
      return Html::a('View',['fview','id'=>$data->id],['class'=>'btn btn btn-sucess glyphicon glyphicon-ok']).Html::a('Edit',['fupdate','id'=>$data->id],['class'=>'btn btn-xs btn-sucess glyphicon glyphicon-edit']).
      " ".Html::a('Lost>>',['lost','id'=>$data->id],['class'=>'btn btn-trush glyphicon glyphicon-ok']);
  },],
       ],]); 
     ?>
    <?php Pjax::end(); ?>
</div>