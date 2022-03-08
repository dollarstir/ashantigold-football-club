-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2021 at 01:42 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashgold`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Ash Gold Admin', 'admin@ashgold.com', 'ashgold2020');

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `id` int(11) NOT NULL,
  `team1_image` text NOT NULL,
  `team1_name` text NOT NULL,
  `team1_goals` text NOT NULL,
  `team2_image` text NOT NULL,
  `team2_name` text NOT NULL,
  `team2_goals` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`id`, `team1_image`, `team1_name`, `team1_goals`, `team2_image`, `team2_name`, `team2_goals`) VALUES
(1, 'logo.png', 'Ashgold SC', '5', 'kotoko.png', 'Asante Kotoko', '0'),
(2, 'liberty.png', 'Liberty Pro.', '0', 'logo.png', 'Ashgold SC', '4'),
(3, 'logo.png', 'Ashgold SC', '5', 'hearts.png', 'Hearts of Oak', '0'),
(4, 'Aduana-Stars.png', 'Aduanah Stars', '2', 'logo.png', 'Ashgold SC', '4'),
(5, 'logo.png', 'Ashgold SC', '5', 'kotoko.png', 'Asante Kotoko', '0'),
(6, 'messi3-1610841165.png', 'AshGold', '2', 'messi-1610841165.png', 'Hearts ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `total_likes` text NOT NULL,
  `total_views` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `total_likes`, `total_views`) VALUES
(1, 'ag 2.jpg', '123k', '223k'),
(2, 'pic1.jpg', '123k', '223k'),
(3, 'pic2.jpg', '123k', '223k'),
(4, 'pic3.jpg', '123k', '223k'),
(5, 'pic4.jpg', '123k', '223k'),
(6, 'pic5.jpg', '123k', '223k');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `player_name` text NOT NULL,
  `player_number` text NOT NULL,
  `player_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `image`, `player_name`, `player_number`, `player_details`) VALUES
(1, 'Robert.jpg', 'Robert Dabuo', '#1', '\r\nDate of birth:	Nov 10, 1990\r\nAge:	30\r\nHeight:	1,84 m\r\nCitizenship:	Ghana  Ghana\r\nPosition:	Goalkeeper\r\nCurrent club:	Ashanti Gold SC Ashanti Gold SC\r\nJoined:	Jul 1, 2013\r\nContract expires:	-'),
(2, 'profile.png', 'Felix Clottey', '#16', 'Date of birth:	May 12, 1994\r\nAge:	26\r\nCitizenship:	Ghana  Ghana\r\nPosition:	Goalkeeper\r\nCurrent club:	Ashanti Gold SC Ashanti Gold SC\r\nJoined:	-\r\nContract expires:	-\r\n'),
(3, 'profile.png', 'Mohamed Bailou', '#22', '\r\nName in home country:	Mohamed Baïlou\r\nDate of birth:	Mar 3, 1991\r\nPlace of birth:	Bobo-Dioulasso  Burkina Faso\r\nAge:	29\r\nHeight:	1,97 m\r\nCitizenship:	Burkina Faso  Burkina Faso\r\nPosition:	Goalkeeper\r\nCurrent club:	Ashanti Gold SC Ashanti Gold SC\r\nJoined:	Oct 1, 2020\r\nContract expires:	-\r\n'),
(5, 'messi-1610768445.png', 'Iksoft', '10', 'Messi ');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `category_type` text DEFAULT NULL,
  `author` text DEFAULT NULL,
  `post_date` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `total_like` text DEFAULT '0',
  `views` text DEFAULT '0',
  `image` text DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `current_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category_type`, `author`, `post_date`, `title`, `body`, `comments`, `total_like`, `views`, `image`, `created_by`, `status`, `current_date`) VALUES
(2, 'Sports', 'Sports', '12/12/2021', 'We will win very Soon!', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Kotoko will cry', '766M', '876M', 'image2.jpg', 'Iksoft Original', 'status here', '12/12/2021'),
(3, 'Sports', 'Sports', '12/12/2021', 'We will win very Soon!', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Kotoko will cry', '766M', '876M', 'pic4.jpg', 'Iksoft Original', 'status here', '12/12/2021'),
(4, 'Sports', 'Iksoft', '16th January, 2021', 'Todays match', 'this is a test post', NULL, '0', '0', 'mme-1610771585.png', NULL, NULL, NULL),
(5, 'Sports', 'Dollar', '16th January, 2021', 'Mrs', 'something', NULL, '0', '0', 'messi3-1610837457.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `today_match`
--

CREATE TABLE `today_match` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `date_time` text NOT NULL,
  `venue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `today_match`
--

INSERT INTO `today_match` (`id`, `image`, `title`, `date_time`, `venue`) VALUES
(2, 'mme-1610837551.png', 'sddsfdf', '2021-01-16 00:12', 'esfvfv');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'iksoft', 'i@gmail.com', '1234567890', '1234'),
(12, 'iksoft', 'aduamahdaniel16@gmail.com', '0550138086', '1234'),
(13, 'richard', 'richard@gmail.com', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video_image` text DEFAULT NULL,
  `video_link` text DEFAULT NULL,
  `video_title` text DEFAULT NULL,
  `video_date` text DEFAULT NULL,
  `total_like` text DEFAULT '0',
  `total_views` text DEFAULT '0',
  `video_category` text DEFAULT NULL,
  `video_body` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_image`, `video_link`, `video_title`, `video_date`, `total_like`, `total_views`, `video_category`, `video_body`) VALUES
(1, 'thumb1.jpg', '5G5sKmfIKI', 'UMASI KING FAISAL FC 0 V 1 ASHANTI GOLD SC', '20/12/2020', '4,981', '4,981', 'Sports', 'A lone strike from Yussif Mubarik handed the Miners their second victory in their 2019/20 Ghana Premier League campaign on Sunday afternoon.\r\nTen-man King Faisal FC suffered a painful home defeat to Ashanti Gold SC in their match-day two encounters at the Baba Yara Sports Stadium.'),
(2, 'ban2.jpg', '5G5sKmfIKI', 'ASANTE KOTOKO FC 0 V 1 ASHANTI GOLD SC', '20/12/2020', '4,981', '4,981', 'Sports', 'A lone strike from Yussif Mubarik handed the Miners their second victory in their 2019/20 Ghana Premier League campaign on Sunday afternoon.\r\nTen-man King Faisal FC suffered a painful home defeat to Ashanti Gold SC in their match-day two encounters at the Baba Yara Sports Stadium.'),
(3, 'ban3.png', '5G5sKmfIKI', 'HEARTS OF OAK FC 0 V 1 ASHANTI GOLD SC', '20/12/2020', '4,981', '4,981', 'Sports', 'A lone strike from Yussif Mubarik handed the Miners their second victory in their 2019/20 Ghana Premier League campaign on Sunday afternoon.\r\nTen-man King Faisal FC suffered a painful home defeat to Ashanti Gold SC in their match-day two encounters at the Baba Yara Sports Stadium.'),
(4, 'messi-1610839420.png', 'https://www.youtube.com/watch?v=XdbwAmTx7f4', 'My video', '17th January, 2021', '0', '0', 'Sports', 'bodudhj d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `today_match`
--
ALTER TABLE `today_match`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fixtures`
--
ALTER TABLE `fixtures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `today_match`
--
ALTER TABLE `today_match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
