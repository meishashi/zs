<?php
class ArticleAction extends CommonAction {
	// 文章列表
	public function article(){
    $m = M('article');
		if($this->_get('pid')){
	    $map['pid'] = $this->_get('pid');	
		}
		$count = $m -> where($map) -> count();
		import('ORG.Util.Page');// 导入分页类
		$page = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $page -> show(); 
		$list = $m -> where($map) -> limit($page->firstRow.','.$page->listRows) -> order('id desc') -> select();
		$this -> assign('list',$list);
		$this -> assign('page',$show);
		$this -> assign('count',$count);
		$this -> display();
	}
	// 文章编辑
	public function articleSet(){	
		// $uid = $_SESSION['authId'];
		$m = M('article');
		$id = $this->_get('id');;
		$data = $m -> where(array('id'=>$id)) -> find();
    if(IS_POST){
			$post = $this->_post();	
			$post['ctime'] = time();
			if(!$post['pid']){
				$this -> ajaxReturn(array('msg'=>'请选择分类！','status'=>0));		
			}
			$a = $post['id'] ? $m -> save($post) : $m->add($post) ;
			if($a){
				$this -> ajaxReturn(array('msg'=>'提交成功！','status'=>1));	
			}else{
				$this -> ajaxReturn(array('msg'=>'提交失败！','status'=>0));	
			}		
		}else{
			$this -> assign('data',$data);
			$this -> assign('tree',$this->_articleTree($data['pid']));
	    $this -> display();	
		}	
	}
	// 删除文章
	public function articleDel(){
    $m = M('article');
		if($m -> where(array('id'=>$this->_post('id')))->delete()){
	    $this -> ajaxReturn(array('msg'=>'删除成功！','status'=>1));
		}else{
			$this -> ajaxReturn(array('msg'=>'删除失败！','status'=>0));
		}
	}
	// 分类列表
	public function cate(){
		$m = M('article_cate');
		$list = $m -> field('id,pid,path,name,sort,is_home,concat(path,"-",id) as bpath') -> order('bpath asc') -> select();
		foreach($list as $k => $val){
		    $p = '';
			$path = explode('-',$val['path']);
			if(count($path) > 1){
			    foreach($path as $a){
			    	$p .= '&nbsp;&nbsp;';
				}
				$p .= '|--' ;
			}
			$list[$k]['name'] = $p.$val['name'] ;	
		}
		$this -> assign('list',$list);
		$this -> display();
	}
	// 分类设置
	public function cateSet(){
    $m = M('article_cate');	
		$id = $this->_get('id');
		$data = $m -> where(array('id'=>$id)) -> find();
		if(IS_POST){
	    $post = $this->_post();
			//写入path路径
			if(!$post['path']){
				if($post['pid'] != 0){
					$data2 = $m -> where(array('id'=>$post['pid'])) -> find();
				    $post['path'] = $data2['path'].'-'.$data2['id'];	
				}else{
				    $post['path'] = 0;	
				}
			}
			//判断是否有子类目
			if($post['id']){
			    $data3 = $m -> where(array('pid'=>$post['id'])) -> field('id,pid') -> find();
				if($data3){
				   $this -> ajaxReturn(array('msg'=>'该类目下有子类目！','status'=>0));	 	
				}	
			}
			$a = $post['id'] ? $m -> save($post) : $m -> add($post) ;
			if($a){
				$this -> ajaxReturn(array('msg'=>'提交成功！','status'=>1));	
			}else{
				$this -> ajaxReturn(array('msg'=>'提交失败！','status'=>0));	
			}	
		}else{
	    $this -> assign('data',$data);
			$this -> assign('tree',$this->_articleTree($data['pid']));
			$this -> display();	
		}
	}
	// 删除分类
	public function cateDel(){
		$m = M('article_cate');
		$m2 = M('article');
		$id = $this->_post('id');
		//判断子类目
		$data = $m -> where(array('pid'=>$id)) -> find();
		if($data){
	   	$this -> ajaxReturn(array('msg'=>'该类目下有子类目！','status'=>0));
		}
		//类目下数据
		$data2 = $m2 -> where(array('pid'=>$id)) -> find();
		if($data2){
			$this -> ajaxReturn(array('msg'=>'该类目下有数据！','status'=>0));
		}
		
		if($m ->where(array('id'=>$id)) -> delete()){
			$this -> ajaxReturn(array('msg'=>'删除成功！','status'=>1));	
		}else{
			$this -> ajaxReturn(array('msg'=>'删除成功！','status'=>0));	
		}
	}

}