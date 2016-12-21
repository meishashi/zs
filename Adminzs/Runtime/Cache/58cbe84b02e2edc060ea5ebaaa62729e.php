<?php if (!defined('THINK_PATH')) exit();?>  <div class="row">
    <div class="col-md-12">
      <div class="widget box">
        <div class="widget-header">
          <h4> <i class="icon-reorder"> </i> 列表 </h4>
          <div class="toolbar no-padding">
            <div class="btn-group"> 
              <span class="btn btn-xs"><a href="#" data-load="<?php echo U('Article/articleSet');?>" style="color:#333; text-decoration:none;"><i class="icon-plus"></i> 添加</a></span> 
              <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span></div>
          </div>
        </div>
        <div class="widget-content">
          <table class="table table-hover table-striped table-bordered table-highlight-head">
            <thead>
              <tr>
                <th width="5%"> id </th>
                <th width="10%"> 分类 </th>
                <!-- <th width="10%"> 缩率图 </th> -->
                <th> 标题 </th>
                <!-- <th width="10%"> 关键词 </th> -->
                <!-- <th width="5%"> 是否推荐 </th> -->
                <th width="5%"> 是否置顶 </th>
                <th width="10%"> 发布时间 </th>
                <th width="20%"> 操作 </th>
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td> <?php echo ($vo["id"]); ?> </td>
                <td> <a href="#" data-load="<?php echo U('Article/article',array('pid'=>$vo['pid']));?>"><?php echo articleClassName($vo['pid']);?> </a></td>
                <!-- <td> <img src="{$vo.img}" /> </td> -->
                <td> <a href="<?php echo U('Home/index/newsDetail',array('id'=>$vo['id']));?>" target="_blank"><?php echo ($vo["title"]); ?> </a></td>
                <!-- <td> {$vo.keywords} </td> -->
                <!-- <td> <?php if(empty($vo["ishome"])): ?>否<?php else: ?><span style="color:#F90">是</span><?php endif; ?> </td> -->
                <td> <?php if(empty($vo["istop"])): ?>否<?php else: ?><span style="color:#F90">是</span><?php endif; ?> </td>
                <td> <?php echo (date("Y-m-d",$vo["ctime"])); ?> </td>
                <td width="15%">
                  <a href="#" data-load="<?php echo U('Article/articleSet',array('id'=>$vo['id']));?>" class="btn btn-success btn-xs black" title="" data-original-title="Edit"> <i class="icon-edit"> </i> 编辑</a> 
                  <a href="#" onclick="del(<?php echo ($vo['id']); ?>)" class="btn btn-xs btn-danger black" title="" data-original-title="Delete"> <i class="icon-remove"> </i> 删除</a> </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
          <div class="row">
            <div class="table-footer">
              <div class="col-md-6">
                <div class="table-actions">
                  共<?php echo ($count); ?>条
                </div>
              </div>
              <div class="col-md-6">
                <ul class="pagination">
                  <?php echo ($page); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  //删除
  function del(v){
    if(confirm("您确定要删除吗?")){
      var url = "<?php echo U('Article/articleDel');?>";
      var url2 = "<?php echo U('Article/article');?>";
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