-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 08:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l_id` int(10) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `package_id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sequence` int(2) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `des1` varchar(250) DEFAULT NULL,
  `des2` varchar(250) DEFAULT NULL,
  `des3` varchar(250) DEFAULT NULL,
  `price` double(10,2) NOT NULL,
  `rating` double(2,1) NOT NULL,
  `no_places` int(2) NOT NULL,
  `starting_place` varchar(255) NOT NULL,
  `ending_place` varchar(255) NOT NULL,
  `days` int(5) NOT NULL,
  `travel_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `name`, `des1`, `des2`, `des3`, `price`, `rating`, `no_places`, `starting_place`, `ending_place`, `days`, `travel_by`) VALUES
(5, 'Puri', 'jbvdxfvdiu', 'nbdfkgbkfd', 'bnvkbvkdf', 3000.00, 4.0, 3, 'Cuttack', 'Bhubaneswar', 3, 'bus');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `img_id` int(10) NOT NULL,
  `package_name` varchar(40) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`img_id`, `package_name`, `img_path`) VALUES
(1, 'Puri', '1734189456_Screenshot (1).png'),
(2, 'Puri', '1734189456_Screenshot 2024-10-21 144026.png'),
(3, 'Puri', '1734189456_Screenshot 2024-10-21 144036.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `cid` int(10) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`cid`, `admin`, `name`, `email`, `phone`, `gender`, `dob`, `address`, `password`, `profile_pic`) VALUES
(3, 0, 'Priti pralipta Rout', 'pritipralipta2002@gmail.com', 7847993120, 'female', '2002-09-18', 'TAHASIL COLONY,HATABAZAR,JAGATSINGHPUR', '1234', '1733928249-professor-money-heist-1yegj3ptnd8g5noc.jpg'),
(4, 0, 'Hrushikesh', 'hrushi@gmail.com', 7847993121, 'male', '2000-12-19', 'Bahrampur', '5678', '1733941392-HD-wallpaper-money-heist-cool-dope-professor-thumbnail.jpg'),
(6, 0, 'Subhalaxmi', 'subha@gmail.com', 7847993122, 'female', '2024-12-25', 'JAGATSINGHPUR', '22', '1733942429-pexels-ninauhlikova-287240.jpg'),
(8, 0, 'alisa', 'alisa@gmail.com', 7865449008, 'female', '2024-12-25', 'bbsr', '7890', '1734166633-Screenshot 2024-10-21 144026.png');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `cid` int(10) NOT NULL,
  `package_id` int(10) NOT NULL,
  `review` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `cid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travel_price`
--

CREATE TABLE `travel_price` (
  `travel_by` varchar(20) NOT NULL,
  `price` int(5) NOT NULL,
  `package_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `fk_location` (`package_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `fk6` (`package_name`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `fk4` (`cid`),
  ADD KEY `fk5` (`package_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`time`),
  ADD KEY `fk2` (`cid`),
  ADD KEY `fk3` (`pid`);

--
-- Indexes for table `travel_price`
--
ALTER TABLE `travel_price`
  ADD KEY `fk_travelby` (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `fk_location` FOREIGN KEY (`package_id`) REFERENCES `package` (`package_id`);

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`package_name`) REFERENCES `package` (`name`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`cid`) REFERENCES `register` (`cid`),
  ADD CONSTRAINT `fk5` FOREIGN KEY (`package_id`) REFERENCES `package` (`package_id`);

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`cid`) REFERENCES `register` (`cid`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`pid`) REFERENCES `package` (`package_id`);

--
-- Constraints for table `travel_price`
--
ALTER TABLE `travel_price`
  ADD CONSTRAINT `fk_travelby` FOREIGN KEY (`package_id`) REFERENCES `package` (`package_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
