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
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Asset list</h3>',
        $mo=Assets::find()->where(['birrformat'=>'birr'])->one(),
        $moo=Assets::find()->where(['birrformat'=>'$'])->one(),
         $query=(new \yii\db\Query())->from('assets')->where(['birrformat'=>'birr']),
        $sum=$query->sum('cost'),
        $query1=(new \yii\db\Query())->from('assets')->where(['birrformat'=>'$']),
        $sum1=$query1->sum('cost'),
        //'after'=>Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in birr=>'.number_format($sum).$mo->birrformat."         ".'<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in dollar=>'.number_format($sum1).$moo->birrformat,[''], ['class' => 'btn btn-success','style'=>"float:right;margin-top:2%"]),
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
    'itemLabelSingle' => 'stock',
    'itemLabelPlural' => 'stock',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //['class' => 'yii\grid\CheckboxColumn'],  
[
        'attribute'=>'NOA',
        'value'=>function ($data) {
          $var=app\models\Assetssbs::find()->where(['id'=>$data->id])->one();
            return $var->NOA;
        },
       ],  

[
        'attribute'=>'ASSETID',
        'value'=>function ($data) {
          $var=app\models\Assetssbs::find()->where(['id'=>$data->id])->one();
            return $var->ASSETID;
        },
       ],
        [
        'attribute'=>'serial',
        'value'=>function ($data) {
          $var=app\models\Assetssbs::find()->where(['id'=>$data->id])->one();
            return $var->serial;//.$var->birrformat;
        },
       ],
    [
        'attribute'=>'cost',
        'value'=>function ($data) {
          $var=app\models\Assetssbs::find()->where(['id'=>$data->id])->one();
            return $var->cost.$var->birrformat;
        },
       ],
[
              'format'=>'raw',
               'header'=>'View',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($model){
       $data=$model->id;
        $var =app\models\Assetssbs::find()->where(['id'=>$data])->one();
    return Html::a('View',['view','id'=>$data,],['class'=>'btn btn-xs btn-primary glyphicon glyphicon-eye-open']);
          }],
     ],
    ]); 
     ?>
<?php Pjax::end(); ?>
</div>