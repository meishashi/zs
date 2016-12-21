<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_L_DELIM'=>'<{',
	'TMPL_R_DELIM'=>'}>',
	// 'DB_PREFIX'=>'uw_',
	// 'DB_DSN'=>'mysql://root:gm7821423@127.0.0.1:3306/underware',
	'TMPL_PARSE_STRING'=>array(
		'__CSS__'=>__ROOT__.'/Public/Css',
		'__JS__'=>__ROOT__.'/Public/Js',
		'__IMG__'=>__ROOT__.'/Public/Img',
	),
	'SHOW_PAGE_TRACE'=>false,
	//数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'zsyh', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'miaomiao', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'uw_', // 数据库表前缀 
);
?>