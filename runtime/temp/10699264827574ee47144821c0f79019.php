<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\xampp\htdocs\ArcticTern_1/application/index\view\index\index2.html";i:1530594082;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>北极燕鸥</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/index/index2.css">
</head>
<body>
<div id="wrapper">
    <!--头部-->
    <div id="header">
        <!--导航-->
        <nav>
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
                        <a href="<?php echo url('activity/index/apply'); ?>">关于我们</a>
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
    </div>
    <!--轮播图-->
    <div id="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>
            <!--搜索框-->
            <div id="search">
                <span class="glyphicon glyphicon-map-marker">&nbsp;目的地</span><span
                    class="glyphicon glyphicon-plane">&nbsp;做行程</span><span
                    class="glyphicon glyphicon-tags">&nbsp;搞活动</span><span
                    class="glyphicon glyphicon-object-align-right">&nbsp;酒店</span>
                <form action="#">
                    <input type="text" placeholder="想去哪？">
                    <button type="submit">搜索</button>
                </form>
            </div>
            <!--搜索框结束-->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/ArcticTern_1/public/static/img/index/banner1.jpg" alt="..." width="100%">
                    <div class="carousel-caption txt_r">
                        <p class="txt_r_1">1/5</p>
                        <p class="txt_r_2">
                            异想韩国探索首尔、釜山、江原道新旅程</p>
                        <p class="txt_r_3">是时候开发韩国小众有趣的玩法</p>
                    </div>
                </div>
                <div class="item">
                    <img src="/ArcticTern_1/public/static/img/index/banner2.jpg" alt="..." width="100%">
                    <div class="carousel-caption txt_r">
                        <p class="txt_r_1">2/5</p>
                        <p class="txt_r_2">
                            异想韩国探索首尔、釜山、江原道新旅程</p>
                        <p class="txt_r_3"> 是时候开发韩国小众有趣的玩法</p>
                    </div>
                </div>
                <div class="item">
                    <img src="/ArcticTern_1/public/static/img/index/banner3.jpg" alt="..." width="100%">
                    <div class="carousel-caption txt_r">
                        <p class="txt_r_1">3/5</p>
                        <p class="txt_r_2">
                            异想韩国探索首尔、釜山、江原道新旅程</p>
                        <p class="txt_r_3">是时候开发韩国小众有趣的玩法</p>
                    </div>
                </div>
                <div class="item">
                    <img src="/ArcticTern_1/public/static/img/index/banner4.jpg" alt="..." width="100%">
                    <div class="carousel-caption txt_r">
                        <p class="txt_r_1">4/5</p>
                        <p class="txt_r_2">
                            异想韩国探索首尔、釜山、江原道新旅程</p>
                        <p class="txt_r_3">是时候开发韩国小众有趣的玩法</p>
                    </div>
                </div>
                <div class="item">
                    <img src="/ArcticTern_1/public/static/img/index/banner5.jpg" alt="..." width="100%">
                    <div class="carousel-caption txt_r">
                        <p class="txt_r_1">5/5</p>
                        <p class="txt_r_2">
                            异想韩国探索首尔、釜山、江原道新旅程</p>
                        <p class="txt_r_3">是时候开发韩国小众有趣的玩法</p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>


</div>
    <div id="content">
        <!--广告-->
        <div id="advertising">
            <img src="/ArcticTern_1/public/static/img/index/advertising1.jpg" alt="">
            <img src="/ArcticTern_1/public/static/img/index/gg.jpg" alt="">
        </div>
        <!--行程规划（专题）-->
        <div id="trip_planning">
            <p>户外专题</p>
            <div class="trip_w">
                <div class="trip_item">
                    <img src="/ArcticTern_1/public/static/img/index/tripplanning1.jpg" alt="" width="100%">
                    <br>
                    <div class="icon_1"></div>
                    <a href="<?php echo url('trip_planning/index/ziye'); ?>">深圳塘朗山穿越徒步</a>
                    <div class="start_1"></div>
                    <br>
                </div>
                <div class="trip_item"><img src="/ArcticTern_1/public/static/img/index/tripplanning2.jpg" alt="" width="100%">
                    <br>
                    <div class="icon_1"></div>
                    <a href="<?php echo url('trip_planning/index/ziye'); ?>">深圳塘朗山穿越徒步</a>
                    <div class="start_1"></div>
                    <br></div>
                <div class="trip_item">
                    <img src="/ArcticTern_1/public/static/img/index/tripplanning3.jpg" alt="" width="100%">
                    <br>
                    <div class="icon_1"></div>
                    <a href="<?php echo url('trip_planning/index/ziye'); ?>">深圳塘朗山穿越徒步</a>
                    <div class="start_1"></div>
                    <br>
                </div>
            </div>
            <a href="<?php echo url('trip_planning/index/index'); ?>" class="trip_more">更多专题</a>
        </div>
        <!--行程规划（专题）结束-->
        <!--目的地（推荐）-->
        <div id="destination">
            <p>今日推荐</p>
            <div class="des_w">
                <div class="des_item">
                    <div class="img_box">
                        <img src="/ArcticTern_1/public/static/img/index/tuijian2.jpg" alt="">
                    </div>
                    <div class="des_in">
                        <p><a href="<?php echo url('destination/index/ziye'); ?>">这座由意大利建筑师皮亚诺设计的大厦历时12年的建设。</a></p>
                        <div class="in_b">
                            <span class="in_b_l">碎片大厦</span>
                            <span class="in_b_r">英国</span>
                        </div>
                    </div>
                </div>
                <div class="des_item">
                    <div class="img_box">
                        <img src="/ArcticTern_1/public/static/img/index/tuijian3.jpg" alt="">
                    </div>
                    <div class="des_in">
                        <p><a href="<?php echo url('destination/index/ziye'); ?>">这座由意大利建筑师皮亚诺设计的大厦历时12年的建设。</a></p>
                        <div class="in_b">
                            <span class="in_b_l">碎片大厦</span>
                            <span class="in_b_r">英国</span>
                        </div>
                    </div>
                </div>
                <div class="des_item">
                    <div class="img_box">
                        <img src="/ArcticTern_1/public/static/img/index/tuijian4.jpg" alt="">
                    </div>
                    <div class="des_in">
                        <p><a href="<?php echo url('destination/index/ziye'); ?>">这座由意大利建筑师皮亚诺设计的大厦历时12年的建设。</a></p>
                        <div class="in_b">
                            <span class="in_b_l">碎片大厦</span>
                            <span class="in_b_r">英国</span>
                        </div>
                    </div>
                </div>
                <div class="des_w">
                </div>
                <div class="des_item">
                    <div class="img_box">
                        <img src="/ArcticTern_1/public/static/img/index/tuijian5.jpg" alt="">
                    </div>
                    <div class="des_in">
                        <p><a href="<?php echo url('destination/index/ziye'); ?>">这座由意大利建筑师皮亚诺设计的大厦历时12年的建设。</a></p>
                        <div class="in_b">
                            <span class="in_b_l">碎片大厦</span>
                            <span class="in_b_r">英国</span>
                        </div>
                    </div>
                </div>
                <div class="des_item">
                    <div class="img_box">
                        <img src="/ArcticTern_1/public/static/img/index/tuijian6.jpg" alt="">
                    </div>
                    <div class="des_in">
                        <p><a href="<?php echo url('destination/index/ziye'); ?>">这座由意大利建筑师皮亚诺设计的大厦历时12年的建设。</a></p>
                        <div class="in_b">
                            <span class="in_b_l">碎片大厦</span>
                            <span class="in_b_r">英国</span>
                        </div>
                    </div>
                </div>
                <div class="des_item">
                    <div class="img_box">
                        <img src="/ArcticTern_1/public/static/img/index/tuijian7.jpg" alt="">
                    </div>
                    <div class="des_in">
                        <p><a href="<?php echo url('destination/index/ziye'); ?>">这座由意大利建筑师皮亚诺设计的大厦历时12年的建设。</a></p>
                        <div class="in_b">
                            <span class="in_b_l">碎片大厦</span>
                            <span class="in_b_r">英国</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--目的地（推荐）结束-->
        <!--活动开始-->
        <div id="activity">
            <p>热门活动与话题</p>
            <div class="act_1"><a href="<?php echo url('activity/index/apply'); ?>"><img src="/ArcticTern_1/public/static/img/index/T1.jpg" alt=""></a><a
                    href="<?php echo url('activity/index/apply'); ?>"><img
                    src="/ArcticTern_1/public/static/img/index/T2.jpg"
                    alt=""></a><a
                    href="<?php echo url('activity/index/apply'); ?>"><img src="/ArcticTern_1/public/static/img/index/T3.jpg" alt=""></a></div>
            <div class="act_2" style="display: none;"><a href="<?php echo url('activity/index/apply'); ?>"><img
                    src="/ArcticTern_1/public/static/img/index/T4.jpg" alt=""></a><a
                    href="<?php echo url('activity/index/apply'); ?>"><img
                    src="/ArcticTern_1/public/static/img/index/T5.jpg"
                    alt=""></a><a
                    href="<?php echo url('activity/index/apply'); ?>"><img src="/ArcticTern_1/public/static/img/index/T6.jpg" alt=""></a></div>
            <div class="act_3" style="display: none"><a href="<?php echo url('activity/index/apply'); ?>"><img
                    src="/ArcticTern_1/public/static/img/index/T7.jpg" alt=""></a><a href="<?php echo url('activity/index/apply'); ?>"><img
                    src="/ArcticTern_1/public/static/img/index/T8.png" alt=""></a>
                <a href="<?php echo url('activity/index/apply'); ?>"><img src="/ArcticTern_1/public/static/img/index/T9.jpg" alt=""></a></div>


            <div class="act_tabs">
                <div class="act_tab">
                    <button class="act_btn1">1</button>
                </div>
                <div class="act_tab">
                    <button class="act_btn2">2</button>
                </div>
                <div class="act_tab">
                    <button class="act_btn3">3</button>
                </div>
            </div>
            <a href="<?php echo url('activity/index/index'); ?>" class="trip_more">更多活动</a>
        </div>
        <!--活动结束-->
        <!--app-->
        <div id="app">
            <div class="app">
                <span>北极燕鸥APP</span>
                <div class="app_item"><img src="/ArcticTern_1/public/static/img/index/app_1.png" alt="" width="60%">
                    <br><span> 燕鸥app</span>
                </div>
                <div class="app_item"><img src="/ArcticTern_1/public/static/img/index/app_2.png" alt="" width="60%">
                    <br><span>行程助手</span>
                </div>
                <div class="app_item"><img src="/ArcticTern_1/public/static/img/index/app_3.png" alt="" width="60%">
                    <br><span> 燕鸥锦囊</span>
                </div>
            </div>
            <div class="wechat">
                <span class="wxh">微信号</span>
                <div class="app_item"><img src="/ArcticTern_1/public/static/img/index/wechat1.png" alt="" width="60%">
                    <br><span> 燕鸥app</span>
                </div>
                <div class="app_item"><img src="/ArcticTern_1/public/static/img/index/wechat2.png" alt="" width="60%">
                    <br><span>行程助手</span>
                </div>
                <div class="app_item"><img src="/ArcticTern_1/public/static/img/index/wechat3.png" alt="" width="60%">
                    <br><span> 燕鸥锦囊</span>
                </div>
                <div class="app_item"><img src="/ArcticTern_1/public/static/img/index/wechat4.png" alt="" width="60%">
                    <br><span> 燕鸥锦囊</span>
                </div>
            </div>
        </div>
    </div>
    <!--底部开始-->
    <div id="footer">
        <div class="footer_top">
            <div class="footer_list">
                <ul>
                    <li>关于我们</li>
                    <li><a href="<?php echo url('about/index/index'); ?>">燕鸥简介</a></li>
                    <li><a href="#">联系我们</a></li>
                    <li><a href="#">合作伙伴</a></li>
                </ul>
                <ul>
                    <li>加入燕鸥</li>
                    <li><a href="#">招聘职位</a></li>
                </ul>
                <ul>
                    <li>网站条款</li>
                    <li><a href="#">会员条款</a></li>
                    <li><a href="#">社区指南</a></li>
                    <li><a href="#">版权声明</a></li>
                    <li><a href="#">免责声明</a></li>
                </ul>
                <ul>
                    <li>帮助中心</li>
                    <li><a href="#">新手上路</a></li>
                    <li><a href="#">使用帮助</a></li>
                    <li><a href="#">使用帮助</a></li>
                    <li><a href="#">网站地图</a></li>
                    <li><a href="#">旅游工具</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_bottom">
            <p class="b_p">2004-2018 © 穷游网® qyer.com All rights reserved. Version v5.57 京ICP备12003524号
                京公网安备11010102001935 京ICP证140673号 营业执照 经营许可证</p>
            <p>穷游网为旅行者提供原创实用的出境游旅行指南和旅游攻略、旅行社区和问答交流平台，并提供签证、保险、机票、酒店预订、租车等服务</p>
        </div>
    </div>
    <!--底部结束-->

</div>
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
<script src="/ArcticTern_1/public/static/js/index/index.js"></script>
</body>
</html>