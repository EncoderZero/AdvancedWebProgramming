-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2013 at 09:12 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db200213257`
--

-- --------------------------------------------------------

--
-- Table structure for table `businesscontacts`
--

CREATE TABLE IF NOT EXISTS `businesscontacts` (
  `phonenumber` varchar(15) NOT NULL COMMENT 'phone number',
  `contactname` varchar(50) NOT NULL COMMENT 'person''s name',
  `email` varchar(100) NOT NULL COMMENT 'email',
  `address` varchar(200) NOT NULL COMMENT 'person''s address',
  `contactId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'contact id',
  `title` varchar(50) NOT NULL DEFAULT 'N/A' COMMENT 'person''s title',
  PRIMARY KEY (`contactId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `businesscontacts`
--

INSERT INTO `businesscontacts` (`phonenumber`, `contactname`, `email`, `address`, `contactId`, `title`) VALUES
('705-267-4652', 'Jamie Hamelton', 'N/A', '1870 Riverside Dr. Timmins Ontario', 1, 'Night Shift Manager'),
('705-258-3151', 'Kevin Robinson', 'N/A', 'Branch 70 Hall, Devonshire Ave. Iroquois Falls, Ontario', 2, 'Supervisor'),
('705-722-7667', 'Francis Chang', 'francisven@gmail.com', '150 Park Place Blvd. Barrie, Ontario', 5, 'Head Chef');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
