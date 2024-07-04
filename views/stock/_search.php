<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StockSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'catagory') ?>

    <?= $form->field($model, 'noi') ?>

    <?= $form->field($model, 'NOA') ?>

    <?= $form->field($model, 'fname') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'birrformat') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'purchasefrom') ?>

    <?php // echo $form->field($model, 'customename') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'dor') ?>

    <?php // echo $form->field($model, 'specification') ?>

    <?php // echo $form->field($model, 'vendorid') ?>

    <?php // echo $form->field($model, 'requestno') ?>

    <?php // echo $form->field($model, 'notice') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
