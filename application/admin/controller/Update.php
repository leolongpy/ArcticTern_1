<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Update extends Controller
{
    // 修改管理员信息
    public function update(){
        if(isset($_POST['button'])){
            $userArr['id'] = input("id");
            $userArr['a_name'] = input("name");
            $userArr['a_phone'] = input("phone");
            $userArr['a_email'] = input("email");
            $userArr['a_pwd'] = md5(input("pass"));

            $admin = Db::table('admin')->where('a_id', $userArr['id'])->update(['a_name'=>$userArr['a_name'],'a_phone'=>$userArr['a_phone'],'a_email'=>$userArr['a_email'],'a_password'=>$userArr['a_pwd']]);
            if($admin){
                $this->success('修改成功!');
            }else{
                $this->error("修改失败");
            }
        }
    }

    // 删除管理员
    public function deladmin(){
        $adminId = $_POST['$id'];
        $flag = Db::table('admin')->where('a_id',$adminId)->delete();
        if($flag)
        {
            return json(['code' => 1,'msg' => '已删除']);
        }
        {
            return json(['code' => 0,'msg' => '删除失败']);
        }
    }

    // 添加管理员
    public function addadmin(){
        if(isset($_POST)){
            $param=input('post.');
            $data = array(    
                //接受传递的参数
                'a_name' => input('post.username'),
                'a_phone' => input('post.phone'),
                'a_email' => input('post.email'),
                'a_password' => md5(input('post.pass')),	
            );
            // return json_encode($data);
            if(Db::table('admin')->insert($data))
            {
                return json(['code' => 1,'msg' => '添加成功']);
            }else{
                return json(['code' => 0,'msg' => '添加失败']);
            }
        }
    }

    // 通过日期搜索管理员
    public function time(){
        $time = $_POST['nowdate'];
        $createtime = Db::table("admin")->where('a_time','like',$time.'%')->select();
        return json_encode($createtime);
    }


    // 删除用户
    public function delmember(){
        $Id = $_POST['$id'];
        $flag = Db::table('user')->where('id',$Id)->delete();
        if($flag)
        {
            return json(['code' => 1,'msg' => '已删除']);
        }
        {
            return json(['code' => 0,'msg' => '删除失败']);
        }
    }


    // 删除评论
    public function delPL(){
        $PLId = $_POST['$id'];
        $flag = Db::table('evaluate')->where('id',$PLId)->delete();
        if($flag)
        {
            return json(['code' => 1,'msg' => '已删除']);
        }
        {
            return json(['code' => 0,'msg' => '删除失败']);
        }
    }
}