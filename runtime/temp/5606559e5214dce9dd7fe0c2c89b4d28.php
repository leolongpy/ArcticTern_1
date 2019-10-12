<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\xampp\htdocs\ArcticTern_1/application/destination\view\index\create.html";i:1531102318;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/destination/create.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/destination/nav.css">
</head>
<body>
<div id="warpper">
    <div id="header">
        <!--导航-->
        <nav>
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
                        <a href="<?php echo url('login/index/index'); ?>">注册</a>
                    </li>
                    <li>
                        <a href="<?php echo url('login/index/login'); ?>">登录</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--头部结束-->
    <div id="content">
        <form action="">
            <input type="text" class="f_header" placeholder="在这里输入标题">
            <br>
            <textarea  class="f_content" placeholder="在这里输入内容"></textarea>
            <br>
            <input type="submit" class="f_submit" value="发表游记">
        </form>
    </div>
    <div id="footer">
        <div class="foot">
            <p class="nav1">
                <a href="#">穷游简介</a>
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
                <a target="_blank"  href="//static.qyer.com/images/yyzz.jpg">营业执照</a>
                <a target="_blank"  href="//static.qyer.com/images/jyxkz.jpg">经营许可证</a>
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

    </div>
    <!--底部结束-->

</div>
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
</body>
</html>