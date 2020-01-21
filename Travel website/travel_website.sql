-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 06:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `title`, `description`, `keywords`, `link`) VALUES
(1, 'Sylhet', 'Sylhet is one of the greenest divisions in Bangladesh. The greenery of Sylhet is so peaceful and calming. Though Sylhet is mostly known for its tea but...', 'Sylhet tea jaflong', 'http://localhost/Travel%20website/Sylhet/Sylhet.php'),
(2, 'Jaflong ', 'Despite the loss of its former splendour due to unrestricted mining and crushing of stones, Jaflong is still a ‘must-see’ destination for tourists visiting Sylhet. Flowing from the north Khasi mountains, the river Dauki enters Bangladesh under the name ‘Piyain’, along the bank of which lies the spectacular Jaflong. About 62 km', 'sylhet jaflong river stone hanging bridge tamabil', 'http://localhost/Travel%20website/Sylhet/jaflong.php'),
(3, 'Ratargul', 'Ratargul is the only freshwater Swamp Forest in Bangladesh. Despite its existence over a vast stretch of swampland in the not too distant past, the swamp forest now occupies an area of only two square kilometres.', 'ratargul sylhet swamp forest', 'http://localhost/Travel%20website/Sylhet/Ratargul.php'),
(4, 'Bholagonj', 'Bholagonj, the largest stone quarry in Bangladesh, is 33 km away to the north from Sylhet city. Flowing respectively from the Khasi hill in the north and Dauki in the east, the rivers Dholai and the Piyain meet at Companigonj Upazilla Sadar, which is 27 km', 'bholagonj volagonj white stone sylhet', 'http://localhost/Travel%20website/Sylhet/volagonj.php'),
(5, 'Bisnakandi', 'Bisnakandi is a village situated in Rustompur Union under Guainghat Upazilla. This is where many layers of the Khasi mountain meet at a single point from both sides. Flowing from above is a high fall. Adding to its charm', 'bisanakandi sylhet ', 'http://localhost/Travel%20website/Sylhet/bisnakandi.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
