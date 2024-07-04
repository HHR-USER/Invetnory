<?php
use yii\widgets\Pjax;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CatagorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catagory-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
        'showPageSummary'=>false,
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i> Value List</h3>',
         'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddValueLIst', [''], ['class' => 'btn btn-primary','style'=>"float:right",'onClick'=>"popup()"]),
        //'type'=>'info',
         ],
            'bootstrap' =>true,
        'hover'=>true,
      'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    'filterRowOptions'=>['class'=>'kartik-sheet-style'],
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
    'itemLabelSingle' => 'catagory',
    'itemLabelPlural' => 'catagory',
      'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'typeof_material',
            //'catagoryname',
            'location',
            'purchasefrom',
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
     var typeof_material=$("#catagory-typeof_material").val();
     var purchasefrom=$("#catagory-purchasefrom").val();
     var location=$("#catagory-location").val();
     var facl=$("#catagory-facl").val();
     var id=$("#catagoryid").val();
     var href = "<?=Yii::$app->request->baseUrl;?>/index.php/catagory/create1/"+"?typeof_material="+typeof_material+"&purchasefrom="+purchasefrom+"&purchasefrom="+purchasefrom+"&location="+location+"&facl="+facl;
    window.location.href=href;
          }
</script>
 <div class="modal fade" id="consentModal" tabindex="-1" role="dialog" aria-labelledby="consentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="glyphicon glyphicon-plus-sign" id="myModalLabel" style="float:left;"></h4>
          </p>Add catagory for the Equipment</p>
      </div>
      <div class="modal-body">
     <div class="row"> 
      <div class="col-lg-11">
      <?php $form = ActiveForm::begin(); ?>
      <?php $model=new app\models\Catagory();?>   
     <?= $form->field($model, 'typeof_material')->dropDownList(['prompt'=>'Please select','consumable'=>'consumable','None Consumable'=>'None capitalized Assets','Fixed assets'=>'Capitalized assets']) ?>
    <?=$form->field($model,'location')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
    <?=$form->field($model,'purchasefrom')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
    <?=$form->field($model,'facl')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
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
