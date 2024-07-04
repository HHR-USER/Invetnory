<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WithdrowSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Withdrows';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="withdrow-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Withdrow', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'catagory',
            'noi',
            'serial',
            'packsize',
            //'unit',
            //'lot',
            //'quantity',
            //'dp',
            //'expairedate',
            //'shelflife',
            //'location',
            //'shelfname',
            //'shelfno',
            //'dr',
            //'am',
            //'department',
            //'totalcost',
            //'birrformat',
            //'cost',
            //'purchasefrom',
            //'remark',
            //'fk_consumable',
            //'fk_forcata',
            //'fk_borrows',
            //'firstname',
            //'lastname',
            //'username',
            //'mobile',
            //'personnelid',
            //'vendorid',
            //'dt',
            //'office',
            //'dep',
            //'fk',
            //'fkc',
            //'fkp',
            //'fkm',
            //'For_key',
            //'For_keyc',
            //'For_keyp',
            //'For_keynormal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
