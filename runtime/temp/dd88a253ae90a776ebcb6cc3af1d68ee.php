<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\xampp\htdocs\ArcticTern_1/application/login\view\index\zhuye.html";i:1532931387;s:56:"D:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"D:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/ArcticTern_1/public/static/img/activity/logo_2.png">

    <meta charset="UTF-8">
    <title>个人主页</title>
    <script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/login/zhuye.css">
    <!--<link rel="stylesheet" href="/ArcticTern_1/public/static/css/footer.css">-->
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/nav.css">
</head>
<body>
    <header>
        <!--导航-->
        <div id="nav">
    <div class="nav_logo">
        <a href="<?php echo url('index/index/index'); ?>">
            <!--<img src="/ArcticTern_1/public/static/img/destination/logo_116x36.png" width="58px" height="18px">-->
        </a>

    </div>
    <ul id="main" class="mainNav">
        <li>
            <a href="<?php echo url('index/index/index'); ?>">首页</a>
        </li>
        <li>
            <a href="#">路线</a>
            <ul class="drop">
                <div>
                    <li>
                        <a href="<?php echo url('trip_planning/index/index'); ?>">
                            <span class="glyphicon glyphicon-plane"></span>
                            行程规划
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('destination/index/index'); ?>">
                            <span class="glyphicon glyphicon-map-marker"></span>
                            目的地
                        </a>
                    </li>
                </div>
            </ul>
        </li>
        <li>
            <a href="<?php echo url('fingerpost/index/index'); ?>">户外指南</a>
        </li>
        <li>
            <a href="<?php echo url('activity/index/index'); ?>">活动</a>
        </li>
        <li>
            <a href="<?php echo url('about/index/index'); ?>">社区</a>
        </li>
        <li>
            <a href="#">服务</a>
        </li>
        <li>
            <a href="<?php echo url('about/index/index'); ?>">关于我们</a>
        </li>
        <div id="marker"></div>
    </ul>
    <div class="subNav">

        <ul>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-search"></i>
                </a>
            </li>
            <li>
                <p>丨</p>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-phone"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-globe"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo url('login/index/zhuye'); ?>"><?php echo \think\Session::get('user_name'); ?></a>
            </li>
            <li>
                <a href="<?php echo url('login/index/index'); ?>">登录|注册</a>
            </li>
        </ul>
    </div>
</div>

        <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="nav">
            <div class="nav-top">
                <!--<div id="mini" style="border-bottom:1px solid rgba(255,255,255,.1)"><img src="/ArcticTern_1/public/static/img/login/mini.png" ></div>-->
                <div class="tx">
                    <img src="/ArcticTern_1/public/static/img/login/tx.png">
                </div>
                <div class="mz">
                    <a href="#"><?php echo \think\Session::get('user_name'); ?></a>
                </div>
                <div class="detail">
                    <a href="#"><span>0</span>关注</a>
                    <a href="#"><span>0</span>粉丝</a>
                </div>
            </div>
            <div class="nav-but">
                <a href="#">发新话题</a>
                <a href="#">发新活动</a>
            </div>
            <ul class="nav-content">

                <li class="nav-item">
                    <a href="#"><i class="glyphicon glyphicon-home"></i><span>个人首页</span></a>
                </li>
                <li class="nav-item">
                    <a href="#"><i class="glyphicon glyphicon-heart"></i><span>我的想法</span></a>
                </li>
                <li class="nav-item">
                    <a href="#"><i class="glyphicon glyphicon-edit"></i><span>足迹点评</span></a>
                </li>
                <li class="nav-item">
                    <a href="#"><i class="glyphicon glyphicon-th-list"></i><span>行程计划</span></a>
                </li>
                <li class="nav-item">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i><span>设置</span></a>
                    <ul class="myul">
                        <li>
                            <a href="#"><span>个人资料</span></a>
                        </li>
                        <li>
                            <a href="#"><span>账号管理</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <div class="content_top">
        <ul>
            <li>
                <a href="#" data-toggle="tab">个人资料</a>
            </li>
            <li>
                <a href="#" data-toggle="tab">关注</a>
            </li>
            <li>
                <a href="#" data-toggle="tab">粉丝</a>
            </li>
            <li>
                <a href="#" data-toggle="tab">邮件订阅</a>
            </li>
            <li>
                <a href="#" data-toggle="tab">账号管理</a>
            </li>
            <li>
                <a href="#" data-toggle="tab">修改密码</a>
            </li>
            <li>
                <a href="#" data-toggle="tab">修改头像</a>
            </li>
        </ul>
    </div>
    <div class="content">
        <form method="post">
        <div class="information">
            <span>个人资料</span>
        </div>
        <div class="inforcontent">
            <div class="list">
                <div class="list_left">用户名:</div>
                <div class="list_right">
                    <input type="text" class="form-control"  aria-describedby="basic-addon2" name="name" value="<?php echo $des['name']; ?>" required="required">
                </div>
            </div>
            <div class="list">
                <div class="list_left">密码:</div>
                <div class="list_right">
                    <input type="password" class="form-control"  aria-describedby="basic-addon2" name="password" required="required">
                </div>
            </div>
            <div class="list">
                <div class="list_left">手机号：</div>
                <div class="list_right">
                    <input type="number" class="form-control"  aria-describedby="basic-addon2" name="phone" value="<?php echo $des['phone']; ?>" required="required">
                </div>
            </div>
            <div class="list">
                <div class="list_left">邮箱：</div>
                <div class="list_right">
                    <input type="email" class="form-control"  aria-describedby="basic-addon2" name="email" value="<?php echo $des['email']; ?>" required="required">
                </div>
            </div>
            <div class="list">
                <div class="list_left">地址：</div>
                <div class="list_right">
                    <input type="text" class="form-control"  aria-describedby="basic-addon2" name="address" value="<?php echo $des['address']; ?>" required="required">
                </div>
            </div>
            <div class="list">
                <div class="list_left">性别:</div>
                <div class="list_right">
                    <div class="input">
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="inlineRadio1" value="男" required="required"> 男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="inlineRadio2" value="女" required="required"> 女
                        </label>
                    </div>
                </div>
            </div>
            <button class="xiugai" name="button">修改</button>
            <a class="tuichu" href="<?php echo url('tc'); ?>">退出登录</a>
        </div>
        </form>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
        <!--<div id="footer">
        <div class="foot">
            <p class="nav1">
                <a href="<?php echo url('about/index/index'); ?>">穷游简介</a>
                <a href="#">合作伙伴</a>
                <a href="#">加入我们</a>
                <a href="#">新手上路</a>
                <a href="#">使用帮助</a>
                <a href="#">网站地图</a>
                <a href="#">会员条款</a>
                <a href="#">社区指南</a>
                <a href="#">版权声明</a>
                <a href="#">负责声明</a>
                <a href="#">联系我们</a>
            </p>
            <p class="info">
                2004-2018 北极燕鸥 qyer.com All rights reserved. Version v5.57 京ICP备12003524号 京公网安备11010102001935号
                京ICP证140673号
                <a target="_blank" href="//static.qyer.com/images/yyzz.jpg">营业执照</a>
                <a target="_blank" href="//static.qyer.com/images/jyxkz.jpg">经营许可证</a>
            </p>
            <p class="nav2">
                友情链接：
                <a href="#">交通查询</a>
                <a href="#">余味全球美食</a>
                <a href="#">中国国家地理</a>
                <a href="#">台湾自由行</a>
                <a href="#">美国旅行</a>
                <a href="#">处境旅游</a>
                <a href="#">北京旅游网</a>
            </p>
        </div>
    </div>-->
    <script src="/ArcticTern_1/public/static/js/login/zhuye.js"></script>
    <script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
    <script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
    <script type="text/javascript">
        $(".pick-area1").pickArea();
    </script>
</body>
</html>