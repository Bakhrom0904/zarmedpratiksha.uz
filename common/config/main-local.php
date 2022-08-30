<?php

return [
    'bootstrap' => ['assetsAutoCompress'],
    'components' => [
        'assetsAutoCompress' => [
            'class' => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
            'enabled' => false,

            'readFileTimeout' => 3,

            'jsCompress' => true,
            'jsCompressFlaggedComments' => true,

            'cssCompress' => true,

            'cssFileCompile' => true,
            'cssFileCompileByGroups' => false,
            'cssFileRemouteCompile' => true,
            'cssFileCompress' => true,
            'cssFileBottom' => true,
            'cssFileBottomLoadOnJs' => true,

            'jsFileCompile' => true,
            'jsFileCompileByGroups' => true,
            'jsFileRemouteCompile' => false,
            'jsFileCompress' => false,
            'jsFileCompressFlaggedComments' => false,

            'noIncludeJsFilesOnPjax' => false,
            'noIncludeCssFilesOnPjax' => false,

            'htmlFormatter' => [
                'class'         => 'skeeks\yii2\assetsAuto\formatters\html\TylerHtmlCompressor',
                'extra'         => false,
                'noComments'    => true,
                'maxNumberRows' => 50000,
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=' . env('DB_HOST') . ';dbname=' . env('DB_NAME'),
            'username' => env('DB_USER'),
            'password' => env('DB_PASS'),
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];