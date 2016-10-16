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

    	$this -> display();
    }

    public function new_lesson(){
    	$course = D('course');		//实例化

    	/* 如果表单没有提交，则显示网页，提交则处理SQL语句*/
    	if(!empty($_POST)) {
    		$arr = $_POST;									//获得表单提交的课程名
    		$arr += array('course_pubtime'=>date('Y-m-d')); //添加当前日期
			$course -> add($arr);							//执行sql语句
			echo "<script>alert('配置成功')</script>";
			$this -> display();	
    	} else {
    		$this -> display();	
    	}

    	
    }
}