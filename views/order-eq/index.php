<?php
use yii\widgets\Pjax;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use app\models\OrderEq;
use app\models\Orderitem;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderEqSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
?>
<div class="order-eq-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
        'showPageSummary'=>false,
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Your all order history list</h3>',
     //  'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>addnewstock', [''], ['class' => 'btn btn-primary','style'=>"float:right",'onClick'=>"popup()"]),
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
    'toggleDataOptions' => ['minCount' => 10],
    'itemLabelSingle' => 'order',
    'itemLabelPlural' => 'order',
      'columns' => [
      [     
      'attribute'=>'id',
      'format'=>'raw',
      'value'=>function($model){
      $item=OrderEq::find()->where(['id'=>$model->id])->one();
        return $item->id;
        }
          ],
     // 'vendorid',
         'Doo',
         'type',
            [
'attribute'=>'status',
'format'=>'raw',
'value'=>function($data){
        $model=OrderEq::find()->where(['id'=>$data->id])->one();
if($model->status=="confirmed"){
        return "<li class=btn btn-xs btn-success>".$model->status."</li>";
         }
        else{
          return "";
        }}
       ],
/*  [
'attribute'=>'total',
'format'=>'raw',
'value'=>function($data){
        $model=app\models\Orderitem::find()->where(['foreign_key'=>$data->id])->all();
        $total=$model->unitprice*$model->quantity;
        return $total;
         }
       ],*/
[
      'format'=>'raw',
      'header'=>'Action',
      'headerOptions'=>['class'=>'kartik-sheet-style'],
      'value'=>function($data){
             $model=OrderEq::find()->where(['id'=>$data->id])->one();
            $var=Orderitem::find()->where(['foreign_key'=>$data->id])->one();
           // if($var->type=="None-consumable"){
   return Html::a('View',['order-eq/view', 'id' =>$data->id,],['class'=>'btn btn-xs btn-info glyphicon glyphicon-eye-open']);
   //}
 // else{
return Html::a('View',['order-eq/view', 'id' =>$data->id,],['class'=>'btn btn-xs btn-info glyphicon glyphicon-eye-open']);
 }],   
        ],
      ]); ?>
<?php Pjax::end(); ?>
</div>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(){
       $("#catagoryid").val();
       $("#consentModal").modal('show');
    }    
    function catagory()
      {
     var noi=$("#itemc-noi").val();
    var type=$("#itemc-type").val();
     var id=$("#catagoryid").val();
     var href = "<?=Yii::$app->request->baseUrl;?>/index.php/order-eq/create1/"+"?noi="+noi+"&type="+type;
    window.location.href =href;
          }
</script>
 <div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="glyphicon glyphicon-plus-sign" id="myModalLabel" style="float:left;"></h4>
          </p>Add new stock</p>
      </div>
      <div class="modal-body">
     <div class="row"> 
      <div class="col-lg-11">
        <?php

        ?>
      <?php $form = ActiveForm::begin(); ?>
      <?php $model=new app\models\Itemc();?> 
      <?php                     
    $pid = new app\models\Catagory(); 
      $psg=\yii\helpers\ArrayHelper::map(app\models\Catagory::find()->where('id!=-1')->all(),'typeof_material','typeof_material');
     ?>             
<?= $form->field($model, 'type')->dropDownList($psg,['prompt'=>'Please select'],['readonly'=>true,'required'=>"required"])?>  
<?= $form->field($model, 'noi')->textInput(['required'=>'required'])?>
    <div class="modal-footer">
        <input type="hidden" value="" id="catagoryid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="catagory()">Submit</button>
      </div>
          </div></div></div></div>
              <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
