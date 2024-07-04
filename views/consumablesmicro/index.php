<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\db\Expression;
use app\models\Consumablesmicro;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
error_reporting(1);
?>
<div class="consumablesmicro-index">
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
        $mo=Consumablesmicro::find()->where(['birrformat'=>'birr'])->one(),
        $moo=Consumablesmicro::find()->where(['birrformat'=>'$'])->one(),
        $query=(new \yii\db\Query())->from('consumablesmicro'),//where(['birrformat'=>'birr']),
        $sum=$query->sum('cost'),
        $query1=(new \yii\db\Query())->from('consumablesmicro'),//where(['birrformat'=>'$']),
        $sum1=$query1->sum('totalcost'),
    'after'=>Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in dollar=>'.number_format($sum1).$moo->birrformat,[''],['class' => 'btn btn-success','style'=>"float:right;margin-top:2%"]),
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
            ['class' => 'yii\grid\SerialColumn'],
  [
         'attribute'=> 'lot',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
        return $var->lot;
           }
    else{
    return "  ";
        }},],
   [
         'attribute'=> 'noi',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
        return $var->noi;
           }
    else{
    return "  ";
        }
           },
           ],
  [
         'attribute'=> 'packsize',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
        return $var->packsize;
           }
    else{
    return "  ";
        }
           },
           ],
  [
         'attribute'=> 'quantity',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
        return $var->quantity;
           }
    else{
    return "  ";
        }
           },
           ],
   [
         'attribute'=> 'unit',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
        return $var->unit;
           }
    else{
    return "  ";
        }
           },
           ],
     [
         'attribute'=> 'cost',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->DISTINCT('catagory')->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
    return number_format($var->cost,2).$var->birrformat;
           }
    else{
    return "  ";
        }
           },
           ],
[
         'attribute'=> 'Total price',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
        return $model['quantity']*$model['cost'].$model['birrformat'];
          }
    else{
    return "  ";
        }},],
[
         'attribute'=> 'Expire',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
        return $var->expairedate;
           }
    else{
        return "  ";
           }},],
[
              'format'=>'raw',
               'header'=>'View',
              'value'=>function($model){
       $data=$model->id;
        $var =app\models\Consumablesmicro::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){        
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
     var catagory=$("#consumablesmicro-catagory").val();
     var noi=$("#consumablesmicro-noi").val();
     var packsize=$("#consumablesmicro-packsize").val();
     var unit=$("#consumablesmicro-unit").val();
     var lot=$("#consumablesmicro-lot").val();
     var quantity=$("#consumablesmicro-quantity").val();
     var dp=$("#consumablesmicro-dp").val();
     var expairedate=$("#consumablesmicro-expairedate").val();
     var shelflife=$("#consumablesmicro-shelflife").val();
     var location=$("#consumablesmicro-location").val();
     var shelfname=$("#consumablesmicro-shelfname").val();
     var shelfno=$("#consumablesmicro-shelfno").val();
     var dr=$("#consumablesmicro-dr").val();
     var am=$("#consumablesmicro-am").val();
     var department=$("#consumablesmicro-department").val();
     var birrformat=$("#consumablesmicro-birrformat").val();
     var cost=$("#consumablesmicro-cost").val();
     var purchasefrom=$("#consumablesmicro-purchasefrom").val();
     var unit=$("#consumablesmicro-unit").val();
     var remark=$("#consumablesmicro-remark").val();
     var id=$("#consumablesid").val();
    var href = "<?=Yii::$app->request->baseUrl;?>/index.php/consumablesmicro/create1/"+"?catagory="+catagory+"&noi="+noi+"&packsize="+packsize+"&unit="+unit+"&lot="+lot+"&quantity="+quantity+"&dp="+dp+"&expairedate="+expairedate+"&shelflife="+shelflife+"&location="+location+"&shelfname="+shelfname+"&shelfno="+shelfno+"&dr="+dr+"&am="+am+"&department="+department+"&birrformat="+birrformat+"&cost="+cost+"&purchasefrom="+purchasefrom+"&unit="+unit+"&remark="+remark;
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
          </p>Consumable Equipment </p>
      </div>
      <div class="modal-body">
     <div class="row"> 
    <div class="col-lg-11">
    <div id="toggle" style="display:inline">  
    <?php $model=new app\models\Consumablesmicro();?>
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
                 <div style="float:right;">
   <?= Html::a('<i class="fa fa-plus"></i>' . Yii::t('app', 'NEXT'), '#.', ['class' => 'btn btn-block btn-success', 'onclick' => "advancedSearch1()"]) ?>
                            </div></div></div></div>
                  <div class="row"> 
                  <div class="col-lg-11">
<div id="toggleSearch1" style="display:none">
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
