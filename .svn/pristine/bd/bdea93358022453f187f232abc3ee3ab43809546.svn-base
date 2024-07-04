<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsumablesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consumables-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'NoI') ?>

    <?= $form->field($model, 'Quantity') ?>

    <?= $form->field($model, 'DR') ?>

    <?= $form->field($model, 'AORM') ?>

    <?php // echo $form->field($model, 'DP') ?>

    <?php // echo $form->field($model, 'ExpaireDate') ?>

    <?php // echo $form->field($model, 'Shelflife') ?>

    <?php // echo $form->field($model, 'Department') ?>

    <?php // echo $form->field($model, 'Remark') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
