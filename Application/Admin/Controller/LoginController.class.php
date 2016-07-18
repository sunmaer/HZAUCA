<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index()
    {
		$this->display("login");
    }

     public function login()
    {
       if(!IS_POST) E('页面不存在');

       $managername = $_POST['managername'];
       $pwd = $_POST['password'];
       $manager = M('Manager')->where(array('managername'=>$managername))->find();
       if(!$manager || $manager['password'] != $pwd)
       {
         $this->error('账号或密码错误');
       }
       $data = array(
            'id' => $manager['id'],
            'logintime' => date('Y-m-d H-i-s'),
            'loginip' => get_client_ip(),
        );
       M('Manager')->save($data);

       session('id',$manager['id']);
       session('managername',$manager['managername']);
       session('logintime',$manager['logintime']);
       session('loginip',$manager['loginip']);

       $this->redirect("Admin/admin");
       }
}