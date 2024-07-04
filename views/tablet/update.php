<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tablet */

//$this->title = 'Update Tablet: ' . $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Tablets', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tablet-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
