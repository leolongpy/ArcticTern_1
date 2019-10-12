<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"E:\xampp\htdocs\ArcticTern_1/application/fingerpost\view\index\index.html";i:1532931387;s:56:"E:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"E:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <link rel="icon" href="/ArcticTern_1/public/static/img/activity/logo_2.png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>北极燕鸥项目</title>
    <link href="/ArcticTern_1/public/static/css/bootstrap.css" rel="stylesheet">
    <link href="/ArcticTern_1/public/static/css/fingerpost/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/nav.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/footer.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
</head>
<body onload="load()">
<div class="container col-md-12 ">
    <div id="header">
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
    </div>
    <!--轮播图-->
        <div class="sss container">
    <div class="carousel col-md-11  col-xs-11">
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
        <span class="hot">热门目的地推荐：</span>
    </div>
    <!--文字滚动-->
    <div class="scrolling col-md-9 col-md-offset-2 col-xs-9 col-xs-offset-2" id="demo">
        <div class="qimo">
            <div id="demo1">
                <ul>
                <?php if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,0,17, true) : $testArr->slice(0,17, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
                    <li><a href='#' ><?php echo $des['fp_scrolling']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?> 
                </ul>
            </div>
            <div id="demo2"></div>

        </div>
    </div>
    <!--指南模块-->
    <div class="guide col-xs-12">
        <div class="foot col-md-2 col-xs-2">
            <a href="#run"> <img  src="/ArcticTern_1/public/static/img/fingerpost/23.jpg" alt=""/></a>
            <div id="runing"><span>徒步</span></div>
        </div>
        <div class="diving col-md-2 col-xs-2">
            <a href="#swim"> <img src="/ArcticTern_1/public/static/img/fingerpost/24.jpg" alt=""/></a>
            <div id="swiming"><span>潜水</span></div>
        </div>
        <div class="cycling col-md-2 col-xs-2">
            <a href="#ride"> <img src="/ArcticTern_1/public/static/img/fingerpost/25.jpg" alt=""/></a>
            <div id="riding"><span>骑行</span></div>
        </div>
        <div class="other col-md-2 col-xs-2">
            <a href="#else"> <img src="/ArcticTern_1/public/static/img/fingerpost/26.jpg" alt=""/></a>
            <div id="other_else"><span>其他</span></div>
        </div>
    </div>
    <!--徒步模块-->
    <div class="content  col-xs-12" id="run">
        <div class="first">
            <img src="/ArcticTern_1/public/static/img/fingerpost/11.png" alt=""/>
            <span>徒步</span>
<!--             <div class="first_more" id="more">更多>></div> -->
        </div>
            <?php if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,0,1, true) : $testArr->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
            <div class="first_box1 col-md-2 col-xs-2">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,1,1, true) : $testArr->slice(1,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
        </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,2,1, true) : $testArr->slice(2,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,3,1, true) : $testArr->slice(3,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
        <?php if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,0,1, true) : $testArr->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
    <div class="foot_link col-md-12 col-xs-12">
        <div class="foot_link1 col-md-2 col-xs-2"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,1,1, true) : $testArr->slice(1,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="foot_link2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,2,1, true) : $testArr->slice(2,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div id="nbyz" class="foot_link3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,3,1, true) : $testArr->slice(3,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div id="amnq" class="foot_link4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!--徒步更多模块-->
   <!--  <div class="two col-md-12 col-xs-12">
        <div class="first_box1 col-md-2 col-xs-2">
            <img src="/ArcticTern_1/public/static/img/fingerpost/6.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>梅里外转 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="foot_links col-md-12 col-xs-12">
        <div class="foot_links1 col-md-2 col-xs-2"><div id="swim_maer"><a href="">梅里外转 · 徒步指南</a></div></div>
        <div class="foot_links2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">梅里内转 · 徒步指南</a></div></div>
        <div class="foot_links3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">新加坡 · 徒步指南</a></div></div>
        <div class="foot_links4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">虎跳峡 · 徒步指南</a></div></div>
        <div id="hide">收回>></div>
        </div>
    </div>
 -->
    <!--潜水模块-->
    <div class="content2 col-md-12 col-xs-12" id="swim">
        <div class="first">
            <img src="/ArcticTern_1/public/static/img/fingerpost/44.png" alt=""/>
            <span><font color="#187be0">潜水</font></span>
<!--             <div class="first_more" id="more2">更多>></div> -->
        </div>
        <?php if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,4,1, true) : $testArr->slice(4,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box1 col-md-2 col-xs-2">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,5,1, true) : $testArr->slice(5,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,6,1, true) : $testArr->slice(6,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,7,1, true) : $testArr->slice(7,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
    </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,4,1, true) : $testArr->slice(4,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
     <div class="foot_link col-md-12 col-xs-12">
        <div class="foot_link1 col-md-2 col-xs-2"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,5,1, true) : $testArr->slice(5,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="foot_link2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,6,1, true) : $testArr->slice(6,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="foot_link3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,7,1, true) : $testArr->slice(7,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div id="anl" class="foot_link4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!--潜水更多模块-->
<!--      <div class="three col-md-12 col-xs-12">
        <div class="first_box1 col-md-2 col-xs-2">
            <img src="/ArcticTern_1/public/static/img/fingerpost/6.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>梅里外转 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="foot_links col-md-12 col-xs-12">
        <div class="foot_links1 col-md-2 col-xs-2"><div id="swim_maer"><a href="">梅里外转 · 徒步指南</a></div></div>
        <div class="foot_links2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">梅里内转 · 徒步指南</a></div></div>
        <div class="foot_links3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">新加坡 · 徒步指南</a></div></div>
        <div class="foot_links4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">虎跳峡 · 徒步指南</a></div></div>
        </div> -->
<!--         <a href="javascript:void(0)" id="hide">收回>></a> -->

<!--     </div> -->
    <!--骑行模块-->
    <div class="content3 col-md-12 col-xs-12" id="ride">
        <div class="first">
            <img src="/ArcticTern_1/public/static/img/fingerpost/22.png" alt=""/>
            <span><font color="#36b601">骑行</font></span>
<!--             <div class="first_more" id="more3">更多>></div> -->
        </div>
        <?php if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,8,1, true) : $testArr->slice(8,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box1 col-md-2 col-xs-2">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,9,1, true) : $testArr->slice(9,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,10,1, true) : $testArr->slice(10,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,11,1, true) : $testArr->slice(11,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="foot_link col-md-12 col-xs-12">
        <?php if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,8,1, true) : $testArr->slice(8,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="foot_link1 col-md-2 col-xs-2"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,9,1, true) : $testArr->slice(9,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="foot_link2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,10,1, true) : $testArr->slice(10,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="foot_link3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,11,1, true) : $testArr->slice(11,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div id="qhh" class="foot_link4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <!--骑行更多模块-->
       <!--   <div class="fore col-md-12 col-xs-12">
        <div class="first_box1 col-md-2 col-xs-2">
            <img src="/ArcticTern_1/public/static/img/fingerpost/6.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>梅里外转 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="foot_links col-md-12 col-xs-12">
        <div class="foot_links1 col-md-2 col-xs-2"><div id="swim_maer"><a href="">梅里外转 · 徒步指南</a></div></div>
        <div class="foot_links2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">梅里内转 · 徒步指南</a></div></div>
        <div class="foot_links3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">新加坡 · 徒步指南</a></div></div>
        <div class="foot_links4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">虎跳峡 · 徒步指南</a></div></div>
        </div> -->
<!--         <a href="javascript:void(0)" id="hide">收回>></a> -->

<!--     </div> -->
    <!--其他模块-->
    <div class="content4 col-md-12 col-xs-12" id="else">
        <div class="first">
            <img src="/ArcticTern_1/public/static/img/fingerpost/33.png" alt=""/>
            <span><font color="#f78900">其他</font></span>
<!--             <div class="first_more" id="more4">更多>></div> -->
        </div>
        <div class="first_box1 col-md-2 col-xs-2">
        <?php if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,12,1, true) : $testArr->slice(12,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,13,1, true) : $testArr->slice(13,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,14,1, true) : $testArr->slice(14,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,15,1, true) : $testArr->slice(15,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="first_box4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/<?php echo $des['fp_img']; ?>" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p><?php echo $des['fp_name']; ?></p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
    </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="foot_link col-md-12 col-xs-12">
        <?php if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,12,1, true) : $testArr->slice(12,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="foot_link1 col-md-2 col-xs-2"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,13,1, true) : $testArr->slice(13,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="foot_link2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,14,1, true) : $testArr->slice(14,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div class="foot_link3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($testArr) || $testArr instanceof \think\Collection || $testArr instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($testArr) ? array_slice($testArr,15,1, true) : $testArr->slice(15,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div id="qx" class="foot_link4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><a href=""><?php echo $des['fp_name']; ?></a></div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!--其他更多模块-->
        <!-- <div class="five col-md-12 col-xs-12">
        <div class="first_box1 col-md-2 col-xs-2">
            <img src="/ArcticTern_1/public/static/img/fingerpost/6.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>梅里外转 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="first_box3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
            <img src="/ArcticTern_1/public/static/img/fingerpost/8.jpg" alt="">
            <div class="mask-inner" onclick="window.open('details.html')">
                <p>年保玉则 · 徒步指南</p>
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                <span class="text">点击预览</span>
            </div>
        </div>
        <div class="foot_links col-md-12 col-xs-12">
        <div class="foot_links1 col-md-2 col-xs-2"><div id="swim_maer"><a href="">梅里外转 · 徒步指南</a></div></div>
        <div class="foot_links2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">梅里内转 · 徒步指南</a></div></div>
        <div class="foot_links3 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">新加坡 · 徒步指南</a></div></div>
        <div class="foot_links4 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1"><div id="swim_maer"><a href="">虎跳峡 · 徒步指南</a></div></div>
        </div> -->
<!--         <a href="javascript:void(0)" id="hide">收回>></a> -->

<!--     </div> -->
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
<!--返回顶部-->
<div id="share">
    <a id="totop" title="">返回顶部</a>
    <a href="#" target="_blank" class="sina">关注找魔酷阁新浪微博</a>
    <a href="#"  target="_blank" class="tencent">关注找魔酷阁腾讯微博</a>
</div>
<!--loading加载动画-->
<!-- <div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
            <div class="object" id="object_nine"></div>
        </div>
    </div>
</div> -->
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
<script src="/ArcticTern_1/public/static/js/fingerpost/index.js"></script>
</body>
</html>