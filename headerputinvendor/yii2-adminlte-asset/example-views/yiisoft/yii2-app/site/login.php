<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\alert\AlertBlock;
use kartik\growl\Growl;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
$this->title='Inventory System';
$fieldOptions1=[
    'options'=>['class'=>'form-group has-feedback'],
    'inputTemplate'=>"{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];
$fieldOptions2=[
    'options'=>['class'=>'form-group has-feedback'],
    'inputTemplate'=>"{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
</br>
  <head>
    <meta charset="UTF-8">
    <title>*Login*</title>
     <link rel="stylesheet" href="assets/css/style.css">  
  </head>
<body style="background:#F8F8F8 ;">
<div class="login-box">
<b><u><h6 class="text-center"><b>CIMS</b><span class="text-center"><i><b>-CHAMPS Inventory Management Software</b></i></span></h6></u></b>
    <div class="login-logo">
        <!--<a href="#"><b>Admin</b>LTE</a>-->

    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
	<?php if(Yii::$app->session->hasFlash('Success')): ?>
<div class="alert alert-success" role="alert">
    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <?= Yii::$app->session->getFlash('Success') ?><span class="glyphicon glyphicon-ok"></span>
</div>
<?php endif; ?>
<?php if(Yii::$app->session->hasFlash('Success')):?>
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
   <p class="login-box-users">Sign in to start your session</p>
   <?php $form = ActiveForm::begin(['id'=>'login-form', 'enableClientValidation' => false]); ?>
   <?=$form
            ->field($model,'username',$fieldOptions1)
            ->label(false)
            ->textInput(['placeholder'=>$model->getAttributeLabel('username'),'required'=>'required','autocomplete'=>'off']) ?>

        <?= $form
            ->field($model,'password',$fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password'),'required'=>'required','autocomplete'=>'autocomplete']) ?>
        <div class="row">
            <div class="col-xs-8">
              <!--  <?= $form->field($model, 'rememberMe')->checkbox() ?>-->
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?=Html::submitButton('--Sign In--',['class' =>'btn btn-success fa fa-user','name'=>'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>
        <?php ActiveForm::end(); ?>

        <!--<div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in
                using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign
                in using Google+</a>
        </div>-->
        <!-- /.social-auth-links -->

        <a href="#"></a><br>
        <a href="register.html" class="text-center"></a>
    
<script type="text/javascript" src="asset/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/regis.js"></script>
    </body>
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
