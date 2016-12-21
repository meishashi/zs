<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv = "Content-Type" content = "text/html;charset = utf-8" />
		<link rel='stylesheet' type='text/css' href='__CSS__/add.css'/>
		<script src='__JS__/jquery-1.7.1.min.js'></script>
		<script src = "__JS__/jquery.validate.js" type = 'text/javascript'></script>
		<script src = "__JS__/jquery.metadata.js" type = 'text/javascript'></script>
		<script src = "__JS__/jquery.validate.messages_cn.js" type = 'text/javascript'></script>
		<script src = "__JS__/check.js" type = 'text/javascript'></script>
	</head>
	<body>
		<form class = "cmxform" id = "deleteIdForm" method = "post" action = "__URL__/deleteAll2">
			<fieldset>
				<legend>批量删除信息</legend>
				<p>
					<label for = "cid_start">起始id</label><em>*</em>
					<input id = "cid_start" name = "id_start" size = "25" class = "{validate:{required:true,messages:{required:'请输入起始id'}}}" />
				</p>
				<p>
					<label for = "cid_end">结束id</label><em>*</em>
					<input id = "cid_end" name = "id_end" size = "25" class = "{validate:{required:true,messages:{required:'请输入结束id'}}}" />
				</p>
				<p>
					<input class = "submit" type = "submit" value = "提交" />
				</p>
			</fieldset>
		</form>
	</body>
</html>