-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2021 at 04:45 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pico`
--
CREATE DATABASE IF NOT EXISTS `pico` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pico`;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `id_lh` int(250) NOT NULL,
  `ten_kh` text CHARACTER SET utf8 NOT NULL,
  `diachi` text CHARACTER SET utf8 NOT NULL,
  `dienthoai` int(50) NOT NULL,
  `email` text CHARACTER SET utf8mb4 NOT NULL,
  `ykien` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id_lh`, `ten_kh`, `diachi`, `dienthoai`, `email`, `ykien`) VALUES
(0, 'Lê Hòa Dũng', 'Phố Đà, Triệu Sơn, Thanh Hóa', 337065160, 'hoadung123@gmail.com', 'nice'),
(0, 'Lê Hòa Dũng', 'Phố Đà, Triệu Sơn, Thanh Hóa', 337065160, 'hoadung123@gmail.com', 'nice'),
(0, 'Lê Hòa Dũng', 'Phố Đà, Triệu Sơn, Thanh Hóa', 337065160, 'hoadung123@gmail.com', 'hi friend');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(50) NOT NULL,
  `hoten` varchar(200) NOT NULL,
  `matkhau` varchar(200) NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xedap`
--

CREATE TABLE IF NOT EXISTS `xedap` (
  `id_xd` int(100) NOT NULL,
  `ten_xd` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `anh_xd` varchar(100) NOT NULL,
  `gia_xd` double NOT NULL,
  `giamgia_xd` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xedap`
--

INSERT INTO `xedap` (`id_xd`, `ten_xd`, `anh_xd`, `gia_xd`, `giamgia_xd`) VALUES
(1, 'xe đạp M1', 'images/xedap/1.jpg', 1000000, 10),
(1, 'xe đạp M1', 'images/xedap/1.jpg', 1000000, 10),
(2, 'xe đạp S1', 'images/xedap/2.jpg', 1500000, 15),
(2, 'xe đạp S1', 'images/xedap/2.jpg', 1500000, 15),
(3, 'xe đạp J3', 'images/xedap/3.jpg', 2000000, 15),
(3, 'xe đạp J3', 'images/xedap/3.jpg', 2000000, 15),
(4, 'xe đạp K3', 'images/xedap/4.jpg', 2500000, 10),
(4, 'xe đạp K3', 'images/xedap/4.jpg', 2500000, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
