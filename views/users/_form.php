<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\Personnel;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$role=["Linemanager"=>"Linemanager","PI"=>"PI",'Other staff'=>'Other staff'];
$type=['PO'=>'Programm Office','Admin'=>'CHAMPS(PROJECT MANAGEMENT UNIT AND OPERATION UNIT)','Microlab'=>'MICROBIOLOGY LAB UNIT','Clinical'=>'CLINICAL','Pathology'=>'PATHOLOGY LAB UNIT','IT'=>'IT(Information Technology)','SBS'=>'SBS UNIT','PSU'=>'PREGNANCY SURVEIILANCE UNIT','KHDSS'=>'HDSS'];//,'Personnel'=>'Personnel(Staff)'];
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="users-form" style="margin-top:-4%">
        <div class="panel panel-success">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Create account for users</b></i></h1>
        </div>   
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11">        
   <?php $form = \yii\widgets\ActiveForm::begin([
                    'id'=>'profile-form',
                  'method' => 'post',
                  'options'=>['enctype' => 'multipart/form-data'],
                    'fieldConfig'=>[
                        'template' => "{label}\n<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-sm-offset-2 col-lg-9\">{error}\n{hint}</div>",
                        'labelOptions' =>['class'=>'col-lg-3 control-label']],
                ]); ?>
    <?= $form->field($model, 'fname')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
    <?= $form->field($model, 'mname')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
    <?= $form->field($model, 'lname')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
    <?= $form->field($model, 'username')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength'=> true]) ?>
<?= $form->field($model,'Type')->dropDownList($type,['prompt'=>'please select..'])->label('From which Unit/staff you are?') ?>
<?=$form->field($model,'role')->dropDownList($role,['prompt'=>'please select'])->label('Role') ?>
      <?php
$idd=1.1;
        $var = ArrayHelper::map(Personnel::find()->where('personnelid'!=$idd)->all(), 'personnelid',
            function ($model) {
                return $model['personnelid'] .' '. $model['firstname'].'  '.$model['lastname'];
            });
            ?>
<?= $form->field($model,'personnelid')->widget(Select2::classname(), [
            'data' => $var,
        'options' => ['placeholder' => 'Select  Personnel ...'],
            'pluginOptions' => [
                'depends' => [''],
                'url' => Url::to(['#'])
            ],
        ]); ?>
    <?=$form->field($model, 'email')->textInput(['maxlength' => true]) ?>
</div>
     <div class="col-xs-11,col-xs-5 col-xs-5">
    </div>
        <div class="col-xs-11,col-xs-5 col-xs-5">
        <?=Html::submitButton('Create user',['class'=>'btn btn-success','name'=>'Users']) ?>
    </div></div></div></div>
    <?php ActiveForm::end(); ?>
</div></div>
</div>