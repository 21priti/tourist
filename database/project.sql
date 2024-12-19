-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 02:38 PM
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

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `location_name`, `package_id`, `image`, `sequence`, `description`) VALUES
(12, 'Agra Fort', 30, 'uploads\\1734255426_agra1.webp', 1, 'Begin your Agra journey at Agra Fort, a historical marvel that stands as a testament to the grandeur of the Mughal Empire. This massive red sandstone fortress offers a glimpse into the city\'s rich history and the Mughal lifestyle. It also holds a deep con'),
(13, 'Taj Mahal', 30, 'uploads\\1734255426_agra2.jpg', 2, 'The Taj Mahal, one of the Seven Wonders of the World, is best experienced during sunrise or sunset when its white marble façade reflects shades of gold, pink, or silver. Built by Emperor Shah Jahan in memory of his wife Mumtaz Mahal, this architectural ma'),
(14, 'Fatehpur Sikri', 30, 'uploads\\1734255426_agra4.jpg', 3, 'On the second day, take a day trip to Fatehpur Sikri, a UNESCO World Heritage Site located slightly outside Agra. This abandoned Mughal city was built by Emperor Akbar and served as the capital of his empire for a brief period. Explore its well-preserved '),
(15, 'Pangong Lake', 31, 'uploads\\1734256463_leh1.avif', 1, 'Begin your journey with a visit to the mesmerizing Pangong Lake, famous for its pristine waters and vibrant blue hues. Nestled at an altitude of 4,350 meters, this iconic lake stretches across the borders of India and China. The tranquility of the lake, e'),
(16, 'Nubra Valley', 31, 'uploads\\1734256463_leh2.avif', 2, 'On the second day, explore the enchanting Nubra Valley, a region known for its striking desert landscapes and lush greenery. Visit the sand dunes of Hunder, where you can enjoy a camel ride on the unique double-humped Bactrian camels. Don’t miss Diskit Mo'),
(17, 'Shanti Stupa', 31, 'uploads\\1734256463_leh4.webp', 3, 'Conclude your trip with a visit to Shanti Stupa, a stunning white-domed Buddhist monument perched on a hilltop in Leh. This tranquil spot offers breathtaking panoramic views of Leh city and the surrounding mountains, particularly during sunrise or sunset.'),
(18, 'Jagannath Temple', 32, 'uploads\\1734256993_puri1.webp', 1, 'Begin your spiritual journey at the Jagannath Temple, one of the Char Dham pilgrimage sites. Dedicated to Lord Jagannath, it is an iconic symbol of devotion. Experience the grandeur of the temple\'s annual Rath Yatra and marvel at its intricate Kalinga-sty'),
(19, 'Puri Beach', 32, 'uploads\\1734256993_puri3.webp', 2, ' After seeking blessings at the temple, take a break at Puri Beach. Enjoy the soothing waves, local seafood, and perhaps a camel or horse ride along the shore. Witness the serene sunset to conclude your day.'),
(20, 'Konark Sun Temple', 32, 'uploads\\1734256993_puri2.webp', 3, 'Head to the Konark Sun Temple, a UNESCO World Heritage Site. This 13th-century architectural marvel is shaped like a massive chariot of the Sun God, complete with intricately carved wheels and sculptures depicting scenes of daily life, mythology, and art.'),
(21, 'Hawa Mahal', 33, 'uploads\\1734256060_jaipur1.avif', 1, 'Hawa Mahal, also known as the \"Palace of Winds,\" is an iconic structure in Jaipur, famous for its intricate latticework and unique honeycomb-like façade. Built in 1799 by Maharaja Sawai Pratap Singh, this five-story palace was designed to allow royal wome'),
(22, 'Amber Fort', 33, 'uploads\\1734256060_jaipur2.avif', 2, 'Located on a hilltop, Amber Fort is one of Jaipur’s most spectacular landmarks, offering a glimpse into Rajasthan\'s royal past. Constructed by Maharaja Man Singh I in the late 16th century, the fort is a fusion of Hindu and Mughal architectural styles, wi'),
(23, 'City Palace', 33, 'uploads\\1734256060_jaipur3.avif', 3, 'The City Palace is a magnificent palace complex located in the heart of Jaipur. Built by Maharaja Sawai Jai Singh II in the 18th century, it blends Mughal, Rajput, and European architectural styles. The palace houses several courtyards, gardens, and museu'),
(24, ' Jantar Mantar', 33, 'uploads\\1734256060_jaipur4.avif', 4, 'Jantar Mantar in Jaipur is an astronomical observatory that holds a collection of 19 architectural astronomical instruments built by Maharaja Jai Singh II in the 18th century. It is a UNESCO World Heritage Site and one of the largest observatories of its ');

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
(30, 'Agra - A Journey to the Taj', 'Immerse yourself in the beauty of the Taj Mahal, a UNESCO World Heritage Site. This marble mausoleum, built by Emperor Shah Jahan in memory of his beloved wife Mumtaz Mahal, symbolizes eternal love. The intricate carvings, symmetrical gardens, and st', 'Discover the grandeur of Agra Fort, a 16th-century Mughal fortress made of red sandstone. Explore its palaces, mosques, and courtyards that narrate the opulence and military brilliance of the Mughal era.', 'Visit Fatehpur Sikri, the ancient capital of Emperor Akbar, known for its impressive blend of Islamic, Hindu, and Persian architecture. Walk through the Buland Darwaza, Panch Mahal, and Jama Masjid to relive the glory of the Mughal empire.', 5000.00, 4.8, 3, 'New Delhi', 'Agra', 2, 'bus'),
(31, 'Leh-Ladakh - Land of High Passes', 'Leh-Ladakh, often referred to as the “Land of High Passes,” offers a perfect blend of adventure, serenity, and cultural heritage. From the pristine waters of Pangong Lake to the desert charm of Nubra Valley and the spiritual calm of Shanti Stupa, eac', 'Leh-Ladakh is a paradise for nature lovers and adventure enthusiasts alike, offering an unparalleled blend of rugged landscapes, towering mountains, and pristine lakes. The region’s unique charm lies in its ability to seamlessly combine serene Buddhi', 'Known as the \"Roof of the World,\" Leh-Ladakh is a land of stark contrasts and breathtaking beauty. The region enchants travelers with its otherworldly landscapes, from the tranquil blue of Pangong Lake to the golden sand dunes of Nubra Valley. Its vi', 20000.00, 4.9, 3, 'Leh', 'Leh', 6, 'bus'),
(32, 'Puri-Konark - Temple Trail', 'Puri-Konark is a captivating journey that combines spirituality, history, and natural beauty. Starting at the sacred Jagannath Temple in Puri, the tour takes you through rich cultural experiences, such as marveling at the UNESCO-listed Konark Sun Tem', 'The Puri-Konark tour invites travelers to explore two of Odisha’s most iconic landmarks—the Jagannath Temple and the Konark Sun Temple. Known for their stunning architecture and historical significance, these temples reflect the region’s rich cultura', 'Embark on a spiritual and cultural exploration with the Puri-Konark tour, a journey that takes you through the sacred Jagannath Temple and the awe-inspiring Konark Sun Temple, both of which stand as testaments to Odisha’s rich architectural heritage.', 4000.00, 4.7, 3, 'Bhubaneswar', 'Puri', 2, 'bus'),
(33, 'Jaipur - A Royal Experience', 'Embark on a royal adventure in Jaipur, known as the Pink City, where history, architecture, and culture blend seamlessly. The tour begins with the magnificent Hawa Mahal, often referred to as the Palace of Winds, followed by the grand Amber Fort, a s', 'Jaipur, the Pink City, offers travelers a chance to walk through history. With its intricately designed monuments, Jaipur is a treasure trove of architectural marvels. The iconic Hawa Mahal greets you with its beautiful windows, followed by the majes', 'Jaipur is a city that holds its royal past close, offering an unforgettable experience for visitors. From the airy, lattice-like design of Hawa Mahal to the grandeur of Amber Fort, Jaipur presents a stunning visual feast. The City Palace offers a gli', 7000.00, 4.7, 4, 'New Delhi', 'Jaipur', 3, 'bus');

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
(1, 'Agra - A Journey to the Taj', '1734441957_agra1.webp'),
(2, 'Agra - A Journey to the Taj', '1734441957_agra5.jpg'),
(3, 'Agra - A Journey to the Taj', '1734441957_agra4.jpg'),
(4, 'Agra - A Journey to the Taj', '1734441957_agra3.jpg'),
(5, 'Agra - A Journey to the Taj', '1734441957_agra2.jpg'),
(6, 'Leh-Ladakh - Land of High Passes', '1734442904_leh5.webp'),
(7, 'Leh-Ladakh - Land of High Passes', '1734442904_leh4.webp'),
(8, 'Leh-Ladakh - Land of High Passes', '1734442904_leh3.avif'),
(9, 'Leh-Ladakh - Land of High Passes', '1734442904_leh2.avif'),
(10, 'Leh-Ladakh - Land of High Passes', '1734442904_leh1.avif'),
(11, 'Puri-Konark - Temple Trail', '1734443376_puri5.jpg'),
(12, 'Puri-Konark - Temple Trail', '1734443376_puri4.jpg'),
(13, 'Puri-Konark - Temple Trail', '1734443376_puri3.webp'),
(14, 'Puri-Konark - Temple Trail', '1734443376_puri2.webp'),
(15, 'Puri-Konark - Temple Trail', '1734443376_puri1.webp'),
(16, 'Jaipur - A Royal Experience', '1734443800_jaipur5.webp'),
(17, 'Jaipur - A Royal Experience', '1734443800_jaipur4.avif'),
(18, 'Jaipur - A Royal Experience', '1734443800_jaipur3.avif'),
(19, 'Jaipur - A Royal Experience', '1734443800_jaipur2.avif'),
(20, 'Jaipur - A Royal Experience', '1734443800_jaipur1.avif');

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
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `l_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
