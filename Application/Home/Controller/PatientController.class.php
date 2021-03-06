<?php
namespace Home\Controller;
class PatientController extends BaseController {
    public function index(){
    	$title = '个人中心';
    	$cssfiles = ['Home/css/patient-index'];
    	$this->setTcj($title, $cssfiles);
       	$this->display();
    }
    public function cpwd(){
    	if(IS_POST){
    		$oldPwd = I('post.oldpwd');
	    	$newPwd = I('post.newpwd');
	    	$result = D('Patient')->changePwd($oldPwd, $newPwd);
	    	$this->ajaxReturn($result);
    	}
    	$title = '修改密码';
    	$cssfiles = ['Home/css/patient-index'];
    	$jsfiles = ['Home/js/patient'];
    	$this->setTcj($title, $cssfiles, $jsfiles);
       	$this->display();
    }

    public function blist(){
        if($_GET){
            $p = I("get.p");
            $ps = I("get.ps");
            $result = D("Booking")->getList($p, $ps);
            $this->ajaxReturn($result);
        }
        $title = '我的预约';
        $cssfiles = ['Commen/mescroll/mescroll.min', 'Commen/mescroll/option/mescroll-option', 'Home/css/blist'];
        $jsfiles = ['Commen/mescroll/mescroll.min', 'Commen/mescroll/option/mescroll-option', 'Home/js/blist'];
        $this->setTcj($title, $cssfiles, $jsfiles);
    	$this->display();
    }

    public function booking(){
        $this->display();
    }
}