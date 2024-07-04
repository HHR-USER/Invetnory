<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsumablessbsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consumablessbs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'catagory') ?>

    <?= $form->field($model, 'noi') ?>

    <?= $form->field($model, 'serial') ?>

    <?= $form->field($model, 'packsize') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'lot') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'dp') ?>

    <?php // echo $form->field($model, 'expairedate') ?>

    <?php // echo $form->field($model, 'shelflifedeicide') ?>

    <?php // echo $form->field($model, 'shelflife') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'shelfname') ?>

    <?php // echo $form->field($model, 'shelfno') ?>

    <?php // echo $form->field($model, 'dr') ?>

    <?php // echo $form->field($model, 'am') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'totalcost') ?>

    <?php // echo $form->field($model, 'birrformat') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'purchasefrom') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'fk_consumable') ?>

    <?php // echo $form->field($model, 'fk_forcata') ?>

    <?php // echo $form->field($model, 'fk_borrows') ?>

    <?php // echo $form->field($model, 'firstname') ?>

    <?php // echo $form->field($model, 'lastname') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'personnelid') ?>

    <?php // echo $form->field($model, 'vendorid') ?>

    <?php // echo $form->field($model, 'dt') ?>

    <?php // echo $form->field($model, 'office') ?>

    <?php // echo $form->field($model, 'dep') ?>

    <?php // echo $form->field($model, 'fk') ?>

    <?php // echo $form->field($model, 'unitprice') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
