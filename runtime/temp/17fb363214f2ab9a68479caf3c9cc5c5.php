<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"E:\xampp\htdocs\ArcticTern_1/application/trip_planning\view\index\index.html";i:1533622147;s:56:"E:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"E:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="icon" href="/ArcticTern_1/public/static/img/activity/logo_2.png">

    <meta charset="UTF-8">
    <title></title>
    <script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
    <link href="/ArcticTern_1/public/static/css/bootstrap.css" rel="stylesheet">
    <link href="/ArcticTern_1/public/static/css/trip_planning/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/nav.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/footer.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
</head>
<body>
<div>
    <!--导航栏-->
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

    <!--轮播图，筛选栏-->
    <div class="lbtsx col-md-12">

        <!--轮播图-->
        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
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
                        <img src="/ArcticTern_1/public/static/img/trip_planning/<?php echo $vo['img1']; ?>" width="100%" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="/ArcticTern_1/public/static/img/trip_planning/<?php echo $vo['img2']; ?>" width="100%" alt="Second slide">
                    </div>
                    <div class="item">
                        <img src="/ArcticTern_1/public/static/img/trip_planning/<?php echo $vo['img3']; ?>" width="100%" alt="Third slide">
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
        <?php endforeach; endif; else: echo "" ;endif; ?>

        <!--筛选栏-->
        <div class="sxl col-md-offset-2 col-md-8">

            <div class="sx-csl  col-md-8">
                <div class="sx-cs sx-cs1">
                    <span class="lb">城市：</span>
                    <p id="ch1" data-gp="city_gp" class="leo">
                        <span><a>全部</a></span>
                        <span><a>北京</a></span>
                        <span><a>上海</a></span>
                        <span><a>深圳</a></span>
                        <span><a>广州</a></span>
                        <span class="qbcs">其它</span>
                    </p>
                    <div class="qt sxl-modal">
                        <div class="sxl-tab">
                            <a href="#sxl-tab1" id="sxl-tab1" class="sxl-tab1 active">ABCDE</a>
                            <a class="sxl-tab2" href="#sxl-tab2">FGHJ</a>
                            <a class="sxl-tab3" href="#sxl-tab3">KLMNP</a>
                            <a class="sxl-tab4" href="#sxl-tab4">QSTW</a>
                            <a class="sxl-tab5" href="#sxl-tab5">XYZ</a>
                        </div>
                        <div id="ct-tab1" class="sxl-1 sxl-tabct active">


                            <div class="tabct-sxl">
                                <span>A</span>
                                <p>
                                    <a data-id="aomen" href="">澳门</a>
                                    <a data-id="akesu" href="">阿克苏</a>
                                    <a data-id="anqing" href="">安庆</a>
                                    <a data-id="ankang" href="">安康</a>
                                    <a data-id="alashan" href="">阿拉善</a>
                                    <a data-id="anshan" href="">鞍山</a>
                                    <a data-id="anyang" href="">安阳</a>
                                    <a data-id="aba" href="">阿坝</a>
                                    <a data-id="anshun" href="">安顺</a>
                                    <a data-id="aletai" href="">阿勒泰</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>B</span>
                                <p>
                                    <a data-id="beijing" href="">北京</a>
                                    <a data-id="baoji" href="">宝鸡</a>
                                    <a data-id="baoding" href="">保定</a>
                                    <a data-id="bangbu" href="">蚌埠</a>
                                    <a data-id="beihai" href="">北海</a>
                                    <a data-id="baise" href="">百色</a>
                                    <a data-id="baoting" href="">保亭</a>
                                    <a data-id="bijie" href="">毕节</a>
                                    <a data-id="baotou" href="">包头</a>
                                    <a data-id="benxi" href="">本溪</a>
                                    <a data-id="baishan" href="">白山</a>
                                    <a data-id="baicheng" href="">白城</a>
                                    <a data-id="binzhou" href="">滨州</a>
                                    <a data-id="baisha" href="">白沙</a>
                                    <a data-id="bomi" href="">波密</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>C</span>
                                <p>
                                    <a data-id="changsha" href="">长沙</a>
                                    <a data-id="chenzhou" href="">郴州</a>
                                    <a data-id="Conghua" href="">从化</a>
                                    <a data-id="chaozhou" href="">潮州</a>
                                    <a data-id="chongqing" href="">重庆</a>
                                    <a data-id="changzhi" href="">长治</a>
                                    <a data-id="changzhou" href="">常州</a>
                                    <a data-id="chuzhou" href="">滁州</a>
                                    <a data-id="chizhou" href="">池州</a>
                                    <a data-id="changde" href="">常德</a>
                                    <a data-id="chongzuo" href="">崇左</a>
                                    <a data-id="changjiang" href="">昌江</a>
                                    <a data-id="chengdu" href="">成都</a>
                                    <a data-id="chengde" href="">承德</a>
                                    <a data-id="cangzhou" href="">沧州</a>
                                    <a data-id="chifeng" href="">赤峰</a>
                                    <a data-id="changchun" href="">长春</a>
                                    <a data-id="chaohu" href="">巢湖</a>
                                    <a data-id="chengmai" href="">澄迈</a>
                                    <a data-id="chuxiong" href="">楚雄</a>
                                    <a data-id="changji" href="">昌吉</a>
                                    <a data-id="chiayi" href="">嘉义</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>D</span>
                                <p>
                                    <a data-id="dongguan" href="">东莞</a>
                                    <a data-id="Dali" href="">大理</a>
                                    <a data-id="dapeng" href="">大鹏半岛</a>
                                    <a data-id="datong" href="">大同</a>
                                    <a data-id="danzhou" href="">儋州</a>
                                    <a data-id="duyun" href="">都匀</a>
                                    <a data-id="dalian" href="">大连</a>
                                    <a data-id="dandong" href="">丹东</a>
                                    <a data-id="daqing" href="">大庆</a>
                                    <a data-id="daxinganling" href="">大兴安岭</a>
                                    <a data-id="dongying" href="">东营</a>
                                    <a data-id="dongfang" href="">东方</a>
                                    <a data-id="dingan" href="">定安</a>
                                    <a data-id="dehong" href="">德宏</a>
                                    <a data-id="diqing" href="">迪庆</a>
                                    <a data-id="dunhuang" href="">敦煌</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>E</span>
                                <p>
                                    <a data-id="enshi" href="">恩施</a>
                                    <a data-id="eerduosi" href="">鄂尔多斯</a>
                                    <a data-id="ezhou" href="">鄂州</a>

                                </p>
                            </div>
                        </div>
                        <div id="ct-tab2" class="sxl-2 sxl-tabct active">
                            <div class="tabct-sxl">
                                <span>F</span>
                                <p>
                                    <a data-id="foshan" href="">佛山</a>
                                    <a data-id="fangchenggang" href="">防城港</a>
                                    <a data-id="fuzhou" href="">福州</a>
                                    <a data-id="fogang" href="">佛冈</a>
                                    <a data-id="fuyang" href="">阜阳</a>
                                    <a data-id="fuzhou1" href="">抚州</a>
                                    <a data-id="fuyang-zj" href="">富阳</a>
                                    <a data-id="fushun" href="">抚顺</a>
                                    <a data-id="fuxin" href="">阜新</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>G</span>
                                <p>
                                    <a data-id="guangzhou" href="">广州</a>
                                    <a data-id="ganzhou" href="">赣州</a>
                                    <a data-id="guigang" href="">贵港</a>
                                    <a data-id="guyuan" href="">固原</a>
                                    <a data-id="guilin" href="">桂林</a>
                                    <a data-id="ganzi" href="">甘孜</a>
                                    <a data-id="guiyang" href="">贵阳</a>
                                    <a data-id="guangyuan" href="">广元</a>
                                    <a data-id="guoluo" href="">果洛</a>
                                    <a data-id="genhe" href="">根河</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>H</span>
                                <p>
                                    <a data-id="hangzhou" href="">杭州</a>
                                    <a data-id="huanggang" href="">黄冈</a>
                                    <a data-id="huizhou" href="">惠州</a>
                                    <a data-id="heyuan" href="">河源</a>
                                    <a data-id="hechi" href="">河池</a>
                                    <a data-id="huzhou" href="">湖州</a>
                                    <a data-id="huangshi" href="">黄石</a>
                                    <a data-id="haikou" href="">海口</a>
                                    <a data-id="huangshanshi" href="">黄山市</a>
                                    <a data-id="hezhou" href="">贺州</a>
                                    <a data-id="huidong" href="">惠东</a>
                                    <a data-id="huaian" href="">淮安</a>
                                    <a data-id="hefei" href="">合肥</a>
                                    <a data-id="huainan" href="">淮南</a>
                                    <a data-id="huaibei" href="">淮北</a>
                                    <a data-id="hengyang" href="">衡阳</a>
                                    <a data-id="huaihua" href="">怀化</a>
                                    <a data-id="hainanzhou" href="">海南</a>
                                    <a data-id="haifeng" href="">海丰</a>
                                    <a data-id="handan" href="">邯郸</a>
                                    <a data-id="hengshui" href="">衡水</a>
                                    <a data-id="huhehaote" href="">呼和浩特</a>
                                    <a data-id="hulunbeier-city" href="">呼伦贝尔</a>
                                    <a data-id="huludao" href="">葫芦岛</a>
                                    <a data-id="haerbin" href="">哈尔滨</a>
                                    <a data-id="heihe" href="">黑河</a>
                                    <a data-id="heze" href="">菏泽</a>
                                    <a data-id="honghe" href="">红河</a>
                                    <a data-id="hanzhong" href="">汉中</a>
                                    <a data-id="haidong" href="">海东</a>
                                    <a data-id="haibeizhou" href="">海北州</a>
                                    <a data-id="haixi" href="">海西</a>
                                    <a data-id="hami" href="">哈密</a>
                                    <a data-id="hsinchu" href="">新竹</a>
                                    <a data-id="hualien" href="">花莲</a>
                                    <a data-id="hancheng" href="">韩城</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>I</span>
                                <p>
                                    <a data-id="Irkutsk" href="">伊尔库茨克</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>J</span>
                                <p>
                                    <a data-id="jiangmen" href="">江门</a>
                                    <a data-id="jinhua" href="">金华</a>
                                    <a data-id="jian" href="">吉安</a>
                                    <a data-id="jincheng" href="">晋城</a>
                                    <a data-id="jinzhong" href="">晋中</a>
                                    <a data-id="jiaxing" href="">嘉兴</a>
                                    <a data-id="jingdezhen" href="">景德镇</a>
                                    <a data-id="jiujiang" href="">九江</a>
                                    <a data-id="jinan" href="">济南</a>
                                    <a data-id="Jieyang" href="">揭阳</a>
                                    <a data-id="jilinshi" href="">吉林</a>
                                    <a data-id="jixi" href="">鸡西</a>
                                    <a data-id="jiamusi" href="">佳木斯</a>
                                    <a data-id="jining" href="">济宁</a>
                                    <a data-id="jiaozuo" href="">焦作</a>
                                    <a data-id="jiyuan" href="">济源</a>
                                    <a data-id="jingmen" href="">荆门</a>
                                    <a data-id="jingzhou" href="">荆州</a>
                                    <a data-id="jiayuguan" href="">嘉峪关</a>
                                    <a data-id="jiuquan" href="">酒泉</a>
                                    <a data-id="jianshui" href="">建水</a>

                                </p>
                            </div>
                        </div>
                        <div id="ct-tab3" class="sxl-3 ct-tabct">
                            <div class="tabct-sxl">
                                <span>K</span>
                                <p>
                                    <a data-id="kaifeng" href="">开封</a>
                                    <a data-id="kaili" href="">凯里</a>
                                    <a data-id="kunming" href="">昆明</a>
                                    <a data-id="kelamayi" href="">克拉玛依</a>
                                    <a data-id="kashi" href="">喀什</a>
                                    <a data-id="keelung" href="">基隆</a>
                                    <a data-id="kangding" href="">康定</a>
                                    <a data-id="kanasi" href="">喀纳斯</a>
                                    <a data-id="kuerle" href="">库尔勒</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>L</span>
                                <p>
                                    <a data-id="longchuan" href="">龙川</a>
                                    <a data-id="linan" href="">临安</a>
                                    <a data-id="lishui" href="">丽水</a>
                                    <a data-id="lianzhou" href="">连州</a>
                                    <a data-id="linyi" href="">临沂</a>
                                    <a data-id="laibin" href="">来宾</a>
                                    <a data-id="linzhi" href="">林芝</a>
                                    <a data-id="liuzhou" href="">柳州</a>
                                    <a data-id="linfen" href="">临汾</a>
                                    <a data-id="lvliang" href="">吕梁</a>
                                    <a data-id="lianyungang" href="">连云港</a>
                                    <a data-id="luan" href="">六安</a>
                                    <a data-id="longyanshi" href="">龙岩</a>
                                    <a data-id="loudi" href="">娄底</a>
                                    <a data-id="lingshui" href="">陵水</a>
                                    <a data-id="liupanshui" href="">六盘水</a>
                                    <a data-id="liuyang" href="">浏阳</a>
                                    <a data-id="luhe" href="">陆河</a>
                                    <a data-id="langfang" href="">廊坊</a>
                                    <a data-id="liaoyang" href="">辽阳</a>
                                    <a data-id="liaoyuan" href="">辽源</a>
                                    <a data-id="laiwu" href="">莱芜</a>
                                    <a data-id="liaocheng" href="">聊城</a>
                                    <a data-id="luoyang" href="">洛阳</a>
                                    <a data-id="lingao" href="">临高</a>
                                    <a data-id="ledong" href="">乐东</a>
                                    <a data-id="luzhou" href="">泸州</a>
                                    <a data-id="leshan" href="">乐山</a>
                                    <a data-id="lijiang" href="">丽江</a>
                                    <a data-id="lasa" href="">拉萨</a>
                                    <a data-id="lanzhou" href="">兰州</a>
                                    <a data-id="longnan" href="">陇南</a>
                                    <a data-id="libo" href="">荔波</a>
                                    <a data-id="liangshan" href="">凉山</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>M</span>
                                <p>
                                    <a data-id="meizhou" href="">梅州</a>
                                    <a data-id="maoming" href="">茂名</a>
                                    <a data-id="maanshan" href="">马鞍山</a>
                                    <a data-id="meishan" href="">眉山</a>
                                    <a data-id="mudanjiang" href="">牡丹江</a>
                                    <a data-id="mianyang" href="">绵阳</a>
                                    <a data-id="miaoli" href="">苗栗</a>
                                    <a data-id="melbourne" href="">墨尔本</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>N</span>
                                <p>
                                    <a data-id="nanjing" href="">南京</a>
                                    <a data-id="ningbo" href="">宁波</a>
                                    <a data-id="nanning" href="">南宁</a>
                                    <a data-id="nantou" href="">南投</a>
                                    <a data-id="nantong" href="">南通</a>
                                    <a data-id="nanping" href="">南平</a>
                                    <a data-id="ningde" href="">宁德</a>
                                    <a data-id="nanchang" href="">南昌</a>
                                    <a data-id="nanyang" href="">南阳</a>
                                    <a data-id="nanchong" href="">南充</a>
                                    <a data-id="naqu" href="">那曲</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>P</span>
                                <p>
                                    <a data-id="putian" href="">莆田</a>
                                    <a data-id="pingxiang" href="">萍乡</a>
                                    <a data-id="panjin" href="">盘锦</a>
                                    <a data-id="pingdingshan" href="">平顶山</a>
                                    <a data-id="panzhihua" href="">攀枝花</a>
                                    <a data-id="pingliang" href="">平凉</a>
                                    <a data-id="pingtung" href="">屏东</a>
                                    <a data-id="penghu" href="">澎湖</a>
                                    <a data-id="panyu" href="">番禺</a>

                                </p>
                            </div>
                        </div>
                        <div id="ct-tab4" class="sxl-4 ct-tabct">
                            <div class="tabct-sxl">
                                <span>Q</span>
                                <p>
                                    <a data-id="qingyuan" href="">清远</a>
                                    <a data-id="quzhou" href="">衢州</a>
                                    <a data-id="qingdao" href="">青岛</a>
                                    <a data-id="qinzhou" href="">钦州</a>
                                    <a data-id="quanzhou" href="">泉州</a>
                                    <a data-id="qionghai" href="">琼海</a>
                                    <a data-id="qianxinan" href="">黔西南</a>
                                    <a data-id="qiandongnan" href="">黔东南</a>
                                    <a data-id="qiannan" href="">黔南</a>
                                    <a data-id="qinhuangdao" href="">秦皇岛</a>
                                    <a data-id="qiqihaer" href="">齐齐哈尔</a>
                                    <a data-id="qitaihe" href="">七台河</a>
                                    <a data-id="qianjiang" href="">潜江</a>
                                    <a data-id="qiongzhong" href="">琼中</a>
                                    <a data-id="qujing" href="">曲靖</a>
                                    <a data-id="qufu" href="">曲阜</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>R</span>
                                <p>
                                    <a data-id="rizhao" href="">日照</a>
                                    <a data-id="rikaze" href="">日喀则</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>S</span>
                                <p>
                                    <a data-id="shanghai" href="">上海</a>
                                    <a data-id="shaoguan" href="">韶关</a>
                                    <a data-id="shenzhen" href="">深圳</a>
                                    <a data-id="suzhou" href="">苏州</a>
                                    <a data-id="shaoxing" href="">绍兴</a>
                                    <a data-id="shantou" href="">汕头</a>
                                    <a data-id="shanwei" href="">汕尾</a>
                                    <a data-id="shijiazhuang" href="">石家庄</a>
                                    <a data-id="shuozhou" href="">朔州</a>
                                    <a data-id="suzhou-1" href="">宿州</a>
                                    <a data-id="sanming" href="">三明</a>
                                    <a data-id="shangrao" href="">上饶</a>
                                    <a data-id="shaoyang" href="">邵阳</a>
                                    <a data-id="sanya" href="">三亚</a>
                                    <a data-id="shenyang" href="">沈阳</a>
                                    <a data-id="siping" href="">四平</a>
                                    <a data-id="songyuan" href="">松原</a>
                                    <a data-id="shuangyashan" href="">双鸭山</a>
                                    <a data-id="suqian" href="">宿迁</a>
                                    <a data-id="sanmenxia" href="">三门峡</a>
                                    <a data-id="shangqiu" href="">商丘</a>
                                    <a data-id="shiyan" href="">十堰</a>
                                    <a data-id="suizhou" href="">随州</a>
                                    <a data-id="shennongjia" href="">神农架</a>
                                    <a data-id="suining" href="">遂宁</a>
                                    <a data-id="shangluo" href="">商洛</a>
                                    <a data-id="shizuishan" href="">石嘴山</a>
                                    <a data-id="shihezi" href="">石河子</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>T</span>
                                <p>
                                    <a data-id="taizhou" href="">台州</a>
                                    <a data-id="taiyuan" href="">太原</a>
                                    <a data-id="taizhou-1" href="">泰州</a>
                                    <a data-id="tongling" href="">铜陵</a>
                                    <a data-id="taian" href="">泰安</a>
                                    <a data-id="tongren" href="">铜仁</a>
                                    <a data-id="tianjin" href="">天津</a>
                                    <a data-id="tangshan" href="">唐山</a>
                                    <a data-id="tongliao" href="">通辽</a>
                                    <a data-id="tieling" href="">铁岭</a>
                                    <a data-id="tonghua" href="">通化</a>
                                    <a data-id="tunchang" href="">屯昌</a>
                                    <a data-id="tongchuan" href="">铜川</a>
                                    <a data-id="tianshui" href="">天水</a>
                                    <a data-id="tulufan" href="">吐鲁番</a>
                                    <a data-id="tacheng" href="">塔城</a>
                                    <a data-id="taipei" href="">台北</a>
                                    <a data-id="taichung" href="">台中</a>
                                    <a data-id="taitung" href="">台东</a>
                                    <a data-id="tengchong" href="">腾冲</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>W</span>
                                <p>
                                    <a data-id="wuhan" href="">武汉</a>
                                    <a data-id="weinan" href="">渭南</a>
                                    <a data-id="wuxi" href="">无锡</a>
                                    <a data-id="weizhoudao" href="">涠洲岛</a>
                                    <a data-id="wenzhou" href="">温州</a>
                                    <a data-id="wuhu" href="">芜湖</a>
                                    <a data-id="wuzhou" href="">梧州</a>
                                    <a data-id="wenchang" href="">文昌</a>
                                    <a data-id="wanning" href="">万宁</a>
                                    <a data-id="wuyuan" href="">婺源</a>
                                    <a data-id="wuhai" href="">乌海</a>
                                    <a data-id="wulanchabu" href="">乌兰察布</a>
                                    <a data-id="weifang" href="">潍坊</a>
                                    <a data-id="weihai" href="">威海</a>
                                    <a data-id="wuzhishan" href="">五指山</a>
                                    <a data-id="wulumuqi" href="">乌鲁木齐</a>

                                </p>
                            </div>


                        </div>
                        <div id="ct-tab5" class="sxl-5 ct-tabct">
                            <div class="tabct-sxl">
                                <span>X</span>
                                <p>
                                    <a data-id="xianggang" href="">香港</a>
                                    <a data-id="xinzhou" href="">忻州</a>
                                    <a data-id="xianning" href="">咸宁</a>
                                    <a data-id="xuancheng" href="">宣城</a>
                                    <a data-id="xian" href="">西安</a>
                                    <a data-id="xuzhou" href="">徐州</a>
                                    <a data-id="xiamen" href="">厦门</a>
                                    <a data-id="xinyu" href="">新余</a>
                                    <a data-id="xiangtan" href="">湘潭</a>
                                    <a data-id="xiangxi" href="">湘西</a>
                                    <a data-id="xingyi" href="">兴义</a>
                                    <a data-id="xingtai" href="">邢台</a>
                                    <a data-id="xingan" href="">兴安</a>
                                    <a data-id="xinxiang" href="">新乡</a>
                                    <a data-id="xuchang" href="">许昌</a>
                                    <a data-id="xinyang" href="">信阳</a>
                                    <a data-id="xiangfan" href="">襄樊</a>
                                    <a data-id="xiaogan" href="">孝感</a>
                                    <a data-id="xiantao" href="">仙桃</a>
                                    <a data-id="xishuangbanna" href="">西双版纳</a>
                                    <a data-id="xianyang" href="">咸阳</a>
                                    <a data-id="xining" href="">西宁</a>
                                    <a data-id="xinbei" href="">新北</a>
                                    <a data-id="xichang" href="">西昌</a>
                                    <a data-id="xianggelila" href="">香格里拉</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>Y</span>
                                <p>
                                    <a data-id="yongzhou" href="">永州</a>
                                    <a data-id="yunfu" href="">云浮</a>
                                    <a data-id="yangshuo" href="">阳朔</a>
                                    <a data-id="yingde" href="">英德</a>
                                    <a data-id="yangjiang" href="">阳江</a>
                                    <a data-id="yangzhou" href="">扬州</a>
                                    <a data-id="yueyang" href="">岳阳</a>
                                    <a data-id="yulin" href="">玉林</a>
                                    <a data-id="yangquan" href="">阳泉</a>
                                    <a data-id="yuncheng" href="">运城</a>
                                    <a data-id="yancheng" href="">盐城</a>
                                    <a data-id="yingtan" href="">鹰潭</a>
                                    <a data-id="yichun" href="">宜春</a>
                                    <a data-id="yiyang" href="">益阳</a>
                                    <a data-id="yingkou" href="">营口</a>
                                    <a data-id="yanbian" href="">延边</a>
                                    <a data-id="yichun-1" href="">伊春</a>
                                    <a data-id="yantai" href="">烟台</a>
                                    <a data-id="yichang" href="">宜昌</a>
                                    <a data-id="yibin" href="">宜宾</a>
                                    <a data-id="yaan" href="">雅安</a>
                                    <a data-id="yuxi" href="">玉溪</a>
                                    <a data-id="yanan" href="">延安</a>
                                    <a data-id="Yulinn" href="">榆林</a>
                                    <a data-id="yinchuan" href="">银川</a>
                                    <a data-id="yili" href="">伊犁</a>
                                    <a data-id="yilan" href="">宜兰</a>
                                    <a data-id="yining" href="">伊宁</a>

                                </p>
                            </div>


                            <div class="tabct-sxl">
                                <span>Z</span>
                                <p>
                                    <a data-id="zhaoqing" href="">肇庆</a>
                                    <a data-id="zhongshan" href="">中山</a>
                                    <a data-id="zengcheng" href="">增城</a>
                                    <a data-id="zhangjiakou" href="">张家口</a>
                                    <a data-id="zhuhai" href="">珠海</a>
                                    <a data-id="zhanjiang" href="">湛江</a>
                                    <a data-id="zhangye" href="">张掖</a>
                                    <a data-id="ziyuan" href="">资源</a>
                                    <a data-id="zhoushan" href="">舟山</a>
                                    <a data-id="zhangzhou" href="">漳州</a>
                                    <a data-id="zibo" href="">淄博</a>
                                    <a data-id="zhuzhou" href="">株洲</a>
                                    <a data-id="zhangjiajie" href="">张家界</a>
                                    <a data-id="zhaoyang" href="">朝阳</a>
                                    <a data-id="zhenjiang" href="">镇江</a>
                                    <a data-id="zaozhuang" href="">枣庄</a>
                                    <a data-id="zhengzhou" href="">郑州</a>
                                    <a data-id="zhumadian" href="">驻马店</a>
                                    <a data-id="zunyi" href="">遵义</a>
                                    <a data-id="zhongwei" href="">中卫</a>

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="asd col-md-12">
                <div class="sx-cs sx-cs2">
                    <span class="lb lb1">类型：</span>
                    <p id="ch2" data-gp="type_gp" class="leo">
                        <span><a>全部</a></span>
                        <span><a>山野穿行</a></span>
                        <span><a>健行</a></span>
                        <span><a>骑行</a></span>
                        <span><a>跑步</a></span>
                        <span><a>自驾</a></span>
                        <span><a>露营</a></span>
                        <span><a>溯溪</a></span>
                        <span><a>滑雪</a></span>
                        <span><a>攀岩</a></span>
                        <span><a>漂流</a></span>
                        <span class="wq1"><a>温泉</a></span>
                    </p>
                </div>
            </div>
            <div class=" col-md-8">
                <div class="sx-cs">
                    <span class="lb">难度：</span>
                    <p id="ch3" data-gp="nandu_gp" class="leo">
                        <span><a>全部</a></span>
                        <span><a>休闲</a></span>
                        <span><a>标准</a></span>
                        <span><a>挑战</a></span>
                        <span><a>自虐</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="lxmb col-xs-12 col-md-12">
        <!--搜索路线-->
        <div class="lxts col-md-offset-2 col-xs-offset-2 col-xs-8 col-md-8">
            <p class="lx col-md-2 col-xs-2">
                共"<span class="">1020</span>"条路线
            </p>
            <div class="input-group col-md-offset-5 col-xs-offset-5 col-xs-3 col-md-3">
                <input type="text" class="form-control" placeholder="搜索路线..." id="serch">
                <span class="input-group-btn ser">
                         <button class="btn glyphicon glyphicon-search btn-default" type="button"></button>
                      </span>
            </div>
            <a class="cjlx col-md-2 col-xs-2" href="<?php echo url('trip_planning/index/create'); ?>">创建路线</a>
        </div>

        <!--路线介绍-->

        <div class="col-md-offset-2  col-md-8 col-xs-offset-2 col-xs-8 asb">
            <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($index) ? array_slice($index,0,8, true) : $index->slice(0,8, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
            <div class="rs-card lxts_y col-xs-6 col-md-6">
                <div class="img-size"><a href="<?php echo url('trip_planning/index/ziye',array('id'=>$des['id'])); ?>"><img
                        src="/ArcticTern_1/public/static/img/trip_planning/<?php echo $des['tp_img2']; ?>" alt=""/></a></div>
                <div class="card-info">
                    <span class="walking"></span>
                    <a href="<?php echo url('trip_planning/index/ziye',array('id'=>$des['id'])); ?>"><h5 class="h55">
                        <?php echo $des['tp_name']; ?></h5></a>
                    <p class="label"><?php echo $des['tp_nandu']; ?></p>
                    <p class="label label-2 "><a href=""><?php echo $des['tp_type']; ?></a></p>
                    <a class="label label-3">８</a>
                    <div class="score">
                        <p class="shadow">
                            <span class="pentagram"></span>
                        </p>
                        <span class="mar">5.0</span>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<div>
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
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
<script src="/ArcticTern_1/public/static/js/trip_planning/index.js"></script>
<!--<script src="/ArcticTern_1/public/static/js/trip_planning/ajax.js"></script>-->
<script>
    var dataObj = {
        "cityName": "",
        "typeName": "",
        "nanduName": ""
    };

    // TODO 1. 给所有的 a 标签绑定了单击事件
    $('.sx-cs span a').click(function () {
        // TODO 2. 发送 ajax 请求，然后在 ajax 请求的回调函数里面，解析响应数据，最后进行 DOM 重绘操作

        // TODO 问题？请求的参数至少几个？ 3个参数 - cityName typeName tagName
        //

        var $this = $(this);
        var $value = $this.text();// 表示当前点击的那个 a 标签的文本值
        if ($value == "全部") {
            $value = "";
        }
        var $parent = $this.closest('.leo');

        // TODO 怎么依据一个分支条件？
        switch ($parent.attr('data-gp')) {
            case "city_gp":
                dataObj.cityName = $value;
                break;
            case "type_gp":
                dataObj.typeName = $value;
                break;
            case "nandu_gp":
                dataObj.nanduName = $value;
                break;
        }

        $.ajax({
            type: "post",
            url: "<?php echo url('trip_planning/index/ajax'); ?>",
            dataType: "JSON",
            data: dataObj,

            erro: function () {

            },
            success: function (data) {
                $('.rs-card').remove();
                var list = '';

                for (i = 0; i < data.length; i++) {
                    var t_id = data[i]['id'];
                    var str = "<?php echo url('trip_planning/index/ziye',array('id'=>'tid')); ?>"; //先将变量以字符串的形式带入U函数中
                    var str1 = str.replace("tid", t_id);
                    list += `<div class="rs-card lxts_y col-xs-6 col-md-6">
                    <div class="img-size"><a href="${str1}"><img
                            src="/ArcticTern_1/public/static/img/trip_planning/${data[i]['tp_img2']}" alt=""/></a></div>
                    <div class="card-info">
                        <span class="walking"></span>
                        <a href="${str1}"><h5 class="h55">
                            ${data[i]['tp_name']}</h5></a>
                        <p class="label">${data[i]['tp_nandu']}</p>
                        <p class="label label-2 "><a href="">${data[i]['tp_type']}</a></p>
                        <a class="label label-3">８</a>
                        <div class="score">
                            <p class="shadow">
                                <span class="pentagram"></span>
                            </p>
                            <span class="mar">5.0</span>
                        </div>
                    </div>
                </div>`;
                }
                $('.asb').html(list);

                // 删除原有DOM，增加新的DOM
            }
        })
    });
    // 搜索
    $('.ser').click(function () {
        var dataObj = {
            "text": ""
        };
        dataObj.text = $('#serch').val();
        $.ajax({
            type: "post",
            url: "<?php echo url('trip_planning/index/ajax2'); ?>",
            dataType: "JSON",
            data: dataObj,

            erro: function () {

            },
            success: function (data) {
                $('.rs-card').remove();
                var list = '';

                for (i = 0; i < data.length; i++) {
                    var t_id = data[i]['id'];
                    var str = "<?php echo url('trip_planning/index/ziye',array('id'=>'tid')); ?>"; //先将变量以字符串的形式带入U函数中
                    var str1 = str.replace("tid", t_id);
                    list += `<div class="rs-card lxts_y col-xs-6 col-md-6">
                    <div class="img-size"><a href="${str1}"><img
                            src="/ArcticTern_1/public/static/img/trip_planning/${data[i]['tp_img2']}" alt=""/></a></div>
                    <div class="card-info">
                        <span class="walking"></span>
                        <a href="${str1}"><h5 class="h55">
                            ${data[i]['tp_name']}</h5></a>
                        <p class="label">${data[i]['tp_nandu']}</p>
                        <p class="label label-2 "><a href="">${data[i]['tp_type']}</a></p>
                        <a class="label label-3">８</a>
                        <div class="score">
                            <p class="shadow">
                                <span class="pentagram"></span>
                            </p>
                            <span class="mar">5.0</span>
                        </div>
                    </div>
                </div>`;
                }
                $('.asb').html(list);

                // 删除原有DOM，增加新的DOM
            }
        })
    })
</script>
</body>
</html>