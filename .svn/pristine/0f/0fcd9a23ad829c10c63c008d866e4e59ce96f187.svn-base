<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
?>
<?php
$Status=['Old'=>'Old','New'=>'New','I cannot decide'=>'I cannot decide'];
$purchasefrom=['LSHTM-Purchase'=>'LSHTM-Purchase','HU-purchase'=>'HU-purchase'];
$birrformat=['$'=>'$(dollar)','£'=>'£(Pound)','€'=>'€(Euro)','Birr'=>'Birr'];
$shelflifedeicide=['Y'=>'Yes','N'=>'No'];
$deprt=['Admin'=>'Admin'];
?>
<?php
$routeAjax=\yii\helpers\Url::toRoute("order-eq/index");
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
            alert('loading sure!');},});}
JS;
$this->registerJs($js, \yii\web\View::POS_READY);
?>
<div class="assets-form">
      <div class="panel panel-success" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>HARARGHE HEALTH RESEARCH PARTNERSHIP FIXED ASSET REGISTRATION BOOK/ CAPITALISED ASSET</b></i></h1>
        </div>
    <?php //$form = ActiveForm::begin(['options' => ['id' => 'codeid']]); ?>
     <?php $form=\yii\widgets\ActiveForm::begin([
                    'id'=>'profile-form',
                    'options'=>['class'=>'form-vertical'],
                    'fieldConfig'=>[
                        'template'=>"{label}\n<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-sm-offset-2 col-lg-9\">{error}\n{hint}</div>",
                        'labelOptions'=>['class'=>'col-lg-3 control-label']
                    ],
                ]); ?>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
        <br>
<?php
$idd=1.1;
 $var=ArrayHelper::map(app\models\Catagory::find()->where('id'!=$idd)->all(),'fx_category',
    function ($model) {
    return $model['fx_category'];
            });?>
<?=$form->field($model,'fx_type')->widget(Select2::classname(), [
            'data'=>$var,
            'options'=>['placeholder'=>'Select  Type ...'],
            'pluginOptions'=>[
                'depends'=>[''],
                'url'=>Url::to(['#'])
            ],
        ])->label("Fixed asset type"); ?>    
<?=$form->field($model, 'NOA')->textInput(['maxlength'=>true,'autocomplete'=>'off']) ?>
<?php
$idd=1.1;
 $var=ArrayHelper::map(app\models\Catagory::find()->where('id'!=$idd)->all(),'facl',
    function ($model) {
    return $model['facl'];
            });?>
<?=$form->field($model,'facl')->widget(Select2::classname(), [
            'data'=>$var,
            'options'=>['placeholder'=>'Select Fixed Asset Category Listing...'],
            'pluginOptions'=>[
                'depends'=>[''],
                'url'=>Url::to(['#'])
            ],
        ])->label("Fixed Asset Category Listing"); ?> 
<?=$form->field($model, 'asset_code')->textInput(['value'=>'HHR-','disabled'=>'disabled']) ?>
<?=$form->field($model, 'grnumber')->textInput(['autocomplete'=>'off']) ?>
<?=$form->field($model, 'serial')->textInput(['maxlength'=>true,'autocomplete'=>'off']) ?>
<?=$form->field($model, 'MODEL')->textInput(['maxlength'=>true,'autocomplete'=>'off']) ?>
<?php
$idd=1.1;
 $var=ArrayHelper::map(app\models\Catagory::find()->where('id'!=$idd)->all(),'location',
    function ($model) {
    return $model['location'];
            });?>
<?=$form->field($model,'LOCATION')->widget(Select2::classname(), [
            'data'=>$var,
            'options'=>['placeholder'=>'Select Location...'],
            'pluginOptions'=>[
                'depends'=>[''],
                'url'=>Url::to(['#'])
            ]],['required'=>'required'])->label("Location"); ?> 
<?=$form->field($model,'cost')->textInput(['autocomplete'=>'off']) ?>
<?= $form->field($model,'DATEPURCHASED')->widget(DatePicker::classname(), [
      'options'=>['placeholder'=>'Enter  date of purchased...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions'=>[
           'autoclose'=>true,
           'format'=>'yyyy/mm/dd',
           'minuteStep'=>1,
           'todayHighlight'=>true,
           'startDate'=>date("y/m/d"),
           'changeYear'=>true,
           'changeMonth'=> true,
           'endDate'=>'today'
      ]
    ])?> 
<?=$form->field($model, 'DOM')->widget(DatePicker::classname(), [
    'options' => [
        'placeholder' => 'Enter date of Manufacturer...',
        'required' => true,
    ],
    'type' => DatePicker::TYPE_COMPONENT_APPEND,
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'yyyy/mm/dd',
        'minuteStep' => 1,
        'todayHighlight' => true,
        'startDate' => date("y/m/d"),
        'changeYear' => true,
        'changeMonth' => true,
        'endDate' => 'today'
    ],
])?>
<?=$form->field($model,'InventoryMonthYear')->textInput(['autocomplete'=>'off','placeholder'=>"Please Enter MONTH/YEAR"]) ?>
<?= $form->field($model, "birrformat")->dropDownList($birrformat,['prompt'=>'Please select','required' => true,]) ?>
<?= $form->field($model,"birrformat")->dropDownList($birrformat,['prompt'=>'Please select','required' => true,])?>
<?=$form->field($model,'donor_funder')->textInput(['autocomplete'=>'off','required'=>true,]) ?>
<?=$form->field($model,'loa')->textInput(['autocomplete'=>'off','required'=>true,])->label('LIFE OF ASSET') ?>
<?=$form->field($model,'depreciation')->textInput(['autocomplete'=>'off','required'=>true,]) ?>
<?=$form->field($model,'accumulated_dep')->textInput(['autocomplete'=>'off','required'=>true,]) ?>
<?=$form->field($model,'bva')->textInput(['autocomplete'=>'off','required'=>true,])->label('BOOK VALUE OF ASSET') ?>
<!----------------------------------------------------------------->
<?=$form->field($model,'plate_number')->textInput(['maxlength'=> true,'autocomplete'=>'off']) ?>
<?=$form->field($model, 'fcn')->textInput(['maxlength'=> true,'autocomplete'=>'off'])->label('CHASSIS NUMBER') ?>
<?=$form->field($model,'fen')->textInput(['maxlength'=>true,'autocomplete'=>'off'])->label('Engine Number') ?>
<?=$form->field($model,'NOTES')->textArea(['maxlength'=>true]) ?>
    <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
  <?= Html::submitButton('Save', ['class'=>'btn btn-success','data'=>[
        'confirm'=>'Are you sure want to Create/Update this record?'
        ]]) ?>
    </div></div>
<?php ActiveForm::end(); ?>
</div></div></div>
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
<script type="text/javascript">
(function() {
    var textField = document.getElementById('codeid');
    if(textField) {
        textField.addEventListener('keydown', function(mozEvent) {
            var event = window.event || mozEvent;
            if(event.keyCode === 13) {
                event.preventDefault();
            }
        });
    }
})();
</script>