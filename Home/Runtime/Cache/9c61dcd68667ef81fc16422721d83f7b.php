<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title></title>
<!-- 	<link rel="stylesheet" href="__PUBLIC__/Article/css/news.css" />
	<link rel="stylesheet" href="__PUBLIC__/Article/css/base.css" /> -->
	<style>
		body{
			width:100%;
		}
		.content{
			width:100%;
		}
		.content img{
			width:100%;
		}
	</style>
</head>
<body>
	<div>
		<?php echo ($result['title']); ?>
	</div>
	<div>
		<!-- <?php echo ($result['content']); ?> -->
	</div>
	<div>
		<form id="Formdata">
			<textarea name="pinglun" id="pinglun" cols="30" rows="10"></textarea>
			<input type="button" value="提交评论" onclick="tijiao(<?php echo ($_GET['id']); ?>)">
		</form>
	</div>
</body>
<script src="__PUBLIC__/Article/js/jQuery.js"></script>
<script src="__PUBLIC__/Article/js/rem.js"></script>
<script src="__PUBLIC__/Article/js/news.js"></script>
<script>
	function tijiao(id){
		var id = id;
		var pinglun = $('#pinglun').val();

		// var data = new FormData($("#Formdata" )[0]);
		$.ajax({  
			url: "<?php echo U('Article/addPinglun');?>" ,  
			type: 'POST',  
			data: {"article_id":id,"pinglun":pinglun},  
			dataType: "json",
			async: true, 
			cache: false,  
			// contentType: false,  
			// processData: false,  
			beforeSend: function () {
				$("body").append('<div id="pload" style="position:fixed;top:30%;z-index:1200;background:url(__IMG__/statusss.gif) top center no-repeat;width:100%;height:140px;margin:auto auto;"></div>');
			},
			complete: function () {
				$("#pload").remove();
			},  
			success: function (e) {  
				if(e.status == 1){
					alert(e.msg);
				}else{
					alert(e.msg);
				}
			},  
			error: function (e) {  
				alert(e.msg);  
			}  
		});  
	}
</script>
</html>