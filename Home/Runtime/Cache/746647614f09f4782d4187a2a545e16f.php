<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>照片墙</title>
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
  <script src="__JS__/jquery.min.js"></script>
  <link rel="stylesheet" href="__CSS__/amazeui.min.css">
  <link rel="stylesheet" href="__CSS__/photopile.css" />
  <link rel="Stylesheet" type="text/css" href="__CSS__/dialogbyshf.css" />
  <link rel="stylesheet" href="__CSS__/app.css">
  <style>
    body{ 
      background-image: url(__IMG__/3.png);
      background-repeat:no-repeat;
      background-size: 100% 100%;
    }
    .top{
      padding-top:200px;
      overflow-x: hidden;
      height: 450px;
    }

    .top1 img{
      width:50%;
      padding-bottom:25px;
    }

    ul.photopile li a img {
      border: 0 none;
    } 
    input[type='button']{margin:100px 20px;} 
</style>
</head>
<body>
  <!--------------------主体部分开始---------------------->
  <header>
    <div style="padding-top:13px;">
      <a href="<?php echo U('Personal/index');?>">
        <img src="__IMG__/return.png" style="width:15%;margin-left:13px;" />
      </a>
      <!-- <a href="__URL__/my"><img src="__IMG__/221.png" style="width:15%;margin-left:62%;" /></a>		  -->
    </div>
  </header>

  <center>
    <div class="top">    
     <ul class="photopile">
       <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>		
         <a href="__UPLOADS__/picture/<?php echo ($vo["savename"]); ?>">
          <img src="__UPLOADS__/picture/<?php echo ($vo["savename"]); ?>" alt="<?php echo username($vo['uid']);?>的图片" width="60" height="50" />
        </a>	
      </li><?php endforeach; endif; else: echo "" ;endif; ?>	
  </ul>   
</div>

<div class="top1">
  <img src="__IMG__/upload.png" id="btnAlert"/>
</div>
</center>
<script src="__JS__/jquery-1.8.3.min.js"></script>
<script src="__JS__/jquery-ui-1.10.4.min.js"></script>
<script src="__JS__/photopile.js"></script>
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
    $("#btnAlert").click(function () {
      $.DialogBySHF.Alert({ Width: 240, Height: 120, Title: "上传图片", Content: '<form method="post" enctype="multipart/form-data" id="signupForm"><input type="file" name="img" style="margin-top:10px;width:100%;"/><input type="button" value="确定" style="margin-top:15px;margin-left:0px;width:100%;background: #C0E5FF;color: #0F73B9;" onclick="upload()"/></form>', });
    });
  })	

  function upload() {  
    var formData = new FormData($( "#signupForm" )[0]);
    console.log(formData);  
    $.ajax({  
      url: "<?php echo U('Personal/photo');?>" ,  
      type: 'POST',  
      data: formData,  
      async: true,  
      cache: false,  
      contentType: false,  
      processData: false, 
      beforeSend: function () {
        $("body").append('<div id="pload" style="position:fixed;top:30%;z-index:1200;background:url(__IMG__/statusss.gif) top center no-repeat;width:100%;height:140px;margin:auto auto;"></div>');
      },
      complete: function () {
        $("#pload").remove();
      }, 
      success: function (e) {  
        alert(e.msg);  
        location.reload() ;
      },  
      error: function (e) {  
        alert(e.msg);  
      }  
    });  
  } 
</script>
</body>
</html>