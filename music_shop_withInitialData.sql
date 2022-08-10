-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 02:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `instruments`
--

CREATE TABLE `instruments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type` enum('guitar','drum','bass','turntables') NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instruments`
--

INSERT INTO `instruments` (`id`, `name`, `brand_name`, `price`, `photo`, `type`, `description`) VALUES
(1, 'guitar', 'Gibson', 1200, 'https://img.freepik.com/free-photo/acoustic-guitar-close-up-beautiful-colored-background_169016-3530.jpg', 'guitar', 'It wasn’t until recently that the electric guitar became the most popular instrument on the top ten list. Before that, the piano was actually in first place. However, the electric guitar now has the top spot. The rise can be attributed to several factors.'),
(2, 'drum', 'Yamaha', 1000, 'https://img.freepik.com/free-photo/drum-kit-dark-background-with-stage-lighting-copy-space_169016-14183.jpg', 'drum', 'Although not as quiet as other instruments, the drums have a high popularity overall. Playing the drums allows a player to lose themselves in the moment. Since drums play an integral part of so many music genres, it is unlikely it will ever fall from the '),
(3, 'bass guitar', 'Fender', 800, 'https://img.freepik.com/free-photo/bass-guitar-player-stage-with-set-distortion-effect-pedals_169016-13128.jpg', 'bass', 'An outstanding double bass instrument has improved many melodies since the 16’th century. The best bass guitar is a long-scaled necessity for many music genres and can even perform mesmerizing solos.'),
(4, ' vinyl record player', 'Audio-Technica', 2000, 'https://www.bassheadspeakers.com/wp-content/uploads/2019/02/Audio-Technica-AT-LP60BK-Vinyl-Record-Player-1021x1024.jpg', 'turntables', 'The Audio-Technica AT-LP60BK is a fully automatic belt-drive stereo turntable which can bring back to life old vinyl collections. It supports both 33-1/3 and 45 RPM records and it has the ability to output the sound using RCA connectors to an external aud'),
(5, 'guitar2', 'Fender', 1700, 'https://img.freepik.com/free-photo/closeup-black-electric-guitar-dark-background_169016-20383.jpg', 'guitar', 'The Fender Musical Instruments Corporation has continuously manufactured the Stratocaster since 1954. It is a double-cutaway guitar, with an extended top \"horn\" shape for balance. '),
(6, 'guitar', 'Gibson', 1200, 'https://img.freepik.com/free-photo/acoustic-guitar-close-up-beautiful-colored-background_169016-3530.jpg', 'guitar', 'It wasn’t until recently that the electric guitar became the most popular instrument on the top ten list. Before that, the piano was actually in first place. However, the electric guitar now has the top spot. The rise can be attributed to several factors.'),
(7, 'drum', 'Yamaha', 1000, 'https://img.freepik.com/free-photo/drum-kit-dark-background-with-stage-lighting-copy-space_169016-14183.jpg', 'drum', 'Although not as quiet as other instruments, the drums have a high popularity overall. Playing the drums allows a player to lose themselves in the moment. Since drums play an integral part of so many music genres, it is unlikely it will ever fall from the '),
(8, 'bass guitar', 'Fender', 800, 'https://img.freepik.com/free-photo/bass-guitar-player-stage-with-set-distortion-effect-pedals_169016-13128.jpg', 'bass', 'An outstanding double bass instrument has improved many melodies since the 16’th century. The best bass guitar is a long-scaled necessity for many music genres and can even perform mesmerizing solos.'),
(9, ' vinyl record player', 'Audio-Technica', 2000, 'https://www.bassheadspeakers.com/wp-content/uploads/2019/02/Audio-Technica-AT-LP60BK-Vinyl-Record-Player-1021x1024.jpg', 'turntables', 'The Audio-Technica AT-LP60BK is a fully automatic belt-drive stereo turntable which can bring back to life old vinyl collections. It supports both 33-1/3 and 45 RPM records and it has the ability to output the sound using RCA connectors to an external aud'),
(10, 'guitar2', 'Fender', 1700, 'https://img.freepik.com/free-photo/closeup-black-electric-guitar-dark-background_169016-20383.jpg', 'guitar', 'The Fender Musical Instruments Corporation has continuously manufactured the Stratocaster since 1954. It is a double-cutaway guitar, with an extended top \"horn\" shape for balance. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instruments`
--
ALTER TABLE `instruments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instruments`
--
ALTER TABLE `instruments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
