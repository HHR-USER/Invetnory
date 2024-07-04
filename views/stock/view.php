<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\stock */

$this->title ="";
//$this->params['breadcrumbs'][] = ['label' => 'Stocks', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="stock-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
           // 'catagory',
            'noi',
          //  'NOA',
            'fname:ntext',
            'quantity',
            'department',
           // 'birrformat',
           // 'cost',
           // 'purchasefrom',
           // 'customename',
            'type',
            'dor',
            'specification:ntext',
           // 'vendorid',
            //'requestno',
            'notice:ntext',
           // 'status',
        ],
    ]) ?>

</div>
