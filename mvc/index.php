<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11/011
 * Time: 11:40
 */
//文件的跟路径
define("ROOT_URL",__DIR__);
define("LIBS_URL",ROOT_URL."/libs");
define("WEB_PATH",'http://'.$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));
define("CSS_PATH",WEB_PATH."/static/css/");
define("JS_PATH",WEB_PATH."/static/js/");
define("IMAGES_PATH",WEB_PATH."/static/images/");
define("FONT_PATH",WEB_PATH."/static/font/");
define("EDITOR_PATH",WEB_PATH."/static/kindeditor/");
//substr() 0 length
//strrpos()//获取某字符最后一次出现的位置
include LIBS_URL."/code.class.php";
include LIBS_URL."/db.class.php";
include LIBS_URL."/upload.class.php";
include LIBS_URL."/route.class.php";
include LIBS_URL."/indexMain.class.php";
include LIBS_URL."/smarty/Smarty.class.php";
include LIBS_URL."/admin.class.php";
include LIBS_URL."/session.class.php";
include LIBS_URL."/pages.class.php";
header('Content-Type:text/html;charset=utf-8');
//元素对象的属性方法 style offsetwidth height scrollheight width list classlist
//var_dump(class_exists("code"));
$route=new route();
$route->getInfo();