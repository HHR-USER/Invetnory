<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Assets */

$this->title ='';// . $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Assets', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="assets-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,'id'=>$id,
    ]) ?>

</div>
