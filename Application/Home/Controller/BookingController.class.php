<?php
namespace Home\Controller;
class BookingController extends BaseController {
    public function index(){
    	$year  = date('Y');
    	$month = date('m');
    	if(IS_POST){
    		//获取可预约数据
	    	$year  = I('post.y');
	    	$month = I('post.m');
	    	$data = D('Booking')->getBookingData($year, $month);
	    	$this->ajaxReturn($data);
    	}
    	$title = '个人消息';
    	$jsfiles = ['Home/js/booking'];
		$cssfiles = ['Home/css/booking'];
    	$this->setTcj($title, $cssfiles, $jsfiles);
    	
    	$this->assign(array(
    		'data' =>$data,
    		'year' =>$year,
    		'month' =>$month,
    		));
       	$this->display();
    }
    public function add(){
    	if(IS_POST){
    		//获取可预约数据
	    	$year  = I('post.y');
	    	$month = I('post.m');
	    	$day = I('post.d');
	    	$data = D('Booking')->add($year, $month, $day);
	    	$this->ajaxReturn($data);
    	}
    }

}