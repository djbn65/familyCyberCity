-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql207.byethost8.com
-- Generation Time: Jul 06, 2017 at 10:25 AM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b8_19720712_booked`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE IF NOT EXISTS `accessories` (
  `accessory_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `accessory_name` varchar(85) NOT NULL,
  `accessory_quantity` smallint(5) unsigned DEFAULT NULL,
  `legacyid` char(16) DEFAULT NULL,
  PRIMARY KEY (`accessory_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_activation`
--

CREATE TABLE IF NOT EXISTS `account_activation` (
  `account_activation_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `activation_code` varchar(30) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`account_activation_id`),
  UNIQUE KEY `activation_code_2` (`activation_code`),
  KEY `activation_code` (`activation_code`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `announcementid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `announcement_text` text NOT NULL,
  `priority` mediumint(8) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`announcementid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `announcement_groups`
--

CREATE TABLE IF NOT EXISTS `announcement_groups` (
  `announcementid` mediumint(8) unsigned NOT NULL,
  `group_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`announcementid`,`group_id`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `announcement_resources`
--

CREATE TABLE IF NOT EXISTS `announcement_resources` (
  `announcementid` mediumint(8) unsigned NOT NULL,
  `resource_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`announcementid`,`resource_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blackout_instances`
--

CREATE TABLE IF NOT EXISTS `blackout_instances` (
  `blackout_instance_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `blackout_series_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`blackout_instance_id`),
  KEY `start_date` (`start_date`),
  KEY `end_date` (`end_date`),
  KEY `blackout_series_id` (`blackout_series_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blackout_series`
--

CREATE TABLE IF NOT EXISTS `blackout_series` (
  `blackout_series_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `title` varchar(85) NOT NULL,
  `description` text,
  `owner_id` mediumint(8) unsigned NOT NULL,
  `legacyid` char(16) DEFAULT NULL,
  `repeat_type` varchar(10) DEFAULT NULL,
  `repeat_options` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`blackout_series_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blackout_series_resources`
--

CREATE TABLE IF NOT EXISTS `blackout_series_resources` (
  `blackout_series_id` int(10) unsigned NOT NULL,
  `resource_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`blackout_series_id`,`resource_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `comments` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`first_name`, `last_name`, `email`, `comments`) VALUES
('Dylan', 'Burr', 'dylanburr20@gmail.com', 'I loved this place!'),
('Dylan', 'Burr', '17dburr@stu.sgdragons.org', 'I loved this place so much!'),
('Doctor', 'Doctor', 'docthedoctor@co.nf', 'I am doctoring this website. Abandon all hope ye who enter.'),
('Hello', 'Mr.', 'hello@mr.com', 'Yes I liked this place!'),
('Dylan', 'Burr', 'dylanburr20@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `custom_attributes`
--

CREATE TABLE IF NOT EXISTS `custom_attributes` (
  `custom_attribute_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `display_label` varchar(50) NOT NULL,
  `display_type` tinyint(2) unsigned NOT NULL,
  `attribute_category` tinyint(2) unsigned NOT NULL,
  `validation_regex` varchar(50) DEFAULT NULL,
  `is_required` tinyint(1) unsigned NOT NULL,
  `possible_values` text,
  `sort_order` tinyint(2) unsigned DEFAULT NULL,
  `admin_only` tinyint(1) unsigned DEFAULT NULL,
  `secondary_category` tinyint(2) unsigned DEFAULT NULL,
  `secondary_entity_ids` varchar(2000) DEFAULT NULL,
  `is_private` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`custom_attribute_id`),
  KEY `attribute_category` (`attribute_category`),
  KEY `display_label` (`display_label`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `custom_attributes`
--

INSERT INTO `custom_attributes` (`custom_attribute_id`, `display_label`, `display_type`, `attribute_category`, `validation_regex`, `is_required`, `possible_values`, `sort_order`, `admin_only`, `secondary_category`, `secondary_entity_ids`, `is_private`) VALUES
(1, 'Party Package', 3, 1, '', 1, 'None,The Beginner''s Package,The &quot;Not So Virtual Reality&quot; Package,The Dream Experience Package,A Techie''s Virtual Utopia Package', 0, 0, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `custom_attribute_entities`
--

CREATE TABLE IF NOT EXISTS `custom_attribute_entities` (
  `custom_attribute_id` mediumint(8) unsigned NOT NULL,
  `entity_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`custom_attribute_id`,`entity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `custom_attribute_values`
--

CREATE TABLE IF NOT EXISTS `custom_attribute_values` (
  `custom_attribute_value_id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `custom_attribute_id` mediumint(8) unsigned NOT NULL,
  `attribute_value` text NOT NULL,
  `entity_id` mediumint(8) unsigned NOT NULL,
  `attribute_category` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`custom_attribute_value_id`),
  KEY `custom_attribute_id` (`custom_attribute_id`),
  KEY `entity_category` (`entity_id`,`attribute_category`),
  KEY `entity_attribute` (`entity_id`,`custom_attribute_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `custom_attribute_values`
--

INSERT INTO `custom_attribute_values` (`custom_attribute_value_id`, `custom_attribute_id`, `attribute_value`, `entity_id`, `attribute_category`) VALUES
(1, 1, 'The Beginner''s Package', 2, 1),
(2, 1, 'The Beginner''s Package', 3, 1),
(3, 1, 'A Techie''s Virtual Utopia Package', 4, 1),
(5, 1, 'A Techie''s Virtual Utopia Package', 5, 1),
(6, 1, 'The Beginner''s Package', 6, 1),
(7, 1, 'The Beginner''s Package', 7, 1),
(8, 1, 'None', 8, 1),
(9, 1, 'None', 9, 1),
(10, 1, 'None', 10, 1),
(11, 1, 'The Dream Experience Package', 11, 1),
(12, 1, 'A Techie''s Virtual Utopia Package', 12, 1),
(13, 1, 'A Techie''s Virtual Utopia Package', 13, 1),
(14, 1, 'None', 14, 1),
(15, 1, 'The Beginner''s Package', 15, 1),
(16, 1, 'None', 16, 1),
(17, 1, 'None', 17, 1),
(18, 1, 'None', 18, 1),
(19, 1, 'A Techie''s Virtual Utopia Package', 19, 1),
(20, 1, 'The &quot;Not So Virtual Reality&quot; Package', 20, 1),
(21, 1, 'The Dream Experience Package', 21, 1),
(22, 1, 'A Techie''s Virtual Utopia Package', 22, 1),
(23, 1, 'The Dream Experience Package', 23, 1),
(24, 1, 'None', 24, 1),
(25, 1, 'A Techie''s Virtual Utopia Package', 25, 1),
(26, 1, 'The &quot;Not So Virtual Reality&quot; Package', 26, 1),
(27, 1, 'A Techie''s Virtual Utopia Package', 27, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dbversion`
--

CREATE TABLE IF NOT EXISTS `dbversion` (
  `version_number` double unsigned NOT NULL DEFAULT '0',
  `version_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbversion`
--

INSERT INTO `dbversion` (`version_number`, `version_date`) VALUES
(2.1, '2017-02-22 04:39:00'),
(2.2, '2017-02-22 04:39:00'),
(2.3, '2017-02-22 04:39:00'),
(2.4, '2017-02-22 04:39:00'),
(2.5, '2017-02-22 04:39:00'),
(2.6, '2017-02-22 04:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `first_name` text CHARACTER SET utf8 NOT NULL,
  `last_name` text CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`first_name`, `last_name`, `email`) VALUES
('Dylan', 'Burr', 'dylanburr20@gmail.com'),
('Doctor', 'Doctor', 'docthedoctor@co.nf'),
('Caitlin', 'Grass', '17cgrass@stu.sgdragons.org'),
('Gary', 'Smith', 'gsmith@sgdragons.org'),
('Denise', 'Bader', 'dbader@sgdragons.org'),
('John', 'Doe', 'jdoe@doe.org'),
('Steve', 'Grass', 'stece@hurdh.com');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(85) NOT NULL,
  `admin_group_id` smallint(5) unsigned DEFAULT NULL,
  `legacyid` char(16) DEFAULT NULL,
  PRIMARY KEY (`group_id`),
  KEY `admin_group_id` (`admin_group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `name`, `admin_group_id`, `legacyid`) VALUES
(2, 'Administration', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_resource_permissions`
--

CREATE TABLE IF NOT EXISTS `group_resource_permissions` (
  `group_id` smallint(5) unsigned NOT NULL,
  `resource_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`group_id`,`resource_id`),
  KEY `group_id` (`group_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_resource_permissions`
--

INSERT INTO `group_resource_permissions` (`group_id`, `resource_id`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `group_roles`
--

CREATE TABLE IF NOT EXISTS `group_roles` (
  `group_id` smallint(8) unsigned NOT NULL,
  `role_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`group_id`,`role_id`),
  KEY `group_id` (`group_id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_roles`
--

INSERT INTO `group_roles` (`group_id`, `role_id`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `layouts`
--

CREATE TABLE IF NOT EXISTS `layouts` (
  `layout_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `timezone` varchar(50) NOT NULL,
  PRIMARY KEY (`layout_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `layouts`
--

INSERT INTO `layouts` (`layout_id`, `timezone`) VALUES
(2, 'America/Chicago');

-- --------------------------------------------------------

--
-- Table structure for table `peak_times`
--

CREATE TABLE IF NOT EXISTS `peak_times` (
  `peak_times_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `schedule_id` smallint(5) unsigned NOT NULL,
  `all_day` tinyint(1) unsigned NOT NULL,
  `start_time` varchar(10) DEFAULT NULL,
  `end_time` varchar(10) DEFAULT NULL,
  `every_day` tinyint(1) unsigned NOT NULL,
  `peak_days` varchar(13) DEFAULT NULL,
  `all_year` tinyint(1) unsigned NOT NULL,
  `begin_month` tinyint(1) unsigned NOT NULL,
  `begin_day` tinyint(1) unsigned NOT NULL,
  `end_month` tinyint(1) unsigned NOT NULL,
  `end_day` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`peak_times_id`),
  KEY `schedule_id` (`schedule_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quotas`
--

CREATE TABLE IF NOT EXISTS `quotas` (
  `quota_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `quota_limit` decimal(7,2) unsigned NOT NULL,
  `unit` varchar(25) NOT NULL,
  `duration` varchar(25) NOT NULL,
  `resource_id` smallint(5) unsigned DEFAULT NULL,
  `group_id` smallint(5) unsigned DEFAULT NULL,
  `schedule_id` smallint(5) unsigned DEFAULT NULL,
  `enforced_days` varchar(15) DEFAULT NULL,
  `enforced_time_start` time DEFAULT NULL,
  `enforced_time_end` time DEFAULT NULL,
  `scope` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`quota_id`),
  KEY `resource_id` (`resource_id`),
  KEY `group_id` (`group_id`),
  KEY `schedule_id` (`schedule_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE IF NOT EXISTS `reminders` (
  `reminder_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL,
  `sendtime` datetime NOT NULL,
  `refnumber` text NOT NULL,
  PRIMARY KEY (`reminder_id`),
  KEY `reminders_user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_accessories`
--

CREATE TABLE IF NOT EXISTS `reservation_accessories` (
  `series_id` int(10) unsigned NOT NULL,
  `accessory_id` smallint(5) unsigned NOT NULL,
  `quantity` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`series_id`,`accessory_id`),
  KEY `accessory_id` (`accessory_id`),
  KEY `series_id` (`series_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_color_rules`
--

CREATE TABLE IF NOT EXISTS `reservation_color_rules` (
  `reservation_color_rule_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `custom_attribute_id` mediumint(8) unsigned NOT NULL,
  `attribute_type` smallint(5) unsigned DEFAULT NULL,
  `required_value` text,
  `comparison_type` smallint(5) unsigned DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`reservation_color_rule_id`),
  KEY `custom_attribute_id` (`custom_attribute_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_files`
--

CREATE TABLE IF NOT EXISTS `reservation_files` (
  `file_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `series_id` int(10) unsigned NOT NULL,
  `file_name` varchar(250) NOT NULL,
  `file_type` varchar(75) DEFAULT NULL,
  `file_size` varchar(45) NOT NULL,
  `file_extension` varchar(10) NOT NULL,
  PRIMARY KEY (`file_id`),
  KEY `series_id` (`series_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_guests`
--

CREATE TABLE IF NOT EXISTS `reservation_guests` (
  `reservation_instance_id` int(10) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `reservation_user_level` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`reservation_instance_id`,`email`),
  KEY `reservation_guests_reservation_instance_id` (`reservation_instance_id`),
  KEY `reservation_guests_email_address` (`email`),
  KEY `reservation_guests_reservation_user_level` (`reservation_user_level`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_instances`
--

CREATE TABLE IF NOT EXISTS `reservation_instances` (
  `reservation_instance_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `reference_number` varchar(50) NOT NULL,
  `series_id` int(10) unsigned NOT NULL,
  `checkin_date` datetime DEFAULT NULL,
  `checkout_date` datetime DEFAULT NULL,
  `previous_end_date` datetime DEFAULT NULL,
  `credit_count` decimal(7,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`reservation_instance_id`),
  KEY `start_date` (`start_date`),
  KEY `end_date` (`end_date`),
  KEY `reference_number` (`reference_number`),
  KEY `series_id` (`series_id`),
  KEY `checkin_date` (`checkin_date`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `reservation_instances`
--

INSERT INTO `reservation_instances` (`reservation_instance_id`, `start_date`, `end_date`, `reference_number`, `series_id`, `checkin_date`, `checkout_date`, `previous_end_date`, `credit_count`) VALUES
(1, '2017-02-22 16:30:00', '2017-02-22 17:00:00', '58ad20f07d0b6598244137', 1, NULL, NULL, NULL, NULL),
(2, '2017-02-23 17:00:00', '2017-02-23 17:30:00', '58ad2241de42e550967692', 2, NULL, NULL, NULL, NULL),
(3, '2017-02-22 16:00:00', '2017-02-22 17:00:00', '58ad2401c482b788747353', 3, NULL, NULL, NULL, NULL),
(4, '2017-02-26 04:00:00', '2017-02-26 05:00:00', '58ada46658113573007693', 4, NULL, NULL, NULL, NULL),
(5, '2017-02-22 21:00:00', '2017-02-22 22:00:00', '58adc6c980dc5130324753', 5, NULL, NULL, NULL, NULL),
(6, '2017-02-24 00:00:00', '2017-02-24 02:00:00', '58adc9cc65274345749020', 6, NULL, NULL, NULL, NULL),
(7, '2017-02-24 22:00:00', '2017-02-24 23:00:00', '58addeb50be94749526260', 7, NULL, NULL, NULL, NULL),
(8, '2017-02-28 18:00:00', '2017-02-28 19:00:00', '58af172f79bbe289712680', 8, NULL, NULL, NULL, NULL),
(9, '2017-02-22 20:00:00', '2017-02-22 21:00:00', '58af1b07611b6132883096', 9, NULL, NULL, NULL, '0.00'),
(10, '2017-02-20 00:00:00', '2017-02-25 17:00:00', '58b1dea843ecc061661552', 10, NULL, NULL, NULL, '0.00'),
(11, '2017-02-19 20:00:00', '2017-02-19 21:00:00', '58b1df6380974585007791', 11, NULL, NULL, NULL, '0.00'),
(12, '2017-02-21 19:00:00', '2017-02-21 20:00:00', '58b1e6672d8ce140396236', 12, NULL, NULL, NULL, '0.00'),
(13, '2017-02-25 21:00:00', '2017-02-26 04:00:00', '58b1eccfbe114267892783', 13, NULL, NULL, NULL, NULL),
(14, '2017-03-03 16:00:00', '2017-03-03 22:00:00', '58b579549494b871320075', 14, NULL, NULL, NULL, NULL),
(15, '2017-03-03 23:00:00', '2017-03-04 00:00:00', '58b65d07dbc35437857741', 15, NULL, NULL, NULL, NULL),
(16, '2017-03-06 21:00:00', '2017-03-07 00:00:00', '58b716a37b66f456405793', 16, NULL, NULL, NULL, NULL),
(17, '2017-03-07 16:00:00', '2017-03-07 17:00:00', '58b717218a243984385468', 17, NULL, NULL, NULL, NULL),
(18, '2017-03-08 17:00:00', '2017-03-08 18:00:00', '58b71771a882b024096983', 18, NULL, NULL, NULL, NULL),
(19, '2017-03-19 01:00:00', '2017-03-19 02:00:00', '58cc18f929ae6125280492', 19, NULL, NULL, NULL, NULL),
(20, '2017-03-31 20:00:00', '2017-04-01 05:00:00', '58de7745dd155922497313', 20, NULL, NULL, NULL, NULL),
(21, '2017-04-08 20:00:00', '2017-04-09 00:00:00', '58e16aa91a92f534729879', 21, NULL, NULL, NULL, NULL),
(22, '2017-04-05 18:00:00', '2017-04-05 23:00:00', '58e16ad723d62997876896', 22, NULL, NULL, NULL, NULL),
(23, '2017-05-20 01:00:00', '2017-05-20 02:00:00', '591a1d8a48abb675932207', 23, NULL, NULL, NULL, NULL),
(24, '2017-05-15 15:00:00', '2017-05-17 01:00:00', '591a1d9a117fe676973118', 24, NULL, NULL, NULL, NULL),
(25, '2017-06-30 21:00:00', '2017-07-01 04:00:00', '5953206a7e374367949281', 25, NULL, NULL, NULL, NULL),
(26, '2017-07-01 18:00:00', '2017-07-02 03:00:00', '595321e48b973941205007', 26, NULL, NULL, NULL, NULL),
(27, '2017-06-30 17:00:00', '2017-06-30 21:00:00', '595521726cfbd665310770', 27, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_reminders`
--

CREATE TABLE IF NOT EXISTS `reservation_reminders` (
  `reminder_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `series_id` int(10) unsigned NOT NULL,
  `minutes_prior` int(10) unsigned NOT NULL,
  `reminder_type` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`reminder_id`),
  KEY `series_id` (`series_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_resources`
--

CREATE TABLE IF NOT EXISTS `reservation_resources` (
  `series_id` int(10) unsigned NOT NULL,
  `resource_id` smallint(5) unsigned NOT NULL,
  `resource_level_id` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`series_id`,`resource_id`),
  KEY `resource_id` (`resource_id`),
  KEY `series_id` (`series_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation_resources`
--

INSERT INTO `reservation_resources` (`series_id`, `resource_id`, `resource_level_id`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1),
(16, 1, 1),
(17, 1, 1),
(18, 1, 1),
(19, 1, 1),
(20, 1, 1),
(21, 1, 1),
(22, 1, 1),
(23, 1, 1),
(24, 1, 1),
(25, 1, 1),
(26, 1, 1),
(27, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_series`
--

CREATE TABLE IF NOT EXISTS `reservation_series` (
  `series_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `title` varchar(85) NOT NULL,
  `description` text,
  `allow_participation` tinyint(1) unsigned NOT NULL,
  `allow_anon_participation` tinyint(1) unsigned NOT NULL,
  `type_id` tinyint(2) unsigned NOT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  `repeat_type` varchar(10) DEFAULT NULL,
  `repeat_options` varchar(255) DEFAULT NULL,
  `owner_id` mediumint(8) unsigned NOT NULL,
  `legacyid` char(16) DEFAULT NULL,
  `last_action_by` mediumint(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`series_id`),
  KEY `type_id` (`type_id`),
  KEY `status_id` (`status_id`),
  KEY `reservations_owner` (`owner_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `reservation_series`
--

INSERT INTO `reservation_series` (`series_id`, `date_created`, `last_modified`, `title`, `description`, `allow_participation`, `allow_anon_participation`, `type_id`, `status_id`, `repeat_type`, `repeat_options`, `owner_id`, `legacyid`, `last_action_by`) VALUES
(1, '2017-02-22 05:26:08', '2017-02-22 05:30:23', '', '', 0, 0, 1, 2, 'none', '', 2, NULL, NULL),
(2, '2017-02-22 05:31:45', '2017-02-22 05:32:09', '', '', 0, 0, 1, 2, 'none', '', 1, NULL, NULL),
(3, '2017-02-22 05:39:13', '2017-02-23 17:11:47', '', '', 0, 0, 1, 2, 'none', '', 2, NULL, NULL),
(4, '2017-02-22 14:47:02', '2017-02-22 17:16:02', 'Birthday Party', 'Awesome', 0, 0, 1, 2, 'none', '', 3, NULL, NULL),
(5, '2017-02-22 17:13:45', '2017-02-22 17:15:21', 'Morgan Uzzell Jr''s Birthday Bash', '', 0, 0, 1, 2, 'none', '', 4, NULL, NULL),
(6, '2017-02-22 17:26:36', '2017-02-23 17:11:34', 'Booger Bash Fart Rockets', '', 0, 0, 1, 2, 'none', '', 4, NULL, NULL),
(7, '2017-02-22 18:55:49', '2017-02-23 17:11:51', '', '', 0, 0, 1, 2, 'none', '', 2, NULL, NULL),
(8, '2017-02-23 17:09:03', '2017-02-23 17:11:32', 'Snap Dragons With Sass Party', '', 0, 0, 1, 2, 'none', '', 4, NULL, NULL),
(9, '2017-02-23 17:25:27', '2017-02-23 17:25:49', '', '', 0, 0, 1, 2, 'none', '', 1, NULL, NULL),
(10, '2017-02-25 19:44:40', '2017-02-25 19:45:04', '', '', 0, 0, 1, 2, 'none', '', 1, NULL, NULL),
(11, '2017-02-25 19:47:47', '2017-02-25 19:51:58', '', '', 0, 0, 1, 2, 'none', '', 1, NULL, NULL),
(12, '2017-02-25 20:17:43', '2017-02-25 20:52:22', '', '', 0, 0, 1, 2, 'none', '', 1, NULL, NULL),
(13, '2017-02-25 20:45:03', '2017-02-25 20:52:32', 'Fun', 'We are reserving the party room for our business party. 50 guests will arrive to enjoy everything you have to offer.', 0, 0, 1, 2, 'none', '', 6, NULL, NULL),
(14, '2017-02-28 13:21:24', '2017-02-28 17:08:00', 'Sample', 'Sample', 0, 0, 1, 1, 'none', '', 7, NULL, NULL),
(15, '2017-03-01 05:32:55', NULL, '', '', 0, 0, 1, 1, 'none', '', 1, NULL, NULL),
(16, '2017-03-01 18:44:51', NULL, '', '', 0, 0, 1, 3, 'none', '', 3, NULL, NULL),
(17, '2017-03-01 18:46:57', '2017-03-01 18:47:17', '', '', 0, 0, 1, 1, 'none', '', 3, NULL, NULL),
(18, '2017-03-01 18:48:17', NULL, '', '', 0, 0, 1, 1, 'none', '', 1, NULL, NULL),
(19, '2017-03-17 17:12:25', NULL, '', '', 0, 0, 1, 1, 'none', '', 1, NULL, NULL),
(20, '2017-03-31 15:35:33', '2017-03-31 15:35:52', 'My Birthday Party', 'This party is the best and it is going to be amazing.', 0, 0, 1, 2, 'none', '', 1, NULL, NULL),
(21, '2017-04-02 21:18:33', NULL, 'Birthday Party', 'About 20 people coming', 0, 0, 1, 3, 'none', '', 8, NULL, NULL),
(22, '2017-04-02 21:19:19', NULL, 'Graduation Party', 'Around 30 or so people', 0, 0, 1, 1, 'none', '', 1, NULL, NULL),
(23, '2017-05-15 21:28:42', NULL, 'YOLO', 'Hello', 0, 0, 1, 1, 'none', '', 1, NULL, NULL),
(24, '2017-05-15 21:28:58', NULL, '', '', 0, 0, 1, 1, 'none', '', 1, NULL, NULL),
(25, '2017-06-28 03:20:10', NULL, 'Birthday Party', 'About 20 people will be attending and it will be all day.', 0, 0, 1, 1, 'none', '', 1, NULL, NULL),
(26, '2017-06-28 03:26:28', '2017-06-28 03:26:59', 'Graduation Party/Drone Race', 'About 25 people will be coming for my graduation party and we only will be using the drone racing courses.', 0, 0, 1, 1, 'none', '', 3, NULL, NULL),
(27, '2017-06-29 15:49:06', NULL, 'The Best Birthday Party', 'All my friends are invited to this party that will for sure be the best ever!', 0, 0, 1, 1, 'none', '', 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_statuses`
--

CREATE TABLE IF NOT EXISTS `reservation_statuses` (
  `status_id` tinyint(2) unsigned NOT NULL,
  `label` varchar(85) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation_statuses`
--

INSERT INTO `reservation_statuses` (`status_id`, `label`) VALUES
(1, 'Created'),
(2, 'Deleted'),
(3, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_types`
--

CREATE TABLE IF NOT EXISTS `reservation_types` (
  `type_id` tinyint(2) unsigned NOT NULL,
  `label` varchar(85) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation_types`
--

INSERT INTO `reservation_types` (`type_id`, `label`) VALUES
(1, 'Reservation'),
(2, 'Blackout');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_users`
--

CREATE TABLE IF NOT EXISTS `reservation_users` (
  `reservation_instance_id` int(10) unsigned NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `reservation_user_level` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`reservation_instance_id`,`user_id`),
  KEY `reservation_instance_id` (`reservation_instance_id`),
  KEY `user_id` (`user_id`),
  KEY `reservation_user_level` (`reservation_user_level`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation_users`
--

INSERT INTO `reservation_users` (`reservation_instance_id`, `user_id`, `reservation_user_level`) VALUES
(1, 2, 1),
(2, 1, 1),
(2, 2, 2),
(3, 2, 1),
(4, 3, 1),
(4, 2, 2),
(5, 4, 1),
(6, 4, 1),
(6, 1, 2),
(6, 3, 3),
(7, 2, 1),
(8, 4, 1),
(8, 2, 2),
(9, 1, 1),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(13, 6, 1),
(14, 7, 1),
(14, 1, 2),
(15, 1, 1),
(16, 3, 1),
(17, 3, 1),
(18, 1, 1),
(18, 3, 2),
(19, 1, 1),
(19, 3, 2),
(20, 1, 1),
(20, 3, 2),
(20, 4, 2),
(21, 8, 1),
(22, 1, 1),
(23, 1, 1),
(24, 1, 1),
(25, 1, 1),
(25, 3, 2),
(25, 4, 2),
(26, 3, 1),
(26, 1, 2),
(27, 11, 1),
(27, 4, 2),
(27, 3, 2),
(27, 9, 2),
(27, 1, 2),
(27, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_waitlist_requests`
--

CREATE TABLE IF NOT EXISTS `reservation_waitlist_requests` (
  `reservation_waitlist_request_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `resource_id` smallint(5) unsigned NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`reservation_waitlist_request_id`),
  KEY `user_id` (`user_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `resource_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(85) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `contact_info` varchar(255) DEFAULT NULL,
  `description` text,
  `notes` text,
  `min_duration` int(11) DEFAULT NULL,
  `min_increment` int(11) DEFAULT NULL,
  `max_duration` int(11) DEFAULT NULL,
  `unit_cost` decimal(7,2) DEFAULT NULL,
  `autoassign` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `requires_approval` tinyint(1) unsigned NOT NULL,
  `allow_multiday_reservations` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `max_participants` mediumint(8) unsigned DEFAULT NULL,
  `min_notice_time` int(11) DEFAULT NULL,
  `max_notice_time` int(11) DEFAULT NULL,
  `image_name` varchar(50) DEFAULT NULL,
  `schedule_id` smallint(5) unsigned NOT NULL,
  `legacyid` char(16) DEFAULT NULL,
  `admin_group_id` smallint(5) unsigned DEFAULT NULL,
  `public_id` varchar(20) DEFAULT NULL,
  `allow_calendar_subscription` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` tinyint(2) unsigned DEFAULT NULL,
  `resource_type_id` mediumint(8) unsigned DEFAULT NULL,
  `status_id` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `resource_status_reason_id` smallint(5) unsigned DEFAULT NULL,
  `buffer_time` int(10) unsigned DEFAULT NULL,
  `enable_check_in` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `auto_release_minutes` smallint(5) unsigned DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `allow_display` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `credit_count` decimal(7,2) unsigned DEFAULT NULL,
  `peak_credit_count` decimal(7,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`resource_id`),
  UNIQUE KEY `public_id` (`public_id`),
  KEY `schedule_id` (`schedule_id`),
  KEY `admin_group_id` (`admin_group_id`),
  KEY `resource_type_id` (`resource_type_id`),
  KEY `resource_status_reason_id` (`resource_status_reason_id`),
  KEY `auto_release_minutes` (`auto_release_minutes`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resource_id`, `name`, `location`, `contact_info`, `description`, `notes`, `min_duration`, `min_increment`, `max_duration`, `unit_cost`, `autoassign`, `requires_approval`, `allow_multiday_reservations`, `max_participants`, `min_notice_time`, `max_notice_time`, `image_name`, `schedule_id`, `legacyid`, `admin_group_id`, `public_id`, `allow_calendar_subscription`, `sort_order`, `resource_type_id`, `status_id`, `resource_status_reason_id`, `buffer_time`, `enable_check_in`, `auto_release_minutes`, `color`, `allow_display`, `credit_count`, `peak_credit_count`) VALUES
(1, 'Party Room', NULL, NULL, NULL, NULL, 3600, NULL, 86400, NULL, 1, 1, 0, NULL, 172800, NULL, NULL, 1, NULL, NULL, NULL, 0, 0, NULL, 1, NULL, NULL, 0, NULL, '', 0, '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `resource_accessories`
--

CREATE TABLE IF NOT EXISTS `resource_accessories` (
  `resource_accessory_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `resource_id` smallint(5) unsigned NOT NULL,
  `accessory_id` smallint(5) unsigned NOT NULL,
  `minimum_quantity` smallint(6) DEFAULT NULL,
  `maximum_quantity` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`resource_accessory_id`),
  KEY `resource_id` (`resource_id`),
  KEY `accessory_id` (`accessory_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resource_groups`
--

CREATE TABLE IF NOT EXISTS `resource_groups` (
  `resource_group_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `resource_group_name` varchar(75) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT NULL,
  `public_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`resource_group_id`),
  KEY `resource_groups_parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resource_group_assignment`
--

CREATE TABLE IF NOT EXISTS `resource_group_assignment` (
  `resource_group_id` mediumint(8) unsigned NOT NULL,
  `resource_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`resource_group_id`,`resource_id`),
  KEY `resource_group_assignment_resource_id` (`resource_id`),
  KEY `resource_group_assignment_resource_group_id` (`resource_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resource_status_reasons`
--

CREATE TABLE IF NOT EXISTS `resource_status_reasons` (
  `resource_status_reason_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` tinyint(3) unsigned NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`resource_status_reason_id`),
  KEY `status_id` (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resource_types`
--

CREATE TABLE IF NOT EXISTS `resource_types` (
  `resource_type_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `resource_type_name` varchar(75) DEFAULT NULL,
  `resource_type_description` text,
  PRIMARY KEY (`resource_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resource_type_assignment`
--

CREATE TABLE IF NOT EXISTS `resource_type_assignment` (
  `resource_id` smallint(5) unsigned NOT NULL,
  `resource_type_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`resource_id`,`resource_type_id`),
  KEY `resource_type_id` (`resource_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` tinyint(2) unsigned NOT NULL,
  `name` varchar(85) DEFAULT NULL,
  `role_level` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `name`, `role_level`) VALUES
(1, 'Group Admin', 1),
(2, 'Application Admin', 2),
(3, 'Resource Admin', 3),
(4, 'Schedule Admin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `saved_reports`
--

CREATE TABLE IF NOT EXISTS `saved_reports` (
  `saved_report_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `report_name` varchar(50) DEFAULT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `report_details` varchar(500) NOT NULL,
  PRIMARY KEY (`saved_report_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `schedule_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(85) NOT NULL,
  `isdefault` tinyint(1) unsigned NOT NULL,
  `weekdaystart` tinyint(2) unsigned NOT NULL,
  `daysvisible` tinyint(2) unsigned NOT NULL DEFAULT '7',
  `layout_id` mediumint(8) unsigned NOT NULL,
  `legacyid` char(16) DEFAULT NULL,
  `public_id` varchar(20) DEFAULT NULL,
  `allow_calendar_subscription` tinyint(1) NOT NULL DEFAULT '0',
  `admin_group_id` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`schedule_id`),
  UNIQUE KEY `public_id` (`public_id`),
  KEY `layout_id` (`layout_id`),
  KEY `schedules_groups_admin_group_id` (`admin_group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`schedule_id`, `name`, `isdefault`, `weekdaystart`, `daysvisible`, `layout_id`, `legacyid`, `public_id`, `allow_calendar_subscription`, `admin_group_id`) VALUES
(1, 'Default', 1, 0, 7, 2, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `time_blocks`
--

CREATE TABLE IF NOT EXISTS `time_blocks` (
  `block_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(85) DEFAULT NULL,
  `end_label` varchar(85) DEFAULT NULL,
  `availability_code` tinyint(2) unsigned NOT NULL,
  `layout_id` mediumint(8) unsigned NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `day_of_week` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`block_id`),
  KEY `layout_id` (`layout_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `time_blocks`
--

INSERT INTO `time_blocks` (`block_id`, `label`, `end_label`, `availability_code`, `layout_id`, `start_time`, `end_time`, `day_of_week`) VALUES
(1, NULL, NULL, 2, 1, '00:00:00', '08:00:00', NULL),
(2, NULL, NULL, 1, 1, '08:00:00', '08:30:00', NULL),
(3, NULL, NULL, 1, 1, '08:30:00', '09:00:00', NULL),
(4, NULL, NULL, 1, 1, '09:00:00', '09:30:00', NULL),
(5, NULL, NULL, 1, 1, '09:30:00', '10:00:00', NULL),
(6, NULL, NULL, 1, 1, '10:00:00', '10:30:00', NULL),
(7, NULL, NULL, 1, 1, '10:30:00', '11:00:00', NULL),
(8, NULL, NULL, 1, 1, '11:00:00', '11:30:00', NULL),
(9, NULL, NULL, 1, 1, '11:30:00', '12:00:00', NULL),
(10, NULL, NULL, 1, 1, '12:00:00', '12:30:00', NULL),
(11, NULL, NULL, 1, 1, '12:30:00', '13:00:00', NULL),
(12, NULL, NULL, 1, 1, '13:00:00', '13:30:00', NULL),
(13, NULL, NULL, 1, 1, '13:30:00', '14:00:00', NULL),
(14, NULL, NULL, 1, 1, '14:00:00', '14:30:00', NULL),
(15, NULL, NULL, 1, 1, '14:30:00', '15:00:00', NULL),
(16, NULL, NULL, 1, 1, '15:00:00', '15:30:00', NULL),
(17, NULL, NULL, 1, 1, '15:30:00', '16:00:00', NULL),
(18, NULL, NULL, 1, 1, '16:00:00', '16:30:00', NULL),
(19, NULL, NULL, 1, 1, '16:30:00', '17:00:00', NULL),
(20, NULL, NULL, 1, 1, '17:00:00', '17:30:00', NULL),
(21, NULL, NULL, 1, 1, '17:30:00', '18:00:00', NULL),
(22, NULL, NULL, 2, 1, '18:00:00', '00:00:00', NULL),
(23, NULL, NULL, 2, 2, '00:00:00', '10:00:00', 0),
(24, NULL, NULL, 1, 2, '10:00:00', '11:00:00', 0),
(25, NULL, NULL, 1, 2, '11:00:00', '12:00:00', 0),
(26, NULL, NULL, 1, 2, '12:00:00', '13:00:00', 0),
(27, NULL, NULL, 1, 2, '13:00:00', '14:00:00', 0),
(28, NULL, NULL, 1, 2, '14:00:00', '15:00:00', 0),
(29, NULL, NULL, 1, 2, '15:00:00', '16:00:00', 0),
(30, NULL, NULL, 1, 2, '16:00:00', '17:00:00', 0),
(31, NULL, NULL, 1, 2, '17:00:00', '18:00:00', 0),
(32, NULL, NULL, 1, 2, '18:00:00', '19:00:00', 0),
(33, NULL, NULL, 1, 2, '19:00:00', '20:00:00', 0),
(34, NULL, NULL, 1, 2, '20:00:00', '21:00:00', 0),
(35, NULL, NULL, 1, 2, '21:00:00', '22:00:00', 0),
(36, NULL, NULL, 2, 2, '22:00:00', '00:00:00', 0),
(37, NULL, NULL, 2, 2, '00:00:00', '10:00:00', 1),
(38, NULL, NULL, 1, 2, '10:00:00', '11:00:00', 1),
(39, NULL, NULL, 1, 2, '11:00:00', '12:00:00', 1),
(40, NULL, NULL, 1, 2, '12:00:00', '13:00:00', 1),
(41, NULL, NULL, 1, 2, '13:00:00', '14:00:00', 1),
(42, NULL, NULL, 1, 2, '14:00:00', '15:00:00', 1),
(43, NULL, NULL, 1, 2, '15:00:00', '16:00:00', 1),
(44, NULL, NULL, 1, 2, '16:00:00', '17:00:00', 1),
(45, NULL, NULL, 1, 2, '17:00:00', '18:00:00', 1),
(46, NULL, NULL, 1, 2, '18:00:00', '19:00:00', 1),
(47, NULL, NULL, 1, 2, '19:00:00', '20:00:00', 1),
(48, NULL, NULL, 2, 2, '20:00:00', '00:00:00', 1),
(49, NULL, NULL, 2, 2, '00:00:00', '10:00:00', 2),
(50, NULL, NULL, 1, 2, '10:00:00', '11:00:00', 2),
(51, NULL, NULL, 1, 2, '11:00:00', '12:00:00', 2),
(52, NULL, NULL, 1, 2, '12:00:00', '13:00:00', 2),
(53, NULL, NULL, 1, 2, '13:00:00', '14:00:00', 2),
(54, NULL, NULL, 1, 2, '14:00:00', '15:00:00', 2),
(55, NULL, NULL, 1, 2, '15:00:00', '16:00:00', 2),
(56, NULL, NULL, 1, 2, '16:00:00', '17:00:00', 2),
(57, NULL, NULL, 1, 2, '17:00:00', '18:00:00', 2),
(58, NULL, NULL, 1, 2, '18:00:00', '19:00:00', 2),
(59, NULL, NULL, 1, 2, '19:00:00', '20:00:00', 2),
(60, NULL, NULL, 2, 2, '20:00:00', '00:00:00', 2),
(61, NULL, NULL, 2, 2, '00:00:00', '10:00:00', 3),
(62, NULL, NULL, 1, 2, '10:00:00', '11:00:00', 3),
(63, NULL, NULL, 1, 2, '11:00:00', '12:00:00', 3),
(64, NULL, NULL, 1, 2, '12:00:00', '13:00:00', 3),
(65, NULL, NULL, 1, 2, '13:00:00', '14:00:00', 3),
(66, NULL, NULL, 1, 2, '14:00:00', '15:00:00', 3),
(67, NULL, NULL, 1, 2, '15:00:00', '16:00:00', 3),
(68, NULL, NULL, 1, 2, '16:00:00', '17:00:00', 3),
(69, NULL, NULL, 1, 2, '17:00:00', '18:00:00', 3),
(70, NULL, NULL, 1, 2, '18:00:00', '19:00:00', 3),
(71, NULL, NULL, 1, 2, '19:00:00', '20:00:00', 3),
(72, NULL, NULL, 2, 2, '20:00:00', '00:00:00', 3),
(73, NULL, NULL, 2, 2, '00:00:00', '10:00:00', 4),
(74, NULL, NULL, 1, 2, '10:00:00', '11:00:00', 4),
(75, NULL, NULL, 1, 2, '11:00:00', '12:00:00', 4),
(76, NULL, NULL, 1, 2, '12:00:00', '13:00:00', 4),
(77, NULL, NULL, 1, 2, '13:00:00', '14:00:00', 4),
(78, NULL, NULL, 1, 2, '14:00:00', '15:00:00', 4),
(79, NULL, NULL, 1, 2, '15:00:00', '16:00:00', 4),
(80, NULL, NULL, 1, 2, '16:00:00', '17:00:00', 4),
(81, NULL, NULL, 1, 2, '17:00:00', '18:00:00', 4),
(82, NULL, NULL, 1, 2, '18:00:00', '19:00:00', 4),
(83, NULL, NULL, 1, 2, '19:00:00', '20:00:00', 4),
(84, NULL, NULL, 2, 2, '20:00:00', '00:00:00', 4),
(85, NULL, NULL, 2, 2, '00:00:00', '10:00:00', 5),
(86, NULL, NULL, 1, 2, '10:00:00', '11:00:00', 5),
(87, NULL, NULL, 1, 2, '11:00:00', '12:00:00', 5),
(88, NULL, NULL, 1, 2, '12:00:00', '13:00:00', 5),
(89, NULL, NULL, 1, 2, '13:00:00', '14:00:00', 5),
(90, NULL, NULL, 1, 2, '14:00:00', '15:00:00', 5),
(91, NULL, NULL, 1, 2, '15:00:00', '16:00:00', 5),
(92, NULL, NULL, 1, 2, '16:00:00', '17:00:00', 5),
(93, NULL, NULL, 1, 2, '17:00:00', '18:00:00', 5),
(94, NULL, NULL, 1, 2, '18:00:00', '19:00:00', 5),
(95, NULL, NULL, 1, 2, '19:00:00', '20:00:00', 5),
(96, NULL, NULL, 1, 2, '20:00:00', '21:00:00', 5),
(97, NULL, NULL, 1, 2, '21:00:00', '22:00:00', 5),
(98, NULL, NULL, 1, 2, '22:00:00', '23:00:00', 5),
(99, NULL, NULL, 1, 2, '23:00:00', '00:00:00', 5),
(100, NULL, NULL, 2, 2, '00:00:00', '10:00:00', 6),
(101, NULL, NULL, 1, 2, '10:00:00', '11:00:00', 6),
(102, NULL, NULL, 1, 2, '11:00:00', '12:00:00', 6),
(103, NULL, NULL, 1, 2, '12:00:00', '13:00:00', 6),
(104, NULL, NULL, 1, 2, '13:00:00', '14:00:00', 6),
(105, NULL, NULL, 1, 2, '14:00:00', '15:00:00', 6),
(106, NULL, NULL, 1, 2, '15:00:00', '16:00:00', 6),
(107, NULL, NULL, 1, 2, '16:00:00', '17:00:00', 6),
(108, NULL, NULL, 1, 2, '17:00:00', '18:00:00', 6),
(109, NULL, NULL, 1, 2, '18:00:00', '19:00:00', 6),
(110, NULL, NULL, 1, 2, '19:00:00', '20:00:00', 6),
(111, NULL, NULL, 1, 2, '20:00:00', '21:00:00', 6),
(112, NULL, NULL, 1, 2, '21:00:00', '22:00:00', 6),
(113, NULL, NULL, 1, 2, '22:00:00', '23:00:00', 6),
(114, NULL, NULL, 1, 2, '23:00:00', '00:00:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(85) DEFAULT NULL,
  `lname` varchar(85) DEFAULT NULL,
  `username` varchar(85) DEFAULT NULL,
  `email` varchar(85) NOT NULL,
  `password` varchar(85) NOT NULL,
  `salt` varchar(85) NOT NULL,
  `organization` varchar(85) DEFAULT NULL,
  `position` varchar(85) DEFAULT NULL,
  `phone` varchar(85) DEFAULT NULL,
  `timezone` varchar(85) NOT NULL,
  `language` varchar(10) NOT NULL,
  `homepageid` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastlogin` datetime DEFAULT NULL,
  `status_id` tinyint(2) unsigned NOT NULL,
  `legacyid` char(16) DEFAULT NULL,
  `legacypassword` varchar(32) DEFAULT NULL,
  `public_id` varchar(20) DEFAULT NULL,
  `allow_calendar_subscription` tinyint(1) NOT NULL DEFAULT '0',
  `default_schedule_id` smallint(5) unsigned DEFAULT NULL,
  `credit_count` decimal(7,2) unsigned DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `public_id` (`public_id`),
  KEY `status_id` (`status_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `username`, `email`, `password`, `salt`, `organization`, `position`, `phone`, `timezone`, `language`, `homepageid`, `date_created`, `last_modified`, `lastlogin`, `status_id`, `legacyid`, `legacypassword`, `public_id`, `allow_calendar_subscription`, `default_schedule_id`, `credit_count`) VALUES
(1, 'DYLAN', 'BURR', '17dburr', '17dburr@stu.sgdragons.org', '4faf33cf922a5a4134b2c3ebddda6418af154515', '5ffb7445', '', '', '', 'America/Chicago', 'en_us', 2, '2017-02-22 05:22:32', '2017-06-29 19:45:18', '2017-06-29 15:45:18', 1, NULL, NULL, '58ad2018130c4', 0, 1, '0.00'),
(11, 'DYLAN', 'BURR', 'djbn65', 'djbn65@mst.edu', '7bc37aaab4d4c4caa31d2c17db25ee978650c75e', '00c03b6f', '', '', '5738836863', 'America/Chicago', 'en_us', 2, '2017-06-29 15:42:56', '2017-07-01 20:49:58', '2017-07-01 16:49:58', 1, NULL, NULL, '59552000a86cc', 0, NULL, '0.00'),
(3, 'Caitlin', 'Grass', 'cgrass', '17cgrass@stu.sgdragons.org', '4b925972a3da6b373ff935773683ebe380c82812', '78889647', '', '', '', 'America/Chicago', 'en_us', 1, '2017-02-22 14:45:42', '2017-06-28 07:25:29', '2017-06-28 03:25:29', 1, NULL, NULL, '58ada416e0524', 0, NULL, '0.00'),
(4, 'Morgan', 'Uzzell', 'Momoquizzer', '17muzzell@stu.sgdragons.org', '5d542808ce87f43bab404acad3362d4c41956009', '36a3343e', '', '', '636-232-5135', 'America/New_York', 'en_us', 1, '2017-02-22 17:12:27', '2017-05-20 21:28:27', '2017-05-03 15:02:23', 1, NULL, NULL, '58adc67b23241', 0, NULL, '0.00'),
(10, 'Audra', 'Yocom', 'ayocom@alpinedistrict.org', 'ayocom@alpinedistrict.org', 'd90891746b070c3bb4c9c683630225ffbfe840b2', '1cc185be', NULL, NULL, NULL, 'America/Chicago', 'en_us', 2, '2017-06-06 04:30:01', '2017-06-06 08:30:01', '2017-06-06 04:30:01', 1, NULL, NULL, '59362fc996280', 0, NULL, '0.00'),
(9, 'Dylan', 'Burr', 'dylanburr20@gmail.com', 'dylanburr20@gmail.com', '3b7ec6c4beaba366e92c958993b0eb0cee77a137', '5c1fe25a', NULL, NULL, NULL, 'America/Chicago', 'en_us', 2, '2017-05-20 21:20:46', '2017-05-21 01:23:33', '2017-05-20 21:23:33', 1, NULL, NULL, '5920b32e39356', 0, NULL, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `user_email_preferences`
--

CREATE TABLE IF NOT EXISTS `user_email_preferences` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `event_category` varchar(45) NOT NULL,
  `event_type` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`,`event_category`,`event_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`group_id`,`user_id`),
  KEY `user_id` (`user_id`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`user_id`, `group_id`) VALUES
(1, 2),
(9, 2),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_preferences`
--

CREATE TABLE IF NOT EXISTS `user_preferences` (
  `user_preferences_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` text,
  PRIMARY KEY (`user_preferences_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_preferences`
--

INSERT INTO `user_preferences` (`user_preferences_id`, `user_id`, `name`, `value`) VALUES
(1, 1, 'FilterStartDateDelta', '-7'),
(2, 1, 'FilterEndDateDelta', '7'),
(3, 1, 'FilterUserId', NULL),
(4, 1, 'FilterUserName', NULL),
(5, 1, 'FilterScheduleId', '0'),
(6, 1, 'FilterResourceId', '0'),
(7, 1, 'FilterReservationStatusId', '0'),
(8, 1, 'FilterReferenceNumber', NULL),
(9, 1, 'FilterResourceStatusId', NULL),
(10, 1, 'FilterResourceReasonId', NULL),
(11, 1, 'FilterCustomAttributes', 'a:0:{}'),
(12, 4, 'ReservationColor', ''),
(13, 1, 'ReservationColor', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_resource_permissions`
--

CREATE TABLE IF NOT EXISTS `user_resource_permissions` (
  `user_id` mediumint(8) unsigned NOT NULL,
  `resource_id` smallint(5) unsigned NOT NULL,
  `permission_id` tinyint(2) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`,`resource_id`),
  KEY `user_id` (`user_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_resource_permissions`
--

INSERT INTO `user_resource_permissions` (`user_id`, `resource_id`, `permission_id`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE IF NOT EXISTS `user_session` (
  `user_session_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `last_modified` datetime NOT NULL,
  `session_token` varchar(50) NOT NULL,
  `user_session_value` text NOT NULL,
  PRIMARY KEY (`user_session_id`),
  KEY `user_session_user_id` (`user_id`),
  KEY `user_session_session_token` (`session_token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_statuses`
--

CREATE TABLE IF NOT EXISTS `user_statuses` (
  `status_id` tinyint(2) unsigned NOT NULL,
  `description` varchar(85) DEFAULT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_statuses`
--

INSERT INTO `user_statuses` (`status_id`, `description`) VALUES
(1, 'Active'),
(2, 'Awaiting'),
(3, 'Inactive');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
