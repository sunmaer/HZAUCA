<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends CommonController {
	//后台首页
    public function admin(){
        $this->display();
    }

    //退出
    public function logout(){
		session_unset();
		session_destroy();
		$this->redirect('Admin/Login/index');
    }

    //所有活动
    public function allactivity(){
    	$allactivity=M('Activity');

        $count=$allactivity->count();
        $page = new \Think\Page($count,5);
        $page->lastSuffix=false;
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('first','首页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $page->parameter=I('get.');

        $show=$page->show();
        $data=$allactivity->order('date desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('data',$data);
        $this->assign('page',$show);	
    	$this->display();
    }

    //添加活动
    public function add_activity(){
	    	$activity=M('Activity');
	    	$data=array();
	        $data['theme']=$_POST['theme'];
	        $data['type']=$_POST['type'];
	        $data['allcontents']=$_POST['allcontents'];
	        $data['mcontents']=$_POST['mcontents'];
            $data['tags']=$_POST['tags'];
            $data['author']=$_POST['author'];
	        $data['date']=$_POST['date'];
	    	$activity->add($data);
	    	$this->success('添加活动成功！',U('Admin/allactivity'));
             
    }

    //修改活动信息
    public function editactivity(){
    	$id=$_GET['aid'];
    	$allactivity=M('Activity');
    	$data=$allactivity->where("aid=$id")->find();
    	$this->assign('data',$data);
    	$this->display();
    }
    public function updateactivity(){
    	$id=$_GET['aid'];
    	$allactivity=M('Activity');
    	$allactivity->create();
    	$allactivity->where("aid=$id")->save();
    	$this->success('活动信息修改成功！',U('Admin/allactivity'));
    }

    //删除活动
    public function deleteactivity(){
    	$id=$_GET['aid'];
    	$activity=M('Activity');
    	$activity->delete($id);
    	$this->redirect("allactivity");
    }


    //表单信息
    public function allform(){
    	$allform=M('Form');

        $count=$allform->count();
        $page = new \Think\Page($count,5);
        $page->lastSuffix=false;
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('first','首页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $page->parameter=I('get.');

        $show=$page->show();
        $data=$allform->order('status desc')->limit($page->firstRow.','.$page->listRows)->select();
        // dump($data);
        // die;
        $this->assign('data',$data);
        $this->assign('page',$show);	
    	$this->display("yform");
    }
    public function shenhe(){
        $id=$_GET['fid'];
        $form=M('Form');
        $form->create();
        $data=$form->where("fid=$id")->field('status')->find();
        // var_dump($data['status']);
        // die;
        if ($data['status']=="未完成") {
            $data['status']="已完成";
            $form->where("fid=$id")->save($data);
            $this->success('维修完成！',U('Admin/allform')); 
        }
        else {$this->redirect("allform");}
    } 

    //修改管理员信息
    public function editmanager(){
    	$id=$_GET['id'];
    	$manager=M('Manager');
    	$data=$manager->where("id=$id")->find();
    	$this->assign('data',$data);
    	print_r($data);
    	$this->display("alterinformation");
    }
    public function updatemanager(){
    	$id=$_GET['id'];
    	$manager=M('Manager');
    	$theOne = $manager->where("id = $id")->find();
        if( empty($theOne) || $theOne['password'] != $_POST['password']){
            $this->Error('原密码错误！');
        }else{
        	$data=array();
        $data['password']=$_POST['new_password'];
    	if($_POST['new_password']==$_POST['conf_new_password']){
    		$manager->create();
    	    $manager->where("id=$id")->save($data);
    	    $this->success('密码修改成功！',U('Admin/admin'));
    	}
    	else $this->error('两次输入密码不一致！');
        }
    }
}