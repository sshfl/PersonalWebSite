<?php

// 项目应用入口文件
header('content-type: text/html; charset=utf-8');

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

// 引入系统已经定义好的系统常量
require_once (dirname(__FILE__).'/protected/config/constants.php');

require_once($yii);
Yii::createWebApplication($config)->run();
