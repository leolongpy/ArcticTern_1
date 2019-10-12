/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : arctictern

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-08-10 09:35:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '活动名称',
  `act_title` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '活动标题',
  `act_num` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '编号',
  `act_jiage` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '价格',
  `act_tuijian` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '产品经理推荐',
  `act_gaiyao` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '行程概要',
  `act_tese` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '产品特色',
  `act_city` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '出发城市',
  `act_date` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT '出游日期',
  `act_chengren` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '成人',
  `act_ertong` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '儿童',
  `act_img1` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `act_img2` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of activity
-- ----------------------------
INSERT INTO `activity` VALUES ('1', '《Q-story》 2018年第一期：佐味南澳，张钧甯的杯酒人生', '', '', '', '', '', '', '', '', '', '', 'A1.png', '');
INSERT INTO `activity` VALUES ('2', '《地球研习社》 第九期：漫游欧洲 光阴河轮', '', '', '', '', '', '', '', '', '', '', 'A2.png', '');
INSERT INTO `activity` VALUES ('3', '佳能微单 EOS M50:多彩突尼斯', '', '', '', '', '', '', '', '', '', '', 'A3.png', '');
INSERT INTO `activity` VALUES ('4', '《地球研习社》第八期：迪士尼巨星嘉年华', '', '', '', '', '', '', '', '', '', '', 'A4.png', '');
INSERT INTO `activity` VALUES ('5', '探路者：探路英雄召集令', '', '', '', '', '', '', '', '', '', '', 'A5.png', '');
INSERT INTO `activity` VALUES ('6', '昆士兰旅游局：寻找拍照王！', '', '', '', '', '', '', '', '', '', '', 'A6.png', '');
INSERT INTO `activity` VALUES ('7', '美丽中国·全旅游年', '', '', '', '', '', '', '', '', '', '', 'A7.png', '');
INSERT INTO `activity` VALUES ('8', '招商银行信用卡：新青年十一出境旅行报告', '', '', '', '', '', '', '', '', '', '', 'A8.png', '');
INSERT INTO `activity` VALUES ('9', 'VISA:热力燃冬，助威奥运', '', '', '', '', '', '', '', '', '', '', 'A9.png', '');
INSERT INTO `activity` VALUES ('10', '租租车：2017境外自驾冷门大数据', '', '', '', '', '', '', '', '', '', '', 'A10.png', '');
INSERT INTO `activity` VALUES ('11', '《地球研习社》第五期：有想\"法\"就走吧', '', '', '', '', '', '', '', '', '', '', 'A11.png', '');
INSERT INTO `activity` VALUES ('12', '《地球研习社》 第七期：荷兰', '', '', '', '', '', '', '', '', '', '', 'A12.png', '');
INSERT INTO `activity` VALUES ('13', '《地球研习社》 第六期：清迈', '', '', '', '', '', '', '', '', '', '', 'B1.png', '');
INSERT INTO `activity` VALUES ('14', '香港迪士尼：圣诞时刻', '', '', '', '', '', '', '', '', '', '', 'B9.png', '');
INSERT INTO `activity` VALUES ('15', '《地球研习社》第四期：七夕特辑', '', '', '', '', '', '', '', '', '', '', 'B2.png', '');
INSERT INTO `activity` VALUES ('16', '《地球研习社》第三期：摩洛哥', '', '', '', '', '', '', '', '', '', '', 'B3.png', '');
INSERT INTO `activity` VALUES ('17', '《地球研习社》第二期：潜水', '', '', '', '', '', '', '', '', '', '', 'B4.png', '');
INSERT INTO `activity` VALUES ('18', '《地球研习社》第一期：勘察加半岛', '', '', '', '', '', '', '', '', '', '', 'B5.png', '');
INSERT INTO `activity` VALUES ('19', '《Q-story》第二期：李霄云', '', '', '', '', '', '', '', '', '', '', 'B6.png', '');
INSERT INTO `activity` VALUES ('20', '《Q-story》第一期：小老虎', '', '', '', '', '', '', '', '', '', '', 'B7.png', '');
INSERT INTO `activity` VALUES ('21', '迪拜：让好事发生', '', '', '', '', '', '', '', '', '', '', 'B8.png', '');

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '管理员名称',
  `a_password` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '管理员密码',
  `a_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `a_email` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '管理员邮箱',
  `a_phone` varchar(11) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '管理员电话',
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin', '2018-07-26 16:56:31', '123456@qq.com', '18603110311');
INSERT INTO `admin` VALUES ('12', 'poopop', '447f476912c0d9eebaa1c1121a81b6c3', '2018-07-28 14:48:52', '456456@qq.com', '18146444544');
INSERT INTO `admin` VALUES ('14', 'iii', 'e10adc3949ba59abbe56e057f20f883e', '2018-07-28 15:58:47', '7698465@qq.com', '15176117676');
INSERT INTO `admin` VALUES ('15', 'cici', 'e10adc3949ba59abbe56e057f20f883e', '2018-07-28 15:59:23', '5521452@qq.com', '13146412122');

-- ----------------------------
-- Table structure for evaluate
-- ----------------------------
DROP TABLE IF EXISTS `evaluate`;
CREATE TABLE `evaluate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(300) COLLATE utf8mb4_bin DEFAULT NULL,
  `score` int(3) DEFAULT '10',
  `user` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `planning` varchar(11) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of evaluate
-- ----------------------------
INSERT INTO `evaluate` VALUES ('1', '1223243434', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('2', 'stetetewt', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('3', 'sgyrygreg', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('4', 'aete', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('5', 'srereret', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('6', '发送爽肤水', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('7', '四个个', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('8', '四个个', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('9', '第三个范德萨发', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('10', '爽肤水', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('11', '二月你', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('12', '更多', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('13', '光和热', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('14', '胜多负少 ', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('15', '柔柔弱弱', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('16', 'te ', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('17', 'te ', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('18', '111', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('19', '啊啊飒飒的', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('20', '1232', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('21', '沟通额', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('22', '11111', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('23', 'QQ群', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('24', '1324325', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('25', '十多个e', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('26', '猪进', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('27', '111', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('28', '111', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('29', '猪进', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('30', '特委托我问问', '10', '12345', '3');
INSERT INTO `evaluate` VALUES ('31', '1213', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('32', '111', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('33', 'aas ', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('34', 'sf ', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('35', 'sf s', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('36', 'dfhr ', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('37', 'saf ', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('38', 'saf ', '10', '12345', '1');
INSERT INTO `evaluate` VALUES ('39', 'gsd ', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('40', '猪进', '10', '12345', '2');
INSERT INTO `evaluate` VALUES ('41', 'sdhyr ', '10', '12345', '3');
INSERT INTO `evaluate` VALUES ('42', 'sdhdgdf ', '10', '12345', '3');

-- ----------------------------
-- Table structure for fingerpost_details
-- ----------------------------
DROP TABLE IF EXISTS `fingerpost_details`;
CREATE TABLE `fingerpost_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fp_title` varchar(100) NOT NULL COMMENT '标题内容',
  `fp_name` varchar(20) NOT NULL COMMENT '名称',
  `fp_img` varchar(255) NOT NULL COMMENT '图片',
  `fp_itd` varchar(300) NOT NULL COMMENT '简介',
  `fp_text_title` varchar(20) NOT NULL COMMENT '文章标题',
  `fp_text` varchar(5000) NOT NULL COMMENT '内容',
  `fp_download` varchar(20) NOT NULL COMMENT '下载',
  `fp_update` varchar(20) NOT NULL COMMENT '更新时间',
  `fp_size` varchar(50) NOT NULL COMMENT '文件大小',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fingerpost_details
-- ----------------------------
INSERT INTO `fingerpost_details` VALUES ('1', '曼谷及周边 · 城市探索指南', '曼谷及周边 · 城市探索指南', '28.jpg', '曼谷（泰文：กรุงเทพมหานคร；英文：Bangkok），是泰国首都和最大城市，别名“天使之城”，位于昭披耶河东岸，南临暹罗湾，中南半岛最大城市，东南亚第二大城市，为泰国政治、经济、贸易、交通、文化、科技、教育、宗教与各方面中心。 一座以佛教文化闻名的城市，却囊括了各种户外的元素，潜水、徒步、骑行等户外方式，你都能在这里体验，享受这座五颜六色、时常塞车的国际大都市的户外时刻。', '如何到达', '       亚航（曼谷廊曼国际机场） </br>\r\n\r\n                        亚航作为东南亚廉价航空的代表，在曼谷投入了大量的航班方便世界各地游客出行，想到达曼谷，亚洲航空仍然是最高性价比的选择。中国民众可以方便快捷地从国内到达曼谷。亚航现已开通微信预定服务，乘客可以登陆关注亚航微信进行航班预定，暂时只对泰国航线开放。</br>\r\n\r\n                        国内直飞曼谷城市</br>\r\n\r\n                        广州、深圳、潮汕、重庆、武汉、长沙、西安、昆明、香港、澳门</br>\r\n\r\n                        广州=曼谷  23:55>01:55 +1天</br>\r\n\r\n                        深圳=曼谷  23:20>01:10 +1天</br>\r\n\r\n                        潮汕=曼谷  11:15>13:40</br>\r\n\r\n                        澳门=曼谷  22:25>00:15+1天</br>\r\n\r\n                        10:50>12:30</br>\r\n\r\n                        香港=曼谷  19:50>21:35</br>\r\n\r\n                        10:15>12:40</br>\r\n\r\n                        重庆=曼谷  11:10>13:20</br>\r\n\r\n                        19:55>22:05</br>\r\n\r\n                        武汉=曼谷  12:20>15:10</br>\r\n\r\n                        长沙=曼谷  12:55>15:35</br>\r\n\r\n                        西安=曼谷  15:25>19:00</br>\r\n\r\n                        昆明=曼谷  13:20>15:05</br>\r\n\r\n                        曼谷机场</br>\r\n\r\n                        曼谷一共有两个国际机场，分别为廊曼国际机场（DMK）和素万那普国际机场（BKK）。两个机场距离较远，搭乘飞机时注意看清航班的起降机场。</br>\r\n\r\n                        廊曼国际机场</br>\r\n\r\n                        廊曼国际机场（Don Mueang International Airport）是曼谷的旧机场，是廉价航空公司以及泰国国内航班的重要枢纽。亚洲航空公司的航班都在廊曼国际机场（DMK）起降。除了亚洲航空之外，飞鸟航空、泰国东方航空、太阳航空等都有航班在廊曼国际机场起降。</br>\r\n\r\n                        从廊曼机场到素万那普国际机场</br>\r\n\r\n                        廊曼机场距素万那普国际机场约50公里。出租车仍然是最快、最方便的交通方式，平均耗时约 45 分钟。也可乘坐554或555路巴士。</br>\r\n\r\n                        素万那普国际机场</br>\r\n\r\n                        素万那普国际机场（Suvarnabhumi International Airport）是曼谷的新机场，是曼谷的主要民用机场，也是东南亚地区乃至亚洲地区重要的航空枢纽，除了泰国国际航空之外，国泰航空、中华航空、长荣航空等外籍航空公司也在这里起降。</br>', '点击下载', '更新时间：2017-06-08', '文件大小：12.53M');
INSERT INTO `fingerpost_details` VALUES ('2', '', '', '29.jpg', '', '户外体验', '曼谷拥挤的交通以及炎热的气候着实让人头痛，往往选择通过当地的tutu车或者轨道交通到达目的地，却因此错过了曼谷最地道的市井文化，倘若你在曼谷租赁一辆自行车骑行于曼谷的大街小道，想必能收获有别于普通旅行者的经历。</br>\r\n\r\n                        曼谷骑行道</br>\r\n\r\n                        曼谷政府之前推出的自行车计划Bangkok Smile Bike，在老城区及沿河区域设立免费的自行车租赁点，供市民游客使用，并修建了两条自行车道，分别为老城区线（Rattanakosin Route）和西部沿河线（West Side）。尽管在2015年时Bangkok Smile Bike计划因为某些原因终止了，但游客及市民仍可以沿着这两条线路骑行。</br>\r\n\r\n                        老城区线（Rattanakosin Route）</br>\r\n\r\n                        老城区的线路经过的路线为：Ratchadamnoen Klang Avenue-Tanao Road-Bamrung Muang, Kalayana Maitri-Sanam Chai-Thai Wang-Maha Rat-Na Phra Lan-Na Phra That-Rachini-Phra Athit-Phra Sumen-Sip Sam Hang Roads，全程约8公里。经过了大部分位于老城区的景点，其中包括：大皇宫、卧佛寺、巴苏孟要塞和民主纪念碑等。更重要的是，当你骑着自行车穿梭于嘈杂的车流之间，却依然可以收获曼谷闹市的宁静。</br>\r\n\r\n                        西部沿河线（West Side）</br>\r\n\r\n                        这条线路有一段沿着湄公河骑行的路段，但是最大的特点还是在于它穿梭于泰国民众的生活圈之中，不经意间便能发现最地道的泰国场景，哭闹的孩提，静坐的老妪甚至是漫步的僧侣，你都可以在这段不长的骑行线路中相遇。</br>\r\n\r\n                        素万那普机场自行车道</br>\r\n\r\n                        曼谷政府在2014年起修建了一条围绕着素万那普机场的自行车骑行绿道（Suvarnabhumi Airport Cycle Trail），全长约23公里，单向通行，配备有卫生间。如果你是一个狂热的骑行爱好者，大可以带上你的自行车来到曼谷，体验一下这条位置独特的自行车专用道。值得注意的是，自行车道的开放时间为当地时间早上六点到晚上六点，现场不提供自行车租赁。</br>\r\n\r\n                        曼谷骑行</br>\r\n\r\n                        倘若觉得自己去追溯自行车道过于繁琐，你大可以在曼谷直接找商业定制的自行车漫游，这些贴心的商户早就给来到曼谷旅行的游客提供了一系列单车旅行一日游选择，由专业的向导带你走遍曼谷的大街小巷、乡村郊野，带你领略一个不一样的曼谷。一次单车旅行的费用大约为1000-2000泰铢。</br>', '', '', '');
INSERT INTO `fingerpost_details` VALUES ('3', '', '', '30.jpg', '', '其他活动', '曼谷的生活不仅在市井道路上，无论是充满宗教主义的佛塔或者是皇宫，都能让你体验到别样的异域风情，在曼谷，平静和缓慢是这里的特色，放下你的脚步，慢慢体验这座色彩斑斓的城市。</br>\r\n\r\n                        大皇宫</br>\r\n\r\n                        大皇宫（Grand Palace），又称大王宫或故宫。紧邻湄南河，是曼谷中心内一处大规模古建筑群（计28座），总面积二十一万八千四百平方米。作为曼谷最经典的旅行地点，无论你对曼谷作何期待，来到曼谷，总得来这里看看它的金碧辉煌。</br>\r\n\r\n                        开放时间：08:30-16:30（15:20停止售票）</br>\r\n\r\n                        四面佛</br>\r\n\r\n                        四面佛（Erawan Shrine）在当地具有很高的地位，在东南亚，特别是泰国被认为是法力无边，掌握人间荣华富贵之神，其四面分别朝向东南西北，供信众祈福。位于曼谷中心区域的四面佛，常常吸引大量游客甚至是明星前来上香祈祷。</br>\r\n\r\n                        开放时间：06:00-23:00</br>\r\n\r\n                        郑王庙</br>\r\n\r\n                        郑王庙（Wat Arun），又称黎明寺（Temple of the Dawn），是纪念泰国第41代君王、民族英雄郑昭的寺庙，始建于大城王朝。当你在夕阳就要西下的时候登上郑王庙，在顶上欣赏夕阳下的湄南河风光，美不胜收。郑王庙阶梯较为陡峭，在攀登的时候需要格外小心。</br>\r\n\r\n                        开放时间：08:00-18:00</br>\r\n\r\n                        美功铁路集市</br>\r\n\r\n                        最特别的体验莫过于在美功铁路集市（Talat Mee Klong）看商贩们与火车互动的场景，当火车慢慢驶入集市路段，商贩们不紧不慢开始收起自己的摊位让火车通过。从曼谷市区到铁路集市约2小时的车程，也可以乘坐火车到达。</br>\r\n\r\n                        到达方式：在英雄纪念碑车站乘坐小巴前往美功（Mee Klong），在美功的曼谷银行对面下车之后步行前往美功铁路集市</br>\r\n\r\n                        安帕瓦水上市场</br>\r\n\r\n                        要想体验纯正的曼谷水上市场，那么绝不能错过质朴的的安帕瓦水上市场（Amphawa Floating Market）。尽管越来越多的游客来到这里，安帕瓦水上市场还是保持着原有嘈杂繁忙的样子。若想体验这种别具一格的市场，不要错过这里。</br>\r\n\r\n                        营业时间：周五至周日12:00-20:00</br>', '', '', '');
INSERT INTO `fingerpost_details` VALUES ('4', '', '', '40.jpg', '', '你最需要', '美食</br>\r\n\r\n                        东南亚的美食已经无需过多赘述，水果、海鲜、各种奇怪的美食都能够在这里大快朵颐。</br>\r\n\r\n                        冬阴功</br>\r\n\r\n                        冬阴功的魅力想必在国内已经声名远播，无论你在中国多高档的泰式餐厅品尝到的冬阴功都不如在泰国当地所吃的那般地道。特色的配料和虾、蟹、鸡肉、猪肉一起熬制，酸辣的味道总是让人回味无穷。</br>\r\n\r\n                        巧克力香蕉薄饼</br>\r\n\r\n                        这种博饼常常出现在曼谷的大街小巷上，薄薄的饼皮配上当地的香蕉，淋上浓浓的巧克力酱，构成了这样一份具有当地特色的街头美食。</br>\r\n\r\n                        芒果饭</br>\r\n\r\n                        用水果来配饭这种特别的做法在泰国被发挥到了极致，香甜的芒果加上糯米构成了这样一道别具特色的菜肴。几乎所有来到泰国的游客，都会尝一尝。</br>\r\n\r\n                        菠萝饭</br>\r\n\r\n                        追求菠萝饭的根本就是海鲜炒饭用菠萝外壳盛放。但是这样简单的组合造就了它独特的味道，炒饭的香味以及菠萝的酸甜味强烈地组合在一起，让炒饭更加美味。</br>\r\n\r\n                        水果</br>\r\n\r\n                        来到泰国热带水果不可不尝。这里的小贩用冰块给水果保鲜，水果和冰块被共同放在一个巨大容器里，沿街叫卖，让人看上去就觉得凉爽。</br>\r\n\r\n\r\n\r\n                        住宿</br>\r\n\r\n                        一个热门的旅游城市自然可以满足各式各样的旅行者的需求，无论你是追求高性价比的背包客，亦或是休闲度假游的旅客，都能在这里找到心满意足的住所</br>\r\n\r\n                        曼谷</br>\r\n\r\n                        Miss Zhao Hostel（赵女士旅舍）</br>\r\n\r\n                        考山路虽好但难免过于吵闹，选择距离适合住宿能让你在疯狂过后得到充分的休息。该青旅距离考山路600米，距离大皇宫约10分钟步行路程，十分便利，并且提供中文服务。</br>\r\n\r\n                        CHERN Hostel（今晨旅馆）</br>\r\n\r\n                        提供多种房型预定，从多人间到双人间，它都能满足你的需求。亲民的价格却配套了一应俱全的设施，提供了一个干净舒适的环境。</br>\r\n\r\n                        Pathumwan Princess Hotel（曼谷帕色哇公主酒店）</br>\r\n\r\n                        位于暹粒广场的豪华型五星级酒店，便利的交通环境和贴心的服务配套，非常追求品质的旅行者。</br>\r\n\r\n                        华欣</br>\r\n\r\n                        Soul Guesthouse（灵魂旅馆）</br>\r\n\r\n                        位于华欣中心区域的一间旅馆，距离华欣夜市仅有两分钟的路程，步行六分钟便可到达海滩，距离华欣钟楼更是仅有100m的距离。酒店干净整洁，并且自带酒吧。</br>\r\n\r\n                        G Hua Hin Resort & Mall（G华欣度假酒店及购物中心）</br>\r\n\r\n                        舒适的客房拥有优雅的现代内饰和中性色调的墙壁，距离华欣海滩仅200米，是一处性价比极高的华欣度假酒店。</br>\r\n\r\n\r\n\r\n                        泰国节庆</br>\r\n\r\n                        万佛节</br>\r\n\r\n                        万佛节（Makha Bucha）泰国的传统佛教节日，为了纪念佛祖信徒对于佛祖的信仰与尊敬，在每年泰历三月十五日举行。万佛节当天的活动包括：清晨僧侣行善；下午聆听诵经讲道；傍晚僧侣约定时刻鸣钟集合，举行礼佛仪式；并在全国各地悬挂国旗。</br>\r\n\r\n                        时间：每年泰历三月十五（闰年泰历四月十五日）</br>\r\n\r\n                        泼水节</br>\r\n\r\n                        又称宋干节（Songkra）n，也是泰国新年。泰国泼水节代表着清除所有的邪恶、不幸和罪恶，并怀着一切美好和纯净开始新的一年。一年一度的泼水节就像中国新年一样热闹非凡，在曼谷会举行大型庆典及各项庆祝活动。大街小巷中所有人都忙着泼水，互道恭喜及祝福，尤其在炎热的天气下，淋一身湿反而更能消暑。推荐到曼谷著名的小街去玩水，如Kaosarn Road、Silom Road。</br>\r\n\r\n                        时间：每年4月13日，历时三天。</br>\r\n\r\n                        佛诞节</br>\r\n\r\n                        尽管佛祖诞生、悟道、涅盘的年份各异，但日期却相同，都是发生在泰历六月十五日。其节庆活动包括：佛教徒须于清晨前往佛寺与僧侣吃斋布施，聆听高僧传经讲道；民众捧香烛鲜花参加佛寺的巡烛礼；各处悬挂国旗。</br>\r\n\r\n                        时间：每年泰历六月十五（闰年泰历七月十五）</br>\r\n\r\n                        春耕节</br>\r\n\r\n                        每年五月正值稻米播种季节，皇室会在皇家田举行插秧播种大典。参与这项皇家盛会的人们，穿著色彩鲜艳的衣服，分别举行不同的仪式，藉此祈求来年能够丰收，是泰国传统节日之一。</br>\r\n\r\n                        时间：每年5月某吉日，由国王选定。</br>\r\n\r\n                        三宝节</br>\r\n\r\n                        泰国守夏节前一日，因这一天是佛祖成道后首次讲道的日子、有了第一个佛门弟子的日子、世上出现了第一个和尚的日子，是佛教“三宝”（佛、法僧）都齐备的日子而得名。当天全国佛教徒、各佛寺届时都做仪式，如守戒、听经、诵经、讲道、巡烛等。</br>\r\n\r\n                        时间：泰历八月十五</br>\r\n\r\n                        守夏节</br>\r\n\r\n                        泰历八月十六日，标志着佛教斋期开始，历时三个月（泰历八月十六日至十一月十五日），守夏节结束之日称“解夏节”。在此期间，僧侣均驻守在寺庙中不外出。</br>\r\n\r\n                        时间：每年泰历八月十六</br>\r\n\r\n                        兰娜赛舟</br>\r\n\r\n                        十月是兴奋刺激的兰娜赛舟的月份。比赛时，色彩缤纷的船艇互相斗智斗力。</br>\r\n\r\n                        时间：每年十月</br>\r\n\r\n                        水灯节</br>\r\n\r\n                        水灯节是泰国的主要节日，亦是泰国民间最热闹、最富诗意的传统节日，不亚于泼水节，在民间流行甚广。一般民众自行制作水灯，点缀以花、烛，然后漂放在池河中，寄托对滋润万物的水精灵的感谢之情，同时也希望所有的罪恶和污秽能够顺水漂走。水灯节的夜晚，月圆如盘，风清若丝，江河湖溪，漂满万盏水灯，烛光与笑脸明月相辉映，充满诗情画意。</br>\r\n\r\n                        时间：每年泰历十二月十五</br>\r\n\r\n                        万寿节</br>\r\n\r\n                        泰王蒲美蓬陛下诞生于1927年12月5日，于1946年6月9日继承王业，成为查库里王朝第九世君王，故定12月5日为万寿节，也为泰国的父亲节。当天的节日活动有：各处悬挂国旗；举行佛教仪式；吃斋行善；恭祝圣寿；举办福利事业活动等。</br>\r\n\r\n                        时间：每年12月5日</br>', '', '', '');
INSERT INTO `fingerpost_details` VALUES ('5', '', '', '', '', '实用信息', '签证</br>\r\n\r\n                        泰国签证为纸签及落地签，纸签签证流程较为简单，准备好有效的护照及其他资料即可办理，也可以委托具有资质的旅行社代办；落地签是泰国政府推出的签证政策，游客可以持空白护照抵达泰国后进行签证，自2016年9月27日起，落地签费用为2000泰铢，允许停留15天。</br>\r\n\r\n                        时间</br>\r\n\r\n                        泰国位于东7区，与世界标准时间相差7个小时，与北京时间相差一小时。</br>\r\n\r\n                        货币</br>\r\n\r\n                        泰国的官方货币为泰铢，缩写为THB，读音为“巴”，中国人民币兑泰铢约为1:5.2（2016年9月）</br>\r\n\r\n                        插头</br>\r\n\r\n                        泰国用的是德标插座，电压为220伏特，与中国一致。</br>\r\n\r\n                        天气</br>\r\n\r\n                        泰国属于热带气候，四季都是夏天，平均气温在20-31摄氏度之间，每年6月-10月为当地雨季。无论是否是雨季前往，你都应该准备雨具以应对当地多变的天气。</br>', '', '', '');
INSERT INTO `fingerpost_details` VALUES ('6', '', '', '', '', '声明', '《北极燕鸥户外指南+》由北极燕鸥用户提供最新资讯，经编辑整理而成，版权归磨房所有，转载请注明出处。本指南仅供参考，版权方及编辑不承担一切直接或间接的责任。如果有任何问题，请联系editor@doyouhike.net。', '', '', '');
INSERT INTO `fingerpost_details` VALUES ('7', '', '', '', '', '更新记录', '  2017年06月08日：曼谷及周边 · 城市探索指南上线。', '', '', '');

-- ----------------------------
-- Table structure for fingerpost_index
-- ----------------------------
DROP TABLE IF EXISTS `fingerpost_index`;
CREATE TABLE `fingerpost_index` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fp_name` varchar(20) NOT NULL COMMENT '名字',
  `fp_img` varchar(255) NOT NULL COMMENT '图片',
  `fp_banner1` varchar(255) NOT NULL COMMENT '轮播图1',
  `fp_banner2` varchar(255) NOT NULL COMMENT '轮播图2',
  `fp_banner3` varchar(255) NOT NULL COMMENT '轮播图3',
  `fp_banner4` varchar(255) NOT NULL COMMENT '轮播图4',
  `fp_scrolling` varchar(20) NOT NULL COMMENT '文字滚动',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fingerpost_index
-- ----------------------------
INSERT INTO `fingerpost_index` VALUES ('1', '曼谷及周边 · 搜索指南', '6.jpg', '31.jpg', '38.jpg', '37.jpg', '35.jpg', '当雄');
INSERT INTO `fingerpost_index` VALUES ('2', '新西兰 · 徒步指南', '7.jpg', '', '', '', '', '三江源');
INSERT INTO `fingerpost_index` VALUES ('3', '年保玉则 · 徒步指南', '8.jpg', '', '', '', '', '可可西里');
INSERT INTO `fingerpost_index` VALUES ('4', '阿玛尼卿 · 徒步指南', '9.jpg', '', '', '', '', '青海湖');
INSERT INTO `fingerpost_index` VALUES ('5', '马尔代夫 · 潜水指南', '10.jpg', '', '', '', '', '拉萨');
INSERT INTO `fingerpost_index` VALUES ('6', '亚庇 · 潜水指南', '12.jpg', '', '', '', '', '玉珠峰');
INSERT INTO `fingerpost_index` VALUES ('7', '美娜多 · 潜水指南', '13.jpg', '', '', '', '', '香港麦理浩径第一段徒步');
INSERT INTO `fingerpost_index` VALUES ('8', '阿尼洛 · 潜水指南', '14.jpg', '', '', '', '', '香港凤凰径徒步');
INSERT INTO `fingerpost_index` VALUES ('9', '新西兰 · 骑行指南', '15.jpg', '', '', '', '', '长白山');
INSERT INTO `fingerpost_index` VALUES ('10', '台湾环岛 · 骑行指南', '16.jpg', '', '', '', '', '临江');
INSERT INTO `fingerpost_index` VALUES ('11', '川藏线 · 骑行指南', '17.jpg', '', '', '', '', '狮子山');
INSERT INTO `fingerpost_index` VALUES ('12', '青海湖 · 骑行指南', '18.jpg', '', '', '', '', '八仙岭');
INSERT INTO `fingerpost_index` VALUES ('13', '新西兰 · 自驾指南', '19.jpg', '', '', '', '', '船湾');
INSERT INTO `fingerpost_index` VALUES ('14', '山野 · 安全指南', '20.jpg', '', '', '', '', '江苏·扬州');
INSERT INTO `fingerpost_index` VALUES ('15', '溯溪 · 安全指南', '21.jpg', '', '', '', '', '江苏·南京');
INSERT INTO `fingerpost_index` VALUES ('16', '骑行 · 安全指南', '22.jpg', '', '', '', '', '浙江·绍兴');
INSERT INTO `fingerpost_index` VALUES ('17', '', '23.jpg', '', '', '', '', '浙江·杭州');
INSERT INTO `fingerpost_index` VALUES ('18', '', '24.jpg', '', '', '', '', '');
INSERT INTO `fingerpost_index` VALUES ('19', '', '25.jpg', '', '', '', '', '');
INSERT INTO `fingerpost_index` VALUES ('20', '', '26.jpg', '', '', '', '', '');

-- ----------------------------
-- Table structure for index
-- ----------------------------
DROP TABLE IF EXISTS `index`;
CREATE TABLE `index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner1` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner2` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner3` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner4` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner5` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner1_txt1` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner1_txt2` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner2_txt1` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner2_txt2` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner3_txt1` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner3_txt2` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner4_txt1` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner4_txt2` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner5_txt1` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `banner5_txt2` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of index
-- ----------------------------
INSERT INTO `index` VALUES ('1', 'banner1.jpg', 'banner2.jpg', 'banner3.jpg', 'banner4.jpg', 'banner5.jpg', '异想韩国探索首尔、釜山、江原道新旅程', '是时候开发韩国小众有趣的玩法', '异想韩国探索首尔、釜山、江原道新旅程', '是时候开发韩国小众有趣的玩法', '异想韩国探索首尔、釜山、江原道新旅程', '是时候开发韩国小众有趣的玩法', '异想韩国探索首尔、釜山、江原道新旅程', '是时候开发韩国小众有趣的玩法', '异想韩国探索首尔、釜山、江原道新旅程', '是时候开发韩国小众有趣的玩法');

-- ----------------------------
-- Table structure for trip_banner
-- ----------------------------
DROP TABLE IF EXISTS `trip_banner`;
CREATE TABLE `trip_banner` (
  `id` int(11) NOT NULL,
  `img1` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `img2` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `img3` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of trip_banner
-- ----------------------------
INSERT INTO `trip_banner` VALUES ('0', 'lbt1.jpg', 'lbt2.jpg', 'lbt3.jpg');

-- ----------------------------
-- Table structure for trip_planning
-- ----------------------------
DROP TABLE IF EXISTS `trip_planning`;
CREATE TABLE `trip_planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tp_name` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '路线名称',
  `tp_jianjie` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '路线简介',
  `tp_mudidi` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '所属目的地',
  `tp_jijie` varchar(8) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '最佳季节',
  `tp_shichang` varchar(5) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '活动时长',
  `tp_nandu` varchar(5) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '路线难度',
  `tp_jiaotong` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '交通信息',
  `tp_tishi` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '重要提示',
  `tp_img1` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `tp_img2` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `tp_tese` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '特色标签',
  `tp_daolu` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '道路状况',
  `tp_zp1` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '照片',
  `tp_zp2` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '照片',
  `tp_zp3` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '照片',
  `tp_zp4` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '照片',
  `tp_licheng` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '里程',
  `tp_jianyi` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '建议路线',
  `tp_type` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '所属类型',
  `tp_bigmap` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '大地图',
  `tp_min` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '最低海拔',
  `tp_max` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '最高海拔',
  `tp_sheshi` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '营地设施',
  `tp_yingwei` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '营位数量',
  `tp_dingwei` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `tp_status` int(2) unsigned DEFAULT '0',
  `tp_create` varchar(255) COLLATE utf8mb4_bin DEFAULT '1234',
  `tp_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of trip_planning
-- ----------------------------
INSERT INTO `trip_planning` VALUES ('1', '深圳塘朗山穿越徒步', '  广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路。\r\n\r\n', '广州', '常年水源', '0.5', '休闲', '  骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇去\r\n\r\n', 'index/trip_planning1', 'shenzhen.jpg', '城市休闲4+2', '公路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', '  乳源县-G323-S258-大布镇-广东大峡谷-原路返回', '山野穿行', '', '20', '50', '卫生间淋浴间', '1-5个', 'map.png', '1', '1234', '2018-07-25 15:43:43');
INSERT INTO `trip_planning` VALUES ('2', '广州牛帽线徒步', ' 广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路。\r\n', '广州', '烧烤区', '0.5', '休闲', ' 骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇建', 'index/trip_planning1', 'gznmxtb.jpg', '', '山野', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', ' ', '山野穿行', '', '11', '11', '', '1-5个', 'map.png', '1', '1234', '2018-07-25 15:44:35');
INSERT INTO `trip_planning` VALUES ('3', '深圳华侨城燕晗山跑步', '广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路。\r\n\r\n', '广州', '春/夏/秋', '2', '休闲', '骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇去\r\n', 'index/trip_planning1', 'yhspb.jpg', '', '公路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', '', '自驾 ', '', '', '', '', '', 'map.png', '1', '1234', '2018-07-18 15:35:54');
INSERT INTO `trip_planning` VALUES ('4', '广州大学城外环骑行', '广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路。\r\n\r\n', '广州', '春/夏/秋', '2', '标准', '骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇去\r\n\r\n', 'index/trip_planning1', 'gzdxc.jpg', '', '公路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', '', '温泉', '', '', '', '', '', 'map.png', '1', '1234', '2018-07-18 15:35:54');
INSERT INTO `trip_planning` VALUES ('5', '上海陆家嘴骑行', '广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路。\r\n\r\n', '广州', '春/夏/秋', '2', '标准', '骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇去', 'index/trip_planning1 ', 'shljzqx.jpg', '', '公路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', '', '漂流', '', '', '', '', '', 'map.png', '1', '1234', '2018-07-18 15:35:54');
INSERT INTO `trip_planning` VALUES ('6', '上海崇明岛环岛骑行', '\r\n\r\n广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路', '广州', '春/夏/秋', '2', '标准', '骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇去', 'index/trip_planning1 ', 'shcmdhd.jpg', '', '公路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', '', '漂流', '', '', '', '', '', 'map.png', '1', '1234', '2018-07-18 15:35:54');
INSERT INTO `trip_planning` VALUES ('7', '北京西灵山穿越', '广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路', '广州', '春/夏/秋', '2', '挑战', '骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇去', 'index/trip_planning1 ', 'bj1.jpg', '', '山野', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', '', '溯溪', '', '', '', '', '', 'map.png', '1', '1234', '2018-07-18 15:35:54');
INSERT INTO `trip_planning` VALUES ('8', '上海世纪公园-浦明路', '广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路', '北京', '春/夏/秋', '2', '标准', '骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇去', 'index/trip_planning1 ', 'yhspb.jpg', '', '', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '', '', '自驾 ', '', '', '', '', '', 'map.png', '1', '1234', '2018-07-20 13:22:53');
INSERT INTO `trip_planning` VALUES ('10', '杭州盛家坞-大岩山-欢潭村徒步', '      大岩山南与诸暨相连，北跟绍兴接壤，海拔485米。远看，峰峰相连、绵绵不绝；近观，碧水秀山、鸟语花香。这条线路从盛家坞出发，经岭下沈村登顶大雁山，下山往白水村方向，最后到达欢潭村，全长约11公里。', '北京', '春/夏/秋/冬', '0.5', '休闲', '      dsgdsg', 'dsgdgdsg', 'index/trip_planning1', 'hz1.jpg', '山野', '阶梯路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '11.35', '      dsgdg', '山野穿行', '', '11', '11', '卫生间,淋浴间,烧烤', '1-5个', 'map.png', '1', '1234', '2018-07-25 16:38:52');
INSERT INTO `trip_planning` VALUES ('11', '杭州环西湖徒步', '“上有天堂，下有苏杭”，杭州西湖古称“钱塘湖”，又名“西子湖”，为江南三大名湖之一。漫步在最经典的西湖景区，行走的时间可以自己控制，因为这不仅是一种户外运动更是一种心灵与视觉上的享受!它的山水风光，譬如断桥、宝石山、苏堤、曲院风荷等，它的四季风景，都值得我们一一细品，大约5-6小时能完成，若想深度游玩，一天怕也是不够的。', '北京', '春/夏/秋/冬', '1', '休闲', '少年宫公交站，就在西湖边，下车便开始步行。', '最佳季节：春秋冬季为宜。每年的3到5月份，阳光明媚，天气晴朗；9、10月份，秋高气爽，万里无云。冬季时节，断桥残雪，素裹西湖，别有情趣。\r\n', 'index/trip_planning1', 'hz4.jpg', '远足', '水泥路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '13.86', '少年宫-北山路-断桥-宝石山-苏堤-南山路-湖滨路-少年宫。', '健行', '', '1 ', '71 ', '', '', 'map.png', '1', '1234', '2018-07-25 18:58:33');
INSERT INTO `trip_planning` VALUES ('12', '杭州千岛湖自驾', '进入千岛湖区，马上会感受到一份不一样的宁静，阳光下湛蓝的湖水非常漂亮，小船在湖面划过，有点“孤舟蓑笠翁，独钓寒江雪”的感觉。 围绕环千岛湖行驶一圈，会看到江埠大桥、汾口武强溪、芹川古居、龙川湾景区都在这周围，天空湛蓝而透明，心情也随之莫名好的出奇。 而附近的古村落，像兰溪长乐古村、诸葛八卦村，地下长河、严子陵钓台，子胥渡，都是充满了历史典故与人文气息的地方，带着孩子一起走走，讲讲那些典故，寓教于乐，是多么惬意的一件事啊。', '上海', '春/夏/秋/冬', '2', '休闲', '自驾路线：\r\n一、上海出发，走沪闵路高速-G60-杭州绕城高速-杭千高速-千岛湖。\r\n二、宁波出发，S318-大隐互通-杭甬高速公路-杭金衢高速-杭州绕城高速-长深高速-杭新景高速-千岛湖。', '建议若想感受不一样的千岛湖，尽量避免国家法定假期前往，因各大景点实在人数太多，性价比低。同时，杭州绕城高速大型车比较多，需注意避开高峰期。\r\n', 'index/trip_planning1', 'hz5.jpg', '滨海/摄影/4+2', '公路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '169.34', '最佳季节：9月-11月，刚好秋高气爽，能见度也好，平均气温12-18℃，雨少，空气不是一般的清新。', '自驾', '', '', '', '', '', 'map.png', '1', '1234', '2018-07-25 19:02:14');
INSERT INTO `trip_planning` VALUES ('13', '杭州千岛湖环线骑行', '千岛湖，国家5A级景区，环着千岛湖骑一圈大概170多公里，沿途会经过很多乡村，空气非常好。为了更好地欣赏到千岛湖的美景，建议分2天骑，这样既可以比较休闲地领略到千岛湖风光，人又不会太累，一举两得，当然，拉练性质的骑友可以试试当天完成。', '上海', '春/夏/秋/冬', '2', '标准', '如果是坐汽车到了千岛湖再骑行的话有三种方案：\r\n1，杭州黄龙集散中心直达千岛湖阳光车站，票价每人38元。\r\n2，杭州钱江市场直达千岛湖阳光车站，票价38元。\r\n3，杭州西站到千岛湖客运中心下转8路公交车到千岛湖阳光车站，票价61元。如果是4+2的骑友可以直接导航到千岛湖国家森林公园，走杭新景高速到千岛湖收费站下，然后走S303到千岛湖景区，景区内有很多停车场，这个可以根据个人喜好选择。', '景区内有餐馆和酒店，就是价格会相对较高，如无必要可以先往北骑一段，到一些乡村里就餐。\r\n', 'index/trip_planning1', 'hz6.jpg', '城市', '绿道/乡道/县道', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '176.94', '', '骑行', '', '94 ', '232 ', '', '', 'map.png', '1', '1234', '2018-07-25 19:05:32');
INSERT INTO `trip_planning` VALUES ('14', '杭州东西天目七尖连穿', '天目山雄踞黄山与东海之间，东西两峰遥相对峙。东峰大仙顶海拔1480米，西峰仙人顶海拔1506米。两峰之巅各天成一池。宛若双眸仰望苍穹，因而得名。东西天目风景优美，径流及山脊清晰，并集中了昭明禅寺、龙王峰、浦江源、西天目风景区、天目石谷等旅游景区， 是一条理想的徒步穿越路线，也可以称为七尖连穿的山脊穿越。 (七尖为：西天目-气象站、龙王山、药王峰、千亩田略过、茅草尖、仰天坪、仙人台、东天目-大仙顶) 线路以当地村民常年走的或已经废弃的小道，山径为主，兼有防火带、公路、机耕路等。此线路难度非常大，全长大约35公里，一般需要2天穿越。', '上海', '春/秋', '2', '自虐', '包车前往梅家头。', '难度很大，不建议新人前往。进入景区需要买门票。\r\n', 'index/trip_planning1', 'hz3.jpg', '千米山', '', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '34.22', '线路行程 :梅家村-大仙顶-告岭头-大洋山-仰天坪-茅草山-桐杭岗-千亩田-药王峰-龙王山-下西天目到停车场', '山野穿行', '', '277 ', '1487', '', '', 'map.png', '0', '1234', '2018-07-20 13:23:23');
INSERT INTO `trip_planning` VALUES ('15', '杭州安吉龙王山登顶穿越', '安吉龙王山，主峰1587.4米，是浙北、华东长江三角洲地区第一高峰。龙王山富有原始森林、峰岩涧溪、碧潭等自然景观，空气清新、水体纯净、环境幽雅。这条线路从东岗护林点出发，经过千亩田、乱石林、绕过药王峰到达龙王山顶。登顶大约需要5个小时左右。最后沿原路返回，全程约17公里左右。\r\n\r\n', '上海', '夏/秋', '1', '标准', '', '', 'index/trip_planning1', 'hz7.jpg', '千米山', '', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '17.72', '', '山野穿越', '', '990', '1490', '', '', 'map.png', '0', '1234', '2018-07-20 13:23:31');
INSERT INTO `trip_planning` VALUES ('16', '富阳新二村-毛石古道-上官徒步', '毛石古道又称“石梯登山古道”，全长4.2公里，位于富阳常绿镇黄弹村石梯山(海拔590米)，是个避暑纳凉的好去处。这里风景极好，有美丽的水库、潺潺的小溪、奔流的瀑布，更有山花烂漫、竹林幽幽。 这条线路从湖源李家出发，延小溪而行。到钟塔开始上山，前方就是一片竹林，毛石古道就在竹林中蜿蜒。走不多久，便到了野猫岭，之后沿路下山，一路野花芳香，走在茶树、毛竹中十分惬意！到了石梯村沿水泥路下山，不久就看到陡峭的石壁。最后里黄弹、斜黄村到达终点上官乡，全长约16公里。', '深圳', '春/夏/秋/冬', '1', '标准', '在终点可以直接上官车站坐车离去。', '', 'index/trip_planning1', 'hz8.jpg', '山野', '古道', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '16.55', '', '健行', '', '159', '730', '', '', 'map.png', '0', '1234', '2018-07-20 13:23:35');
INSERT INTO `trip_planning` VALUES ('17', '深圳梧桐山泰山涧穿越', '梧桐山村-------梧桐山水库-----泰山涧（台阶路）-------葫芦池-----梧桐顶 。 一路林荫涧清，鸟语花香，休闲活动个人推荐此线路。旅游旺季的节假日，游人较多。\r\n', '深圳', '春/夏/秋/冬', '1', '标准', '公交211', '', 'index/trip_planning1', 'sz3.jpg', '远足', '阶梯路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '13.28', '', '健行', '', '82', '733', '', '', 'map.png', '1', '1234', '2018-07-25 10:19:51');
INSERT INTO `trip_planning` VALUES ('18', '深圳大浪片区绿道骑行', '要问深圳关内关外所有为建绿道而修建的绿道中，哪一条最好，那么应首推大浪绿道。它起始于茜坑大坝，终止于蝴蝶谷（或者观光路隧道口）。全段路面铺设质量高，配套设施完善。道路高低起伏，有相当挑战性，也适合休闲慢骑。该片区越野路相对弱势。小路不少，大都石块多很难骑。有一条防火林西起鹅颈水库大坝，东至大水坑水库附近，穿越整片区域。它常被当作越野路使唤，有很舒适的林间环境，但是少不了陡坡折腾。最好的越野路在鹅颈水库附近。', '深圳', '春/夏/秋/冬', '1', '标准', '观澜大道-田茜路-茜坑水库', '禾搓洞水库两边越野路无法环骑。', 'index/trip_planning1', 'sz4.jpg', '城市/山海风光/4+2', '绿道', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '15.90', '', '骑行', '', '49', '187', '', '', 'map.png', '1', '1234', '2018-07-25 19:06:04');
INSERT INTO `trip_planning` VALUES ('19', '深圳凤凰山环线穿越', '凤凰山环线，有山脊、绿岛、湖光、农田，风景优美。凤凰山海拔376米，位于深圳市宝安区福永镇凤凰村东面的山系。凤凰山有两条石阶登山道（沿溪步道，步福古道）和盘山公路上山，沿石阶登山道大约半个多小时能到庙宇平台（凤凰古庙）。', '深圳', '春/夏/秋/冬', '1', '标准', '公交到凤凰山', '可自由选取一段行走', 'index/trip_planning1', 'sz5.jpg', '轻装', '', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '59', '', '山野穿越', '', '8', '309', '', '', null, '0', '1234', '2018-07-20 13:23:45');
INSERT INTO `trip_planning` VALUES ('20', '深圳龙岗大运中心公园绿道徒步', '龙岗大运公园内的绿道，是省绿道二号线的一部分。 环水库，风景和空气质量尚不错。 绿道7公里，适合骑行或徒步，全程无压力无难度。', '深圳', '春/夏/秋/冬', '0.5', '休闲', '大运中心-公交车站，途经车次：353路; 365路; 802路; 839路; m315路; m318路; m367路; m386路; m447路; 高峰专线33路; 高峰专线35路; 高峰专线44路; 沙井客运中心专线; 沙井中心客运站专线。', '', 'index/trip_planning1', 'sz6.jpg', '公园/绿道', '绿道/石板路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '7.85', '', '健行', '', '44', '133', '', '', null, '0', '1234', '2018-07-20 13:23:47');
INSERT INTO `trip_planning` VALUES ('21', '深圳西丽水库-西丽果场骑行', '“山不在高有仙则名，水不在深有龙则灵”，有水，生活就有了灵性。在休闲的周末骑上单车，围绕着西丽水库骑行，静悠悠湖水宽阔延绵，偶尔会意外闯入几只飞鸟，惶惶的飞起，又远远的落下。湖边生长着茂盛的各种植物，呼吸一口新鲜的空气，视野里满是绿色。线路长度约22公里，轻轻松松的小越野路，小折都能跑。', '深圳', '春/夏/秋/冬', '0.5', '休闲', '\r\n', '西丽二线拓宽工程进行中，西丽水库新坝建造中，水库铁网封布，以后环水库骑车的机会可能不多了。\r\n', 'index/trip_planning1', 'sz7.jpg', '城市休闲', '绿道/水泥路/沥青路', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '21.92', '', '骑行', '', '8', '114', '', '', null, '0', '1234', '2018-07-20 13:23:50');
INSERT INTO `trip_planning` VALUES ('22', '深圳红树林-深圳湾海边徒步', '深圳湾-红树林这一整条海岸线可以说是深圳人的“后花园“，每到夜晚，来这里骑车、跑步、健行的人很多，可以说是深圳人民皆知乃至全国闻名的自然景观。这里的真正景色实际上既不是被称为“活化石”的红树林，也不只是蔚蓝的海湾，而是体验当一群群海鸥、白鹭翱翔于碧海蓝天时的天地之辽阔！这里更有12个不同风格的主题公园，各具特色，是磨房户外线路中非常经典的徒步线路。如果你是第一次来深圳，这是个非常不错的选择哟！', '广州', '春/夏/秋/冬', '1', '休闲', '【公交站】红树林、滨海沙河西立交、日出剧场、滨海深湾立交、滨海中，下站往海边走即是绿道。', '中途下撒点非常多，交通便利，有停车场。', 'ndex/trip_planning1', 'sz8.jpg', '特色', '绿道', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '10.13', '', '健行', '', '', '', '', '', null, '0', '1234', '2018-07-20 13:23:57');
INSERT INTO `trip_planning` VALUES ('23', '广州牛帽线徒步', '广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路。\r\n', '广州', '春/夏/秋', '2', '标准', '骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇建', 'index/trip_planning1', 'gznmxtb.jpg', '', '山野', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', '', '滑雪', '', '', '', '卫生间淋浴间', '1-5个', null, '0', '1234', '2018-07-20 13:24:00');
INSERT INTO `trip_planning` VALUES ('24', '广州牛帽线徒步', '广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路。\r\n', '广州', '春/夏/秋', '2', '标准', '骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇建', 'index/trip_planning1', 'gznmxtb.jpg', '', '山野', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', '', '温泉', '', '', '', '', '', null, '0', '1234', '2018-07-20 13:24:03');
INSERT INTO `trip_planning` VALUES ('25', '广州牛帽线徒步', '广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路。\r\n', '广州', '春/夏/秋', '2', '标准', '骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇建', 'index/trip_planning1', 'gznmxtb.jpg', '', '山野', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', '', '自驾 ', '', '', '', '', '', null, '0', '1234', '2018-07-20 13:24:05');
INSERT INTO `trip_planning` VALUES ('28', '广州牛帽线徒步', '广东大峡谷，作为广东第一大峡谷来说，是非常值得去看一看的，但并不是完全免费，免费的地方观景台不是太好，要想看的全面最好还是乖乖花钱买门票。再说路线，这条路线从韶关乳源开始骑行至广东大峡谷景区，沿途有不断的上下坡，对于新人来说也许是一个挑战，但无论新人或者老人都是不会拒绝“美色”的吧？综上，这是一条不错的骑行线路。\r\n', '广州', '春/夏/秋', '2', '标准', '骑友们需要先到乳源县城，然后再开始骑行，可沿原路返回。', '大峡谷景区是要门票的，65一张。如果不想花门票钱，也可以就在外面看看，也能看到美景，另外，景区周围食宿价格较高，建议到远一点的大布镇建', 'index/trip_planning1', 'gznmxtb.jpg', '', '山野', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', '35', '', '滑雪', '', '', '', '', '', null, '1', '1234', '2018-07-20 13:24:13');
INSERT INTO `trip_planning` VALUES ('32', '北京', '未确认无群若', '北京', '春/夏/秋/冬', '5', '自虐', '呴', '染发膏', null, '20180726\\5c6e45cbd75ca51c87b2685c220fb178.jpg', '撒范德萨', '公路', null, null, null, null, '112', '个人', '山野穿行', null, '12', '12', '烧烤区,商店,常年水', '10-20个', null, '0', '123456', '2018-07-26 09:10:35');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  `phone` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT '手机号',
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT '邮箱',
  `address` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT '地址',
  `sex` varchar(6) COLLATE utf8mb4_bin NOT NULL COMMENT '性别',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `picture` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('47', '12345', '12345', '18810636797', '1216721369@qq.com', '1111', '男', '2018-07-31 15:20:32', 'd6\\82a45b60aff172e12ec399e8e15cac.jpeg');
