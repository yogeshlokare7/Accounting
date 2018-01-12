drop database if exists accounting;
create database accounting;
use accounting;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.15.115:3306
-- Generation Time: Jan 12, 2018 at 06:13 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounting`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounttype_master`
--

DROP TABLE IF EXISTS `accounttype_master`;
CREATE TABLE IF NOT EXISTS `accounttype_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banking_master`
--

DROP TABLE IF EXISTS `banking_master`;
CREATE TABLE IF NOT EXISTS `banking_master` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `fax_no` varchar(45) DEFAULT NULL,
  `bank_email` varchar(45) DEFAULT NULL,
  `proj_id` int(11) DEFAULT NULL,
  `accounttype_master_id` int(11) NOT NULL,
  PRIMARY KEY (`bank_id`,`accounttype_master_id`),
  KEY `proj_id_idx` (`proj_id`),
  KEY `fk_banking_master_accounttype_master1_idx` (`accounttype_master_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banking_transaction`
--

DROP TABLE IF EXISTS `banking_transaction`;
CREATE TABLE IF NOT EXISTS `banking_transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(45) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `debit` double(10,2) DEFAULT NULL,
  `credit` double(10,2) DEFAULT NULL,
  `balance` double(10,2) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `proj_id` int(11) DEFAULT NULL,
  `banking_master_bank_id` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`,`banking_master_bank_id`),
  KEY `bt_proj_fk_1_idx` (`proj_id`),
  KEY `fk_banking_transaction_banking_master1_idx` (`banking_master_bank_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category_division_detail`
--

DROP TABLE IF EXISTS `category_division_detail`;
CREATE TABLE IF NOT EXISTS `category_division_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `cost_code` varchar(45) DEFAULT NULL,
  `line_item` varchar(50) DEFAULT NULL,
  `total_budget` double(8,2) DEFAULT NULL,
  `per_unit` double(8,2) DEFAULT NULL,
  `per_sqft` double(8,2) DEFAULT NULL,
  `budget_increses` double(8,2) DEFAULT NULL,
  `final_budget` double(8,2) DEFAULT NULL,
  `contactor_id` int(11) DEFAULT NULL,
  `predevelopment` double(8,2) DEFAULT NULL,
  `cost_in_place` double(8,2) DEFAULT NULL,
  `cost_to_complete` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dcs_ibfk_3_idx` (`contactor_id`),
  KEY `cdd_ibfk_1_idx` (`proj_id`),
  KEY `cdd_ibfk_2_idx` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

DROP TABLE IF EXISTS `category_master`;
CREATE TABLE IF NOT EXISTS `category_master` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `categorytype_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`,`categorytype_id`),
  KEY `fk_category_master_category_type_master1_idx` (`categorytype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category_type_master`
--

DROP TABLE IF EXISTS `category_type_master`;
CREATE TABLE IF NOT EXISTS `category_type_master` (
  `categorytype_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`categorytype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contractor_master`
--

DROP TABLE IF EXISTS `contractor_master`;
CREATE TABLE IF NOT EXISTS `contractor_master` (
  `contractor_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `contractor_email` varchar(45) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `fax_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`contractor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_master`
--

DROP TABLE IF EXISTS `customer_master`;
CREATE TABLE IF NOT EXISTS `customer_master` (
  `customer_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `customer_email` varchar(45) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `fax_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dcs_draw`
--

DROP TABLE IF EXISTS `dcs_draw`;
CREATE TABLE IF NOT EXISTS `dcs_draw` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `dcs_id` int(5) DEFAULT NULL,
  `draw_no` int(5) DEFAULT NULL,
  `draw_cost` double(8,2) DEFAULT NULL,
  `proj_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id` (`dcs_id`),
  KEY `dcs_draw_ibfk_2_idx` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `development_cost_summary`
--

DROP TABLE IF EXISTS `development_cost_summary`;
CREATE TABLE IF NOT EXISTS `development_cost_summary` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `category_id` int(5) DEFAULT NULL,
  `total_budget` double(8,2) DEFAULT NULL,
  `per_unit` double(8,2) DEFAULT NULL,
  `per_sf` double(8,2) DEFAULT NULL,
  `budget_increase` double(8,2) DEFAULT NULL,
  `final_budget` double(8,2) DEFAULT NULL,
  `pre_dev` double(8,2) DEFAULT NULL,
  `cost_in_place` double(8,2) DEFAULT NULL,
  `cost_to_complete` double(8,2) DEFAULT NULL,
  `proj_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `development_cost_summary_ibfk_2_idx` (`proj_id`),
  KEY `fk_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `draw_system`
--

DROP TABLE IF EXISTS `draw_system`;
CREATE TABLE IF NOT EXISTS `draw_system` (
  `draw_id` int(5) NOT NULL AUTO_INCREMENT,
  `draw_name` varchar(25) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `proj_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`draw_id`),
  KEY `ds_ibfk_1_idx` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gst_tracking`
--

DROP TABLE IF EXISTS `gst_tracking`;
CREATE TABLE IF NOT EXISTS `gst_tracking` (
  `gst_track_id` int(5) NOT NULL AUTO_INCREMENT,
  `draw_no` int(10) DEFAULT NULL,
  `claim_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gst_claim` varchar(25) DEFAULT NULL,
  `gst_ccv` varchar(25) DEFAULT NULL,
  `date_rcv` varchar(25) DEFAULT NULL,
  `comment` varchar(25) DEFAULT NULL,
  `proj_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`gst_track_id`),
  KEY `gstt_ibfk1_idx` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_master`
--

DROP TABLE IF EXISTS `invoice_master`;
CREATE TABLE IF NOT EXISTS `invoice_master` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_date` date DEFAULT NULL,
  `date_entered` date DEFAULT NULL,
  `date_paid` date DEFAULT NULL,
  `draw` varchar(45) DEFAULT NULL,
  `predevelopment_id` int(11) NOT NULL,
  `check_no` int(11) NOT NULL,
  PRIMARY KEY (`invoice_id`,`predevelopment_id`,`check_no`),
  KEY `fk_invoice_master_pre_development_cost1_idx` (`predevelopment_id`),
  KEY `fk_invoice_master_virtual_checkbook1_idx` (`check_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loan_interest`
--

DROP TABLE IF EXISTS `loan_interest`;
CREATE TABLE IF NOT EXISTS `loan_interest` (
  `loan_id` int(5) NOT NULL AUTO_INCREMENT,
  `loan_name` varchar(10) DEFAULT NULL,
  `loan_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `loan_amount` double(12,2) DEFAULT NULL,
  `interest` int(5) DEFAULT NULL,
  `proj_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`loan_id`),
  KEY `li_ibfk1_idx` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_summary_detail_type`
--

DROP TABLE IF EXISTS `payment_summary_detail_type`;
CREATE TABLE IF NOT EXISTS `payment_summary_detail_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(70) DEFAULT NULL,
  `active` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_summary_table`
--

DROP TABLE IF EXISTS `payment_summary_table`;
CREATE TABLE IF NOT EXISTS `payment_summary_table` (
  `id` int(11) NOT NULL,
  `developer_name` varchar(50) DEFAULT NULL,
  `po_no` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pre_development_cost`
--

DROP TABLE IF EXISTS `pre_development_cost`;
CREATE TABLE IF NOT EXISTS `pre_development_cost` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `payee_name` varchar(25) DEFAULT NULL,
  `coast_code` int(5) DEFAULT NULL,
  `netCoast` double(8,2) DEFAULT NULL,
  `gst` tinyint(1) DEFAULT NULL,
  `pst` tinyint(1) DEFAULT NULL,
  `holdBack` varchar(25) DEFAULT NULL,
  `gross_amt` double(8,3) DEFAULT NULL,
  `proj_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pdc_ibfk_1_idx` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `proj_id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_name` varchar(50) DEFAULT NULL,
  `proj_type` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `ressidential_unit` int(11) DEFAULT NULL,
  `commercial_unit` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `total_billable_sqft` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_category_mapping`
--

DROP TABLE IF EXISTS `project_category_mapping`;
CREATE TABLE IF NOT EXISTS `project_category_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pcm_ibfk_2_idx` (`category_id`),
  KEY `pcm_ibfk_1_idx` (`proj_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_tax_master`
--

DROP TABLE IF EXISTS `project_tax_master`;
CREATE TABLE IF NOT EXISTS `project_tax_master` (
  `proj_tax_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_type` varchar(45) DEFAULT NULL,
  `tax_percent` double(6,2) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`proj_tax_id`),
  KEY `project_id_idx` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `taxinfo_master`
--

DROP TABLE IF EXISTS `taxinfo_master`;
CREATE TABLE IF NOT EXISTS `taxinfo_master` (
  `tax_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `tax_type` varchar(45) DEFAULT NULL,
  `tax_percent` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tax_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_master`
--

DROP TABLE IF EXISTS `vendor_master`;
CREATE TABLE IF NOT EXISTS `vendor_master` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `vendor_email` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `fax_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `virtual_checkbook`
--

DROP TABLE IF EXISTS `virtual_checkbook`;
CREATE TABLE IF NOT EXISTS `virtual_checkbook` (
  `check_id` int(11) NOT NULL AUTO_INCREMENT,
  `check_date` date DEFAULT NULL,
  `to_payee` varchar(50) DEFAULT NULL,
  `amount` double(10,2) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `check_cleared_date` date DEFAULT NULL,
  `written_but_notcash` varchar(45) DEFAULT NULL,
  `proj_id` int(11) DEFAULT NULL,
  `account_type` int(11) NOT NULL,
  PRIMARY KEY (`check_id`),
  KEY `vc_ibfk_1_idx` (`proj_id`),
  KEY `fk_virtual_checkbook_accounttype_master1_idx` (`account_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vtb_mortgage`
--

DROP TABLE IF EXISTS `vtb_mortgage`;
CREATE TABLE IF NOT EXISTS `vtb_mortgage` (
  `vtb_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `fromDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `toDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `days_of_interest` int(11) DEFAULT NULL,
  `start_loan_balance` double(12,2) DEFAULT NULL,
  `additional_draws` varchar(45) DEFAULT NULL,
  `holdback` double(8,2) DEFAULT NULL,
  `interest_charge` int(11) DEFAULT NULL,
  `interest_paid` double(12,2) DEFAULT NULL,
  `principle_payment` double(12,2) DEFAULT NULL,
  `ending_loan_balance` double(12,2) DEFAULT NULL,
  `proj_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`vtb_id`),
  KEY `vm_ibfk_1_idx` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banking_master`
--
ALTER TABLE `banking_master`
  ADD CONSTRAINT `fk_banking_master_accounttype_master1` FOREIGN KEY (`accounttype_master_id`) REFERENCES `accounttype_master` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `proj_id` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_division_detail`
--
ALTER TABLE `category_division_detail`
  ADD CONSTRAINT `cdd_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cdd_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category_master` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cdd_ibfk_3` FOREIGN KEY (`contactor_id`) REFERENCES `contractor_master` (`contractor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_master`
--
ALTER TABLE `category_master`
  ADD CONSTRAINT `fk_category_master_category_type_master1` FOREIGN KEY (`categorytype_id`) REFERENCES `category_type_master` (`categorytype_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dcs_draw`
--
ALTER TABLE `dcs_draw`
  ADD CONSTRAINT `dcs_draw_ibfk_1` FOREIGN KEY (`dcs_id`) REFERENCES `development_cost_summary` (`id`),
  ADD CONSTRAINT `dcs_draw_ibfk_2` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `development_cost_summary`
--
ALTER TABLE `development_cost_summary`
  ADD CONSTRAINT `development_cost_summary_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_master` (`category_id`),
  ADD CONSTRAINT `development_cost_summary_ibfk_2` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `draw_system`
--
ALTER TABLE `draw_system`
  ADD CONSTRAINT `ds_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gst_tracking`
--
ALTER TABLE `gst_tracking`
  ADD CONSTRAINT `gstt_ibfk1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `loan_interest`
--
ALTER TABLE `loan_interest`
  ADD CONSTRAINT `li_ibfk1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `project_tax_master`
--
ALTER TABLE `project_tax_master`
  ADD CONSTRAINT `project_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`proj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `virtual_checkbook`
--
ALTER TABLE `virtual_checkbook`
  ADD CONSTRAINT `fk_virtual_checkbook_accounttype_master1` FOREIGN KEY (`account_type`) REFERENCES `accounttype_master` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vc_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vtb_mortgage`
--
ALTER TABLE `vtb_mortgage`
  ADD CONSTRAINT `vm_ibfk_2` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
