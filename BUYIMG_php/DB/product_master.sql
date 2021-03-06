-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.26-MariaDB
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
-- テーブルの構造 `product_master`
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
-- テーブルのデータのダンプ `product_master`
--

INSERT INTO `product_master` (`product_id`, `product_name`, `product_introduction`, `product_path`, `price`, `size`, `type`, `upload_data`, `big_category`, `author_name`) VALUES
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
(48, '人物05', '人物05', './db_img/people05.jpg', 300, '479*470', 'JPG', '2019-02-23 15:10:18', '人物', '石川'),
(49, '自然06', '自然06\r\n', './db_img/nature06.jpg', 300, '479*470', 'JPG', '2019-02-27 17:00:14', '自然', '安藤'),
(50, '自然07', '自然07', './db_img/nature07.jpg', 400, '479*470', 'JPG', '2019-02-27 17:01:50', '自然', '安藤'),
(51, '自然08', '自然08', './db_img/nature08.jpg', 300, '479*470', 'JPG', '2019-02-27 17:03:03', '自然', '安藤'),
(52, '自然09', '自然09', './db_img/nature09.jpg', 300, '479*470', 'JPG', '2019-02-27 17:04:12', '自然', '安藤'),
(53, '自然10', '自然10', './db_img/nature10.jpg', 400, '479*470', 'JPG', '2019-02-27 17:05:08', '自然', '安藤'),
(54, '自然11', '自然11', './db_img/nature11.jpg', 400, '479*470', 'JPG', '2019-02-27 17:06:14', '自然', '安藤'),
(55, '自然12', '自然12', './db_img/nature12.jpg', 300, '479*470', 'JPG', '2019-02-27 17:07:11', '自然', '山口'),
(56, '自然13', '自然13', './db_img/nature13.jpg', 300, '479*470', 'JPG', '2019-02-27 17:08:09', '自然', '山口'),
(57, '自然14', '自然14', './db_img/nature14.jpg', 300, '479*470', 'JPG', '2019-02-27 17:09:19', '自然', '山口'),
(58, '自然15', '自然15', './db_img/nature15.jpg', 400, '479*470', 'JPG', '2019-02-27 17:10:05', '自然', '山口'),
(59, '自然16', '自然16', './db_img/nature16.jpg', 300, '479*470', 'JPG', '2019-02-27 17:25:53', '自然', '山口'),
(60, '自然17', '自然17', './db_img/nature17.jpg', 400, '479*470', 'JPG', '2019-02-27 17:26:38', '自然', '山口'),
(61, '自然18', '自然18', './db_img/nature18.jpg', 400, '479*470', 'JPG', '2019-02-27 17:27:43', '自然', '山口'),
(62, '自然19', '自然19', './db_img/nature19.jpg', 300, '479*470', 'JPG', '2019-02-27 17:28:47', '自然', '山口'),
(63, '自然20', '自然20', './db_img/nature20.jpg', 400, '479*470', 'JPG', '2019-02-27 17:29:32', '自然', '山口'),
(64, '人物06', '人物06', './db_img/people06.jpg', 300, '479*470', 'JPG', '2019-02-27 17:33:06', '人物', '中沢'),
(65, '人物07', '人物07', './db_img/people07.jpg', 300, '479*470', 'JPG', '2019-02-27 17:34:31', '人物', '中沢'),
(66, '人物08', '人物08', './db_img/people08.jpg', 400, '479*470', 'JPG', '2019-02-27 17:35:41', '人物', '中沢'),
(67, '人物09', '人物09', './db_img/people09.jpg', 400, '479*470', 'JPG', '2019-02-27 17:36:43', '人物', '中沢'),
(68, '人物10', '人物10', './db_img/people10.jpg', 400, '479*470', 'JPG', '2019-02-27 17:37:30', '人物', '中沢'),
(69, '人物11', '人物11', './db_img/people11.jpg', 300, '479*470', 'JPG', '2019-02-27 17:38:20', '人物', '中沢'),
(70, '人物12', '人物12', './db_img/people12.jpg', 400, '479*470', 'JPG', '2019-02-27 17:39:01', '人物', '中沢'),
(71, '人物13', '人物13', './db_img/people13.jpg', 400, '479*470', 'JPG', '2019-02-27 17:40:14', '人物', '川村'),
(72, '人物14', '人物14', './db_img/people14.jpg', 300, '479*470', 'JPG', '2019-02-27 17:43:24', '人物', '川村'),
(73, '人物15', '人物15', './db_img/people15.jpg', 300, '479*470', 'JPG', '2019-02-27 17:44:11', '人物', '川村'),
(74, '人物16', '人物16', './db_img/people16.jpg', 300, '479*470', 'JPG', '2019-02-27 17:45:59', '人物', '川村'),
(75, '人物17', '人物17', './db_img/people17.jpg', 300, '479*470', 'JPG', '2019-02-27 17:46:52', '人物', '川村'),
(76, '人物18', '人物18', './db_img/people18.jpg', 400, '479*470', 'JPG', '2019-02-27 17:48:18', '人物', '川村'),
(77, '人物19', '人物19', './db_img/people19.jpg', 300, '479*470', 'JPG', '2019-02-27 17:49:33', '人物', '川村'),
(78, '人物20', '人物20', './db_img/people20.jpg', 400, '479*470', 'JPG', '2019-02-27 17:51:18', '人物', '川村'),
(79, '生活06', '生活06', './db_img/life06.jpg', 400, '479*470', 'JPG', '2019-02-28 14:05:50', '生活', '橋本'),
(80, '生活07', '生活07', './db_img/life07.jpg', 300, '479*470', 'JPG', '2019-02-28 14:07:16', '生活', '橋本'),
(81, '生活08', '生活08', './db_img/life08.jpg', 400, '479*470', 'JPG', '2019-02-28 14:08:05', '生活', '橋本'),
(82, '生活09', '生活09', './db_img/life09.jpg', 300, '479*470', 'JPG', '2019-02-28 14:08:46', '生活', '橋本'),
(83, '生活10', '生活10', './db_img/life10.jpg', 300, '479*470', 'JPG', '2019-02-28 14:09:38', '生活', '橋本'),
(84, '生活11', '生活11', './db_img/life11.jpg', 300, '479*470', 'JPG', '2019-02-28 14:10:55', '生活', '橋本'),
(85, '生活12', '生活12', './db_img/life12.jpg', 400, '479*470', 'JPG', '2019-02-28 14:11:35', '生活', '橋本'),
(86, '生活13', '生活13', './db_img/life13.jpg', 400, '479*470', 'JPG', '2019-02-28 14:13:13', '生活', '馬場'),
(87, '生活14', '生活14', './db_img/life14.jpg', 400, '479*470', 'JPG', '2019-02-28 14:13:57', '生活', '馬場'),
(88, '生活15', '生活15', './db_img/life15.jpg', 300, '479*470', 'JPG', '2019-02-28 14:14:40', '生活', '馬場'),
(89, '生活16', '生活16', './db_img/life16.jpg', 300, '479*470', 'JPG', '2019-02-28 14:15:23', '生活', '馬場'),
(90, '生活17', '生活17', './db_img/life17.jpg', 400, '479*470', 'JPG', '2019-02-28 14:16:49', '生活', '馬場'),
(91, '生活18', '生活18', './db_img/life18.jpg', 400, '479*470', 'JPG', '2019-02-28 14:17:35', '生活', '馬場'),
(92, '生活19', '生活19', './db_img/life19.jpg', 400, '479*470', 'JPG', '2019-02-28 14:18:18', '生活', '馬場'),
(93, '生活20', '生活20', './db_img/life20.jpg', 400, '479*470', 'JPG', '2019-02-28 14:19:10', '生活', '馬場'),
(94, 'イベント06', 'イベント06', './db_img/event06.jpg', 300, '479*470', 'JPG', '2019-02-28 14:22:09', 'イベント', '深沢'),
(95, 'イベント07', 'イベント07', './db_img/event07.jpg', 300, '479*470', 'JPG', '2019-02-28 14:23:54', 'イベント', '深沢'),
(97, 'イベント08', 'イベント08', './db_img/event08.jpg', 400, '479*470', 'JPG', '2019-02-28 14:25:05', 'イベント', '深沢'),
(98, 'イベント09', 'イベント09', './db_img/event09.jpg', 300, '479*470', 'JPG', '2019-02-28 14:25:50', 'イベント', '深沢'),
(99, 'イベント10', 'イベント10', './db_img/event10.jpg', 400, '479*470', 'JPG', '2019-02-28 14:26:34', 'イベント', '深沢'),
(100, 'イベント12', 'イベント12', './db_img/event12.jpg', 400, '479*470', 'JPG', '2019-02-28 14:27:20', 'イベント', '深沢'),
(101, 'イベント12', 'イベント12', './db_img/event12.jpg', 400, '479*470', 'JPG', '2019-02-28 14:28:22', 'イベント', '深沢'),
(102, 'イベント13', 'イベント13', './db_img/event13.jpg', 400, '479*470', 'JPG', '2019-02-28 14:40:27', 'イベント', '木村'),
(103, 'イベント14', 'イベント14', './db_img/event14.jpg', 300, '479*470', 'JPG', '2019-02-28 14:41:16', 'イベント', '木村'),
(104, 'イベント15', 'イベント15', './db_img/event15.jpg', 400, '479*470', 'JPG', '2019-02-28 14:41:59', 'イベント', '木村'),
(105, 'イベント16', 'イベント16', './db_img/event16.jpg', 400, '479*470', 'JPG', '2019-02-28 14:42:53', 'イベント', '木村'),
(106, 'イベント17', 'イベント17', './db_img/event17.jpg', 300, '479*470', 'JPG', '2019-02-28 14:43:29', 'イベント', '木村'),
(107, 'イベント18', 'イベント18', './db_img/event.jpg', 400, '479*470', 'JPG', '2019-02-28 14:44:07', 'イベント', '木村'),
(108, 'イベント19', 'イベント19', './db_img/event19.jpg', 500, '479*470', 'JPG', '2019-02-28 14:44:47', 'イベント', '木村'),
(109, 'イベント20', 'イベント20', './db_img/event20.jpg', 400, '479*470', 'JPG', '2019-02-28 14:45:36', 'イベント', '木村'),
(110, 'ビジネス06', 'ビジネス06', './db_img/business06.jpg', 200, '479*470', 'JPG', '2019-02-28 14:48:02', 'ビジネス', '沖田'),
(111, 'ビジネス07', 'ビジネス07', './db_img/business07.jpg', 600, '479*470', 'JPG', '2019-02-28 14:48:54', 'ビジネス', '沖田'),
(112, 'ビジネス08', 'ビジネス08', './db_img/business08.jpg', 400, '479*470', 'JPG', '2019-02-28 14:49:40', 'ビジネス', '沖田'),
(113, 'ビジネス09', 'ビジネス09', './db_img/business09.jpg', 600, '479*470', 'JPG', '2019-02-28 14:50:18', 'ビジネス', '沖田'),
(114, 'ビジネス10', 'ビジネス10', './db_img/business10.jpg', 400, '479*470', 'JPG', '2019-02-28 14:50:59', 'ビジネス', '沖田'),
(115, 'ビジネス11', 'ビジネス11', './db_img/business11.jpg', 600, '479*470', 'JPG', '2019-02-28 14:51:50', 'ビジネス', '沖田'),
(116, 'ビジネス12', 'ビジネス12', './db_img/business12.jpg', 500, '479*470', 'JPG', '2019-02-28 14:52:44', 'ビジネス', '沖田'),
(117, 'ビジネス13', 'ビジネス13', './db_img/business13.jpg', 300, '479*470', 'JPG', '2019-02-28 14:54:01', 'ビジネス', '青山'),
(118, 'ビジネス14', 'ビジネス14', './db_img/business14.jpg', 200, '479*470', 'JPG', '2019-02-28 14:54:51', 'ビジネス', '青山'),
(119, 'ビジネス15', 'ビジネス15', './db_img/business15.jpg', 600, '479*470', 'JPG', '2019-02-28 14:55:34', 'ビジネス', '青山'),
(120, 'ビジネス16', 'ビジネス16', './db_img/business16.jpg', 600, '479*470', 'JPG', '2019-02-28 14:56:19', 'ビジネス', '青山'),
(121, 'ビジネス17', 'ビジネス17', './db_img/business17.jpg', 200, '479*470', 'JPG', '2019-02-28 14:57:00', 'ビジネス', '青山'),
(122, 'ビジネス18', 'ビジネス18', './db_img/business18.jpg', 300, '479*470', 'JPG', '2019-02-28 14:57:44', 'ビジネス', '青山'),
(123, 'ビジネス19', 'ビジネス19', './db_img/business19.jpg', 400, '479*470', 'JPG', '2019-02-28 14:58:28', 'ビジネス', '青山'),
(124, 'ビジネス20', 'ビジネス20', './db_img/business20.jpg', 200, '479*470', 'JPG', '2019-02-28 14:59:18', 'ビジネス', '青山');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '素材ID', AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
