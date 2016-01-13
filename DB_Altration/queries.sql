--
-- Table structure for table `ci_sessions`
-- 11/01/2016
-- SRJ

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `timestamp` varchar(50) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 12/01/2016   SRJ
ALTER TABLE `administrators` ADD `status` CHAR( 1 ) NOT NULL DEFAULT 'A' AFTER `email`;

ALTER TABLE `administrators` ADD `last_login_date` DATETIME NOT NULL AFTER `email`;

--13/01/2016    SRJ
--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(155) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '0 - Main category',
  `status` char(1) NOT NULL DEFAULT 'A' COMMENT 'A- Active | D-Deleted',
  PRIMARY KEY (`cat_d`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `packages` ADD `status` CHAR( 1 ) NOT NULL DEFAULT 'A' COMMENT 'A-Active|D-Deleted' AFTER `currency_symbol` 