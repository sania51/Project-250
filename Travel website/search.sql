-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 08:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

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
  `descc` text NOT NULL,
  `keywords` text NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `title`, `descc`, `keywords`, `link`) VALUES
(1, 'Sylhet', 'Sylhet is one of the greenest divisions in Bangladesh. The greenery of Sylhet is so peaceful and calming. Though Sylhet is mostly known for its tea but...', 'Sylhet tea jaflong', 'http://localhost/Travel%20website/Sylhet/Sylhet.php'),
(2, 'Jaflong ', 'Despite the loss of its former splendour due to unrestricted mining and crushing of stones, Jaflong is still a ‘must-see’ destination for tourists visiting Sylhet. Flowing from the north Khasi mountains, the river Dauki enters Bangladesh under the name ‘Piyain’, along the bank of which lies the spectacular Jaflong. About 62 km', 'sylhet jaflong river stone hanging bridge tamabil', 'http://localhost/Travel%20website/Sylhet/jaflong.php'),
(3, 'Ratargul', 'Ratargul is the only freshwater Swamp Forest in Bangladesh. Despite its existence over a vast stretch of swampland in the not too distant past, the swamp forest now occupies an area of only two square kilometres.', 'ratargul sylhet swamp forest', 'http://localhost/Travel%20website/Sylhet/Ratargul.php'),
(4, 'Bholagonj', 'Bholagonj, the largest stone quarry in Bangladesh, is 33 km away to the north from Sylhet city. Flowing respectively from the Khasi hill in the north and Dauki in the east, the rivers Dholai and the Piyain meet at Companigonj Upazilla Sadar, which is 27 km', 'bholagonj volagonj white stone sylhet', 'http://localhost/Travel%20website/Sylhet/volagonj.php'),
(5, 'Bisnakandi', 'Bisnakandi is a village situated in Rustompur Union under Guainghat Upazilla. This is where many layers of the Khasi mountain meet at a single point from both sides. Flowing from above is a high fall. Adding to its charm', 'bisanakandi sylhet ', 'http://localhost/Travel%20website/Sylhet/bisnakandi.php'),
(6, 'Lalakhal', 'Lalakhal,which is another top tourist attraction in Jaintapur Upazilla, is covered with hills, natural forests, tea gardens, and rivers under the Jainta Hill which comprises part of the Meghalaya Ranges of India...', 'lalakhal Lalakhal river sylhet', 'http://localhost/Travel%20website/Sylhet/lalakhal.php'),
(7, 'Lawachara', 'On the Vanugach-Komalganj Road about seven kilometres from Sreemongol town is the entry to Lauachora National Garden. It is an evergreen rainforest with excessive precipitation. Tall trees... ', 'Lawachara Lawachera lawachora sylhet forest', 'http://localhost/Travel%20website/Sylhet/lawachara.php'),
(8, 'Tanguar Haor', 'At the foot of the Meghalaya ranges in the middle of Tahirpur and Dharmapasha Upazilla under Sunamgonj district in north-east Sylhet is a vast swampland popularly known as Tangoar Haor that spans...', 'Tanguar Haor sylhet natural ', 'http://localhost/Travel%20website/Sylhet/tanguar.php'),
(9, 'Sreemongol', 'Despite being an Upazilla – a small administrative unit – under Moulvibazar district in Sylhet, Sreemongol has long been credited as a top tourist attraction having earned its recognition as a town as early as the beginning of the19th century...', 'Sreemongol tea garden sylhet natural ', 'http://localhost/Travel%20website/Sylhet/sremongol.php'),
(10, 'Hum Hum', 'Hum Hum is a waterfall in Moulvibazar, Bangladesh. It was discovered in 2010. It is situated in Razkandi reserve forest, Sreemangal,Maulvibazar district, Sylhet.The height of the fall is about 147 to 160 feet...', 'Hum hum hamham humhum ham ham sylhet waterfall falls natural', 'http://localhost/Travel%20website/Sylhet/hum.php'),
(11, 'Madhabkunda', 'Madhabkunda Waterfall and Eco Park is situated in Barlekha Upazila in Moulvibazar District of Sylhet Division. It is one of the largest waterfalls in Bangladesh. The waterfall is a popular tourist spot in Bangladesh...', 'Madhabkunda sylhet waterfall falls natural nature', 'http://localhost/Travel%20website/Sylhet/madhav.php'),
(12, 'Khadimnagar', 'About 10 kilometres from Sylhet city on the Sylhet-Jaflong Highway past the Shrine of Shah Paran is Khadimnagar Intersection. A left turn from there leads to Khadimnagar Tea Garden. Waiting to greet...', 'Khadimnagar sylhet nature forest natural', 'http://localhost/Travel%20website/Sylhet/khadim.php'),
(13, 'Dibir Haor', 'Dibir Haor, a beautiful tourist spot surrounded by mountain at the foot of Meghalaya state of India, was off the radar even four years back, but it has turned out to be a great destination of tourists...', 'Dibir Haor water lilis sylhet', 'http://localhost/Travel%20website/Sylhet/dibir.php'),
(14, 'Hakaluki Haor', 'Hakaluki Haor is a marsh wetland ecological system of Eastern Bangladesh in an area bordering Assam, India. It is one of Bangladesh’s largest and one of Asia’s larger marsh wetland resources...', 'Hakaluki Haor nature natural sylhet ecologically critical', 'http://localhost/Travel%20website/Sylhet/hakaluki.php'),
(15, 'Lovachora', 'Lovachora is a bordering area from Kanaighat Upazilla in the eastern part of Sylhet district, which is somewhat fortified from northeast to northwest by the Meghalayan ranges. It is essentially...', 'Lovachora natural hills ', 'http://localhost/Travel%20website/Sylhet/lova.php'),
(16, 'Shimul Bagan', '‘Shimul Bagan’ is situated in the Jadukata river banks taking over 100 bighas of land in Tahirpur, Sunamganj. The garden also contains lemon trees. It appears like a field of Bombax that has...', 'Shimul Bagan forest garden natural sylhet', 'http://localhost/Travel%20website/Sylhet/shimul.php'),
(17, 'Sathchori', 'Sathchori National ForestSathchori National Forest is situated in Roghunandon Hill at Chunnarughat Upazilla under Habiganj District in Sylhet Division. Previously known as Roghunandon Reserve Forest,...', 'Sathchori National forest sylhet roghunandon', 'http://localhost/Travel%20website/Sylhet/satchori.php'),
(18, 'Panthumai', 'Panthumai – a village from West Jaflong Union under Guainghat Upazilla – is another tourism hub in Sylhet. The village, which is very near to the east Khasia hill of the Meghalaya ranges,', 'Panthumai Jaflong  sylhet village Bisnakandi falls ', 'http://localhost/Travel%20website/Sylhet/panthumai.php'),
(19, 'Turong Chora', 'Bholaganj is a border area of Companyiganj upazila of Sylhet district. Bholaganj at the foot of Meghalaya Hills is full of natural beauty...', 'Turong Chora', 'http://localhost/Travel%20website/Sylhet/turong.php'),
(20, 'Shrine of Shahjalal', 'This fascinating and atmospheric shrine of the revered 14th-century Sufi saint Shah Jalal is one of Bangladesh\'s biggest pilgrimage sites. Housing a mosque (masjid) and the main tomb (mazar),...', 'Shrine of Shahjalal majar sylhet religious historical', 'http://localhost/Travel%20website/Sylhet/shahjalal.php'),
(21, 'Shrine of Shahparan', 'Hazrat Shah Paran was a Sufi saint of the Suhrawardiyya and Jalalia order. It is said that he was the son of a sister of Shah Jalal and was born in Hadramaut, Yemen. He was an accomplice of his uncle,...', 'Shrine of Shahparan majar religious historical sylhet', 'http://localhost/Travel%20website/Sylhet/shahporan.php'),
(22, 'Keane Bridge', 'Keane Bridge was named after Sir Micheal Keane who was English governor of Assam from 1932-1937, located on top of Surma river and it is known as the gateway to Sylhet. It was built in the year 1936...', 'Keane Bridge', 'http://localhost/Travel%20website/Sylhet/kean.php'),
(23, 'Ali Amjad\'s Clock', 'Folk lore refers to the introduction of the Ali Amjad Clock Tower, by Nawab Ali Ahmed Khan in 1874, an enthusiasm which was drawn from the one in Chandnichawk in Delhi, India. It was set up by...', 'Ali Amjad\'s Clock historical sylhet', 'http://localhost/Travel%20website/Sylhet/clock.php'),
(24, 'Cox\'s Bazar', 'Cox\'s Bazar sea beach is the longest sea beach in the world, 120 km long, having no 2nd instance. The wavy water of Bay of Bengal touches the beach throughout this 120 km...', 'Cox\'s Bazar sea beach largest chittagong natural', 'http://localhost/Travel%20website/Chittagong/cox.php'),
(25, 'Chittagong', 'With a pictures queen hinterland of large hill forests and lakes,Chittagong is a good vacation spot. It is the second largest city of Bangladesh and a busy of Bangladesh...', 'Chittagong chittagong', 'http://localhost/Travel%20website/Chittagong/Chittagong.php'),
(26, 'Debotakhum', 'Debotakhum is located in Roangchari upazila of Bandarban district.Debotakhum is located in Roangchari upazila of Bandarban district...', 'Debotakhum chittagong trail hill', 'http://localhost/Travel%20website/Chittagong/debota.php'),
(27, 'Sajek Valley', 'Sajek is located in the verdant hills of Kasalong range of mountains amidst the serene and exotic beauty of nature. You will notice lofty mountains, dense forest, sprawling grasslands and...', 'Sajek Valley hills natural beauty chittagong', 'http://localhost/Travel%20website/sajek.php'),
(28, 'Kaptai Lake', 'Kaptai Lake is a beautiful blue man-made watery lake. The size of this Lake is approximately 11000 square kilometer, which was created as a reservoir when the Kaptai dam was built during...', 'Kaptai Lake chittagong water natural beauty', 'http://localhost/Travel%20website/Chittagong/kaptai.php'),
(29, 'Nafakhum', 'Nafa-khum Waterfall (Bengali: নাফাখুম) is located in Thanchi Upazila of Bandarban on the Sangu River. It is among the largest waterfalls in the country by volume of water falling. The wild hilly...', 'Nafakhum chittagong waterfall falls ', 'http://localhost/Travel%20website/Chittagong/nafakhum.php');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
