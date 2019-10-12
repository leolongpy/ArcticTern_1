<?php

namespace app\admin\controller;
use think\Controller;
use think\Db;


class Login extends Controller
{
    public function login()
    {
        return $this->fetch();
    }

    public function loginin()
    {
        $date = input('post.');
        $result = Db::table('admin')->where($date)->select();
        if ($result) {
            session("a_name", $date['a_name']);
            $this->success('登录成功', 'admin/index/index');

        } else {
            $this->error('滚', 'index/index/index');
        }
    }
    public function logout(){
        session(null);
        $this->success('退出成功','admin/login/login');
    }
}

