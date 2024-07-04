<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Orderitem */

//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Order confirmation', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
  <?= Html::a('Print', ['print', 'id' => $model->id], ['class' => 'btn btn-success glyphicon glyphicon-print','style'=>'float:right'])  ?>
      </br>
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="orderitem-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vendorid',
            'customename',
            'noi',
            'quantity',
            'cost',
            'type',
           'description',
        ],
    ]) ?>
</div>