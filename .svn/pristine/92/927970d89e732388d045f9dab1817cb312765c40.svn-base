<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\models\Cart;
use yii\data\SqlDataProvider;
use yii\helpers\ArrayHelper;
use yii\data\CActiveDataProvider;
use kartik\select2\Select2;
use app\models\Personnel;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumablesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumables-index" style="float:left;width: 50%; overflow: auto;">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProvider,
       'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Items</h3>',
       //  'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddConsumablecatagory', [''], ['class' => 'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
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
 [
          'attribute'=> 'lot',
         'value'=>function($model){
          $data=$model->id;
        $var=app\models\Withdrow::find()->where(['For_key'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end){
       return $var->lot;
           }
  else{
        return "";
           }
           },
           ],
       [
          'attribute'=> 'noi',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Withdrow::find()->where(['For_key'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end){
       return $var->noi;
           }
  else{
        return "";
           }
           },
           ],
   [
         'attribute'=> 'cost',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Withdrow::find()->where(['For_key'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end){
       return $var->cost.$var->birrformat;
           }
           else{
            return "";
           }
           },
    ],
  [
         'attribute'=> 'quantity',
         'value'=>function($model){
          $data=$model->id;
        $var =app\models\Withdrow::find()->where(['For_key'=>$data])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end){
       return $var->quantity;
           }
  else{
            return "";
           }},],
[
         'attribute'=> 'totalcost',
         'format'=>'raw',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['For_key'=>$model->id])->one();
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end){
   return  $var->cost*$var->quantity.$var->birrformat;
        }
        else{
      return "";
      }}
         ],
  [         'format'=>'raw',
            'attribute'=>'Transfer',
            'value'=>function($model){
                  $id=$model->id;
       $var =app\models\Withdrow::find()->where(['For_key'=>$id])->one();
       //$id=$var->id;
   $curr=strtotime(date('Y-m-d'));
   $end=strtotime($var->expairedate); 
  if($curr==$end||$curr<$end){
     return Html::button('Transferto',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-share', 'onClick'=>"popup($id)"]);
   
  
         }
      else{
        return " ";
           }
     }
    ],
         ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
<div class="consumables-index" style="float:right;width: 50%; overflow: auto;">
<?php Pjax::begin(); ?>
<?php //$parent_categories = Cart::find()->where(['id'=> null])->asArray()->one();?>
    <?php echo GridView::widget([
      'dataProvider' =>$dataProviderOld,
       'filterModel' => $searchModel,
        'showPageSummary'=>false,
         'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Items</h3>',
       //  'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>AddConsumablecatagory', [''], ['class' => 'btn btn-success','style'=>"float:right",'onClick'=>"popup()"]),
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
        //    ['class' => 'yii\grid\SerialColumn'],
                 [
         'attribute'=> 'By',
         'format'=>'raw',
         'value'=>function($model){
 $var=app\models\Withdrow::find()->where(['id'=>$model->id])->one();
 if($var->dep=="IT"){
   return  $var->username;
        }
    else{
      return "";
      }}],
  [
         'attribute'=> 'For',
         'format'=>'raw',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
   return  $var->firstname."  ".$var->lastname;
        }
    ],
  [
         'attribute'=> 'lot',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
   return  $var->lot;
        }],
 [
         'attribute'=> 'noi',
         'format'=>'raw',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
   return  $var->noi;
        }
     ],
 [
         'attribute'=> 'dt',
         'format'=>'raw',
         'value'=>function($model){
      $var =app\models\Withdrow::find()->where(['id'=>$model->id])->one();
   return  $var->dt;
        }],
  [
         'attribute'=> 'quantity',
         'format'=>'raw',
         'value'=>function($model){
  $var=app\models\Withdrow::find()->where(['id'=>$model->id])->one();
   return  $var->quantity;
        }],
           ],
    ]);?>
<?php Pjax::end(); ?>
</div>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(id){
       $("#maternalid").val(id);
       $("#consentModal").modal('show');
      
    }    
    function followup()
    {
     //var firstname=$("#consumables-firstname").val();
     //var lastname=$("#consumables-lastname").val();
     //var mobile=$("#consumables-mobile").val();
     var quantity=$("#consumables-quantity").val();
     var personnelid=$("#consumables-personnelid").val();
     var dt=$("#consumables-dt").val();
     var office=$("#consumables-office").val();
     var id=$("#maternalid").val();
  var href="<?=Yii::$app->request->baseUrl;?>/index.php/consumables/create2/"+"?id="+id+"&personnelid="+personnelid+"&quantity="+quantity+"&dt="+dt+"&office="+office;
      window.location.href=href;

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
     $office=['Microlab'=>'Microlab','Clinical'=>'Clinical','Pathology'=>'Pathology','IT'=>'IT','SBS'=>'SBS','Personnel'=>'Personnel'];
        ?>
      <?php $model = new app\models\Consumables();?>
    <?php $form=ActiveForm::begin(); ?>
  <?php
$routeAjax = \yii\helpers\Url::toRoute("personnel/index");
$js=<<<JS
function getRelatedFields(personnelid){
    $.ajax({
        url:'$routeAjax',
        dataType:'json',
        method:'GET',
        data:{personnelid:personnelid},
        success:function (data) {
             $('#consumables-firstname').val(data.firstname);
             $('#consumables-personnelid').val(data.personnelid);
             $('#consumables-office').val(data.office);
        },
        beforeSend: function (xhr) {
            alert('loading sure!');
        },
    });
}
JS;
$this->registerJs($js, \yii\web\View::POS_READY);
?>
<div class="borrow-form">
<?=$form->field($model, 'personnelid')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(Personnel::find()->all(),'personnelid','personnelid'),
    'language' => 'en',
    'options' => ['placeholder' => 'Enter'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    'pluginEvents'=>[
        'select2:select' => 'function(e){getRelatedFields(e.params.data.id);}',
    ]
]);?>
<?= $form->field($model, 'dt')->widget(DatePicker::classname(), [
      'options' => ['placeholder' => 'Enter  date of Date of Checking ...'],
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
<?= $form->field($model,'quantity')->textInput() ?>
<?= $form->field($model,'office')->dropDownList($office,['prompt' =>'please select']) ?>
  <div class="modal-footer">
        <input type="hidden" value="" id="maternalid" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="followup()">Submit</button>
      </div>
          </div></div></div></div>
              <?php ActiveForm::end(); ?>

    </div>
  </div>

</div>
