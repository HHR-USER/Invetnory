<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Consumables;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;
use app\models\Assets;
use app\models\Itemc;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\date\DatePicker;
 /* @var $this yii\web\View */
/* @var $model app\models\Request */
/* @var $form yii\widgets\ActiveForm */
 $fullname=Yii::$app->user->identity->fname." ".Yii::$app->user->identity->mname." ".Yii::$app->user->identity->lname;
?>
<?php
$routeAjax=\yii\helpers\Url::toRoute("request/index");
$js=<<<JS
function getRelatedFields(noi){
    $.ajax({
        url:'$routeAjax',
        dataType:'json',
        method:'GET',
        data:{noi:noi},
        success:function (data) {
             $('#consumables-noi').val(data.noi);
        },
        beforeSend: function (xhr) {
            alert('loading sure!');
        },
    });
}
JS;
$this->registerJs($js, \yii\web\View::POS_READY);
?>
<div class="request-form" style="margin-top:-3%">
<div class="panel panel-success">
      <div class="panel-heading">
    <h1 class="panel-title glyphicon glyphicon-user"><?=Html::encode($this->title) ?><b>Fixed Assets Request Form</b></i></h1>
        </div> <br>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
  <?php $form=ActiveForm::begin(['id'=>'dynamic-form','options'=>['class'=>'well'],]); ?>
      <div class="panel panel-default" >
            <!--<div class="panel-heading">
              <h4><i class="glyphicon glyphicon-envelope"></i> Items              
            </h4>
           </div>-->
          <div >
  <?php
       $office=['Admin'=>'MAIN STORE'];//,'Microlab'=>'MICROBIOLOGY LAB UNIT','Clinical'=>'CLINICAL','Pathology'=>'PATHOLOGY LAB UNIT','IT'=>'IT(INFORMATION TECHNOLOGY)','SBS'=>'SBS UNIT','PSU'=>'PREGNANCY SURVEIILANCE UNIT','KHDSS'=>'HDSS'];
         $type="None Consumables";
             ?>
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
            'formFields'=>[
                'noi',
                'quantity',
                'packsize',
                'specification',
             ],
           ]); ?>
    <div class="container-items"><!-- widgetContainer -->
    <div class="item panel panel-default"><!-- widgetBody -->
    <div class="panel-heading">
    <div class="pull-right">
    <?=Html::button('',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-plus','style'=>'float:right','onClick'=>"popup()"]); ?> 
    <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
    <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button></div>
<div class="clearfix"></div></div>
        <table class="col-lg-12 col-md-10 col-sm-10" colspan="0"> 
              <tr>              
              <th style="width:10%">Name of Stock</th>
              <th style="width:10%">Quantity</th>
              <th  style="width:10%">Specification(ref if possible)</th>
            </tr>
            <?php foreach ($modelsAddress as $i=>$modelAddress): ?>
                <div class="panel-body">
                    <?php
                        // necessary for update action.
            if(!$modelAddress->isNewRecord) {
                            echo Html::activeHiddenInput($model,"[{$i}]id");
                        }
                    ?>
                <tr><td>
   <?=$form->field($modelAddress,"[{$i}]noi")->dropDownList(ArrayHelper::map(Itemc::find()->where(['type'=>$type])->orderby('noi')->all(),'noi','noi'),['prompt'=>'--Select Stock--'])->label(false) ?>
          </td><td>
    <?= $form->field($modelAddress,"[{$i}]quantity")->textInput(['maxlength' => true,'autocomplete'=>'off',"oninput"=>"this.value=this.value.replace(/[^0-9]/g,'');"])->label(false) ?>
             </td><td>
      <?= $form->field($modelAddress,"[{$i}]specification")->textInput(['maxlength' => true,'autocomplete'=>'off'])->label(false) ?>
    </td></tr></table>
            </div><!-- .row -->
                </div>
            <?php endforeach; ?>
            </div>
          <?php DynamicFormWidget::end(); ?>
          <?php 
        $types=["None-consumable"=>"None Consumable"];
          ?>
        <div class="col-xs-10">
    <?=$form->field($model,'office')->dropDownList($office,['prompt' =>'--Please Select--'])->label("From Which store location/Unit/Office You want to request?") ?>
    <?=$form->field($model,'fname')->textInput(['value'=>$fullname,'disabled'=>'disabled']) ?>
    <?=$form->field($model,'type')->dropDownList($types,['readOnly'=>true]) ?>
    <?=$form->field($model,'foreign_key')->textInput(['maxlength'=>10,'autocomplete'=>'off']) ?>
    <?=$form->field($model,'dor')->widget(DatePicker::classname(), [
      'options'=>['placeholder'=>'Enter  date of request ...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions'=>[
           'autoclose'=>true,
           'format'=>'yyyy/mm/dd',
           'minuteStep'=>1,
           'todayHighlight'=>true,
           'startDate'=> date("y/m/d"),
           'changeYear'=>true,
           'changeMonth'=>true,

      ],
    ],['required'=>'required'])?> 
         </div>
         <div class="padding-v-md">
        </div>
        <div class="row">
             <div class="col-xs-5">
            </div> </div>
        <div class="form-group">
     <div class="col-xs-11,col-xs-5 col-xs-5">
    </div>
        <div class="col-xs-11,col-xs-5 col-xs-5">
        <?=Html::submitButton('Send request', ['class'=>'btn btn-success','data' => [
        'confirm'=>'Are you sure want to Create/Update this message?'
        ]]) ?>
        </div>
      </div>
       </div>
       <?php ActiveForm::end(); ?>
       </div>
      </div></div></div></div>
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
     var href = "<?=Yii::$app->request->baseUrl;?>/index.php/request/create3/"+"?type="+type+"&noi="+noi;
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
                  <?php $form =ActiveForm::begin(); ?>
      <?php $modell=new app\models\Itemc();?>
    <?php
$type=['None Consumables'=>'None Consumables'];
    ?> 
     <?= $form->field($modell, 'type')->dropDownList($type,['disabled'=>true]) ?>
          <lable>Name of item</lable>
<?= $form->field($modell, "noi")->textInput()->label(false)?> 
                 </div></div></div>
    <div class="modal-footer">
        <input type="hidden" value="" id="catagoryid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="catagory()">Submit</button>
      </div></div>
          </div></div>
          <?php $form =ActiveForm::end(); ?>
        </div></div>