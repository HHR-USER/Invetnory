<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
 use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Tablet */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$type=['actiive'=>'active','in active'];
?>
<div class="tablet-form">
      <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><b>Tablet registration form</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(['options' => ['id' => 'codeid']]); ?>
       <div class="row"> 
       <div class="col-lg-10">
      <div class="col-lg-10"> 
    <?=$form->field($model,'tablet_type')->textInput() ?>
    <?=$form->field($model,'model')->textInput() ?>
    <?=$form->field($model,'serial_no')->textInput() ?>
    <?=$form->field($model,'used_by')->textInput() ?>
    <?=$form->field($model,'mobile')->textInput(['maxlength'=>10]) ?>
 <?=$form->field($model, 'date')->widget(DatePicker::classname(), [
      'options'=>['placeholder' => 'Enter date given for data collectors...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions'=>[
           'autoclose'=>true,
           'format'=>'yyyy/mm/dd',
           'minuteStep'=>1,
           'todayHighlight'=>true,
           'startDate'=>date("y/m/d"),
           'changeYear'=>true,
           'changeMonth'=>true,

      ],
    ],['required'=>'required'])?>
        <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
        <?php echo Html::submitButton('Save Tablet',[array('class'=>'btn btin-primary'),'data'=>[
        'confirm'=>'Are you sure want to Create/Update this record?'
        ]]); ?>

    </div>
   <?php ActiveForm::end(); ?>
</div></div>
</div></div></div>