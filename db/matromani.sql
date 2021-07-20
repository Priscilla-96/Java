-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 20, 2021 at 06:17 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matromani`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(5) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` int(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `profilecreatedby` varchar(20) NOT NULL,
  `education` text NOT NULL,
  `education_sub` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `body_type` text NOT NULL,
  `physical_status` text NOT NULL,
  `drink` varchar(8) NOT NULL,
  `mothertounge` text NOT NULL,
  `colour` varchar(20) NOT NULL,
  `weight` int(5) NOT NULL,
  `diet` varchar(8) NOT NULL,
  `smoke` varchar(8) NOT NULL,
  `dateofbirth` varchar(10) NOT NULL,
  `occupation` text NOT NULL,
  `occupation_descr` text NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `aboutme` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `profilecreationdate` date NOT NULL,
  `contact` int(20) NOT NULL,
  `Identity_card_no` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `email`, `age`, `height`, `sex`, `religion`, `caste`, `district`, `state`, `country`, `maritalstatus`, `profilecreatedby`, `education`, `education_sub`, `firstname`, `lastname`, `body_type`, `physical_status`, `drink`, `mothertounge`, `colour`, `weight`, `diet`, `smoke`, `dateofbirth`, `occupation`, `occupation_descr`, `annual_income`, `aboutme`, `profilecreationdate`, `contact`, `Identity_card_no`) VALUES
(111, 0, 'jhgasdasd@hjsadkl.cop', '27', 0, 'Male', 'Hindu', 'Thiyya', 'Wayanad', 'Kerala', 'India', 'Single', 'Self', 'Primary', '', 'test', 'testyhtjsdf', 'Slim', 'No Problem', 'Sometime', 'Malayalam', 'Dark', 58, 'Veg', 'Sometime', '1996-01-12', 'dgdsgsdf', 'gdsg', '4654456', 'dfgdsgdsfg', '2016-02-27', 0, ''),
(113, 12, 'asdasdasd@asdfsadf.com', '18', 0, 'Male', 'Hindu', 'Thiyya', 'Wayanad', 'Kerala', 'India', 'Single', 'Self', 'PG', 'dsadasd', 'Aswin', 'Kuttappi', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 58, 'Veg', 'No', '1998-02-14', 'das', 'dasdas', '8598', 'assdfsdf sdfas fasdf asdfasdf asdf', '2016-02-28', 0, ''),
(114, 13, 'asdasdasd@asdfsadf.com', '18', 0, 'Female', 'Hindu', 'Thiyya', 'Wayanad', 'Kerala', 'India', 'Single', 'Self', 'PG', 'dsadasd', 'Reshma', 'Reshma', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 58, 'Veg', 'No', '1998-02-14', 'das', 'dasdas', '8598', 'assdfsdf sdfas fasdf asdfasdf asdf', '2016-02-28', 0, ''),
(116, 16, 'greentom16@gmail.com', '26', 180, 'Male', 'Christian', 'Roman Cathaolic', 'Kollam', 'Taminadu', 'China', 'Single', 'Self', 'Degree', 'mkkmj', 'green', 'tom', 'Average', 'No Problem', 'Yes', 'Malayalam', 'Fair', 60, 'Non Veg', 'No', '1994-06-12', 'kkl', '', '10000', 'mklmlkm', '2021-05-18', 0, ''),
(119, 26, 'dsads@dsads.dsads', '4', 45, 'Male', 'Hindu', 'dsads', 'Nuwara Eliya', 'Sabaragamuwa', 'China', 'Single', 'Son/Daughter', 'Doctorate', 'dsads', 'dsads', 'dsads', 'Fat', 'Deaf', 'Yes', 'Hindi', 'Dark', 555, 'Veg', 'Yes', '1989-06-8', 'dsads', 'dsads', '44', 'dsads', '2021-05-20', 0, ''),
(120, 27, 'newThree@gmail.com', '20', 140, 'Male', 'Buddhist', 'newThreeCaste', 'Kegalle', 'Central', 'Srilanka', 'Single', 'Self', 'Ordinary level', 'newThreespecial', 'newThreeFN', 'newThreeLN', 'Average', 'Blind', 'Sometime', 'Malayalam', 'Dark', 40, 'Veg', 'Yes', '1980-01-1', 'newThreeoccupation', 'newThreeoccupationdescription', '1000', 'newThreeabout', '2021-05-20', 0, ''),
(121, 28, 'newfour@newfour.newfour', '45', 0, 'Male', 'Not Applicable', '', '', '', 'Australia', 'Not Defined', 'Self', 'Not Defined', 'newfour', 'newfour', 'newfour', 'Not Defined', 'No Problem', 'Not Defi', 'Malayalam', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1994-04-14', 'newfour', 'newfour', '12321', 'newfour', '2021-05-20', 0, ''),
(122, 29, 'newew@newew.newew', '45', 178, 'Male', 'Buddhist', 'newew', 'Nuwara Eliya', 'North Central', 'Australia', 'Single', 'Self', 'Advance Level', 'newew', 'newew', 'newew', 'Slim', 'Blind', 'No', 'Hindi', 'Dark', 12, 'Veg', 'Sometime', '1992-11-13', 'newew', 'newew', '12', 'newew', '2021-05-20', 0, ''),
(125, 36, 'oododo@dddsa.dsa', '7', 78, 'Male', 'Hindu', 'jljkl', 'Kandy', 'Central', 'Srilanka', 'Single', 'Son/Daughter', 'Primary', 'hjbjh', 'ooo', 'oods', 'Slim', 'Blind', 'No', 'Tamil', 'Dark', 78, 'Veg', 'No', '1987-01-04', 'ujhnjk', 'bhbju', '1232', 'bhbkhbhjbh', '2021-05-25', 0, ''),
(139, 50, 'pol@plm.mkl', '54', 87, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Not Defined', 'Self', 'Ordinary level', '', 'polopioio', 'uiui', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 23, 'Not Defi', 'Not Defi', '1980-01-01', 'jnjbjb', 'nbnjn', '448', 'mkn', '2021-05-27', 1231313, '7897897897897'),
(140, 51, 'dsads@dsads.dsads', '45', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Not Defined', 'Self', 'Not Defined', '', 'lon', 'dsa', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-28', 0, ''),
(141, 52, 'sdf@gmail.com', '45', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Not Defined', 'Self', 'Not Defined', '', 'lolloldas', 'sads', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-28', 789789, '1564564'),
(142, 53, 'dsa@dsa.dsa', '78', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'ndbcsadsa', 'dsadsa', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-30', 12131, '546465'),
(143, 54, 'chrishemisworth@gmail.com', '45', 190, 'Male', 'Christian', '', 'Nuwara Eliya', 'Sabaragamuwa', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'Chris', 'Hemisworth', 'Average', 'No Problem', 'Sometime', 'English', 'Fair', 100, 'Not Defi', 'Sometime', '1990-03-14', '', '', '1000000', '', '2021-05-30', 44556544, '789877'),
(144, 55, 'cha@gsa.dsa', '50', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Married', 'Self', 'Not Defined', '', 'Chris', 'evans', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-30', 789756, '22155'),
(145, 56, 'tylor@fdad.sda', '20', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'chris', 'tylor', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-30', 43243243, '577888'),
(146, 57, 'stradman@gmai.sda', '35', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'strad', 'man', 'Not Defined', 'No Problem', 'Not Defi', 'English', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-30', 789556, '4454512'),
(147, 58, 'scorpion@netherrelm.com', '55', 178, 'Male', 'Buddhist', '', 'Colombo', 'Western', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'scorpion', 'Netherrelm', 'Not Defined', 'No Problem', 'Not Defi', 'English', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-30', 782, '12135m'),
(148, 59, 'gumball@gmail.com', '20', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'gumball', 'blue', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-30', 746, '263'),
(149, 60, 'bubbles@gmail.com', '20', 0, 'Female', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'bubbles', 'Blue', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-30', 231, '213123'),
(150, 61, 'alex@dsa.dsa', '45', 0, 'Female', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'alex', 'Blondie', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-30', 45645, '123123'),
(151, 62, 'dan@dsa.dsa', '45', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Not Defined', 'Self', 'Not Defined', '', 'dan', 'carter', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-30', 23, '6655'),
(152, 63, 'katy@dsa.dsa', '44', 1, 'Female', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'katy', 'perry', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '5789', '', '', '2021-05-30', 12379789, '32jhgf'),
(153, 64, 'sam@samsam.sam', '32', 172, 'Male', 'Buddhist', '', '', '', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'sam', 'mas', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 78, 'Not Defi', 'Not Defi', '1980-03-01', '', '', '', '', '2021-05-30', 44546, '7878'),
(159, 70, 'dsa@dsa.dsa', '45', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Not Defined', 'Self', 'Not Defined', '', 'dsads', 'dsadsa', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '', '', '2021-05-31', 1, '21'),
(160, 72, 'asd@gmail.com', '50', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'asd', 'dsa', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-13', '', '', '', '', '2021-06-14', 12313, '78981531321'),
(161, 73, 'ooi@ooi.ooi', '55', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'ooi', 'ooi', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1980-01-01', '', '', '565', '', '2021-06-15', 656656, '5666'),
(162, 74, 'updatetAfterFN@gmail.comAAA', '40', 178, 'Female', 'Christian', 'updatetAfterFNCastAA', 'Kegalle', 'Uva', 'Srilanka', 'Married', 'Son/Daughter', 'Primary', 'updatetAfterFNspecialized', 'updatetAfterFNAAA', 'updatetAfterLastNAAA', 'Slim', 'Blind', 'No', 'Sinhala', 'Dark', 78, 'Veg', 'Yes', '1995-06-15', 'updatetAfterFNoccupationAAA', 'updatetAfterFNoccuDescriptionAAA', '10000111', 'updatetAfterFNAAA', '2021-06-16', 2147483647, '87187187111111'),
(163, 75, 'vcx@vcx.vcx', '32', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'vcx', 'vcx', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', '', '2021-06-16', 32323, '4324'),
(165, 76, 'alpha@gmail.com', '75', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'alls', 'dsad', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '2312', 'dsandk5', '2021-06-28', 231, '123123'),
(166, 79, 'wwe@wwe.qwwe', '55', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'lmlmlm;', 'mknkl.', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', 'klmkmkm;5', '2021-06-29', 1231, '78789'),
(167, 80, 'qqw@qqw.qqw', '52', 0, 'Male', 'Not Applicable', 'njnl5', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'mkmkmk', 'njnjn', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', '', '2021-06-29', 5656, '12312'),
(168, 81, 'qqr@qqe.qqw', '55', 0, 'Male', 'Not Applicable', '12312,ml', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'mm', 'n m', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', 'kmkmk11', '2021-06-29', 565, '56565'),
(169, 82, 'pop@pop.pop', '55', 123, 'Female', 'Buddhist', 'popCaste', 'Nuwara Eliya', 'Uva', 'Srilanka', 'Married', 'Mother/Father', 'Ordinary level', 'popspecialization', 'popFN', 'popLN', 'Slim', 'Blind', 'Yes', 'Sinhala', 'Dark', 62, 'Veg', 'Yes', '1964-06-06', 'popOcu', 'popOccuDes', '10000', 'pop619', '2021-06-29', 619619619, '619619619pop'),
(170, 83, 'box@gmail.com', '23', 0, 'Male', 'Not Applicable', '', '', '', 'Not Applic', 'Single', 'Self', 'Not Defined', '', 'box', 'mon', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', 'gy2', 'hgjbl2', '', 'nbghyfj2', '2021-07-04', 12123, '123mn'),
(171, 86, 'cvcv@gmail.com', '56', 0, 'Male', 'Not Applicable', '', 'Colombo', 'Western', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'jhgf', 'kjnhbvc', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', '', '2021-07-16', 23123, '2132123'),
(172, 87, 'dsaa@dsa.dsa', '52', 0, 'Male', 'Not Applicable', '', 'Colombo', 'Western', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'dsad', 'dsadsa', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '2312', '', '2021-07-17', 231312, '12ds'),
(173, 88, 'jjm@jjm.jjm', '12', 0, 'Male', 'Not Applicable', '', 'Colombo', 'Western', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'jjm', 'jjm', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', '', '2021-07-17', 12131, '56kjh'),
(174, 89, 'cxz@cxz.cxz', '23', 0, 'Male', 'Not Applicable', '', 'Colombo', 'Western', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'cxz', 'cxz', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', '', '2021-07-18', 2131213, '56211231'),
(175, 90, 'zxc@zxc.zxc', '56', 0, 'Male', 'Not Applicable', '', 'Colombo', 'Western', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'zxc', 'zxc', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', '', '2021-07-18', 123123, '565231v'),
(176, 91, 'ffd@gmai.com', '85', 0, 'Male', 'Not Applicable', '', 'Colombo', 'Western', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'ffd', 'fdd', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', '', '2021-07-19', 1231, '12332n'),
(177, 92, 'qwqwqw@qwqwqw.qwqwqw', '56', 0, 'Male', 'Not Applicable', '', 'Colombo', 'Western', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'qwqwqw', 'qwqwqw', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', '', '2021-07-19', 2115641, '8455616h'),
(178, 93, 'opop@gmail.com', '56', 0, 'Male', 'Not Applicable', '', 'Colombo', 'Western', 'Srilanka', 'Single', 'Self', 'Not Defined', '', 'op', 'op', 'Not Defined', 'No Problem', 'Not Defi', 'Sinhala', 'Not Defined', 0, 'Not Defi', 'Not Defi', '1960-01-01', '', '', '', '', '2021-07-19', 2147483647, '5j85148');

-- --------------------------------------------------------

--
-- Table structure for table `partnerprefs`
--

DROP TABLE IF EXISTS `partnerprefs`;
CREATE TABLE IF NOT EXISTS `partnerprefs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `custId` int(10) NOT NULL,
  `agemin` varchar(3) NOT NULL,
  `agemax` int(3) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `complexion` varchar(10) NOT NULL,
  `height` int(3) NOT NULL,
  `diet` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `mothertounge` varchar(20) NOT NULL,
  `education` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `custId` (`custId`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partnerprefs`
--

INSERT INTO `partnerprefs` (`id`, `custId`, `agemin`, `agemax`, `maritalstatus`, `complexion`, `height`, `diet`, `religion`, `caste`, `subcaste`, `mothertounge`, `education`, `occupation`, `country`, `descr`) VALUES
(1, 6, '18', 30, 'Single', '', 180, 'Veg', 'Not Applicable', 'Roman Cathaolic', '', '', 'Primary', '', 'Not Applicable', 'Beautiful , Super, just for fun'),
(3, 12, '18', 40, 'Single', '', 150, 'Veg', 'Hindu', 'Thiyya', '', '', 'PG', 'sadasdasd', 'Hindu', ''),
(4, 13, '18', 40, 'Single', '', 0, 'Veg', 'Hindu', 'Thiyya', '', '', 'PG', 'das', 'Hindu', ''),
(6, 16, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(9, 26, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(10, 27, '20', 40, 'Married', '', 180, 'Non Veg', 'Christian', 'Mappila', '', '', 'Degree', 'Doctor', 'Hindu', 'newThreetype'),
(11, 28, '18', 74, 'Single', 'Black', 789, 'Veg', 'Not Applicable', 'Roman Cathaolic', '', 'Tamil', 'Primary', 'newfour', 'Not Applicable', 'newfour'),
(12, 29, '20', 40, 'Single', 'Black', 180, 'Veg', 'Christian', 'Roman Cathaolic', '', 'Tamil', 'Ordinary level', 'kjbhvgb', 'Srilanka', 'my type'),
(15, 36, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(26, 50, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(27, 51, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(28, 52, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(29, 53, '23', 98, 'Single', 'Black', 0, 'Veg', 'Not Applicable', 'lkjhg', '', 'Tamil', 'Primary', '', 'Not Applicable', 'njbhbhbh'),
(30, 54, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(31, 55, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(32, 56, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(33, 57, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(34, 58, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(35, 59, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(36, 60, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(37, 61, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(38, 62, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(39, 63, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(40, 64, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(46, 70, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(47, 72, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(48, 73, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(49, 74, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(50, 75, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(51, 76, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(52, 79, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(53, 80, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(54, 81, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(55, 82, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(56, 83, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(57, 86, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(58, 87, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(59, 88, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(60, 89, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(61, 90, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(62, 91, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(63, 92, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(64, 93, '', 0, '', '', 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(10) NOT NULL,
  `pic1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pic2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pic3` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pic4` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_card_front` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_card_back` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `cust_id`, `pic1`, `pic2`, `pic3`, `pic4`, `id_card_front`, `id_card_back`) VALUES
(27, 6, 'img.jpg', 'picture.jpg', 'picture-2.jpg', 'user.png', '', ''),
(29, 12, 'article_img_1.jpg', 'article_img_2.jpg', 'banner_img_2.png', 'banner_img_2.png', '', ''),
(34, 29, 'Screenshot (14).png', 'Screenshot (7).png', 'Screenshot (19).png', 'Screenshot (1).png', '', ''),
(42, 50, 'oneScreenshot (19).png', 'twoScreenshot (7).png', 'threeScreenshot (2).png', 'fourScreenshot (3).png', 'frontiron_man_artwork_4k-3840x2160.jpg', 'backbato.jpg'),
(43, 51, 'oneScreenshot (19).png', 'Screenshot (30).png', 'Screenshot (29).png', 'Screenshot (28).png', 'Screenshot (3).png', 'Screenshot (2).png'),
(44, 52, 'one1logo0.png', 'twoScreenshot (8).png', 'threeScreenshot (31).png', 'fourScreenshot (19).png', 'frontbatman_concept_art-2560x1440.jpg', 'backiron_man_artwork_4k-3840x2160.jpg'),
(45, 53, 'oneScreenshot (1).png', 'twoScreenshot (7).png', 'threeScreenshot (24).png', 'fourScreenshot (24).png', 'frontScreenshot (24).png', 'backScreenshot (19).png'),
(46, 54, 'onep1fourjpg.jpg', 'twop1one.jpg', 'threep1three.jpg', 'fourp1two.jpg', 'frontp1fourjpg.jpg', 'backp1one.jpg'),
(47, 55, 'onep2three.jpg', 'twop2one.jpg', 'threep2two.jpg', 'fourp2four.jpg', 'frontp2one.jpg', 'backp2three.jpg'),
(48, 56, 'onep3four.jpg', 'twop3one.jpg', 'threep3three.jpg', 'fourp3two.jpg', 'frontp3three.jpg', 'backp4four.jpg'),
(49, 57, 'onep4four.jpg', 'twop4threejpg.jpg', 'threep4onejpg.jpg', 'fourp4twojpg.jpg', 'frontp4four.jpg', 'backp4threejpg.jpg'),
(50, 58, 'onep5two.jpg', 'twop5onejpg.jpg', 'threep5three.jpg', 'fourp5two.jpg', 'frontiron_man_artwork_4k-3840x2160.jpg', 'backn.jpg'),
(51, 59, 'onep6four.jpg', 'twop6one.jpg', 'threep6threejpg.jpg', 'fourp6two.png', 'frontp6four.jpg', 'backp6one.jpg'),
(52, 60, 'onep7four.jpg', 'twop7one.png', 'threep7three.jpg', 'fourp7two.png', 'frontp7two.png', 'backp7one.png'),
(53, 61, 'onep8four.png', 'twop8one.jpg', 'threep8three.jpg', 'fourp8twojpg.jpg', 'frontp8threejpg.jpg', 'backp8twojpg.jpg'),
(54, 62, 'onep9four.jpg', 'twop9one.jpg', 'threep9three.jpg', 'fourp9two.jpg', 'frontp9three.jpg', 'backp9one.jpg'),
(55, 63, 'onep10four.jpg', 'twop10one.jpg', 'threep10three.jpg', 'fourp10two.jpg', 'frontp10one.jpg', 'backp10four.jpg'),
(56, 64, 'onep11four.jpg', 'twop11one.jpg', 'threep11three.jpg', 'fourp11two.jpg', 'frontp11one.jpg', 'backp11two.jpg'),
(57, 72, 'onebatman_concept_art-2560x1440.jpg', 'twobato1.jpg', 'threecall_of_duty_black_ops_2-1920x1200 - Copy.jpg', 'fourcod.jpg', 'frontcall_of_duty_black_ops_2-1920x1200 - Copy.jpg', 'backiron_man_artwork_4k-3840x2160.jpg'),
(58, 73, 'onebatman_concept_art-2560x1440.jpg', 'twobato.jpg', 'threecall_of_duty_black_ops_2-1920x1200 - Copy.jpg', 'fourcod.jpg', 'frontiron_man_artwork_4k-3840x2160.jpg', 'backiron_man_artwork_4k-3840x2160.jpg'),
(59, 74, 'onebatman_concept_art-2560x1440.jpg', 'twobato.jpg', 'threeiron_man_artwork_4k-3840x2160.jpg', 'fourcall_of_duty_black_ops_2-1920x1200 - Copy.jpg', 'frontmmm.jpg', 'backmmm.jpg'),
(60, 76, 'onen.jpg', 'twommm.jpg', 'threebatman_concept_art-2560x1440.jpg', 'fourcod.jpg', 'frontbatman_concept_art-2560x1440.jpg', 'backcod.jpg'),
(61, 75, 'onemmm.jpg', 'twon.jpg', 'threeiron_man_artwork_4k-3840x2160.jpg', 'fouriron_man_artwork_4k-3840x2160.jpg', 'frontcod.jpg', 'backiron_man_artwork_4k-3840x2160.jpg'),
(62, 86, 'onen.jpg', 'twocod.jpg', 'threecod.jpg', 'fourmmm.jpg', 'frontbato.jpg', 'backn.jpg'),
(63, 87, 'onecall_of_duty_black_ops_2-1920x1200 - Copy.jpg', 'twommm.jpg', 'threen.jpg', 'fourmmm.jpg', 'frontbato1.jpg', 'backbatman_concept_art-2560x1440.jpg'),
(64, 89, 'oneKAPUI.pdf', 'twoKAPUI.pdf', 'threebronze.png', 'fourbronze.png', 'frontsilver.png', 'backgold.png'),
(65, 90, 'onesilver.png', 'twogold.png', 'threesilver.png', 'fourgold.png', 'frontsilver.png', 'back'),
(66, 91, 'onesilver.png', 'twogold.png', 'threegold.png', 'fourplatinum.png', 'frontplatinum.png', 'backplatinum.png'),
(67, 92, 'onegold.png', 'twosilver.png', 'threeplatinum.png', 'fourbronze.png', 'frontgold.png', 'backbronze.png'),
(68, 93, 'onegold.png', 'twobato1.jpg', 'threebatman_concept_art-2560x1440.jpg', 'fourbato1.jpg', 'frontmmm.jpg', 'backiron_man_artwork_4k-3840x2160.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `unlocked_profiles`
--

DROP TABLE IF EXISTS `unlocked_profiles`;
CREATE TABLE IF NOT EXISTS `unlocked_profiles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(10) NOT NULL,
  `unlckd_pro_id` int(10) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unlocked_profiles`
--

INSERT INTO `unlocked_profiles` (`id`, `cust_id`, `unlckd_pro_id`, `is_active`, `created_date`) VALUES
(1, 58, 63, 1, '2021-07-16 17:55:46'),
(3, 58, 53, 1, '2021-07-16 17:55:46'),
(4, 58, 59, 1, '2021-07-16 17:55:46'),
(5, 58, 64, 1, '2021-07-16 17:55:46'),
(6, 58, 53, 1, '2021-07-16 17:55:46'),
(7, 58, 56, 1, '2021-07-16 17:55:46'),
(8, 58, 64, 1, '2021-07-16 17:55:46'),
(9, 58, 53, 1, '2021-07-16 17:55:46'),
(10, 58, 59, 1, '2021-07-16 17:55:46'),
(16, 58, 59, 1, '2021-07-16 17:55:46'),
(15, 58, 56, 1, '2021-07-16 17:55:46'),
(14, 58, 53, 1, '2021-07-16 17:55:46'),
(17, 58, 64, 1, '2021-07-16 17:55:46'),
(18, 58, 72, 1, '2021-07-16 17:55:46'),
(19, 58, 56, 1, '2021-07-16 17:55:46'),
(20, 58, 59, 1, '2021-07-16 17:55:46'),
(21, 58, 73, 1, '2021-07-16 17:55:46'),
(22, 58, 64, 1, '2021-07-16 17:55:46'),
(23, 58, 72, 1, '2021-07-16 17:55:46'),
(24, 58, 73, 1, '2021-07-16 17:55:46'),
(25, 58, 75, 1, '2021-07-16 17:55:46'),
(26, 58, 76, 1, '2021-07-16 17:55:46'),
(27, 58, 76, 1, '2021-07-16 17:55:46'),
(28, 58, 56, 1, '2021-07-16 17:55:46'),
(29, 58, 56, 1, '2021-07-16 17:55:46'),
(30, 58, 53, 1, '2021-07-16 17:55:46'),
(31, 58, 56, 1, '2021-07-16 17:55:46'),
(32, 58, 59, 1, '2021-07-16 17:55:46'),
(33, 58, 72, 1, '2021-07-16 17:55:46'),
(34, 58, 73, 1, '2021-07-16 17:55:46'),
(35, 58, 64, 1, '2021-07-16 17:55:46'),
(36, 58, 76, 1, '2021-07-16 17:55:46'),
(37, 58, 53, 1, '2021-07-16 17:55:46'),
(38, 58, 59, 1, '2021-07-16 17:55:46'),
(39, 58, 56, 1, '2021-07-16 17:55:46'),
(40, 58, 53, 1, '2021-07-16 17:55:46'),
(41, 58, 56, 1, '2021-07-16 17:55:46'),
(42, 58, 59, 1, '2021-07-16 17:55:46'),
(43, 58, 73, 1, '2021-07-16 17:55:46'),
(44, 58, 53, 1, '2021-07-16 17:55:46'),
(45, 58, 56, 1, '2021-07-16 17:55:46'),
(46, 58, 59, 1, '2021-07-16 17:55:46'),
(47, 58, 64, 1, '2021-07-16 17:55:46'),
(48, 58, 72, 1, '2021-07-16 17:55:46'),
(49, 58, 53, 1, '2021-07-16 17:55:46'),
(50, 58, 56, 1, '2021-07-16 17:55:46'),
(51, 58, 59, 1, '2021-07-16 17:55:46'),
(52, 58, 64, 1, '2021-07-16 17:55:46'),
(53, 58, 72, 1, '2021-07-16 17:55:46'),
(54, 58, 56, 1, '2021-07-16 17:55:46'),
(55, 58, 59, 1, '2021-07-16 17:55:46'),
(56, 58, 57, 1, '2021-07-16 17:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `profilestat` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `userlevel` int(2) NOT NULL,
  `photoStatus` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilestat`, `username`, `password`, `email`, `dateofbirth`, `gender`, `userlevel`, `photoStatus`) VALUES
(1, 0, 'admin', 'admin', 'admin@nowhere.com', '2016-02-17', 'male', 1, 0),
(6, 1, 'test', 'test', 'test@test.com', '2016-02-11', 'femal', 0, 1),
(8, 0, 'Name', '', 'E-Mail', '0000-00-00', '', 0, 0),
(9, 0, 'Raju', 'raju', 'raju@nowhere.com', '0000-00-00', 'male', 0, 0),
(10, 0, 'kuttappi', 'kuttappi', 'kuttapi@kuttappi.com', '0000-00-00', '', 0, 0),
(11, 0, 'fdsdte', 'qe41234234', 'twetwet@sdfds.com', '0000-00-00', '', 0, 0),
(12, 0, 'aswin', 'aswin', 'aswin@nowhere.com', '1997-01-20', 'male', 0, 0),
(13, 0, 'reshma', 'reshma', 'asdasdasd@asdfsadf.com', '1998-02-14', 'femal', 0, 0),
(16, 0, 'green', 'green', 'greentom16@gmail.com', '1994-08-12', 'male', 0, 0),
(26, 0, 'new2', 'new2', 'new2@nds.nds', '1995-08-14', 'male', 0, 0),
(27, 0, 'new3', 'new3', 'new36@gmail.com', '1995-11-13', 'male', 0, 0),
(28, 0, 'new4', 'new4', 'new4@gmail.com', '1995-09-11', 'male', 0, 0),
(29, 0, 'new10', 'new10', 'new10@gmail.com', '1996-09-10', 'male', 0, 0),
(36, 1, 'oo', 'oo', 'oo@gmail.com', '1997-11-17', 'male', 0, 1),
(47, 0, 'kjhgvc', 'mn m', 'bb@bb.bb', '1996-10-18', 'male', 0, 0),
(48, 1, 'dfd', 'dfd', 'dfd@dfd.dfd', '1995-08-18', 'male', 0, 1),
(49, 0, 'lll', 'lll', 'lll@gmail.com', '1990-09-15', 'male', 0, 0),
(50, 1, 'POL', 'POL', 'POL@polk.mkl', '1996-08-14', 'male', 0, 1),
(51, 1, 'lon', 'lon', 'lon@gmail.com', '1994-06-17', 'male', 0, 1),
(52, 1, 'lol', 'lol', 'lol@lol.lol', '1995-09-13', 'male', 0, 1),
(53, 1, 'b', 'b', 'b@bbb.bbb', '1995-09-17', 'male', 0, 1),
(54, 1, 'chrishemisworth', 'chrishemisworth', 'chrishemisworth@gmail.com', '1987-12-16', 'male', 0, 1),
(55, 1, 'chris', 'evans', 'chrisevans@gmail.com', '1980-10-18', 'male', 0, 1),
(56, 1, 'christylor', 'christylor', 'christylor@gdsf.dsa', '1980-01-01', 'male', 0, 1),
(57, 1, 'stradman', 'stradman', 'stradman@gmai.sda', '1980-01-01', 'male', 0, 1),
(58, 1, 'scorpion', 'scorpion', 'scorpion@netherrelm.com', '1967-03-01', 'male', 0, 1),
(59, 1, 'gumball', 'gumball', 'gumball@gmail.com', '1980-01-01', 'male', 0, 1),
(60, 1, 'bubbles', 'bubbles', 'bubbles@gmail.com', '1980-01-01', 'femal', 0, 1),
(61, 1, 'alex', 'alex', 'alex@dsa.dsa', '1980-01-01', 'femal', 0, 1),
(62, 1, 'dan', 'dan', 'dan@dsa.dsa', '1980-01-01', 'male', 0, 1),
(63, 1, 'katy', 'katy', 'katy@dsa.dsahwwkjuhygsd', '1974-10-12', 'femal', 0, 1),
(64, 1, 'sam', 'sam', 'sam@samsam.sam', '1980-01-01', 'male', 0, 1),
(69, 1, 'aboutme4', 'aboutme4', 'aboutme3@aboutme3.aboutme3', '1980-01-01', 'male', 0, 0),
(70, 1, 'o', 'o', 'o@o.o', '1980-01-01', 'male', 0, 0),
(71, 0, 'newonenew', 'newwonewnew', 'newone@gmail.com', '1980-01-01', 'male', 0, 0),
(72, 1, 'asd', 'asd', 'asd@gmail.com', '1980-01-01', 'male', 0, 1),
(73, 1, 'ooi', 'ooi', 'ooi@ooi.ooi', '1980-01-01', 'male', 0, 1),
(74, 1, 'can', 'can', 'can@GMAIL.COM', '1980-01-01', 'male', 0, 1),
(75, 1, 'vcx', 'vcx', 'vcx@vcx.vcx', '1980-01-01', 'male', 0, 0),
(76, 1, 'alpha', 'alpha', 'alpha@gmail.com', '0000-00-00', '', 0, 1),
(77, 0, 'bbn', 'bbn', 'bbn@bbb.bbb', '0000-00-00', '', 0, 0),
(78, 0, 'aaaa', 'aaaa', 'aaaa@aaa.vvv', '0000-00-00', '', 0, 0),
(79, 1, 'wwe', 'wwe', 'wwe@wwe.qwwe', '0000-00-00', '', 0, 0),
(80, 1, 'qqw', 'qqw', 'qqw@qqw.qqw', '0000-00-00', '', 0, 0),
(81, 1, 'qqr', 'qqr', 'qqr@qqe.qqw', '0000-00-00', '', 0, 0),
(82, 1, 'pop', 'pop', 'pop@pop.pop', '0000-00-00', '', 0, 0),
(83, 1, 'box', 'box', 'box@gmail.com', '0000-00-00', '', 0, 0),
(84, 0, 'ffg', 'ffg', 'ffg@ffg.ggh', '0000-00-00', '', 0, 0),
(85, 0, 'kjhgfc', 'lkj', 'kjkhg@kjh.kjh', '0000-00-00', '', 0, 0),
(86, 1, 'cvcv', 'cvcv', 'cvcv@gmail.com', '0000-00-00', '', 0, 1),
(87, 1, 'dsaa', 'dsaa', 'dsaa@dsa.dsa', '0000-00-00', '', 0, 1),
(88, 1, 'jjm', 'jjm', 'jjm@jjm.jjm', '0000-00-00', '', 0, 0),
(89, 1, 'cxz', 'cxz', 'cxz@cxz.cxz', '0000-00-00', '', 0, 1),
(90, 1, 'zxc', 'zxc', 'zxc@zxc.zxc', '0000-00-00', '', 0, 1),
(91, 1, 'ffd', 'ffd', 'ffd@gmai.com', '0000-00-00', '', 0, 1),
(92, 1, 'qwqwqw', 'qwqwqw', 'qwqwqw@qwqwqw.qwqwqw', '0000-00-00', '', 0, 1),
(93, 1, 'opop', 'opop', 'opop@gmail.com', '0000-00-00', '', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
