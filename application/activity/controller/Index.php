<?php
namespace app\activity\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $result=Db::table('activity')->select();
        $this->assign('index',$result);
        return $this->fetch();
    }
    public function apply()
    {
        return view('apply');
    }
}
