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

        $res_max = M('result')->where('test_id = '.$_GET["id"])->count('distinct(student_id)');  	 //获取提交总人数   

        $stu = $result -> distinct(true) -> where('test_id = 1') -> getField('student_id',true);
         // dump($stu);
        for($i = 0; $i < count($stu); $i++){
            $res_stu[$i] []= $student -> where('student_id = "'.$stu[$i].'"') ->getField('student_name');
            $res_stu[$i] []= D('result') -> where('student_id = "'.$stu[$i].'"') ->getField('ado_id',true);
        }
        dump($res_stu);
        
        dump($res_stu[0][0]);
        $this -> assign('res_max', $res_max);
    	$this -> assign('res_stu', $res_stu);

    	$this -> display();
    }

    public function result2(){
        $result  = D('result');     //实例化
        $course  = D('course');     
        $test    = D('test');
        $student = D('student');
        $ado     = D('ado');
  
        $res_max = M('result')->where('test_id = '.$_GET["id"])->count('distinct(student_id)');      //获取提交总人数   
  
        $res = M('result')-> join('LEFT join student on result.student_id = student.student_id ')   //将练习id和结果id匹配(获取student_name和ado_id)
                          -> field('student.student_name, result.ado_id')
                          -> where('result.test_id = '.$_GET["id"])
                          -> select();

        //$res_student = $student -> where('student_id = '.$res_result[0]['result_id']);
        $this -> assign('res_max', $res_max);
        $this -> assign('res', $res);

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