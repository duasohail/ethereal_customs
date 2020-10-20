-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 10:06 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ethereal`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_appointment`
--

CREATE TABLE `book_appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_appointment`
--

INSERT INTO `book_appointment` (`id`, `name`, `email`, `phone`) VALUES
(1, 'abc', 'abc@gmail.com', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `home_consultation`
--

CREATE TABLE `home_consultation` (
  `id` int(11) NOT NULL,
  `con_head` varchar(200) NOT NULL,
  `content1` varchar(300) NOT NULL,
  `content2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home_image_section`
--

CREATE TABLE `home_image_section` (
  `id` int(11) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `img1content` varchar(100) NOT NULL,
  `img1link` varchar(50) NOT NULL,
  `image2` varchar(300) NOT NULL,
  `img2content` varchar(100) NOT NULL,
  `img2link` varchar(50) NOT NULL,
  `image3` varchar(300) NOT NULL,
  `img3content` varchar(100) NOT NULL,
  `img3link` varchar(50) NOT NULL,
  `image4` varchar(300) NOT NULL,
  `img4content` varchar(100) NOT NULL,
  `img4link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_image_section`
--

INSERT INTO `home_image_section` (`id`, `image1`, `img1content`, `img1link`, `image2`, `img2content`, `img2link`, `image3`, `img3content`, `img3link`, `image4`, `img4content`, `img4link`) VALUES
(37, 'library.png', 'lib', 'lib', '0', '', '', '0', '', '', '0', '', ''),
(41, '', '', '', 'communication_gap.jpg', 'com', 'com', '', '', '', '', '', ''),
(43, '', '', '', 'iStock-8.webp', 'xyz', 'xyz', '', '', '', '', '', ''),
(44, '', '', '', 'feedback.jpg', 'fd', 'fd', '', '', '', '', '', ''),
(45, '', '', '', 'iStock-2.webp', 'wed', 'wed', '', '', '', '', '', ''),
(46, '', '', '', '', 'wed', 'wed', 'iStock-2.webp', '', '', '', '', ''),
(47, '', '', '', '', '', '', 'iStock-2.webp', 'wed', 'wed', '', '', ''),
(48, '', '', '', '', '', '', 'download.jpg', 'fd', 'fd', '', '', ''),
(49, '', '', '', '', '', '', 'download.jpg', 'fd', 'fd', '', '', ''),
(50, '', '', '', '', '', '', '', '', '', 'digital_library.png', 'dlib', 'dlib');

-- --------------------------------------------------------

--
-- Table structure for table `home_slideimage`
--

CREATE TABLE `home_slideimage` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `content1` varchar(300) NOT NULL,
  `content2` varchar(300) NOT NULL,
  `content3` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_slideimage`
--

INSERT INTO `home_slideimage` (`id`, `image`, `content1`, `content2`, `content3`) VALUES
(1, 'aboutus2.png', 'abc', 'xyz', '123'),
(2, 'aboutus2.png', 'abc', 'xyz', '123'),
(3, 'aboutus2.png', 'abc', 'xyz', '123'),
(4, 'aboutus2.png', 'abc', 'xyz', '123'),
(5, 'aboutus2.png', 'abc', 'xyz', '123');

-- --------------------------------------------------------

--
-- Table structure for table `securemail`
--

CREATE TABLE `securemail` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_appointment`
--
ALTER TABLE `book_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_consultation`
--
ALTER TABLE `home_consultation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_image_section`
--
ALTER TABLE `home_image_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slideimage`
--
ALTER TABLE `home_slideimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `securemail`
--
ALTER TABLE `securemail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_appointment`
--
ALTER TABLE `book_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_consultation`
--
ALTER TABLE `home_consultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_image_section`
--
ALTER TABLE `home_image_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `home_slideimage`
--
ALTER TABLE `home_slideimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `securemail`
--
ALTER TABLE `securemail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
