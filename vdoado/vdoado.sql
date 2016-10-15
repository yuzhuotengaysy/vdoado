-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-10-15 03:34:50
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vdoado`
--

-- --------------------------------------------------------

--
-- 表的结构 `ado`
--

CREATE TABLE `ado` (
  `ado_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL COMMENT '练习编号（外键）',
  `ado_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '音频名称',
  `ado_file` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '音频文件名称'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='视频和音频一对多对应关系';

--
-- 转存表中的数据 `ado`
--

INSERT INTO `ado` (`ado_id`, `test_id`, `ado_name`, `ado_file`) VALUES
(1, 1, '音频1', '1.ogg'),
(2, 1, '音频2', '2.ogg'),
(3, 1, '音频3', '3.ogg'),
(4, 2, '音频2', '2.ogg'),
(5, 2, '音频4', '4.ogg'),
(6, 2, '音频5', '5.ogg'),
(7, 2, '音频6', '6.ogg');

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL COMMENT '课程编号',
  `course_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '课程名',
  `course_pubtime` datetime DEFAULT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='课程信息';

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_pubtime`) VALUES
(1, '试讲1', '2016-10-18 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL COMMENT '练习编号（外键）',
  `student_id` int(11) NOT NULL COMMENT '学生编号（外键）',
  `ado_id` int(11) NOT NULL COMMENT '音频编号（外键）'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='练习结果信息';

--
-- 转存表中的数据 `result`
--

INSERT INTO `result` (`result_id`, `test_id`, `student_id`, `ado_id`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 3),
(3, 1, 2, 2);

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL COMMENT '学生编号',
  `student_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '学生姓名'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`student_id`, `student_name`) VALUES
(1, '张三'),
(2, '李四'),
(3, '王五'),
(4, '张无忌'),
(5, '周芷若'),
(6, '张三丰');

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL COMMENT '练习编号',
  `course_id` int(11) NOT NULL COMMENT '课程编号（外键）',
  `test_title` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '练习名称（一般是练习一，练习二...）',
  `test_vdo_file` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '视频文件名称'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='测试信息';

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`test_id`, `course_id`, `test_title`, `test_vdo_file`) VALUES
(1, 1, '练习1', 'video.mp4'),
(2, 1, '练习2', 'video.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ado`
--
ALTER TABLE `ado`
  ADD PRIMARY KEY (`ado_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ado`
--
ALTER TABLE `ado`
  MODIFY `ado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '课程编号', AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '学生编号', AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '练习编号', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
