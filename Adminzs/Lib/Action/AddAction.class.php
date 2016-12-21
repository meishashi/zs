<?php
// 本类由系统自动生成，仅供测试用途
class AddAction extends Action {
    public function index(){
		if(empty($_SESSION['username']) || empty($_SESSION['password'])){
			$this->redirect('Index/login');
		}
		$this->display();
    }
	public function add(){
		if(empty($_SESSION['username']) || empty($_SESSION['password'])){
			$this->redirect('Index/login');
		}
		//检查信息是否填写完整
		if(empty($_POST['id_start']) || empty($_POST['id_end']) || empty($_POST['name']))	$this->error('请填写完整信息');
		$id_start = $_POST['id_start'];
		$id_start = (int)$id_start;	//转换成整型
		$id_end = $_POST['id_end'];
		$name = $_POST['name'];
		$ag = M('Agency');
		for($i = $id_start;$i <= $id_end;$i++){
			$info = $ag->where('ccid='.$i)->find();
			if($info){
				$this->error('添加失败');
			}
			$dataList[] = array('ccid'=>$i,'name'=>$name);
		}
		
		$info = $ag->addAll($dataList);
		if($info){
			$this->success('添加成功');
		}
	}
	public function ajaxCheck(){
		$id_start = $_GET['id_start'];
		$id_end = $_GET['id_end'];
		$ag = M('Agency');
		for($i = $id_start;$i <= $id_end;$i++){
			if($ag->where('ccid='.$i)->find()){
				$data[] = $i;
			}
		}
		$this->ajaxReturn($data);
	}
}