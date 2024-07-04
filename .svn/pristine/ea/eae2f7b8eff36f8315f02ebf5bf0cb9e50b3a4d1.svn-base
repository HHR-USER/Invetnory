<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Withdrow */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Withdrows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="withdrow-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'catagory',
            'noi',
            'serial',
            'packsize',
            'unit',
            'lot',
            'quantity',
            'dp',
            'expairedate',
            'shelflife',
            'location',
            'shelfname',
            'shelfno',
            'dr',
            'am',
            'department',
            'totalcost',
            'birrformat',
            'cost',
            'purchasefrom',
            'remark',
            'fk_consumable',
            'fk_forcata',
            'fk_borrows',
            'firstname',
            'lastname',
            'username',
            'mobile',
            'personnelid',
            'vendorid',
            'dt',
            'office',
            'dep',
            'fk',
            'fkc',
            'fkp',
            'fkm',
            'For_key',
            'For_keyc',
            'For_keyp',
            'For_keynormal',
        ],
    ]) ?>

</div>
