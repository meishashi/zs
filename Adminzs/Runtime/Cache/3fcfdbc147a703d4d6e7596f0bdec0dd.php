<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv = "Content-Type" content = "text/html;charset = utf-8" />
		<link rel='stylesheet' type='text/css' href='__CSS__/bootstrap.min.css'/>
		<script src='__JS__/jquery-1.7.1.min.js'></script>
		<script type = "text/javascript">
			$(function(){
				//全选
				$("#CheckedAll").click(function(){
					$('[name=items[]]:checkbox').attr('checked',true);
				});
				//全不选
				$("#CheckedNo").click(function(){
					$('[name=items[]]:checkbox').attr('checked',false);
				});
				//反选
				$("#CheckedRev").click(function(){
					$('[name=items[]]:checkbox').each(function(){
						this.checked=!this.checked;
					});
				});
				//输出
				$("#send").click(function(){
					$('form').submit();
				});
				$("#go").click(function(){
					var pagego = $('#pagego').attr('value');
					location.href = "__URL__/index?page="+pagego;
					//window.location.href = "http://www.baidu.com";
				});
			})
		</script>
	</head>
	<body>
		<div class = "container-fluid">
			<h4 class = "text-center">全部信息</h4>
			<form action = "__APP__/Delete/deleteAll" method = "post">
				<table class = "table table-bordered text-center">
					<tr><td>选择</td><td>彩链id</td><td>经销商</td><td>修改</td><td>删除</td></tr>
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td>
								<input type = "checkbox" name = "items[]" value = "<?php echo ($vo["ccid"]); ?>" />
							</td>
							<td><?php echo ($vo["ccid"]); ?></td>
							<td><?php echo ($vo["name"]); ?></td>
							<td><a href = "__APP__/Update?ccid=<?php echo ($vo["ccid"]); ?>" target = "_self">修改</a></td>
							<td><a href = "__APP__/Delete?ccid=<?php echo ($vo["ccid"]); ?>" target = "_self">删除</a></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					<?php if(empty($data)): ?><tr><td colspan = "5">数据库当前没有产品信息</td></tr><?php endif; ?>
				</table>
			</form>
				<input type = "button" id = "CheckedAll" value = "全选" />
				<input type = "button" id = "CheckedNo" value = "全不选"  />
				<input type = "button" id = "CheckedRev" value = "反选"  />
				<input type = "submit" id = "send" value = "删除选中项"  />
			<span>
				<a href ="__URL__/index?page=1" >首页</a>&nbsp;&nbsp;&nbsp;
				<?php if(($nowpage != 1)): ?><a href ="__URL__/index?page=<?php echo ($nowpage-1); ?>" >上一页</a>&nbsp;&nbsp;&nbsp;<?php endif; ?>
				
				<?php if(($nowpage != $pageCount)): ?><a href ="__URL__/index?page=<?php echo ($nowpage+1); ?>" >下一页</a>&nbsp;&nbsp;&nbsp;<?php endif; ?>
				<a href ="__URL__/index?page=<?php echo ($pageCount); ?>" >尾页</a>&nbsp;&nbsp;&nbsp;
				共<?php echo ($pageCount); ?>页&nbsp;&nbsp;&nbsp;
				第<?php echo ($nowpage); ?>页&nbsp;&nbsp;&nbsp;
				跳转:第&nbsp;<input type = "text"  id = "pagego" size = "3" />&nbsp;页 
				<button id = "go">Go</button>
			</span>
		</div>
	</body>
</html>