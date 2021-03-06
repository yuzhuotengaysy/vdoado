<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>课程中心</title>
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="<?php echo (CSS_URL); ?>bootstrap.min.css-v=3.3.5.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>font-awesome.min.css-v=4.4.0.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>animate.min.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>style.min.css-v=4.0.0.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>试讲1</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12 b-r">
                                <form role="form">
                                    <div class="form-group">
                                        <label>第一次练习地址</label>
                                         <div class="input-group">
                                            <input id="text1" type="text" class="form-control" value="www.baidu.com"> 
                                            <span class="input-group-btn"> 
                                                <button type="button" class="btn btn-primary" onclick="copyit(this)">复 制</button> 
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>第二次练习地址</label>
                                        <div class="input-group">
                                            <input id="text2" type="text" class="form-control" value="www.163.com"> 
                                            <span class="input-group-btn"> 
                                                <button type="button" class="btn btn-primary" onclick="copyit(this)">复 制</button> 
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="btn btn-sm btn-primary pull-left m-t-n-xs" href="<?php echo U('Home/Tch/result');?>">
                                            <strong>查 看 结 果</strong>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>

    
    </div>
    <script src="<?php echo (JS_URL); ?>jquery.min.js-v=2.1.4.js"></script>
    <script src="<?php echo (JS_URL); ?>bootstrap.min.js-v=3.3.5.js"></script>
    <script src="<?php echo (JS_URL); ?>content.min.js-v=1.0.0.js"></script>
    <script src="<?php echo (JS_URL); ?>plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo (JS_URL); ?>plugins/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
        /* 复制按钮 */
        function copyit(e){
            var copy_link = $(e).parent().parent().find("input");
            copy_link.select();           // 选择对象 
            document.execCommand("Copy"); // 执行浏览器复制命令 
            swal('复制成功');
        }
    </script>
</body>

</html>