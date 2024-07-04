<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use  app\models\Orderitem;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\OrderEq */

$this->title ='';
//$this->params['breadcrumbs'][] = ['label' => 'Order Eqs', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-eq-view">
      <div id="printButton" class="pull-right">
                <button type="button" name="print" class="btn btn-success btn-sm" onClick="printpage()">
                    PRINT
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
                </div>
    <h3>
<img src="/inventory/img/logo.png" class="users" width="30%"/>From Harar,Ethiopia</h3>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vendorid',
            'customename',
            'Doo',
              ],
    ]) ?>
<?= GridView::widget([
    'dataProvider'=>$dataProvider,
    //'filterModel'=>$searchModel,
      'bootstrap'=>true,
      'hover'=>true,
      'summary' => '',
      'columns' => [
[
         'attribute'=> 'noi',
         'value'=>function($model){
          $data=$model->id;
        return $model['noi'];
      }],
      [
         'attribute'=> 'packsize',
         'value'=>function($model){
          $data=$model->id;
        return $model['packsize'];
      }],
  [
         'attribute'=> 'unit',
         'value'=>function($model){
          $data=$model->id;
        return $model['unit'];
      }],
  [
         'attribute'=> 'quantity',
         'value'=>function($model){
          $data=$model->id;
        return $model['quantity'];
      }],
[
         'attribute'=> 'cost',
         'value'=>function($model){
          $data=$model->id;
        return $model['cost'];
      }],
  [
         'attribute'=> 'description',
         'value'=>function($model){
          $data=$model->id;
        return $model['description'];
      }],
  //Actions provided to update 
  /*[ 'format'=>'raw',
            'header'=>'Actions',
            'headerOptions'=>['class'=>'kartik-sheet-style'],
            'value'=>function($data){
                    $id=$data->id;
 $var=app\models\Orderitem::find()->where(['foreign_key'=>$id])->one();
if($var->type=='None-consumable'){
 $btn='<a style="background-color:blue" data-method="post" data-confirm="Are you sure ?" href="'.Url::to(["order-eq/edit2", 'id'=>$id]).'"><i class="btn btn-xs btn-primary glyphicon glyphicon-plus">View</i> </a>';                                                
    return $btn;
        }
    else{
  $cons='<a data-method="post" data-confirm="Are you sure?"'. Html::a('update', ['order-eq/edit1','id'=>$id],['class'=>'btn btn-xs btn-success glyphicon glyphicon-edit']);
  return $cons;
    }}], */
[
              'format'=>'raw',
               'header'=>'Action',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
        $model=app\models\OrderEq::find()->where(['id'=>$data->id])->one();
        $var=app\models\Orderitem::find()->where(['foreign_key'=>$data->id])->one();
   return Html::a('Edit',['orderitem/update', 'id' =>$data->id,],['class'=>'btn btn-xs btn-success glyphicon glyphicon-edit']);
   }],   
],
//For the people 
]);?>
</div><h5><p><b>Your order list</b> 
<?php echo "<a style='float:right'>".date('Y-M-d')."</a>";?></p><hr> 
<?php 
  $cust=Yii::$app->user->identity->fname;
  $u=Yii::$app->user->identity->mname;
echo  "<h5>"."<center>"."<b>". "Name:-".$cust." ".$u."</b>"."</center>"."</hs>"."<b style='float:right'>".'Signature: __________'."</b>";
?></h5>
<script type="text/javascript">
function printpage() {
document.getElementById('printButton').style.visibility="hidden";
window.print();
document.getElementById('printButton').style.visibility="visible";  
}
</script>