<?php if (!defined('THINK_PATH')) exit();?>  <div class="row">
    <div class="col-md-12">
      <div class="widget box">
        <div class="widget-header">
          <h4> <i class="icon-reorder"> </i> 编辑 </h4>
          <div class="toolbar no-padding">
            <div class="btn-group"> <span class="btn btn-xs widget-collapse"> <i class="icon-angle-down"> </i> </span> </div>
          </div>
        </div>
        <div class="widget-content">
          <form class="form-horizontal row-border" id="signupForm" >
            <div class="form-group">
              <label class="col-md-3 control-label"> 分类: </label>
              <div class="col-md-6">
                <select name="pid" class="form-control">
                  
                    <?php echo ($tree); ?>
                
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label"> 标题: </label>
              <div class="col-md-6">
                <input class="form-control" type="text" name="title" value ="<?php echo ($data["title"]); ?>" />
              </div>
            </div>

<!--             <div class="form-group">
              <label class="col-md-3 control-label"> 标签: </label>
              <div class="col-md-6">
                <input class="form-control" type="text" name="keywords" value ="{$data.keywords}" /><p style="color:red;">*请使用空格做标签的分隔符</p>
              </div>
            </div> -->
            
            <!-- <div class="form-group">
              <label class="col-md-3 control-label"> 作者: </label>
              <div class="col-md-6">
                <input class="form-control" type="text" name="author" value ="{$data.author}" />
              </div>
            </div> -->
            <div class="form-group" style="display:none;">
              <label for="pic1" class="col-sm-3 control-label">缩略图</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="img" name="img" value="<?php echo ($data["img"]); ?>" placeholder="图片尺寸 333*230" />
              </div>
              <div class="col-sm-3"><a href="#" class="btn btn-default" id="upload" >上传图片</a></div>
              <div class="col-sm-3"><img src="<?php echo ($data["img"]); ?>" id="pic" width="150" /></div>
            </div>
            <!-- <div class="form-group">
              <label class="col-md-3 control-label"> 简介: </label>
              <div class="col-md-6">
                <textarea name="summary" rows="5" class="form-control"><?php echo ($data["summary"]); ?></textarea>
              </div>
            </div> -->

            <div class="form-group">
              <label class="col-md-3 control-label"> 内容: </label>
              <div class="col-md-6">
                <textarea name="content" class="form-control"><?php echo ($data["content"]); ?></textarea>
              </div>
            </div>

            <!-- <div class="form-group">
              <label class="col-md-3 control-label"> 是否推荐: </label>
              <div class="col-md-2">
                <select class="form-control" name="ishome">
                	<option value="0" <?php if(($data["ishome"]) == "0"): ?>selected<?php endif; ?> >否</option>
                    <option value="1" <?php if(($data["ishome"]) == "1"): ?>selected<?php endif; ?> >是</option>
                </select>
              </div>
            </div> -->

            <div class="form-group">
              <label class="col-md-3 control-label"> 是否置顶: </label>
              <div class="col-md-2">
                <select class="form-control" name="istop">
                  <option value="0" <?php if(($data["istop"]) == "0"): ?>selected<?php endif; ?> >否</option>
                  <option value="1" <?php if(($data["istop"]) == "1"): ?>selected<?php endif; ?> >是</option>
                </select>
              </div>
            </div>

            <div class="form-actions">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-2">
                <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" />
                <button type="submit" class="btn btn-primary">提交</button>
                <a href="#" data-load="<?php echo U('Article/article');?>" class="btn btn-warning">返回</a> 
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
    var url = "<?php echo U('Article/articleSet');?>";
		var url2 = "<?php echo U('Article/article');?>";
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