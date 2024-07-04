<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\Consumablespathology;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
error_reporting(1);
?>
<div class="consumablespathology-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' =>$dataProvider,
        'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Consumable List</h3>',
        $mo=Consumablespathology::find()->where(['birrformat'=>'birr'])->one(),
        $moo=Consumablespathology::find()->where(['birrformat'=>'$'])->one(),
         $query=(new \yii\db\Query())->from('consumablespathology')->where(['birrformat'=>'birr']),
        $sum=$query->sum('cost'),
        $query1=(new \yii\db\Query())->from('consumablespathology')->where(['birrformat'=>'$']),
        $sum1=$query1->sum('cost'),
       // 'after'=>Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in birr=>'.number_format($sum).$mo->birrformat."         ".'<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in dollar=>'.number_format($sum1).$moo->birrformat,[''], ['class' => 'btn btn-success','style'=>"float:right;margin-top:2%"]),
         //'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Createconsumable', ['create'], ['class' => 'btn btn-primary','style'=>"float:right"]),//'onClick'=>"popup()"]),
        'type'=>'info',
         ],
        'bootstrap' =>true,
        'hover'=>true,
      'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
    'headerRowOptions' => ['class' => 'kartik-sheet-style','style'=>'background-color:#ffffff'],
    'filterRowOptions' => ['class' => 'kartik-sheet-style'],
          'pjax'=>true,
        'emptyCell'=>'-',
        'tableOptions' =>['class' => 'table table-hover table-striped table-responsive table-condensed'],
       
    'toolbar'=> [ 
            '{export}',
            '{toggleData}',
            ],
      'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    // set export properties
    'export' => [
        'fontAwesome' => true
    ],
      'persistResize' => false,
    'toggleDataOptions' => ['minCount' => 10],
    'itemLabelSingle' => 'stock',
    'itemLabelPlural' => 'stock',
      'columns' => [
          //['class'=>'yii\grid\CheckboxColumn'],
   [
         'attribute'=> 'lot',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablespathology::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){
        return $model['lot'];
           }
    else{
    return "  ";
        }},],
   [
         'attribute'=> 'noi',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablespathology::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){
        return $model['noi'];
           }
    else{
    return "  ";
        }},],

   [
         'attribute'=> 'unit',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablespathology::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){
        return $model['unit'];
           }
    else{
    return "  ";
        }},
           ],
     [
         'attribute'=> 'cost',
          'headerOptions'=>["class"=>"text-success"],
         'value'=>function($model){
          //->DISTINCT('catagory')
          $data=$model->id;
        $var =app\models\Consumablespathology::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){
    return number_format($model['cost'],2).$var->birrformat;
           }
    else{
    return "  ";
        }
           },
           ],
[
         'attribute'=> 'Expiration date',
         'value'=>function($model){
          $data=$model->id;
        $var=app\models\Consumablespathology::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){
        return $var->expairedate;
           }
    else{
        return "  ";
           }},],
[
              'format'=>'raw',
               'header'=>'View',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($model){
       $data=$model->id;
        $var =app\models\Consumablespathology::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){        
    return Html::a('View',['view','id'=>$data,],['class'=>'btn btn-xs btn-primary glyphicon glyphicon-eye-open']);
          }
         else{
        return "  ";
           }},
         ],

       ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(){
       $("#consumablesid").val();
       $("#consentModal").modal('show');
    }
function consumable()
       {
     var catagory=$("#consumablespathology-catagory").val();
     var noi=$("#consumablespathology-noi").val();
     var packsize=$("#consumablespathology-packsize").val();
     var unit=$("#consumablespathology-unit").val();
     var lot=$("#consumablespathology-lot").val();
     var quantity=$("#consumablespathology-quantity").val();
     var dp=$("#consumablespathology-dp").val();
     var expairedate=$("#consumablespathology-expairedate").val();
     var shelflife=$("#consumablespathology-shelflife").val();
     var location=$("#consumablespathology-location").val();
     var shelfname=$("#consumablespathology-shelfname").val();
     var shelfno=$("#consumablespathology-shelfno").val();
     var dr=$("#consumablespathology-dr").val();
     var am=$("#consumablespathology-am").val();
     var department=$("#consumablespathology-department").val();
     var birrformat=$("#consumablespathology-birrformat").val();
     var cost=$("#consumablespathology-cost").val();
     var purchasefrom=$("#consumablespathology-purchasefrom").val();
     var unit=$("#consumablespathology-unit").val();
     var remark=$("#consumablespathology-remark").val();
     var id=$("#consumablesid").val();
    var href = "<?=Yii::$app->request->baseUrl;?>/index.php/consumablespathology/create1/"+"?catagory="+catagory+"&noi="+noi+"&packsize="+packsize+"&unit="+unit+"&lot="+lot+"&quantity="+quantity+"&dp="+dp+"&expairedate="+expairedate+"&shelflife="+shelflife+"&location="+location+"&shelfname="+shelfname+"&shelfno="+shelfno+"&dr="+dr+"&am="+am+"&department="+department+"&birrformat="+birrformat+"&cost="+cost+"&purchasefrom="+purchasefrom+"&unit="+unit+"&remark="+remark;
    window.location.href =href;
          }
</script>
<?php
$purchasefrom=['LSHTM-Purchase'=>'LSHTM-Purchase','HU-purchase'=>'HU-purchase'];
$birrformat=['$'=>'$(dollar)','birr'=>'birr'];
?>
 <div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="glyphicon glyphicon-plus-sign" id="myModalLabel" style="float:left;"></h4>
          </p>Add consumable Equipment </p>
      </div>
      <div class="modal-body">
     <div class="row"> 
    <div class="col-lg-11">
    <div id="toggle" style="display:inline">  
    <?php $model=new app\models\Consumablespathology();?>
     <?php $form=ActiveForm::begin(); ?>
<?php                     
    $pid = new app\models\Catagory(); 
      $psg=\yii\helpers\ArrayHelper::map(app\models\Catagory::find()->where('id!=-1')->all(),'catagoryname','catagoryname');
     ?>             
<?= $form->field($model, 'catagory')->dropDownList($psg,['prompt'=>'Please select'],['readonly'=>true,'required'=>"required"])?>
<?= $form->field($model, 'noi')->textInput(["required"=>"required",'autocomplete'=>'off']) ?>
<?= $form->field($model, 'packsize')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'Eg 50 pair/pack,200gm,1/bottle']) ?>
<?= $form->field($model, 'unit')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'Eg pc,pck,set,bottle,set']) ?>
<?= $form->field($model, 'lot')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'']) ?>
 <?= $form->field($model, 'quantity')->textInput(["required"=>"required",'autocomplete'=>'off',"oninput"=>"this.value=this.value.replace(/[^0-9]/g,'');"]) ?>
 <div style="float:right;">
   <?= Html::a('<i class="fa fa-plus"></i>' . Yii::t('app', 'NEXT'), '#.', ['class' => 'btn btn-block btn-success', 'onclick' => "advancedSearch()"]) ?>
                            </div></div></div></div>
                  <div class="row"> 
                  <div class="col-lg-11">
                  <div id="toggleSearch" style="display:none">
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
           'startDate'=>'today'

      ]
    ])?>
 <?= $form->field($model, 'shelflife')->textInput(["required"=>"required",'autocomplete'=>'off']) ?>
 <?= $form->field($model, 'location')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'container']) ?> 
 <?= $form->field($model, 'shelfname')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'O12,O7']) ?>
 <?= $form->field($model, 'shelfno')->textInput(["required"=>"required",'autocomplete'=>'off','placeholder'=>'A,B,C,D,E']) ?>
                 <div style="float:right;">
   <?= Html::a('<i class="fa fa-plus"></i>' . Yii::t('app', 'NEXT'), '#.', ['class' => 'btn btn-block btn-success', 'onclick' => "advancedSearch1()"]) ?>
                            </div></div></div></div>
                  <div class="row"> 
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
<?= $form->field($model,'department')->textInput(["required"=>"required",'autocomplete'=>'off']) ?>
<?= $form->field($model,'birrformat')->dropDownList($birrformat,["prompt"=>"please select","required"=>"required",'autocomplete'=>'off']) ?>
<?= $form->field($model, 'cost')->textInput(["required"=>"required",'autocomplete'=>'off',"oninput"=>"this.value=this.value.replace(/[^0-9.$ birr]/g,'');"]) ?> 
<?= $form->field($model, 'purchasefrom')->dropDownList($purchasefrom,['prompt'=>'please select'],["required"=>"required",'autocomplete'=>'off']) ?> 
 <?= $form->field($model,'remark')->textArea(['row'=>6,'autocomplete'=>'off']) ?>
    </div></div></div>
    <div id="save" style="display:none">  
    <div class="modal-footer">
        <input type="hidden" value="" id="consumablesid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="consumable()">Submit</button>
      </div></div>
      <?php ActiveForm::end(); ?>
  </div></div></div></div>
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
