-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 07:50 PM
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
(6, 0, 'Subhalaxmi', 'subha@gmail.com', 7847993122, 'female', '2024-12-25', 'JAGATSINGHPUR', '22', '1733942429-pexels-ninauhlikova-287240.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
