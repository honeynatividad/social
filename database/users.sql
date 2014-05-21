-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2014 at 11:55 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

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
  `gender` varchar(128) NOT NULL,
  `email_address` varchar(215) NOT NULL,
  `birth_date` varchar(215) NOT NULL,
  `birth_place` varchar(215) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `mobile_phone` varchar(128) NOT NULL,
  `skype` varchar(215) NOT NULL,
  `fax` int(215) NOT NULL,
  `marital_status` varchar(215) NOT NULL,
  `city` varchar(215) NOT NULL,
  `country` varchar(215) NOT NULL,
  `profession` varchar(215) NOT NULL,
  `self_description` varchar(215) NOT NULL,
  `photos` varchar(215) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `captcha` varchar(215) NOT NULL,
  `validation_code` varchar(128) NOT NULL,
  `confirmed` int(11) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`, `first_name`, `last_name`, `gender`, `email_address`, `birth_date`, `birth_place`, `phone`, `mobile_phone`, `skype`, `fax`, `marital_status`, `city`, `country`, `profession`, `self_description`, `photos`, `status`, `captcha`, `validation_code`, `confirmed`, `created`) VALUES
(1, 'hanna', 'e10adc3949ba59abbe56e057f20f883e', 'hanna', 'natividad', '', 'honeynatividad@gmail.com', '1985-06-04', '', '639178821405', '639178821405', '', 0, 'single', 'taguig', 'Philippines', '', '', '', 1, '', '617ba2ccebc8aa00f9a0b2820d917b4c', 1, '2014-05-15 22:02:03');
