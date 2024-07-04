<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
$this->title=" ";
\yii\web\YiiAsset::register($this);
?>
<div class="assets-view">
     <div id="printButton" class="pull-right">
     <button type="button" name="print" class="btn btn-success btn-sm" onClick="printpage()">
                    PRINT
    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
                </div>
    <h3>
<img src="/inventory/img/logo.png" class="users" width="30%"/>From Harar,Ethiopia</h3></p>
    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model'=>$model,
        'attributes'=>[
            'id',
            'fx_type',
            'NOA',
            'facl',
            'asset_code',
            'grnumber',
            'serial',
            'MODEL',
            'LOCATION',
            'DATEPURCHASED',
            'cost',
            'donor_funder',
            'loa',
            'depreciation',
            'accumulated_dep',
            'bva',
            'NOTES',
        ],
    ]) ?>
</div><h5><p><b>Fixed assets</b> <?php echo "<a style='float:right'>".date('Y-M-d')."</a>";?></p><hr> 
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