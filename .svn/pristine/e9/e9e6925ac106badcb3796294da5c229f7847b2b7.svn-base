<?php 
use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
?>
  <?=Html::encode($this->title) ?>
<?php $this->beginBody() ?>
   <?php
    $userP=['Admin'];
    $userH=['Customer'];
    $userM=['Microlab'];
    $userC=['Clinical'];
    $userPa=['Pathology'];
    $userI=['IT'];
    $userS=['SBS'];
    $userK=['KHDSS'];
    $userl=['Linemanager'];
    $userps=['PSU'];
    $userpo=['PO'];
$currentuser=isset(Yii::$app->user->identity->Type) ? Yii::$app->user->identity->Type:"";
$currentuser1=isset(Yii::$app->user->identity->role) ? Yii::$app->user->identity->role:"";
     $visiblep=false;
     $visibleh=false;
     $visiblem=false;
     $visibleC=false;
     $visiblepa=false;
     $visibleI=false;
     $visibleS=false;
     $visibleK=false;
     $visiblel=false;
     $visibleps=false;
     $visiblepo=false;
    if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userP))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblep = true;
             $visibleh=false;
             $visiblem=false;
             $visibleC=false;
             $visiblepa=false;
             $visibleI=false;
             $visibleS=false;
             $visibleK=false;
             $visiblel=false;
             $visibleps=false;
           }
     if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userH))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblep=false;
             $visibleh=true;
             $visiblem=false;
             $visibleC=false;
             $visiblepa=false;
             $visibleI=false;
             $visibleS=false;
             $visibleK=false;
             $visiblel=false;
             $visibleps=false;
        }
      if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userM))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblep=false;
             $visibleh=false;
             $visiblem=true;
             $visibleC=false;
             $visiblepa=false;
             $visibleI=false;
             $visibleS=false; 
             $visibleK=false; 
             $visiblel=false;  
             $visibleps=false;    
          }
  if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userC))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblep=false;
             $visibleh=false;
             $visiblem=false;
             $visibleC=true;
             $visiblepa=false;
             $visibleI=false;
             $visibleS=false;   
             $visibleK=false;
             $visiblel=false;
             $visibleps=false;
                 }
    if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userPa))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblep=false;
             $visibleh=false;
             $visiblem=false;
             $visibleC=false;
             $visiblepa=true;
             $visibleI=false;
             $visibleS=false; 
             $visibleK=false;
             $visiblel=false;
             $visibleps=false;
            }
if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userI))){
             $visiblep=false;
             $visibleh=false;
             $visiblem=false;
             $visibleC=false;
             $visiblepa=false;
             $visibleI=true;
             $visibleS=false;  
             $visibleK=false;  
             $visiblel=false; 
             $visibleps=false;   
            }
if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userS))){
             $visiblep=false;
             $visibleh=false;
             $visiblem=false;
             $visibleC=false;
             $visiblepa=false;
             $visibleI=false;
             $visibleS=true;     
             $visibleK=false; 
             $visiblel=false; 
             $visibleps=false;
         }
if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userK))){
             $visiblep=false;
             $visibleh=false;
             $visiblem=false;
             $visibleC=false;
             $visiblepa=false;
             $visibleI=false;
             $visibleS=false;     
             $visibleK=true;  
             $visiblel=false;
             $visibleps=false;
         }

if(isset(Yii::$app->user->identity->Type) &&(in_array($currentuser,$userps))){
             $visiblep=false;
             $visibleh=false;
             $visiblem=false;
             $visibleC=false;
             $visiblepa=false;
             $visibleI=false;
             $visibleS=false;     
             $visibleK=false;  
             $visiblel=false;
             $visibleps=true;
         }
if(isset(Yii::$app->user->identity->role)&&(in_array($currentuser1,$userl))){
             $visiblep=false;
             $visibleh=false;
             $visiblem=false;
             $visibleC=false;
             $visiblepa=false;
             $visibleI=false;
             $visibleS=false;     
             $visibleK=false;  
             $visiblel=true;
             $visibleps=false;
         }
if(isset(Yii::$app->user->identity->role)&&(in_array($currentuser1,$userpo))){
             $visiblep=false;
             $visibleh=false;
             $visiblem=false;
             $visibleC=false;
             $visiblepa=false;
             $visibleI=false;
             $visibleS=false;     
             $visibleK=false;  
             //$visiblel=true;
             $visibleps=false;
	     $visiblel=true;
         }
    ?>
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
      </br>
        <div class="user-panel">
            <div class="pull-left image">

             </div>
            <div class="pull-left info">

                <!--<a href="#"><i class="fa fa-circle text-success"></i>Top app</a>-->
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <span class="input-group-btn">
                </button>
              </span>
            </div>
        </form>
        <?=dmstr\widgets\Menu::widget(
            [
        'options'=>['class'=>'sidebar-menu tree','data-widget'=>'tree'],
           'items'=>[
            ['label'=>'Menu verticaly listed below', 'options' => ['class'=>'header','style'=>'color:blue;font-size:16px;margin-top:-7%'],'visible'=>true],
            ['label'=>'Home','icon'=>"home",'url'=>['/site/index6']], 
				  [
                        'label'=>'Consumables',
                        'icon'=>'check',
                        'url'=>'#','visible'=>!$visiblel,//'visible'=>$visiblep,$visibleI,$visibleS,$visiblem,$visiblepa,$visiblec,
                    'items'=>[
                     ['label'=>'Consumable Item', 'icon' => 'arrow-right', 'url' => ['/consumables/index'],'visible'=>$visiblep],
                    ['label'=>'Balance consumable Item', 'icon' => 'arrow-right', 'url' => ['/consumables/indexb'],'visible'=>$visiblep],
                    ['label'=>'Issue Stock', 'icon'=>'share', 'url' => ['/consumables/cartconsumable'],'visible'=>$visiblep],
                    ['label'=>'Request','icon'=>'fas fa-question-circle', 'url'=>['/request/indexm']],
                    ['label'=>'Update Request','icon'=>'fas fa-question-circle', 'url'=>['/stock/indexup']],
        [

                                'items'=>[
                                    [
                                        'items'=>[
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
['label'=>'Lost Stock','icon'=>'eye','url'=>['/assets/lostindex'],'visible'=>$visiblep],
['label'=>'Value List','icon'=>'wrench','url'=>['/catagory/index'],'visible'=>$visiblep],
['label'=>'Expired','icon'=>"remove",'url'=>['/consumables/expaire'],'visible'=>$visiblep], 
['label'=>'Approve Request','icon'=>"fas fa-check-circle fa-lg",'url'=>['/site/index4'],'visible'=>$visiblep], 
['label'=>'Approve Request','icon'=>"fas fa-check-circle fa-lg",'url'=>['/site/index4'],'visible'=>$visiblel], 
[
        'label'=>'Receive Stock Voucher',
        'icon'=>'fas fa-thumbs-up fa-lg',
        'url'=>'#','visible'=>$visiblep,
        'items' => [
        ['label'=>'Received Stock List','icon'=>'list','url'=>['/order-eq/index'],'visible'=>$visiblep],
        ['label'=>'Receive Stock for Consumables','icon' =>'plus','url'=>['/order-eq/createc'],'visible'=>$visiblep],
        ['label'=>'Receive Stock for fixed assets','icon'=>'plus', 'url'=>['/order-eq/create'],'visible'=>$visiblep],
       // ['label'=>'Receive goods for Capitalized Assets', 'icon' => 'plus', 'url' => ['/assets/cfixed'],'visible'=>$visiblep],
                        ],
                    ],
    ['label'=>'Manage Tablet','icon'=>'mobile','url'=>['../../../notes/tablet.php'],'visible'=>$visiblep],
    [
                        'label'=>'Personnel',
                        'icon'=>'users',
                        'url'=>'#','visible'=>$visiblep,
                        'items'=>[
['label'=>'Manage Personnel','icon'=>'list','url'=>['/personnel/index'],'visible'=>$visiblep],],
                    ],
[
            'label'=>' Fixed Assets',
            'icon'=>'laptop',
            'url'=>'#','visible'=>!$visiblel,//'visible'=>$visiblep,$visibleI,$visibleS,$visiblem,$visiblepa,$visiblec,
            'items'=>[
            ['label'=>'Fixed Assets', 'icon' => 'list', 'url' => ['/assets/index'],'visible'=>$visiblep],
            ['label'=>'None capitalized Assets', 'icon' => 'list', 'url' => ['/assets/nfixed'],'visible'=>$visiblep],
            ['label'=>'Capitalized Assets', 'icon' => 'list', 'url' => ['/assets/fixed'],'visible'=>$visiblep],
            ['label'=>'Issue Stock','icon' => 'share', 'url' => ['/assets/transfer'],'visible'=>$visiblep],//first it was no visiblity added
            ['label'=>'Request','icon'=>'fas fa-question-circle', 'url' => ['/request/indexma']],
            ['label'=>'Update Request','icon'=>'fas fa-question-circle', 'url'=>['/stock/indexupa']],
                    
                            [
                                'items' => [
                                    [
                                        'items' => [
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
 [
                        'label' => 'Review Consumables',
                        'icon' => 'folder',
                        'url' => '#','visible'=>$visiblep,
                        'items' => [
                          [
                            'label' => 'Choice You Want To Review',
                             'icon' => 'file',
                               'url' => '#',
                                'items' => [
            ['label' => 'Consumables from Admin', 'icon' => 'eye', 'url' => ['/consumables/index3'],'visible'=>$visiblep],
            ['label' => 'Consumables from Clinical', 'icon' => 'eye', 'url' => ['/consumables/index4'],'visible'=>$visiblep],
            ['label' => 'Consumables from Microlab', 'icon' => 'eye', 'url' => ['/consumables/index5'],'visible'=>$visiblep],
            ['label' => 'Consumables from Pathology', 'icon' => 'eye', 'url' => ['consumables/index6'],'visible'=>$visiblep],
            ['label' => 'Consumables from IT', 'icon' => 'eye', 'url' => ['consumables/index7'],'visible'=>$visiblep],
            ['label' => 'Consumables from SBS', 'icon' => 'eye', 'url' => ['consumables/index8'],'visible'=>$visiblep],
            ['label'=>'Consumables from KHDSS', 'icon' => 'eye', 'url' => ['consumables/index9'],'visible'=>$visiblep],
            ['label' => 'Issued consumables', 'icon' => 'eye', 'url' => ['/consumables/index2'],'visible'=>$visiblep],                                        ],
                                    
                            ],
                        ],
                    ],
//
 [
                        'label' => 'Review Asset',
                        'icon' => 'folder',
                        'url' => '#','visible'=>$visiblep,
                        'items' => [
                          [
                            'label' => 'Choice you want ot review',
                             'icon' => 'file',
                               'url' => '#',
                                'items' => [
            ['label' => 'Assets from Admin', 'icon' => 'eye', 'url' => ['/assets/index3'],'visible'=>$visiblep],
            ['label' => 'Assets from Clinical', 'icon' => 'eye', 'url' => ['/assets/index4'],'visible'=>$visiblep],
            ['label' => 'Assets from Microlab', 'icon' => 'eye', 'url' => ['/assets/index5'],'visible'=>$visiblep],
            ['label' => 'Assets from Pathology', 'icon' => 'eye', 'url' => ['/assets/index6'],'visible'=>$visiblep],
            ['label' => 'Assets from IT', 'icon' => 'eye', 'url' => ['/assets/index7'],'visible'=>$visiblep],
            ['label'=>'Assets from SBS','icon'=>'eye','url'=>['/assets/index8'],'visible'=>$visiblep],
            ['label'=>'Assets from KHDSS','icon'=>'eye','url'=>['/assets/index9'],'visible'=>$visiblep],
             ['label' => 'Issued assets', 'icon'=>'eye','url'=>['/assets/index2'],'visible'=>$visiblep],                                        ],
                                      
                     //],
                                    //],
                                //],
                            ],
      //['label' => 'Return Asset', 'icon' => 'minus', 'url' => ['/personnel/rconsumable'],'visible'=>$visiblep],
                        ],
                    ],
      [
     'label'=>'Print Barcode',
     'icon'=>'barcode',
    ['url'=>'#','visible'=>$visiblep],//'visible'=>$visiblem,'visible'=>$visibleI,'visible'=>$visiblepa,'visible'=>$visibleC,'visible'=>$visibleS,'visible'=>$visibleK,'visible'=>$visibleps],
       'items'=>[
         //for stock keeper
    ['label'=>'Barcode for consumables','icon'=>'barcode','url'=>['/consumables/barcode'],'visible'=>$visiblep],
    ['label' => 'Barcode for fixed assets', 'icon' => 'barcode', 'url' => ['/assets/barcode'],'visible'=>$visiblep],
    /*['label'=>'Barcode for consumables','icon' => 'barcode','url'=>['/consumables/barcode'],'visible'=>$visiblem],
    ['label'=>'Barcode for consumables', 'icon' => 'barcode','url'=>['/consumables/barcode'],'visible'=>$visibleK],
    ['label'=>'Barcode for consumables', 'icon' => 'barcode', 'url' => ['/consumables/barcode'],'visible'=>$visibleps],
    ['label'=>'Barcode for fixed assets', 'icon'=>'barcode', 'url' => ['/assets/barcode'],'visible'=>$visiblem],
    ['label'=>'Barcode for fixed assets','icon'=>'barcode', 'url'=>['/assets/barcode'],'visible'=>$visibleK],
    ['label'=>'Barcode for consumables', 'icon' => 'barcode', 'url' => ['/consumables/barcode'],'visible'=>$visibleI],
    ['label'=>'Barcode for fixed assets', 'icon' => 'barcode', 'url' => ['/assets/barcode'],'visible'=>$visibleI],
    ['label'=>'Barcode for consumables', 'icon' => 'barcode', 'url' => ['/consumables/barcode'],'visible'=>$visiblepa],
    ['label'=>'Barcode for fixed assets', 'icon' => 'barcode', 'url' => ['/assets/barcode'],'visible'=>$visiblepa],
    ['label'=>'Barcode for consumables', 'icon' => 'barcode', 'url' => ['/consumables/barcode'],'visible'=>$visibleC],
    ['label'=>'Barcode for fixed assets', 'icon' => 'barcode', 'url' => ['/assets/barcode'],'visible'=>$visibleC],
    ['label'=>'Barcode for consumables', 'icon' => 'barcode', 'url' => ['/consumables/barcode'],'visible'=>$visibleS],
    ['label'=>'Barcode for fixed assets','icon'=>'barcode', 'url'=>['/assets/barcode'],'visible'=>$visibleS],
    ['label' => 'Barcode for fixed assets', 'icon' => 'barcode', 'url' => ['/assets/barcode'],'visible'=>$visibleps],*/
    [
                               // 'label' => 'Level One',
                               // 'icon' => 'circle-o',
                               // 'url' => '#',
    'items' => [
                                   // ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                       // 'label' => 'Level Two',
                                       // 'icon' => 'circle-o',
                                       // 'url' => '#',
                                        'items' => [
                                          //  ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                          //  ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                           ],],],  
['label'=>'Create users','icon'=>'cog','url'=>['/users/index'],'visible'=>$visiblep],
['label'=>'Change Password','icon'=>'key','url'=>['/users/add']],],]
        ) ?>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;<a class="fa fa-email" href="/inventory/web/uploads/Inventory User manual.pdf"  target="_blank"><span class="glyphicon glyphicon-file"></span> User Manual</b></a>
  </p>
 </section>
</aside>
<style>
.sidebar-menu.tree:before {
  content: "";
  position: absolute;
  top: 0;
  left:0;
  width: 2px;
  height: 100%;
  background-color:#ccc;
}
</style>