-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 04:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fileupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `imageId` int(11) NOT NULL,
  `imageName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`imageId`, `imageName`) VALUES
(1, '17741047_1257360917712789_596746297_n.jpg'),
(2, '17741047_1257360917712789_596746297_n.jpg'),
(3, '0ac5d0c35ef5bb604cd1bf7b527d564e.jpg'),
(4, '295658_433523036736678_230657872_n.png'),
(5, '7341c4d049.jpg'),
(6, '8fbe8fb049.'),
(7, 'e25750f1e3.'),
(8, '0cb6b78962.jpg'),
(9, 'b13c039ace.jpg'),
(10, '06da8072ed.jpg'),
(11, '52af202db3.jpg'),
(12, 'cb60d4cbdf.jpg'),
(13, 'bee4cf1a26.jpg'),
(14, 'ecdd848c83.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`imageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
