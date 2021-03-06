<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="__CSS__/reset.css"/>
	<link rel="stylesheet" type="text/css" href="__CSS__/login.css"/>
	<style>
		.goto-register{
			font: 400 0.6rem/1rem "微软雅黑";
			color: #1c2975;
			float: right;
		}
	</style>
</head>
<body>
	<div class="login-wrap">
		<img src="__IMG__/logo.png" class="loin-logo"/>
		<form method="post" id="signupForm">	
		<div class="login-iptwrap">
			<div class="login-ipt-user">
				<span class="login-ipt-userlogo"></span>
				<input type="text"  value="" id="name" name="name" class="login-ipt" placeholder="请输入您的用户名"/>
			</div>
			<div class="login-ipt-pass">
				<span class="login-ipt-passlogo"></span>
				<input type="password" id="pwd" name="pwd" value="" class="login-ipt" placeholder="请输入您的密码"/>
			</div>
			<input type="button" name="" id="login-btn" value="登录" onclick="login()" />
			<a href="<?php echo U('Public/register');?>" class="goto-register">没有帐号?点击注册</a>
		</div>
		</form>

	</div>
</body>
<script src="__JS__/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
<script src="__JS__/rem.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	function login(){
		var formData = new FormData($( "#signupForm" )[0]);
		var url2 = "<?php echo U('Personal/index');?>"
		$.ajax({  
			url: "<?php echo U('Public/login');?>" ,  
			type: 'POST',  
			data: formData,  
			async: true,  
			cache: false,  
			contentType: false,  
			processData: false,  
			success: function (e) {  
				if(e.status ==1){
					$('#text').empty();
					window.location.href=url2;
				}else{
					$('#text').css({"font-size":"12px","color":"red"}).html("*用户名或者密码错误！");
				}
			},  
			error: function (e) { 

				alert(e.msg);  
			}  
		});  
	}
	$("#name").focus(function(){
		$('#text').empty();
	});
	$("#pwd").focus(function(){
		$('#text').empty();
	});
</script>
</html>