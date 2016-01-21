-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Jan 21, 2016, 03:43 PM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.6.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `car`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `customer`
-- 

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL auto_increment,
  `cus_account` char(10) collate utf8_unicode_ci NOT NULL,
  `cus_password` char(10) collate utf8_unicode_ci NOT NULL,
  `cus_name` varchar(10) collate utf8_unicode_ci NOT NULL,
  `cus_sex` char(2) collate utf8_unicode_ci default NULL,
  `cus_birthday` date default NULL,
  `cus_phone` char(10) collate utf8_unicode_ci NOT NULL,
  `cus_addr` varchar(30) collate utf8_unicode_ci default NULL,
  `cus_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`cus_id`),
  KEY `cus_account` (`cus_account`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

-- 
-- 列出以下資料庫的數據： `customer`
-- 

INSERT INTO `customer` VALUES (1, 'system', 'system', 'system', '男', '1960-09-06', '0952021543', '台中市北屯區文心路98號35F', '2016-01-18 20:22:32');
INSERT INTO `customer` VALUES (2, 'giga', '90276354', 'giga', '女', '1982-06-10', '0933564123', '台北市松山區長安東路二段280號', '2016-01-18 20:22:51');
INSERT INTO `customer` VALUES (3, 'Jimmy', '12345678', 'Jimmy', '男', '1994-02-25', '0937090973', '桃園市平鎮區金陵路四段90巷1號', '2016-01-18 20:23:51');
INSERT INTO `customer` VALUES (4, 'Jimmy', '12345678', 'Jimmy', '男', '1994-02-25', '0937090973', '桃園市平鎮區金陵路四段90巷1號', '2016-01-18 20:23:51');
INSERT INTO `customer` VALUES (5, 'Justin', '123456789', 'Justin', '男', '1970-11-09', '0988908678', '台北市北投區泉源路39-8號9F', '2016-01-18 20:23:51');
INSERT INTO `customer` VALUES (6, 'Sunny', '9876543210', 'Sunny', '女', '1978-03-09', '0935098789', '台北市內湖區瑞光路18號21F', '2016-01-18 20:23:10');
INSERT INTO `customer` VALUES (7, 'yian', '7533967', 'yian', '女', '1983-03-10', '0903583358', '台北市中山區新生北路二段72巷17號9樓', '2016-01-18 20:23:10');
INSERT INTO `customer` VALUES (8, 'Hank', '456123', 'Hank', '男', '1987-02-27', '0936467297', '苗栗縣竹南鎮竹南里中山路117號1樓', '2016-01-18 20:23:51');
INSERT INTO `customer` VALUES (9, 'admin', '111111', '曾文', '男', '2016-01-03', '0988123456', 'china', '2016-01-18 20:22:32');

-- --------------------------------------------------------

-- 
-- 資料表格式： `guestbook`
-- 

DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `username` char(16) NOT NULL,
  `email` varchar(60) default NULL,
  `content` text NOT NULL,
  `createtime` int(10) unsigned NOT NULL default '0',
  `clientip` char(15) default NULL,
  `reply` text,
  `replytime` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 列出以下資料庫的數據： `guestbook`
-- 

INSERT INTO `guestbook` VALUES (1, 'wen', '', 'hello', 1452639768, '127.0.0.1', NULL, NULL);

-- --------------------------------------------------------

-- 
-- 資料表格式： `item`
-- 

DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `item_id` int(10) unsigned zerofill NOT NULL,
  `item_name` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `item_color` varchar(4) character set utf8 collate utf8_unicode_ci NOT NULL,
  `item_price` int(20) NOT NULL,
  `item_power` int(4) NOT NULL,
  `item_type` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `item_descr` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `sup_id` int(10) unsigned zerofill NOT NULL,
  `item_pic` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `item`
-- 

INSERT INTO `item` VALUES (0000000002, 'ALTIS', '銀', 759000, 1800, '四門房車', '尊爵', 0000000001, 'car_img/ALTIS_2.jpg');
INSERT INTO `item` VALUES (0000000006, 'PanameraTurbo S', '黑', 11400000, 4806, 'Panamera', 'Focused Power', 0000000004, 'car_img/panamera_1.jpg');
INSERT INTO `item` VALUES (0000000008, 'Boxster GTS', '紅', 4100000, 3436, 'Boxster', '保時捷GTS社群', 0000000004, 'car_img/panamera_2.jpg');
INSERT INTO `item` VALUES (0000000010, 'Panamera 4S', '黑', 7000000, 2997, 'Panamera', '極致豪華 極勁性能', 0000000004, 'car_img/panamera_1.jpg');
INSERT INTO `item` VALUES (0000000011, 'Mondeo', '白', 1259000, 2000, '四門房車五人座', 'ECO', 0000000006, 'car_img/mondeo_3.jpg');
INSERT INTO `item` VALUES (0000000012, 'ALTIS', '銀', 769000, 1800, '四門房車', 'Z', 0000000001, 'car_img/ALTIS_2.jpg');
INSERT INTO `item` VALUES (0000000015, 'CAMRY', '黑', 989000, 2000, '四門房車', '尊爵', 0000000001, 'car_img/CAMRY_2.jpg');
INSERT INTO `item` VALUES (0000000016, 'CAMRY', '黑', 899000, 2000, '四門房車', '經典', 0000000001, 'car_img/CAMRY_2.jpg');
INSERT INTO `item` VALUES (0000000020, 'Mondeo', '黑', 1259000, 2000, '四門房車五人座', 'ECO', 0000000006, 'car_img/mondeo_2.jpg');
INSERT INTO `item` VALUES (0000000021, 'Mondeo', '黑', 1259000, 2000, '四門房車五人座', 'Best', 0000000006, 'car_img/mondeo_2.jpg');
INSERT INTO `item` VALUES (0000000025, 'ALTIS', '紅', 759000, 1800, '四門房車', '尊爵', 0000000001, 'car_img/ALTIS_4.jpg');
INSERT INTO `item` VALUES (0000000001, 'ALTIS', '紅', 769000, 1800, '四門房車', 'Z', 0000000001, '/car_img/ALTIS_4.jpg');
INSERT INTO `item` VALUES (0000000003, 'ALTIS', '銀', 729000, 1800, '四門房車', '豪華', 0000000001, '/car_img/ALTIS_2.jpg');
INSERT INTO `item` VALUES (0000000004, 'CAMRY', '銀', 989000, 2000, '四門房車', '尊爵', 0000000001, '/car_img/CAMRY_1.jpg');
INSERT INTO `item` VALUES (0000000005, 'CAMRY', '銀', 899000, 2000, '四門房車', '經典', 0000000001, '/car_img/CAMRY_1.jpg');
INSERT INTO `item` VALUES (0000000007, 'Boxster S', '黃', 3450000, 3436, 'Boxster', '水平對臥引擎', 0000000004, '/car_img/panamera_5.jpg');
INSERT INTO `item` VALUES (0000000009, 'Panamera 4', '紅', 4900000, 3605, 'Panamera', '極致豪華 極勁性能', 0000000004, '/car_img/panamera_2.jpg');
INSERT INTO `item` VALUES (0000000013, 'ALTIS', '白', 769000, 1800, '四門房車', 'Z', 0000000001, '/car_img/ALTIS_1.jpg');
INSERT INTO `item` VALUES (0000000014, 'ALTIS', '黑', 769000, 1800, '四門房車', 'Z', 0000000001, '/car_img/ALTIS_3.jpg');
INSERT INTO `item` VALUES (0000000017, 'ALTIS', '黑', 759000, 1800, '四門房車', '尊爵', 0000000001, '/car_img/ALTIS_3.jpg');
INSERT INTO `item` VALUES (0000000018, 'ALTIS', '黑', 729000, 1800, '四門房車', '豪華', 0000000001, '/car_img/ALTIS_3.jpg');
INSERT INTO `item` VALUES (0000000019, 'ALTIS', '白', 729000, 1800, '四門房車', '豪華', 0000000001, '/car_img/ALTIS_1.jpg');
INSERT INTO `item` VALUES (0000000022, 'Mondeo', '紅', 1259000, 2000, '四門房車五人座', 'ECO', 0000000006, '/car_img/mondeo_4.jpg');
INSERT INTO `item` VALUES (0000000023, 'ALTIS', '紅', 729000, 1800, '四門房車', '豪華', 0000000001, '/car_img/ALTIS_4.jpg');
INSERT INTO `item` VALUES (0000000024, 'Mondeo', '藍', 1259000, 2000, '四門房車五人座', 'ECO', 0000000006, '/car_img/mondeo_1.jpg');
INSERT INTO `item` VALUES (0000000026, 'TIIDA', '紅', 529000, 1600, '四門房車', '傳奇', 0000000005, '/car_img/TIIDA_3.jpg');
INSERT INTO `item` VALUES (0000000027, 'TIIDA', '紅', 555000, 1600, '四門房車', '豪華', 0000000005, '/car_img/TIIDA_3.jpg');
INSERT INTO `item` VALUES (0000000028, 'TIIDA', '白', 529000, 1600, '四門房車', '傳奇', 0000000005, '/car_img/TIIDA_1.jpg');
INSERT INTO `item` VALUES (0000000029, 'TIIDA', '白', 555000, 1600, '四門房車', '豪華', 0000000005, '/car_img/TIIDA_1.jpg');
INSERT INTO `item` VALUES (0000000030, 'TIIDA', '藍', 529000, 1600, '四門房車', '傳奇', 0000000005, '/car_img/TIIDA_2.jpg');
INSERT INTO `item` VALUES (0000000031, 'TIIDA', '藍', 555000, 1600, '四門房車', '豪華', 0000000005, '/car_img/TIIDA_2.jpg');
INSERT INTO `item` VALUES (0000000032, 'March', '黑', 535000, 1500, '四門房車', '傳奇', 0000000005, '/car_img/march_4.jpg');
INSERT INTO `item` VALUES (0000000033, 'March', '白', 568000, 1500, '四門房車', '豪華', 0000000005, '/car_img/march_2.jpg');
INSERT INTO `item` VALUES (0000000034, 'March', '白', 588000, 1500, '四門房車', '頂級', 0000000005, '/car_img/march_2.jpg');
INSERT INTO `item` VALUES (0000000035, 'March', '白', 535000, 1500, '四門房車', '傳奇', 0000000005, '/car_img/march_2.jpg');
INSERT INTO `item` VALUES (0000000036, 'March', '黑', 568000, 1500, '四門房車', '豪華', 0000000005, '/car_img/march_4.jpg');
INSERT INTO `item` VALUES (0000000037, 'March', '紅', 588000, 1500, '四門房車', '旗艦', 0000000005, '/car_img/march_1.jpg');
INSERT INTO `item` VALUES (0000000038, 'March', '藍', 535000, 1500, '四門房車', '傳奇', 0000000005, '/car_img/march_3.jpg');
INSERT INTO `item` VALUES (0000000039, 'March', '藍', 568000, 1500, '四門房車', '豪華', 0000000005, '/car_img/march_3.jpg');
INSERT INTO `item` VALUES (0000000040, 'March', '藍', 588000, 1500, '四門房車', '旗艦', 0000000005, '/car_img/march_3.jpg');
INSERT INTO `item` VALUES (0000000041, 'PanameraTurbo S', '灰', 11400000, 4806, 'Panamera', 'Focused Power', 0000000004, '/car_img/panamera_6.jpg');
INSERT INTO `item` VALUES (0000000042, 'PanameraTurbo S', '黃', 11400000, 4806, 'Panamera', 'Focused Power', 0000000004, '/car_img/panamera_5.jpg');
INSERT INTO `item` VALUES (0000000043, 'PanameraTurbo S', '藍', 11400000, 4806, 'Panamera', 'Focused Power', 0000000004, '/car_img/panamera_4.jpg');
INSERT INTO `item` VALUES (0000000044, 'Panamera 4S', '白', 7000000, 2997, 'Panamera', '極致豪華 極勁性能', 0000000004, '/car_img/panamera_3.jpg');
INSERT INTO `item` VALUES (0000000045, 'Panamera 4S', '灰', 7000000, 2997, 'Panamera', '極致豪華 極勁性能', 0000000004, '/car_img/panamera_6.jpg');
INSERT INTO `item` VALUES (0000000046, 'Fiesta', '藍', 588000, 1500, '四門房車', 'New', 0000000006, '/car_img/Fiesta_1.jpg');
INSERT INTO `item` VALUES (0000000047, 'Fiesta', '白', 588000, 1500, '四門房車', 'New', 0000000006, '/car_img/Fiesta_3.jpg');
INSERT INTO `item` VALUES (0000000048, 'Fiesta', '白', 588000, 1500, '四門房車', 'Best', 0000000006, '/car_img/Fiesta_3.jpg');
INSERT INTO `item` VALUES (0000000049, 'Fiesta', '黑', 588000, 1500, '四門房車', 'New', 0000000006, '/car_img/Fiesta_2.jpg');
INSERT INTO `item` VALUES (0000000050, 'Fiesta', '紅', 588000, 1500, '四門房車', 'New', 0000000006, '/car_img/Fiesta_4.jpg');

-- --------------------------------------------------------

-- 
-- 資料表格式： `item_admin`
-- 

DROP TABLE IF EXISTS `item_admin`;
CREATE TABLE `item_admin` (
  `admin_user` varchar(20) collate utf8_unicode_ci NOT NULL,
  `admin_pwd` varchar(20) collate utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- 列出以下資料庫的數據： `item_admin`
-- 

INSERT INTO `item_admin` VALUES ('admin_yian', '123456');
INSERT INTO `item_admin` VALUES ('system', 'system');

-- --------------------------------------------------------

-- 
-- 資料表格式： `message`
-- 

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `content` text collate utf8_unicode_ci,
  `name` varchar(20) collate utf8_unicode_ci NOT NULL,
  `ID` int(10) NOT NULL auto_increment,
  `title` varchar(30) collate utf8_unicode_ci NOT NULL,
  `msgtime` datetime NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

-- 
-- 列出以下資料庫的數據： `message`
-- 

INSERT INTO `message` VALUES ('hellow', '阿文', 2, '打招呼', '2016-01-02 23:21:43');
INSERT INTO `message` VALUES ('hi', '阿wen', 3, 'say Hi', '2016-01-03 02:28:44');
INSERT INTO `message` VALUES ('hi~eve', '阿awen', 4, 'say Hi', '2016-01-03 02:31:33');
INSERT INTO `message` VALUES ('0104內文', '0104', 12, '0104留言測試', '2016-01-04 03:00:26');
INSERT INTO `message` VALUES ('test', 'wang', 11, 'nono', '2016-01-03 04:22:19');
INSERT INTO `message` VALUES ('test', 'wang', 10, 'nono', '2016-01-03 04:21:55');
INSERT INTO `message` VALUES ('hello', '小巴', 9, 'ha', '2016-01-03 04:20:02');
INSERT INTO `message` VALUES ('0104_2 內文', '0104_2', 13, '0104_2TITLE', '2016-01-04 03:36:52');
INSERT INTO `message` VALUES ('0104_2 內文', '0104_2', 14, '0104_2TITLE', '2016-01-04 03:38:23');

-- --------------------------------------------------------

-- 
-- 資料表格式： `order_car`
-- 

DROP TABLE IF EXISTS `order_car`;
CREATE TABLE `order_car` (
  `ord_id` int(10) unsigned zerofill NOT NULL auto_increment,
  `ord_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `ord_num` tinyint(2) NOT NULL,
  `ord_allprice` int(20) NOT NULL,
  `ord_note` varchar(20) collate utf8_unicode_ci NOT NULL,
  `item_id` int(10) unsigned zerofill NOT NULL,
  `cus_id` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`ord_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

-- 
-- 列出以下資料庫的數據： `order_car`
-- 

INSERT INTO `order_car` VALUES (0000000001, '2016-01-03 05:07:50', 1, 759000, '請業務星期一早上9:00過後與我連絡', 0000000002, '0000000005');
INSERT INTO `order_car` VALUES (0000000002, '2015-12-20 16:00:00', 2, 1798000, '需求是2016/1月出廠的車', 0000000005, '0000000001');
INSERT INTO `order_car` VALUES (0000000003, '2016-01-20 07:46:22', 1, 0, ' thanks', 0000000004, '0000000000');
INSERT INTO `order_car` VALUES (0000000004, '2016-01-20 21:44:22', 1, 0, ' ', 0000000004, '0000000000');
INSERT INTO `order_car` VALUES (0000000005, '2016-01-20 21:47:26', 1, 1259000, ' ', 0000000020, '0000000000');
INSERT INTO `order_car` VALUES (0000000006, '2016-01-21 06:01:23', 1, 989000, ' please contact me!', 0000000015, '0000000000');
INSERT INTO `order_car` VALUES (0000000007, '2016-01-21 06:07:57', 1, 1259000, ' ', 0000000011, '0000000000');
INSERT INTO `order_car` VALUES (0000000008, '2016-01-21 06:11:03', 1, 989000, ' ', 0000000015, 'admin');

-- --------------------------------------------------------

-- 
-- 資料表格式： `supplier`
-- 

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `sup_id` int(10) unsigned zerofill NOT NULL,
  `sup_name` varchar(10) collate utf8_unicode_ci NOT NULL,
  `sup_phone` char(10) collate utf8_unicode_ci NOT NULL,
  `sup_addr` varchar(20) collate utf8_unicode_ci NOT NULL,
  `sup_area` char(6) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`sup_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- 列出以下資料庫的數據： `supplier`
-- 

INSERT INTO `supplier` VALUES (0000000001, 'Toyota', '03-4572186', '桃園市平鎮區金陵路四段32巷5號', '桃園市');
INSERT INTO `supplier` VALUES (0000000002, 'BMW', '02-8722388', '台北市大安區延平北路一段75號', '台北市');
INSERT INTO `supplier` VALUES (0000000003, 'Bens', '04-9776258', '台中市大里區一城路133號', '台中市');
INSERT INTO `supplier` VALUES (0000000004, 'Porsche', '07-2533674', '高雄市三民區義德路36號', '高雄市');
INSERT INTO `supplier` VALUES (0000000005, 'Nissan', '02-3381687', '新北市林口區仁愛路一段25號', '新北市');
INSERT INTO `supplier` VALUES (0000000006, 'Ford', '04-4520336', '台中縣大里市中興路二段827號', '台中縣');
INSERT INTO `supplier` VALUES (0000000007, 'Toyota', '03-5572186', '桃園市平鎮區勝利路五段32巷5號', '桃園市');
INSERT INTO `supplier` VALUES (0000000008, 'BMW', '02-6722388', '台北市大安區忠孝東路五段15號', '台北市');
INSERT INTO `supplier` VALUES (0000000009, 'Bens', '04-8776258', '台中市大里區喬城路999號', '台中市');
INSERT INTO `supplier` VALUES (0000000010, 'Porsche', '07-3533674', '高雄市三民區二德路333號', '高雄市');
INSERT INTO `supplier` VALUES (0000000011, 'Nissan', '02-2381687', '新北市林口區和平路一段255號', '新北市');
INSERT INTO `supplier` VALUES (0000000012, 'Ford', '04-5520336', '台中縣大里市中興路二段7號', '台中縣');
INSERT INTO `supplier` VALUES (0000000013, 'Toyota', '03-6572186', '桃園市平鎮區成功路五段32巷5號', '桃園市');
INSERT INTO `supplier` VALUES (0000000014, 'BMW', '02-5722381', '台北市大安區忠孝東路六段15號', '台北市');
INSERT INTO `supplier` VALUES (0000000015, 'Bens', '04-7776251', '台中市大里區華美街6號', '台中市');
INSERT INTO `supplier` VALUES (0000000016, 'Porsche', '07-4533674', '高雄市三民區仁德路9號', '高雄市');
INSERT INTO `supplier` VALUES (0000000017, 'Nissan', '02-4381687', '新北市林口區信義路五段25號', '新北市');
INSERT INTO `supplier` VALUES (0000000018, 'Ford', '04-6520316', '台中縣大里市中興路五段827號', '台中縣');
INSERT INTO `supplier` VALUES (0000000019, 'Toyota', '03-7572181', '桃園市平鎮區平和路一段32巷5號', '桃園市');
INSERT INTO `supplier` VALUES (0000000020, 'BMW', '02-4722381', '台北市大安區忠孝西路四段67號', '台北市');
INSERT INTO `supplier` VALUES (0000000021, 'Bens', '04-6776258', '台中市大里區喬國路77號', '台中市');
INSERT INTO `supplier` VALUES (0000000022, 'Porsche', '07-5533671', '高雄市三民區民生路36號', '高雄市');
INSERT INTO `supplier` VALUES (0000000023, 'Nissan', '02-5381681', '新北市林口區新生路一段987號', '新北市');
INSERT INTO `supplier` VALUES (0000000024, 'Ford', '04-7520331', '台中縣大里市中興路六段827號', '台中縣');
INSERT INTO `supplier` VALUES (0000000025, 'Toyota', '03-8572186', '桃園市平鎮區仁愛路四段32巷5號', '桃園市');
INSERT INTO `supplier` VALUES (0000000026, 'BMW', '02-7722388', '台北市大安區和平東路四段15號', '台北市');
INSERT INTO `supplier` VALUES (0000000027, 'Bens', '04-9776251', '台中市大里區喬城路69號', '台中市');
INSERT INTO `supplier` VALUES (0000000028, 'Porsche', '07-2533671', '高雄市三民區義德路148號', '高雄市');
INSERT INTO `supplier` VALUES (0000000029, 'Nissan', '02-3381687', '新北市林口區仁愛路六段25號', '新北市');
INSERT INTO `supplier` VALUES (0000000030, 'Ford', '04-4520337', '台中縣大里市大里路二段827號', '台中縣');
INSERT INTO `supplier` VALUES (0000000031, 'Toyota', '03-4572187', '桃園市平鎮區金陵路四段6巷1號', '桃園市');
