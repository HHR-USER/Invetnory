<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\models\Assets;
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
         'options'=>[
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i>  Fixed Asset list</h3>',
        $mo=Assets::find()->where(['birrformat'=>'birr'])->one(),
        $moo=Assets::find()->where(['birrformat'=>'$'])->one(),
         $query=(new \yii\db\Query())->from('assets')->where(['birrformat'=>'birr']),
        $sum=$query->sum('cost'),
        $query1=(new \yii\db\Query())->from('assets')->where(['birrformat'=>'$']),
        $sum1=$query1->sum('totalcost'),
      'after'=>Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in dollar=>'.number_format($sum1).$moo->birrformat,[''], ['class' => 'btn btn-success','style'=>"float:right;margin-top:2%"]),
      //'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Createasset', ['createas'], ['class' => 'btn btn-primary','style'=>"float:right"]),
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
    'toggleDataOptions' => ['minCount' => 10],
    'itemLabelSingle' => 'stock',
    'itemLabelPlural' => 'stock',
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],
            //['class' => 'yii\grid\CheckboxColumn'],
          'id',
[
        'attribute'=>'NOA',
        'value'=>function ($data) {
          $var=app\models\Assets::find()->where(['id'=>$data->id])->one();
            return $var->NOA;
        },
       ], 
        'quantity',
        [
        'attribute'=>'MODEL',
        'value'=>function ($data) {
          $var=app\models\Assets::find()->where(['id'=>$data->id])->one();
            return $var->MODEL;//.$var->birrformat;
        },
       ], 
        [
        'attribute'=>'serial',
        'value'=>function ($data) {
          $var=app\models\Assets::find()->where(['id'=>$data->id])->one();
            return $var->serial;//.$var->birrformat;
        },
       ],
       'DATEPURCHASED',
  /*[
        'attribute'=>'purchasefrom',
        'value'=>function ($data) {
          $var=app\models\Assets::find()->where(['id'=>$data->id])->one();
            return $var->DUEDATE;//.$var->birrformat;
        },
       ],*/
    /*[
        'attribute'=>'cost',
        'value'=>function ($data) {
          $var=app\models\Assets::find()->where(['id'=>$data->id])->one();
            return $var->cost.$var->birrformat;
        },
       ],
     [
        'attribute'=>'quantity',
        'value'=>function ($data) {
          $var=app\models\Assets::find()->where(['id'=>$data->id])->one();
            return $var->quantity;
        },
       ],*/
    /* [
        'attribute'=>'Picture',
        'format'=>'html',    
        'value'=>function ($data) {
            return Html::img(Yii::getAlias('@web').'/uploads/'. $data['Picture'],
                ['width' => '70px']);
        },
       ],*/
/*[
        'attribute'=>'totalcost',
        'value'=>function ($data) {
         $query = (new \yii\db\Query())->from('assets');
        $sum=$query->sum('totalcost');
         return $sum;
        },
       ],*/
 [
              'format'=>'raw',
               'header'=>'Actions',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
           $id=$data->id; 
         $item=app\models\Assets::find()->where(['id'=>$id])->one(); 
         if($item->checkforserial!=1){             
return '<a data-method="post" data-confirm="Are you sure ?"'.Html::a('serial/model', ['assets/update', 'id' =>$id], ['class'=>'btn btn-xs btn-primary glyphicon glyphicon-plus']).'<a data-method="post" data-confirm="Are you sure ?"'.Html::a('update',['update1', 'id'=>$id,],['class'=>'btn btn-xs btn-success glyphicon glyphicon-edit']);
          }
else{
  return Html::a('View',['view', 'id'=>$id,],['class'=>'btn btn-xs btn-info glyphicon glyphicon-eye-open']).'<a data-method="post" data-confirm="Are you sure ?"'.Html::a('update',['update1', 'id'=>$id,],['class'=>'btn btn-xs btn-success glyphicon glyphicon-checkforserialedit']);
     // }},],
//[
//'format'=>'raw',
            //   'header'=>'Update',
             //   'headerOptions'=>['class'=>'kartik-sheet-style'],
              //'value'=>function($data){
          // $id=$data->id; 
  //return '<a data-method="post" data-confirm="Are you sure ?"'.Html::a('update',['update1', 'id'=>$id,],['class'=>'btn btn-xs btn-success glyphicon glyphicon-edit']);
       }}],],
    ]); 
     ?>
<?php
//$command=Yii::$app->db->createCommand("SELECT sum(totalcost) FROM assets");
//$sum=Yii::$app->db->createCommand($command)->execute();
//echo $sum;
//$query = (new \yii\db\Query())->from('assets');
//$sum = $query->sum('totalcost');
//echo $sum;
?>
<?php Pjax::end(); ?>
</div>