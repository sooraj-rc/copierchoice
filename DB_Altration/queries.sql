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
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `packages` ADD `status` CHAR( 1 ) NOT NULL DEFAULT 'A' COMMENT 'A-Active|D-Deleted' AFTER `currency_symbol`;

--14/01/2016
ALTER TABLE `makers` ADD `cat_id` INT NOT NULL AFTER `makerID`;

UPDATE `makers` SET cat_id = 1 WHERE cat_id = 0;

ALTER TABLE `makers` ADD `status` CHAR( 1 ) NOT NULL DEFAULT 'A' COMMENT 'A-Active|D-Deleted' AFTER `maker`;

--  Till updated in demo DB -- 15/01/2016

-- 18/01/2016

--
-- Table structure for table `lead_types`
--

CREATE TABLE IF NOT EXISTS `lead_types` (
  `lead_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `lead_type` varchar(255) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A' COMMENT 'A-Active|D-Deleted',
  PRIMARY KEY (`lead_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `lead_types`
--

INSERT INTO `lead_types` (`lead_type_id`, `lead_type`, `status`) VALUES
(1, 'Printer or Multifunction Device - Multifunction Device/Digital Office Copier', 'A'),
(2, ' Printer or Multifunction Device – Printer only (Mono or Colour Laser Printer)', 'A'),
(3, 'Printer or Multifunction Device – Wide Format Printer/Plotter', 'A'),
(4, 'Printer or Multifunction Device – Production Printer', 'A'),
(5, 'Service &/or Repair – Urgent repair/service on existing device', 'A'),
(6, 'Service &/or Repair – Non-urgent repair/service on existing device', 'A'),
(7, 'Service &/or Repair – Enquire about new service agreement for existing device', 'A'),
(8, 'Managed Print Service', 'A');


