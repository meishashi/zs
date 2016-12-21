<?php if (!defined('THINK_PATH')) exit();?>
  <div class="row row-bg">
    <div class="col-sm-6 col-md-3">
      <div class="statbox widget box box-shadow">
        <div class="widget-content">
          <div class="visual blue"> <i class=" icon-folder-open"> </i> </div>
          <div class="title"> 文章 </div>
          <div class="value"> <?php echo ($article); ?> </div>
          <a class="more" href="#" data-load="<?php echo u('Article/article');?>"> 查看更多 <i class="pull-right icon-angle-right"> </i> </a> </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="statbox widget box box-shadow">
        <div class="widget-content">
          <div class="visual green"> <i class=" icon-folder-open"> </i> </div>
          <div class="title"> 作品 </div>
          <div class="value"> <?php echo ($goods); ?> </div>
          <a class="more" href="#" data-load="<?php echo u('goods/lists');?>"> 查看更多 <i class="pull-right icon-angle-right"> </i> </a> </div>
      </div>  
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="statbox widget box box-shadow">
        <div class="widget-content">
          <div class="visual yellow"> <i class=" icon-folder-open"> </i> </div>
          <div class="title"> Flash </div>
          <div class="value"> <?php echo ($flash); ?> </div>
          <a class="more" href="#" data-load="<?php echo u('Article/article',array('pid'=>45));?>"> 查看更多 <i class="pull-right icon-angle-right"> </i> </a> </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="statbox widget box box-shadow">
        <div class="widget-content">
          <div class="visual red"> <i class="icon-folder-open"> </i> </div>
          <div class="title"> 留言 </div>
          <div class="value"> <?php echo ($feelback); ?> </div>
          <a class="more" href="#" data-load="<?php echo u('Article/ask');?>"> 查看更多 <i class="pull-right icon-angle-right"> </i> </a> </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="widget box">
        <div class="widget-header">
          <h4> <i class="icon-reorder"> </i> 登录日志( <span class="blue"> 30+ </span> ) </h4>
          <div class="toolbar no-padding">
            <div class="btn-group"> <span class="btn btn-xs widget-collapse"> <i class="icon-angle-down"> </i> </span> </div>
          </div>
        </div>
        <div class="widget-content">
          <div id="chart_filled_blue" class="chart">
            <table class="table table-hover table-striped table-bordered table-highlight-head">
              <thead>
                <tr>
                  <th width="10%"> # </th>
                  <th> 用户名 </th>
                  <th> IP </th>
                  <th> 登录时间 </th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td> <?php echo ($vo["id"]); ?> </td>
                    <td> <?php echo ($vo['admin_name']); ?> </td>
                    <td> <?php echo ($vo["ip"]); ?>  </td>
                    <td> <?php echo (date("Y-m-d H:i:s",$vo["ctime"])); ?>  </td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
var href = $('.container').find('a[data-load]');
	$(href).click(function(e){
	    var url = $(this).data('load') ;	
	    loader(url);
	})
</script>