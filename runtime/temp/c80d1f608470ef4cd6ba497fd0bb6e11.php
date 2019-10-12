<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"E:\xampp\htdocs\ArcticTern_1/application/trip_planning\view\index\create.html";i:1532937208;s:56:"E:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"E:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/ArcticTern_1/public/static/img/activity/logo_2.png">

    <meta charset="UTF-8">
    <link href="/ArcticTern_1/public/static/css/bootstrap.css" rel="stylesheet">
    <link href="/ArcticTern_1/public/static/css/trip_planning/create.css" rel="stylesheet">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/nav.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/footer.css">
    <link rel="stylesheet" href="/ArcticTern_1/public/static/css/common.css">
    <title>创建路线</title>
</head>
<body>

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

<div class="kuangjia ">

    <!--页签-->
    <form class="creation" method="post" action="<?php echo url('trip_planning/index/abc'); ?>"  enctype="multipart/form-data">
        <div class="cre_path">
            <a href="<?php echo url('index/index/index'); ?>">北极燕鸥</a>
            >>
            <a href="<?php echo url('trip_planning/index/index'); ?>">户外路线</a>
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
                    <p>类型<span>*</span>：</p>
                    <ul id="list">
                        <li>
                            <input type="radio" id="sycx" value="山野穿行" name="tp_type"><a>

                            <label for="sycx">山野穿行</label>
                        </a>
                        </li>
                        <li>
                            <input type="radio" id="jx" value="健行" name="tp_type"><a>

                            <label for="jx">健行</label>
                        </a>
                        </li>
                        <li><input type="radio" id="qx" value="骑行" name="tp_type"><a>

                            <label for="qx">骑行</label>
                        </a>
                        </li>
                        <li>
                            <input type="radio" id="pb" value="跑步" name="tp_type"><a>

                            <label for="pb">跑步</label>
                        </a>
                        </li>
                        <li>
                            <input type="radio" id="zj" value="自驾" name="tp_type"><a>

                            <label for="zj">自驾</label>
                        </a>
                        </li>
                        <li>
                            <input type="radio" id="ly" value="露营" name="tp_type"><a>

                            <label for="ly">露营</label>
                        </a>
                        </li>
                        <li>
                            <input type="radio" id="sx" value="溯溪" name="tp_type"><a>

                            <label for="sx">溯溪</label>
                        </a>
                        </li>
                        <li>
                            <input type="radio" id="hx" value="滑雪" name="tp_type"><a>

                            <label for="hx">滑雪</label>
                        </a>
                        </li>
                        <li>
                            <input type="radio" id="pl" value="漂流" name="tp_type"><a>

                            <label for="pl">漂流</label>
                        </a>
                        </li>
                        <li>
                            <input type="radio" id="wq" value="温泉" name="tp_type"><a>

                            <label for="wq">温泉</label>
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="cre_name form-group cre_top cre_p">
                    <p>路线名称<span>*</span>：</p>
                    <!--<span class="cre_name_box">-->
                    <input type="text" class="form-control" placeholder="建一个通俗易懂的名称..." name="tp_name">
                    <!--</span>-->
                </div>
                <div class="cre_brief cre_p cre_top">
                    <p>路线简介<span>*</span>：</p>

                    <div class="cre_brief_box">
                        <textarea class="cre_brief_textarea" data-max="300" data-min="20" name="tp_jianjie"
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
                    <input type="text" class="form-control " placeholder="隶属城镇名称..." name="tp_mudidi">
                </div>
                <div class="cre_belongs form-group cre_top cre_p">
                    <p>里程<span>*</span>：</p>
                    <input type="number" class="form-control " placeholder="里程" name="tp_licheng">
                </div>
                <div class="cre_belongs form-group cre_top cre_p">
                    <p>最高海拔<span>*</span>：</p>
                    <input type="number" class="form-control " placeholder="最高海拔" name="tp_max">
                </div>
                <div class="cre_belongs form-group cre_top cre_p">
                    <p>最低海拔<span>*</span>：</p>
                    <input type="number" class="form-control " placeholder="最低海拔" name="tp_min">
                </div>
                <div class="cre_belongs form-group cre_top cre_p">
                    <p>道路状况<span>*</span>：</p>
                    <input type="text" class="form-control " placeholder="道路状况" name="tp_daolu">
                </div>
                <div class="cre_belongs form-group cre_top cre_p">
                    <p>特色标签<span>*</span>：</p>
                    <input type="text" class="form-control " placeholder="特色标签" name="tp_tese">
                </div>
                <div class="cre_belongs form-group cre_top cre_p">
                    <p>上传封面<span>*</span>：</p>
                    <input type="file"  name="tp_img2">
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
                        <li>
                            <input type="checkbox" id="spring" value="春" name="tp_jijie[]">
                            <a>
                                <label for="spring">春天</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="summer" value="夏" name="tp_jijie[]">
                            <a>

                                <label for="summer">夏天</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="autumn" value="秋" name="tp_jijie[]">
                            <a>

                                <label for="autumn">秋天</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="winter" value="冬" name="tp_jijie[]">
                            <a>

                                <label for="winter">冬天</label>
                            </a>
                        </li>
                        <span>可多选</span>
                    </ul>
                </div>
                <div class="details_time">
                    <p class="details_p">活动时长：</p>
                    <ul id="lisb">
                        <li>
                            <input type="radio" id="num0" value="0.5" name="tp_shichang">
                            <label for="num0">0.5</label>
                        </li>
                        <li>
                            <input type="radio" id="num1" value="1" name="tp_shichang">

                            <label for="num1">1</label>
                        </li>
                        <li>
                            <input type="radio" id="num2" value="2" name="tp_shichang">

                            <label for="num2">2</label>

                        </li>
                        <li>
                            <input type="radio" id="num3" value="3" name="tp_shichang">

                            <label for="num3">3</label>
                        </li>
                        <li>
                            <input type="radio" id="num4" value="4" name="tp_shichang">

                            <label for="num4">4</label>

                        </li>
                        <li>
                            <input type="radio" id="num5" value="5" name="tp_shichang">

                            <label for="num5">5</label>
                        </li>
                        <li>
                            <input type="radio" id="num6" value="6" name="tp_shichang">
                            <label for="num6">6</label>

                        </li>
                        <li>
                            <span>天</span>
                    </ul>

                </div>
                <div class="details_difficulty">
                    <p class="details_p">线路难度：</p>
                    <ul id="lisc">
                        <li>
                            <input type="radio" id="xiuxian" value="休闲" name="tp_nandu">
                            <label for="xiuxian">休闲</label>
                        </li>
                        <li>
                            <input type="radio" id="biaozhun" value="标准" name="tp_nandu">
                            <label for="biaozhun">标准</label>
                        </li>
                        <li>
                            <input type="radio" id="tiaozhan" value="挑战" name="tp_nandu">
                            <label for="tiaozhan">挑战</label>
                        </li>
                        <li>
                            <input type="radio" id="zinue" value="自虐" name="tp_nandu">
                            <label for="zinue">自虐</label>
                        </li>
                    </ul>
                </div>
                <div class="details_facilities">
                    <p class="details_p">营地设施：</p>
                    <ul id="lisd">
                        <li>
                            <input type="checkbox" id="wsj" value="卫生间" name="tp_sheshi[]">
                            <a>
                                <label for="wsj">卫生间</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="lyj" value="淋浴间" name="tp_sheshi[]">
                            <a>

                                <label for="lyj">淋浴间</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="skq" value="烧烤区" name="tp_sheshi[]">
                            <a>

                                <label for="skq">烧烤区</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="sd" value="商店" name="tp_sheshi[]">
                            <a>

                                <label for="sd">商店</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="kcd" value="可充电" name="tp_sheshi[]">
                            <a>

                                <label for="kcd">可充电</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="zbzl" value="装备租赁" name="tp_sheshi[]">
                            <a>

                                <label for="zbzl">装备租赁</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="tcc" value="停车场" name="tp_sheshi[]">
                            <a>

                                <label for="tcc">停车场</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="jj" value="季节性水源" name="tp_sheshi[]">
                            <a>

                                <label for="jj">季节性水源</label>
                            </a>
                        </li>
                        <li>
                            <input type="checkbox" id="cn" value="常年水源" name="tp_sheshi[]">
                            <a>

                                <label for="cn">常年水源</label>
                            </a>
                        </li>
                        <span>可多选</span>
                    </ul>
                </div>
                <div class="details_number">
                    <p class="details_p">营位数量：</p>
                    <ul id="lise">
                        <li>
                            <input type="radio" id="one" value="1-5个" name="tp_yingwei">
                            <a>

                                <label for="one">1-5个</label>
                            </a>
                        </li>
                        <li>
                            <a>
                                <input type="radio" id="two" value="5-10个" name="tp_yingwei">
                                <label for="two">5-10个</label>
                            </a>
                        </li>
                        <li>
                            <input type="radio" id="three" value="10-20个" name="tp_yingwei">
                            <a>

                                <label for="three">10-20个</label>
                            </a>
                        </li>
                        <li>
                            <input type="radio" id="fore" value="20-50个" name="tp_yingwei">
                            <a>

                                <label for="fore">20-50个</label>
                            </a>
                        </li>
                        <li>

                            <input type="radio" id="five" value="50-100个" name="tp_yingwei">
                            <a><label for="five">50-100个</label></a>

                        </li>
                        <li>
                            <input type="radio" id="more" value="更多" name="tp_yingwei">
                            <a><label for="more">更多</label></a>

                        </li>
                    </ul>
                </div>
                <div class="disp details_">
                    <p class="details_p">
                        建议路线：
                    </p>

                    <div>
                        <textarea class="cre_brief_textarea" data-max="300" data-min="20" name="tp_jianyi"
                                  placeholder="详细的介绍下该条线路的一些相关信息..."></textarea>

                        <p class="cre_brief_info"><span>0</span>/100</p>
                    </div>
                </div>
                <div class="disp details_route">
                    <p class="details_p">
                        交通信息：
                    </p>

                    <div>
                        <textarea class="cre_brief_textarea" data-max="300" data-min="20" name="tp_jiaotong"
                                  placeholder="详细的介绍下该条线路的一些相关信息..."></textarea>

                        <p class="cre_brief_info"><span>0</span>/100</p>
                    </div>
                </div>
                <div class="disp details_">
                    <p class="details_p">
                        重要提示：
                    </p>

                    <div>
                        <textarea class="cre_brief_textarea" data-max="300" data-min="20" name="tp_tishi"
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
            <input class="cre_com" type="submit" value="创建路线" name="submit">

            <!--<submit href="" class="cre_com">创建路线</submit>-->
            <!--<a href="" class="cre_com">完成编辑</a>-->
            <a href="" class="cre_lete">取消</a>
        </div>
    </form>

    <!--网页底部-->
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
</div>
<script src="/ArcticTern_1/public/static/js/jquery-1.12.4.js"></script>
<script src="/ArcticTern_1/public/static/js/bootstrap.js"></script>
<script src="/ArcticTern_1/public/static/js/trip_planning/create.js"></script>


</body>
</html>