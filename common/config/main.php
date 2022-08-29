<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20', '172.16.0.0/12', '*'],  
            'generators' => [ 
                'crud' => [
                    'class' => 'yii\gii\generators\crud\Generator',
                    'templates' => [
                        'zarmed' => '@backend/templates/zarmed',
                    ]
                ]
            ],
        ]
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'en',
    'sourceLanguage' => 'en',
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'disabledCommands' => [
                'home', 'back', 'forward', 'up',
                //'reload',
                'netmount',
                //'mkdir',
                'mkfile',
                //'upload', 'open', 'download', 'getfile',
                'undo', 'redo', 'copy', 'cut', 'paste', 'rm', 'empty', 'duplicate', 'rename', 'chmod',
                //'selectall', 'selectnone', 'selectinvert', 'quicklook', 'info', 'extract', 'archive',
                'search', 'view', 'sort', 'preference', 'help', 'fullscreen'
            ], //отключение ненужных команд
            'plugin' => [
                [
                    'class'=>'\mihaildev\elfinder\plugin\Sluggable',
                    'lowercase' => true,
                    'replacement' => '-',
                ],
            ],
            'root' => [
                'baseUrl'=>'/uploads',
                'basePath'=>'@frontend/web/uploads',
                'path' => '',
                'name' => 'Uploads',
                'plugin' => [
                    'Sluggable' => [
                        'lowercase' => false,
                    ],
                ],
            ],
        ]
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
