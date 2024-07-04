<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Orderitem;
\yii\web\YiiAsset::register($this);
?>
<?php
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Assets;
/* @var $this yii\web\View */
/* @var $model app\models\Consumables */
/* @var $form yii\widgets\ActiveForm */
?> 
<div class="consumables-form">
   <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Receive Stock</b></i></h1>
        </div>
      <div class="orderitem-view">
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
    <div id="toggle" style="display:inline">
    <h1><?= Html::encode($this->title) ?></h1>
    <?=DetailView::widget([
        'model' => $model,
        'attributes' => [
         'id',
        'vendorid',
        'customename',
        'noi',
        'cost',
        'quantity',
  [     'attribute'=>'Total',
      'format'=>'raw',
      'value'=>function($model){
      $item=Orderitem::find()->where(['id'=>$model->id])->one();
        return number_format($item['cost']*$item['quantity'],2);
        }],          
      ]
    ]) ?>
<?php
$deprt=['Admin'=>'CHAMPS main store'];
$Status=['Old'=>'Old','New'=>'New','I cannot decide'=>'I cannot decide'];
$purchasefrom=['LSHTM-Purchase'=>'LSHTM-Purchase','HU-purchase'=>'HU-purchase'];
$birrformat=['$'=>'$(dollar)','£'=>'Pound','€'=>'€(Euro)','Birr'=>'Birr'];
$shelflifedeicide=['Y'=>'Yes','N'=>'No'];
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
<?php
$model=new Assets();
?>
<div class="assets-form">
      <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Assets Registration Form</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
<?php                     
    $pid = new app\models\Catagory();
                $cc="None Consumable"; 
?>
<span class="shelflifedeicide hide">
<?= $form->field($model,'shelflife')->textInput(['maxlength'=>true,'autocomplete'=>'off']) ?></span>
<?= $form->field($model,'shelfname')->textInput(['maxlength'=>true,'autocomplete'=>'off','placeholder'=>'O12,O7']) ?>
<?= $form->field($model,'shelfno')->textInput(['maxlength'=>true,'autocomplete'=>'off','placeholder'=>'A,B,C,D,E']) ?>
<?= $form->field($model,'birrformat')->dropDownList($birrformat,['prompt'=>'Please select'],['placeholder'=>'birr,$(dollar),€(Euro),£(pound)'])->label("Currency") ?>
<?php                     
  $pid=new app\models\Catagory(); 
  $psg=\yii\helpers\ArrayHelper::map(app\models\Catagory::find()->where('id!=-1')->all(),'id','purchasefrom');
     ?>             
<?=$form->field($model,'purchasefrom')->dropDownList($purchasefrom,['prompt'=>'Please select'],['readonly'=>true])?>
<?=$form->field($model,'DOM')->widget(DatePicker::classname(), [
      'options'=>['placeholder'=>'Enter  date of manufacturer.'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose' => true,
           'format'=>'yyyy/mm/dd',
           'minuteStep' =>1,
           'todayHighlight' =>true,
           'startDate'=>date("y/m/d"),
           'changeYear'=>true,
           'changeMonth'=>true,
           'endDate'=>'today'

      ]
    ])?> 
 <?= $form->field($model, 'DOC')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter date of Checking ...'],
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
      'options' => ['placeholder' => 'Enter  date of registration ...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'startDate'      => date("y/m/d"),
           'changeYear'     => true,
           'changeMonth'    => true,
      ]
    ])?> 
    <?= $form->field($model, 'TD')->dropDownList($deprt,['prompt'=>'please select']) ?>
    <?= $form->field($model, 'Status')->dropDownList($Status,['prompt' => '--please select--'])?>
    <?= $form->field($model, 'RC')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
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

      ]
    ])?> 
<?=$form->field($model,'MANUFACTURER')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
<?=$form->field($model,'MODEL')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
<?=$form->field($model,'BRAND')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
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
<?= $form->field($model, 'CONDITIONs')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'CUSTODIAN')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'INCLUDEINAUDIT')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'DEPRECIATIONMETHOD')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'DATEINSERVICE')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date in service...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'startDate'      => date("y/m/d"),
           'changeYear'     => true,
           'changeMonth'    => true,

      ]
    ])?>
    <?= $form->field($model, 'DATEAUDITED')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter date audited ...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'startDate'      => date("y/m/d"),
           'changeYear'     => true,
           'changeMonth'    => true,

      ]
    ])?>
<?= $form->field($model, 'DUEDATE')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter date ...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'startDate'      => date("y/m/d"),
           'changeYear'     => true,
           'changeMonth'    => true,

      ]
    ])?>
<?= $form->field($model, 'DATEPURCHASED')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter date purchased ...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'startDate'      => date("y/m/d"),
           'changeYear'     => true,
           'changeMonth'    => true,

      ]
    ])?>
  </div></div>
     <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
<?= Html::submitButton('Save', ['class' => 'btn btn-success','data' => [
        'confirm' => 'Are you sure want to Create/Update this message?'
        ]]) ?>    </div></div></div></div>

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