<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {
    public function _initialize(){
        if(!isset($_SESSION['id']) || !isset($_SESSION['managername'])) 
		{
			$this->redirect('Admin/Login/index');
		}
    }
}