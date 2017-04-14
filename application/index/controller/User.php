<?php
namespace app\index\controller;

use app\index\model\User as UserModel;

class User
{
    // 新增用户数据
    public function add()
    {
        $user['nickname'] = '流年';
        $user['email']    = 'thinkphp@qq.com';
        $user['birthday'] = '2011-03-05';
        if ($result = UserModel::create($user)) {
            return '用户[ ' . $result->nickname . ':' . $result->id . ' ]新增成功';
        } else {
            return 'error';
        }
    }

    // 批量新增用户数据
    public function addList()
    {
        $user = new UserModel;
        $list = [
            ['nickname' => '张三', 'email' => 'zhanghsan@qq.com', 'birthday' => '1988-01-15'],
            ['nickname' => '李四', 'email' => 'lisi@qq.com', 'birthday' => '1990-09-19'],
        ];
        if ($user->saveAll($list)) {
            return '用户批量新增成功';
        } else {
            return $user->getError();
        }
    }

    public function get($id = '')
    {
        $user = UserModel::get($id);
        echo $user->nickname . '<br/>';
        echo $user->email . '<br/>';
        echo $user->birthday . '<br/>';
        echo $user->user_birthday . '<br/>';
    }

    public function create($id = '')
    {
        return view();
    }
}