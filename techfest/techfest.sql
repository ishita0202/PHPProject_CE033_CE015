-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 06:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `ask` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fullname`, `email`, `contact`, `ask`) VALUES
(1, 'Chauhan Ishita Rakeshkumar', 'ishitaahauhan11@gmail.com', 1234567891, 'aasdfghjjhgfdssawreedg'),
(2, 'Gajera Princyben Himmatbhai', 'princygajera121@gmail.com', 2147483647, 'ddqweqw'),
(3, 'Gajera Princyben Himmatbhai', 'princygajera121@gmail.com', 2147483647, 'dqwsd'),
(4, 'Gajera Princyben Himmatbhai', 'princygajera121@gmail.com', 2147483647, 'dqwsd'),
(5, 'Gajera Princyben Himmatbhai', 'princygajera121@gmail.com', 2147483647, 'sdsz'),
(6, 'Gajera Princyben Himmatbhai', 'princygajera121@gmail.com', 2147483647, 'sdsz'),
(7, 'Gajera Princyben Himmatbhai', 'princygajera121@gmail.com', 2147483647, 'sdsz');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `member` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `teams` int(11) NOT NULL,
  `coordinater_name` varchar(50) NOT NULL,
  `coordinater_contact` int(10) NOT NULL,
  `remain_team` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `title`, `description`, `member`, `fees`, `teams`, `coordinater_name`, `coordinater_contact`, `remain_team`) VALUES
(1, 'beg_borrow', 'Beg Borrow Steal', 'Manipulation & Persuasion are some underrated arts. You think you got it, participate and we\'ll test it out at Felicific 2020', 4, 120, 50, 'Priyanka Dave', 997845362, 50),
(2, 'funtennis', 'Fun Tennis', 'It\'s fun when you balance it right?\r\nKeep Calm and Serve an Ace . . .', 2, 20, 30, 'Dhaiya modi', 984567654, 28),
(3, 'brush', 'Battle Of Brushes', 'Paint is only wasted when it stays in the tube. Here we are with an opportunity for you to come up with flying colors. Come join us to do it with passion at felicific.', 1, 150, 30, 'Aditi Shah', 943657894, 30),
(4, 'dancebattle', 'Dance Battle', 'Practise like you\'ve never won ! Perform like you\'ve never lost ! Battle it out with your dance moves at felicific ', 5, 20, 20, 'Krishna Shah', 98675643, 20),
(5, 'football', 'Street Football', 'Goal, pass, quarterback, tackle, run . . . do it all but in street style !! Can your team do that ? Felicific2020', 5, 120, 15, 'Sourabh Mori', 98954342, 15),
(6, 'boxcricket', 'Box Cricket', 'Make your team to show your madness in Cricket. Catch the excitement of the game in Felicific2020', 6, 150, 30, 'Nikhil Patel', 983425675, 30),
(7, 'child', 'Childhood Games', 'Some days we wish we could go back in life. Not to change anything but to feel few things twice. Here\'s your chance! walk down the memory path with us\r\nLet\'s relive the good old days together at Felicific2020.', 5, 90, 50, 'Shivani Bhattani', 987867542, 50),
(8, 'eldorado', 'Eldorado', 'Behold ! In a world full of adventures, never settle for cheap thrills.\r\nDo you want to hunt in the jungle of clues ? Then brace yourself up. #Felicific2020 brings \"El Dorado\" through which you can enjoy the different rounds of fun and mystery. Live to hunt, hunt to live.', 3, 150, 50, 'Krishna Shah', 987656754, 50),
(9, 'sacredgames', 'Sacred Games', 'Jab tak ye khel khatam nhi hota hum idharich hai \' #Felicific2020\r\nFeel the suspense of the game by participating in it. Decode the code, solve the puzzle, enjoy the fun, perform some dare, check your mental strength and be the winner of the game; the \"Sacred Games\".\r\nThis event consists of several rounds in which the above-mentioned jargon will be created and you have to come out as an ultimate winner.', 3, 120, 30, 'Jaimin Desai', 986533256, 30),
(19, 'hydromoblie', 'HydroMobile', 'Vanue: Narayan Bhavan\r\nTime:11:00am onwards\r\n', 3, 150, 10, 'Nikul Variya', 997845362, 9),
(20, 'robowars', 'Robo Wars', 'Robowars \r\nListen to kill\r\nVanue:Narayan Bhavan\r\nTime:10:00 am onwards', 4, 100, 10, 'Dhaiya modi', 984567654, 9),
(21, 'wonderweb', 'Wonder Web', '\' Building a website is easy, designing one takes skill \'\r\n~ Paul Scrivens. Web Devs this one\'s for you !! \r\nFelicific2020', 1, 20, 30, 'Vivek Shah', 943657894, 0),
(22, 'moviemake', 'Smartphone Movie Making', 'Write, Direct, Shoot, Edit . . . make your own content. Bring out your cinematic creativity cause even Nolan was once a novice !! \r\nFelicific2020', 4, 20, 20, 'Dhruvin Seth', 98675643, 20),
(23, 'coderage', 'CodeRage', 'Code Never Lies.\r\nConfident on your coding skills ? Go for it !!\r\nFelicific2020', 2, 40, 15, 'Sourabh Mori', 98954342, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `leader_name` varchar(30) NOT NULL,
  `leader_contact` varchar(30) NOT NULL,
  `partner1` varchar(30) NOT NULL,
  `partner2` varchar(30) NOT NULL,
  `partner3` varchar(30) NOT NULL,
  `partner4` varchar(30) NOT NULL,
  `partner5` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `title`, `leader_name`, `leader_contact`, `partner1`, `partner2`, `partner3`, `partner4`, `partner5`) VALUES
(1, 'HydroMobile', 'ishita', 'ishitaahauhan11@gmail.com', 'ishita', 'ishita', '-', '-', '-'),
(2, 'HydroMobile', 'ishita', 'ishitaahauhan11@gmail.com', 'ishita', 'ishita', '-', '-', '-'),
(3, 'Wonder Web', 'Chauhan Ishita Rakeshkumar', 'ishitaahauhan11@gmail.com', '-', '-', '-', '-', '-'),
(4, 'HydroMobile', 'Princy', 'princygajera121@gmail.com', 'j', 'i', '-', '-', '-'),
(5, 'Robo Wars', 'Gajera Princyben Himmatbhai', 'princygajera121@gmail.com', 'wds', 'sad', 'asdas', '-', '-'),
(6, 'Fun Tennis', '2', 'q', '1', '-', '-', '-', '-'),
(7, 'Fun Tennis', 'Gajera Princyben Himmatbhai', 'princygajera121@gmail.com', 'i', '-', '-', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
