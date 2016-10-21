<?php /* Smarty version Smarty-3.1.6, created on 2016-10-21 16:52:05
         compiled from "./vdoado/Admin/View\Tch\new_lesson.html" */ ?>
<?php /*%%SmartyHeaderCode:1166558025a9bc74a84-14657433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7bbac61de49cf5e4b7fb42265a311c287aeac86' => 
    array (
      0 => './vdoado/Admin/View\\Tch\\new_lesson.html',
      1 => 1477036123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166558025a9bc74a84-14657433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58025a9bd43b3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58025a9bd43b3')) {function content_58025a9bd43b3($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>课程中心</title>
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="<?php echo @CSS_URL;?>
bootstrap.min.css-v=3.3.5.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
font-awesome.min.css-v=4.4.0.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
animate.min.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
style.min.css-v=4.0.0.css" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>配置新课</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12 b-r">
                                <form action="<?php echo @__SELF__;?>
" method="post" onsubmit="return checkit()">
                                    <div class="form-group">
                                        <label>课程名称</label>
                                        <input type="test" id="lesson" placeholder="请输入课程名称" class="form-control" name="course_name" style="width:30%">
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit">
                                            <strong>下 一 步</strong>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="<?php echo @JS_URL;?>
jquery.min.js-v=2.1.4.js"></script>
    <script src="<?php echo @JS_URL;?>
bootstrap.min.js-v=3.3.5.js"></script>
    <script src="<?php echo @JS_URL;?>
content.min.js-v=1.0.0.js"></script>
    <script src="<?php echo @JS_URL;?>
plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo @JS_URL;?>
plugins/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">

        function checkit(){
            if($('#lesson').val() ==""){
                swal('请输入课程名!');
                return false;
            }    
            return true;
        }
   

   
    </script>
</body>

</html><?php }} ?>