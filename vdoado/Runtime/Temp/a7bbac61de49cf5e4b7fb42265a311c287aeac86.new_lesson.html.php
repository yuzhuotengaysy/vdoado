<?php /*%%SmartyHeaderCode:292695805bba71be1d5-46257213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7bbac61de49cf5e4b7fb42265a311c287aeac86' => 
    array (
      0 => './vdoado/Admin/View\\Tch\\new_lesson.html',
      1 => 1476766416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292695805bba71be1d5-46257213',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5805bba72a880',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805bba72a880')) {function content_5805bba72a880($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>课程中心</title>
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="http://localhost/vdoado/vdoado/Public/css/bootstrap.min.css-v=3.3.5.css" rel="stylesheet">
    <link href="http://localhost/vdoado/vdoado/Public/css/font-awesome.min.css-v=4.4.0.css" rel="stylesheet">
    <link href="http://localhost/vdoado/vdoado/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="http://localhost/vdoado/vdoado/Public/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="http://localhost/vdoado/vdoado/Public/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="http://localhost/vdoado/vdoado/Public/css/animate.min.css" rel="stylesheet">
    <link href="http://localhost/vdoado/vdoado/Public/css/style.min.css-v=4.0.0.css" rel="stylesheet">
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
                                <form action="/vdoado/index.php/admin/Tch/new_lesson?v=4.0" method="post" onsubmit="return checkit()">
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

    
    <script src="http://localhost/vdoado/vdoado/Public/js/jquery.min.js-v=2.1.4.js"></script>
    <script src="http://localhost/vdoado/vdoado/Public/js/bootstrap.min.js-v=3.3.5.js"></script>
    <script src="http://localhost/vdoado/vdoado/Public/js/content.min.js-v=1.0.0.js"></script>
    <script src="http://localhost/vdoado/vdoado/Public/js/plugins/iCheck/icheck.min.js"></script>
    <script src="http://localhost/vdoado/vdoado/Public/js/plugins/sweetalert/sweetalert.min.js"></script>
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