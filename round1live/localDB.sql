-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 03:41 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wq`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers_round1`
--

CREATE TABLE `answers_round1` (
  `ID` int(10) NOT NULL,
  `ANSWER` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers_round1`
--

INSERT INTO `answers_round1` (`ID`, `ANSWER`) VALUES
(1, 'constellation'),
(6, 'middelburg'),
(4, 'rud12c'),
(3, 'jinxedwizardspluckivyfromthebigquilt'),
(5, 'heraclitus'),
(2, 'indianocean');

-- --------------------------------------------------------

--
-- Table structure for table `answers_round2`
--

CREATE TABLE `answers_round2` (
  `ID` int(10) NOT NULL,
  `ANSWER` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers_round2`
--

INSERT INTO `answers_round2` (`ID`, `ANSWER`) VALUES
(1, 'lanceoflonginus'),
(2, 'palladium'),
(3, 'faminestela'),
(4, 'shinigami');

-- --------------------------------------------------------

--
-- Table structure for table `participants_round1`
--

CREATE TABLE `participants_round1` (
  `UNAME` varchar(255) NOT NULL,
  `CURRQUES` int(10) NOT NULL DEFAULT '1',
  `LOGINTIME` timestamp NULL DEFAULT NULL,
  `INITTIME` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants_round1`
--

INSERT INTO `participants_round1` (`UNAME`, `CURRQUES`, `LOGINTIME`, `INITTIME`) VALUES
('d', 4, '2017-10-04 00:47:11', NULL),
('d', 4, '2017-10-04 00:47:11', NULL),
('d', 4, '2017-10-04 00:47:11', NULL),
('mayur123', 1, '2017-10-04 23:19:11', '2017-10-04 23:19:11'),
('deba123', 6, '2017-10-05 12:02:08', '2017-10-05 11:45:52'),
('parth123', 5, '2017-10-06 12:04:33', '2017-10-05 12:14:47'),
('parth123', 5, '2017-10-06 12:04:33', '2017-10-06 09:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `participants_round2`
--

CREATE TABLE `participants_round2` (
  `UNAME` varchar(255) NOT NULL,
  `CURRQUES` int(10) NOT NULL,
  `LOGINTIME` timestamp NULL DEFAULT NULL,
  `INITTIME` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants_round2`
--

INSERT INTO `participants_round2` (`UNAME`, `CURRQUES`, `LOGINTIME`, `INITTIME`) VALUES
('parth123', 2, '2017-10-06 12:03:35', '2017-10-06 12:00:47'),
('parth123', 2, '2017-10-06 12:03:35', '2017-10-06 10:24:19'),
('parth123', 2, '2017-10-06 12:03:35', '2017-10-06 12:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `PNAME` varchar(256) DEFAULT NULL,
  `CNAME` varchar(256) DEFAULT NULL,
  `MOBILE` bigint(10) DEFAULT NULL,
  `EMAIL` varchar(256) DEFAULT NULL,
  `UNAME` varchar(256) NOT NULL,
  `PASS` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`PNAME`, `CNAME`, `MOBILE`, `EMAIL`, `UNAME`, `PASS`) VALUES
('abc', 'abc', 8888888888, 'abc@hotmail.com', 'abc', 'abc123'),
('abcd', 'geca', 8787877878, 'abca@gmail.com', 'abxaxa', 'axaxa'),
('AShutosh Gajre', 'geca', 9999999999, 'ashutosh@gmail.com', 'ashutosh121', 'ashu121'),
('a', 'b', 987654678, 'c@c.m', 'd', 'f'),
('Deba', 'geca', 8989898989, 'deba@gmail.com', 'deba123', 'deba123'),
('Dhiraj', 'geca', 8976546789, 'dhiru@hg.cm', 'dhiraj', 'varma'),
('mayur', 'geca', 6767676767, 'mayur@gmail.com', 'mayur123', 'mayur123'),
('Parth Bhope', 'geca', 8806773555, 'parthbhope1@gmail.com', 'parth123', 'parth123'),
('purva', 'geca', 5555555555, 'purva@gmail.com', 'purva123', 'purva123'),
('Jason Chaser', 'GECA', 9999999998, 'Jcahser@gmail.com', 'Scarecrow', 'S@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`UNAME`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`,`UNAME`),
  ADD UNIQUE KEY `MOBILE` (`MOBILE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
