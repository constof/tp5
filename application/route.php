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

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

    // // 添加路由规则 路由到 index控制器的hello操作方法
    // 'hello/:name' => 'index/index/hello',

    // 路由参数name为可选
    'hello/[:name]' => 'index/hello',

    // 全局变量规则定义
    '__pattern__'         => [
        'name'  => '\w+',
        'id'    => '\d+',
        'year'  => '\d{4}',
        'month' => '\d{2}',
    ],
    // 路由规则定义
    'blog/:id'            => 'blog/get',
    'blog/:name'          => 'blog/read',
    'blog-<year>-<month>' => 'blog/archive',

];
