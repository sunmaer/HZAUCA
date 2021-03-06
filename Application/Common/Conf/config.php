<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' => array(
        '__CSS__' => '/HZAUCA2.0/Public/css',
        '__IMG__' => '/HZAUCA2.0/Public/image',
        '__JS__' => '/HZAUCA2.0/Public/js',
        '__JQUERY__' => '/HZAUCA2.0/Public/jquery',
        '__EDITOR__' => '/HZAUCA2.0/Public/editor',
        '__ASSETS__' => '/HZAUCA2.0/Public/assets',
        ),
	// 连接数据库
	'DB_TYPE' => 'mysql', // 数据库类型 
	'DB_HOST' => 'localhost', // 服务器地址 
	'DB_NAME' => 'hzauca', // 数据库名 
	'DB_USER' => 'root', // 用户名 
	'DB_PWD' => '', // 密码 
	'DB_PORT' => 3306, // 端口 
	'DB_PREFIX' => 'hzauca_', // 数据库表前缀  
	'DB_CHARSET'=> 'utf8', // 字符集 
	'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志数据库的类型由DB_TYPE参数设置。 

	'SESSION_OPTIONS'         =>  array(
        'name'                =>  'BJYSESSION',                    //设置session名
        'expire'              =>  18000,                            //SESSION保存1h
        'use_trans_sid'       =>  1,                               //跨页传递
        'use_only_cookies'    =>  0,                               //是否只开启基于cookies的session的会话方式
    ),
);