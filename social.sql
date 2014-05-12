-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2014 at 05:20 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(215) NOT NULL,
  `passcode` varchar(215) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`) VALUES
(1, 'admin-panel', '9d819fc790a7ca244d1d97add1791096');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(215) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `created`) VALUES
(1, 'Pages', '2014-05-12 11:37:29'),
(2, 'Post', '2014-05-12 11:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(215) NOT NULL,
  `description` varchar(215) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `events_id` int(3) NOT NULL AUTO_INCREMENT,
  `dates` varchar(215) NOT NULL,
  `place` varchar(215) NOT NULL,
  `contact_numb` int(215) NOT NULL,
  `description` varchar(215) NOT NULL,
  `contact_person` varchar(215) NOT NULL,
  `time` varchar(215) NOT NULL,
  `status` varchar(215) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`events_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(215) NOT NULL,
  `password` varchar(215) NOT NULL,
  `first_name` varchar(215) NOT NULL,
  `last_name` varchar(215) NOT NULL,
  `email_address` varchar(215) NOT NULL,
  `birth_date` varchar(215) NOT NULL,
  `birth_place` varchar(215) NOT NULL,
  `phone` int(215) NOT NULL,
  `mobile_phone` int(215) NOT NULL,
  `skype` varchar(215) NOT NULL,
  `fax` int(215) NOT NULL,
  `martial_status` varchar(215) NOT NULL,
  `city` varchar(215) NOT NULL,
  `country` varchar(215) NOT NULL,
  `profession` varchar(215) NOT NULL,
  `self_description` varchar(215) NOT NULL,
  `photos` varchar(215) NOT NULL,
  `status` varchar(215) NOT NULL,
  `captcha` varchar(215) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
