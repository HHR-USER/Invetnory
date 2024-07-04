<?php
use yii\helpers\Url;
use \app\models\Consumables;
use \app\models\Withdrow;
use \app\models\Assets;
use app\models\Cartassets;
use kartik\icons\Icon;
/* @var $this yii\web\View */
$this->title="";
?>
<?php
$today=date('Y-m-d'); 
$qnt=0;
$store="Admin";
$rep=6;
$rec=3;
$st_av1='Avail';
$st_av='ini';
$st_av2='ini_n';
$site=Yii::$app->user->identity->role;
$out=Withdrow::find()->sum('quantity');
//$command=Yii::$app->db->createCommand("SELECT sum(quantity) FROM inventory.consumables where consumables.store='$store'and consumables.quantity>'$qnt' and consumables.rep='$rep' and consumables.expairedate>='$today' or consumables.expairedate=NULL");
//$count=$command->queryScalar();
$command = Yii::$app->db->createCommand("
    SELECT SUM(quantity) 
    FROM inventory.consumables 
    WHERE consumables.quantity > '$qnt' 
    AND (consumables.st_avail='$st_av1') or (consumables.st_avail='$st_av')
    AND (consumables.expairedate>='$today' OR consumables.expairedate IS NULL) 
    AND (consumables.rep='6' OR consumables.rep='3')");
$count=$command->queryScalar();
//Identify Assets
$aout=Cartassets::find()->sum('quantity');
//$acount=Assets::find()->where(['store'=>$store,'received'=>$rec,'rep'=>$rep])->sum('quantity');
$ass=Yii::$app->db->createCommand("
    SELECT SUM(quantity) 
    FROM inventory.assets 
    WHERE assets.quantity>'$qnt' 
    AND (assets.st_avail='$st_av1' OR assets.st_avail='$st_av')
    AND (assets.received='$rec' AND assets.rep='$rep')");
$acount = $ass->queryScalar();
?> 
<div class="site-index">
    <h1><?php echo str_repeat('&nbsp;',8)."".str_repeat('&nbsp;',7);?><?php echo "Hi"." "."<u style='color:blue'>".Yii::$app->user->identity->fname."</u>";?> Welcome To Inventory System Dashboard!</h1>
<div class="jumbotron">
<b><p style="font-size:25px;color:#337ab7;">Consumable Stock</p></b>
  <p><?php echo str_repeat('&nbsp;',4)."".str_repeat('&nbsp;',4);?>
  <?php if(Yii::$app->user->identity->Type!=""){?>
  <a class="btn btn-default"  href="#">
  <span class="icon-green"></span><?= Icon::show('dashboard')?> <b style="color:blue">Total:<?php echo $count?></b><br> Consumable Stock Available</a>
  <?php }?>
  <?php if(Yii::$app->user->identity->Type!=" "){?>
  <a class="btn btn-default" href="<?=Url::to(['consumables/cartconsumablebalance']);?>"><?= Icon::show('dashboard')?><b style="color:blue"> Total:<?php echo $out?></b><br> Consumable Stock Out</a> 
  <?php }?>
  <a class="btn btn-default" href="<?=Url::to(['consumables/balanclon']);?>"><?= Icon::show('exclamation-triangle')?> Consumable Stock <br> Status</a>
  </p>
 <div class="progress">
  <div class="progress-bar" style="font-size:24px;color:#337ab7;width:100%;background: #eeebeb99">Fixed Asset</div>
             </div>
  <p><?php echo str_repeat('&nbsp;',4)."".str_repeat('&nbsp;',4);?>
  <?php if(Yii::$app->user->identity->Type!=" "){?>
  <a class="btn btn-default" href="<?=Url::to(['assets/list']);?>"> <?=Icon::show('dashboard')?><b style="color:blue"> Total:<?php echo $acount?></b><br> Asset Stock Available</a> 
  <?php }?>
  <?php if(Yii::$app->user->identity->Type!=" "){?>
  <a class="btn btn-default" href="<?=Url::to(['cartassets/displayremain']);?>"> <?=Icon::show('dashboard')?><b style="color:blue"> Total:<?php echo $aout?></b><br> Asset Stock Out</a> 
  <?php }?>
  <?php if(Yii::$app->user->identity->Type!=""){?>
  <a class="btn btn-default" href="<?=Url::to(['assets/index3']);?>">
  <?= Icon::show('exclamation-triangle')?><br> Fixed Asset Status
    <?php }?></a>
  <a class="btn btn-default" href="<?=Url::to(['site/logout1']);?>"><span class="glyphicon glyphicon-off"></span> Logout</a>
   </p>
<b><hr style="height:10px"></b>
   </div></div>
<style>
   .jumbotron {
            border-left:20px solid #337ab7;
            height:400px;
            position:fixed;
            left:20%;
        }
   .jumbotron {
            border-right:20px solid #337ab7;
            height:400px;
            position:fixed;
            left:20%;
        }
    </style>