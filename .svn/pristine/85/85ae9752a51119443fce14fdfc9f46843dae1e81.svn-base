<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
//use app\models\Defualtldno;
/* @var $this yii\web\View */
/* @var $model app\models\Vendor */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$country=['Ethiopia'=>'Ethiopia'];
?>
<div class="vendor-form">
     <div class="panel panel-info" style="margin-top:-2%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Vendor registration form</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(); ?>
       <div class="row"> 
       <div class="col-lg-11">
       <div class="col-lg-11">  
       <?= $form->field($model, 'vendorname')->textInput(['maxlength' => true,'required'=>'required','autocomplete'=>'off']) ?> 
     <?= $form->field($model,'vendormiddlename')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
     <?= $form->field($model, 'contactname')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>   
   <?= $form->field($model, 'phonenumber')->textInput(['maxlength' => 10,"pattern"=>"\d{10}",'required'=>'required'],['autocomplete'=>'off']) ?>
   <?= $form->field($model, 'email')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
   <?= $form->field($model, 'address1')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
   <?= $form->field($model, 'address2')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
   <?= $form->field($model, 'city')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
   <?= $form->field($model, 'state')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
   <?= $form->field($model, 'postalcode')->textInput(['maxlength' => true,'autocomplete'=>'off','autocomplete'=>'off']) ?>
   <?= $form->field($model, 'country')->dropDownList($country,['disabled'=>'true',]) ?>
  <?= $form->field($model, 'autobarcode')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
   <?= $form->field($model, 'currentdate')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date of updated ...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'startDate'      => date("y/m/d"),
           'changeYear'     => true,
           'changeMonth'    => true,
           'startDate'=>'today',
           'endDate'=>'today'

      ]
    ])?> 
  <?= $form->field($model, 'website')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
               </div></div>          
             <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div></div></div></div>

    <?php ActiveForm::end(); ?>

</div>
