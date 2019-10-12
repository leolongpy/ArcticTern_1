<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\xampp\htdocs\ArcticTern_1/application/admin\view\index\memberlist.html";i:1532931231;}*/ ?>
<!DOCTYPE html>
<html>
  
  <head>
    <link rel="icon" href="/ArcticTern_1/public/static/img/activity/logo_2.png">

    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
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
  
  <body class="layui-anim layui-anim-up">
    <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">演示</a>
        <a>
          <cite>导航元素</cite></a>
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
    <div class="x-body">
      <div class="layui-row">
        <form class="layui-form layui-col-md12 x-so">
          <input class="layui-input" placeholder="开始日" name="start" id="start">
          <input class="layui-input" placeholder="截止日" name="end" id="end">
          <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
      </div>
      <xblock>
        <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
        <button class="layui-btn" onclick="x_admin_show('添加用户','<?php echo url('memberAdd'); ?>',600,400)"><i class="layui-icon"></i>添加</button>
        <span class="x-right" style="line-height:40px">共有数据：88 条</span>
      </xblock>
      <table class="layui-table">
        <thead>
          <tr>
            <th>
              <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
            </th>
            <th>ID</th>
            <th>用户名</th>
            <th>性别</th>
            <th>手机</th>
            <th>邮箱</th>
            <th>地址</th>
            <th>加入时间</th>
            <th>状态</th>
            <th>操作</th></tr>
        </thead>
        <tbody>
        <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
          <tr>
            <td>
              <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='2'><i class="layui-icon">&#xe605;</i></div>
            </td>
            <td><?php echo $des['id']; ?></td>
            <td><?php echo $des['name']; ?></td>
            <td><?php echo $des['sex']; ?></td>
            <td><?php echo $des['phone']; ?></td>
            <td><?php echo $des['email']; ?></td>
            <td><?php echo $des['address']; ?></td>
            <td><?php echo $des['time']; ?></td>
            <td class="td-status">
              <span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span></td>
            <td class="td-manage">
              <a onclick="member_stop(this,'10001')" href="javascript:;"  title="启用">
                <i class="layui-icon">&#xe601;</i>
              </a>
              <a title="编辑"  onclick="x_admin_show('编辑','<?php echo url('memberEdit',array('id'=>$des['id'])); ?>',600,400)" href="javascript:;">
                <i class="layui-icon">&#xe642;</i>
              </a>
              <!--<a onclick="x_admin_show('修改密码','<?php echo url('memberPassword'); ?>',600,400)" title="修改密码" href="javascript:;">-->
                <!--<i class="layui-icon">&#xe631;</i>-->
              <!--</a>-->
              <a title="删除" onclick="member_del(this,'要删除的id')" href="<?php echo url('delete',array('id'=>$des['id'])); ?>">
                <i class="layui-icon">&#xe640;</i>
              </a>
            </td>
          </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
          <!--<tr>-->
            <!--<td>-->
              <!--<div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='2'><i class="layui-icon">&#xe605;</i></div>-->
            <!--</td>-->
            <!--<td>1</td>-->
            <!--<td>小明</td>-->
            <!--<td>男</td>-->
            <!--<td>13000000000</td>-->
            <!--<td>admin@mail.com</td>-->
            <!--<td>北京市 海淀区</td>-->
            <!--<td>2017-01-01 11:11:42</td>-->
            <!--<td class="td-status">-->
              <!--<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span></td>-->
            <!--<td class="td-manage">-->
              <!--<a onclick="member_stop(this,'10001')" href="javascript:;"  title="启用">-->
                <!--<i class="layui-icon">&#xe601;</i>-->
              <!--</a>-->
              <!--<a title="编辑"  onclick="x_admin_show('编辑','<?php echo url('memberEdit'); ?>',600,400)" href="javascript:;">-->
                <!--<i class="layui-icon">&#xe642;</i>-->
              <!--</a>-->
              <!--<a onclick="x_admin_show('修改密码','<?php echo url('memberPassword'); ?>',600,400)" title="修改密码" href="javascript:;">-->
                <!--<i class="layui-icon">&#xe631;</i>-->
              <!--</a>-->
              <!--<a title="删除" onclick="member_del(this,'要删除的id')" href="javascript:;">-->
                <!--<i class="layui-icon">&#xe640;</i>-->
              <!--</a>-->
            <!--</td>-->
          <!--</tr>-->
        </tbody>
      </table>
      <div class="page">
        <div>
          <a class="prev" href="">&lt;&lt;</a>
          <a class="num" href="">1</a>
          <span class="current">2</span>
          <a class="num" href="">3</a>
          <a class="num" href="">489</a>
          <a class="next" href="">&gt;&gt;</a>
        </div>
      </div>

    </div>
    <script>
      layui.use('laydate', function(){
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
      function member_stop(obj,id){
          layer.confirm('确认要停用吗？',function(index){

              if($(obj).attr('title')=='启用'){

                //发异步把用户状态进行更改
                $(obj).attr('title','停用')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                layer.msg('已停用!',{icon: 5,time:1000});

              }else{
                $(obj).attr('title','启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                layer.msg('已启用!',{icon: 5,time:1000});
              }
              
          });
      }

      /*用户-删除*/
      function member_del(obj,id){
          layer.confirm('确认要删除吗？',function(index){
              //发异步删除数据
              $(obj).parents("tr").remove();
              layer.msg('已删除!',{icon:1,time:1000});
          });
      }



      function delAll (argument) {

        var data = tableCheck.getData();
  
        layer.confirm('确认要删除吗？'+data,function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
      }
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>