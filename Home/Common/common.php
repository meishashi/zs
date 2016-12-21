<?php
	function username($id){
		$user = M('user');
		$data = $user->where(array('id'=>$id))->find();
 		return $data['name'];
	}
	// 判断文章图片个数
	function imgNum($content){
		$rule = '/<img[^>]*?(src="[^"]*?")[^>]*?>/';
		preg_match_all($rule,$content,$result);  
	    // dump($result);  
	    // dump(count($result[0]));
	    return count($result[0]);
	}
	// 一张img
	function oneImg($data){
		$rule = '/<img[^>]*?(src="[^"]*?")[^>]*?>/';
		preg_match_all($rule,$data,$result);  
    $str = '<img '.$result[1][0].'>';
    return $str;
	}
	// 三张 img
	function threeImg($data){
		$rule = '/<img[^>]*?(src="[^"]*?")[^>]*?>/';
		preg_match_all($rule,$data,$result);  
    $str = '';
    for($i=0;$i<3;$i++){
    	$str .="<span><img ";
    	$str .=$result[1][$i];
    	$str .="></span>";
    }
    return $str;
	}
