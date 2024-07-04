<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cartassets */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cartassets-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'catagoryname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MODEL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serviceyear')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'shelflifedeicide')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shelflife')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shelfname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shelfno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birrformat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'purchasefrom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'totalcost')->textInput() ?>

    <?= $form->field($model, 'NOA')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'DOM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RD')->textInput() ?>

    <?= $form->field($model, 'TD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Picture')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'RNl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ASSETID')->textInput() ?>

    <?= $form->field($model, 'PARENTASSET_ID')->textInput() ?>

    <?= $form->field($model, 'ASSETGROUP_ID')->textInput() ?>

    <?= $form->field($model, 'LOCATION_ID')->textInput() ?>

    <?= $form->field($model, 'VENDOR_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OWNER_PERSONNELGROUP_ID')->textInput() ?>

    <?= $form->field($model, 'OWNER_PERSONNEL_ID')->textInput() ?>

    <?= $form->field($model, 'SERVICEAGREEMENT_ID')->textInput() ?>

    <?= $form->field($model, 'CUSTODIAN_PERSONNEL_ID')->textInput() ?>

    <?= $form->field($model, 'STATUS_ID')->textInput() ?>

    <?= $form->field($model, 'assetbarcode')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'SERIALNUMBER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEPARTMENT_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CONDITION_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SCRAPVALUE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURRENTVALUE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PURCHASEPRICE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACCOUNTCODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PURCHASEORDERNUMBER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ISCHECKEDOUT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ASSETNAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BRAND')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MANUFACTURER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AUTOBARCODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ASSETTYPE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOCATION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CONDITIONs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CUSTODIAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'INCLUDEINAUDIT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEPRECIATIONMETHOD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RECOVERYPERIOD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATEINSERVICE')->textInput() ?>

    <?= $form->field($model, 'DATEAUDITED')->textInput() ?>

    <?= $form->field($model, 'DUEDATE')->textInput() ?>

    <?= $form->field($model, 'DATEPURCHASED')->textInput() ?>

    <?= $form->field($model, 'CHECKOUTDATE')->textInput() ?>

    <?= $form->field($model, 'DATECREATED')->textInput() ?>

    <?= $form->field($model, 'DATEUPDATED')->textInput() ?>

    <?= $form->field($model, 'LASTAUDITDATE')->textInput() ?>

    <?= $form->field($model, 'DATEWARRANTYEXPIRES')->textInput() ?>

    <?= $form->field($model, 'NEXTSERVICEDUEDATE')->textInput() ?>

    <?= $form->field($model, 'NOTES')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput() ?>

    <?= $form->field($model, 'office')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'returnables')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personnelid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dt')->textInput() ?>

    <?= $form->field($model, 'doreturnable')->textInput() ?>

    <?= $form->field($model, 'monthlyreport')->textInput() ?>

    <?= $form->field($model, 'store')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
