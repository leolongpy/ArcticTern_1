<?php
namespace app\trip_planning\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $result2=Db::table('trip_banner')->select();
        $result = Db::table('trip_planning')->where('tp_status',1)->select();
        $this->assign('banner',$result2);
        $this->assign('index', $result);
        return $this->fetch();
    }
    public function ziye($id)
    {
        $result2=Db::table('evaluate')->where('planning', $id)->limit(5)->order('id', 'desc')->select();
        $this->assign('pinglun', $result2);
        $result = Db::table('trip_planning')->where('id', $id)->select();
        $this->assign('index', $result);
        return $this->fetch();
    }
    public function create()
    {
        if(!session("user_name")){
            $this->error("您还没有登录，请先登录","login/index/index");
        }
        return view('create');
    }
    public function ajax(){
        $city_name = $_POST['cityName'];
        $type_name = $_POST['typeName'];
        $nandu_name = $_POST['nanduName'];
        // 当提交为全部时默认为空
        if($city_name == "全部"){
            $city_name = "";
        }elseif ($type_name == "全部"){
            $type_name = "";
        }elseif($nandu_name == "全部") {
            $nandu_name = "";
        }
        if(!empty($city_name) && !empty($type_name) && !empty($nandu_name)){
            // 当用户同时筛选 城市 类型 难度
            $con = Db::table('trip_planning')
                ->where('tp_status',1)
                ->where('tp_mudidi', $city_name)
                ->where('tp_nandu',$nandu_name)
                ->where('tp_type',$type_name)
                ->select();
        }elseif(!empty($city_name) && empty($type_name) && empty($nandu_name)){
            // 当用户筛选 城市
            $con = Db::table('trip_planning')
                ->where('tp_status',1)
                ->where('tp_mudidi', $city_name)
                ->select();
        }elseif(!empty($type_name) && empty($city_name) && empty($nandu_name) ){
            // 当用户筛选 类型
            $con = Db::table('trip_planning')
                ->where('tp_status',1)
                ->where('tp_type',$type_name)
                ->select();
        }elseif(empty($city_name) && empty($type_name) && !empty($nandu_name)){
            // 当用户筛选  难度
            $con = Db::table('trip_planning')
                ->where('tp_status',1)
                ->where('tp_nandu',$nandu_name)
                ->select();
        }elseif(!empty($city_name) && !empty($type_name) && empty($nandu_name)){
            // 当用户同时筛选 城市 标签
            $con = Db::table('trip_planning')
                ->where('tp_status',1)
                ->where('tp_mudidi',$city_name)
                ->where('tp_type',$type_name)
                ->select();
        }elseif(!empty($city_name) && empty($type_name) && !empty($nandu_name)){
            // 当用户同时筛选 城市  难度
            $con = Db::table('trip_planning')
                ->where('tp_status',1)
                ->where('tp_name',$city_name)
                ->where('tp_nandu',$nandu_name)
                ->select();
        }elseif( empty($city_name) && !empty($type_name) && !empty($nandu_name)){
            // 当用户同时筛选 类型 难度
            $con = Db::table('trip_planning')
                ->where('tp_status',1)
                ->where('tp_type',$type_name)
                ->where('tp_nandu',$nandu_name)
                ->select();
        }elseif(empty($city_name) && empty($type_name) && empty($nandu_name)){
            //  当为默认时  当都选择全部按钮时
            $con = Db::table('trip_planning')
                ->where('tp_status',1)
                ->select();
        }
        echo json_encode($con);

    }
    public function abc()
    {
        if (isset($_POST['submit'])){

            $file=request()->file('tp_img2');

            if(isset($file)){

                $info = $file->move(ROOT_PATH.'public'.DS.'static'.DS.'img'.DS.'trip_planning');

                if($info){
                    $a=$info->getSaveName();
                }else{
                    echo $file->getError();
                }
            }
            $dateArr=input('post.');
            unset($dateArr['submit']);
            unset($dateArr['tp_img2']);
            unset($dateArr['tp_jijie']);
            unset($dateArr['tp_sheshi']);
            $dateArr['tp_jijie'] = input('post.tp_jijie/a');
            $dateArr['tp_jijie'] = implode("/",$dateArr['tp_jijie']) ;
            $dateArr['tp_sheshi'] = input('post.tp_sheshi/a');
            $dateArr['tp_sheshi'] = implode(",",$dateArr['tp_sheshi']) ;
            $dateArr['tp_img2'] = $a;
            $dateArr['tp_create']=session('user_name');
            $user_name = Db::table("trip_planning")->where("tp_name", $dateArr['tp_name'])->select();
            if (empty($user_name)) {
                $sql_user = Db::table("trip_planning")->insert($dateArr);
                if ($sql_user == true) {
                    return $this->success("线路创建成功",'index');
                }
            } else {
                $this->error('线路已存在');
            }
        }
    }
    public function ajax2(){
        $text=$_POST['text'];
        $con=Db::table("trip_planning")
            ->where('tp_name','like','%'.$text.'%')
            ->where('tp_status',1)
            ->select();
        echo json_encode($con);

    }
    public function pinglun($id){
        if(!session('user_name')){
         return json(0);
        }
        $text=$_POST['text'];
        $user=session("user_name");
        $con=Db::table("evaluate")->insert(['content' =>$text,'planning' => $id,'user'=>$user]);
        echo json_encode($con);

    }
    public function pinglun2(){
        $id=$_POST['id'];
        $con=Db::table('evaluate')->where('planning',$id)->limit(5)->order('id', 'desc')->select();
        return json_encode($con);


    }


}
