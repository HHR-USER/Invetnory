<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ValueListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Value Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="value-list-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <?= Html::a('Create Value List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'value',
            'index',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
