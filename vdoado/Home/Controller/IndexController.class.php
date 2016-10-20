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
        $video = $test -> where('test_id = '.$id) -> getField('test_vdo_file');  //返回test_id下的一个视频
        $audios = $ado -> where('test_id = '.$id) -> getField('ado_file',true);        //返回test_id下的若干个音频
       
        // dump($vdoRes);
		$data = array();
        $data['video'] = $Think.VDO_URL.$video;
        foreach ($audios as $key => $value) {
            $data['audios'] []= $Think.ADO_URL.$value;
            $data['adoNames'] []= $ado -> where('ado_file = "'.$value.'"') -> getField('ado_name');        
        }
		$this -> ajaxReturn($data);
    }
    public function check($adoDropd,$name,$id){
        $stuId = D('student') -> where('student_name="'.$name.'"') -> getField('student_id');
        if($stuId == NULL){
            $data = array('student_name' => $name);
            D('student') -> add($data);
            $stuId = D('student') -> where('student_name="'.$name.'"') -> getField('student_id');
        }
        $result = array();
        for($i = 0; $i < count($adoDropd); $i++){
            $data = array(
                'test_id' => $id, 
                'student_id' => $stuId,
                'ado_id' => $adoDropd[$i]
            );
            $result []= $data;
            D('result') -> add($data);
        }
        $this -> ajaxReturn($result);
    }
    public function getResult(){
    	$this -> ajaxReturn($res);
    }
}