-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 06:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shellpolka`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `ID` int(255) NOT NULL,
  `Fname` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lname` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`ID`, `Fname`, `Lname`, `phone`, `email`, `location`, `date`, `duration`, `service`, `option`, `msg`) VALUES
(1, 'Bada', 'Andrew', '0759621394', 'badakomora06@gmail.com', 'Ruiru', '2021-03-02', 'Morning Hours', 'Birthday', 'Inclusive of', 'MGTDHYHYH66572'),
(2, 'Bada', 'Andrew', '0768438291', 'badakomora42@gmail.com', 'Ruiru', '2021-03-12', 'Afternoon Hours', 'Graduation', 'Exclusive of', 'HFIBHDFYGWH457'),
(3, 'Bada', 'Andrew', '0725817347', 'badakomora42@gmail.com', 'Ruiru', '2021-03-03', 'Afternoon Hours', 'Graduation', 'Exclusive of', 'TRDTYFGYUGVTYF34567');

-- --------------------------------------------------------

--
-- Table structure for table `brandingimages`
--

CREATE TABLE `brandingimages` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandingimages`
--

INSERT INTO `brandingimages` (`id`, `image`) VALUES
(1, 'branding3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brandingorders`
--

CREATE TABLE `brandingorders` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `orders` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandingorders`
--

INSERT INTO `brandingorders` (`id`, `email`, `orders`, `location`) VALUES
(1, 'admin@gmail.com', 'BRANDING ORDERS!!', 'NULL'),
(2, 'Jane@gmail.com', 'uniform branding', 'shimalawandu'),
(3, 'pelusharaz@gmail.com', 'T-shirt branding', 'nairobi'),
(5, 'test@gmail.com', 'branding', 'Nairobi -Ruiru'),
(6, 'joymoraa@gmail.com', 'uniform branding', 'Nairobi -Ruiru'),
(7, 'mathogothanio@gmail.com', 'key Holder Branding', 'Voi'),
(8, 'pelusharaz@gmail.com', 'T-shirt branding', 'Nairobi -Ruiru'),
(9, 'empress@gmail.com', 'cup Branding', 'Mombasa');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `email`, `message`) VALUES
(8, 'mathogothanio@gmail.com', 'thank you you are much appreciated'),
(9, 'Jane@gmail.com', 'i\'m pleased with Your services'),
(11, 'lucyKahiga@gmail.com', 'i\'m pleased with Your services'),
(14, 'Jane@gmail.com', 'thank you for your service');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID`, `image`) VALUES
(1, 'bg-support.jpg'),
(2, 'bg-offers.jpg'),
(3, 'bg-index.jpg'),
(4, 'bg-gallary.jpeg'),
(5, 'smile.webp');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `name` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `name`, `email`, `subject`, `body`) VALUES
(1, 'Bada', 'badakomora06@gmail.com', 'hello', 'hello polka planners');

-- --------------------------------------------------------

--
-- Table structure for table `offers_list`
--

CREATE TABLE `offers_list` (
  `ID` int(11) NOT NULL,
  `Fname` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lname` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers_list`
--

INSERT INTO `offers_list` (`ID`, `Fname`, `Lname`, `phone`, `email`) VALUES
(1, 'Bada', 'Andrew', '0759621394', 'badakomora06@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `officeimages`
--

CREATE TABLE `officeimages` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officeimages`
--

INSERT INTO `officeimages` (`id`, `image`) VALUES
(57, 'office1.jpg'),
(58, 'office2.jpg'),
(59, 'office3.jpg'),
(60, 'office-supplies.png');

-- --------------------------------------------------------

--
-- Table structure for table `officeorders`
--

CREATE TABLE `officeorders` (
  `id` int(255) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `orders1` varchar(100) NOT NULL,
  `location1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officeorders`
--

INSERT INTO `officeorders` (`id`, `email1`, `orders1`, `location1`) VALUES
(1, 'Admin@gmail.com', 'END OF BRANDING ORDERS!!', 'Null'),
(2, 'admin@gmail.com', 'OFFICE ORDERS!!', 'NULL'),
(3, 'new@gmail.com', 'Office pens', 'Nairobi-Ruiru'),
(4, 'test@gmail.com', 'office', 'Nairobi-Ruiru'),
(5, 'test@gmail.com', 'Office pens', 'Nairobi-Ruiru');

-- --------------------------------------------------------

--
-- Table structure for table `reg_table`
--

CREATE TABLE `reg_table` (
  `ID` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reg_table`
--

INSERT INTO `reg_table` (`ID`, `email`, `pass`) VALUES
(2, 'pelunguta@gmail.com', '123'),
(3, 'renieznduki940@gmail.com', 'irene1234'),
(4, 'badakomora06@gmail.com', '$2y$10$EsvrMDX2Y9Lg13tjuphUNeKRvcNmj.XpFpWZMLF6ADAlTszh.gQNO');

-- --------------------------------------------------------

--
-- Table structure for table `schoolimages`
--

CREATE TABLE `schoolimages` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolimages`
--

INSERT INTO `schoolimages` (`id`, `image`) VALUES
(1, 'schoolbag.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `schoolorders`
--

CREATE TABLE `schoolorders` (
  `id` int(255) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `orders2` varchar(100) NOT NULL,
  `location2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolorders`
--

INSERT INTO `schoolorders` (`id`, `email2`, `orders2`, `location2`) VALUES
(1, 'Admin@gmail.com', 'END OF OFFICE ORDERS!!', 'Null'),
(2, 'admin@gmail.com', 'SCHOOL ORDERS!!', 'Null'),
(3, 'new@gmail.com', 'Yellow Cryons', 'Nairobi-Ruiru'),
(5, 'test@gmail.com', 'school', 'Nairobi-Ruiru'),
(6, 'new@gmail.com', 'Yellow Cryons', 'Nairobi-Ruiru');

-- --------------------------------------------------------

--
-- Table structure for table `stationaryimages`
--

CREATE TABLE `stationaryimages` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stationaryimages`
--

INSERT INTO `stationaryimages` (`id`, `image`) VALUES
(1, 'office-supplies.png');

-- --------------------------------------------------------

--
-- Table structure for table `stationaryorders`
--

CREATE TABLE `stationaryorders` (
  `id` int(255) NOT NULL,
  `email3` varchar(100) NOT NULL,
  `orders3` varchar(100) NOT NULL,
  `location3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stationaryorders`
--

INSERT INTO `stationaryorders` (`id`, `email3`, `orders3`, `location3`) VALUES
(1, 'admin@gmail.com', 'END OF SCHOOL ORDERS!!', 'NULL'),
(2, 'admin@gmail.com', 'STATIONARY ORDERS!!', 'NULL'),
(3, 'New@gmail.com', 'Dozen Of Pens', 'Nairobi-Ruiru'),
(4, 'test@gmail.com', 'stationary', 'Nairobi-Ruiru'),
(5, 'test@gmail.com', 'Dozen Of Pens', 'Nairobi-Ruiru');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `ID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`ID`, `email`) VALUES
(1, 'badakomora06@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brandingimages`
--
ALTER TABLE `brandingimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandingorders`
--
ALTER TABLE `brandingorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officeimages`
--
ALTER TABLE `officeimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officeorders`
--
ALTER TABLE `officeorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email1` (`email1`) USING BTREE;

--
-- Indexes for table `reg_table`
--
ALTER TABLE `reg_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `schoolimages`
--
ALTER TABLE `schoolimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolorders`
--
ALTER TABLE `schoolorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stationaryimages`
--
ALTER TABLE `stationaryimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stationaryorders`
--
ALTER TABLE `stationaryorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brandingimages`
--
ALTER TABLE `brandingimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brandingorders`
--
ALTER TABLE `brandingorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `officeimages`
--
ALTER TABLE `officeimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `officeorders`
--
ALTER TABLE `officeorders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reg_table`
--
ALTER TABLE `reg_table`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schoolimages`
--
ALTER TABLE `schoolimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schoolorders`
--
ALTER TABLE `schoolorders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stationaryimages`
--
ALTER TABLE `stationaryimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stationaryorders`
--
ALTER TABLE `stationaryorders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
