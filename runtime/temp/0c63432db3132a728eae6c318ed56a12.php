<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\phpStudy\PHPTutorial\WWW\ArcticTern_1/application/trip_planning\view\index\ziye.html";i:1529661288;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>路线详情</title>
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/trip_planning/ziye.css">
</head>
<body>
<div id="warpper">
    <!--头部开始-->
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
    <!--头部结束-->
    <!--内容区开始-->
    <div id="content">
        <div class="con_top">
            <div class="con_indexer"><a href="<?php echo url('trip_planning/index/ziye'); ?>"> 户外路线</a>&gt;&gt;<a href="#">广东</a>&gt;&gt;<a href="#">韶关</a>&gt;&gt;
                韶关乳源-广东大峡谷骑行
            </div>
            <div class="con_title">
                <h1>韶关乳源-广东大峡谷骑行</h1>
                <a href="#" class="wang_go"><span class="glyphicon glyphicon-heart"></span>想去</a>
                <a href="#" class="went"><span class="glyphicon glyphicon-send"></span>去过</a>
            </div>
            <div class="con_nav">
                <span class="glyphicon glyphicon-book cut1"><a href="#">&nbsp;基本信息</a></span>
                <span class="glyphicon glyphicon-road cut2"><a href="#">&nbsp;路线轨迹</a></span>
                <span class="glyphicon glyphicon-edit cut3"><a href='#dianping'>&nbsp;点评</a></span>
                <span class="glyphicon glyphicon-picture cut4"><a href="#">&nbsp;照片</a></span>
            </div>
        </div>
        <div class="con_bottom">
            <!--基本信息-->
            <div class="con_b_1">
                <div class="con_b_1_l">
                    <div class="con_map">
                        <img src="/ArcticTern_1/public/static/img/trip_planning/map.png" alt="">
                        <div class="map_in">
                            <div class="map_in_1"><span>4.7</span><img src="/ArcticTern_1/public/static/img/trip_planning/wx.png" alt=""></div>
                            <div class="map_in_2"><span>0条点评</span></div>
                            <div class="map_in_3"><span>分享</span><span>发送到微信</span></div>
                            <div class="map_in_4"><span>所属类型：骑行</span><span>高度里程：61.84KM</span></div>
                            <div class="map_in_4"><span>线路难度 :标准</span><span>最佳季节 :春/秋/冬</span></div>
                            <div class="map_in_4">
                                <span>活动时长 :2天</span>
                            </div>
                        </div>
                    </div>
                    <div class="con_txt">
                        <p>
                            广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路。</p>
                        <p>特色标签 :城市休闲/4+2</p>
                        <p>道路状况 :公路</p>
                        <p>交通位置 :骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。</p>
                    </div>
                    <div class="con_ind">
                        <p>重要提示</p>
                        <p>大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇去</p>
                        <p>建议路线：乳源县-G323-S258-大布镇-广东大峡谷-原路返回</p>
                    </div>
                    <span class="time">信息更新时间 : 2015-03-29</span>
                    <a href="#" class="tianjia"><span class="glyphicon glyphicon-tag">添加/更新信息</span></a>
                    <div id="dianping">
                        <span class="glyphicon glyphicon-edit dptxt">点评</span>
                        <br>
                        <form action="">
                            <span class="dpdf">为这条路线打分：</span>
                            <ul class="start">
                                <li>☆</li>
                                <li>☆</li>
                                <li>☆</li>
                                <li>☆</li>
                                <li>☆</li>
                            </ul>

                            <input type="text" placeholder="你觉得这条路线怎么样？你的点评会帮助到很多人哦。">
                            <button>发布</button>
                        </form>
                    </div>
                </div>
                <div class="con_b_1_r">
                    <a href="<?php echo url('trip_planning/index/create'); ?>" class="chuangjian">创建线路</a>
                    <h4>创建者</h4>
                    <img src="/ArcticTern_1/public/static/img/trip_planning/tou.jpg" alt="" width="70px">
                    <p class="nicheng">琥珀君</p>
                    <div class="xiangguan">
                        <h4>相关线路</h4>
                        <div class="xiangguan_itme">
                            <div class="xiangguan_icin"></div>
                            <p class="tuijian"><a href="#">韶关乳源大峡谷自驾</a></p>
                            <img src="/ArcticTern_1/public/static/img/trip_planning/little_star-full.png" alt=""><span class="tjjs_1">5.0</span><span
                                class="tjjs_2">里程：35公里</span>
                        </div>
                        <div class="xiangguan_itme">
                            <div class="xiangguan_icin"></div>
                            <p class="tuijian"><a href="#">韶关乳源大峡谷自驾</a></p>
                            <img src="/ArcticTern_1/public/static/img/trip_planning/little_star-full.png" alt=""><span class="tjjs_1">5.0</span><span
                                class="tjjs_2"
                        >里程：35公里</span>
                        </div>
                        <div class="xiangguan_itme">
                            <div class="xiangguan_icin"></div>
                            <p class="tuijian"><a href="#">韶关乳源大峡谷自驾</a></p>
                            <img src="/ArcticTern_1/public/static/img/trip_planning/little_star-full.png" alt=""><span class="tjjs_1">5.0</span><span
                                class="tjjs_2"
                        >里程：35公里</span>
                        </div>
                        <div class="xiangguan_itme">
                            <div class="xiangguan_icin"></div>
                            <p class="tuijian"><a href="#">韶关乳源大峡谷自驾</a></p>
                            <img src="/ArcticTern_1/public/static/img/trip_planning/little_star-full.png" alt=""><span class="tjjs_1">5.0</span><span
                                class="tjjs_2">里程：35公里</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--路线轨迹-->
            <div class="con_b_2">
                <div class="con_2_map"><span>线路里程：61.84KM</span><span>最高海拔：765m</span><span>最低海拔:84m</span></div>
                <div class="bigmap">
                    <img src="/ArcticTern_1/public/static/img/trip_planning/bigmap.png" alt="">
                </div>
                <div style="float: right"><span>轨迹上传者: law去旅行 </span><span>上传时间：2018-06-19</span></div>
            </div>
            <!--点评-->
            <div class="con_b_3"></div>
            <!--照片-->
            <div class="con_b_4">
                <a href="#">添加照片</a>
                <div  class="pic_box">
                    <div>
                        <img src="/ArcticTern_1/public/static/img/trip_planning/img1.jpg" alt="">
                    </div>
                    <div>
                        <img src="/ArcticTern_1/public/static/img/trip_planning/img2.jpg" alt="">
                    </div>
                    <div>
                        <img src="/ArcticTern_1/public/static/img/trip_planning/img3.jpg" alt="">
                    </div>
                    <div>
                        <img src="/ArcticTern_1/public/static/img/trip_planning/img4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--内容区结束-->
    <!--底部开始-->
    <div id="footer">
        <div class="foot">
            <p class="nav1">
                <a href="#">穷游简介</a>
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
                <a target="_blank"  href="//static.qyer.com/images/yyzz.jpg">营业执照</a>
                <a target="_blank"  href="//static.qyer.com/images/jyxkz.jpg">经营许可证</a>
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
    <!--底部结束-->
</div>
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
<script src="/ArcticTern_1/public/static/js/trip_planning/ziye.js"></script>
</body>
</html>