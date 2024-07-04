<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Orderitem */

//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Order confirmation', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="orderitem-view">
    <h3>
<img src="/inventory/img/logo.png" class="users" width="30%"/>From Harar,Ethiopia</h3>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'vendorid',
            'customename',
            'noi',
            'quantity',
            'cost',
            'type',
            'description',
        ],
    ]) ?>
</div><h5><p><b>This is the order you received from vendors</b> <?php echo "<a style='float:right'>".date('Y-M-d')."</a>";?></p><hr> 
<?php 
  $cust=Yii::$app->user->identity->fname;
  $u=Yii::$app->user->identity->mname;
echo  "<h5>"."<center>"."<b>". "Name:-".$cust." ".$u."</b>"."</center>"."</hs>"."<b style='float:right'>".'Signature: __________'."</b>";
?></h5>
<script type="text/javascript">
window.print();
</script>