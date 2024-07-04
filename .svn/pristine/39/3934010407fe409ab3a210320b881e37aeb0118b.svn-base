<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\Assetsmicro */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$Status=['Old'=>'Old','New'=>'New','I cannot decide'=>'I cannot decide'];
$purchasefrom=['LSHTM-Purchase'=>'LSHTM-Purchase','HU-purchase'=>'HU-purchase'];
$birrformat=['$'=>'$(dollar)','birr'=>'birr'];
$shelflifedeicide=['Y'=>'Yes','N'=>'No'];
$deprt=['Admin'=>'Admin'];
?>
<?php
$routeAjax = \yii\helpers\Url::toRoute("order-eq/index");
$js=<<<JS
function getRelatedFields(vendroid){
    $.ajax({
        url:'$routeAjax',
        dataType:'json',
        method:'GET',
        data:{vendroid:vendroid},
        success:function (data) {
             $('#stock-vendorid').val(data.vendroid);
        },
        beforeSend: function (xhr) {
            alert('loading sure!');
        },
    });
}
JS;
$this->registerJs($js, \yii\web\View::POS_READY);
?>
<div class="assets-form">
      <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Assets registration form</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(['options' => ['id' => 'codeid']]); ?>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
<?= $form->field($model, 'MODEL')->textInput(['maxlength' => true,'autocomplete'=>'off','requred'=>true]) ?>
<?= $form->field($model, 'serial')->textInput(['maxlength' => true,'autocomplete'=>'off','requred'=>true]) ?>
<?= $form->field($model, 'assetbarcode')->textInput(['maxlength' => true,"onmouseover"=>"this.focus();",'autocomplete'=>'off']) ?>
<!--<?= $form->field($model, 'ASSETID')->textInput(['autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'PARENTASSET_ID')->textInput(['autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'ASSETGROUP_ID')->textInput(['autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'OWNER_PERSONNEL_ID')->textInput(['autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'LOCATION_ID')->textInput(['autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'SERVICEAGREEMENT_ID')->textInput(['autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'CUSTODIAN_PERSONNEL_ID')->textInput(['autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'STATUS_ID')->textInput(['autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'DEPARTMENT_ID')->textInput(['maxlength' => true,'autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'CONDITION_ID')->textInput(['maxlength' => true,'autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'AUTOBARCODE')->textInput(['maxlength' => true,'autocomplete'=>'off','required' => true,]) ?>
<?= $form->field($model, 'RECOVERYPERIOD')->textInput(['maxlength' => true,'autocomplete'=>'off','required' => true,]) ?>-->
<?= $form->field($model, 'Picture')->widget(FileInput::classname(), [
              'options' => ['accept' => 'uploads/*'],
               'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png'],'showUpload' => true,],
          ]);   ?>
    <?= $form->field($model, 'NOTES')->textArea(['maxlength' => true]) ?>
    <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
        <?php echo Html::submitButton('Save & Close',[array('class'=>'save_close_btn'),'data'=>[
        'confirm'=>'Are you sure want to Create/Update this record?'
        ]]); ?>

    </div></div>
   <?php ActiveForm::end(); ?>
</div></div>
</div>
<script type="text/javascript">
function shelflifedeicide_fun(val)
            {
  if(val=="Y")
                {
         $(".shelflifedeicide").removeClass('hide');
                  }
  else{
             $(".shelflifedeicide").addClass('hide');
               }}
</script>
<script type="text/javascript">
(function() {
    var textField = document.getElementById('codeid');

    if(textField) {
        textField.addEventListener('keydown', function(mozEvent) {
            var event = window.event || mozEvent;
            if(event.keyCode === 13) {
                event.preventDefault();
            }
        });
    }
})();
</script>