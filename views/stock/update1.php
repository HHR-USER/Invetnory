<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\stock */

$this->title = '';
//$this->params['breadcrumbs'][] = ['label' => 'Stocks', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form1', [
        'model' => $model,
    ]) ?>

</div>
