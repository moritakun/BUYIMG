-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019-02-23 07:24:45
-- 服务器版本： 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rain_site`
--

-- --------------------------------------------------------

--
-- 表的结构 `product_master`
--

CREATE TABLE `product_master` (
  `product_id` int(11) NOT NULL COMMENT '素材ID',
  `product_name` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '素材名',
  `product_introduction` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '素材紹介',
  `product_path` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '素材データ',
  `price` int(30) NOT NULL COMMENT '価格',
  `size` varchar(30) COLLATE utf8_bin NOT NULL COMMENT 'サイズ',
  `type` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '拡張子',
  `upload_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'アップロード日',
  `big_category` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '大カテゴリ名',
  `author_name` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '作者名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='素材一覧';

--
-- 转存表中的数据 `product_master`
--

INSERT INTO `product_master` (`product_id`, `product_name`, `product_introduction`, `product_path`, `price`, `size`, `type`, `upload_data`, `big_category`, `author_name`) VALUES
(1, 'オッサン', 'オッサン', './picture/people1.jpg', 300, '479*470', 'JPG', '2019-02-07 14:43:22', '人', '小林'),
(5, '女', '女', './picture/people2.jpg', 400, '470*500', 'JPG', '2019-02-07 14:45:04', '人', '小林'),
(7, '赤ちゃん', '赤ちゃん', './picture/people3.jpg', 300, '479*470', 'JPG', '2019-02-07 14:47:33', '人', '小林'),
(8, '女の子', '女の子', './picture/people4.jpg', 300, '479*470', 'JPG', '2019-02-07 14:48:22', '人', '小林'),
(9, 'パソコン', 'パソコン', './picture/mono1.jpg', 300, '479*470', 'JPG', '2019-02-07 14:49:26', '物', '安藤'),
(10, 'ぺん', 'ぺん', './picture/mono2.jpg', 400, '470*500', 'JPG', '2019-02-07 14:50:06', '物', '安藤'),
(11, 'バック', 'バック', './picture/mono3.jpg', 400, '479*470', 'JPG', '2019-02-07 14:50:38', '物', '安藤'),
(12, 'テーブル', 'テーブル', './picture/mono4.jpg', 400, '479*470', 'JPG', '2019-02-07 14:51:07', '物', '安藤'),
(13, 'パンダ', 'パンダ', './picture/animal1.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '動物', '碇'),
(14, 'ゾウ', 'ゾウ', './picture/animal2.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '動物', '碇'),
(15, 'とら', 'とら', './picture/animal3.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '動物', '碇'),
(16, 'サル', 'サル', './picture/animal4.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '動物', '碇'),
(17, '安い車', '安い車', './picture/car1.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '車', '小島'),
(18, '高い車', '高い車', './picture/car2.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '車', '小島'),
(19, 'イラスト車', 'イラスト車', './picture/car3.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '車', '小島'),
(20, 'おもちゃ車', 'おもちゃ車', './picture/car4.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '車', '小島'),
(21, 'good', 'good', './picture/people5.jpg', 400, '479*470', 'JPG', '2019-02-20 16:10:41', '人', '小林'),
(22, 'jk', 'jk', './picture/people6.jpg', 400, '479*470', 'JPG', '2019-02-20 16:10:41', '人', '小林'),
(23, 'オカマ', 'オカマ', './picture/people7.jpg', 400, '479*470', 'JPG', '2019-02-20 16:10:41', '人', '小林'),
(24, 'ビジネス01', 'ビジネス01', './db_img/business01.jpg', 400, '479*470', 'JPG', '2019-02-23 14:49:28', 'ビジネス', '小林'),
(25, 'ビジネス02', 'ビジネス02', './db_img/business02.jpg', 300, '479*470', 'JPG', '2019-02-23 14:50:16', 'ビジネス', '小林'),
(26, 'ビジネス03', 'ビジネス03', './db_img/business03.jpg', 300, '479*470', 'JPG', '2019-02-23 14:52:26', 'ビジネス', '小林'),
(27, 'ビジネス04', 'ビジネス04', './db_img/business04.jpg', 400, '479*470', 'JPG', '2019-02-23 14:53:00', 'ビジネス', '小林'),
(28, 'ビジネス05', 'ビジネス05', './db_img/business05.jpg', 400, '479*470', 'JPG', '2019-02-23 14:53:25', 'ビジネス', '小林'),
(29, 'イベント01', 'イベント01', './db_img/event01.jpg', 400, '479*470', 'JPG', '2019-02-23 14:54:49', 'イベント', '小島'),
(30, 'イベント04', 'イベント04', './db_img/event04.jpg', 300, '479*470', 'JPG', '2019-02-23 14:55:24', 'イベント', '小島'),
(31, 'イベント02', 'イベント02', './db_img/event02.jpg', 300, '479*470', 'JPG', '2019-02-23 14:56:27', 'イベント', '小島'),
(32, 'イベント03', 'イベント03', './db_img/event03.jpg', 300, '479*470', 'JPG', '2019-02-23 14:56:57', 'イベント', '小島'),
(33, 'イベント05', 'イベント05', './db_img/event05.jpg', 300, '479*470', 'JPG', '2019-02-23 14:58:11', 'イベント', '小島'),
(34, '生活01', '生活01', './db_img/life01.jpg', 300, '479*470', 'JPG', '2019-02-23 14:59:22', '生活', '碇'),
(35, '生活02', '生活02', './db_img/life02.jpg', 300, '479*470', 'JPG', '2019-02-23 15:00:02', '生活', '碇'),
(36, '生活03', '生活03', './db_img/life03.jpg', 400, '479*470', 'JPG', '2019-02-23 15:00:41', '生活', '碇'),
(37, '生活04', '生活04', './db_img/life04.jpg', 400, '479*470', 'JPG', '2019-02-23 15:01:17', '生活', '碇'),
(38, '生活05', '生活05', './db_img/life05.jpg', 300, '479*470', 'JPG', '2019-02-23 15:01:39', '生活', '碇'),
(39, '自然01', '自然01', './db_img/nature01.jpg', 300, '479*470', 'JPG', '2019-02-23 15:03:10', '自然', '安藤'),
(40, '自然02', '自然02', './db_img/nature02.jpg', 300, '479*470', 'JPG', '2019-02-23 15:04:04', '自然', '安藤'),
(41, '自然03', '自然03', './db_img/nature03.jpg', 300, '479*470', 'JPG', '2019-02-23 15:04:33', '自然', '安藤'),
(42, '自然04', '自然04', './db_img/nature04.jpg', 400, '479*470', 'JPG', '2019-02-23 15:05:01', '自然', '安藤'),
(43, '自然05', '自然05', './db_img/nature05.jpg', 300, '479*470', 'JPG', '2019-02-23 15:05:26', '自然', '安藤'),
(44, '人物01', '人物01', './db_img/people01.jpg', 300, '479*470', 'JPG', '2019-02-23 15:08:16', '人物', '石川'),
(45, '人物02', '人物02', './db_img/people02.jpg', 300, '470*500', 'JPG', '2019-02-23 15:08:53', '人物', '石川'),
(46, '人物03', '人物03', './db_img/people03.jpg', 300, '479*470', 'JPG', '2019-02-23 15:09:25', '人物', '石川'),
(47, '人物04', '人物04', './db_img/people04.jpg', 400, '479*470', 'JPG', '2019-02-23 15:09:50', '人物', '石川'),
(48, '人物05', '人物05', './db_img/people05.jpg', 300, '479*470', 'JPG', '2019-02-23 15:10:18', '人物', '石川');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '素材ID', AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
