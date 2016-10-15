<?php

	/* 开发模式 */
	define('APP_DEBUG', true);
	define('APP_NAME','vdoado');
	define('APP_PATH','./vdoado/');
	
	//找到 站点根目录
	$the_file_path = $_SERVER['PHP_SELF'];
	$findme   = '/index.php';
	$pos = strpos($the_file_path, $findme);
	$target_path = substr($the_file_path, 0,$pos);
	$site_url = "http://".$_SERVER['HTTP_HOST'].$target_path;
	//定义常量
	define('SITE_URL',$site_url);
	define('CSS_URL',SITE_URL.'/vdoado/Public/css/');
	define('IMG_URL',SITE_URL.'/vdoado/Public/images/');
	define('JS_URL',SITE_URL.'/vdoado/Public/js/');
	define('AUDIO_URL',SITE_URL.'/vdoado/Public/audio/');
	define('VIDEO_URL',SITE_URL.'/vdoado/Public/video/');
	/* 引入框架核心 */
	require './ThinkPHP/ThinkPHP.php';


	
