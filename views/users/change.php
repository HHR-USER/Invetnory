<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\filters\AccessControl;
/* @var $this yii\web\View */
/* @var $model app\models\Admin */
/* @var $form yii\widgets\ActiveForm */
$role=['Admin'=>'Admin','IT'=>'IT'];
?>
 <div class="panel-heading">
    <body>
   <legend><span class="number"></span> <b>Change Password<h3 style="color:blue"><?= Html::encode("For User"." ".Yii::$app->user->identity->username)?></h3></b>
</legend>
 <?php $form=\yii\widgets\ActiveForm::begin([
                    'id'=>'profile-form',
                  'options'=>['enctype'=>'multipart/form-data'],
                    'fieldConfig'=>[
                        'template'=>"{label}\n<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-sm-offset-2 col-lg-9\">{error}\n{hint}</div>",
                        'labelOptions'=>['class'=>'col-lg-3 control-label']],
                ]); ?>
        <div class="row">
          <div class="col-lg-10">
    <?=$form->field($model,'oldpassword')->passwordInput(['placeholder'=>"Enter old password",'required'=>'required']) ?>
    <?=$form->field($model,'newpassword')->passwordInput(['placeholder'=>" Enter new password",'required'=>'required']) ?>
    <?=$form->field($model,'confirmpas')->passwordInput(['placeholder'=>"Confirm password",'required'=>'required']) ?>
</div></div>
 <div class="col-lg-10 col-md-10 col-sm-10">
            <div class="col-lg-6 col-md-6 col-sm-6">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
    <?= Html::submitButton('Change Password', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div></div></div>
<style type="text/css">
 *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}
form {
  margin: 10px auto;
  padding: 10px 20px;
  border-radius: 8px;
}
h1 {
  margin: 0 0 30px 0;
  text-align: center;
} 
 .tbl{
 width: 100%;
 }
 .tbl table, th, td {
  boryyer: 0.5px solid gray;
   border-collapse: collapse;
   
}

.content-wrapper{
  min-width: 50%;
}
</style>