<?php
/**
 * 入口
 *
 * @author        shuguang <5565907@qq.com>
 * @copyright     Copyright (c) 2007-2013 bagesoft. All rights reserved.
 * @link          http://www.bagecms.com
 * @package       BageCMS
 * @license       http://www.bagecms.com/license
 * @version       v3.1.0
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('DS', DIRECTORY_SEPARATOR);
//DS   \
define('WWWPATH', str_replace(array('\\', '\\\\'), '/', dirname(__FILE__)));
//WWWPATH  D:/wamp/www/bagecms
$framework = dirname(__FILE__) . DS. 'framework'.DS.'yiilite.php';
//$framework  D:\wamp\www\bagecms\framework\yiilite.php
$config = WWWPATH . DS .'protected'.DS.'config'.DS.'main.php';
//$config  D:/wamp/www/bagecms\protected\config\main.php


require_once ($framework);
Yii::createWebApplication($config)->run();


