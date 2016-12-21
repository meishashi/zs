<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title></title>
	<link rel="stylesheet" href="__PUBLIC__/Article/css/news.css" />
	<link rel="stylesheet" href="__PUBLIC__/Article/css/base.css" />
</head>
<body>
	<header>
		<div class="header hid">
			<div class="hd-l l"><img src="__PUBLIC__/Article/images/guanzhu.png"></div>
			<div class="hd-m l">今博士<span><img src="__PUBLIC__/Article/images/shuaxin.png"></span></div>
			<div class="hd-r r"><img src="__PUBLIC__/Article/images/search.png"></div>
		</div>
		<div class="nav">
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><span class=""><?php echo ($val["name"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</header>
	<div class="new">
		<!-- 列表页 -->
		<div class="tab0 news1">
			<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; if(imgNum($val['content']) < 3): ?><a style="color:#000;" href="<?php echo U('Article/detail',array('id'=>$val['id']));?>">
					<div class="news11 hid">
						<div class="l news11-l">
							<p class="p1"><?php echo ($val['title']); ?></p>
							<p class="p2">
								<span>院前汽车</span>
								<span>评论</span>
								<span>8</span>
								<span>点赞</span>
								<span>8</span>
							</p>
						</div> 
						<div class="r news11-r">
							<?php echo oneImg($val['content']);?>
							<!-- <img src="__PUBLIC__/Article/images/news1.jpg"> -->
						</div>
					</div>

					</a>
					<?php else: ?>
					<a style="color:#000;" href="<?php echo U('Article/detail',array('id'=>$val['id']));?>">

					<div class="news12">
						<p class="p1"><?php echo ($val["title"]); ?></p>
						<p class="p2">
							<?php echo threeImg($val['content']);?>
							<!-- <span><img src="__PUBLIC__/Article/images/news2.jpg"></span>
							<span><img src="__PUBLIC__/Article/images/news3.jpg"></span>
							<span><img src="__PUBLIC__/Article/images/news4.jpg"></span> -->
						</p>
						<p class="p3">
							<span>阿斯顿前</span>
							<span>评论</span>
							<span>228</span>
							<span>15分钟前</span>
						</p>
					</div>
					
				</a><?php endif; endforeach; endif; else: echo "" ;endif; ?>


		</div>
		<div class="tab0">视频</div>
		<div class="tab0">热点</div>
		<div class="tab0">社会</div>
		<div class="tab0">娱乐</div>
		<div class="tab0">军事</div>
	</div>

</body>
<script src="__PUBLIC__/Article/js/jQuery.js"></script>
<script src="__PUBLIC__/Article/js/rem.js"></script>
<script src="__PUBLIC__/Article/js/news.js"></script>

</html>