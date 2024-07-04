<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\Assets;
use kartik\select2\Select2;
use yii\data\SqlDataProvider;
use yii\helpers\ArrayHelper;
use\app\models\Personnel;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assets-index" style="float:left;width:60%; overflow: auto;">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProvider,
       'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
          'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel'=>[
     'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i>  Available fixed assets</h3>',
       'type'=>'success',
         ],       
    'toolbar'=> [ 
            '{export}',
            '{toggleData}',
            ],
      'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    // set export properties
    'export' => [
        'fontAwesome' => true
    ],
    'persistResize'=>false,
    'toggleDataOptions'=>['minCount'=>10],
    'itemLabelSingle' => 'goods',
    'itemLabelPlural'=>'goods',
      'columns'=>[
        'id',
  [
    'attribute'=> 'NOA',
    'format'=>'raw',
        'value'=>function($data){
      $var =app\models\Assets::find()->where(['id'=>$data->id])->one();
   return  $var->NOA;}],
           'model',
           'quantity',
   [
      'attribute'=>'quantity',
        'format'=>'raw',
        'value'=>function($model){
          $n='inledit'.$model->id;
      $form=ActiveForm::begin(['id'=>$n,'action'=>['update_up','id'=>$model->id], 'options' =>['name' => 'inleditfrm']]);
      $f=Html::activeTextInput($model,'quantity', ['form'=>$n,"oninput"=>"this.value=this.value.replace(/[^0a-9z]/g,'');", 'id'=>'inp'.$n, 'style' =>'width:100%;']);
      $btn=Html::submitButton(Yii::t('app', ''), ['class'=>'btn btn-primary btn-xs','style' => 'display: none;','form'=>$n]);
              ActiveForm::end();
          return $f.$btn;
          }],
    [ 'format'=>'raw',
            'header'=>'By',
            'value'=>function($data){
                  $ids=$data->id;
          $model =Assets::find()->where(['id'=>$ids])->one();
          $idd=$model->id;
    return Html::button('Issuedto',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-share', 'onClick'=>"popup($idd)"]);
   
              } 
            ],
         ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
<!--           -->
<div class="assets-index" style="float:bottom;width: 40%; overflow: auto;">
<?php Pjax::begin(); ?>
<?php //$parent_categories = Cart::find()->where(['id'=> null])->asArray()->one();?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProviderNew,
       'filterModel'=>$searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i>  Requested fixed assets</h3>',
        //'type'=>'info',
         ],
    'toolbar'=> [ 
            '{export}',
            '{toggleData}',
            ],
      'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    'export' => [
        'fontAwesome' => true
    ],
    'persistResize' => false,
    'toggleDataOptions' => ['minCount' => 10],
    'itemLabelSingle'=>'Requested fixed assets',
    'itemLabelPlural'=>'Requested fixed assets',
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
          'quantiry',
[
         'attribute'=> 'quantity',
         'format'=>'raw',
         'value'=>function($model){
      $var=app\models\Stock::find()->where(['id'=>$model->id])->one();
          return $var->quantity;
        }],
        [
          'attribute'=>'Staff/Unit',
          'value'=>function($model){
           $id=$model->id;
           $var=app\models\Request::find()->where(['id'=>$model->vendorid])->one();
         return $var->var_dep;
           }],
],]);?>
<?php Pjax::end(); ?>
</div>
<!--           -->
<div class="assets-index" style="float:bottom;width: 100%; overflow: auto;">
<?php Pjax::begin(); ?>
<?php //$parent_categories = Cart::find()->where(['id'=> null])->asArray()->one();?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProviderOld,
       'filterModel'=>$searchModel,
        'showPageSummary'=>false,
         'options'=>[
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel'=>[
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-list"></i>  Issued fixed assets</h3>',
       'type'=>'success',
         ],
    'toolbar'=>[ 
            '{export}',
            '{toggleData}',
            ],
      'toggleDataContainer' =>['class' => 'btn-group mr-2'],
    'export'=>[
        'fontAwesome'=>true
    ],
    'persistResize'=>false,
    'toggleDataOptions' => ['minCount' => 10],
    'itemLabelSingle' => 'Issued to goods',
    'itemLabelPlural' => 'Issued to goods',
      'columns' => [
        //    ['class' => 'yii\grid\SerialColumn'],
                 [
         'attribute'=> 'By',
         'format'=>'raw',
         'value'=>function($data){
    $var=app\models\Cartassets::find()->where(['id'=>$data->id])->one();
  if(Yii::$app->user->identity->Type==$var->dep){
   return  $var->username;
        }
else{
  return "";
  }}],
  [
         'attribute'=> 'For',
         'format'=>'raw',
         'value'=>function($data){
    $var=app\models\Cartassets::find()->where(['id'=>$data->id])->one();
  if(Yii::$app->user->identity->Type==$var->dep){
   return  $var->fname."  ".$var->lname;
        }
else{
  return "";
}}],
[
         'attribute'=> 'NOA',
         'format'=>'raw',
         'value'=>function($data){
    $var=app\models\Cartassets::find()->where(['id'=>$data->id])->one();
  if(Yii::$app->user->identity->Type==$var->dep){
   return  $var->NOA;
        }
else{
  return "";
         }}],
/*[
         'attribute'=> 'assetbarcode',
         'format'=>'raw',
         'value'=>function($data){
    $var=app\models\Cartassets::find()->where(['id'=>$data->id])->one();
  if(Yii::$app->user->identity->Type==$var->dep){
   return  $var->assetbarcode;
        }
else{
  return "";
         }}],*/
  [
         'attribute'=> 'quantity',
         'format'=>'raw',
         'value'=>function($data){
    $var=app\models\Cartassets::find()->where(['id'=>$data->id])->one();
  if(Yii::$app->user->identity->Type==$var->dep){
   return  $var->quantity;
        }
else{
  return "";
         }}],
[
         'attribute'=> 'Return',
         'headerOptions'=>["class"=>"text-success"],
         'format'=>'raw',
         'value'=>function($data){
    $var=app\models\Cartassets::find()->where(['id'=>$data->id])->one();
      $id=$var->id;
if(Yii::$app->user->identity->Type==$var->dep&&$var->returnables=='Y'){
return Html::button('Return',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-circle-arrow-left', 'onClick'=>"popup1($id)"]);
           }
else{
  return "";
         }}
         ],
[
    'format'=>'raw',
    'header'=>'View',
    'headerOptions'=>['class'=>'kartik-sheet-style'],
    'value'=>function($data){
 $id=$data->id;
   $var=app\models\Cartassets::find()->where(['id'=>$id])->one();
  if(Yii::$app->user->identity->Type==$var->dep){
return Html::a('View',['cartassets/pview','id' =>$id,],['class'=>'btn btn-eye-open glyphicon glyphicon-eye-open']);
       }}],
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
var quantity=$("#assets-quantity").val();
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
var href="<?=Yii::$app->request->baseUrl;?>/index.php/assets/create2/"+"?id="+id+"&personnelid="+personnelid+"&office="+office+"&quantity="+quantity+"&returnables="+returnables+"&doreturnable="+doreturnable;
        window.location.href=href;
          }}
    function returndata()
       {
//var quantity=$("#cartassets-quantity").val();
var id=$("#assetsid").val();
var href="<?=Yii::$app->request->baseUrl;?>/index.php/assets/create3/"+"?id="+id;
        window.location.href=href;
          }
</script> 
<div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Issued To</h4>
      </div>
      <div class="modal-body">
          <?php
 $office=['Microlab'=>'MICROBIOLOGY LAB UNIT','Clinical'=>'CLINICAL','Pathology'=>'PATHOLOGY LAB UNIT','IT'=>'IT(Information Technology)','SBS'=>'SBS','Admin'=>'CHAMPS(PROJECT MANAGEMENT UNIT AND OPERATION UNIT)','KHDSS'=>'KHDSS','PSU'=>"PREGNANCY SURVEIILANCE UNIT"];
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
<?= $form->field($model,'quantity')->textInput(['type'=>'number','min'=>1]) ?>
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
           'startDate'      => date("y/m/d"),
           'changeYear'     => true,
           'changeMonth'    => true,
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