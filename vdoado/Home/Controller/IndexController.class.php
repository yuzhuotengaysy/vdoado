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
        -> assign('ajaxPath4Check',$Think.A4C_URL)
        -> assign('id',$_GET['id']);
        $this -> display();
    }
    public function getMedia($id){
        $test = M('test');
        $ado = D('ado');
        $vdoRes = $test -> where('test_id = '.$id) -> select();
        $adoRes = $ado -> where('test_id = '.$id) -> select();
        // dump($vdoRes);
		$data = array();
        $data['video'] = $Think.VDO_URL.$vdoRes[0]['test_vdo_file'];
        foreach ($adoRes as $key => $value) {
            $data['audios'] []= $Think.ADO_URL.$value['ado_file'];
        }
		$this -> ajaxReturn($data);
    }
    public function check($adoDropd){
    	dump($adoDropd);
    }

}