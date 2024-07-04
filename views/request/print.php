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
 <h3>
<img src="/inventory/img/logo.png" class="users" width="30%"/>From Harar,Ethiopia</h3>
<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'requestno',
            'fname',
            'type',
            'dor',
        ],
    ]) ?>
<?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,
      'bootstrap'=>true,
      'hover'=>true,
      'summary' => '',
      'columns' => [
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
],
]);?>
</div><h5><p><b>Approve request</b> <?php echo "<a style='float:right'>".date('Y-M-d')."</a>";?></p><hr> 
<?php 
  $cust=Yii::$app->user->identity->fname;
  $u=Yii::$app->user->identity->mname;
echo  "<h5>"."<center>"."<b>". "Approved By:-".$cust." ".$u."</b>"."</center>"."</hs>"."<b style='float:right'>".'Signature: __________'."</b>";
?></h5>
<script type="text/javascript">
window.print();
</script>