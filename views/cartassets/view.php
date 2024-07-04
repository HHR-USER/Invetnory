<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cartassets */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cartassets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cartassets-view">

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
            'catagoryname',
            'unit',
            'serial',
            'MODEL',
            'serviceyear',
            'quantity',
            'shelflifedeicide',
            'shelflife',
            'shelfname',
            'shelfno',
            'birrformat',
            'asset_code:ntext',
            'grnumber:ntext',
            'donor_funder:ntext',
            'loa:ntext',
            'depreciation',
            'accumulated_dep',
            'bva:ntext',
            'plate_number:ntext',
            'fcn:ntext',
            'fen:ntext',
            'fx_type:ntext',
            'fxa:ntext',
            'cost',
            'purchasefrom',
            'totalcost',
            'NOA:ntext',
            'DOM',
            'DOC',
            'RD',
            'TD',
            'Status',
            'Place',
            'RC',
            'Picture:ntext',
            'RNl',
            'RM',
            'ASSETID',
            'PARENTASSET_ID',
            'ASSETGROUP_ID',
            'LOCATION_ID',
            'VENDOR_ID',
            'OWNER_PERSONNELGROUP_ID',
            'OWNER_PERSONNEL_ID',
            'SERVICEAGREEMENT_ID',
            'CUSTODIAN_PERSONNEL_ID',
            'STATUS_ID',
            'assetbarcode:ntext',
            'SERIALNUMBER',
            'DEPARTMENT_ID',
            'CONDITION_ID',
            'SCRAPVALUE',
            'CURRENTVALUE',
            'PURCHASEPRICE',
            'ACCOUNTCODE',
            'PURCHASEORDERNUMBER',
            'ISCHECKEDOUT',
            'ASSETNAME',
            'BRAND',
            'MANUFACTURER',
            'AUTOBARCODE',
            'ASSETTYPE',
            'LOCATION',
            'CONDITIONs',
            'CUSTODIAN',
            'INCLUDEINAUDIT',
            'DEPRECIATIONMETHOD',
            'RECOVERYPERIOD',
            'DATEINSERVICE',
            'DATEAUDITED',
            'DUEDATE',
            'DATEPURCHASED',
            'CHECKOUTDATE',
            'DATECREATED',
            'DATEUPDATED',
            'LASTAUDITDATE',
            'DATEWARRANTYEXPIRES',
            'NEXTSERVICEDUEDATE',
            'NOTES:ntext',
            'fname',
            'lname',
            'mobile',
            'office',
            'username',
            'dep',
            'returnables',
            'personnelid',
            'dt',
            'doreturnable',
            'monthlyreport',
            'yearlyreport',
            'store:ntext',
            'stat:ntext',
        ],
    ]) ?>

</div>
