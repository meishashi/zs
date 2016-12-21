<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv = "Content-Type" content = "text/html;charset = utf-8" />
		<link rel='stylesheet' type='text/css' href='__CSS__/bootstrap.min.css'/>
	</head>
	<body>
		<div class = "container-fluid">
			<h4 class = "text-center">修改信息</h4><a href = "" onclick = "history.back()">返回</a>
			<form action = "__URL__/edit" method = "post">
				<div>彩链id：<?php echo ($data["ccid"]); ?><input type = "hidden" value = "<?php echo ($data["ccid"]); ?>" name = "ccid" /></div>
				<div>经销商：<input type = "text" value = "<?php echo ($data["name"]); ?>" name = "name" /></div>
				<input type = "submit" value = "提交修改" class = "btn btn-primary" />
			</form>
		</div>
	</body>
</html>