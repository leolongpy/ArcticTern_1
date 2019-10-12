<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"E:\xampp\htdocs\ArcticTern_1/application/activity\view\index\index.html";i:1532931201;s:56:"E:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"E:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>活动策划</title>
    <link rel="icon" href="/ArcticTern_1/public/static/img/activity/logo_2.png">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/activity/index.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/nav.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/footer.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
</head>
<body>
<!-- 头部-->
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


    <!--标题-->
    <div class="col-md-12 title">
        <img src=/ArcticTern_1/public/static/img/activity/bg.png>
    </div>

    <!--轮播图-->
    <div id="carousel-example-generic" class="carousel slide Mycarousel" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/ArcticTern_1/public/static/img/activity/lb1.jpg">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="/ArcticTern_1/public/static/img/activity/lb2.jpg">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="/ArcticTern_1/public/static/img/activity/lb3.jpg">
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
                <li>
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
                    <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,0,12, true) : $index->slice(0,12, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade  tab" id="ZT_6">
            <div class="content_img">
                <ul>
                    <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,12,9, true) : $index->slice(12,9, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
        </div>
        <div class="tab-pane fade  tab" id="ZT_3">
            <div class="content_img">
                <ul>
                    <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,0,1, true) : $index->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,18,1, true) : $index->slice(18,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,19,1, true) : $index->slice(19,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>




        <div class="tab-pane fade  tab" id="ZT_4">
            <div class="content_img">
                <ul>
                    <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,2,1, true) : $index->slice(2,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>



        <div class="tab-pane fade  tab" id="ZT_5">
            <div class="content_img">
                <ul>
                    <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,9,1, true) : $index->slice(9,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>



        <div class="tab-pane fade  tab" id="ZT_2">
            <div class="content_img">
                <ul>
                    <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,1,1, true) : $index->slice(1,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,3,1, true) : $index->slice(3,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,10,3, true) : $index->slice(10,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,14,4, true) : $index->slice(14,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('activity/index/apply'); ?>">
                            <div class="img"><img src="/ArcticTern_1/public/static/img/activity/<?php echo $des['act_img1']; ?>" width="346">
                                <div class="img_text">
                                    <p><?php echo $des['act_name']; ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>




        </div>
    </div>
    <div class="num">
        <ul>
            <li class="active">
                <a href="#ZT_1" data-toggle="tab">1</a>
            </li>
            <li>
                <a href="#ZT_6" data-toggle="tab">2</a>
            </li>
        </ul>
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

<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
</body>
</html>
