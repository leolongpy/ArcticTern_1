<?php

namespace app\mobile\controller;

use think\Controller;
use think\Db;
use think\Loader;
use think\Request;

class Index extends Controller
{

    public function index()
    {
        return $this->fetch();
    }
    public function XianLu()
    {
        return $this->fetch();
    }
}
