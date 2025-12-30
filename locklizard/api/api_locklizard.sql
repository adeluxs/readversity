-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2016 at 09:19 AM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--

-- --------------------------------------------------------

--
-- Table structure for table `api_locklizard_accounts`
--

CREATE TABLE IF NOT EXISTS `api_locklizard_accounts` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(ISO format)',
  `customer_name` varchar(80) NOT NULL,
  `customer_email` varchar(90) NOT NULL,
  `customer_company` varchar(90) NOT NULL,
  `start_date` varchar(10) NOT NULL COMMENT '(mm-dd-yyyy)',
  `end_type` varchar(20) NOT NULL,
  `end_date` varchar(10) NOT NULL COMMENT '(mm-dd-yyyy)',
  `number_of_lic` int(5) NOT NULL,
  `publication` varchar(80) NOT NULL,
  `cart_login` varchar(30) NOT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `customer_email` (`customer_email`),
  KEY `cart_login` (`cart_login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `api_locklizard_errors`
--

CREATE TABLE IF NOT EXISTS `api_locklizard_errors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(ISO format)',
  `action_type` varchar(100) NOT NULL,
  `error_reason` varchar(255) NOT NULL,
  `api_parameters` text NOT NULL,
  `customer_name` varchar(80) NOT NULL,
  `customer_email` varchar(90) NOT NULL,
  `customer_company` varchar(90) NOT NULL,
  `start_date` varchar(10) NOT NULL COMMENT '(mm-dd-yyyy)',
  `end_type` varchar(20) NOT NULL,
  `end_date` varchar(10) NOT NULL COMMENT '(mm-dd-yyyy)',
  `licenses` varchar(3) NOT NULL,
  `publication` varchar(80) NOT NULL,
  `cart_login` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `api_locklizard_licenses`
--

CREATE TABLE IF NOT EXISTS `api_locklizard_licenses` (
  `customer_id` int(11) NOT NULL,
  `license` text NOT NULL COMMENT '(encrypted when designated)',
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `api_locklizard_publications`
--

CREATE TABLE IF NOT EXISTS `api_locklizard_publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `material_type` enum('File','Publication','') NOT NULL,
  `material_code` int(11) NOT NULL,
  `material_name` varchar(180) NOT NULL,
  `access_type` varchar(15) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `api_locklizard_ip_restrict`
--

CREATE TABLE `api_locklizard_ip_restrict` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ip_addresses` text NOT NULL,
  `date_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for table `api_locklizard_ip_restrict`
--
ALTER TABLE `api_locklizard_ip_restrict`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for table `api_locklizard_ip_restrict`
--
ALTER TABLE `api_locklizard_ip_restrict`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

