<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'timeZone' => 'Asia/Jakarta',
    'defaultRoute' => 'site/login',
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@mdm/admin' => '@app/extensions/yii2-admin',
    ],
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    /* 'userClassName' => 'app\models\User', */
                    'idField' => 'id',
                    'usernameField' => 'username',
                    // 'extraColumns' => [
                    //     [
                    //         'attribute' => 'full_name',
                    //         'label' => 'Full Name',
                    //         'value' => function($model, $key, $index, $column) {
                    //             return $model->profile->full_name;
                    //         },
                    //     ],
                    //     [
                    //         'attribute' => 'dept_name',
                    //         'label' => 'Department',
                    //         'value' => function($model, $key, $index, $column) {
                    //             return $model->profile->dept->name;
                    //         },
                    //     ],
                    //     [
                    //         'attribute' => 'post_name',
                    //         'label' => 'Post',
                    //         'value' => function($model, $key, $index, $column) {
                    //             return $model->profile->post->name;
                    //         },
                    //     ],
                    // ],
                    // 'searchClass' => 'app\models\User'
                ]
            ],
            'layout' => 'left-menu',
            'mainLayout' => '@app/views/layouts/mainadmin.php',
            'menus' => [
                'assignment' => [
                    'label' => 'Grant Access' // change label
                ],
                'route' => null, // disable menu
                
            ]
        ],
    ],
    'components' => [
        'view' => [
            'class' => 'yii\web\View',
            'theme' => [
                'class' => 'yii\base\Theme',
                'pathMap' => [
                        '@app' => [
                            '@app/../themes/vuexy',
                        ],
                    ],
                'baseUrl' => '@web/themes/vuexy',
            ],
        ],

        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Szw8huwQ0Yz5mvH85IV6pLYwHwoIyGG_',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*', // tambahkan action-action yg lain di sini
            'gii/*',
            'admin/*',
        ]
    ],
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
