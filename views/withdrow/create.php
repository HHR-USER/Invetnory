<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Withdrow */

$this->title = 'Create Withdrow';
$this->params['breadcrumbs'][] = ['label' => 'Withdrows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="withdrow-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
