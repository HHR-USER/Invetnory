<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catagory */

$this->title = '';
//$this->params['breadcrumbs'][] = ['label' => 'Catagories', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catagory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
