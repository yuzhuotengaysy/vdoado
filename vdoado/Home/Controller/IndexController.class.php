<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    	$this 
    	-> assign('jsUrl',$Think.JS_URL)
    	-> assign('cssUrl',$Think.CSS_URL)
    	-> assign('adoUrl',$Think.ADO_URL)
    	-> assign('vdoUrl',$Think.VDO_URL)
    	-> assign('ajaxPath4Media',$Think.A4M_URL)
    	-> assign('ajaxPath4Check',$Think.A4C_URL);

        $this -> display();
    }
    public function getMedia(){
		$data = array();
		$data['video'] = $Think.VDO_URL.'test.mp4';
		$data['audios'] = array($Think.ADO_URL.'1.ogg',$Think.ADO_URL.'2.ogg',$Think.ADO_URL.'3.ogg');
		$this -> ajaxReturn($data);
    }
    public function check($adoDropd){
    	dump($adoDropd);
    }

}