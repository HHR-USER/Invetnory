<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use app\models\Consumables;
error_reporting(1);
$this->title = '';
?>
<div class="consumables-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider'=>$dataProvider,
        'filterModel'=>$searchModel,
        'showPageSummary'=>false,
         'options'=>['style'=>'overflow: auto; word-wrap: break-word;'
        ],
'panel'=>[
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Consumable List</h3>',
        $mo=Consumables::find()->where(['birrformat'=>'birr'])->one(),
        $moo=Consumables::find()->where(['birrformat'=>'$'])->one(),
        $query=(new \yii\db\Query())->from('consumables')->where(['birrformat'=>'birr']),
        $sum=$query->sum('cost'),
        $query1=(new \yii\db\Query())->from('consumables')->where(['birrformat'=>'$']),
        $sum1=$query1->sum('totalcost'),
     'after'=>Html::a('<i class="glyphicon glyphicon-circle-arrow-right"></i>Total cost bought in dollar=>'.number_format($sum1).$moo->birrformat,[''],['class' => 'btn btn-success','style'=>"float:right;margin-top:2%"]),
        //'type'=>'info',
         ],
        'bootstrap' =>true,
        'hover'=>true,
      'containerOptions'=>['style' => 'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class' => 'kartik-sheet-style'],
    'filterRowOptions'=>['class' => 'kartik-sheet-style'],
          'pjax'=>true,
        'emptyCell'=>'-',
        'tableOptions'=>['class'=>'table table-hover table-striped table-responsive table-condensed'],
    'toolbar'=> [ 
            '{export}',
            '{toggleData}',
            ],
      'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    // set export properties
    'export'=>[
        'fontAwesome'=>true
    ],
      'persistResize'=>false,
      'toggleDataOptions'=>['minCount'=>10],
      'itemLabelSingle'=>'stock',
      'itemLabelPlural'=>'stock',
      'columns'=>[
 [
         'attribute'=>'noi',
         'value'=>function($model){
          $data=$model->id;
            $var=app\models\Consumables::find()->where(['id'=>$data])->one();
            $curr=date('Y-m-d');
            $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
        return $model['noi'];
           }
      else{
    return "  ";
        }},],
         'packsize',
         'unit',
[     
    'attribute'=>'quantity',
      'format'=>'raw',
      'value'=>function($model){
        $n='inledit'.$model->id;
        $form=ActiveForm::begin(['id'=>$n,'action'=>['update_up','id'=>$model->id],'options'=>['name'=>'inleditfrm']]);
        $f=Html::activeTextInput($model,'quantity',['form'=>$n,"oninput"=>"this.value=this.value.replace(/[^0-9]/g,'');", 'id'=>'inp'.$n, 'style' =>'width:100%;']);
        $btn=Html::submitButton(Yii::t('app', ''),['class'=>'btn btn-primary btn-xs','style'=>'display: none;','form'=>$n]);
            ActiveForm::end();
        return $f.$btn;
        }],
[
    'attribute'=>'expairedate',
    'format' => 'raw',
    'value'=>function ($model) {
        $n='inledit'.$model->id;
        ActiveForm::begin([
            'id' => $n,
            'action' => ['update_expiredate', 'id' => $model->id],
            'options' => ['name' => 'inleditfrm'],
            'enableClientValidation' => false, // Disable client-side validation
        ]);
        $f=Html::activeTextInput($model, 'expairedate', [
            'form' => $n,
            'type' => 'date',
            'format' => 'date',
            'id' => 'inp' . $n,
            'style' => 'width:100%;',
            'onclick' => "
                var flag = $('#inleditfrm').data('changed' + $model->id);
                if (flag){
                    location.href='" .Yii::$app->urlManager->createUrl(['consumables/update_expiredate', 'id' => $model->id]) . "'; // Redirect to the update action
                } else {
                    $('#inleditfrm').data('changed' + $model->id, true);
                }
            ",
        ]);
        $btn = Html::submitButton(Yii::t('app', ''), [
            'class' => 'btn btn-primary btn-xs',
            'style' => 'display: none;',
            'form' => $n
        ]);
        ActiveForm::end();

        return $f.$btn;
    }
],
[
    'attribute' => 'lot',
    'format' => 'raw',
    'value' => function ($model) {
        $n = 'inledit'.$model->id;
        $form = ActiveForm::begin(['id' => $n, 'action' => ['update_lotup', 'id' => $model->id], 'options' => ['name' => 'inleditfrm' . $model->id]]);
        $f = Html::activeTextInput($model, 'lot', ['form' => $n, "oninput" => "this.value=this.value.replace(/[^0a-9z]/g,'');", 'id' => 'inp' . $n, 'style' => 'width:100%;']);
        $btn = Html::submitButton(Yii::t('app', ''), ['class' => 'btn btn-primary btn-xs', 'style' => 'display: none;', 'form' => $n]);
        ActiveForm::end();

        return $f . $btn;
    }
],
[
         'attribute'=> 'cost',
         'value'=>function($model){
          //DISTINCT('catagory')
          $data=$model->id;
        $var =app\models\Consumables::find()->where(['id'=>$data])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
    return number_format($model['cost'],2).$model['birrformat'];
           }
    else{
    return "  ";
        }},],
/*[     
    'attribute'=>'expairedate',
      'format'=>'raw',
      'value'=>function($model){
        $n='inledit'.$model->id;
    $form=ActiveForm::begin(['id'=>$n,'action'=>['update_upexp','id'=>$model->id],'options'=>['name'=>'inleditfrm']]);
    $f=Html::activeTextInput($model,'expairedate',['form'=>$n,'type'=>'date','format' =>'date','yyyy-mm--d','id'=>'inp'.$n,'style'=>'width:100%;']);
    $btn=Html::submitButton(Yii::t('app',''),['class'=>'btn btn-primary btn-xs','style'=>'display: none;','form'=>$n]);
            ActiveForm::end();
        return $f.$btn;
        }],*/
 
[
              'format'=>'raw',
               'header'=>'Addbarcode',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
         $id=$data->id;
        $var =app\models\Consumables::find()->where(['id'=>$id])->one();
      $curr=date('Y-m-d');
      $end=$var->expairedate; 
  if($var->forserial!=1&&Yii::$app->user->identity->Type=="Admin"){
  if($end>$curr||$var->expairedate==NULL){
       return Html::button('Addbarcode',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-plus', 'onClick'=>"popup($id)"]);
  
}
else{
      // return Html::button('finished',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-ok']);
  return '<a data-method="post" data-confirm="Are you sure ?"'.Html::a('View',['consumables/view','id' =>$id,],['class'=>'btn btn-xs btn-info glyphicon glyphicon-eye-open']);//'<a data-method="post" data-confirm="Are you sure?"']);.Html::a('Edit', ['consumables/update', 'id'=>$id], ['class'=>'btn btn-xs btn-success glyphicon glyphicon-edit']);
}}
else{
  return " ";
}},],
[
        'format'=>'raw',
        'headerOptions'=>['style'=>'background-color:white;color:red'],
         'attribute'=> 'Status',
         'value'=>function($model){
   $var=app\models\Consumables::find()->where(['id'=>$model->id])->one();
  if($var->quantity<10){
       $curr=date('Y-m-d');
   $end=$var->expairedate; 
  if($curr==$end||$curr<$end||$end==NULL){
 return Html::button('Low',['class'=>'btn btn-xs btn-danger glyphicon glyphicon-remove']);
           }}
   else{
 return Html::button('Sufficient',['class'=>'btn btn-xs btn-success glyphicon glyphicon-ok']);
   }
   }],
],
    ]); ?>
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
     var consbarcode=$("#consumables-consbarcode").val();
     var id=$("#maternalid").val();
  var href="<?=Yii::$app->request->baseUrl;?>/index.php/consumables/create1/"+"?id="+id+"&consbarcode="+consbarcode;//+"&quantity="+quantity+"&dt="+dt+"&office="+office;
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
      <?php $model = new app\models\Consumables();?>
     <?php $form=ActiveForm::begin(['options' => ['id' => 'codeid']]); ?>
 <?= $form->field($model, 'consbarcode')->textInput(["onmouseover"=>"focus();",'autocomplete'=>'off']) ?>
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