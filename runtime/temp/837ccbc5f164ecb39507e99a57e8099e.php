<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\xampp\htdocs\ArcticTern_1/application/destination\view\index\country.html";i:1531361751;s:56:"D:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"D:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>国家</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/destination/country.css">
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
    <!--标题-->
    <div class="head">
        <ul class="head_subNav">
            <li>
                <a href="<?php echo url('destination/index/index'); ?>">目的地</a>
            </li>
            <li>></li>
            <li>
                <a href="<?php echo url('destination/index/country'); ?>">法国</a>
            </li>
            <li>></li>
            <li>></li>
            <li>
                法国旅游攻略
            </li>

        </ul>
        <div class="head_title">
            <div class="title_left">
                <a href="#">France</a>
                <div>
                    <a href="#">法国</a>
                </div>
            </div>
            <div class="title_right">
                <a class="weatherLink" href="#">
                    国家天气&nbsp;&nbsp;&nbsp;
                    <img src="//static.qyer.com/images/place5/weather/weatherIcon-g-04.png" width="28" height="26"
                         alt="" class="icon">
                    &nbsp;多云　16℃~22℃
                </a>
                <p>
                    <em>156233</em>
                    人去过这里，
                    <em>54649</em>
                    条目的地评论</p>
            </div>
        </div>
    </div>
    <div class="head_mainNav">
        <div class="head_nav">
            <ul>
                <li>
                    <a href="#guide">国家指南</a>
                </li>
                <li>
                    <a href="#hot">城市推荐</a>
                </li>


                <li>
                    <a href="#strategy">热门攻略</a>
                </li>
                <li>
                    <a href="#travel">行程策划</a>
                </li>
                <li>
                    <a href="<?php echo url('destination/index/youji'); ?>">游记列表</a>
                </li>

            </ul>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="搜索城市/目的地" aria-describedby="basic-addon2">
                <a href="#" class="input-group-addon" style="padding: 0 15px">
                    <i class="glyphicon glyphicon-search"></i>
                </a>
            </div>
        </div>
    </div>

</header>

<!--内容-->
<div class="content">
    <div class="guide" id="guide">
        <div class="mainGuide">
            <div class="mainGuide_left">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>

                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item mainItem active">
                            <img src="/ArcticTern_1/public/static/img/destination/country_lb1.png">

                        </div>
                        <div class="item mainItem">
                            <img src="/ArcticTern_1/public/static/img/destination/country_lb2.png">

                        </div>
                        <div class="item mainItem">
                            <img src="/ArcticTern_1/public/static/img/destination/country_lb3.png">

                        </div>
                        <div class="item mainItem">
                            <img src="/ArcticTern_1/public/static/img/destination/country_lb4.png">

                        </div>

                    </div>

                </div>
            </div>
            <div class="mainGuide_right">
                <div class="right_title">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-plus-sign"></i>
                                <p>想去</p>
                            </a>

                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-ok-sign"></i>
                                <p>去过</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                <p>生活过</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="right_text">
                    <h5>国家经验</h5>
                    <p>
                        <a href="#">YuzeSong：</a>
                        奢华大于浪漫而内心又不失高傲的国度。如果会法语能够更好地了解这个城市
                    <p>
                        <a href="#">小红与小白：</a>
                        黄色灯光在黑夜闪烁迷离，浪漫融入进塞纳河每一滴，蒸发又落下，将浪漫洒落在每一个不介意被雨水打湿的人身上
                    <p>
                        <a href="#">Mascx：</a>
                        来法国人家里作客,一定要比约定时间晚到才符合礼仪. 一位老先生告诉我,是等待才让我们的约见更加有欣喜感.
                    </p>
                    <button type="button" class="myBtn" data-toggle="modal" data-target=".bs-example-modal-lg">目的地速写
                    </button>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                         aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h3 class="modal-title" id="myModalLabel">目的地速写</h3>
                                </div>
                                <div class="modal-body">
                                    <h4>“Je t'aime，Paris！”巴黎，史前还埋藏在海平面下的这块土地，在建城2000多年后的今天，这个名字不会让任何一个人陌生
                                        。这座世界历史文化名城被誉为花都、光之城、浪漫之都、时尚之都、美食之都⋯⋯也许你只是想去蒙田大道纵情购物，也许只
                                        是想去塞纳河边散步，也许你只是想去米其林餐厅尝尝法式大餐，
                                        也许只是想去左岸喝喝咖啡，也许你只是想去卢浮宫看看蒙娜丽莎的微笑⋯⋯也许这个地球上只有巴黎可以满足所有人的期许。
                                    </h4>
                                    <h4>
                                        巴黎从最早的河心岛，到被塞纳河划分为左岸右岸，在经历数次扩张后，如今的巴黎已有“小巴黎”及“大巴黎”之分；
                                        小巴黎指的是划为20个区的巴黎市区，法国人口中的“Paris”以及地址里显示的“Paris”一般只是指的巴黎市区，
                                        邮编为750xx，绝大部分景点比如埃菲尔铁塔、卢浮宫、巴黎圣母院等位于小巴黎，景点相对集中，所以步行也是
                                        不错的选择。大巴黎则是小巴黎加上周边的7个郊区省份组成的Île-de-France(法兰西岛大区)，这里也有不少值
                                        得前去的地方，比如凡尔赛宫、枫丹白露、迪士尼乐园等。
                                    </h4>
                                    <h4>
                                        曾经背包客集中在Opera(歌剧院地区)，随着巴黎地价的逐步升高，各种层次的游客已经遍布巴黎的任
                                        何一个角落，左岸和蒙马特高地成为新宠。发达便捷的公共交通非是出行的首选，骑自行车或步行也是很不
                                        错的主意；在市区，自驾绝对不是个好选择，环保的巴黎政府非常不提倡自驾游巴黎。
                                    </h4>
                                    <h4>
                                        面积: 105平方公里 人口: 217 万人 当地语言: 法语
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="hot" id="hot">
        <h1>热门城市</h1>
        <div id="myCarousel2" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <!--<ol class="carousel-indicators">-->
            <!--<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>-->
            <!--<li data-target="#myCarousel2" data-slide-to="1"></li>-->
            <!--<li data-target="#myCarousel2" data-slide-to="2"></li>-->
            <!--<li data-target="#myCarousel2" data-slide-to="3"></li>-->
            <!--</ol>-->
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner mycarousel-inner">
                <div class="item active">
                    <div class="mainHot_box">
                        <div class="hot_top1">
                            1
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot1.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>巴黎</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#">埃菲尔铁塔</a> 、<a href="#">卢浮宫</a> 、<a href="#">巴黎凯旋门</a> 、<a href="#">香榭丽舍大街</a>
                            、<a href="#">塞纳河</a> 、<a href="#">巴黎圣母院</a> 、<a href="#">协和广场</a> 、
                        </p>
                    </div>
                    <div class="mainHot_box">
                        <div class="hot_top2">
                            2
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot2.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>尼斯</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#"> 尼斯老城区</a> 、<a href="#"> 尼斯天使湾 </a> 、<a href="#">尼斯英国人漫步大道</a> 、<a href="#">
                            尼斯城堡山</a> 、<a href="#">尼斯海</a> 、<a href="#">尼斯马塞纳广场</a> 、
                        </p>
                    </div>
                    <div class="mainHot_box">
                        <div class="hot_top3">
                            3
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot3.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>戛纳</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#"> 电影宫</a> 、<a href="#">戛纳老港 </a> 、<a href="#">星光大道</a> 、<a href="#"> 自由林荫道</a>
                            、<a href="#">小十字大道</a> 、<a href="#">戛纳市政厅 </a> 、<a href="#">圣玛格丽特岛</a> 、
                        </p>
                    </div>
                    <div class="mainHot_box">
                        <div class="hot_top">
                            4
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot4.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>阿维尼翁</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#">阿维尼翁城墙</a> 、<a href="#">Pope's Palace (Palais des Papes) </a> 、<a
                                href="#">圣贝内泽桥</a> 、<a href="#">阿维尼翁圣母大教堂</a> 、
                        </p>
                    </div>
                    <div class="mainHot_box">
                        <div class="hot_top">
                            5
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot5.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>普罗旺斯</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#"> 阿维尼翁城墙 </a> 、<a href="#">Pope's Palace (Palais des Papes) </a> 、<a href="#">
                            圣贝内泽桥</a> 、<a href="#"> 阿维尼翁圣母大教堂</a> 、
                        </p>
                    </div>
                    <div class="mainHot_box">
                        <div class="hot_top">
                            6
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot6.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>波尔多</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#">波尔多交易所广场 </a> 、<a href="#">吉伦特派纪念碑 </a> 、<a href="#"> 圣安德烈大主教教堂</a> 、<a
                                href="#"> 波尔多大剧院 </a> 、<a href="#"> 波尔多大钟门</a>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="mainHot_box">
                        <div class="hot_top1">
                            7
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot7.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>凡尔赛</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#">凡尔赛宫</a> 、<a href="#">镜亭</a> 、<a href="#">玛丽-安托瓦内特的宫苑</a> 、<a href="#">
                            凡尔赛的图书馆</a> 、<a href="#"> 凡尔赛市政厅</a> 、<a href="#">圣路易主教堂</a>
                        </p>
                    </div>
                    <div class="mainHot_box">
                        <div class="hot_top2">
                            8
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot8.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>里昂</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#">里昂旧城百花广场</a> 、<a href="#"> 里昂圣让主教堂 </a> 、<a href="#">富维耶圣母堂</a> 、<a href="#">
                            富维耶山</a> 、<a href="#">里昂古罗马剧场</a> 、<a href="#">里昂市</a>
                        </p>
                    </div>
                    <div class="mainHot_box">
                        <div class="hot_top3">
                            9
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot9.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>马赛</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#"> 马赛老港 </a> 、<a href="#">马赛守护圣母教堂 </a> 、<a href="#">伊夫岛</a> 、<a href="#"> 隆尚宫</a>
                            、<a href="#">马赛主教座堂</a> 、<a href="#">马赛市政厅 </a> 、<a href="#">卡朗格峡</a> 、
                        </p>
                    </div>
                    <div class="mainHot_box">
                        <div class="hot_top">
                            10
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot10.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>枫丹白露</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#"> 枫丹白露宫 </a> 、<a href="#"> 枫丹白露城堡花园</a> 、<a href="#">枫丹白露森林</a> 、<a href="#">
                            白马庭院</a> 、<a href="#"> 舞会大厅</a> 、<a href="#">椭圆庭院</a> 、<a href="#">小套</a>
                        </p>
                    </div>
                    <div class="mainHot_box">
                        <div class="hot_top">
                            11
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot11.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>斯特拉斯堡</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#"> 斯特拉斯堡圣母大教堂 </a> 、<a href="#"> 小法兰西 </a> 、<a href="#"> 沃邦拦河坝 </a> 、<a href="#">
                            欧洲议会中心 </a> 、<a href="#"> 克勒贝尔广场 </a> 、<a href="#"> 博物馆 </a>
                        </p>
                    </div>
                    <div class="mainHot_box">
                        <div class="hot_top">
                            12
                        </div>
                        <div class="myImg">
                            <a href="<?php echo url('destination/index/ziye'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_hot12.png"
                                                                            width="310px" height="200px"/></a>
                        </div>
                        <a href="#">
                            <h4>阿讷西</h4>
                        </a>
                        <p>
                            <i class="glyphicon glyphicon-map-marker"> </i>
                            <a href="#">阿讷西胡 </a> 、<a href="#">阿讷西岛宫 </a> 、<a href="#"> 阿讷西老城</a> 、<a href="#">
                            圣克莱尔街 </a> 、<a href="#"> 爱情桥</a> 、<a href="#"> 阿讷西城堡博物馆</a> 、<a href="#"> 阿讷</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a href="#myCarousel2" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left  myleft2"></span>
            </a>
            <a href="#myCarousel2" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right myright2"></span>
            </a>
        </div>
    </div>
    <div class="strategy" id="strategy">
        <div class="minStrategy">
            <h1>游记攻略</h1>
            <div id="myCarousel" class="carousel slide">
                <!-- 轮播（Carousel）指标 -->
                <!--<ol class="carousel-indicators">-->
                <!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
                <!--<li data-target="#myCarousel" data-slide-to="1"></li>-->
                <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
                <!--<li data-target="#myCarousel" data-slide-to="3"></li>-->
                <!--</ol>-->
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner mycarousel-inner">
                    <div class="item active">
                        <div class="strategy_img strategy_img1">
                            <article class="card">
                                <header class="card__thumb">
                                    <a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_strategy1.png" width="350px"
                                                                                     height="245px"></a>
                                    <date class="card__date">
                                        <span class="card__date__day">26</span>
                                        <br/>
                                        <span class="card__date__month">五月</span>
                                    </date>
                                </header>

                                <div class="card__body">
                                    <div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
                                    <div class="card_tx">
                                        <img src="/ArcticTern_1/public/static/img/destination/strategy_tx1.png" width="84px" height="84px"
                                             alt="">
                                    </div>
                                    <div class="card__subtitle">MaisonDu</div>
                                    <h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">用美食纪录法国旅途</a></h2>
                                    <p class="card__description">
                                        在法国飘飘荡荡了这么多年，走过一些地方，路过一些风景，热爱过也痛恨过，唯一不变的是对美食的追求。
                                    </p>
                                </div>

                                <div class="card__footer">
                                    <span class="icon ion-clock"></span> 10分钟前
                                    <span class="icon ion-chatbox"></span><a href="<?php echo url('destination/index/youji'); ?>"> 145 评论</a>
                                </div>
                            </article>
                        </div>
                        <div class="strategy_img strategy_img1">
                            <article class="card">
                                <header class="card__thumb">
                                    <a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_strategy2.png" width="350px"
                                                                                     height="245px"></a>
                                    <date class="card__date">
                                        <span class="card__date__day">9</span>
                                        <br/>
                                        <span class="card__date__month">五月</span>
                                    </date>
                                </header>

                                <div class="card__body">
                                    <div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
                                    <div class="card_tx">
                                        <img src="/ArcticTern_1/public/static/img/destination/strategy_tx2.png" width="84px" height="84px"
                                             alt="">
                                    </div>
                                    <div class="card__subtitle">比利白</div>
                                    <h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">普罗旺斯薰衣草花田之旅</a></h2>
                                    <p class="card__description">
                                        探寻七月花开最盛的普罗旺斯薰衣草。走过Aix-en-Provence 东面最著名的薰衣草花田，
                                        拜访赛南克修道院，瓦伦索尔，泉水小镇，石头城，圣十字湖小镇。
                                    </p>
                                </div>

                                <div class="card__footer">
                                    <span class="icon ion-clock"></span> 20分钟前
                                    <span class="icon ion-chatbox"></span><a href="<?php echo url('destination/index/youji'); ?>"> 149 评论</a>
                                </div>
                            </article>
                        </div>
                        <div class="strategy_img strategy_img1">
                            <article class="card">
                                <header class="card__thumb">
                                    <a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/country_strategy3.png" width="350px"
                                                                                     height="245px"></a>
                                    <date class="card__date">
                                        <span class="card__date__day">20</span>
                                        <br/>
                                        <span class="card__date__month">四月</span>
                                    </date>
                                </header>

                                <div class="card__body">
                                    <div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
                                    <div class="card_tx">
                                        <img src="/ArcticTern_1/public/static/img/destination/strategy_tx3.png" width="84px" height="84px"
                                             alt="">
                                    </div>
                                    <div class="card__subtitle">TasteInParis</div>
                                    <h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">放慢脚步，随我去海</a></h2>
                                    <p class="card__description">
                                        如果在你印象中的南法只是花田古镇的话，那么我带你去地中海。
                                        如果你印象中的地中海只是石硕海滩与裸晒的马卡龙的话的话，那么我会给你一个不那么像游客的体验方式。
                                        它会是你的鱼缸，游乐场、舞台，甚至是你家后院。
                                    </p>
                                </div>

                                <div class="card__footer">
                                    <span class="icon ion-clock"></span> 59分钟前
                                    <span class="icon ion-chatbox"></span><a href="<?php echo url('destination/index/youji'); ?>"> 199 评论</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strategy_img strategy_img1">
                            <article class="card">
                                <header class="card__thumb">
                                    <a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-4.png" width="350px"
                                                                                     height="245px"></a>
                                    <date class="card__date">
                                        <span class="card__date__day">16</span>
                                        <br/>
                                        <span class="card__date__month">四月</span>
                                    </date>
                                </header>

                                <div class="card__body">
                                    <div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
                                    <div class="card_tx">
                                        <img src="/ArcticTern_1/public/static/img/destination/card_tx4.png" width="84px" height="84px" alt="">
                                    </div>
                                    <div class="card__subtitle">ddqq的围脖</div>
                                    <h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">巴黎旅游必游景点</a></h2>
                                    <p class="card__description">
                                        如果在巴黎停留的时间较短，推荐首选去一些经典景点游玩，游览这些地方，可以快速而直接的认识
                                        。 可以看到巴黎曾经的面貌，了解法国的历史和法国人民族性格的成因。在这里推荐几处来到巴黎不得不去的经典景点。
                                    </p>
                                </div>

                                <div class="card__footer">
                                    <span class="icon ion-clock"></span> 11分钟前
                                    <span class="icon ion-chatbox"></span><a href="<?php echo url('destination/index/youji'); ?>"> 296 评论</a>
                                </div>
                            </article>
                        </div>
                        <div class="strategy_img strategy_img1">
                            <article class="card">
                                <header class="card__thumb">
                                    <a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-5.png" width="350px"
                                                                                     height="245px"></a>
                                    <date class="card__date">
                                        <span class="card__date__day">2</span>
                                        <br/>
                                        <span class="card__date__month">四月</span>
                                    </date>
                                </header>

                                <div class="card__body">
                                    <div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
                                    <div class="card_tx">
                                        <img src="/ArcticTern_1/public/static/img/destination/card_tx5.png" width="84px" height="84px" alt="">
                                    </div>
                                    <div class="card__subtitle">Aniseyang</div>
                                    <h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">巴黎的魅力小店游之购物篇</a></h2>
                                    <p class="card__description">
                                        悠闲的逛逛景点，逛逛当地特色小店，在这里向大家推荐一些当地特色小店。
                                    </p>
                                </div>

                                <div class="card__footer">
                                    <span class="icon ion-clock"></span> 56分钟前
                                    <span class="icon ion-chatbox"></span><a href="<?php echo url('destination/index/youji'); ?>"> 147 评论</a>
                                </div>
                            </article>
                        </div>
                        <div class="strategy_img strategy_img1">
                            <article class="card">
                                <header class="card__thumb">
                                    <a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-6.png" width="350px"
                                                                                     height="245px"></a>
                                    <date class="card__date">
                                        <span class="card__date__day">19</span>
                                        <br/>
                                        <span class="card__date__month">三月</span>
                                    </date>
                                </header>

                                <div class="card__body">
                                    <div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
                                    <div class="card_tx">
                                        <img src="/ArcticTern_1/public/static/img/destination/card_tx7.png" width="84px" height="84px" alt="">
                                    </div>
                                    <div class="card__subtitle">sads</div>
                                    <h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">电影《爱在日落黄昏时》里的那些巴黎地点</a></h2>
                                    <p class="card__description">
                                        在巴黎街头，他们走走停停，穿过大街小巷，在温暖的日光下，回忆当年的点点滴滴，
                                        讲给对方彼此错过的九年，怀念那些爱着的心情。这里列出的便是电影《爱在日落黄昏时》里，
                                        男女主角在巴黎走过的地方。
                                    </p>
                                </div>

                                <div class="card__footer">
                                    <span class="icon ion-clock"></span> 16分钟前
                                    <span class="icon ion-chatbox"></span><a href="<?php echo url('destination/index/youji'); ?>"> 156 评论</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="item">
                        <div class="strategy_img strategy_img1">
                            <article class="card">
                                <header class="card__thumb">
                                    <a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-7.png" width="350px"
                                                                                     height="245px"></a>
                                    <date class="card__date">
                                        <span class="card__date__day">10</span>
                                        <br/>
                                        <span class="card__date__month">三月</span>
                                    </date>
                                </header>

                                <div class="card__body">
                                    <div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
                                    <div class="card_tx">
                                        <img src="/ArcticTern_1/public/static/img/destination/card_tx6.png" width="84px" height="84px" alt="">
                                    </div>
                                    <div class="card__subtitle">小兔子冰淇淋</div>
                                    <h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">巴黎十大免费休闲旅游景点</a></h2>
                                    <p class="card__description">
                                        旅游观光是巴黎市城市推广的很重要的一部分，巴黎市政府和旅游局都对游客们在巴黎的
                                        旅游体验做出了很大的努力。在这里推荐几个实地走过的地方，不花钱也一样能享受巴黎的热闹与宁静。
                                    </p>
                                </div>

                                <div class="card__footer">
                                    <span class="icon ion-clock"></span> 11分钟前
                                    <span class="icon ion-chatbox"></span><a href="<?php echo url('destination/index/youji'); ?>"> 695 评论</a>
                                </div>
                            </article>
                        </div>
                        <div class="strategy_img strategy_img1">
                            <article class="card">
                                <header class="card__thumb">
                                    <a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-8.png" width="350px"
                                                                                     height="245px"></a>
                                    <date class="card__date">
                                        <span class="card__date__day">6</span>
                                        <br/>
                                        <span class="card__date__month">三月</span>
                                    </date>
                                </header>

                                <div class="card__body">
                                    <div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
                                    <div class="card_tx">
                                        <img src="/ArcticTern_1/public/static/img/destination/card_tx8.png" width="84px" height="84px" alt="">
                                    </div>
                                    <div class="card__subtitle">比目小鱼</div>
                                    <h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">巴黎71家好吃的甜点面包店大集合，最全清单！</a></h2>
                                    <p class="card__description">
                                        巴黎甜点师推荐，来巴黎一定不能错过的好吃甜点71家
                                        超详细攻略：巴黎71家好吃的甜点面包店大集合，最全清单！超多美照片 吃货不要错过（慢慢更新）
                                    </p>
                                </div>

                                <div class="card__footer">
                                    <span class="icon ion-clock"></span> 26分钟前
                                    <span class="icon ion-chatbox"></span><a href="<?php echo url('destination/index/youji'); ?>"> 865 评论</a>
                                </div>
                            </article>
                        </div>
                        <div class="strategy_img strategy_img1">
                            <article class="card">
                                <header class="card__thumb">
                                    <a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-9.png" width="350px"
                                                                                     height="245px"></a>
                                    <date class="card__date">
                                        <span class="card__date__day">26</span>
                                        <br/>
                                        <span class="card__date__month">二月</span>
                                    </date>
                                </header>

                                <div class="card__body">
                                    <div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
                                    <div class="card_tx">
                                        <img src="/ArcticTern_1/public/static/img/destination/card_tx9.png" width="84px" height="84px" alt="">
                                    </div>
                                    <div class="card__subtitle">夜白残</div>
                                    <h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">甜蜜诱惑—巴黎甜品札记</a></h2>
                                    <p class="card__description">
                                        当一个嗜甜症重度患者来到巴黎，绝对不容错过的就是城中街头巷尾的众多甜品店。
                                        巴黎有许多颇负盛名的甜品铺子和蛋糕店，它们大多门面不大，
                                        但装修精致，服务员笑容甜美服务耐心热情，外带的盒子纸袋漂亮得舍不得丢掉。
                                    </p>
                                </div>

                                <div class="card__footer">
                                    <span class="icon ion-clock"></span> 35分钟前
                                    <span class="icon ion-chatbox"></span><a href="<?php echo url('destination/index/youji'); ?>"> 861 评论</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!-- 轮播（Carousel）导航 -->
                <a href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left  myleft"></span>
                </a>
                <a href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right myright"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="travel" id="travel">
        <h1>行程推荐</h1>
        <ul class="myTab" id="mainTravel">
            <li class="active">
                <a href="#travel1" data-toggle="tab">巴黎三日游</a>
            </li>
            <li>
                <a href="#travel2" data-toggle="tab">巴黎四日游</a>
            </li>
            <li>
                <a href="#travel3" data-toggle="tab">巴黎五日游</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade in active tab" id="travel1">
                <div class="travel_min">
                    <div class="photo">
                        <img src="/ArcticTern_1/public/static/img/destination/photo1.png"/>
                    </div>
                    <div class="min_right">
                        <div class="right_top">
                            <a href="<?php echo url('trip_planning/index/index'); ?>">巴黎三日游</a>
                        </div>
                        <p>
                            <span>D1</span>
                            巴黎圣母院 > 卢浮宫 > 香榭丽舍大街 > 巴黎凯旋门 > 埃菲尔铁塔
                        </p>
                        <p>
                            <span>D2</span>
                            巴士底广场 > 巴黎雨果故居 > 孚日广场 > 巴黎市政厅 > 蓬皮杜中心 > 圣日耳曼德佩大教堂

                        </p>
                        <p>
                            <span>D3</span>
                            凡尔赛宫
                        </p>
                        <div class="but">
                            <a href="<?php echo url('trip_planning/index/index'); ?>">行程行情</a>
                            <a href="#">复制行程</a>
                            <a href="#">购买相关折扣</a>
                        </div>

                    </div>


                </div>
            </div>
            <div class="tab-pane fade tab" id="travel2">
                <div class="travel_min">
                    <div class="photo">
                        <img src="/ArcticTern_1/public/static/img/destination/photo2.png"/>
                    </div>
                    <div class="min_right">
                        <div class="right_top">
                            <a href="<?php echo url('trip_planning/index/index'); ?>">巴黎四日游</a>
                        </div>
                        <p>
                            <span>D1</span>
                            卢浮宫 > 香榭丽舍大街 > 巴黎凯旋门
                        </p>
                        <p>
                            <span>D2</span>
                            巴士底广场 > 孚日广场 > 巴黎市政厅 > 巴黎歌剧院 > 红磨坊 > 爱之墙 > 巴黎圣心大教堂

                        </p>
                        <p>
                            <span>D3</span>
                            圣日耳曼街区 > 巴黎老佛爷(Galeries Lafayette)奥斯曼旗舰店 > 巴黎春天百货(奥斯曼旗舰店) > 蒙田大道
                        </p>
                        <div class="but">
                            <a href="<?php echo url('trip_planning/index/index'); ?>">行程行情</a>
                            <a href="#">复制行程</a>
                            <a href="#">购买相关折扣</a>
                        </div>

                    </div>


                </div>
            </div>
            <div class="tab-pane fade tab" id="travel3">
                <div class="travel_min">
                    <div class="photo">
                        <img src="/ArcticTern_1/public/static/img/destination/photo3.png"/>
                    </div>
                    <div class="min_right">
                        <div class="right_top">
                            <a href="<?php echo url('trip_planning/index/index'); ?>">巴黎五日游</a>
                        </div>
                        <p>
                            <span>D1</span>
                            巴黎圣母院 > 卢浮宫 > 协和广场
                        </p>
                        <p>
                            <span>D2</span>
                            巴士底广场 > 巴黎雨果故居 > 孚日广场 > 巴黎市政厅 > 蓬皮杜中心 > 红磨坊

                        </p>
                        <p>
                            <span>D3</span>
                            埃菲尔铁塔 > 巴黎凯旋门 > 香榭丽舍大街 > 奥赛博物馆 > 塞纳河
                        </p>
                        <div class="but">
                            <a href="<?php echo url('trip_planning/index/index'); ?>">行程行情</a>
                            <a href="#">复制行程</a>
                            <a href="#">购买相关折扣</a>
                        </div>

                    </div>


                </div>
            </div>
            <div class="but2">
                <a href="<?php echo url('trip_planning/index/index'); ?>">查看更多行程</a>
                <a href="<?php echo url('trip_planning/index/create'); ?>">私人订制</a>
            </div>
        </div>
    </div>
</div>

<div class="ly">
    <!-- 热门旅游目的地-->
    <div class="rmly">
        <p class="title">热门旅游目的地</p>
        <ul class="list clearfix">
            <li>巴黎</li>
            <li>中国</li>
            <li>万荣</li>
            <li>万象</li>
            <li>丽水</li>
            <li>摩纳哥</li>
            <li>阿联酋</li>
            <li>佛罗伦萨</li>
            <li>冲绳</li>
            <li>卡萨布兰卡</li>
            <li>葡萄牙</li>
            <li>圣地亚哥</li>
            <li>圣托里尼</li>
            <li>垦丁</li>
            <li>塞班岛</li>
            <li>墨尔本</li>
            <li>奥克兰</li>
            <li>奥兰多</li>
            <li>威尼斯</li>
            <li>尼泊尔</li>
            <li>阿尔巴尼亚</li>
            <li>布鲁塞尼</li>
            <li>悉尼</li>
            <li>文莱</li>
            <li>林肯</li>
            <li>梵蒂冈</li>
            <li>汉堡</li>
            <li>法兰克福</li>
            <li>泰勒</li>
            <li>苏丹</li>
            <li>碧瑶</li>
            <li>米兰</li>
            <li>索菲亚</li>
            <li>纽约</li>
            <li>罗威纳</li>
            <li>罗马</li>
            <li>耶路撒冷</li>
            <li>苏梅岛</li>
            <li>里昂</li>
            <li>长滩岛</li>
            <li>阿布扎比</li>
            <li>首尔</li>
            <li>马尼拉</li>
            <li>澳门</li>
            <li>肯尼亚</li>
            <li>哈萨克斯坦</li>
            <li>巴勒斯坦</li>
            <li>德国</li>
            <li>日本</li>
            <li>朝鲜</li>
        </ul>
    </div>
    <!-- 相关旅游目的地-->
    <div class="xgly">
        <p class="title">相关旅游目的地</p>
        <ul class="list clearfix">
            <li>瓦纳</li>
            <li>Donzère</li>
            <li>博尼法乔</li>
            <li>布伊约纳克</li>
            <li>南特</li>
            <li>Coustellet</li>
            <li>滨海圣皮埃尔</li>
            <li>阿涅勒</li>
            <li>泉水城</li>
            <li>塞莱斯塔</li>
            <li>勒阿弗尔</li>
            <li>波尔多</li>
            <li>圣保罗·德·旺斯</li>
            <li>Fresse-sur-Moselle</li>
            <li>尚蒂伊</li>
            <li>奥尔泽姆</li>
            <li>兰斯</li>
            <li>安东尼</li>
            <li>阿斯科新城</li>
            <li>埃佩尔奈</li>
            <li>巴黎</li>
            <li>比尔</li>
            <li>拉尔布吕肯</li>
            <li>苏黎世</li>
            <li>卢森堡市</li>
            <li>里尔</li>
            <li>黑森林</li>
            <li>阿姆斯特丹</li>
        </ul>
    </div>
    <!-- 法国旅游攻略-->
    <div class="fgly">
        <p class="title">法国旅游攻略</p>
        <ul class="list clearfix">
            <li>法国简介</li>
            <li>法国游记</li>
            <li>法国签证办理</li>
            <li>法国交通信息</li>
            <li>法国旅游时间</li>
            <li>法国货币花费</li>
            <li>法国实用信息</li>
            <li>法国旅游地图</li>
            <li>法国旅游图片</li>
            <li>法国景点推荐</li>
            <li>法国特色美食</li>
            <li>法国购物攻略</li>
            <li>法国旅游体验</li>
            <li>法国旅游点评</li>
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

<script>
    $(function () {
        // 停止轮播
        $('#myCarousel').carousel('pause')
        $('#myCarousel2').carousel('pause')
    })

    $(function () {
        $("#mainTravel a").hover(function (e) {
            e.preventDefault()
            $(this).tab('show');
            $($(this).attr('href')).addClass('active').addClass('in').siblings().removeClass('active').removeClass('in');
        });
    });
</script>
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
</body>
</html>
