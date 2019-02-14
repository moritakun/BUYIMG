-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019-02-13 06:00:03
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
(20, 'おもちゃ車', 'おもちゃ車', './picture/car4.jpg', 300, '479*470', 'JPG', '2019-02-07 14:52:44', '車', '小島');

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '素材ID', AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
