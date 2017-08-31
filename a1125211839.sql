/*
Navicat MySQL Data Transfer

Source Server         : myweb
Source Server Version : 50546
Source Host           : 103.1.224.124:3306
Source Database       : a1125211839

Target Server Type    : MYSQL
Target Server Version : 50546
File Encoding         : 65001

Date: 2017-08-09 17:51:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `yb_admin`;
CREATE TABLE `yb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `tname` varchar(30) DEFAULT NULL,
  `logtime` int(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `group` varchar(100) DEFAULT NULL,
  `scoresid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `yb_admin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `yb_scores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yb_admin
-- ----------------------------
INSERT INTO `yb_admin` VALUES ('2', '1001', '123', '菜鸟', '沃克', null, null, null, '超级管理员', '1');

-- ----------------------------
-- Table structure for `yb_admin_menus`
-- ----------------------------
DROP TABLE IF EXISTS `yb_admin_menus`;
CREATE TABLE `yb_admin_menus` (
  `level` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `url` varchar(300) DEFAULT NULL,
  `parentid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yb_admin_menus
-- ----------------------------
INSERT INTO `yb_admin_menus` VALUES ('1', '1', '文章管理菜单', '#', '-1');
INSERT INTO `yb_admin_menus` VALUES ('2', '2', '资讯管理', 'index.php/Admin/Admin/searchArticle/channel_id/1', '1');
INSERT INTO `yb_admin_menus` VALUES ('2', '3', 'WEB文章管理', 'index.php/Admin/Admin/searchArticle/channel_id/2', '1');
INSERT INTO `yb_admin_menus` VALUES ('2', '4', 'PHP文章管理', 'index.php/Admin/Admin/searchArticle/channel_id/3', '1');
INSERT INTO `yb_admin_menus` VALUES ('2', '5', '留言板管理', 'index.php/Admin/Admin/searchArticle/channel_id/4', '1');
INSERT INTO `yb_admin_menus` VALUES ('2', '6', '用户管理', '#', '10');
INSERT INTO `yb_admin_menus` VALUES ('1', '7', '网站信息管理', '#', '-1');
INSERT INTO `yb_admin_menus` VALUES ('1', '8', '其他内容管理', '#', '-1');
INSERT INTO `yb_admin_menus` VALUES ('2', '9', '图片管理', 'index.php/Admin/Admin/searchArticle/channel_id/5', '1');
INSERT INTO `yb_admin_menus` VALUES ('1', '10', '用户管理菜单', '#', '-1');
INSERT INTO `yb_admin_menus` VALUES ('2', '11', '管理员管理', '#', '10');

-- ----------------------------
-- Table structure for `yb_article`
-- ----------------------------
DROP TABLE IF EXISTS `yb_article`;
CREATE TABLE `yb_article` (
  `auther_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(30) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text,
  `url` varchar(300) DEFAULT NULL,
  `summary` varchar(100) DEFAULT NULL,
  `img_url` varchar(300) DEFAULT NULL,
  `channel_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yb_article
-- ----------------------------
INSERT INTO `yb_article` VALUES (null, '1', 'admin', '本站服务器已经更换，数据加载问题已经解决！', '2017-06-15 10:42:03', '本次服务器更换主要功能有：空间更大，更稳定，服务器脚本语言版本可以自由切换等...', null, '服务器重新选用，功能、空间更强大！', '', '1', '0');
INSERT INTO `yb_article` VALUES (null, '2', 'admin', '登录功能暂未对用户开放，目前只有管理员可以使用！', '2017-06-15 10:42:13', '为了方便管理各个频道的信息，所以率先实现管理员的后台登录；用户注册登录功能敬请期待！', null, '管理员登录已经实现，用户登录正在开发中...', '', '1', '0');
INSERT INTO `yb_article` VALUES (null, '3', '菜鸟', '感谢站主提供的资料', '2017-06-15 10:43:49', '无意之中看到站主的网页，于是自己有了做个人网站的想法，但是制作的过程中遇到很多问题，对亏了站主的大力帮助，我的网站下个月就要正式上线啦！', null, '用户菜鸟的留言', null, '4', '0');
INSERT INTO `yb_article` VALUES (null, '7', '菜鸟', '数据库表结构重建', '2017-06-15 00:00:00', '本站数据库结构已经优化，后台管理功能正在完善；前台页面第一版本即将完成！', null, '本站数据库表结构重建，后台功能正在加紧建设...', '', '1', '0');
INSERT INTO `yb_article` VALUES (null, '8', '菜鸟', '留言标题', '2017-06-15 00:00:00', '留言内容', null, '摘要', '', '4', '0');
INSERT INTO `yb_article` VALUES (null, '9', '菜鸟', 'WEB页面以及后台已经实现啦', '2017-06-15 00:00:00', '页面和后台功能已经实现，后续将会是前端知识、技巧等文章的更新！', null, '页面和后台功能已经实现', '', '2', '0');
INSERT INTO `yb_article` VALUES (null, '10', '菜鸟', 'PHP页面的前端和后台已经实现', '2017-06-15 00:00:00', 'php内容', null, '页面和后台功能已经实现', '/Uploads/2017-07-05/1499265547_766631963.gif', '3', null);
INSERT INTO `yb_article` VALUES (null, '11', '菜鸟', '本站的四个频道后台功能已经初步完成啦！', '2017-06-15 15:24:00', '资讯中心、WEB前端、PHP学习、留言板（展示）频道的前台及后台功能已经初步实现。接下来要做的是一些前台页面的美化，然后是其他后台功能的增加和完善！', null, '本站的四个频道后台功能已经初步完成啦', '', '1', null);
INSERT INTO `yb_article` VALUES (null, '13', '菜鸟', '关于网站内容的更新问题', '2017-07-02 21:30:01', '站主周一到周五是上班时间，晚上回家之后完成晚饭已经不早了，平时也会玩一会的游戏，所以网站建设主要是在周末。而整体的UI有很多敌方需要修改（谁能赐我一位设计师），但大的风格，框架不会改变。所以最近时间都主要是界面和结构的修改，文章更新不会有很多！', null, '大概讲一下更新的速度、内容等', '', '1', null);
INSERT INTO `yb_article` VALUES (null, '14', '菜鸟', '关于网站建设的进度', '2017-07-02 21:41:32', '最开始想的一套UI已经慢慢的被完全取缔，很多地方还会有所小改；而后台管理，最开始打算使用现成的CMS，后来还是决定自己慢慢的来做，具体功能参照当前流行的CMS功能（这是一个很大的工作量）；站主目前技术能力有限（贪玩），平时将会记录想到的问题，依次的实现！', null, '主要讲一下当前建设的进度和即将修改的功能', '', '1', null);
INSERT INTO `yb_article` VALUES (null, '15', '菜鸟', 'kind编辑器', '2017-07-04 11:07:16', 'kindediter是一款很好用的HTML在线编辑器！', null, 'kind', '/Uploads/2017-07-04/1499166238_834729729.jpg', '2', null);
INSERT INTO `yb_article` VALUES (null, '28', '菜鸟', '三角梅', '2017-07-04 16:07:32', '<span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\">光叶子花，别名：宝巾、簕杜鹃、小叶九重葛、三角花、紫三角、紫亚兰、三角梅，拉丁学名：Bougainvillea glabraChoisy</span><i>.</i><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\">紫荣莉科、</span><a target=\"_blank\" href=\"http://baike.baidu.com/item/%E5%8F%B6%E5%AD%90%E8%8A%B1%E5%B1%9E\">叶子花属</a><span style=\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\">藤状灌木。茎粗壮，枝下垂，无毛或疏生柔毛；刺腋生，长5-15毫米。叶片纸质，卵形或卵状披针形，喜温暖湿润气候，不耐寒，喜充足光照。品种多样，植株适应性强，不仅在南方地区广泛分布，在寒冷的北方也可栽培。原产巴西。我国南方栽植于庭院、公园，北方栽培于温室，是美丽的观赏植物。花入药，调和气血，治白带、调经。</span>', null, '宝巾、簕杜鹃、小叶九重葛、三角花、紫三角、紫亚兰、三角梅', '/Uploads/2017-07-04/1499158690_262241691.png', '1', null);
INSERT INTO `yb_article` VALUES (null, '29', '菜鸟', '2017年7月4日更新内容', '2017-07-04 18:07:35', '<p>\r\n	零零碎碎的算起来，今天更新的内容还是挺多的。\r\n</p>\r\n<p>\r\n	1.首先后台发布模块更新了kind编辑器，功能强大，能代码可视化编辑；\r\n</p>\r\n<p>\r\n	2.然后增加图片上传功能，发布文章可以上传图片；\r\n</p>\r\n<p>\r\n	3.留言页面的表单写好，验证和验证码待完成；\r\n</p>\r\n<p>\r\n	4.页面标题的图标能正常显示啦！\r\n</p>\r\n<p>\r\n	5.对网站的搜索优化了一下。\r\n</p>', null, '今天主要更新后台新闻发布页面的编辑器、图片上传、部分页面搜索优化、默认图片等...', '/Uploads/2017-07-04/1499165015_1928016533.jpg', '1', null);
INSERT INTO `yb_article` VALUES (null, '30', '菜鸟', '2017年7月12日更新内容', '2017-07-12 22:07:37', '<p>\r\n	1、当文章的原图片加载失败，默认的提示图片换新啦（美观）！\r\n</p>\r\n<p>\r\n	2、url地址中隐藏框架入口文件和模块名称，变得简洁了一些；\r\n</p>\r\n<p>\r\n	3、数据库个别表新增列；\r\n</p>\r\n<p>\r\n	4、调整部分前端界面、首页增加照片展示栏目！\r\n</p>', null, '', '/Uploads/2017-07-12/1499871544_1781330573.jpg', '1', null);
INSERT INTO `yb_article` VALUES (null, '31', '菜鸟', '2017年7月21日首页更新', '2017-07-21 10:07:07', '<p>\r\n	其实很早就想对首页改版了，但是本菜鸟设计真的是太差了，查看了很多网站，修改多次才得到现在的结果。这也只是雏形，以后会继续的增加修改首页内容。\r\n</p>\r\n<p>\r\n	使用bootstarp框架省去很多时间，棒棒哒！\r\n</p>', null, '本次对首页进行了较大的改革，页面更加大气，适应高分辨率屏幕...', '/Uploads/2017-07-21/1500604342_1877113764.jpg', '1', null);
INSERT INTO `yb_article` VALUES (null, '32', '南广轩主', '曾经的海贼王', '2017-07-26 08:07:42', '<p>\r\n	今天在地铁报纸上看到海贼王连载二十周年的专版，地铁上几个年龄相仿的同学都在阅读这篇文章，不仅感概。\r\n</p>\r\n<p>\r\n	这是一部我只看了两集就无法放下的作品，刚上高中那会儿，周末去网吧不玩游戏，不做其他的，就喜欢下载海贼到手机观看；而后大学终于补上了两年后的剧情，最难忘的是七水之都和顶上战争...\r\n</p>\r\n<p>\r\n	时光荏苒，如今已不复当年的热情，TV版也是追到明哥篇后没再继续，但是在我心中的动漫海贼排第二那就没有第一，陪我度过多年难忘时光，他让我不再懦弱，让我无由信心，让我认识友谊，认清梦想...\r\n</p>\r\n<p>\r\n	直到现在，我还记得索隆感受到鹰眼绝对性的强大之后<span>（咬牙）</span>：<strong>如果我现在放弃的话，那些誓言，约定，还有梦想都会消失不见，而我，再也不能回到这里..</strong>.\r\n</p>', null, '令人无法忘怀的热情', '/Uploads/2017-07-26/1501028410_1532935075.jpg', '1', null);
INSERT INTO `yb_article` VALUES (null, '35', '', '图片3', '2017-08-01 16:08:10', '图片测试3', null, '', '/Uploads/2017-08-01/1501576480_2101744398.jpg', '5', null);
INSERT INTO `yb_article` VALUES (null, '36', '', '猫咪大大', '2017-08-01 16:08:05', '我家一只小猫咪，勤抓老鼠讲卫生，他是家人好伙伴...', null, '', '/Uploads/2017-08-01/1501576841_85016210.jpg', '5', null);
INSERT INTO `yb_article` VALUES (null, '37', '', '宝剑锋从磨砺出，梅花香自苦寒来', '2017-08-01 16:08:29', '宝剑锋从磨砺出，梅花香自苦寒来', null, '', '/Uploads/2017-08-01/1501576960_344827663.jpg', '5', null);
INSERT INTO `yb_article` VALUES (null, '38', '', '含苞待放', '2017-08-01 16:08:32', '含苞待放', null, '', '/Uploads/2017-08-01/1501577016_19014390.jpg', '5', null);
INSERT INTO `yb_article` VALUES ('10010', '42', '测试用户文章1', '测试用户文章1', '2017-08-03 19:08:14', '测试用户文章1', null, '测试用户文章1', '/Uploads/2017-08-03/1501760911_1204861600.jpg', '1', null);
INSERT INTO `yb_article` VALUES (null, '43', '南广轩主', '2017年8月3日更新内容', '2017-08-03 19:08:29', '<p>\r\n	<span style=\"font-size:18px;line-height:24px;\">新增功能：</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">1.首页图片展示细微调整；</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">2.数据库新增部分表；</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">3.提供用户注册，用户个人中心，支持用户上传头像，修改用户资料；</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">4.提供登录用户发表文章功能；</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">5.发布文章表单的bug修复了几个；</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:18px;\">已知较大的问题：</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">1.SESSION没有处理好（用户登录后会保存一段时间，尽快修复）</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">2.发布文章后修改文章时，文章内容不能正常回填；</span>\r\n</p>', null, '2017年8月3日更新的主要是后台功能，内容比较多', '没有上传图片哦！', '1', null);
INSERT INTO `yb_article` VALUES ('1000', '44', '普通用户1', '普通用户1', '2017-08-04 14:08:58', '普通用户1', null, '普通用户1', '没有传图片！', '4', null);
INSERT INTO `yb_article` VALUES ('1002', '45', '发布文章2', '发布文章2', '2017-08-04 15:08:58', '发布文章2', null, '发布文章2', '没有传图片！', '4', null);
INSERT INTO `yb_article` VALUES ('911', '46', '123', '123', '2017-08-04 18:08:14', '123', null, '123', '没有传图片！', '1', null);

-- ----------------------------
-- Table structure for `yb_channel`
-- ----------------------------
DROP TABLE IF EXISTS `yb_channel`;
CREATE TABLE `yb_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yb_channel
-- ----------------------------
INSERT INTO `yb_channel` VALUES ('1', 'message', '资讯中心');
INSERT INTO `yb_channel` VALUES ('2', 'web', 'WEB前端');
INSERT INTO `yb_channel` VALUES ('3', 'php', 'PHP学习');
INSERT INTO `yb_channel` VALUES ('4', 'board', '留言板');

-- ----------------------------
-- Table structure for `yb_scores`
-- ----------------------------
DROP TABLE IF EXISTS `yb_scores`;
CREATE TABLE `yb_scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titles` varchar(30) NOT NULL,
  `icon` smallint(6) DEFAULT '0',
  `integral` int(10) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yb_scores
-- ----------------------------
INSERT INTO `yb_scores` VALUES ('2', '列兵', '1', '0', '1');
INSERT INTO `yb_scores` VALUES ('3', '班长', '2', '1000', '1');
INSERT INTO `yb_scores` VALUES ('4', '少尉', '3', '2000', '1');
INSERT INTO `yb_scores` VALUES ('5', '中尉', '4', '3000', '1');
INSERT INTO `yb_scores` VALUES ('6', '上尉', '5', '4000', '1');
INSERT INTO `yb_scores` VALUES ('7', '少校', '6', '5000', '1');
INSERT INTO `yb_scores` VALUES ('8', '中校', '7', '6000', '1');
INSERT INTO `yb_scores` VALUES ('9', '上校', '8', '9000', '1');
INSERT INTO `yb_scores` VALUES ('10', '少将', '9', '14000', '1');
INSERT INTO `yb_scores` VALUES ('11', '中将', '10', '19000', '1');
INSERT INTO `yb_scores` VALUES ('12', '上将', '11', '24000', '1');
INSERT INTO `yb_scores` VALUES ('15', '大将', '12', '29000', '1');

-- ----------------------------
-- Table structure for `yb_user`
-- ----------------------------
DROP TABLE IF EXISTS `yb_user`;
CREATE TABLE `yb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pwd` varchar(16) NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `tname` varchar(30) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `icon` varchar(300) DEFAULT NULL,
  `groups` varchar(100) DEFAULT NULL,
  `scoresid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yb_user
-- ----------------------------
INSERT INTO `yb_user` VALUES ('1', '1000', '123', '普通用户1', '小白', 'xiaobai@163.com', '/Uploads/icon/2017-08-03/1501748093_1550183451.png', null, null);
INSERT INTO `yb_user` VALUES ('2', '1002', '123', '普通用户2', null, null, null, null, null);
INSERT INTO `yb_user` VALUES ('3', '10010', '123', '测试1', '小芳', '#', '/Uploads/icon/2017-08-03/1501760800_401541309.png', null, null);
INSERT INTO `yb_user` VALUES ('4', '911', '123456', null, null, null, null, null, null);
INSERT INTO `yb_user` VALUES ('5', '201702', '123456', '奇迹再现', '张洁', '13996770731@163.com', '/Uploads/icon/2017-08-08/1502188522_122566005.png', null, null);

-- ----------------------------
-- Table structure for `yb_user_menus`
-- ----------------------------
DROP TABLE IF EXISTS `yb_user_menus`;
CREATE TABLE `yb_user_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `url` varchar(300) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yb_user_menus
-- ----------------------------
INSERT INTO `yb_user_menus` VALUES ('1', '我的资料', '1', '#', '-1');
INSERT INTO `yb_user_menus` VALUES ('2', '我的文章', '1', '#', '-1');
INSERT INTO `yb_user_menus` VALUES ('3', '我的留言', '1', '#', '-1');
INSERT INTO `yb_user_menus` VALUES ('4', '我的私信', '1', '#', '-1');
INSERT INTO `yb_user_menus` VALUES ('5', '我的其他', '1', '#', '-1');
INSERT INTO `yb_user_menus` VALUES ('6', '资料管理', '2', 'index.php/Admin/UserMenu/userMessage/uid', '1');
INSERT INTO `yb_user_menus` VALUES ('7', '发布的文章', '2', 'index.php/Admin/UserMenu/userArticle/uid', '2');
INSERT INTO `yb_user_menus` VALUES ('8', '收件箱', '2', '#', '4');
INSERT INTO `yb_user_menus` VALUES ('9', '发件箱', '2', '#', '4');
