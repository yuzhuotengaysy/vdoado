<?php
namespace Home\Controller;
use Think\Controller;
class StuController extends Controller {
    public function index(){
        echo U("Stu/index");
    }

    public function show(){
    	echo U("Stu/show");
    }
}