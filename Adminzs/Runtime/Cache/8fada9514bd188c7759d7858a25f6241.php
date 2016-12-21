<?php if (!defined('THINK_PATH')) exit();?>
  <div class="row">
    <div class="col-md-12">
      <div class="widget box">
        <div class="widget-header">
          <h4><i class="icon-reorder"></i> 列表</h4>
          <div class="toolbar no-padding">
            <div class="btn-group">
              <span class="btn btn-xs"><a href="#" data-load="<?php echo U('Article/cateSet');?>" style="color:#333; text-decoration:none;"><i class="icon-plus"></i> 添加</a></span> 
              <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span> </div>
          </div>
        </div>
        <div class="widget-content">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th width="30">id</th>
                <th>分类名称</th>
                <th>内容列表</th>
                <th>首页导航</th>
                <th>排序</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["name"]); ?></td>
                <td><a href="#" data-load="<?php echo U('Article/article',array('pid'=>$vo['id']));?>">查看</a></td>
                <td><?php if(($vo["is_home"]) == "1"): ?><span style="color:green">是</span><?php else: ?><span style="color:orange">否</span><?php endif; ?></td>
                <td><?php echo ($vo["sort"]); ?></td>
                <td>
                  <a href="#" data-load="<?php echo U('Article/cateSet',array('id'=>$vo['id']));?>" class="btn btn-xs btn-success black" title="" data-original-title="Edit"> <i class="icon-edit"> </i> 编辑</a> 
                  <a href="#" onclick="del(<?php echo ($vo['id']); ?>)" class="btn btn-xs btn-danger black" title="" data-original-title="Delete"> <i class="icon-remove"> </i> 删除</a> </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
	
	//删除
	function del(v){
		if(confirm("您确定要删除吗?")){
			var url = "<?php echo U('Article/cateDel');?>";
			var url2 = "<?php echo U('Article'/cate);?>";
			var data = {'id':v} ;
			$.post(url,data,function(e){
				if(e.status == 1){
					toast(e.msg,'success');
					loader(url2);
					return false;
				}else{
					toast(e.msg,'error');
					return false;
				}	
			},'json')	
		}
	}

</script>