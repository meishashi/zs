<?php if (!defined('THINK_PATH')) exit();?>
 <div class="row">
    <div class="col-md-12">
      <div class="widget box">
        <div class="widget-header">
          <h4> <i class="icon-reorder"> </i> 编辑 </h4>
        </div>
        <div class="widget-content">
          <form class="form-horizontal row-border" id="signupForm" method="post" action="#">
            <div class="form-group">
              <label class="col-md-3 control-label"> 上级分类 <span class="required"> * </span> </label>
              <div class="col-md-6">
                <select class="form-control" name="pid">
                	<?php echo ($tree); ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label"> 分类名称 <span class="required"> * </span> </label>
              <div class="col-md-6">
                <input type="text" name="name" class="form-control required" title="不能为空！" value="<?php echo ($data["name"]); ?>">
              </div>
            </div>

            <!-- <div class="form-group">
              <label for="pic1" class="col-sm-3 control-label">缩略图</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="img" name="img" value="<?php echo ($data["img"]); ?>" placeholder="请上传 80*80 png图片" />
              </div>
              <div class="col-sm-3"><a href="#" class="btn btn-default" id="upload" >上传图片</a></div>
              <div class="col-sm-3"><img src="{$data.img}" id="pic" /></div>
              <div style="display:none;"><textarea name="content" class="form-control">{$data.content}</textarea></div>
            </div> -->
            
            <div class="form-group">
              <label class="col-md-3 control-label"> 排序 <span class="required">  </span> </label>
              <div class="col-md-3">
                <input type="text" name="sort" class="form-control" title="" value="<?php echo ($data["sort"]); ?>" placeholder="数越小越靠前">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label"> 是否在首页显示 <span class="required">  </span> </label>
              <div class="col-md-3">
                <select name="is_home" class="form-control">
                  <option value="0" <?php if(($data["is_home"]) == "0"): ?>selected<?php endif; ?> >否</option>
                  <option value="1" <?php if(($data["is_home"]) == "1"): ?>selected<?php endif; ?> >是</option>
                </select>
              </div>
            </div>
            
            <div class="form-actions">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-3">
            	   <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" />
                <input type="submit" value="提交" class="btn btn-primary">
                <a href="#" data-load="<?php echo U('Article/cate');?>" class="btn btn-warning">返回</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
	//提交
	$("#signupForm").validate({
    submitHandler:function(form){
      var url = "<?php echo U('Article/cateSet');?>";
			var url2 = "<?php echo U('Article/cate');?>";
			var data = $('#signupForm').serialize();
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
			return false;
        }
    });


  //编辑器和图片上传
  $(function($) {
      var editor = KindEditor.create('textarea[name="content"]',{
        allowFileManager : true ,
      afterBlur: function () { this.sync();}  
    });
    $('#upload').click(function() {
      editor.loadPlugin('image', function() {
        editor.plugin.imageDialog({
          fileUrl : $('#img').val(),
          fileUrl : $('#pic').attr('src',''),
          clickFn : function(url, title) {
            if(url.indexOf("http") > -1){
              $('#img').val(url);
              $('#pic').attr('src',url);
            }else{
              $('#img').val(url);
              $('#pic').attr('src',url);
            }
            editor.hideDialog();
          }
        });
      });
    });
  });

</script>