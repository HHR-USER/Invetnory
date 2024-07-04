<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\Consumables;
use app\models\Catagory;
use kartik\time\TimePicker;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use app\models\Stock;
use app\models\Orderitem;
/* @var $this yii\web\View */
/* @var $model app\models\Orderitem */
//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Order confirmation', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>    
<?php                     
    $pid = new app\models\Catagory(); 
    $mod="Consumable";
    $unit=app\models\ValueList::getUnit();
     ?> 
<div class="consumables-form">
   <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Receive Stock</b></i></h1>
        </div>
      <div class="orderitem-view">
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
    <div id="toggle" style="display:inline">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
         'id',
        'vendorid',
        'customename',
        'noi',
        'cost',
        'quantity',
        'type',
  [     'attribute'=>'Total',
      'format'=>'raw',
      'value'=>function($model){
      $item=Orderitem::find()->where(['id'=>$model->id])->one();
        return number_format($item['cost']*$item['quantity'],2);
        }],          
      ]
    ]) ?>

<?php
$Status=['not in use'=>'not in use','in use'=>'in use','I cannot decide'=>'I cannot decide'];
$purchasefrom=['LSHTM-Purchase'=>'LSHTM-Purchase','HU-purchase'=>'HU-purchase'];
$birrformat=['$'=>'$(dollar)','£'=>'$(Pound)','€'=>'$(Euro)','Birr'=>'Birr'];
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
<?php $model=new Consumables();?>
<div class="consumables-form">
   <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Consumable Registration Form</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(); ?>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
<?php                     
    $pid=new app\models\Catagory();
                $cc="Consumable"; 
?>
<!--<?=$form->field($model, 'catagory')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(app\models\Catagory::find()->where(['typeof_material'=>$cc])->all(),'catagoryname','catagoryname'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]
]);?>     -->
<?=$form->field($model,'pc')->textInput(['autocomplete'=>'off','placeholder'=>''])->label("Product Code")?>
<?=$form->field($model,'lot')->textInput(['autocomplete'=>'off','placeholder'=>'']) ?>
<?php
$v="Consumable";

?>
 <?= $form->field($model,'dp')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter Date of Production...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'startDate'      => date("y/m/d"),
           'changeYear'     => true,
           'changeMonth'    => true,
      ]
    ])?>
<?= $form->field($model,'expairedate')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter Expire Date...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'startDate'      => date("y/m/d"),
           'changeYear'     => true,
           'changeMonth'    => true,

      ]
    ])?> 
<?=$form->field($model,'location')->widget(Select2::classname(), [
    'data'=>$unit,//ArrayHelper::map(app\models\Catagory::find()->where(['typeof_material'=>$mod,'id'=>33])->all(),'location','location'),
    'language'=>'en',
    'options'=>['placeholder'=>'Enter Location'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]
])->label("Please Select CHAMPS As Main Store Location");?>              
 <?= $form->field($model, 'shelfname')->textInput(['autocomplete'=>'off','placeholder'=>'O12,O7']) ?>
 <?= $form->field($model, 'shelfno')->textInput(['autocomplete'=>'off','placeholder'=>'A,B,C,D,E']) ?>
<?= $form->field($model,'dr')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter Date Registered ...'],
                    'type'=>DatePicker::TYPE_COMPONENT_APPEND,
      'pluginOptions' => [
           'autoclose'      => true,
           'format'         => 'yyyy/mm/dd',
           'minuteStep'     => 1,
           'todayHighlight' => true,
           'startDate'      => date("y/m/d"),
           'changeYear'     => true,
           'changeMonth'    => true,

      ]
    ])?>
<?= $form->field($model, 'am')->textInput(['autocomplete'=>'off']) ?> 
<?= $form->field($model,'department')->dropDownList($deprt,['[prompt]'=>'--please select--']) ?>
<?= $form->field($model,'birrformat')->dropDownList($birrformat,["readonly"=>true,'autocomplete'=>'off']) ?>
<?php                     
    $pid = new app\models\Catagory(); 
    $mod="Consumable";
     ?>  
<?=$form->field($model,'purchasefrom')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(app\models\Catagory::find()->where(['typeof_material'=>$mod])->all(),'purchasefrom','purchasefrom'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter location'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]
]);?>              
<?= $form->field($model, 'shelflifedeicide')->dropDownList($shelflifedeicide,['prompt'=>'--please select--','onChange'=>'shelflifedeicide_fun($(this).val())'])  ?>
<span class="shelflifedeicide hide">
 <?= $form->field($model, 'shelflife')->textInput(['autocomplete'=>'off']) ?>
</span>
   </div></div><br/>
   <div class="form-group">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-6 col-md-6 col-sm-6">  
            </div>
<?= Html::submitButton('Save', ['class' => 'btn btn-success','data' => [
        'confirm' => 'Are you sure want to Create/Update this message?'
        ]]) ?>
                    </div></div></div></div>
              <?php ActiveForm::end(); ?>
                       </div>
                       </div>
<script>
function advancedSearch() {
    var x = document.getElementById("toggle");
    var y = document.getElementById("toggleSearch");
    if(x.style.display==="inline"){
        x.style.display = "none";
        y.style.display = "block";
    } else {
        x.style.display = "block";
    }}
function advancedSearch1() {
    var x = document.getElementById("toggle");
    var yy = document.getElementById("toggleSearch1");
    var y = document.getElementById("toggleSearch");
    var sav = document.getElementById("save");
    if(yy.style.display==="none"){
        x.style.display = "none";
        yy.style.display = "block";
        y.style.display = "none";
        sav.style.display = "block";
    } else {
        yy.style.display = "block";
    }}
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