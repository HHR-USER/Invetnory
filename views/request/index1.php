<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<?php if(Yii::$app->session->hasFlash('Success')): ?>
<div class="alert alert-success" role="alert">
    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <?= Yii::$app->session->getFlash('Success') ?><span class="glyphicon glyphicon-ok"></span>
</div>
<?php endif; ?>
    <?php if(Yii::$app->session->hasFlash('danger')): ?>
<div class="alert alert-danger" role="alert">
    <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
    <?= Yii::$app->session->getFlash('danger') ?><span class="glyphicon glyphicon-ok"></span>
</div>
<?php endif; ?>
<div class="request-index">
<?php Pjax::begin(); ?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
        'showPageSummary'=>false,
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Your all request history list</h3>',
        'type'=>'info',
         ],
        'bootstrap'=>true,
        'hover'=>true,
      'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    'filterRowOptions'=>['class'=>'kartik-sheet-style'],
          'pjax'=>true,
        'emptyCell'=>'',
        'tableOptions'=>['class' => 'table table-hover table-striped table-responsive table-condensed'],
       
    'toolbar'=> [ 
            '{export}',
            '{toggleData}',
            ],
      'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    // set export properties
    'export' => [
        'fontAwesome'=>true
    ],
      'persistResize'=> false,
    'toggleDataOptions'=>['minCount'=>10],
    'itemLabelSingle'=>'request',
    'itemLabelPlural'=>'request',
    'options'=>['style'=>'background-color:red;color:green'],
    'columns'=>[
   [
         'attribute'=>'Name',
         'value'=>function($model){
          $id=$model->id;
          $var=app\models\Request::find()->where(['id'=>$model->vendorid])->one();
        return $var['fname'];
          }],
      [
         'attribute'=> 'Item',
         'value'=>function($model){
          $id=$model->id;
          $var=app\models\Stock::find()->where(['id'=>$model->id])->one();
        return $var->noi;
          }],
 /*[
         'attribute'=> 'Store',
         'value'=>function($model){
          $var=app\models\Request::find()->where(['id'=>$model->vendorid])->one();
        return $var['office'];
      }],*/
 [
         'attribute'=> 'Specification',
         'value'=>function($model){
          $var=app\models\Stock::find()->where(['id'=>$model->id])->one();
        return $model['specification'];
      }],
/*[
         'attribute'=>'notice',
         'value'=>function($model){
          $var=app\models\Stock::find()->where(['id'=>$model->id])->one();
        return $model['notice'];
      }],*/
[     
      'attribute'=>'qty',
      'format'=>'raw',
      'value'=>function($model){
        $req=app\models\Stock::find()->where(['id'=>$model->id])->one(); 
        $n='inledit'.$model->id;//$model->id;
    $form=ActiveForm::begin(['id'=>$n,'action'=>['stock/update11','id'=>$model->id], 'options'=>['name'=>'inleditfrm']]);
    $f=Html::activeTextInput($req,'quantity',['form'=>$n, 'id'=>'inp'.$n,"oninput"=>"this.value=this.value.replace(/[^0-9]/g,'');",'style'=>'width:70%;']);
    $btn=Html::submitButton(Yii::t('app',''),['style'=>'display: none;','form'=>$n]);
        ActiveForm::end();
        return $f.$btn;
        }],
['format'=>'raw',
 'header'=>'Status',
 'headerOptions'=>['class'=>'kartik-sheet-style'],
 'value'=>function($data){
if($data->status=="Approved"){
        return $data->status.Html::button('',['class'=>'glyphicon glyphicon-ok']);
           }
if($data->status=="Cancelled"){
     return $data->status.Html::button('',['class'=>'glyphicon glyphicon-remove']);
      }
else{
  return "Pending";
    }},],
 ['format'=>'raw',
 'header'=>'Option',
 'headerOptions'=>['class'=>'kartik-sheet-style'],
 'value'=>function($data){
        $id=$data->id;
  $var_model=app\models\Stock::find()->where(['id'=>$data->id])->one();
if($var_model['valuecheck']==NULL||$var_model['valuecheck']==0||$var_model['valuecheck']==1){
     return Html::button('Approve',['class'=>'btn btn-xs btn-primary fa fa-plus', 'onClick'=>"popup($id)"]).Html::button('Cancel',['class'=>'btn btn-xs btn-danger fa fa-remove', 'onClick'=>"popupr($id)"]);
         }
  },],
],
    ]); ?>
  <?php Pjax::end(); ?>
</div>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup($id){
       $("#stockid").val($id);
       $("#consentModal").modal('show');
    }
function popupr($id){
       $("#stockid").val($id);
       $("#consentModals").modal('show');
    }    
    function leave()
      {
    var notice=$("#stock-notice").val();
     var id=$("#stockid").val();
     var href="<?=Yii::$app->request->baseUrl;?>/index.php/stock/approve/"+"?id="+id+"&notice="+notice;
    window.location.href=href;
          }
    function leave_rejected()
      {
     var type=$("#stock-type").val();
     var id=$("#stockid").val();
     var href="<?=Yii::$app->request->baseUrl;?>/index.php/stock/cancel/"+"?id="+id+"&type="+type;
    window.location.href=href;
          }
</script>
 <div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="glyphicon glyphicon-plus-sign" id="myModalLabel" style="float:left;"></h4>
          </p>Add Remark you want to approve</p>
      </div>
      <div class="modal-body">
     <div class="row"> 
      <div class="col-lg-11">
      <?php $form = ActiveForm::begin(); ?>
      <?php $model=new app\models\Stock();?>
    <?=$form->field($model,'notice')->textArea(['row'=>true])->label("Remark form for Approval") ?>
<div class="modal-footer">
        <input type="hidden" value="" id="stockid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="leave()">Submit</button>
      </div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div></div></div></div>
<!--- For rejected-->
 <div class="modal fade" id="consentModals" tabindex="-1" role="dialog" aria-labelledby="consentModals">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="glyphicon glyphicon-plus-sign" id="myModalLabel" style="float:left;"></h4>
          </p>Remark form for Reject</p>
      </div>
      <div class="modal-body">
     <div class="row"> 
      <div class="col-lg-11">
      <?php $form = ActiveForm::begin(); ?>
      <?php $model=new app\models\Stock();?>
    <?= $form->field($model,'type')->textArea(['row'=>10])->label('Remark form for Reject') ?>
<div class="modal-footer">
        <input type="hidden" value="" id="stockid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="leave_rejected()">Submit</button>
      </div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div></div></div></div>