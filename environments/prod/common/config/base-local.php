<?php
return [
    'components'=>[
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'cachePath' => '@common/runtime/cache'
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yiipro', // localhost is much slower than 127.0.0.1
            'username' => 'root',
            'password' => 'mavi1233',
            'charset' => 'utf8',
            'enableSchemaCache'=>true
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false
        ],

        /*'log'=>[
            'targets'=>[
                'email' => [
                    'class' => 'yii\log\EmailTarget',
                    'except' => ['yii\web\HttpException:404'],
                    'levels' => ['error', 'warning'],
                    'message' => ['from' => 'robot@example.com', 'to' => getenv('ADMIN_EMAIL')],
                ]
            ]
        ]*/
    ]
];