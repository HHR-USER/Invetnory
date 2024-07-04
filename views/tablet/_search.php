<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TabletSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tablet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tablet_type') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'serial_no') ?>

    <?= $form->field($model, 'used_by') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'register_by') ?>

    <?php // echo $form->field($model, 'dates') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
