<?php
class PersonalAction extends CommonAction {   
  // 主页
  public function index(){
    $this->assign('name',self::$_userinfo['name']);
    $this->display();
  }
  //照片墙
  public function photo(){
    $img = M('img');// 实例化img对象
    if(IS_POST){
      import('ORG.Net.UploadFile');
      $upload = new UploadFile();// 实例化上传类
      $upload->maxSize  = 92922000;// 设置附件上传大小
      $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->savePath =  './Uploads/picture/';// 设置附件上传目录
      //设置需要生成缩略图，仅对图像文件有效
      $upload->thumb              = true;
      // 设置引用图片类库包路径
      $upload->imageClassPath     = 'ORG.Util.Image';
      //设置需要生成缩略图的文件后缀
      $upload->thumbPrefix        = 'm_';  
      // 设置缩略图最大宽度
      $upload->thumbMaxWidth      = '400';
      //设置缩略图最大高度
      $upload->thumbMaxHeight     = '400';
      //设置上传文件规则
      $upload->saveRule           = 'uniqid';
      //删除原图
      $upload->thumbRemoveOrigin  = true;


      if(!$upload->upload()) {// 上传错误提示错误信息
        $this->error($upload->getErrorMsg());
      }else{// 上传成功 获取上传文件信息
        $file =  $upload->getUploadFileInfo();
      }
      
      $data['savename'] = "m_".$file[0]['savename'];
      $data['uid'] = self::$_uid;
      $data['ctime'] = time();
      // 保存表单数据 包括附件数据
      $img->create(); // 创建数据对象
      $result = $img->add($data); // 写入用户数据到数据库
      if($result){
        $info['status'] = 1;
        $info['msg'] = '上传成功';
        $this->ajaxReturn($info);
      }else{
        $info['status'] = 0;
        $info['msg'] = '上传失败';
        $this->ajaxReturn($info);
      }
    }else{
      $arr = $img->order('ctime desc')->limit(15)->select();
      $this->assign('data',$arr);     
      $this->display();
    }
        
  }

  // diy添加页
  public function diy(){
    $this->assign('name',self::$_userinfo['name']);
    $this->display();
  }
  // 添加文本
  public function add_txt(){
    if(!empty($_POST['text'])){
      $_SESSION['text']=$this->_post('text');
      $_SESSION['cid1']=1;

      $info['status'] = 1;
      $info['msg'] = '添加文字成功';
      $this->ajaxReturn($info);
    }else{
      $info['status'] = 0;
      $info['msg'] = '添加文字失败';
      $this->ajaxReturn($info);
    }
  }

  // 上传视频
  public function add_video(){
    import('ORG.Net.UploadFile');
    //导入上传类
    $upload = new UploadFile();// 实例化上传类
    //设置上传文件大小
    $upload->maxSize            = 92922000;
    //设置上传文件类型
    $upload->allowExts          = explode(',', 'mp4,avi,wmv,3gp');
    //设置附件上传目录
    $upload->savePath           = './Uploads/video/';
    //设置上传文件规则
    $upload->saveRule           = 'uniqid';
    //删除原视频
    // $upload->thumbRemoveOrigin  = true;


    //如果上传不成功
    if (!$upload->upload()){
        //捕获上传异常
      $this->error($upload->getErrorMsg());
    }else{
        //取得成功上传的文件信息
      $uploadList = $upload->getUploadFileInfo();
        //视频名赋值给 字段video
      $_POST['video'] = $uploadList[0]['savename'];
      $_POST['old_video'] = $uploadList[0]['name'];
    }
    
    if (!empty($_POST['video'])){
      $_SESSION['cid2']=1;
      $_SESSION['video']=$_POST['video'];
      $_SESSION['old_video']=$_POST['old_video'];

      $info['status'] = 1;
      $info['msg'] = '添加视频成功';
      $this->ajaxReturn($info);
    }else{
      $info['status'] = 0;
      $info['msg'] = '添加视频失败';
      $this->ajaxReturn($info);
    }
  }

  // 上传图片
  public function add_pic(){
    import('ORG.Net.UploadFile');
    //导入上传类
    $upload = new UploadFile();// 实例化上传类
    //设置上传文件大小
    $upload->maxSize            = 92922000;
    //设置上传文件类型
    $upload->allowExts          = explode(',', 'jpg,gif,png,jpeg');
    //设置附件上传目录
    $upload->savePath           = './Uploads/picture/';
    //设置需要生成缩略图，仅对图像文件有效
    $upload->thumb              = true;
    // 设置引用图片类库包路径
    $upload->imageClassPath     = 'ORG.Util.Image';
    //设置需要生成缩略图的文件后缀
    $upload->thumbPrefix        = 'm_';  //生产2张缩略图
    // 设置缩略图最大宽度
    $upload->thumbMaxWidth      = '400';
    //设置缩略图最大高度
    $upload->thumbMaxHeight     = '400';
    //设置上传文件规则
    $upload->saveRule           = 'uniqid';
    //删除原图
    $upload->thumbRemoveOrigin  = true;

    //如果上传不成功
    if (!$upload->upload()){
      //捕获上传异常
      $this->error($upload->getErrorMsg());
    }else{
      //取得成功上传的文件信息
      $uploadList = $upload->getUploadFileInfo();               
      //导入图片类
      // import('ORG.Util.Image');               
      //给m_缩略图添加水印, Image::water('原文件路径','水印图片地址')
      // Image::water($uploadList[0]['savepath'] . 'm_' . $uploadList[0]['savename'], APP_PATH.'Tpl/Public/Images/logo.png');

      //图片名赋值给 字段image
      $_POST['img'] = 'm_'.$uploadList[0]['savename'];
      $_POST['old_img'] = $uploadList[0]['name'];
    }
    
    if (!empty($_POST['img'])){
      $_SESSION['cid3']=1;
      $_SESSION['img']=$_POST['img'];
      $_SESSION['old_img']=$_POST['old_img'];

      $info['status'] = 1;
      $info['msg'] = '添加图片成功';
      $this->ajaxReturn($info);
    }else{
      $info['status'] = 0;
      $info['msg'] = '添加图片失败';
      $this->ajaxReturn($info);
    }
  }

  //上传音乐
  public function add_music(){
    import('ORG.Net.UploadFile');
    //导入上传类
    $upload = new UploadFile();// 实例化上传类
    //设置上传文件大小
    $upload->maxSize            = 92922000;
    //设置上传文件类型
    $upload->allowExts          = explode(',', 'mp3,wav,ogg,ape');
    //设置附件上传目录
    $upload->savePath           = './Uploads/music/';
    //设置上传文件规则
    $upload->saveRule           = 'uniqid';
    //删除原音频
    // $upload->thumbRemoveOrigin  = true;


    //如果上传不成功
    if (!$upload->upload()){
        //捕获上传异常
      $this->error($upload->getErrorMsg());
    }else{
        //取得成功上传的文件信息
      $uploadList = $upload->getUploadFileInfo();
        //音频名赋值给 字段radio
      $_POST['music'] = $uploadList[0]['savename'];
      $_POST['old_music'] = $uploadList[0]['name'];
    }
    
    if (!empty($_POST['music'])){
      $_SESSION['cid4']=1;
      $_SESSION['music']=$_POST['music'];
      $_SESSION['old_music']=$_POST['old_music'];

      $info['status'] = 1;
      $info['msg'] = "添加音乐成功";
      $this->ajaxReturn($info);
    }else{
      $info['status'] = 0;
      $info['msg'] = "添加音乐失败";
      $this->ajaxReturn($info);
    }
  }

  // 保存
  public function set(){
    $diy = M('diy');
    $data['text'] = $_SESSION['text'];
    $data['video'] = $_SESSION['video'];
    $data['img'] = $_SESSION['img'];
    $data['music'] = $_SESSION['music'];
    $data['ctime'] = time();
    $data['uid'] = self::$_uid;
    $data['uname'] = self::$_userinfo['name'];

    $where['uid']=self::$_uid;
    $arr = $diy->where($where)->find();
    if($arr){
      $list = $diy->where($where)->save($data);                         
    }else{              
      $list = $diy->add($data);                     
    }  
    if($list !== false){                    
      unset($_SESSION['cid1']);
      unset($_SESSION['cid2']);
      unset($_SESSION['cid3']);
      unset($_SESSION['cid4']);

      $info['status'] = 1;
      $info['msg'] = 'DIY成功';
      $this->ajaxReturn($info);
    }else{
      $info['status'] = 0;
      $info['msg'] = 'DIY失败';
      $this->ajaxReturn($info);
    }                                   
  }

  public function diydetail(){             
    $diy = M('Diy');
    $where['uname'] = $this->_get('name');
    // dump($where);
    $arr = $diy -> where($where) -> find();
    // dump($arr);exit;
    if(!$arr){                                                 
      $this->success('<script>alert("DIY不存在！")</script>',U('Personal/diy'));
    }   
    $this->assign('name',self::$_userinfo['name']);                 
    $this->assign('data',$arr);                 
    $this->display();                       
  }        

}