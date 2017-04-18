<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::rule('test/[:name]$', function ($name) {
    return 'Hello,' . $name . '!';
});

return [
		// 全局变量规则定义
		'__pattern__'         => [
		    'name'  => '\w+',
		    'id'    => '\d+',
		    'year'  => '\d{4}',
		    'month' => '\d{2}',
		],
		// 路由规则定义
    'hello/[:name]' => ['index/hello', ['method' => 'get']],
    'data' => ['index/data', ['method' => 'get']],
    'user' => ['user/add', ['method' => 'post']],
    'user/[:id]$' => ['user/get', ['method' => 'get']],
    'user/list' => ['user/addList', ['method' => 'post']],
    '[blog]' => [
        ':year/:month' => ['blog/archive', ['method' => 'get']],
        ':id'          => ['blog/get', ['method' => 'get']],
        ':name'        => ['blog/read', ['method' => 'get']],
    ],
];