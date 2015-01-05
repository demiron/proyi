<?php
return [
    'components'=>[
        'cache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yiipro', // localhost is much slower than 127.0.0.1
            'username' => 'promosos',
            'password' => 'mavi123',
            'charset' => 'utf8'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from' => 'noreply@yii2-starter-kit.localhost',
            ]
        ],
    ]
];