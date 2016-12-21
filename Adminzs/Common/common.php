<?php
function articleClassName($id){
    $m = M('article_cate');
    $name = $m -> where(array('id'=>$id)) -> getField('name');	
	return $name ;
}