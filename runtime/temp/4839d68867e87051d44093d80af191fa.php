<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"E:\xampp\htdocs\ArcticTern_1/application/destination\view\index\jingdian.html";i:1532931387;s:56:"E:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"E:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="icon" href="/ArcticTern_1/public/static/img/activity/logo_2.png">

    <meta charset="UTF-8">
    <title>景点页面</title>
    <link href="/ArcticTern_1/public/static/css/bootstrap.css" rel="stylesheet">
    <link href="/ArcticTern_1/public/static/css/destination/jingdian.css" rel="stylesheet">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/nav.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/footer.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
</head>
<body>
<div class="container col-md-12 col-xs-12">
    <!--头部区域-->
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
    <!--标头-->
    <div class="nav_bar">
        <div class="nav_bar_box">
            <div class="nav_bar_Paris">
        <li>
            <a href="" class="text">巴黎</a>
        </li>
        <li class="line"></li>
        <li class="menu">
            <a href="">城市指南</a>
        </li>
        <li class="menu">
            <a href="">景点玩乐</a>
        </li>
        <li class="menu">
            <a href="">美食</a>
        </li>
        <li class="menu">
            <a href="">酒店</a>
        </li>
        <li class="menu">
            <a href="">旅行商城</a>
        </li>
        <li class="line"></li>
        <li class="menu">
            <a href="">游记攻略</a>
        </li>
            </div>
            <!--搜索框-->
            <div class="search">
                <input type="text" class="form-control" placeholder="搜索国家/城市/目的地">
                 <div class="search_icon">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                 </div>
            </div>
        </div>
    </div>
    <!--标题-->
    <div class="destination">
        <div class="destination_box">
            <div class="destination_text">
                <a href="">目的地</a>
                <span> > </span>
                <a href="">法国</a>
                <span> > </span>
                <a href="">巴黎</a>
                <span> > </span>
                <a href="">巴黎景点观光</a>
                <span> > </span>
                <span>埃菲尔铁塔</span>
            </div>
            <!--想去，去过-->
            <div class="function">
                <ui>
                    <div class="function_box1">
                    <li><img src="/ArcticTern_1/public/static/img/destination/45.png" alt=""/></li>
                    <span>想去</span>
                    </div>
                    <div class="function_box2">
                    <li><img src="/ArcticTern_1/public/static/img/destination/46.png" alt=""/></li>
                    <span>去过</span>
                    </div>
                    <div class="function_box3">
                    <li><img src="/ArcticTern_1/public/static/img/destination/47.png" alt=""/></li>
                    <span>加入行程</span>
                    </div>
                </ui>
            </div>
            <!--埃菲尔铁塔文字-->
            <div class="destination_Eiffel">
                <h1><a href="">Eiffel Tower</a></h1>
                <h1><a href="">埃菲尔铁塔</a></h1>
            </div>
        </div>
    </div>
    <!--内容区-->
    <div class="content">
        <!--景点热度-->
        <div class="introduce">
            <div class="picture">
                <!--<img src="img/42.jpg" alt=""/>-->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/ArcticTern_1/public/static/img/destination/42.jpg" alt="...">
                        </div>
                        <div class="item">
                            <img src="/ArcticTern_1/public/static/img/destination/51.jpg" alt="...">
                        </div>
                        <div class="item">
                            <img src="/ArcticTern_1/public/static/img/destination/53.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="score">
                <p class="points">
                    <span class="number">9.2</span>
                    <span class="unit">分</span>
                </p>
                <div class="star">
                    <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                </div>
                <div class="ranking">
                巴黎全部景点观光中排
                    <span>第2名</span>
                </div>
            </div>
            <!--折扣模块-->
            <div class="discount">
                <div class="discount_first">
                    <a href="">埃菲尔铁塔可选折扣</a>
                    <span>查看更多折扣</span>
                </div>
                <div class="discount_two">
                    <div class="discount_war">
                        <div class="discount_title">
                    <a class="ticket">【上帝视角】法国巴黎蒙帕纳斯大厦56层观景台电子门票</a>
                            <span>120元</span>
                        </div>
                    </div>
                    <div class="discount_war">
                        <div class="discount_title">
                            <a class="ticket">【观光游玩】法国巴黎城市观光一日游（中文导游）</a>
                            <span class="number_money">175元</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--景点简介-->
            <div class="Text_area">
                <div class="Text_first">
                    建于1889年的埃菲尔铁塔最初是为了迎接世博及纪念法国大革命胜利100周年，总高324米，是当时席卷世界的工业革命的象征。然而在建成后，它却遭到很多[法国](http://place.qyer.com/france/)人的质疑，如此的巨大的钢铁结构跟整个[巴黎](http://place.qyer.com/paris/)是那样的格格不入，甚至不少人提议拆毁她。然而今天，它已成为巴黎乃至法国无可争议的象征。
                </div>
                <div class="Text_first">
                    游客可以乘电梯或者爬楼梯登上铁塔去俯瞰整个巴黎(楼梯只能到第二层)。千禧年后从夜幕降临到凌晨(夏季2:00，冬季1:00)这段时间，铁塔会在整点开始闪烁十分钟，碰到特殊节日活动会有特别颜色，比如中国年时闪红色，欧盟日时闪蓝色。每年的7月14日国庆节都可以来铁塔下方的战神广场(Champs de Mars)欣赏音乐会，这里也是跨年倒数的最佳地点。
                </div>
                <div class="Text_first">
                    铁塔上有两个餐厅分别是位于一层的Tour Eiffel 58，及二层的米其林一星的Jules Verne。在铁塔用餐的好处是可以让餐厅协助预订或提供上铁塔的票，无需再在下方排队等待。关于这两家餐厅，其中Tour Eiffel 58的午餐19欧元起(快餐三明治为主)，晚餐80欧起，类似普通餐厅的正餐，环境费占了不少；而楼上有大厨Alain Ducasse坐镇的Jules Verne如今只剩下一颗星星，午餐90欧元起，晚餐约每人300欧元起，如果不是来感受这个环境，作者建议同样价位可以尝试其他米其林三星，且吃的更好。但是由于他们的特殊位置，所以去那边吃个饭也不容易，旺季的时候最好提前2个月以上预订。
                </div>
                <div class="Text_first">
                    地址：
                    Avenue Gustave Eiffel, 75007 Paris France(查看地图)<br/>

                    到达方式：
                    地铁M6至Bir-Hakeim站，M6、M9至Trocadéro站；RER C线至Champ de Mars-Tour Eiffel站，公交42、69、82、87至Tour Eiffel或者Champs de Mars站<br/>

                    开放时间：
                    6月中旬至9月初：电梯和楼梯9:00-12:45(顶楼23:00)；其余时间：电梯9:30-23:45(顶楼22:30)，楼梯9:30-18:30(最晚进入时间18:00)<br/>

                    门票：
                    电梯至二楼16欧元(12至24周岁8欧元)；电梯至顶楼25欧元(12至24周岁12.5欧元)；楼梯10欧元(12至24周岁5欧元)。<br/>
                </div>
            </div>
            <!--小贴士-->
            <div class="Tips">
                <div class="Tips_title">
                    <h5>小贴士</h5>
                </div>
                <div class="Tips_content">
                <p><h4>埃菲尔铁塔参观注意事项</h4></p>
                    <p>为了节约时间，建议在铁塔官方网站上购票预约登塔时间，之后一般在铁塔的北角(Pilier Nord)的预约通道处等待登塔。由于铁塔的顶层和二层是不同电梯运行的，如果要登上顶层，到了第二层以后还是要跟大家一起排队再坐另一层电梯。夏季登顶一趟至少需要2个小时。<br/>
                        其实铁塔真的可以走楼梯，但是只能走到第二层，一来费用便宜，二来排队人少，而且还能挑战下自己的体能，如果想爬楼梯上铁塔，可以去铁塔东角(Pilier Est)。<br/>
                    </p>
                    <p>
                        夏约宫(Palais de Chaillot)的大露台是观看铁塔的最佳点(搭乘地铁M6和M9到Trocadero站)，下午到日落时为佳。塞纳河边的Avenue de New York也是拍摄观赏铁塔的不错选择。<br/>

                        喜欢寄送明信片的穷游er们可以留意下，铁塔的南角(Pilier Sud)有个小邮局和邮筒，那里会给你盖上铁塔标志的纪念戳。<br/>
                    </p>
                </div>
            </div>
        </div>
        <!--右半块区域-->
        <div class="right">
            <!--位置-->
        <div class="map">
            <img src="/ArcticTern_1/public/static/img/destination/48.png" alt=""/>
        </div>
            <div class="line2"></div>
            <!--周边景点-->
            <div class="attr">
                <div class="attr_title">
                    <span>周边景点</span>
                    <a href="">更多>></a>
                </div>
                <div class="attr_content">
                    <ul>
                        <li>
                            <img src="/ArcticTern_1/public/static/img/destination/43.jpg" alt=""/>
                        </li>
                    </ul>
                    <div class="attr_text">
                        <p class="attr_beauty">卢浮宫</p>
                        <p>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span>9.6</span>
                        </p>
                        <p class="distance">距离3.16km</p>
                    </div>
                    </div>
                    <div class="attr_content2">
                        <ul>
                            <li>
                                <img src="/ArcticTern_1/public/static/img/destination/44.jpg" alt=""/>
                            </li>
                        </ul>
                        <div class="attr_text">
                        <p class="attr_beauty">埃菲尔铁塔</p>
                        <p>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span>9.2</span>
                        </p>
                        <p class="distance">距离0km</p>
                    </div>
                        </div>
                        <div class="attr_content3">
                            <ul>
                                <li>
                                    <img src="/ArcticTern_1/public/static/img/destination/45.jpg" alt=""/>
                                </li>
                            </ul>
                            <div class="attr_text">
                                <p class="attr_beauty">巴黎圣母院</p>
                                <p>
                                    <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                                    <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                                    <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                                    <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                                    <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                                    <span>9.2</span>
                                </p>
                                <p class="distance">距离4.09km</p>
                            </div>
                     </div>
                </div>
                    <div class="line3"></div>
            <!--周边美食-->
            <div class="attr">
                <div class="attr_title">
                    <span>周边美食</span>
                    <a href="">更多>></a>
                </div>
                <div class="attr_content">
                    <ul>
                        <li>
                            <img src="/ArcticTern_1/public/static/img/destination/43.jpg" alt=""/>
                        </li>
                    </ul>
                    <div class="attr_text">
                        <p class="attr_beauty">小天使冰激凌(左岸分店)</p>
                        <p>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span>8.8</span>
                        </p>
                        <p class="distance">距离3.8km</p>
                    </div>
                </div>
                <div class="attr_content2">
                    <ul>
                        <li>
                            <img src="/ArcticTern_1/public/static/img/destination/44.jpg" alt=""/>
                        </li>
                    </ul>
                    <div class="attr_text">
                        <p class="attr_beauty">拉杜丽(香榭丽舍大街店)</p>
                        <p>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span>8.7</span>
                        </p>
                        <p class="distance">距离1.57km</p>
                    </div>
                </div>
                <div class="attr_content3">
                    <ul>
                        <li>
                            <img src="/ArcticTern_1/public/static/img/destination/45.jpg" alt=""/>
                        </li>
                    </ul>
                    <div class="attr_text">
                        <p class="attr_beauty">Pierre Herme(波拿巴大街店)</p>
                        <p>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class=" glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span>9.1</span>
                        </p>
                        <p class="distance">距离2.9km</p>
                    </div>
                </div>
            </div>
            <div class="line4"></div>
            <div class="advertising">
                <img src="/ArcticTern_1/public/static/img/destination/50.png" alt=""/>
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
</div>
    </div>
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>

</body>

</html>