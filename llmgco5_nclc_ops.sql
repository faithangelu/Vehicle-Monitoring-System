-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2018 at 04:26 AM
-- Server version: 10.2.12-MariaDB-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `llmgco5_nclc_ops`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acct_db_id` int(6) NOT NULL COMMENT 'Database Account ID',
  `account_id` int(6) NOT NULL,
  `account_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `parent_account` int(6) NOT NULL COMMENT 'Parent Account',
  `account_type` int(2) NOT NULL COMMENT 'Account Type',
  `inactive` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Account Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Book of Accounts';

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acct_db_id`, `account_id`, `account_name`, `description`, `parent_account`, `account_type`, `inactive`) VALUES
(13, 1234, 'louie', 'pogi', 1000, 1, 0),
(12, 1234, 'louie', 'pogi', 1000, 1, 0),
(25, 0, '', ' ', 0, 1, 0),
(15, 1234, 'louie', 'pogi', 1000, 1, 0),
(16, 1234, 'louie', 'pogi', 1000, 1, 0),
(17, 5679, 'myself', 'hello', 1000, 1, 0),
(18, 9876, 'bam', 'panot', 1000, 1, 0),
(19, 1234, 'louie', 'pogi', 1000, 1, 0),
(24, 10000, 'Cash', 'Cash', 0, 1, 0),
(21, 5679, 'myself', 'hello', 1000, 1, 0),
(22, 9876, 'bam', 'panot', 1000, 1, 0),
(23, 124, 'lalal', 'boo', 1000, 2, 0),
(26, 10001, 'Cash - BDO Corporate 00-162015', 'Cash', 10000, 1, 0),
(27, 10002, 'Cash - MBTC Corporate 068-7-06', 'Cash', 10000, 1, 0),
(28, 10003, 'Cash - LBP Corporate', 'Cash', 10000, 1, 0),
(29, 10004, 'Cash - PNB Corporate 598121900', 'Cash', 10000, 1, 0),
(30, 10010, 'Petty Cash - Back Office', 'Cash', 10000, 1, 0),
(31, 10011, 'Revolving Fund - Abra', 'Cash', 10000, 1, 0),
(32, 10012, 'Cash on hand', 'Cash', 10000, 1, 0),
(33, 0, '', ' ', 0, 1, 0),
(34, 10000, 'Cash', 'Cash', 0, 1, 0),
(35, 10001, 'Cash - BDO Corporate 00-162015', 'Cash', 10000, 1, 0),
(36, 10002, 'Cash - MBTC Corporate 068-7-06', 'Cash', 10000, 1, 0),
(37, 10003, 'Cash - LBP Corporate', 'Cash', 10000, 1, 0),
(38, 10004, 'Cash - PNB Corporate 598121900', 'Cash', 10000, 1, 0),
(39, 10010, 'Petty Cash - Back Office', 'Cash', 10000, 1, 0),
(40, 10011, 'Revolving Fund - Abra', 'Cash', 10000, 1, 0),
(41, 10012, 'Cash on hand', 'Cash', 10000, 1, 0),
(42, 0, 'ÙUíz³<Û{‹Šè‰E›UÏ²˜¶‚Všö¯)Â9·', 'Ôº…äch°ð{Ú-¿A±8êÜ	-<aÓ.¾šNNJ‰ÇX±…Q$ýÃ~ÄÙ±', 0, 0, 0),
(43, 0, '¢¼séæªH©ˆQ¤BÂÒÀ@0U(Ü\"SXŒd7Õ‘', '<9ã$¼öìÕS‰W~¨R-Xtâ*‘*Å¥Q$ÎÇi*1ŠTDx.±OÎÉÇGâ‚“P', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE `account_type` (
  `type_id` int(1) NOT NULL,
  `type` text NOT NULL,
  `roman` text NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`type_id`, `type`, `roman`, `remarks`, `color`) VALUES
(1, 'Asset', 'I', '', 'bg-success-500'),
(2, 'Liability', 'II', '', 'bg-danger-500'),
(3, 'Equity', 'III', '', 'bg-primary-500'),
(4, 'Income', 'IV', '', 'bg-success-300'),
(5, 'Expense', 'V', '', 'bg-warning');

-- --------------------------------------------------------

--
-- Table structure for table `acct_close`
--

CREATE TABLE `acct_close` (
  `close_id` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `close` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Monitor if chart of accounts closed for the month';

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `db_id` int(6) NOT NULL,
  `text` varchar(250) NOT NULL,
  `end_date` date NOT NULL COMMENT 'Valid until date',
  `created_by` int(5) NOT NULL,
  `created_date` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`db_id`, `text`, `end_date`, `created_by`, `created_date`, `active`) VALUES
(1, 'test', '2018-03-22', 56, '2018-03-13 00:00:00', 0),
(2, 'tetsts', '2018-03-05', 56, '2018-03-13 00:00:00', 0),
(3, 'hfgf', '2018-03-12', 56, '2018-03-13 00:00:00', 0),
(4, 'This is working', '2018-03-21', 56, '2018-03-20 00:00:00', 0),
(5, 'Tin was here', '2018-03-30', 56, '2018-03-21 00:00:00', 0),
(6, 'Testing', '2018-03-31', 53, '2018-03-24 00:00:00', 0),
(7, 'Palpak', '2018-03-24', 53, '2018-03-24 00:00:00', 0),
(8, 'Test', '2018-03-24', 69, '2018-03-24 00:00:00', 0),
(9, 'Testing this announcements', '2018-03-29', 56, '2018-03-26 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `asset_location`
--

CREATE TABLE `asset_location` (
  `location_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `shortname` varchar(15) NOT NULL,
  `desc` varchar(40) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail_acct`
--

CREATE TABLE `audit_trail_acct` (
  `audit_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `action` varchar(20) NOT NULL COMMENT 'Add, Edit, Delete',
  `details` text NOT NULL,
  `gl_trans_id` int(10) NOT NULL,
  `gl_details_id` int(11) NOT NULL,
  `new_value` double(13,2) NOT NULL,
  `old_value` double(13,2) DEFAULT NULL,
  `user` int(6) NOT NULL COMMENT 'User who made entry',
  `comments` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_trail_acct`
--

INSERT INTO `audit_trail_acct` (`audit_id`, `date`, `action`, `details`, `gl_trans_id`, `gl_details_id`, `new_value`, `old_value`, `user`, `comments`) VALUES
(27, '2018-01-25 12:08:17', 'Add', 'Created Account - Cash - PNB Corporate 598121900023', 37, 33, 0.00, NULL, 53, ''),
(26, '2018-01-25 12:08:17', 'Add', 'Created Account - Cash - LBP Corporate', 37, 32, 0.00, NULL, 53, ''),
(25, '2018-01-25 12:08:17', 'Add', 'Created Account - Cash - MBTC Corporate 068-7-068-53026-8', 37, 31, 3.00, NULL, 53, ''),
(24, '2018-01-25 12:08:17', 'Add', 'Created Account - Cash - BDO Corporate 00-1620154399', 37, 30, 1.00, NULL, 53, ''),
(23, '2018-01-25 12:08:17', 'Add', 'Created Account - Cash', 37, 29, 0.00, NULL, 53, ''),
(22, '2018-01-24 18:33:59', 'Add', 'Created Account - lalal', 33, 28, -5000.00, NULL, 53, ''),
(21, '2018-01-24 18:33:59', 'Add', 'Created Account - bam', 33, 27, 4000.03, NULL, 53, ''),
(20, '2018-01-24 18:33:59', 'Add', 'Created Account - myself', 33, 26, -3000.02, NULL, 53, ''),
(19, '2018-01-24 18:33:59', 'Add', 'Created Account - louie', 33, 25, 2000.01, NULL, 53, ''),
(18, '2018-01-24 18:20:00', 'Add', 'Created Account - bam', 30, 24, 4000.03, NULL, 53, ''),
(17, '2018-01-24 18:20:00', 'Add', 'Created Account - myself', 30, 23, 3000.02, NULL, 53, ''),
(16, '2018-01-24 18:20:00', 'Add', 'Created Account - louie', 30, 22, 2000.01, NULL, 53, ''),
(28, '2018-01-25 12:08:17', 'Add', 'Created Account - Petty Cash - Back Office', 37, 34, 0.00, NULL, 53, ''),
(29, '2018-01-25 12:08:17', 'Add', 'Created Account - Revolving Fund - Abra', 37, 35, 0.00, NULL, 53, ''),
(30, '2018-01-25 12:08:17', 'Add', 'Created Account - Cash on hand', 37, 36, 563.03, NULL, 53, ''),
(31, '2018-01-25 12:09:31', 'Add', 'Created Account - Cash', 45, 37, 0.00, NULL, 53, ''),
(32, '2018-01-25 12:09:31', 'Add', 'Created Account - Cash - BDO Corporate 00-1620154399', 45, 38, 1283845.76, NULL, 53, ''),
(33, '2018-01-25 12:09:31', 'Add', 'Created Account - Cash - MBTC Corporate 068-7-068-53026-8', 45, 39, 3103.41, NULL, 53, ''),
(34, '2018-01-25 12:09:31', 'Add', 'Created Account - Cash - LBP Corporate', 45, 40, 0.00, NULL, 53, ''),
(35, '2018-01-25 12:09:31', 'Add', 'Created Account - Cash - PNB Corporate 598121900023', 49, 41, 0.00, NULL, 53, ''),
(36, '2018-01-25 12:09:31', 'Add', 'Created Account - Petty Cash - Back Office', 50, 42, 0.00, NULL, 53, ''),
(37, '2018-01-25 12:09:31', 'Add', 'Created Account - Revolving Fund - Abra', 51, 43, 0.00, NULL, 53, ''),
(38, '2018-01-25 12:09:31', 'Add', 'Created Account - Cash on hand', 52, 44, 563.03, NULL, 53, ''),
(39, '2018-03-08 14:21:16', 'Add', 'Created Account - ÙUíz³<Û{‹Šè‰E›UÏ²˜¶‚Všö¯)Â9·Z[±–4^kdÂ—5†Á¼!JàÒé?°ÿQá3ûqBo¨C~\0µÁ·MÂ¢ú’m<.vp“´Á¤IYÓ¦­“¶Z¶Y_p§›ó=al-ÙYü}NcçÍ™ËÎÉÅ‹4vjaÇÖvl¥©Á³\'S†&ÙAÆ8Æ|Õ*~xâ£ûàè¸âŸ1%M0Ág%¡õ˜<€ä·ÍÒ­¿\0\0\0ÿÿ\0PK\0\0\0\0\0!\0;m2KÁ\0\0\0B\0\0#\0\0\0xl/worksheets/_rels/sheet1.xml.rels„ÁŠÂ0E÷þCx{“Ö…CS7\"¸UçbúÚÛ—÷ý{³eÀååpÏå6›û<©f‘', 64, 45, 0.00, NULL, 56, ''),
(40, '2018-03-08 14:21:16', 'Add', 'Created Account - ¢¼séæªH©ˆQ¤BÂÒÀ@0U(Ü\"SXŒd7Õ‘(G¦èóºKuŽ\0nÏ®Ø…ópêJ	Œou£T˜4¯¬G \rjË˜4‹_’†>L\Z.Mì¨ÂytÒ$0TÚ‰ãzb Pb?‘éõ4±ø%%èÃ” àJÄ~)œG§D#A…€åÎ	J1%¿¤}˜QœÎ¥“\"‘ BÀ’Â@”öC^$+-—bä¹EN^MA„Ë‰íSv>NQ¤\"ÂrAD\'Ã~ô‰e£å/*°Oú\\’@8ßJêÚW¥F‘ŠW€={ráZej×Û»1*ÊòE¡“•·ÝÁ¡Í5Q4‹ËJ©ˆQ¤\"â5Í9#Éœ½Ucko[ûÉ¿;ƒÕ™ ‰„‹‡}A|âJEŒ\".‡òäœ|\"\"íõ\Z‰×î\"Ñ‰‹DÂEŠ]YØ«Ö)‰Q>/i¦È‘ˆH{1ÇDâ…ŠI™Â—CáÌ‰p‘âcvÑ¹øåŠÝxÙFùTD¸HlåÉ9ùDDÚ+:&¯îP¤HÊ4A\'žI$\\d\"Šà‚ZyM¥\"F‘Šˆ×4SäœHD¥½¾Ê4éjö¯õP¥ÈÊ”œ¸Jl¨”÷µâ*]+—]£|*\"­', 71, 46, 0.00, NULL, 56, '');

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail_trip`
--

CREATE TABLE `audit_trail_trip` (
  `audit_trip_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `action` varchar(20) NOT NULL COMMENT 'Add, Edit, Delete',
  `details` text NOT NULL,
  `trip_ticket_id` int(10) NOT NULL,
  `new_value` varchar(50) NOT NULL,
  `old_value` varchar(50) DEFAULT NULL,
  `user` int(6) NOT NULL COMMENT 'User who made entry',
  `comments` varchar(100) NOT NULL,
  `longitude` varchar(40) NOT NULL COMMENT 'longitute',
  `latitude` varchar(40) NOT NULL COMMENT 'latittude'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `bank_acct_id` int(4) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `account_type` varchar(30) NOT NULL,
  `acct_name` varchar(30) NOT NULL,
  `acct_no` varchar(30) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `currency` int(2) NOT NULL COMMENT 'bank_currency'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_account_type`
--

CREATE TABLE `bank_account_type` (
  `bank_acct_type_id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(40) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_account_type`
--

INSERT INTO `bank_account_type` (`bank_acct_type_id`, `name`, `description`, `active`) VALUES
(1, 'Current Account', 'Checking Account', 1),
(2, 'Savings Account', 'Saving Account', 1),
(3, 'Payroll Account', '', 1),
(4, 'Time Deposit', '', 1),
(5, 'Loan Account', '', 1),
(6, 'Credit Line', '', 1),
(7, 'Discounting Line', '', 1),
(8, 'Bills Purchase Line', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_currency`
--

CREATE TABLE `bank_currency` (
  `id` int(2) NOT NULL,
  `currency` varchar(15) NOT NULL,
  `symbol` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_type`
--

CREATE TABLE `business_type` (
  `business_type_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_type`
--

INSERT INTO `business_type` (`business_type_id`, `name`) VALUES
(1, 'Corporation'),
(2, 'Sole Proprietor'),
(3, 'Partnership'),
(4, 'Unregistered');

-- --------------------------------------------------------

--
-- Table structure for table `company_industry`
--

CREATE TABLE `company_industry` (
  `industry_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'Industry Name'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_industry`
--

INSERT INTO `company_industry` (`industry_id`, `name`) VALUES
(1, 'Construction'),
(2, 'Retail'),
(3, 'Manufacturing'),
(4, 'Merchandising'),
(5, 'Real Estate');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `comp_info_id` int(1) NOT NULL,
  `tin` int(9) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `last_name` varchar(30) NOT NULL COMMENT 'For sole-prop',
  `first_name` varchar(30) NOT NULL COMMENT 'For sole-prop',
  `middle_name` varchar(30) NOT NULL COMMENT 'For sole-prop',
  `trade_name` varchar(50) NOT NULL,
  `unit_number` varchar(30) NOT NULL COMMENT 'unit, house, bldg number',
  `street` varchar(30) NOT NULL,
  `barangay` varchar(30) NOT NULL,
  `mun_city` varchar(30) NOT NULL COMMENT 'Municipality or City',
  `province` varchar(30) NOT NULL,
  `zip` int(4) NOT NULL,
  `sss` varchar(25) NOT NULL,
  `pag-ibig` varchar(25) NOT NULL,
  `philhealth` varchar(25) NOT NULL,
  `landline` varchar(7) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `website` varchar(25) NOT NULL,
  `facebook` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactId` int(6) NOT NULL,
  `contact_type` varchar(25) NOT NULL,
  `type_Id` int(6) NOT NULL,
  `department` varchar(30) NOT NULL,
  `salutation` varchar(6) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `directLine` varchar(15) NOT NULL,
  `contactAddress` varchar(50) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `position` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts_type`
--

CREATE TABLE `contacts_type` (
  `contact_type_id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(40) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts_type`
--

INSERT INTO `contacts_type` (`contact_type_id`, `name`, `description`, `active`) VALUES
(1, 'Supplier', 'Supplier', 1),
(2, 'Customer', 'Customer', 1),
(3, 'Bank', 'Bank Personnel', 1),
(4, 'Employee', 'Employee', 1),
(5, 'Consultant', 'Consultant', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cost_center`
--

CREATE TABLE `cost_center` (
  `center_id` int(4) NOT NULL,
  `center_name` varchar(30) NOT NULL,
  `center_desc` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `supplier_id` int(6) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `trade_name` varchar(50) NOT NULL,
  `business_type` int(1) NOT NULL,
  `owner_last_name` varchar(30) NOT NULL,
  `owner_first_name` varchar(30) NOT NULL,
  `owner_middle_name` varchar(30) NOT NULL,
  `vendor_categ` int(1) NOT NULL COMMENT '1 - goods 2 - services 3 -both',
  `unit_bldg_no` varchar(30) NOT NULL COMMENT 'House or Unit, Bldg No',
  `street` varchar(30) NOT NULL,
  `barangay` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL COMMENT 'Municipality or City',
  `province` varchar(30) NOT NULL,
  `tax_type` varchar(7) NOT NULL COMMENT 'Vat or Non Vat',
  `tin` int(9) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `status` int(2) NOT NULL COMMENT 'supplier status',
  `salesman` int(4) NOT NULL COMMENT 'salesman code',
  `area` int(4) NOT NULL COMMENT 'area code',
  `size` int(3) NOT NULL COMMENT 'classify based on sales size',
  `visit_freq` int(3) NOT NULL COMMENT 'frequency of visit per month'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`supplier_id`, `business_name`, `trade_name`, `business_type`, `owner_last_name`, `owner_first_name`, `owner_middle_name`, `vendor_categ`, `unit_bldg_no`, `street`, `barangay`, `district`, `province`, `tax_type`, `tin`, `active`, `status`, `salesman`, `area`, `size`, `visit_freq`) VALUES
(1, 'LIFUNG', '', 1, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0),
(2, 'LIFUNG', '', 1, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0),
(3, 'LIFUNG', '', 2, 'Rose', 'Amos', 'Meyi', 2, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0),
(4, 'Lifung', '', 2, 'Faith', 'Hidalgo', 'HEHe', 2, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0),
(5, 'tert', '', 1, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer1`
--

CREATE TABLE `customer1` (
  `customer_id` int(6) NOT NULL,
  `terms` int(3) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tin` int(12) NOT NULL,
  `tax_type` varchar(10) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `landline` int(10) NOT NULL,
  `status` int(3) NOT NULL,
  `note` text NOT NULL,
  `salesperson` int(11) NOT NULL,
  `sales_area` int(4) NOT NULL,
  `sales_group` int(4) NOT NULL,
  `customer_type` int(2) NOT NULL,
  `visit_freq` int(11) NOT NULL COMMENT 'Visits per month'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_status`
--

CREATE TABLE `customer_status` (
  `cust_status_id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(40) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_status`
--

INSERT INTO `customer_status` (`cust_status_id`, `name`, `description`, `active`) VALUES
(1, 'Good Account - Cash', '', 1),
(2, 'Account up to Date', '', 1),
(3, 'Account with Receivables less ', '', 1),
(4, 'Account with Receivables less ', '', 1),
(5, 'Bad Account - Cash Only', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

CREATE TABLE `customer_type` (
  `cust_type_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(40) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_announcements`
--

CREATE TABLE `db_announcements` (
  `db_id` int(6) NOT NULL,
  `text` varchar(250) NOT NULL,
  `end_date` date NOT NULL COMMENT 'Valid until date',
  `created_by` int(5) NOT NULL,
  `created_date` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_announcements`
--

INSERT INTO `db_announcements` (`db_id`, `text`, `end_date`, `created_by`, `created_date`, `active`) VALUES
(1, 'Tesst', '2018-03-28', 2, '2018-03-28 00:00:00', 0),
(2, 'Araw ng Kagitingan ', '2018-04-09', 1, '2018-04-03 00:00:00', 0),
(3, 'Labor Day!', '2018-05-01', 1, '2018-04-05 00:00:00', 0),
(4, 'araw ng pagluluksa', '2018-04-07', 1, '2018-04-05 00:00:00', 0),
(5, 'Defense Moved.', '2018-04-14', 1, '2018-04-07 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_company_info`
--

CREATE TABLE `db_company_info` (
  `comp_info_id` int(1) NOT NULL,
  `tin` int(9) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `last_name` varchar(30) NOT NULL COMMENT 'For sole-prop',
  `first_name` varchar(30) NOT NULL COMMENT 'For sole-prop',
  `middle_name` varchar(30) NOT NULL COMMENT 'For sole-prop',
  `trade_name` varchar(50) NOT NULL,
  `unit_number` varchar(30) NOT NULL COMMENT 'unit, house, bldg number',
  `street` varchar(30) NOT NULL,
  `barangay` varchar(30) NOT NULL,
  `mun_city` varchar(30) NOT NULL COMMENT 'Municipality or City',
  `province` varchar(30) NOT NULL,
  `zip` int(4) NOT NULL,
  `sss` varchar(25) NOT NULL,
  `pag-ibig` varchar(25) NOT NULL,
  `philhealth` varchar(25) NOT NULL,
  `landline` varchar(7) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `website` varchar(25) NOT NULL,
  `facebook` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_company_info`
--

INSERT INTO `db_company_info` (`comp_info_id`, `tin`, `company_name`, `last_name`, `first_name`, `middle_name`, `trade_name`, `unit_number`, `street`, `barangay`, `mun_city`, `province`, `zip`, `sss`, `pag-ibig`, `philhealth`, `landline`, `mobile`, `website`, `facebook`) VALUES
(1, 9541668, 'Northward Crest Logistics Corporation', '', '', '', 'NCLC', '', '', 'Lamao', 'Bucloc', 'Abra', 2817, '0113821545', '2070189500000', '004000008032', '9299991', '09751444888', 'www.northward.ph', 'facebook.com/northward.ph');

-- --------------------------------------------------------

--
-- Table structure for table `db_customer`
--

CREATE TABLE `db_customer` (
  `supplier_id` int(6) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `trade_name` varchar(50) NOT NULL,
  `business_type` int(1) NOT NULL,
  `owner_last_name` varchar(30) NOT NULL,
  `owner_first_name` varchar(30) NOT NULL,
  `owner_middle_name` varchar(30) NOT NULL,
  `vendor_categ` int(1) NOT NULL COMMENT '1 - goods 2 - services 3 -both',
  `address` varchar(250) NOT NULL COMMENT 'Complete Address',
  `tax_type` varchar(7) NOT NULL COMMENT 'Vat or Non Vat',
  `tin` int(9) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `status` int(2) NOT NULL COMMENT 'supplier status'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_customer`
--

INSERT INTO `db_customer` (`supplier_id`, `business_name`, `trade_name`, `business_type`, `owner_last_name`, `owner_first_name`, `owner_middle_name`, `vendor_categ`, `address`, `tax_type`, `tin`, `active`, `status`) VALUES
(1, 'LIFUNG LOGISTICS ', 'LIFUNG', 0, '', '', '', 0, 'Pasig City, Philippines', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_hr_employees`
--

CREATE TABLE `db_hr_employees` (
  `emp_id` bigint(20) NOT NULL,
  `picture` longtext NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `b_day` varchar(25) NOT NULL,
  `m_status` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `curr_add` varchar(255) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `e_fname` varchar(50) NOT NULL,
  `e_mname` varchar(50) NOT NULL,
  `e_lname` varchar(50) NOT NULL,
  `econtact_num` varchar(50) NOT NULL,
  `econtact_rel` varchar(25) NOT NULL,
  `govern_id` varchar(25) NOT NULL,
  `id_type` longtext NOT NULL,
  `active` int(1) NOT NULL COMMENT 'Transaction ID'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_hr_employees`
--

INSERT INTO `db_hr_employees` (`emp_id`, `picture`, `last_name`, `first_name`, `middle_name`, `b_day`, `m_status`, `mobile`, `email`, `gender`, `curr_add`, `dept`, `job_title`, `e_fname`, `e_mname`, `e_lname`, `econtact_num`, `econtact_rel`, `govern_id`, `id_type`, `active`) VALUES
(1, 'juan.jpg', 'Dela Cruz', 'Juan', '', '', '', '', 'juandelac@gmail.com', '', '', 'Tracking ', 'Driver', '', '', '', '', '', '', '', 0),
(2, '', 'Dalisay', 'Cardo', '', '', '', '', 'dalisay@gmail.com', '', '', 'Trucking', 'Helper', '', '', '', '', '', '', '', 1),
(3, '', 'Sheeran', 'Ed', '', '', '', '', 'edshee@gmail.com', '', '', 'Trucking', 'Driver', '', '', '', '', '', '', '', 1),
(4, '', 'Ho', 'Lee Min', '', '', '', '', 'leeminho@gmail.com', '', '', 'Trucking', 'Helper', '', '', '', '', '', '', '', 1),
(5, '', 'Hijo', 'Unico', '', '', '', '', 'unicohijo@gmail.com', '', '', 'Trucking', 'Driver', '', '', '', '', '', '', '', 1),
(6, '', 'Blanco', 'Alfonso', '', '', '', '', 'alfonso@gmail.com', '', '', 'Operations', 'Operations Manager', '', '', '', '', '', '', '', 1),
(7, '', 'Pante', 'Emil', '', '', '', '', 'emil@gmail.com', '', '', 'IT', 'System Administrator', '', '', '', '', '', '', '', 1),
(8, '', 'Sabang', 'Christine', 'Remulta', '', '', '', 'xtn@gmail.com', '', '', 'Administration', 'Admin', '', '', '', '', '', '', '', 1),
(9, '', 'Advincula', 'Jade', 'A', '', '', '', 'jade@gmail.com', '', '', 'Finance', 'Finance', '', '', '', '', '', '', '', 1),
(10, '', 'Hidalgo', 'Faith', 'Alemania', '1996-09-01', '', '09178112710', 'minepremium013@gmail.com', 'Female', '2 KD Street, Kamuning, Quezon City', 'Administrative', 'Admin', 'Werlita ', '', 'Alemania', '09161494012', 'Mother', 'Drivers License', 'DL - 2020.jpg', 1),
(11, '', 'Gayao', 'Louie', '', '', '', '', 'loui@gmail.com', '', '', 'Management', 'Owner', '', '', '', '', '', '', '', 1),
(12, '', 'Bieber', 'Justin', '', '', '', '', 'bieber@gmail.com', '', '', 'Trucking', 'Dispatcher', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_hr_employees_compensations`
--

CREATE TABLE `db_hr_employees_compensations` (
  `compensation_id` int(6) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `base_pay` double(25,2) NOT NULL,
  `pay_interval` varchar(25) NOT NULL,
  `salary_grd` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_hr_employees_econtact`
--

CREATE TABLE `db_hr_employees_econtact` (
  `econ_id` int(6) NOT NULL,
  `emp_id` int(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact_no` int(255) NOT NULL,
  `contact_address` varchar(50) NOT NULL,
  `contact_rel` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_hr_employees_govid`
--

CREATE TABLE `db_hr_employees_govid` (
  `db_id` int(6) NOT NULL,
  `emp_id` int(25) NOT NULL,
  `id_type` tinyint(2) NOT NULL,
  `id_no` varchar(50) NOT NULL,
  `valid_until` date NOT NULL COMMENT 'expiration date',
  `file_location` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_hr_employees_govno`
--

CREATE TABLE `db_hr_employees_govno` (
  `govno_id` int(6) NOT NULL,
  `emp_id` int(25) NOT NULL,
  `tin_no` varchar(25) NOT NULL,
  `sss_no` varchar(25) NOT NULL,
  `pagibig_no` varchar(25) NOT NULL,
  `philhealth_no` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_inspection_report`
--

CREATE TABLE `db_inspection_report` (
  `inspection_id` int(6) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `plate_no` varchar(50) NOT NULL,
  `odometer` int(11) NOT NULL,
  `inspection` datetime NOT NULL COMMENT 'time and date',
  `location` varchar(50) NOT NULL,
  `validity` date NOT NULL,
  `inspector` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_trip_rate`
--

CREATE TABLE `db_trip_rate` (
  `trip_id` int(6) NOT NULL,
  `client` varchar(25) NOT NULL,
  `delivery` varchar(40) NOT NULL,
  `city` varchar(22) NOT NULL COMMENT 'municipality',
  `4wh` varchar(9) NOT NULL,
  `6wh` varchar(9) NOT NULL,
  `10wh` varchar(9) NOT NULL,
  `tractor` varchar(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_trip_rate`
--

INSERT INTO `db_trip_rate` (`trip_id`, `client`, `delivery`, `city`, `4wh`, `6wh`, `10wh`, `tractor`) VALUES
(1, 'LF LOGISTICS', 'ZETRA M.E.', 'Manila', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(2, 'LF LOGISTICS', 'YULEFEST CORP KFC', 'Caloocan', '3,929.96', '4,461.10', '5,672.33', '8,755.04'),
(3, 'LF LOGISTICS', 'YULEFEST CORP KFC', 'Caloocan', '3,929.96', '4,461.10', '5,672.33', '8,755.04'),
(4, 'LF LOGISTICS', 'YULEFEST CORP GTGF', 'Caloocan', '3,929.96', '4,461.10', '5,672.33', '8,755.04'),
(5, 'LF LOGISTICS', 'WSTCO PHILIPPINES, INC.', 'Manila', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(6, 'LF LOGISTICS', 'WESTERN CAROLINE TRADING CO.', 'Manila', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(7, 'LF LOGISTICS', 'WENPHIL INC - ERMITA', 'Manila', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(8, 'LF LOGISTICS', 'WENPHIL INC - ERMITA', 'Manila', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(9, 'LF LOGISTICS', 'WATSONS - ACSIE', 'Taguig', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(10, 'LF LOGISTICS', 'WATSONS - ACSIE', 'Taguig', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(11, 'LF LOGISTICS', 'WAFFLE TIME INC.', 'Pasig', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(12, 'LF LOGISTICS', 'WAFFLE TIME INC.', 'Pasig', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(13, 'LF LOGISTICS', 'VELOCE DISTRIBUTIONS INC', 'Cainta', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(14, 'LF LOGISTICS', 'VELOCE DISTRIBUTIONS INC', 'Cainta', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(15, 'LF LOGISTICS', 'UNIONTRADE SRL', 'Manila', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(16, 'LF LOGISTICS', 'UNIONTRADE SRL', 'Manila', '3,455.49', '4,038.35', '5,089.77', '7,564.98'),
(17, 'LF LOGISTICS', 'UNILOGIX INC', 'Paranaque', '3,187.63', '3,770.50', '4,687.98', '7,163.20');

-- --------------------------------------------------------

--
-- Table structure for table `db_trip_ticket`
--

CREATE TABLE `db_trip_ticket` (
  `ticket_id` int(8) NOT NULL COMMENT 'Trip Ticket',
  `vehicle_id` varchar(255) NOT NULL COMMENT 'Vehicle ',
  `customer` varchar(256) NOT NULL COMMENT 'Customer ID',
  `account` varchar(256) NOT NULL COMMENT 'Account of the Customer',
  `trip_date` date NOT NULL,
  `start_time` time NOT NULL,
  `time_warehouse` datetime NOT NULL,
  `time_loaded` datetime NOT NULL,
  `time_to_cust` datetime NOT NULL,
  `time_unloaded` datetime NOT NULL,
  `time_to_garage` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `driver` varchar(25) NOT NULL COMMENT 'Driver Emp ID',
  `helper1` varchar(255) NOT NULL COMMENT 'Helper Emp ID',
  `helper2` varchar(255) NOT NULL COMMENT 'Helper Emp ID',
  `pickup_loc` varchar(25) NOT NULL COMMENT 'Pickup Location ID',
  `del_loc` varchar(25) NOT NULL COMMENT 'Delivery Location ID',
  `comment` varchar(255) NOT NULL,
  `billed` int(1) NOT NULL,
  `finished` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `userId` int(5) NOT NULL,
  `role_id` int(11) NOT NULL COMMENT 'User Role ID',
  `emp_id` int(6) NOT NULL COMMENT 'employee ID',
  `email` varchar(25) NOT NULL,
  `pass` varchar(10) NOT NULL COMMENT 'password credentials',
  `pass_hash` varchar(260) NOT NULL,
  `user_hash` varchar(256) NOT NULL COMMENT 'User Hash',
  `join_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`userId`, `role_id`, `emp_id`, `email`, `pass`, `pass_hash`, `user_hash`, `join_date`, `last_login`, `active`) VALUES
(1, 1, 7, 'minepremium013@gmail.com', '123', '$2y$10$ELnHneZyHma9Du0AAdw6qOB6UhLtGb4mqAJIW3JZLGQU2go2Gi1Oe', 'bSzq8D249Jvw', '2018-03-27 22:01:43', '0000-00-00 00:00:00', 0),
(14, 7, 12, 'bieber@gmail.com', 'bibi', '$2y$10$h8bU.erwSTMPcaNcxdXlrOjRtCaXnMMC4zFLWWpvoWn8OPDXLV1..', 'Sx96P875phzN', '2018-04-05 19:24:48', '0000-00-00 00:00:00', 0),
(13, 5, 3, 'edshee@gmail.com', 'ed', '$2y$10$LxJU8I8Il.g7bkfIQqJQtu7LjBPzUD/enrh3/FnpaaviBpw4LCbja', 'N6tDnqwqwmMz', '2018-04-04 22:28:20', '0000-00-00 00:00:00', 0),
(12, 2, 6, 'alfonso@gmail.com', '123', '$2y$10$YTxuXOozm5qhBdLv4uExsOx18T/hwRDGmM472ev/KOsVOOy.bPHLK', 'GXgzlmWJnkqf', '2018-04-03 21:51:54', '0000-00-00 00:00:00', 0),
(11, 5, 1, 'juandelac@gmail.com', 'juan', '$2y$10$.S9UDIsn8zN2Gz0SbUk5tO.I5UghVXXPYeEKgILeZEP7YgJWlzqRK', 'CDbw3hJRJHhm', '2018-04-03 03:10:42', '0000-00-00 00:00:00', 0),
(15, 5, 5, 'unicohijo@gmail.com', '12345', '$2y$10$Xdd97NH.t7Qd17mzQ41hBO2yYYXBzHOh3JJW3YlnVUW4qwaeU4AVa', 'KNy236rZ92JR', '2018-04-06 03:12:49', '0000-00-00 00:00:00', 0),
(16, 5, 2, 'dalisay@gmail.com', 'dalisay', '$2y$10$vTM15YOQPSkhYJJdIeRt2uHG04wJPXmvGZvrmDmq5KnIblB6HtOmC', 'LvhMmst8Gk5m', '2018-04-12 22:49:25', '0000-00-00 00:00:00', 0),
(17, 5, 4, 'leeminho@gmail.com', 'leehe', '$2y$10$Un9aAjrkmiKmghT3AdRqTeugZRjfZO4O0lZ6gl9ftU9t6kY4vLt2u', 'NThg7NfjhT7g', '2018-04-14 21:32:08', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_user_role`
--

CREATE TABLE `db_user_role` (
  `role_id` int(3) NOT NULL,
  `role_name` varchar(30) NOT NULL,
  `role_desc` varchar(200) NOT NULL,
  `admin` int(1) NOT NULL,
  `customer` int(1) NOT NULL,
  `operations` int(1) NOT NULL,
  `vehicle` int(1) NOT NULL,
  `finance` int(1) NOT NULL,
  `settings` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user_role`
--

INSERT INTO `db_user_role` (`role_id`, `role_name`, `role_desc`, `admin`, `customer`, `operations`, `vehicle`, `finance`, `settings`) VALUES
(1, 'System Admin', 'System Administrator', 1, 1, 1, 1, 1, 1),
(2, 'Operations Manager', 'Operations Manager', 0, 1, 1, 0, 0, 1),
(3, 'Admin', 'Admin', 1, 1, 0, 1, 0, 1),
(4, 'Finance', 'Finance', 0, 1, 0, 0, 1, 1),
(5, 'Helper', 'Helper', 0, 0, 0, 0, 0, 1),
(6, 'Management', 'Management, Owners of Company', 1, 1, 1, 1, 1, 1),
(7, 'Dispatcher', 'Dispatch', 0, 1, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_vehicles_detail`
--

CREATE TABLE `db_vehicles_detail` (
  `vehicle_id` int(6) NOT NULL,
  `make` varchar(10) NOT NULL,
  `year_model` varchar(10) NOT NULL,
  `body_type` varchar(23) NOT NULL COMMENT 'Conduction Sticker',
  `plate_no` varchar(37) NOT NULL COMMENT 'Conduction Sticker',
  `engine_no` varchar(21) NOT NULL,
  `chassis_no` varchar(17) NOT NULL,
  `vehicle_category` int(6) NOT NULL,
  `insurance_start_date` varchar(20) NOT NULL,
  `insurance_end_date` varchar(18) NOT NULL,
  `file_path` longtext NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_vehicles_detail`
--

INSERT INTO `db_vehicles_detail` (`vehicle_id`, `make`, `year_model`, `body_type`, `plate_no`, `engine_no`, `chassis_no`, `vehicle_category`, `insurance_start_date`, `insurance_end_date`, `file_path`, `remarks`, `status`) VALUES
(1, 'Faw', '2017', 'Dump Truck', 'QU2661', 'WP10340E321617H095733', 'LFNKRXNL3HAD83567', 1, 'December 1, 2017', 'December 1, 2018', 'QU 2661 - ORCR - 2017.pdf', 'Up to date', 1),
(2, 'Faw', '2017', 'Dump Truck', 'QU2666', 'WP10340E321617H095745', 'LFNKRXNL3HAD83573', 1, 'December 1, 2017', 'December 1, 2018', 'QU 2666 - ORCR - 2017.pdf', 'Up to date', 1),
(3, 'Faw', '2017', 'Dump Truck', 'QU2682', 'WP10340E321617H095739', 'LFNKRXNL3HAD83588', 1, 'December 1, 2017', 'December 1, 2018', 'QU 2682 - ORCR - 2017.pdf', 'Up to date', 1),
(4, 'Faw', '2017', 'Dump Truck', 'QU2660', 'WP10340E321617H095746', 'LFNKRXNL3HAD83566', 1, 'December 1, 2017', 'December 1, 2018', 'QU 2660 - ORCR - 2017.pdf', 'Up to date', 1),
(5, 'Faw', '2017', 'Dump Truck', 'QU2677', 'WP10340E321617H095751', 'LFNKRXNL3HAD83583', 1, 'December 1, 2017', 'December 1, 2018', 'QU 2677 - ORCR - 2017.pdf', 'Up to date', 1),
(7, 'Isuzu', '1999', 'Aluminum Wing Van Truck', 'WVQ467', '6SD1-735431', 'CXY23Q3J-30000001', 2, '', '', '', 'Not up to date', 1),
(8, 'Isuzu', '1999', 'Aluminum Wing Van Truck', 'RMC196', '6WF1-107160', 'CYL51V3W-3001324', 2, '', '', '', 'Vehicle under repair', 1),
(9, 'Isuzu', '1999', 'Aluminum Wing Van Truck', 'AAQ9978', '6SD1-737879', 'CYY23Q3J-3000005', 2, '', '', '', 'Not up to date', 0),
(10, 'Isuzu', '1999', 'Aluminum Wing Van Truck', 'AAQ9004', '6SD1-737879', 'CYY23Q3J-3000005', 2, '', '', 'AAQ9004 - OR - 2017.pdf', '', 1),
(11, 'Mitsubishi', '2014', 'Truck', 'ABB2428', '4D34N95958', 'JL6AXE6H1FKO01690', 0, '', '', '', 'Not up to date', 1),
(12, 'Hino', '2007', 'Tractor Head', 'ACO4611', 'F17D-TF10419', 'SH1FFG-10039', 3, '', '', 'ACO4611 - ORCR - 2017.pdf', 'Up to date', 1);

-- --------------------------------------------------------

--
-- Table structure for table `db_vehicle_category`
--

CREATE TABLE `db_vehicle_category` (
  `veh_categ_id` smallint(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_vehicle_category`
--

INSERT INTO `db_vehicle_category` (`veh_categ_id`, `name`, `description`) VALUES
(0, '4 Wheeler ', 'primary'),
(1, '6 Wheeler', 'danger'),
(2, '10 Wheeler ', 'success'),
(3, 'Tractor Head', 'warning');

-- --------------------------------------------------------

--
-- Table structure for table `db_vehicle_details`
--

CREATE TABLE `db_vehicle_details` (
  `vehicle_id` int(4) NOT NULL,
  `plate_no` varchar(10) NOT NULL,
  `engine_no` varchar(30) NOT NULL,
  `chassis_no` varchar(30) NOT NULL,
  `denomination` varchar(20) NOT NULL,
  `piston_disp` int(5) NOT NULL,
  `cylinders` int(2) NOT NULL,
  `fuel` text NOT NULL,
  `make` text NOT NULL,
  `series` varchar(30) NOT NULL,
  `body_type` varchar(20) NOT NULL,
  `year` int(4) NOT NULL,
  `gross_wt` int(5) NOT NULL,
  `net_wt` int(5) NOT NULL,
  `supplier` int(5) NOT NULL,
  `date_purch` date NOT NULL,
  `file_or` varchar(25) NOT NULL,
  `file_cr` varchar(25) NOT NULL,
  `categ` int(3) NOT NULL COMMENT 'Vehicle Category'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_vehicle_details`
--

INSERT INTO `db_vehicle_details` (`vehicle_id`, `plate_no`, `engine_no`, `chassis_no`, `denomination`, `piston_disp`, `cylinders`, `fuel`, `make`, `series`, `body_type`, `year`, `gross_wt`, `net_wt`, `supplier`, `date_purch`, `file_or`, `file_cr`, `categ`) VALUES
(1, 'ABB2428', '', '', '', 0, 0, '', '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', 1),
(2, '', '123', '123', '123', 123, 12, '1', '1', '1', '1', 1, 1, 1, 1, '0000-00-00', '', '2018-12-31', 2),
(3, '', '', '', '', 0, 0, '', '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', 1),
(4, '', '', '', '', 0, 0, '', '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', 1),
(5, 'abc123', '', '', '', 0, 0, '', '', '', 'ISUZU', 0, 0, 0, 0, '0000-00-00', '', '', 1),
(6, 'RMC196', '', '', '', 0, 0, '', 'ISUZU', '', 'ISUZU', 0, 0, 0, 0, '0000-00-00', '', '', 1),
(7, 'RMC196', '', '', '', 0, 0, '', 'ISUZU', '', 'ISUZU', 0, 0, 0, 0, '0000-00-00', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE `employeeinfo` (
  `emp_id` int(6) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg_date` varchar(10) NOT NULL,
  `db_id` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`emp_id`, `firstname`, `lastname`, `email`, `reg_date`, `db_id`) VALUES
(1234, 'louie', 'pogi', 'email@some.com', '2018-02-06', 1),
(5679, 'myself', 'hello', 'email@some.com', '2018-02-07', 2),
(9876, 'bam', 'panot', 'sdf', '2018-01-06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expenseId` int(6) NOT NULL,
  `cost_center_id` int(4) NOT NULL,
  `account_id` int(8) NOT NULL,
  `project_id` int(6) NOT NULL,
  `expnse_date` date NOT NULL,
  `supplierId` int(6) NOT NULL,
  `invoice_no` varchar(30) NOT NULL,
  `particulars` varchar(300) NOT NULL,
  `total_amt` double(11,2) NOT NULL,
  `vat` double(11,2) NOT NULL,
  `vatInc` double(11,2) NOT NULL,
  `vatEx` double(11,2) NOT NULL,
  `svcCharge` double(10,2) NOT NULL,
  `discount` double(10,2) NOT NULL,
  `note` varchar(200) NOT NULL,
  `scanFileName` longtext NOT NULL,
  `encodedBy` int(4) NOT NULL,
  `encodeDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `acct_check` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Accounting checked entry',
  `acct_check_by` smallint(4) NOT NULL COMMENT 'Accounting Personnel'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finance_info`
--

CREATE TABLE `finance_info` (
  `finance_id` int(1) NOT NULL,
  `branch` int(3) NOT NULL COMMENT 'Branch Code',
  `rdo` int(3) NOT NULL COMMENT 'BIR RDO registered',
  `classification` varchar(20) NOT NULL COMMENT 'Corporate or Individual',
  `report_cycle` varchar(10) NOT NULL COMMENT 'Calendar or Fiscal',
  `fiscal_end` int(2) NOT NULL COMMENT 'Fiscal Month End'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gl_tran`
--

CREATE TABLE `gl_tran` (
  `tran_id` int(12) NOT NULL COMMENT 'Transaction ID',
  `offcl_id` int(12) NOT NULL COMMENT 'Official ID',
  `trans_date` date NOT NULL COMMENT 'Transaction Date',
  `trans_type` int(2) NOT NULL COMMENT 'Transaction Type',
  `ref_no` varchar(20) NOT NULL COMMENT 'Reference No',
  `trans_details` varchar(80) NOT NULL COMMENT 'Transaction Details',
  `encoded_by` int(4) NOT NULL,
  `encodeDate` datetime NOT NULL,
  `acct_check` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Approval Checked',
  `acct_check_by` int(4) NOT NULL COMMENT 'Approved by',
  `acct_check_date` date NOT NULL,
  `acct_note` varchar(200) NOT NULL,
  `hidden` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Hide entry'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='General Ledger Transactions';

--
-- Dumping data for table `gl_tran`
--

INSERT INTO `gl_tran` (`tran_id`, `offcl_id`, `trans_date`, `trans_type`, `ref_no`, `trans_details`, `encoded_by`, `encodeDate`, `acct_check`, `acct_check_by`, `acct_check_date`, `acct_note`, `hidden`) VALUES
(48, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:09:31', 0, 0, '0000-00-00', '', 0),
(47, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:09:31', 0, 0, '0000-00-00', '', 0),
(46, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:09:31', 0, 0, '0000-00-00', '', 0),
(45, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:09:31', 0, 0, '0000-00-00', '', 0),
(44, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:08:17', 0, 0, '0000-00-00', '', 0),
(43, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:08:17', 0, 0, '0000-00-00', '', 0),
(42, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:08:17', 0, 0, '0000-00-00', '', 0),
(41, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:08:17', 0, 0, '0000-00-00', '', 0),
(40, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:08:17', 0, 0, '0000-00-00', '', 0),
(39, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:08:17', 0, 0, '0000-00-00', '', 0),
(38, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:08:17', 0, 0, '0000-00-00', '', 0),
(37, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:08:17', 0, 0, '0000-00-00', '', 0),
(36, 0, '2018-01-06', 1, '', 'Starting Balance', 53, '2018-01-24 18:33:59', 0, 0, '0000-00-00', '', 0),
(35, 0, '2018-01-06', 1, '', 'Starting Balance', 53, '2018-01-24 18:33:59', 0, 0, '0000-00-00', '', 0),
(34, 0, '2018-02-07', 1, '', 'Starting Balance', 53, '2018-01-24 18:33:59', 0, 0, '0000-00-00', '', 0),
(33, 0, '2018-02-06', 1, '', 'Starting Balance', 53, '2018-01-24 18:33:59', 0, 0, '0000-00-00', '', 0),
(32, 0, '2018-01-06', 1, '', 'Starting Balance', 53, '2018-01-24 18:20:00', 0, 0, '0000-00-00', '', 0),
(31, 0, '2018-02-07', 1, '', 'Starting Balance', 53, '2018-01-24 18:20:00', 0, 0, '0000-00-00', '', 0),
(30, 0, '2018-02-06', 1, '', 'Starting Balance', 53, '2018-01-24 18:20:00', 0, 0, '0000-00-00', '', 0),
(29, 0, '2018-02-06', 1, '', 'Starting Balance', 53, '2018-01-24 18:18:33', 0, 0, '0000-00-00', '', 0),
(28, 0, '2018-02-06', 1, '', 'Starting Balance', 53, '2018-01-24 18:16:19', 0, 0, '0000-00-00', '', 0),
(27, 0, '2018-02-06', 1, '', 'Starting Balance', 53, '2018-01-24 18:14:19', 0, 0, '0000-00-00', '', 0),
(49, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:09:31', 0, 0, '0000-00-00', '', 0),
(50, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:09:31', 0, 0, '0000-00-00', '', 0),
(51, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:09:31', 0, 0, '0000-00-00', '', 0),
(52, 0, '2017-12-31', 1, '', 'Starting Balance', 53, '2018-01-25 12:09:31', 0, 0, '0000-00-00', '', 0),
(53, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(54, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(55, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(56, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(57, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(58, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(59, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(60, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(61, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(62, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(63, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(64, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(65, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(66, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(67, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(68, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(69, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(70, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(71, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(72, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(73, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(74, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(75, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(76, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(77, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(78, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(79, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(80, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(81, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(82, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(83, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(84, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(85, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0),
(86, 0, '1970-01-01', 1, '', 'Starting Balance', 56, '2018-03-08 14:21:16', 0, 0, '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gl_tran_details`
--

CREATE TABLE `gl_tran_details` (
  `entry_id` int(10) NOT NULL,
  `tran_id` int(8) NOT NULL COMMENT 'transaction ID',
  `cost_center` int(4) NOT NULL,
  `account` int(6) NOT NULL,
  `project_id` int(6) NOT NULL,
  `amount` double(14,2) NOT NULL,
  `memo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gl_tran_details`
--

INSERT INTO `gl_tran_details` (`entry_id`, `tran_id`, `cost_center`, `account`, `project_id`, `amount`, `memo`) VALUES
(34, 37, 0, 10010, 0, 0.00, ''),
(33, 37, 0, 10004, 0, 0.00, ''),
(32, 37, 0, 10003, 0, 0.00, ''),
(31, 37, 0, 10002, 0, 3.00, ''),
(30, 37, 0, 10001, 0, 1.00, ''),
(29, 37, 0, 10000, 0, 0.00, ''),
(28, 33, 0, 124, 0, -5000.00, ''),
(27, 33, 0, 9876, 0, 4000.03, ''),
(26, 33, 0, 5679, 0, -3000.02, ''),
(25, 33, 0, 1234, 0, 2000.01, ''),
(24, 30, 0, 9876, 0, 4000.03, ''),
(23, 30, 0, 5679, 0, 3000.02, ''),
(22, 30, 0, 1234, 0, 2000.01, ''),
(21, 29, 0, 1234, 0, 2000.01, ''),
(20, 28, 0, 1234, 0, 2000.01, ''),
(19, 27, 0, 1234, 0, 2000.00, ''),
(35, 37, 0, 10011, 0, 0.00, ''),
(36, 37, 0, 10012, 0, 563.03, ''),
(37, 45, 0, 10000, 0, 0.00, ''),
(38, 45, 0, 10001, 0, 1283845.76, ''),
(39, 45, 0, 10002, 0, 3103.41, ''),
(40, 45, 0, 10003, 0, 0.00, ''),
(41, 49, 0, 10004, 0, 0.00, ''),
(42, 50, 0, 10010, 0, 0.00, ''),
(43, 51, 0, 10011, 0, 0.00, ''),
(44, 52, 0, 10012, 0, 563.03, ''),
(45, 64, 0, 0, 0, 0.00, ''),
(46, 71, 0, 0, 0, 0.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `gl_tran_type`
--

CREATE TABLE `gl_tran_type` (
  `type_id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `type_desc` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gl_tran_type`
--

INSERT INTO `gl_tran_type` (`type_id`, `name`, `type_desc`) VALUES
(1, 'Beginning Balance', '');

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees`
--

CREATE TABLE `hr_employees` (
  `emp_id` bigint(20) NOT NULL,
  `salutation` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `name_ext` varchar(25) NOT NULL,
  `b_day` varchar(25) NOT NULL,
  `m_status` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `tel_no` int(25) NOT NULL,
  `perm_add` varchar(255) NOT NULL,
  `perm_zip` int(6) NOT NULL,
  `curr_add` varchar(255) NOT NULL,
  `curr_zip` int(6) NOT NULL,
  `bus_unit` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `rep_manager` varchar(50) NOT NULL,
  `date_joined` date NOT NULL,
  `emp_status` varchar(25) NOT NULL,
  `tran_id` int(8) NOT NULL COMMENT 'Transaction ID'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_employees`
--

INSERT INTO `hr_employees` (`emp_id`, `salutation`, `last_name`, `first_name`, `middle_name`, `name_ext`, `b_day`, `m_status`, `mobile`, `email`, `gender`, `nationality`, `tel_no`, `perm_add`, `perm_zip`, `curr_add`, `curr_zip`, `bus_unit`, `dept`, `job_title`, `rep_manager`, `date_joined`, `emp_status`, `tran_id`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(2, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(3, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(4, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(5, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(6, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(7, 'Ms', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(8, 'Ms', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(9, 'Ms', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(10, 'Ms', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(11, 'MR', 'dsafdfa', '', 'Que', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '0000-00-00', '', 0),
(12, 'MR', 'gdsgdf', 'gasdfga', 'Que', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', 'Driver', '', '0000-00-00', '', 0),
(13, 'Ms', 'Hidalgo', 'Faith', 'Alemania', '', '', '', '', 'faith@northward.ph', '', '', 0, '', 0, '', 0, '', 'Administrative Department', 'Helper', '', '0000-00-00', '', 0),
(14, 'MR', 'Dela Cruz', 'Juan', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', 'Driver', '', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees_compensations`
--

CREATE TABLE `hr_employees_compensations` (
  `compensation_id` int(6) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `base_pay` double(25,2) NOT NULL,
  `pay_interval` varchar(25) NOT NULL,
  `salary_grd` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees_dependent`
--

CREATE TABLE `hr_employees_dependent` (
  `dep_id` int(6) NOT NULL,
  `emp_id` int(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mid_name` varchar(50) NOT NULL,
  `dep_rel` varchar(25) NOT NULL,
  `dep_bday` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees_econtact`
--

CREATE TABLE `hr_employees_econtact` (
  `econ_id` int(6) NOT NULL,
  `emp_id` int(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact_no` int(255) NOT NULL,
  `contact_address` varchar(50) NOT NULL,
  `contact_rel` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees_govid`
--

CREATE TABLE `hr_employees_govid` (
  `db_id` int(6) NOT NULL,
  `emp_id` int(25) NOT NULL,
  `id_type` tinyint(2) NOT NULL,
  `id_no` varchar(50) NOT NULL,
  `valid_until` date NOT NULL COMMENT 'expiration date',
  `file_location` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees_govno`
--

CREATE TABLE `hr_employees_govno` (
  `govno_id` int(6) NOT NULL,
  `emp_id` int(25) NOT NULL,
  `tin_no` varchar(25) NOT NULL,
  `sss_no` varchar(25) NOT NULL,
  `pagibig_no` varchar(25) NOT NULL,
  `philhealth_no` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees_id_type`
--

CREATE TABLE `hr_employees_id_type` (
  `id_no` int(6) NOT NULL,
  `id_type` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_employees_id_type`
--

INSERT INTO `hr_employees_id_type` (`id_no`, `id_type`) VALUES
(1, 'Drivers License'),
(2, 'PRC ID'),
(3, 'Passport');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(7) NOT NULL,
  `item_categ` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(60) NOT NULL,
  `tax_type` int(3) NOT NULL COMMENT 'vat or vat exempt',
  `purchase_acct` int(6) NOT NULL,
  `sales_acct` int(6) NOT NULL,
  `reorder` int(10) NOT NULL COMMENT 'reorder level'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_price_purch`
--

CREATE TABLE `item_price_purch` (
  `item_price_id` int(10) NOT NULL,
  `supplier_id` int(6) NOT NULL,
  `item_id` int(7) NOT NULL,
  `unit_purch_price` decimal(8,2) NOT NULL,
  `unit_purch_tax` decimal(8,2) NOT NULL,
  `date` date NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_price_sales`
--

CREATE TABLE `item_price_sales` (
  `item_sale_id` int(10) NOT NULL,
  `item_id` int(7) NOT NULL,
  `unit_sale_price` decimal(8,2) NOT NULL,
  `tax_inclusive` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'vat inclusive',
  `date` date NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_type`
--

CREATE TABLE `item_type` (
  `item_type_id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(40) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_type`
--

INSERT INTO `item_type` (`item_type_id`, `name`, `description`, `active`) VALUES
(1, 'Inventory', '0', 1),
(2, 'Non-inventory', '0', 1),
(3, 'Service', '0', 1),
(4, 'Bundle', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mail_settings`
--

CREATE TABLE `mail_settings` (
  `id` int(1) NOT NULL,
  `sysname` varchar(50) NOT NULL,
  `sysemail` varchar(50) NOT NULL,
  `sysreplyname` varchar(50) NOT NULL,
  `sysreplyemail` varchar(50) NOT NULL,
  `sysbcc` varchar(50) NOT NULL,
  `salesname` varchar(50) NOT NULL,
  `salesemail` varchar(50) NOT NULL,
  `salesreplyname` varchar(50) NOT NULL,
  `salesreplyemail` varchar(50) NOT NULL,
  `salesbcc` varchar(50) NOT NULL,
  `purchname` varchar(50) NOT NULL,
  `purchemail` varchar(50) NOT NULL,
  `purchreplyname` varchar(50) NOT NULL,
  `purchreplyemail` varchar(50) NOT NULL,
  `purchbcc` varchar(50) NOT NULL,
  `host` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `protocol` varchar(4) NOT NULL,
  `port` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(25) NOT NULL,
  `module_desc` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_id`, `module_name`, `module_desc`) VALUES
(1, 'Customer Management', ''),
(2, 'Sales', ''),
(3, 'Supplier Management', ''),
(4, 'Purchasing', ''),
(5, 'Inventory', ''),
(6, 'Project Management', ''),
(7, 'Admin', ''),
(8, 'Human Resource', ''),
(9, 'Finance', ''),
(10, 'Settings', '');

-- --------------------------------------------------------

--
-- Table structure for table `module_component`
--

CREATE TABLE `module_component` (
  `component_id` smallint(4) NOT NULL,
  `name` varchar(25) NOT NULL,
  `parent` tinyint(2) NOT NULL COMMENT 'parent module'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(6) NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `project_desc` varchar(50) NOT NULL,
  `project_size` float(14,2) NOT NULL COMMENT 'in pesos',
  `referred_by` smallint(4) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `status_note` tinytext NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_referrer`
--

CREATE TABLE `project_referrer` (
  `referrer_id` smallint(4) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `status_id` smallint(3) NOT NULL,
  `status` varchar(30) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `db_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL COMMENT 'user ID',
  `emp_id` int(6) NOT NULL COMMENT 'employee ID',
  `text` varchar(250) NOT NULL,
  `end_date` date NOT NULL COMMENT 'Valid until date',
  `created_by` int(5) NOT NULL,
  `created_date` datetime NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`db_id`, `user_id`, `emp_id`, `text`, `end_date`, `created_by`, `created_date`, `active`) VALUES
(1, 69, 0, 'You owe me. ', '2018-03-15', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reset_pass`
--

CREATE TABLE `reset_pass` (
  `resetId` int(6) NOT NULL,
  `userId` int(6) NOT NULL,
  `resethash` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_pass`
--

INSERT INTO `reset_pass` (`resetId`, `userId`, `resethash`, `date`) VALUES
(25, 53, '8NsqMLRmR9', '2017-12-23 00:36:11'),
(24, 53, 'yhHSvJChK8', '2017-12-23 00:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `salesperson`
--

CREATE TABLE `salesperson` (
  `id` int(6) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `inactive` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(6) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `trade_name` varchar(50) NOT NULL,
  `business_type` int(1) NOT NULL,
  `owner_last_name` varchar(30) NOT NULL,
  `owner_first_name` varchar(30) NOT NULL,
  `owner_middle_name` varchar(30) NOT NULL,
  `vendor_categ` int(1) NOT NULL COMMENT '1 - goods 2 - services 3 -both',
  `unit_bldg_no` varchar(30) NOT NULL COMMENT 'House or Unit, Bldg No',
  `street` varchar(30) NOT NULL,
  `barangay` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL COMMENT 'Municipality or City',
  `province` varchar(30) NOT NULL,
  `tax_type` varchar(7) NOT NULL COMMENT 'Vat or Non Vat',
  `tin` int(9) NOT NULL,
  `favorite` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `status` int(2) NOT NULL COMMENT 'supplier status'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `business_name`, `trade_name`, `business_type`, `owner_last_name`, `owner_first_name`, `owner_middle_name`, `vendor_categ`, `unit_bldg_no`, `street`, `barangay`, `district`, `province`, `tax_type`, `tin`, `favorite`, `active`, `status`) VALUES
(1, 'LLMG CONSTRUCTION AND TRADING, INC.', '', 0, '', '', '', 0, '', '', '', '', '', '', 8812723, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_category`
--

CREATE TABLE `supplier_category` (
  `supp_categ_id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent` int(4) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_category`
--

INSERT INTO `supplier_category` (`supp_categ_id`, `name`, `parent`, `active`) VALUES
(1, 'Office Supplies', 0, 1),
(2, 'Fuel', 0, 1),
(3, 'Utilities', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_status`
--

CREATE TABLE `supplier_status` (
  `status_id` int(11) NOT NULL,
  `description` varchar(15) NOT NULL,
  `inactive` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax_type`
--

CREATE TABLE `tax_type` (
  `tax_type_id` int(3) NOT NULL,
  `name` int(30) NOT NULL,
  `description` varchar(60) NOT NULL,
  `rate` double(2,2) NOT NULL,
  `sale` int(1) NOT NULL,
  `purchase` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trip_rate`
--

CREATE TABLE `trip_rate` (
  `rate_id` int(4) NOT NULL,
  `vehicle_categ` tinyint(2) NOT NULL,
  `customer` int(5) NOT NULL,
  `account` int(5) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `vat_ex` tinyint(1) NOT NULL DEFAULT 1,
  `end_date` date NOT NULL COMMENT 'Valid Until',
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `declared` int(1) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `unit` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trip_ticket`
--

CREATE TABLE `trip_ticket` (
  `ticket_id` int(8) NOT NULL COMMENT 'Trip Ticket',
  `vehicle_id` int(8) NOT NULL COMMENT 'Vehicle ',
  `customer` int(6) NOT NULL COMMENT 'Customer ID',
  `account` int(5) NOT NULL COMMENT 'Account of the Customer',
  `trip_date` date NOT NULL,
  `start_time` datetime NOT NULL,
  `time_warehouse` datetime NOT NULL,
  `time_loaded` datetime NOT NULL,
  `time_to_cust` datetime NOT NULL,
  `time_unloaded` datetime NOT NULL,
  `time_to_garage` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `driver` int(5) NOT NULL COMMENT 'Driver Emp ID',
  `helper1` int(5) NOT NULL COMMENT 'Helper Emp ID',
  `helper2` int(5) NOT NULL COMMENT 'Helper Emp ID',
  `pickup_loc` int(5) NOT NULL COMMENT 'Pickup Location ID',
  `del_loc` int(5) NOT NULL COMMENT 'Delivery Location ID',
  `trip_rate` int(5) NOT NULL COMMENT 'Trip Rate ID',
  `comment` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip_ticket`
--

INSERT INTO `trip_ticket` (`ticket_id`, `vehicle_id`, `customer`, `account`, `trip_date`, `start_time`, `time_warehouse`, `time_loaded`, `time_to_cust`, `time_unloaded`, `time_to_garage`, `end_time`, `driver`, `helper1`, `helper2`, `pickup_loc`, `del_loc`, `trip_rate`, `comment`) VALUES
(1, 1, 1, 0, '2018-03-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 13, 0, 0, 0, 0, ''),
(2, 1, 0, 0, '2018-03-21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 13, 13, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(5) NOT NULL,
  `role_id` int(11) NOT NULL COMMENT 'User Role ID',
  `emp_id` int(6) NOT NULL COMMENT 'employee ID',
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass_hash` varchar(260) NOT NULL,
  `user_hash` varchar(256) NOT NULL COMMENT 'User Hash',
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `attempts` int(1) NOT NULL DEFAULT 0,
  `locked` int(1) NOT NULL DEFAULT 0,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `inactive` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `role_id`, `emp_id`, `username`, `email`, `pass_hash`, `user_hash`, `verified`, `attempts`, `locked`, `join_date`, `last_login`, `inactive`) VALUES
(53, 0, 0, '', 'doc@louiegayao.com', '$2y$10$NTB3W5MikkKTDfLxSBcLrekVAholxnC9VI2OgeHoEDnGQP1AjEifC', 'jpqJSVKj3KDQ', 1, 0, 0, '2017-12-22 05:59:43', '2018-03-24 22:57:39', 0),
(69, 0, 0, '', 'minepremium013@gmail.com', '$2y$10$5fM4u9MGthLznb8XVwSKquEYGBazOmA7U.xXbd4pptprUgIEy5k/.', 'Z3gpQYxqrqDM', 1, 0, 0, '2018-03-08 02:36:12', '2018-03-25 02:56:19', 0),
(56, 0, 0, '', 'faith@llmgconstruction.com', '$2y$10$DweNO9m2QXPbyYif9XgVgOUmH4iIVyIrayqVzq/p11kCtOxirFZBi', 'plHlzsWCPt2k', 1, 0, 0, '2017-12-27 01:59:15', '2018-03-28 20:22:57', 0),
(62, 0, 0, '', 'jade@llmgconstruction.com', '$2y$10$MlVkgw8TRHgtvZ9ySo.lO.06wy6t3wZ6U64lQdFR5xej0oeV42Gym', 'sC8TPvm2xqkM', 1, 0, 0, '2017-12-27 17:45:14', '2017-12-27 17:45:35', 0),
(70, 0, 0, '', 'minepremium013@gmail.com', '$2y$10$PLars2vhJrgeq9e7Bg4i8uPkX8P9iTvs0stoA7Uy4b1pNvrpBUXHO', 'NPn7Sd84V7wz', 1, 0, 0, '2018-03-27 21:05:47', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(3) NOT NULL,
  `role_name` varchar(30) NOT NULL,
  `role_desc` varchar(200) NOT NULL,
  `crm` int(1) NOT NULL,
  `sales` int(1) NOT NULL,
  `supplier` int(1) NOT NULL,
  `purchasing` int(1) NOT NULL,
  `inventory` int(1) NOT NULL,
  `project` int(1) NOT NULL,
  `admin` int(1) NOT NULL,
  `settings` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`, `role_desc`, `crm`, `sales`, `supplier`, `purchasing`, `inventory`, `project`, `admin`, `settings`) VALUES
(1, 'System Admin', 'System Administrator', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_category`
--

CREATE TABLE `vehicle_category` (
  `veh_categ_id` smallint(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_category`
--

INSERT INTO `vehicle_category` (`veh_categ_id`, `name`, `description`) VALUES
(1, '4 Wheeler ', 'primary'),
(2, '6 Wheeler', 'danger'),
(3, '10 Wheeler ', 'success'),
(4, 'Tractor Head', 'warning');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `vehicle_id` int(4) NOT NULL,
  `plate_no` varchar(10) NOT NULL,
  `engine_no` varchar(30) NOT NULL,
  `chassis_no` varchar(30) NOT NULL,
  `denomination` varchar(20) NOT NULL,
  `piston_disp` int(5) NOT NULL,
  `cylinders` int(2) NOT NULL,
  `fuel` text NOT NULL,
  `make` text NOT NULL,
  `series` varchar(30) NOT NULL,
  `body_type` varchar(20) NOT NULL,
  `year` int(4) NOT NULL,
  `gross_wt` int(5) NOT NULL,
  `net_wt` int(5) NOT NULL,
  `supplier` int(5) NOT NULL,
  `date_purch` date NOT NULL,
  `file_or` varchar(25) NOT NULL,
  `file_cr` varchar(25) NOT NULL,
  `categ` int(3) NOT NULL COMMENT 'Vehicle Category'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`vehicle_id`, `plate_no`, `engine_no`, `chassis_no`, `denomination`, `piston_disp`, `cylinders`, `fuel`, `make`, `series`, `body_type`, `year`, `gross_wt`, `net_wt`, `supplier`, `date_purch`, `file_or`, `file_cr`, `categ`) VALUES
(1, 'ABB2428', '', '', '', 0, 0, '', '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', 1),
(2, '', '123', '123', '123', 123, 12, '1', '1', '1', '1', 1, 1, 1, 1, '0000-00-00', '', '2018-12-31', 2),
(3, '', '', '', '', 0, 0, '', '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', 1),
(4, '', '', '', '', 0, 0, '', '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', 1),
(5, 'abc123', '', '', '', 0, 0, '', '', '', 'ISUZU', 0, 0, 0, 0, '0000-00-00', '', '', 1),
(6, 'RMC196', '', '', '', 0, 0, '', 'ISUZU', '', 'ISUZU', 0, 0, 0, 0, '0000-00-00', '', '', 1),
(7, 'RMC196', '', '', '', 0, 0, '', 'ISUZU', '', 'ISUZU', 0, 0, 0, 0, '0000-00-00', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acct_db_id`);

--
-- Indexes for table `account_type`
--
ALTER TABLE `account_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `acct_close`
--
ALTER TABLE `acct_close`
  ADD PRIMARY KEY (`close_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `audit_trail_acct`
--
ALTER TABLE `audit_trail_acct`
  ADD PRIMARY KEY (`audit_id`);

--
-- Indexes for table `audit_trail_trip`
--
ALTER TABLE `audit_trail_trip`
  ADD PRIMARY KEY (`audit_trip_id`);

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`bank_acct_id`);

--
-- Indexes for table `bank_account_type`
--
ALTER TABLE `bank_account_type`
  ADD PRIMARY KEY (`bank_acct_type_id`);

--
-- Indexes for table `bank_currency`
--
ALTER TABLE `bank_currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_type`
--
ALTER TABLE `business_type`
  ADD PRIMARY KEY (`business_type_id`);

--
-- Indexes for table `company_industry`
--
ALTER TABLE `company_industry`
  ADD PRIMARY KEY (`industry_id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`comp_info_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `contacts_type`
--
ALTER TABLE `contacts_type`
  ADD PRIMARY KEY (`contact_type_id`);

--
-- Indexes for table `cost_center`
--
ALTER TABLE `cost_center`
  ADD PRIMARY KEY (`center_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `customer1`
--
ALTER TABLE `customer1`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_status`
--
ALTER TABLE `customer_status`
  ADD PRIMARY KEY (`cust_status_id`);

--
-- Indexes for table `customer_type`
--
ALTER TABLE `customer_type`
  ADD PRIMARY KEY (`cust_type_id`);

--
-- Indexes for table `db_announcements`
--
ALTER TABLE `db_announcements`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `db_company_info`
--
ALTER TABLE `db_company_info`
  ADD PRIMARY KEY (`comp_info_id`);

--
-- Indexes for table `db_customer`
--
ALTER TABLE `db_customer`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `db_hr_employees`
--
ALTER TABLE `db_hr_employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `db_hr_employees_compensations`
--
ALTER TABLE `db_hr_employees_compensations`
  ADD PRIMARY KEY (`compensation_id`);

--
-- Indexes for table `db_hr_employees_govno`
--
ALTER TABLE `db_hr_employees_govno`
  ADD PRIMARY KEY (`govno_id`);

--
-- Indexes for table `db_inspection_report`
--
ALTER TABLE `db_inspection_report`
  ADD PRIMARY KEY (`inspection_id`);

--
-- Indexes for table `db_trip_rate`
--
ALTER TABLE `db_trip_rate`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `db_trip_ticket`
--
ALTER TABLE `db_trip_ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `db_user_role`
--
ALTER TABLE `db_user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `db_vehicles_detail`
--
ALTER TABLE `db_vehicles_detail`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `db_vehicle_category`
--
ALTER TABLE `db_vehicle_category`
  ADD PRIMARY KEY (`veh_categ_id`);

--
-- Indexes for table `db_vehicle_details`
--
ALTER TABLE `db_vehicle_details`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenseId`);

--
-- Indexes for table `finance_info`
--
ALTER TABLE `finance_info`
  ADD PRIMARY KEY (`finance_id`);

--
-- Indexes for table `gl_tran`
--
ALTER TABLE `gl_tran`
  ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `gl_tran_details`
--
ALTER TABLE `gl_tran_details`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `gl_tran_type`
--
ALTER TABLE `gl_tran_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `hr_employees`
--
ALTER TABLE `hr_employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `hr_employees_compensations`
--
ALTER TABLE `hr_employees_compensations`
  ADD PRIMARY KEY (`compensation_id`);

--
-- Indexes for table `hr_employees_dependent`
--
ALTER TABLE `hr_employees_dependent`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `hr_employees_govno`
--
ALTER TABLE `hr_employees_govno`
  ADD PRIMARY KEY (`govno_id`);

--
-- Indexes for table `hr_employees_id_type`
--
ALTER TABLE `hr_employees_id_type`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_price_purch`
--
ALTER TABLE `item_price_purch`
  ADD PRIMARY KEY (`item_price_id`);

--
-- Indexes for table `item_price_sales`
--
ALTER TABLE `item_price_sales`
  ADD PRIMARY KEY (`item_sale_id`);

--
-- Indexes for table `item_type`
--
ALTER TABLE `item_type`
  ADD PRIMARY KEY (`item_type_id`);

--
-- Indexes for table `mail_settings`
--
ALTER TABLE `mail_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `module_component`
--
ALTER TABLE `module_component`
  ADD PRIMARY KEY (`component_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `reset_pass`
--
ALTER TABLE `reset_pass`
  ADD PRIMARY KEY (`resetId`);

--
-- Indexes for table `salesperson`
--
ALTER TABLE `salesperson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `supplier_category`
--
ALTER TABLE `supplier_category`
  ADD PRIMARY KEY (`supp_categ_id`);

--
-- Indexes for table `supplier_status`
--
ALTER TABLE `supplier_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `trip_ticket`
--
ALTER TABLE `trip_ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  ADD PRIMARY KEY (`veh_categ_id`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `acct_db_id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'Database Account ID', AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `account_type`
--
ALTER TABLE `account_type`
  MODIFY `type_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `acct_close`
--
ALTER TABLE `acct_close`
  MODIFY `close_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `db_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `audit_trail_acct`
--
ALTER TABLE `audit_trail_acct`
  MODIFY `audit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `audit_trail_trip`
--
ALTER TABLE `audit_trail_trip`
  MODIFY `audit_trip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_account`
--
ALTER TABLE `bank_account`
  MODIFY `bank_acct_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_account_type`
--
ALTER TABLE `bank_account_type`
  MODIFY `bank_acct_type_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bank_currency`
--
ALTER TABLE `bank_currency`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_type`
--
ALTER TABLE `business_type`
  MODIFY `business_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_industry`
--
ALTER TABLE `company_industry`
  MODIFY `industry_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `comp_info_id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactId` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts_type`
--
ALTER TABLE `contacts_type`
  MODIFY `contact_type_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cost_center`
--
ALTER TABLE `cost_center`
  MODIFY `center_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `supplier_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer1`
--
ALTER TABLE `customer1`
  MODIFY `customer_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_status`
--
ALTER TABLE `customer_status`
  MODIFY `cust_status_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_type`
--
ALTER TABLE `customer_type`
  MODIFY `cust_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_announcements`
--
ALTER TABLE `db_announcements`
  MODIFY `db_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `db_company_info`
--
ALTER TABLE `db_company_info`
  MODIFY `comp_info_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_customer`
--
ALTER TABLE `db_customer`
  MODIFY `supplier_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_hr_employees`
--
ALTER TABLE `db_hr_employees`
  MODIFY `emp_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `db_hr_employees_govno`
--
ALTER TABLE `db_hr_employees_govno`
  MODIFY `govno_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_inspection_report`
--
ALTER TABLE `db_inspection_report`
  MODIFY `inspection_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_trip_rate`
--
ALTER TABLE `db_trip_rate`
  MODIFY `trip_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `db_trip_ticket`
--
ALTER TABLE `db_trip_ticket`
  MODIFY `ticket_id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Trip Ticket';

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `db_user_role`
--
ALTER TABLE `db_user_role`
  MODIFY `role_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db_vehicles_detail`
--
ALTER TABLE `db_vehicles_detail`
  MODIFY `vehicle_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `db_vehicle_category`
--
ALTER TABLE `db_vehicle_category`
  MODIFY `veh_categ_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_vehicle_details`
--
ALTER TABLE `db_vehicle_details`
  MODIFY `vehicle_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  MODIFY `db_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenseId` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finance_info`
--
ALTER TABLE `finance_info`
  MODIFY `finance_id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gl_tran`
--
ALTER TABLE `gl_tran`
  MODIFY `tran_id` int(12) NOT NULL AUTO_INCREMENT COMMENT 'Transaction ID', AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `gl_tran_details`
--
ALTER TABLE `gl_tran_details`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `gl_tran_type`
--
ALTER TABLE `gl_tran_type`
  MODIFY `type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hr_employees`
--
ALTER TABLE `hr_employees`
  MODIFY `emp_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hr_employees_dependent`
--
ALTER TABLE `hr_employees_dependent`
  MODIFY `dep_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_employees_govno`
--
ALTER TABLE `hr_employees_govno`
  MODIFY `govno_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_employees_id_type`
--
ALTER TABLE `hr_employees_id_type`
  MODIFY `id_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_price_purch`
--
ALTER TABLE `item_price_purch`
  MODIFY `item_price_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_price_sales`
--
ALTER TABLE `item_price_sales`
  MODIFY `item_sale_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_type`
--
ALTER TABLE `item_type`
  MODIFY `item_type_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mail_settings`
--
ALTER TABLE `mail_settings`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `module_component`
--
ALTER TABLE `module_component`
  MODIFY `component_id` smallint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_status`
--
ALTER TABLE `project_status`
  MODIFY `status_id` smallint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `db_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reset_pass`
--
ALTER TABLE `reset_pass`
  MODIFY `resetId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `salesperson`
--
ALTER TABLE `salesperson`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier_category`
--
ALTER TABLE `supplier_category`
  MODIFY `supp_categ_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier_status`
--
ALTER TABLE `supplier_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_ticket`
--
ALTER TABLE `trip_ticket`
  MODIFY `ticket_id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Trip Ticket', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  MODIFY `veh_categ_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `vehicle_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
