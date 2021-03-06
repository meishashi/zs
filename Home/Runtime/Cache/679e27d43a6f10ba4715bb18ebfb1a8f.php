<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="今博士">
    <meta name="keywords" content="今博士">
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
    <link rel="Stylesheet" type="text/css" href="__CSS__/dialogbyshf.css" />
    <link rel="stylesheet" href="__CSS__/app.css">
    <style>
      body{ 
          background-image: url(__IMG__/2.png);
          background-repeat:no-repeat;
          background-size: 100% 100%;
      }
      .bor{
          border:2px dashed white;width:240px;height:60px;margin-top:30px;
          padding: 17px 0; 
      } 
      span{
          display:block
      }
      .ct{
          padding-top:100px;
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
          width:240px;
          padding-top:25px;
          padding-bottom:25px;
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
      <a href="<?php echo U('Personal/index');?>"><img src="__IMG__/return.png" style="width:15%;margin-left:13px;" /></a>
<!--
<?php if(($_SESSION['cid4'] == 1)): ?><img src="__IMG__/music.png" style="width:8%;margin-left:68%;" id="end"/>	
<?php else: ?>
<img src="__IMG__/music.png" style="width:8%;margin-left:68%;" id="btnAlert4"/><?php endif; ?>
-->		 
    </div>

  </header>
  <center>
    <div class="ct">
      <div class="bor" id="btnAlert1">
        <?php if(($_SESSION['cid1'] == 1)): echo ($_SESSION['text']); ?>
          <?php else: ?>
          <span class="ct1">+ 添加文字</span><?php endif; ?>
      </div>

      <div class="bor" id="btnAlert3">
        <?php if(($_SESSION['cid3'] == 1)): echo ($_SESSION['old_img']); ?>
          <?php else: ?>	 
          <span class="ct1">+ 添加图片</span><?php endif; ?>
      </div>

      <div class="bor" id="btnAlert4">
        <?php if(($_SESSION['cid4'] == 1)): echo ($_SESSION['old_music']); ?>
          <?php else: ?>	 
          <span class="ct1">+ 添加音乐</span><?php endif; ?>
      </div>
      
      <div class="bor" id="btnAlert2">
        <?php if(($_SESSION['cid2'] == 1)): echo ($_SESSION['old_video']); ?>
          <?php else: ?>
          <span class="ct1">+ 添加视频</span><?php endif; ?>
      </div>

      <div class="top1"><a href="javascript:set();"><img src="__IMG__/tj1.png"></a></div> 
    </div>
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
  //添加文字
  $("#btnAlert1").click(function () {
    $.DialogBySHF.Alert({ Width: 240, Height: 155, Title: "添加文字", Content: '<form id="form1" method="post"><textarea name="text" rows="2" cols="20"></textarea><input type="submit" value="确定" onclick="uploadtext()" style="margin-top:15px;margin-left:0px;width:100%;background: #C0E5FF;color: #0F73B9;"/></form>', });
  });
  // 添加视频
  $("#btnAlert2").click(function () {
    $.DialogBySHF.Alert({ Width: 240, Height: 120, Title: "添加视频", Content: '<form id="form2" method="post" enctype="multipart/form-data"><input type="file" name="video" style="width:100%;" /><input type="submit" value="确定" onclick="uploadvideo()" style="margin-top:15px;margin-left:0px;width:100%;background: #C0E5FF;color: #0F73B9;"/></form>', });
  });

  // 添加图片
  $("#btnAlert3").click(function () {
    $.DialogBySHF.Alert({ Width: 240, Height: 120, Title: "添加图片", Content: '<form id="form3" method="post" enctype="multipart/form-data"><input type="file" name="image"  style="width:100%;" /><input type="submit" value="确定" onclick="uploadpic()" style="margin-top:15px;margin-left:0px;width:100%;background: #C0E5FF;color: #0F73B9;"/></form>', });
  });

  // 添加音乐
  $("#btnAlert4").click(function () {
    $.DialogBySHF.Alert({ Width: 240, Height: 120, Title: "添加音乐", Content: '<form id="form4" method="post" enctype="multipart/form-data"><input type="file" name="music"  style="width:100%;" /><input type="submit" value="确定" onclick="uploadmusic()" style="margin-top:15px;margin-left:0px;width:100%;background: #C0E5FF;color: #0F73B9;"/></form>', });
  });
});

// 上传文字
function uploadtext(){
  var formData1 = new FormData($( "#form1" )[0]); 
  $.ajax({  
    url: "<?php echo U('Personal/add_txt');?>" ,  
    type: 'POST',  
    data: formData1,  
    async: true, 
    cache: false,  
    contentType: false,  
    processData: false,  
    success: function (e) {  
      console.log(e.msg);  
    },  
    error: function (e) {  
      alert(e.msg);  
    }  
  });  
}

// 上传视频
function uploadvideo(){
  var formData2 = new FormData($("#form2" )[0]);

  $.ajax({  
    url: "<?php echo U('Personal/add_video');?>" ,  
    type: 'POST',  
    data: formData2,  
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
      console.log(e.msg);  
    },  
    error: function (e) {  
      alert(e.msg);  
    }  
  });  
}



// 上传图片
function uploadpic(){
    var formData3 = new FormData($("#form3" )[0]);
    $.ajax({  
      url: "<?php echo U('Personal/add_pic');?>" ,  
      type: 'POST',  
      data: formData3,  
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
        console.log(e.msg);  
      },  
      error: function (e) {  
        alert(e.msg);  
      }  
    });  
}
// 上传音乐
function uploadmusic(){
  var formData4 = new FormData($("#form4" )[0]); 
  $.ajax({  
    url: "<?php echo U('Personal/add_music');?>" ,  
    type: 'POST',  
    data: formData4,  
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
      console.log(e.msg); 
    },  
    error: function (e) {  
      alert(e.msg);  
    }  
  });  
}
// 上传diy
function set(){
  var url = "<?php echo U('Personal/set');?>";
  var url2 = "<?php echo U('Personal/diydetail',array('name'=>$name));?>";
  $.post(url,function(e){
    if(e.status ==1){
      window.location.href=url2; 
    }else{
      alert(e.msg);
    }
  });
}
</script>
</body>
</html>