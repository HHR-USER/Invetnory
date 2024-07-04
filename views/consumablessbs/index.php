<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\Consumables;
error_reporting(1);
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumables-index">
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
        $mo=Consumables::find()->where(['birrformat'=>'birr'])->one(),
        $moo=Consumables::find()->where(['birrformat'=>'$'])->one(),
        $query=(new \yii\db\Query())->from('consumables')->where(['birrformat'=>'birr']),
        $sum=$query->sum('cost'),
        $query1=(new \yii\db\Query())->from('consumables')->where(['birrformat'=>'$']),
        $sum1=$query1->sum('cost'),
        //'after'=>Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in birr=>'.number_format($sum).$mo->birrformat."         ".'<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in dollar=>'.number_format($sum1).$moo->birrformat,[''], ['class' => 'btn btn-success','style'=>"float:right;margin-top:2%"]),
        // 'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Createconsumable', ['create'], ['class' => 'btn btn-primary','style'=>"float:right"]),//,'onClick'=>"popup()"]),
        'type'=>'info',
         ],
        'bootstrap' =>true,
        'hover'=>true,
      'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
    'headerRowOptions' => ['class' => 'kartik-sheet-style'],
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
         // ['class'=>'yii\grid\CheckboxColumn'],
  [
         'attribute'=> 'noi',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablessbs::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){
        return $model['noi'];
           }
    else{
    return "  ";
        }},],
     [
         'attribute'=> 'lot',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablessbs::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){
    return $model['lot'];
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
        $var =app\models\Consumablessbs::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){
        return $model['unit'];
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
        $var =app\models\Consumablessbs::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){
    return number_format($model['cost'],2).$model['birrformat'];
           }
    else{
    return "  ";
        }},],
[
         'attribute'=> 'Expiration date',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumablessbs::find()->where(['id'=>$data])->one();
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
        $var =app\models\Consumablessbs::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end){        
    return Html::a('View',['view','id'=>$data,],['class'=>'btn btn-xs btn-primary glyphicon glyphicon-eye-open']);
          }
         else{
        return "  ";
           }},
         ],],
    ]); ?>
<?php Pjax::end(); ?>
</div>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(id){
       $("#consumablesid").val(id);
       $("#consentModal").modal('show');
    }    
    function consumable()
       {
     var serial=$("#consumables-serial").val();
    /* var noi=$("#consumables-noi").val();
     var packsize=$("#consumables-packsize").val();
     var unit=$("#consumables-unit").val();
     var lot=$("#consumables-lot").val();
     var quantity=$("#consumables-quantity").val();
     var dp=$("#consumables-dp").val();
     var expairedate=$("#consumables-expairedate").val();
     var shelflife=$("#consumables-shelflife").val();
     var location=$("#consumables-location").val();
     var shelfname=$("#consumables-shelfname").val();
     var shelfno=$("#consumables-shelfno").val();
     var dr=$("#consumables-dr").val();
     var am=$("#consumables-am").val();
     var department=$("#consumables-department").val();
     var birrformat=$("#consumables-birrformat").val();
     var cost=$("#consumables-cost").val();
     var purchasefrom=$("#consumables-purchasefrom").val();
     var unit=$("#consumables-unit").val();
     var remark=$("#consumables-remark").val();*/
     var id=$("#consumablesid").val();
    var href = "<?=Yii::$app->request->baseUrl;?>/index.php/consumables/create1/"+"?id="+id+"&serial="+serial;//"&noi="+noi+"&packsize="+packsize+"&unit="+unit+"&lot="+lot+"&quantity="+quantity+"&dp="+dp+"&expairedate="+expairedate+"&shelflife="+shelflife+"&location="+location+"&shelfname="+shelfname+"&shelfno="+shelfno+"&dr="+dr+"&am="+am+"&department="+department+"&birrformat="+birrformat+"&cost="+cost+"&purchasefrom="+purchasefrom+"&unit="+unit+"&remark="+remark;
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
          </p>Add serial number</p>
      </div>
      <div class="modal-body">
     <div class="row"> 
    <div class="col-lg-11">
    <div id="toggle" style="display:inline">  
    <?php $model=new app\models\Consumables();?>
     <?php $form=ActiveForm::begin(); ?>
 <?= $form->field($model,'serial')->textInput(['autocomplete'=>'off','required'=>'required']) ?>
 <?= $form->field($model, 'unit')->textInput(['autocomplete'=>'off','placeholder'=>'Eg pc,pck,set,bottle,set']) ?>
    </div></div></div>
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
