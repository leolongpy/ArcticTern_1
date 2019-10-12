<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\phpStudy\PHPTutorial\WWW\ArcticTern_1/application/fingerpost\view\index\index.html";i:1529630041;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>北极燕鸥项目</title>
    <link href="/ArcticTern_1/public/static/css/bootstrap.css" rel="stylesheet">
    <link href="/ArcticTern_1/public/static/css/fingerpost/index.css" rel="stylesheet">
</head>
<body onload="load()" class="bg">
<div class="container col-md-12 col-xs-12">
    <div id="header">
        <!--导航-->
        <nav>
            <div class="menu">
                <ul>
                    <li>
                        <a href="#" style="color: #10b041">首页</a>
                    </li>
                    <li>
                        <a href="#">目的地</a>
                    </li>
                    <li>
                        <a href="#">行程规划</a>
                    </li>
                    <li>
                        <a href="#">活动</a>
                    </li>
                    <li>
                        <a href="#">社区</a>
                    </li>
                    <li>
                        <a href="#">户外指南</a>
                    </li>
                    <li>
                        <a href="#">服务</a>
                    </li>
                    <li>
                        <a href="#">关于我们</a>
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
                        <a href="#">注册</a>
                    </li>
                    <li>
                        <a href="#">登录</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--轮播图-->
    <div class="carousel col-md-11  ">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
                <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
                <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
                <!--<li data-target="#carousel-example-generic" data-slide-to="3"></li>-->
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/ArcticTern_1/public/static/img/fingerpost/31.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/ArcticTern_1/public/static/img/fingerpost/38.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/ArcticTern_1/public/static/img/fingerpost/37.jpg" alt="">
                </div>
                <div class="item">
                    <img src="/ArcticTern_1/public/static/img/fingerpost/35.jpg" alt="">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <span style="color: red;font-size: 14px;font-weight: bold;position: relative;top: 10px;left: 47px">热门目的地推荐：</span>
    </div>
    <!--文字滚动-->
    <div class="scrolling col-md-9 col-md-offset-2" id="demo">
        <div class="qimo">
            <div id="demo1">
                <ul>
                    <li><a href='#' >当雄</a></li>
                    <li><a href='#' >三江源</a></li>
                    <li><a href='#' >可可西里</a></li>
                    <li><a href='#' >青海湖</a></li>
                    <li><a href='#' >拉萨</a></li>
                    <li><a href='#' >玉珠峰</a></li>
                    <li><a href='#' >香港麦理浩径第一段徒步</a></li>
                    <li><a href='#' >香港凤凰径徒步</a></li>
                    <li><a href='#' >长白山</a></li>
                    <li><a href='#' >临江</a></li>
                    <li><a href='#' >狮子山</a></li>
                    <li><a href='#' >八仙岭</a></li>
                    <li><a href='#' >船湾</a></li>
                    <li><a href='#' >江苏·扬州</a></li>
                    <li><a href='#' >江苏·南京</a></li>
                    <li><a href='#' >浙江·绍兴</a></li>
                    <li><a href='#' >浙江·杭州</a></li>
                </ul>
            </div>
            <div id="demo2"></div>

        </div>
    </div>
    <!--指南模块-->
    <div class="guide col-md-12">
        <div class="foot col-md-2">
            <a href="#run"> <img  src="/ArcticTern_1/public/static/img/fingerpost/23.jpg" alt=""/></a>
            <span>徒步</span>
        </div>
        <div class="diving col-md-2">
            <a href="#swim"> <img src="/ArcticTern_1/public/static/img/fingerpost/24.jpg" alt=""/></a>
            <span>潜水</span>
        </div>
        <div class="cycling col-md-2">
            <a href="#ride"> <img src="/ArcticTern_1/public/static/img/fingerpost/25.jpg" alt=""/></a>
            <span>骑行</span>
        </div>
        <div class="other col-md-2">
            <a href="#else"> <img src="/ArcticTern_1/public/static/img/fingerpost/26.jpg" alt=""/></a>
            <span>其他</span>
        </div>
    </div>
    <!--徒步模块-->
    <div class="content  col-md-12" id="run">
        <div class="first">
            <img src="/ArcticTern_1/public/static/img/fingerpost/11.png" alt=""/>
            <span>徒步</span>
            <a href="javascript:void(0)"style="position: relative;left: 830px;top: 20px" id="more">更多>></a>
        </div>
            <a href="#">曼谷及周边 · 城市探索指南</a>
            <a href="#" style="margin-left: 100px">新西兰 · 徒步指南</a>
            <a href="#" style="margin-left: 115px;text-align: center">年保玉则 · 徒步指南</a>
            <a href="#" style="margin-left: 115px">阿玛尼卿 · 徒步指南</a>
            <div class="first_box1 col-md-2 ">
            <img src="/ArcticTern_1/public/static/img/fingerpost/6.jpg" alt="">
            <div class="mask-inner">
                <p>曼谷及周边 · 搜索指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box2 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/7.jpg" alt="">
            <div class="mask-inner">
                <p>新西兰 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box4 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/9.jpg" alt="">
            <div class="mask-inner">
                <p>阿玛尼卿 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
            <div class="first_box4  col-md-2 col-md-offset-1" style="display: none">
                <img src="/ArcticTern_1/public/static/img/fingerpost/9.jpg" alt="">
                <div class="mask-inner">
                    <p>曼谷及周边 · 搜索指南</p>
                    <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                    <span class="text">点击预览</span>
                </div>
            </div>
    </div>
    <!--徒步更多模块-->
    <div class="two col-md-12 ">
        <a href="#">梅里外转 · 徒步指南</a>
        <a href="#">梅里内转 · 徒步指南</a>
        <a href="#">冈仁波齐 · 徒步指南</a>
        <a href="#">尕朵觉悟 · 徒步指南</a>
        <div class="first_box1 col-md-2 ">
            <img src="/ArcticTern_1/public/static/img/fingerpost/6.jpg" alt="">
            <div class="mask-inner">
                <p>梅里外转 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <a href="javascript:void(0)" style="position: relative;left: 1020px;top: 30px" id="hide">收回>></a>
    </div>
    <!--潜水模块-->
    <div class="content2 col-md-12" id="swim">
        <div class="first">
            <img src="/ArcticTern_1/public/static/img/fingerpost/44.png" alt=""/>
            <span><font color="#187be0">潜水</font></span>
            <a href="javascript:void(0)"style="position: relative;left: 810px;top: 20px;" id="more2">更多>></a>
        </div>
        <a href="#">马尔代夫 · 潜水指南</a>
        <a href="#">亚庇 · 潜水指南</a>
        <a href="#" style="margin-left: 110px">美娜多 · 潜水指南</a>
        <a href="#">阿尼洛 · 潜水指南</a>
        <div class="first_box1 col-md-2 ">
            <img src="/ArcticTern_1/public/static/img/fingerpost/10.jpg" alt="">
            <div class="mask-inner">
                <p>马尔代夫 · 潜水指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box2 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/12.jpg" alt="">
            <div class="mask-inner">
                <p>亚庇 · 潜水指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/13.jpg" alt="">
            <div class="mask-inner">
                <p>美娜多 · 潜水指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box4 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/14.jpg" alt="">
            <div class="mask-inner">
                <p>阿尼洛 · 潜水指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
    </div>
    <!--潜水更多模块-->
    <div class="three col-md-12 ">
        <a href="#">梅里外转 · 徒步指南</a>
        <a href="#">梅里内转 · 徒步指南</a>
        <a href="#">冈仁波齐 · 徒步指南</a>
        <a href="#">尕朵觉悟 · 徒步指南</a>
        <div class="first_box1 col-md-2 ">
            <img src="/ArcticTern_1/public/static/img/fingerpost/6.jpg" alt="">
            <div class="mask-inner">
                <p>梅里外转 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <a href="javascript:void(0)" style="position: relative;left: 1020px;top: 30px" id="hide2">收回>></a>
    </div>
    <!--骑行模块-->
    <div class="content3 col-md-12" id="ride">
        <div class="first">
            <img src="/ArcticTern_1/public/static/img/fingerpost/22.png" alt=""/>
            <span><font color="#36b601">骑行</font></span>
            <a href="javascript:void(0)"style="position: relative;left: 810px;top: 20px;" id="more3">更多>></a>
        </div>
        <a href="#">新西兰 · 骑行指南</a>
        <a href="#">台湾环岛 · 骑行指南</a>
        <a href="#">川藏线 · 骑行指南</a>
        <a href="#">青海湖 · 骑行指南</a>
        <div class="first_box1 col-md-2 ">
            <img src="/ArcticTern_1/public/static/img/fingerpost/15.jpg" alt="">
            <div class="mask-inner">
                <p>新西兰 · 骑行指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box2 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/16.jpg" alt="">
            <div class="mask-inner">
                <p>台湾环岛 · 骑行指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/17.jpg" alt="">
            <div class="mask-inner">
                <p>川藏线 · 骑行指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box4 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/18.jpg" alt="">
            <div class="mask-inner">
                <p>青海湖 · 骑行指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
    </div>
    <!--骑行更多模块-->
    <div class="fore col-md-12 ">
        <a href="#">梅里外转 · 徒步指南</a>
        <a href="#">梅里内转 · 徒步指南</a>
        <a href="#">冈仁波齐 · 徒步指南</a>
        <a href="#">尕朵觉悟 · 徒步指南</a>
        <div class="first_box1 col-md-2 ">
            <img src="/ArcticTern_1/public/static/img/fingerpost/6.jpg" alt="">
            <div class="mask-inner">
                <p>梅里外转 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <a href="javascript:void(0)" style="position: relative;left: 1020px;top: 30px" id="hide3">收回>></a>
    </div>
    <!--其他模块-->
    <div class="content4 col-md-12" id="else">
        <div class="first">
            <img src="/ArcticTern_1/public/static/img/fingerpost/33.png" alt=""/>
            <span><font color="#f78900">其他</font></span>
            <a href="javascript:void(0)"style="position: relative;left: 810px;top: 20px;" id="more4">更多>></a>
        </div>
        <a href="#">新西兰 · 自驾指南</a>
        <a href="#">山野 · 安全指南</a>
        <a href="#" style="margin-left: 120px">溯溪 · 安全指南</a>
        <a href="#">骑行 · 安全指南</a>
        <div class="first_box1 col-md-2 ">
            <img src="/ArcticTern_1/public/static/img/fingerpost/19.jpg" alt="">
            <div class="mask-inner">
                <p>新西兰 · 自驾指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box2 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/20.jpg" alt="">
            <div class="mask-inner">
                <p>山野 · 安全指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/21.jpg" alt="">
            <div class="mask-inner">
                <p>溯溪 · 安全指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box4 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/22.jpg" alt="">
            <div class="mask-inner">
                <p>骑行 · 安全指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
    </div>
    <!--其他更多模块-->
    <div class="five col-md-12 ">
        <a href="#">梅里外转 · 徒步指南</a>
        <a href="#">梅里内转 · 徒步指南</a>
        <a href="#">冈仁波齐 · 徒步指南</a>
        <a href="#">尕朵觉悟 · 徒步指南</a>
        <div class="first_box1 col-md-2 ">
            <img src="/ArcticTern_1/public/static/img/fingerpost/6.jpg" alt="">
            <div class="mask-inner">
                <p>梅里外转 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <a href="javascript:void(0)" style="position: relative;left: 1020px;top: 30px" id="hide4">收回>></a>
    </div>
    <!--底部-->
    <div id="footer">
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
                2004-2018  穷游网  qyer.com All rights reserved. Version v5.57  京ICP备12003524号  京公网安备11010102001935号  京ICP证140673号
                <a target="_blank" style="color:inherit;" href="//static.qyer.com/images/yyzz.jpg">营业执照</a>
                <a target="_blank" style="color:inherit;" href="//static.qyer.com/images/jyxkz.jpg">经营许可证</a>
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
</div>
<!--返回顶部-->
<div id="share">
    <a id="totop" title="">返回顶部</a>
    <a href="#" target="_blank" class="sina">关注找魔酷阁新浪微博</a>
    <a href="#"  target="_blank" class="tencent">关注找魔酷阁腾讯微博</a>
</div>
<!--loading加载动画-->
<!--<div id="loading">-->
    <!--<div id="loading-center">-->
        <!--<div id="loading-center-absolute">-->
            <!--<div class="object" id="object_one"></div>-->
            <!--<div class="object" id="object_two"></div>-->
            <!--<div class="object" id="object_three"></div>-->
            <!--<div class="object" id="object_four"></div>-->
            <!--<div class="object" id="object_five"></div>-->
            <!--<div class="object" id="object_six"></div>-->
            <!--<div class="object" id="object_seven"></div>-->
            <!--<div class="object" id="object_eight"></div>-->
            <!--<div class="object" id="object_nine"></div>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
<script src="/ArcticTern_1/public/static/js/fingerpost/index.js"></script>
</body>
</html>