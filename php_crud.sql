-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2022 at 07:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_prefix` varchar(50) DEFAULT NULL,
  `c_firstname` varchar(255) DEFAULT NULL,
  `c_lastname` varchar(255) DEFAULT NULL,
  `c_idcard` varchar(13) DEFAULT NULL,
  `c_birthdate` date DEFAULT NULL,
  `c_mobile` varchar(32) DEFAULT NULL,
  `c_detail` varchar(255) DEFAULT NULL,
  `c_image` varchar(255) DEFAULT NULL,
  `c_status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_prefix`, `c_firstname`, `c_lastname`, `c_idcard`, `c_birthdate`, `c_mobile`, `c_detail`, `c_image`, `c_status`) VALUES
(1, 'นาย', 'ทดสอบ1', 'ระบบ1', '4576239350786', '2009-01-14', '0811111111', 'รายละเอียด', NULL, 1),
(2, 'นาย', 'ทดสอบ2', 'ระบบ2', '5340584702785', '2009-01-14', '0811111111', 'รายละเอียด', NULL, 1),
(3, 'นาย', 'ทดสอบ3', 'ระบบ3', '2772526854890', '2009-01-14', '0811111111', 'รายละเอียด', NULL, 1),
(4, 'นาย', 'ทดสอบ4', 'ระบบ4', '1163918069912', '2009-01-14', '0811111111', 'รายละเอียด', NULL, 1),
(5, 'นาย', 'ทดสอบ5', 'ระบบ5', '1997673957671', '2009-01-14', '0811111111', 'รายละเอียด', NULL, 1),
(6, 'นาย', 'ทดสอบ6', 'สกุล6', '1997673957671', '2022-03-14', '023456789', 'test', NULL, 1),
(7, 'นาย', 'ทดสอบ6', 'สกุล6', '1997673957671', '2022-03-14', '023456789', 'test', NULL, 1),
(8, 'นาย', 'ทดสอบ6', 'สกุล6', '1997673957671', '2022-03-14', '023456789', 'test', '20220313192114_45786.jpeg', 1),
(9, 'นาย', 'test9', 'test9', '1576557774437', '2022-03-06', '012345678', 'sasas', '20220313192216_30205.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
