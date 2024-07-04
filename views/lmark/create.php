<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lmark */

$this->title = 'Create Lmark';
$this->params['breadcrumbs'][] = ['label' => 'Lmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lmark-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
