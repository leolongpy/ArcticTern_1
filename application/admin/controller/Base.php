<?php

namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {
        if (!session('a_name')) {
            $this->error('请先登录', 'admin/login/login');
        }
    }
}

