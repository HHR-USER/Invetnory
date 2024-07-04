<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Assets */

$this->title ='';// $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Assets', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="assets-view">

    <h1><?= Html::encode($this->title) ?></h1>
      <div id="printButton" class="pull-right">
                <button type="button" name="print" class="btn btn-success btn-sm" onClick="printpage()">
                    PRINT
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
                </div>
    <h3>
   
<img src="/inventory/img/logo.png" class="users" width="30%"/>From Harar,Ethiopia</h3></p>
   <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'catagoryname',
            'unit',
            'serial',
            'MODEL',
            'serviceyear',
            //'quantity',
            'shelfno',
            'shelflife',
            'shelfname',
            'shelfno',
            'cost',
            //'totalcost',
            'NOA',
            'DOM',
            'DOC',
            'RD',
            'TD',
            'Status',
           // 'Place',
            'RC',
     [
          'attribute'=>'Picture',
          'value'=>Yii::getAlias('@web/uploads').'/'.$model->Picture,
          'format'=>['image',['width'=>'100','height'=>'100']],
         ],
              'RNl',
            'RM',
            'ASSETID',
          //  'PARENTASSET_ID',
          //  'ASSETGROUP_ID',
           // 'LOCATION_ID',
          //  'VENDOR_ID',
           // 'OWNER_PERSONNELGROUP_ID',
           // 'OWNER_PERSONNEL_ID',
           'SERVICEAGREEMENT_ID',
          'CUSTODIAN_PERSONNEL_ID',
           'STATUS_ID',
           // 'ASSETBARCODE',
            //'SERIALNUMBER',
            //'DEPARTMENT_ID',
          'CONDITION_ID',
           'SCRAPVALUE',
           // 'CURRENTVALUE',
            //'PURCHASEPRICE',
           // 'ACCOUNTCODE',
           // 'PURCHASEORDERNUMBER',
            //'ISCHECKEDOUT',
            //'ASSETNAME',
          //  'BRAND',
            'MANUFACTURER',
          //'AUTOBARCODE',
           //'ASSETTYPE',
            'LOCATION',
            'CONDITIONs',
            'CUSTODIAN',
           'INCLUDEINAUDIT',
           'DEPRECIATIONMETHOD',
            'RECOVERYPERIOD',
           'DATEINSERVICE',
            //'DATEAUDITED',
            //'DUEDATE',
           // 'DATEPURCHASED',
          //  'CHECKOUTDATE',
            //'DATECREATED',
           // 'DATEUPDATED',
            'LASTAUDITDATE',
            'DATEWARRANTYEXPIRES',
          //  'NEXTSERVICEDUEDATE',
            'NOTES',

        ],
    ]) ?>
  </div><h5><p><b>Assets stock </b> <?php echo "<a style='float:right'>".date('Y-M-d')."</a>";?></p><hr> 
<?php 
  $cust=Yii::$app->user->identity->fname;
  $u=Yii::$app->user->identity->mname;
echo  "<h5>"."<center>"."<b>". "Name:-".$cust." ".$u."</b>"."</center>"."</hs>"."<b style='float:right'>".'Signature: __________'."</b>";
?></h5>
<script type="text/javascript">
function printpage() {
document.getElementById('printButton').style.visibility="hidden";
window.print();
document.getElementById('printButton').style.visibility="visible";  
}
</script>