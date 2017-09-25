<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($title); ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="/Public/Commen/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Commen/font-awesome/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Commen/commen.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css?r=<?php echo time();?>"/>
    <?php if($cssfiles): if(is_array($cssfiles)): $i = 0; $__LIST__ = $cssfiles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><link rel="stylesheet" type="text/css" href="/Public/<?php echo ($v); ?>.css?r=<?php echo time();?>"/><?php endforeach; endif; else: echo "" ;endif; endif; ?>
</head>
<body>
    <div class="page-content">
        
<div class="comment-add">
<form action="/comment/add" method='post' enctype="multipart/form-data">
    <div class="topnav">
        <ul>
            <li><a href="" class="avtive">留言</a></li>
            <li style="border: none;"><a href="/comment/mrecord">留言记录</a></li>
        </ul>
    </div>
    <divider><div class="m-divider"></div></divider><!-- 分割线 -->
    <div class="feedback">
        <textarea cols="50" rows="10" name="detail" placeholder="请输入留言内容"></textarea> 
    </div>
    <divider><div class="m-divider"></div></divider><!-- 分割线 -->
    <div class="pptc">
        <div class="popc">
            <div class="addhao">
               <input name="imgs" class="fileinput" type="file">
            </div>
            <p class="zii">请上传照片(截图)</p>
        </div>
    </div>
    <div class="didi">
        <input value="留 言" type="submit">
    </div>
    <div class="leave-word">
        <p> 您还可以留言 <span>5</span>次</p>
        <a href="/comment/goumai">购买留言次数</a>
    </div>
    </form>
</div>


    </div>
    <!-- 底部开始 -->
    <ul class="foot-nav">
        <li class="<?php if(CONTROLLER_NAME=='Message')echo 'active';?>">
            <a href="/message/index">
                <i class="fa fa-home"></i>
                <span class="on">首页</span>
            </a>
        </li>
        <li class="<?php if(CONTROLLER_NAME=='Booking')echo 'active';?>">
            <a href="/booking/index">
                <i class="fa fa-clock-o"></i>
                <span>预约</span>
            </a>
        </li>
        <li class="<?php if(CONTROLLER_NAME=='Comment')echo 'active';?>">
            <a href="/comment/add">
                <i class="fa fa-commenting-o"></i>
                <span>留言</span>
            </a>
        </li>
        <li class="<?php if(CONTROLLER_NAME=='Patient')echo 'active';?>">
            <a href="/patient/index">
                <i class="fa fa-user-o"></i>
                <span>我的</span>
           </a>
        </li>
    </ul>
    <!-- 底部结束 -->
    <script type="text/javascript" src="/Public/Commen/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/Commen/jquery.form.min.js"></script>
    <script type="text/javascript" src="/Public/Commen/bootstrap/bootstrap.min.js"></script>
    <?php if($jsfiles): if(is_array($jsfiles)): $i = 0; $__LIST__ = $jsfiles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><script type="text/javascript" src="/Public/<?php echo ($v); ?>.js?r=<?php echo time();?>"></script><?php endforeach; endif; else: echo "" ;endif; endif; ?>
</body>
</html>