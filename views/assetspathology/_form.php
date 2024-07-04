<?php
use app\models\Catagory;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use app\models\UploadForm;
use yii\web\UploadedFile;
use kartik\file\FileInput;
use yii\helpers\ArrayHelper;
use app\models\Stock;
/* @var $this yii\web\View */
/* @var $model app\models\Assetsmicro */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$Status=['Old'=>'Old','New'=>'New','I cannot decide'=>'I cannot decide'];
$purchasefrom=['LSHTM-Purchase'=>'LSHTM-Purchase','HU-purchase'=>'HU-purchase'];
$birrformat=['$'=>'$(dollar)','birr'=>'birr'];
$shelflifedeicide=['Y'=>'Yes','N'=>'No'];
$deprt=['Pathology'=>'Pathology'];
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
             $('#stock-vendorid').val(data.vendroid);
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
      <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Assets registration form</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
<?php                     
    $pid = new app\models\Catagory();
                $cc="None Consumable"; 
?>
<?=$form->field($model, 'catagoryname')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(app\models\Catagory::find()->where(['typeof_material'=>$cc])->all(),'catagoryname','catagoryname'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter catagory'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]
]);?>  
    
<?php                     
    $pid = new app\models\Stock(); 
            $c="None Consumable";
            ?>
     <?=$form->field($model, 'NOA')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(app\models\Stock::find()->where(['type'=>$c])->all(),'NOA','NOA'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter asset name'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]]);?>
<?= $form->field($model, 'unit')->textInput(['maxlength' => true,'autocomplete'=>'off','required'=>'required']) ?>
<?= $form->field($model, 'lotnumber')->textInput(['maxlength' => true,'autocomplete'=>'off','required'=>'required']) ?>
<?= $form->field($model, 'serial')->textInput(['maxlength' => true,'autocomplete'=>'off','required'=>'required']) ?>
<?= $form->field($model, 'MODEL')->textInput(['maxlength' => true,'autocomplete'=>'off','required'=>'required']) ?>
<?= $form->field($model, 'serviceyear')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
<?= $form->field($model, 'shelflifedeicide')->dropDownList($shelflifedeicide,['prompt'=>'--please select--','onChange'=>'shelflifedeicide_fun($(this).val())'])  ?>
<span class="shelflifedeicide hide">
<?= $form->field($model, 'shelflife')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?></span>
<?= $form->field($model, 'shelfname')->textInput(['maxlength' => true,'autocomplete'=>'off','required'=>'required']) ?>
<?= $form->field($model, 'shelfno')->textInput(['maxlength' => true,'autocomplete'=>'off','required'=>'required']) ?>
<?= $form->field($model,'birrformat')->dropDownList($birrformat,["prompt"=>"please select","required"=>"required",'autocomplete'=>'off']) ?>
<?php                     
    $pid = new app\models\Catagory(); 
      $psg=\yii\helpers\ArrayHelper::map(app\models\Catagory::find()->where('id!=-1')->all(),'purchasefrom','purchasefrom');
     ?>             
<?= $form->field($model, 'purchasefrom')->dropDownList($psg,['prompt'=>'Please select'],['readonly'=>true,'required'=>"required"])?>
<?= $form->field($model,'cost')->textInput(["oninput"=>"this.value=this.value.replace(/[^0-9]/g,'');",'autocomplete'=>'off','required'=>'required']) ?>
<?= $form->field($model, 'DOM')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date of MANUFACTURER ...'],
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
    ])?> 
 <?= $form->field($model, 'DOC')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date of Date of Checking ...'],
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
    ])?>
  <?= $form->field($model, 'RD')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date of Date of Checking ...'],
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
    ])?> 
    <?= $form->field($model, 'TD')->dropDownList($deprt,['disabled'=>true,'required'=>'required']) ?>
    <?= $form->field($model, 'Status')->dropDownList($Status,['prompt' => '--please select--'],['required'=>'required'])?>
    <!--<?= $form->field($model, 'Place')->textInput(['maxlength' => true,'autocomplete'=>'off','required'=>'required']) ?>-->
    <?= $form->field($model, 'RC')->textInput(['maxlength' => true,'autocomplete'=>'off','required'=>'required']) ?>
   <?= $form->field($model, 'Picture')->widget(FileInput::classname(), [
              'options' => ['accept' => 'uploads/*'],
               'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png'],'showUpload' => true,],
          ]);   ?>
    <?= $form->field($model, 'RNl')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter Renewing date ...'],
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
    ])?> 
    <?= $form->field($model, 'RM')->textArea(['row'=>15,'required'=>'required']) ?>
    <?= $form->field($model, 'MANUFACTURER')->textInput(['maxlength' => true,'autocomplete'=>'off','required'=>'required']) ?>
<?php                     
    $pid = new app\models\Catagory(); 
            $lc="None Consumable";
            ?>
     <?=$form->field($model, 'LOCATION')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(app\models\Catagory::find()->where(['typeof_material'=>$lc])->all(),'location','location'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter asset location'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]]);?>
<?php                     
    $pid = new app\models\Stock(); 
            $v="None Consumable";
            ?>
     <?=$form->field($model, 'VENDOR_ID')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(app\models\Stock::find()->where(['type'=>$v])->all(),'vendorid','vendorid'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter asset vendor id'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]]);?>
<?= $form->field($model, 'DATEWARRANTYEXPIRES')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date of DATEWARRANTYEXPIRES ...'],
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
    ])?>
<?= $form->field($model, 'NEXTSERVICEDUEDATE')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date of NEXTSERVICEDUEDATE ...'],
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
    ])?>
    <?= $form->field($model, 'NOTES')->textArea(['maxlength' => true,'required'=>'required']) ?>
  </div></div>
     <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div></div></div></div>

    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript">
function shelflifedeicide_fun(val)
            {
  if(val=="Y")
                {
         $(".shelflifedeicide").removeClass('hide');
                  }
  else{
             $(".shelflifedeicide").addClass('hide');
               }}
</script>