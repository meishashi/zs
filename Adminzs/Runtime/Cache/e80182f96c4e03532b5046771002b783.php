<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>登陆</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" /> -->
<style>
	span{color:white;
	font-weight:bold;}
</style>
</head>
<body style="background: #E589BC">
<form method="post" action="__URL__/checkLogin" name='theForm' onsubmit="return validate()">
	<table cellspacing="0" cellpadding="0" style="margin-top: 100px" align="center">
		<tr>
			<td><img src="__PUBLIC__/Img/misc/logo.png" width="256" height="178" border="0" alt="转身诱惑" /></td>
			<td style="padding-left: 50px">
				<table>
					<tr>
						<td><span>用户名：</span></td>
						<td><input type="text" name= "username" /></td>
					</tr>
					<tr>
						<td><span>密　码：</span></td>
						<td><input type="password" name= "password" /></td>
					</tr>
					<!--       <tr>
						<td>验证码</td>
						<td><input type="text" name="captcha" class="capital" /></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><img src="index.php?act=captcha&{$random}" width="145" height="20" alt="CAPTCHA" border="1" onclick= this.src="index.php?act=captcha&"+Math.random() style="cursor: pointer;" title="{$lang.click_for_another}" />
						</td>
					</tr> -->

					<!-- <tr>
						or="remember">请保存我的登陆信息</label></td>
					</tr> -->
					<tr style = "height:50px;"><td>&nbsp;</td><td><input type="submit" value="进入管理中心" class="button" style = "color:#E40A83;margin-left:20px;" /></td></tr>
					<!-- <tr>
						<td colspan="2" align="right">&raquo; <a href="../" style="color:white">{$lang.back_home}</a> &raquo; <a href="get_password.php?act=forget_pwd" style="color:white">忘记密码</a></td>
					</tr> -->
				</table>
			</td>
		</tr>
	</table>
</form>
</body>
</html>