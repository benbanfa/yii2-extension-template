<?php

define('YII_ENV', 'dev');
define('YII_DEBUG', true);

require dirname(dirname(__DIR__)).'/vendor/autoload.php'; // Composer自动加载
require dirname(dirname(__DIR__)).'/vendor/yiisoft/yii2/Yii.php'; // Yii自动加载及部分初始化代码

/**
 * id和basePath是实例化Application类的必须参数
 *
 * @see http://www.yiiframework.com/doc-2.0/guide-structure-applications.html#required-properties
 */
$config = [
    'id' => '__yii2ext__-web-dev',
    'basePath' => dirname(__DIR__),
];

(new yii\web\Application($config))->run();
