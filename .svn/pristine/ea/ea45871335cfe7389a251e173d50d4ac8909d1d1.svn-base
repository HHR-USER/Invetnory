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
use app\models\Assetspathology;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AssetsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
error_reporting(1);
?>
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Stock list</h3>',
        $mo=Assetspathology::find()->where(['birrformat'=>'birr'])->one(),
        $moo=Assetspathology::find()->where(['birrformat'=>'$'])->one(),
         $query=(new \yii\db\Query())->from('assetspathology')->where(['birrformat'=>'birr']),
        $sum=$query->sum('cost'),
        $query1=(new \yii\db\Query())->from('assetspathology')->where(['birrformat'=>'$']),
        $sum1=$query1->sum('cost'),
        //'after'=>Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in birr=>'.number_format($sum).$mo->birrformat."         ".'<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in dollar=>'.number_format($sum1).$moo->birrformat,[''], ['class' => 'btn btn-success','style'=>"float:right;margin-top:2%"]),
    //'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Createassets', ['createas'], ['class' => 'btn btn-primary','style'=>"float:right"]),
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
    'itemLabelSingle' => 'Stock',
    'itemLabelPlural' => 'Stock',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
          //  ['class' => 'yii\grid\CheckboxColumn'],
[
         'attribute'=> 'lotnumber',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Assetspathology::find()->where(['id'=>$data->id])->one();
   return  $var->lotnumber;
       }
         ],
[
         'attribute'=> 'serial',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Assetspathology::find()->where(['id'=>$data->id])->one();
   return  $var->serial;
       }
         ],

  [
         'attribute'=> 'NOA',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Assetspathology::find()->where(['id'=>$data->id])->one();
   return  $var->NOA;
       }
         ],
      [
         'attribute'=> 'VENDOR_ID',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Assetspathology::find()->where(['id'=>$data->id])->one();
   return  $var->VENDOR_ID;
       }
         ],

[
         'attribute'=> 'cost',
         'format'=>'raw',
         'value'=>function($data){
      $var =app\models\Assetspathology::find()->where(['id'=>$data->id])->one();
   return  $var->cost.$var->birrformat;
       }
         ],
[
              'format'=>'raw',
               'header'=>'View',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($model){
       $data=$model->id;
        $var =app\models\Assetspathology::find()->where(['id'=>$data])->one();
    return Html::a('View',['view','id'=>$data,],['class'=>'btn btn-xs btn-primary glyphicon glyphicon-eye-open']);
          }
         ],


       ],]); 
     ?>
    <?php Pjax::end(); ?>
</div>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(id){
       $("#massetsid").val(id);
       $("#consentModal").modal('show');
      
    }    
    function followup()
    {
     var fname=$("#assetspathology-fname").val();
     var lname=$("#assetspathology-lname").val();
     var mobile=$("#assetspathology-mobile").val();
     //var quantity=$("#assetspathology-quantity").val();
     var office=$("#assetspathology-office").val();
     var id=$("#massetsid").val();
    var href="<?=Yii::$app->request->baseUrl;?>/index.php/assetspathology/create2/"+"?fname="+fname+"&lname="+lname+"&mobile="+mobile+"&office="+office;
      window.location.href = href;

          }
</script> 
<div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Transfer To</h4>
      </div>
      <div class="modal-body">
     <div class="row"> 
      <div class="col-lg-11">
    <div id="search1" style="display:inline;">  
          <?php
     $office=['Microlab'=>'Microlab','Clinical'=>'Clinical','Pathology'=>'Pathology','Personnel'=>'Personnel'];
        ?>
<?php 
 $model = new app\models\Assetspathology();?>
   <?php $form=ActiveForm::begin(); ?>
<?=$form->field($model,'fname')->textInput(['maxlenght'=>true]);?>
<?=$form->field($model,'lname')->textInput(['maxlenght'=>true]);?>
<?= $form->field($model,'mobile')->textInput(['maxlength' => true]) ?>
<?= $form->field($model,'office')->dropDownList($office,['prompt' =>'please select']) ?>  <div class="modal-footer">
        <input type="hidden" value="" id="massetsid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="followup()">Submit</button>
      </div>
          </div></div></div></div>
              <?php ActiveForm::end(); ?>

    </div>
  </div>

</div>
