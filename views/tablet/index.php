<?php
use yii\helpers\Html;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TabletSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title='Tablets';
//$this->params['breadcrumbs'][]=$this->title;
?>
<div class="tablet-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php echo GridView::widget([
     'dataProvider'=>$dataProvider,
        'filterModel'=>$searchModel,
        'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
        'showPageSummary'=>false,
'panel'=>[
//'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i> Tablets Used Bt Field Collectors History</h3>',
 'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Add New Tablets',['create'],['class'=>'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
        'type'=>'info',
      ],
    'bootstrap'=>true,
    'hover'=>true,
    'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    'filterRowOptions'=>['class'=>'kartik-sheet-style'],
          'pjax'=>true,
        'emptyCell'=>'-',
        'tableOptions'=>['class'=>'table table-hover table-striped table-responsive table-condensed'],
       
    'toolbar'=>[ 
            '{export}',
            '{toggleData}',
            ],
      'toggleDataContainer'=>['class'=>'btn-group mr-2'],
    // set export properties
    'export'=>[
        'fontAwesome'=>true
    ],
      'persistResize'=>false,
    'toggleDataOptions'=>['minCount'=>10],
    'itemLabelSingle'=>'order',
    'itemLabelPlural'=>'order',
      'columns'=>[
            'id',
            'tablet_type:ntext',
            'model:ntext',
            'serial_no:ntext',
            'used_by:ntext',
			'mobile',
            //'date',
            //'register_by:ntext',
            //'dates',
            //['class'=>'yii\grid\ActionColumn'],
			['header'=>'Option','class'=>'yii\grid\ActionColumn','template'=>'{view}{update}'],
        ],
    ]); ?>
</div>
