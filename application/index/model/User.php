<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
    // 设置完整的数据表（包含前缀）
    protected $table = 'think_user';
    // user_birthday读取器
    protected function getUserBirthdayAttr($value,$data)
    {
        return date('Y-m-d', $data['birthday']);
    }
    // birthday修改器
    protected function setBirthdayAttr($value)
    {
        return strtotime($value);
    }
}\