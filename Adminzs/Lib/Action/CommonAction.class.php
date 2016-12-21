<?php
// 本类由系统自动生成，仅供测试用途
class CommonAction extends Action {
	//文章分类
	protected function _articleTree($pid=''){
		$m = M('article_cate');
		$list = $m -> field('id,pid,path,name,concat(path,"-",id) as bpath') -> order('bpath asc') -> select();
		$html = '<option value="0">根目录</option>';
		foreach($list as $val){
			//path
			$p = '';
			$path = explode('-',$val['path']);
			if(count($path) > 1){
			    foreach($path as $a){
			    	$p .= '&nbsp;&nbsp;';
				}
				$p .= '|--' ;
			}
		    if($val['id'] == $pid){
			    $html .= '<option value="'.$val['id'].'" selected>'.$p.$val['name'].'</option>';	
			}else{
				$html .= '<option value="'.$val['id'].'">'.$p.$val['name'].'</option>';	
			}	
		}
		return $html ;
	}
}



	