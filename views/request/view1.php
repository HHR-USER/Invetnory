<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Request;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title ="";// $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="request-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
           'personnelid',
            'noi',
            //'unit',
            'packsize',
            //'customename',
            'quantity',
            'foreign_key',
            'dor',
            'specification:ntext',
        ],
    ]) ?>

</div>
<?php
$model=new Request();
?><br>
<!--<div class="assets-form">
      <div class="panel panel-info" style="margin-top:-3%">
      <div class="panel-heading">
    <h1 class="panel-title"><?= Html::encode($this->title) ?><b>Send Your request</b></i></h1>
        </div>
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
       <div class="row"> 
       <div class="col-lg-11">
      <div class="col-lg-11"> 
<?= $form->field($model, 'email')->textInput(['readOnly'=>false,'autocomplete'=>'off','required'=>'required']) ?>
  </div></div>
     <div class="col-xs-12,col-xs-6 col-xs-5">
    </div>
        <div class="col-xs-12,col-xs-5 col-xs-5">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div></div></div></div>
    <?php ActiveForm::end(); ?>
</div>
-->