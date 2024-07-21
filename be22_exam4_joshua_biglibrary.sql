-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2024 at 03:34 PM
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
-- Database: `be22_exam4_joshua_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be22_exam4_joshua_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be22_exam4_joshua_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `book_cd_dvd`
--

CREATE TABLE `book_cd_dvd` (
  `id` int(11) NOT NULL,
  `titel` varchar(30) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `ISBN_code` int(11) NOT NULL,
  `short_decription` varchar(300) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `autor_first_name` varchar(30) DEFAULT NULL,
  `autor_last_name` varchar(30) DEFAULT NULL,
  `publisher_name` varchar(30) DEFAULT NULL,
  `publisher_address` varchar(30) DEFAULT NULL,
  `publisher_date` date NOT NULL,
  `ava` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_cd_dvd`
--

INSERT INTO `book_cd_dvd` (`id`, `titel`, `img`, `ISBN_code`, `short_decription`, `type`, `autor_first_name`, `autor_last_name`, `publisher_name`, `publisher_address`, `publisher_date`, `ava`) VALUES
(1, 'Beowulf', 'beowulf.jpg', 2147483647, 'Beowulf is described as tall, noble, and extremely strong. The poem is quite scant on physical descriptions of him, but goes into detail about his heroism.', 'CD', 'Gisbert', 'Haefs', 'Muller', '3 Lakewood Gardens Court', '2008-07-25', 0),
(2, 'The Divine Comedy', 'Divine Comedy.jpg', 2147483647, 'Divina Commedia, or Divine Comedy, is an Italian narrative poem written by Dante Alighieri. Dante Alighieri composed the poem between 1308 and 1320. The poem narrates Dantes fictional travel through three realms—Inferno, Purgatorio, and Paradiso—guided by the Roman poet Virgil.', 'Book', 'Dante', 'Alighieri', 'Muller', '0869 Graceland Center', '2020-12-22', 1),
(3, 'Between Two Fires', 'Between Two Fires.jpg', 2147483647, 'Between Two Fires is a 2012 period piece horror novel by Christopher Buehlman. Set during the Black Plague, it follows a disgraced knight and a mysterious young girl who travel across France, as Lucifer and other fallen angels start another war with Heaven.', 'Book', 'Christopher', 'Buehlman', 'Muller', '27109 Elgar Point', '2000-11-06', 1),
(4, 'Fire Over England', 'Fire Over England.jpg', 2147483647, 'The film is a historical drama set during the reign of Elizabeth I focusing on Englands victory over the Spanish Armada.', 'DVD', 'Dante', 'Alighieri', 'Muller', '0883 Nevada Trail', '2002-10-30', 0),
(5, 'Don Quixote', 'Don Quixote.jpg', 2147483647, 'Don Quixote by Miguel de Cervantes, is a Spanish novel published in the early 1600s. Declared by many critics and authors to be the first modern novel, Don Quixote charts the adventures of a middle aged nobleman who, unsatisfied with ordinary life, views his actions through the lens of medieval chiv', 'Book', 'Roger', 'Lancelyn Green', 'Abshire', '73413 1st Avenue', '2013-05-12', 0),
(6, 'A Distant Mirror', 'A Distant Mirror.jpg', 2147483647, 'In this revelatory work, Barbara W. Tuchman examines not only the great rhythms of history but the grain and texture of domestic life: what childhood was like; what marriage meant; how money, taxes, and war dominated the lives of serf, noble, and clergy alike', 'CD', 'Barbara', 'Tuchman', 'Bogan', '5 Hazelcrest Street', '1970-10-05', 1),
(7, 'The Name of the Rose', 'The Name of the Rose.jpg', 2147483647, 'It is a historical murder mystery set in an Italian monastery in the year 1327, and an intellectual mystery combining semiotics in fiction, biblical analysis, medieval studies, and literary theory.', 'DVD', 'Umberto', 'Eco', 'Bogan', '5 Hazelcrest Street', '1960-10-05', 0),
(8, 'The Song of Roland', 'The Song of Roland.jpg', 2147483647, 'The Song of Roland is an epic poem from the 11th century that recounts the heroic deeds of Charlemagnes knights and their battle against the Muslim Saracens in Spain. It is a testament to chivalry, honor, and religious fervor.', 'Book', 'Matteo Maria', 'Boiardo ', 'Bogan', '5 Hazelcrest Street', '1988-10-21', 1),
(9, 'Nibelungenlied', 'Nibelungenlied.jpg', 2147483647, 'Description. Das Nibelungenlied is a classic German epic poem that tells the story of the heroic and tragic events surrounding the legendary warrior Siegfried and the royal family of Burgundy. The poem is rich in symbolism and mythology, exploring themes of love, loyalty, betrayal, and revenge.', 'CD', 'Barbara', 'Tuchman', 'Abshire', '64 Village Junction', '1984-04-12', 0),
(10, 'king arthur', 'king arthur and the knights of the round table.jpg', 2147483647, 'He becomes king. With the guidance of Merlin, he constructs a round table, at which only the best knights of Britain may sit. More and more knights come to join the brotherhood of the Round Table, and each has his own adventures. Eventually, the holy knight Galahad, the son of Sir Lancelot, comes to', 'DVD', 'Roger', 'Lancelyn Green', 'Abshire', '64 Village Junction', '1999-04-12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_cd_dvd`
--
ALTER TABLE `book_cd_dvd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_cd_dvd`
--
ALTER TABLE `book_cd_dvd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
