<?php

// change the following paths if necessary
//$yii=dirname(__FILE__).'/protected/extensions/framework/yii.php';
$yii=dirname(__FILE__).'/protected/extensions/framework/yiilite.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',false);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once(dirname(__FILE__).'/protected/extensions/FirePHPCore/fb.php');
//fb('index');
require_once($yii);
Yii::createWebApplication($config)->run();
