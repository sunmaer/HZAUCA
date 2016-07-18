<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $allactivity=M('Activity');
        $data=$allactivity->order('date desc')->limit(6)->select();
        // dump($data);
        // die;
        $this->assign('data',$data);	
    	$this->display();
    }
    public function contents(){
    	$id=$_GET['aid'];
    	$allactivity=M('Activity');
    	$data=$allactivity->where("aid=$id")->find();
    	$this->assign('data',$data);
    	$this->display('activityContents');
    }
    public function allactivity(){
        $allactivity=M('Activity');
        $data=$allactivity->select();
        // dump($data);
        // die;
        $this->assign('data',$data);	
    	$this->display('allActivity');
    }
    public function addForm(){
	    	$form=M('Form');
	    	$data=array();
	        $data['name']=$_POST['name'];
	        $data['phone']=$_POST['phone'];
	        $data['qq']=$_POST['qq'];
	        $data['pheno']=$_POST['pheno'];
            $data['description']=$_POST['description'];
	        $data['time']=date("Y-m-d H:i:s");
	        $data['status']="未完成";
	    	$form->add($data);
	    	$this->redirect('index');
             
    }
}