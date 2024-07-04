<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use \app\models\Maternal;
use\app\models\MaternalSearch;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
  <body>
  <?= Html::encode($this->title) ?>
<?php $this->beginBody() ?>
  <?php
    $userP=['Admin'];
    //$userH=['Worker'];
    //s$userC=['Resident'];
    $userD=['Personnel'];
    $currentuser= isset(Yii::$app->user->identity->username) ? Yii::$app->user->identity->username:"";
     $visiblep=false;
     $visibled=false;
    //$visibleh=false;
    //$visiblec=false;
    if(isset(Yii::$app->user->identity->username) && (in_array($currentuser,$userP))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visiblep = true;
        }
     //if(isset(Yii::$app->user->identity->username) && (in_array($currentuser,$userH))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
           //  $visibleh = true;
        //}
        // if(isset(Yii::$app->user->identity->username) && (in_array($currentuser,$userC))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
         //    $visiblec = true;
        //}
   if(isset(Yii::$app->user->identity->username) && (in_array($currentuser,$userD))){//&&($username =="emundia" || $username =="mkiti" || $username =="jkoi" || $username =="Gjumbale")){
             $visibled=true;
        }
    ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => " CHAMPS Inventory System",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
         'encodeLabels'=>false,
        'items' => [
             ['label' => '<span class="glyphicon glyphicon-user"></span>Admin',
                'items'=>[
            ['label' => '<span class="glyphicon glyphicon-user"></span>Add Assets', 'url' => ['/assets/create'],'visible'=>$visiblep],
            ['label' => '<span class="glyphicon glyphicon-user"></span>Add consumables', 'url' => ['/consumables/create'],'visible'=>$visiblep],
            ['label' => '<span class="glyphicon glyphicon-user"></span>Add Personnel', 'url' => ['/personnel/create'],'visible'=>$visiblep],
            ['label' => '<span class="glyphicon glyphicon-list-alt"></span>Assets List', 'url' => ['/asset/create'],'visible'=>$visiblep],
            //['label' => '<span class="glyphicon glyphicon-user"></span>Baby List', 'url' => ['/newborndetials/index5'],'visible'=>$visiblep],
     
                    ]                
                ],
            ['label' => '<span class="glyphicon glyphicon-user"></span>Personnel',
                'items'=>[
                    ['label' => '<span class="glyphicon glyphicon-user"></span>ViewList ', 'url' => ['maternal/index4'],'visible'=>$visibled],
                    ['label' => '<span class="glyphicon glyphicon-list-alt"></span>New Admission' , 'url' => ['/maternal/create'],'visible'=>$visibled],
                    ['label' => '<span class="glyphicon glyphicon-user"></span>Baby List', 'url' => ['/newborndetials/index55'],'visible'=>$visibled],

                    ]],  
           /*  ['label' => '<span class="glyphicon glyphicon-user"></span>Resident/Senior',$visiblec,
                'items'=>[
                    ['label' => '<span class="glyphicon glyphicon-user"></span>ViewList ', 'url' => ['/maternal/index5'],'visible'=>$visiblec],

                    ]],  
               ['label' => '<span class="glyphicon glyphicon-user"></span> ViewList',
                'items'=>[
                    ['label' => '<span class="glyphicon glyphicon-user"></span> All maternal ', 'url' => ['/maternal/index2'],'visible'=>$visiblep],
                    ['label' => '<span class="glyphicon glyphicon-user"></span> All newborn', 'url' => ['/newborndetials/index'],'visible'=>$visiblep],
                    
                    ]
                
                ],*/
       /* ['label' => '<span class="glyphicon glyphicon-user"></span>Useraccount',
         'items'=>[
          ['label' => '<span class="glyphicon glyphicon-user"></span>Users ', 'url' => ['/users/index'],'visible'=>$visibled],
                            ]
                          ],*/
                          Yii::$app->user->isGuest ? (
                ['label' => 'SignIn', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                     ['class' => 'btn btn-link glyphicon glyphicon-log-out']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
      
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
  
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Developed by Yetsedaw Worku<?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>


<?php $this->endBody() ?>
   </body>
</html>
<?php $this->endPage() ?>
