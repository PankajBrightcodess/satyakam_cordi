-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 12:24 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_satyakam`
--

-- --------------------------------------------------------

--
-- Table structure for table `stk_account_details`
--

CREATE TABLE `stk_account_details` (
  `id` int(11) NOT NULL,
  `sponser_id` varchar(200) DEFAULT NULL,
  `sponser_name` varchar(200) DEFAULT NULL,
  `member_id` varchar(200) DEFAULT NULL,
  `aadhar` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `father_husband` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `c_address` text DEFAULT NULL,
  `p_address` text DEFAULT NULL,
  `group_name` varchar(200) DEFAULT NULL,
  `account_no` longtext DEFAULT NULL,
  `group_no` text DEFAULT NULL,
  `state_unit_name` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `account_status` varchar(1) NOT NULL DEFAULT '1',
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_account_details`
--

INSERT INTO `stk_account_details` (`id`, `sponser_id`, `sponser_name`, `member_id`, `aadhar`, `name`, `father_husband`, `dob`, `c_address`, `p_address`, `group_name`, `account_no`, `group_no`, `state_unit_name`, `mobile_no`, `email`, `added_on`, `account_status`, `status`) VALUES
(1, '1', 'Ramesh Pandey', '784512', '1234546789877767', 'Pankaj Mani Tiwari', 'S', '2022-05-12', 'ranchi', 'Rancho', 'Mohan', 'SATYA1000001', '# 452585', '4', '12345678958', 'rajesh@gmail.com', '2022-05-20', '1', '1'),
(2, '1', 'Ramesh Pandey', '784512', '1234546789877767', 'Pankaj Mani Tiwari', 'S', '2022-05-12', 'ranchi', 'Rancho', 'Mohan', 'SATYA1000002', '# 452585', '4', '12345678958', 'rajesh@gmail.com', '2022-05-20', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_admitcard`
--

CREATE TABLE `stk_admitcard` (
  `id` int(11) NOT NULL,
  `applicant_no` varchar(200) DEFAULT NULL,
  `registration_no` text DEFAULT NULL,
  `candidate_name` varchar(200) DEFAULT NULL,
  `father_name` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `state_code` varchar(200) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `batch_no` varchar(200) DEFAULT NULL,
  `center_name` text DEFAULT NULL,
  `unit_code` varchar(200) DEFAULT NULL,
  `interviewdate` date DEFAULT NULL,
  `reporting_time` varchar(200) DEFAULT NULL,
  `interview_time` varchar(200) DEFAULT NULL,
  `center_address` text DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `signature` varchar(200) DEFAULT NULL,
  `exam_status` varchar(1) NOT NULL DEFAULT '0',
  `publish_admitcard` varchar(1) NOT NULL DEFAULT '0',
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_admitcard`
--

INSERT INTO `stk_admitcard` (`id`, `applicant_no`, `registration_no`, `candidate_name`, `father_name`, `dob`, `mobile_no`, `gender`, `state_code`, `category`, `designation`, `batch_no`, `center_name`, `unit_code`, `interviewdate`, `reporting_time`, `interview_time`, `center_address`, `photo`, `signature`, `exam_status`, `publish_admitcard`, `added_on`, `status`) VALUES
(1, '1', '20220511-001', 'Mohan Rajbhar', 'Manoj Rajbhar', '2022-05-11', '7854613254', 'male', '10', 'gen', 'STATE PROJECT DIRECTOR OFFICE(S.P.D.O.)', '#BATCH-9876', 'DAV Public School Gaya Bihar', '85469', '2022-05-17', '20:18', '20:18', 'JSQ4 ACC COLONY KHALARI RANCHI JHARKHAND 789456', '/assets/vacency/photo/1652791075.jpg', '/assets/vacency/sign/1652791075.jpg', '0', '1', '2022-05-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_all_state`
--

CREATE TABLE `stk_all_state` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state_code` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stk_all_state`
--

INSERT INTO `stk_all_state` (`id`, `name`, `type`, `state_id`, `district_id`, `pincode`, `state_code`, `status`) VALUES
(1, 'Andaman And Nicobar Islands', 'state', 0, 0, '', 35, 1),
(2, 'Andhra Pradesh', 'state', 0, 0, '', 37, 1),
(3, 'Arunachal Pradesh', 'state', 0, 0, '', 12, 1),
(4, 'Assam', 'state', 0, 0, '', 18, 1),
(5, 'Bihar', 'state', 0, 0, '', 10, 1),
(6, 'Chandigarh', 'state', 0, 0, '', 4, 1),
(7, 'Chhattisgarh', 'state', 0, 0, '', 22, 1),
(8, 'Dadra And Nagar Haveli', 'state', 0, 0, '', 26, 1),
(9, 'Daman And Diu', 'state', 0, 0, '', 25, 1),
(10, 'Delhi', 'state', 0, 0, '', 7, 1),
(11, 'Goa', 'state', 0, 0, '', 30, 1),
(12, 'Gujarat', 'state', 0, 0, '', 24, 1),
(13, 'Haryana', 'state', 0, 0, '', 6, 1),
(14, 'Himachal Pradesh', 'state', 0, 0, '', 2, 1),
(15, 'Jammu And Kashmir', 'state', 0, 0, '', 1, 1),
(16, 'Jharkhand', 'state', 0, 0, '', 20, 1),
(17, 'Karnataka', 'state', 0, 0, '', 29, 1),
(18, 'Kerala', 'state', 0, 0, '', 32, 1),
(19, 'Lakshadweep', 'state', 0, 0, '', 31, 1),
(20, 'Madhya Pradesh', 'state', 0, 0, '', 23, 1),
(21, 'Maharashtra', 'state', 0, 0, '', 27, 1),
(22, 'Manipur', 'state', 0, 0, '', 14, 1),
(23, 'Meghalaya', 'state', 0, 0, '', 17, 1),
(24, 'Mizoram', 'state', 0, 0, '', 15, 1),
(25, 'Nagaland', 'state', 0, 0, '', 13, 1),
(26, 'Odisha', 'state', 0, 0, '', 21, 1),
(27, 'Puducherry', 'state', 0, 0, '', 34, 1),
(28, 'Punjab', 'state', 0, 0, '', 3, 1),
(29, 'Rajasthan', 'state', 0, 0, '', 8, 1),
(30, 'Sikkim', 'state', 0, 0, '', 11, 1),
(31, 'Tamil Nadu', 'state', 0, 0, '', 33, 1),
(32, 'Telangana', 'state', 0, 0, '', 36, 1),
(33, 'Tripura', 'state', 0, 0, '', 16, 1),
(34, 'Uttar Pradesh', 'state', 0, 0, '', 9, 1),
(35, 'Uttarakhand', 'state', 0, 0, '', 5, 1),
(36, 'West Bengal', 'state', 0, 0, '', 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stk_childsubmenu`
--

CREATE TABLE `stk_childsubmenu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(200) DEFAULT NULL,
  `submenu_id` varchar(200) DEFAULT NULL,
  `child_submenu` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_childsubmenu`
--

INSERT INTO `stk_childsubmenu` (`id`, `menu_id`, `submenu_id`, `child_submenu`, `added_on`, `status`) VALUES
(1, '5', '9', 'Group', '2022-03-30', '1'),
(2, '5', '9', '4WS  Saving', '2022-03-30', '1'),
(3, '5', '9', 'Loan', '2022-03-30', '1'),
(4, '9', '12', 'delete area', '2022-03-30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_club_report`
--

CREATE TABLE `stk_club_report` (
  `id` int(11) NOT NULL,
  `group_no_b` varchar(100) DEFAULT NULL,
  `group_name_b` varchar(100) DEFAULT NULL,
  `club_id_no` varchar(100) DEFAULT NULL,
  `club_member_name` varchar(100) DEFAULT NULL,
  `sponsor_no` varchar(100) DEFAULT NULL,
  `sponsor_level` varchar(100) DEFAULT NULL,
  `joining_fee` varchar(100) DEFAULT NULL,
  `banking_id4` varchar(100) DEFAULT NULL,
  `total_revenue_3` varchar(100) DEFAULT NULL,
  `grand_total_revamue` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `batch_no` varchar(50) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_club_report`
--

INSERT INTO `stk_club_report` (`id`, `group_no_b`, `group_name_b`, `club_id_no`, `club_member_name`, `sponsor_no`, `sponsor_level`, `joining_fee`, `banking_id4`, `total_revenue_3`, `grand_total_revamue`, `user_id`, `batch_no`, `added_on`, `status`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '3', '#7654', '2022-05-14', '1'),
(2, 'fref', 'sfe', 'fsdf', 'eswf', 'wefsdf', 'ewfsdfew', 'fsdf', 'ewfsdfs', 'dsfewrf', 'sdfewfsdfsd', '3', '#7654', '2022-05-14', '1'),
(3, '#255', 'Mohan', '9878', 'Mohan', '12222', '21222', '2222', '2222', '1', '6', '2', '#546568', '2022-05-16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_club_report_team`
--

CREATE TABLE `stk_club_report_team` (
  `id` int(11) NOT NULL,
  `group_no_b` varchar(100) DEFAULT NULL,
  `group_name_b` varchar(100) DEFAULT NULL,
  `club_id_no` varchar(100) DEFAULT NULL,
  `club_member_name` varchar(100) DEFAULT NULL,
  `sponsor_no` varchar(100) DEFAULT NULL,
  `sponsor_level` varchar(100) DEFAULT NULL,
  `joining_fee` varchar(100) DEFAULT NULL,
  `banking_id4` varchar(100) DEFAULT NULL,
  `total_revenue_3` varchar(100) DEFAULT NULL,
  `grand_total_revamue` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `batch_no` varchar(50) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_club_report_team`
--

INSERT INTO `stk_club_report_team` (`id`, `group_no_b`, `group_name_b`, `club_id_no`, `club_member_name`, `sponsor_no`, `sponsor_level`, `joining_fee`, `banking_id4`, `total_revenue_3`, `grand_total_revamue`, `user_id`, `batch_no`, `added_on`, `status`) VALUES
(1, '#876', 'sfe', '123', 'durga', '1233', '200', '500', '2000', '2', '9', '2', '#546568', '2022-05-18', '1'),
(2, '#876', 'Mohan', '123', 'eswf', 'wefsdf', 'ewfsdfew', 'fsdf', 'ewfsdfs', '2', '9', '2', '#546568', '2022-05-18', '1'),
(3, '#876', 'sfe', '123', 'durga', '1233', '200', '500', '2000', '1', '5', '2', '#546568', '2022-05-18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_department`
--

CREATE TABLE `stk_department` (
  `id` int(11) NOT NULL,
  `department` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_department`
--

INSERT INTO `stk_department` (`id`, `department`, `added_on`, `status`) VALUES
(1, 'STATE PROJECT DIRECTOR OFFICE(S.P.D.O.)', '2022-03-04', '1'),
(2, 'FINANCE DEPARTMENT', '2022-03-04', '1'),
(3, 'INFORMATION RESOURCES DEPARTMENT', '2022-03-04', '1'),
(4, 'STAFF WORK CONSULTING DEPARTMENT', '2022-03-04', '1'),
(5, 'GROUP CREATIVE DEPARTMENT', '2022-03-04', '1'),
(6, '4WS SAVINGS DEPARTMENT', '2022-03-04', '1'),
(7, 'ENTERPRISES LOAN SCHEME DEPARTMENT', '2022-03-04', '1'),
(8, 'DIVISIONAL OFFICE', '2022-03-04', '1'),
(9, 'DISTRICT OFFICER', '2022-03-04', '1'),
(13, 'dsfsdfsd', '2022-03-04', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stk_division`
--

CREATE TABLE `stk_division` (
  `id` int(11) NOT NULL,
  `state_id` varchar(100) DEFAULT NULL,
  `division` varchar(200) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_division`
--

INSERT INTO `stk_division` (`id`, `state_id`, `division`, `status`) VALUES
(1, '3', 'Patna division', 1),
(3, '3', 'Tirhut division', 1),
(4, '3', 'Saran division', 1),
(5, '3', 'Darbhanga division', 1),
(6, '3', 'Kosi division', 1),
(7, '3', 'Purnia division', 1),
(8, '3', 'Bhagalpur division', 1),
(9, '3', 'Munger division', 1),
(10, '3', 'Magadh division', 1),
(11, '4', 'Palamu division', 1),
(12, '4', 'North Chotanagpur division', 1),
(13, '4', 'South Chotanagpur division', 1),
(14, '4', 'Kolhan division', 1),
(15, '4', 'Santhal Pargana division', 1),
(16, '5', '	Agra division', 1),
(17, '5', 'Aligarh division', 1),
(18, '5', 'Allahabad division', 1),
(19, '5', 'Azamgarh division', 1),
(20, '5', 'Bareilly division', 1),
(21, '5', 'Basti division', 1),
(22, '5', 'Chitrakoot division', 1),
(23, '5', 'Devipatan division', 1),
(24, '5', 'Faizabad division', 1),
(25, '5', 'Gorakhpur division', 1),
(26, '5', 'Jhansi division', 1),
(27, '5', 'Kanpur division', 1),
(28, '5', 'Lucknow division', 1),
(29, '5', 'Meerut division', 1),
(30, '5', 'Mirzapur division', 1),
(31, '5', 'Moradabad division', 1),
(32, '5', 'Saharanpur division', 1),
(33, '5', 'Varanasi division', 1),
(34, '6', 'Presidency division', 1),
(35, '6', 'Medinipur division', 1),
(36, '6', 'Malda division', 1),
(37, '6', 'Burdwan division', 1),
(38, '6', 'Jalpaiguri division', 1),
(39, '7', 'Bhopal division', 1),
(40, '7', 'Indore division', 1),
(41, '7', 'Gwalior division', 1),
(42, '7', 'Jabalpur division', 1),
(43, '7', 'Rewa division', 1),
(44, '7', 'Sagar division', 1),
(45, '7', 'Shahdol division', 1),
(46, '7', 'Ujjain division', 1),
(47, '7', 'Chambal division', 1),
(48, '7', 'Narmadapuram division', 1),
(49, '8', 'Hisar division', 1),
(50, '8', 'Gurgaon division', 1),
(51, '8', 'Ambala division', 1),
(52, '8', 'Faridabad division', 1),
(53, '8', 'Rohtak division', 1),
(54, '8', 'Karnal division', 1),
(55, '9', 'Jaipur division', 1),
(56, '9', 'Jodhpur division', 1),
(57, '9', 'Ajmer division', 1),
(58, '9', 'Udaipur division', 1),
(59, '9', 'Bikaner division', 1),
(60, '9', 'Kota division', 1),
(61, '9', 'Bharatpur division', 1),
(62, '10', 'Patiala', 1),
(63, '10', 'Faridkot', 1),
(64, '10', 'Firozepur', 1),
(65, '10', 'Jalandhar', 1),
(66, '10', 'Ropar', 1),
(67, '11', 'Surguja', 1),
(68, '11', 'Bilaspur', 1),
(69, '11', 'Durg', 1),
(70, '11', 'Raipur', 1),
(71, '11', 'Bastar division', 1),
(72, '12', 'Upper Assam Division', 1),
(73, '12', 'Lower Assam Division', 1),
(74, '12', 'North Assam Division', 1),
(75, '12', 'Central Assam Division', 1),
(76, '12', 'Hills and Barak Valley Division', 1),
(77, '14', 'Bangalore division', 1),
(78, '14', 'Mysore division', 1),
(79, '14', 'Belgaum division', 1),
(80, '14', 'Kalaburagi division', 1),
(81, '15', 'Amravati division', 1),
(82, '15', 'Aurangabad division', 1),
(83, '15', 'Konkan division', 1),
(84, '15', 'Nagpur division', 1),
(85, '15', 'Nashik division', 1),
(86, '15', 'Pune division', 1),
(87, '17', 'N/A', 1),
(88, '13', 'N/A', 1),
(89, '18', 'N/A', 1),
(90, '19', 'Kumaon division', 1),
(91, '19', 'Garhwal division', 1),
(92, '20', 'N/A', 1),
(93, '21', 'N/A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stk_expense`
--

CREATE TABLE `stk_expense` (
  `id` int(11) NOT NULL,
  `equipment` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rate` decimal(10,0) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `bill` varchar(200) DEFAULT NULL,
  `payment_receipt` varchar(200) DEFAULT NULL,
  `payment_method` varchar(200) DEFAULT NULL,
  `neft_check` varchar(200) DEFAULT NULL,
  `total_revenue` varchar(200) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_expense`
--

INSERT INTO `stk_expense` (`id`, `equipment`, `quantity`, `rate`, `amount`, `bill`, `payment_receipt`, `payment_method`, `neft_check`, `total_revenue`, `user_id`, `added_on`, `status`) VALUES
(1, 'Monitor', 3, '13000', '39000', 'BIL-1223', 'Mohan', 'Cash', '0', '2', '2', '2022-05-18', 1),
(2, 'AC', 2, '37000', '74000', 'BILL-87676', 'Ramesh', 'Cash', '0', '2', '2', '2022-05-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stk_generalgroup`
--

CREATE TABLE `stk_generalgroup` (
  `id` int(11) NOT NULL,
  `depart_id` varchar(200) DEFAULT NULL,
  `posts` varchar(200) DEFAULT NULL,
  `registered_group_list` varchar(200) DEFAULT NULL,
  `new_group_creative` varchar(200) DEFAULT NULL,
  `group_saving_status` varchar(200) DEFAULT NULL,
  `banking` varchar(200) DEFAULT NULL,
  `e_received` varchar(200) DEFAULT NULL,
  `group_loan_status` varchar(200) NOT NULL,
  `emi_banking` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_group_details`
--

CREATE TABLE `stk_group_details` (
  `id` int(11) NOT NULL,
  `member_id` varchar(200) DEFAULT NULL,
  `member_name` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `father_name` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) NOT NULL,
  `aadhar_no` varchar(20) DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `total_members` text DEFAULT NULL,
  `mandatory` text DEFAULT NULL,
  `images` varchar(200) DEFAULT NULL,
  `extra_img` longtext DEFAULT NULL,
  `sign_up_id` varchar(20) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_group_details`
--

INSERT INTO `stk_group_details` (`id`, `member_id`, `member_name`, `dob`, `father_name`, `mobile`, `aadhar_no`, `designation`, `total_members`, `mandatory`, `images`, `extra_img`, `sign_up_id`, `added_on`, `status`) VALUES
(1, '#1234', 'Tikadam', '2022-05-10', 'Wikadam', '7895461235', '1325469785', 'Teacher', '{\"total_members_in_word\":\"Three\",\"total_members_in_number\":\"3\"}', '{\"mendetory1\":\"1\",\"mendetory2\":\"1\",\"mandatory3\":\"1\",\"mandatory4\":\"1\",\"mandatory5\":\"1\"}', '165252995411.jpg', '{\"professor_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/1652529954.jpg\",\"p_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525299541.jpg\",\"s_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525299542.jpg\",\"t_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525299543.jpg\"}', '1', '2022-05-14', '1'),
(2, '#1234', 'Rajesh', '2022-05-11', 'Wikadam', '7895461235', '1325469785', 'Teacher', '{\"total_members_in_word\":\"Three\",\"total_members_in_number\":\"3\"}', '{\"mendetory1\":\"1\",\"mendetory2\":\"1\",\"mandatory3\":\"1\",\"mandatory4\":\"1\",\"mandatory5\":\"1\"}', '165252995416.jpg', '{\"professor_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/1652529954.jpg\",\"p_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525299541.jpg\",\"s_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525299542.jpg\",\"t_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525299543.jpg\"}', '1', '2022-05-14', '1'),
(3, '#1234', 'Tikadam', '2022-05-03', 'Wikadam', '7895461235', '1325469785', 'Teacher', '{\"total_members_in_word\":\"Three\",\"total_members_in_number\":\"3\"}', '{\"mendetory1\":\"1\",\"mendetory2\":\"1\",\"mandatory3\":\"1\",\"mandatory4\":\"1\",\"mandatory5\":\"1\"}', '165252995410.jpg', '{\"professor_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/1652529954.jpg\",\"p_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525299541.jpg\",\"s_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525299542.jpg\",\"t_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525299543.jpg\"}', '1', '2022-05-14', '1'),
(4, '#8756', 'Satyam', '2022-05-12', 'Shivam', '7418529635', '7985461325', 'Ranchi', '{\"total_members_in_word\":\"Three\",\"total_members_in_number\":\"123456785965\"}', '{\"mendetory1\":\"1\",\"mendetory2\":\"1\",\"mandatory3\":\"1\",\"mandatory4\":\"1\",\"mandatory5\":\"1\"}', '165253061411.jpg', '{\"professor_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/1652530614.jpg\",\"p_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525306141.jpg\",\"s_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525306142.jpg\",\"t_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525306143.jpg\"}', '2', '2022-05-14', '1'),
(5, '#8765', 'Ramesh', '2022-05-18', 'Shiwam', '7895461235', '1325469785', 'Teacher', '{\"total_members_in_word\":\"Three\",\"total_members_in_number\":\"123456785965\"}', '{\"mendetory1\":\"1\",\"mendetory2\":\"1\",\"mandatory3\":\"1\",\"mandatory4\":\"1\",\"mandatory5\":\"1\"}', '165253061410.jpg', '{\"professor_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/1652530614.jpg\",\"p_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525306141.jpg\",\"s_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525306142.jpg\",\"t_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16525306143.jpg\"}', '2', '2022-05-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_group_report`
--

CREATE TABLE `stk_group_report` (
  `id` int(11) NOT NULL,
  `group_no_a` varchar(100) DEFAULT NULL,
  `group_name_a` varchar(100) DEFAULT NULL,
  `group_address` text DEFAULT NULL,
  `meeting_no` varchar(100) DEFAULT NULL,
  `passbook_issue_fee` varchar(100) DEFAULT NULL,
  `weekly_saving_deposit` varchar(100) DEFAULT NULL,
  `emi_deposit` varchar(100) DEFAULT NULL,
  `bouncing_fee` varchar(100) DEFAULT NULL,
  `late_fine_fee` varchar(100) DEFAULT NULL,
  `banking_id3` varchar(100) DEFAULT NULL,
  `total_revenue_2_` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `batch_no` varchar(100) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_group_report`
--

INSERT INTO `stk_group_report` (`id`, `group_no_a`, `group_name_a`, `group_address`, `meeting_no`, `passbook_issue_fee`, `weekly_saving_deposit`, `emi_deposit`, `bouncing_fee`, `late_fine_fee`, `banking_id3`, `total_revenue_2_`, `user_id`, `batch_no`, `added_on`, `status`) VALUES
(1, '', '', '', '---SELECT---', '', '', '', '', '', '', '', '3', '#7654', '2022-05-14', '1'),
(2, 'sdf', 'dsfsdf', 'sdfsd', '3 week', 'sdf', 'sdfsd', 'fds', 'fsdf', 'sdfsd', 'fsdf', 'sdfdsfd', '3', '#7654', '2022-05-14', '1'),
(3, 'ewrff', 'sdfew', 'fsfewf', '4 week', 'wrfdew', 'fewfds', 'frewfsf', 'fdsfsdf', 'ewfsdf', 'sdfdsfsd', 'sdfdsfd', '3', '#7654', '2022-05-14', '1'),
(4, '#125544', 'Mohan', 'ranchu', '2 week', '200', '200', '200', '200', '200', '200', '1', '2', '#546568', '2022-05-16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_group_report_team`
--

CREATE TABLE `stk_group_report_team` (
  `id` int(11) NOT NULL,
  `group_no_a` varchar(100) DEFAULT NULL,
  `group_name_a` varchar(100) DEFAULT NULL,
  `group_address` text DEFAULT NULL,
  `meeting_no` varchar(100) DEFAULT NULL,
  `passbook_issue_fee` varchar(100) DEFAULT NULL,
  `weekly_saving_deposit` varchar(100) DEFAULT NULL,
  `emi_deposit` varchar(100) DEFAULT NULL,
  `bouncing_fee` varchar(100) DEFAULT NULL,
  `late_fine_fee` varchar(100) DEFAULT NULL,
  `banking_id3` varchar(100) DEFAULT NULL,
  `total_revenue_2_` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `batch_no` varchar(100) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_group_report_team`
--

INSERT INTO `stk_group_report_team` (`id`, `group_no_a`, `group_name_a`, `group_address`, `meeting_no`, `passbook_issue_fee`, `weekly_saving_deposit`, `emi_deposit`, `bouncing_fee`, `late_fine_fee`, `banking_id3`, `total_revenue_2_`, `user_id`, `batch_no`, `added_on`, `status`) VALUES
(1, '#43333', '25415', '5588', '2 week', 'sdf', 'sdfsd', 'fds', '59852', 'sdfsd', 'fsdf', '2', '2', '#546568', '2022-05-18', '1'),
(2, 'sdf', 'dsfsdf', 'sdfsd', '1 week', 'sdf', 'sdfsd', 'fds', 'fsdf', '200', '200', '2', '2', '#546568', '2022-05-18', '1'),
(3, '#43333', '25415', '5588', '2 week', 'sdf', 'sdfsd', 'fds', '59852', 'sdfsd', 'fsdf', '1', '2', '#546568', '2022-05-18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_group_resource`
--

CREATE TABLE `stk_group_resource` (
  `id` int(11) NOT NULL,
  `group_no` varchar(500) DEFAULT NULL,
  `group_name` varchar(500) DEFAULT NULL,
  `installation_date` date DEFAULT NULL,
  `total_revenue` varchar(200) DEFAULT NULL,
  `mandatory1` varchar(1) DEFAULT NULL,
  `mandatory2` varchar(1) DEFAULT NULL,
  `mandatory3` varchar(1) DEFAULT NULL,
  `mandatory4` varchar(1) DEFAULT NULL,
  `mandatory5` varchar(1) DEFAULT NULL,
  `mandatory6` varchar(1) DEFAULT NULL,
  `report_confirm` varchar(200) DEFAULT NULL,
  `groupdetails` longtext DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_group_signup`
--

CREATE TABLE `stk_group_signup` (
  `id` int(11) NOT NULL,
  `inception_date` date DEFAULT NULL,
  `state_unit_name` varchar(200) DEFAULT NULL,
  `division_unit_name` varchar(200) DEFAULT NULL,
  `dist` varchar(200) DEFAULT NULL,
  `sponsor_id` varchar(200) DEFAULT NULL,
  `block` varchar(200) DEFAULT NULL,
  `gram_panchayat` varchar(200) DEFAULT NULL,
  `ward_no` varchar(200) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `group_name` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_group_signup`
--

INSERT INTO `stk_group_signup` (`id`, `inception_date`, `state_unit_name`, `division_unit_name`, `dist`, `sponsor_id`, `block`, `gram_panchayat`, `ward_no`, `created_by`, `group_name`, `mobile_no`, `email`, `username`, `password`, `added_on`, `status`) VALUES
(1, '2022-05-04', '4', '12', 'Patna', '0', 'ranchi', 'Patna', '#4582658', '3', 'Maa Bhawani', '1325469785', 'mabhawani@gmail.com', 'maabhawani', '12345', '2022-05-14', '1'),
(2, '2022-05-11', '3', '4', 'Patna', '2', 'bhopal', 'Sangram Singh Nagar', '#87656', '2', 'ShreeRam', '7945685241', 'shreeram@gmail.com', 'shreeram', '12345', '2022-05-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_member_details`
--

CREATE TABLE `stk_member_details` (
  `id` int(11) NOT NULL,
  `membership_no` varchar(200) DEFAULT NULL,
  `sponser_id` varchar(200) DEFAULT NULL,
  `signup_id` varchar(200) DEFAULT NULL,
  `app_no` varchar(200) DEFAULT NULL,
  `app_date` date DEFAULT NULL,
  `state_unit_name` varchar(200) DEFAULT NULL,
  `division_unit_name` varchar(200) DEFAULT NULL,
  `applicant_name` varchar(200) DEFAULT NULL,
  `dob` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `village` varchar(200) DEFAULT NULL,
  `panchayat` varchar(200) DEFAULT NULL,
  `ward_no` varchar(200) DEFAULT NULL,
  `police_station` varchar(200) DEFAULT NULL,
  `block` varchar(200) DEFAULT NULL,
  `dist` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pin_code` varchar(100) DEFAULT NULL,
  `aadhar` varchar(100) DEFAULT NULL,
  `election_card_no` varchar(100) DEFAULT NULL,
  `from` varchar(100) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `identification_marks` varchar(200) DEFAULT NULL,
  `confirm_membership` varchar(10) DEFAULT NULL,
  `marital_status` varchar(50) DEFAULT NULL,
  `super` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `education` varchar(20) DEFAULT NULL,
  `other_details` varchar(200) DEFAULT NULL,
  `nominee_name` varchar(100) DEFAULT NULL,
  `nominee_relation` varchar(100) DEFAULT NULL,
  `nominee_age` varchar(100) DEFAULT NULL,
  `nominee_aadhar` varchar(100) DEFAULT NULL,
  `confirm_1` varchar(2) DEFAULT NULL,
  `confirm_2` varchar(2) DEFAULT NULL,
  `witness_name` varchar(200) DEFAULT NULL,
  `witness_mobile_no` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `service_no` varchar(200) DEFAULT NULL,
  `batch_no` varchar(200) DEFAULT NULL,
  `officer_mobile_no` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_member_details`
--

INSERT INTO `stk_member_details` (`id`, `membership_no`, `sponser_id`, `signup_id`, `app_no`, `app_date`, `state_unit_name`, `division_unit_name`, `applicant_name`, `dob`, `mobile_no`, `email`, `village`, `panchayat`, `ward_no`, `police_station`, `block`, `dist`, `state`, `pin_code`, `aadhar`, `election_card_no`, `from`, `sex`, `nationality`, `category`, `identification_marks`, `confirm_membership`, `marital_status`, `super`, `year`, `education`, `other_details`, `nominee_name`, `nominee_relation`, `nominee_age`, `nominee_aadhar`, `confirm_1`, `confirm_2`, `witness_name`, `witness_mobile_no`, `designation`, `service_no`, `batch_no`, `officer_mobile_no`, `added_on`, `status`) VALUES
(1, '784512', NULL, '1', '859674', '2022-05-05', 'BIHAR', 'Patna division', 'Ramesh Pandey', '1972-02-25', '9297827636', 'ramesh@gmail.com', 'Patna', 'Patna', '#123456', 'Patna', 'Patna', 'Patna', 'Bihar', '74856', '978456132456', 'ELE-758278', 'rural', 'rural', 'Indian', 'gen', 'Black Mole On Right Hend', 'yes', 'Unmarried', 'super_e', '8 years', 'Eighth Pass', '', 'Pankaj Mani Tiwari', 'Hindu', '35', '784512963524', '1', '1', 'Wife', '9598757685', 'Commonding  Officer', '7845123695', 'Jan', '9784561325', '2022-05-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stk_menu`
--

CREATE TABLE `stk_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_menu`
--

INSERT INTO `stk_menu` (`id`, `menu`, `added_on`, `status`) VALUES
(3, 'E-Contract', '2022-03-28', '1'),
(4, 'My Office', '2022-03-28', '1'),
(5, 'My Project', '2022-03-28', '1'),
(6, 'Events', '2022-03-28', '1'),
(7, 'gallery', '2022-03-28', '1'),
(8, 'vacancy', '2022-03-28', '1'),
(9, 'Setting', '2022-03-28', '1'),
(11, 'bcvbcv', '2022-03-28', '0'),
(12, 'vh', '2022-03-28', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stk_menu_control`
--

CREATE TABLE `stk_menu_control` (
  `id` int(11) NOT NULL,
  `post_id` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `e_contract` varchar(10) DEFAULT NULL,
  `my_office` varchar(10) DEFAULT NULL,
  `my_project` varchar(10) DEFAULT NULL,
  `vecency` varchar(10) DEFAULT NULL,
  `events` varchar(10) DEFAULT NULL,
  `gallery` varchar(10) DEFAULT NULL,
  `added_on` date NOT NULL,
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_menu_control`
--

INSERT INTO `stk_menu_control` (`id`, `post_id`, `state`, `e_contract`, `my_office`, `my_project`, `vecency`, `events`, `gallery`, `added_on`, `status`) VALUES
(57, '9', '3', 'true', 'false', 'false', 'false', 'true', 'true', '2022-04-08', '1'),
(58, '10', '3', 'false', 'true', 'true', 'true', 'true', 'false', '2022-04-08', '1'),
(59, '11', '3', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(60, '19', '3', 'false', 'true', 'true', 'false', 'true', 'true', '2022-04-08', '1'),
(61, '20', '3', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(62, '21', '3', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-08', '1'),
(63, '22', '3', 'false', 'false', 'true', 'true', 'false', 'true', '2022-04-08', '1'),
(64, '23', '3', 'false', 'true', 'true', 'false', 'true', 'false', '2022-04-08', '1'),
(65, '15', '3', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-08', '1'),
(66, '16', '3', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(67, '17', '3', 'true', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(68, '18', '3', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-08', '1'),
(69, '14', '3', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-08', '1'),
(70, '4', '3', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-08', '1'),
(71, '6', '3', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-08', '1'),
(72, '7', '3', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-08', '1'),
(73, '8', '3', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(74, '1', '3', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(75, '2', '3', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(80, '9', '4', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(81, '10', '4', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(82, '11', '4', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(83, '19', '4', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(84, '20', '4', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(85, '21', '4', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(86, '22', '4', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(87, '23', '4', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(88, '15', '4', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(89, '16', '4', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(90, '17', '4', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(91, '18', '4', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(92, '12', '5', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(93, '14', '4', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(94, '3', '4', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(95, '4', '4', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(96, '5', '4', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(97, '6', '4', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(98, '7', '4', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(99, '8', '4', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(100, '1', '4', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(101, '2', '4', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(102, '3', '3', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(103, '5', '3', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(104, '9', '5', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-08', '1'),
(105, '10', '5', 'true', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(106, '11', '5', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(107, '19', '5', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(108, '20', '5', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(109, '21', '5', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(110, '22', '5', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(111, '23', '5', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(112, '15', '5', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(113, '16', '5', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(114, '17', '5', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(115, '18', '5', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(117, '14', '5', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(118, '3', '5', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(119, '4', '5', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(120, '5', '5', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(121, '6', '5', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(122, '7', '5', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(123, '8', '5', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(124, '1', '5', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(125, '2', '5', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(126, '12', '3', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(127, '12', '4', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(128, '9', '6', 'true', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(130, '10', '6', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-08', '1'),
(131, '11', '6', 'false', 'true', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(132, '19', '6', 'true', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(133, '20', '6', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-08', '1'),
(134, '21', '6', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(135, '22', '6', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-08', '1'),
(136, '23', '6', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(137, '15', '6', 'false', 'false', 'false', 'false', 'true', 'true', '2022-04-08', '1'),
(138, '16', '6', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(139, '17', '6', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(140, '18', '6', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(141, '12', '6', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(142, '14', '6', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(143, '3', '6', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(144, '4', '6', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(145, '5', '6', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(146, '6', '6', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(147, '7', '6', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(148, '8', '6', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(149, '1', '6', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(150, '2', '6', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(151, '9', '7', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(152, '10', '7', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(153, '11', '7', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(154, '19', '7', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(155, '20', '7', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(156, '21', '7', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(157, '22', '7', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(158, '23', '7', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(159, '15', '7', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(160, '16', '7', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(161, '17', '7', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(162, '18', '7', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(163, '12', '7', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(164, '14', '7', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(165, '3', '7', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(166, '4', '7', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(167, '5', '7', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(168, '6', '7', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(169, '7', '7', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(170, '8', '7', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(171, '1', '7', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(172, '2', '7', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(174, '9', '8', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(175, '10', '8', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(176, '11', '8', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(177, '19', '8', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(178, '20', '8', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(179, '21', '8', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-09', '1'),
(180, '22', '8', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(181, '23', '8', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(182, '15', '8', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(183, '16', '8', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(184, '17', '8', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(185, '18', '8', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(186, '12', '8', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(187, '14', '8', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(188, '3', '8', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(189, '4', '8', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-09', '1'),
(190, '5', '8', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(191, '6', '8', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(192, '7', '8', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(193, '8', '8', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(194, '1', '8', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(195, '2', '8', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(196, '9', '9', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(197, '10', '9', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(198, '11', '9', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(199, '19', '9', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(200, '20', '9', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(201, '21', '9', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-09', '1'),
(202, '22', '9', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(203, '23', '9', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(204, '15', '9', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(205, '16', '9', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(206, '17', '9', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(207, '18', '9', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(208, '12', '9', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(209, '14', '9', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(210, '3', '9', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(211, '4', '9', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-09', '1'),
(212, '5', '9', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(213, '6', '9', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(214, '7', '9', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(215, '8', '9', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(216, '1', '9', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(217, '2', '9', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(218, '9', '10', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(219, '10', '10', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(220, '11', '10', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(221, '19', '10', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(222, '20', '10', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(223, '21', '10', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-09', '1'),
(224, '22', '10', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(225, '23', '10', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(226, '15', '10', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(227, '16', '10', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(228, '17', '10', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(229, '18', '10', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(230, '12', '10', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(231, '14', '10', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(232, '3', '10', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(233, '4', '10', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-09', '1'),
(234, '5', '10', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(235, '6', '10', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(236, '7', '10', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(237, '8', '10', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(238, '1', '10', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(239, '2', '10', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(240, '9', '11', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(241, '10', '11', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(242, '11', '11', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(243, '19', '11', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(244, '20', '11', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(245, '21', '11', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-09', '1'),
(246, '22', '11', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(247, '23', '11', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(248, '15', '11', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(249, '16', '11', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(250, '17', '11', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(251, '18', '11', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(252, '12', '11', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(253, '14', '11', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(254, '3', '11', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(255, '4', '11', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-09', '1'),
(256, '5', '11', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(257, '6', '11', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(258, '7', '11', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(259, '8', '11', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(260, '1', '11', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(261, '2', '11', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(262, '9', '12', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(263, '10', '12', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(264, '11', '12', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(265, '19', '12', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(266, '20', '12', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(267, '21', '12', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-09', '1'),
(268, '22', '12', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(269, '23', '12', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(270, '15', '12', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(271, '16', '12', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(272, '17', '12', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(273, '18', '12', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(274, '12', '12', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(275, '14', '12', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(276, '3', '12', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(277, '4', '12', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-09', '1'),
(278, '5', '12', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(279, '6', '12', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(280, '7', '12', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(281, '8', '12', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(282, '1', '12', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(283, '2', '12', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(284, '9', '13', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(285, '10', '13', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(286, '11', '13', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(287, '19', '13', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(288, '20', '13', 'false', 'false', 'false', 'false', 'true', 'true', '2022-04-09', '1'),
(289, '21', '13', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(290, '22', '13', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(291, '23', '13', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(292, '15', '13', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(293, '16', '13', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(294, '17', '13', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(295, '18', '13', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(296, '12', '13', 'false', 'false', 'false', 'false', 'true', 'true', '2022-04-09', '1'),
(297, '14', '13', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(298, '3', '13', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(299, '4', '13', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(300, '5', '13', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(301, '6', '13', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(302, '7', '13', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(303, '8', '13', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(304, '1', '13', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(305, '2', '13', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(306, '9', '14', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(307, '10', '14', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(308, '11', '14', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(309, '19', '14', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(310, '20', '14', 'false', 'false', 'false', 'false', 'true', 'true', '2022-04-09', '1'),
(311, '21', '14', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(312, '22', '14', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(313, '23', '14', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(314, '15', '14', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(315, '16', '14', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(316, '17', '14', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(317, '18', '14', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(318, '12', '14', 'false', 'false', 'false', 'false', 'true', 'true', '2022-04-09', '1'),
(319, '14', '14', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(320, '3', '14', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(321, '4', '14', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(322, '5', '14', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(323, '6', '14', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(324, '7', '14', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(325, '8', '14', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(326, '1', '14', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(327, '2', '14', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(328, '9', '15', 'true', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(329, '10', '15', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(330, '11', '15', 'false', 'false', 'true', 'false', 'true', 'true', '2022-04-09', '1'),
(331, '19', '15', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(332, '20', '15', 'false', 'true', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(333, '21', '15', 'false', 'false', 'true', 'true', 'true', 'true', '2022-04-09', '1'),
(334, '22', '15', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-09', '1'),
(335, '23', '15', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(336, '15', '15', 'false', 'false', 'true', 'false', 'true', 'false', '2022-04-09', '1'),
(337, '16', '15', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(338, '17', '15', 'true', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(339, '18', '15', 'false', 'true', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(340, '12', '15', 'true', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(341, '14', '15', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(342, '3', '15', 'false', 'true', 'false', 'false', 'true', 'true', '2022-04-09', '1'),
(343, '4', '15', 'true', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(344, '5', '15', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(345, '6', '15', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(346, '7', '15', 'true', 'true', 'false', 'false', 'true', 'true', '2022-04-09', '1'),
(347, '8', '15', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(348, '1', '15', 'true', 'true', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(349, '2', '15', 'false', 'true', 'true', 'false', 'true', 'false', '2022-04-09', '1'),
(350, '9', '17', 'true', 'true', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(351, '10', '17', 'false', 'false', 'true', 'false', 'true', 'true', '2022-04-09', '1'),
(352, '11', '17', 'false', 'true', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(353, '19', '17', 'false', 'false', 'true', 'false', 'true', 'false', '2022-04-09', '1'),
(354, '21', '17', 'true', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(355, '22', '17', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(356, '23', '17', 'false', 'false', 'true', 'true', 'false', 'true', '2022-04-09', '1'),
(357, '15', '17', 'false', 'true', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(358, '16', '17', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(359, '17', '17', 'true', 'false', 'true', 'true', 'true', 'true', '2022-04-09', '1'),
(360, '18', '17', 'false', 'true', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(361, '12', '17', 'false', 'true', 'false', 'false', 'true', 'true', '2022-04-09', '1'),
(362, '14', '17', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(363, '3', '17', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(364, '4', '17', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(365, '5', '17', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(366, '6', '17', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(367, '7', '17', 'false', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(368, '8', '17', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(369, '1', '17', 'true', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(370, '2', '17', 'true', 'false', 'false', 'true', 'true', 'true', '2022-04-09', '1'),
(393, '9', '18', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(394, '10', '18', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(395, '11', '18', 'false', 'false', 'true', 'false', 'true', 'true', '2022-04-09', '1'),
(396, '19', '18', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(397, '20', '18', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(398, '21', '18', 'true', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(399, '22', '18', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(400, '23', '18', 'false', 'false', 'false', 'true', 'true', 'true', '2022-04-09', '1'),
(401, '15', '18', 'true', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(402, '16', '18', 'false', 'false', 'true', 'true', 'true', 'true', '2022-04-09', '1'),
(403, '17', '18', 'true', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(404, '18', '18', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(405, '12', '18', 'false', 'true', 'true', 'false', 'true', 'true', '2022-04-09', '1'),
(406, '14', '18', 'false', 'true', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(407, '3', '18', 'false', 'false', 'true', 'false', 'true', 'true', '2022-04-09', '1'),
(408, '4', '18', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(409, '5', '18', 'true', 'true', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(410, '6', '18', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(411, '7', '18', 'false', 'false', 'false', 'true', 'true', 'true', '2022-04-09', '1'),
(412, '8', '18', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(413, '1', '18', 'true', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(414, '2', '18', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(415, '9', '19', 'true', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(416, '10', '19', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(417, '11', '19', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(418, '19', '19', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(419, '20', '19', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(420, '21', '19', 'false', 'false', 'true', 'false', 'true', 'true', '2022-04-09', '1'),
(421, '22', '19', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(422, '23', '19', 'false', 'false', 'false', 'true', 'true', 'true', '2022-04-09', '1'),
(423, '15', '19', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(424, '16', '19', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(425, '17', '19', 'true', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(426, '18', '19', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(427, '12', '19', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(428, '14', '19', 'false', 'false', 'false', 'true', 'true', 'true', '2022-04-09', '1'),
(429, '3', '19', 'true', 'true', 'true', 'false', 'true', 'false', '2022-04-09', '1'),
(430, '4', '19', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(431, '5', '19', 'false', 'false', 'false', 'true', 'true', 'true', '2022-04-09', '1'),
(432, '6', '19', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(433, '7', '19', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(434, '8', '19', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(435, '1', '19', 'true', 'true', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(436, '2', '19', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(437, '9', '20', 'true', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(438, '10', '20', 'false', 'true', 'true', 'false', 'false', 'true', '2022-04-09', '1'),
(439, '11', '20', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(440, '19', '20', 'false', 'true', 'true', 'false', 'true', 'false', '2022-04-09', '1'),
(441, '20', '20', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(442, '21', '20', 'false', 'false', 'false', 'true', 'true', 'true', '2022-04-09', '1'),
(443, '22', '20', 'true', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(444, '23', '20', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(445, '15', '20', 'false', 'false', 'true', 'false', 'true', 'true', '2022-04-09', '1'),
(446, '16', '20', 'false', 'true', 'true', 'false', 'true', 'true', '2022-04-09', '1'),
(447, '17', '20', 'true', 'true', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(448, '18', '20', 'false', 'true', 'true', 'false', 'false', 'true', '2022-04-09', '1'),
(449, '12', '20', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(450, '14', '20', 'true', 'true', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(451, '3', '20', 'false', 'false', 'true', 'false', 'true', 'true', '2022-04-09', '1'),
(452, '4', '20', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(453, '5', '20', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(454, '6', '20', 'false', 'false', 'true', 'true', 'true', 'true', '2022-04-09', '1'),
(455, '7', '20', 'false', 'true', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(456, '8', '20', 'false', 'true', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(457, '1', '20', 'true', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(458, '2', '20', 'false', 'true', 'true', 'false', 'true', 'false', '2022-04-09', '1'),
(459, '9', '21', 'true', 'true', 'false', 'false', 'false', 'false', '2022-04-09', '1'),
(460, '10', '21', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(461, '11', '21', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(462, '19', '21', 'false', 'true', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(463, '20', '21', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(464, '21', '21', 'false', 'true', 'false', 'false', 'true', 'true', '2022-04-09', '1'),
(465, '22', '21', 'true', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(466, '23', '21', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(467, '15', '21', 'true', 'true', 'false', 'true', 'false', 'false', '2022-04-09', '1'),
(468, '16', '21', 'false', 'false', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(469, '17', '21', 'true', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(470, '18', '21', 'false', 'true', 'true', 'true', 'true', 'false', '2022-04-09', '1'),
(471, '12', '21', 'false', 'true', 'true', 'false', 'true', 'false', '2022-04-09', '1'),
(472, '14', '21', 'false', 'false', 'true', 'true', 'true', 'true', '2022-04-09', '1'),
(473, '3', '21', 'true', 'true', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(474, '4', '21', 'false', 'false', 'true', 'true', 'true', 'true', '2022-04-09', '1'),
(475, '5', '21', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(476, '6', '21', 'false', 'false', 'false', 'true', 'true', 'false', '2022-04-09', '1'),
(477, '7', '21', 'false', 'true', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(478, '8', '21', 'false', 'false', 'true', 'true', 'false', 'false', '2022-04-09', '1'),
(479, '1', '21', 'true', 'true', 'true', 'false', 'false', 'false', '2022-04-09', '1'),
(480, '2', '21', 'false', 'true', 'false', 'true', 'true', 'false', '2022-04-09', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_myoffice`
--

CREATE TABLE `stk_myoffice` (
  `id` int(11) NOT NULL,
  `depart_id` varchar(200) DEFAULT NULL,
  `posts` varchar(200) DEFAULT NULL,
  `e_contract_status` text DEFAULT NULL,
  `service_did_status` text DEFAULT NULL,
  `service_book_status` text DEFAULT NULL,
  `training_status` text DEFAULT NULL,
  `appointment_status` text DEFAULT NULL,
  `order_status` text DEFAULT NULL,
  `ultimatum_status` text DEFAULT NULL,
  `transfer_status` text DEFAULT NULL,
  `promotion_status` text DEFAULT NULL,
  `security_fund_status` text DEFAULT NULL,
  `my_pf_status` text DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_myreport`
--

CREATE TABLE `stk_myreport` (
  `id` int(11) NOT NULL,
  `depart_id` varchar(200) DEFAULT NULL,
  `posts` varchar(200) DEFAULT NULL,
  `progress_report` text DEFAULT NULL,
  `monthly_progress` text DEFAULT NULL,
  `annual_progress` text DEFAULT NULL,
  `honorarium_slip` text DEFAULT NULL,
  `house_found` text DEFAULT NULL,
  `emergency_leave` text DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_myteamoffice`
--

CREATE TABLE `stk_myteamoffice` (
  `id` int(11) NOT NULL,
  `depart_id` varchar(200) DEFAULT NULL,
  `posts` varchar(200) DEFAULT NULL,
  `daily_progress_status` text DEFAULT NULL,
  `monthly_progress_status` text DEFAULT NULL,
  `annual_progress_status` text DEFAULT NULL,
  `house_fund_status` text DEFAULT NULL,
  `leave_status` text DEFAULT NULL,
  `office_rent_status` text DEFAULT NULL,
  `daily_expense_status` text DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_my_clubgroup`
--

CREATE TABLE `stk_my_clubgroup` (
  `id` int(11) NOT NULL,
  `depart_id` varchar(200) DEFAULT NULL,
  `posts` varchar(200) DEFAULT NULL,
  `new_club_member` text DEFAULT NULL,
  `club_team_size` text DEFAULT NULL,
  `five_str` text DEFAULT NULL,
  `seven_str` text DEFAULT NULL,
  `silver_str` text DEFAULT NULL,
  `golden_str` text DEFAULT NULL,
  `diamond_str` text DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_my_document`
--

CREATE TABLE `stk_my_document` (
  `id` int(11) NOT NULL,
  `depart_id` text NOT NULL,
  `posts` text NOT NULL,
  `office_quotation` text NOT NULL,
  `service_did` text NOT NULL,
  `service_book` text NOT NULL,
  `training_proc` text NOT NULL,
  `appointment_proc` text DEFAULT NULL,
  `official_order` text DEFAULT NULL,
  `ultimatum` text DEFAULT NULL,
  `transfer_proc` text DEFAULT NULL,
  `promotion_proc` text DEFAULT NULL,
  `security_fund_rec` text NOT NULL,
  `my_pf` text DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_officer_details`
--

CREATE TABLE `stk_officer_details` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(20) DEFAULT NULL,
  `reg_no` varchar(200) DEFAULT NULL,
  `Join_in_branch` varchar(50) DEFAULT NULL,
  `branch_code` varchar(50) DEFAULT NULL,
  `department_id` varchar(50) DEFAULT NULL,
  `post_id` varchar(30) DEFAULT NULL,
  `mobile_no` varchar(15) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `service_did` varchar(20) DEFAULT NULL,
  `officer_first_name` varchar(50) DEFAULT NULL,
  `officer_middle_name` varchar(25) DEFAULT NULL,
  `officer_last_name` varchar(25) DEFAULT NULL,
  `father_first` varchar(25) DEFAULT NULL,
  `father_middle` varchar(25) DEFAULT NULL,
  `father_last` varchar(25) DEFAULT NULL,
  `query` varchar(10) DEFAULT NULL,
  `mother_occupation` varchar(200) DEFAULT NULL,
  `m_annual_encome` decimal(10,2) DEFAULT NULL,
  `father_occupation` varchar(50) DEFAULT NULL,
  `f_annual_income` decimal(10,2) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `marriage_status` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `aadhar_no` varchar(20) DEFAULT NULL,
  `pan_no` varchar(20) DEFAULT NULL,
  `security_rs_amount` varchar(20) DEFAULT NULL,
  `security_transaction_id` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `processing_rs_amount` varchar(20) DEFAULT NULL,
  `processing_rs_transaction` varchar(20) DEFAULT NULL,
  `processing_rs_date` date DEFAULT NULL,
  `training_rs` varchar(20) DEFAULT NULL,
  `training_transaction` varchar(20) DEFAULT NULL,
  `training_date` date DEFAULT NULL,
  `total_deposit` varchar(50) DEFAULT NULL,
  `bank_name` text DEFAULT NULL,
  `branch_name` varchar(30) DEFAULT NULL,
  `type_of_account` varchar(20) DEFAULT NULL,
  `ifsc_code` varchar(20) DEFAULT NULL,
  `confirm_1` varchar(1) DEFAULT NULL,
  `confirm_2` varchar(1) DEFAULT NULL,
  `confirm_3` varchar(1) DEFAULT NULL,
  `confirm_4` varchar(1) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `signature` varchar(100) DEFAULT NULL,
  `aadhar` varchar(100) DEFAULT NULL,
  `pan` varchar(100) DEFAULT NULL,
  `bank_account` varchar(100) DEFAULT NULL,
  `signature_upload` varchar(100) DEFAULT NULL,
  `photo_upload` varchar(100) DEFAULT NULL,
  `security_e_receipt` varchar(100) DEFAULT NULL,
  `processing_receipt` varchar(100) DEFAULT NULL,
  `training_receipt` varchar(100) DEFAULT NULL,
  `signup_id` varchar(75) DEFAULT NULL,
  `verify_status` varchar(1) NOT NULL DEFAULT '0',
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_officer_details`
--

INSERT INTO `stk_officer_details` (`id`, `batch_no`, `reg_no`, `Join_in_branch`, `branch_code`, `department_id`, `post_id`, `mobile_no`, `email_id`, `service_did`, `officer_first_name`, `officer_middle_name`, `officer_last_name`, `father_first`, `father_middle`, `father_last`, `query`, `mother_occupation`, `m_annual_encome`, `father_occupation`, `f_annual_income`, `gender`, `nationality`, `marriage_status`, `dob`, `aadhar_no`, `pan_no`, `security_rs_amount`, `security_transaction_id`, `date`, `processing_rs_amount`, `processing_rs_transaction`, `processing_rs_date`, `training_rs`, `training_transaction`, `training_date`, `total_deposit`, `bank_name`, `branch_name`, `type_of_account`, `ifsc_code`, `confirm_1`, `confirm_2`, `confirm_3`, `confirm_4`, `image`, `signature`, `aadhar`, `pan`, `bank_account`, `signature_upload`, `photo_upload`, `security_e_receipt`, `processing_receipt`, `training_receipt`, `signup_id`, `verify_status`, `username`, `password`, `added_on`, `status`) VALUES
(2, '#546568', NULL, '#BNCH12345', '#00C2', '1', '1', '1325469785', 'pmt.pankaj76@gmail.com', NULL, 'Pankaj', 'Mani ', 'Tiwari', 'Sidheshwar', 'nath', 'Tiwari', 'JSQ4 ACC C', 'House Wife', '2000.00', 'teacher', '11222.00', 'Male', 'Indian', 'Married', '2022-05-17', '123456789458', 'PAn1234', '500', '500', '2022-05-13', '500', '54869855', '2022-06-08', '200', '55858', '2022-06-07', '1234555', 'sfdsfsdf', '222', 'sdfdsfs', 'dsfsdfdsfdsf', '1', '1', '1', '1', '/assets/uploads/1652527463.jpg', '/assets/uploads/16525274631.jpg', '/assets/uploads/16525274632.jpg', '/assets/uploads/16525274633.jpg', '/assets/uploads/16525274634.jpg', '/assets/uploads/16525274635.jpg', '/assets/uploads/16525274636.jpg', '/assets/uploads/16525274637.jpg', '/assets/uploads/16525274638.jpg', '/assets/uploads/16525274639.jpg', '19', '1', 'PANK123', '12345', '2022-05-14', '1'),
(3, '#7654', NULL, 'Ranchi', '#RNC8765', '3', '5', '7418529365', 'rajesh@gmail.com', NULL, 'Pankaj', 'Mani ', 'Tiwari', 'Sidheshwar', 'nath', 'Tiwari', 'JSQ4 ACC C', 'House Wife', '8000.00', 'Teacher ', '8000.00', 'Male', 'Indian', 'Single', '2022-05-04', '123456789458', 'PAN1234', '500', '500', '2022-05-24', '500', '54869855', '2022-05-04', '200', '55858', '2022-05-04', 'Panjab National bank', 'Panjab National bank', 'Ranchi', 'Saving', '#PNB00022221234', '1', '1', '1', '1', '/assets/uploads/1652528504.jpg', '/assets/uploads/16525285041.jpg', '/assets/uploads/16525285042.jpg', '/assets/uploads/16525285043.jpg', '/assets/uploads/16525285044.jpg', '/assets/uploads/16525285045.jpg', '/assets/uploads/1652528505.jpg', '/assets/uploads/16525285051.jpg', '/assets/uploads/16525285052.jpg', '/assets/uploads/16525285053.jpg', '20', '1', 'Rajesh', '12345', '2022-05-14', '1'),
(7, '#0001254', NULL, 'Ranchi', '#00021588', '2', '3', '7862453625', 'reshma@gmail.com', 'SRV445585', 'Sneha ', 'Datta', '', 'Rameshwar', 'Datta', '', 'JSQ 4 Acc ', 'House Wife', '5000.00', 'Teacher', '500000.00', 'Other', 'Indian', 'Married', '2022-05-19', '123456789458', 'USDB123558', '500', 'ID74859658', '2022-05-12', '200', 'ID44558888', '2022-05-04', '200', 'ID44558858', '2022-05-04', 'Yes Bank', 'Yes Bank', 'Ranchi ', 'Saving', 'YS00001254', '1', '1', '1', '1', '/assets/uploads/1652680592.jpg', '/assets/uploads/16526805921.jpg', '/assets/uploads/16526805922.jpg', '/assets/uploads/16526805923.jpg', '/assets/uploads/16526805924.jpg', '/assets/uploads/16526805925.jpg', '/assets/uploads/16526805926.jpg', '/assets/uploads/16526805927.jpg', '/assets/uploads/16526805928.jpg', '/assets/uploads/16526805929.jpg', '27', '1', 'snesh@gmail.com', '54321', '2022-05-16', '1'),
(8, '#2554588', NULL, 'Ranchi', '#882255', '4', '7', '123454678858', 'Pankaj@gmail.com', '#1234568588', 'Pankaj', 'Mohan', '', 'Sidheshwar', 'nath', '', 'dfgbdfgdfg', 'House Wife', '0.00', 'Teacher', '500000.00', 'Female', 'Migrants', 'Single', '2022-05-19', '123456789458', 'PAn1234', '500', '500', '2022-05-04', '2000', '54869855', '2022-05-04', '1000', '55858', '2022-05-11', '1234555', 'sfdsfsdf', '222', 'sdfdsfs', 'dsfsdfdsfdsf', '1', '1', '1', '1', '/assets/uploads/1652682235.jpg', '/assets/uploads/16526822351.jpg', '/assets/uploads/16526822352.jpg', '/assets/uploads/16526822353.jpg', '/assets/uploads/16526822354.jpg', NULL, NULL, '/assets/uploads/16526822355.jpg', '/assets/uploads/16526822356.jpg', '/assets/uploads/16526822357.jpg', '28', '0', NULL, NULL, '2022-05-16', '1'),
(9, '#987098980000', 'STKMRGE-29', 'Ranchi', '#00987', '2', '4', '7485963625', 'mohan@gmail.com', '#74859658', 'Satyam', 'Thakur', '', 'Rajesh', 'Rammohan ', 'Tiwari', 'ranchi\r\nRa', 'House Wife', '2000.00', 'Teacher', '500000.00', 'Male', 'Indian', 'Married', '2022-05-19', '123456789458', 'PAn1234', '500', 'ID748596258', '2022-05-19', '500', '54869855', '2022-05-11', '200', '55858', '2022-05-03', 'Nine Thousand Only ', 'Yes Bank', 'Ranchi', 'Saving', '#PNB00022221234', '1', '1', '1', '1', '/assets/uploads/1652940199.jpg', '/assets/uploads/16529401991.jpg', '/assets/uploads/1652940199.jpeg', '/assets/uploads/16529401992.jpg', '/assets/uploads/16529401993.jpg', NULL, NULL, '/assets/uploads/16529401994.jpg', '/assets/uploads/16529401995.jpg', '/assets/uploads/16529401996.jpg', '29', '0', NULL, NULL, '2022-05-19', '1'),
(14, 'January', 'STKMRGE-35', 'Ranchi', '#9876', '3', '5', '7894561235', 'pmt.pankaj@gmail.com', '#12345321', 'Mohan', 'Rajbhar', '', 'Satyam ', 'Singh', 'Rajbhar', 'Acc Colony', 'House Wife', '0.00', 'Teacher', '500000.00', 'Male', 'Indian', 'Single', '2022-05-11', '748596123548', 'PAN859636', '500', 'TRANS458596', '2022-05-04', '500', 'TRANS457869', '2022-05-12', '200', 'TRANS458596', '2022-05-05', 'Yes bank', 'Yes Bank', 'Mohan Singh', '200', '#IFSC233232', '1', '1', '1', NULL, NULL, NULL, '/assets/uploads/1652951754.jpg', '/assets/uploads/16529517541.jpg', '/assets/uploads/16529517542.jpg', NULL, NULL, '/assets/uploads/16529517543.jpg', '/assets/uploads/16529517544.jpg', '/assets/uploads/16529517545.jpg', '35', '0', NULL, NULL, '2022-05-19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_office_expense`
--

CREATE TABLE `stk_office_expense` (
  `id` int(11) NOT NULL,
  `depart_id` varchar(200) DEFAULT NULL,
  `posts` varchar(200) DEFAULT NULL,
  `office_rent` text DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_office_resource_requipment`
--

CREATE TABLE `stk_office_resource_requipment` (
  `id` int(11) NOT NULL,
  `resources` varchar(200) DEFAULT NULL,
  `modelno` varchar(200) DEFAULT NULL,
  `brandname` varchar(200) DEFAULT NULL,
  `quantity` varchar(200) DEFAULT NULL,
  `rate` varchar(200) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `total_revenue` varchar(200) DEFAULT NULL,
  `mandatory1` varchar(1) DEFAULT NULL,
  `mandatory2` varchar(1) DEFAULT NULL,
  `mandatory3` varchar(1) DEFAULT NULL,
  `mandatory4` varchar(1) DEFAULT NULL,
  `mandatory5` varchar(1) DEFAULT NULL,
  `mandatory6` varchar(1) DEFAULT NULL,
  `report_confirm` varchar(1) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_post`
--

CREATE TABLE `stk_post` (
  `id` int(11) NOT NULL,
  `depart_id` varchar(200) DEFAULT NULL,
  `post` varchar(200) DEFAULT NULL,
  `apply_fee` decimal(10,0) DEFAULT NULL,
  `security_fund` decimal(10,0) DEFAULT NULL,
  `added_on` varchar(200) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_post`
--

INSERT INTO `stk_post` (`id`, `depart_id`, `post`, `apply_fee`, `security_fund`, `added_on`, `status`) VALUES
(1, '1', 'DIRECTOR', '1025', '280000', '2022-03-04', '1'),
(2, '1', 'PERSONAL SECRETARY', '1025', '250000', '2022-03-04', '1'),
(3, '2', 'FINANCE DIRECTOR', '1025', '250000', '2022-03-04', '1'),
(4, '2', 'AUDITOR', '1025', '125000', '2022-03-04', '1'),
(5, '3', 'GENERAL MANAGER', '1025', '195000', '2022-03-04', '1'),
(6, '4', 'SUPERVISOR', '1025', '130000', '2022-03-04', '1'),
(7, '4', 'WEB MONITORING OPERATOR', '375', '29500', '2022-03-04', '1'),
(8, '4', 'RECEPTIONIST/HELPLINE', '375', '29500', '2022-03-04', '1'),
(9, '6', 'SUPERVISOR', '1025', '130000', '2022-03-04', '1'),
(10, '6', 'WEB MONITORING OPERATOR', '375', '29500', '2022-03-04', '1'),
(11, '6', 'RECEPTIONIST/HELPLINE', '375', '29500', '2022-03-04', '1'),
(12, '7', 'SUPERVISOR', '1025', '130000', '2022-03-04', '1'),
(14, '7', 'RECEPTIONIST/HELPLINE', '375', '29500', '2022-03-04', '1'),
(15, '8', 'DIVISIONAL SUPERINTENDENT', '1025', '75000', '2022-03-04', '1'),
(16, '8', 'SUPERVISOR', '1025', '130000', '2022-03-04', '1'),
(17, '8', 'WEB MONITORING OPERATOR', '375', '29500', '2022-03-04', '1'),
(18, '8', 'RECEPTIONIST', '375', '29500', '2022-03-04', '1'),
(19, '9', 'DISTRICT PROJECT MANAGER', '1025', '74000', '2022-03-04', '1'),
(20, '9', 'AREA PROJECT OFFICER', '595', '49000', '2022-03-04', '1'),
(21, '9', 'RECEPTIONIST', '375', '29500', '2022-03-04', '1'),
(22, '9', 'BLOCK PROJECT OFFICER', '525', '32000', '2022-03-04', '1'),
(23, '9', 'PANCHAYAT CO-ORDINATOR', '325', '20500', '2022-03-04', '1'),
(29, '5', 'SUPERVISOR', '1025', '130000', '2022-05-13', '1'),
(30, '5', 'RECEPTIONIST/HELPLINE', '375', '29500', '2022-05-13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_project_member`
--

CREATE TABLE `stk_project_member` (
  `id` int(11) NOT NULL,
  `sponsor_id` varchar(200) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `application_date` date DEFAULT NULL,
  `state_unit_name` varchar(200) DEFAULT NULL,
  `division_unit_name` varchar(200) DEFAULT NULL,
  `dist` varchar(200) DEFAULT NULL,
  `applicant_name` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_project_member`
--

INSERT INTO `stk_project_member` (`id`, `sponsor_id`, `created_by`, `application_date`, `state_unit_name`, `division_unit_name`, `dist`, `applicant_name`, `dob`, `mobile_no`, `email`, `username`, `password`, `added_on`, `status`) VALUES
(1, '0', '2', '2022-05-05', '3', '1', 'Patna', 'Ramesh Pandey', '1972-02-25', '9297827636', 'ramesh@gmail.com', 'ramesh', '12345', '2022-05-19', '1'),
(2, '0', '2', '2022-05-05', '3', '3', 'Patna', 'Mohan Rajbhar', '2022-05-25', '2345678958', 'abc@gmail.com', NULL, NULL, '2022-05-19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_result`
--

CREATE TABLE `stk_result` (
  `id` int(11) NOT NULL,
  `admitcard_id` varchar(200) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `applicant_no` varchar(200) DEFAULT NULL,
  `registration_no` varchar(200) DEFAULT NULL,
  `batch_no` varchar(200) DEFAULT NULL,
  `candidate_name` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `father_name` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `interviewdate` varchar(200) DEFAULT NULL,
  `interview_time` varchar(200) DEFAULT NULL,
  `center` varchar(200) DEFAULT NULL,
  `unit_code` varchar(200) DEFAULT NULL,
  `permanent_address` varchar(200) DEFAULT NULL,
  `personality` varchar(200) DEFAULT NULL,
  `leadership_quality` varchar(200) DEFAULT NULL,
  `thinking` varchar(200) DEFAULT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `extra_qualification` varchar(200) DEFAULT NULL,
  `experience` varchar(200) DEFAULT NULL,
  `iq_test` varchar(200) DEFAULT NULL,
  `mind_set` varchar(200) DEFAULT NULL,
  `result_decelear` varchar(200) DEFAULT NULL,
  `security_deposit` decimal(10,0) DEFAULT NULL,
  `procesing_fee_` decimal(10,0) DEFAULT NULL,
  `training_fee` decimal(10,0) DEFAULT NULL,
  `others` decimal(10,0) DEFAULT NULL,
  `total_amount` decimal(10,0) DEFAULT NULL,
  `total_amount_in_word` text DEFAULT NULL,
  `last_payment_date` date DEFAULT NULL,
  `result_publish` int(11) NOT NULL DEFAULT 0,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_revenue_report`
--

CREATE TABLE `stk_revenue_report` (
  `id` int(11) NOT NULL,
  `registration_no` varchar(50) DEFAULT NULL,
  `applicant_name` varchar(75) DEFAULT NULL,
  `father_husband` varchar(75) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `post_name` varchar(200) DEFAULT NULL,
  `fee` varchar(200) DEFAULT NULL,
  `date_payment` date DEFAULT NULL,
  `banking_id1` varchar(100) DEFAULT NULL,
  `total_revenue` varchar(100) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `batch_no` varchar(100) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_revenue_report`
--

INSERT INTO `stk_revenue_report` (`id`, `registration_no`, `applicant_name`, `father_husband`, `dob`, `post_name`, `fee`, `date_payment`, `banking_id1`, `total_revenue`, `user_id`, `batch_no`, `added_on`, `status`) VALUES
(3, '#123', 'Mohan', 'Sidheshwar nath Tiwari', '2022-05-11', 'Hind', '500', '2022-05-16', '#45123658', '5000', '3', '#7654', '2022-05-14', '1'),
(4, '#123', 'Mohanqqqq', 'qqqqqqq', '2022-05-02', 'Hindq', '500', '2022-05-02', '#45123658', '5000', '3', '#7654', '2022-05-14', '1'),
(5, '123', 'Shivam Raj', 'Mohan Raj', '2022-05-04', 'Director', '2000', '2022-05-03', '#54321', '2', '2', '#546568', '2022-05-16', '1'),
(6, '456', 'Rajesh Sinha', 'Shiraj Sinha', '2022-05-04', 'Cheaf manager', '2000', '2022-05-03', '#4582585', '2', '2', '#546568', '2022-05-16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_revenue_report_team`
--

CREATE TABLE `stk_revenue_report_team` (
  `id` int(11) NOT NULL,
  `registration_no` varchar(50) DEFAULT NULL,
  `applicant_name` varchar(75) DEFAULT NULL,
  `father_husband` varchar(75) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `post_name` varchar(200) DEFAULT NULL,
  `fee` varchar(200) DEFAULT NULL,
  `date_payment` date DEFAULT NULL,
  `banking_id1` varchar(100) DEFAULT NULL,
  `total_revenue` varchar(100) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `batch_no` varchar(100) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_revenue_report_team`
--

INSERT INTO `stk_revenue_report_team` (`id`, `registration_no`, `applicant_name`, `father_husband`, `dob`, `post_name`, `fee`, `date_payment`, `banking_id1`, `total_revenue`, `user_id`, `batch_no`, `added_on`, `status`) VALUES
(1, '7485963652', 'Pankaj Singh', 'Rajesh Singh', '2022-05-04', 'Superviser', '500', '2022-05-10', '#45825', '3', '2', '#546568', '2022-05-18', '1'),
(2, '#12458596', 'Ramesh', 'Raju Shrivastava', '2022-05-10', 'Manager', '200', '2022-05-10', '#454525', '3', '2', '#546568', '2022-05-18', '1'),
(3, '#54285858', 'Rameshwaer', 'Rakesh Singh', '2022-05-17', 'Raj Mohan', '200', '2022-05-23', '#458255', '3', '2', '#546568', '2022-05-18', '1'),
(4, '7485963652', 'Pankaj Singh', 'Rajesh Singh', '2022-05-04', 'Superviser', '500', '2022-05-10', '#45825', '2', '2', '#546568', '2022-05-18', '1'),
(5, '123', 'Mohan', 'Sidheshwar nath Tiwari', '2022-05-23', 'Professor', '500', '2022-05-09', '#54321', '2', '2', '#546568', '2022-05-18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_security_report`
--

CREATE TABLE `stk_security_report` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name_of_post` varchar(100) DEFAULT NULL,
  `security_fund` varchar(50) DEFAULT NULL,
  `training_fee` varchar(50) DEFAULT NULL,
  `processing_fee` int(50) DEFAULT NULL,
  `other_fee1` varchar(50) DEFAULT NULL,
  `total_banking` varchar(50) DEFAULT NULL,
  `banking_id2` varchar(50) DEFAULT NULL,
  `total_revenue_1` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `batch_no` varchar(50) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_security_report`
--

INSERT INTO `stk_security_report` (`id`, `reg_no`, `name`, `name_of_post`, `security_fund`, `training_fee`, `processing_fee`, `other_fee1`, `total_banking`, `banking_id2`, `total_revenue_1`, `user_id`, `batch_no`, `added_on`, `status`) VALUES
(1, '', '', '', '', '', 0, '', '', '', '', '3', '#7654', '2022-05-14', '1'),
(2, 'dgfrsdf', 'sfsfs', 'sdfds', 'sdfsd', 'sdfsdfsd', 0, 'sdfds', 'sdf', 'dsfsdfds', 'sdfsdf', '3', '#7654', '2022-05-14', '1'),
(3, 'sdf', 'sdfs', 'sdf', 'sdfsd', 'fsdf', 0, 'sdf', 'sdf', 'sdfsdf', 'sdfsdf', '3', '#7654', '2022-05-14', '1'),
(4, '#99888', 'Ramesh', 'Operator', '2554558', '200', 200, '200', '8766', '12558', '1', '2', '#546568', '2022-05-16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_security_report_team`
--

CREATE TABLE `stk_security_report_team` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name_of_post` varchar(100) DEFAULT NULL,
  `security_fund` varchar(50) DEFAULT NULL,
  `training_fee` varchar(50) DEFAULT NULL,
  `processing_fee` int(50) DEFAULT NULL,
  `other_fee1` varchar(50) DEFAULT NULL,
  `total_banking` varchar(50) DEFAULT NULL,
  `banking_id2` varchar(50) DEFAULT NULL,
  `total_revenue_1` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `batch_no` varchar(50) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_security_report_team`
--

INSERT INTO `stk_security_report_team` (`id`, `reg_no`, `name`, `name_of_post`, `security_fund`, `training_fee`, `processing_fee`, `other_fee1`, `total_banking`, `banking_id2`, `total_revenue_1`, `user_id`, `batch_no`, `added_on`, `status`) VALUES
(1, 'Rajbhar', 'Mohan', '1234', '122222', '212222`', 23222, '3333', '3333`', '33333', '2', '2', '#546568', '2022-05-18', '1'),
(2, 'Rajpyari', 'Rakesh', '5428', '54698588', '55224411', 52416352, '5522336', '5545885', '655558', '2', '2', '#546568', '2022-05-18', '1'),
(3, 'Rajbhar', 'Mohan', '1234', '122222', '212222`', 23222, '3333', '3333`', '33333', '1', '2', '#546568', '2022-05-18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_sidebar`
--

CREATE TABLE `stk_sidebar` (
  `id` int(11) NOT NULL,
  `activate_menu` varchar(255) NOT NULL,
  `activate_not` varchar(255) NOT NULL,
  `base_url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stk_sidebar`
--

INSERT INTO `stk_sidebar` (`id`, `activate_menu`, `activate_not`, `base_url`, `icon`, `name`, `parent`, `position`, `role_id`, `status`) VALUES
(18, 'Masterkey', '{\"0\":\"\"}', '/', '<i class=\"nav-icon fa fa-key\" aria-hidden=\"true\"></i>', 'Masterkey', 0, 30, '\"\"admin\"\"', 0),
(19, 'Masterkey', '{\"0\":\"\"}', '#', '<i class=\"nav-icon fas fa-icon fa-solid fa-key\"></i>', 'Masterkey', 0, 1, '\"\"admin\"\"', 1),
(20, 'Office Member', '{\"0\":\"\"}', 'admin/officer_details', '<i class=\"nav-icon fa fa-adjust\" aria-hidden=\"true\"></i>', 'Office Member', 0, 13, '\"\"admin\"\"', 1),
(21, 'Department', '{\"0\":\"\"}', 'admin/department', '<i class=\"nav-icon fa fa-tachometer\" aria-hidden=\"true\"></i>', 'Department', 19, 2, '\"\"admin\"\"', 1),
(22, 'Post', '{\"0\":\"\"}', 'admin/post_details', '<i class=\"nav-icon fa fa-tachometer\" aria-hidden=\"true\"></i>', 'Post', 19, 3, '\"\"admin\"\"', 1),
(23, 'E-Contract', '{\"0\":\"\"}', '#', '<i class=\"nav-icon fa fa-superpowers\" aria-hidden=\"true\"></i>', 'E-Contract', 0, 14, '\"admin\"', 1),
(24, 'My Documents', '{\"0\":\"\"}', 'admin/my_documents', '<i class=\"nav-icon fa fa-circle\" aria-hidden=\"true\"></i>', 'My Documents', 23, 15, '\"admin\"', 1),
(25, 'My Team Office', '{\"0\":\"\"}', 'admin/departmentwise_team', '<i class=\"nav-icon fa fa-circle\" aria-hidden=\"true\"></i>', 'My Team Office', 23, 16, '\"\"admin\"\"', 1),
(26, 'My Office', '{\"0\":\"\"}', '#', '<i class=\"nav-icon fa fa-snowflake-o\" aria-hidden=\"true\"></i>', 'My Office', 0, 17, '\"admin\"', 1),
(27, 'Daily Activity Report', '{\"0\":\"\"}', 'admin/departmentwisecontrol', '<i class=\"nav-icon fa fa-circle-o\" aria-hidden=\"true\"></i>', 'Daily Activity Report', 26, 18, '\"\"admin\"\"', 1),
(28, 'Office Expense', '{\"0\":\"\"}', 'admin/office_expense', '<i class=\"nav-icon fa fa-circle-o\" aria-hidden=\"true\"></i>', 'Office Expense', 26, 20, '\"admin\"', 0),
(29, 'Office Expense', '{\"0\":\"\"}', 'admin/departmentwiseexpense', '<i class=\"nav-icon fa fa-circle-o\" aria-hidden=\"true\"></i>', 'Office Expense', 26, 19, '\"\"admin\"\"', 1),
(30, 'My Team Office', '{\"0\":\"\"}', 'admin/departmentwise_team', '<i class=\"nav-icon fa fa-circle-o\" aria-hidden=\"true\"></i>', 'My Team Office', 26, 21, '\"\"admin\"\"', 1),
(31, 'Aajeevika', '{\"0\":\"\"}', '#', '<i class=\"nav-icon fa fa-star\" aria-hidden=\"true\"></i>', 'Aajeevika', 0, 22, '\"admin\"', 1),
(32, 'General Group', '{\"0\":\"\"}', 'admin/general_group', '<i class=\"nav-icon fa fa-leaf\" aria-hidden=\"true\"></i>', 'General Group', 31, 23, '\"admin\"', 1),
(33, 'My Club Group', '{\"0\":\"\"}', 'admin/club_group', '<i class=\"nav-icon fa fa-leaf\" aria-hidden=\"true\"></i>', 'My Club Group', 31, 24, '\"admin\"', 1),
(34, 'My Club Income', '{\"0\":\"\"}', 'admin/club_income', '<i class=\"nav-icon fa fa-leaf\" aria-hidden=\"true\"></i>', 'My Club Income', 31, 25, '\"\"admin\"\"', 1),
(35, 'Weekely Deposit', '{\"0\":\"\"}', 'admin/Weekely Deposit', '<i class=\"nav-icon fa fa-leaf\" aria-hidden=\"true\"></i>', 'Weekely Deposit', 31, 26, '\"\"admin\"\"', 1),
(36, 'Enterprise Loan', '{\"0\":\"\"}', 'admin/enterprise_loan', '<i class=\"nav-icon fa fa-leaf\" aria-hidden=\"true\"></i>', 'Enterprise Loan', 31, 27, '\"admin\"', 1),
(37, 'State', '{\"0\":\"\"}', 'admin/state', '<i class=\"nav-icon fa fa-tachometer\" aria-hidden=\"true\"></i>', 'State', 19, 4, '\"admin\"', 1),
(38, 'Menu', '{\"0\":\"\"}', 'admin/menu', '<i class=\"nav-icon fa fa-tachometer\" aria-hidden=\"true\"></i>', 'Menu', 19, 5, '\"admin\"', 1),
(39, 'Submenu', '{\"0\":\"\"}', 'admin/submenu', '<i class=\"nav-icon fa fa-tachometer\" aria-hidden=\"true\"></i>', 'Parent Submenu', 19, 6, '\"\"admin\"\"', 1),
(40, 'Child Submenu', '{\"0\":\"\"}', 'admin/child_submenu', '<i class=\"nav-icon fa fa-tachometer\" aria-hidden=\"true\"></i>', 'Child Submenu', 19, 7, '\"admin\"', 1),
(41, 'Sub Subchild Menu', '{\"0\":\"\"}', 'admin/sub_subchildmenu', '<i class=\"nav-icon fa fa-tachometer\" aria-hidden=\"true\"></i>', 'Sub Childsub Menu', 19, 8, '\"\"admin\"\"', 1),
(42, 'Control', '{\"0\":\"\"}', '#', '<i class=\"nav-icon fa fa-arrows\" aria-hidden=\"true\"></i>', 'Control', 0, 10, '\"admin\"', 1),
(43, 'Parmission', '{\"0\":\"\"}', 'admin/permission', '<i class=\"nav-icon fa fa-adjust\" aria-hidden=\"true\"></i>', 'Parmission', 42, 11, '\"\"admin\"\"', 0),
(44, 'Vacancy', '{\"0\":\"\"}', '#', '<i class=\"nav-icon fa fa-superpowers\" aria-hidden=\"true\"></i>', 'Vacancy', 0, 28, '\"\"admin\"\"', 1),
(45, 'Vacancy', '{\"0\":\"\"}', 'admin/vecency', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Vacancy', 44, 29, '\"\"admin\"\"', 1),
(46, 'Guideline', '{\"0\":\"\"}', 'admin/guideline', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Guideline', 44, 32, '\"\"\"admin\"\"\"', 1),
(47, 'Online Apply List', '{\"0\":\"\"}', 'admin/completed_noncompleted', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Online Apply List', 44, 33, '\"\"admin\"\"', 1),
(48, 'Admit Card List', '{\"0\":\"\"}', 'admin/departmentwise_admitcard', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Admit Card List', 44, 34, '\"\"admin\"\"', 1),
(49, 'Result List', '{\"0\":\"\"}', 'admin/departmentwise_resultlist', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Result List', 44, 35, '\"\"admin\"\"', 1),
(50, 'Helpline', '{\"0\":\"\"}', 'admin/helpline', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Helpline', 44, 36, '\"\"\"admin\"\"\"', 1),
(51, 'Permission list', '{\"0\":\"\"}', 'admin/permissionlist', '<i class=\"nav-icon fa fa-adjust\" aria-hidden=\"true\"></i>', 'Permission list', 42, 12, '\"admin\"', 1),
(52, 'departmentwisecontrol', '{\"0\":\"\"}', 'admin/departmentwisecontrol', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Dep wise control', 0, 31, '\"\"admin\"\"', 1),
(53, 'division', '{\"0\":\"\"}', 'admin/adddivision', '', 'Division', 19, 9, '\"\"admin\"\"', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stk_signup`
--

CREATE TABLE `stk_signup` (
  `id` int(11) NOT NULL,
  `state` varchar(200) DEFAULT NULL,
  `post_id` varchar(200) DEFAULT NULL,
  `batch_no` varchar(200) DEFAULT NULL,
  `Join_in_branch` varchar(200) DEFAULT NULL,
  `depart_id` varchar(200) DEFAULT NULL,
  `branch_code` varchar(200) DEFAULT NULL,
  `officer_name` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_signup`
--

INSERT INTO `stk_signup` (`id`, `state`, `post_id`, `batch_no`, `Join_in_branch`, `depart_id`, `branch_code`, `officer_name`, `mobile_no`, `email_id`, `added_on`, `status`) VALUES
(19, '3', '1', '#546568', '#BNCH12345', '1', '#00C2', 'Pankaj Mani Tiwari', '1325469785', 'pmt.pankaj76@gmail.com', '2022-05-14', '1'),
(26, '3', '2', '#45123652', 'Ranchi', '1', '#000125', 'Rajesh Singh', '7845129635', 'rajesh123@gmail.com', '2022-05-16', '1'),
(27, '3', '3', '#0001254', 'Ranchi', '2', '#00021588', 'Reshma Shrivastava', '7862453625', 'reshma@gmail.com', '2022-05-16', '1'),
(28, '5', '7', '#2554588', 'Ranchi', '4', '#882255', 'Pankaj', '123454678858', 'Pankaj@gmail.com', '2022-05-16', '1'),
(29, '3', '4', '#987098980000', 'Ranchi', '2', '#00987', 'Mohan Rajbhar', '7485963625', 'mohan@gmail.com', '2022-05-19', '1'),
(30, '5', '30', '#7654', '#BNCH12345', '5', '#8765', 'Pankaj Mani Tiwari', '12345678958', 'cbdgf@gmail.com', '2022-05-19', '1'),
(34, '6', '4', '#7654', '#BNCH12345', '2', '#00C2', 'Pankaj Mani Tiwari', '12345678958', 'rajesh@gmail.com', '2022-05-19', '1'),
(35, '5', '5', 'January', 'Ranchi', '3', '#9876', 'Mohan Singh', '7894561235', 'pmt.pankaj@gmail.com', '2022-05-19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_state`
--

CREATE TABLE `stk_state` (
  `id` int(11) NOT NULL,
  `state` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_state`
--

INSERT INTO `stk_state` (`id`, `state`, `added_on`, `status`) VALUES
(3, 'BIHAR', '2022-03-28', '1'),
(4, 'JHARKHAND', '2022-03-28', '1'),
(5, 'UTTAR PRADESH', '2022-03-28', '1'),
(6, 'WEST BANGAL', '2022-03-28', '1'),
(7, 'MADHYA PRADESH', '2022-03-28', '1'),
(8, 'HARYANA', '2022-03-28', '1'),
(9, 'RAJASTHAN', '2022-03-28', '1'),
(10, 'PANJAB', '2022-03-28', '1'),
(11, 'CHHATISGARH', '2022-03-28', '1'),
(12, 'ASSAM', '2022-03-28', '1'),
(13, 'GUJARAT', '2022-03-28', '1'),
(14, 'KARNATAKA', '2022-03-28', '1'),
(15, 'MAHARASHTRA', '2022-03-28', '1'),
(17, 'KERAL', '2022-03-28', '1'),
(18, 'TAMILNADU', '2022-03-28', '1'),
(19, 'UTTRAKHAND', '2022-03-28', '1'),
(20, 'GOA', '2022-03-28', '1'),
(21, 'MANIPUR', '2022-03-28', '1'),
(25, 'ZXY', '2022-04-01', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stk_submenu`
--

CREATE TABLE `stk_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(200) DEFAULT NULL,
  `submenu` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_submenu`
--

INSERT INTO `stk_submenu` (`id`, `menu_id`, `submenu`, `added_on`, `status`) VALUES
(3, '3', 'My Documents', '2022-03-29', '1'),
(4, '3', 'KYC', '2022-03-29', '1'),
(5, '3', 'My Team Office', '2022-03-29', '1'),
(6, '4', 'My Report', '2022-03-29', '1'),
(7, '4', 'Office Expense', '2022-03-29', '1'),
(8, '4', 'My Team Office', '2022-03-29', '1'),
(9, '5', 'Aajeevika', '2022-03-29', '1'),
(10, '5', 'I-CON INDIA', '2022-03-29', '1'),
(11, '4', 'Village Mart', '2022-03-29', '1'),
(12, '9', 'Logout', '2022-03-29', '1'),
(13, '5', 'abcdfhbdgfsh', '2022-03-29', '0'),
(14, '4', 'fgdgerdf', '2022-03-29', '0'),
(15, '4', 'ghfjgf', '2022-03-30', '0'),
(16, '4', 'dsfds', '2022-03-30', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stk_team`
--

CREATE TABLE `stk_team` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `depart_id` varchar(100) DEFAULT NULL,
  `post_id` varchar(100) DEFAULT NULL,
  `batch_no` varchar(200) DEFAULT NULL,
  `Join_in_branch` varchar(200) DEFAULT NULL,
  `branch_code` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `service_did` varchar(20) DEFAULT NULL,
  `officer_first_name` varchar(100) DEFAULT NULL,
  `officer_middle_name` varchar(100) DEFAULT NULL,
  `officer_last_name` varchar(100) DEFAULT NULL,
  `father_first` varchar(100) DEFAULT NULL,
  `father_middle` varchar(200) DEFAULT NULL,
  `father_last` varchar(200) DEFAULT NULL,
  `query` varchar(200) DEFAULT NULL,
  `mother_occupation` varchar(200) DEFAULT NULL,
  `m_annual_encome` varchar(200) DEFAULT NULL,
  `father_occupation` varchar(200) DEFAULT NULL,
  `f_annual_income` varchar(200) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `marriage_status` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `aadhar_no` varchar(30) DEFAULT NULL,
  `pan_no` varchar(20) DEFAULT NULL,
  `security_rs_amount` varchar(50) DEFAULT NULL,
  `security_transaction_id` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `processing_rs_amount` varchar(100) DEFAULT NULL,
  `processing_rs_transaction` varchar(100) DEFAULT NULL,
  `processing_rs_date` date DEFAULT NULL,
  `training_rs` varchar(100) DEFAULT NULL,
  `training_transaction` varchar(100) DEFAULT NULL,
  `training_date` date DEFAULT NULL,
  `total_deposit` varchar(50) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `type_of_account` varchar(100) DEFAULT NULL,
  `ifsc_code` varchar(100) DEFAULT NULL,
  `confirm_1` varchar(5) DEFAULT NULL,
  `confirm_2` varchar(5) DEFAULT NULL,
  `confirm_3` varchar(5) DEFAULT NULL,
  `confirm_4` varchar(5) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_team`
--

INSERT INTO `stk_team` (`id`, `user_id`, `state`, `depart_id`, `post_id`, `batch_no`, `Join_in_branch`, `branch_code`, `mobile_no`, `email_id`, `service_did`, `officer_first_name`, `officer_middle_name`, `officer_last_name`, `father_first`, `father_middle`, `father_last`, `query`, `mother_occupation`, `m_annual_encome`, `father_occupation`, `f_annual_income`, `gender`, `nationality`, `marriage_status`, `dob`, `aadhar_no`, `pan_no`, `security_rs_amount`, `security_transaction_id`, `date`, `processing_rs_amount`, `processing_rs_transaction`, `processing_rs_date`, `training_rs`, `training_transaction`, `training_date`, `total_deposit`, `bank_name`, `branch_name`, `type_of_account`, `ifsc_code`, `confirm_1`, `confirm_2`, `confirm_3`, `confirm_4`, `added_on`, `status`) VALUES
(1, '2', '3', '1', '1', '#BATCH1234', 'Ranchi', '#00C2', '12345678958', 'rajesh@gmail.com', '#74859658', 'Pankaj', 'Mani', 'Tiwari', 'Sidheshwar ', 'Nath ', 'Tiwari', 'JSQ4 ACC COLONY Khalari Ranchi 25468', 'House Wife', '0', 'Teacher', '500000', 'Female', 'Indian', 'Single', '2022-05-16', '741852963525', 'PAN4525', '500', '#548721659', '2022-05-09', '200', '#5412866556', '2022-06-03', '100', '#4558885855', '2022-05-19', '1234555', 'Yes Bank', '222', 'sdfdsfs', 'YS00001254', '1', '1', '1', '1', '2022-05-18', '1'),
(2, '2', '5', '2', '4', '#546568', 'Ranchi', '#8765', '12345678958', 'rajesh@gmail.com', '#74859658', 'Pankaj', 'Mani', 'Tiwari', 'Pankaj', 'Mani', 'Tiwari', 'ranchi\r\nRancho\r\ndfgdfg', 'House Wife', '2000', 'teacher', '500000', 'Male', 'Indian', 'Single', '2022-05-19', '123456789458', 'PAn1234', '500', '500', '2022-05-11', '500', '54869855', '2022-05-17', '1000', 'ID4578963652', '2022-05-18', 'Nine Thousand Only ', 'Yes Bank', 'Ranchi', 'sdfdsfs', '#PNB00022221234', '1', '1', '1', '1', '2022-05-19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_travelling_report`
--

CREATE TABLE `stk_travelling_report` (
  `id` int(11) NOT NULL,
  `inspection_area` varchar(100) DEFAULT NULL,
  `objective` varchar(100) DEFAULT NULL,
  `arrival_time` varchar(100) DEFAULT NULL,
  `arrival_km` varchar(100) DEFAULT NULL,
  `port_of_department` varchar(100) DEFAULT NULL,
  `departure_km` varchar(100) DEFAULT NULL,
  `other_fee2` varchar(100) DEFAULT NULL,
  `result` varchar(100) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `batch_no` varchar(50) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_travelling_report`
--

INSERT INTO `stk_travelling_report` (`id`, `inspection_area`, `objective`, `arrival_time`, `arrival_km`, `port_of_department`, `departure_km`, `other_fee2`, `result`, `user_id`, `batch_no`, `added_on`, `status`) VALUES
(1, '', '', '', '', '---SELECT---', '', '', '', '3', '#7654', '2022-05-14', '1'),
(2, 'sdfewrs', 'dfewfsde', 'fewfsdf', 'ewfsdf', 'other', 'ewrfsf', 'ewfdsfe', 'dfewfdsfsdfds', '3', '#7654', '2022-05-14', '1'),
(3, '', '', '', '', '---SELECT---', '', '', '', '2', '#546568', '2022-05-16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_travelling_report_team`
--

CREATE TABLE `stk_travelling_report_team` (
  `id` int(11) NOT NULL,
  `inspection_area` varchar(100) DEFAULT NULL,
  `objective` varchar(100) DEFAULT NULL,
  `arrival_time` varchar(100) DEFAULT NULL,
  `arrival_km` varchar(100) DEFAULT NULL,
  `port_of_department` varchar(100) DEFAULT NULL,
  `departure_km` varchar(100) DEFAULT NULL,
  `other_fee2` varchar(100) DEFAULT NULL,
  `result` varchar(100) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `batch_no` varchar(50) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_travelling_report_team`
--

INSERT INTO `stk_travelling_report_team` (`id`, `inspection_area`, `objective`, `arrival_time`, `arrival_km`, `port_of_department`, `departure_km`, `other_fee2`, `result`, `user_id`, `batch_no`, `added_on`, `status`) VALUES
(1, 'Ranchi', 'Mohan', '2', '300', 'Office', 'ewrfsf', 'ewfdsfe', 'dfewfdsfsdfds', '2', '#546568', '2022-05-18', '1'),
(2, 'Ranchi', 'Mohan', '2', '300', 'new_inspection_area', 'ewrfsf', 'ewfdsfe', 'dfewfdsfsdfds', '2', '#546568', '2022-05-18', '1'),
(3, 'Ranchi', 'Mohan', '2', 'ewfsdf', 'new_inspection_area', '2', 'ewfdsfe', 'dfewfdsfsdfds', '2', '#546568', '2022-05-18', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_upload_candidate_vacency`
--

CREATE TABLE `stk_upload_candidate_vacency` (
  `id` int(11) NOT NULL,
  `details_id` varchar(200) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `signature` text DEFAULT NULL,
  `marksheet` text DEFAULT NULL,
  `other_quali` text DEFAULT NULL,
  `exprience` text DEFAULT NULL,
  `aadhar` text DEFAULT NULL,
  `thumb` text DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_upload_candidate_vacency`
--

INSERT INTO `stk_upload_candidate_vacency` (`id`, `details_id`, `photo`, `signature`, `marksheet`, `other_quali`, `exprience`, `aadhar`, `thumb`, `added_on`, `status`) VALUES
(1, '1', '/assets/vacency/photo/1652791075.jpg', '/assets/vacency/sign/1652791075.jpg', '/assets/vacency/documents/1652791075.jpeg', '/assets/vacency/documents/16527910751.jpeg', '/assets/vacency/documents/16527910752.jpeg', '/assets/vacency/documents/16527910753.jpeg', '/assets/vacency/documents/16527910754.jpeg', '2022-05-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_upload_member_docs`
--

CREATE TABLE `stk_upload_member_docs` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `member_sign` varchar(200) DEFAULT NULL,
  `member_right_hand_thumb` varchar(200) DEFAULT NULL,
  `aadhar_front` varchar(200) DEFAULT NULL,
  `aadhar_back` varchar(200) DEFAULT NULL,
  `election_id_card` varchar(200) DEFAULT NULL,
  `pan_card` varchar(200) DEFAULT NULL,
  `passbook_bank` varchar(200) DEFAULT NULL,
  `qualification_certificate` varchar(200) DEFAULT NULL,
  `sponser_id` varchar(200) DEFAULT NULL,
  `member_details_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_upload_member_docs`
--

INSERT INTO `stk_upload_member_docs` (`id`, `image`, `member_sign`, `member_right_hand_thumb`, `aadhar_front`, `aadhar_back`, `election_id_card`, `pan_card`, `passbook_bank`, `qualification_certificate`, `sponser_id`, `member_details_id`) VALUES
(1, NULL, '/assets/uploads/member/1652529561.jpg', '/assets/uploads/member/16525295611.jpg', '/assets/uploads/member/16525295612.jpg', '/assets/uploads/member/16525295613.jpg', '/assets/uploads/member/16525295614.jpg', '/assets/uploads/member/16525295615.jpg', '/assets/uploads/member/16525295616.jpg', '/assets/uploads/member/16525295617.jpg', NULL, '1'),
(2, '/assets/uploads/member/1652530364.jpg', '/assets/uploads/member/16525303641.jpg', '/assets/uploads/member/16525303642.jpg', '/assets/uploads/member/16525303643.jpg', '/assets/uploads/member/16525303644.jpg', '/assets/uploads/member/16525303645.jpg', '/assets/uploads/member/16525303646.jpg', '/assets/uploads/member/16525303647.jpg', '/assets/uploads/member/16525303648.jpg', NULL, '2'),
(3, '/assets/uploads/member/1652681060.jpg', '/assets/uploads/member/16526810601.jpg', '/assets/uploads/member/16526810602.jpg', '/assets/uploads/member/16526810603.jpg', '/assets/uploads/member/16526810604.jpg', '/assets/uploads/member/16526810605.jpg', '/assets/uploads/member/1652681060.jpeg', '/assets/uploads/member/16526810606.jpg', '/assets/uploads/member/16526810607.jpg', NULL, '3'),
(4, '/assets/uploads/member/1652846992.jpg', '/assets/uploads/member/16528469921.jpg', NULL, '/assets/uploads/member/1652846993.jpg', '/assets/uploads/member/16528469931.jpg', '/assets/uploads/member/16528469932.jpg', NULL, NULL, NULL, NULL, '4'),
(5, '/assets/uploads/member/16528479371.JPG', NULL, '/assets/uploads/member/1652847937.jpeg', NULL, NULL, NULL, NULL, '/assets/uploads/member/16528479372.jpg', NULL, NULL, '5'),
(6, '/assets/uploads/member/1652847937.JPG', NULL, '/assets/uploads/member/1652847937.jpeg', NULL, NULL, NULL, NULL, '/assets/uploads/member/16528479372.jpg', NULL, NULL, '6'),
(7, '/assets/uploads/member/1652851565.jpg', '/assets/uploads/member/16528515651.jpg', '/assets/uploads/member/1652851565.jpeg', NULL, '/assets/uploads/member/16528515652.jpg', '/assets/uploads/member/16528515653.jpg', '/assets/uploads/member/16528515651.jpeg', '/assets/uploads/member/16528515654.jpg', NULL, NULL, '7'),
(8, NULL, '/assets/uploads/member/1652852136.jpg', '/assets/uploads/member/16528521361.jpg', NULL, '/assets/uploads/member/1652852136.jpeg', '/assets/uploads/member/16528521362.jpg', '/assets/uploads/member/16528521363.jpg', '/assets/uploads/member/16528521364.jpg', NULL, NULL, '8'),
(9, '/assets/uploads/member/1652852778.jpeg', '/assets/uploads/member/1652852778.jpg', NULL, NULL, NULL, NULL, '/assets/uploads/member/16528527781.jpg', NULL, NULL, NULL, '9'),
(10, '/assets/uploads/member/1652852958.jpeg', '/assets/uploads/member/1652852958.jpg', NULL, NULL, NULL, NULL, '/assets/uploads/member/16528529581.jpg', NULL, NULL, NULL, '10'),
(11, '/assets/uploads/member/1652860882.jpg', '/assets/uploads/member/16528608822.jpg', '/assets/uploads/member/16528608821.jpg', '/assets/uploads/member/16528608823.jpg', '/assets/uploads/member/16528608824.jpg', '/assets/uploads/member/16528608825.jpg', '/assets/uploads/member/16528608826.jpg', '/assets/uploads/member/16528608827.jpg', '/assets/uploads/member/16528608828.jpg', NULL, '11'),
(12, '/assets/uploads/member/1652861327.jpeg', '/assets/uploads/member/1652861328.jpg', '/assets/uploads/member/1652861327.jpg', '/assets/uploads/member/16528613281.jpg', NULL, '/assets/uploads/member/16528613282.jpg', NULL, '/assets/uploads/member/16528613283.jpg', '/assets/uploads/member/16528613284.jpg', NULL, '12'),
(13, '/assets/uploads/member/1652954649.jpg', '/assets/uploads/member/16529546492.jpg', '/assets/uploads/member/16529546491.jpg', '/assets/uploads/member/16529546493.jpg', '/assets/uploads/member/16529546494.jpg', '/assets/uploads/member/16529546495.jpg', '/assets/uploads/member/16529546496.jpg', '/assets/uploads/member/16529546497.jpg', '/assets/uploads/member/16529546498.jpg', NULL, '13'),
(14, '/assets/uploads/member/1652958859.jpg', '/assets/uploads/member/16529588592.jpg', '/assets/uploads/member/16529588591.jpg', '/assets/uploads/member/16529588593.jpg', '/assets/uploads/member/16529588594.jpg', '/assets/uploads/member/16529588595.jpg', '/assets/uploads/member/16529588596.jpg', '/assets/uploads/member/16529588597.jpg', '/assets/uploads/member/16529588598.jpg', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_users`
--

CREATE TABLE `stk_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vp` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `salt` varchar(20) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stk_users`
--

INSERT INTO `stk_users` (`id`, `username`, `mobile`, `name`, `email`, `password`, `vp`, `role`, `salt`, `otp`, `token`, `status`, `created_on`, `updated_on`) VALUES
(1, 'admin', '7894561230', 'Admin', 'admin@gmail.com', '2021ac8d19debae18e7a13679f8091fa', '12345', 'admin', 'MOPWgKdeZyU2kAL9', '5e74a5b009e1b7c3f7c49c40bbba95fc', '', 1, '2020-01-07 17:05:51', '2020-01-07 17:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `stk_vacency_candidate_details`
--

CREATE TABLE `stk_vacency_candidate_details` (
  `id` int(11) NOT NULL,
  `signup_id` varchar(200) DEFAULT NULL,
  `candidate_name` varchar(200) DEFAULT NULL,
  `father_name` varchar(200) DEFAULT NULL,
  `father_occupation` varchar(200) DEFAULT NULL,
  `mother_name` varchar(200) DEFAULT NULL,
  `mother_occupqation` varchar(200) DEFAULT NULL,
  `annual_encome` varchar(200) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `correspondent_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `nationality` varchar(200) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `identification_marks` text DEFAULT NULL,
  `aadharno` varchar(20) DEFAULT NULL,
  `panno` varchar(20) DEFAULT NULL,
  `marital_status` varchar(200) DEFAULT NULL,
  `ins_details` varchar(200) DEFAULT NULL,
  `exam_passed` varchar(200) DEFAULT NULL,
  `board_university` text DEFAULT NULL,
  `pasing_year` date DEFAULT NULL,
  `total_marks` varchar(200) DEFAULT NULL,
  `mark_obtained` varchar(200) DEFAULT NULL,
  `division` varchar(200) DEFAULT NULL,
  `persentage_marks` varchar(200) DEFAULT NULL,
  `confirm_1` varchar(1) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `request_no` varchar(200) DEFAULT NULL,
  `payment_id` varchar(200) DEFAULT NULL,
  `payment_details` longtext DEFAULT NULL,
  `payment_status` int(11) NOT NULL DEFAULT 0,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_vacency_candidate_details`
--

INSERT INTO `stk_vacency_candidate_details` (`id`, `signup_id`, `candidate_name`, `father_name`, `father_occupation`, `mother_name`, `mother_occupqation`, `annual_encome`, `gender`, `correspondent_address`, `permanent_address`, `place`, `nationality`, `category`, `identification_marks`, `aadharno`, `panno`, `marital_status`, `ins_details`, `exam_passed`, `board_university`, `pasing_year`, `total_marks`, `mark_obtained`, `division`, `persentage_marks`, `confirm_1`, `amount`, `request_no`, `payment_id`, `payment_details`, `payment_status`, `added_on`, `status`) VALUES
(1, '1', 'Mohan Rajbhar', 'Manoj Rajbhar', 'Businessman', 'Seema Devi', 'House Wife', '1200000', 'male', 'JSQ8 ACC COLONY KHALARI RANCHI ', 'Rancho', 'rural', 'Indian', 'gen', 'Black Mole On Right Hend', '7854613254', 'PAN547812', 'Married', '1', 'MCA', 'IGNOU', '2020-06-10', '2000', '1200', 'First', '65.2', '1', '1025', 'Ek9MQOl5Jq8zbgf', 'pay_JWIVDKhKCX7kWi', '{\"razorpay_payment_id\":\"pay_JWIVDKhKCX7kWi\",\"merchant_order_id\":\"TSFE4132\",\"merchant_trans_id\":\"1652791076\",\"merchant_product_info_id\":\"Order From Customer\",\"merchant_surl_id\":\"http:\\/\\/localhost\\/satyakam_cordi\\/website\\/success\\/\",\"merchant_furl_id\":\"http:\\/\\/localhost\\/satyakam_cordi\\/website\\/success\\/\",\"card_holder_name_id\":\"Mohan Rajbhar\",\"merchant_total\":\"102500\",\"merchant_amount\":\"1025\",\"order_id\":\"TSFE4132\",\"user_id\":\"\"}', 1, '2022-05-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_vacency_signup`
--

CREATE TABLE `stk_vacency_signup` (
  `id` int(11) NOT NULL,
  `application_date` date DEFAULT NULL,
  `state_unit_name` varchar(200) DEFAULT NULL,
  `division_unit_name` varchar(200) DEFAULT NULL,
  `applicant_name` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile_no` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `desicination` varchar(200) DEFAULT NULL,
  `depart_id` varchar(200) DEFAULT NULL,
  `post` varchar(200) DEFAULT NULL,
  `amount` varchar(200) DEFAULT NULL,
  `user_name` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_vacency_signup`
--

INSERT INTO `stk_vacency_signup` (`id`, `application_date`, `state_unit_name`, `division_unit_name`, `applicant_name`, `dob`, `mobile_no`, `email`, `desicination`, `depart_id`, `post`, `amount`, `user_name`, `password`, `added_on`, `status`) VALUES
(1, '2022-05-05', '3', '1', 'Mohan Rajbhar', '2022-05-11', '741852963524', 'mohan@gmail.com', NULL, '1', '1', '1025', 'mohan@123', '12345', '2022-05-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_vecency`
--

CREATE TABLE `stk_vecency` (
  `id` int(11) NOT NULL,
  `state_id` varchar(200) DEFAULT NULL,
  `code` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_vecency`
--

INSERT INTO `stk_vecency` (`id`, `state_id`, `code`, `added_on`, `status`) VALUES
(4, '3', 'SPMC-BR000001', '2022-04-01', '1'),
(5, '4', 'SPMC-JH000002', '2022-04-01', '1'),
(6, '5', 'SPMC-UP000003', '2022-04-01', '1'),
(7, '6', 'SPMC-WB000004', '2022-04-01', '1'),
(8, '7', 'SPMC-MP000005', '2022-04-01', '1'),
(9, '8', 'SPMC-HAR000006', '2022-04-01', '1'),
(10, '9', 'SPMC-RAJ000007', '2022-04-01', '1'),
(11, '10', 'SPMC-PUN000008', '2022-04-01', '1'),
(12, '11', 'SPMC-CHG000009', '2022-04-01', '1'),
(13, '12', 'SPMC-ASS000010', '2022-04-01', '1'),
(14, '13', 'SPMC-GUJ000011', '2022-04-01', '1'),
(15, '14', 'SPMC-KAR000012', '2022-04-01', '1'),
(16, '15', 'SPMC-MHA000013', '2022-04-01', '1'),
(17, '17', 'SPMC-KER000014', '2022-04-01', '1'),
(18, '18', 'SPMC-TAM000015', '2022-04-01', '1'),
(19, '19', 'SPMC-UK000016', '2022-04-01', '1'),
(20, '20', 'SPMC-GOA000017', '2022-04-01', '1'),
(21, '21', 'SPMC-MNP000018', '2022-04-01', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stk_account_details`
--
ALTER TABLE `stk_account_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_admitcard`
--
ALTER TABLE `stk_admitcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_all_state`
--
ALTER TABLE `stk_all_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_childsubmenu`
--
ALTER TABLE `stk_childsubmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_club_report`
--
ALTER TABLE `stk_club_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_club_report_team`
--
ALTER TABLE `stk_club_report_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_department`
--
ALTER TABLE `stk_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_division`
--
ALTER TABLE `stk_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_expense`
--
ALTER TABLE `stk_expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_generalgroup`
--
ALTER TABLE `stk_generalgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_group_details`
--
ALTER TABLE `stk_group_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_group_report`
--
ALTER TABLE `stk_group_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_group_report_team`
--
ALTER TABLE `stk_group_report_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_group_resource`
--
ALTER TABLE `stk_group_resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_group_signup`
--
ALTER TABLE `stk_group_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_member_details`
--
ALTER TABLE `stk_member_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `membership_no` (`membership_no`);

--
-- Indexes for table `stk_menu`
--
ALTER TABLE `stk_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_menu_control`
--
ALTER TABLE `stk_menu_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_myoffice`
--
ALTER TABLE `stk_myoffice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_myreport`
--
ALTER TABLE `stk_myreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_myteamoffice`
--
ALTER TABLE `stk_myteamoffice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_my_clubgroup`
--
ALTER TABLE `stk_my_clubgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_my_document`
--
ALTER TABLE `stk_my_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_officer_details`
--
ALTER TABLE `stk_officer_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`),
  ADD UNIQUE KEY `service_did` (`service_did`);

--
-- Indexes for table `stk_office_expense`
--
ALTER TABLE `stk_office_expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_office_resource_requipment`
--
ALTER TABLE `stk_office_resource_requipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_post`
--
ALTER TABLE `stk_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_project_member`
--
ALTER TABLE `stk_project_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_result`
--
ALTER TABLE `stk_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_revenue_report`
--
ALTER TABLE `stk_revenue_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_revenue_report_team`
--
ALTER TABLE `stk_revenue_report_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_security_report`
--
ALTER TABLE `stk_security_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_security_report_team`
--
ALTER TABLE `stk_security_report_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_sidebar`
--
ALTER TABLE `stk_sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_signup`
--
ALTER TABLE `stk_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_state`
--
ALTER TABLE `stk_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_submenu`
--
ALTER TABLE `stk_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_team`
--
ALTER TABLE `stk_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_travelling_report`
--
ALTER TABLE `stk_travelling_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_travelling_report_team`
--
ALTER TABLE `stk_travelling_report_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_upload_candidate_vacency`
--
ALTER TABLE `stk_upload_candidate_vacency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_upload_member_docs`
--
ALTER TABLE `stk_upload_member_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_users`
--
ALTER TABLE `stk_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `stk_vacency_candidate_details`
--
ALTER TABLE `stk_vacency_candidate_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_vacency_signup`
--
ALTER TABLE `stk_vacency_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_vecency`
--
ALTER TABLE `stk_vecency`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stk_account_details`
--
ALTER TABLE `stk_account_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stk_admitcard`
--
ALTER TABLE `stk_admitcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_all_state`
--
ALTER TABLE `stk_all_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149737;

--
-- AUTO_INCREMENT for table `stk_childsubmenu`
--
ALTER TABLE `stk_childsubmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stk_club_report`
--
ALTER TABLE `stk_club_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stk_club_report_team`
--
ALTER TABLE `stk_club_report_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stk_department`
--
ALTER TABLE `stk_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stk_division`
--
ALTER TABLE `stk_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `stk_expense`
--
ALTER TABLE `stk_expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stk_generalgroup`
--
ALTER TABLE `stk_generalgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_group_details`
--
ALTER TABLE `stk_group_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stk_group_report`
--
ALTER TABLE `stk_group_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stk_group_report_team`
--
ALTER TABLE `stk_group_report_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stk_group_resource`
--
ALTER TABLE `stk_group_resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_group_signup`
--
ALTER TABLE `stk_group_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stk_member_details`
--
ALTER TABLE `stk_member_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_menu`
--
ALTER TABLE `stk_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stk_menu_control`
--
ALTER TABLE `stk_menu_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=481;

--
-- AUTO_INCREMENT for table `stk_myoffice`
--
ALTER TABLE `stk_myoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_myreport`
--
ALTER TABLE `stk_myreport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_myteamoffice`
--
ALTER TABLE `stk_myteamoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_my_clubgroup`
--
ALTER TABLE `stk_my_clubgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_my_document`
--
ALTER TABLE `stk_my_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_officer_details`
--
ALTER TABLE `stk_officer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stk_office_expense`
--
ALTER TABLE `stk_office_expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_office_resource_requipment`
--
ALTER TABLE `stk_office_resource_requipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_post`
--
ALTER TABLE `stk_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stk_project_member`
--
ALTER TABLE `stk_project_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stk_result`
--
ALTER TABLE `stk_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_revenue_report`
--
ALTER TABLE `stk_revenue_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stk_revenue_report_team`
--
ALTER TABLE `stk_revenue_report_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stk_security_report`
--
ALTER TABLE `stk_security_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stk_security_report_team`
--
ALTER TABLE `stk_security_report_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stk_sidebar`
--
ALTER TABLE `stk_sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `stk_signup`
--
ALTER TABLE `stk_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `stk_state`
--
ALTER TABLE `stk_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `stk_submenu`
--
ALTER TABLE `stk_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stk_team`
--
ALTER TABLE `stk_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stk_travelling_report`
--
ALTER TABLE `stk_travelling_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stk_travelling_report_team`
--
ALTER TABLE `stk_travelling_report_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stk_upload_candidate_vacency`
--
ALTER TABLE `stk_upload_candidate_vacency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_upload_member_docs`
--
ALTER TABLE `stk_upload_member_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stk_users`
--
ALTER TABLE `stk_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_vacency_candidate_details`
--
ALTER TABLE `stk_vacency_candidate_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_vacency_signup`
--
ALTER TABLE `stk_vacency_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_vecency`
--
ALTER TABLE `stk_vecency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
