<?php
namespace Admin\Controller;
use Think\Controller;
class TchController extends Controller {
    public function lesson(){
    	$course = D('course');	    //实例化
    	$res = $course  -> where('course_id = '.$_REQUEST["id"]) -> select();	//获得数据信息
    	//把数据assign到模板
    	$this -> assign('res', $res);
    	$this -> display();
    }

    public function result(){
    	$result  = D('result');	    //实例化
    	$course  = D('course');	    
    	$test    = D('test');
    	$student = D('student');
    	$ado     = D('ado');

        $res_max = M('result')->where('test_id = '.$_GET["id"])->count('distinct(student_id)');     //获取提交总人数   

        $stu = $result -> distinct(true) -> where('test_id = '.$_GET["id"]) -> getField('student_id',true);     //获取学生列表
        for($i = 0; $i < count($stu); $i++){                                                         //将学生名字和学生提交的ado_id进行匹配
            $res_stu[$i] []= $student -> where('student_id = "'.$stu[$i].'"') ->getField('student_name');
            $res_stu[$i] []= $result -> where('student_id = "'.$stu[$i].'"') ->getField('ado_id',true);
        }

        $ado =  $ado -> where('test_id = '.$_GET["id"])->  getField('ado_id',true);                  //将练习id和练习对应的ado进行匹配
        for($i = 1; $i <= count($ado); $i++){                                                        //获得统计图数据
            $map['test_id'] = $_GET["id"];
            $map['ado_id'] = $i;      
            $temp['x'] = $i;
            $temp['y'] =  M('result')->where($map)->count('ado_id'); 
            $res_ado []= $temp;                                          
        }
        
        $this -> assign('res_max', $res_max);
        $this -> assign('res_stu', $res_stu);
        $this -> assign('res_ado', $res_ado);
        $this -> assign('id', $_GET["id"]);

    	$this -> display();
    }

    public function new_lesson(){
    	$course = D('course');		//实例化

    	/* 如果表单没有提交，则显示网页，提交则处理SQL语句*/
    	if(!empty($_POST)) {
    		$arr = $_POST;									//获得表单提交的课程名
    		$arr += array('course_pubtime'=>date('Y-m-d')); //添加当前日期
			$course -> add($arr);							//执行sql语句
		
            //-- 写死两门课功能调整 -- 开始 -- 2016-10-19 杨森 --
            //麻烦把这段功能写入，就是这里配置两个写死的tests。
            //本来应该写进config文件的，算了就先写在这里吧，省得以后找起来麻烦

            $configtests = array("练习1", "练习2");                 //插入test表，注意关联
            $configaudio = array( array("1.ogg","2.ogg"),  array("1.ogg", "2.ogg", "5.ogg", "7.ogg"));  //插入audio表，注意关联

            //-- 写死两门课功能调整 -- 结束 
			echo "<script>alert('配置成功')</script>";
			$this -> display();	
    	} else {
    		$this -> display();	
    	}

    	
    }
}
