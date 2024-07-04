<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orderitem */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="orderitem-form">
      <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Update Stock</b></i></h1>
        </div>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'noi')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'type')->textInput() ?>
    <?= $form->field($model, 'packsize')->textInput() ?>
    <?= $form->field($model, 'quantity')->textInput() ?>
    <?= $form->field($model, 'cost')->textInput() ?>
    <?= $form->field($model, 'unit')->textInput() ?>
    <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
        <?php echo Html::submitButton('Save & Close',array('class'=>'save_close_btn')); ?>

    </div></div>
   <?php ActiveForm::end(); ?>
</div></div>
</div>
