<?php
$params=require __DIR__ . '/params.php';
$db=require __DIR__ . '/db.php';
$config=[
    'id'=>'',
    'basePath'=>dirname(__DIR__),
    'bootstrap'=>['log'],
    'aliases'=>[
        '@bower'=>'@vendor/bower-asset',
        '@npm'=>'@vendor/npm-asset',
    ],
    'components'=>[
 'mailer' => [
         'class'=>'yii\swiftmailer\Mailer',
         'transport'=>[
             'class'=>'Swift_SmtpTransport',
             'host'=>'smtp.office365.com',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
             'username'=>'do_not_reply@hararghe.org',
             'password'=>'20061986essiE',//'!@$$rabb!tJ@mp$',
			 //'20061986essiE',
             'port'=>'25', // Port 25 is a very common port too
             'encryption'=>'tls', // It is often used, check your provider or mail server specs
             //'useFileTransport' => true,
         ],
     ],
     'transport'=>[
     'class'=>'Swift_SmtpTransport',
     'plugins'=>[
         [
             'class'=>'Swift_Plugins_ThrottlerPlugin',
             'constructArgs'=>[20],
         ],
     ],
 ],
    'request'=>[
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey'=>'w-lm_BU-AzP230LD4OKu4FuDaxRqJtgR',
           // 'baseUrl'=>'',
        ],
        'response'=>[
            'formatters'=>[
                'pdf' => [
                    'class' => 'robregonm\pdf\PdfResponseFormatter',
                    'mode' => '', // Optional
                    'format' => 'A4',  // Optional but recommended. http://mpdf1.com/manual/index.php?tid=184
                    'defaultFontSize' => 0, // Optional
                    'defaultFont' => '', // Optional
                    'marginLeft' => 15, // Optional
                    'marginRight' => 15, // Optional
                    'marginTop' => 16, // Optional
                    'marginBottom' => 16, // Optional
                    'marginHeader' => 9, // Optional
                    'marginFooter' => 9, // Optional
                    'orientation' => 'Landscape', // optional. This value will be ignored if format is a string value.
                    'options' => [
                        // mPDF Variables
                        // 'fontdata' => [
                            // ... some fonts. http://mpdf1.com/manual/index.php?tid=454
                        // ]
                    ]
                ],
            ]
        ],
        'session'=>[
            'class' => 'yii\web\Session',
            // Set the session timeout (in seconds)
            'timeout' =>2880, // 24 minutes
            // Optional: Set the session save path
            // 'savePath' => '@runtime/session',
            // Optional: Set the session cookie parameters
            // 'cookieParams' => [
            //     'lifetime' => 0,
            //     'path' => '/',
            //     'domain' => '',
            //     'secure' => true,
            //     'httpOnly' => true,
            // ],
        ],
        'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
             ],
         ],
    ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass'=>'app\models\User',
            'enableAutoLogin' =>false,
            //'authTimeout'=>3600*40, // seconds
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log'=>[
            'traceLevel'=>YII_DEBUG ? 3 : 0,
            'targets'=>[
                [
                    'class'=>'yii\log\FileTarget',
                    'levels'=>['error', 'warning'],
                ],
            ],
        ],
      'db' => $db,
 'urlManager' => [
            'enablePrettyUrl' => true,
        //    'showScriptName' => true,
            'rules' => [
            ],
        ],
        ],
    'modules' => [
     'gridview' =>  [
        'class' => '\kartik\grid\Module',
    ],
     'gridview' => ['class' => 'kartik\grid\Module']
] ,
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
