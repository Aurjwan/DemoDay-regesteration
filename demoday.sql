-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2012 at 08:53 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demoday`
--

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE IF NOT EXISTS `organizer` (
  `Student_ID` int(7) unsigned NOT NULL,
  `Student_Name` text NOT NULL,
  `Login_Name` text NOT NULL,
  `Password` int(32) NOT NULL,
  `Department` text NOT NULL,
  `Level` text NOT NULL,
  `Email` text NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Group_Of_Work` text NOT NULL,
  `Comment` text NOT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`Student_ID`, `Student_Name`, `Login_Name`, `Password`, `Department`, `Level`, `Email`, `Mobile`, `Group_Of_Work`, `Comment`) VALUES
(0, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'hgjhghj876876', 77777777, 'IT', 'fifth', 'mooedkljdn@hotmail.com', 2147483647, 'Organize Committee', ' '),
(875909, 'Noura Ibrahim ', 'Noura90', 2147483647, 'IS', 'fifth', 'nourah@hotmail.com', 566666666, 'design committee ', ' please contact me with latest news on my email');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
