-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
<<<<<<< HEAD
-- 生成日期： 2020-07-26 14:44:15
=======
-- 生成日期： 2020-07-21 14:29:25
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `thinkphp5`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
-- 表的结构 `tp5_area`
--

CREATE TABLE `tp5_area` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `city_id` varchar(11) NOT NULL DEFAULT '',
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `listorder` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9
-- 表的结构 `tp5_bis`
--

CREATE TABLE `tp5_bis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `licence_logo` varchar(255) NOT NULL DEFAULT '',
  `city_id` varchar(11) NOT NULL DEFAULT '0',
  `city_path` varchar(50) NOT NULL DEFAULT '',
  `bank_info` varchar(50) NOT NULL DEFAULT '',
  `money` decimal(20,2) NOT NULL DEFAULT '0.00',
  `bank_name` varchar(50) NOT NULL DEFAULT '',
  `bank_user` varchar(50) NOT NULL DEFAULT '',
  `faren` varchar(20) NOT NULL DEFAULT '',
  `faren_tel` varchar(20) NOT NULL DEFAULT '0',
  `listorder` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp5_bis`
--

INSERT INTO `tp5_bis` (`id`, `name`, `email`, `logo`, `licence_logo`, `city_id`, `city_path`, `bank_info`, `money`, `bank_name`, `bank_user`, `faren`, `faren_tel`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, 'asdasd', '314457@qq.com', 'upload\\20200529\\9f1ad72217cdd185a5118ccf589e384f.jpg', '', '3', '3,7', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590732800, 1590732800),
(2, '156489ghfgf', '314457@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735145, 1590735145),
(3, '156489ghfgf', '314457@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735190, 1590735190),
(4, '156489ghfgf', '314457@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735237, 1590735237),
(5, '156489ghfgf', '314457@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735295, 1590735295),
(6, '156489ghfgf', '314457@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735334, 1590735334),
(7, '156489ghfgf', '314457@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735415, 1590735415),
(8, '156489ghfgf', '314457@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735453, 1590735453),
(9, 'asdasd', '934695258@qq.com', '', '', '3', '3,5', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735604, 1590735604),
(10, 'asdasd', '934695258@qq.com', '', '', '3', '3,5', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735627, 1590735627),
(11, 'asdasd', '934695258@qq.com', '', '', '3', '3,5', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735673, 1590735673),
(12, 'asdasd', '934695258@qq.com', '', '', '3', '3,5', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590735818, 1590735818),
(13, 'asdasd', '934695258@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590736598, 1590736598),
(14, 'asdasd', '934695258@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1590736728, 1590834191),
(15, 'demo1', '934695258@qq.com', '', '', '1', '1,2', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, -1, 1590828865, 1591078317),
(16, '测试', '123@qq.com', 'upload\\20200530\\8526ce99a10434a37e92a6728def540d.jpg', '', '3', '3,4', '123', '0.00', '测试', '测试', '123', '123', 0, 1, 1590843293, 1591516550),
(17, 'asdasd2', '934695258@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, -1, 1591011899, 1591079125),
(18, 'asdasd2', '934695258@qq.com', '', '', '3', '3', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, -1, 1591012063, 1591081354),
<<<<<<< HEAD
=======
(19, '瓜皮', '934695258@qq.com', 'upload\\20200601\\4c5c6c1d1aca9e6edc9ce24afdd3cfda.jpg', 'upload\\20200601\\361926a2fea471fa6d64b2400639ea55.jpg', '1', '1,2', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, -1, 1591012213, 1591081438),
(20, '瓜皮', '934695258@qq.com', 'upload\\20200601\\8b1fcb548ee869096e55982975e73295.jpg', 'upload\\20200601\\09f83e6e1424cc106b60110589c14484.jpg', '3', '3,7', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, -1, 1591012233, 1591081577),
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9
(21, 'haha', '934695258@qq.com', 'upload\\20200602\\eb437908a286f59c79062558d07c8daa.jpg', 'upload\\20200602\\0bb48a5e4028665e4b2f25437b62e9c7.jpg', '3', '3,7', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, -1, 1591080864, 1591083781),
(22, 'haha', '934695258@qq.com', 'upload\\20200602\\35f2cdd34a4ff2a91d2cd371fce5c419.jpg', 'upload\\20200602\\334261d12210f262d132150d4c045f03.jpg', '1', '1,2', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, -1, 1591081071, 1591085525),
(23, 'asdasd', '934695258@qq.com', 'upload\\20200602\\f7d0f593d2e6e715cc7abe11558ab30d.jpg', 'upload\\20200602\\0844b0993fac6c22735265cd66f403b2.jpg', '3', '3,7', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1591081233, 1591087145),
(24, '', '934695258@qq.com', 'upload\\20200602\\0779d9566d26379ac795519eaca8ad95.jpg', 'upload\\20200602\\c38131f90f0f60d5ba13fbbfa7368909.jpg', '0', '0', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, -1, 1591089808, 1591098460),
(25, '美食', '934695258@qq.com', 'upload\\20200602\\9564c0a0fc5f57be1bab6051482b2349.jpg', 'upload\\20200602\\c0ee2a1da5fd48524305b795e3e419f8.jpg', '1', '1,2', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 1, 1591089933, 1591090029),
(26, '测试数据5', '934695258@qq.com', 'upload\\20200605\\31e2a40ba3259d590ae101c82cd45b21.jpg', 'upload\\20200605\\df2f34176552f953ad361c4f948d0a6c.jpg', '3', '3,7', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 0, 1591345784, 1591345784),
(27, '测试数据', '934695258@qq.com', 'upload\\20200605\\5eee9b1950f278de9e74f986298c1b62.jpg', 'upload\\20200605\\7985ae77223ab8a929061aa961cdb999.jpg', '3', '3,7', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, 0, 1591345936, 1591345936),
(28, 'xxxxx', '934695258@qq.com', 'upload\\20200605\\e03bedef979d7f872914392c60c808f9.jpg', 'upload\\20200605\\16aca9d4811cd451c71218e7df9f2a9e.jpg', '3', '3,7', '123321', '0.00', '不知道', '不知道', '不知道', '123456', 0, 0, 1591346553, 1591346553),
(29, '<script>alert(1)</script>', '934695258@qq.com', '', '', '1', '1', '123321', '0.00', 'xx银行', 'xxx', 'xxx', '123456', 0, -1, 1591508139, 1591509049);

-- --------------------------------------------------------

--
-- 表的结构 `tp5_bis_account`
--

CREATE TABLE `tp5_bis_account` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `code` varchar(10) NOT NULL DEFAULT '',
  `bis_id` int(11) NOT NULL DEFAULT '0',
  `last_login_ip` varchar(20) NOT NULL DEFAULT '',
  `last_login_time` int(11) NOT NULL DEFAULT '0',
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  `listorder` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp5_bis_account`
--

INSERT INTO `tp5_bis_account` (`id`, `username`, `password`, `code`, `bis_id`, `last_login_ip`, `last_login_time`, `is_main`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, 'demo', '88052b22c8c2349c0599bd39a654c534', '9233', 8, '', 0, 1, 0, 0, 1590735453, 1590735453),
(2, 'demo', 'a0cae863a782970b6dab38c1a5399e83', '9176', 10, '', 0, 1, 0, 0, 1590735627, 1590735627),
(3, 'demo', 'b79e7fb9b4f9ba407b601f49f59034bd', '2603', 12, '', 0, 1, 0, 0, 1590735818, 1590735818),
(4, 'demo', '212b058868fb6cfe00f77c3ca48d5d3c', '2842', 13, '', 0, 1, 0, 0, 1590736598, 1590736598),
(5, 'demo', 'a39a6bebb4c3f2edcce541716a158c77', '817', 14, '', 0, 1, 0, 0, 1590736728, 1590736728),
(6, 'demo2', '87940e89a218d12d3844c9b2de639f82', '2151', 15, '', 0, 1, 0, -1, 1590828865, 1591078317),
(7, '测试', 'eade1795aaf88453342ea600554cb0a0', '3877', 16, '', 0, 1, 0, 1, 1590843293, 1591516550),
(8, 'demo3', '120d642b80f2710c25d9a4f13f7f960e', '9289', 17, '', 0, 1, 0, -1, 1591011899, 1591079125),
(9, 'demo4', '4534b5dd766d9242fdeb925958b2400c', '2168', 18, '', 0, 1, 0, -1, 1591012063, 1591081354),
(10, 'demo5', 'ddedeb2076616145ac743be32f3bd375', '418', 19, '', 0, 1, 0, -1, 1591012213, 1591081438),
(11, 'demo6', 'b6a41c7c5e2114c5764878dd8374875f', '1291', 20, '', 0, 1, 0, -1, 1591012233, 1591081577),
(12, 'demo8', '20e970fd6fe17ef06756ffdb896c2270', '9579', 21, '', 0, 1, 0, 1, 1591080864, 1591083781),
(13, 'demo9', '2e2ed8258651b8454b09157ac53ed85e', '7176', 22, '', 0, 1, 0, -1, 1591081071, 1591085525),
(14, 'admin2', 'ed9cfb0d25f138d1514d4e093f8acf4b', '5109', 23, '', 1595310947, 1, 0, 1, 1591081233, 1595310947),
(15, 'admin3', '82a988ab3c3562bea70d946b39c77914', '2988', 24, '', 1591782701, 1, 0, 1, 1591089808, 1591782701),
(16, 'admin4', '16c786115f1ccd9b734736e6d69a5585', '3642', 25, '', 1591259306, 1, 0, 1, 1591089933, 1591259306),
(17, 'admin5', '3795a4a0b3d7eab67ac321c7038301ce', '2472', 26, '', 0, 1, 0, 0, 1591345784, 1591345784),
(18, 'admin6', 'ef2454e4df393ee4dd46b83bd8749f92', '1332', 27, '', 0, 1, 0, 0, 1591345936, 1591345936),
(19, 'admin7', 'aecc645628ad106fa776ec8bee4c7a75', '1125', 28, '', 0, 1, 0, 0, 1591346553, 1591346553),
(20, 'admin8', 'e566be8fd2006a0ccf4a842b8a81e950', '2628', 29, '', 0, 1, 0, -1, 1591508139, 1591509049);

-- --------------------------------------------------------

--
-- 表的结构 `tp5_bis_location`
--

CREATE TABLE `tp5_bis_location` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `tel` int(20) NOT NULL DEFAULT '0',
  `contact` varchar(20) NOT NULL DEFAULT '',
  `bis_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `open_time` varchar(50) DEFAULT '0',
  `content` text NOT NULL,
  `is_main` tinyint(1) NOT NULL DEFAULT '0',
  `api_ address` varchar(50) NOT NULL DEFAULT '',
  `city_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `city_path` varchar(50) NOT NULL DEFAULT '',
  `category_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `category_path` varchar(50) NOT NULL DEFAULT '',
  `listorder` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `xpoint` varchar(20) NOT NULL,
  `ypoint` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp5_bis_location`
--

INSERT INTO `tp5_bis_location` (`id`, `name`, `logo`, `address`, `tel`, `contact`, `bis_id`, `open_time`, `content`, `is_main`, `api_ address`, `city_id`, `city_path`, `category_id`, `category_path`, `listorder`, `status`, `create_time`, `update_time`, `xpoint`, `ypoint`) VALUES
(1, '156489ghfgf', '', '东莞', 45648, 'ahha', 5, '0', '', 1, '', 3, '', 8, '8,', 0, -1, 1590735295, 1591252602, '1', '1'),
(2, '156489ghfgf', '', '东莞', 45648, 'ahha', 6, '0', '', 1, '', 3, '', 8, '8,', 0, -1, 1590735334, 1591252705, '1', '1'),
(3, '156489ghfgf', '', '东莞', 45648, 'ahha', 7, '0', '', 1, '', 3, '', 8, '8,', 0, 1, 1590735415, 1591342732, '1', '1'),
(4, '156489ghfgf', '', '东莞', 45648, 'ahha', 8, '0', '', 1, '', 3, '', 8, '8,', 0, -1, 1590735453, 1591252763, '1', '1'),
(5, 'asdasd', '', '东莞', 45648, 'ahha', 10, '0', '', 1, '', 3, '3', 2, '2,10', 0, 1, 1590735627, 1591252756, '1', '1'),
(6, 'asdasd', '', '东莞', 45648, 'ahha', 24, '12:00-19:00', '', 1, '', 3, '3', 2, '2,10', 0, -1, 1590735818, 1591252657, '1', '1'),
(7, 'asdasd', '', '东莞', 45648, 'ahha', 13, '12:00-19:00', '', 1, '', 3, '', 2, '2,', 0, -1, 1590736598, 1591252588, '1', '1'),
(8, 'asdasd', '', '东莞', 45648, 'ahha', 14, '12:00-19:00', '', 1, '', 3, '', 2, '2,', 0, 1, 1590736728, 1591342734, '1', '1'),
(9, 'demo1', '', '东莞', 45648, 'ahha', 15, '12:00-19:00', '', 1, '', 1, '1', 2, '2,3', 0, -1, 1590828865, 1591078317, '1', '1'),
(10, '测试', 'upload\\20200530\\8526ce99a10434a37e92a6728def540d.jpg', '东莞', 123, '测试', 16, '12:00-19:00', '', 1, '', 3, '3', 2, '2,3', 0, 1, 1590843293, 1591516550, '1', '1'),
(11, 'asdasd2', '', '东莞', 45648, 'ahha', 17, '12:00-19:00', '', 1, '', 3, '', 2, '2,', 0, -1, 1591011899, 1591079125, '1', '1'),
(12, 'asdasd2', '', '东莞', 45648, 'ahha', 18, '12:00-19:00', '', 1, '', 3, '', 2, '2,', 0, -1, 1591012063, 1591081354, '1', '1'),
<<<<<<< HEAD
=======
(13, '瓜皮', 'upload\\20200601\\4c5c6c1d1aca9e6edc9ce24afdd3cfda.jpg', '东莞', 45648, 'ahha', 19, '12:00-19:00', '', 1, '', 1, '1', 8, '8,9', 0, -1, 1591012213, 1591081438, '1', '1'),
(14, '瓜皮', 'upload\\20200601\\8b1fcb548ee869096e55982975e73295.jpg', '东莞', 45648, 'ahha', 20, '12:00-19:00', '', 1, '', 3, '3', 8, '8,', 0, -1, 1591012233, 1591081577, '1', '1'),
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9
(15, 'haha', 'upload\\20200602\\eb437908a286f59c79062558d07c8daa.jpg', '东莞', 45648, 'ahha', 21, '12:00-19:00', '', 1, '', 3, '3', 8, '8,', 0, -1, 1591080864, 1591083781, '1', '1'),
(16, 'haha', 'upload\\20200602\\35f2cdd34a4ff2a91d2cd371fce5c419.jpg', '东莞', 45648, 'ahha', 22, '12:00-19:00', '', 1, '', 1, '1', 8, '8,9', 0, -1, 1591081071, 1591085525, '1', '1'),
(17, 'asdasd', 'upload\\20200602\\f7d0f593d2e6e715cc7abe11558ab30d.jpg', '东莞', 45648, 'ahha', 23, '12:00-19:00', '', 1, '', 3, '3', 8, '8,9', 0, -1, 1591081233, 1591252485, '1', '1'),
(18, '', 'upload\\20200602\\0779d9566d26379ac795519eaca8ad95.jpg', '东莞', 45648, 'ahha', 24, '12:00-19:00', '', 1, '', 0, '', 8, '8,9', 0, -1, 1591089808, 1591098460, '1', '1'),
(19, '美食', 'upload\\20200602\\9564c0a0fc5f57be1bab6051482b2349.jpg', '东莞', 45648, 'ahha', 25, '12:00-19:00', '', 1, '', 1, '1', 8, '8,', 0, -1, 1591089933, 1591252440, '1', '1'),
<<<<<<< HEAD
(20, '测试数据22222', 'upload\\20200603\\cba5b5c66256b63c387a3c08e3c3fff2.jpg', '高埗交警大队', 123, '测试数据', 24, '全天24小时', '', 0, '', 3, '3', 1, '1,4', 0, 1, 1591172077, 1591342100, '113.72612', '23.087139'),
=======
(20, '测试数据22222', 'upload\\20200603\\cba5b5c66256b63c387a3c08e3c3fff2.jpg', '东莞', 123, '测试数据', 24, '全天24小时', '', 0, '', 3, '3', 1, '1,4', 0, 1, 1591172077, 1591342100, '113.72612', '23.087139'),
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9
(21, '测试数据', '', '东莞', 321, '测试数据', 24, '全天24小时', '', 0, '', 1, '1', 1, '1,', 0, 1, 1591172114, 1591260137, '1', '1'),
(22, '测试数据', '', '东莞', 123, '测试数据', 24, '全天24小时', '', 0, '', 3, '3', 1, '1,', 0, -1, 1591172167, 1591252446, '1', '1'),
(23, '测试数据', '', '东莞', 123, '测试数据', 25, '全天24小时', '', 0, '', 3, '', 1, '1,', 0, 1, 1591172187, 1591240279, '1', '1'),
(24, '测试数据5', 'upload\\20200605\\31e2a40ba3259d590ae101c82cd45b21.jpg', '东莞', 45648, 'ahha', 26, '12:00-19:00', '', 1, '', 3, '3', 1, '1,5', 0, 0, 1591345784, 1591345784, '1', '1'),
(25, '测试数据', 'upload\\20200605\\5eee9b1950f278de9e74f986298c1b62.jpg', '东莞', 45648, 'ahha', 27, '12:00-19:00', '', 1, '', 3, '3', 1, '1,4', 0, 0, 1591345936, 1591345936, '1', '1'),
<<<<<<< HEAD
(26, 'xxxxx', 'upload\\20200605\\e03bedef979d7f872914392c60c808f9.jpg', '东莞', 45648, 'ahha', 28, '全天24小时', '', 1, '', 3, '3', 1, '1,5', 0, 0, 1591346553, 1591346553, '1', '1');
=======
(26, 'xxxxx', 'upload\\20200605\\e03bedef979d7f872914392c60c808f9.jpg', '东莞', 45648, 'ahha', 28, '全天24小时', '', 1, '', 3, '3', 1, '1,5', 0, 0, 1591346553, 1591346553, '1', '1'),
(27, '<script>alert(1)</script>', '', '东莞', 45648, 'ahha', 29, '12:00-19:00', '', 1, '', 1, '', 2, '2,', 0, -1, 1591508139, 1591509049, '1', '1');
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9

-- --------------------------------------------------------

--
-- 表的结构 `tp5_category`
--

CREATE TABLE `tp5_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `listorder` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp5_category`
--

INSERT INTO `tp5_category` (`id`, `name`, `parent_id`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, '美食', 0, 20, 1, 1590382360, 1591684799),
(2, '娱乐', 0, 1, 1, 1590382515, 1591534366),
(3, 'KTV', 2, 0, 1, 1590384590, 1590384590),
(4, '火锅', 1, 1, 1, 1590384659, 1591687393),
(5, '烧烤', 1, 10, 1, 1590384700, 1591687365),
(6, 'demo', 2, 0, 1, 1590384757, 1590384757),
(7, 'demo2', 2, 0, 1, 1590384796, 1590384796),
(8, '生活', 0, 8, 1, 1590384862, 1591534308),
(9, '哈哈', 8, 0, 0, 1590393272, 1591108471),
(10, '101', 2, 0, 1, 1590411995, 1590411995),
<<<<<<< HEAD
(11, '测试2', 0, 90, 1, 1590412539, 1595521375),
=======
(11, '瓜皮2', 0, 10, 1, 1590412539, 1591535147),
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9
(14, '111', 8, 0, 1, 1591690751, 1591690751);

-- --------------------------------------------------------

--
-- 表的结构 `tp5_city`
--

CREATE TABLE `tp5_city` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `uname` varchar(50) NOT NULL DEFAULT '',
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `is_default` int(2) NOT NULL,
  `listorder` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp5_city`
--

INSERT INTO `tp5_city` (`id`, `name`, `uname`, `parent_id`, `is_default`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, '北京', 'beijing', 0, 0, 0, 1, 1474013959, 0),
(2, '北京', 'beijing1', 1, 0, 0, 1, 1474014007, 0),
(3, '江西', 'jiangxi', 0, 0, 0, 1, 1474014162, 0),
(4, '南昌', 'nanchang', 3, 1, 0, 1, 1474014181, 0),
(5, '上饶', 'shangrao', 3, 0, 0, 1, 1474014193, 0),
(6, '抚州', 'fuzhou', 3, 0, 0, 1, 1474014204, 0),
(7, '景德镇', 'jdz', 3, 0, 0, 1, 1474014220, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp5_deal`
--

CREATE TABLE `tp5_deal` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `se_category_id` varchar(11) NOT NULL DEFAULT '0',
  `bis_id` int(11) NOT NULL DEFAULT '0',
  `location_ids` varchar(100) NOT NULL DEFAULT '',
  `image` varchar(100) NOT NULL DEFAULT '',
  `description` text,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `origin_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `current_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `city_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `buy_count` int(11) NOT NULL DEFAULT '0',
  `total_count` int(11) NOT NULL DEFAULT '0',
  `coupons_begin_time` int(11) NOT NULL DEFAULT '0',
  `coupons_end_time` int(11) NOT NULL DEFAULT '0',
  `bis_account_id` int(10) NOT NULL DEFAULT '0',
  `balance_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `notes` text,
  `listorder` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp5_deal`
--

INSERT INTO `tp5_deal` (`id`, `name`, `category_id`, `se_category_id`, `bis_id`, `location_ids`, `image`, `description`, `start_time`, `end_time`, `origin_price`, `current_price`, `city_id`, `buy_count`, `total_count`, `coupons_begin_time`, `coupons_end_time`, `bis_account_id`, `balance_price`, `notes`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, '测试数据', 2, '6,5', 24, '21', 'upload\\20200604\\623275f57adc0d9812bcaa5a4b73ef57.jpg', '45654645', 1594143050, 1594143200, '999.00', '999.00', 5, 0, 999, 1591257720, 1591257720, 15, '0.00', '546546', 0, 1, 1591260618, 1591260618),
(2, '测试数据22', 1, '4', 24, '20', 'upload\\20200604\\623275f57adc0d9812bcaa5a4b73ef57.jpg', '测试数据2', 1594052745, 1594053045, '999.00', '8000.00', 7, 999, 999, 1591429080, 1592033820, 15, '0.00', '测试数据2', 0, 1, 1591342694, 1591342694),
(3, '测试数据222', 1, '4', 24, '20', 'upload\\20200604\\623275f57adc0d9812bcaa5a4b73ef57.jpg', '测试数据2', 1591429020, 1592033820, '999.00', '100000.00', 7, 888, 0, 1591429080, 1592033820, 15, '0.00', '测试数据2', 0, 1, 1591342719, 1591342719),
(4, '哈哈哈哈哈', 1, '5', 24, '21,20', '', '哈哈哈哈', 1591869180, 1591955580, '999.00', '999.00', 5, 0, 999, 1591869180, 1591951500, 15, '0.00', '嘻嘻嘻嘻', 0, 0, 1591782820, 1591961095);

-- --------------------------------------------------------

--
-- 表的结构 `tp5_featured`
--

CREATE TABLE `tp5_featured` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(30) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `listorder` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp5_featured`
--

INSERT INTO `tp5_featured` (`id`, `type`, `title`, `image`, `url`, `description`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, 1, '测试', 'upload\\20200607\\fc4b7fa2bcbeca3d881fce50cb06a10c.jpg', 'http://www.baidu.com', '测试', 0, 0, 1591511156, 1591533879),
(2, 2, '测试2', 'upload\\20200607\\02e2f92b42911406bf8f5aa6f48f9365.jpg', 'http://www.baidu.com', '测试', 0, 0, 1591511945, 1591511945),
(3, 1, '测试3', 'upload\\20200607\\4ebf66e7f3d4196feb1ce94a33f20cda.jpg', 'http://www.baidu.com', '测试', 0, 0, 1591511955, 1591511955),
(4, 2, '321', 'upload\\20200607\\b5f71d941fe033349c3058b277d18b85.jpg', 'http://www.baidu.com', '测试', 0, 0, 1591512868, 1591512868),
(5, 1, '测试', '', 'http://www.baidu.com', '测试', 0, 1, 1591517006, 1591533827),
<<<<<<< HEAD
(6, 1, '测试', '', 'http://www.baidu.com', '测试', 0, 0, 1591517007, 1591517007),
(7, 1, '这里是标题', '', '', '...', 0, 0, 1595745820, 1595745820);
=======
(6, 1, '测试', '', 'http://www.baidu.com', '测试', 0, 0, 1591517007, 1591517007);
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9

-- --------------------------------------------------------

--
-- 表的结构 `tp5_user`
--

CREATE TABLE `tp5_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `code` varchar(10) NOT NULL DEFAULT '',
  `last_login_ip` varchar(20) NOT NULL DEFAULT '',
  `last_login_time` int(11) NOT NULL DEFAULT '0',
  `email` varchar(30) NOT NULL DEFAULT '',
  `mobile` varchar(30) NOT NULL DEFAULT '',
  `listorder` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp5_user`
--

INSERT INTO `tp5_user` (`id`, `username`, `password`, `code`, `last_login_ip`, `last_login_time`, `email`, `mobile`, `listorder`, `status`, `create_time`, `update_time`) VALUES
<<<<<<< HEAD
(1, 'demo', '0b897272ec526a7cee8e16a40399a127', '6293', '', 1595519472, '934695258@qq.com', '', 0, 1, 1591598332, 1595519472);
=======
(1, 'demo', '0b897272ec526a7cee8e16a40399a127', '6293', '', 1594036787, '934695258@qq.com', '', 0, 1, 1591598332, 1594036787);
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9

--
-- 转储表的索引
--

--
<<<<<<< HEAD
=======
-- 表的索引 `tp5_area`
--
ALTER TABLE `tp5_area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `city_id` (`city_id`);

--
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9
-- 表的索引 `tp5_bis`
--
ALTER TABLE `tp5_bis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `name` (`name`);

--
-- 表的索引 `tp5_bis_account`
--
ALTER TABLE `tp5_bis_account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bis_id` (`bis_id`),
  ADD KEY `username` (`username`);

--
-- 表的索引 `tp5_bis_location`
--
ALTER TABLE `tp5_bis_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `bis_id` (`bis_id`),
  ADD KEY `category_id` (`category_id`);

--
-- 表的索引 `tp5_category`
--
ALTER TABLE `tp5_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- 表的索引 `tp5_city`
--
ALTER TABLE `tp5_city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD KEY `parent_id` (`parent_id`);

--
-- 表的索引 `tp5_deal`
--
ALTER TABLE `tp5_deal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cagetory_id` (`category_id`),
  ADD KEY `se_cagetory_id` (`se_category_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `start_time` (`start_time`),
  ADD KEY `end_time` (`end_time`);

--
-- 表的索引 `tp5_featured`
--
ALTER TABLE `tp5_featured`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `tp5_user`
--
ALTER TABLE `tp5_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
<<<<<<< HEAD
=======
-- 使用表AUTO_INCREMENT `tp5_area`
--
ALTER TABLE `tp5_area`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9
-- 使用表AUTO_INCREMENT `tp5_bis`
--
ALTER TABLE `tp5_bis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 使用表AUTO_INCREMENT `tp5_bis_account`
--
ALTER TABLE `tp5_bis_account`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用表AUTO_INCREMENT `tp5_bis_location`
--
ALTER TABLE `tp5_bis_location`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用表AUTO_INCREMENT `tp5_category`
--
ALTER TABLE `tp5_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用表AUTO_INCREMENT `tp5_city`
--
ALTER TABLE `tp5_city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `tp5_deal`
--
ALTER TABLE `tp5_deal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `tp5_featured`
--
ALTER TABLE `tp5_featured`
<<<<<<< HEAD
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
=======
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
>>>>>>> 69f6fc0efe002c81658c7a2802bb89cdd87e65d9

--
-- 使用表AUTO_INCREMENT `tp5_user`
--
ALTER TABLE `tp5_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
