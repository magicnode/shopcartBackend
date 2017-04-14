<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;

class Index extends Controller
{
    public function index($name = 'World')
    {
      // 查询数据
      $result = Db::query('select * from think_user where id = 5');
      return json($result);
    }

    public function hello($name = 'thinkphp')
    {
    	$this->assign('name', $name);
        return $this->fetch();
    }

    public function data($name = 'data')
    {
    	  $data = Db::name('data')->find();
    	  $this->assign('result', $data);
    	  return $this->fetch();
    }
}
