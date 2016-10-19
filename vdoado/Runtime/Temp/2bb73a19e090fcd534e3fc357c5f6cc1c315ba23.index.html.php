<?php /*%%SmartyHeaderCode:179085805bba0d3b050-33867398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bb73a19e090fcd534e3fc357c5f6cc1c315ba23' => 
    array (
      0 => './vdoado/Admin/View\\Index\\index.html',
      1 => 1476769870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179085805bba0d3b050-33867398',
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5805bbf556d92',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805bbf556d92')) {function content_5805bbf556d92($_smarty_tpl) {?><html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>课程中心</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="http://localhost/vdoado/vdoado/Public/css/bootstrap.min.css-v=3.3.5.css" rel="stylesheet">
    <link href="http://localhost/vdoado/vdoado/Public/css/font-awesome.min.css-v=4.4.0.css" rel="stylesheet">
    <link href="http://localhost/vdoado/vdoado/Public/css/animate.min.css" rel="stylesheet">
    <link href="http://localhost/vdoado/vdoado/Public/css/style.min.css-v=4.0.0.css" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a href="#">       
                               <h2 class="block m-t-xs"><strong class="font-bold">课程中心</strong></h2>               
                            </a>
                        </div>
                        <div class="logo-element">课程中心
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">课程列表</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul id="course" class="nav nav-second-level">
                           
                        </ul>
                        
                    </li>
                    <li>
                        <a class="J_menuItem" href="/vdoado/index.php/admin/Tch/new_lesson">
                            <i class="fa fa-columns"></i> 
                            <span class="nav-label">配置新课</span>
                        </a>
                    </li>
                    

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="http://www.zi-han.net/theme/hplus/search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown hidden-xs">
                            <a class="right-sidebar-toggle" aria-expanded="false">
                                <i class="fa fa-tasks"></i> 主题
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="#"  class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i>退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="/vdoado/index.php/admin/Index/index_show" frameborder="0" data-id="index_v1.html" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">&copy; 2016
            </div>
        </div>
        <!--右侧部分结束-->
        <!--右侧边栏开始-->
        <div id="right-sidebar">
            <div class="sidebar-container">
                <ul class="nav nav-tabs navs-3">
                    <li class="active">
                        <a data-toggle="tab" href="#tab-1">
                            <i class="fa fa-gear"></i> 主题
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                            <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                        </div>
                        <div class="skin-setttings">
                            <div class="title">主题设置</div>
                            <div class="setings-item">
                                <span>收起左侧菜单</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                        <label class="onoffswitch-label" for="collapsemenu">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>固定顶部</span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                        <label class="onoffswitch-label" for="fixednavbar">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                        <label class="onoffswitch-label" for="boxedlayout">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="title">皮肤选择</div>
                            <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                            </div>
                            <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                            </div>
                            <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                            </div>
                        </div>
                    </div>                
                </div>

            </div>
        </div>
        <!--右侧边栏结束-->
        
    </div>
    <script src="http://localhost/vdoado/vdoado/Public/js/jquery.min.js-v=2.1.4.js"></script>
      <script>
        $(document).ready(function(){
            
            var res = [{"course_id":"1","course_name":"\u8bd5\u8bb21","course_pubtime":"2016-10-18"},{"course_id":"2","course_name":"\u554a\u554a","course_pubtime":"2016-10-18"},{"course_id":"3","course_name":"\u5fc3\u5f97","course_pubtime":"2016-10-18"},{"course_id":"4","course_name":"\u4e8b\u5b9e\u4e0as","course_pubtime":"2016-10-18"},{"course_id":"5","course_name":"\u554a\u554a\u554a","course_pubtime":"2016-10-18"},{"course_id":"6","course_name":"\u53d1\u5c04\u70b9\u6cd5 ","course_pubtime":"2016-10-18"},{"course_id":"7","course_name":"234234","course_pubtime":"2016-10-18"},{"course_id":"8","course_name":"234234","course_pubtime":"2016-10-18"},{"course_id":"9","course_name":"123","course_pubtime":"2016-10-18"},{"course_id":"10","course_name":"afaf af","course_pubtime":"2016-10-18"},{"course_id":"11","course_name":"fsdf we","course_pubtime":"2016-10-18"},{"course_id":"12","course_name":"\u9ed1\u5be1\u5987vjh","course_pubtime":"2016-10-18"}];
            for(key in res){
                $('#course').append('<li><a class="J_menuItem" href="/vdoado/index.php/admin/Tch/lesson/id/'+res[key]['course_id']+'" data-index="0">'+res[key]['course_pubtime']+'</a></li>');
                
            }
         
        });
    </script>
    <script src="http://localhost/vdoado/vdoado/Public/js/bootstrap.min.js-v=3.3.5.js"></script>
    <script src="http://localhost/vdoado/vdoado/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="http://localhost/vdoado/vdoado/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="http://localhost/vdoado/vdoado/Public/js/plugins/layer/layer.min.js"></script>
    <script src="http://localhost/vdoado/vdoado/Public/js/hplus.min.js-v=4.0.0.js"></script>
    <script type="text/javascript" src="http://localhost/vdoado/vdoado/Public/js/contabs.min.js"></script>
    <script src="http://localhost/vdoado/vdoado/Public/js/plugins/pace/pace.min.js"></script>
  
</body>

</html><?php }} ?>