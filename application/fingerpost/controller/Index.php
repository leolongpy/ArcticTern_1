<?php
namespace app\fingerpost\controller;
use think\Controller;
use think\Db;
use think\Lodaer;
use think\Request;

class Index extends Controller
{
    public function index()
    {
        $list=Db::table('fingerpost_index')->select();
        $this->assign("testArr",$list);
        return $this->fetch();
    }
    public function details()
    {
        $list=Db::table('fingerpost_details')->select();
        $this->assign("testArr",$list);
        return $this->fetch();

    }
}
