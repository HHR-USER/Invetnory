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
  <?= Html::a('Reject',['rejected','id'=>$model->id],['class'=>'btn btn-done','style'=>'color:red;float:right',
    'data'=>[
                'confirm'=>'Are you sure you want to reject this request?',
                'method'=>'post',
            ],])  ?>
  <?=Html::a('Moreinfromation',['moreinfromation', 'id'=>$model->id],['class'=>'btn btn-done','style'=>"float:right",'onClick'=>"popup($model->id)"])?>
<?=Html::a('Create Maternal',[''],['class' =>'btn  btn-primary','style'=>"float:right",'onClick'=>"popup($id)"])?>
  <?=Html::a('Approve',['approve1','id'=>$model->id],['class'=>'btn btn-confirm','style'=>'float:right',
    'data'=>[
                'confirm'=>'Are you sure you want to approve this request?',
                'method'=>'post',
            ],])  ?>
<div class="request-view">
  <?php Pjax::begin(); ?>
<?=DetailView::widget([
        'model'=>$model,
        'attributes'=>[
            'requestno',
            'personnelid',
            'type',
            'dor',
            //'confirmbymicro',
        ],
    ]) ?>
<?=GridView::widget([
    'dataProvider'=>$dataProvider,
    //'filterModel'=>$searchModel,
      'bootstrap'=>true,
      'hover'=>true,
      'summary' => '',
      'columns' => [
[
         'attribute'=> 'fname',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['fname'];
          }],
[
         'attribute'=> 'noi',
         'value'=>function($model){
          $var=Stock::find()->where(['id'=>$model->id])->one();
        return $model['noi'];
          }],
  [
         'attribute'=> 'quantity',
         'value'=>function($model){
          $var=Stock::find()->where(['id'=>$model->id])->one();
        return $model['quantity'];
         }],
 [
         'attribute'=> 'type',
         'value'=>function($model){
          $var=Request::find()->where(['id'=>$model->vendorid])->one();
        return $var->type;
          }],
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
         'attribute'=> 'date',
         'value'=>function($model){
          $var=Request::find()->where(['id'=>$model->vendorid])->one();
        return $var->dor;
      }],
[
         'attribute'=>'notice',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['notice'];
      }],
[
         'attribute'=>'status',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['status'];
      }],
[
              'format'=>'raw',
               'header'=>'Update',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
            $var=Request::find()->where(['id'=>$data->vendorid])->one();
  if($var->type=="None-consumable"&&$var->var_dep==Yii::$app->user->identity->Type){
   return Html::a('Update', ['request/edit2', 'id'=>$data->vendorid], ['class'=>'btn btn-xs btn-info glyphicon glyphicon-pencil']);
 }
  else if($var->type=="Consumable"&&$var->var_dep==Yii::$app->user->identity->Type){
   return Html::a('Update', ['request/edit1', 'id'=>$data->vendorid], ['class'=>'btn btn-xs btn-info glyphicon glyphicon-pencil']);
 }
else{
  return "Deny";
}}],],]);?>
<?php Pjax::end(); ?>
</div>
<?= Html::a('Print',['print', 'id' => $model->id], ['class' => 'btn btn-success glyphicon glyphicon-print','style'=>'float:left'])  ?>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(id){
       $("#requestid").val(id);
       $("#consentModal").modal('show');
    }    
    function requests()
      {
     var confirmbymicro=$("#request-confirmbymicro").val();
     var id=$("#requestid").val();
     var href="<?=Yii::$app->request->baseUrl;?>/index.php/request/moreinfromation/"+"?id"+id+"&confirmbymicro="+confirmbymicro;
    window.location.href=href;
          }
</script>
 <div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="glyphicon glyphicon-plus-sign" id="myModalLabel" style="float:left;"></h4>
          <p>Add your notes</p>
      </div>
      <div class="modal-body">
     <div class="row"> 
      <div class="col-lg-11">
      <?php $form=ActiveForm::begin(); ?>
      <?php $model=new app\models\Request();?>   
    <?=$form->field($model,'confirmbymicro')->textInput(['maxlength' =>true,'autocomplete'=>'off']) ?>
    <div class="modal-footer">
        <input type="hidden" value="" id="requestid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="requests()">Submit</button>
      </div></div></div></div></div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
