<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $result=Db::table('index')->select();
        $result2=Db::table('activity')->select();
        $this->assign('index',$result);
        $this->assign('activity',$result2);
        return $this->fetch();
    }
    public function  ajax(){
        $text=$_POST['text'];
        if($text===""){
            $con="";
        }else{
            $con=Db::table('trip_planning')
                ->where('tp_name','like','%'.$text.'%')
                ->where('tp_status',1)
                ->select();
        }

        echo json_encode($con);
    }

}
