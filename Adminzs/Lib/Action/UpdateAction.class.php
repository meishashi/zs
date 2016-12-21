<?php
// 本类由系统自动生成，仅供测试用途
class UpdateAction extends Action {
    public function index(){
		if(empty($_SESSION['username']) || empty($_SESSION['password'])){
			$this->redirect('Index/login');
		}
		$ccid = $_GET['ccid'];
		$ag = M('Agency');
		$data = $ag->where('ccid='.$ccid)->find();
		$this->assign('data',$data);
		$this->display();
    }
	public function edit(){
		$ccid = $_POST['ccid'];
		$name = $_POST['name'];
		$ag = M('Agency');
		$data['name'] = $name;
		$info = $ag->where('ccid='.$ccid)->save($data);
		$this->success("成功",U('Select/index'));
	}
}