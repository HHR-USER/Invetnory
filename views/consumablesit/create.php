<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Consumablesit */

$this->title = 'Create Consumablesit';
$this->params['breadcrumbs'][] = ['label' => 'Consumablesits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumablesit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
