-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-04-29 03:29:23
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--宿舍伐木累（Dormitory   family），用户可以在这个平台匿名分享宿舍喜怒哀乐，相当于一个树洞，在这个平台，用户可以发布、编辑、删除说说。
CREATE DATABASE dormitory_family;
USE dormitory_family;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `content` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `posts`
--

INSERT INTO `posts` (`id`, `title`, `date`, `content`, `name`) VALUES
(45, 'å®¿èˆå¤œè°ˆå²ï¼ˆä¸€ï¼‰', '2019-04-29 09:29:03', 'å†›è®­é‚£ä¼šå„¿ï¼Œæ™šä¸Šæ´—å®Œæ¾¡ï¼Œå› ä¸ºæ²¡æœ‰ä»€ä¹ˆäº‹å„¿ï¼Œæˆ‘ä»¬å¼€å¯äº†ä¸€åœºåˆä¸€åœºçš„å¤œèŠï¼Œç»†æ•°è‡ªå·±ä»Žå°åˆ°å¤§çš„puppy loveï¼Œå›žå¿†è‡ªå·±çš„å¥‡è‘©åŒæ¡Œï¼Œä¸ºä»€ä¹ˆæœ€ç»ˆæ¥äº†åŽå¸ˆç­‰ç­‰ï¼Œæ— è¯ä¸è¯´ï¼Œå“ˆå“ˆå“ˆ...', 'ç†¬å¤œåˆ°å¤©äº®');

--
-- 转储表的索引
--

--
-- 表的索引 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

