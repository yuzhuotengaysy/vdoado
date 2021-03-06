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
    <link href="<?php echo (CSS_URL); ?>animate.min.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>style.min.css-v=4.0.0.css" rel="stylesheet">
    <link href="<?php echo (CSS_URL); ?>style.css" rel="stylesheet">

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
                        <h3>共提交<strong>xxx</strong>人</h3>
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
                                <tr>
                                    <td>张三</td>
                                    <td>
                                        <input type="text" value="1 2 3" readonly=true>
                                        <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                    </td>
                                    <td>张三</td>
                                    <td>
                                        <input type="text" value="1 2 3" readonly=true>
                                        <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>张三</td>
                                    <td>
                                        <input type="text" value="1 2 3" readonly=true>
                                        <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                    </td>
                                    <td>张三</td>
                                    <td>
                                        <input type="text" value="1 2 3" readonly=true>
                                        <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>张三</td>
                                    <td>
                                        <input type="text" value="1 2 3" readonly=true>
                                        <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                    </td>
                                    <td>张三</td>
                                    <td>
                                        <input type="text" value="1 2 3" readonly=true>
                                        <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>张三</td>
                                    <td>
                                        <input type="text" value="1 2 3" readonly=true>
                                        <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                    </td>
                                    <td>张三</td>
                                    <td>
                                        <input type="text" value="1 2 3" readonly=true>
                                        <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>张三</td>
                                    <td>
                                        <input type="text" value="1 2 3" readonly=true>
                                        <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                    </td>
                                    <td>张三</td>
                                    <td>
                                        <input type="text" value="1 2 3" readonly=true>
                                        <button class="btn btn-primary btn-circle play_go"><i class="fa fa-play"></i></button>
                                    </td>
                                </tr>
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
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>    


    <script src="<?php echo (JS_URL); ?>jquery.min.js-v=2.1.4.js"></script>
    <script src="<?php echo (JS_URL); ?>bootstrap.min.js-v=3.3.5.js"></script>
    <script src="<?php echo (JS_URL); ?>plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo (JS_URL); ?>plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo (JS_URL); ?>plugins/morris/morris.js"></script>
    <script src="<?php echo (JS_URL); ?>demo/morris-demo.min.js"></script>
    <script src="<?php echo (JS_URL); ?>content.min.js-v=1.0.0.js"></script>
    <script src="<?php echo (JS_URL); ?>plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo (JS_URL); ?>demo/peity-demo.min.js"></script>
    <script type="text/javascript">
        /* 统计图 */
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
            $('#modal_play').modal();
        });
    </script>
</body>

</html>