<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>爱的DIY</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <script src="__JS__/video.js"></script>
  <link rel="icon" type="image/png" href="__PUBLIC__/assets/i/favicon.png">
  <link rel="stylesheet" href="__CSS__/amazeui.min.css">
  <link rel="stylesheet" href="__CSS__/app.css">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css" />
  <link rel="stylesheet" type="text/css" href="__CSS__/video-js.css" />

  <style>
    body{ 
      background-image: url(__UPLOADS__/picture/<?php echo ($data['img']); ?>);
      background-repeat:no-repeat;
      background-size: cover;
    }
    .text{
      padding-bottom:60px;
      font-weight:bold;
      color:gold;
      font-family:"楷体";
      font-size:25px;
    }

    /* music */
    .btn_music{display:inline-block;width:35px;height:35px;background:url('__IMG__/play.png') no-repeat center center;background-size:100% auto;position:absolute;z-index:100;left:86%;top:12px;}
    .btn_music.on{background-image:url("__IMG__/stop.png");}

    /* top_menu */
    .top_bar{position:fixed;z-index:900;bottom:0;left:0;right:0;margin:auto;font-family:Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif;}
    .top_menu{display:-webkit-box;border-top:1px solid #b3b3b3;display:block;width:100%;background:rgba(255, 255, 255, 0.7);height:40px;display:-webkit-box;display:box;margin:0;padding:0;-webkit-box-orient:horizontal;background:-webkit-gradient(linear, 0 0, 0 100%, from(#e7e4e7), to(#b9b9b9));}
    .top_menu li{-webkit-box-flex:1;background:-webkit-gradient(linear, 0 0, 0 100%, from(rgba(0, 0, 0, 0.1)), color-stop(50%, rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), -webkit-gradient(linear, 0 0, 0 100%, from(rgba(255, 255, 255, 0.1)), color-stop(50%, rgba(255, 255, 255, 0.3)), to(rgba(255, 255, 255, 0.1)));-webkit-background-size:1px 100%, 1px 100%;background-size:1px 100%, 1px 100%;background-position:1px center, 2px center;background-repeat:no-repeat;position:relative;text-align:center;display:inline-block;width:25%;float:left;}
    .top_menu li a label{padding:3px 0 0 3px;font-size:12px;overflow:hidden;}
    .top_menu li a{height:40px;line-height:40px;display:block;text-align:center;color:#4f4d4f;text-shadow:0 1px rgba(255, 255, 255, 0.3);text-decoration:none;border-top:1px solid #f9f9f9;-webkit-box-flex:1;}
    .top_menu li a p{overflow:hidden;margin:0 0 0 0;font-size:12px;display:block!important;line-height:18px;text-align:center;}
    .top_menu li a img{padding:0;height:20px;width:20px;color:#fff;line-height:40px;vertical-align:middle;}
    .top_menu li a:hover,.top_menu li a:active{background-color:#CCCCCC;}	



  </style>
  <script>
    videojs.options.flash.swf = "video-js.swf";
  </script>

</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 不提供支持。 请 <a
href="http://browsehappy.com/" target="_blank">升级浏览器</a>
以获得更好的体验！</p>
<![endif]-->

<script type="text/javascript" src="__JS__/jquery.min.js"></script>
<script type="text/javascript" src="__JS__/play.js"></script>

<span><a href="<?php echo U('Personal/index');?>"><img src="__IMG__/return.png" style="width:15%;margin-left:13px;margin-top:10px;" /></a></span>

<span id="playbox" class="btn_music" onclick="playbox.init(this).play();"><audio id="audio" loop src="__UPLOADS__/music/<?php echo ($data['music']); ?>"></audio></span>


<center>
  <div style="padding-top:60%;">
    <div class="text">
      <?php echo ($data['text']); ?>
    </div>

    <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="42%" height="110" poster="oceans-clip.png" data-setup="{}">
      <source src="__UPLOADS__/video/<?php echo ($data['video']); ?>" type='video/mp4' />		
        <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
        <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
      </video>
    </div>
  </center>


  <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
  id="">
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
    <li >
      <a href="<?php echo U('Personal/index');?>" class="">
        <span class="am-icon-home"></span>
        <span class="am-navbar-label">首页</span>
      </a>
    </li>
    <li data-am-navbar-share>
      <a class="jiathis_button_weixin">
        <span class="am-icon-share-square-o"></span>
        <span class="am-navbar-label">分享</span>
      </a>
    </li>
    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
    <li data-am-navbar-qrcode>
      <a href="<?php echo U('Personal/diy');?>" class="">
        <span class="am-icon-github"></span>
        <span class="am-navbar-label">Diy</span>
      </a>
    </li>
    <li >
      <a href="<?php echo U('Public/set',array('name'=>$name));?>" class="">
        <span class="am-icon-pencil"></span>
        <span class="am-navbar-label">修改密码</span>
      </a>
    </li>
  </ul>
</div>

</body>
</html>