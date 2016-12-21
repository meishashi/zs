<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>修改密码</title>

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
      padding-top:60px;
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
      line-height:25px;
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
    <div>
      <a href="javascript:history.go(-1);"><img src="__IMG__/return1.png" style="width:15%;margin-left:13px;margin-top:10px;" /></a>
    </div>
  </header>
  <center>
    <div><img src="__IMG__/cm.png" /></div>
    <div class="top">	
      <form id="form" method="post">	
        <div><?php echo username($data);?></div>
        <div class="bg"><input type="password" name="pwd" id="pwd" placeholder="请输入旧密码" /></div>
        <span id="pwds"></span>

        <div class="bg"><input type="password" name="password" id="password" placeholder="请输入新密码" /></div>
        <span id="passwords"></span>

        <div class="bg"><input type="password" name="repassword" id="repassword" placeholder="请确认新密码" /></div>
        <span id="repasswords"></span>
        <br/>
        <input type="button" value="" name="sub" class="sub" onclick="set()">
      </form>			 		
    </div>
  </center>
  <!--------------------主体部分结束---------------------->
  <!--[if (gte IE 9)|!(IE)]><!-->
  <script src="__JS__/jquery.min.js"></script>
  <!--<![endif]-->
    <!--[if lte IE 8 ]>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <![endif]-->
    <script>
      var pwdstatus = 0;
      var passwordstatus = 0;
      var repasswordstatus = 0;
    // 验证密码
    $("#pwd").blur(function(){
      var pwd = $('#pwd').val();
      if(pwd.length!=0&&pwd.length<6){
        pwdstatus = 0;
        $('#pwds').css({"font-size":"12px","color":"red"}).html("*不能少于6个字符");
      }else{
        var url3 = "<?php echo U('Public/checkpwd');?>";
        var data = {'pwd':pwd};
        $.post(url3,data,function(e){
          if(e.status == 1){
            pwdstatus = 1;
            $('#pwds').empty();
            console.log(e.msg);
            return false;
          }else{
            pwdstatus = 0;
            console.log(e.msg);
            $('#pwds').css({"font-size":"12px","color":"red"}).html("*密码错误");
            return false;
          }   
        },'json');
      }
    });
    // 验证密码长度
    $("#password").blur(function(){
      var password = $('#password').val();
      if(password.length!=0&&password.length<6){
        passwordstatus = 0;
        $('#passwords').css({"font-size":"12px","color":"red"}).html("*密码不能少于6个字符");
      }else{
        var pwd = $("#pwd").val();
        if(password == pwd){
          passwordstatus = 0;
          $('#passwords').css({"font-size":"12px","color":"red"}).html("*不能和原密码一样");
        }else{
          passwordstatus = 1;
          $('#passwords').empty();
        }
        
      }
    });
    // 验证确认密码
    $("#repassword").blur(function(){
      var password = $('#password').val();
      var repassword = $('#repassword').val();
      if(password == repassword){
        repasswordstatus = 1;
        $('#repasswords').empty();
      }else{
        rerepasswordstatus = 0;
        $('#repasswords').css({"font-size":"12px","color":"red"}).html("*两次密码不一样");
      }
    });
    // 提交表单
    function set(){
      if(pwdstatus == 0){
        $("#pwd").focus();
        return false;
      }
      if(passwordstatus == 0){
        $("#password").focus();
        return false;
      }
      if(repasswordstatus == 0){
        $("#repassword").focus();
        return false;
      }
      var formData = new FormData($( "#form" )[0]);
      var url2 = "<?php echo U('Public/login');?>"
      $.ajax({  
        url: "<?php echo U('Public/set');?>" ,  
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
</body>
</html>