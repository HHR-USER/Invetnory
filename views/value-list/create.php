<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ValueList */

$this->title = 'Create Value List';
$this->params['breadcrumbs'][] = ['label' => 'Value Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="value-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
