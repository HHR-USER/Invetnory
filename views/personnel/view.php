<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Personnel */

$this->title ='';// $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Personnels', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="personnel-view">

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
    <h5><CENTER><b>This is Personnel history</b></CENTER>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'personnelid',
           // 'personnelgroup_id',
            'firstname',
            'lastname',
            'emailaddress',
            'workphonenumber',
            'homephonenumber',
            'mobilephonenumber',
           // 'pagernumber',
           // 'autobarcode',
            'jobtitle',
            'personnelgroup',
           // 'displaynameandnumber',
            //'datecreated',
            'currentdate',
            //'status_id',
        ],
    ]) ?>
</div><h5><p><b></b> <?php echo "<a style='float:right'>".date('Y-M-d')."</a>";?></p><hr> 
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