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
<button onclick="myFunction()"></button>
<script>
function myFunction() {
  var x=document.getElementById("myDIV");
  var xx=document.getElementById("myDIVV");
  if (x.style.display==="none") {
    x.style.display="block";
      } 
  if (xx.style.display==="inline") {
    x.style.display = "none";
    xx.style.display = "block";
  }}
</script>
<script>
  var toggle = function() {
  var x = document.getElementById('myDIV');
    var xx=document.getElementById("myDIVV");
  if (x.style.display==='block'||x.style.display==='')
    x.style.display='none';
    xx.style.display='none';
  else
    x.style.display = 'block'
  }
</script>
<!--<input type="button" value="btn" onclick="toggle();">-->
<div class="consumables-index" style="float:left;width: 60%; overflow: auto;">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProvider,
       'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Available Stocks</h3>',
      //  'type'=>'info',
         ],
        'bootstrap' =>true,
        'hover'=>true,
      'containerOptions'=>['style'=>'overflow: auto'],
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
    'export'=>[
        'fontAwesome'=>true
    ],
    'persistResize'=>false,
    'toggleDataOptions'=>['minCount'=>10],
    'itemLabelSingle'=>'Stock',
    'itemLabelPlural'=>'Stock',
      'columns'=>[
/*[
          'attribute'=>'pc',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end||$var->expairedate==NULL){
       return $var->pc;
           }
  else{
        return " ";
           }},],*/
 [
          'attribute'=> 'noi',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end||$var->expairedate==NULL){
       return $var->noi;
           }
  else{
        return " ";
           }},],
  [
         'attribute'=> 'quantity',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end||$var->expairedate==NULL){
       return $var->quantity;
           }
  else{
            return "";
           }},],
  [         'format'=>'raw',
            'attribute'=>'Issued',
            'value'=>function($model){
                  $id=$model->id;
       $var =app\models\Consumables::find()->where(['id'=>$id])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end||$var->expairedate==NULL){
     return Html::button('Issuedto',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-share', 'onClick'=>"popup($id)"]);
   }
      else{
        return " ";
          }}],],
    ]); ?>
<?php Pjax::end(); ?>
</div>
<!--                             -->
<div id="myDIVV-1" style="float:right;width:40%; overflow:auto;display:inline;">
<?php Pjax::begin(); ?>
<?php //$parent_categories = Cart::find()->where(['id'=> null])->asArray()->one();?>
    <?php echo GridView::widget([
      'dataProvider'=>$dataProviderNew,
      'filterModel'=>$searchModelNew,
      'showPageSummary'=>false,
         'options'=>[
      'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Request Stocks</h3>',
       //'type'=>'info',
         ],
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
    'itemLabelSingle'=>'Request Stock',
    'itemLabelPlural'=>'Request Stock',
      'columns'=>[
   [
      'attribute'=>'fname',
      'value'=>function($model){
         $id=$model->id;
        $fn_data=app\models\Stock::find()->where(['id'=>$id])->one();
        $var=app\models\Request::find()->where(['id'=>$fn_data->vendorid])->one();
        return $var['fname'];
          }],
      [
         'attribute'=>'noi',
         'value'=>function($model){
          $id=$model->id;
          $var=app\models\Stock::find()->where(['id'=>$model->id])->one();
        return $var->noi;
          }],
   [
         'attribute'=> 'quantity',
         'format'=>'raw',
         'value'=>function($model){
      $var=app\models\Stock::find()->where(['id'=>$model->id])->one();
          return $var->quantity;
        }],
        [
          'attribute'=> 'Staff/Unit',
          'format'=>'raw',
          'value'=>function($model){
            $var=app\models\Request::find()->where(['id'=>$model->vendorid])->one();
            return $var->var_dep;
         }],
  ],]);?>
<?php Pjax::end(); ?>
</div>
<!--                             -->
<p>
<div id="myDIV-" style="float:bottom;width:100%;overflow: auto;display:nonle;">
<?php Pjax::begin(); ?>
<?php //$parent_categories = Cart::find()->where(['id'=> null])->asArray()->one();?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProviderOld,
       'filterModel'=>$searchModelOld,
        'showPageSummary'=>false,
         'options'=>[
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Issued Stock</h3>',
       //  'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddConsumablecatagory', [''], ['class' => 'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
        //'type'=>'info',
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
    'toggleDataOptions' => ['minCount'=>10],
    'itemLabelSingle' => 'Issued Stock',
    'itemLabelPlural' => 'Issued Stock',
      'columns' => [
        //    ['class' => 'yii\grid\SerialColumn'],
                 [
         'attribute'=> 'By',
         'format'=>'raw',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
  if(Yii::$app->user->identity->Type==$var->dep){
          return  $var->username;
        }
    else{
      return " ";
    }}
   ],
  [
         'attribute'=>'For',
         'format'=>'raw',
         'value'=>function($model){
  $var=app\models\Withdrow::find()->where(['id'=>$model->id])->one();
  if(Yii::$app->user->identity->Type==$var->dep){
   return $var->firstname."  ".$var->lastname;
 }
 else{
  return "";
      }}
    ],
  [
         'attribute'=> 'noi',
         'value'=>function($model){
      $var=app\models\Withdrow::find()->where(['id'=>$model->id])->one();
        if(Yii::$app->user->identity->Type==$var->dep){
          return  $var->noi;
        }
    else{
      return "";
    }}],
 [
         'attribute'=>'dt',
         'format'=>'raw',
         'value'=>function($model){
  $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
    if(Yii::$app->user->identity->Type==$var->dep){
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
    if(Yii::$app->user->identity->Type==$var->dep){
   return  $var->quantity;
       }
else{
  return "";
       }

        }],
[
    'format'=>'raw',
    'header'=>'Undo',
    'headerOptions'=>['class'=>'kartik-sheet-style'],
    'value'=>function($data){
 $id=$data->id;
   $var=app\models\Withdrow::find()->where(['id'=>$id])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if(Yii::$app->user->identity->Type==$var->dep){
return '<a data-method="post" data-confirm="Are you sure ?"'.Html::a('Undo',['consumables/undo','id' =>$id,],['class'=>'btn btn-xs btn-info fa fa-undo']);
       }}],
[
    'format'=>'raw',
    'header'=>'View',
    'headerOptions'=>['class'=>'kartik-sheet-style'],
    'value'=>function($data){
 $id=$data->id;
   $var=app\models\Withdrow::find()->where(['id'=>$id])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if(Yii::$app->user->identity->Type==$var->dep){
return Html::a('View',['withdrow/pview','id' =>$id,],['class'=>'btn btn-eye-open glyphicon glyphicon-eye-open']);
       }}],
         ],
    ]);?>
<?php Pjax::end(); ?>
</div>
</p>
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
     //var firstname=$("#consumables-firstname").val();
     //var lastname=$("#consumables-lastname").val();
     var wot=$("#consumables-wot").val();
     var quantity=$("#consumables-quantity").val();
     var personnelid=$("#consumables-personnelid").val();
     var dt=$("#consumables-dt").val();
     var office=$("#consumables-office").val();
     var consbarcode=$("#consumables-consbarcode").val();
     var id=$("#maternalid").val();
     if(personnelid ==''){
            alert("Please select the personnel id");
        }else if(office == ''){
            alert("Please fill office");
        }
else if(quantity== ''){
            alert("Please ente the quantity you want to Issued");
        }
    else{
  var href="<?=Yii::$app->request->baseUrl;?>/index.php/consumables/create2/"+"?id="+id+"&personnelid="+personnelid+"&wot="+wot+"&quantity="+quantity+"&dt="+dt+"&office="+office+"&consbarcode="+consbarcode;
      window.location.href=href;

          }}
</script> 
<div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Issued To</h4>
      </div>
      <div class="modal-body">
     <div class="row"> 
      <div class="col-lg-11">
    <div id="search1" style="display:inline;">  
          <?php
     $office=['Microlab'=>'MICROBIOLOGY LAB UNIT','Clinical'=>'CLINICAL','Pathology'=>'PATHOLOGY LAB UNIT','IT'=>'IT(Information Technology)','SBS'=>'SBS','Admin'=>'CHAMPS(PROJECT MANAGEMENT UNIT AND OPERATION UNIT)','KHDSS'=>'KHDSS','PSU'=>"PREGNANCY SURVEIILANCE UNIT"];
        ?>
      <?php $model = new app\models\Consumables();?>
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
<?=$form->field($model,'wot')->dropDownList(['For Units'=>'For Units','For Individual Person'=>'For Individual Person'],['prompt'=>'please select way...'])->label("Way of issuing stock") ?>
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
           'endDate'=>'today'

      ]
    ])?> 
<?= $form->field($model,'quantity')->textInput(['autocomplete'=>'off']) ?>
<?= $form->field($model,'office')->dropDownList($office,['prompt' =>'please select']) ?>
<?= $form->field($model, 'consbarcode')->textInput(["onmouseover"=>"this.focus();",'autocomplete'=>'off']) ?>
  <div class="modal-footer">
        <input type="hidden" value="" id="maternalid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="followup()">Submit</button>
      </div>
    </div></div></div></div>
    <?php ActiveForm::end(); ?>
    </div></div></div></div>

