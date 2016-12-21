<?php
// 本类由系统自动生成，仅供测试用途
class CommonAction extends Action {
	protected static $_uid;
	protected static $_userinfo;
  protected function _initialize(){
		$user = M('user');
  	 // $_SESSION['user']['id'] = 1;
  	 // unset($_SESSION['user']['id']);
		self::$_uid = $this -> _checkLogin()  ;
		self::$_userinfo = $user -> where(array('id'=>self::$_uid)) -> find();
		$this->assign('uid',self::$_uid);

  }
	
	private function _checkLogin(){
    if(!$_SESSION['user']['id']){
	    $this -> redirect('Public/login');	
		}else{
	    return $_SESSION['user']['id'] ;	
		}	
	}
	
}