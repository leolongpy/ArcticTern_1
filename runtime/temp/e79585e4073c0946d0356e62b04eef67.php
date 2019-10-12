<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\ArcticTern_1/application/admin\view\index\orderadd.html";i:1532505992;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/admin/css/font.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/admin/css/xadmin.css">

    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/ArcticTern_1/public/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/ArcticTern_1/public/static/admin/js/xadmin.js"></script>

    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="x-body">
    <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
    <form class="layui-form" method="post">
        <div class="layui-form-item">
            <label for="tp_name" class="layui-form-label">
                <span class="x-red">*</span>路线名称
            </label>
            <div class="layui-input-inline">
                <input type="text" id="tp_name" name="tp_name" required="" lay-verify="required"
                       autocomplete="off" class="layui-input" value="<?php echo $des['tp_name']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="tp_mudidi" class="layui-form-label">
                <span class="x-red">*</span>所属目的地
            </label>
            <div class="layui-input-inline">
                <input type="text" id="tp_mudidi" name="tp_mudidi" required="" lay-verify="required"
                       autocomplete="off" class="layui-input" value="<?php echo $des['tp_mudidi']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="tp_licheng" class="layui-form-label">
                <span class="x-red">*</span>里程
            </label>
            <div class="layui-input-inline">
                <input type="number" id="tp_licheng" name="tp_licheng" required="" lay-verify="required"
                       autocomplete="off" class="layui-input" value="<?php echo $des['tp_licheng']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="tp_max" class="layui-form-label">
                <span class="x-red">*</span>最高海拔
            </label>
            <div class="layui-input-inline">
                <input type="number" id="tp_max" name="tp_max" required="" lay-verify="required"
                       autocomplete="off" class="layui-input"  value="<?php echo $des['tp_max']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="tp_min" class="layui-form-label">
                <span class="x-red">*</span>最低海拔
            </label>
            <div class="layui-input-inline">
                <input type="number" id="tp_min" name="tp_min" required="" lay-verify="required"
                       autocomplete="off" class="layui-input"  value="<?php echo $des['tp_min']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="tp_daolu" class="layui-form-label">
                <span class="x-red">*</span>道路状况
            </label>
            <div class="layui-input-inline">
                <input type="text" id="tp_daolu" name="tp_daolu" required="" lay-verify="required"
                       autocomplete="off" class="layui-input"  value="<?php echo $des['tp_daolu']; ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="tp_type" class="layui-form-label">
                <span class="x-red">*</span>类型
            </label>
            <div class="layui-input-inline">
                <select id="tp_type" name="tp_type" class="valid">
                    <option value="山野穿行">山野穿行</option>
                    <option value="健行">健行</option>
                    <option value="骑行">骑行</option>
                    <option value="跑步">跑步</option>
                    <option value="自驾">自驾</option>
                    <option value="露营">露营</option>
                    <option value="溯溪">溯溪</option>
                    <option value="滑雪">滑雪</option>
                    <option value="漂流">漂流</option>
                    <option value="温泉">温泉</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="tp_shichang" class="layui-form-label">
                <span class="x-red">*</span>活动时长
            </label>
            <div class="layui-input-inline">
                <select id="tp_shichang" name="tp_shichang">
                    <option value="0.5">0.5天</option>
                    <option value="1">1天</option>
                    <option value="2">2天</option>
                    <option value="3">3天</option>
                    <option value="4">4天</option>
                    <option value="5">5天</option>
                    <option value="6">6天</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="tp_nandu" class="layui-form-label">
                <span class="x-red">*</span>活动时长
            </label>
            <div class="layui-input-inline">
                <select id="tp_nandu" name="tp_nandu">
                    <option value="休闲">休闲</option>
                    <option value="标准">标准</option>
                    <option value="挑战">挑战</option>
                    <option value="自虐">自虐</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="tp_yingwei" class="layui-form-label">
                <span class="x-red">*</span>营位数量
            </label>
            <div class="layui-input-inline">
                <select id="tp_yingwei" name="tp_yingwei">
                    <option value="1-5个">1-5个</option>
                    <option value="5-10个">5-10个</option>
                    <option value="10-20个">10-20个</option>
                    <option value="20-50个">20-50个</option>
                    <option value="50-100个">50-100个</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">季节</label>
            <div class="layui-input-block">
                <input type="checkbox" name="tp_jijie[]" title="春" value="春">
                <input type="checkbox" name="tp_jijie[]" title="夏" value="夏">
                <input type="checkbox" name="tp_jijie[]" title="秋" value="秋">
                <input type="checkbox" name="tp_jijie[]" title="冬" value="冬">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">营地设施</label>
            <div class="layui-input-block">
                <input type="checkbox" name="tp_sheshi[]" title="卫生间" value="卫生间">
                <input type="checkbox" name="tp_sheshi[]" title="淋浴间" value="淋浴间">
                <input type="checkbox" name="tp_sheshi[]" title="烧烤区" value="烧烤区">
                <input type="checkbox" name="tp_sheshi[]" title="商店" value="商店">
                <input type="checkbox" name="tp_sheshi[]" title="可充电" value="可充电">
                <input type="checkbox" name="tp_sheshi[]" title="装备租赁" value="装备租赁">
                <input type="checkbox" name="tp_sheshi[]" title="停车场" value="停车场">
                <input type="checkbox" name="tp_sheshi[]" title="季节性水源" value="季节性水源">
                <input type="checkbox" name="tp_sheshi[]" title="常年水源" value="常年水源">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label for="tp_jianjie" class="layui-form-label">
                路线简介
            </label>
            <div class="layui-input-block">
                <textarea placeholder="请输入内容" id="tp_jianjie" name="tp_jianjie" class="layui-textarea"> <?php echo $des['tp_jianjie']; ?></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label for="tp_jianyi" class="layui-form-label">
                建议路线
            </label>
            <div class="layui-input-block">
                <textarea placeholder="请输入内容" id="tp_jianyi" name="tp_jianyi" class="layui-textarea"> <?php echo $des['tp_jianyi']; ?></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label for="tp_jianyi" class="layui-form-label">
                交通信息
            </label>
            <div class="layui-input-block">
                <textarea placeholder="请输入内容" id="tp_jiaotong" name="tp_jiaotong" class="layui-textarea"> <?php echo $des['tp_jiaotong']; ?></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label for="tp_jianyi" class="layui-form-label">
                重要提示
            </label>
            <div class="layui-input-block">
                <textarea placeholder="请输入内容" id="tp_tishi" name="tp_tishi" class="layui-textarea"><?php echo $des['tp_tishi']; ?></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <button class="layui-btn" lay-filter="add" lay-submit="" name="button">
                确定
            </button>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </form>

</div>
<script>
    // layui.use(['form','layer'], function(){
    //     $ = layui.jquery;
    //   var form = layui.form
    //   ,layer = layui.layer;
    //
    //   //自定义验证规则
    //   form.verify({
    //     nikename: function(value){
    //       if(value.length < 5){
    //         return '昵称至少得5个字符啊';
    //       }
    //     }
    //     ,pass: [/(.+){6,12}$/, '密码必须6到12位']
    //     ,repass: function(value){
    //         if($('#L_pass').val()!=$('#L_repass').val()){
    //             return '两次密码不一致';
    //         }
    //     }
    //   });
    //
    //   //监听提交
    //   form.on('submit(add)', function(data){
    //     console.log(data);
    //     //发异步，把数据提交给php
    //     layer.alert("增加成功", {icon: 6},function () {
    //         // 获得frame索引
    //         var index = parent.layer.getFrameIndex(window.name);
    //         //关闭当前frame
    //         parent.layer.close(index);
    //     });
    //     return false;
    //   });
    //
    //
    // });
</script>
<script>var _hmt = _hmt || [];
(function () {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();</script>
</body>

</html>