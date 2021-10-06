<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=dobro03',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'dbr_',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.adm.tools',
                'username' => 'no-reply@dobro03.ru',// must be same as sending email [supportEmail]
                'password' => '',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
    ],
];
