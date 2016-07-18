-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-06 06:09:28
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hzauca`
--

-- --------------------------------------------------------

--
-- 表的结构 `hzauca_activity`
--

CREATE TABLE IF NOT EXISTS `hzauca_activity` (
  `aid` smallint(6) NOT NULL AUTO_INCREMENT,
  `theme` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `mcontents` varchar(200) CHARACTER SET utf32 NOT NULL,
  `allcontents` text NOT NULL,
  `tags` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `hzauca_activity`
--

INSERT INTO `hzauca_activity` (`aid`, `theme`, `type`, `mcontents`, `allcontents`, `tags`, `author`, `date`) VALUES
(1, '计算机协会招新', '通知', '计算机协会6.01和6.02招新摆点。', '华中农业大学计算机协会是学生为主体的群众性组织，受校团委领导，由校社团联合会负责具体管理。协会由理学院湛为芳副教授指导。在1998年成立,现隶属于华中农业大学信息学院。自建立以来，以“推广计算机文化，普及计算机知识”为宗旨,立足农大,面向社会，服务全校同学，开展了一系列计算机及网络的宣传普及工作，取得了不少成绩。同时还立足启发同学们对计算机的探索，致力于为同学解决问题，普及知识，节约时间金钱，培养兴趣。在各个方面受到广大老师和同学的好评。 本协会下设立5个部门，分别为：\r\n秘书处：管理协会各种资料档案并负责日常文件、报告的起草、打印、分发工作；负责协会内部各项会议、活动的考察，会议记录和工作总结；负责考评协会各部工作的开展情况；协助各部做好其他工作。统一管理协会财务，对财务状况及时记录和审查；严格遵守本章程的财务管理制度，定期向理事会汇报经费收支情况，并接受会长和其他部门的监督。\r\n宣传部：主要负责协会宣传工作和通讯工作。设计和制作各种海报、展板、标语和其他宣传资料，力求宣传资料具有创新性和欣赏价值；负责与校内外媒体及兄弟社团建立友好的合作关系；负责协会各类活动的摄影并对协会的活动及时进行报告，让同学们及时了解协会的最新动态。负责协会的各项活动的组织、策划、实施工作。在活动中，做好活动人员的调配。研究本协会的发展方向，帮助建立协会特有的发展模式。\r\n硬件部：举办每月的校内大型修电脑活动，负责协会电脑硬件技术支持；为协会以及学校同学提供最新电脑硬件资讯；如有会员需要购买电脑负责提供最实用的电脑购机配置，提供最新最便宜的电脑选购方案；与各家电脑商家搞好关系使其能为协会提供技术支援。\r\nWeb组： 计协web组及零度工作室，负责计协官方网站设计及维护，并承接校内外大小web项目。我们是一群热爱web的孩子，主要从事网站开发，工作方向分前端和后端，前端负责网站页面的设计及实现，后端负责网站前后台的数据交互。我们工作室成员思想开放但有着相同的价值观，性格专业多元化但有着相同理想--始于零度，力争沸腾。\r\nOffice组： ', '招新', '孙梦海', '2016-06-05'),
(2, '计算机协会招新', '通知', '计算机协会6.01和6.02招新摆点。', '华中农业大学计算机协会是学生为主体的群众性组织，受校团委领导，由校社团联合会负责具体管理。协会由理学院湛为芳副教授指导。在1998年成立,现隶属于华中农业大学信息学院。自建立以来，以“推广计算机文化，普及计算机知识”为宗旨,立足农大,面向社会，服务全校同学，开展了一系列计算机及网络的宣传普及工作，取得了不少成绩。同时还立足启发同学们对计算机的探索，致力于为同学解决问题，普及知识，节约时间金钱，培养兴趣。在各个方面受到广大老师和同学的好评。 本协会下设立5个部门，分别为：\r\n秘书处：管理协会各种资料档案并负责日常文件、报告的起草、打印、分发工作；负责协会内部各项会议、活动的考察，会议记录和工作总结；负责考评协会各部工作的开展情况；协助各部做好其他工作。统一管理协会财务，对财务状况及时记录和审查；严格遵守本章程的财务管理制度，定期向理事会汇报经费收支情况，并接受会长和其他部门的监督。\r\n宣传部：主要负责协会宣传工作和通讯工作。设计和制作各种海报、展板、标语和其他宣传资料，力求宣传资料具有创新性和欣赏价值；负责与校内外媒体及兄弟社团建立友好的合作关系；负责协会各类活动的摄影并对协会的活动及时进行报告，让同学们及时了解协会的最新动态。负责协会的各项活动的组织、策划、实施工作。在活动中，做好活动人员的调配。研究本协会的发展方向，帮助建立协会特有的发展模式。\r\n硬件部：举办每月的校内大型修电脑活动，负责协会电脑硬件技术支持；为协会以及学校同学提供最新电脑硬件资讯；如有会员需要购买电脑负责提供最实用的电脑购机配置，提供最新最便宜的电脑选购方案；与各家电脑商家搞好关系使其能为协会提供技术支援。\r\nWeb组： 计协web组及零度工作室，负责计协官方网站设计及维护，并承接校内外大小web项目。我们是一群热爱web的孩子，主要从事网站开发，工作方向分前端和后端，前端负责网站页面的设计及实现，后端负责网站前后台的数据交互。我们工作室成员思想开放但有着相同的价值观，性格专业多元化但有着相同理想--始于零度，力争沸腾。\r\nOffice组： ', '招新', '孙梦海', '2016-06-05'),
(4, 'sdsd', 'asdas', 'adsdasdas', '<p>\r\n	足球爱的太深，爱的太累\r\n</p>', 'dsada', 'adsasd', 'adadsd'),
(5, '足球', 'asdas', 'adsdasdas', '<p>\r\n	足球爱的太深，爱的太累\r\n</p>', 'dsada', 'adsasd', 'adadsd'),
(7, '第三方', '是打发大是', '浮动', '的神烦大叔', '鼎折覆餗', '', ''),
(8, '是打发', '算法', '方式', '鼎折覆餗', '方式', '', ''),
(9, '第三方', '是打发大是', '浮动', '的神烦大叔', '鼎折覆餗', '', ''),
(10, '是打发', '算法', '方式', '鼎折覆餗', '方式', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `hzauca_form`
--

CREATE TABLE IF NOT EXISTS `hzauca_form` (
  `fid` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `pheno` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `time` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `hzauca_form`
--

INSERT INTO `hzauca_form` (`fid`, `name`, `phone`, `qq`, `pheno`, `description`, `time`, `status`) VALUES
(1, '孙梦海', '15927366830', '878131732', '是否是范德萨', '但是发生的否杀毒少打点杀毒  佛挡杀佛是大方的说法是大方的说法', '2016-06-05', '已完成'),
(2, '孙梦海', '878131732', '1596266516 ', '风飒飒大方的说法三等', ' 是打发第三方第三方萨芬大的撒飞洒的范德萨范德萨范德萨发的是飞洒地方的萨芬撒地方萨芬', '2016-06-05', '已完成'),
(3, '孙梦海', '15927366830', '878131732', '是否是范德萨', '但是发生的否杀毒少打点杀毒  佛挡杀佛是大方的说法是大方的说法', '2016-06-05', '已完成'),
(4, '孙梦海', '878131732', '1596266516 ', '风飒飒大方的说法三等', ' 是打发第三方第三方萨芬大的撒飞洒的范德萨范德萨范德萨发的是飞洒地方的萨芬撒地方萨芬', '2016-06-05', '已完成'),
(5, 'chbr', '去', '去', '电脑杀毒', '去', '2016-06-05', '未完成'),
(6, 'chbr', '去', '去', '电脑杀毒', '去', '2016-06-05', '已完成'),
(7, 'chbr', '去', '去', '电脑杀毒', '去', '2016-06-05', '已完成'),
(8, 'chbr', '去', '去', '电脑杀毒', '去', '2016-06-05', '已完成'),
(9, 'chbr', '去', '去', '电脑杀毒', '去', '2016-06-05', '已完成'),
(10, '54354', '453453', '4534', '电脑死机', '435543', '2016-06-05', '已完成');

-- --------------------------------------------------------

--
-- 表的结构 `hzauca_manager`
--

CREATE TABLE IF NOT EXISTS `hzauca_manager` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `managername` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL,
  `logintime` datetime NOT NULL,
  `loginip` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `managername` (`managername`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `hzauca_manager`
--

INSERT INTO `hzauca_manager` (`id`, `managername`, `password`, `logintime`, `loginip`) VALUES
(1, 'admin', 'admin', '2016-03-29 13:59:06', '0.0.0.0'),
(2, 'smh', 'smh', '2016-06-06 09:53:27', '0.0.0.0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
