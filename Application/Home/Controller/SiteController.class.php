<?php
namespace Home\Controller;
use Think\Controller;
class SiteController extends Controller {
    public function login(){
    	if(IS_POST) {
            $account = I('post.account');
            $pwd = I('post.pwd');
            $result = D('Patient')->checkLogin($account, $pwd);
            $this->ajaxReturn($result);
        }
        $this->display();
    }
    public function logout()
    {
        session(null);
        redirect('login');
    }
}