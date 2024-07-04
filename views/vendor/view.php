<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vendor */

$this->title ='';// $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Vendors', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vendor-view">
    <h1><?= Html::encode($this->title) ?></h1>
<h3>
<img src="/inventory/img/logo.png" class="users" width="30%"/>From Harar,Ethiopia
</h3>
 <div id="printButton" class="pull-right">
                <button type="button" name="print" class="btn btn-success btn-sm" onClick="printpage()">
                    PRINT
<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
                </div>
    <h5><CENTER><b>This is vendor history</b></CENTER>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vendorid',
            'vendorname',
            'vendormiddlename',
            'phonenumber',
            'contactname',
            'email:email',
            'address1',
            'address2',
            'city',
            'state',
            'postalcode',
            'country',
            'currentdate',
            'website',
        ],
    ]) ?>

</div>
<?php 
  $cust=Yii::$app->user->identity->fname;
  $u=Yii::$app->user->identity->mname;
echo  "<h5>"."<b>". "Name:-".$cust." ".$u."</b>"."</hs>"."<b style='float:right'>".'Signature: __________'.date('Y-M-d')."</b>";
?>
<script type="text/javascript">
function printpage() {
document.getElementById('printButton').style.visibility="hidden";
window.print();
document.getElementById('printButton').style.visibility="visible";  
}
</script>