<?php
	header("content-type:text/html; charset=utf-8");

	/* 输出调试函数 */
	function show_bug($msg){
		echo "<pre style='color:red'>";
		var_dump($msg);
		echo "</pre>";
	}

	/* 开发模式 */
	define('APP_DEBUG', true);
	define('APP_NAME','vdoado');
	define('APP_PATH','./vdoado/');
	
	/* 找到站点根目录 */
	$the_file_path = $_SERVER['PHP_SELF'];
	$findme   = '/index.php';
	$pos = strpos($the_file_path, $findme);
	$target_path = substr($the_file_path, 0,$pos);
	$site_url = "http://".$_SERVER['HTTP_HOST'].$target_path;

	/* 定义常量 */ 
	define('SITE_URL',$site_url);
	define('CSS_URL',SITE_URL.'/vdoado/Public/css/');
	define('IMG_URL',SITE_URL.'/vdoado/Public/images/');
	define('JS_URL',SITE_URL.'/vdoado/Public/js/');
	define('ADO_URL',SITE_URL.'/vdoado/Public/audio/');
	define('VDO_URL',SITE_URL.'/vdoado/Public/video/');
	define('A4M_URL','test.php');
	define('A4C_URL','check.php');
	
	/* 引入框架核心 */
	require './ThinkPHP/ThinkPHP.php';


	
