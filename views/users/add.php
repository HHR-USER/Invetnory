<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */

$this->title = '';
//$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('change', [
        'model' => $model,
    ]) ?>

</div>
