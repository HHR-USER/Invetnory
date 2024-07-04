<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tablet */

//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Tablets', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
//\yii\web\YiiAsset::register($this);
?>
<div class="tablet-view">
    <p>
     <?=Html::a('Update',['update','id'=>$model->id],['class'=>'btn btn-warning']) ?>
    </p>
    <?=DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tablet_type:ntext',
            'model:ntext',
            'serial_no:ntext',
            'used_by:ntext',
			'mobile',
            'date',
            'register_by:ntext',
            'dates',
        ],
    ]) ?>

</div>
