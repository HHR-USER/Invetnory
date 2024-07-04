<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Catagory */

$this->title = '';//$model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Catagories', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="catagory-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
             <?= Html::a('Back', ['catagory/index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>      

    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'typeof_material',
            'catagoryname',
            'location',
            'purchasefrom'
        ],
    ]) ?>

</div>
