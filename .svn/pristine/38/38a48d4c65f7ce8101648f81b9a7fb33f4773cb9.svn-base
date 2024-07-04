<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\Orderitem */
//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Order confirmation', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!--<button onclick="myFunction()" id="btnPrint" class="btn btn-primary" >
    Print 
  </button>
  <script>
 function myFunction() {
   window.print();
 }
</script>-->
<div class="orderitem-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'noi',
            'quantity',
            'unitprice',
            'description',
        ],
    ]) ?>

</div>
<?php
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use app\models\Consumables;
/* @var $this yii\web\View */
/* @var $model app\models\Consumables */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$purchasefrom=['LSHTM-Purchase'=>'LSHTM-Purchase','HU-purchase'=>'HU-purchase'];
$birrformat=['$'=>'$(dollar)','birr'=>'birr'];
$deprt=['Admin'=>'Admin'];
?>
<?php   $model = new Consumables(); 
?>
<div class="consumables-form">
   <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Add more</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(); ?>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
    <div id="toggle" style="display:inline">  
<?php                     
    $pid = new app\models\Catagory(); 
      $psg=\yii\helpers\ArrayHelper::map(app\models\Catagory::find()->where('id!=-1')->all(),'catagoryname','catagoryname');
     ?>             
<?= $form->field($model, 'catagory')->dropDownList($psg,['prompt'=>'Please select'],['readonly'=>true,'required'=>"required"])?>
<?= $form->field($model, 'noi')->textInput(["required"=>"required",'autocomplete'=>'off']) ?>
<?= $form->field($model, 'packsize')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'Eg 50 pair/pack,200gm,1/bottle']) ?>
<?= $form->field($model, 'unit')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'Eg pc,pck,set,bottle,set']) ?>
<?= $form->field($model, 'lot')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'']) ?>
<?php                     
    $pid = new app\models\Vendor(); 
      $psg=\yii\helpers\ArrayHelper::map(app\models\Vendor::find()->where('id!=-1')->all(),'vendorid','vendorid');
     ?>             
<?= $form->field($model, 'vendorid')->dropDownList($psg,['prompt'=>'Please select'],['readonly'=>true,'required'=>"required"])?>
 <?= $form->field($model, 'quantity')->textInput(["required"=>"required",'autocomplete'=>'off',"oninput"=>"this.value=this.value.replace(/[^0-9]/g,'');"]) ?>
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
           'endDate'=>'today'

      ]
    ])?>
 <div style="float:right;">
   <?= Html::a('<i class="fa fa-plus"></i>' . Yii::t('app', 'NEXT'), '#.', ['class' => 'btn btn-block btn-success', 'onclick' => "advancedSearch()"]) ?>
                            </div></div></div></div></div>
               <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
                  <div id="toggleSearch" style="display:none">
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
 <?= $form->field($model, 'shelflife')->textInput(["required"=>"required",'autocomplete'=>'off']) ?>
<?php                     
    $pid = new app\models\Catagory(); 
      $psg=\yii\helpers\ArrayHelper::map(app\models\Catagory::find()->where('id!=-1')->all(),'location','location');
     ?>             
<?= $form->field($model, 'location')->dropDownList($psg,['prompt'=>'Please select'],['readonly'=>true,'required'=>"required"])?>
 <?= $form->field($model, 'shelfname')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'O12,O7']) ?>
 <?= $form->field($model, 'shelfno')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'A,B,C,D,E']) ?>
                 <div style="float:right;">
   <?= Html::a('<i class="fa fa-plus"></i>' . Yii::t('app', 'NEXT'), '#.', ['class' => 'btn btn-block btn-success', 'onclick' => "advancedSearch1()"]) ?>
                            </div></div></div></div></div>
 <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
<div id="toggleSearch1" style="display:none">
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
           'endDate'=>'today'

      ]
    ])?>
<?= $form->field($model, 'am')->textInput(["required"=>"required",'autocomplete'=>'off']) ?> 
<?= $form->field($model,'department')->dropDownList($deprt,['disabled'=>true]) ?>
<?= $form->field($model,'birrformat')->dropDownList($birrformat,["prompt"=>"please select","required"=>"required",'autocomplete'=>'off']) ?>
<?= $form->field($model, 'cost')->textInput(["required"=>"required",'autocomplete'=>'off',"oninput"=>"this.value=this.value.replace(/[^0-9.$ birr]/g,'');"]) ?> 
<?php                     
    $pid = new app\models\Catagory(); 
      $psg=\yii\helpers\ArrayHelper::map(app\models\Catagory::find()->where('id!=-1')->all(),'purchasefrom','purchasefrom');
     ?>             
<?= $form->field($model, 'purchasefrom')->dropDownList($psg,['prompt'=>'Please select'],['readonly'=>true,'required'=>"required"])?>
 <?= $form->field($model, 'shelflife')->textInput(["required"=>"required",'autocomplete'=>'off']) ?>
 <?= $form->field($model,'remark')->textArea(['row'=>6,'autocomplete'=>'off']) ?>
             </div></div></div><br/>
      <div id="save" style="display:none">  
   <div class="form-group">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-6 col-md-6 col-sm-6">  
            </div>
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
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
</script>