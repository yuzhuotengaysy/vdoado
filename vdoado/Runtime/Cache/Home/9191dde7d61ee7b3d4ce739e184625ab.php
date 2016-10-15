<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>title</title>
	<link href="<?php echo (CSS_URL); ?>bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo (CSS_URL); ?>style.css" rel="stylesheet" type="text/css">
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
    <script src="<?php echo (JS_URL); ?>bootstrap.min.js"></script>
    <script src="<?php echo (JS_URL); ?>script.js"></script>
</body>
</html>