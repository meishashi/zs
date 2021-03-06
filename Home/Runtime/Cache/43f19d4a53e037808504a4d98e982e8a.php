<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>注册</title>

	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">

	<!-- No Baidu Siteapp-->
	<meta http-equiv="Cache-Control" content="no-siteapp"/>

	<link rel="icon" type="image/png" href="assets/i/favicon.png">

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="__PUBLIC__/assets/i/app-icon72x72@2x.png">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Amaze UI"/>
	<link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
	<meta name="msapplication-TileColor" content="#0e90d2">

	<link rel="stylesheet" href="__CSS__/amazeui.min.css">
	<link rel="stylesheet" href="__CSS__/app.css">
	
	<style>
		body{ 
			background-image: url(__IMG__/login_bg.jpg);
			background-repeat:no-repeat;
			background-size: 100% 100%;
		}
		img{
			width:50%;
			margin-top:40px;
		}
		.top{
			padding-top:70px;
		}
		.bg{
			background: url(__IMG__/input.png)  center;
			background-repeat:no-repeat;
			background-size:50%;
			font-size:12px;
			text-indent:10px;
			padding:12px;
		}
		
		input {
			background:transparent;
			outline:none;
			border:0;
			width:50%;
		}
		.sub{
			background:url(__IMG__/ok.png) no-repeat center; 	
			background-size:100%;	 
		}

	</style>
</head>
<body>
	<!--------------------主体部分开始---------------------->
	<header>
	    <div style="padding-top:10px;">
	      <a href="<?php echo U('Index/index');?>"><img src="__IMG__/return.png" style="width:15%;margin-left:13px;margin-top: 10px;" /></a>
	    </div>
  	</header>
	<center>
		<div><img src="__IMG__/cm.png" /></div>
		<div class="top">	
			<form method="post" id="signupForm">	
				<div class="bg"><input type="text" name="name" id="name" placeholder="用户名" /></div>	
				<span id="names"></span>
				<div class="bg"><input type="password" name="pwd" id="pwd" placeholder="密码" /></div>
				<span id="pwds"></span>
				<div class="bg"><input type="password" name="repwd" id="repwd" placeholder="确认密码" /></div>	
				<span id="repwds"></span>
				<br/>			 
				<input type="button" value="" name="sub" class="sub" onclick="login()">
			</form>			 		
		</div>
		<br/>
		<a href="<?php echo U('Public/login');?>" style="margin-right:90px;float: right;font-size: 12px;">有账号?去登陆</a>
	</center>
	<!--------------------主体部分结束---------------------->
	<!--[if (gte IE 9)|!(IE)]><!-->
	<script src="__JS__/jquery.min.js"></script>
	<script type="text/javascript" src="__JS__/jquery.validate.js"></script>
	<script type="text/javascript">
		var namestatus = 0;
		var pwdstatus = 0;
		var repwdstatus = 0;
	// 验证用户名
	$("#name").blur(function(){
		var name = $('#name').val();
		if(name.length==0||name.length<6){
			console.log('不能少于6个字符');
			namestatus = 0;
			$('#names').css({"font-size":"12px","color":"red"}).html("*不能少于6个字符");
		}else{
			var url3 = "<?php echo U('Public/checkname');?>";
			var data = {'name':name};
			$.post(url3,data,function(e){
				if(e.status == 1){
					namestatus = 1;
					$('#names').empty();
					console.log(e.msg);
					return false;
				}else{
					namestatus = 0;
					console.log(e.msg);
					$('#names').css({"font-size":"12px","color":"red"}).html("*用户名已存在");
					return false;
				}	
			},'json');
		}
	});

	// 验证密码长度
	$("#pwd").blur(function(){
		var pwd = $('#pwd').val().length;
		if(pwd!=0&&pwd<6){
			pwdstatus = 0;
			$('#pwds').css({"font-size":"12px","color":"red"}).html("*密码不能少于6个字符");
		}else{
			pwdstatus = 1;
			$('#pwds').empty();
		}
	});
    // 验证确认密码
    $("#repwd").blur(function(){
    	var pwd = $('#pwd').val();
    	var repwd = $('#repwd').val();
    	if(pwd == repwd){
    		repwdstatus = 1;
    		$('#repwds').empty();
    	}else{
    		repwdstatus = 0;
    		$('#repwds').css({"font-size":"12px","color":"red"}).html("*两次密码不一样");
    	}
    });
    // 提交表单
    function login(){
    	if(namestatus == 0){
    		$("#name").focus();
    		return false;
    	}
    	if(pwdstatus == 0){
    		$("#pwd").focus();
    		return false;
    	}
    	if(repwdstatus == 0){
    		$("#repwd").focus();
    		return false;
    	}
    	var formData = new FormData($( "#signupForm" )[0]);
    	var url2 = "<?php echo U('Public/login');?>"
    	$.ajax({  
    		url: "<?php echo U('Public/register');?>" ,  
    		type: 'POST',  
    		data: formData,  
    		async: true,  
    		cache: false,  
    		contentType: false,  
    		processData: false,  
    		success: function (e) {  
    			console.log(e.msg); 
    			window.location.href=url2;  
    		},  
    		error: function (e) {  
    			alert(e.msg);  
    		}  
    	});  
    }
</script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->
</body>
</html>