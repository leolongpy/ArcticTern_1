<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\ArcticTern_1/application/destination\view\index\index.html";i:1531984456;s:56:"D:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"D:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>目的地</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/destination/index.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/destination/hover.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/nav.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/footer.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
    <script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
    <script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
</head>
<body>
<!--头部-->
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

    <!--大图-->
    <div class="banner">
        <!--文字-->
        <div class="inner">
            <div class="title">
                <span>你好，世界！</span>
            </div>
        </div>
        <!--搜索-->
        <div class="input-group myinput">
            <input type="text" class="form-control" placeholder="搜索国家、城市、目的地">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <span>
                        <i class="glyphicon glyphicon-search "></i>
                        搜索
                    </span>
                </button>
            </span>
        </div>
    </div>
</header>
<!--内容-->
<div class="content">
    <div class="hot">
        <h3>热门城市推荐</h3>
        <ul class=" myTab" id="mainHot">
            <li class="active">
                <a href="#hot1" data-toggle="tab">热门推荐</a>
            </li>
            <li>
                <a href="#hot2" data-toggle="tab">日韩 港澳台</a>
            </li>
            <li>
                <a href="#hot3" data-toggle="tab">东南亚及亚洲其他</a>
            </li>
            <li>
                <a href="#hot4" data-toggle="tab">欧洲</a>
            </li>
            <li>
                <a href="#hot5" data-toggle="tab">大洋洲 北美</a>
            </li>
            <li>
                <a href="#hot6" data-toggle="tab">非洲 南美</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active tab" id="hot1">
                <ul>
                    <li>
                        <dl>
                            <dt>全球Top 10 城市</dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">巴黎</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">曼谷</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">香港</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">台北</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">新加坡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">东京</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">罗马</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">伦敦</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">首尔</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">洛杉矶</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>免签及落地签最热旅行地</dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">济州岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">柬埔寨</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">泰国</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">塞班岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">摩洛哥</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">卡塔尔</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">毛里求斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">印度尼西亚</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">厄瓜多尔</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>热门海岛</dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">塞班岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">长滩岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马尔代夫</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">沙巴</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">普吉岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">巴厘岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">芽庄</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">帕劳</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">冲绳市</a>
                            </dd>
                        </dl>
                    </li>
                </ul>

            </div>
            <div class="tab-pane fade tab" id="hot2">
                <ul class="center">
                    <li class="item">
                        <dl>
                            <dt>港澳台</dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">香港</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">澳门</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">台北</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">垦丁</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">花莲</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">高雄市</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">台中市</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">九份</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">台南</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">淡水</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">宜兰</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">日本</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">东京</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">大阪</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">京都</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">冲绳</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">北海道</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">名古屋</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">奈良</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">札幌</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">富士山</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">箱根</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">镰仓</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">神户</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">韩国</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">首尔</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">济州岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">釜山</a>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade tab" id="hot3">
                <ul class="center">
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">泰国</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">曼谷</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">普吉岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">清迈</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">苏梅岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">芭提雅</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">甲米</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">华欣</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">皮皮岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">泰国象岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">拜县</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">新加坡</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">新加坡</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">越南</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">芽庄</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">岘港</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">胡志明市</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">河内</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">美奈</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">大叻</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">富国岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">下龙湾</a>

                            </dd>
                        </dl>

                    </li>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马来西亚</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">沙巴</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">吉隆坡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">槟城</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">亚庇</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">兰卡威</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马六甲</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">印度尼西亚</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">巴厘岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">美娜多</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">乌布德</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">菲律宾</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">长滩岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马尼拉</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">薄荷岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">杜马盖地</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">宿雾市</a>

                            </dd>
                        </dl>

                    </li>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">斯里兰卡</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">科伦坡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">斯里兰卡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">康提</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">柬埔寨</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">暹粒</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">金边</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                亚洲其他
                            </dt>

                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">迪拜</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马尔代夫</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">阿布扎比</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">耶路撒冷</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">基什岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">加德满都</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">德里</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">仰光</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">多哈</a>
                            </dd>
                        </dl>

                    </li>
                </ul>
            </div>
            <div class="tab-pane fade tab" id="hot4">
                <ul>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">意大利</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">罗马</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">妇罗伦萨</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">威尼斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">米兰</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">五渔村</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">那不勒斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">西西里岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">比萨</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">维罗纳</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">锡耶纳</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">英国</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">伦敦</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">爱丁堡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">剑桥</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">牛津</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">英国湖区</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">曼切斯特</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">巴斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">约克</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">苏格兰</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">德国</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">慕尼黑</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">法兰克福</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">柏林</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">科隆</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">海德堡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">汉堡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">斯图加特</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">杜塞尔多夫</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">纽伦堡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">德累斯顿</a>

                            </dd>
                        </dl>

                    </li>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">法国</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">巴黎</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">尼斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">普罗旺斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">阿维尼翁</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">里昂</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马赛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">波尔多</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">斯特拉斯堡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">戛纳</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">西班牙</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">巴塞罗那</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马德里</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">塞维利亚</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">格拉纳达</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">瓦伦西亚</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">托莱多</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">西班牙龙达</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马略卡岛</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">瑞士</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">苏黎世</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">因特拉肯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">日内瓦</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">伯尔尼</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">洛桑</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">阿罗萨</a>
                            </dd>
                        </dl>

                    </li>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">奥地利</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">维也纳</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">萨尔茨堡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">哈尔施塔特</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">因斯布鲁克</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">俄罗斯</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">莫斯科</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">贝加尔湖</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">圣彼得堡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">伊尔库茨克</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">捷克</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">布拉格</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">捷克克鲁姆洛夫</a>

                            </dd>
                        </dl>

                    </li>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">荷兰</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">阿姆斯特丹</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">羊角村</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">鹿特丹</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">海牙</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">希腊</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">圣托里尼</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">雅典</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">克里特岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">米勒诺斯岛</a>

                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade tab" id="hot5">
                <ul>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">澳大利亚</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">墨尔本</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">悉尼</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">黄金海岸</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">布里斯班</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">凯恩斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">珀斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">塔斯马尼亚岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">阿德莱德</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">袋鼠岛</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">新西兰</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">奥克兰</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">皇后镇</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">基督城</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">新西兰南岛</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">美国</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">洛杉矶</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">纽约</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">塞班岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">旧金山</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">拉斯维加斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">圣迭戈</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">波士顿</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">华盛顿</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">黄石园家公园</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">夏威夷</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">西雅图</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">关岛</a>

                            </dd>
                        </dl>

                    </li>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">加拿大</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">温哥华</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">班夫国家公园</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">多伦多</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">蒙特利尔</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">加拿大尼亚加拉瀑布城</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                其他
                            </dt>

                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">帕劳</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">坎昆</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">墨西哥城</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">哈瓦那</a>

                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade tab" id="hot6">

                <ul>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">摩洛哥</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">卡萨布兰卡</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马拉喀什</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">菲斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">舍夫沙万</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">埃及</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">开罗</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">卢克索</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">南非</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">开普敦</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">约翰内斯堡</a>

                            </dd>
                        </dl>

                    </li>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">肯尼亚</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">内罗毕</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马赛马拉国家保护区</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">秘鲁</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">马丘比丘</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">利马</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">阿根廷</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">布宜诺斯艾利斯</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">乌斯怀亚</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">阿尔卡拉法特</a>

                            </dd>
                        </dl>

                    </li>
                    <li class="item">
                        <dl>
                           <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">毛里求斯</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">毛里求斯</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">智利</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">圣地亚哥</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">复活节岛</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">巴西</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">里约热内卢</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">圣保罗</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">萨尔瓦多</a>

                            </dd>
                        </dl>

                    </li>
                    <li class="item">
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">玻利维亚</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">乌尤尼</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">拉巴斯</a>

                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="<?php echo url('destination/index/ziye'); ?>">厄瓜多尔</a>
                            </dt>
                            <dd>
                                <a href="<?php echo url('destination/index/ziye'); ?>">加拉帕戈斯群岛</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">基多</a>
                                <a href="<?php echo url('destination/index/ziye'); ?>">瓜亚基尔</a>

                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="box">
                <a href="#mainCountry">
                    <button type="button">
                        <span>查看全部国家</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="theme">
        <h3>主题目的地</h3>
        <ul class="myTab" id="mainThmem">
            <li class="active">
                <a href="#theme1" data-toggle="tab">俯瞰城市</a>
            </li>
            <li>
                <a href="#theme2" data-toggle="tab">怀旧时光</a>
            </li>
            <li>
                <a href="#theme3" data-toggle="tab">魅力夜色</a>
            </li>
            <li>
                <a href="#theme4" data-toggle="tab">神秘遗址</a>
            </li>
            <li>
                <a href="#theme5" data-toggle="tab">跳蚤市场</a>
            </li>
            <li>
                <a href="#theme6" data-toggle="tab">最爱小镇</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="theme1">
                <div class="theme_min">
                    <div class="theme_img1">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/1-1.png" height="400px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title1">洛克菲勒观景台</h2>
                                    <p class="info1" data-toggle="modal" data-target="#modal4">
                                        这里是欣赏曼哈顿天际线的绝佳位置，观景台一共有三层，不仅可以将帝国大夏、新世贸中心大楼等
                                        摩天大楼尽收眼底，向北可鸟瞰中央公园，甚至可以看到自由女神像的绰约风姿。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/1-2.png" width="100%" height="380px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">碎片大厦</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        天气晴朗的日子里，在碎片大厦观景台可以将伦敦市景一收
                                        眼底，伦敦眼、大本钟、泰晤士河......只描摹出城市轮
                                        廓的夕阳景色更是出众。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/1-3.png" width="100%" height="380px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">太平山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        太平山是香港最高峰，也是俯瞰香港的比到处
                                        ，太平山顶可饱览维多利亚港全貌和薄
                                        扶林水塘的自然美景
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/1-4.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">六本木新城</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        六本木Hills建成于2003年，
                                        54层楼的玻璃大厦内有200多家店铺，
                                        餐饮、购物、娱乐一应俱全，
                                        很多日本人讲它当做六本木的代名词。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/1-5.png" width="100%" height="380px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">米开朗琪罗广场</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        米开朗琪罗广场位于佛罗伦萨市区南端的高地上，
                                        广场雄踞半山腰，坐视整个佛罗伦萨城及远处起
                                        伏不断的丘陵，气势非凡，风光无限。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/1-6.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">象山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        山不高，但前无屏障，台北盆地一览无遗，
                                        不仅是登高眺望的好据点，
                                        也是拍摄101高楼的绝佳地点。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/1-7.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">蒙帕纳斯大楼</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        这蒙帕纳斯大楼（又称蒙巴纳斯高楼）建于1972年，
                                        共59层，高209米，是巴黎市区除埃菲尔铁塔外
                                        最高的建筑，也是市区唯一的一座摩天大楼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="theme2">
                <div class="theme_min">
                    <div class="theme_img1">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/2-1.png" height="410px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title1">洛克菲勒观景台</h2>
                                    <p class="info1" data-toggle="modal" data-target="#modal4">
                                        这里是欣赏曼哈顿天际线的绝佳位置，观景台一共有三层，不仅可以将帝国大夏、新世贸中心大楼等
                                        摩天大楼尽收眼底，向北可鸟瞰中央公园，甚至可以看到自由女神像的绰约风姿。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/2-2.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">碎片大厦</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        天气晴朗的日子里，在碎片大厦观景台可以将伦敦市景一收
                                        眼底，伦敦眼、大本钟、泰晤士河......只描摹出城市轮
                                        廓的夕阳景色更是出众。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/2-3.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">太平山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        太平山是香港最高峰，也是俯瞰香港的比到处
                                        ，太平山顶可饱览维多利亚港全貌和薄
                                        扶林水塘的自然美景
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/2-4.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">六本木新城</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        六本木Hills建成于2003年，
                                        54层楼的玻璃大厦内有200多家店铺，
                                        餐饮、购物、娱乐一应俱全，
                                        很多日本人讲它当做六本木的代名词。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/2-5.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">米开朗琪罗广场</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        米开朗琪罗广场位于佛罗伦萨市区南端的高地上，
                                        广场雄踞半山腰，坐视整个佛罗伦萨城及远处起
                                        伏不断的丘陵，气势非凡，风光无限。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/2-6.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">象山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        山不高，但前无屏障，台北盆地一览无遗，
                                        不仅是登高眺望的好据点，
                                        也是拍摄101高楼的绝佳地点。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/2-7.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">蒙帕纳斯大楼</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        这蒙帕纳斯大楼（又称蒙巴纳斯高楼）建于1972年，
                                        共59层，高209米，是巴黎市区除埃菲尔铁塔外
                                        最高的建筑，也是市区唯一的一座摩天大楼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="theme3">
                <div class="theme_min">
                    <div class="theme_img1">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/3-1.png" height="410px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title1">洛克菲勒观景台</h2>
                                    <p class="info1" data-toggle="modal" data-target="#modal4">
                                        这里是欣赏曼哈顿天际线的绝佳位置，观景台一共有三层，不仅可以将帝国大夏、新世贸中心大楼等
                                        摩天大楼尽收眼底，向北可鸟瞰中央公园，甚至可以看到自由女神像的绰约风姿。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/3-2.png" width="140%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">碎片大厦</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        天气晴朗的日子里，在碎片大厦观景台可以将伦敦市景一收
                                        眼底，伦敦眼、大本钟、泰晤士河......只描摹出城市轮
                                        廓的夕阳景色更是出众。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/3-3.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">太平山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        太平山是香港最高峰，也是俯瞰香港的比到处
                                        ，太平山顶可饱览维多利亚港全貌和薄
                                        扶林水塘的自然美景
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/3-4.png" width="120%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">六本木新城</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        六本木Hills建成于2003年，
                                        54层楼的玻璃大厦内有200多家店铺，
                                        餐饮、购物、娱乐一应俱全，
                                        很多日本人讲它当做六本木的代名词。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/3-5.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">米开朗琪罗广场</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        米开朗琪罗广场位于佛罗伦萨市区南端的高地上，
                                        广场雄踞半山腰，坐视整个佛罗伦萨城及远处起
                                        伏不断的丘陵，气势非凡，风光无限。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/3-6.png" width="120%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">象山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        山不高，但前无屏障，台北盆地一览无遗，
                                        不仅是登高眺望的好据点，
                                        也是拍摄101高楼的绝佳地点。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/3-7.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">蒙帕纳斯大楼</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        这蒙帕纳斯大楼（又称蒙巴纳斯高楼）建于1972年，
                                        共59层，高209米，是巴黎市区除埃菲尔铁塔外
                                        最高的建筑，也是市区唯一的一座摩天大楼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="theme4">
                <div class="theme_min">
                    <div class="theme_img1">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/4-1.png" height="410px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title1">洛克菲勒观景台</h2>
                                    <p class="info1" data-toggle="modal" data-target="#modal4">
                                        这里是欣赏曼哈顿天际线的绝佳位置，观景台一共有三层，不仅可以将帝国大夏、新世贸中心大楼等
                                        摩天大楼尽收眼底，向北可鸟瞰中央公园，甚至可以看到自由女神像的绰约风姿。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/4-2.png" width="130%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">碎片大厦</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        天气晴朗的日子里，在碎片大厦观景台可以将伦敦市景一收
                                        眼底，伦敦眼、大本钟、泰晤士河......只描摹出城市轮
                                        廓的夕阳景色更是出众。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/4-3.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">太平山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        太平山是香港最高峰，也是俯瞰香港的比到处
                                        ，太平山顶可饱览维多利亚港全貌和薄
                                        扶林水塘的自然美景
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/4-4.png" width="120%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">六本木新城</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        六本木Hills建成于2003年，
                                        54层楼的玻璃大厦内有200多家店铺，
                                        餐饮、购物、娱乐一应俱全，
                                        很多日本人讲它当做六本木的代名词。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/4-5.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">米开朗琪罗广场</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        米开朗琪罗广场位于佛罗伦萨市区南端的高地上，
                                        广场雄踞半山腰，坐视整个佛罗伦萨城及远处起
                                        伏不断的丘陵，气势非凡，风光无限。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/4-6.png" width="100%" height="300px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">象山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        山不高，但前无屏障，台北盆地一览无遗，
                                        不仅是登高眺望的好据点，
                                        也是拍摄101高楼的绝佳地点。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/4-7.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">蒙帕纳斯大楼</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        这蒙帕纳斯大楼（又称蒙巴纳斯高楼）建于1972年，
                                        共59层，高209米，是巴黎市区除埃菲尔铁塔外
                                        最高的建筑，也是市区唯一的一座摩天大楼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="theme5">
                <div class="theme_min">
                    <div class="theme_img1">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/5-1.png" height="410px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title1">洛克菲勒观景台</h2>
                                    <p class="info1" data-toggle="modal" data-target="#modal4">
                                        这里是欣赏曼哈顿天际线的绝佳位置，观景台一共有三层，不仅可以将帝国大夏、新世贸中心大楼等
                                        摩天大楼尽收眼底，向北可鸟瞰中央公园，甚至可以看到自由女神像的绰约风姿。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/5-2.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">碎片大厦</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        天气晴朗的日子里，在碎片大厦观景台可以将伦敦市景一收
                                        眼底，伦敦眼、大本钟、泰晤士河......只描摹出城市轮
                                        廓的夕阳景色更是出众。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/5-3.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">太平山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        太平山是香港最高峰，也是俯瞰香港的比到处
                                        ，太平山顶可饱览维多利亚港全貌和薄
                                        扶林水塘的自然美景
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/5-4.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">六本木新城</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        六本木Hills建成于2003年，
                                        54层楼的玻璃大厦内有200多家店铺，
                                        餐饮、购物、娱乐一应俱全，
                                        很多日本人讲它当做六本木的代名词。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/5-5.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">米开朗琪罗广场</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        米开朗琪罗广场位于佛罗伦萨市区南端的高地上，
                                        广场雄踞半山腰，坐视整个佛罗伦萨城及远处起
                                        伏不断的丘陵，气势非凡，风光无限。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/5-6.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">象山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        山不高，但前无屏障，台北盆地一览无遗，
                                        不仅是登高眺望的好据点，
                                        也是拍摄101高楼的绝佳地点。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/5-7.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">蒙帕纳斯大楼</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        这蒙帕纳斯大楼（又称蒙巴纳斯高楼）建于1972年，
                                        共59层，高209米，是巴黎市区除埃菲尔铁塔外
                                        最高的建筑，也是市区唯一的一座摩天大楼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="theme6">
                <div class="theme_min">
                    <div class="theme_img1">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/6-1.png" height="410px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title1">洛克菲勒观景台</h2>
                                    <p class="info1" data-toggle="modal" data-target="#modal4">
                                        这里是欣赏曼哈顿天际线的绝佳位置，观景台一共有三层，不仅可以将帝国大夏、新世贸中心大楼等
                                        摩天大楼尽收眼底，向北可鸟瞰中央公园，甚至可以看到自由女神像的绰约风姿。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/6-2.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">碎片大厦</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        天气晴朗的日子里，在碎片大厦观景台可以将伦敦市景一收
                                        眼底，伦敦眼、大本钟、泰晤士河......只描摹出城市轮
                                        廓的夕阳景色更是出众。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/6-3.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">太平山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        太平山是香港最高峰，也是俯瞰香港的比到处
                                        ，太平山顶可饱览维多利亚港全貌和薄
                                        扶林水塘的自然美景
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/6-4.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">六本木新城</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        六本木Hills建成于2003年，
                                        54层楼的玻璃大厦内有200多家店铺，
                                        餐饮、购物、娱乐一应俱全，
                                        很多日本人讲它当做六本木的代名词。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/6-5.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">米开朗琪罗广场</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        米开朗琪罗广场位于佛罗伦萨市区南端的高地上，
                                        广场雄踞半山腰，坐视整个佛罗伦萨城及远处起
                                        伏不断的丘陵，气势非凡，风光无限。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/6-6.png" width="100%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">象山</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        山不高，但前无屏障，台北盆地一览无遗，
                                        不仅是登高眺望的好据点，
                                        也是拍摄101高楼的绝佳地点。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="theme_img2">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/6-7.png" width="110%" height="200px">
                            <a href="<?php echo url('destination/index/jingdian'); ?>">
                                <div class="overlay">
                                    <h2 class="hover_title2">蒙帕纳斯大楼</h2>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        这蒙帕纳斯大楼（又称蒙巴纳斯高楼）建于1972年，
                                        共59层，高209米，是巴黎市区除埃菲尔铁塔外
                                        最高的建筑，也是市区唯一的一座摩天大楼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="month">
        <h3>月度推荐</h3>
        <ul class="myTab2" id="mainMonth">
            <li class="active">
                <a href="#month1" data-toggle="tab">1月</a>
            </li>
            <li>
                <a href="#month2" data-toggle="tab">2月</a>
            </li>
            <li>
                <a href="#month3" data-toggle="tab">3月</a>
            </li>
            <li>
                <a href="#month4" data-toggle="tab">4月</a>
            </li>
            <li>
                <a href="#month5" data-toggle="tab">5月</a>
            </li>
            <li>
                <a href="#month6" data-toggle="tab">6月</a>
            </li>
            <li>
                <a href="#month7" data-toggle="tab">7月</a>
            </li>
            <li>
                <a href="#month8" data-toggle="tab">8月</a>
            </li>
            <li>
                <a href="#month9" data-toggle="tab">9月</a>
            </li>
            <li>
                <a href="#month10" data-toggle="tab">10月</a>
            </li>
            <li>
                <a href="#month11" data-toggle="tab">11月</a>
            </li>
            <li>
                <a href="#month12" data-toggle="tab">12月</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="month1">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_1.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_1.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_1.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_1.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_1.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month2">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_2.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_2.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_2.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_2.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_2.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month3">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_3.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_3.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_3.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_3.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_3.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month4">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_4.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_4.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_4.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_4.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_4.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month5">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_5.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_5.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_5.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_5.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_5.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month6">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_6.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_6.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_6.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_6.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_6.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month7">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_7.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_7.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_7.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_7.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_7.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month8">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_8.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_8.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_8.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_8.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_8.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month9">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_9.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_9.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_9.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_9.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_9.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month10">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_10.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_10.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_10.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_10.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_10.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month11">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_11.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_11.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_11.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_11.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_11.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="month12">
                <div class="month_min">
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_12.1.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>新西兰</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        在北半球处于寒冷的冬季的时候，南半球的新西兰正好春暖花开
                                        。世界上不太能再找出这么一个世外桃源，没有优胜劣汰的压力
                                        ，没有变化极端的气候，只剩下一望无垠的美景，富饶多足的土地。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_12.2.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>韩国·江原道</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        你不用乘十几个小时飞机去地球的另一边，韩国的这个地方就是
                                        为滑雪而生的。江原道的滑雪度假村有最天然的地理优势——60%以
                                        上都处于海拔700米。无论是菜鸟还是专业选手，无论是雪橇还是雪
                                        板，相信来过这里的人都会因征服雪山刺激感，而对这项运动感到“上瘾”。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_12.3.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>美国夏威夷</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        夏威夷是一个神奇的度假海岛，这里一年四季温暖如春，不论你什么时
                                        候来，都能看到蓝天白云和椰林树影。威基基海滩大概是世界
                                        上最出名的海滩，也是多数游人心目中最典型的夏威夷海滩，这里有
                                        细致洁白的沙滩和众多摇曳多姿的椰子树。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_12.4.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>泰国·苏梅岛</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        苏梅岛四面环海，大体上和泰国其他地方一样只有雨季和
                                        旱季，除了十到十二月之外，这里的气候都十分适合旅行。
                                        潜到海里看着海绵、珊瑚、海葵，上岸吃着这里的椰子和红毛
                                        丹 ，抑或去酒吧喝点啤酒释放激情。
                                    </p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="month_img">
                        <div class="hover ehover4">
                            <img src="/ArcticTern_1/public/static/img/destination/month_12.5.png" width="100%" height="100%">
                            <a href="<?php echo url('destination/index/ziye'); ?>">
                                <div class="overlay">
                                    <h3>俄罗斯·贝加尔湖</h3>
                                    <p class="info2" data-toggle="modal" data-target="#modal4">
                                        一年四季，每一个季节都是大自然给我们最好的时光
                                        。如果你能够欣赏冬季的美，那么去贝加尔湖一定没错。
                                        当你全身心的去感受冬季的美，那么其他的季节得模
                                        样就再也无法入了你的眼。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="country" id="mainCountry">
        <h3>国家列表</h3>
        <ul class="myTab">
            <li class="active">
                <a href="#country1" data-toggle="tab">亚洲</a>
            </li>
            <li>
                <a href="#country2" data-toggle="tab">欧洲</a>
            </li>
            <li>
                <a href="#country3" data-toggle="tab">非洲</a>
            </li>
            <li>
                <a href="#country4" data-toggle="tab">北美</a>
            </li>
            <li>
                <a href="#country5" data-toggle="tab">南美</a>
            </li>
            <li>
                <a href="#country6" data-toggle="tab">大洋洲</a>
            </li>
            <li>
                <a href="#country7" data-toggle="tab">南极洲</a>
            </li>
        </ul>
        <p>拼音首字母顺序</p>
        <div class="tab-content mainTab">
            <div class="tab-pane fade in active tab" id="country1">
                <ul class="myTab3">
                    <li>
                        <a href="<?php echo url('destination/index/country'); ?>">阿富汗 Afghanistan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">阿联酋 United Arab Emirates</a>
                        <a href="<?php echo url('destination/index/country'); ?>">阿曼 Oman</a>
                        <a href="<?php echo url('destination/index/country'); ?>">巴基斯坦 Pakistan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">巴林 Bahrain</a>
                        <a href="<?php echo url('destination/index/country'); ?>">不丹 Bhutan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">朝鲜 North Korea</a>
                        <a href="<?php echo url('destination/index/country'); ?>">东帝汶 East Timor</a>
                        <a href="<?php echo url('destination/index/country'); ?>">菲律宾 Philippines</a>
                        <a href="<?php echo url('destination/index/country'); ?>">韩国 South Korea</a>
                        <a href="<?php echo url('destination/index/country'); ?>">哈萨克斯坦 Kazakhstan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">柬埔寨 Cambodia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">吉尔吉斯斯坦 Kyrgyzstan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">卡塔尔 Qatar</a>
                        <a href="<?php echo url('destination/index/country'); ?>">科威特 Kuwait</a>
                        <a href="<?php echo url('destination/index/country'); ?>">老挝 Laos</a>
                        <a href="<?php echo url('destination/index/country'); ?>">黎巴嫩 Lebanon</a>
                        <a href="<?php echo url('destination/index/country'); ?>">马尔代夫 Maldives</a>
                        <a href="<?php echo url('destination/index/country'); ?>">马来西亚 Malaysia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">蒙古 Mongolia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">孟加拉国 Bangladesh</a>
                        <a href="<?php echo url('destination/index/country'); ?>">缅甸 Myanmar</a>
                        <a href="<?php echo url('destination/index/country'); ?>">尼泊尔 Nepal</a>
                        <a href="<?php echo url('destination/index/country'); ?>">日本 Japan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">沙特阿拉伯 Saudi Arabia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">斯里兰卡 Sri Lanka</a>
                        <a href="<?php echo url('destination/index/country'); ?>">泰国 Thailand</a>
                        <a href="<?php echo url('destination/index/country'); ?>">塔吉克斯坦 Tajikistan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">土库曼斯坦 Turkmenistan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">文莱 Brunei</a>
                        <a href="<?php echo url('destination/index/country'); ?>">乌兹别克斯坦 Uzbekistan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">新加坡 Singapore</a>
                        <a href="<?php echo url('destination/index/country'); ?>">叙利亚 Syria</a>
                        <a href="<?php echo url('destination/index/country'); ?>">也门 Yemen</a>
                        <a href="<?php echo url('destination/index/country'); ?>">伊拉克 Iraq</a>
                        <a href="<?php echo url('destination/index/country'); ?>">伊朗 Iran</a>
                        <a href="<?php echo url('destination/index/country'); ?>">印度 India</a>
                        <a href="<?php echo url('destination/index/country'); ?>">印度尼西亚 Indonesia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">英属印度洋领地 British Indian Ocean Territory</a>
                        <a href="<?php echo url('destination/index/country'); ?>">以色列 Israel</a>
                        <a href="<?php echo url('destination/index/country'); ?>">约旦 Jordan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">越南 Vietnam</a>
                        <a href="<?php echo url('destination/index/country'); ?>">中国 China</a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade tab" id="country2">
                <ul class="myTab3">
                    <li>
                        <a href="<?php echo url('destination/index/country'); ?>">阿尔巴尼亚 Albania</a>
                        <a href="<?php echo url('destination/index/country'); ?>">爱尔兰 Ireland</a>
                        <a href="<?php echo url('destination/index/country'); ?>">爱沙尼亚 Estonia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">安道尔 Andorra</a>
                        <a href="<?php echo url('destination/index/country'); ?>">奥地利 Austria</a>
                        <a href="<?php echo url('destination/index/country'); ?>">阿塞拜疆 Azerbaijan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">白俄罗斯 Belarus</a>
                        <a href="<?php echo url('destination/index/country'); ?>">保加利亚 Bulgaria</a>
                        <a href="<?php echo url('destination/index/country'); ?>">比利时 Belgium</a>
                        <a href="<?php echo url('destination/index/country'); ?>">冰岛 Iceland</a>
                        <a href="<?php echo url('destination/index/country'); ?>">波黑 Bosnia &amp; Herzegovina</a>
                        <a href="<?php echo url('destination/index/country'); ?>">波兰 Poland</a>
                        <a href="<?php echo url('destination/index/country'); ?>">丹麦 Denmark</a>
                        <a href="<?php echo url('destination/index/country'); ?>">德国 Germany</a>
                        <a href="<?php echo url('destination/index/country'); ?>">俄罗斯 Russia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">法国 France</a>
                        <a href="<?php echo url('destination/index/country'); ?>">法罗群岛 Faroe Islands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">梵蒂冈 Vatican</a>
                        <a href="<?php echo url('destination/index/country'); ?>">芬兰 Finland</a>
                        <a href="<?php echo url('destination/index/country'); ?>">格陵兰 Greenland</a>
                        <a href="<?php echo url('destination/index/country'); ?>">格鲁吉亚 Georgia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">黑山 Montenegro</a>
                        <a href="<?php echo url('destination/index/country'); ?>">荷兰 Netherlands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">捷克 Czech Republic</a>
                        <a href="<?php echo url('destination/index/country'); ?>">克罗地亚 Croatia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">科索沃 Kosovo</a>
                        <a href="<?php echo url('destination/index/country'); ?>">拉脱维亚 Latvia </a>
                        <a href="<?php echo url('destination/index/country'); ?>">列支敦士登 Liechtenstein</a>
                        <a href="<?php echo url('destination/index/country'); ?>">立陶宛 Lithuania</a>
                        <a href="<?php echo url('destination/index/country'); ?>">罗马尼亚 Romania </a>
                        <a href="<?php echo url('destination/index/country'); ?>">卢森堡 Luxembourg</a>
                        <a href="<?php echo url('destination/index/country'); ?>">马耳他 Malta</a>
                        <a href="<?php echo url('destination/index/country'); ?>">马其顿 Macedonia </a>
                        <a href="<?php echo url('destination/index/country'); ?>">摩尔多瓦 Moldova</a>
                        <a href="<?php echo url('destination/index/country'); ?>">摩纳哥 Monaco</a>
                        <a href="<?php echo url('destination/index/country'); ?>">挪威 Norway </a>
                        <a href="<?php echo url('destination/index/country'); ?>">葡萄牙 Portugal</a>
                        <a href="<?php echo url('destination/index/country'); ?>">瑞典 Sweden</a>
                        <a href="<?php echo url('destination/index/country'); ?>">瑞士 Switzerland </a>
                        <a href="<?php echo url('destination/index/country'); ?>">塞尔维亚 Serbia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">塞浦路斯 Sweden</a>
                        <a href="<?php echo url('destination/index/country'); ?>">圣马力诺 San Marino </a>
                        <a href="<?php echo url('destination/index/country'); ?>">斯洛伐克 Slovakia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">斯洛文尼亚 Slovenia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">土耳其 Turkey </a>
                        <a href="<?php echo url('destination/index/country'); ?>">乌克兰 Ukraine</a>
                        <a href="<?php echo url('destination/index/country'); ?>">西班牙 Spain</a>
                        <a href="<?php echo url('destination/index/country'); ?>">希腊 Greece </a>
                        <a href="<?php echo url('destination/index/country'); ?>">西兰公国 Principality of Sealand</a>
                        <a href="<?php echo url('destination/index/country'); ?>">匈牙利 Hungary</a>
                        <a href="<?php echo url('destination/index/country'); ?>">亚美尼亚 Armenia </a>
                        <a href="<?php echo url('destination/index/country'); ?>">意大利  Italy</a>
                        <a href="<?php echo url('destination/index/country'); ?>">英国 UK</a>
                        <a href="<?php echo url('destination/index/country'); ?>">直布罗陀 Gibraltar </a>

                    </li>

                </ul>
            </div>
            <div class="tab-pane fade tab" id="country3">
                <ul class="myTab3">
                    <li>
                        <a href="<?php echo url('destination/index/country'); ?>">阿尔及利亚  Algeria</a>
                        <a href="<?php echo url('destination/index/country'); ?>">埃及 Egypt</a>
                        <a href="<?php echo url('destination/index/country'); ?>">埃塞俄比亚 Ethiopia </a>
                        <a href="<?php echo url('destination/index/country'); ?>">安哥拉  Angola</a>
                        <a href="<?php echo url('destination/index/country'); ?>">阿森松 Ascension</a>
                        <a href="<?php echo url('destination/index/country'); ?>">贝宁 Benin </a>
                        <a href="<?php echo url('destination/index/country'); ?>">北苏丹王国  Kingdom of North Sudan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">博茨瓦纳 Botswana</a>
                        <a href="<?php echo url('destination/index/country'); ?>">布基纳法索 Burkina Faso </a>
                        <a href="<?php echo url('destination/index/country'); ?>">布隆迪  Burundi</a>
                        <a href="<?php echo url('destination/index/country'); ?>">赤道几内亚 Equatorial Guinea</a>
                        <a href="<?php echo url('destination/index/country'); ?>">佛得角 Cape Verde </a>
                        <a href="<?php echo url('destination/index/country'); ?>">多哥  Togo</a>
                        <a href="<?php echo url('destination/index/country'); ?>">厄立特里亚 Eritrea</a>
                        <a href="<?php echo url('destination/index/country'); ?>">冈比亚 Gambia </a>
                        <a href="<?php echo url('destination/index/country'); ?>">刚果  Congo-Brazzaville</a>
                        <a href="<?php echo url('destination/index/country'); ?>">刚果民主共和国 Congo-Kinshasa</a>
                        <a href="<?php echo url('destination/index/country'); ?>">加纳 Ghana </a>
                        <a href="<?php echo url('destination/index/country'); ?>">加蓬  Gabon</a>
                        <a href="<?php echo url('destination/index/country'); ?>">吉布提 Djibouti</a>
                        <a href="<?php echo url('destination/index/country'); ?>">津巴布韦 Zimbabwe </a>
                        <a href="<?php echo url('destination/index/country'); ?>">几内亚  Guinea</a>
                        <a href="<?php echo url('destination/index/country'); ?>">几内亚比绍 Djibouti</a>
                        <a href="<?php echo url('destination/index/country'); ?>">喀麦隆 Cameroon</a>
                        <a href="<?php echo url('destination/index/country'); ?>">科摩罗  Comoros</a>
                        <a href="<?php echo url('destination/index/country'); ?>">肯尼亚 Kenya</a>
                        <a href="<?php echo url('destination/index/country'); ?>">科特迪瓦 Cote Divoire</a>
                        <a href="<?php echo url('destination/index/country'); ?>">莱索托  Lesotho</a>
                        <a href="<?php echo url('destination/index/country'); ?>">利比里亚 Liberia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">利比亚 Libya</a>
                        <a href="<?php echo url('destination/index/country'); ?>">留尼汪  Reunion</a>
                        <a href="<?php echo url('destination/index/country'); ?>">卢旺达 Rwanda</a>
                        <a href="<?php echo url('destination/index/country'); ?>">马达加斯加 Madagascar</a>
                        <a href="<?php echo url('destination/index/country'); ?>">马拉维  Malawi</a>
                        <a href="<?php echo url('destination/index/country'); ?>">马里 Mali</a>
                        <a href="<?php echo url('destination/index/country'); ?>">毛里求斯 Mauritius</a>
                        <a href="<?php echo url('destination/index/country'); ?>">毛里塔尼亚  Mauritania</a>
                        <a href="<?php echo url('destination/index/country'); ?>">马约特 Mayotte</a>
                        <a href="<?php echo url('destination/index/country'); ?>">摩洛哥 Morocco</a>
                        <a href="<?php echo url('destination/index/country'); ?>">莫桑比克  Mozambique</a>
                        <a href="<?php echo url('destination/index/country'); ?>">纳米比亚 Namibia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">南非 South Africa</a>
                        <a href="<?php echo url('destination/index/country'); ?>">南苏丹  South Sudan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">尼日尔 Niger</a>
                        <a href="<?php echo url('destination/index/country'); ?>">尼日利亚 Nigeria</a>
                        <a href="<?php echo url('destination/index/country'); ?>">塞拉利昂 Sierra Leone</a>
                        <a href="<?php echo url('destination/index/country'); ?>">塞内加尔  Senegal</a>
                        <a href="<?php echo url('destination/index/country'); ?>">塞舌尔  Seychelles</a>
                        <a href="<?php echo url('destination/index/country'); ?>">圣多美和普林西比 Sao Tome &amp; Principe</a>
                        <a href="<?php echo url('destination/index/country'); ?>">圣赫勒拿 Saint Helena</a>
                        <a href="<?php echo url('destination/index/country'); ?>">斯威士兰  Swaziland</a>
                        <a href="<?php echo url('destination/index/country'); ?>">苏丹 Sudan</a>
                        <a href="<?php echo url('destination/index/country'); ?>">索马里 Somalia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">坦桑尼亚  Tanzania</a>
                        <a href="<?php echo url('destination/index/country'); ?>">特里斯坦-达库尼亚群岛 Tristan da Cunha</a>
                        <a href="<?php echo url('destination/index/country'); ?>">突尼斯 Tunisia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">乌干达  Uganda</a>
                        <a href="<?php echo url('destination/index/country'); ?>">西撒哈拉 Western Sahara</a>
                        <a href="<?php echo url('destination/index/country'); ?>">赞比亚 Zambia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">乍得  Chad</a>
                        <a href="<?php echo url('destination/index/country'); ?>">中非共和国 Central African Republic</a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade tab" id="country4">
                <ul class="myTab3">
                    <li>
                        <a href="<?php echo url('destination/index/country'); ?>">安圭拉 Anguilla</a>
                        <a href="<?php echo url('destination/index/country'); ?>">安提瓜和巴布达  Antigua &amp; Barbuda</a>
                        <a href="<?php echo url('destination/index/country'); ?>">巴巴多斯 Barbados</a>
                        <a href="<?php echo url('destination/index/country'); ?>">巴哈马 The Bahamas</a>
                        <a href="<?php echo url('destination/index/country'); ?>">百慕大  Bermuda</a>
                        <a href="<?php echo url('destination/index/country'); ?>">巴拿马 Panama</a>
                        <a href="<?php echo url('destination/index/country'); ?>">波多黎各  Puerto Rico</a>
                        <a href="<?php echo url('destination/index/country'); ?>">伯利兹  Belize</a>
                        <a href="<?php echo url('destination/index/country'); ?>">阿鲁巴 Aruba</a>
                        <a href="<?php echo url('destination/index/country'); ?>">波内赫  Bonaire</a>
                        <a href="<?php echo url('destination/index/country'); ?>">多米尼加共和国  Dominican Republic</a>
                        <a href="<?php echo url('destination/index/country'); ?>">多米尼克 Dominica</a>
                        <a href="<?php echo url('destination/index/country'); ?>">法属圣马丁  Saint Martin</a>
                        <a href="<?php echo url('destination/index/country'); ?>">格林纳达  Grenada</a>
                        <a href="<?php echo url('destination/index/country'); ?>">哥斯达黎加 Costa Rica</a>
                        <a href="<?php echo url('destination/index/country'); ?>">瓜德罗普  Guadeloupe</a>
                        <a href="<?php echo url('destination/index/country'); ?>">古巴  Cuba</a>
                        <a href="<?php echo url('destination/index/country'); ?>">海地 Haiti</a>
                        <a href="<?php echo url('destination/index/country'); ?>">荷属圣马丁  Sint Maarten</a>
                        <a href="<?php echo url('destination/index/country'); ?>">洪都拉斯  Honduras</a>
                        <a href="<?php echo url('destination/index/country'); ?>">加拿大 Canada</a>
                        <a href="<?php echo url('destination/index/country'); ?>">开曼群岛 Cayman Islands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">库拉索  Curacao</a>
                        <a href="<?php echo url('destination/index/country'); ?>">马提尼克 Martinique</a>
                        <a href="<?php echo url('destination/index/country'); ?>">美国 USA</a>
                        <a href="<?php echo url('destination/index/country'); ?>">美属维尔京群岛  US Virgin Islands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">蒙塞拉特岛 Montserrat</a>
                        <a href="<?php echo url('destination/index/country'); ?>">墨西哥 Mexico</a>
                        <a href="<?php echo url('destination/index/country'); ?>">尼加拉瓜  Nicaragua</a>
                        <a href="<?php echo url('destination/index/country'); ?>">萨巴岛 Saba</a>
                        <a href="<?php echo url('destination/index/country'); ?>">萨尔瓦多 El Salvador</a>
                        <a href="<?php echo url('destination/index/country'); ?>">圣巴泰勒米岛  Saint-Barthelemy</a>
                        <a href="<?php echo url('destination/index/country'); ?>">圣基茨和尼维斯 Saint Kitts and Nevis</a>
                        <a href="<?php echo url('destination/index/country'); ?>">圣皮埃尔和密克隆群岛 Saint Pierre et Miquelon</a>
                        <a href="<?php echo url('destination/index/country'); ?>">圣文森特和格林纳丁斯 St Vincent &amp; The Grenadines</a>
                        <a href="<?php echo url('destination/index/country'); ?>">圣尤斯特歇斯 Sint Eustatius</a>
                        <a href="<?php echo url('destination/index/country'); ?>">特克斯和凯科斯群岛 Turks &amp; Caicos Islands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">特立尼达和多巴哥 Trinidad &amp; Tobago</a>
                        <a href="<?php echo url('destination/index/country'); ?>">危地马拉 Guatemala</a>
                        <a href="<?php echo url('destination/index/country'); ?>">牙买加 Jamaica</a>
                        <a href="<?php echo url('destination/index/country'); ?>">英属维尔京群岛 British Virgin Islands</a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade tab" id="country5">
                <ul class="myTab3">
                    <li>
                        <a href="<?php echo url('destination/index/country'); ?>">阿根廷 Argentina</a>
                        <a href="<?php echo url('destination/index/country'); ?>">巴拉圭 Paraguay</a>
                        <a href="<?php echo url('destination/index/country'); ?>">巴西 Brazil</a>
                        <a href="<?php echo url('destination/index/country'); ?>">秘鲁 Peru</a>
                        <a href="<?php echo url('destination/index/country'); ?>">玻利维亚 Bolivia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">厄瓜多尔 Ecuador</a>
                        <a href="<?php echo url('destination/index/country'); ?>">法属圭亚那 French Guiana</a>
                        <a href="<?php echo url('destination/index/country'); ?>">福克兰群岛（马尔维纳斯群岛） Falkland Islands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">哥伦比亚 Colombia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">圭亚那 Guyana</a>
                        <a href="<?php echo url('destination/index/country'); ?>">苏里南 Suriname</a>
                        <a href="<?php echo url('destination/index/country'); ?>">委内瑞拉 Venezuela</a>
                        <a href="<?php echo url('destination/index/country'); ?>">乌拉圭 Uruguay</a>
                        <a href="<?php echo url('destination/index/country'); ?>">智利 chile</a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade tab" id="country6">
                <ul class="myTab3">
                    <li>
                        <a href="<?php echo url('destination/index/country'); ?>">艾普罗菲尔 Apolofirl</a>
                        <a href="<?php echo url('destination/index/country'); ?>">澳大利亚 Australia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">巴布亚新几内亚 Papua New Guinea</a>
                        <a href="<?php echo url('destination/index/country'); ?>">北马里亚纳群岛 Northern Mariana Islands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">法属波利尼西亚 French Polynesia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">斐济 Fiji</a>
                        <a href="<?php echo url('destination/index/country'); ?>">关岛 Guam</a>
                        <a href="<?php echo url('destination/index/country'); ?>">基里巴斯 Kiribati</a>
                        <a href="<?php echo url('destination/index/country'); ?>">库克群岛 The Cook Islands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">马绍尔群岛 Marshall Islands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">美属萨摩亚 American Samoa</a>
                        <a href="<?php echo url('destination/index/country'); ?>">密克罗尼西亚联邦 Federated States Of  Micronesia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">瑙鲁 Nauru</a>
                        <a href="<?php echo url('destination/index/country'); ?>">纽埃 Niue</a>
                        <a href="<?php echo url('destination/index/country'); ?>">帕劳 Palau</a>
                        <a href="<?php echo url('destination/index/country'); ?>">皮特凯恩群岛 Pitcairn Islands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">萨摩亚 Niue</a>
                        <a href="<?php echo url('destination/index/country'); ?>">帕劳 Samoa</a>
                        <a href="<?php echo url('destination/index/country'); ?>">所罗门群岛 Solomon Islands</a>
                        <a href="<?php echo url('destination/index/country'); ?>">汤加 Tonga</a>
                        <a href="<?php echo url('destination/index/country'); ?>">托克劳 Tokelau</a>
                        <a href="<?php echo url('destination/index/country'); ?>">图瓦卢  Tuvalu</a>
                        <a href="<?php echo url('destination/index/country'); ?>">瓦利斯群岛和富图纳群岛 Wallis &amp; Futuna</a>
                        <a href="<?php echo url('destination/index/country'); ?>">瓦努阿图 Vanuatu</a>
                        <a href="<?php echo url('destination/index/country'); ?>">新喀里多尼亚  New Caledonia</a>
                        <a href="<?php echo url('destination/index/country'); ?>">新西兰 New Zealand</a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade tab" id="country7">
                <ul class="myTab3">
                    <li>
                        <a href="<?php echo url('destination/index/country'); ?>">布韦岛 Bouvet Island</a>
                        <a href="<?php echo url('destination/index/country'); ?>">布韦岛  Bouvet Island</a>
                        <a href="<?php echo url('destination/index/country'); ?>">法属南部领土 French Southern Territories</a>
                        <a href="<?php echo url('destination/index/country'); ?>">南极 Antarctica</a>
                        <a href="<?php echo url('destination/index/country'); ?>">南乔治亚岛和南桑威奇群岛  SGSSI</a>
                        <a href="<?php echo url('destination/index/country'); ?>">太空 Outer Space</a>
                        <a href="<?php echo url('destination/index/country'); ?>">南极 Antarctica</a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--底部-->
<div id="footer">
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
    </div>




<script>
    $(function () {
        $('#mainMonth li:eq(6) a').tab('show');
    });
    $(function () {
        $("#mainHot a").mousemove(function (e) {
            e.preventDefault();
            $(this).tab('show');
            $($(this).attr('href')).addClass('active').addClass('in').siblings().removeClass('active').removeClass('in');
        });
        $("#mainThmem a").mousemove(function (e) {
            e.preventDefault();
            $(this).tab('show');
            $($(this).attr('href')).addClass('active').addClass('in').siblings().removeClass('active').removeClass('in');
        });
        $("#mainMonth a").mousemove(function (e) {
            e.preventDefault();
            $(this).tab('show');
            $($(this).attr('href')).addClass('active').addClass('in').siblings().removeClass('active').removeClass('in');
        });
        $("#mainCountry a").mousemove(function (e) {
            e.preventDefault();
            $(this).tab('show');
            $($(this).attr('href')).addClass('active').addClass('in').siblings().removeClass('active').removeClass('in');
        });
    });
</script>

<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>

</body>
</html>