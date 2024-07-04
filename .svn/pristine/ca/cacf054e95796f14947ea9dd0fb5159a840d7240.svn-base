<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use kartik\editable\Editable;
use yii\widgets\ActiveForm;
use app\models\Orderitem;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderitemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderitem-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider'=>$dataProvider,
        'filterModel'=>$searchModel,
        'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
        'showPageSummary'=>false,
'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i>Receive Consumable</h3>',
         //'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Addneworder', ['create'], ['class' => 'btn btn-primary','style'=>"float:right",'onClick'=>"popup()"]),
       // 'type'=>'panel panel-info',
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
    'itemLabelSingle' => 'orders',
    'itemLabelPlural' => 'orders',
      'columns' => [
         'foreign_key',
            'noi',
            'type',
            'packsize',
       [     
      'attribute'=>'cost',
      'format'=>'raw',
      'value'=>function($model){
        $n='inledit'.$model->id;
    $form=ActiveForm::begin(['id'=>$n, 'action'=>['update','id'=>$model->id], 'options' => ['name' => 'inleditfrm']]);
    $f=Html::activeTextInput($model, 'cost', ['form'=>$n, 'id'=>'inp'.$n,"oninput"=>"this.value=this.value.replace(/[^0-9]/g,'');",'style' => 'width:100%;']);
    $btn=Html::submitButton(Yii::t('app', ''),['style' => 'display: none;','form'=>$n]);
        ActiveForm::end();
        return $f.$btn;
        }],
    [     'attribute'=>'quantity',
      'format'=>'raw',
      'value'=>function($model){
        $n='inledit'.$model->id;
    $form=ActiveForm::begin(['id'=>$n,'action'=>['update','id'=>$model->id], 'options' =>['name' => 'inleditfrm']]);
    $f=Html::activeTextInput($model,'quantity', ['form'=>$n,"oninput"=>"this.value=this.value.replace(/[^0-9]/g,'');", 'id'=>'inp'.$n, 'style' =>'width:100%;']);
    $btn=Html::submitButton(Yii::t('app', ''), ['class'=>'btn btn-primary btn-xs','style' => 'display: none;','form'=>$n]);
            ActiveForm::end();
        return $f.$btn;
        }],
    /*[     'attribute'=>'assetbarcode',
      'format'=>'raw',
      'value'=>function($model){
        $n='inledit'.$model->id;
    $form=ActiveForm::begin(['id'=>$n,'action'=>['update','id'=>$model->id], 'options' =>['name' => 'inleditfrm']]);
    $f=Html::activeTextInput($model,'assetbarcode', ['form'=>$n, 'id'=>'inp'.$n, 'style' =>'width:100%;']);
    $btn=Html::submitButton(Yii::t('app', ''), ['class'=>'btn btn-primary btn-xs','style' => 'display: none;','form'=>$n]);
            ActiveForm::end();
        return $f.$btn;
        }],*/
  [     'attribute'=>'Total cost',
      'format'=>'raw',
      'value'=>function($model){
      $item=Orderitem::find()->where(['id'=>$model->id])->one();
        return number_format($item['cost']*$item['quantity'],2).$item['birrformat'];
        }],             
/*[     'header'=>'quantity',
      'format'=>'raw',
      'value'=>function($model){
        $n='inledit'.$model->id;
    $form=ActiveForm::begin(['id'=>$n, 'action'=>['update','id'=>$model->id], 'options' => ['name' => 'inleditfrm']]);
    $f=Html::activeTextInput($model, 'quantity', ['form'=>$n, 'id'=>'inp'.$n, 'style' => 'width: 100px;']);
    $btn=Html::submitButton(Yii::t('app', 'Receive'), ['class' => 'btn btn-primary','form'=>$n]);
        ActiveForm::end();
        return $f.$btn;
        }],*/
/*[     'header'=>'unitprice',
      'format'=>'raw',
      'value'=>function($model){
        $n='inledit'.$model->id;
    $form=ActiveForm::begin(['id'=>$n, 'action'=>['update','id'=>$model->id], 'options' => ['name' => 'inleditfrm']]);
    $f=Html::activeTextInput($model, 'unitprice', ['form'=>$n, 'id'=>'inp'.$n, 'style' => 'width: 100px;']);
    $btn=Html::submitButton(Yii::t('app', 'change'), ['class' => 'btn btn-primary','form'=>$n]);
        ActiveForm::end();
        return $f.$btn;
        }
          ],*/
 [
              'format'=>'raw',
               'header'=>'Receive',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
               $id=$data->id;
                $item=Orderitem::find()->where(['id'=>$id])->one();
      if($item->valuecheck==0&&$item->type=="None-consumable"){                
return Html::a('Recive', ['orderitem/createmore', 'id'=>$id], ['class'=>'btn btn-xs btn-primary glyphicon glyphicon-ok']);
          }
        if($item->valuecheck==0&&$item->type=="Consumable"){                
return Html::a('Recive', ['orderitem/create2', 'id'=>$id], ['class'=>'btn btn-xs btn-primary glyphicon glyphicon-ok']);
          }

      else {
   return Html::a('view', ['orderitem/view', 'id'=>$id], ['class'=>'btn btn-xs btn-primary glyphicon glyphicon-eye-open']);
          }
          
          }   
        ],      
        ],
    ]); ?>
</div>
