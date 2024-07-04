<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Assetsit */

$this->title = 'Create Assetsit';
$this->params['breadcrumbs'][] = ['label' => 'Assetsits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assetsit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
