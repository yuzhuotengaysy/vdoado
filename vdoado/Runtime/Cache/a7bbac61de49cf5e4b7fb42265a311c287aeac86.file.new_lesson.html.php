<?php /* Smarty version Smarty-3.1.6, created on 2016-10-20 20:01:09
         compiled from "./vdoado/Admin/View\Tch\new_lesson.html" */ ?>
<?php /*%%SmartyHeaderCode:1166558025a9bc74a84-14657433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7bbac61de49cf5e4b7fb42265a311c287aeac86' => 
    array (
      0 => './vdoado/Admin/View\\Tch\\new_lesson.html',
      1 => 1476964864,
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
                                        <button type="button" id="test">test</button>
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
    $(document).ready(function() {
        $('#test').on("click", "#test1" ,n);
        alert("yese");
    });
        function checkit(){
            if($('#lesson').val() ==""){
                swal('请输入课程名!');
                return false;
            }    
            return true;
        }
       function n() {
        var t = $(this).attr("href"),
            a = $(this).data("index"),
            i = $.trim($(this).text()),
            n = !0;
        if (void 0 == t || 0 == $.trim(t).length) return !1;
        if ($(".J_menuTab").each(function() {
                return $(this).data("id") == t ? ($(this).hasClass("active") || ($(this).addClass("active").siblings(".J_menuTab").removeClass("active"), e(this), $(".J_mainContent .J_iframe").each(function() {
                    return $(this).data("id") == t ? ($(this).show().siblings(".J_iframe").hide(), !1) : void 0
                })), n = !1, !1) : void 0
            }), n) {
            var s = '<a href="javascript:;" class="active J_menuTab" data-id="' + t + '">' + i + ' <i class="fa fa-times-circle"></i></a>';
            $(".J_menuTab").removeClass("active");
            var r = '<iframe class="J_iframe" name="iframe' + a + '" width="100%" height="100%" src="' + t + '?v=4.0" frameborder="0" data-id="' + t + '" seamless></iframe>';
            $(".J_mainContent").find("iframe.J_iframe").hide().parents(".J_mainContent").append(r);
            var o = layer.load();
            $(".J_mainContent iframe:visible").load(function() {
                layer.close(o)
            }), $(".J_menuTabs .page-tabs-content").append(s), e($(".J_menuTab.active"))
        }
        return !1
    }

   
    </script>
</body>

</html><?php }} ?>