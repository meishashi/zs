<?php
// 本类由系统自动生成，仅供测试用途
class SelectAction extends Action {
    public function index(){
		if(empty($_SESSION['username']) || empty($_SESSION['password'])){
			$this->redirect('Index/login');
		}
		if(empty($_GET['page'])){
			$page = 1;
		}else{
			$page = $_GET['page'];
		}
		$ag = M("Agency");
		$pageAll = $ag->count();
		$pageOnly = 10;		//每页显示数量
		$pageCount = ceil($pageAll/$pageOnly);	//总页数
		
		$data = $ag->limit($pageOnly)->page($page)->select();
		$this->assign('data',$data);
		$this->assign('nowpage',$page);
		$this->assign('pageCount',$pageCount);
		$this->display();
    }
}