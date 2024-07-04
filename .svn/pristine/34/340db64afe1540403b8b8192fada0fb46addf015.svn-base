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
    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,
    'showPageSummary'=>true,
    'pjax'=>true,
    'striped'=>true,
    'hover'=>true,
    'panel'=>['type'=>'success',
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i> Fixed Asset list in the main store</h3>'],
    'toggleDataContainer'=>['class'=>'btn-group mr-2'],
    'columns'=>[
            ['header'=>'Seq','class'=>'yii\grid\SerialColumn'],
			'NOA',
			'serial',
			'MODEL',
			'quantity',
			'cost',
            'MANUFACTURER',
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
 'format'=>'raw',
 'header'=>'Actions',
 'headerOptions'=>['class'=>'kartik-sheet-style'],
 'value'=>function($data){
 $id=$data->id; 
         $item=app\models\Assets::find()->where(['id'=>$id])->one(); 
          return Html::a('View',['view','id'=>$id,],['class'=>'btn btn-xs btn-info glyphicon glyphicon-eye-open']);
			  }
     
    ],],
    ]); ?>
<?php Pjax::end(); ?>
</div>
