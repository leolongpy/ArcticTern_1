<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpStudy\PHPTutorial\WWW\ArcticTern_1/application/activity\view\index\index.html";i:1529659644;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>活动策划</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/activity/index.css">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
        }

    </style>
</head>
<body>
<!-- 头部-->
<header>
    <!--导航-->
    <nav>
        <!--logo-->
        <div class="logo">
            <!--<a href="#">
                <img src="img/logo.png" alt="">
            </a>-->
        </div>
        <!--菜单-->
        <div class="menu">
            <ul>
                <li>
                    <a href="<?php echo url('index/index/index'); ?>" style="color: #10b041">首页</a>
                </li>
                <li>
                    <a href="<?php echo url('destination/index/index'); ?>">目的地</a>
                </li>
                <li>
                    <a href="<?php echo url('trip_planning/index/index'); ?>">行程规划</a>
                </li>
                <li>
                    <a href="<?php echo url('activity/index/index'); ?>">活动</a>
                </li>
                <li>
                    <a href="#">社区</a>
                </li>
                <li>
                    <a href="<?php echo url('fingerpost/index/index'); ?>">户外指南</a>
                </li>
                <li>
                    <a href="#">服务</a>
                </li>
                <li>
                    <a href="<?php echo url('about/index/index'); ?>">关于我们</a>
                </li>
            </ul>
        </div>

        <!--子菜单-->
        <div class="submenu">

            <ul>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-phone"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-send"></i>
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


    <!--标题-->
    <div class="col-md-12 title">
        <img src=/ArcticTern_1/public/static/img/activity/bg.png>
    </div>

    <!--轮播图-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:1100px;margin: auto">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/ArcticTern_1/public/static/img/activity/lb1.jpg" alt="">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="/ArcticTern_1/public/static/img/activity/lb2.jpg" alt="">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="/ArcticTern_1/public/static/img/activity/lb3.jpg" alt="">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
</header>

<!--内容区-->
<div class="content">
    <!--活动区 -->
    <div class="column">
        <div class="column_title">
            <div class="title_left">
                <span>活动</span>
            </div>
            <div class="title_right">
                <div class="title_text1">ACTIVITY</div>
                <div class="title_text2">PROJECT</div>
            </div>
        </div>
        <div class="column_2">
            <ul>
                <li style="margin-left: 30px">
                    <a href="#ZT_1" data-toggle="tab"> 全部</a>
                </li>
                <li>
                    <a href="#ZT_2" data-toggle="tab">地球研习社</a>
                </li>
                <li>
                    <a href="#ZT_3" data-toggle="tab">story</a>
                </li>
                <li>
                    <a href="#ZT_4" data-toggle="tab">去也</a>
                </li>
                <li>
                    <a href="#ZT_5" data-toggle="tab">榜单</a>
                </li>
            </ul>
        </div>
        <div class="column_3">
            <img src="/ArcticTern_1/public/static/img/activity/bg2.png">
        </div>
    </div>

    <!--内容区-->
    <div class="tab-content">
        <div class="content_img tab-pane fade in active tab" id="ZT_1">
            <div class="content_img">

                <ul>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A1.png" width="346">
                                <div class="img_text">
                                    <p>《Q-story》 2018年第一期：佐味南澳，张钧甯的杯酒人生</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A2.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》 第九期：漫游欧洲 光阴河轮</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A3.png" width="346">
                                <div class="img_text">
                                    <p>佳能微单 EOS M50:多彩突尼斯</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A4.png" width="346">
                                <div class="img_text">
                                    <p>韩国旅游发展局：异想韩国</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A5.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第八期：迪士尼巨星嘉年华</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A6.png" width="346">
                                <div class="img_text">
                                    <p>探路者：探路英雄召集令</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A7.png" width="346">
                                <div class="img_text">
                                    <p>昆士兰旅游局：寻找拍照王！</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A8.png" width="346">
                                <div class="img_text">
                                    <p>美丽中国·全旅游年</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A9.png" width="346">
                                <div class="img_text">
                                    <p>招商银行信用卡：新青年十一出境旅行报告</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A10.png" width="346">
                                <div class="img_text">
                                    <p>VISA:热力燃冬，助威奥运</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A11.png" width="346">
                                <div class="img_text">
                                    <p>租租车：2017境外自驾冷门大数据</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A12.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第五期：有想"法"就走吧</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="num">
                <ul>
                    <li style="background: #5ea67c!important;">
                        <a href="#ZT_1" data-toggle="tab" style="color: white">1</a>
                    </li>
                    <li>
                        <a href="#ZT_6" data-toggle="tab">2</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade  tab" id="ZT_2">
            <div class="content_img">
                <ul>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A2.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》 第九期：漫游欧洲 光阴河轮</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A5.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第八期：迪士尼巨星嘉年华</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/D3.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》 第七期：荷兰</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B8.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》 第六期：清迈</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A12.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第五期：有想"法"就走吧</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B6.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第四期：七夕特辑</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B6.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第三期：摩洛哥</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B4.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第二期：潜水</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B5.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第一期：勘察加半岛</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade  tab" id="ZT_3">
            <div class="content_img">
                <ul>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A1.png" width="346">
                                <div class="img_text">
                                    <p>《Q-story》 2018年第一期：佐味南澳，张钧甯的杯酒人生</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/Q3.png" width="346">
                                <div class="img_text">
                                    <p>《Q-story》第二期：李霄云</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B4.png" width="346">
                                <div class="img_text">
                                    <p>Q-story》第一期：小老虎</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade  tab" id="ZT_4">
            <div class="content_img">
                <ul>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/Y1.png" width="346">
                                <div class="img_text">
                                    <p>《去也》第一期：歌词达46天环邮世界</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade  tab" id="ZT_5">
            <div class="content_img">
                <ul>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/A12.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第五期：有想"法"就走吧</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade  tab" id="ZT_6">

            <div class="content_img">
                <ul>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B1.png" width="346">
                                <div class="img_text">
                                    <p>迪拜：让好事发生</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B2.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第七期：荷兰</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B3.png" width="346">
                                <div class="img_text">
                                    <p>香港迪士尼：圣诞时刻</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B4.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》 第二期：潜水</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B5.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第一期：勘察加半岛</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B6.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第三期：七夕特辑</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B7.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第三期：摩洛哥</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B8.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第二期：潜水</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/B9.png" width="346">
                                <div class="img_text">
                                    <p>《地球研习社》第一期：勘察加半岛</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="num">
                <ul>
                    <li>
                        <a href="#ZT_1" data-toggle="tab">1</a>
                    </li>
                    <li style="background: #5ea67c!important;">
                        <a href="#ZT_6" data-toggle="tab" style="color: white">2</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--底部-->
<footer>
    <div class="foot">
        <p class="nav1">
            <a href="#" style="border-left: 3px solid #25a851; padding-left: 12px;">穷游简介</a>
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
            2004-2018 穷游网 qyer.com

            All rights reserved. Version v5.57 京ICP备12003524号 京公网安备11010102001935号 京ICP证140673号
            <a target="_blank" style="color:inherit;" href="//static.qyer.com/images/yyzz.jpg

">营业执照</a>
            <a target="_blank" style="color:inherit;" href="//static.qyer.com/images/jyxkz.jpg

">经营许可证</a>
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
</footer>

<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
</body>
</html>
