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
        
<div class="booking-index" id="wrapper">
    <div id="calendar">
        <div class="header">
            <select class="year-select">
                <?php $__FOR_START_16461__=date('Y');$__FOR_END_16461__=date('Y')+2;for($i=$__FOR_START_16461__;$i < $__FOR_END_16461__;$i+=1){ echo ($i==$year?$select="selected":$select=""); ?>
                    <option value="<?php echo ($i); ?>" <?php echo ($select); ?>><?php echo ($i); ?>年</option><?php } ?>
            </select>
            <select class="month-select">
                <?php $__FOR_START_9014__=1;$__FOR_END_9014__=13;for($i=$__FOR_START_9014__;$i < $__FOR_END_9014__;$i+=1){ echo ($i==$month?$select="selected":$select=""); ?>
                    <option value="<?php echo ($i); ?>" <?php echo ($select); ?>><?php echo ($i); ?>月</option><?php } ?>
            </select>
        </div>
        <div class="content">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>周一</th>
                        <th>周二</th>
                        <th>周三</th>
                        <th>周四</th>
                        <th>周五</th>
                        <th>周六</th>
                        <th>周日</th>
                    </tr>
                </thead>
                <tbody class="date-list"></tbody>
            </table>
        </div>
    </div>
    <div>
        <div>
            <button class="btn bookingBtn">预约</button>
          <!-- <input name="" id="" value="预 约" type="button" class="open-window">  -->
        </div>
        <div class="booking-point">
            <p>1. 需要提前5天预约</p>
            <p>2. 绿色数字代表当天剩余名额</p>
            <p>3. 灰色说明不可预约</p>
        </div>
    </div>
</div>
<div class="modal fade" id="msbModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="width: 80%">
        <div class="modal-content">
            <div class="modal-body">
                <p class="modalMsg">12312312</p>
            </div>
            <div class="modal-footer" style="padding: 0;margin: 0">
              <button type="button" data-dismiss="modal">取  消</button>
              <button type="button" class="subBooking">确  定</button>
            </div>
        </div>
    </div>
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