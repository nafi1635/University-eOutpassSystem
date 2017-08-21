-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2017 at 05:23 PM
-- Server version: 5.6.33-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lid` int(100) NOT NULL,
  `did` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `lid`, `did`, `name`, `phone`, `mail`, `pwd`) VALUES
(1, 1234, 5, 'Sujoy', '', '', 'nani'),
(2, 1235, 6, 'Ranjith', '', '', ''),
(4, 1236, 7, 'cso', '', '', ''),
(5, 1237, 1, 'si', '', '', 'nani'),
(6, 1238, 6, 'Rajkumar', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `name` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `id`, `feedback`, `cid`) VALUES
('naveena', '121', 'jbsdhsh', 12),
('Junjuri Naveena', 'B121755', 'dstdstfj', 11),
('Junjuri Naveena', 'B121755', 'sdguys', 11),
('Sujoy', '1001', 'sdfe', 1),
('Sujoy', '1001', 'vfy', 1),
('Sujoy', '1001', 'ahfihai', 1),
('Sujoy', '1001', 'ahfihai', 1),
('Sujoy', '1001', 'Plz check it', 1),
('Junjuri Naveena', 'B121755', 'Enter feed back', 11),
('Sujoy', '1001', 'Iam java faculty', 1),
('Sujoy', '1001', 'Iam java faculty', 1),
('Junjuri Naveena', 'B121755', 'my vgvxzb', 11),
('Junjuri Naveena', 'B121755', 'my vgvxzb', 11),
('Junjuri Naveena', 'B121755', 'my vgvxzb', 11),
('Junjuri Naveena', 'B121755', 'my vgvxzb', 11),
('Sujoy', '1001', 'My name is so and so', 1),
('Anusha Ammula', 'B121621', 'jdjsadgasjk', 1),
('Anusha Ammula', 'B121621', 'hi', 1),
('Anusha Ammula', 'B121621', 'nothing', 1),
('Anusha Ammula', 'B121621', 'ello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE IF NOT EXISTS `issue` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `name`) VALUES
(1, 'Emergency'),
(5, 'Vacation'),
(6, 'Academics'),
(7, 'Health');

-- --------------------------------------------------------

--
-- Table structure for table `op`
--

CREATE TABLE IF NOT EXISTS `op` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `purpose` varchar(250) NOT NULL,
  `reason` varchar(250) NOT NULL,
  `fdate` date NOT NULL,
  `tdate` date NOT NULL,
  `ndays` int(10) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `approve` int(10) NOT NULL,
  `appdate` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `op`
--

INSERT INTO `op` (`id`, `aid`, `uid`, `purpose`, `reason`, `fdate`, `tdate`, `ndays`, `time`, `approve`, `appdate`) VALUES
(19, 2, 11, '234', '2345', '0000-00-00', '0000-00-00', 34, '2017-04-03 04:21:59.000000', 0, '0000-00-00 00:00:00.000000'),
(23, 1, 1, 'Vacation', 'Sankranthi', '2017-04-04', '2017-04-06', 4, '2017-04-04 10:56:11.639504', 1, '0000-00-00 00:00:00.000000'),
(26, 1, 1, 'FFG', 'H5', '1997-11-09', '0000-00-00', 4, '2017-04-09 06:05:33.656958', 1, '0000-00-00 00:00:00.000000'),
(28, 1, 1, 'edrv', 'wed', '0000-00-00', '0000-00-00', 0, '2017-04-11 15:26:17.346768', 1, '0000-00-00 00:00:00.000000'),
(29, 1, 1, 'supriya', 'network', '1997-11-09', '0000-00-00', 34, '2017-04-09 06:07:32.980351', 1, '0000-00-00 00:00:00.000000'),
(31, 5, 15, 'emeragancy', 'sir i wghbjk', '2017-04-11', '2017-04-13', 3, '2017-04-11 15:29:15.579905', 1, '0000-00-00 00:00:00.000000'),
(32, 5, 16, 'SDJSJDO', 'SJDOSDJOIS', '0000-00-00', '0000-00-00', 98765432, '2017-04-11 16:15:30.000000', 0, '0000-00-00 00:00:00.000000'),
(34, 5, 17, 'I got fever', 'I should go home dts it', '2017-04-14', '2017-04-17', 10, '2017-04-14 09:32:25.161273', 1, '0000-00-00 00:00:00.000000'),
(35, 1, 17, 'Hi sir', 'I know you please let me go out', '2017-04-14', '2017-04-17', 10, '2017-04-14 06:59:08.015310', 1, '0000-00-00 00:00:00.000000'),
(36, 1, 1, 'qsd', 'zdfgh', '0000-00-00', '0000-00-00', 232, '2017-04-14 13:24:11.172759', 1, '0000-00-00 00:00:00.000000'),
(37, 5, 1, 'hai sir', 'jl', '0000-00-00', '1997-11-10', 1, '2017-04-14 13:18:45.000000', 0, '0000-00-00 00:00:00.000000'),
(38, 5, 1, 'aqsd', 'asd', '1997-11-09', '1997-11-10', 1, '2017-04-14 13:19:09.000000', 0, '0000-00-00 00:00:00.000000'),
(39, 5, 15, 'something', 'something', '2017-04-14', '2017-04-17', 3, '2017-04-15 03:47:20.000000', 0, '0000-00-00 00:00:00.000000'),
(40, 5, 18, 'JDBVJDBV', 'DFHHSDFHDUSH', '1997-11-09', '1997-11-11', 2, '2017-04-15 08:37:59.000000', 0, '0000-00-00 00:00:00.000000'),
(41, 0, 15, 'hu', '', '1997-11-09', '1997-11-09', 0, '2017-04-15 08:58:07.000000', 0, '0000-00-00 00:00:00.000000'),
(42, 0, 15, 'aasd', 'asd', '0000-00-00', '0000-00-00', 0, '2017-04-15 09:00:26.000000', 0, '0000-00-00 00:00:00.000000'),
(43, 0, 15, '123', 'as', '0000-00-00', '0000-00-00', 0, '2017-04-15 09:03:00.000000', 0, '0000-00-00 00:00:00.000000'),
(44, 1, 15, 'fguyyuy', 'bnnnn', '2013-04-14', '2012-04-17', 100, '2017-04-15 09:26:45.040809', 1, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `id` int(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bid` varchar(10) DEFAULT NULL,
  `firstname` varchar(48) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `bday` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `hostel` varchar(30) NOT NULL,
  `class` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `vil` varchar(100) NOT NULL,
  `mdl` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `parent` varchar(11) NOT NULL,
  `imagepath` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `bid`, `firstname`, `lastname`, `name`, `bday`, `email`, `pwd`, `phone`, `hostel`, `class`, `time`, `father`, `mother`, `vil`, `mdl`, `dist`, `post`, `parent`, `imagepath`) VALUES
(1, 'B121621', 'ANUSHA', 'Ammula', 'Anusha Ammula', '12041997', 'junjuri.naveena@gmail.com', 'anusha', '9876543', 'GH1', 'AB1 103', '', '', '', 'bnm', 'vbn', 'vbnm', '234567', '876543', 'uploads/12.jpeg'),
(13, 'B121805', '', '', 'Supriya', '', 'supriya@gmail.com', 'supriya', '', '', '', '2017-4-4 15:45:6', '', '', '', '', '', '', '', ''),
(15, 'B121755', 'Naveena', 'Junjuri', 'Naveena Junjuri', '12-04-1997', 'junjuri.naveena@gmail.com', 'nani', '9701247975', 'GH1', '103', '2017-4-11 11:26:2', '', '', 'Arpapally', 'Sarangapur', 'Jagtial', '505529', '9701824797', 'uploads/cap.jpeg'),
(16, 'B121295', 'SHIRESHA', 'SIRI', 'SDJOSDH', 'SWIDJOSID', 'OASDOHS', '12345', 'OSDHJOSH', 'OSDOSHDF', 'OSIDOSHD', '2017-4-11 21:44:10', '', '', 'OSHJOHDF', 'OISHDOS', 'OISHDOS', 'OISHJDOIHS', 'OHSDOH', ''),
(18, 'B121799', 'SOUJANYA', 'SANDELA', 'soujanya', '20/09/1996', '', 'bunny', '9848861334', 'GH1', 'ab1-103', '2017-4-15 14:4:56', 'SWAMY', 'VENKATALAXMI', '3-22/5', 'MUTHARAM', 'PEDDAPALLI', '505184', '9676898350', 'uploads/cute-kid-with-cute-smile.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
