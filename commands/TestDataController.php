<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\Consumables;

class TestDataController extends Controller
{
    public function actionIndex()
    {
       $sender = 'do_not_reply@hararghe.org';
$recipient = 'yworku@hararghe.org';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
        // Fetch all expired items
       $formattedDate = '2023-10-03';
       // $expiredItems = Consumables::find()->where(['<', 'expairedate', $formattedDate])->all();
        //foreach ($expiredItems as $item) {
            // Send email to the item owner
           if( Yii::$app->mailer->compose()
                     ->setFrom('do_not_reply@hararghe.org')
                     ->setTo("yworku@hararghe.org")
                     ->setSubject("Item expired Reiminder")
                     ->setHtmlBody("Take your action")
                     ->send()){
                     echo "success";
                     return true;
        //}
    }
    else{
        echo "ERRORS";
}}
}