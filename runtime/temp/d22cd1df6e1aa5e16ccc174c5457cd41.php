<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\ArcticTern_1/application/admin\view\index\orderList.html";i:1531896306;}*/ ?>
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
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/ArcticTern_1/public/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/ArcticTern_1/public/static/admin/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <script type="text/javascript" src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
    <![endif]-->
</head>

<body>
<div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">演示</a>
        <a>
          <cite>导航元素</cite></a>
      </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"
       href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
</div>
<div class="x-body">
    <div class="layui-row">
        <form class="layui-form layui-col-md12 x-so">
            <input class="layui-input" placeholder="开始日" name="start" id="start">
            <input class="layui-input" placeholder="截止日" name="end" id="end">
            <div class="layui-input-inline">
                <select name="contrller">
                    <option>支付状态</option>
                    <option>已支付</option>
                    <option>未支付</option>
                </select>
            </div>
            <div class="layui-input-inline">
                <select name="contrller">
                    <option>支付方式</option>
                    <option>支付宝</option>
                    <option>微信</option>
                    <option>货到付款</option>
                </select>
            </div>
            <div class="layui-input-inline">
                <select name="contrller">
                    <option value="">订单状态</option>
                    <option value="0">待确认</option>
                    <option value="1">已确认</option>
                    <option value="2">已收货</option>
                    <option value="3">已取消</option>
                    <option value="4">已完成</option>
                    <option value="5">已作废</option>
                </select>
            </div>
            <input type="text" name="username" placeholder="请输入订单号" autocomplete="off" class="layui-input">
            <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
    </div>
    <xblock>
        <!--<button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>-->
        <!--<button class="layui-btn" onclick="x_admin_show('添加用户','<?php echo url('orderAdd'); ?>')"><i class="layui-icon"></i>添加-->
        <!--</button>-->
        <span class="x-right" style="line-height:40px">共有数据：88 条</span>
    </xblock>
    <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
    <table class="layui-table">
        <thead>
        <tr>
            <th>编号</th>
            <th>路线名称</th>
            <th>类型</th>
            <th>所属目的地</th>
            <th>里程</th>
            <th>最高/最低海拔</th>
            <th>道路状况</th>
            <th>最佳季节</th>
            <th>路线难度</th>
            <th>营地设施</th>
            <th>营位数量</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $des['id']; ?></td>
            <td><?php echo $des['tp_name']; ?></td>
            <td><?php echo $des['tp_type']; ?></td>
            <td><?php echo $des['tp_mudidi']; ?></td>
            <td><?php echo $des['tp_licheng']; ?></td>
            <td><?php echo $des['tp_max']; ?>/<?php echo $des['tp_min']; ?></td>
            <td><?php echo $des['tp_daolu']; ?></td>
            <td><?php echo $des['tp_jijie']; ?></td>
            <td><?php echo $des['tp_nandu']; ?></td>
            <td><?php echo $des['tp_sheshi']; ?></td>
            <td class="td-manage">
                <!--<a title="查看" onclick="x_admin_show('编辑','<?php echo url('orderView'); ?>')" href="javascript:;">-->
                <!--<i class="layui-icon">&#xe63c;</i>-->
                <!--</a>-->
                <!--<a title="删除" onclick="member_del(this,'要删除的id')" href="javascript:;">-->
                <!--<i class="layui-icon">&#xe640;</i>-->
                <!--</a>-->
                <?php echo $des['tp_yingwei']; ?>
            </td>
        </tr>

        </tbody>
    </table>
    <table class="layui-table">
        <thead >
        <tr>
            <th>路线简介</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <?php echo $des['tp_jianjie']; ?>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="layui-table">
        <thead >
        <tr>
            <th style="width: 80%">路线建议</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="width: 80%">
                <?php echo $des['tp_jianyi']; ?>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="layui-table">
        <thead >
        <tr>
            <th style="width: 80%">交通信息</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="width: 80%">
                <?php echo $des['tp_jiaotong']; ?>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="layui-table">
        <thead >
        <tr>
            <th style="width: 80%">重要提示</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="width: 80%">
                <?php echo $des['tp_tishi']; ?>
            </td>
        </tr>
        </tbody>
    </table>
    <button class="layui-btn layui-btn-danger" onclick="x_admin_show('删除路线','<?php echo url('orderDelete',array('id'=>$des['id'])); ?>')"><i class="layui-icon"></i>删除</button>
    <button class="layui-btn" onclick="x_admin_show('审核路线','<?php echo url('orderShenhe',array('id'=>$des['id'])); ?>')"><i class="layui-icon"></i>审核通过</button>
    <button class="layui-btn" onclick="x_admin_show('编辑路线','<?php echo url('orderAdd',array('id'=>$des['id'])); ?>')"><i class="layui-icon"></i>编辑路线</button>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <?php echo $page; ?>

    <!--<div class="page">-->
    <!--<div>-->
    <!--<a class="prev" href="">&lt;&lt;</a>-->
    <!--<a class="num" href="">1</a>-->
    <!--<span class="current">2</span>-->
    <!--<a class="num" href="">3</a>-->
    <!--<a class="num" href="">489</a>-->
    <!--<a class="next" href="">&gt;&gt;</a>-->
    <!--</div>-->
    <!--</div>-->

</div>
<script>
    layui.use('laydate', function () {
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
            elem: '#end' //指定元素
        });
    });

    /*用户-停用*/
    function member_stop(obj, id) {
        layer.confirm('确认要停用吗？', function (index) {

            if ($(obj).attr('title') == '启用') {

                //发异步把用户状态进行更改
                $(obj).attr('title', '停用')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                layer.msg('已停用!', {icon: 5, time: 1000});

            } else {
                $(obj).attr('title', '启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                layer.msg('已启用!', {icon: 5, time: 1000});
            }

        });
    }

    /*用户-删除*/
    function member_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            //发异步删除数据
            $(obj).parents("tr").remove();
            layer.msg('已删除!', {icon: 1, time: 1000});
        });
    }


    function delAll(argument) {

        var data = tableCheck.getData();

        layer.confirm('确认要删除吗？' + data, function (index) {
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
    }
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