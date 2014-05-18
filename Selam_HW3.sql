-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: 50.62.209.83:3306
-- Generation Time: Mar 04, 2014 at 04:59 PM
-- Server version: 5.5.33-log
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpdb_`
--
CREATE DATABASE `phpdb_` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phpdb_`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(4000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `date`, `message`) VALUES
(3, 'admin', '2014-02-12 07:00:00', 'ddddd'),
(4, 'admin', '2014-02-12 07:00:00', 'ddddd'),
(5, 'Maya', '2014-02-12 07:00:00', 'What''s for dinner?'),
(6, 'Selam', '2014-02-12 07:00:00', 'Hi everyone!'),
(7, 'noah', '0000-00-00 00:00:00', 'Sup guys... What''s up!'),
(8, 'Maya', '1970-01-01 07:00:00', 'This is Maya, HI!'),
(9, 'admin', '2014-02-12 07:00:00', 'Test admin message'),
(10, 'girma', '2014-02-12 07:00:00', 'This is a message from Girma'),
(23, 'noah', '2014-02-13 07:00:00', 'this is a post to noah'),
(24, '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `relationships`
--

CREATE TABLE IF NOT EXISTS `relationships` (
  `username` varchar(15) NOT NULL,
  `friend` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relationships`
--

INSERT INTO `relationships` (`username`, `friend`) VALUES
('maya', 'Selam'),
('admin', 'noah'),
('maya', 'girma'),
('selam', 'noah');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'selam', 'selam'),
(3, 'maya', 'maya'),
(4, 'noah', 'noah'),
(5, 'test', 'test'),
(6, 'girma', 'girma'),
(7, 'betty', 'betty'),
(16, 'test', 'test'),
(15, '', ''),
(14, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
