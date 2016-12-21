<?php
class PublicAction extends Action {
	// public function index(){
	// 	if(empty($_SESSION['username']) || empty($_SESSION['password'])){
	// 		$this->redirect('Index/login');
	// 	}
	// 	$this->display();
	// }
	public function login(){
		if(IS_POST){
			$admin = M('admin');
			$post = $this->_post();
			$post['username'] = trim($this->_post('username'));
			$post['password'] = md5(trim($this->_post('password')));

			$result = $admin -> where($post) -> find();
			if($result){
				$_SESSION['admin']['name'] = $result['username'];
				$_SESSION['admin']['id'] = $result['id'];

				$info['status'] = 1;
				$info['msg'] = 'ok';
				$this->ajaxReturn($info);
			}else{
				$info['status'] = 0;
				$info['msg'] = 'error';
				$this->ajaxReturn($info);
			}
		}
		$this->display();
	}




	
	// public function checkLogin(){
	// 	//检查是否接收到用户名和密码
	// 	if(empty($_POST['username'])){
	// 		$this->error('请输入用户名！');
	// 	}else{
	// 		$username = $_POST['username'];
	// 	}
	// 	if(empty($_POST['password'])){
	// 		$this->error('请输入密码！');
	// 	}else{
	// 		$password = $_POST['password'];
	// 	}
		
	// 	$m = M('Admin');
	// 	$where['username'] = $username;
	// 	$where['password'] = $password;
	// 	$arr = $m->where($where)->find();
	// 	if($arr){
	// 		$_SESSION['username'] = $username;
	// 		$_SESSION['password'] = $password;
	// 		$this->success('登陆成功!',U('Index/index'));
	// 	}else{
	// 		$this->error('登陆失败!');
	// 	}
	// }
	// //logout
	// public function logout(){
	// 	$_SESSION=array();
	// 	if(isset($_COOKIE[session_name()])){
	// 		setcookie(session_name(),'',time()-1,'/');
	// 	}
	// 	session_destroy();
	// 	$this->redirect('Index/login');
	// }
}