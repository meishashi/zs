<?php
// 本类由系统自动生成，仅供测试用途
class DeleteAction extends Action {
    public function index(){
		if(empty($_SESSION['username']) || empty($_SESSION['password'])){
			$this->redirect('Index/login');
		}
		$ccid = $_GET['ccid'];
		$ag = M('Agency');
		$data = $ag->where('ccid='.$ccid)->delete();
		$this->success('删除成功');
    }
	public function deleteAll(){
		$items = $_POST['items'];
		$ag = M('Agency');
		foreach($items as $value){
			$ccid = $value;
			$ag->where('ccid='.$ccid)->delete();
		}
		$this->success('删除成功');
    }
	//批量删除
	public function deleteAllIndex(){
		if(empty($_SESSION['username']) || empty($_SESSION['password'])){
			$this->redirect('Index/login');
		}
		$this->display();
	}
	public function deleteAll2(){
		//检查信息是否填写完整
		if(empty($_POST['id_start']) || empty($_POST['id_end']))	$this->error('请填写完整信息');
		$id_start = $_POST['id_start'];
		$id_start = (int)$id_start;	//转换成整型
		$id_end = $_POST['id_end'];
		$name = $_POST['name'];
		$ag = M('Agency');
		for($i = $id_start;$i <= $id_end;$i++){
			$ag->where('ccid='.$i)->delete();
		}
		$this->success('删除成功');
    }
}