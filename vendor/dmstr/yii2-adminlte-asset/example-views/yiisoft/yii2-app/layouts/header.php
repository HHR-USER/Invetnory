<?php
    define('DBINFO','mysql:host=localhost;dbname=inventory');
    define('DBUSER','root');
    define('DBPASS','$$1data');
    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
    function performQuery($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

?>
<?php
$link="https://web.hararghe.org/inventory/web/index.php/site/login"."  "."OR"." "."https://10.231.19.20/inventory/web/index.php/site/login\n".
" "." if you are outside compus use this puplic address "."https://197.156.116.67/inventory/web/index.php/site/login";
 if (is_null(Yii::$app->user->identity)) {
         print_r("<br>"."<center>"."<b>"."Time out \nplease login by closing browser agian"."</b>"."<br>".$link."</center>"); 

                  exit;

                    }
                    ?>
<?php
    $query="SELECT 'noi' from `consumables` where 'quantity'=10;";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $i){
               // echo ucfirst($i['noi']);
        }
    }
?>
<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */
?>
<header class="main-header">
 <?=Html::a('<span class="logo-mini">APP</span><span class="logo-lg">'."<marquee>"."This Inventory System Developed by CHAMPS Software Team" . "</marquee>".'</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>
    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only"></span>

        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                    
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages">
                   
                    <ul class="dropdown-menu">
                        <li class="header"></li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                        
                                        </div>
                                        <h4>
                                            <small><i class="fa fa-clock-o"></i></small>
                                        </h4>
                                        <p></p>

                                    </a>
                                </li>
                                <!-- end message -->
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                        </div>
                                        <h4>
                                        </h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                        </div>
                                    <p></p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                      <div class="pull-left">
                                     </div>
                                        <h4>
                                        </h4>
                                        <p></p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                           
                                        </div>
                                        <h4>
                                            <small><i class="fa fa-clock-o"></i> </small>
                                        </h4>
                                        <p></p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#"></a></li>

                    </ul>
                </li>  
   <!-- <li class="dropdown notifications" >
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto" style="list-style: none;">
          <li class="nav-item dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="float:left;">Notifications 
                <?php                
                $usertype=app\models\Consumables::find()->where('store'==Yii::$app->user->identity->Type);
                $type=$usertype;
                $assetstype=app\models\Assets::find()->where('store'==Yii::$app->user->identity->Type);
                $assets=$assetstype;
                $query="SELECT noi from `consumables` where quantity<=10 order by `id` DESC";
                $query1="SELECT NOA from `assets` where quantity<=10 order by `id` DESC";
                if($assetstype==true||$assets==true){
                if(count(fetchAll($query))>0||count(fetchAll($query1))>0){
                ?>
                <span class="badge badge-light label-danger count" ><?php echo count(fetchAll($query))+count(fetchAll($query1)); ?></span>
              <?php
                }
                ?>
              </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01" style="width:50%;overflow:scroll; " id="priceElement">
                <?php
                $store=Yii::$app->user->identity->Type;
                $query="SELECT  noi,store,quantity from `consumables` where quantity<=10 order by `id` DESC";
                 if(count(fetchAll($query))>0){
                     foreach(fetchAll($query) as $i){
                ?>
              <a style ="
                  "lass="dropdown-item" href="header.php?/id=<?php //echo $i['id'] ?>">
                  <?php 
                  if($i['quantity']<=10){
                echo 'From'."   ".$i['store']."  ".'<br>'.$i['noi'].'('.$i['quantity'].')'.'<br>';
                   }
                     ?>
                </a>
                <?php
                     }
                 }else{
                  echo "No low consumables yet.";
                 }}
                 echo "***********Assets*******";
               ?>
       
  <?php
                $store=Yii::$app->user->identity->Type;
                $query1="SELECT  NOA,store,quantity from `assets` where quantity<=10 order by `id` DESC";
                 if(count(fetchAll($query1))>0){
                     foreach(fetchAll($query1) as $i){
                ?>
              <a style ="
                  "lass="dropdown-item" href="header.php?/id=<?php //echo $i['id'] ?>">
                  <?php 
                  if($i['quantity']<=10){
                echo 'From'."   ".$i['store']."   ".'<br>'.$i['NOA'].'('.$i['quantity'].')'.'<br>';
                   }
                     ?>
                </a>
                <?php
                     }
                 }else{
                     echo "No low assets yet.";
                 }
               ?>
            </div>
          </li>
        </ul>
      </div>
    </nav>-->
<li class="dropdown notifications">
  <?php  
                  $userP=['Admin'];
                  $userm=['Microlab'];
                  $userc=['Clinical'];
                  $userpp=['Pathology'];
                  $useri=['IT'];
                  $userk=['KHDSS'];
                  $userl=['Linemanager'];
                  $userpsu=['PSU'];
    $currentuser=isset(Yii::$app->user->identity->Type) ? Yii::$app->user->identity->Type:"";
   $currentuser1=isset(Yii::$app->user->identity->role) ? Yii::$app->user->identity->role:"";
    $visiblep=false;
    $visiblea=false;
    $visiblec=false;
    $visiblem=false;
    $visiblek=false;
    $visiblel=false;
    $visiblelpsu=false;
    if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userk))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblek= true;
         }
   if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userP))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblea= true;
         }
  if(isset(Yii::$app->user->identity->role) && (in_array($currentuser1,$userl))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblea=true;
         }
         ?>
         <?= dmstr\widgets\Menu::widget(
            ['options'=>['class'=>'sidebar-menu tree','data-widget'=>'tree'],
 'items' => [               
[
    'label'=>'Request Stock',
                   'icon'=>'tasks',
                   'url'=>'#','visiblel'=>!$visiblel,
                   'items'=>[
          ['label'=>'Request Consumables','icon'=>'shopping-cart','url'=>['/request/create'],],//'visible'=>!$visiblea],
          ['label'=>'Request fixed assets','icon'=>'shopping-cart','url'=>['/request/createca'],],//'visible'=>!$visiblea],
          ['label'=>'View request','icon'=>'eye','url'=>['/request/index'],],//'visible'=>!$visiblea],
         // ['label'=>'request list','icon'=>'eye','url'=>['/request/reqlist'],'visible'=>!$visiblea],
                [
                  'items'=>[
                   [                 
                  'items' => [
                ],],],],],],],]
          ) ?>
<li class="dropdown notifications">
           <?php  $userP=['Admin'];
                  $userm=['Microlab'];
                  $userc=['Clinical'];
                  $userpp=['Pathology'];
                  $userH=['Personnel'];
    $currentuser= isset(Yii::$app->user->identity->Type) ? Yii::$app->user->identity->Type:"";
     $userH=false;
    if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userP))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $userP = true;
         }?>
<?=dmstr\widgets\Menu::widget(
           /* [
          'options' => ['class' => 'sidebar-menu tree','data-widget'=> 'tree'],
 'items' => [               
[
           'label'=>'Request',
                        'icon'=>'pin',
                        'url'=>'#','visible'=>$userP,
                   'items'=>[
                            ['label'=>'Assets request', 'icon'=>'eye','url'=>['/request/createca'],'visible'=>$userP],
                            ['label'=>'Consumables request','icon'=>'eye', 'url'=>['/request/create'],'visible'=>$userP],
                [
                             'items' => [

                             [                 
                  'items' => [

                ],],],],],],],]
          */) ?>
 <li class="dropdown notifications">
           <?php  $userP=['Admin'];
                  $userm=['Microlab'];
                  $userc=['Clinical'];
                  $userpp=['Pathology'];
    $currentuser= isset(Yii::$app->user->identity->Type) ? Yii::$app->user->identity->Type:"";
     $visiblep=false;

    if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userP))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblep = true;
         }?>
<?=dmstr\widgets\Menu::widget(
            [
          'options' =>['class' => 'sidebar-menu tree','data-widget'=> 'tree'],
 'items' => [               
[
           'label'=>'General Report',
                        'icon'=>'bars',
                        'url'=>'#',
                        'visible'=>$visiblep,
                   'items'=>[
                            ['label'=>'Graphical Consumable Report (Current Year)','icon'=>'bar-chart','url'=>['/site/index_2'],'visible'=>$visiblep],
                            ['label'=>'Consumable Report (Last Year)','icon'=>'bar-chart', 'url'=>['/site/index_2_last'],'visible'=>$visiblep],
                            ['label'=>'Highest Stock Usage/Unit','icon'=>'table','url'=>['/withdrow/maxusable'],'visible'=>$visiblep],
                ],],],]
          ) ?>
<li class="dropdown notifications">
           <?php  $userP=['Admin'];
                  $userm=['Microlab'];
                  $userc=['Clinical'];
                  $userpp=['Pathology'];
    $currentuser= isset(Yii::$app->user->identity->Type) ? Yii::$app->user->identity->Type:"";
     $visiblep=false;

    if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userP))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblep = true;
         }?>
         <?= dmstr\widgets\Menu::widget(
            [
                'options'=>['class'=>'sidebar-menu tree','data-widget'=> 'tree'],
                'items' => [
                 ['label'=>'Receive Stock','icon'=>'file', 'url'=>['/orderitem/index'],'visible'=>$visiblep],
                    ],
                ]
                    ) ?>
    <li class="dropdown notifications">
           <?php  $userP=['Admin'];
                  $userm=['Microlab'];
                  $userc=['Clinical'];
                  $userpp=['Pathology'];
    $currentuser= isset(Yii::$app->user->identity->Type) ? Yii::$app->user->identity->Type:"";
     $visiblep=false;

    if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userP))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblep = true;
         }?>
         <?=dmstr\widgets\Menu::widget(
            [
                'options'=>['class'=>'sidebar-menu tree','data-widget'=> 'tree'],
                'items'=>[
            ['label'=>'ClearRequest','icon'=>'bell', 'url'=>['/request/index1'],'visible'=>$visiblep],
                    ],
            ]
            ) ?>
<li class="dropdown notifications">
        <?php  $userP=['Admin'];
    $currentuser= isset(Yii::$app->user->identity->Type) ? Yii::$app->user->identity->Type:"";
     $visiblep=false;

    if(isset(Yii::$app->user->identity->Type) && (in_array($currentuser,$userP))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblep = true;
         }?>
         <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree','data-widget'=> 'tree'],
                'items' => [
                 ['label' => 'Createusers', 'icon' => 'cog', 'url' => ['/users/index'],'visible'=>$visiblep],
                    ],
                ]
                    ) ?>
        <!--  <a href="#" class="toggle" data-toggle="">Notification
            <i class="fa fa-envelope-o"></i>
            <span class="label label-warning">
              <?php
              //$count = OrderEq::find()->count();
              //echo $count;
                ?>
             </span>
          </a>-->
                    <ul class="dropdown-menu">
                        <li class="header"></li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> 
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#"></a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                        <?= Html::a(
                                    'Signout('.Yii::$app->user->identity->username. ')',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class'=>'btn btn-xs btn-danger logout']
                                ) ?>
                            
                    </a>
                        <!-- Menu Footer-->
                <!-- User Account: style can be found in dropdown.less -->
            </ul>
        </div>
    </nav>
</header>
<script type="text/javascript">
    function updateBids() {
     //I have left out the date/time just to keep it simple for now
  var url = "header.php";
  jQuery("#priceElement").load(url);
}

setInterval("updateBids()", 1000);

</script>
        
