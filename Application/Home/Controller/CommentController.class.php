<?php
namespace Home\Controller;
class CommentController extends BaseController {
    public function index(){
    	$title = '留言';
    	$cssfiles = ['Home/css/message-index'];
    	$jsfiles = ['Commen/iscroll/iscroll-probe', 'Home/js/message-index'];
    	$this->setTcj($title, $cssfiles, $jsfiles);
    	// echo 1;
    	// exit;
       	$this->display();
    }

    //新增留言
    public function add(){
        $imgs_path='';
        $imgs_thumb_path='';
            if(IS_POST){
              //判断图片上传
              if($_FILES['imgs']['error'] ==0){
                $config = array(
                    'maxSize'=>3000000,
                    'exts'=>array('jpg','png','gif'),
                    'rootPath' =>'/Uploads/'
                );
                $upload = new \Think\Upload($config);
                $res = $upload->upload();
                if(!$res){
                    echo $upload->getError();
                }else{
                    //拼接图片路径
                    $imgs_path = $config['rootPath'].$res['imgs']['savepath'].$res['imgs']['savename'];
                    //制作缩略图
                    $img = new \Think\Image();
                    $img->open($imgs_path);
                    $img->thumb('150','150');
                    $imgs_thumb_path = $config['rootPath'].$res['imgs']['savepath'].'thumb_'.$res['imgs']['savename'];
                    $img->save($imgs_thumb_path);
                }
             //实例化模型
             $model = M('comment');
             //接收表单数据 
             $data = $model->create();
             $data['patientid'] = session('user.id');
             $data['imgs'] = $imgs_path;
             $data['imgs_thumb'] = $imgs_thumb_path;
             $data['ctime'] = time();
             //dump($data);die;
             //添加到数据库
             $result = $model->add($data);
             //判断是否添加成功
             if($result){
                redirect('mrecord',1);
             }else{
                $this->error('留言失败!');
             }
          }  
        }
    	$title = '留言';
    	$cssfiles = ['Home/css/message-index'];
    	$jsfiles = ['Commen/iscroll/iscroll-probe', 'Home/js/message-index'];
    	$this->setTcj($title, $cssfiles, $jsfiles);
    	// echo 1;
    	// exit;
       	$this->display();
    }

    //购买留言
    public function goumai(){
        $this->display();
    }

    //显示留言记录
    public function mrecord(){
        $id = session('user.id');
        $message = M('comment')->where("patientid=$id")->select();

        $num = count($message);
        for($i=0;$i<$num;$i++){
            $id = $message[$i]['id'];
            $comment = M('comment')->where("pid = $id")->find();
            $message[$i]['comment'] = $comment['detail'];
            //dump($message[$i]['imgs_thumb']);
        }
        $this->assign('message',$message);
        $this->display();
    }
}   