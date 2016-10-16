<?php /* Smarty version Smarty-3.1.6, created on 2016-10-16 00:39:15
         compiled from "./vdoado/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1765458025aa05f59e0-28657706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf51e95eb755aca44520c8da50660b414fe732a' => 
    array (
      0 => './vdoado/Home/View\\Index\\index.html',
      1 => 1476549324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1765458025aa05f59e0-28657706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58025aa0662ff',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58025aa0662ff')) {function content_58025aa0662ff($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>title</title>
	<link href="<?php echo @CSS_URL;?>
bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css">
</head>
<body>
	
	<div class="player">
		<div class="container">
			<div class="row">
				<video src="" class="col-xs-12 vdoPlayer" controls muted></video>
			</div>
			<div class="row">
				<div class="col-xs-12 drop"></div>
			</div>
			<div class="row">
				<div class="col-xs-12 drag"></div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center btns">
					<button class="btn btn-primary test" type="button">试听</button>
					<button class="btn btn-primary submit" type="button">提交</button>
				</div>
			</div>
		</div>
	</div>

	<audio src="" class="adoPlayer"></audio>

    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?php echo @JS_URL;?>
bootstrap.min.js"></script>
    <script src="<?php echo @JS_URL;?>
script.js"></script>
</body>
</html><?php }} ?>