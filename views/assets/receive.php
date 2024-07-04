<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\models\Catagory;
use app\models\CatagorySearch;
use app\models\Assets;
use app\models\AssetsSearch;
use app\models\OrderEq;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Massets;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AssetsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
error_reporting(1);
?>
<div class="assets-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Asset receive view page</h3>',
        $mo=Assets::find()->where(['birrformat'=>'birr'])->one(),
        $moo=Assets::find()->where(['birrformat'=>'$'])->one(),
         $query=(new \yii\db\Query())->from('assets')->where(['birrformat'=>'birr']),
        $sum=$query->sum('cost'),
        $query1=(new \yii\db\Query())->from('assets')->where(['birrformat'=>'$']),
        $sum1=$query1->sum('totalcost'),
      'after'=>Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in dollar=>'.number_format($sum1).$moo->birrformat,[''], ['class' => 'btn btn-success','style'=>"float:right;margin-top:2%"]),
      //'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Createasset', ['createas'], ['class' => 'btn btn-primary','style'=>"float:right"]),
      //'type'=>'info',
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
    'toggleDataOptions'=>['minCount'=>10],
    'itemLabelSingle' => 'stock',
    'itemLabelPlural'=>'stock',
        'columns'=>[
           // ['class' => 'yii\grid\SerialColumn'],
            //['class' => 'yii\grid\CheckboxColumn'],
            //'id',
[
        'attribute'=>'NOA',
        'value'=>function ($data) {
          $var=app\models\Assets::find()->where(['id'=>$data->id])->one();
            return $var->NOA;
        },
       ],  
        [
        'attribute'=>'serial',
        'value'=>function ($data) {
          $var=app\models\Assets::find()->where(['id'=>$data->id])->one();
            return $var->serial;//.$var->birrformat;
        },
       ],
    [
        'attribute'=>'quantity',
        'value'=>function ($data) {
          $var=app\models\Assets::find()->where(['id'=>$data->id])->one();
            return $var->quantity;
        },
       ],
    [
        'attribute'=>'Qty',
        'value'=>function ($data) {
          $var=app\models\Assets::find()->where(['id'=>$data->id])->one();
            return $var->qty;
        },
       ],
[
              'format'=>'raw',
               'header'=>'Action',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
         $id=$data->id;
        $var =app\models\Assets::find()->where(['id'=>$id])->one();
if($var->received==NULL||$var->received==21||$var->received==4){
    return Html::button('Received',['class'=>'btn btn-xs btn-primary fa fa-plus', 'onClick'=>"popup($id)"]).Html::button('Reject',['class'=>'btn btn-xs btn-primary fa fa-remove', 'onClick'=>"popupr($id)"]);
   }
if($var->received==1){
        return Html::button('',['class'=>'glyphicon glyphicon-ok']);
           }
if($var->received==2){
     return Html::button('',['class'=>'glyphicon glyphicon-remove']);
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
       $("#assetsid").val(id);
       $("#consentModal").modal('show');
    }   
  
function receive()
       {
     var descfr=$("#assets-descfr").val();
     var assetbarcode=$("#assets-assetbarcode").val();
     var id=$("#assetsid").val();
    var href = "<?=Yii::$app->request->baseUrl;?>/index.php/assets/received/"+"?id="+id+"&descfr="+descfr+"&assetbarcode="+assetbarcode;
    window.location.href =href;
          }
</script>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
function popupr(id){
       $("#assetsid").val(id);
       $("#consentModals").modal('show');
    } 
function reject()
       {
     var descfr=$("#assets-descfr").val();
     var id=$("#assetsid").val();
    var href = "<?=Yii::$app->request->baseUrl;?>/index.php/assets/rejected/"+"?id="+id+"&descfr="+descfr;
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
    <?php $model=new app\models\Assets();?>
 <?php $form = ActiveForm::begin(['options' => ['id' => 'codeid']]); ?>
 <?= $form->field($model,'assetbarcode')->textInput(["onmouseover"=>"this.focus();",'autocomplete'=>'off']) ?>
 <?= $form->field($model, 'descfr')->textArea(['row'=>10]) ?>
    </div></div></div>
    <div class="modal-footer">
        <input type="hidden" value="" id="assetsid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onClick="receive()">Submit</button>
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
      <?php $model=new app\models\Assets();?>
     <?php $form=ActiveForm::begin(); ?>
 <?= $form->field($model, 'descfr')->textArea(['row'=>10]) ?>
    </div></div></div>
    <div class="modal-footer">
        <input type="hidden" value="" id="assetsid" />
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