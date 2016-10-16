<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	$course = D('course');	    //实例化
    	$res = $course -> select();	//获得数据信息
    	//show_bug($res);
    	
    	//把数据assign到模板
    	$this -> assign('res', $res);
        $this -> display();
    }

    public function index_show(){
    	$this -> display();
    }
}