<?php
namespace Home\Controller;
use Think\Controller;
class TchController extends Controller {
    public function index(){
        $this -> display();		//调用视图
    }

    public function index_show(){
    	$this -> display();
    }

    public function lesson(){
    	$this -> display();
    }

    public function result(){
    	$this -> display();
    }

    public function new_lesson(){
    	$this -> display();
    }
}