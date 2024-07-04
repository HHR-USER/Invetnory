<?php
//use Yii;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fname',
            'noi',
            'quantity',
[
         'attribute'=>'Request to',
         'value'=>function($model){
          $var=app\models\Stock::find()->where(['id'=>$model->id])->one();
        return $model['department'];
      }],   //'birrformat',
            //'cost',
            //'purchasefrom',
            //'customename',
            //'type',
            //'dor',
           'specification',
            'type',
            'vendorid',
           // 'requestno',
            //'notice:ntext',
            //'status',
[
         'format'=>'raw',
         'header'=>'Option',
         'value'=>function($model){
          $var=app\models\Request::find()->where(['id'=>$model->vendorid])->one();
        //return $model['department'];
        if($var->var_dep==Yii::$app->user->identity->Type&&$model->type=="None-consumable"){
        return Html::a('Update', ['stock/update1', 'id'=>$model->id], ['class'=>'btn btn-xs btn-info glyphicon glyphicon-pencil']);
     }
     else{
      return "Deny";
     }
      }],
        ],
    ]); ?>
</div>
