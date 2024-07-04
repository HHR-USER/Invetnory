<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
//$this->title ="INVENTORY SYSTEM";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo '<b style=color:red>'."Maintenance Mode"."</b>"; ?></title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            text-align: center;
        }

        .logo {
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .message {
            font-size: 16px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="logo">
                <?= Html::img('/inventory/img/maintenance.jfif', ['alt' => 'Logo']) ?>
            </div>
            <div class="title">
                <?= Html::encode($this->title) ?>
            </div>
            <div class="message">
                <p> We are currently performing maintenance. Please check back later.</p>
                በአሁኑ ጊዜ የጥገና ሥራ እየሰራን ነው። እባክህ ቆይተህ ተመልከት።</p>
                Yeroo ammaa kana suphaa hojjechaa jirra. Mee booda deebi'aa.
            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = '<?= Yii::$app->urlManager->createUrl(['site/logout1']) ?>';
        },95000);// Redirect after 5 seconds (adjust the delay as needed)
    </script>
</body>
</html>