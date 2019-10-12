<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\phpStudy\PHPTutorial\WWW\ArcticTern_1/application/trip_planning\view\index\index.html";i:1529659832;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="/ArcticTern_1/public/static/css/bootstrap.css" rel="stylesheet">
    <link href="/ArcticTern_1/public/static/css/trip_planning/index.css" rel="stylesheet">
</head>
<body>
    <div>
        <!--导航栏-->
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
        </div>

       <!--轮播图，筛选栏-->
        <div class="lbtsx col-md-12">

         <!--轮播图-->
            <div class="col-md-offset-2 col-md-8  lbc">
                <div id="myCarousel" class="carousel slide">
                    <!-- 轮播（Carousel）指标 -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- 轮播（Carousel）项目 -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="/ArcticTern_1/public/static/img/trip_planning/lbt1.jpg" width="100%" alt="First slide">
                        </div>
                        <div class="item">
                            <img src="/ArcticTern_1/public/static/img/trip_planning/lbt2.jpg" width="100%" alt="Second slide">
                        </div>
                        <div class="item">
                            <img src="/ArcticTern_1/public/static/img/trip_planning/lbc3.jpg" width="100%" alt="Third slide">
                        </div>
                    </div>
                    <!-- 轮播（Carousel）导航 -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!--筛选栏-->
            <div class="sxl col-md-offset-2 col-md-8">

                <div class="sx-csl  col-md-8">
                    <div class="sx-cs">
                        <span class="lb">城市：</span>
                        <p>
                            <span><a href="">全部</a></span>
                            <span><a href="">北京</a></span>
                            <span><a href="">上海</a></span>
                            <span><a href="">深圳</a></span>
                            <span><a href="">广州</a></span>
                        </p>
                    </div>
                </div>
                <div class=" col-md-8">
                    <div class="sx-cs">
                        <span class="lb">类型：</span>
                        <p>
                            <span><a href="">全部</a></span>
                            <span><a href="">山野穿行</a></span>
                            <span><a href="">健行</a></span>
                            <span><a href="">骑行</a></span>
                            <span><a href="">跑步</a></span>
                            <span><a href="">自驾</a></span>
                            <span><a href="">露营</a></span>
                            <span><a href="">溯溪</a></span>
                            <span><a href="">滑雪</a></span>
                            <span><a href="">攀岩</a></span>
                            <span><a href="">漂流</a></span>
                            <span><a href="">温泉</a></span>
                        </p>
                    </div>
                </div>
                <div class=" col-md-8">
                    <div class="sx-cs">
                        <span class="lb">标签：</span>
                        <p>
                            <span><a href="">全部</a></span>
                            <span><a href="">轻装</a></span>
                            <span><a href="">重装</a></span>
                            <span><a href="">绿道</a></span>
                            <span><a href="">城市</a></span>
                            <span><a href="">半岛</a></span>
                            <span><a href="">赏花</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="lxmb col-md-12">

         <!--搜索路线-->
            <div class="lxts col-md-offset-2 col-md-8">
                <p class="lx col-md-2">
                    共"<span class="">1020</span>"条路线
                </p>
                <div class="input-group col-md-offset-5 col-md-3">
                    <input type="text" class="form-control" placeholder="搜索路线...">
                     <span class="input-group-btn">
                         <button class="btn glyphicon glyphicon-search btn-default" type="button"></button>
                      </span>
                </div>
                <a class="cjlx col-md-2" href="">创建路线</a>
            </div>

         <!--路线介绍-->
        <div class="col-md-offset-2 col-md-8">
            <div class="rs-card lxts_y col-md-6">
                <div class="img-size"><a href=""><img src="/ArcticTern_1/public/static/img/trip_planning/shenzhen.jpg" alt=""/></a></div>
                <div class="card-info">
                    <span class="walking"></span>
                    <a href=""><h5 class="h55">深圳塘朗山穿越徒步</h5></a>
                    <p class="label">标准</p>
                    <p class="label label-2 "><a href="">公园</a></p>
                    <a class="label label-3">８</a>
                    <div class="score">
                        <p class="shadow">
                            <span style="width: 100%" class="pentagram"></span>
                        </p>
                        <span class="mar">5.0</span>
                        
                    </div>

                </div>
            </div>
            <div class="rs-card lxts_z col-md-offset- col-md-6">
                <div class="img-size"><a href=""><img src="/ArcticTern_1/public/static/img/trip_planning/gznmxtb.jpg" alt=""/></a></div>

                <div class="card-info">
                    <span class="walking"><img src="" alt=""/></span>
                    <a href=""><h5 class="h55">广州牛帽线徒步</h5></a>
                    <p class="label">标准</p>
                    <p class="label label-2 "><a href="">公园</a></p>
                    <a class="label label-3">８</a>
                    <div class="score">
                        <p class="shadow">
                            <span style="width: 80%" class="pentagram"></span>
                        </p>
                        <span class="mar">5.0</span>

                    </div>

                </div>
            </div>
            <div class="rs-card lxts_y col-md-6">
                <div class="img-size"><a href=""><img src="/ArcticTern_1/public/static/img/trip_planning/yhspb.jpg" alt=""/></a></div>

                <div class="card-info">
                    <span class="walking"><img src="" alt=""/></span>
                    <a href=""><h5 class="h55">深圳华侨城燕晗山跑步</h5></a>
                    <p class="label">休闲</p>
                    <p class="label label-2 "><a href="">城市</a></p>
                    <a class="label label-3">1</a>
                    <div class="score">
                        <p class="shadow">
                            <span style="width: 100%" class="pentagram"></span>
                        </p>
                        <span class="mar">5.0</span>

                    </div>

                </div>
            </div>
            <div class="rs-card lxts_z col-md-offset- col-md-6">
                <div class="img-size"><a href=""><img src="/ArcticTern_1/public/static/img/trip_planning/gzdxc.jpg" alt=""/></a></div>
                <div class="card-info">
                    <span class="walking"><img src="" alt=""/></span>
                    <a href=""><h5 class="h55">广州大学城外环骑行</h5></a>
                    <p class="label">标准</p>
                    <p class="label label-2 "><a href="">公园</a></p>
                    <a class="label label-3">８</a>
                    <div class="score">
                        <p class="shadow">
                            <span style="width: 80%" class="pentagram"></span>
                        </p>
                        <span class="mar">5.0</span>

                    </div>

                </div>
            </div>
            <div class="rs-card lxts_y  col-md-6">
                <div class="img-size"><a href=""><img src="/ArcticTern_1/public/static/img/trip_planning/shljzqx.jpg" alt=""/></a></div>

                <div class="card-info">
                    <span class="walking"><img src="" alt=""/></span>
                    <a href=""><h5 class="h55">上海陆家嘴骑行</h5></a>
                    <p class="label">休闲</p>
                    <p class="label label-2 "><a href="">城市</a><a href="">  休闲 </a></p>
                    <a class="label label-3">1</a>
                    <div class="score">
                        <p class="shadow">
                            <span style="width: 100%" class="pentagram"></span>
                        </p>
                        <span class="mar">5.0</span>

                    </div>

                </div>
            </div>
            <div class="rs-card lxts_z col-md-offset- col-md-6">
                <div class="img-size"><a href=""><img src="/ArcticTern_1/public/static/img/trip_planning/shcmdhd.jpg" alt=""/></a></div>
                <div class="card-info">
                    <span class="walking"><img src="" alt=""/></span>
                    <a href=""><h5 class="h55">上海崇明岛环岛骑行</h5></a>
                    <p class="label">标准</p>
                    <p class="label label-2 "><a href="">城市</a><a href=""> 半岛</a><a href=""> 绿道</a></p>
                    <a class="label label-3">2</a>
                    <div class="score">
                        <p class="shadow">
                            <span style="width: 95%" class="pentagram"></span>
                        </p>
                        <span class="mar">4.7</span>

                    </div>

                </div>
            </div>
            <div class="rs-card lxts_y  col-md-6">
                <div class="img-size"><a href=""><img src="/ArcticTern_1/public/static/img/trip_planning/bj1.jpg" alt=""/></a></div>

                <div class="card-info">
                    <span class="walking"><img src="" alt=""/></span>
                    <a href=""><h5 class="h55">北京西灵山穿越</h5></a>
                    <p class="label">挑战</p>
                    <p class="label label-2 "><a href="">山野穿行</a><a href="">  重装</a></p>
                    <a class="label label-3">1</a>
                    <div class="score">
                        <p class="shadow">
                            <span style="width: 100%" class="pentagram"></span>
                        </p>
                        <span class="mar">5.0</span>

                    </div>

                </div>
            </div>
            <div class="rs-card lxts_z col-md-offset- col-md-6">
                <div class="img-size"><a href=""><img src="/ArcticTern_1/public/static/img/trip_planning/shsjgy.jpg" alt=""/></a></div>
                <div class="card-info">
                    <span class="walking"><img src="" alt=""/></span>
                    <a href=""><h5 class="h55">上海世纪公园-浦明路-后滩徒步</h5></a>
                    <p class="label">标准</p>
                    <p class="label label-2 "><a href="">城市</a><a href=""> 公园</a></p>
                    <a class="label label-3">８</a>
                    <div class="score">
                        <p class="shadow">
                            <span style="width: 95%" class="pentagram"></span>
                        </p>
                        <span class="mar">4.7</span>

                    </div>

                </div>
            </div>
        

          </div>
         </div>

        <!--路线介绍 分页栏-->
        <div class="box" id="box">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
        </div>
    <!--网页底部-->
       <!--<div class="col-md-12 between"></div>-->
    <div>
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
                    2004-2018 穷游网 qyer.com All rights reserved. Version v5.57 京ICP备12003524号 京公网安备11010102001935号
                    京ICP证140673号
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
        <!--<div class="db col-md-12">-->


            <!--<div class="underframe col-md-offset-2 col-md-8">-->
                <!--<p>-->
                    <!--<a href="">合作伙伴</a>-->
                    <!--<a href="">加入我们</a>-->
                    <!--<a href="">新手上路</a>-->
                    <!--<a href="">使用帮助</a>-->
                    <!--<a href="">网站地图</a>-->
                    <!--<a href="">会员条款</a>-->
                    <!--<a href="">社区指南</a>-->
                    <!--<a href="">版权声明</a>-->
                    <!--<a href="">免责声明</a>-->
                    <!--<a href="">联系我们</a>-->
                <!--</p>-->
            <!--</div>-->

    <!--</div>-->
<!--<script src="js/bootstrap.js"></script>-->
    <script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
     <script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>

</body>
</html>