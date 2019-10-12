<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\ArcticTern_1/application/destination\view\index\youji.html";i:1531191147;s:56:"D:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"D:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>城市</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/destination/youji.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/nav.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/footer.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
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
                <a href="#">法国</a>
            </li>
            <li>></li>
            <li>
                <a href="#">巴黎</a>
            </li>
            <li>></li>
            <li>
                巴黎旅游攻略
            </li>
        </ul>
        <div class="head_title">
            <div class="title_left">
                <a href="#">Paris</a>
                <div>
                    <a href="#">巴黎</a>
                </div>
            </div>
            <div class="title_right">
                <ul>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-plus-sign"></i>
                            <span>想去</span>
                        </a>

                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-ok-sign"></i>
                            <span>去过</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-circle-arrow-right"></i>
                            <span>生活过</span>
                        </a>
                    </li>
                </ul>
                <p>117027人去过这里</p>
            </div>
        </div>
    </div>
    <div class="head_mainNav">
        <div class="head_nav">
            <ul>
                <li>
                    <a href="#guide">城市指南</a>
                </li>
                <li>
                    <a href="#hot">热门推荐</a>
                </li>


                <li>
                    <a href="#strategy">游记攻略</a>
                </li>
                <li>
                    <a href="#travel">行程攻略</a>
                </li>
                <li class="youji">
                    <a href="#">热门游记</a>
                </li>

            </ul>
            <div class="pla">
                <a href="#">
                    <i class="glyphicon glyphicon-question-sign"></i>
                    <span>提问</span>
                </a>
                <a href="#">
                    <i class="glyphicon glyphicon-edit"></i>
                    <span>写点评</span>
                </a>
            </div>
        </div>
    </div>

</header>

<!--内容-->
<div class="content">
    <ul class="myTab">
        <li>排序：</li>
        <li class="active">
            <a href="#hot1" data-toggle="tab">推荐</a>
        </li>
        <li>
            <a href="#hot2" data-toggle="tab">热门</a>
        </li>
        <li>
            <a href="#hot3" data-toggle="tab">最新</a>
        </li>
        <li>
            <a href="#hot4" data-toggle="tab">精华</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="hot1">
            <div class="myItem">
                <img src="/ArcticTern_1/public/static/img/destination/item-1.png" width="227px" height="151px">
                <div class="item-right">
                    <a href="#"><img src="/ArcticTern_1/public/static/img/destination/tx1.png"/></a>
                    <a href="#" class="title">赴一场华丽的盛宴，领略法兰西的万种风情</a>
                    <div>
                        <span>
                            作者：<a href="#">粉色棒棒糖</a>
                        </span>
                        <span class="riqi">
                            2018-05-24
                        </span>
                    </div>
                    <p>浪漫多情、时尚性感、冷艳高贵、温存典雅，很难用几个简单的词汇去概括法兰西的万种风情。

                        但若想对法国有更为全面且相对深入的认知，这篇从南部蔚蓝海岸到北法诺曼底，从浪漫薰衣草到神秘古堡，从乡村小镇到繁华都市，从山野田园到海上孤山绝壁的游记无疑是一个绝佳的引路者。

                        如此丰富的元素相信总有一款能触动你的心房，其间除了有惊险历程更有动情时分。

                        那么，我们先从圆一场未做完的公主梦开始。</p>
                </div>
            </div>
            <div class="myItem">
                <img src="/ArcticTern_1/public/static/img/destination/item-1.2.png" width="227px" height="151px">
                <div class="item-right">
                    <a href="#"><img src="/ArcticTern_1/public/static/img/destination/tx1-2.png"/></a>
                    <a href="#" class="title">后·英伦的夏末时光: 英格兰与苏格兰</a>
                    <div>
                        <span>
                            作者：<a href="#">花泽Ocean</a>
                        </span>
                        <span class="riqi">
                            2018-05-06
                        </span>
                    </div>
                    <p>每个人内心都会有一种情节

                        它看起来高尚无比 它致你于千里之外却又无处不在

                        它自诩贵族骑士精神 它应该是亚麻西装牛仔裤加贝雷帽

                        也应该是狂躁症附体的流行摇滚

                        或许是昏沉压抑的迷雾笼罩 也会是晴空万里间突然阴云密布

                        这就是英伦情节 来自西欧最神话国家的代表 英国</p>
                </div>
            </div>
            <div class="myItem">
                <img src="/ArcticTern_1/public/static/img/destination/item-1.3.png" width="227px" height="151px">
                <div class="item-right">
                    <a href="#"><img src="/ArcticTern_1/public/static/img/destination/tx1-3.png"/></a>
                    <a href="#" class="title">发掘与众不同的瑞士——两日巴塞尔，走近十位建筑大师</a>
                    <div>
                        <span>
                            作者：<a href="#">Azzyrra0101</a>
                        </span>
                        <span class="riqi">
                            2018-04-11
                        </span>
                    </div>
                    <p>【继续撒花🎉】既钦点二级精华之后，又被大秘书提拔至论坛首页啦！知我者穷游大秘书也。
                        感谢支持，也希望大家喜欢我关于建筑和艺术内容的游记。
                        时而大川大河，时而文化瑰宝，不断重叠的多维收获才是旅行要义哦，一起去发现世界的美吧:D</p>
                </div>
            </div>
            <div class="myItem">
                <img src="/ArcticTern_1/public/static/img/destination/item-1.4.png" width="227px" height="151px">
                <div class="item-right">
                    <a href="#"><img src="/ArcticTern_1/public/static/img/destination/tx1-4.png"/></a>
                    <a href="#" class="title">独行欧洲的46日」（上）属于一个人的东欧式浪漫</a>
                    <div>
                        <span>
                            作者：<a href="#">YIYI笔记</a>
                        </span>
                        <span class="riqi">
                            2018-03-03
                        </span>
                    </div>
                    <p>很多朋友都问我，为什么会选择一个人去欧洲旅行。


                        因为曾经说要和我一起看世界的男孩不再陪我，

                        我们因一个人的旅行而相识，或许再以一个人的旅行而告别，才能真正结束。

                        没有狗血的剧情，没有任何对与错，四年的青春就此别过，后来的我们终归要各自天涯。


                        于是，我一个人开始了这段旅途。

                        一个人的旅途的确孤独，不过习惯就好，毕竟剩下的旅途总归还是要一个人走过。


                    </p>
                </div>
            </div>
            <div class="myItem">
                <img src="/ArcticTern_1/public/static/img/destination/item-1.5.png" width="227px" height="151px">
                <div class="item-right">
                    <a href="#"><img src="/ArcticTern_1/public/static/img/destination/tx1-5.png"/></a>
                    <a href="#" class="title">免签国阿尔巴尼亚：泡进雪山下的冰蓝色野温泉</a>
                    <div>
                        <span>
                            作者：<a href="#">Molly</a>
                        </span>
                        <span class="riqi">
                            2018-04-02
                        </span>
                    </div>
                    <p>
                        阿尔巴尼亚面朝地中海，背靠巴尔干半岛，闻名遐迩的阿尔卑斯山脉最东端的延伸，就在这里。

                        多样的地貌带来了让人惊叹的自然风光，而又因为这里相对欧洲其他地区人类活动更少，所以几乎全部得以完整保留下来。

                        第一次被阿尔巴尼亚风光所折服是在南部Permet镇旁的温泉。

                        整座温泉池，张开在瀑布、溪流和远处的雪山之间，让人沉醉。</p>
                </div>
            </div>
            <div class="myItem">
                <img src="/ArcticTern_1/public/static/img/destination/item-1.6.png" width="227px" height="151px">
                <div class="item-right">
                    <a href="#"><img src="/ArcticTern_1/public/static/img/destination/tx1-6.png"/></a>
                    <a href="#" class="title">〖爱双双出品〗法国巴黎卢瓦尔河谷波尔多</a>
                    <div>
                        <span>
                            作者：<a href="#">爱双双</a>
                        </span>
                        <span class="riqi">
                            2017-06-27
                        </span>
                    </div>
                    <p>
                        2017年第一篇大帖要开工啦~

                        继续登上穷游首页~~撒花~~</p>
                </div>
            </div>
            <div class="myItem">
                <img src="/ArcticTern_1/public/static/img/destination/item-1.7.png" width="227px" height="151px">
                <div class="item-right">
                    <a href="#"><img src="/ArcticTern_1/public/static/img/destination/tx1-7.png"/></a>
                    <a href="#" class="title">【行摄荷法】PartII 南法六月初夏</a>
                    <div>
                        <span>
                            作者：<a href="#">Miumiu</a>
                        </span>
                        <span class="riqi">
                            2017-06-27
                        </span>
                    </div>
                    <p>关于此行的来龙去脉荷帖中已交代清楚，好奇的请移步以上链接。这里主要啰嗦下关于自驾段的种种与回顾下2016的6月是在哪种时代背景去的法兰西。

                        对于【法兰西】这3个字，脑中除了浪漫与情怀似乎很难找到另外可以与之匹敌的词了。但被难民问题频频困扰；I.S.I.S.恐怖袭击阴霾难以消散；本国历史遗留的安全问题等等这些的2016，在行前着实让我们的两颗心久久放不下来，包括家人都在担心此去是否能平安归来。</p>
                </div>
            </div>
            <div class="myItem">
                <img src="/ArcticTern_1/public/static/img/destination/item-1.8.png" width="227px" height="151px">
                <div class="item-right">
                    <a href="#"><img src="/ArcticTern_1/public/static/img/destination/tx1-8.png"/></a>
                    <a href="#" class="title">邂逅女王，寻觅日不落帝国的光影之旅</a>
                    <div>
                        <span>
                            作者：<a href="#">小袋鼠</a>
                        </span>
                        <span class="riqi">
                            2017-11-10
                        </span>
                    </div>
                    <p>
                        穿越亚欧大陆，第一次踏上了遥远的大不列颠，我怀揣着一颗好奇的心，用眼睛和笔记录下我所看到的一切。其中一些片段，被匆匆定格为一张张相片留存了下来，也汇聚成我对于这个传说中“日不落”帝国的初印象。</p>
                </div>
            </div>
            <div class="myItem">
                <img src="/ArcticTern_1/public/static/img/destination/item-1.9.png" width="227px" height="151px">
                <div class="item-right">
                    <a href="#"><img src="/ArcticTern_1/public/static/img/destination/tx1-9.png"/></a>
                    <a href="#" class="title">Mr. and Mrs. SHEN欧洲探亲漫游记之三</a>
                    <div>
                        <span>
                            作者：<a href="#">sunny</a>
                        </span>
                        <span class="riqi">
                            2018-05-28
                        </span>
                    </div>
                    <p>
                        欧洲探亲旅游的第三次自驾游于4月10日从慕尼黑出发飞往阿姆斯特丹，在阿市区及周边游玩4天后，14日在荷兰阿姆斯特丹机场的Europcar车行提车，预订的是德国欧宝Corsia，但车行给的是标致208。跟国内租车不太一样，国外租车有车型组这么一说，如你预订的车款被前面其他客人提光了，你取的车可能跟你预订的车型不一样，但他给你的车是在这个同组车型、档次基本一样的其它车款。</p>
                </div>
            </div>
            <div class="myItem">
                <img src="/ArcticTern_1/public/static/img/destination/item-1.10.png" width="227px" height="151px">
                <div class="item-right">
                    <a href="#"><img src="/ArcticTern_1/public/static/img/destination/tx1-10.png"/></a>
                    <a href="#" class="title">【不一样的希·葡·意·瑞·德】</a>
                    <div>
                        <span>
                            作者：<a href="#">Fiorelady</a>
                        </span>
                        <span class="riqi">
                            2018-02-27
                        </span>
                    </div>
                    <p>带父母游世界，到今年已经是第4个年头了：2015年的美国，2016年的北欧英法，2017年的希葡意瑞德，2018年...老爸早早就在欧洲版图上点好名咯！


                        有时候想想，我们一家人做事情还挺认真的，一旦开始，一不小心就做成了“系列”！</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="ui_page">
            <div class="ui_page">
                <a data-bn-ipg="pages-3" data-ra_arg="ra_null|1" data-page="1" href=#"
                   class="ui_page_item ui_page_item_current">1</a>
                <a data-bn-ipg="pages-3" data-ra_arg="ra_null|2" data-page="2" href="#" class="ui_page_item">2</a>
                <a data-bn-ipg="pages-3" data-ra_arg="ra_null|3" data-page="3" href="#" class="ui_page_item">3</a>
                <a data-bn-ipg="pages-3" data-ra_arg="ra_null|4" data-page="4" href="#" class="ui_page_item">4</a>
                <a data-bn-ipg="pages-3" data-ra_arg="ra_null|5" data-page="5" href="#" class="ui_page_item">5</a>
                <a data-bn-ipg="pages-4" data-ra_arg="ra_null|100" data-page="100" href="#" class="ui_page_item"
                   title="...100">...100</a>
                <a data-bn-ipg="pages-5" data-ra_arg="ra_null|2" data-page="2" href="#"
                   class="ui_page_item ui_page_next" title="下一页">下一页</a>
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

<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
</body>
</html>
