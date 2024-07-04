<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Maternal */

$this->title = '';
//$this->params['breadcrumbs'][] = ['label' => 'Maternals', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maternal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formro', [
        'model' => $model,
    ]) ?>

</div>
