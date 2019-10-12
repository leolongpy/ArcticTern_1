<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\xampp\htdocs\ArcticTern_1/application/destination\view\index\ziye.html";i:1531726137;s:56:"D:\xampp\htdocs\ArcticTern_1\application\common\nav.html";i:1531969638;s:59:"D:\xampp\htdocs\ArcticTern_1\application\common\footer.html";i:1531103305;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>城市</title>
		<link rel="stylesheet" href="/ArcticTern_1/public/static/css/bootstrap.css">
		<link rel="stylesheet" href="/ArcticTern_1/public/static/css/destination/ziye.css">
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
					<li>
						<a href="<?php echo url('destination/index/ziye'); ?>">巴黎</a>
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
		        		<a class="weatherLink" href="#">				            
				                        城市天气&nbsp;&nbsp;&nbsp;
				            <img src="//static.qyer.com/images/place5/weather/weatherIcon-g-04.png" width="28" height="26" alt="" class="icon">
				           	&nbsp;多云　16℃~22℃
				        </a>
				        <p>
				        	<em>116796</em>
				        	人去过这里，
				        	<em>35635</em>
				        	条目的地评论</p>
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
	        				<a href="#hot">景点推荐</a>
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
						      <img src="/ArcticTern_1/public/static/img/destination/lb1.png">

						    </div>
						    <div class="item mainItem">
						      <img src="/ArcticTern_1/public/static/img/destination/lb2.png">

						    </div>
						    <div class="item mainItem">
						      <img src="/ArcticTern_1/public/static/img/destination/lb4.png">

						    </div>
						    <div class="item mainItem">
						      <img src="/ArcticTern_1/public/static/img/destination/lb3.png">

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
        					<h5>城市经验</h5>
        					<p>
        						<a href="#">lixai200330：</a>
        						漂亮的城市。古迹众多，博物馆上百，让人流连忘返。城市中男女老少均十分精致典雅。
        					</p>
        					<p>
        						<a href="#">锦儿Amy：</a>
        						宛如美女般的城市，到处都是美景，到处都是美食，到处都是美女帅哥，太爱这个城市！
        					</p>
        					<p>
        						<a href="#">Mojito：</a>
        						历史与艺术的气息比弥漫在街道上的香水和咖啡浓郁得多，当你来了便会知道，这是一个能承得起你满心憧憬的地方。
        					</p>
        					<button type="button" class="myBtn" data-toggle="modal" data-target=".bs-example-modal-lg">目的地速写</button>
							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
							    <div class="modal-dialog modal-lg" role="document">
							        <div class="modal-content">
										<div class="modal-header">
									 		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
											面积:  105平方公里     人口:  217 万人     当地语言:  法语
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
        		<h1>热门目的地</h1>
        		<ul class="myTab" id="mainHot">
	                <li class="active">
	                    <a href="#hot1" data-toggle="tab" >最受欢迎</a>
	                </li>
	                <li>
	                    <a href="#hot2" data-toggle="tab">景点</a>
	                </li>
	                <li>
	                    <a href="#hot3" data-toggle="tab" >美食</a>
	                </li>
	                <li>
	                    <a href="#hot4" data-toggle="tab" >购物</a>
	                </li>
	                <li>
	                    <a href="#hot5" data-toggle="tab" >活动</a>
	                </li>
            	</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active tab" id="hot1">
						<div class="mainHot">
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top1">
										1
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot1.png" width="227px" height="150px"/>
									</div>
									<h4>埃菲尔铁塔</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.2</span>
										<span class="num">3764人点评</span>
									</p>
								</a>

							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top2">
										2
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot2.png" width="227px" height="150px"/>
									</div>
									<h4>卢浮宫</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.6</span>
										<span class="num">3359人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top3">
										3
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot3.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎凯旋门</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.9</span>
										<span class="num">2087人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										4
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot4.png" width="227px" height="150px"/>
									</div>
									<h4>香榭丽舍大街</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.4</span>
										<span class="num">1943人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										5
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot5.png" width="227px" height="150px"/>
									</div>
									<h4>塞纳河</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.1</span>
										<span class="num">1883人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										6
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot6.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎圣母院</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.2</span>
										<span class="num">1948人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										7
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot7.png" width="227px" height="150px"/>
									</div>
									<h4>协和广场</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.2</span>
										<span class="num">973人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										8
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot8.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎圣心大教堂</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.0</span>
										<span class="num">1041人点评</span>
									</p>
								</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade tab" id="hot2">
						<div class="mainHot">
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top1">
										1
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot1.png" width="227px" height="150px"/>
									</div>
									<h4>埃菲尔铁塔</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.2</span>
										<span class="num">3764人点评</span>
									</p>
								</a>

							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top2">
										2
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot2.png" width="227px" height="150px"/>
									</div>
									<h4>卢浮宫</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.6</span>
										<span class="num">3359人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top3">
										3
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot3.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎凯旋门</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.9</span>
										<span class="num">2087人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										4
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot4.png" width="227px" height="150px"/>
									</div>
									<h4>香榭丽舍大街</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.4</span>
										<span class="num">1943人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										5
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot5.png" width="227px" height="150px"/>
									</div>
									<h4>塞纳河</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.1</span>
										<span class="num">1883人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										6
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot6.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎圣母院</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.2</span>
										<span class="num">1948人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										7
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot7.png" width="227px" height="150px"/>
									</div>
									<h4>协和广场</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.2</span>
										<span class="num">973人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										8
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot8.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎圣心大教堂</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.0</span>
										<span class="num">1041人点评</span>
									</p>
								</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade tab" id="hot3">
						<div class="mainHot">
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top1">
										1
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot3-1.png" width="227px" height="150px"/>
									</div>
									<h4>小天使冰淇淋（左岸）</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.8</span>
										<span class="num">201人点评</span>
									</p>
								</a>

							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top2">
										2
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot3-2.png" width="227px" height="150px"/>
									</div>
									<h4>花神咖啡馆</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.2</span>
										<span class="num">132人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top3">
										3
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot3-3.png" width="227px" height="150px"/>
									</div>
									<h4>拉杜丽（香榭丽舍）</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.7</span>
										<span class="num">105人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										4
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot3-4.png" width="227px" height="150px"/>
									</div>
									<h4>Piere Herme</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.1</span>
										<span class="num">123人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										5
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot3-5.png" width="227px" height="150px"/>
									</div>
									<h4>安吉丽娜甜品店</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.1</span>
										<span class="num">90人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										6
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot3-6.png" width="227px" height="150px"/>
									</div>
									<h4>河马餐厅</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>7.2</span>
										<span class="num">105人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										7
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot3-7.png" width="227px" height="150px"/>
									</div>
									<h4>拉杜丽 </h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.8</span>
										<span class="num">56人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										8
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot3-8.png" width="227px" height="150px"/>
									</div>
									<h4>安吉丽娜（老佛爷）</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.3</span>
										<span class="num">21人点评</span>
									</p>
								</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade tab" id="hot4">
						<div class="mainHot">
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top1">
										1
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot4-1.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎老佛爷</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>7.7</span>
										<span class="num">596</span>
									</p>
								</a>

							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top2">
										2
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot4-2.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎春天百货</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>7.9</span>
										<span class="num">242人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top3">
										3
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot4-3.png" width="227px" height="150px"/>
									</div>
									<h4>花神咖啡馆</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.2</span>
										<span class="num">132人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										4
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot4-4.png" width="227px" height="150px"/>
									</div>
									<h4>路易·威登</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>7.7</span>
										<span class="num">74人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										5
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot4-5.png" width="227px" height="150px"/>
									</div>
									<h4>河谷购物村</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>7.9</span>
										<span class="num">106人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										6
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot4-6.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎超市</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.7</span>
										<span class="num">96人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										7
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot4-7.png" width="227px" height="150px"/>
									</div>
									<h4>莎士比亚书店</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.2</span>
										<span class="num">89人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										8
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot4-8.png" width="227px" height="150px"/>
									</div>
									<h4>戴高乐机场</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>7.4</span>
										<span class="num">34人点评</span>
									</p>
								</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade tab" id="hot5">
						<div class="mainHot">
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top1">
										1
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot5-1.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎歌剧院</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.0</span>
										<span class="num">639人点评</span>
									</p>
								</a>

							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top2">
										2
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot5-2.png" width="227px" height="150px"/>
									</div>
									<h4>蓬皮社中心</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.5</span>
										<span class="num">676人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top3">
										3
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot5-3.png" width="227px" height="150px"/>
									</div>
									<h4>卢浮宫凯旋门（小凯旋门）</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>7.9</span>
										<span class="num">112人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										4
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot5-4.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎塞纳河自由女神像</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.1</span>
										<span class="num">125人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										5
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot5-5.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎圣母院钟楼</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.0</span>
										<span class="num">100人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										6
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot5-6.png" width="227px" height="150px"/>
									</div>
									<h4>巴士底广场</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>7.5</span>
										<span class="num">208人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										7
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot5-7.png" width="227px" height="150px"/>
									</div>
									<h4>橘园美术馆</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>9.1</span>
										<span class="num">379人点评</span>
									</p>
								</a>
							</div>
							<div class="hot_img">
								<a href="<?php echo url('destination/index/jingdian'); ?>">
									<div class="hot_top">
										8
									</div>
									<div class="myImg">
										<img src="/ArcticTern_1/public/static/img/destination/hot5-8.png" width="227px" height="150px"/>
									</div>
									<h4>巴黎迪士尼世界</h4>
									<p>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star"></i>
										<i class="glyphicon glyphicon-star-empty"></i>
										<span>8.9</span>
										<span class="num">215人点评</span>
									</p>
								</a>
							</div>
						</div>
					</div>
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
											<a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-1.png" width="350px" height="245px"></a>
											<date class="card__date">
												<span class="card__date__day">26</span>
												<br/>
												<span class="card__date__month">五月</span>
											</date>
										</header>

										<div class="card__body">
											<div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
											<div class="card_tx">
												<img src="/ArcticTern_1/public/static/img/destination/card_tx1.png" width="84px" height="84px" alt="">
											</div>
											<div class="card__subtitle">ivyloveivy</div>
											<h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">沿着塞纳河走上巴黎文艺清新之路</a></h2>
											<p class="card__description">
												即便是第一次来到巴黎，只要沿着塞纳河游走，你就不会迷失。对初游巴黎的人来说，
												这是最清晰不过的一条游览路径了。那么，跟随我们的微锦囊，
												踏上这条巴黎文艺清新之路，留下最难忘的花都印象吧。
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
											<a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-2.png" width="350px" height="245px"></a>
											<date class="card__date">
												<span class="card__date__day">9</span>
												<br/>
												<span class="card__date__month">五月</span>
											</date>
										</header>

										<div class="card__body">
											<div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
											<div class="card_tx">
												<img src="/ArcticTern_1/public/static/img/destination/card_tx2.png" width="84px" height="84px" alt="">
											</div>
											<div class="card__subtitle">爱吃火锅的悟空</div>
											<h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">法国旅游之巴黎美食介绍</a></h2>
											<p class="card__description">
												大家一定要设计好路线，美食的地图和每天要去游玩的地方，要安排在一起，
												这样我们就能在游览景点的同时去品尝美食。
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
											<a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-3.png" width="350px" height="245px"></a>
											<date class="card__date">
												<span class="card__date__day">20</span>
												<br/>
												<span class="card__date__month">四月</span>
											</date>
										</header>

										<div class="card__body">
											<div class="card__category"><a href="<?php echo url('destination/index/youji'); ?>">照片</a></div>
											<div class="card_tx">
												<img src="/ArcticTern_1/public/static/img/destination/card_tx3.png" width="84px" height="84px" alt="">
											</div>
											<div class="card__subtitle">TasteInParis</div>
											<h2 class="card__title"><a href="<?php echo url('destination/index/youji'); ?>">一个旅居巴黎吃货的地址</a></h2>
											<p class="card__description">
												我在巴黎已经居住5年了，作为一个天生的享乐主义者，我总是在不停的寻找巴黎隐藏在角落物美价廉的餐厅，
												酒吧，小店。我一直认为食物是了解一个国家最重要的元素，
												所以每次我旅行都一定要去寻找当地人最喜欢的餐厅和饮品。
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
											<a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-4.png" width="350px" height="245px"></a>
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
											<a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-5.png" width="350px" height="245px"></a>
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
											<a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-6.png" width="350px" height="245px"></a>
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
											<a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-7.png" width="350px" height="245px"></a>
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
											<a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-8.png" width="350px" height="245px"></a>
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
											<a href="<?php echo url('destination/index/youji'); ?>"><img src="/ArcticTern_1/public/static/img/destination/gl1-9.png" width="350px" height="245px"></a>
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
						<a  href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left  myleft"></span>
						</a>
						<a  href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right myright"></span>
						</a>
					</div>



					<!--<ul class="myTab">-->
		                <!--<li class="active">-->
		                    <!--<a href="#strategy1" data-toggle="tab" style="width: 333px;">景点</a>-->
		                <!--</li>-->
		                <!--<li>-->
		                    <!--<a href="#strategy2" data-toggle="tab" style="width: 333px;">美食</a>-->
		                <!--</li>-->
		                <!--<li>-->
		                    <!--<a href="#strategy3" data-toggle="tab" style="width: 333px;">购物</a>-->
		                <!--</li>-->
		                <!---->
	            	<!--</ul>-->
	            	<!--<div class="tab-content">-->
		                <!--<div class="tab-pane fade in active tab" id="strategy1">-->
		                    <!--<div class="strategy_img" style="margin-left: 2px;">-->
		                    	<!--<a href="#">-->
		                    		<!--<img src="/ArcticTern_1/public/static/img/destination/gl1-1.png" width="310px" height="200px"/>-->
		                    		<!--<p>ivyloveivy</p>-->
		                    		<!--<h3>沿着塞纳河走上巴黎文艺清新之路</h3>-->
		                    		<!--<div>-->
		                    			<!--即便是第一次来到巴黎，只要沿着塞纳河游走，你就不会迷失。-->
		                    			<!--对初游巴黎的人来说，这是最清晰不过的一条游览路径了。-->
		                    			<!--那么，跟随我们的微锦囊，用“走”或用“游”，踏上这条巴黎文艺清新之路，留下最难忘的花都印象吧。-->
		                    		<!--</div>-->
		                    	<!--</a>-->
		                    <!--</div>-->
		                    <!--<div class="strategy_img">-->
		                    	<!--<a href="#">-->
		                    		<!--<img src="/ArcticTern_1/public/static/img/destination/gl1-3.png" width="310px" height="200px"/>-->
		                    		<!--<p>ddqq围脖</p>-->
		                    		<!--<h3>巴黎旅游必游景点</h3>-->
		                    		<!--<div>-->
		                    			<!--如果在巴黎停留的时间较短，推荐首选去一些经典景点游玩，游览这些地方，可以快速而直接的认识。-->
		                    			<!--说到巴黎的必游景点，通过这些经典的游览地，-->
		                    			<!--可以看到巴黎曾经的面貌，了解法国的历史和法国人民族性格的成因。-->
		                    		<!--</div>-->
		                    	<!--</a>-->
		                    <!--</div>-->
		                    <!--<div class="strategy_img">-->
		                    	<!--<a href="#">-->
		                    		<!--<img src="/ArcticTern_1/public/static/img/destination/gl1-2.png" width="310px" height="200px"/>-->
		                    		<!--<p>蝎之传说</p>-->
		                    		<!--<h3>可以俯瞰巴黎城市的观景点介绍</h3>-->
		                    		<!--<div>-->
		                    			<!--大多人都喜爱从铁塔上俯瞰整个巴黎的美景，只是小缺点一是排队时间会比较久，-->
		                    			<!--再者就是铁塔上俯瞰整个巴黎就看不到铁塔本身了.....-->
		                    			<!--事实上巴黎的上方还有很多制高点可以俯瞰这座美丽的城市。-->
		                    		<!--</div>-->
		                    	<!--</a>-->
		                    <!--</div>-->
		                <!--</div>-->
		                <!--<div class="tab-pane fade itab" id="strategy2">-->
		                    <!--<div class="strategy_img" style="margin-left: 2px;">-->
		                    	<!--<a href="#">-->
		                    		<!--<img src="/ArcticTern_1/public/static/img/destination/gl2-1.png" width="310px" height="200px"/>-->
		                    		<!--<p>爱吃火锅的悟空</p>-->
		                    		<!--<h3>法国旅游之巴黎美食介绍</h3>-->
		                    		<!--<div>-->
		                    			<!--大家一定要设计好路线，美食的地图和每天要去游玩的地方，要安排在一起，这样我们就能在游览景点的同时去品尝美食。-->
		                    		<!--</div>-->
		                    	<!--</a>-->
		                    <!--</div>-->
		                    <!--<div class="strategy_img">-->
		                    	<!--<a href="#">-->
		                    		<!--<img src="/ArcticTern_1/public/static/img/destination/gl2-2.png" width="310px" height="200px"/>-->
		                    		<!--<p>TastelnPairs</p>-->
		                    		<!--<h3>一个旅居巴黎吃货的地址</h3>-->
		                    		<!--<div>-->
		                    			<!--我在巴黎已经居住5年了，作为一个天生的享乐主义者，我总是在不停的寻找巴黎隐藏在角落物美价廉的餐厅-->
		                    			<!--，酒吧，小店。我一直认为食物是了解一个国家最重要的元素。-->
		                    		<!--</div>-->
		                    	<!--</a>-->
		                    <!--</div>-->
		                    <!--<div class="strategy_img">-->
		                    	<!--<a href="#">-->
		                    		<!--<img src="/ArcticTern_1/public/static/img/destination/gl2-3.png" width="310px" height="200px"/>-->
		                    		<!--<p>比目小鱼</p>-->
		                    		<!--<h3>巴黎71家好吃的甜点面包店</h3>-->
		                    		<!--<div>-->
		                    			<!--巴黎甜点师推荐，来巴黎一定不能错过的好吃甜点71家超详细攻略：-->
		                    			<!--巴黎71家好吃的甜点面包店大集合，最全清单！超多美照片 吃货不要错过（慢慢更新）-->
		                    			<!--http://bbs.qyer.com/thread-965221-1.html-->
		                    		<!--</div>-->
		                    	<!--</a>-->
		                    <!--</div>-->
		                <!--</div>-->
		                <!--<div class="tab-pane fade tab" id="strategy3">-->
		                    <!--<div class="strategy_img" style="margin-left: 2px;">-->
		                    	<!--<a href="#">-->
		                    		<!--<img src="/ArcticTern_1/public/static/img/destination/gl3-1.png" width="310px" height="200px"/>-->
		                    		<!--<p>Aniseyang</p>-->
		                    		<!--<h3>巴黎的魅力小店游之购物篇</h3>-->
		                    		<!--<div>-->
		                    			<!--悠闲的逛逛景点，逛逛当地特色小店，在这里向大家推荐一些当地特色小店。-->
		                    		<!--</div>-->
		                    	<!--</a>-->
		                    <!--</div>-->
		                    <!--<div class="strategy_img">-->
		                    	<!--<a href="#">-->
		                    		<!--<img src="/ArcticTern_1/public/static/img/destination/gl3-2.png" width="310px" height="200px"/>-->
		                    		<!--<p>ivyloveivy</p>-->
		                    		<!--<h3>带你逛巴黎市集</h3>-->
		                    		<!--<div>-->
		                    			<!--在巴黎住了一年，好多朋友一直问是不是特别浪漫。巴黎与浪漫是直接-->
		                    			<!--关联的词汇，这次不写也不放铁塔，卢浮宫这样的文字和图片。-->
		                    			<!--要是我告诉你最爱的不是巴黎那些景点，是巴黎地道集市和美食你是不是会惊讶呢？-->
		                    		<!--</div>-->
		                    	<!--</a>-->
		                    <!--</div>-->
		                    <!--<div class="strategy_img">-->
		                    	<!--<a href="#">-->
		                    		<!--<img src="/ArcticTern_1/public/static/img/destination/gl3-3.png" width="310px" height="200px"/>-->
		                    		<!--<p>coobe</p>-->
		                    		<!--<h3>巴黎特色店铺、画廊介绍</h3>-->
		                    		<!--<div>-->
		                    			<!--做个巴黎人是这次蜜月旅行的初衷，不介绍景点，只介绍画廊，店铺。-->
		                    		<!--</div>-->
		                    	<!--</a>-->
		                    <!--</div>-->
		                <!--</div>-->
		            <!--</div>-->
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
					<li>亚洲</li>
					<li>不丹</li>
					<li>东京</li>
					<li>关岛</li>
					<li>利物浦</li>
					<li>台湾</li>
					<li>卡萨布兰卡</li>
					<li>哥斯达黎加</li>
					<li>圣地亚哥</li>
					<li>多伦多</li>
					<li>多特蒙德</li>
					<li>奥克兰</li>
					<li>奥兰多</li>
					<li>威尼斯</li>
					<li>富士山</li>
					<li>荷兰</li>
					<li>拉斯维加斯</li>
					<li>斯巴达</li>
					<li>普罗旺斯</li>
					<li>柏林</li>
					<li>汉堡</li>
					<li>波士顿</li>
					<li>泰勒</li>
					<li>洛杉矶</li>
					<li>苏丹</li>
					<li>温哥华</li>
					<li>甲米</li>
					<li>碧瑶</li>
					<li>罗威纳</li>
					<li>罗马</li>
					<li>耶路撒冷</li>
					<li>芽庄</li>
					<li>苏黎世</li>
					<li>贝加尔湖</li>
					<li>迈阿密</li>
					<li>长岛</li>
					<li>阿尔萨斯</li>
					<li>阿布扎比</li>
					<li>蒙古</li>
					<li>马尼拉</li>
					<li>伊拉克</li>
					<li>肯尼亚</li>
					<li>韩国</li>
					<li>莫桑比克</li>
					<li>津巴布韦</li>
					<li>捷克</li>
					<li>阿根廷</li>
					<li>巴勒斯坦</li>
					<li>德国</li>
					<li>梵蒂冈</li>
				</ul>
			</div>
			<!-- 相关旅游目的地-->
			<div class="xgly">
				<p class="title">相关旅游目的地</p>
				<ul class="list clearfix">
					<li>凡尔赛</li>
					<li>尼斯</li>
					<li>里昂</li>
					<li>阿维尼翁</li>
					<li>枫丹白露</li>
					<li>巴塞罗那</li>
					<li>罗马</li>
					<li>布鲁塞尔</li>
					<li>米兰</li>
					<li>第戎</li>
					<li>普罗旺斯</li>
					<li>苏黎世</li>
					<li>日内瓦</li>
					<li>威尼斯</li>
					<li>伦敦</li>
					<li>阿姆斯特丹</li>
					<li>法兰克福</li>
					<li>马赛</li>
					<li>波尔多</li>
					<li>慕尼黑</li>
					<li>卢塞恩</li>
					<li>马德里</li>
					<li>因特拉肯</li>
					<li>圣米歇尔山</li>
					<li>吉维尼</li>
					<li>卢森堡市</li>
					<li>戛纳</li>
					<li>阿讷西</li>
					<li>佛罗伦萨</li>
					<li>斯特拉斯堡</li>
					<li>Le Pre-Saint-Gervais</li>
					<li>蒙鲁日</li>
					<li>塞纳河畔伊夫里</li>
					<li>马拉科夫</li>
					<li>庞坦</li>
					<li>旺沃</li>
					<li>勒瓦卢瓦-佩雷</li>
					<li>查伦顿·勒·彭特</li>
					<li>圣旺</li>
					<li>克利希</li>
					<li>万塞讷</li>
					<li>伊西莱穆利诺</li>
					<li>塞讷河畔讷伊</li>
					<li>维勒瑞夫</li>
					<li>圣吉欧梅斯</li>
					<li>阿涅勒</li>
					<li>迈松阿尔福</li>
					<li>库尔布瓦</li>
					<li>布洛涅-比扬古</li>
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
            })

            $(function () {
                $("#mainHot a").hover(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                    $($(this).attr('href')).addClass('active').addClass('in').siblings().removeClass('active').removeClass('in');
                });
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
