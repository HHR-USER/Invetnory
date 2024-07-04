<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use app\models\Consumables;
use app\models\Tbltrashhold;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\select2\Select2;
error_reporting(1);
$this->title='';
?>
<head>
  <!--Other head elements-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script type="text/javascript">
function setmin() {
    var selectedOption=$("#consumables-noi").select2("data")[0];
    var id=selectedOption.id;
    var noi=selectedOption.text;
    var quantity=$("#consumables-quantity").val();
    var href="<?=Yii::$app->urlManager->createUrl(['consumables/setminbalance'])?>?id="+id+"&noi="+noi+"&quantity="+quantity;
    window.location.href=href;
}
$(document).ready(function() {
    $("#consumables-noi").change(function() {
        var selectedOption=$(this).select2("data")[0];
        var id=selectedOption.id;
        var noi=selectedOption.text;
        $("#selected-noi").text(noi);
    });
});
</script>
<div class="row" style="background-color:#F0F8FF;float:right;marign-top:fixed">
<?php $model=new app\models\Consumables();?>
<?php 
$form=\yii\widgets\ActiveForm::begin([
                'id'=>'profile-form',
                'options'=>['class'=>'form-vertical'],
		        'fieldConfig'=>[
                'template'=>"{label}\n<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-sm-offset-2 col-lg-9\">{error}\n{hint}</div>",
                'labelOptions'=>['class'=>'col-lg-3 control-label']],]);?>
 <div class="col-lg-11 col-md-5 col-sm-5">
<?php
   $var=ArrayHelper::map(Consumables::find()
   ->select(['id', 'noi'])
   ->distinct()->where(['store'=>'Admin',
   'rep'=>6,'st_avail'=>['ini','avail']])->all(),'id','noi',
    //function($model){
        //return $model['noi'];
);?>
<?=$form->field($model,'noi')->widget(Select2::classname(),[
            'data'=>$var,
            'options'=>['placeholder'=>'Assign new user role...'],
            'pluginOptions'=>[
                'depends'=>[''],
                'url'=>Url::to(['#'])],]);?>
<?=$form->field($model,'quantity')->textInput(['placeholder'=>'Enter minimum amount','type'=>'number','min'=>'1']) ?></div>
<div class="form-group">
<div class="col-lg-10 col-md-8 col-sm-8 text-right">
  <button type="button" class="btn btn-success" onClick="setmin()"><i class="fas fa-paper-plane"></i>SetMinBlanance</button>
</div>
    <?php ActiveForm::end(); ?>
  </div></div>
<div class="consumables-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,
    'showPageSummary'=>true,
    'pjax'=>true,
    'striped'=>true,
    'hover'=>true,
    'panel'=>[//'type' => 'info',
     'heading'=>'Consumables currently availabel in CHAMPS Main Store'],
    'toggleDataContainer'=>['class'=>'btn-group mr-2'],
    'columns'=>[
    ['header'=>'Seq','class'=>'yii\grid\SerialColumn'],
[
    'attribute'=>'noi', 
    'format'=>'raw',
    'value'=>function($model){ 
        $count=Consumables::find()->where(['noi'=>$model->noi])->count();
        $linkText='(Include this item total:'.'<span class="item-count">'.$count.')</span>';
       return Html::a('<u>'.$model->noi.'<b style=color:green>'.$linkText.'</b>'.'</u>',['same_name','noi'=>$model->noi],['class'=>'link-class']);
     },
    'filterType'=>GridView::FILTER_SELECT2,
    'filter'=>ArrayHelper::map(Consumables::find()->asArray()->all(), 'noi', 'noi'), 
    'filterWidgetOptions'=>[
        'pluginOptions'=>['allowClear'=>true],
    ],
    'filterInputOptions'=>['placeholder'=>'Any item'],
 ],
[
        'attribute'=>'lot',
        'pageSummary'=>'Summary',
        'pageSummaryOptions'=>['class'=>'text-right'],
],
       // 'expairedate',
        //'store',
[
            'attribute'=>'quantity',
            'width'=>'150px',
            'hAlign'=>'right',
            'format'=>['decimal',0],
            'pageSummary'=>true
        ],
    [
    'attribute'=>'q_blance', 
    'format'=>'raw',
    'value'=>function($model){ 
        $qb=Tbltrashhold::find()->where(['fk_cons'=>$model->id])->one();
        if($qb){
            return $qb['q_blance'];
        }
    else{
        return " ";
    }  
},],
[     
    'attribute'=>'minblance',
    'format'=>'raw',
    'value'=>function($model){
        $qb=Tbltrashhold::find()->where(['fk_cons'=>$model->id])->one();
        $n='inledit'.$qb->id;
    if($qb){
    $form=ActiveForm::begin(['id'=>$n,'action'=>['update_tshold','id'=>$qb->id],'options'=>['name'=>'inleditfrm']]);
    $f=Html::activeTextInput($qb,'q_blance',['form'=>$n,'id'=>'inp'.$n,'style' =>'width:100%;']);
    $btn=Html::submitButton(Yii::t('app',''),['class'=>'btn btn-primary btn-xs','style'=>'display: none;','form'=>$n]);
    ActiveForm::end();
        return $f.$btn;
    }
    else{
        return 'not set';
    }
    }],
/*[
            'attribute'=>'cost',
            'width'=>'150px',
            'hAlign'=>'right',
            'format'=>['decimal',0],
            'pageSummary'=>true
        ],*/
    [
    'attribute'=>'Totalcost', 
    'value'=>function ($model,$key,$index,$widget) { 
    return number_format($model['cost']*$model['quantity'],2).$model['birrformat'];
},],
[
    'format'=>'raw',
        'headerOptions'=>['style'=>'background-color:white;color:red'],
         'attribute'=>'Status',
         'value'=>function($model){
   $var=app\models\Consumables::find()->where(['id'=>$model->id])->one();
   $curr=date('Y-m-d');
   $end=$var->expairedate;
   $thresh=app\models\Tbltrashhold::find()->where(['fk_cons'=>$model->id])->one(); 
if($thresh){
   if($var->quantity<=$thresh->q_blance){
       return Html::button('insufficient',['class'=>'btn btn-xs btn-danger glyphicon glyphicon-remove']);
    }
if($var->quantity>$thresh->q_blance){
      return Html::button('Sufficient',['class'=>'btn btn-xs btn-success glyphicon glyphicon-ok']);
   }}
else{
    return Html::button('notset',['class'=>'btn btn-xs btn-primary glyphicon glyphicon-ear']);
    }
   }],],
    ]);?>
<?php Pjax::end(); ?>
</div>
