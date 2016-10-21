<?php
namespace Admin\Controller;
use Think\Controller;
class TchController extends Controller {
    public function lesson(){
    	$course = D('course');	    //实例化
    	$res = $course  -> where('course_id = '.$_GET["id"]) -> select();	//获得数据信息
        $test_id = M('test') ->  field("test_id") -> where('course_id = '.$_GET["id"]) -> select();
    	//把数据assign到模板
    	$this -> assign('res', $res);
        $this -> assign('test_id', $test_id);
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
        for($i = 0; $i < count($stu); $i++){                                                                    //将学生名字和学生提交的ado_id进行匹配
            $res_stu[$i] []= $student -> where('student_id = "'.$stu[$i].'"') ->getField('student_name');       //学生姓名
            $res_stu[$i] []= $result -> where('student_id = "'.$stu[$i].'"') ->getField('ado_id',true);         //音频id
            for($j = 0; $j < count($res_stu[$i][1]); $j++){
                $res_stu[$i][2][]= $ado -> where('ado_id = "'.$res_stu[$i][1][$j].'"') ->getField('ado_name');   //音频名称
            }
        }
        
        $ado =  $ado -> where('test_id = '.$_GET["id"])->  getField('ado_id',true);                  //将练习id和练习对应的ado进行匹配
        for($i = 1; $i <= count($ado); $i++){                                                        //获得统计图数据
            $map['test_id'] = $_GET["id"];
            $map['ado_id'] = $i;      
            $temp['x'] = '音频'.$i;
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
        $test   = D('test');
        $ado    = D('ado');

    	/* 如果表单没有提交，则显示网页，提交则处理SQL语句*/
    	if(!empty($_POST)) {
    		$arr = $_POST;									//获得表单提交的课程名
    		$arr += array('course_pubtime'=>date('Y-m-d')); //添加当前日期
			$course -> add($arr);							//执行sql语句

            //-- 写死两门课功能调整 -- 开始 -- 2016-10-19 杨森 --
            //麻烦把这段功能写入，就是这里配置两个写死的tests。
            //本来应该写进config文件的，算了就先写在这里吧，省得以后找起来麻烦

            /* test表 */
            $course_id = M('course') -> field("max(course_id)") -> find();    //获取课程这次配置新课的课程id
            $configtests = array("练习1", "练习2");                           //插入test表，注意关联
            $vdo_file = array('video.mp4','video.mp4');
            $test_temp = array();
            for($i = 0; $i < count($configtests); $i++){
                $test_temp[] = array(
                    'course_id'     => (int)$course_id['max(course_id)'],
                    'test_title'    => $configtests[$i],
                    'test_vdo_file' => $vdo_file[$i]
                );
            }
            $test -> addAll($test_temp);

            /* ado表 */      
            $test_id_get = M('test') -> field("max(test_id)") -> find();                                //得到test表的最大id                                 
            $test_id  = array((int)$test_id_get['max(test_id)']-1, (int)$test_id_get['max(test_id)']);  //练习id
            $ado_name = array( array("音频1", "音频2"),  array("音频1", "音频2", "音频5", "音频7"));    //音频名称
            $configaudio = array( array("1.ogg","2.ogg"),  array("1.ogg", "2.ogg", "5.ogg", "7.ogg"));  //插入audio表，注意关联
            $ado_temp = array();
            for($i = 0; $i < count($configaudio); $i++){
                for($j = 0; $j < count($configaudio[$i]); $j++)
                $ado_temp[] = array(
                    'test_id'  => $test_id[$i],
                    'ado_name' => $ado_name[$i][$j],
                    'ado_file' => $configaudio[$i][$j]
                );
            }
            $ado -> addAll($ado_temp);

            //-- 写死两门课功能调整 -- 结束 
			$this -> redirect('Tch/lesson', array('id' => $course_id['max(course_id)']), 3, "配置成功，即将跳转页面！" );	
    	} else {
    		$this -> display();	
    	}

    	
    }
}
