<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Stock */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $ty="None Consumables";?>
<?php
    $office=['Admin'=>'CHAMPS(PROJECT MANAGEMENT UNIT AND OPERATION UNIT(Which is Main store))','Microlab'=>'MICROBIOLOGY LAB UNIT','Clinical'=>'CLINICAL','Pathology'=>'PATHOLOGY LAB UNIT','IT'=>'IT(Information Technology)','SBS'=>'SBS UNIT','PSU'=>'PREGNANCY SURVEIILANCE UNIT','KHDSS'=>'HDSS'];
             ?>
<div class="stock-form" style="margin-top:-3%">
<div class="panel panel-info">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>update Asset request form</b></i></h1>
        </div> <br>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'type')->textInput(['maxlength' => true,'disabled'=>true]) ?>
<?php
$idd=1;
$var=ArrayHelper::map(app\models\Itemc::find()->where(['type'=>$ty])->all(),'noi',
            function ($model) {
                return $model['noi'] ;
            });
            ?>
<?= $form->field($model,'noi')->widget(Select2::classname(), [
            'data'=>$var,
            'options'=>['placeholder'=>'Select  Item ...'],
            'pluginOptions'=>[
                'depends' => [''],
                'url'=>Url::to(['#'])
            ],
        ]); ?>
  <!--  <?= $form->field($model, 'NOA')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'fname')->textInput(['maxlength' =>true]) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>
  <?=$form->field($model,'department')->dropDownList($office,['prompt' =>'please select'])->label("From Which store location/office You want to request?") ?>

    <!-- <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birrformat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'purchasefrom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dor')->textInput() ?>-->

    <?= $form->field($model, 'specification')->textarea(['rows' => 3]) ?>

  <!--  <?= $form->field($model, 'vendorid')->textInput(['maxlength' => true]) ?>-->
</div></div>          
             <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div></div></div></div>

    <?php ActiveForm::end(); ?>

</div>
