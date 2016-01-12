--
-- Table structure for table `ci_sessions`
-- 11/01/2016
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `timestamp` varchar(50) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `administrators` ADD `status` CHAR( 1 ) NOT NULL DEFAULT 'A' AFTER `email`;

ALTER TABLE `administrators` ADD `last_login_date` DATETIME NOT NULL AFTER `email`;