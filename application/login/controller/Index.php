<?php

namespace app\login\controller;

use think\Controller;
use think\Db;
use think\Loader;
use think\Request;
use think\file;

class Index extends Controller
{

    public function index()
    {
        if (isset($_POST["button"])) {
            $dataArr["name"] = input("name");
            $dataArr["password"] = input("password");
            $dataArr["phone"] = input("phone");
            $dataArr["sex"] = input("sex");
            $dataArr["address"] = input("address");
            $dataArr["email"] = input("email");
            $user_name = Db::table("user")->where("name", $dataArr['name'])->select();
            if (empty($user_name)) {
                $sql_user = Db::table("user")->insert($dataArr);
                if ($sql_user == true) {
                    return $this->success("注册成功，请登录");

                }
            } else {
                $this->error('该用户名已被注册');
            }
        }
        if (isset($_POST["button2"])) {
            $dataArr["name"] = input("name");
            $dataArr["password"] = input("password");
            $dataArr["yxm"] = input("yzm");
            $user = Db::table("user")->where("name", $dataArr['name'])->select();
            if (!captcha_check($dataArr["yxm"])) {
                return $this->error('验证码错误');
            };
            if (empty($user)) {
                $this->error('用户名不正确');
            } else {
                if ($user[0]['password'] != $dataArr['password']) {
                    $this->error('密码错误');
                } else {
                    session("user", $user[0]['id']);
                    session("user_name", $user[0]['name']);
                    echo "<script>alert('登陆成功');history.go(-2);</script>";
                    return $this -> redirect('login/index/zhuye');

                }
            }
        }
        return view('index');
    }

    public function fuwenben()
    {
        return view('fuwenben');
    }

    public function logout()
    {
        session(null);
        $this->success('退出成功', 'login/index/login');
    }

    public function cba()
    {
        if (isset($_POST["submit"])) {
            $dataArr["text"] = input("content");
            $sql_user = Db::table("text")->insert($dataArr);
        }
    }

    public function zhuye()
    {
        if (!session("user_name")) {
            $this->error("您还没有登录，请先登录", 'index');
        }
        $name = session('user');
        $result = Db::table('user')->where('id', $name)->select();
        $this->assign('index', $result);
        if (isset($_POST['button'])) {
            $data = input('post.');
            unset($data['button']);
            $result2 = Db::table('user')->where('name', $name)->update($data);
            if ($result2) {
                echo "<script>alert('修改成功');location.replace(location.href);</script>";
            }

        }
        return view('zhuye');
    }
    public function upload(){
        $session = session('user');
        $file = request() -> file('image');
        if (empty($file)) {
            $this->error('请选择上传文件');
        }
        $info = $file->rule('md5')->validate(['file' => $file], ['file'=>'require|image'],['file.require' => '请选择上传文件', 'file.image' => '非法图像文件'],['size'=>15678,'ext'=>'jpg,png,gif'])->move(ROOT_PATH.'public/static/img/uploads');
        if ($info) {
            // $path = $info -> getRealPath();
            $filePath = $info->getSaveName();
            db('user') -> where('id',$session) -> update(['picture'=>$filePath]);
            $this->success('头像修改成功','index/zhuye',3);
        } else {
            // 上传失败获取错误信息
                $this->error($file->getError());
        }

    }
    

    public function tc()
    {
        session("user_name", null);
        $this->redirect('index');

    }
}
