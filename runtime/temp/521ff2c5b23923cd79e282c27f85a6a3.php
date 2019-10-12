<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"E:\xampp\htdocs\ArcticTern_1/application/trip_planning\view\index\ziye.html";i:1533032940;s:56:"E:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"E:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>路线详情</title>
    <link rel="icon" href="/ArcticTern_1/public/static/img/activity/logo_2.png">

    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/trip_planning/ziye.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/nav.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/footer.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
</head>
<body>
<div id="warpper">
    <!--头部开始-->
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
    <!--头部结束-->
    <!--内容区开始-->
    <form method="post">
        <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$des): $mod = ($i % 2 );++$i;?>
        <div id="content">
            <div class="content_top">
                <div class="con_top">
                    <div class="con_indexer"><a href="<?php echo url('trip_planning/index/ziye'); ?>"> 户外路线</a>&gt;&gt;<a href="#"><?php echo $des['tp_mudidi']; ?></a>&gt;&gt;
                        <?php echo $des['tp_name']; ?>
                    </div>
                    <div class="con_title">
                        <h1><?php echo $des['tp_name']; ?></h1>
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
            </div>
            <div class="con_bottom">
                <!--基本信息-->
                <div class="con_b_1">
                    <div class="con_b_1_l">
                        <div class="con_map">
                            <img src="/ArcticTern_1/public/static/img/trip_planning/<?php echo $des['tp_dingwei']; ?>" alt="">
                            <div class="map_in">
                                <div class="map_in_1"><span>4.7</span><img src="/ArcticTern_1/public/static/img/trip_planning/wx.png" alt="">
                                </div>
                                <div class="map_in_2"><span>0条点评</span></div>
                                <div class="map_in_3"><span>分享</span><span>发送到微信</span></div>
                                <div class="map_in_4">
                                    <span>所属类型：<?php echo $des['tp_type']; ?></span><span>高度里程：<?php echo $des['tp_licheng']; ?>KM</span></div>
                                <div class="map_in_4">
                                    <span>线路难度 :<?php echo $des['tp_nandu']; ?></span><span>最佳季节 :<?php echo $des['tp_jijie']; ?></span></div>
                                <div class="map_in_4">
                                    <span>活动时长 :<?php echo $des['tp_shichang']; ?>天</span>
                                </div>
                            </div>
                        </div>
                        <div class="con_txt">
                            <p>
                                <?php echo $des['tp_jianjie']; ?></p>
                            <p>特色标签 :<?php echo $des['tp_tese']; ?></p>
                            <p>道路状况 :<?php echo $des['tp_daolu']; ?></p>
                            <p>交通位置 :<?php echo $des['tp_jiaotong']; ?>。</p>
                        </div>
                        <div class="con_ind">
                            <p>重要提示</p>
                            <p><?php echo $des['tp_tishi']; ?></p>
                            <p>建议路线：<?php echo $des['tp_jianyi']; ?></p>
                        </div>
                        <span class="time">信息更新时间 : 2015-03-29</span>
                        <a href="#" class="tianjia"><span class="glyphicon glyphicon-tag">添加/更新信息</span></a>
                        <div class="comment">
                            <div class="comment_title">
                                <h2>热门评论</h2>
                            </div>
                            <div class="comment_items">
                                <?php if(is_array($pinglun) || $pinglun instanceof \think\Collection || $pinglun instanceof \think\Paginator): $i = 0; $__LIST__ = $pinglun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <div class="comment_item">
                                    <div class="item_left"><?php echo $vo['user']; ?></div>
                                    <div class="item_right"><?php echo $vo['content']; ?></div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                        <div id="dianping">
                            <span class="glyphicon glyphicon-edit dptxt">点评</span>
                            <br>
                            <form>
                                <span class="dpdf">为这条路线打分：</span>
                                <ul class="start">
                                    <li>☆</li>
                                    <li>☆</li>
                                    <li>☆</li>
                                    <li>☆</li>
                                    <li>☆</li>
                                </ul>
                                <textarea placeholder="你觉得这条路线怎么样？你的点评会帮助到很多人哦。" class="con"></textarea>
                                <input type="button" class="button" value="留言">
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
                                <p class="tuijian"><a href=""><?php echo $des['tp_name']; ?></a></p>
                                <img src="/ArcticTern_1/public/static/img/trip_planning/little_star-full.png" alt=""><span
                                    class="tjjs_1">5.0</span><span
                                    class="tjjs_2"><?php echo $des['tp_licheng']; ?>公里</span>
                            </div>
                            <div class="xiangguan_itme">
                                <div class="xiangguan_icin"></div>
                                <p class="tuijian"><a href=""><?php echo $des['tp_name']; ?></a></p>
                                <img src="/ArcticTern_1/public/static/img/trip_planning/little_star-full.png" alt=""><span
                                    class="tjjs_1">5.0</span><span
                                    class="tjjs_2"
                            ><?php echo $des['tp_licheng']; ?>公里</span>
                            </div>
                            <div class="xiangguan_itme">
                                <div class="xiangguan_icin"></div>
                                <p class="tuijian"><a href="#"><?php echo $des['tp_name']; ?></a></p>
                                <img src="/ArcticTern_1/public/static/img/trip_planning/little_star-full.png" alt=""><span
                                    class="tjjs_1">5.0</span><span
                                    class="tjjs_2"
                            ><?php echo $des['tp_licheng']; ?>公里</span>
                            </div>
                            <div class="xiangguan_itme">
                                <div class="xiangguan_icin"></div>
                                <p class="tuijian"><a href="#"><?php echo $des['tp_name']; ?></a></p>
                                <img src="/ArcticTern_1/public/static/img/trip_planning/little_star-full.png" alt=""><span
                                    class="tjjs_1">5.0</span><span
                                    class="tjjs_2"><?php echo $des['tp_licheng']; ?>公里</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--路线轨迹-->
                <div class="con_b_2">
                    <div class="con_2_map"><span>线路里程：<?php echo $des['tp_licheng']; ?>KM</span><span>最高海拔：<?php echo $des['tp_max']; ?>m</span><span>最低海拔:<?php echo $des['tp_min']; ?>m</span>
                    </div>
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
                    <div class="pic_box">
                        <div>
                            <img src="/ArcticTern_1/public/static/img/trip_planning/<?php echo $des['tp_zp1']; ?>" alt="">
                        </div>
                        <div>
                            <img src="/ArcticTern_1/public/static/img/trip_planning/<?php echo $des['tp_zp2']; ?>" alt="">
                        </div>
                        <div>
                            <img src="/ArcticTern_1/public/static/img/trip_planning/<?php echo $des['tp_zp3']; ?>" alt="">
                        </div>
                        <div>
                            <img src="/ArcticTern_1/public/static/img/trip_planning/<?php echo $des['tp_zp4']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </form>
    <!--内容区结束-->
    <!--底部开始-->
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
    <!--底部结束-->
</div>
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
<script src="/ArcticTern_1/public/static/js/trip_planning/ziye.js"></script>
<script>
    $('.button').click(function () {
        var t_id = window.location.href.split('/').pop().replace(/\.html/, '');
        var str = "<?php echo url('trip_planning/index/pinglun',array('id'=>'tid')); ?>";
        var str1 = str.replace("tid", t_id);
        var dataObj = {
            "text": ""
        };
        var dataObj2 = {
            "id": ""
        };

        dataObj.text = $('.con').val();
        dataObj2.id=parseInt(t_id);
        $.ajax({
            type: "post",
            url: str1,
            dataType: "JSON",
            data: dataObj,
            erro: function () {
            },
            success: function (data) {
                if (data==0) {
                    alert('请先登录');
                }else{
                    alert('留言成功');
                    $.ajax({
                        type:'post',
                        url: "<?php echo url('trip_planning/index/pinglun2'); ?>",
                        dataType:"JSON",
                        data:dataObj2,
                        success:function(data) {
                            $(".comment_item").remove();
                            var limt='';
                            for (i=0;i<data.length;i++){
                                limt+=`<div class="comment_item">
                                    <div class="item_left">${data[i]['user']}</div>
                                    <div class="item_right">${data[i]['content']}</div>
                                </div>`;
                            }
                            $('.comment_items').html(limt);
                        }
                    })
                }
            }
        })
    })
</script>
</body>
</html>