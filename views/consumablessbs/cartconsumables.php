<?php

use yii\helpers\Html;
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
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumables-index" style="float:left;width: 50%; overflow: auto;">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProvider,
       'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Stocks</h3>',
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
 [
          'attribute'=> 'noi',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablessbs::find()->where(['id'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end){
       return $var->noi;
           }
  else{
        return "";
           }},],
       [
          'attribute'=> 'lot',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablessbs::find()->where(['id'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end||$var->expairedate==NULL){
       return $var->lot;
           }
  else{
        return "";
           }},],
  [
         'attribute'=> 'quantity',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablessbs::find()->where(['id'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end||$var->expairedate==NULL){
       return $var->quantity;
           }
  else{
            return "";
           }},],
   [
         'attribute'=> 'cost',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablessbs::find()->where(['id'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end||$var->expairedate==NULL){
       return $var->cost.$var->birrformat;
           }
           else{
            return "";
           }},],
  [         'format'=>'raw',
            'attribute'=>'Transfer',
            'value'=>function($model){
                  $id=$model->id;
       $var =app\models\Consumablessbs::find()->where(['id'=>$id])->one();
       //$id=$var->id;
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end||$var->expairedate==NULL){
     return Html::button('Transferto',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-share', 'onClick'=>"popup($id)"]);
   
  
         }
      else{
        return " ";
           }
     }
    ],
         ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
<div class="consumables-index" style="float:right;width: 50%; overflow: auto;">
<?php Pjax::begin(); ?>
<?php //$parent_categories = Cart::find()->where(['id'=> null])->asArray()->one();?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProviderOld,
       'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Stocks</h3>',
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
         'attribute'=> 'By',
         'format'=>'raw',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
 if($var->dep=="SBS"){
   return  $var->username;
        }
    else{
      return "";
      }}],
  [
         'attribute'=> 'For',
         'format'=>'raw',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
 if($var->dep=="SBS"){
   return  $var->firstname."  ".$var->lastname;
        }
        else{
      return "";
      }}
    ],
  [
         'attribute'=> 'noi',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
 if($var->dep=="SBS"){
   return  $var->noi;
        }
  else{
      return "";
      }}],
 [
         'attribute'=> 'lot',
         'format'=>'raw',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
 if($var->dep=="SBS"){
   return  $var->lot;
        }
        else{
      return "";
      }}
         ],
 [
         'attribute'=> 'dt',
         'format'=>'raw',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
 if($var->dep=="SBS"){
   return  $var->dt;
        }
        else{
      return "";
      }}],
  [
         'attribute'=> 'quantity',
         'format'=>'raw',
         'value'=>function($model){
  $var=app\models\Withdrow::find()->where(['id'=>$model->id])->one();
 if($var->dep=="SBS"){
   return  $var->quantity;
        }
        else{
      return "";
      }}
         ],
[
    'format'=>'raw',
    'header'=>'Undo',
    'headerOptions'=>['class'=>'kartik-sheet-style'],
    'value'=>function($data){
 $id=$data->id;
        $var =app\models\Withdrow::find()->where(['id'=>$id])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($var->dep=="SBS"){
return '<a data-method="post" data-confirm="Are you sure ?"'.Html::a('Undo',['consumablessbs/undo','id' =>$id,],['class'=>'btn btn-xs btn-info fa fa-undo']);
       }}],
         ],
    ]);?>
<?php Pjax::end(); ?>
</div>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(id){
       $("#maternalid").val(id);
       $("#consentModal").modal('show');
      
    }    
    function followup()
    {
     var quantity=$("#consumablessbs-quantity").val();
     var personnelid=$("#consumablessbs-personnelid").val();
     var dt=$("#consumablessbs-dt").val();
     var office=$("#consumablessbs-office").val();
     var id=$("#maternalid").val();
if(personnelid ==''){
            alert("Please select the personnel id");
        }
else if(office==''){
            alert("Please fill office");
        }
else if(quantity==''){
            alert("Please enter quantity");
        }
    else{
  var href="<?=Yii::$app->request->baseUrl;?>/index.php/consumablessbs/create2/"+"?id="+id+"&personnelid="+personnelid+"&quantity="+quantity+"&dt="+dt+"&office="+office;
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
     <div class="row"> 
      <div class="col-lg-11">
    <div id="search1" style="display:inline;">  
          <?php
     $office=['Admin'=>'CHAMPS','Microlab'=>'Microlab','Clinical'=>'Clinical','Pathology'=>'Pathology','IT'=>'IT(Information Technology)','SBS'=>'SBS'];
        ?>
      <?php $model = new app\models\Consumablessbs();?>
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
             $('#consumables-firstname').val(data.firstname);
             $('#consumables-personnelid').val(data.personnelid);
             $('#consumables-office').val(data.office);
        },
        beforeSend: function (xhr) {
            alert('loading sure!');
        },
    });
}
JS;
$this->registerJs($js, \yii\web\View::POS_READY);
?>
<div class="borrow-form">
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
<?= $form->field($model, 'dt')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date of Date of Checking ...'],
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
    ])?> 
<?= $form->field($model,'quantity')->textInput() ?>
<?= $form->field($model,'office')->dropDownList($office,['prompt' =>'please select']) ?>
  <div class="modal-footer">
        <input type="hidden" value="" id="maternalid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="followup()">Submit</button>
      </div>
          </div></div></div></div>
              <?php ActiveForm::end(); ?>

    </div>
  </div>

</div>
