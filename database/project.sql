-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 11:16 AM
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
(6, 'Agra - A Journey to the Taj', 'Experience the timeless beauty of the Taj Mahal, a symbol of eternal love. Built by Emperor Shah Jahan in memory of his beloved wife Mumtaz Mahal, this white marble wonder is a UNESCO World Heritage Site and one of the Seven Wonders of the World. Mar', 'Step into history at Agra Fort, a massive red sandstone fortress that served as the residence of Mughal emperors. Explore its splendid palaces, audience halls, and the famous Musamman Burj, where Shah Jahan was imprisoned. Witness panoramic views of ', 'Discover the ancient city of Fatehpur Sikri, a blend of Persian and Indian architecture. Built by Emperor Akbar, this abandoned city showcases monuments like Buland Darwaza, Jama Masjid, and Panch Mahal. The stories of Mughal grandeur and Akbar\'s vis', 5000.00, 4.8, 3, 'New Delhi', 'Agra', 2, 'bus'),
(7, 'Jaipur - A Royal Experience', 'Admire the unique and intricate design of Hawa Mahal, also known as the \"Palace of Winds.\" This stunning five-story pink sandstone structure features 953 small windows, or \"jharokhas,\" which allowed royal ladies to observe everyday life and festivals', 'Experience the grandeur of Amber Fort, perched on a hilltop overlooking Maota Lake. This iconic fort is a masterpiece of Rajputana architecture, combining Mughal influences with traditional Rajasthani design. Walk through its magnificent courtyards, ', 'Step into the heart of Jaipur\'s royal legacy at the City Palace, an exquisite blend of Mughal and Rajput architecture. Explore its ornate courtyards, museums displaying royal artifacts, and the iconic Chandra Mahal, where the royal family still resid', 7000.00, 4.7, 4, ' New Delhi', 'Jaipur', 3, 'bus'),
(8, 'Leh-Ladakh - Land of High Passes', 'Immerse yourself in the surreal beauty of Pangong Lake, a shimmering blue water body surrounded by rugged mountains. This high-altitude lake, shared between India and China, changes colors throughout the day, offering a mesmerizing visual treat. A po', 'Explore the enchanting Nubra Valley, known for its breathtaking landscapes, sand dunes, and the unique Bactrian camels. Visit Diskit Monastery, home to a towering statue of Maitreya Buddha, and enjoy the serene atmosphere of this remote valley.', 'Feel the adrenaline rush as you drive through Khardung La, one of the highest motorable roads in the world at an elevation of 18,380 feet. The panoramic views of the surrounding snow-clad peaks and valleys are unparalleled, making it a must-visit for', 20000.00, 4.8, 5, 'Leh', 'Leh', 6, 'bus'),
(9, 'Puri-Konark - Temple Trail', 'Begin your spiritual journey at the sacred Jagannath Temple, one of the Char Dham pilgrimage sites in India. Dedicated to Lord Jagannath, this ancient temple is a marvel of Kalinga architecture. Witness the grandeur of its annual Rath Yatra and feel ', 'Discover the awe-inspiring Konark Sun Temple, a UNESCO World Heritage Site and a testament to ancient Indian craftsmanship. Shaped like a colossal chariot, this architectural masterpiece is adorned with intricate stone carvings depicting scenes from ', 'Unwind on the golden sands of Puri Beach, a serene retreat for nature lovers. Enjoy the soothing sound of waves, take a refreshing dip in the sea, or savor the delicious local seafood. The stunning sunrise and sunset views make this beach a perfect s', 4000.00, 4.7, 3, 'Bhubaneswar ', 'Puri', 2, 'bus'),
(10, ' Chilika - Birdwatcher\'s Paradise', 'Step into the enchanting Nalabana Bird Sanctuary, a haven for birdwatchers and nature enthusiasts. This lush sanctuary is part of Chilika Lake and transforms into a bustling hub during winter as thousands of migratory birds, including flamingos, hero', 'Embark on an exciting boat ride at Satpada, the home of the rare and endangered Irrawaddy dolphins. Glide through the tranquil waters of Chilika Lake and marvel at these gentle creatures as they gracefully surface. The picturesque backdrop and the th', 'Visit the mystical Kalijai Island, renowned for its scenic beauty and the revered temple of Goddess Kalijai. This island holds significant cultural and spiritual importance, with local legends adding an aura of mystery to its charm. The breathtaking ', 3500.00, 4.8, 3, ' Puri', 'Barkul', 2, 'bus');

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
(4, 'Agra - A Journey to the Taj', '1734255426_agra1.webp'),
(5, 'Agra - A Journey to the Taj', '1734255426_agra5.jpg'),
(6, 'Agra - A Journey to the Taj', '1734255426_agra4.jpg'),
(7, 'Agra - A Journey to the Taj', '1734255426_agra3.jpg'),
(8, 'Agra - A Journey to the Taj', '1734255426_agra2.jpg'),
(9, 'Jaipur - A Royal Experience', '1734256060_jaipur5.webp'),
(10, 'Jaipur - A Royal Experience', '1734256060_jaipur4.avif'),
(11, 'Jaipur - A Royal Experience', '1734256060_jaipur3.avif'),
(12, 'Jaipur - A Royal Experience', '1734256060_jaipur2.avif'),
(13, 'Jaipur - A Royal Experience', '1734256060_jaipur1.avif'),
(14, 'Leh-Ladakh - Land of High Passes', '1734256463_leh5.webp'),
(15, 'Leh-Ladakh - Land of High Passes', '1734256463_leh4.webp'),
(16, 'Leh-Ladakh - Land of High Passes', '1734256463_leh3.avif'),
(17, 'Leh-Ladakh - Land of High Passes', '1734256463_leh2.avif'),
(18, 'Leh-Ladakh - Land of High Passes', '1734256463_leh1.avif'),
(19, 'Puri-Konark - Temple Trail', '1734256993_puri5.jpg'),
(20, 'Puri-Konark - Temple Trail', '1734256993_puri4.jpg'),
(21, 'Puri-Konark - Temple Trail', '1734256993_puri3.webp'),
(22, 'Puri-Konark - Temple Trail', '1734256993_puri2.webp'),
(23, 'Puri-Konark - Temple Trail', '1734256993_puri1.webp'),
(24, ' Chilika - Birdwatcher\'s Paradise', '1734257760_chilika5.jpg'),
(25, ' Chilika - Birdwatcher\'s Paradise', '1734257760_chilika4.jpg'),
(26, ' Chilika - Birdwatcher\'s Paradise', '1734257760_chilika3.webp'),
(27, ' Chilika - Birdwatcher\'s Paradise', '1734257760_chilika2.webp'),
(28, ' Chilika - Birdwatcher\'s Paradise', '1734257760_chilika1.webp');

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
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
