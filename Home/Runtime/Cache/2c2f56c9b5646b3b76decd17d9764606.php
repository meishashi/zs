<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>爱的DIY</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="__PUBLIC__/assets/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="__PUBLIC__/assets/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="__PUBLIC__/assets/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="__PUBLIC__/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="__CSS__/amazeui.min.css">
  <link rel="stylesheet" href="__CSS__/app.css">
  <link rel="Stylesheet" type="text/css" href="__CSS__/dialogbyshf.css" />
  <style>
  body{ 
      background-image: url(__IMG__/2.jpg);
	  background-repeat:no-repeat;
	  background-size: 100% 100%;
  }
  .bor{
	  border:2px dashed white;width:240px;height:60px;margin-top:10px;
	   padding: 17px 0; 
   } 
  span{
     display:block
  }
  .ct{
      padding-top:190px;
  }
  .ct1{
      padding-top:1px;
	  font-weight:bold;
	  color:white;
	  font-family:"楷体";
  }
  
a {
    color: #339;
    text-decoration: none;		
}

a:hover {
    text-decoration: none;
}


  
.top1 img{
      width:40%;
	  padding-top:25px;
}

.bor img{
     width:70%;
	 height:20px;	 
 }
 
.bor video{
     width:70%;
	 height:20px;	 
 }
 
 
  </style>
</head>
<body>
<!--------------------主体部分开始---------------------->
<header>
    <div style="padding-top:10px;">
		 <a href="__URL__/index"><img src="__IMG__/return.png" style="width:15%;margin-left:13px;" /></a>
		 <!--
		 <?php if(($_SESSION['cid4'] == 1)): ?><img src="__IMG__/music.png" style="width:8%;margin-left:68%;" id="end"/>	
		 <?php else: ?>
		 <img src="__IMG__/music.png" style="width:8%;margin-left:68%;" id="btnAlert4"/><?php endif; ?>
-->		 
	 </div>
	 
</header>
<center>
 <div class="ct">
     <?php if(($_SESSION['cid1'] == 1)): ?><div class="bor"><?php echo ($_SESSION['text']); ?></div>
	 <?php else: ?>
	<div class="bor"><span class="ct1" id="btnAlert1">+ 添加文字</span></div><?php endif; ?>
	<?php if(($_SESSION['cid3'] == 1)): ?><div class="bor"><?php echo ($_SESSION['image']); ?></div>
	 <?php else: ?>	 
	<div class="bor"><span class="ct1" id="btnAlert3">+ 添加图片</span></div><?php endif; ?>
	 <?php if(($_SESSION['cid4'] == 1)): ?><div class="bor"><?php echo ($_SESSION['radio']); ?></div>
	 <?php else: ?>	 
	<div class="bor"><span class="ct1" id="btnAlert4">+ 添加音乐</span></div><?php endif; ?>
	<?php if(($_SESSION['cid2'] == 1)): ?><div class="bor"><?php echo ($_SESSION['video']); ?></div>
	 <?php else: ?>
     <div class="bor"><span class="ct1" id="btnAlert2">+ 添加视频</span></div><?php endif; ?>
     
 </div>
 <div class="top1"><a href="__URL__/set"><img src="__IMG__/tj1.png"></a></div> 
</center>
<!--------------------主体部分结束---------------------->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="__JS__/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->
<script type="text/javascript" src="__JS__/dialogbyshf.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#btnAlert1").click(function () {
            $.DialogBySHF.Alert({ Width: 240, Height: 155, Title: "添加文字", Content: '<form action="__URL__/add_txt" method="post"><textarea name="text" rows="2" cols="20"></textarea><input type="submit" value="确定" name="sub" style="margin-top:15px;margin-left:32%"/></form>', });
        })
		$("#btnAlert2").click(function () {
            $.DialogBySHF.Alert({ Width: 240, Height: 120, Title: "添加视频", Content: '<form action="__URL__/upload" method="post" enctype="multipart/form-data"><input type="hidden" name="type" value="1" /><input type="file" name="video" /><input type="submit" value="确定" style="margin-top:15px;margin-left:20%"/></form>', });
        })
		$("#btnAlert3").click(function () {
            $.DialogBySHF.Alert({ Width: 240, Height: 120, Title: "添加图片", Content: '<form action="__URL__/upload" method="post" enctype="multipart/form-data"><input type="file" name="image" /><input type="hidden" name="type" value="2" /><input type="submit" value="确定" style="margin-top:15px;margin-left:20%"/></form>', });
        })
		$("#btnAlert4").click(function () {
            $.DialogBySHF.Alert({ Width: 240, Height: 120, Title: "添加音乐", Content: '<form action="__URL__/upload" method="post" enctype="multipart/form-data"><input type="file" name="image" /><input type="hidden" name="type" value="3" /><input type="submit" value="确定" style="margin-top:15px;margin-left:20%"/></form>', });
        })
		$("#end").click(function () {
		     alert("音乐已添加");
		})
    })	
</script>
</body>
</html>