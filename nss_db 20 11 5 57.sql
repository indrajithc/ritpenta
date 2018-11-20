-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2018 at 12:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nss_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

CREATE TABLE `class_details` (
  `classid` varchar(50) NOT NULL,
  `courseid` varchar(50) NOT NULL,
  `semid` int(11) NOT NULL,
  `branch_or_specialisation` varchar(100) NOT NULL,
  `deptname` varchar(100) NOT NULL,
  `active` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_details`
--

INSERT INTO `class_details` (`classid`, `courseid`, `semid`, `branch_or_specialisation`, `deptname`, `active`) VALUES
('PG1', 'MTECH', 1, 'TRANSPORTATION ENGINEERING', 'CIVIL', 'YES'),
('PG10', 'MTECH', 2, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'YES'),
('PG11', 'MTECH', 3, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'NO'),
('PG12', 'MTECH', 4, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'NO'),
('PG13', 'MTECH', 1, 'INDUSTRIAL DRIVES AND CONTROL', 'ELECTRICAL AND ELECTRONICS ', 'YES'),
('PG14', 'MTECH', 2, 'INDUSTRIAL DRIVES AND CONTROL', 'ELECTRICAL AND ELECTRONICS ', 'YES'),
('PG15', 'MTECH', 3, 'INDUSTRIAL DRIVES AND CONTROL', 'ELECTRICAL AND ELECTRONICS ', 'NO'),
('PG16', 'MTECH', 4, 'INDUSTRIAL DRIVES AND CONTROL', 'ELECTRICAL AND ELECTRONICS ', 'NO'),
('PG17', 'MTECH', 1, 'ADVANCED COMMUNICATION AND INFORMATION SYSTEM', 'ELECTRONICS AND COMMUNICATION', 'YES'),
('PG18', 'MTECH', 2, 'ADVANCED COMMUNICATION AND INFORMATION SYSTEM', 'ELECTRONICS AND COMMUNICATION', 'YES'),
('PG19', 'MTECH', 3, 'ADVANCED COMMUNICATION AND INFORMATION SYSTEM', 'ELECTRONICS AND COMMUNICATION', 'NO'),
('PG2', 'MTECH', 2, 'TRANSPORTATION ENGINEERING', 'CIVIL', 'YES'),
('PG20', 'MTECH', 4, 'ADVANCED COMMUNICATION AND INFORMATION SYSTEM', 'ELECTRONICS AND COMMUNICATION', 'NO'),
('PG21', 'MTECH', 1, 'ADVANCED ELECTRONICS AND COMMUNICATION', 'ELECTRONICS AND COMMUNICATION', 'YES'),
('PG22', 'MTECH', 2, 'ADVANCED ELECTRONICS AND COMMUNICATION', 'ELECTRONICS AND COMMUNICATION', 'YES'),
('PG23', 'MTECH', 3, 'ADVANCED ELECTRONICS AND COMMUNICATION', 'ELECTRONICS AND COMMUNICATION', 'NO'),
('PG24', 'MTECH', 4, 'ADVANCED ELECTRONICS AND COMMUNICATION', 'ELECTRONICS AND COMMUNICATION', 'NO'),
('PG25', 'MCA', 1, 'COMPUTER APPLICATIONS', 'COMPUTER APPLICATIONS', 'YES'),
('PG26', 'MCA', 2, 'COMPUTER APPLICATIONS', 'COMPUTER APPLICATIONS', 'NO'),
('PG27', 'MCA', 3, 'COMPUTER APPLICATIONS', 'COMPUTER APPLICATIONS', 'YES'),
('PG28', 'MCA', 4, 'COMPUTER APPLICATIONS', 'COMPUTER APPLICATIONS', 'YES'),
('PG29', 'MCA', 5, 'COMPUTER APPLICATIONS', 'COMPUTER APPLICATIONS', 'NO'),
('PG3', 'MTECH', 3, 'TRANSPORTATION ENGINEERING', 'CIVIL', 'NO'),
('PG30', 'MCA', 6, 'COMPUTER APPLICATIONS', 'COMPUTER APPLICATIONS', 'NO'),
('PG4', 'MTECH', 4, 'TRANSPORTATION ENGINEERING', 'CIVIL', 'NO'),
('PG5', 'MTECH', 1, 'INDUSTRIAL ENGINEERING AND MANAGEMENT', 'MECHANICAL ', 'YES'),
('PG6', 'MTECH', 2, 'INDUSTRIAL ENGINEERING AND MANAGEMENT', 'MECHANICAL ', 'YES'),
('PG7', 'MTECH', 3, 'INDUSTRIAL ENGINEERING AND MANAGEMENT', 'MECHANICAL ', 'NO'),
('PG8', 'MTECH', 4, 'INDUSTRIAL ENGINEERING AND MANAGEMENT', 'MECHANICAL ', 'NO'),
('PG9', 'MTECH', 1, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'YES'),
('UG1', 'BTECH', 1, 'CIVIL ENGINEERING', 'CIVIL', 'YES'),
('UG10', 'BTECH', 2, 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'ELECTRONICS AND COMMUNICATION', 'NO'),
('UG11', 'BTECH', 3, 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'ELECTRONICS AND COMMUNICATION', 'YES'),
('UG12', 'BTECH', 4, 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'ELECTRONICS AND COMMUNICATION', 'NO'),
('UG13', 'BTECH', 5, 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'ELECTRONICS AND COMMUNICATION', 'YES'),
('UG14', 'BTECH', 6, 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'ELECTRONICS AND COMMUNICATION', 'NO'),
('UG15', 'BTECH', 7, 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'ELECTRONICS AND COMMUNICATION', 'YES'),
('UG16', 'BTECH', 8, 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'ELECTRONICS AND COMMUNICATION', 'NO'),
('UG17', 'BTECH', 1, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'YES'),
('UG18', 'BTECH', 2, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'NO'),
('UG19', 'BTECH', 3, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'YES'),
('UG2', 'BTECH', 2, 'CIVIL ENGINEERING', 'CIVIL', 'NO'),
('UG20', 'BTECH', 4, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'NO'),
('UG21', 'BTECH', 5, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'YES'),
('UG22', 'BTECH', 6, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'NO'),
('UG23', 'BTECH', 7, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'YES'),
('UG24', 'BTECH', 8, 'COMPUTER SCIENCE AND ENGINEERING', 'COMPUTER SCIENCE', 'NO'),
('UG25', 'BTECH', 1, 'ELECTRICAL AND ELECTRONICS ENGINEERING', 'ELECTRICAL AND ELECTRONICS ', 'YES'),
('UG26', 'BTECH', 2, 'ELECTRICAL AND ELECTRONICS ENGINEERING', 'ELECTRICAL AND ELECTRONICS ', 'NO'),
('UG27', 'BTECH', 3, 'ELECTRICAL AND ELECTRONICS ENGINEERING', 'ELECTRICAL AND ELECTRONICS ', 'YES'),
('UG28', 'BTECH', 4, 'ELECTRICAL AND ELECTRONICS ENGINEERING', 'ELECTRICAL AND ELECTRONICS ', 'NO'),
('UG29', 'BTECH', 5, 'ELECTRICAL AND ELECTRONICS ENGINEERING', 'ELECTRICAL AND ELECTRONICS ', 'YES'),
('UG3', 'BTECH', 3, 'CIVIL ENGINEERING', 'CIVIL', 'YES'),
('UG30', 'BTECH', 6, 'ELECTRICAL AND ELECTRONICS ENGINEERING', 'ELECTRICAL AND ELECTRONICS ', 'NO'),
('UG31', 'BTECH', 7, 'ELECTRICAL AND ELECTRONICS ENGINEERING', 'ELECTRICAL AND ELECTRONICS ', 'YES'),
('UG32', 'BTECH', 8, 'ELECTRICAL AND ELECTRONICS ENGINEERING', 'ELECTRICAL AND ELECTRONICS ', 'NO'),
('UG33', 'BTECH', 1, 'MECHANICAL ENGINEERING', 'MECHANICAL ', 'YES'),
('UG34', 'BTECH', 2, 'MECHANICAL ENGINEERING', 'MECHANICAL ', 'NO'),
('UG35', 'BTECH', 3, 'MECHANICAL ENGINEERING', 'MECHANICAL ', 'YES'),
('UG36', 'BTECH', 4, 'MECHANICAL ENGINEERING', 'MECHANICAL ', 'NO'),
('UG37', 'BTECH', 5, 'MECHANICAL ENGINEERING', 'MECHANICAL ', 'YES'),
('UG38', 'BTECH', 6, 'MECHANICAL ENGINEERING', 'MECHANICAL ', 'NO'),
('UG39', 'BTECH', 7, 'MECHANICAL ENGINEERING', 'MECHANICAL ', 'YES'),
('UG4', 'BTECH', 4, 'CIVIL ENGINEERING', 'CIVIL', 'NO'),
('UG40', 'BTECH', 8, 'MECHANICAL ENGINEERING', 'MECHANICAL ', 'NO'),
('UG41', 'BARCH', 1, 'ARCHITECTURE', 'ARCHITECTURE', 'YES'),
('UG42', 'BARCH', 2, 'ARCHITECTURE', 'ARCHITECTURE', 'YES'),
('UG43', 'BARCH', 3, 'ARCHITECTURE', 'ARCHITECTURE', 'NO'),
('UG44', 'BARCH', 4, 'ARCHITECTURE', 'ARCHITECTURE', 'YES'),
('UG45', 'BARCH', 5, 'ARCHITECTURE', 'ARCHITECTURE', 'NO'),
('UG46', 'BARCH', 6, 'ARCHITECTURE', 'ARCHITECTURE', 'YES'),
('UG47', 'BARCH', 7, 'ARCHITECTURE', 'ARCHITECTURE', 'NO'),
('UG48', 'BARCH', 8, 'ARCHITECTURE', 'ARCHITECTURE', 'YES'),
('UG49', 'BARCH', 9, 'ARCHITECTURE', 'ARCHITECTURE', 'NO'),
('UG5', 'BTECH', 5, 'CIVIL ENGINEERING', 'CIVIL', 'YES'),
('UG50', 'BARCH', 10, 'ARCHITECTURE', 'ARCHITECTURE', 'NO'),
('UG6', 'BTECH', 6, 'CIVIL ENGINEERING', 'CIVIL', 'NO'),
('UG7', 'BTECH', 7, 'CIVIL ENGINEERING', 'CIVIL', 'YES'),
('UG8', 'BTECH', 8, 'CIVIL ENGINEERING', 'CIVIL', 'NO'),
('UG9', 'BTECH', 1, 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'ELECTRONICS AND COMMUNICATION', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `current_class`
--

CREATE TABLE `current_class` (
  `classid` varchar(50) NOT NULL,
  `studid` varchar(50) NOT NULL,
  `rollno` int(11) NOT NULL,
  `adm_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_class`
--

INSERT INTO `current_class` (`classid`, `studid`, `rollno`, `adm_status`) VALUES
('PG28', '16MP645', 39, 'APPROVED'),
('PG28', '16MP646', 42, 'APPROVED'),
('PG28', '16MP647', 22, 'APPROVED'),
('PG28', '16MP649', 1, 'APPROVED'),
('PG28', '16MP651', 13, 'APPROVED'),
('PG28', '16MP652', 41, 'APPROVED'),
('PG28', '16MP653', 18, 'APPROVED'),
('PG28', '16MP655', 14, 'APPROVED'),
('PG28', '16MP656', 16, 'APPROVED'),
('PG28', '16MP657', 10, 'APPROVED'),
('PG28', '16MP658', 4, 'APPROVED'),
('PG28', '16MP659', 33, 'APPROVED'),
('PG28', '16MP660', 6, 'APPROVED'),
('PG28', '16MP663', 7, 'APPROVED'),
('PG28', '16MP664', 20, 'APPROVED'),
('PG28', '16MP665', 17, 'APPROVED'),
('PG28', '16MP666', 3, 'APPROVED'),
('PG28', '16MP667', 32, 'APPROVED'),
('PG28', '16MP668', 28, 'APPROVED'),
('PG28', '16MP669', 46, 'APPROVED'),
('PG28', '16MP673', 40, 'APPROVED'),
('PG28', '16MP674', 37, 'APPROVED'),
('PG28', '16MP675', 29, 'APPROVED'),
('PG28', '16MP676', 30, 'APPROVED'),
('PG28', '16MP677', 35, 'APPROVED'),
('PG28', '16MP678', 24, 'APPROVED'),
('PG28', '16MP679', 19, 'APPROVED'),
('PG28', '16MP681', 15, 'APPROVED'),
('PG28', '16MP682', 27, 'APPROVED'),
('PG28', '16MP683', 23, 'APPROVED'),
('PG28', '16MP684', 45, 'APPROVED'),
('PG28', '16MP685', 8, 'APPROVED'),
('PG28', '16MP686', 12, 'APPROVED'),
('PG28', '16MP687', 11, 'APPROVED'),
('PG28', '16MP688', 38, 'APPROVED'),
('PG28', '16MP689', 25, 'APPROVED'),
('PG28', '16MP690', 34, 'APPROVED'),
('PG28', '16MP691', 44, 'APPROVED'),
('PG28', '16MP692', 9, 'APPROVED'),
('PG28', '16MP693', 5, 'APPROVED'),
('PG28', '16MP694', 31, 'APPROVED'),
('PG28', '16MP695', 2, 'APPROVED'),
('PG28', '16MP696', 47, 'APPROVED'),
('PG28', '16MP697', 36, 'APPROVED'),
('PG28', '16MP786', 43, 'APPROVED'),
('PG28', '16MP787', 21, 'APPROVED'),
('PG28', '16MP815', 26, 'APPROVED'),
('PG28', '17MP1018', 67, 'APPROVED'),
('PG28', '17MP1020', 62, 'APPROVED'),
('PG28', '17MP1021', 60, 'APPROVED'),
('PG28', '17MP1023', 65, 'APPROVED'),
('PG28', '17MP1024', 49, 'APPROVED'),
('PG28', '17MP1025', 54, 'APPROVED'),
('PG28', '17MP1026', 59, 'APPROVED'),
('PG28', '17MP1027', 58, 'APPROVED'),
('PG28', '17MP1031', 66, 'APPROVED'),
('PG28', '17MP1033', 63, 'APPROVED'),
('PG28', '17MP1075', 68, 'APPROVED'),
('PG28', '17MP1076', 48, 'APPROVED'),
('PG28', '17MP1079', 57, 'APPROVED'),
('PG28', '17MP1080', 55, 'APPROVED'),
('PG28', '17MP1082', 61, 'APPROVED'),
('PG28', '17MP1085', 56, 'APPROVED'),
('PG28', '17MP1087', 50, 'APPROVED'),
('PG28', '17MP1088', 69, 'APPROVED'),
('PG28', '17MP1092', 51, 'APPROVED'),
('PG28', '17MP1095', 53, 'APPROVED'),
('PG28', '17MP1096', 64, 'APPROVED'),
('PG28', '17MP971', 52, 'APPROVED');

-- --------------------------------------------------------

--
-- Table structure for table `nss_awards`
--

CREATE TABLE `nss_awards` (
  `awrd_id` int(11) NOT NULL,
  `awrd_name` varchar(50) NOT NULL,
  `awrd_date` varchar(100) NOT NULL,
  `awrd_detls` varchar(100) NOT NULL,
  `awrd_delete` int(11) NOT NULL DEFAULT '0',
  `awrd_ddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_awards`
--

INSERT INTO `nss_awards` (`awrd_id`, `awrd_name`, `awrd_date`, `awrd_detls`, `awrd_delete`, `awrd_ddate`) VALUES
(1, 'soem ', '2014', 'now on now ', 0, '2018-11-18 12:03:10'),
(2, 'soem ', '2019', 'now on', 0, '2018-11-18 12:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `nss_awards_photo`
--

CREATE TABLE `nss_awards_photo` (
  `awrdp_id` int(11) NOT NULL,
  `awrd_id` int(11) NOT NULL,
  `awrdp_desc` text COLLATE utf8mb4_unicode_ci,
  `awrdp_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awrdp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awrdp_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nss_awards_photo`
--

INSERT INTO `nss_awards_photo` (`awrdp_id`, `awrd_id`, `awrdp_desc`, `awrdp_path`, `awrdp_name`, `awrdp_date`) VALUES
(3, 1, 'something ', 'files/award', 'd592eb3c8311be2df79e629e65b2e52c.png', '2018-11-18 13:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `nss_bg_reqst`
--

CREATE TABLE `nss_bg_reqst` (
  `req_id` int(15) NOT NULL,
  `req_name` varchar(20) NOT NULL,
  `req_email` text NOT NULL,
  `req_mob` text NOT NULL,
  `req_bg` varchar(5) NOT NULL,
  `req_loc` text,
  `req_status` int(11) NOT NULL DEFAULT '0',
  `req_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_bg_reqst`
--

INSERT INTO `nss_bg_reqst` (`req_id`, `req_name`, `req_email`, `req_mob`, `req_bg`, `req_loc`, `req_status`, `req_date`) VALUES
(2, 'no', 'dd@dddfdf.dd', '4455667898', 'A+', 'fgdfgd', 0, '2018-11-20 12:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `nss_blood_donation`
--

CREATE TABLE `nss_blood_donation` (
  `bd_id` int(11) NOT NULL,
  `bd_admno` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_group` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bd_mobile` bigint(20) NOT NULL,
  `bd_quantity` int(11) NOT NULL,
  `bd_added_by` int(11) DEFAULT NULL,
  `bd_delete` int(11) NOT NULL DEFAULT '0',
  `bd_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nss_blood_donation`
--

INSERT INTO `nss_blood_donation` (`bd_id`, `bd_admno`, `bd_group`, `bd_email`, `bd_mobile`, `bd_quantity`, `bd_added_by`, `bd_delete`, `bd_date`) VALUES
(1, '16MP646', 'A+', 'sruthysureshvaarnatt@gmail.com', 8943955987, 300, 3, 0, '2018-11-17 17:36:12'),
(2, '16MP646', 'A+', 'sruthysureshvaarnatt@gmail.com', 8943955987, 300, 3, 0, '2018-11-17 17:36:58'),
(3, '16MP646', 'A+', 'sruthysureshvaarnatt@gmail.com', 8943955987, 300, 3, 0, '2018-11-17 17:40:04'),
(4, '16MP646', 'A+', 'sruthysureshvaarnatt@gmail.com', 8943955987, 300, 3, 1, '2018-11-17 17:40:58'),
(5, '16MP645', 'A+', 'salahumuba@gmail.com', 9567875228, 300, 3, 1, '2018-11-17 17:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `nss_camp_cordntrs`
--

CREATE TABLE `nss_camp_cordntrs` (
  `cmp_slno` int(11) NOT NULL,
  `cmp_id` int(15) NOT NULL,
  `cmp_cd_id1` int(15) NOT NULL,
  `cmp_cd_id2` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_camp_cordntrs`
--

INSERT INTO `nss_camp_cordntrs` (`cmp_slno`, `cmp_id`, `cmp_cd_id1`, `cmp_cd_id2`) VALUES
(4, 1, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `nss_camp_partcptn`
--

CREATE TABLE `nss_camp_partcptn` (
  `camp_part_id` int(11) NOT NULL,
  `camp_id` int(15) NOT NULL,
  `camp_vol_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_camp_partcptn`
--

INSERT INTO `nss_camp_partcptn` (`camp_part_id`, `camp_id`, `camp_vol_id`) VALUES
(6, 1, 9),
(7, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `nss_camp_photo`
--

CREATE TABLE `nss_camp_photo` (
  `cp_pht_slno` int(11) NOT NULL,
  `cp_pht_id` int(15) NOT NULL,
  `cp_pht_desc` text,
  `cp_pht_path` varchar(255) NOT NULL,
  `cp_pht_name` varchar(255) NOT NULL,
  `cp_pht_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_camp_photo`
--

INSERT INTO `nss_camp_photo` (`cp_pht_slno`, `cp_pht_id`, `cp_pht_desc`, `cp_pht_path`, `cp_pht_name`, `cp_pht_date`) VALUES
(5, 1, 'someting here', 'files/camp', '0b952fa3eca99cc5797ceb669a420234.png', '2018-11-14 01:23:34'),
(6, 1, '', 'files/camp', '8d4cfb8dd89c781fc5841f789882f853.png', '2018-11-14 01:25:29'),
(7, 1, '', 'files/camp', '4c5e1370281c6104d586bf3a427b812c.png', '2018-11-14 01:27:44'),
(8, 1, '', 'files/camp', '7cef74d370469169b91fa2f59c6230d1.png', '2018-11-14 01:30:09'),
(9, 1, '', 'files/camp', 'e8c598cf59fcd56bc79e28189c0631de.png', '2018-11-14 01:32:40'),
(10, 1, 'varuna', 'files/camp', 'c20fa732a2ec903e3ade985f89c49dc1.png', '2018-11-14 01:32:59'),
(11, 1, 'new', 'files/camp', 'ed8f7a17e6ac570bc099b5bceb668d82.png', '2018-11-14 01:51:30'),
(12, 1, 'sifuyfkuhv   ', 'files/camp', '6a727ffc8e43a52cff79301aa40a1fbd.png', '2018-11-17 05:20:22'),
(13, 1, 'cfcxv', 'files/camp', '32409e47100d57bb46ecce73843c02db.png', '2018-11-17 05:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `nss_camp_reg`
--

CREATE TABLE `nss_camp_reg` (
  `cp_id` int(15) NOT NULL,
  `cp_key` varchar(150) NOT NULL,
  `cp_name` varchar(50) NOT NULL,
  `cp_date_frm` date NOT NULL,
  `cp_date_to` date NOT NULL,
  `cp_details` text NOT NULL,
  `cp_status` varchar(30) NOT NULL,
  `cp_delete` int(11) NOT NULL DEFAULT '0',
  `cp_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_camp_reg`
--

INSERT INTO `nss_camp_reg` (`cp_id`, `cp_key`, `cp_name`, `cp_date_frm`, `cp_date_to`, `cp_details`, `cp_status`, `cp_delete`, `cp_date`) VALUES
(1, 'CAMP_2018_9640', 'aaaa', '2018-11-06', '2018-11-29', 'gggg', '', 0, '2018-11-12 06:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `nss_event_partcptn`
--

CREATE TABLE `nss_event_partcptn` (
  `evt_part_id` int(11) NOT NULL,
  `evt_id` int(15) NOT NULL,
  `evt_vol_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_event_partcptn`
--

INSERT INTO `nss_event_partcptn` (`evt_part_id`, `evt_id`, `evt_vol_id`) VALUES
(1, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `nss_event_photo`
--

CREATE TABLE `nss_event_photo` (
  `ev_pht_slno` int(11) NOT NULL,
  `ev_pht_id` int(15) NOT NULL,
  `ev_pht_desc` text,
  `ev_pht_path` varchar(255) NOT NULL,
  `ev_pht_name` varchar(255) NOT NULL,
  `ev_pht_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_event_photo`
--

INSERT INTO `nss_event_photo` (`ev_pht_slno`, `ev_pht_id`, `ev_pht_desc`, `ev_pht_path`, `ev_pht_name`, `ev_pht_date`) VALUES
(1, 3, 'sp', 'files/event', '4bbf0cc6ecbe10248904ab3ec4572e22.png', '2018-11-17 17:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `nss_event_reg`
--

CREATE TABLE `nss_event_reg` (
  `event_id` int(10) NOT NULL,
  `event_key` varchar(150) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `event_date` date NOT NULL,
  `event_hrs` time NOT NULL,
  `event_dtls` varchar(100) NOT NULL,
  `event_status` varchar(20) NOT NULL,
  `event_delete` int(11) NOT NULL DEFAULT '0',
  `event_ddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_event_reg`
--

INSERT INTO `nss_event_reg` (`event_id`, `event_key`, `event_name`, `event_date`, `event_hrs`, `event_dtls`, `event_status`, `event_delete`, `event_ddate`) VALUES
(3, 'EVE_2018_6941', 'add event anema', '2018-11-06', '07:33:00', '2018-11-6 7:30 PM updated ', '', 0, '2018-11-11 14:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `nss_eve_cordntrs`
--

CREATE TABLE `nss_eve_cordntrs` (
  `eve_slno` int(5) NOT NULL,
  `eve_id` int(15) NOT NULL,
  `eve_cd_id1` int(15) NOT NULL,
  `eve_cd_id2` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_eve_cordntrs`
--

INSERT INTO `nss_eve_cordntrs` (`eve_slno`, `eve_id`, `eve_cd_id1`, `eve_cd_id2`) VALUES
(2, 3, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nss_feedback`
--

CREATE TABLE `nss_feedback` (
  `fd_id` int(11) NOT NULL,
  `fd_name` varchar(255) NOT NULL,
  `fd_contact` text NOT NULL,
  `fd_msg` text NOT NULL,
  `fd_delete` int(11) NOT NULL DEFAULT '0',
  `fd_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_feedback`
--

INSERT INTO `nss_feedback` (`fd_id`, `fd_name`, `fd_contact`, `fd_msg`, `fd_delete`, `fd_date`) VALUES
(2, 'soem', 'new@ww', 'hello now', 1, '2018-11-12 17:33:19'),
(3, 'soem', 'new@ww', 'hello now', 1, '2018-11-12 17:34:35'),
(4, 'soem', 'new@ww', 'hello now', 0, '2018-11-12 17:36:16'),
(5, 'someitng', 'now day to ', 'hello bor', 0, '2018-11-20 08:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `nss_log`
--

CREATE TABLE `nss_log` (
  `usr_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `user_pwd` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_log`
--

INSERT INTO `nss_log` (`usr_id`, `user_id`, `user_type`, `user_pwd`, `date`) VALUES
(1, '', 'vsecretary', 'eqrjbj', '0000-00-00'),
(2, 'admin@penta.com', 'admin', 'qqqqqq', '2018-10-07'),
(3, 'indrajithc@hotmail.com', 'vsecretary', 'qwerty', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `nss_vol_reg`
--

CREATE TABLE `nss_vol_reg` (
  `vol_id` int(20) NOT NULL,
  `vol_regid` bigint(20) NOT NULL,
  `admnno` varchar(50) NOT NULL,
  `vol_bg` varchar(10) NOT NULL,
  `vol_mob` text NOT NULL,
  `vol_alt_mob` text NOT NULL,
  `vol_emailid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nss_vol_reg`
--

INSERT INTO `nss_vol_reg` (`vol_id`, `vol_regid`, `admnno`, `vol_bg`, `vol_mob`, `vol_alt_mob`, `vol_emailid`) VALUES
(1, 2147483647, '16MP646', 'O-', '8943955987', '4455445566', 'sruthysureshvaarnatt@gmail.com'),
(4, 2147483647, '16MP647', 'AB-', '9539408880', '4455445566', 'jishmashaji123@gmail.com'),
(8, 12567972018, '17MP1079', 'O+', '8281056261', '556655689', 'indrajithc@hotmail.com'),
(9, 12528832018, '16MP649', 'A+', '8606575671', '8899887788', 'aishafasna786@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stud_details`
--

CREATE TABLE `stud_details` (
  `admissionno` varchar(50) NOT NULL,
  `name` text,
  `dob` text,
  `gender` text,
  `religion` text,
  `caste` text,
  `year_of_admission` text,
  `email` text,
  `mobile_phno` text,
  `land_phno` text NOT NULL,
  `address` text,
  `rollno` text,
  `rank` text,
  `quota` text,
  `school_1` text,
  `regno_1` text,
  `board_1` text,
  `percentage_1` text NOT NULL,
  `school_2` text,
  `regno_2` text,
  `board_2` text,
  `percentage_2` text NOT NULL,
  `no_chance1` text,
  `name_last_studied` text NOT NULL,
  `courseid` text,
  `branch_or_specialisation` text,
  `branch_code` varchar(20) NOT NULL,
  `image` longblob NOT NULL,
  `gate_score` int(11) NOT NULL,
  `admission_type` varchar(30) NOT NULL,
  `entry_sem` int(2) NOT NULL,
  `exit_sem` int(2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `image_status` varchar(50) DEFAULT 'Not Verified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_details`
--

INSERT INTO `stud_details` (`admissionno`, `name`, `dob`, `gender`, `religion`, `caste`, `year_of_admission`, `email`, `mobile_phno`, `land_phno`, `address`, `rollno`, `rank`, `quota`, `school_1`, `regno_1`, `board_1`, `percentage_1`, `school_2`, `regno_2`, `board_2`, `percentage_2`, `no_chance1`, `name_last_studied`, `courseid`, `branch_or_specialisation`, `branch_code`, `image`, `gate_score`, `admission_type`, `entry_sem`, `exit_sem`, `status`, `blood`, `image_status`) VALUES
('16MP645', 'SALAHUDDEEN MUBARACK.P', '03/MAY/1995', 'M', 'ISLAM', 'MAPPILA', '2016', 'salahumuba@gmail.com', '9567875228', '', 'Tharayam kandam(h),Arimbra(po),Malappuram,pin:673638', '16430336', '388', 'MU', 'GVHSS Arimbra', '227170 and 2010', 'kerala state', '', 'EMEA College of arts and science kondotty', 'EMAMSCS012 and 2015', 'Calicut University', '', '1', 'EMEA College of arts and science kondotty', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP646', 'SRUTHY SURESH. V', '28/MAR/1996', 'F', 'HINDU', 'NAIR', '2016', 'sruthysureshvaarnatt@gmail.com', '8943955987', '', 'VARANAT HOUSE PALAYOOR,CHAVAKKAD(PO),THRISSUR', '16420839', '259', 'SM', 'L.F.C.G.H.S.SCHOOL MAMMIYOOR', '302605,MARCH 2011', 'BOARD OF PUBLIC EXAMINATIONS,KERALA', '', 'MAR DIONYSIUS COLEGE,PAZHANJI', 'DSANBCA004,2016', 'CALICUT UNIVERSITY', '', '1', 'MAR DIONYSIUS COLLEGE PAZHANJI', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP647', 'JISHMA K.P', '02/OCT/1995', 'F', 'HINDU', 'NAIR', '2016', 'jishmashaji123@gmail.com', '9539408880', '', 'KURUVANGAT PUTHENVEETTIL(H),KAPPUR(P.O),PALAKKAD(DIST),679552', '16430218', '131', 'SM', 'GOVT.H S VATTENAD', '334665,MARCH 2011', 'BOARD OF PUBLIC EXAMINATION,KERALA', '', 'LITTLE FLOWER COLLEGE GURUVAYOOR', 'LFANSCS021,2016', 'CALICUT UNIVERSITY', '', '1', 'LITTLE FLOWER COLLEGE GURUVAYOOR', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP649', 'AISHAFASNA.A.B', '28/FEB/1996', 'F', 'MUSLIM', 'MUSLIM', '2016', 'aishafasna786@gmail.com', '8606575671', '', 'AYINIKKALAYIL HOUSE KOTTAPADI-PILLAKKAD ROAD', '16420019', '362', 'MU', 'LITTLE  FLOWER CONVENT GIRLS HSS MAMMIYOOR', '302329 MARCH-2011', 'BOARD OF PUBLIC EXAMINATIONS,KERALA', '', 'I.C.A COLLEGE THOZHIYOOR', 'ATANBCA006-2016', 'CALICUT UNIVERSITY', '', '1', 'I.C.A COLLEGE THOZHIYOOR', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP651', 'CHINDHUSHA T.C.', '17/NOV/1995', 'F', 'HINDU', 'THIYYA', '2016', 'chindhuchandran36@gmail.com', '7559975936', '', 'THUMPARAMBIL(H),KARIKKAD(P.O),THRISSUR(DIST),680519(PIN)', '16430148', '340', 'EZ', 'B.C.G.H.S KUNNAMKULAM', '296180,MARCH 2011', 'BOARD OF PUBLIC EXAMINATION KERALA', '', 'LITTLE FLOWER COLLEGE GURUVAYOOR', 'LFANSCS003,2016', 'CALICUT UNIVERSITY', '', '1', 'LITTLE FLOWER COLLEGE GURUVAYOOR', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP652', 'SNEHA ROSE', '29/SEP/1995', 'F', 'CHRISTAIN', 'RC', '2016', 'shanibamusthafa20@gmail.com', '7025804091', '', 'KUNDUKULAM HOUSE,NAGATHANKAVU(VIA),P.O PARAPPUR,THRISSUR,PIN:680 552', '16420808', '118', 'SM', 'ST.MARY\'S C G H S OLLUR', '330433, MARCH 2011', 'BOARD OF PUBLIC EXAMINATIONS,KERALA', '', 'LITTLE FLOWER COLLEGE GURUVAYOOR', 'LFANSCS011,2016', 'CALICUT UNIVERSITY', '', '1', 'LITTLE FLOWER COLLEGE GURUVAYOOR', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP653', 'JASIM KINARULLA PARAMBATH', '06/DEC/1995', 'M', 'ISLAM', 'MAPPILA', '2016', 'jazvml@gmail.com', '8907006462', '', 'KINARULLA PARAMBATH (HOUSE) KODIYURA (PO) KALLACHI (VIA)', '1600754', '249', 'MU', 'CRESCENT HS VANIMAL', '477159 2011', 'KERALA BOARD OF PUBLIC EXAMINATION', '', 'MET COLLEGE NADAPURAM', 'MRANBCA006  2016', 'CALICUT UNIVERSITY', '', '1', 'MET COLLEGE NADAPURAM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP655', 'DIVYA. A.R', '28/MAY/1995', 'F', 'HINDU', 'EZHAVA', '2016', 'divyaathiyarath@gmail.com', '9497451398', '', 'ATHIYARATH(H),ALATHUR(PO),ANNAMANADA(VIA),THRISSUR(DIST),PIN:680741', '16420330', '293', 'EZHAVA', 'S C G H S S KOTTAKKAL,MALA', '358069,2010', 'KERALA', '', 'CHRIST COLLEGE ,IRINJALAKUDA', '12P22J0234,2015', 'BHARATHIAR UNIVERSITY', '', '1', 'CHRIST COLLEGE, IRINJALAKUDA', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP656', 'FARHATH K', '26/SEP/1995', 'F', 'MUSLIM', 'MAPILA', '2016', 'farhaiqbal26@gmail.com', '9048839848', '', 'Thundikkandi(ho) Ayancheri(po) Vatakara Calicut 673541(pin)', '16430172', '186', 'State Merit', 'Rahmaniya High School Ayancheri', '473141 2011', 'University of Calicut', '', 'Dayapuram Arts And Science College For Women', 'DWANSCS002 2016', 'Board of public examinations , Kerala', '', '1', 'Dayapuram Arts And Science College For Women', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP657', 'ASWANI R NAIR', '01/FEB/1995', 'F', 'HINDU', 'NAIR', '2016', 'aswanirnair01@gmail.com', '9495393599', '', 'THAVOOR (H) CHIRAKKADAVU EAST PO CHIRAKKADAVU, PIN :686520', '16420234', '177', 'SM', 'ST JOSEPH\'S PUBLIC SCHOOL AND JUNIOR COLLEGE, KANJIRAPPALLY', '4148586, 2011', 'CBSE', '', 'COLLEGE OF APPLIED SCIENCE KUTTIKKANAM', '130021025569, 2016', 'MG UNIVERSITY', '', '1', 'COLLEGE OF APPLIED SCIENCE KUTTIKKANAM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP658', 'ANJU ANTONY', '07/APR/1996', 'F', 'CHRISTIAN', 'LATIN CATHOLIC', '2016', 'anjuantony305@gmail.com', '7034643394', '', 'KAITHATHARAYIL,MARKET P.O,E.KADATHY,MUVATTUPUZHA', '16420147', '590', 'LC', 'ST.AUGUSTINE\'S GIRLS H S S ,MUVATTUPUZHA', '253871 , 2011', 'BOARD OF PUBLIC PUBLIC EXAMINATIONS,KERALA', '', 'NIRMALA COLLEGE , MUVATTUPUZHA', '130021070603 , 2016', 'M.G UNIVERSITY', '', '1', 'NIRMALA COLLEGE,MUVATTUPUZHA', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP659', 'POOJA T G', '23/NOV/1994', 'F', 'HINDU', 'EZHAVA', '2016', 'poojatg72@gmail.com', '9497589385', '', 'THEKKEKKARAMEL (H),VELLANIKKARA (PO),CHIRAKKAKODE,THRISSUR-680654', '17357', '395', 'EZHAVA', 'HOLY FAMILY C.G.H.S SCHOOL CHEMBHUKAVU,THRISSUR', '329284,2011', 'BOARD OF PUBLIC EXAMINATION,KERALA', '', 'SRI C ACHUTHAMENON GOVT.COLLEGE,KUTTANELLUR', 'GTANSCS009,2016', 'CALICUT UNIVERSITY', '', '1', 'SRI C ACHUTHAMENON GOVT.COLLEGE,KUTTANELLUR', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP660', 'ANJU S NAIR', '12/JAN/1996', 'F', 'HINDU', 'NAIR', '2016', 'anjusnair687426@gmail.com', '9846578638', '', 'SABARYPOIKAYIL(H),VAIPUR PO VAIPUR,PATHANAMTHITTA,689588', '1600762 (application number)', '201', 'SM', 'ST.THERESAS B C H S S,CHENGAROOR', '185755,2011', 'KERALA', '', 'KRISTU JYOTI COLLEGE OF MANAGEMENT AND TECHNOLOGY,CHETHIPUZHA', '130021069486', 'MG', '', '1', 'KRISTU JYOTI COLLEGE OF MANAGEMENT AND TECHNOLOGY,CHETHIPUZHA', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP663', 'ARYASREE M V', '05/MAY/1996', 'F', 'Hindu', 'Brahmin', '2016', 'aryamoothamala@gmail.com', '9846210508', '', 'Vishnu Namboothiri M, Moothamala Mana(H), Edayoor(PO), Valanchery(Via), Malappuram(Dt), PIN: 676552', '16430111', '189', 'State Merit', 'Bharatiya Vidya Bhavan Valanchery', '4175607, 2011', 'CBSE', '', 'St. Mary\'s College, Puthanangadi', 'SXANBCA011, 2016', 'Calicut University', '', '1', 'St.Mary\'s College, Puthanangadi', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP664', 'JESNA JOSE', '17/AUG/1995', 'F', 'CHRISTIAN', 'RC', '2016', 'jesnamaria95@gmail.com', '9497028233', '', 'JOSE MV MUNDACKAL(HOUSE) NENMENI(POST) MALANKARA SULTHAN BATHERY,673592', '16430210', '453', 'SM', 'ST.JOSEPH\'S E H S, SULTHAN BATHERY', '502026, 2011', 'BOARD OF PUBLIC EXAMINATION,KERALA', '', 'SNDP YOGAM ARTS AND SCIENCE COLLEGE PULPALLY', 'SQANSCS007', 'UNIVERSITY OF CALICUT', '', '1', 'SNDP YOGAM ARTS AND SCIENCE COLLEGE PULPALLY', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP665', 'HELEN DAS M', '03/APR/1994', 'F', 'CHRISTIAN', 'LATIN CATHOLIC', '2016', 'helendasm1994@gmail.com', '9496068183', '', 'DAS VILASAM,PADAPPAKARA P.O,MULAVANA(VIA),KOLLAM-691503', '1600850(APPLICATION NUMBER)', '636', 'LC', 'ST.MARGRET\'S G H S,KANJIRAKODE', '492990,2010', 'KERALA', '', 'FATIMA MATA NATIONAL COLLEGE,KOLLAM', '56144,2016', 'KERALA', '', '1', 'FATIMA MATA NATIONAL COLLEGE,KOLLAM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP666', 'AMAL BABU', '29/MAY/1996', 'M', 'CHRISTIAN', 'ROMAN CATHOLIC', '2016', 'amalbaburkz55@gmail.com', '9567599733', '', 'PULIKKOTTIT HOUSE,CHIRAMANENGAD P.O ,VIA MARATHANCODE,THRISSUR PIN-680604', '16430034', '234', 'SM', 'ST.MARY\'S MAGDELENE CONVENT H.S,KANIPPAYYUR', '308673,2011', 'KERALA', '', 'ST.THOMAS\' COLLEGE,THRISSUR', 'THANBCA021,2016', 'CALICUT', '', '1', 'ST.THOMAS\' COLLEGE,THRISSUR', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP667', 'PARVATHY KUNJUMON', '21/SEP/1994', 'F', 'HINDU', 'DHEEVARA/ARAYA', '2016', 'iamparvathyk4@gmail.com', '9656988817', '', 'EDAPPALLIL,S V M PO,KARUNAGAPPALLY,KOLLAM,690573', '16410230', '660', 'DV', 'GOVT.HSS,KARUNAGAPPALLY', '506121,2010', 'GOVT OF KERALA', '', 'COLLEGE OF APPLIED SCIENCE,KARTHIKAPPALLY', '12827024,2015', 'UNIVERSITY OF KERALA', '', '1', 'COLLEGE OF APPLIED SCIENCE,KARTHIKAPPALLY', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP668', 'MINU GENTY', '12/OCT/1995', 'F', 'CHRISTIAN', 'RCSC', '2016', 'minugenty@gmail.com', '8089193500', '', 'PODIPARA, ATHIRAMPUZHA P.O, KOTTAYAM-686562', '16420582', '27', 'SM', 'HOLY CROSS H S S THELLAKOM', '237555 , 2011', 'BOARD OF PUBLIC EXAMINATION, KERALA', '', 'B.V.M HOLY CROSS COLLEGE, CHERPUNKAL', '130021068314, 2016', 'M.G UNIVERSITY, KOTTAYAM', '', '1', 'B.V.M HOLY CROSS COLLEGE, CHERPUNKAL', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP669', 'VARSHA.K', '12/AUG/1994', 'F', 'HINDU', 'THIYYA', '2016', 'varsha123ammu@gamil.com', '9495907037', '', 'SIVARAJAN.K,KANHIRASSERI(H),CHETTIPPADI(PO),MALAPPURAM(DT),676319(PIN)', '1600885(APPLICATION NUMBER)', '222', 'SM', 'MVHSS ARIYALLUR', '414910', 'BOARD OF PUBLIC EXAMINATIONS,KERALA', '', 'SAFI INSTITUTE OF ADVANCED STUDIES,VAZHAYUR', 'SIANBCA011,2016', 'UNIVERSITY OF CALICUT', '', '2', 'SAFI INSTITUTE OF ADVANCED STUDIES,VAZHAYUR', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP673', 'SITHARA SIDDHIC', '26/DEC/1994', 'F', 'MUSLIM', 'ISLAM', '2016', 'sitharasdm@gmail.com', '9995998281', '', 'DARUL MUNEERA,CHAMAMPATHAL P O,VAZHOOR,KOTTYAM,686517', '16420805', '323', 'MU', 'EDEN PUBLIC SCHOOL', '4148500,2011', 'CBSE', '', 'KRISTUJYOTI COLLEGE OF MANAGEMENT AND TECHNOLOGY', '130021069531', 'M G UNIVERSITY', '', '1', 'KRISTUJYOTI COLLEGE OF MANAGEMENT AND TECHNOLOGY', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP674', 'SAALIM S', '30/MAR/1995', 'M', 'ISLAM', 'MUSLIM', '2016', 'saalim.s.shaa@gmail.com', '8129911508', '', 'THAYYIL KIZHAKKATHIL  ,KATTILKADAVU PO  ,KARUNAGAPPALLY  ,KOLLAM  ,KERALA  ,PIN:690542', '16420734', '373', 'MU', 'GOVT  HSS KULASEKHARAPURAM', '156528,2011', 'KERALA', '', 'UIT ADOOR', '13954036,2016', 'KERALA UNIVERSITY', '', '1', 'UIT ADOOR', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP675', 'NEETHU A', '14/NOV/1995', 'F', 'HINDU', 'NAIR', '2016', 'neethunithin68@gmail.com', '9747766256', '', 'AMBIYIL KIZHAKKATHIL, AYIKKUNNAM,SASTHAMCOTTA PO-690521', '16410211', '333', 'SM', 'J.M HIGH SCHOOL SASTHAMCOTTA', '167798, MARCH 2011', 'KERALA', '', 'UIT, ADOOR', '13954032', 'KERALA', '', '1', 'UIT, ADOOR', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP676', 'NILEENA M JOHN', '16/OCT/1995', 'F', 'CHRISTIAN', 'MARTHOMITE', '2016', 'nileenamjohn16@gmail.com', '9562140610', '', 'JOBIN BHAVAN,VELICHIKKALA PO,ADICHANALLOOR,KOLLAM.691573', '16410221', '308', 'SM', 'NSMGHS,KOTTIYAM', '157275,2011', 'KERALA', '', 'UNIVERSITY INSTITUTE OF TECHNOLOGY,KOLLAM', '13952031,2016', 'KERALA ', '', '1', 'UNIVERSITY INSTITUTE OF TECHNOLOGY,KOLLAM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP677', 'RESHMA P', '01/JUL/1995', 'F', 'HINDU', 'NAIR', '2016', 'reshmaraveendran40@gmail.com', '9605565668', '', 'MURALIBHAVANAM , SREEBHADRA NAGAR-212,ULIYAKOVIL P.O.,KOLLAM,691019', '16410258', '330', 'SM', 'JAWAHAR NAVODAYA VIDYALAYA KOTTARAKKARA', '4159226,2011', 'CBSE', '', 'UNIVERSITY INSTITUTE OF TECHNOLOGY KOLLAM', '13952034,2016', 'KERALA', '', '1', 'UNIVERSITY INSTITUTE OF TECHNOLOGY KOLLAM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP678', 'LIYA K JOY', '20/MAR/1995', 'F', 'CHRISTIAN', 'JACOBITE', '2016', 'liyasarajoy@gmail.com', '9946202523', '', 'KAKKATTUPARAYIL(H.O),KINGIMATTOM(P.O),KOLENCHERY,PIN:682311', '16420529', '353', 'SM', 'GOVT.H.S.S.POOTHRIKKA', '285722', 'KERALA', '', 'BPC COLLEGE,PIRAVOM', '130021068124,2016', 'MG UNIVERSITY', '', '1', 'BPC COLLEGE,PIRAVOM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP679', 'JEEVAN JAYAN', '11/JUL/1995', 'M', 'HINDU', 'EZHAVA', '2016', 'jeevanjayan33@gmail.com', '9400472663', '', 'PUTHIYAPANATHARA(H),K.S MANGALAM P.O VAIKOM', '16420442', '260', 'EZ', 'KPMVHSS ,POOTHOTTA', '275458,MARCH 2011', 'KERALA', '', 'BPC COLLEGE,PIRAVOM', '130021068113,2016', 'MG UNIVERSITY', '', '1', 'BPC COLLEGE,PIRAVOM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP681', 'EMI YOHANNAN', '23/FEB/1996', 'F', 'CHRISTIAN', 'JACOBITE', '2016', 'emijohn28@gmail.com', '9895572351', '', 'PALLIKKUNNEL (H),KANDANAD P.O,THIRUVANKULAM VIA,PIN-682305', '16420347', '206', 'BP', 'ST.MARY\'S H.S KANDANAD', '271053 ,2011', 'KERALA STATE', '', 'B.P.C COLLEGE,PIRAVOM', '130021068108, 2016', 'M.G UNIVERSITY,KOTTAYAM', '', '1', 'B.P.C COLLEGE,PIRAVOM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP682', 'MINNU SHAJI', '20/SEP/1995', 'F', 'HINDHU', 'EZHAVA', '2016', 'minnushaji209@gmail.com', '9447448817', '', 'MURIYODIYIL(H), UDAYANAPURAM P.O, VAIKOM Pin:686143', '16420579', '178', 'EZ', 'ST.LITTLE TERESA\'S GIRLS H S S VAIKOM', '226953 & MARCH 2011', 'BOARD OF EXAMINATION KERALA', '', 'BASELIOUS POULOSE II CATHOLICOSE COLLEGE, PIRAVOM', '130021068125 & MARCH 2016', 'M G UNIVERSITY', '', '1', 'BASELIOUS POULOSE II CATHOLICOSE COLLEGE, PIRAVOM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP683', 'JISHNU GOPINATH', '07/NOV/1994', 'M', 'HINDU', 'VELUTHEDATHU NAIR', '2016', 'gopinath.jishnu1994@gmail.com', '8594019960', '', 'PARACKAL HOUSE,PANGADA P.O PAMPADY,KOTTAYAM,686502', '16420472', ' 179', 'SM', 'S.H.H.S PANGADA,KOTTAYAM', '427018', 'KERALA', '', 'COLLAGE OF APPLIED SCIENCE ,PAYYAPPADY,PUTHUPPALLY ', '12156552', 'MG UNIVERSITY', '', '1', 'COLLAGE OF APPLIED SCIENCE ,PAYYAPPADY,PUTHUPPALLY', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP684', 'TINU TREESA TOM', '06/MAR/1996', 'F', 'CHRISTIAN', 'RCSC', '2016', 'tinutreesatom@gmail.com', '8592803281', '', 'ALACKAL HOUSE KARIKKATTOOR (P.O)  586544 KOTTAYAM', '1602361', '320', 'BP', 'C C M H S S KARIKKATTOOR', '234017 MARCH 2011', 'BOARD OF PUBLIC EXAMINATIONS,KERALA', '', 'KRISTU JYOTI COLLEGE OF MANAGEMENT AND TECHNOLOGY', '130021069539  ,2016', 'MAHATMA GANDHI UNIVERSITY,KOTTAYAM', '', '1', 'KRISTU JYOTI COLLEGE OF MANAGEMENT AND TECHNOLOGY', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP685', 'ARYA THULASI', '31/JUL/1995', 'F', 'HINDU', 'VEERASAIVA', '2016', 'aryathulasi95@gmail.com', '9496497108', '', 'LEKSHMI BHAVANAM, ANGADICAL NORTH PO, PATHANAMTHITTA,PIN 689648', '16410070', '856', 'BH', 'KODUMON HS KODUMON', '180874', 'KERALA BOARD OF EXAMINATION', '', 'IHRD COLLEGE OF APPLIED SCIENCE ,KONNI', '130021025506,2016', 'MG UNIVERSITY', '', '1', 'IHRD COLLEGE OF APPLIED SCIENCE,KONNI', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP686', 'CHAITHANYA CHITHAMBARAN', '27/DEC/1995', 'F', 'HINDU', 'VETTUVAN', '2016', 'chaithanyakc6161@gmai.com', '9846645846', '', 'KALLAYIL(H),KAIPAMANGALAM(PO),680681', '16420296', '1537', 'SC', 'G.F.V.H.S.S KAIPAMANGALAM', '305202 , 2011', 'KERALA BOARD OF EXAMINATION', '', 'CHRIST COLLEGE IRINJALAKUDA', 'CCANSCS013,2016', 'CALICUT UNIVERSITY', '', '1', 'CHRIST COLLEGE IRINJALAKUDA', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP687', 'CERINE SEBASTIAN', '06/DEC/1994', 'F', 'CHRISTIAN', 'ROMAN CATHOLIC', '2016', 'cerinepynadath@gmail.com', '8086149077', '', 'PYNADATH HOUSE, KARUKUTTY P.O,ANGAMALY,ERNAKULAM DISTRICT', '16420295', '138', 'SM', 'ST.JOSEPH\'S GHSS,KARUKUTTY,ANGAMALY', '284186,2011', 'BOARD OF PUBLIC EXAMINATIONS, KERALA', '', 'CARMEL COLLEGE, MALA', 'CRANSMT005', 'CALICUT UNIVERSITY', '', '1', 'CARMEL COLLEGE ,MALA', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP688', 'SAJAI V', '01/SEP/1994', 'M', 'HINDU', 'NAIR', '2016', 'sajaiek@gmail.com', '9961430436', '', 'VIJETHA(H) ,ERATTAKULANGARA,NEELESWARAM P.O,OMASSERY,KOZHIKODE,KERALA 673582', '16430333', '218', 'SM', 'KUNNAMANGALAM HSS', '484118,2011', 'BOARD OF PUBLIC EXAMINATION,KERALA', '', 'COLLEGE OF APPLIED SCIENCE THIRUVAMBADI', 'IBANSCS009,2016', 'CALICUT UNIVERSITY', '', '1', 'COLLEGE OF APPLIED SCIENCE THIRUVAMBADI', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP689', 'MEENU SHANKAR.V.M', '23/MAR/1995', 'F', 'HINDU', 'SAIVA VELLALA', '2016', 'pdplmurali@gmail.com', '9400441852', '', 'PANTHAPLAVIL PALACE,PUNNAMOODU,MAVELIKARA,690101', '16794', '240', 'SM', 'GOVT.H S S FOR GIRLS,MAVELIKARA', '193556,2011', 'KERALA PUBLIC EXAMINATION', '', 'SREE AYYAPPA COLLEGE,ERAMALLIKARA', '32013135010,2016', 'KERALA ', '', '1', 'SREE AYYAPPA COLLEGE,ERAMALLIKARA', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP690', 'PRAVEEN EV', '21/DEC/1993', 'M', 'HINDU', 'EZHAVA', '2016', 'praveenev93@gmail.com', '9567176253', '', 'ELAMKUTTIKKAD(H),THOTTAKAD P.O, KOTTAYAM', '16420652', '1185', 'SM', 'GHSS THOTTAKAD,KOTTAYAM', '235233,2009', 'KERALA PUBLIC EXAMINATIONS', '', 'COLLEGE OF APPLIED SCIENCE,PAYYAPPADY', '11129936,2014', 'MG UNIVERSITY', '', '1', 'COLLEGE OF APPLIED SCIENCE,PAYYAPPADY', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP691', 'SUNU.S', '19/JUL/1994', 'F', 'HINDU', 'ARAYA', '2016', 'sunusunilpr@gmail.com', '8157834083', '', 'kollappurathu,cheriazheekal P O,karunagappally,kollam pin:690573', '16410327', '666', 'SM', 'GOVT. V H S S,Cheriazheekal', '492490 ,2010', 'kerala Public Examination', '', 'University Institute of Technology,Alappuzha', '320-13957043 ,2016', 'University of Kerala', '', '1', 'University Institute of Technology,Alappuzha', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP692', 'ARYA VIJAYAN', '13/JAN/1996', 'F', 'HINDU', 'NAIR', '2016', 'aryanair1123@gmail.com', '9562545706', '', 'ELAYIDATHUKUNNEL (H),KADANAD P.O,KADANAD,KOTTAYAM(DIST),PIN-686653', '16420218', '525', 'BP', 'ST.SEBASTIAN\'S H.S.S KADANAD', '238625,2011', 'KERALA PUBLIC EXAMINATION', '', 'MAR AUGUSTHINOSE COLLEGE,RAMAPURAM', '130021069605,2016', 'MG UNIVERSITY', '', '1', 'MAR AUGUSTHINOSE COLLEGE RAMAPURAM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP693', 'ANJU M', '14/JUL/1995', 'F', 'hindu', 'ezhava', '2016', 'anjumadathanil@gmail.com', '9747462895', '', 'madathanil (h) kanakappalam p.o karimpinthodu ERUMELY pin 686509', '16420153', '366', 'SM', 'M T H S KANAKAPPALAM', '233078,2011', 'KERALA PUBLIC EXAMINATION', '', 'MES COLLEGE ERUMELY', '130021070221', 'MG UNIVERSITY', '', '1', 'MES COLLEGE ERUMELY', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP695', 'ALBIN A JAMES', '08/DEC/1992', 'M', 'CHRISTIAN', 'ORTHODOX', '2016', 'albinajamess@gmail.com', '9495559880', '', 'AYYAMKULANGARA HOUSE, PAZHANJI, PO PAZHANJI, THRISSUR DIST., 680542', '16420059', '466', 'STATE MERIT', 'ST.JOSEPHS & ST.CYRLS H.S. WEST MANGAD', '320340, 2008', 'PUBLIC EXAMINATION OF KERALA', '', 'MAR DIONYSIUS COLLEGE, PAZHANJI', 'DSANBCA016, 2016', 'UNIVERSITY OF CALICUT', '', '1', 'MAR DIONYSIUS COLLEGE, PAZHANJI', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP696', 'VIJI B L', '28/MAY/1995', 'F', 'HINDU', 'KURAVA', '2016', '', '8943106616', '', 'Thottasseriveedu,puthancode,manamboor P .O,PIN:695611', '16410347', '1113', 'SC', 'V H S S KARAVARAM,THIRUVANANTHAPURAM', '517237,2010', 'KERALA PUBLIC EXAMINATION', '', 'A J COLLEGE OF SCIENCE AND TECHNOLOGY THIRUVANANTHAPURAM', '320 12 800035,2015', 'KERALA UNIVERSITY', '', '1', 'A J COLLEGE OF SCIENCE AND TECHNOLOGYT THIRUVANANTHAPURAM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP697', 'RISHA THASNEEM T', '07/JUN/1994', 'F', 'ISLAM', 'MAPPILA', '2016', 'rishathasneemg@gmail.com', '7025020517', '', 'THAIKKATT H,KAKKAD PO,MALAPPURAM,676306', '16430322', '828', 'SM', 'PKMMHSS EDARIKODE ,MALAPPURAM', '260541', 'KERALA PUBLIC EXAMINATIONS', '', 'PKMMHSS EDARIKODE,MALAPPURAM', 'SIANBCA010,2016', 'UNIVERSITY OF CALICUT', '', '1', 'SAFI INSTITUTE OF ADVANCED STUDIES VAZHAYOOR', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP786', 'SUJINA BABU S.P', '01/DEC/1995', 'F', 'Hindu', 'Ayyanavar', '2016', '', '8129475930', '', 'Sooraj Bhavan, ValiyaVila, Kurumkutty, Parassala-695502', '1601208', '', 'SC', 'Evans High School Parassala', '107338,2011', 'Board Of Public Examination, Kerala', '', 'Malankara Catholic College, Mariagiri', '4203181, 2016', 'Manonmaniam Sundaranar University', '', '1', 'Malankara Catholic College, Mariagiri', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP787', 'JINU JOSE', '07/OCT/1995', 'M', 'CHRISTIAN', 'ORTHODOX', '2016', 'jinujose005@gmail.com', '9961474428', '', 'CHERUTHITTA THARAYIL,KUTHIRAPPANTHY(P.O),THAZHAVA,KOLLAM Dist. PIN-690523', '16420469', '669', 'STATE MERIT', 'B.JSM MADATHIL V.H.S.S,THAZHAVA', '158297,2011', 'KERALA PUBLIC EXAMINATION', '', 'UNIVERSITY INSTITUTE OF TECHNOLOGY,ADOOR', '13954028,2016', 'UNIVERSITY OF KERALA', '', '1', 'AMRITA VISHWA VIDYAPEETHAM,KOLLAM', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('16MP815', 'MEERA GOVIND', '23/JUN/1995', 'F', 'HINDU', 'VISWAKARMA', '2016', 'MEERAGOVINDPILLERKATTU@GMAIL.COM', '9495848861', '', 'PILLERKATTU(H),LAKKATTOOR P O,KOTTAYAM', '16420564', '1220', 'COMMUNITY', 'MGM NSS HSS LAKKATTOOR', '223913,2011', 'KERALA BOARD', '', 'MGM NSS HSS LAKKATTOOR', '9108634,2013', 'BOARD OF HIGHRE SECONDARY ', '', '1', 'COLLEGE OF APPLIED SCIENCE,PAYYAPPADDY', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1018', 'THANUSREE THANKAPPAN', '04/OCT/1996', 'F', 'HINDU', 'VISWAKARMMA; OBC', '14/AUG/2017', 'thanusreethankappan@gmail.com', '9496338944', '9446136860', 'PARUTHARA(H);MANKULAM P.O;MANKULAM;IDUKKI-685565', '67110363', '77', 'VK', 'SNDP HSS; ADIMALY', '417909; 2012', 'GENERAL EDUCATION DEPARTMENT', '77.2', 'COLLEGE OF APPLIED SCIENCE; THODUPUZHA', '140021103574; 2017', 'MG UNIVERSITY', '', '1', 'COLLEGE OF APPLIED SCIENCE; THODUPUZHA', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1020', 'NEETHUMOL R', '06/FEB/1996', 'F', 'HINDU', 'SC', '14/AUG/2017', 'neethuraman9@gmail.com', '9495627054', '9495627054', 'CHITHAN BHAVAN(H) ;CHINNAR P.O;ELAPPARA;IDUKKI-685501', '67111002', '482', 'SC', 'MARIAGIRI E M H S S', '422932  2012', 'GENERAL EDUCATION DEPARTMENT', '69.1', 'MARIAN COLLEGE KUTTIKKANAM', '140021044826  2017', 'MG UNIVERSITY', '', '1', 'MARIAN COLLEGE KUTTIKKANAM', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1021', 'MUJEEBURRAHMAN K M', '08/MAY/1997', 'M', 'Islam', 'Muslim', '14/AUG/2017', 'mujeebrahman296@gmail.com', '9946131202', '9745797566', 'kuzhappallil(H);Nadvath Nagar.P.O;Arookutty;Alappuzha-688526', '67111049', '50', 'mu', 'Vaduthala Jama-th Higher Secondary School;Nadvath Nagar;Alappuzha', '455597; 2012', 'General Education Department', '68', 'Siena College Of Professional Studies;Edakochin ', '140021046928;2017', 'MG University', '', '1', 'Siena College Of Professional Studies;Edakochin ', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1023', 'SNEHA SADASIVAN', '24/AUG/1996', 'F', 'HINDU', 'EZHAVA', '14/AUG/2017', 'snehasadasivan24@gmail.com', '9526548557', '9633626172', 'PUTHUPARAMBU(H);KUMARAKOM SOUTH P.O;KOTTAYAM-686563', '6700587', '53', 'SM', 'S.K.M.H.S.S KUMARAKOM;KOTTAYAM', '444389 ; 2012', 'GENERAL EDUCATION DEPARTMENT', '73', 'ETTUMANOORAPPAN COLLEGE;ETTUMANOOR', '140021043118 ; 2017', 'M.G UNIVERSITY', '', '1', 'ETTUMANOORAPPAN COLLEGE;ETTUMANOOR', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1024', 'ANANTHAN KS', '27/NOV/1995', 'M', 'HINDU', 'VALAN', '14/AUG/2017', 'ananthans221@gmail.com', '9447713962', '9400433962', 'KANDATHIL MADOM(H);THEKENADA P.O;VAIKOM;KOTTAYAM-686141', '6700142', '206', 'DEVARA', 'THE WARWIN SCHOOL;NORTH GATE;VAIKOM;KOTTAYAM', '4155763;2012', 'CBSE', '68.4', 'RAJAGIRI COLLEGE OF MANAGEMENT AND APPLIED SCIENCES;KAKKANAD', '140021046195;2017', 'MG UNIVERSITY', '', '1', 'RAJAGIRI COLLEGE OF MANAGEMENT AND APPLIED SCIENCES;KAKKANAD', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1025', 'ASHA JANARDHANAN', '04/OCT/1996', 'F', 'HINDU', 'EZHAVA', '14/AUG/2017', 'iashaindia@gamil.com', '9526034913', '9544730108', 'MANAKULANGARA(H); MALAYIDOMTHURUTH P.O;MALAYIDOMTHURUTH;ERNAKULAM-683561', '67110791', '63', 'SM', 'JAMA ATH H.S.S THANDAKKAD', '405917 ; 2012', 'GENERAL EDUCATION DEPARTMENT', '84.8', 'INDIRA GANDHI COLLEGE OF ARTS AND SCIENCE;NELLIKUZHY', '140021043579; 2017', 'M.G UNIVERSITY', '', '1', 'INDIRA GANDHI COLLEGE OF ARTS AND SCIENCE;NELLIKUZHY', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1026', 'MITHUNMATHEW', '18/JUL/1996', 'M', 'CHRISTIAN', 'JACOBITE SYRIAN', '04/MMM/2017', 'mithunmathew916@gmail.com', '8943894484', '9539720426', 'THAZHATHE THEKKUMMATTATHIL(H); KIZHAKKAMBALAM P.O; NJARALLOOR; ERANAKULAM; 683562', '67110150', '27', 'SM', 'M.C.M.H.S.S PATTIMATTOM', '380238; 2012', 'GOVERNMENT OF KERALA', '68', 'C.E.TCOLLEGE AIRAPURAM', '140021102662; 2017', 'M.G UNIVERSITY', '', '1', 'C.E.T COLLEGE AIRAPURAM', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1027', 'KRISHNANUNNY.H', '26/SEP/1994', 'M', 'HINDU', 'EZHAVA', '14/FEB/2017', 'kittuboy@yahoo.com', '8281435810', '9447702486', 'PADIYIL(H);VALIYAPARAMPU.P.O;KARTHIKAPPALLY;-690516', '6700659', '79', 'EZ', 'HOLY TRINITY VIDHYABHAVAN;KARTHIKAPPALLY', '4153001;2011', 'CBSE', '70.72', 'COLLEGE OF APPLIED SCIENCE KARTHIKAPPALLY', '4629643;2013', 'CBSE', '', '1', 'COLLEGE OF APPLIED SCIENCE KARTHIKAPPALLY', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1031', 'SREELEKSHMI K M', '15/MAY/1997', 'F', 'HINDU', 'VELAAN', '14/AUG/2017', 'sreelakshmikm079@gmail.com', '8289945722', '9447109722', 'KINATTUKARAYIL(H);KIDANGOOR P.O;PIRAYAR;KOTTAYAM-686572', '67110280', '37', 'SM', 'N S S H S S KIDANGOOR', '428055 ; 2012', 'GENERAL EDUCATION DEPARTMENT', '80.06', 'BVM HOLY CROSS COLLEGE; CHERPUNKAL', '140021042542; 2017', 'M.G UNIVERSITY', '', '1', 'BVM HOLY CROSS COLLEGE; CHERPUNKAL', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1033', 'SADDAM SHAH', '30/OCT/1995', 'M', 'MUSLIM', 'ISLAM', '10/AUG/2017', 'saddamshah95@gmail.com', '9633613985', '9895495802', 'Nallanikkal Puthen Veedu; Pullimukku; Kunnicode PO; Kollam Kerala. Pin:-691508', '', '', '', 'Army Public School; Mamun', '2208560', 'CBSE', '', 'UIT Kollam', '9047971', 'Board of Higher Secondary Education', '', '1', 'UIT Kollam', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1075', 'VASISHTAN KURIAN W C', '29/APR/1996', 'F', 'CHRISTIAN', 'CSI', '25/AUG/2017', 'vasishtangf@gmail.com', '9446434386', '9539207689', 'VIJAYALAY VALIYAVEETTIL(H);MALLAPPALLY P.O;PATHANAMTHITTA-689585', '67111057', '42', 'SM', 'C.M.S HIGH SCHOOL;NEDUNGADAPPALLY', '234275 ; 2011', 'GENEREAL EDUCATION DEPARTMENT', '63.22', 'CLLEGE OF APPLIED SCIENCES; MALLAPPALLY', '130021025678 ; 2016', 'M.G UNIVERSITY', '', '1', 'COLLEGE OF APPLIED SCIENCES; MALLAPPALLY', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1076', 'ALBIN THOMAS', '18/SEP/1995', 'M', 'CHRISTIAN', 'RC', '25/AUG/2017', 'albinth12@gmail.com', '8086859202', '9400493126', 'KAVILPURAYIDATHIL(H);IRITTY P.O;PAYANCHERY VAYANASALA;KANNUR-670703', '67110294', '92', 'SM', 'IRITTY H S S;IRITTY', '514230 ; 2011', 'GENERAL EDUCATION DEPARTMENT', '71.69', 'EMS MEMORIAL COLLEGE OF APPLIED SCIENCE IRITTY', 'CS14CCSR24;2017', 'KANNUR UNIVERSITY', '', '1', 'EMS MEMORIAL COLLEGE OF APPLIED SCIENCE IRITTY', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1079', 'INDRAJITH C', '05/JAN/1996', 'M', 'HINDU', 'EZHAVA', '25/AUG/2017', 'indrajithc@hotmail.com', '8281056261', '9495594844', 'CHANDRALAYAM(H); AICKADU;KODUMON P.O; PATHANAMTHITTA -691555 ', '67111003', '129', 'EZ', 'ST. GEORGES MOUNT HS KAIPATTOOR', '177574; 2011', 'GENERAL EDUCATION DEPARTMENT', '77.69', 'UIT ADOOR', '13954023; 2016', 'KERALA UNIVERSITY', '', '1', 'UIT ADOOR', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1080', 'ASWATHY BALAN G', '22/JUN/995', 'F', 'HINDU', 'NADAR', '25/AUG/2017', 'aswathyocean22@gmail.com', '7356391601', '8129121879', '', '67111182', '332', 'BH', 'STMARYS HSS PATTOM', '547617 MARCH 2012', 'BOARD OF PUBLIC EXAMINATIONS', '73.4 %', 'NATIONAL COLLEGE AMBALATHARA', '1000587 MARCH 2014', 'BOARD OF HIGHER SECONDARY EXAMINATION', '', '1', 'NATIONAL COLLEGE AMBALATHARA', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1082', 'NAVAS JASEER', '10/DEC/1995', 'M', 'MUSLIM', 'ISLAM', '24/AUG/2017', 'jassirlink@gmail.com', '9562021296', '9526807229', 'UBAI MANZIL;KADAMPATTU PURAIDOM;KOLLURVILA NAGAR-136;ERAVIPURAM P.O KOLLAM', '67110603', '711', 'MU', 'BELIEVERS CHURCH MAHATMA CENTRAL SCHOOL ;ERAVIPURAM', '4159028   2011', 'CBSE', '59%', 'BELIEVERS CHURCH MAHATMA CENTRAL SCHOOL ;ERAVIPURAM', '4633767   2013', 'CBSE', '', '', 'UNIVERSITY INSTITUITE OF TECHNOLOGY ; MULAMKADAKOM ', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1085', 'DEEPAK M', '17/APR/1995', 'M', 'HINDU', 'BRAHMIN', '25/AUG/2017', 'deepak.muralidharan8@gmail.com', '9048512490', '8086205995', 'CHIRANGARA THEKKEMADOM(H);VELLANGALLUR P.O;THRISSUR-680662 ', '67110737', '82', 'SM', 'NATIONAL HIGHER SECONDARY SCHOOL;IRINJALAKUDA', '312920 ; 2011', 'GENERAL EDUCATION DEPARTMENT', '60', 'PARMEKKAVU COLLEGE OF ARTS AND SCIENCE;THRISSUR', 'PRAOBCA009 ; 2017', 'CALICUT UNIVERSITY', '', '1', 'PARMEKKAVU COLLEGE OF ARTS AND SCIENCE;THRISSUR', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1087', 'ANJALI DAS', '01/JUL/1996', 'F', 'HINDU', 'NAIR', '25/AUG/2017', 'anjalidasihrd777@gmail.com', '9544060014', '9497780852', 'THAZHATHADATHIL KIZHAKATHIL(H);SASTHAMCOTTA P.O;KOLLAM-690521', '67110988', '132', 'SM', 'BISHOP M M C S P M HS;SASTHAMCOTTA', '501137 ; 2012', 'GENERAL EDUCATION DEPARTMENT', '76', ' IHRD COLLEGE OF APPLIED SCIENCE ADOOR', '33214802007 ; 2017', 'KERALA UNIVERSITY', '', '1', 'SREENARAYANA INSTITUITE OF TECHNOLOGY; KOLLAM', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1088', 'VIPIN RAJ', '19/JAN/1996', 'M', 'HINDU', 'NAIR', '25/AUG/2017', 'vipinrajsunu1996@gmail.com', '7034101565', '9645229329', 'KAILASAM(H);VELIYAM P.O;KOLLAM-691540', '67111095', '96', 'SM', 'GOVERNMENT HIGH SCHOOL;POOYAPPALLY', '496850 ; 2012', 'GENERAL EDUCATION DEPARTMENT', '73', 'UNIVERSITY INSTITUTE OF TECHNOLOGY;MULAMKADAKAM;KOLLAM', '32014952047 ; 2017', 'KERALA UNIVERSITY', '', '1', 'SREE NARAYANA INSTITUTE OF TECHNOLOGY;VADAKKEVILA', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1092', 'ANJU SUNDARESAN S', '22/NOV/1996', 'F', 'HINDU', 'EZHAVA', '25/AUG/2017', 'anu.achu1012@gmail.com', '7994997159', '9745845590', 'ANJALI(H);PUTHENSANKETHAM;KOIVILA P.O;KOLLAM-691590', '67111092', '713', 'EZHAVA', 'GOVT.H S S AYYANKOICKAL', '521842 ; 2012', 'GENERAL EDUCATION DEPARTMENT', '73.08', 'UNIVERSITY INSTITUTE OF TECHNOLOGY;KOLLAM', '32014952006 ; 2017', 'KERALA UNIVERSITY', '', '1', 'SREENARAYANA INSTITUTE OF TECHNOLOGY ; VADAKKEVILA', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1095', 'ARJUN R', '06/02//1996', 'M', 'HINDU', 'NAIR', '25/AUG/2017', 'arjunraveendran2013@gmail.com', '8089742242', '9745185383', 'LEKSHMI BHAVAN(H);MURUNTHAL;PANAMOOD;PERINAD P.O;KOLLAM-691601', '67110459', '693', 'BP', 'ST. ALOYSIUS H.S.S;KOLLAM', '152618 ; 2011', 'GENERAL EDUCATION DEPARTMENT', '59.47', 'UNIVERSITY INSTITUTE OF TECHNOLOGY;KOLLAM', '13952012 ; 2016', 'KERALA UNIVERSITY', '', '1', 'SREE NARAYANA INSTITUTE OF TECHNOLOGY; VADAKKEVILA P.O;KOLLAM', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP1096', 'SHILPA S SAJEEV', '19/DEC/1995', 'F', 'HINDU', 'EZHAVA', '26/AUG/2017', 'shilpasajeev1995@gmail.com', '7356807305', '9846585106', '', '67111022', '166', 'EZHAVA', 'JYOTHI NILAYAM HIGHER SECONDARY SCHOOL', '117178;2011', 'BOARD OF PUBLIC EXAMINATIONS', '70%', 'AJ COLLEGE OF SCIENCE AND TECHNOLOGY;THONNAKKAL', '9030101', 'BOARD OF HIGHER SECONDARY EXAMINATION', '', '1', 'AJ COLLEGE OF SCIENCE AND TECHNOLOGY;THONNAKKAL', 'MCA', 'COMPUTER APPLICATIONS', '17MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified'),
('17MP971', 'ANOOP A T', '31/JAN/1996', 'M', 'HINDU', 'CHERAMAR', '2017', 'atanoop777@gmail.com', '8281150295', '', 'ANIYARA(H),NEDUMANNI P.O,KOTTAYAM-686542', '2701603', '1158', 'SC', 'LITTLE FLOWER VIDYANIKETAN,Mundathanam', '4156776,2012', 'CBSE', '', 'St Berchmans College,Changanacherry', '11412443 ,2017', 'M G UNIVERSITY', '', '1', 'St Berchmans College,Changanacherry', 'MCA', 'COMPUTER APPLICATIONS', 'MP', '', 0, '', 0, 0, 'On Going', '', 'Not Verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_details`
--
ALTER TABLE `class_details`
  ADD PRIMARY KEY (`classid`),
  ADD KEY `deptname` (`deptname`),
  ADD KEY `branch_or_specialisation` (`branch_or_specialisation`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `current_class`
--
ALTER TABLE `current_class`
  ADD PRIMARY KEY (`studid`),
  ADD KEY `classid` (`classid`,`studid`);

--
-- Indexes for table `nss_awards`
--
ALTER TABLE `nss_awards`
  ADD PRIMARY KEY (`awrd_id`);

--
-- Indexes for table `nss_awards_photo`
--
ALTER TABLE `nss_awards_photo`
  ADD PRIMARY KEY (`awrdp_id`),
  ADD KEY `awrd_id` (`awrd_id`);

--
-- Indexes for table `nss_bg_reqst`
--
ALTER TABLE `nss_bg_reqst`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `nss_blood_donation`
--
ALTER TABLE `nss_blood_donation`
  ADD PRIMARY KEY (`bd_id`),
  ADD KEY `admissionno` (`bd_admno`),
  ADD KEY `bg_added_by` (`bd_added_by`);

--
-- Indexes for table `nss_camp_cordntrs`
--
ALTER TABLE `nss_camp_cordntrs`
  ADD PRIMARY KEY (`cmp_slno`),
  ADD KEY `cmp_cd_id1` (`cmp_cd_id1`),
  ADD KEY `cmp_cd_id2` (`cmp_cd_id2`),
  ADD KEY `cmp_id` (`cmp_id`),
  ADD KEY `cmp_cd_id1_2` (`cmp_cd_id1`),
  ADD KEY `cmp_cd_id2_2` (`cmp_cd_id2`),
  ADD KEY `cmp_cd_id2_3` (`cmp_cd_id2`),
  ADD KEY `cmp_cd_id1_3` (`cmp_cd_id1`),
  ADD KEY `cmp_id_2` (`cmp_id`);

--
-- Indexes for table `nss_camp_partcptn`
--
ALTER TABLE `nss_camp_partcptn`
  ADD PRIMARY KEY (`camp_part_id`),
  ADD KEY `camp_id` (`camp_id`),
  ADD KEY `camp_vol_id` (`camp_vol_id`);

--
-- Indexes for table `nss_camp_photo`
--
ALTER TABLE `nss_camp_photo`
  ADD PRIMARY KEY (`cp_pht_slno`),
  ADD KEY `cp_pht_id` (`cp_pht_id`);

--
-- Indexes for table `nss_camp_reg`
--
ALTER TABLE `nss_camp_reg`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `nss_event_partcptn`
--
ALTER TABLE `nss_event_partcptn`
  ADD PRIMARY KEY (`evt_part_id`),
  ADD KEY `evt_id` (`evt_id`),
  ADD KEY `evt_vol_id` (`evt_vol_id`);

--
-- Indexes for table `nss_event_photo`
--
ALTER TABLE `nss_event_photo`
  ADD PRIMARY KEY (`ev_pht_slno`),
  ADD KEY `ev_pht_id` (`ev_pht_id`);

--
-- Indexes for table `nss_event_reg`
--
ALTER TABLE `nss_event_reg`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `event_key` (`event_key`);

--
-- Indexes for table `nss_eve_cordntrs`
--
ALTER TABLE `nss_eve_cordntrs`
  ADD PRIMARY KEY (`eve_slno`),
  ADD KEY `eve_id` (`eve_id`),
  ADD KEY `eve_cd_id1` (`eve_cd_id1`),
  ADD KEY `eve_cd_id2` (`eve_cd_id2`),
  ADD KEY `eve_cd_id1_2` (`eve_cd_id1`),
  ADD KEY `eve_cd_id2_2` (`eve_cd_id2`);

--
-- Indexes for table `nss_feedback`
--
ALTER TABLE `nss_feedback`
  ADD PRIMARY KEY (`fd_id`);

--
-- Indexes for table `nss_log`
--
ALTER TABLE `nss_log`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `nss_vol_reg`
--
ALTER TABLE `nss_vol_reg`
  ADD PRIMARY KEY (`vol_id`),
  ADD KEY `admnno` (`admnno`),
  ADD KEY `admnno_2` (`admnno`);

--
-- Indexes for table `stud_details`
--
ALTER TABLE `stud_details`
  ADD PRIMARY KEY (`admissionno`),
  ADD UNIQUE KEY `adm_no` (`admissionno`),
  ADD KEY `admissionno` (`admissionno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nss_awards`
--
ALTER TABLE `nss_awards`
  MODIFY `awrd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nss_awards_photo`
--
ALTER TABLE `nss_awards_photo`
  MODIFY `awrdp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nss_bg_reqst`
--
ALTER TABLE `nss_bg_reqst`
  MODIFY `req_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nss_blood_donation`
--
ALTER TABLE `nss_blood_donation`
  MODIFY `bd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nss_camp_cordntrs`
--
ALTER TABLE `nss_camp_cordntrs`
  MODIFY `cmp_slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nss_camp_partcptn`
--
ALTER TABLE `nss_camp_partcptn`
  MODIFY `camp_part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nss_camp_photo`
--
ALTER TABLE `nss_camp_photo`
  MODIFY `cp_pht_slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nss_camp_reg`
--
ALTER TABLE `nss_camp_reg`
  MODIFY `cp_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nss_event_partcptn`
--
ALTER TABLE `nss_event_partcptn`
  MODIFY `evt_part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nss_event_photo`
--
ALTER TABLE `nss_event_photo`
  MODIFY `ev_pht_slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nss_event_reg`
--
ALTER TABLE `nss_event_reg`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nss_eve_cordntrs`
--
ALTER TABLE `nss_eve_cordntrs`
  MODIFY `eve_slno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nss_feedback`
--
ALTER TABLE `nss_feedback`
  MODIFY `fd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nss_log`
--
ALTER TABLE `nss_log`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nss_vol_reg`
--
ALTER TABLE `nss_vol_reg`
  MODIFY `vol_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nss_camp_cordntrs`
--
ALTER TABLE `nss_camp_cordntrs`
  ADD CONSTRAINT `nss_camp_cordntrs_ibfk_1` FOREIGN KEY (`cmp_id`) REFERENCES `nss_camp_reg` (`cp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nss_camp_cordntrs_ibfk_2` FOREIGN KEY (`cmp_cd_id1`) REFERENCES `nss_vol_reg` (`vol_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nss_camp_cordntrs_ibfk_3` FOREIGN KEY (`cmp_cd_id2`) REFERENCES `nss_vol_reg` (`vol_id`) ON UPDATE CASCADE;

--
-- Constraints for table `nss_camp_partcptn`
--
ALTER TABLE `nss_camp_partcptn`
  ADD CONSTRAINT `nss_camp_partcptn_ibfk_1` FOREIGN KEY (`camp_id`) REFERENCES `nss_camp_reg` (`cp_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nss_camp_partcptn_ibfk_2` FOREIGN KEY (`camp_vol_id`) REFERENCES `nss_vol_reg` (`vol_id`) ON UPDATE CASCADE;

--
-- Constraints for table `nss_camp_photo`
--
ALTER TABLE `nss_camp_photo`
  ADD CONSTRAINT `nss_camp_photo_ibfk_1` FOREIGN KEY (`cp_pht_id`) REFERENCES `nss_camp_reg` (`cp_id`) ON UPDATE CASCADE;

--
-- Constraints for table `nss_event_partcptn`
--
ALTER TABLE `nss_event_partcptn`
  ADD CONSTRAINT `nss_event_partcptn_ibfk_1` FOREIGN KEY (`evt_id`) REFERENCES `nss_event_reg` (`event_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nss_event_partcptn_ibfk_2` FOREIGN KEY (`evt_vol_id`) REFERENCES `nss_vol_reg` (`vol_id`) ON UPDATE CASCADE;

--
-- Constraints for table `nss_event_photo`
--
ALTER TABLE `nss_event_photo`
  ADD CONSTRAINT `nss_event_photo_ibfk_1` FOREIGN KEY (`ev_pht_id`) REFERENCES `nss_event_reg` (`event_id`);

--
-- Constraints for table `nss_eve_cordntrs`
--
ALTER TABLE `nss_eve_cordntrs`
  ADD CONSTRAINT `nss_eve_cordntrs_ibfk_1` FOREIGN KEY (`eve_id`) REFERENCES `nss_event_reg` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nss_eve_cordntrs_ibfk_2` FOREIGN KEY (`eve_cd_id1`) REFERENCES `nss_vol_reg` (`vol_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nss_eve_cordntrs_ibfk_3` FOREIGN KEY (`eve_cd_id2`) REFERENCES `nss_vol_reg` (`vol_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nss_vol_reg`
--
ALTER TABLE `nss_vol_reg`
  ADD CONSTRAINT `nss_vol_reg_ibfk_1` FOREIGN KEY (`admnno`) REFERENCES `stud_details` (`admissionno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
