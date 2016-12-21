<?php
class PublicAction extends Action {
//登陆
  public function login(){
    if(IS_POST){
      $user = M('user');
      $post['name'] = trim($this->_post('name'));
      $post['pwd'] = md5(trim($this->_post('pwd')));
      $result = $user -> where($post) -> find();
      if($result){
        $_SESSION['user']['name'] = $result['name'];
        $_SESSION['user']['id'] = $result['id'];

        $info['status'] = 1;
        $info['msg'] = 'ok';
        $this->ajaxReturn($info);
      }else{
        $info['status'] = 0;
        $info['msg'] = 'error';
        $this->ajaxReturn($info);
      }
    }else{
      $this->display();
    }
  }

    //注册
  public function register(){
    if(IS_POST){
      $user = M('user');
      $post['name'] = trim($this->_post('name'));
      $post['pwd'] = md5(trim($this->_post('pwd')));
      $post['ctime'] = time();
      $result = $user->add($post);
      if($result){
        $info['status'] = 1;
        $info['msg'] = 'ok';
        $this->ajaxReturn($info);
      }else{
        $info['status'] = 0;
        $info['msg'] = 'error';
        $this->ajaxReturn($info);
      }
    }else{
      $this->display();
    }
  }
  // 检查用户名
  public function checkname(){
    $user = M('user');
    $post['name'] = trim($this->_post('name'));

    $result = $user->where($post)->find();
    if($result){
      $info['status'] = 0;
      $info['msg'] = 'error';
      $this->ajaxReturn($info);
    }else{
      $info['status'] = 1;
      $info['msg'] = 'ok';
      $this->ajaxReturn($info);
    }
  }

  // 修改密码
  public function set(){
    if(IS_POST){
      $user = M('user');
      $data['pwd'] = md5(trim($this->_post('password')));

      $result = $user->where(array('uid'=>$_SESSION['user']['id']))->save($data);
      if($result){
        $info['status'] = 1;
        $info['msg'] = 'ok';
        $this->ajaxReturn($info);
      }else{
        $info['status'] = 0;
        $info['msg'] = 'error';
        $this->ajaxReturn($info);
      }
    }else{
      // $this->assign('name',$this->_get('name'));
      $this->assign('data',$_SESSION['user']['id']);
      $this->display();
    }
  }

  // 检查密码
  public function checkpwd(){
    $user = M('user');
    $post['pwd'] = md5(trim($this->_post('pwd')));
    $post['uid'] = $_SESSION['user']['id'];
    $result = $user->where($post)->find();
    if($result){
      $info['status'] = 1;
      $info['msg'] = 'ok';
      $this->ajaxReturn($info);
    }else{
      $info['status'] = 0;
      $info['msg'] = 'error';
      $this->ajaxReturn($info);
    }
  }
}