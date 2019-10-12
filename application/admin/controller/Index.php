<?php

namespace app\admin\controller;

use app\admin\controller\Base;
use think\Db;
use  think\Paginator;
use  think\Request;

class Index extends Base
{
    public function index()
    {
//        获取当前时间

        return $this->fetch();
    }

    public function adminAdd()
    {
        return $this->fetch();
    }

    public function adminCate()
    {
        return $this->fetch();
    }

    public function adminEdit()
    {
        return $this->fetch();
    }

    public function plList()
    {
        $pllist = Db::table("evaluate")->select();
        $this->assign("test", $pllist);
        return $this->fetch();
    }

    public function adminList()
    {
        $adminlist = Db::table("admin")->select();
        $this->assign("test", $adminlist);
        return $this->fetch();
    }

    public function adminRole()
    {
        return $this->fetch();
    }

    public function adminRule()
    {
        return $this->fetch();
    }

    public function cate()
    {
        return $this->fetch();
    }


    public function memberAdd()
    {
        return $this->fetch();
    }

    public function memberDel()
    {
        return $this->fetch();
    }

    public function memberEdit($id)

    {
        if (isset($_POST['button'])) {
            $dateArr['email'] = input('email');
            $dateArr['name'] = input('username');
            $dateArr['password'] = input('pass');
            $result = Db::table('user')->where('id', $id)->update($dateArr);
        }
        $result = Db::table('user')->where('id', $id)->select();
        $this->assign('index', $result);
        return $this->fetch();
    }

    public function memberList()
    {
        $result = Db::table('user')->select();
        $this->assign('index', $result);
        return $this->fetch();
    }

    public function memberPassword()
    {
        return $this->fetch();
    }

    public function orderAdd($id)
    {
        if (isset($_POST['button'])) {
            $date = input('post.');
            unset($date['button']);
            unset($date['tp_jijie']);
            unset($date['tp_sheshi']);
            $date['tp_jijie'] = input('post.tp_jijie/a');
            $date['tp_jijie'] = implode("/", $date['tp_jijie']);
            $date['tp_sheshi'] = input('post.tp_sheshi/a');
            $date['tp_sheshi'] = implode(",", $date['tp_sheshi']);

            $result = Db::table('trip_planning')->where('id', $id)->update($date);
        }
        $result = Db::table('trip_planning')->where("id", $id)->select();
        $this->assign('index', $result);
        return $this->fetch();
    }

    public function orderList()
    {
        $result = Db::table('trip_planning')->where("tp_status", 0)->paginate(1);
        $page = $result->render();
        $this->assign('index', $result);
        $this->assign('page', $page);
        return $this->fetch();


    }

    public function orderList2()
    {
        $result = Db::table('trip_planning')->where("tp_status", 1)->paginate(1);
        $page = $result->render();
        $this->assign('index', $result);
        $this->assign('page', $page);
        return $this->fetch();

    }

    public function roleAdd($id)
    {

        return $this->fetch();
    }

    public function welcome()
    {
        $date = date("Y-m-d H:i:s");
        $planning=Db::table('trip_planning')->count();
        $user=Db::table('user')->count();
        $evaluate=Db::table('evaluate')->count();
        $request = Request::instance();
        $this->assign('date', $date);
        $this->assign('planning', $planning);
        $this->assign('user', $user);
        $this->assign('evaluate', $evaluate);
        $this->assign('ip', $_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]');
        $this->assign('url', $request->url());
        $this->assign('php_os', PHP_OS);
        $this->assign('yxhj', $_SERVER["SERVER_SOFTWARE"]);
        $this->assign('banben', phpversion());
        $this->assign('yxfs',php_sapi_name());
        $this->assign('tp', THINK_VERSION);
        $this->assign('banben', phpversion());
        $this->assign('sc', ini_get('upload_max_filesize'));
        $this->assign('sj', ini_get('max_execution_time').'秒');
        $this->assign('kj', round((disk_free_space(".")/(1024*1024)),2).'M');

        return $this->fetch();
    }

    public function delete($id)
    {
        $result = Db::table('user')->where('id', $id)->delete();
        $result = Db::table('user')->select();
        $this->assign('index', $result);
        return view('memberList');
    }

    public function orderDelete($id)
    {
        $result = Db::table('trip_planning')->where('id', $id)->delete();
        return $this->fetch();
    }
    public function orderShenhe($id)
    {
        $result = Db::table('trip_planning')->where('id', $id)->update(['tp_status' => 1]);
        return $this->fetch();
    }

    public function ajax()
    {
        $date_val = $_POST['dateVal'];
        $name_val = $_POST['nameVal'];
//        同时查询时间和路线名称
        if (!empty($date_val) && !empty($name_val)) {
            $con = Db::table('trip_planning')
                ->where('tp_status', 0)
                ->where('tp_createtime', '>', $date_val)
                ->where('tp_name', 'like', '%' . $name_val . '%')
                ->select();
        }
//        只查询时间
        if (!empty($date_val) && empty($name_val)) {
            $con = Db::table('trip_planning')
                ->where('tp_status', 0)
                ->where('tp_createtime', '>', $date_val)
                ->select();
        }
//        只查询路线名称
        if (empty($date_val) && !empty($name_val)) {
            $con = Db::table('trip_planning')
                ->where('tp_status', 0)
                ->where('tp_name', 'like', '%' . $name_val . '%')
                ->select();

        }
        echo json_encode($con);
    }

    public function ajax2()
    {
        $date_val = $_POST['dateVal'];
        $name_val = $_POST['nameVal'];
//        同时查询时间和路线名称
        if (!empty($date_val) && !empty($name_val)) {
            $con = Db::table('trip_planning')
                ->where('tp_status', 1)
                ->where('tp_createtime', '>', $date_val)
                ->where('tp_name', 'like', '%' . $name_val . '%')
                ->select();
        }
//        只查询时间
        if (!empty($date_val) && empty($name_val)) {
            $con = Db::table('trip_planning')
                ->where('tp_status', 1)
                ->where('tp_createtime', '>', $date_val)
                ->select();

        }
//        只查询路线名称
        if (empty($date_val) && !empty($name_val)) {
            $con = Db::table('trip_planning')
                ->where('tp_status', 1)
                ->where('tp_name', 'like', '%' . $name_val . '%')
                ->select();

        }


        return json_encode($con);
    }

}
