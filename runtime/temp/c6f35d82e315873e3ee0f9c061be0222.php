<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"D:\phpStudy\PHPTutorial\WWW\ArcticTern_1/application/trip_planning\view\index\create.html";i:1529659644;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="/ArcticTern_1/public/static/css/bootstrap.css" rel="stylesheet">
    <link href="/ArcticTern_1/public/static/css/trip_planning/create.css" rel="stylesheet">
    <title></title>
</head>
<body>

<!--导航栏-->
<div class="dhl">
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
</div>

<div class="kuangjia ">

    <!--页签-->
    <div class="creation">
        <div class="cre_path">
            <a href="">北极燕鸥</a>
            >>
            <a href="">户外路线</a>
            >>
            <a href="">创建路线</a>
        </div>
        <div class="crea">
            <div class="cre_title">
                <h3 class="cjlx">创建路线</h3>

                <div class="tab-wrapper">

                    <ul class="tab-menu">
                        <li class="cut_1">基本信息</li>
                        <li class="cut_2">轨迹路书</li>
                        <li class="cut_3">线路详情</li>
                        <li class="cut_4">照片</li>
                    </ul>

                    <div class="tab-content">

                    </div>
                    <!-- //tab-content -->

                </div>
                <!-- //tab-wrapper -->
            </div>
        </div>

        <!--基本信息-->
        <div class="basic cre_bor">
            <div class="cre_bor">
                <div class="cre_label cre_p ">
                    <p>标签<span>*</span>：</p>
                    <ul id="list">
                        <li><a>山野穿行</a></li>
                        <li><a>健行</a></li>
                        <li><a>骑行</a></li>
                        <li><a>跑步</a></li>
                        <li><a>自驾</a></li>
                        <li><a>露营</a></li>
                        <li><a>溯溪</a></li>
                        <li><a>滑雪</a></li>
                        <li><a>攀岩</a></li>
                        <li><a>漂流</a></li>
                        <li><a>温泉</a></li>
                    </ul>
                </div>
                <div class="cre_name form-group cre_top cre_p">
                    <p>路线名称<span>*</span>：</p>
                    <!--<span class="cre_name_box">-->
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="建一个通俗易懂的名称...">
                    <!--</span>-->
                </div>
                <div class="cre_brief cre_p cre_top">
                    <p>路线简介<span>*</span>：</p>

                    <div class="cre_brief_box">
                        <textarea class="cre_brief_textarea" data-max="300" data-min="20" name="route_desc" id=""
                                  placeholder="详细的介绍下该条线路的一些相关信息..."></textarea>

                        <p class="cre_brief_info"><span>0</span>/300</p>
                    </div>
                </div>
                <div class="cre_map cre_p cre_top">
                    <p>地图定位<span>*</span>：</p>
                    <button class="cre_map_zb">地图坐标</button>
                </div>
                <div class="cre_belongs form-group cre_top cre_p">
                    <p>所属目的地<span>*</span>：</p>
                    <input type="email" class="form-control " id="exampleInputEmail1" placeholder="隶属城镇名称...">
                </div>
            </div>
        </div>

        <!--轨迹路书-->
        <div class="trajectory cre_bor">
            <div class="tra">
                <p>请在地图上右键选择标注路点或营地</p>

                <p class="tra_left">( 仅支持kml,gpx格式的轨迹 )</p>
                <span class="tra_left">上传轨迹</span>
            </div>
            <div>
                <img src="/ArcticTern_1/public/static/img/trip_planning/baidu.png" alt=""/>
            </div>
        </div>

        <!--线路详情-->
        <div class="details cre_bor">
            <div class="">
                <div class="details_season">
                    <p class="details_p">最佳季节：</p>
                    <ul id="lisa">
                        <li><a>春天</a></li>
                        <li><a>夏天</a></li>
                        <li><a>秋天</a></li>
                        <li><a>冬天</a></li>
                        <span>可多选</span>
                    </ul>
                </div>
                <div class="details_time">
                    <p class="details_p">活动时长：</p>
                    <ul id="lisb">
                        <li>0.5</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <span>天</span>
                    </ul>

                </div>
                <div class="details_label">
                    <p class="details_p">线路标签：</p>
                    <ul id="city">
                        <li></li>
                    </ul>
                    <input type="email" class="form-control " id="exampleInputEmail1" placeholder="输入标签...">
                    <br>

                    <div class="details_labe">
                        <a>山海</a>
                        <a>日出</a>
                        <a>云海</a>
                        <a>野花</a>
                        <a>大草坡</a>
                        <a>千米山</a>
                        <a>重装</a>
                        <a>轻装</a>
                    </div>
                </div>
                <div class="details_difficulty">
                    <p class="details_p">线路难度：</p>
                    <ul id="lisc">
                        <li>休闲</li>
                        <li>标准</li>
                        <li>挑战</li>
                        <li>自虐</li>
                    </ul>
                </div>
                <div class="details_facilities">
                    <p class="details_p">营地设施：</p>
                    <ul id="lisd">
                        <li><a>卫生间</a></li>
                        <li><a>淋浴间</a></li>
                        <li><a>烧烤区</a></li>
                        <li><a>商店</a></li>
                        <li><a>可充电</a></li>
                        <li><a>装备租赁</a></li>
                        <li><a>停车场</a></li>
                        <li><a>季节性水源</a></li>
                        <li><a>常年水源</a></li>
                        <span>可多选</span>
                    </ul>
                </div>
                <div class="details_number">
                    <p class="details_p">营位数量：</p>
                    <ul id="lise">
                        <li><a>1-5个</a></li>
                        <li><a>5-10个</a></li>
                        <li><a>10-20个</a></li>
                        <li><a>20-50个</a></li>
                        <li><a>50-100个</a></li>
                        <li><a>更多</a></li>
                    </ul>
                </div>
                <div class="disp details_">
                    <p class="details_p">
                        行程安排：
                    </p>

                    <div>
                        <textarea class="cre_brief_textarea" data-max="300" data-min="20" name="route_desc" id=""
                                  placeholder="详细的介绍下该条线路的一些相关信息..."></textarea>

                        <p class="cre_brief_info"><span>0</span>/100</p>
                    </div>
                </div>
                <div class="disp details_route">
                    <p class="details_p">
                        交通信息：
                    </p>

                    <div>
                        <textarea class="cre_brief_textarea" data-max="300" data-min="20" name="route_desc" id=""
                                  placeholder="详细的介绍下该条线路的一些相关信息..."></textarea>

                        <p class="cre_brief_info"><span>0</span>/100</p>
                    </div>
                </div>
                <div class="disp details_">
                    <p class="details_p">
                        重要提示：
                    </p>

                    <div>
                        <textarea class="cre_brief_textarea" data-max="300" data-min="20" name="route_desc" id=""
                                  placeholder="详细的介绍下该条线路的一些相关信息..."></textarea>

                        <p class="cre_brief_info"><span>0</span>/100</p>
                    </div>
                </div>
            </div>


        </div>

        <!--上传图片-->
        <div class="photo cre_bor">
            <div class="photo_m">
                <p>共0张，0M，您当月相册流量已使用0M，剩余100M。</p>

                <div class="photo_ms"><a>
                    本地
                </a>
                    <a href="">
                        相册
                    </a>
                </div>

            </div>
            <div class="photo_shu ">
                <div class="photo_sm">
                    <i></i>

                    <p>有图有真相，快来上传吧！</p>

                    <p>支持单张图片最大10M，弹出框中每次最多选择10张图片</p>

                    <p>普通用户每月100M流量，实名认证用户每月多达1000M流量</p>
                </div>

            </div>
        </div>

        <!--完成编辑-->
        <div class="cre_complete">

            <a href="" class="cre_com">创建路线</a>
            <!--<a href="" class="cre_com">完成编辑</a>-->
            <a href="" class="cre_lete">取消</a>
        </div>
    </div>
</div>
    <!--网页底部-->
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
    <div></div>
    <script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
    <script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
    <script src="/ArcticTern_1/public/static/js/trip_planning/create.js"></script>

    <script>

    </script>
</body>
</html>