<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function indexAction(){
		$username = session('username');
		
		$where['username'] = session('username');
		$res = D('Account')->where($where)->select();
		if($res) {
			
		}else {
			$this->redirect('Home/Account/init', 3, '请先设置一个邮箱账号');
		}
		echo 1;
		echo 'test pull';
		$this->assign('title','Warm Mail -- View Mailbox');
		$this->assign('is_login',1);
    	$this->display();
    	
    }
	
}
