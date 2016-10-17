<?php /* Smarty version Smarty-3.1.6, created on 2016-10-17 11:38:05
         compiled from "./vdoado/Admin/View\Tch\result.html" */ ?>
<?php /*%%SmartyHeaderCode:24758025be4a389f2-28489265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b13f3b0cbce23bcb7cc6492c1167b933dd4ea55' => 
    array (
      0 => './vdoado/Admin/View\\Tch\\result.html',
      1 => 1476675477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24758025be4a389f2-28489265',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58025be4b32a2',
  'variables' => 
  array (
    'res_max' => 0,
    'res_student' => 0,
    'i' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58025be4b32a2')) {function content_58025be4b32a2($_smarty_tpl) {?><!DOCTYPE html>
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
animate.min.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
style.min.css-v=4.0.0.css" rel="stylesheet">
    <link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">         
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>结果页面</h5>
                        <a class="btn btn-sm btn-primary pull-right m-t-n-xs" href="javascript:history.go(-1)">
                            <strong>返 回</strong>
                        </a>
                    </div>
                    <div class="ibox-content">  
                        <h3>共提交<strong><?php echo $_smarty_tpl->tpl_vars['res_max']->value;?>
</strong>人</h3>
                        <table class="table table-striped"> 
                            <thead>
                                <tr>
                                    <th>姓名</th>
                                    <th>结果</th>
                                    <th>姓名</th>
                                    <th>结果</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res_student']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['student']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['student']['index']++;
?>
                                <tr>
                                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['student']['index']<$_smarty_tpl->tpl_vars['res_max']->value/2){?>
                                        <td><?php echo $_smarty_tpl->tpl_vars['res_student']->value[$_smarty_tpl->tpl_vars['i']->value++]['student_name'];?>
</td>
                                        <td>
                                            <input type="text" value="1 2 3" readonly=true>
                                            <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                        </td>
                                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['student']['index']<=$_smarty_tpl->tpl_vars['res_max']->value/2-1){?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['res_student']->value[$_smarty_tpl->tpl_vars['i']->value++]['student_name'];?>
</td>
                                            <td>
                                                <input type="text" value="1 2 3" readonly=true>
                                                <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                            </td>
                                        <?php }?>
                                    <?php }?>                   
                                </tr>                           
                                <?php } ?>
                            </tbody>
                        </table>
                        <h3>统计</h3>
                        <div id="bar-chart"  style="height:250px"></div>   
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <!-- 模态框  -->
    <div class="modal inmodal" id="modal_play" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title">播放</h4>
                </div>
                <div class="modal-body">
                    <video id="modal_video" src="" controls muted></video>
                    <audio id="modal_audio" src="" ></audio>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>    


    <script src="<?php echo @JS_URL;?>
jquery.min.js-v=2.1.4.js"></script>
    <script src="<?php echo @JS_URL;?>
bootstrap.min.js-v=3.3.5.js"></script>
    <script src="<?php echo @JS_URL;?>
plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo @JS_URL;?>
plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo @JS_URL;?>
plugins/morris/morris.js"></script>
   
    <script src="<?php echo @JS_URL;?>
content.min.js-v=1.0.0.js"></script>
    <script src="<?php echo @JS_URL;?>
plugins/iCheck/icheck.min.js"></script>

    <script src="<?php echo @JS_URL;?>
teacher.js"></script>
    <script type="text/javascript">
        /* 统计图 */
$(document).ready(function(){
        new Morris.Bar({
            element: 'bar-chart',               //指向统计图ID
            barColors: ['#1ab394'],             //统计图颜色
            data: [                             //数据
                { x: '1', y: 100},
                { x: '2', y: 75},
                { x: '3', y: 50},
                { x: '4', y: 75},
                { x: '5', y: 50},
                { x: '6', y: 75},
                { x: '7', y: 100},
                { x: '8', y: 22},
                { x: '9', y: 66},
                { x: '10', y: 44}
            ],
            xkey: 'x',                          //x轴
            ykeys: ['y'],                       //y轴
            labels: ['y']
        });

        /* 模态框 */
        $('.play_go').click(function(){
            var id = <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;
            var video;
            var audios = []; 
            $.ajax({ //request an json object 
                    url: "<?php echo U('Home/Index/getMedia');?>
", 
                    type: 'POST',
                    data: {
                        id:id
                    },
                    dataType: 'json'
                })
                .done(function(data) { //get sources
                    video = data['video'];
                    audios = data['audios'];
                    $('#modal_video').attr('src',video);
                     $('#modal_video')[0].currentTime = 0; 
                     $('#modal_video')[0].pause();                                                                          //load vdoPlayer

                     $('#modal_play').modal();
            
                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });


                $.ajax({
                    url: "<?php echo U('Home/Index/getResult');?>
",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: id
                    },
                })
                .done(function(data) {

                    var adoRcr = 0;
                        $('#modal_audio').attr({
                            src:  audios[data[adoRcr++]]
                        })[0].play();


                        $('#modal_audio')[0].onended = function() {                                                   //play next
                            if (adoRcr >= data.length) {                                                        //dropd ado ended
                                $('#modal_video')[0].pause();
                                $('#modal_video')[0].currentTime = 0;
                                $('#modal_audio')[0].pause();
                                $('#modal_audio')[0].onended = null;
                            } else {                                                                                //dropd ado playing
                                $(this).attr({
                                    src: audios[data[adoRcr++]]
                                })[0].play();
                            }
                        };
                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
                
        });
        


         
              

             


        });
    </script>
</body>

</html><?php }} ?>