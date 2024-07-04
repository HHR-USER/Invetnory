<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\helpers\Url;
use kartik\grid\GridView;
use \app\models\Maternal;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\Cart;
use app\models\Assets;
use kartik\select2\Select2;
use app\models\Cartassets;
use yii\data\SqlDataProvider;
use yii\helpers\ArrayHelper;
use yii\data\CActiveDataProvider;
use\app\models\Personnel;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assets-index" style="float:left;width: 50%; overflow: auto;">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProvider,
       'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Stock</h3>',
       //  'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddConsumablecatagory', [''], ['class' => 'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
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
        //'lotnumber',
[
         'attribute'=> 'NOA',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Assetsit::find()->where(['id'=>$data->id])->one();
   return  $var->NOA;
        }],
  [
         'attribute'=> 'serial',
         'format'=>'raw',
         'value'=>function($data){
  $var=app\models\Assetsit::find()->where(['id'=>$data->id])->one();
   return  $var->serial;
        }],
[ 'attribute'=>'cost',
            'value'=>function($data){
                  $id=$data->id;
          $var=app\models\Assetsit::find()->where(['id'=>$id])->one();
             return $var->cost.$var->birrformat;
              } 
            ],
  [ 'format'=>'raw',
            'header'=>'Transfer to',
            'value'=>function($data){
                  $ids=$data->id;
          $model =app\models\Assetsit::find()->where(['id'=>$ids])->one();
          $idd=$model->id;
    return Html::button('Transferto',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-share', 'onClick'=>"popup($idd)"]);
   
              } 
            ],
         ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
<div class="assets-index" style="float:right;width: 50%; overflow: auto;">
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
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>stock</h3>',
       //  'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddConsumablecatagory', [''], ['class' => 'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
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
        //    ['class' => 'yii\grid\SerialColumn'],
                 [
         'attribute'=> 'Transfer by',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Cartassets::find()->where(['id'=>$data->id])->one();
if($var->dep=="IT"){
   return  $var->username;
        }
else{
  return "";
  }}],
  [
         'attribute'=> 'Transfer To',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Cartassets::find()->where(['id'=>$data->id])->one();
if($var->dep=="IT"){
   return  $var->fname."  ".$var->lname;
        }
else{
  return "";
         }}
         ],
[
         'attribute'=> 'NOA',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Cartassets::find()->where(['id'=>$data->id])->one();
if($var->dep=="IT"){
   return  $var->NOA;
        }
else{
  return "";
         }}],
[
         'attribute'=> 'serial',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Cartassets::find()->where(['id'=>$data->id])->one();
if($var->dep=="Admin"){
   return  $var->serial;
        }
else{
  return "";
         }}],
 [
         'attribute'=> 'cost',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Cartassets::find()->where(['id'=>$data->id])->one();
if($var->dep=="IT"){
   return  $var->cost;
        }
else{
  return "";
         }}
         ],
[
         'attribute'=> 'Return',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Cartassets::find()->where(['id'=>$data->id])->one();
      $id=$var->id;
if($var->dep=="IT"&&$var->returnables=='Y'){
return Html::button('Return',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-circle-arrow-left', 'onClick'=>"popup1($id)"]);
           }
else{
  return "";
         }}
         ],
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
 function popup1(id){
       $("#assetsid").val(id);
       $("#consentModa").modal('show');
      
    }    
  function massets()
       {
//var fname=$("#assets-fname").val();
//var lname=$("#assets-lname").val();
var personnelid=$("#assets-personnelid").val();
//var quantity=$("#assets-quantity").val();
var office=$("#assets-office").val();
var returnables=$("#assets-returnables").val();
var doreturnable=$("#assets-doreturnable").val();
var id=$("#massetsid").val();
if(personnelid ==''){
            alert("Please select the personnel id");
        }else if(office == ''){
            alert("Please fill office");
        }
else if(returnables == ''){
            alert("Please complete whether it is returnables or not");
        }
    else{
var href="<?=Yii::$app->request->baseUrl;?>/index.php/assetsit/create2/"+"?id="+id+"&personnelid="+personnelid+"&office="+office+"&returnables="+returnables+"&doreturnable="+doreturnable;
        window.location.href=href;
          }}
    function returndata()
       {
//var quantity=$("#cartassets-quantity").val();
var id=$("#assetsid").val();
var href="<?=Yii::$app->request->baseUrl;?>/index.php/assetsit/create3/"+"?id="+id;
        window.location.href=href;
          }
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
     $office=['Admin'=>'CHAMPS','Microlab'=>'Microlab','Clinical'=>'Clinical','Pathology'=>'Pathology','SBS'=>'SBS','IT'=>'IT(Information Technology)'];
     $returnables=['Y'=>'Yes','N'=>'No'];
        ?>
<?php 
$model = new app\models\Assets();?>
<?php $form=ActiveForm::begin(); ?>
<?php
$routeAjax = \yii\helpers\Url::toRoute("personnel/index");
$js=<<<JS
function getRelatedFields(personnelid){
    $.ajax({
        url:'$routeAjax',
        dataType:'json',
        method:'GET',
        data:{personnelid:personnelid},
        success:function (data) {
             $('#assets-fname').val(data.fname);
             $('#assets-lname').val(data.lname);
             $('#assets-personnelid').val(data.personnelid);
             $('#assets-office').val(data.office);
        },
        beforeSend: function (xhr) {
            alert('loading sure!');
        },
    });
}
JS;
$this->registerJs($js, \yii\web\View::POS_READY);
?>
<div class="assets-form">
<?php
$idd=1.1;
//$models=Vendor::find()->where('id'!=$idd)->all();
        $var = ArrayHelper::map(Personnel::find()->where('personnelid'!=$idd)->all(), 'personnelid',
            function ($model) {
                return $model['personnelid'] .' '. $model['firstname']."   ".$model['lastname'];
            });
            ?>
<?= $form->field($model, 'personnelid')->widget(Select2::classname(), [
            'data' => $var,
            'options' => ['placeholder' => 'Select  personnelid ...'],
            'pluginOptions' => [
                'depends' => [''],
                'url' => Url::to(['#'])
            ],
        ]); ?> 
<?= $form->field($model,'office')->dropDownList($office,['prompt' =>'please select']) ?>
<?= $form->field($model, 'returnables')->dropDownList($returnables,['prompt'=>'--please select--','onChange'=>'returnables_fun($(this).val())'])  ?>
<span class="returnables hide">
    <?= $form->field($model,'doreturnable')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date of returnable ...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'changeYear'     => true,
           'changeMonth'    => true,
           'startDate'=>'today',
           'endDate'=>'today'

      ]
    ])?></span>
  <div class="modal-footer">
        <input type="hidden" value="" id="massetsid"/>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="massets()">Submit</button>
      </div></div></div></div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
<div class="modal fade" id="consentModa" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Return assets</h4>
      </div>
      <div class="modal-body">
<?php
$model=new app\models\Cartassets();?>
<?php $form=ActiveForm::begin(); ?>
  <div class="modal-footer">
        <input type="hidden" value="" id="assetsid"/>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="returndata()">Submit</button>
      </div></div></div></div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
<script type="text/javascript">
function returnables_fun(val)
            {
  if(val=="Y")
                {
         $(".returnables").removeClass('hide');
                  }
  else{
             $(".returnables").addClass('hide');
               }}
</script>