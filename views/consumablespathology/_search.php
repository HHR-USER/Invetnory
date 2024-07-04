<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsumablespathologySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consumablespathology-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'catagory') ?>

    <?= $form->field($model, 'noi') ?>

    <?= $form->field($model, 'dr') ?>

    <?= $form->field($model, 'am') ?>

    <?php // echo $form->field($model, 'dp') ?>

    <?php // echo $form->field($model, 'expairedate') ?>

    <?php // echo $form->field($model, 'shelflife') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'totalcost') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'purchasefrom') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'fk_consumable') ?>

    <?php // echo $form->field($model, 'fk_forcata') ?>

    <?php // echo $form->field($model, 'fk_borrows') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
