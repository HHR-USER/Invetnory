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
  <?= Html::a(' Reject', ['rejected', 'id' => $model->id], ['class' => 'btn btn-done','style'=>'color:red;float:right'])  ?>
  <?= Html::a('Moreinfromation', ['moreinfromation', 'id' => $model->id], ['class' => 'btn btn-done','style'=>'float:right'])  ?>
  <?= Html::a('Approve', ['approve1', 'id' => $model->id], ['class' => 'btn btn-confirm','style'=>'float:right'])  ?>
<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'requestno',
           // 'noi',
           'personnelid',
            //'type',
            //'quantity',
            'dor',
            'foreign_key',
           // 'email',
            //'remark:ntext',
            'confirmbymicro',
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
         'attribute'=> 'Full Name',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['fname'];
          }],
[
         'attribute'=> 'Name of item',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['noi'];
          }],
  [
         'attribute'=> 'Quantity',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['quantity'];
         }],
 [
         'attribute'=> 'Type of item',
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
         'attribute'=> 'Specification',
         'value'=>function($model){
          $var=Stock::find()->where(['vendorid'=>$model->id])->one();
        return $model['specification'];
      }],
[
              'format'=>'raw',
              'header'=>'Update',
              'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
   return Html::a('Update', ['request/edit1', 'id'=>$data->id], ['class'=>'btn btn-xs btn-info glyphicon glyphicon-pencil']);
          }],   
],
]);?>
<?= Html::a('Print',['print', 'id' => $model->id], ['class' => 'btn btn-success glyphicon glyphicon-print','style'=>'float:left'])  ?>
