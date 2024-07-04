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
        $sum1=$query1->sum('totalcost'),
     'after'=>Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in dollar=>'.number_format($sum1).$moo->birrformat,[''],['class' => 'btn btn-success','style'=>"float:right;margin-top:2%"]),
       // 'after'=>Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in birr=>'.number_format($sum).$mo->birrformat."         ".'<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in dollar=>'.number_format($sum1).$moo->birrformat,[''], ['class' => 'btn btn-success','style'=>"float:right;margin-top:2%"]),
        // 'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Createconsumable', ['create'], ['class' => 'btn btn-primary','style'=>"float:right"]),//,'onClick'=>"popup()"]),
       // 'type'=>'info',
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
      //['class'=>'yii\grid\CheckboxColumn'],
        //'id',
  [
         'attribute'=> 'noi',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL&&$var->dep!=Yii::$app->user->identity->Type){
        return $model['noi'];
           }
    else{
    return "  ";
        }},],
     [
         'attribute'=> 'consbarcode',
         'value'=>function($model){
          //DISTINCT('catagory')
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL&&$var->dep!=Yii::$app->user->identity->Type){
    return $model['consbarcode'];
           }
    else{
    return "  ";
        }},],
   [
         'attribute'=> 'quantity',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL&&$var->dep!=Yii::$app->user->identity->Type){
        return $model['quantity'];
           }
    else{
    return "  ";
        }},
           ],
  [
         'attribute'=> 'qty',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL&&$var->dep!=Yii::$app->user->identity->Type){
        return $model['qty'];
           }
    else{
    return "  ";
        }},
           ],
[
              'format'=>'raw',
               'header'=>'Receive/Reject',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
         $id=$data->id;
        $var =app\models\Consumables::find()->where(['id'=>$id])->one();
if($var->received==NULL||$var->received==21&&$var->dep!=Yii::$app->user->identity->Type){
      return Html::button('Received',['class'=>'btn btn-xs btn-primary fa fa-plus', 'onClick'=>"popup($id)"]).Html::button('Reject',['class'=>'btn btn-xs btn-primary fa fa-remove', 'onClick'=>"popupr($id)"]);
   }
if($var->received==1){
        return Html::button('',['class'=>'glyphicon glyphicon-ok']);
           }
if($var->received==2){
     return Html::button('',['class'=>'glyphicon glyphicon-remove']);
      }
else{
  return " ";
    }},],
],
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
     var descfr=$("#consumables-descfr").val();
    var consbarcode=$("#consumables-consbarcode").val();
     var id=$("#consumablesid").val();
    var href = "<?=Yii::$app->request->baseUrl;?>/index.php/consumables/received/"+"?id="+id+"&descfr="+descfr+"&consbarcode="+consbarcode;
    window.location.href =href;
          }
</script>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
function popupr(id){
       $("#consumablesid").val(id);
       $("#consentModals").modal('show');
    } 
function reject()
       {
     var descfr=$("#consumables-descfr").val();
     var id=$("#consumablesid").val();
    var href = "<?=Yii::$app->request->baseUrl;?>/index.php/consumables/rejected/"+"?id="+id+"&descfr="+descfr;
    window.location.href =href;
          } 
</script>
 <div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="glyphicon glyphicon-plus-sign" id="myModalLabel" style="float:left;"></h4>
          </p>Please note the reason why you are receive</p>
      </div>
      <div class="modal-body">
     <div class="row"> 
    <div class="col-lg-11">
    <div id="toggle" style="display:inline">  
    <?php $model=new app\models\Consumables();?>
 <?php $form = ActiveForm::begin(['options' => ['id' => 'codeid']]); ?>
<?= $form->field($model, 'consbarcode')->textInput(["onmouseover"=>"this.focus();",'autocomplete'=>'off']) ?>
 <?= $form->field($model, 'descfr')->textArea(['row'=>10]) ?>
    </div></div></div>
    <div class="modal-footer">
        <input type="hidden" value="" id="consumablesid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onClick="consumable()">Submit</button>
      </div></div>
      <?php ActiveForm::end(); ?>
  </div></div></div></div>
  <!---------------------------------------------------------------------------------------------------->
  <div class="modal fade" id="consentModals" tabindex="-1" role="dialog" aria-labelledby="consentModals">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="glyphicon glyphicon-plus-sign" id="myModalLabel" style="float:left;"></h4>
          </p>Please note the reason why you are reject</p>
      </div>
      <div class="modal-body">
     <div class="row"> 
    <div class="col-lg-11">
    <div id="toggle" style="dissplay:inline"> 
      <?php $model=new app\models\Consumables();?>
    <?php $form = ActiveForm::begin(); ?>
 <?= $form->field($model, 'descfr')->textArea(['row'=>10]) ?>
    </div></div></div>
    <div class="modal-footer">
        <input type="hidden" value="" id="consumablesid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onClick="reject()">Submit</button>
      </div></div>
      <?php ActiveForm::end(); ?>
  </div></div></div></div>
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