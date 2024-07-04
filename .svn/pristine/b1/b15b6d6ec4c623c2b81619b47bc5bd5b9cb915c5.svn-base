<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title='Inventory System';

$fieldOptions1=[
    'options'=>['class'=>'form-group has-feedback'],
    'inputTemplate'=>"{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];
$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
<?php if(Yii::$app->session->hasFlash('Success')): ?>
<div class="alert alert-success" role="alert">
    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <?= Yii::$app->session->getFlash('Success') ?><span class="glyphicon glyphicon-ok"></span>
</div>
<?php endif; ?>
    <?php if(Yii::$app->session->hasFlash('danger')): ?>
<div class="alert alert-danger" role="alert">
    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <?= Yii::$app->session->getFlash('danger') ?><span class="glyphicon glyphicon-ok">          
    </span>
</div>
<?php 
endif;?>
<div class="container">
<div class="site-login">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><i> : Please fill out the following fields to sign in:</i></h1>
  </div>
  <div class="panel-body">
      <div class="col-lg-12 col-md-12 col-sm-12">
    <?php $form = ActiveForm::begin([
        'id'=>'login-form',
        'options'=>['class'=>'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
     <?php
        $users = new app\models\Users();
        $listusers = \yii\helpers\ArrayHelper::map(app\models\Users::find()->all(), 'username', 'username')
     ?>
    <?=$form->field($model, 'username')->label(false)->widget(Select2::classname(), [
        'data' => $listusers,
        'options' => ['placeholder' => 'Select  your username ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>
    <?=$form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>
    <div class="form-group">
            <div class="col-lg-offset-5 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
      </div>
  </div>
</div>
</div>
</div>
