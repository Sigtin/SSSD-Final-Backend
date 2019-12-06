-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2019 at 03:18 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sssd_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `decks`
--

DROP TABLE IF EXISTS `decks`;
CREATE TABLE IF NOT EXISTS `decks` (
  `deckId` int(3) NOT NULL AUTO_INCREMENT,
  `deckname` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL,
  `cardlist` varchar(1000) DEFAULT NULL,
  `game` varchar(30) NOT NULL,
  PRIMARY KEY (`deckId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decks`
--

INSERT INTO `decks` (`deckId`, `deckname`, `username`, `cardlist`, `game`) VALUES
(1, 'Meren of Clan Nel Toth', 'user1', '', 'Magic: the Gathering'),
(2, 'Ulamog, the Ceaseless Hunger', 'user1', NULL, 'Magic: the Gathering'),
(3, 'Test_deck', 'user1', NULL, 'Magic: the Gathering'),
(4, 'Another Test', 'user1', NULL, 'Magic: the Gathering'),
(5, 'Third time\'s the charm', 'user1', NULL, 'Magic: the Gathering'),
(6, 'just a game', 'user1', NULL, 'Magic: the Gathering');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`) VALUES
(1, 'user1', 'password'),
(2, 'user2', 'password'),
(3, 'user3', 'pass'),
(4, 'user4', 'pass'),
(5, 'user5', 'pAss'),
(6, 'user6', 'pass');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
