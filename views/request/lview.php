<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Request;
use yii\widgets\ActiveForm;
use kartik\grid\GridView;
use app\models\Stock;
use yii\widgets\Pjax;
$this->title ="";// 
$id=$model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?=DetailView::widget([
        'model'=>$model,
        'attributes'=>[
            'requestno',
            'fname',
            'type',
            'dor',
           // 'confirmbymicro',
        ],
    ]) ?>
  <div class="request-view">
  <?php Pjax::begin(); ?>
<?=GridView::widget([
    'dataProvider'=>$dataProvider,
    //'filterModel'=>$searchModel,
      'bootstrap'=>true,
      'hover'=>true,
      'summary'=>'',
      'columns'=>[
[
         'attribute'=>'fname',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['fname'];
          }],
[
         'attribute'=>'noi',
         'value'=>function($model){
          $var=Stock::find()->where(['id'=>$model->id])->one();
        return $model['noi'];
          }],
  [
         'attribute'=>'quantity',
         'value'=>function($model){
          $var=Stock::find()->where(['id'=>$model->id])->one();
        return $model['quantity'];
         }],
 /*[
         'attribute'=> 'type',
         'value'=>function($model){
          $var=Request::find()->where(['id'=>$model->vendorid])->one();
        return $var->type;
          }],*/
 [
         'attribute'=> 'Store location',
         'value'=>function($model){
        $var=Request::find()->where(['id'=>$model->vendorid])->one();
        return $var->office;
      }],
 [
         'attribute'=> 'specification',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['specification'];
      }],
[
         'attribute'=>'confirmbymicro',
        'options'=>['style'=>'background-color:yellow;'],
        'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['confirmbymicro'];
      }],
[
         'attribute'=>'date',
         'value'=>function($model){
          $var=Request::find()->where(['id'=>$model->vendorid])->one();
        return $var->dor;
      }],
[
    'format'=>'raw',
    'header'=>'Action',
    'value'=>function($model){
          //$var=Stock::find()->where(['id'=>$model->id])->one();
          $id=$model->id;
    if($model->confirmbymicro==NULL&&$model->line_conf==NULL){
return Html::a('Approve',['request/approve1','id'=>$id],['class'=>'btn btn-xs btn-info glyphicon glyphicon-ok','style'=>'float:right','data'=>[ 'confirm'=>'Are you sure you want to approve this request?','method'=>'post',
            ],]).Html::button('Reject',['class'=>'btn btn-xs btn-danger glyphicon glyphicon-remove', 'onClick'=>"popup($id)"]);
     }
    if($model->line_conf==5){
return Html::a('Approve',['request/approve1','id'=>$id],['class'=>'btn btn-xs btn-info glyphicon glyphicon-ok','style'=>'float:right','data'=>[ 'confirm'=>'Are you sure you want to approve this request?','method'=>'post',
            ],]);//.Html::submit('Reject',['class'=>'btn btn-xs btn-danger glyphicon glyphicon-remove', 'onClick'=>"popup($id)"]);
     }

if($model->line_conf==1){
return Html::button('Reject',['class'=>'btn btn-xs btn-danger glyphicon glyphicon-remove', 'onClick'=>"popup($id)"]);
     }
      }],],]);?>
<?php Pjax::end(); ?>
</div>
<?=Html::a('Print',['print','id'=>$model->id],['class'=>'btn btn-success glyphicon glyphicon-print','style'=>'float:left'])?>
<?=Html::a('Back',['back'], ['class'=>'btn btn-primary glyphicon glyphicon-arrow-left','style'=>'float:left'])  ?>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(id){
       $("#stockid").val(id);
       $("#consentModal").modal('show');
    }    
    function stock()
      {
    var confirmbymicro=$("#stock-confirmbymicro").val();
     //var group=$("#pis-group").val();
     //var status=$("#pis-status").val();
     var id=$("#stockid").val();
     var href = "<?=Yii::$app->request->baseUrl;?>/index.php/request/rejected/"+"?id="+id+"&confirmbymicro="+confirmbymicro;//
    window.location.href=href;
          }
</script>
 <div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="glyphicon glyphicon-plus-sign" id="myModalLabel" style="float:left;"></h4>
          </p>Add Reject reason</p>
      </div>
      <div class="modal-body">
     <div class="row"> 
      <div class="col-lg-11">
      <?php $form=ActiveForm::begin(); ?>
      <?php $model=new app\models\Stock();?>
  <?=$form->field($model,'confirmbymicro')->textArea(['row'=> true]) ?>
<div class="modal-footer">
        <input type="hidden" value="" id="stockid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="stock()">Submit</button>
      </div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div></div></div></div>
