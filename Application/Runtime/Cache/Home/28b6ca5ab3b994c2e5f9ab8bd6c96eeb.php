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
        <!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>留言记录</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <!-- 显示窗口 宽度 是 客户端的 屏幕 宽度 （就是 满屏 ！），显示的文字和图形的初始比例 是 1.0 -->
  <link rel="stylesheet" type="text/css" href="/public/home/css/style.css"><!-- 基本样式 -->
	<link rel="stylesheet" href="/public/home/css/layui.css"  media="all">
  <script type="text/javascript" src="/public/home/js/jquery.min.js"></script><!-- jquery -->
</head>
<body>
	<div class="topnav">
		<ul>
			<li><a href="/comment/add" >留言</a></li>
			<li style="border: none;"><a href="" class="avtive">留言记录</a></li>
		</ul>
	</div>
  <div style="margin-bottom: 70px;">
    <divider><div class="m-divider"></div></divider><!-- 分割线 -->
    <div class="record ">

    <?php if(is_array($message)): foreach($message as $key=>$m): ?><div class="question">
            <img src="/public/home/images/wen.png">
            <p><?php echo ($m["detail"]); ?></p>
            <img src="<?php echo ($m["imgs_thumb"]); ?>">
            <span><?php echo (date('Y-m-d H:i:s',$m["ctime"])); ?></span>
          </div> 

        <?php if($m["comment"] != NULL): ?><div class="answer">
          <img src="/public/home/images/da.png">
            <p><?php echo ($m["comment"]); ?></p>
          </div>

          <hr class="need">
        <?php else: ?>
          <div></div><?php endif; endforeach; endif; ?>
       <hr class="need">
    </div>
    <divider><div class="m-divider"></div></divider>
    <hr class="need"><!-- 分割线 -->
    <!--<div class="record ">-->
        <!--<div class="question">-->
          <!--<img src="/public/home/images/wen.png">-->
          <!--<p>头疼怎么治？什么办法更好？</p>-->
          <!--<span>2017-05-25  08:10</span>-->
        <!--</div>-->
        <!--<hr class="need">-->
        <!--<div class="answer">-->
          <!--<img src="/public/home/images/da.png">-->
          <!--<p>头疼注意睡眠质量多喝水不要熬夜，休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴....</p>-->
          <!--<span>2017-05-25  08:10</span>-->
        <!--</div>-->
    <!--</div>-->
    <!--<divider><div class="m-divider"></div></divider>&lt;!&ndash; 分割线 &ndash;&gt;-->
    <!--<div class="record ">-->
        <!--<div class="question">-->
          <!--<img src="/public/home/images/wen.png">-->
          <!--<p>头疼怎么治？什么办法更好？</p>-->
          <!--<span>2017-05-25  08:10</span>-->
        <!--</div>-->
        <!--<hr class="need">-->
        <!--<div class="answer">-->
          <!--<img src="/public/home/images/da.png">-->
          <!--<p>头疼注意睡眠质量多喝水不要熬夜，休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴休息很重要，可以按摩太阳穴....</p>-->
          <!--<span>2017-05-25  08:10</span>-->
        <!--</div>-->
    <!--</div>-->
  </div>   
	<!-- 底部开始 -->

  <!-- 底部结束 -->
</body>
</html>
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