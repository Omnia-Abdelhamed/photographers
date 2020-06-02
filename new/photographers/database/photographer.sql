-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 01:48 PM
-- Server version: 10.1.26-MariaDB
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
-- Database: `photographer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `categroies`
--

CREATE TABLE `categroies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categroies`
--

INSERT INTO `categroies` (`id`, `title`) VALUES
(1, 'حفلات'),
(2, 'مؤتمرات'),
(3, 'طبيعة'),
(4, 'اعمال تجارية');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(2, 'الشرقية'),
(3, 'القاهرة'),
(4, 'الاسكندرية'),
(5, 'شرم الشيخ'),
(6, 'الغردقة');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` int(11) NOT NULL,
  `e-mail` text NOT NULL,
  `phs_id` int(11) NOT NULL,
  `phg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `about_pic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`id`, `name`, `address`, `phone`, `email`, `about`, `image`, `city_id`, `cover`, `about_pic`, `password`, `active`) VALUES
(1, 'Abdrabo Hamed ', 'بلبيس- الشرقية', '01008549453', 'abdrabohamed72@gmail.com', 'مصمم و مصور حفلات ومؤتمرات علميه وأقوم بالعديد من الاعمال الفوتوجرافية لمؤسسسات الاعمال', 'عبدربه.jpg', 2, 'city.jpg', 'img6.jpg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(3, 'ehab fahmy', 'الزقازيق- الشرقية', '0112459854', 'ehab@gmail.com', 'مصمم فوتوجرافي ', 'ايهاب.jpg', 2, '', '', '', 1),
(9, 'Mahmod abdelhamed', 'frrgft', '37435', 'ali@ali.com', 'dtghrsth', 'محمود.jpg', 2, '', '', '', 1),
(10, 'ali', 'cairo', '222222', 'ali@gmail.com', 'wdklkdwckwd wdkldklcdkl sdlkcdlksclk sdklskld', '1211_obour.jpg', 3, '7840_23345.jpg', '83593_233.jpg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photo_session`
--

CREATE TABLE `photo_session` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `vedio` varchar(255) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_session`
--

INSERT INTO `photo_session` (`id`, `title`, `address`, `image`, `vedio`, `about`) VALUES
(4, 'scfmkkn', 'knefcjj', '7.jpg', 'knjeefc', 'knjfcb');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `photographers_id` int(11) NOT NULL,
  `about` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `image`, `cat_id`, `photographers_id`, `about`, `date`) VALUES
(2, '1.jpg', 2, 1, 'مؤتمر علمي للمبرمج محمد عبدالوهاب', '2019-04-02'),
(3, 'لا يوجد', 3, 3, 'صور جمالية للعديد من المناظر الطبيعية', '2019-04-01'),
(4, '2.jpg', 2, 1, '', '0000-00-00'),
(5, '3.jpg', 3, 1, '', '0000-00-00'),
(6, '79560_try.jpg', 3, 1, '', '0000-00-00'),
(8, '20436_obour.jpg', 4, 1, '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categroies`
--
ALTER TABLE `categroies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phs_id` (`phs_id`),
  ADD KEY `phg_id` (`phg_id`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `photo_session`
--
ALTER TABLE `photo_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `photographers_id` (`photographers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categroies`
--
ALTER TABLE `categroies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `photo_session`
--
ALTER TABLE `photo_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_client_ph` FOREIGN KEY (`phg_id`) REFERENCES `photographer` (`id`),
  ADD CONSTRAINT `fk_client_photo` FOREIGN KEY (`phs_id`) REFERENCES `photo_session` (`id`);

--
-- Constraints for table `photographer`
--
ALTER TABLE `photographer`
  ADD CONSTRAINT `fk_photographer_city` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `fk_bic_cat` FOREIGN KEY (`cat_id`) REFERENCES `categroies` (`id`),
  ADD CONSTRAINT `fk_pic_ph` FOREIGN KEY (`photographers_id`) REFERENCES `photographer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
