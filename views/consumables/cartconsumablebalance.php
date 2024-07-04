<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\Cart;
use yii\data\SqlDataProvider;
use yii\helpers\ArrayHelper;
use yii\data\CActiveDataProvider;
use kartik\select2\Select2;
use app\models\Personnel;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<!--                             -->
<p>
<div id="myDIV-" style="float:bottom;width:100%;overflow: auto;display:nonle;">
<?php Pjax::begin(); ?>
<?php //$parent_categories = Cart::find()->where(['id'=> null])->asArray()->one();?>
    <?php echo GridView::widget([
      'dataProvider'=>$dataProvider,
       'filterModel'=>$searchModel,
        'showPageSummary'=>false,
         'options'=>[
           'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel'=>[
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i> Issued Stock</h3>',
       //  'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddConsumablecatagory', [''], ['class' => 'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
        'type'=>'success',
         ],
        'bootstrap' =>true,
        'hover'=>true,
      'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    'filterRowOptions'=>['class'=>'kartik-sheet-style'],
          'pjax'=>true,
        'emptyCell'=>'-',
        'tableOptions' =>['class'=>'table table-hover table-striped table-responsive table-condensed'],
       
    'toolbar'=> [ 
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
    'itemLabelSingle'=>'Issued Stock',
    'itemLabelPlural'=>'Issued Stock',
      'columns'=>[
        ['class'=>'yii\grid\SerialColumn'],
                 [
         'attribute'=>'By',
         'format'=>'raw',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
	  return $var->username;
   }
   ],
  [
    'attribute'=>'For',
    'format'=>'raw',
    'value'=>function($model){
        $var=app\models\Withdrow::find()->where(['id'=>$model->id])->one();
        return $var->firstname."  ".$var->lastname;
 }],
  [
         'attribute'=>'noi',
         'value'=>function($model){
      $var=app\models\Withdrow::find()->where(['id'=>$model->id])->one();
          return  $var->noi;
    }],
 [
         'attribute'=>'dt',
         'format'=>'raw',
         'value'=>function($model){
  $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
    //if(Yii::$app->user->identity->Type==$var->dep){
        return  $var->dt;
       // }
 }],
  [
         'attribute'=> 'quantity',
         'format'=>'raw',
         'value'=>function($model){
  $var=app\models\Withdrow::find()->where(['id'=>$model->id])->one();
    //if(Yii::$app->user->identity->Type==$var->dep){
   return  $var->quantity;
      // }
        }],
		'office',
[
    'format'=>'raw',
    'header'=>'View',
    'headerOptions'=>['class'=>'kartik-sheet-style'],
    'value'=>function($data){
 $id=$data->id;
   $var=app\models\Withdrow::find()->where(['id'=>$id])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
return Html::a('View',['withdrow/pview','id' =>$id,],['class'=>'btn btn-eye-open glyphicon glyphicon-eye-open']);
       }],
         ],
    ]);?>
<?php Pjax::end(); ?>
</div>
