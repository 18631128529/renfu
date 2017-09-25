<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>个人登录</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="stylesheet" type="text/css" href="/Public/Commen/commen.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/login.css?r=<?php echo time();?>"/>
</head>
<body>
	<div class="page-content">
		<div class="nav-logo">
			<img src="/Public/Home/images/logo.png">
		</div>
		<div>
			<form class="login-form" action="/home/site/login">
				<div class="error-box"></div>
				<div class="form-item">
			        <input type="text" name="account" class="text" placeholder="请输入账号">
			    </div>
				<div class="form-item">
			     	<input type="password" name="pwd" placeholder="请输入密码" class="text">
			    </div>
			    <!-- <div class="form-item-agree">
			      	<input type="checkbox" checked>
			      	<span>我同意<a href="">《用户服务协议》</a></span>
			    </div> -->
				<div class="form-actions">
					<button type="submit" class="loginbtn"> 登 录</button>
				</div>
			</form>
		</div>	
	</div>
	<script type="text/javascript" src="/Public/Commen/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/Commen/jquery.form.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/login.js"></script>
</body>
</html>