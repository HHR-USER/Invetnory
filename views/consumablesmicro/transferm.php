<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use \app\models\Maternal;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\Cart;
use app\models\Assets;
use app\models\Massets;
use yii\data\SqlDataProvider;
use yii\helpers\ArrayHelper;
use yii\data\CActiveDataProvider;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="massets-index" style="float:left;width: 50%; overflow: auto;">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProvider,
       'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Assets</h3>',
       //  'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddConsumablecatagory', [''], ['class' => 'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
        'type'=>'primary',
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
    'itemLabelSingle' => 'book',
    'itemLabelPlural' => 'items',
      'columns' => [
         'NOA',
         'catagoryname',
         'quantity',
  [ 'format'=>'raw',
            'header'=>'Transfer to',
            'headerOptions'=>['class'=>'kartik-sheet-style'],
            'value'=>function($data){
                  $ids=$data->id;
          $model =Assets::find()->where(['id'=>$ids])->one();
          $idd=$model->id;
    return Html::button('Transferto',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-cog', 'onClick'=>"popup($idd)"]);
   
              } 
            ],
         ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
<div class="massets-index" style="float:right;width: 50%; overflow: auto;">
<?php Pjax::begin(); ?>
<?php //$parent_categories = Cart::find()->where(['id'=> null])->asArray()->one();?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProviderOld,
       'filterModel'=>$searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Assets</h3>',
       //  'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddConsumablecatagory', [''], ['class' => 'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
        'type'=>'primary',
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
    'itemLabelSingle' => 'book',
    'itemLabelPlural' => 'items',
      'columns' => [
        //    ['class' => 'yii\grid\SerialColumn'],
                 [
         'attribute'=> 'Transfer by',
         'headerOptions'=>["class"=>"text-danger"],
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Massets::find()->where(['id'=>$data->id])->one();
   return  $var->username;
        }
         ],
  [
         'attribute'=> 'Transfer To',
         'headerOptions'=>["class"=>"text-danger"],
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Massets::find()->where(['id'=>$data->id])->one();
   return  $var->fname."  ".$var->lname;
        }
         ],
            'mobile',
            'catagoryname',
            'NOA',
            'quantity',
         ],
    ]);?>
<?php Pjax::end(); ?>
</div>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(idd){
       $("#massetsid").val(idd);
       $("#consentModal").modal('show');
      
    }    
    function massets()
       {
var fname=$("#massets-fname").val();
var lname=$("#massets-lname").val();
var mobile=$("#massets-mobile").val();
var quantity=$("#massets-quantity").val();
var office=$("#massets-office").val();
var id=$("#massetsid").val();
 if(fname==''){
            alert("Please enter firstname");
        }
   if(lname==" "){
            alert("Please enter lastname");
        }
   if(mobile==''){
            alert("Please enter mobile");
        }
    if(quantity==''){
            alert("Please enter quantity");
        }
    if(office==''){
            alert("Please enter department");
        }
    else{
var href="<?=Yii::$app->request->baseUrl;?>/index.php/assets/create2/"+"?id="+id+"&fname="+fname+"&lname="+lname+"&mobile="+mobile+"&quantity="+quantity+"&office="+office;
        window.location.href=href;
          }}
</script> 
<div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Transfer To</h4>
      </div>
      <div class="modal-body">
          <?php
     $office=['Microlab'=>'Microlab','Clinical'=>'Clinical','Pathology'=>'Pathology','Personnel'=>'Personnel'];
        ?>
<?php 
$model = new app\models\Massets();?>
<?php $form=ActiveForm::begin(); ?>
<?=$form->field($model,'fname')->textInput(['maxlenght'=>true]);?>
<?=$form->field($model,'lname')->textInput(['maxlenght'=>true]);?>
<?= $form->field($model,'mobile')->textInput(['maxlength' =>10]) ?>
<?= $form->field($model,'quantity')->textInput(['maxlength' => true]) ?>
<?= $form->field($model,'office')->dropDownList($office,['prompt' =>'please select']) ?>
  <div class="modal-footer">
        <input type="hidden" value="" id="massetsid"/>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="massets()">Submit</button>
      </div></div></div></div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
