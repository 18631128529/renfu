<?php
namespace Home\Controller;
class MessageController extends BaseController {
    public function index(){
    	$title = '个人消息';
    	$cssfiles = ['Home/css/message-index'];
    	$jsfiles = ['Commen/iscroll/iscroll-probe', 'Home/js/message-index'];
    	$this->setTcj($title, $cssfiles, $jsfiles);
    	// echo 1;
    	// exit;
       	$this->display();
    }


}