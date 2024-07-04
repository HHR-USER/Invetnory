<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\select2\Select2;
use app\models\Users;
$this->title='Inventory System';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
 function assign()
      {
    var username=$("#users-username").val();
    var lnm_email=$("#users-lnm_email").val();
    var id=$("#usersid").val();
    var href="<?=Yii::$app->request->baseUrl;?>/index.php/users/assignrole/"+"?username="+username+"&lnm_email="+lnm_email;
	window.location.href=href;
          }
</script>
<div class="row" style="float:right;marign-top:fixed">
<?php $model=new app\models\Users();?>
<?php 
$form=\yii\widgets\ActiveForm::begin([
                    'id'=>'profile-form',
                    'options'=>['class'=>'form-vertical'],
		    'fieldConfig'=>[
                    'template'=>"{label}\n<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-sm-offset-2 col-lg-9\">{error}\n{hint}</div>",
                    'labelOptions'=>['class'=>'col-lg-3 control-label']],]); ?>
 <div class="col-lg-10 col-md-5 col-sm-5">
<?php
// It was added  to the following  where(['site'=>NULL])
           // $var=ArrayHelper::map(app\models\Users::find()->where(['!=','role','Linemanager'])->all(),'username',
           $var=ArrayHelper::map(app\models\Users::find()->all(),'username',
            function($model){
                return $model['username'];
            });
            ?>
<?=$form->field($model,'username')->widget(Select2::classname(), [
            'data'=>$var,
            'options'=>['placeholder'=>'Assign new user role...'],
            'pluginOptions'=>[
                'depends'=>[''],
                'url'=>Url::to(['#'])
            ],]); ?>        
        </div>
<div class="col-lg-10 col-md-5 col-sm-5"> 
<?php
$var=ArrayHelper::map(app\models\ValueList::find()->where(['index'=>1])->all(),'value',
        function ($model){return $model['value'];});?>
<?=$form->field($model,'lnm_email')->widget(Select2::classname(),[
            'data'=>$var,
            'options'=>['placeholder'=>'Select Email ...'],
            'pluginOptions'=>[
            'depends'=>[''],
            'url'=>Url::to(['#'])],]);?> 
<?php
$total=count($var); 
echo "<b style='background-color:red;color:white;margin-left:-40px;'>Total:".$total."</b>";?>  
<?=Html::button('',['class'=>'btn btn-xs btn-success glyphicon glyphicon-plus','style'=>'float:right;margin-top:-3%','onClick'=>"popup()"]); ?>
<div class="form-group">
  <div class="col-lg-12 col-md-10 col-sm-10">
  <button type="button" class="btn btn-success" style="float:right" onClick="assign()">Assign To Line Manager</button>
    </div>
    <?php ActiveForm::end(); ?>
  </div></div></div>
<div class="users-index">
    <?php if(Yii::$app->session->hasFlash('Success')):?>
<div class="alert alert-success" role="alert">
    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <?=Yii::$app->session->getFlash('Success')?><span class="glyphicon glyphicon-ok"></span>
</div>
<?php endif; ?>
<?php if(Yii::$app->session->hasFlash('danger')):?>
<div class="alert alert-danger" role="alert">
    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <?=Yii::$app->session->getFlash('danger') ?><span class="glyphicon glyphicon-ok">          
    </span>
</div>
<?php 
endif;?>
<div class="users-index">
    <?php Pjax::begin(); ?>
    <?php echo GridView::widget([

     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showPageSummary'=>false,
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i> All User List</h3>',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Create Users', ['create'], ['class' => 'btn btn-primary','style'=>'float:right']),
        'type'=>'success',
         ],
        'bootstrap' =>true,
        'hover'=>true,
         'pjax'=>true,
        'emptyCell'=>'-',
        'tableOptions' =>['class' => 'table table-hover table-striped table-responsive table-condensed'],
        'toolbar'=> [ 
            '{export}',
            ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'fname',
            'mname',
            'lname',
            'username',
            'Type',
         [
            'class'=>'yii\grid\ActionColumn',
            'header'=>'Action',
            'headerOptions'=>['width'=>'100'],
            'template'=>'</span>{view}<span class="glyphicon glyphicon-option-vertical"></span></span>{update}',
            ],
        ],
     ]);?>
 <?php Pjax::end();?>
</div></div></div>
<!------------------------------------------As----------------------------->
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
    function popup(){
       $("#valuelistid").val();
       $("#consentModal").modal('show');
    }    
    function popups()
      {
     var value=$("#valuelist-value").val();
     var href="<?=Yii::$app->request->baseUrl;?>/index.php/value-list/linemanager/"+"?value="+value;
     window.location.href=href;
    }
</script>
 <div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="glyphicon glyphicon-user" id="myModalLabel" style="float:left;">Add Unit(Staff Email)</h4>
      <div class="modal-body">
        <div class="row"> 
      <div class="col-lg-10">
 <?php ActiveForm::begin(); ?>
 <?php $modell=new app\models\Valuelist();?>
<?=$form->field($modell,'value')->dropDownList(Users::getEmails(),['prompt'=>'--Please select--']) ?>
<div class="modal-footer">
        <input type="hidden" value="" id="valuelistid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onClick="popups()">Submit</button>
      </div><?php ActiveForm::end(); ?></div>
    </div></div></div>
   </div>
   </div>
    </div>