<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>私人定制</title>

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
    background-image: url(__IMG__/1.png);
	  background-repeat:no-repeat;
	  background-size: 100% 100%;
  }
  img{
    width:80%;
	  margin-top:40px;x
	  
  }
  .top{
    /*padding-top:450px;*/
    position: fixed;
    bottom: 10%;
  }
  .top a{
    width: 50%;
    display: block;
    float: left;
  }
  </style>
</head>
<body>
<!--------------------主体部分开始---------------------->
<header>
  <div>
    <a href="<?php echo U('Index/index');?>"><img src="__IMG__/return.png" style="width:15%;margin-left:13px;margin-top:10px;" /></a>
  </div>
</header>
<center>
	<div class="top">		
    <a href="<?php echo U('Personal/photo');?>"><img src="__IMG__/m01.png" /></a>
    <a href="<?php echo U('Personal/diydetail',array('name'=>$name));?>"><img src="__IMG__/diy.png" /></a>		
	</div>
</center>
<!--------------------主体部分结束---------------------->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="__JS__/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->
</body>
</html>