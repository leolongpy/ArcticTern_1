<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\xampp\htdocs\ArcticTern_1/application/about\view\index\index.html";i:1532931083;s:56:"D:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"D:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>关于我们</title>
    <link rel="icon" href="/ArcticTern_1/public/static/img/activity/logo_2.png">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/about/index.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/nav.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/footer.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
</head>
<body>
<!-- 头部开始-->
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
    <!-- 头部结束-->

    <!-- 背景-->
    <div class="bj">
        <img src="/ArcticTern_1/public/static/img/about/BJ000.png" width="100%" height="500px">
    </div>
    <!-- 背景结束-->
</header>

    <!-- 内容区-->
    <div class="content_2">
        <div class="gywm">
            <p>关于我们</p>
        </div>

        <div class="text_1">
            <p>燕鸥岛，国内专业的出国旅行定制公司，</p>
            <p>致力于为每位客户提供省心、自由、高性价比的海外自由行方案，让旅行有温度。
            </p>
        </div>

        <div class="text_img">
            <img src="/ArcticTern_1/public/static/img/about/BJ001.png" width="100%">
        </div>

        <div class="text_2">
            <div class="x1">
                <p>2017年，燕鸥岛在石家庄诞生了（隶属于河北燕鸥岛国际旅行社有限公司）。</p>

                <p>最初，我们只是为小圈子里的朋友们，提供个性化的定制旅行服务。</p>

                <p>但随着业务的发展，我们发现，原来有那么多不认识我们的朋友，也都在寻找着这种自由、
                    省心、又有性价比的私人定制旅行方式。
                </p>

                <p>渐渐地，慕名而来的朋友越来越多。找我们定制旅行的朋友遍布大江南北，甚至还有很多旅居
                    国外的朋友。我们欣喜的同时，也深感惶恐。
                </p>

                <p>这既是信任，也是责任。我们知道，将自己的旅行交给别人，真的是一件很重要的决定，我们能不能
                    做到不辜负这种信任，我们能不能做到比预期的更好，这始终是激励我们向前的动力。
                </p>

                <p>近一年间，我们的队伍不断发展壮大，从最初的几位海外旅行达人，到近百余位拥有丰富自由行经验、
                    长期海外生活经历的专业旅行定制师与专业旅行顾问。燕鸥岛也从一间小工作室发展为600平米LOFT体验店，
                    并在重庆、上海、成都、深圳开办了分公司。
                </p>
            </div>
            <div class="x2">
                <p>燕鸥岛直营分店也相继进驻到天津、杭州、成都的大型商场内，不久的未来燕鸥岛与各地热爱旅行的小伙伴们线下接触的机会会越来越多。
                    区域合作伙伴遍布金华等城市。走过大山大海的小伙伴们聚集在这里，怀揣着对旅行的热忱与爱，努力把每一个看似遥远的旅行梦想变成现实。
                </p>
                <p>如今，已有超过20万人通过燕鸥岛定制了属于自己的出国旅行。有悄悄找定制师策划海外婚礼的甜蜜情侣，有坚持不跟团的蜜月旅行的听障夫妇，
                    有想牵着彼此的手走天涯的花甲老人，还有更多像你我一样，只是想带着家人、恋人、朋友一起看世界，真正享受一次自在旅行的普通人。
                </p>
                <p>
                    我们常常收到他们从世界各地寄来的明信片、信件、小礼物，每一份珍贵的心意都令我们幸福不已。这意味着我们真的帮他们享受到了出国自由行的乐趣，
                    我们永远以此为荣。
                </p>
                <p>
                    我们相信，旅行是有温度的。我们希望能在这个总是冰冷冷的世界里，用我们的专业与热情，带给你一抹属于旅行的温度。
                </p>

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

    <script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
    <script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>

</body>
</html>
