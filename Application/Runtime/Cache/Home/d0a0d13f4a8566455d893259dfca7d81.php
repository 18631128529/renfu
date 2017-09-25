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

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>充值选择</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- 显示窗口 宽度 是 客户端的 屏幕 宽度 （就是 满屏 ！），显示的文字和图形的初始比例 是 1.0 -->
    <link rel="stylesheet" type="text/css" href="/Public/home/css/style1.css">
</head>
<body>
  <div class="money">
    <p>选择金额</p >
    <input type="button" name="" id="bt1"  onclick="return sure(1)" value="5元/5次">
    <input type="button" name="" id="bt2"  onclick="return sure(2)" value="10元/10次">
    <div style="padding: 20px 0 0px;;width: 40%;">
      <img src="/Public/home/images/wcpay.png" style="width: 100%;">
    </div>
  </div>
  <div class="goumai">
    <input type="button" value="立即购买">
  </div>
  <script type="text/javascript">
      function sure (key) {
      var bt1 = document.getElementById('bt1');
      var bt2 = document.getElementById('bt2');
      if(key==1){
      bt1.style.backgroundColor="#ffe4c2";
      }else if(key==2){
      bt2.style.backgroundColor="#ffe4c2";
      }
    }
</script>
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