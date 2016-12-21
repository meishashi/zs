<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<title></title>
<link href="__PUBLIC__/meadmin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/meadmin/plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
<![endif]-->
<link href="__PUBLIC__/meadmin/assets/css/main.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/meadmin/assets/css/plugins.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/meadmin/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="__PUBLIC__/meadmin/assets/css/icons.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="__PUBLIC__/meadmin/assets/css/fontawesome/font-awesome.min.css">
<!--[if IE 7]>
<link rel="stylesheet" href="__PUBLIC__/meadmin/assets/css/fontawesome/font-awesome-ie7.min.css">
<![endif]-->
<!--[if IE 8]>
<link href="__PUBLIC__/meadmin/assets/css/ie8.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="__PUBLIC__/meadmin/assets/js/libs/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/assets/js/libs/lodash.compat.min.js"></script>
<script charset="utf-8" src="__PUBLIC__/meadmin/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="__PUBLIC__/meadmin/kindeditor/lang/zh_CN.js"></script>


<!--[if lt IE 9]>
<script src="__PUBLIC__/meadmin/assets/js/libs/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/validation/additional-methods.min.js"></script>

<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/event.swipe/jquery.event.move.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/event.swipe/jquery.event.swipe.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/assets/js/libs/breakpoints.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/respond/respond.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/cookie/jquery.cookie.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/flot/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/blockui/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/noty/jquery.noty.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/noty/layouts/top.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/noty/themes/default.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/bootbox/bootbox.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/assets/js/app.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/assets/js/plugins.js"></script>
<script type="text/javascript" src="__PUBLIC__/meadmin/assets/js/plugins.form-components.js"></script>
<script>
      $(document).ready(function() {
        App.init();
        Plugins.init();
        FormComponents.init();
      });
</script>
<script type="text/javascript" src="__PUBLIC__/meadmin/assets/js/custom.js"></script>
</head>

<body>
<header class="header navbar navbar-fixed-top" role="banner">
  <div class="container">
    <ul class="nav navbar-nav">
      <li class="nav-toggle"> <a href="javascript:void(0);" title=""> <i class="icon-reorder"> </i> </a> </li>
    </ul>
    <a class="navbar-brand" href="<?php echo U('Index/index');?>"> <img src="__PUBLIC__/meadmin/assets/img/logo.png" alt="logo" /> <strong> 今博士后台管理 </strong></a> <a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom"
        data-original-title="Toggle navigation"> <i class="icon-reorder"> </i> </a>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown user"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-male"> </i> <span class="username"> <?php echo ($userinfo["username"]); ?> </span> <i class="icon-caret-down small"> </i> </a>
        <ul class="dropdown-menu">
          <li> <a href="#" data-load="<?php echo u('set/password');?>"> <i class="icon-user"> </i> 修改密码 </a> </li>
          <li class="divider"> </li>
          <li> <a href="<?php echo u('public/logout');?>"> <i class="icon-key"> </i> 退出 </a> </li>
        </ul>
      </li>
    </ul>
  </div>
</header>
<div id="container">
  <div id="sidebar" class="sidebar-fixed">
    <div id="sidebar-content">
      <form class="sidebar-search">
        <div class="input-box">
          <button type="submit" class="submit"> <i class="icon-search"> </i> </button>
          <span>
          <input type="text" placeholder="搜索...">
          </span> </div>
      </form>
      <ul id="nav">
  <li class="current"> <a href="#" data-load="<?php echo U('Index/main');?>"> <i class="icon-dashboard"> </i> 控制台 </a> </li>
<!--   <li> <a href="javascript:void(0);"> <i class="icon-desktop"> </i> 网站管理 </a>
    <ul class="sub-menu">
      <li> <a href="#" data-load="<?php echo U('set/web');?>"><i class="icon-angle-right"> </i> 基础设置 </a> </li>
      <li> <a href="#" data-load="<?php echo U('set/nav');?>"><i class="icon-angle-right"> </i> 导航设置 </a> </li>
      <li> <a href="#" data-load="<?php echo U('set/lunbo');?>"><i class="icon-angle-right"> </i> 轮播设置 </a> </li>
      <li> <a href="#" data-load="<?php echo U('set/addmap');?>"><i class="icon-angle-right"> </i> 网站地图 </a> </li>
    </ul>
  </li> -->

  <li> <a href="javascript:void(0);"> <i class="icon-th-list"> </i> 文章管理 </a>
    <ul class="sub-menu">
      <li> <a href="#" data-load="<?php echo U('Article/cate');?>"> <i class="icon-angle-right"> </i> 文章分类 </a> </li>
      <li> <a href="#" data-load="<?php echo U('Article/article');?>"> <i class="icon-angle-right"> </i> 文章列表 </a> </li>
      <!-- <li> <a href="#" data-load="<?php echo U('Video/video');?>"><i class="icon-angle-right"> </i> 视频列表 </a> </li>
      <li> <a href="#" data-load="<?php echo U('Article/tag');?>"><i class="icon-angle-right"> </i> 标签管理 </a> </li>
      <li> <a href="#" data-load="<?php echo U('Article/onepage');?>"><i class="icon-angle-right"> </i> 单页管理 </a> </li> -->
      <!-- <li> <a href="#" data-load="<?php echo U('Article/ask');?>"><i class="icon-angle-right"> </i> 问答管理 </a> </li> -->
      <li> <a href="#" data-load="<?php echo U('Article/answer');?>"><i class="icon-angle-right"> </i> 评论管理 </a> </li>
    </ul>
  </li>

<!--   <li> <a href="javascript:void(0);"> <i class="icon-user"> </i> 会员管理 </a>
    <ul class="sub-menu">
      <li> <a href="#" data-load="<?php echo U('member/cate');?>"> <i class="icon-angle-right"> </i> 会员等级 </a> </li>
      <li> <a href="#" data-load="<?php echo U('member/member');?>"> <i class="icon-angle-right"> </i> 会员列表 </a> </li>
      <li> <a href="#" data-load="<?php echo U('member/downlog');?>"> <i class="icon-angle-right"> </i> 下载记录 </a> </li>
      <li> <a href="#" data-load="<?php echo U('member/log');?>"><i class="icon-angle-right"> </i> 登录日志 </a> </li>
    </ul>
  </li> -->


<!--   <li> <a href="javascript:void(0);"> <i class="icon-user"> </i> 代理管理 </a>
    <ul class="sub-menu">
      <li> <a href="#" data-load="<?php echo U('agent/agent');?>"> <i class="icon-angle-right"> </i> 代理列表 </a> </li>
      <li> <a href="#" data-load="<?php echo U('agent/log');?>"><i class="icon-angle-right"> </i> 登录日志 </a> </li>
    </ul>
  </li> -->
  

<!--   <li> <a href="javascript:void(0);"> <i class="icon-trophy"> </i> 活动设置 </a>
    <ul class="sub-menu">
      <li> <a href="#" data-load="<?php echo U('Enroll/lists');?>"> <i class="icon-angle-right"> </i> 活动列表 </a> </li>
    </ul>
  </li> -->


<!--   <li> <a href="javascript:void(0);"> <i class="icon-comments"> </i> 微信设置 </a>
    <ul class="sub-menu">
      <li> <a href="#" data-load="<?php echo U('wechat/set');?>"> <i class="icon-angle-right"> </i> 公众号配置 </a> </li>
      <li> <a href="#" data-load="<?php echo U('wechat/cate');?>"> <i class="icon-angle-right"> </i> 自定义菜单 </a> </li>
      <li> <a href="#" data-load="<?php echo U('wechat/key');?>"> <i class="icon-angle-right"> </i> 关键词 </a> </li>
      <li> <a href="#" data-load="<?php echo U('wechat/article');?>"> <i class="icon-angle-right"> </i> 图文管理 </a> </li>
      <li> <a href="#" data-load="<?php echo U('wechat/member');?>"> <i class="icon-angle-right"> </i> 微信会员 </a> </li>
    </ul>
  </li> -->

<!--   <li> <a href="javascript:void(0);"> <i class="icon-briefcase"> </i> 权限管理 </a>
    <ul class="sub-menu">
      <li> <a href="#" data-load="<?php echo U('User/index');?>"> <i class="icon-angle-right"> </i> 用户列表 </a> </li>
      <li> <a href="#" data-load="<?php echo U('Part/index');?>"> <i class="icon-angle-right"> </i> 角色列表 </a> </li>
      <li> <a href="#" data-load="<?php echo U('Node/index');?>"> <i class="icon-angle-right"> </i> 权限列表 </a> </li>
    </ul>
  </li> -->

  <li> <a href="javascript:void(0);"> <i class="icon-folder-open-alt"> </i> 其他管理 </a>
    <ul class="sub-menu">
      <li> <a href="#" data-load="<?php echo U('set/link');?>"> <i class="icon-angle-right"> </i> 友情链接 </a> </li>
      <li> <a href="#" data-load="<?php echo U('set/password');?>"> <i class="icon-angle-right"> </i> 修改密码 </a> </li>
    </ul>
  </li>
</ul>
      <div class="sidebar-widget align-center">
        <div class="btn-group" data-toggle="buttons" id="theme-switcher">
          <label class="btn active">
            <input type="radio" name="theme-switcher" data-theme="bright">
            <i class="icon-sun"> </i> 白天 </label>
          <label class="btn">
            <input type="radio" name="theme-switcher" data-theme="dark">
            <i class="icon-moon"> </i> 夜晚 </label>
        </div>
      </div>
    </div>
    <div id="divider" class="resizeable"> </div>
  </div>
  <div id="content">
    <div class="container">
      <div class="crumbs">
        <ul id="breadcrumbs" class="breadcrumb">
          <li> <i class="icon-home"> </i> <a href="#" data-load="<?php echo u('index/main');?>"> 后台首页 </a> </li>
          <li class="current"> <a href="#" data-load="<?php echo u('index/main');?>" id="m-crumb"> <i class="icon-dashboard"> </i> 控制台 </a> </li>
        </ul>
      </div>
      <div class="page-header">
        <div class="page-title">
          <h3> <i class="icon-dashboard"> </i> 控制台 </h3>
        </div>
      </div>
      <div id="loader"></div>
    </div>
  </div>
</div>
<div class="bootbox modal fade in" tabindex="-1" role="dialog" aria-hidden="false" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="bootbox-close-button close" style="margin-top: -10px;">×</button>
        <div class="bootbox-body">Hello world!</div>
      </div>
      <div class="modal-footer">
        <button data-bb-handler="ok" type="button" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	   
  //连接的处理
  var nav = $('#nav').find('a[data-load]') ;  
  $(nav).click(function(e){
    //样式的处理
		$('#nav').find('li').removeClass('current');
		$(this).parent().parent().parent().addClass('current');
		$(this).parent().addClass('current');

	  var url = $(this).data('load');	
    var name = $(this).html().replace('<i class="icon-angle-right"> </i>','');
    $('.page-title h3').html(name);
    $('#m-crumb').html(name).attr('data-load',url);
		loader(url);
  })
	
	  
	//自动加载main页面
	var url = "<?php echo U('Index/main');?>";  
	loader(url);
	
	//加载页面  
	function loader(url){
		$(".open").removeClass("current");
		$('#loader').empty().load(url,function(){
		  $(".open").addClass("current");
			initloader(url);
		});	
	}
	
	//load页面 初始化
	function initloader(url){
		//初始化
		//App.init();
      	//Plugins.init();
      	//FormComponents.init()
		//初始化Widgets
		//InitiateWidgets();
		//加载页面中的处理
		subPage();
	}
	
	//子页面data-load
	function subPage(){
		var subnav = $('.container').find('a[data-load]') ;
		$(subnav).click(function(){
			var url = $(this).data('load');
			loader(url);
		});	
	}
	
	//弹窗
	function mAlert(msg){
    bootbox.alert(msg,
    function() {
       console.log("Alert Callback")
    })
	}

  //弹窗2
  var toast = function(msg,type,model) {
    var mod = model ? model : false ;
    noty({
      text: msg,
      type: type,
      layout: 'top',
      timeout: 2000,
      modal: mod,
      buttons: (type != "confirm") ? false: [{
          addClass: "btn btn-primary",
          text: "确认",
          onClick: function(c) {
              c.close();
              noty({
                  force: true,
                  text: '您选择了"确认"',
                  type: "success",
                  layout: 'top'
              })
          }
      },
      {
          addClass: "btn btn-danger",
          text: "取消",
          onClick: function(c) {
              c.close();
              noty({
                  force: true,
                  text: '您选择了“取消“',
                  type: "error",
                  layout: top
              })
          }
      }]
    });
  }




</script>
</body>
</html>