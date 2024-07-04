<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Request;
use yii\widgets\ActiveForm;
use kartik\grid\GridView;
use app\models\Stock;
/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title ="";// $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="request-view">
<?= DetailView::widget([
        'model'=>$model,
        'attributes'=>[
            'requestno',
           'personnelid',
            'dor',
            'foreign_key',
           // 'confirmbymicro',
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
         'attribute'=> 'FullName',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['fname'];
          }],
[
         'attribute'=> 'noi',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['noi'];
          }],
  [
         'attribute'=> 'quantity',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
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
         'attribute'=> 'dor',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['dor'];
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
	$em=Stock::find()->where(['id'=>$data->id])->one();
  if($var->type=="None-consumable"&&$em->email==Yii::$app->user->identity->email){
   return Html::a('Update',['stock/indexupa', 'id'=>$data->vendorid], ['class'=>'btn btn-xs btn-info glyphicon glyphicon-pencil']);
    }
  else if($var->type=="Consumable"&&$em->email==Yii::$app->user->identity->email){
   return Html::a('Update', ['stock/indexup', 'id'=>$data->vendorid], ['class'=>'btn btn-xs btn-info glyphicon glyphicon-pencil']);
 }
else{
  return "Deny";
}
}],    
],
]);?>
<?= Html::a('Print',['print', 'id' => $model->id], ['class' => 'btn btn-success glyphicon glyphicon-print','style'=>'float:left'])  ?>
