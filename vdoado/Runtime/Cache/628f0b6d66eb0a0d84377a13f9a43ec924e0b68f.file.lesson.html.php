<?php /* Smarty version Smarty-3.1.6, created on 2016-10-16 15:25:19
         compiled from "./vdoado/Admin/View\Tch\lesson.html" */ ?>
<?php /*%%SmartyHeaderCode:1528858025a9ab99ac0-23030861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '628f0b6d66eb0a0d84377a13f9a43ec924e0b68f' => 
    array (
      0 => './vdoado/Admin/View\\Tch\\lesson.html',
      1 => 1476602660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1528858025a9ab99ac0-23030861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58025a9ac4976',
  'variables' => 
  array (
    'res' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58025a9ac4976')) {function content_58025a9ac4976($_smarty_tpl) {?><!DOCTYPE html>
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
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                        <h5><?php echo $_smarty_tpl->tpl_vars['value']->value['course_name'];?>
</h5>
                        <?php } ?>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12 b-r">
                                <form action="">
                                    <div class="form-group">
                                        <label>第一次练习地址</label>
                                         <div class="input-group">
                                            <input id="text1" type="text" class="form-control" value="localhost/vdoado/index.php?id=<?php echo I('get.id');?>
"> 
                                            <span class="input-group-btn"> 
                                                <button type="button" class="btn btn-primary" onclick="copyit(this)">复 制</button> 
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>第二次练习地址</label>
                                        <div class="input-group">
                                            <input id="text2" type="text" class="form-control" value="localhost/vdoado/index.php?id=<?php echo I('get.id');?>
"> 
                                            <span class="input-group-btn"> 
                                                <button type="button" class="btn btn-primary" onclick="copyit(this)">复 制</button> 
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="btn btn-sm btn-primary pull-left m-t-n-xs" href="<?php echo @__MODULE__;?>
/Tch/result">
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
        /* 复制按钮 */
        function copyit(e){
            var copy_link = $(e).parent().parent().find("input");
            copy_link.select();           // 选择对象 
            document.execCommand("Copy"); // 执行浏览器复制命令 
            swal('复制成功');
        }
    </script>
</body>

</html><?php }} ?>