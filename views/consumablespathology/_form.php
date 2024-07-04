<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Stock;
/* @var $this yii\web\View */
/* @var $model app\models\Consumables */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$Status=['Old'=>'Old','New'=>'New','I cannot decide'=>'I cannot decide'];
$purchasefrom=['LSHTM-Purchase'=>'LSHTM-Purchase','HU-purchase'=>'HU-purchase'];
$birrformat=['$'=>'$(dollar)','birr'=>'birr'];
$shelflifedeicide=['Y'=>'Yes','N'=>'No'];
$deprt=['Pathology'=>'Pathology'];
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
<div class="consumables-form">
   <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Consumable registration form</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(); ?>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
<?php                     
    $pid = new app\models\Catagory();
                $cc="Consumable"; 
?>
<?=$form->field($model, 'catagory')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(app\models\Catagory::find()->where(['typeof_material'=>$cc])->all(),'catagoryname','catagoryname'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]
]);?>     
<?php                     
    $pid = new app\models\Stock(); 
            $c="Consumable";
?>
<?=$form->field($model, 'noi')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(app\models\Stock::find()->where(['Type'=>$c])->all(),'noi','noi'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]
]);?>     
<?= $form->field($model, 'packsize')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'Eg 50 pair/pack,200gm,1/bottle']) ?>
<?= $form->field($model, 'unit')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'Eg pc,pck,set,bottle,set']) ?>
<?= $form->field($model, 'lot')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'']) ?>
<?php
$v="Consumable";

?>
<?=$form->field($model, 'vendorid')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(Stock::find()->where(['type'=>$v])->all(),'vendorid','vendorid'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter vendor id'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]
]);?>       
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
           'startDate'=>'today',

      ]
    ])?>
<?php                     
    $pid = new app\models\Catagory(); 
    $mod="Consumable";
     ?>  
<?=$form->field($model, 'location')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(app\models\Catagory::find()->where(['typeof_material'=>$mod])->all(),'location','location'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter location'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]
]);?>              
 <?= $form->field($model, 'shelfname')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'O12,O7']) ?>
 <?= $form->field($model, 'shelfno')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'A,B,C,D,E']) ?>
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
<?= $form->field($model, 'shelflifedeicide')->dropDownList($shelflifedeicide,['prompt'=>'--please select--','onChange'=>'shelflifedeicide_fun($(this).val())'])  ?>
<span class="shelflifedeicide hide">
 <?= $form->field($model, 'shelflife')->textInput(['autocomplete'=>'off']) ?>
</span>
 <?= $form->field($model,'remark')->textArea(['row'=>6,'autocomplete'=>'off']) ?>
             </div></div>><br/>
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