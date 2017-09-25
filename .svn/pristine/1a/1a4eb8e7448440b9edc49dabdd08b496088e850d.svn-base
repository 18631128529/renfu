<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function __construct()
	{	
		//先调用父类的构造函数
		parent::__construct();
		$user = session('user');
		!$user && redirect('site/login');
	}


	public function setTcj($title, $cssfiles=array(), $jsfiles=array())
	{
		$this->assign(array(
			'title'	   => $title,
			'cssfiles' => $cssfiles,
			'jsfiles'  => $jsfiles
		));
	}
    
}