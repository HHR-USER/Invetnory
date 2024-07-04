<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Personnel */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$PERSONNELSTATUS=['actiive'=>'active','in active'];
?>
<div class="personnel-form">
     <div class="panel panel-info" style="margin-top:-2%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Personnel registration form</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(); ?>
       <div class="row"> 
       <div class="col-lg-11">
       <div class="col-lg-11">     
   
    <!--<?= $form->field($model, 'personnelgroup_id')->textInput() ?>-->
    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
    <?= $form->field($model, 'emailaddress')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
    <?= $form->field($model, 'workphonenumber')->textInput(["pattern"=>"\d{10}",'autocomplete'=>'off']) ?>
    <?= $form->field($model, 'homephonenumber')->textInput(["pattern"=>"\d{10}",'autocomplete'=>'off']) ?>
    <?= $form->field($model, 'mobilephonenumber')->textInput(["pattern"=>"\d{10}",'autocomplete'=>'off']) ?>
    <!--<?= $form->field($model, 'pagernumber')->textInput(['maxlength' => true]) ?>-->
    <!--<?= $form->field($model, 'jobtile_id')->textInput() ?>-->
   <!-- <?= $form->field($model, 'autobarcode')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'jobtitle')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>,
    <?= $form->field($model, 'personnelgroup')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
   <!-- <?= $form->field($model, 'displayname')->textInput(['maxlength' => true]) ?>-->
   <!-- <?= $form->field($model, 'displaynameandnumber')->textInput(['maxlength' => true]) ?>-->
  <!--<?= $form->field($model, 'status_id')->textInput(['maxlength' => true]) ?>-->
    <?= $form->field($model, 'personnelstatus')->dropDownList($PERSONNELSTATUS,['prompt' =>'please select','autocomplete'=>'off']) ?>
  </div></div>          
             <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div></div></div></div>

    <?php ActiveForm::end(); ?>

</div>
