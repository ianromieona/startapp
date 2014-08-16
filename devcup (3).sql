-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2014 at 03:41 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `devcup`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE IF NOT EXISTS `Comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_message` text,
  `comment_type` int(11) DEFAULT NULL,
  `comment_fromid` int(11) DEFAULT NULL,
  `comment_toid` int(11) DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

CREATE TABLE IF NOT EXISTS `Members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `member_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE IF NOT EXISTS `Posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_description` text,
  `post_user` int(11) DEFAULT NULL,
  `post_status` int(11) DEFAULT '1',
  `post_view` int(11) DEFAULT '0',
  `post_date` datetime DEFAULT NULL,
  `post_title` text,
  `post_tag` text,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`post_id`, `post_description`, `post_user`, `post_status`, `post_view`, `post_date`, `post_title`, `post_tag`) VALUES
(1, 'Cooking App to . , Matinding cooking app to', 1, 1, 1, '0000-00-00 00:00:00', 'Cooking App', NULL),
(2, 'dsfa', 1, 1, 0, '2014-08-16 10:13:42', 'adf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Projects`
--

CREATE TABLE IF NOT EXISTS `Projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Ratings`
--

CREATE TABLE IF NOT EXISTS `Ratings` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `rating_value` int(11) DEFAULT NULL,
  `rating_fromid` int(11) DEFAULT NULL,
  `rating_toid` int(11) DEFAULT NULL,
  `rating_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(45) DEFAULT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_fullname` varchar(45) DEFAULT NULL,
  `user_lastlogin` varchar(45) DEFAULT NULL,
  `user_dateregistered` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
