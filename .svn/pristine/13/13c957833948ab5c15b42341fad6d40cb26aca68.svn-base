<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use app\models\UploadForm;
use yii\web\UploadedFile;
use kartik\file\FileInput;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\helpers\ArrayHelper;
use unclead\multipleinput\MultipleInput;
use app\models\Vendor;
use kartik\depdrop\DepDrop;
use app\models\Itemc;
?>
<?php
$routeAjax = \yii\helpers\Url::toRoute("order-eq/index");
$js=<<<JS
function getRelatedFields(vendroid){
    $.ajax({
        url:'$routeAjax',
        dataType:'json',
        method:'GET',
        data:{vendroid:vendroid},
        success:function (data) {
             $('#vendor-vendroid').val(data.vendroid);
              $('#itemc-noi').val(data.noi);
        },
        beforeSend: function (xhr) {
            alert('loading sure!');
        },
    });
}
JS;
$this->registerJs($js, \yii\web\View::POS_READY);
?>
<?php
$birrformat=['$'=>'$(dollar)','£'=>'£(Pound)','€'=>'€(Euro)','Birr'=>'Birr'];
?>
<div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
     <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Please fill your order</b></i></h1>
        </div>
<?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
        <div class="row"> 
       <div class="col-lg-12">     
       <div class="col-lg-12">     
          <!--<h3>Purchase order</h3>
      <?= $form->field($model, 'Doo')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date of request ...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'changeYear'     => true,
           'changeMonth'    => true,
           'endDate'=>'today',
           'startDate'=>'today'

      ]
    ])->label(false)?>-->
   <?php 
   $cust=Yii::$app->user->identity->fname." ".Yii::$app->user->identity->mname;
               ?>
  <?= $form->field($model, 'customename')->textInput(['value'=> $cust,'readonly'=>true])->label('Order from')?>
  <?php
$type=['Consumable'=>'Consumable'];
  ?>
<?= $form->field($model, 'type')->dropDownList($type,['readOnly'=>true])->label('Type of item')?>  
   <?php
$idd=1.1;
//$models=Vendor::find()->where('id'!=$idd)->all();
        $var = ArrayHelper::map(Vendor::find()->where('vendorid'!=$idd)->all(), 'vendorid',
            function ($model) {
                return $model['vendorid'] .' '. $model['vendorname'];
            });
            ?>
<?= $form->field($model, 'vendorid')->widget(Select2::classname(), [
            'data' => $var,
            'options' => ['placeholder' => 'Select  Vendor ...'],
            'pluginOptions' => [
                'depends' => [''],
                'url' => Url::to(['#'])
            ],
        ]); ?>    
        <table  width="100%">
                  <tr>
              <td>Item name</td>
              <td>Pack Size</td>
              <td>Unit(SET,Pack)</td>
              <td>Quantity</td>
              <td>Unit Price</td>
              <td>Currency</td>
              <td>Description</td>
                  </tr>
                </table>                           
                 <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' =>100, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsAddress[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'noi',
                    'cost',
                    'quantity',
                   'description',
                   'packsize',
                   'unit',
                   'birrformat',
                ],
            ]); ?> 
<div  class="container-items" width="60%">  
<div class="item"><!-- widgetBody -->
<?php foreach ($modelsAddress as $i => $modelAddress): ?>
                        <?php
              if(!$modelAddress->isNewRecord) {
                  echo Html::activeHiddenInput($modelAddress, "[{$i}]id");
                        }
                        ?>
                        <div class="pull-right">
          <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
          <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button></div>
          <table width="90%" col="10">
            <tr>
            <td  width="15%">
  <?php    
  $typs="Consumable";                 
    $pid = new app\models\Itemc(); 
      $psg=\yii\helpers\ArrayHelper::map(Itemc::find()->where(['type'=>$typs])->orderby('noi')->all(),'noi','noi');
     ?>      
    <?= $form->field($modelAddress, "[{$i}]noi")->dropDownList($psg,['prompt'=>'Please select'],['readonly'=>true,'required'=>"required"])->label(false)?> 
    </td>
  <td> <?=Html::button('',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-plus','style'=>'float:right;margin-top:-50%','onClick'=>"popup()"]); ?> 
  </td>
  <td>
<?= $form->field($modelAddress, "[{$i}]packsize")->textInput(['autocomplete'=>'off'])->label(false)?>
</td>
<td>
<?= $form->field($modelAddress, "[{$i}]unit")->textInput(['autocomplete'=>'off'])->label(false)?>
 </td>
 <td>
<?= $form->field($modelAddress, "[{$i}]quantity")->textInput(['autocomplete'=>'off','required'=>'required'])->label(false)?>
</td>
<td>
<?= $form->field($modelAddress, "[{$i}]cost")->textInput(['autocomplete'=>'off'])->label(false)?> 
 </td>
 <td>
<?= $form->field($modelAddress, "[{$i}]birrformat")->dropDownList($birrformat,['prompt'=>'Please select'])->label(false)?>
</td>
 <td>
  <?= $form->field($modelAddress, "[{$i}]description")->textArea(['row'=>10,'autocomplete'=>"off"])->label(false)?>
</td></tr></table>
                   </div>
                   </div><!-- .row -->
                   </div>
              <?php endforeach; ?>
            <?php DynamicFormWidget::end(); ?>
        <div class="form-group">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-6 col-md-6 col-sm-6">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
<?= Html::submitButton('Save', ['class' => 'btn btn-success','data' => [
        'confirm' => 'Are you sure want to Create/Update this message?'
        ]]) ?>
           <?php $form =ActiveForm::end(); ?>
           </div></div></div></div></div></div>

<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(){
       $("#catagoryid").val();
       $("#consentModal").modal('show');
    }    
    function catagory()
      {
     var type=$("#itemc-type").val();
     var noi=$("#itemc-noi").val();
     //var productname=$("#catagory-productname").val();
     var id=$("#catagoryid").val();
     var href = "<?=Yii::$app->request->baseUrl;?>/index.php/order-eq/createcon/"+"?type="+type+"&noi="+noi;
    window.location.href =href;
          }
</script>
 <div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="glyphicon glyphicon-plus-sign" id="myModalLabel" style="float:left;"></h4>
          </p>Add New Stock</p>
      </div>
      <div class="modal-body">
     <div class="row"> 
      <div class="col-lg-11">
      <?php $modell=new app\models\Itemc();?>
    <?php
$type=['consumable'=>'Consumable'];//,'None Consumable'=>'None Consumable'];
    ?> 
     <?= $form->field($modell, 'type')->dropDownList($type,['readOnly'=>true]) ?>
    <?= $form->field($modell, 'noi')->textInput(['required'=>'required']) ?>
    <div class="modal-footer">
        <input type="hidden" value="" id="catagoryid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="catagory()">Submit</button>
      </div></div>
      </div></div>