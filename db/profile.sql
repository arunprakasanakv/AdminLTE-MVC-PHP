-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `profile` (`id`, `name`, `password`, `emailid`) VALUES
(3,	'Test',	'test@123',	'test@test.com');

-- 2018-01-18 09:15:19
