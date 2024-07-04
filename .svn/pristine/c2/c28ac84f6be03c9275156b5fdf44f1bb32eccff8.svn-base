<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Catagory */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$typeof_material=['Consumable'=>'Consumable','None Consumable'=>'None Consumable'];

?>
<div class="catagory-form">
     <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Give Catagory</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(); ?>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
    <?= $form->field($model, 'typeof_material')->dropDownList($typeof_material,['prompt'=>'Please select']) ?>
   <!-- <?= $form->field($model, 'catagoryname')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>-->         
    <?= $form->field($model, 'location')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
    <?= $form->field($model, 'purchasefrom')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
     </div></div>          
             <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div></div></div></div>

    <?php ActiveForm::end(); ?>

</div>
