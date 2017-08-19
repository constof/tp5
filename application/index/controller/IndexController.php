<?php
namespace app\index\controller;

use app\index\model\User;

class IndexController
{
    public function index()
    {
        $list = User::all(function ($query) {
            $query->where('id', '>', 3)->order('id', 'desc');
        });
        foreach ($list as $user) {
            echo $user->nickname . '<br/>';
            echo $user->email . '<br/>';
            echo date('Y/m/d', $user->birthday) . '<br/>';
            echo '----------------------------------<br/>';
        }
    }

    public function add()
    {
        // $user = new User;
        $user['nickname'] = '流年';
        $user['email'] = 'constof@gmail.com';
        $user['birthday'] = strtotime('1994-01-08');
        if ($result = User::create($user)) {
            return '用户['. $result->nickname .']新增成功';
        } else {
            return '新增出错';
        }
    }
}
