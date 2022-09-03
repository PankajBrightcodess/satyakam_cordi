-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 06:11 AM
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
  `account_no` longtext DEFAULT NULL,
  `member_id` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `state_unit_name` varchar(200) DEFAULT NULL,
  `division_unit` varchar(200) DEFAULT NULL,
  `dist_unit` varchar(200) DEFAULT NULL,
  `sponsor_id` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `account_holder_name` varchar(200) DEFAULT NULL,
  `father_husband_name` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `aadhar_no` varchar(20) DEFAULT NULL,
  `pan_no` varchar(200) DEFAULT NULL,
  `village` text DEFAULT NULL,
  `panchayat` text DEFAULT NULL,
  `ward_no` varchar(200) DEFAULT NULL,
  `police_station` varchar(200) DEFAULT NULL,
  `block` varchar(200) DEFAULT NULL,
  `subdivision` varchar(200) DEFAULT NULL,
  `district` varchar(200) DEFAULT NULL,
  `pin_code` varchar(200) DEFAULT NULL,
  `form` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `ident_marks` varchar(100) DEFAULT NULL,
  `marital_status` varchar(100) DEFAULT NULL,
  `saving_plan_name` varchar(100) DEFAULT NULL,
  `team_year` varchar(100) DEFAULT NULL,
  `maintenance_fee` varchar(100) DEFAULT NULL,
  `nominee_name` varchar(100) DEFAULT NULL,
  `relation` varchar(100) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `nominee_aadhar` varchar(100) DEFAULT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  `group_no` varchar(100) DEFAULT NULL,
  `meeting_no` varchar(100) DEFAULT NULL,
  `collective_saving_form_no` varchar(100) DEFAULT NULL,
  `upi_banking` varchar(100) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_account_details`
--

INSERT INTO `stk_account_details` (`id`, `account_no`, `member_id`, `username`, `state_unit_name`, `division_unit`, `dist_unit`, `sponsor_id`, `mobile_no`, `email`, `account_holder_name`, `father_husband_name`, `dob`, `occupation`, `gender`, `aadhar_no`, `pan_no`, `village`, `panchayat`, `ward_no`, `police_station`, `block`, `subdivision`, `district`, `pin_code`, `form`, `nationality`, `category`, `ident_marks`, `marital_status`, `saving_plan_name`, `team_year`, `maintenance_fee`, `nominee_name`, `relation`, `age`, `nominee_aadhar`, `group_name`, `group_no`, `meeting_no`, `collective_saving_form_no`, `upi_banking`, `image`, `added_on`, `status`) VALUES
(31, 'SATYA1000001', '784525695848', 'admin', '4', '11', 'Ranchi', '1', '7860403210', 'pmt.pankaj29@gmail.com', 'Pankaj Mani Tiwari', 'Sidheshwar Nath Tiwari', '2022-07-07', 'Teacher', 'female', '123456789458', 'PAN1234', 'Lohadih', 'Patna', '#87656', 'Ranchi', 'Pandah', 'Ranchi', 'Lucknow', '12345', 'Urban', 'Indian', 'Jharkhand', 'Hindi', 'Jharkhand', 'Ranchi', '2', '5000', 'Pankaj', 'Hindu', '5', '546978132548', 'Mohan', '# 452585', '45786958', '123455', '5565656566', NULL, '2022-07-19 00:00:00', '1'),
(34, 'SATYA1000002', 'MEMBER12345', 'Mohan', '4', '12', 'Ranchi', '1', '9297827636', 'pmt.pankaj29@gmail.com', 'Pankaj Mani Tiwari', 'Sidheshwar Nath Tiwari', '2022-08-11', 'Teacher', 'male', '123456789458', 'PAN1234', 'Lohadih', 'Patna', '#87656', 'Ranchi', 'Pandah', 'Ranchi', 'Lucknow', '12345', 'Urban', 'Indian', 'Jharkhand', 'A Black Mole On Right Cheek', 'Jharkhand', 'Ranchi', '2', '5000', 'Pankaj', 'Hindu', '5', '78459685254148', 'Mohan', '# 452585', '12345', '123455', '5565656566', '/assets/uploads/account_holder/1659690375.jpeg', '2022-08-05 00:00:00', '1'),
(35, 'SATYA1000003', 'MEM-55245858', 'singh', '4', '12', 'Ranchi', '3', '9297827636', 'singh', 'Madhuraya Singh', 'Retesh Singh', '2007-01-04', 'Teacher', 'male', '748596365241', 'RECJ5848', 'Ranchi', 'Ranchi', '45858', 'Ranchi', 'Ranchi', 'Ranchi', 'Ranchi', '458585', 'Urban', 'Indian', 'Jharkhand', 'Hindi', 'Single', 'Plan A', '3', '500', 'Raju Singh', 'Hindu', 'Jharkhand', '785858585847', 'Group 1', '584769584858', '4525458588', '457858585', '5848695847', '/assets/uploads/account_holder/1659757399.jpg', '2022-08-06 00:00:00', '1');

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
(11, '5', '19890228-005', 'gita kumari', 'Ram kumar singh', '1989-02-28', '123546874112', 'male', '37', 'obc', 'DISTRICT OFFICER', '12345', 'PACC High School', '25485', '2022-08-17', '09:00', '23:25', 'Ranchi jharkhand ', '/assets/vacency/photo/1659007798.jpeg', '/assets/vacency/sign/1659007798.jpeg', '0', '1', '2022-08-19', '1'),
(12, '44', '20220812-0044', 'Mohan Rajbhar', 'Rishav Singh', '2022-08-12', '7854613254', 'female', '37', 'obc', 'STAFF WORK CONSULTING DEPARTMENT', '1234', 'PACC High School', '#12345', '2022-08-12', '16:59', '16:00', 'dsgfdsfgdsf\r\nRancho\r\ndfgdfg', '/assets/vacency/photo/1661410389.jpg', '/assets/vacency/sign/1661410390.jpg', '0', '0', '2022-08-25', '1'),
(13, '33', '20011201-0033', 'Salman ali', 'Jaynarayan Mishra', '2001-12-01', '417523225956', 'male', '35', 'gen', 'DISTRICT OFFICER', '#546568', 'PACC High School', '#12345', '2022-08-25', '09:04', '08:05', '  ', '/assets/vacency/photo/1660731739.jpeg', '/assets/vacency/sign/1660731739.jpeg', '0', '0', '2022-08-29', '1');

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
-- Table structure for table `stk_club_details`
--

CREATE TABLE `stk_club_details` (
  `id` int(11) NOT NULL,
  `apply_date` date DEFAULT NULL,
  `state_unit_name` varchar(200) DEFAULT NULL,
  `division_unit_name` varchar(200) DEFAULT NULL,
  `dist_no` varchar(200) DEFAULT NULL,
  `sponsor_id` varchar(200) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `member_name` varchar(200) DEFAULT NULL,
  `father_husband` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `panchayat` varchar(100) DEFAULT NULL,
  `ward_no` varchar(50) DEFAULT NULL,
  `police_station` varchar(100) DEFAULT NULL,
  `block` date NOT NULL,
  `dist` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `pin_code` varchar(200) DEFAULT NULL,
  `aadhar` varchar(200) DEFAULT NULL,
  `pan_number` varchar(200) DEFAULT NULL,
  `from` varchar(200) DEFAULT NULL,
  `sex` varchar(200) DEFAULT NULL,
  `nationality` varchar(200) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `identification_marks` text DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `other_details` varchar(100) DEFAULT NULL,
  `bank_name` varchar(200) DEFAULT NULL,
  `ifsc_code` varchar(200) DEFAULT NULL,
  `ac_number` varchar(200) DEFAULT NULL,
  `nominee_name` varchar(200) DEFAULT NULL,
  `nominee_relation` varchar(200) DEFAULT NULL,
  `nominee_age` varchar(50) DEFAULT NULL,
  `nominee_aadhar` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `amount_in_word` varchar(100) DEFAULT NULL,
  `request_id` varchar(200) DEFAULT NULL,
  `payment_id` varchar(200) DEFAULT NULL,
  `member_id` varchar(200) DEFAULT NULL,
  `payment_details` text DEFAULT NULL,
  `payment_status` varchar(1) NOT NULL DEFAULT '0',
  `confirm` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_club_details`
--

INSERT INTO `stk_club_details` (`id`, `apply_date`, `state_unit_name`, `division_unit_name`, `dist_no`, `sponsor_id`, `user_name`, `user_id`, `member_name`, `father_husband`, `dob`, `mobile_no`, `email`, `village`, `panchayat`, `ward_no`, `police_station`, `block`, `dist`, `state`, `pin_code`, `aadhar`, `pan_number`, `from`, `sex`, `nationality`, `category`, `identification_marks`, `marital_status`, `education`, `other_details`, `bank_name`, `ifsc_code`, `ac_number`, `nominee_name`, `nominee_relation`, `nominee_age`, `nominee_aadhar`, `amount`, `amount_in_word`, `request_id`, `payment_id`, `member_id`, `payment_details`, `payment_status`, `confirm`, `image`, `added_on`, `status`) VALUES
(1, '2022-06-24', '4', '12', 'Ranchi', '123-1266555', 'PANK123', '001', 'Raju Lal', 'Ramesh Lal', '2022-06-16', '9297827636', 'rajesh@gmail.com', 'Patna', 'Ranchi', '#87656', 'Patna', '0000-00-00', 'Ranchi', 'Jharkhand', '12345', '741852963558', 'PAN-5848858', 'rural', 'Male', 'Indian', 'gen', 'A Black Mole On Right Cheek', 'Unmarried', 'Literate', '', 'Panjab National Bank', '#PNB00022221234', '784525963521', 'Pankaj', 'Friend', '28', '546978132548', '500', 'Five Hundred Only', 'APnerbE7FZ9MsuC', 'pay_JlHtUGNCkgpvdq', '3', '{\"razorpay_payment_id\":\"pay_JlHtUGNCkgpvdq\",\"merchant_order_id\":\"HSRX0675\",\"merchant_trans_id\":\"1656064036\",\"merchant_product_info_id\":\"Order From Club Member\",\"merchant_surl_id\":\"http:\\/\\/localhost\\/satyakam_cordi\\/website\\/success\\/\",\"merchant_furl_id\":\"http:\\/\\/localhost\\/satyakam_cordi\\/website\\/success\\/\",\"card_holder_name_id\":\"Raju Lal\",\"merchant_total\":\"50000\",\"merchant_amount\":\"500\",\"order_id\":\"HSRX0675\",\"user_id\":\"\"}', '1', '[\"1\",\"1\",\"1\",\"1\"]', '/assets/uploads/club/1656063751.jpg', '2022-06-24', '1'),
(2, '2022-06-02', '4', '12', 'Ranchi', '4886-8548595825', 'Rakesh Singh', '#58254585855', 'Ramesh Singh', '5848695847258458', '1994-04-22', '9297827636', 'pmt.panakj29@gmail.com', 'Lohadih', 'Ranchi', '#87656', 'Ranchi', '0000-00-00', 'Ranchi', 'Jharkhand', '785215', '458585585', 'PAN-845755885', 'urban', 'Male', 'Indian', 'obc', 'A Black Mole On Right Cheek', 'Married', 'Literate', '', 'Panjab National Bank', 'PNB0059485', '784525963521', 'Pankaj', 'Friend', '28', '546978132548', '500', 'Five Hundred Only', '1CLo3InBcOENuQ7', NULL, '3', NULL, '0', '[\"1\",\"1\",\"1\",\"1\"]', '/assets/uploads/club/1656309970.jpg', '2022-06-27', '1'),
(3, '2022-06-02', '4', '12', 'Ranchi', '4886-8548595825', 'Rakesh Singh', '#58254585855', 'Ramesh Singh', '5848695847258458', '1994-04-22', '9297827636', 'pmt.panakj29@gmail.com', 'Lohadih', 'Ranchi', '#87656', 'Ranchi', '0000-00-00', 'Ranchi', 'Jharkhand', '785215', '458585585', 'PAN-845755885', 'urban', 'Male', 'Indian', 'obc', 'A Black Mole On Right Cheek', 'Married', 'Literate', '', 'Panjab National Bank', 'PNB0059485', '784525963521', 'Pankaj', 'Friend', '28', '546978132548', '500', 'Five Hundred Only', 'VMfS3WeaHs2JImv', NULL, '3', NULL, '0', '[\"1\",\"1\",\"1\",\"1\"]', '/assets/uploads/club/1656309974.jpg', '2022-06-27', '1'),
(4, '2022-06-27', '6', '36', 'Ranchi', '455855855858', 'Mohan Rajbhar', '58254585855', 'RAMESH LAL ', 'Sohan Ramesh', '2022-06-09', '9297827636', 'pmt.pankaj29@gmail.com', 'JSQ4 ACC COLONY ', 'KHALARI ', 'KHALARI`', 'JHARKHAND ', '0000-00-00', 'RANCHi', 'Jharkhand', '12345', '546132978546', 'PAN-5848858', 'urban', 'Male', 'Indian', 'gen', 'Black Mole On Right Hend', 'Unmarried', 'Other', 'Post Graduaction', 'Panjab National Bank', 'PNB0059485', '748596365241', 'Raju Singh', 'Brother', '55', '845695152458', '500', 'Five Hundred Only', 'kZYbIGfnWTtHLrX', 'pay_JmPy7Ex6Sqe7lQ', '4', '{\"razorpay_payment_id\":\"pay_JmPy7Ex6Sqe7lQ\",\"merchant_order_id\":\"ARSE3826\",\"merchant_trans_id\":\"1656310806\",\"merchant_product_info_id\":\"Order From Club Member\",\"merchant_surl_id\":\"http:\\/\\/localhost\\/satyakam_cordi\\/website\\/success\\/\",\"merchant_furl_id\":\"http:\\/\\/localhost\\/satyakam_cordi\\/website\\/success\\/\",\"card_holder_name_id\":\"RAMESH LAL \",\"merchant_total\":\"50000\",\"merchant_amount\":\"500\",\"order_id\":\"ARSE3826\",\"user_id\":\"\"}', '1', '[\"1\",\"1\",\"1\",\"1\"]', '/assets/uploads/club/1656310806.png', '2022-06-27', '1'),
(5, '2022-06-27', '6', '36', 'Ranchi', '123-1266555rftr', 'MOHAN1234', '001', 'Ramesh Raj', 'Rahul Raj', '1996-02-08', '9297827636', 'pmt.pankaj29@gmail.com', 'JSQ4 ACC COLONY ', 'KHALARI', '#784525', 'Ranchi', '0000-00-00', 'Ranchi', 'Jharkhand', '829205', '748596365241', 'PAN58695', 'rural', 'Male', 'Indian', 'gen', 'A Black Mole On Right Cheek`', 'Married', 'Literate', '', 'Panjab National Bank', '#784526', '784525963521', 'Pankaj', 'Brother', '35', '789456123584', '500', 'Five Hundred Only', 'MnEQa9ICpK65hbk', 'pay_JmU4aFynpNr1dG', '4', '{\"razorpay_payment_id\":\"pay_JmU4aFynpNr1dG\",\"merchant_order_id\":\"WGMO2083\",\"merchant_trans_id\":\"1656325266\",\"merchant_product_info_id\":\"Order From Club Member\",\"merchant_surl_id\":\"http:\\/\\/localhost\\/satyakam_cordi\\/website\\/success\\/\",\"merchant_furl_id\":\"http:\\/\\/localhost\\/satyakam_cordi\\/website\\/success\\/\",\"card_holder_name_id\":\"Ramesh Raj\",\"merchant_total\":\"50000\",\"merchant_amount\":\"500\",\"order_id\":\"WGMO2083\",\"user_id\":\"\"}', '1', '[\"1\",\"1\",\"1\",\"1\"]', '/assets/uploads/club/1656325266.jpg', '2022-06-27', '1'),
(6, '2022-08-11', '4', '12', 'Ranchi', '455855855858', 'PANK123', '001', 'RAMESH LAL', 'Sohan Ramesh', '2022-08-20', '12345678958', 'asdf@gmail.com', 'Patna', 'Patna', '#87656', 'Ranchi', '0000-00-00', 'Patna', 'Jharkhand', '12345', '56168748596', 'PAN4586958', 'urban', 'Male', 'Indian', 'obc', 'Black Mole On Right Hend', 'Married', 'Literate', '', 'Panjab National Bank', 'PNB0059485', '784525963521', 'Pankaj', 'Friend', '28', '546978132548', '500', 'Five Hundred Only', '2QRk7VY16SEdLXK', 'pay_K2DxwlUfZJOBzH', '3', '{\"razorpay_payment_id\":\"pay_K2DxwlUfZJOBzH\",\"merchant_order_id\":\"TPXC3907\",\"merchant_trans_id\":\"1659761958\",\"merchant_product_info_id\":\"Order From Club Member\",\"merchant_surl_id\":\"http:\\/\\/localhost\\/satyakam_cordi\\/website\\/success\\/\",\"merchant_furl_id\":\"http:\\/\\/localhost\\/satyakam_cordi\\/website\\/success\\/\",\"card_holder_name_id\":\"RAMESH LAL\",\"merchant_total\":\"50000\",\"merchant_amount\":\"500\",\"order_id\":\"TPXC3907\",\"user_id\":\"\"}', '1', '[\"1\",\"1\",\"1\",\"1\"]', NULL, '2022-08-06', '1');

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
(3, '#255', 'Mohan', '9878', 'Mohan', '12222', '21222', '2222', '2222', '1', '6', '2', '#546568', '2022-05-16', '1'),
(4, '657', 'Maa Bhawani', '548585', '555855', '8458', '5555', '55855', '855555', '1', '5000', '15', '0001', '2022-07-01', '1'),
(19, '45826', 'BHAGAT SINGH', 'CLUB ID', 'MOHAN', '78655', 'RANCHI', '524', '78546952', '4582', '5544668', '11', 'DIR1234', '2022-04-14', '1'),
(20, 'sdfsdf', 'sdfsdf', 'sdfsdfsd', 'sdfsd', 'fsdf', 'sdf', 'sdfsd', 'fsdfsd', 'sdfsdf', 'sdfsdf', '11', 'DIR1234', '2022-04-19', '1'),
(21, 'dfgdf', 'dfgdfg', 'dfgdg', 'dfgdf', 'dfgtg', 'dgftgd', 'gdfgdf', 'gdfgdfg', 'dgfdfg', 'dgfdgdf', '11', 'DIR1234', '2022-04-20', '1'),
(22, 'fdghdgfh', 'ghfghf', 'ghfhgf', 'gfdhdgfh', 'hgfdgfh', 'dgfhdfghdfg', 'fdghfg', 'ghfghfhf', 'dfhdfgh', 'hdgfhtyhghf', '11', 'DIR1234', '2022-04-20', '1'),
(23, 'fdghdgfh', 'fghfdg', 'fghfdg', 'hdgfhrtyh', 'fdghrty', 'hdgfhdfh', 'dfghdfhfdgh', 'fddfghfgh', 'fghdgfhf', 'ghdfghdfgh', NULL, NULL, '2022-04-20', '1'),
(24, 'ghn', 'cnbvcn', 'yghnvcbn', 'vcbnvbcngh', 'ncvbn', 'ghcfnbcvncv', 'bnbcv', 'nbcvncvb', 'vcbnvbcn', 'bvncvcbnvc', NULL, NULL, '2022-04-20', '1'),
(25, 'dfg', 'dfg', 'dfgdfg', 'dfgdf', 'gdfg', 'dfgdfg', 'dfg', 'dfgdf', 'dfgdfgdfg', 'dfgdfg', '11', 'DIR1234', '2022-04-20', '1'),
(26, 'dfgdfg', 'dfgdfg', 'tgrdf', 'dfgdgf', 'dfg', 'dfgdfg', 'regdfg', 'vgdf', 'dfgd', 'gregfdg', '11', 'DIR1234', '2022-04-20', '1'),
(27, 'dgfhdgf', 'hfdghgfdh', 'dgfhdgf', 'hdfghgf', 'dhdgfh', 'fdhdfgh', 'fdghghf', 'ghfddhfg', 'fdghfg', 'fhfghd', '11', 'DIR1234', '2022-04-20', '1'),
(28, 'rtgd', 'fggdfg', 'gfd', 'dfgdfg', 'dfgdf', 'gdfgd', 'gdfg', 'dgdfgdf', 'dfgdfg', 'dgfdfgdf', '12', 'FIN987', '2022-04-20', '1'),
(29, 'dfg', 'dfgre', 'gdgd', 'gdfg', 'dgdfg', 'dfgdg', 'dfgdfg', 'dfgdfgdfg', 'dfgdfg', 'dgfdfgdf', '12', 'FIN987', '2022-04-20', '1'),
(30, '#876', 'Durga', '123', 'durga', '1233', '200', '500', '2000', '3', '5000', '13', '#BATCH-9876', '2022-05-14', '1'),
(31, '#692', 'Mohan', '876', 'mohan', '3445', '500', '300', '5677', '3', '5000', '13', '#BATCH-9876', '2022-05-14', '1');

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
(1, '552', 'Bhagat Singh', '12345', '12345', '01', 'Medium', '200', 'ewfsdfs', '1', '', '15', '0001', '2022-07-01', '1');

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
(2, 'AC', 2, '37000', '74000', 'BILL-87676', 'Ramesh', 'Cash', '0', '2', '2', '2022-05-18', 1),
(3, 'Laptop', 1, '75000', '75000', 'BIL-1223', 'TECH-COM Shop', 'Cash', 'No', '75300', '15', '2022-07-01', 1),
(4, 'Files', 2, '150', '300', 'BIL-2343', 'Pandey Pustak Bhandar', 'Cash', 'No', '75300', '15', '2022-07-01', 1),
(32, 'Equipment', 5, '500', '500', 'BILL123', '5000', 'UPI', '#488258585', '9500', '11', '2022-04-23', 1),
(33, 'Equipment 1 ', 9, '500', '4500', 'BILL45869', '4500', 'UPI', '#4586952425', '9500', '12', '2022-04-22', 1);

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

--
-- Dumping data for table `stk_generalgroup`
--

INSERT INTO `stk_generalgroup` (`id`, `depart_id`, `posts`, `registered_group_list`, `new_group_creative`, `group_saving_status`, `banking`, `e_received`, `group_loan_status`, `emi_banking`, `added_on`, `status`) VALUES
(1, '1', '1', '/assets/admin_upload/ajeevika/1646715155.pdf', '/assets/admin_upload/ajeevika/16467151551.pdf', '/assets/admin_upload/ajeevika/16467151552.pdf', '/assets/admin_upload/ajeevika/16467151553.pdf', '/assets/admin_upload/ajeevika/16467151554.pdf', '/assets/admin_upload/ajeevika/16467151555.pdf', '/assets/admin_upload/ajeevika/16467151556.pdf', '2022-03-08', '1'),
(2, '2', '3', '/assets/admin_upload/ajeevika/1646716131.pdf', '/assets/admin_upload/ajeevika/16467161311.pdf', '/assets/admin_upload/ajeevika/16467161312.pdf', '/assets/admin_upload/ajeevika/16467161313.pdf', '/assets/admin_upload/ajeevika/16467161314.pdf', '/assets/admin_upload/ajeevika/16467161315.pdf', '/assets/admin_upload/ajeevika/16467161316.pdf', '2022-03-08', '1');

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
(1, 'MEMBER12345', 'RAMESH SINGH', '2022-06-02', 'MOHAN SINGH', '9297827636', '458745896584', 'Teacher', '{\"total_members_in_word\":\"One\",\"total_members_in_number\":\"1\"}', '{\"mendetory1\":\"1\",\"mendetory2\":\"1\",\"mandatory3\":\"1\",\"mandatory4\":\"1\",\"mandatory5\":\"1\"}', '165977096701 (3).jpg', '{\"professor_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/1659770967.jpg\",\"p_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16597709671.jpg\",\"s_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16597709672.jpg\",\"t_sign\":\"\\/assets\\/uploads\\/groups\\/details\\/16597709673.jpg\"}', '1', '2022-08-06', '1'),
(2, 'MEM-55245858', 'MADHURYA SINGH', '2022-08-10', 'SANSARG SINGH', '9297827636', '458745896584', 'Inter', NULL, NULL, '1659780043aa4.jpg', NULL, '1', '2022-08-06', '1'),
(3, 'MEMBER12345', 'Tikadam', '2022-08-03', 'Wikadam', '7895461235', '1325469785', 'Teacher', NULL, NULL, '165978004361CjXp692wL.jpg', NULL, '1', '2022-08-06', '1'),
(4, 'MEMBER12345', 'Pankaj', '2022-08-11', 'Sohan Singh', '12345678958', '784512369584', 'Teacher', NULL, NULL, '1659780043aa6.jpg', NULL, '1', '2022-08-06', '1'),
(5, 'MEMBER12345', 'Tikadam', '2022-08-08', 'Wikadam', '7895461235', '1325469785', 'Teacher', NULL, NULL, '1659780254aa5.jpg', NULL, '1', '2022-08-06', '0'),
(6, 'MEMBER12345', 'Tikadam', '2022-08-08', 'Wikadam', '7895461235', '1325469785', 'Teacher', NULL, NULL, '1659780332aa5.jpg', NULL, '1', '2022-08-06', '0'),
(7, 'MEMBER12345', 'Tikadam', '2022-08-08', 'Wikadam', '7895461235', '1325469785', 'Teacher', NULL, NULL, '1659780344aa5.jpg', NULL, '1', '2022-08-06', '0'),
(8, 'MEMBER12345', 'Tikadam', '2022-08-08', 'Wikadam', '7895461235', '1325469785', 'Teacher', NULL, NULL, '1659780355aa5.jpg', NULL, '1', '2022-08-06', '0'),
(9, 'MEMBER12345', 'Tikadam', '2022-08-01', 'Wikadam', '7895461235', '1325469785', 'Teacher', NULL, NULL, '165978057261CjXp692wL.jpg', NULL, '1', '2022-08-06', '0');

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
(31, '7845698', 'BHAGAT SINGH', 'RANCHI', '1 week', '500', '500', '500', '500', '5005', '5486952', '548769', '11', 'DIR1234', '2022-04-14', '1'),
(32, '45825', 'RAJESH', 'RAJBHAR', '2 week', '200', '200', '200', '200', '200', '200', '548769', '11', 'DIR1234', '2022-04-14', '1'),
(33, 'sdf', 'sdf', 'sdfds', '3 week', 'sdfs', 'dfds', 'fsdf', 'sdfsd', 'sdfsdf', 'sdfsdf', 'sdfsd', '11', 'DIR1234', '2022-04-19', '1'),
(34, 'eere', 'kjdfg`kdgj`kg', 'egtre', '1 week', 'erter', 'erter', 'ertdfgdf', 'dgdfgre', 'dfgdfg', 'dfgdfg', 'dggdfg', '11', 'DIR1234', '2022-04-20', '1'),
(35, 'fdhdhyrth', 'fdghdfgh', 'fdhdfhfd', '2 week', 'fdghdf', 'gfdhgfh', 'fdghdfgh', 'fdhdfgh', 'dfghdfg', 'hfgdhdfghfg', 'fgddgfhfghf', '11', 'DIR1234', '2022-04-20', '1'),
(36, 'hdfg', 'hfdghfd', 'gfhdfgh', '2 week', 'fdghfd', 'ghdfgh', 'fdghdfg', 'hfdgh', 'fgh', 'gfhfdgh', 'dfghdfghfdg', NULL, NULL, '2022-04-20', '1'),
(37, 'ghf', 'nvbcnbcvn', 'bvnbcvnbcv', '2 week', 'nvbcbcv', 'vbcn', 'vbcnvb', 'nvbncvbn', 'cvbn', 'vbncvbn', 'vcbnvcbn', NULL, NULL, '2022-04-20', '1'),
(38, 'dfg', 'dfg', 'dfgdfg', '2 week', 'dfgdf', 'dfgdf', 'gdfg', 'dfgdfg', 'gdfg', 'dgf', 'dfgdf', '11', 'DIR1234', '2022-04-20', '1'),
(39, 'dfg', 'gdf', 'ggdfg', '2 week', 'dfger', 'gdfg', 'redfgv', 're', 'dfgre', 'dfg', 'dfg', '11', 'DIR1234', '2022-04-20', '1'),
(40, 'dgf', 'hdgfh', 'dfdfggh', '1 week', 'gfh', 'dfghdgfh', 'dgfh', 'dgfhdfgh', 'hdgfh', 'dgfhdfgh', 'fdghdfghfdg', '11', 'DIR1234', '2022-04-20', '1'),
(41, 'ergdf', 'gredf', 'gregdfgdrf', '2 week', 'ergdfg', 'dgdfg', 'dfgdfg', 'dgfergdfgregdfgrge', 'dgre', 'dfgdgdfg', 'dgfdregdfdfgdfgdf', '12', 'FIN987', '2022-04-20', '1'),
(42, 'dfgd', 'gdhgffdg', 'dfgdg', '2 week', 'dfgdre', 'gdfg', 'dgd', 'fgdfg', 'dfgdf', 'gdfg', 'dgfdregdfdfgdfgdf', '12', 'FIN987', '2022-04-20', '1'),
(43, '#43333', 'Maa Bhawani', 'Ranchi', '2 week', '500', '5200', '45826', '59852', '200', '200', '2', '13', '#BATCH-9876', '2022-05-14', '1'),
(44, '#76487', 'Dasahara', 'Ramgarh', '4 week', '500', '4500', '45693652', '7894561235', '500', '2500', '2', '13', '#BATCH-9876', '2022-05-14', '1');

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
(1, 'GRP4586', 'Pankja', 'ranchi', '2 week', 'rfgttgre', 'rgergerge', 'erre', '5200', 'rere', '2000', '2000', '11', 'DIR1234', '2022-04-18', '1'),
(2, 'GRP4586', 'Pankja', 'ranchi', '1 week', '500', 'rgergerge', '200', 'rgere', 'rere', 'hgdfhbrt', '2000', '11', 'DIR1234', '2022-05-18', '1'),
(3, '4587', 'Pankja', 'Ranchi', '2 week', 'rfgttgre', 'rgergerge', 'erre', '500', 'rere', 'hgdfhbrt', '2000', '11', 'DIR1234', '2022-04-19', '1'),
(4, 'sdf', 'dsf', 'dsfds', '1 week', 'fsdfds', 'fdsf', 'dsf', 'dsfds', 'sdf', 'sdfdsf', 'sdfdsf', '11', 'DIR1234', '2022-04-19', '1'),
(5, 'sdf', 'sdfsd', 'fsdf', '1 week', 'sdfds', 'fsdf', 'sdf', 'dsfdsfsdf', 'sdfsdf', 'sdf', 'sdfdsf', '11', 'DIR1234', '2022-04-19', '1'),
(6, 'GRPA458', 'Rajehs', 'RAcnhi', '3 week', '54845', '655548', 'EMI123', '52000', '5200', '458236558', '5000', '11', 'DIR1234', '2022-04-20', '1'),
(7, 'xcvbxcv', 'cxvb', 'xcvbxcvb', '2 week', 'cvbcxvb', 'cxbvxcvb', 'cxvbxcbv', 'xcvbcxvbxcvb', 'fgbf', 'dfbxcbxc', 'cvbgftbxc', '11', 'DIR1234', '2022-04-20', '1'),
(8, 'dfgh', 'dgfdfh', 'dgfbcxvbgf', '3 week', 'bxcgcd', 'bxcv', 'bgfb', 'xcvbxcvb', 'xcvbxc', 'vbcxvb', 'cvbgftbxc', '11', 'DIR1234', '2022-04-20', '1');

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

--
-- Dumping data for table `stk_group_resource`
--

INSERT INTO `stk_group_resource` (`id`, `group_no`, `group_name`, `installation_date`, `total_revenue`, `mandatory1`, `mandatory2`, `mandatory3`, `mandatory4`, `mandatory5`, `mandatory6`, `report_confirm`, `groupdetails`, `user_id`, `added_on`, `status`) VALUES
(6, 'GRPNO8767', 'Bhagat Singh', '2022-04-08', '2544', '1', '1', '1', '1', '1', '1', '5000', '[{\"resources\":\"Mobile\",\"modelno\":\"Model123\",\"brandname\":\"Brand6675\",\"quantity\":\"5\",\"rate\":\"500\",\"amount\":\"500\",\"total_amount\":\"2500\"},{\"resources\":\"Computer\",\"modelno\":\"Model1234\",\"brandname\":\"Computer\",\"quantity\":\"58\",\"rate\":\"500\",\"amount\":\"5202\",\"total_amount\":\"2500\"}]', '11', '2022-04-22', '1');

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
(1, '2022-08-04', '3', '3', 'Patna', '1', 'Patna', 'Patna', '45858', '1', 'Bhagat Singh', '9297827636', 'pmt.pankaj29@gmail.com', 'GROUP1', '2206081', '2022-08-06', '1'),
(17, '2022-05-11', '3', '1', 'Patna', '0', 'ranchi', 'Patna', '#4582658', '11', 'Mohan', '1325469785', 'mohan@gmail.com', NULL, NULL, '2022-05-10', '1'),
(18, '2022-05-11', '3', '1', 'Patna', '0', 'ranchi', 'Patna', '#4582658', '11', 'Mohan', '1325469785', 'rajesh@gmail.com', NULL, NULL, '2022-05-11', '1'),
(19, '2022-05-12', '3', '1', 'Patna', '0', 'ranchi', 'Patna', '#4582658', '11', 'Group Name', '1325469785', 'rajesh@gmail.com', NULL, NULL, '2022-05-11', '1'),
(20, '2022-05-04', '3', '1', 'Patna', '0', 'Patna', 'Patna', '#564787655', '12', 'Maa Bhawani', '1234567895', 'bhawani@gmail.com', 'bhawani', '12345', '2022-05-12', '1'),
(21, '2022-05-17', '3', '1', 'Patna', '4', 'ranchi', 'Patna', '#4582658', '4', 'Mohan', '1325469785', 'rajesh@gmail.com', 'durga', '12345', '2022-05-12', '1'),
(22, '2022-05-18', '3', '1', 'Patna', '4', 'ranchi', 'Patna', '#87656', '4', 'Radha', '456123458458', 'radha@gmail.com', 'radha', '12345', '2022-05-12', '1'),
(23, '2022-06-21', '3', '5', 'Madhubani', '0', 'KHAJAULI', 'datuar', '03', '15', 'gauri', '9123134362', 'mayakumari45681@gmail.com', 'GROUP23', '22210623', '2022-06-21', '1'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-21', '1'),
(25, '2022-07-20', '5', '19', 'Patna', '27', 'Pandah', 'Patna', '#4582658', '27', 'Bhagat Singh', '9297827636', 'pmt.pankaj29@gmail.com', 'GROUP25', '22060725', '2022-07-06', '1'),
(26, '2022-07-11', '3', '5', 'Madhubani', '0', 'KHAJAULI', 'datuar', '03', '32', 'gauri aajivika gram sangathan khajauli', '9123134362', 'mayakumari45681@gmail.com', NULL, NULL, '2022-07-11', '1'),
(27, '2022-01-22', '3', '5', 'Madhubani', '43', 'Kaluahi', 'Narar', '12', '43', 'Janki Aajivika Group', '9835733306', 'kalpanakumari1989@gmail.com', NULL, NULL, '2022-07-18', '1'),
(28, '2022-07-19', '4', '13', 'Ranchi', '37', 'Pandah', 'Khalari', '00ASD', '37', 'Rajesthan', '9297827636', 'pmt.pankaj29@gmail.com', NULL, NULL, '2022-07-19', '1'),
(29, '2022-07-19', '6', '35', 'Ranchi', '0', 'Pandah', 'Khalari', '0067', '32', 'Jharkhand ', '9297827636', 'pmt.pankaj29@gmail.com', 'GROUP29', '22190729', '2022-07-19', '1'),
(30, '2022-07-19', '5', '19', 'Ballia', '0', 'Pandah', 'Pakri', '#6788', '32', 'THalka', '9297827636', 'pmt.pankaj29@gmail.com', 'GROUP30', '22190730', '2022-07-19', '1'),
(31, '2022-07-20', '3', '5', 'madhubani', '0', 'KHAJAULI', 'datuar', '03', '32', 'gauri aajivika gram sangathan khajauli', '9123134362', 'gitakumari022@gmail.com', 'GROUP31', '22200731', '2022-07-20', '1'),
(32, '2022-01-22', '3', '5', 'Madhubani', '0', 'Kaluahi', 'Narar', '12', '142', 'Janki Aajiwika group', '9835733306', 'kalpanakumari09122@gmail.com', NULL, NULL, '2022-07-21', '1'),
(33, '2022-08-16', '3', '5', 'Madhubani ', '47', 'Rajnagar', 'Rajnagar', '1', '47', 'Shankar aajiwika group ', '9534741434', 'riteshrmishra1995@gmail.com', NULL, NULL, '2022-08-16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_loan_group`
--

CREATE TABLE `stk_loan_group` (
  `id` int(11) NOT NULL,
  `req_date` date DEFAULT NULL,
  `member_id` varchar(200) DEFAULT NULL,
  `member_name` varchar(200) DEFAULT NULL,
  `group_id` varchar(200) DEFAULT NULL,
  `group_name` varchar(200) DEFAULT NULL,
  `loan_amount` varchar(200) DEFAULT NULL,
  `loan_amount_in_word` text DEFAULT NULL,
  `total_month` varchar(200) DEFAULT NULL,
  `state_unit_name` varchar(200) DEFAULT NULL,
  `division_unit_name` varchar(200) DEFAULT NULL,
  `district_branch` varchar(200) DEFAULT NULL,
  `approvel_status` varchar(1) NOT NULL DEFAULT '0',
  `emi_status` int(200) NOT NULL DEFAULT 0,
  `added_on` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_loan_group`
--

INSERT INTO `stk_loan_group` (`id`, `req_date`, `member_id`, `member_name`, `group_id`, `group_name`, `loan_amount`, `loan_amount_in_word`, `total_month`, `state_unit_name`, `division_unit_name`, `district_branch`, `approvel_status`, `emi_status`, `added_on`, `status`) VALUES
(1, '2022-08-05', '784525695848', 'Ramesh Singh', 'GROUP25', 'Mohan', '2000', 'Two Thousand Only', '9', '3', '3', 'Ranchi', '1', 0, '2022-08-05', 1),
(2, '2022-08-05', '784525695848', 'Ramesh Singh', 'GROUP25', 'Mohan', '2000', 'Two Thousand Only', '5', '4', '12', 'Ranchi', '1', 0, '2022-08-05', 1),
(3, '2022-08-10', '784525695848', 'Ramesh Singh', 'GROUP25', 'Mohan', '2000', 'Two Thousand Only', '9', '3', '3', 'Ranchi', '0', 0, '2022-08-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stk_loan_member`
--

CREATE TABLE `stk_loan_member` (
  `id` int(11) NOT NULL,
  `req_date` date DEFAULT NULL,
  `member_id` varchar(200) DEFAULT NULL,
  `member_name` varchar(200) DEFAULT NULL,
  `loan_amount` varchar(200) DEFAULT NULL,
  `loan_amount_in_word` varchar(200) DEFAULT NULL,
  `total_month` varchar(200) DEFAULT NULL,
  `state_unit_name` varchar(200) DEFAULT NULL,
  `division_unit_name` varchar(200) DEFAULT NULL,
  `district_branch` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `approve_status` varchar(1) NOT NULL DEFAULT '0',
  `emi_status` varchar(10) NOT NULL DEFAULT '0',
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_loan_member`
--

INSERT INTO `stk_loan_member` (`id`, `req_date`, `member_id`, `member_name`, `loan_amount`, `loan_amount_in_word`, `total_month`, `state_unit_name`, `division_unit_name`, `district_branch`, `added_on`, `approve_status`, `emi_status`, `status`) VALUES
(1, '2022-08-05', '784525695848', 'RAMESH LAL ', '2000', 'Two Thousand Only', '5', '11', '34', 'Ranchi', '2022-08-05', '0', '0', '1'),
(2, '2022-08-05', '784525695848', 'Ramesh Singh', '2000', 'Two Thousand Only', '7', '4', '12', 'Ranchi', '2022-08-05', '0', '0', '1'),
(3, '2022-08-05', '784525695848', 'Ramesh Singh', '2000', 'Two Thousand Only', '11', '10', '63', 'Ranchi', '2022-08-05', '0', '0', '1'),
(4, '2022-08-05', '784525695848', 'Ramesh Singh', '2000', 'Two Thousand Only', '11', '10', '63', 'Ranchi', '2022-08-05', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_member_certificate`
--

CREATE TABLE `stk_member_certificate` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `signup_id` varchar(200) DEFAULT NULL,
  `cf_no` longtext DEFAULT NULL,
  `division` varchar(200) DEFAULT NULL,
  `dist` varchar(200) DEFAULT NULL,
  `sponser_id` varchar(200) DEFAULT NULL,
  `member_name` varchar(200) DEFAULT NULL,
  `father_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `saving_plan_no` varchar(200) DEFAULT NULL,
  `term_years` varchar(200) DEFAULT NULL,
  `numinee_name` varchar(200) DEFAULT NULL,
  `numinee_relation` varchar(200) DEFAULT NULL,
  `numinee_age` varchar(200) DEFAULT NULL,
  `numinee_aadhar_no` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `added_on` varchar(200) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_member_certificate`
--

INSERT INTO `stk_member_certificate` (`id`, `member_id`, `signup_id`, `cf_no`, `division`, `dist`, `sponser_id`, `member_name`, `father_name`, `email`, `mobile`, `saving_plan_no`, `term_years`, `numinee_name`, `numinee_relation`, `numinee_age`, `numinee_aadhar_no`, `image`, `added_on`, `status`) VALUES
(1, 1, '1', 'CF0001', '19', 'Amritsar', NULL, 'Ramesh Singh', 'Rishav Singh', 'pmt.pankaj29@gmail.com', '9297827636', 'super_e', '8 years', 'Pankaj Mani Tiwari', 'Brother', '49', '78459685254148', '/assets/uploads/member/1655549368.jpg', '2022-06-29', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_member_club_report`
--

CREATE TABLE `stk_member_club_report` (
  `id` int(11) NOT NULL,
  `month` varchar(20) DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  `rank` varchar(200) DEFAULT NULL,
  `level` varchar(200) DEFAULT NULL,
  `club_team` varchar(200) DEFAULT NULL,
  `bike_fund` varchar(200) DEFAULT NULL,
  `domin_deduct` varchar(200) DEFAULT NULL,
  `payment` varchar(200) DEFAULT NULL,
  `bill_no` varchar(200) DEFAULT NULL,
  `billing_date` date DEFAULT NULL,
  `check_no` varchar(200) DEFAULT NULL,
  `total_revenue` varchar(200) DEFAULT NULL,
  `member_id` varchar(200) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stk_member_details`
--

CREATE TABLE `stk_member_details` (
  `id` int(11) NOT NULL,
  `membership_no` varchar(200) DEFAULT NULL,
  `signup_id` varchar(200) DEFAULT NULL,
  `app_no` varchar(200) DEFAULT NULL,
  `app_date` date DEFAULT NULL,
  `state_unit_name` varchar(200) DEFAULT NULL,
  `division_unit_name` varchar(200) DEFAULT NULL,
  `applicant_name` varchar(200) DEFAULT NULL,
  `father_name` varchar(200) DEFAULT NULL,
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
  `bank_name` varchar(200) DEFAULT NULL,
  `account_no` varchar(200) DEFAULT NULL,
  `type_account` varchar(200) DEFAULT NULL,
  `ifsc_code` varchar(200) DEFAULT NULL,
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

INSERT INTO `stk_member_details` (`id`, `membership_no`, `signup_id`, `app_no`, `app_date`, `state_unit_name`, `division_unit_name`, `applicant_name`, `father_name`, `dob`, `mobile_no`, `email`, `village`, `panchayat`, `ward_no`, `police_station`, `block`, `dist`, `state`, `pin_code`, `aadhar`, `election_card_no`, `from`, `sex`, `nationality`, `category`, `identification_marks`, `confirm_membership`, `marital_status`, `super`, `year`, `education`, `other_details`, `nominee_name`, `nominee_relation`, `nominee_age`, `nominee_aadhar`, `confirm_1`, `confirm_2`, `witness_name`, `witness_mobile_no`, `bank_name`, `account_no`, `type_account`, `ifsc_code`, `designation`, `service_no`, `batch_no`, `officer_mobile_no`, `added_on`, `status`) VALUES
(1, '784525695848', '1', '12-558545885', '2022-06-09', '5', '19', 'Ramesh Singh', 'Rishav Singh', '2022-06-03', '9297827636', 'pmt.pankaj29@gmail.com', 'Bhojpur', 'Bhojpur', '#25485', 'Patna', 'Pandah', 'Amritsar', 'Jharkhand', '9297858', '978548695848', 'ELE-5643', 'rural', 'rural', 'Indian', 'obc', 'Black Mole On Right Hend', 'yes', 'Unmarried', 'super_e', '8 years', 'Eighth Pass', '', 'Pankaj Mani Tiwari', 'Brother', '49', '78459685254148', '1', '1', 'Rina ', '927858486958', NULL, NULL, NULL, NULL, 'Rajesh', '#123456789', '#7654', '12345678958', '2022-06-22', 1),
(2, 'MEMBER12345', '2', '0001-75666', '2022-06-10', '4', '13', 'Ramesh Singh', 'Mohan Singh', '2022-06-02', '9297827636', 'PMT.PANKAJ29@GMAIL.COM', 'Sasaram', 'Ranchi', '#87656', 'Patna', 'ranchi', 'ranchi', 'Jharkhand', '12345', '546132978546', 'JUB877', 'rural', 'rural', 'Indian', 'obc', 'A Black Mole On Right Cheek', 'yes', 'Unmarried', 'super_d', '8 years', 'Eighth Pass', '', 'Rajmohan  ', 'Brother', '28', '789456123584', '1', '1', 'Rina ', '9297827636', NULL, NULL, NULL, NULL, 'Ranchi', '#123456789', '#7654', '12345678958', '2022-06-22', 1),
(3, '001', '3', '152-88546958', '2022-06-17', '4', '13', 'Saurabh Kumar', 'Mohan Singh', '1996-01-30', '9113766087', 'abc@gmail.com', 'Lohadih', 'Ranchi', '00254', 'Ranchi', 'ranchi', 'ranchi', 'Jharkhand', '12345', '784512695847', 'ELE-8765', 'rural', 'rural', 'Indian', 'obc', 'A Black Mole On Right Cheek', 'yes', 'Unmarried', 'super_b', '8 years', 'Eighth Pass', '', 'Rajmohan  ', '7845123695', '55', '4585965848', '1', '1', 'Brother', '9297827636', NULL, NULL, NULL, NULL, 'Teacher', '0001', 'Ranchi', '9275845963', '2022-06-23', 1),
(4, 'MEM-55245858', '4', '12-58469584', '2022-06-02', '4', '12', 'Madhurya Singh', 'Sansarg Singh', '1992-04-12', '9297827636', 'pmt.pankaj29@gmail.com', 'Ramgaon', 'Khalari', '#002548', 'Khalari', 'Khalari', 'Ranchi', 'Jharkhand', '829205', '748596365241', 'ELE-552458', 'rural', 'Female', 'Indian', 'gen', 'A Black Mole On Right Cheek', 'yes', 'Unmarried', 'super_a', '5 years', 'Eighth Pass', '', 'Rajmohan  ', '7845123695', '55', '789456123584', '1', '1', 'Brother', '9297827636', NULL, NULL, NULL, NULL, 'Ranchi', '22548569584', 'Batch-58254', '9297827636', '2022-06-27', 1),
(5, NULL, '10', '123-9875665655', '2022-07-08', '4', '11', 'Rajesh', 'Rishav Singh', '2022-07-08', '9297827636', 'mohan@gmail.com', 'Lohadih', 'Patna', '#87656', 'Ranchi', 'Pandah', 'Patna', 'Jharkhand', '12345', '1234546789877767', 'ELE-758278', 'rural', 'Female', 'Indian', 'gen', 'Black Mole On Right Hend', 'no', 'Married', 'super_e', '8 years', 'Eighth Pass', '', 'Pankaj', 'Friend', '28', '546978132548', NULL, NULL, '', '12345678958', NULL, NULL, NULL, NULL, 'Teacher', '#748569', '#546568', '12345678958', '2022-07-18', 1);

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
(57, '9', '3', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
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
(81, '10', '4', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(82, '11', '4', 'false', 'false', 'true', 'false', 'false', 'false', '2022-04-08', '1'),
(83, '19', '4', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(84, '20', '4', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(85, '21', '4', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(86, '22', '4', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(87, '23', '4', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(88, '15', '4', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(89, '16', '4', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(90, '17', '4', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(91, '18', '4', 'false', 'false', 'false', 'false', 'false', 'true', '2022-04-08', '1'),
(92, '12', '5', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(93, '14', '4', 'false', 'false', 'false', 'false', 'true', 'false', '2022-04-08', '1'),
(94, '3', '4', 'false', 'false', 'false', 'true', 'false', 'false', '2022-04-08', '1'),
(95, '4', '4', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(96, '5', '4', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(97, '6', '4', 'true', 'false', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(98, '7', '4', 'false', 'true', 'false', 'false', 'false', 'false', '2022-04-08', '1'),
(99, '8', '4', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
(100, '1', '4', 'true', 'true', 'true', 'true', 'true', 'true', '2022-04-08', '1'),
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

--
-- Dumping data for table `stk_myoffice`
--

INSERT INTO `stk_myoffice` (`id`, `depart_id`, `posts`, `e_contract_status`, `service_did_status`, `service_book_status`, `training_status`, `appointment_status`, `order_status`, `ultimatum_status`, `transfer_status`, `promotion_status`, `security_fund_status`, `my_pf_status`, `added_on`, `status`) VALUES
(3, '3', '5', '/assets/admin_upload/my_office/1646646924.pdf', '/assets/admin_upload/my_office/16466469241.pdf', '/assets/admin_upload/my_office/16466469242.pdf', '/assets/admin_upload/my_office/16466469243.pdf', '/assets/admin_upload/my_office/16466469244.pdf', '/assets/admin_upload/my_office/16466469245.pdf', '/assets/admin_upload/my_office/16466469246.pdf', '/assets/admin_upload/my_office/16466469247.pdf', '/assets/admin_upload/my_office/16466469248.pdf', '/assets/admin_upload/my_office/16466469249.pdf', '/assets/admin_upload/my_office/164664692410.pdf', '2022-03-07', '1'),
(4, '2', '3', '/assets/admin_upload/my_office/1646647065.pdf', '/assets/admin_upload/my_office/16466470651.pdf', '/assets/admin_upload/my_office/16466470652.pdf', '/assets/admin_upload/my_office/16466470653.pdf', '/assets/admin_upload/my_office/16466470654.pdf', '/assets/admin_upload/my_office/16466470655.pdf', '/assets/admin_upload/my_office/16466470656.pdf', '/assets/admin_upload/my_office/16466470657.pdf', '/assets/admin_upload/my_office/16466470658.pdf', '/assets/admin_upload/my_office/16466470659.pdf', '/assets/admin_upload/my_office/164664706510.pdf', '2022-03-07', '1');

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

--
-- Dumping data for table `stk_my_document`
--

INSERT INTO `stk_my_document` (`id`, `depart_id`, `posts`, `office_quotation`, `service_did`, `service_book`, `training_proc`, `appointment_proc`, `official_order`, `ultimatum`, `transfer_proc`, `promotion_proc`, `security_fund_rec`, `my_pf`, `added_on`, `status`) VALUES
(2, '1', '1', '/assets/admin_upload/1656589276.pdf', '/assets/admin_upload/16565892761.pdf', '/assets/admin_upload/16565892762.pdf', '/assets/admin_upload/16565892763.pdf', '/assets/admin_upload/16565892764.pdf', '/assets/admin_upload/16565892765.pdf', '/assets/admin_upload/16565892766.pdf', '/assets/admin_upload/16565892767.pdf', '/assets/admin_upload/16565892768.pdf', '/assets/admin_upload/16565892769.pdf', '/assets/admin_upload/165658927610.pdf', '2022-06-30', '1'),
(3, '1', '1', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, '2022-08-19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_officer_details`
--

CREATE TABLE `stk_officer_details` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(20) DEFAULT NULL,
  `state_id` varchar(200) DEFAULT NULL,
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
  `query` text DEFAULT NULL,
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
  `ac_no` varchar(200) DEFAULT NULL,
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

INSERT INTO `stk_officer_details` (`id`, `batch_no`, `state_id`, `reg_no`, `Join_in_branch`, `branch_code`, `department_id`, `post_id`, `mobile_no`, `email_id`, `service_did`, `officer_first_name`, `officer_middle_name`, `officer_last_name`, `father_first`, `father_middle`, `father_last`, `query`, `mother_occupation`, `m_annual_encome`, `father_occupation`, `f_annual_income`, `gender`, `nationality`, `marriage_status`, `dob`, `aadhar_no`, `pan_no`, `security_rs_amount`, `security_transaction_id`, `date`, `processing_rs_amount`, `processing_rs_transaction`, `processing_rs_date`, `training_rs`, `training_transaction`, `training_date`, `total_deposit`, `bank_name`, `branch_name`, `ac_no`, `type_of_account`, `ifsc_code`, `confirm_1`, `confirm_2`, `confirm_3`, `confirm_4`, `image`, `signature`, `aadhar`, `pan`, `bank_account`, `signature_upload`, `photo_upload`, `security_e_receipt`, `processing_receipt`, `training_receipt`, `signup_id`, `verify_status`, `username`, `password`, `added_on`, `status`) VALUES
(15, '#5005', '2', 'STKMRGE-1', 'Ranchi', '#5005', '1', '1', '9297827636', 'pmt.pankaj28@gmail.com', '1001', 'Pankaj', 'Mani', 'Tiwari', 'Sidheshwar', 'Nath', 'Tiwari', 'JSQ8 ACC C', 'House Wife', '0.00', 'Teacher', '500000.00', 'Male', 'Indian', 'Married', '2022-06-08', '123456789458', 'PAN12345', '500', 'TRAN784525', '2022-05-31', '200', 'TRANS4585', '2022-06-22', '200', 'TRANS452586', '2022-06-20', 'Panjab National Bank', 'Panjab National Bank', 'Ranchi', '784512963584', 'Saving', 'IFSC000254', '1', '1', '1', '1', '/assets/uploads/1654150901.jpg', '/assets/uploads/1654150902.jpg', '/assets/uploads/1654150903.jpg', '/assets/uploads/16541509031.jpg', '/assets/uploads/16541509032.jpg', NULL, NULL, '/assets/uploads/16541509033.jpg', '/assets/uploads/16541509034.jpg', '/assets/uploads/16541509035.jpg', '1', '1', 'PANK123', '12345', '2022-06-02', '1'),
(35, '9297827636', '6', 'STKMRGE-16', 'Ranchi', 'Ranchi', '9', '22', '9297827636', 'pmt.pankaj29@gmail.com', 'SRV445585', 'Mohan ', 'Kumar', 'Rajbhar', 'Rita', 'Devi', '', 'JSQ4 ACC COLONY KHALARI RANCHI JHARKHAND 829205', 'House Wife', '2000.00', 'Teacher', '500000.00', 'Male', 'Indian', 'Single', '2022-07-14', '784512365849', 'PANJH68956', '5000', 'ID748596258', '2022-07-13', '500', 'ID456935241', '2022-07-13', '1000', 'ID4578963652', '2022-07-06', 'Nine Thousand Only ', 'Yes Bank', 'Ranchi', '784512963584', 'Saving', '#784526', '1', '1', '1', '1', NULL, NULL, '/assets/uploads/1657518416.jpg', '/assets/uploads/1657518417.png', '/assets/uploads/1657518417.jpg', NULL, NULL, '/assets/uploads/16575184171.jpg', '/assets/uploads/16575184171.png', '/assets/uploads/16575184172.png', '16', '1', 'mohan_123', '12345', '2022-07-11', '1'),
(36, '#8765', '10', 'STKMRGE-17', 'Ranchi', '#8765', '3', '5', '9297827636', 'cbdgf@gmail.com', '#74859658', 'Pankaj', 'Mani', 'Tiwari', 'Pankaj', 'Mani', 'Tiwari', 'ranchiRanchodfgdfg', 'TEACHER', '12233.00', 'Teacher ', '52000.00', 'Male', 'Indian', 'Single', '2022-07-14', '123456789458', 'PAN1234', '1000', '#74859636', '2022-07-06', '300', 'TRANS785695', '2022-07-06', '100', 'ID4578963652', '2022-07-08', '1234555', 'Panjab National Bank', 'Ranchi', '000000000000', 'Saving', 'PNB0059485', '1', '1', '1', '1', '/assets/uploads/1657535027.jpg', '/assets/uploads/1657535027.png', '/assets/uploads/16575350271.jpg', '/assets/uploads/16575350272.jpg', '/assets/uploads/16575350273.jpg', NULL, NULL, '/assets/uploads/16575350271.png', '/assets/uploads/16575350274.jpg', '/assets/uploads/16575350275.jpg', '17', '1', 'admin', '12345', '2022-07-11', '1'),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '2022-08-29', '1');

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
  `father_name` varchar(200) DEFAULT NULL,
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

INSERT INTO `stk_project_member` (`id`, `sponsor_id`, `created_by`, `application_date`, `state_unit_name`, `division_unit_name`, `dist`, `applicant_name`, `father_name`, `dob`, `mobile_no`, `email`, `username`, `password`, `added_on`, `status`) VALUES
(1, '0', '15', '2022-06-09', '5', '19', 'Amritsar', 'Ramesh Singh', 'Rishav Singh', '2022-06-03', '9297827636', 'pmt.pankaj29@gmail.com', 'STYKMMEM122', '2222060245', '2022-06-22', '1'),
(2, '1', '1', '2022-06-10', '4', '13', 'Amritsar', 'Ramesh Singh', 'Mohan Singh', '2022-06-02', '9297827636', 'PMT.PANKAJ29@GMAIL.COM', 'STYKMMEM222', '2222060244', '2022-06-22', '1'),
(3, '2', '2', '2022-06-17', '4', '13', 'Ranchi', 'Saurabh Kumar', 'ABC ', '1996-01-30', '9113766087', 'abc@gmail.com', 'STYKMMEM323', '2223061100', '2022-06-23', '1'),
(4, '0', '15', '2022-06-02', '4', '12', 'Ranchi', 'Madhurya Singh', 'Sansarg Singh', '1992-04-12', '9297827636', 'pmt.pankaj29@gmail.com', 'STYKMMEM427', '2227060206', '2022-06-27', '1'),
(10, '0', '15', '2022-07-08', '4', '11', 'Amritsar', 'Rajesh', 'Rishav Singh', '2022-07-08', '9297827636', 'mohan@gmail.com', 'STYKMMEM1018', '2218070631', '2022-07-18', '1');

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

--
-- Dumping data for table `stk_result`
--

INSERT INTO `stk_result` (`id`, `admitcard_id`, `issue_date`, `applicant_no`, `registration_no`, `batch_no`, `candidate_name`, `mobile_no`, `email`, `father_name`, `designation`, `interviewdate`, `interview_time`, `center`, `unit_code`, `permanent_address`, `personality`, `leadership_quality`, `thinking`, `qualification`, `extra_qualification`, `experience`, `iq_test`, `mind_set`, `result_decelear`, `security_deposit`, `procesing_fee_`, `training_fee`, `others`, `total_amount`, `total_amount_in_word`, `last_payment_date`, `result_publish`, `added_on`, `status`) VALUES
(1, '1', '0000-00-00', '1', '20220511-001', '#BATCH-9876', 'Mohan Rajbhar', '7854613254', 'sakju@gmail.com', 'Manoj Rajbhar', 'STATE PROJECT DIRECTOR OFFICE(S.P.D.O.)', '2022-05-17', '20:18', 'DAV Public School Gaya Bihar', '85469', 'Rancho', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Selected', '500', '500', '500', '500', '2000', 'Two Thousand Only', '2022-06-10', 1, '2022-07-08', '1'),
(2, '11', '0000-00-00', '5', '19890228-0011', '12345', 'gita kumari', '123546874112', 'hira1985@gamil.com', 'Ram kumar singh', 'DISTRICT OFFICER', '2022-08-17', '23:25', 'PACC High School', '25485', 'JKBMLMHIUC', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Selected', '500', '500', '500', '500', '200', 'Two Hundred Only', '2022-08-19', 1, '2022-08-19', '1');

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
(6, '456', 'Rajesh Sinha', 'Shiraj Sinha', '2022-05-04', 'Cheaf manager', '2000', '2022-05-03', '#4582585', '2', '2', '#546568', '2022-05-16', '1'),
(7, '1234', 'Sohan Singh', 'Ramesh Singh', '1992-04-12', 'Jharkhand', '200', '2022-04-12', '1254854858', '2', '15', '0001', '2022-07-01', '1');

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
(1, '02`', 'Pankaj', 'Sidheshware', '2022-07-11', 'Hind', '500', '2022-07-05', '#45825', '2', '15', '0001', '2022-07-01', '1');

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
(4, '#99888', 'Ramesh', 'Operator', '2554558', '200', 200, '200', '8766', '12558', '1', '2', '#546568', '2022-05-16', '1'),
(5, '4321', 'rahul', 'Director', '200', '200', 200, '200', '200', '12548585', '2', '15', '0001', '2022-07-01', '1');

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
(1, '02`', 'Mohan', '12', '252', '5222``', 50000, '3333', '3333`', '33333', '1', '15', '0001', '2022-07-01', '1');

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
(32, 'Member List', '{\"0\":\"\"}', 'admin/member_list', '<i class=\"nav-icon fa fa-leaf\" aria-hidden=\"true\"></i>', 'Member List', 31, 23, '\"\"admin\"\"', 1),
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
(1, '4', '1', '0001', 'Ranchi', '1', '#5005', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj28@gmail.com', '2022-06-02', '1'),
(2, '4', '1', '#546568', '#BNCH12345', '1', '#00C2', 'Pankaj Mani Tiwari', '12345678958', 'rajesh@gmail.com', '2022-06-03', '1'),
(3, '6', '1', '#45978', 'Ranchi', '1', '#8765', 'Pankaj Mani Tiwari', '12345678958', 'rajesh@gmail.com', '2022-06-03', '1'),
(4, '9', '5', '#7654', 'Ranchi', '3', '#8765', 'Pankaj Mani Tiwari', '9297827636', 'rajesh@gmail.com', '2022-06-04', '1'),
(5, '9', '5', '#7654', 'Ranchi', '3', '#8765', 'Mohan Singh', '9297827636', 'atri@gmail.com', '2022-06-04', '1'),
(6, '7', '5', '#546568', '#BNCH12345', '3', '#8765', 'Pankaj Mani Tiwari', '9297827636', 'rajesh@gmail.com', '2022-06-04', '1'),
(7, '7', '3', '#546568', 'Ranchi', '2', '#00C2', 'Pankaj Mani Tiwari', '9297827636', 'rajesh@gmail.com', '2022-06-09', '1'),
(8, '10', '29', '#7654', 'Ranchi', '5', '#9876', 'Pankaj Mani Tiwari', '9297827636', 'cbdgf@gmail.com', '2022-06-09', '1'),
(9, '19', '7', 'BATCH-9876', 'Naynital', '4', 'Rudrapur', 'Rishabh', '9297827636', 'pmt.pankaj29@gmail.com', '2022-06-15', '1'),
(10, '4', '5', 'BATCH-5678', 'Ranchi', '3', '00678', 'Ramesh Singh', '9297827636', 'pmt.panakj287@gmail.com', '2022-06-16', '1'),
(11, '8', '7', '#7654', 'Ranchi', '4', '#8765', 'Pankaj Mani Tiwari', '9297827636', 'rajesh@gmail.com', '2022-06-16', '1'),
(12, '10', '9', '#45978', '#BNCH12345', '6', '#9876', 'Pankaj Mani Tiwari', '9297827636', 'cbdgf@gmail.com', '2022-06-16', '1'),
(13, '4', '3', '#546568', 'Ranchi', '2', '#00C2', 'Pankaj Mani Tiwari', '9113766087', 'cbdgf@gmail.com', '2022-06-24', '1'),
(14, '5', '3', '#546568', '#BNCH12345', '2', '#00C2', 'Pankaj Mani Tiwari', '9113766087', 'saurav@gmail.com', '2022-06-24', '1'),
(15, '', '', '', '', '3', '', '', '9297827636', '', '2022-07-08', '1'),
(16, '6', '22', '9297827636', 'Ranchi', '9', 'Ranchi', 'Sambhu Singh', '9297827636', 'pmt.pankaj29@gmail.com', '2022-07-11', '1'),
(17, '10', '5', '#7654', 'Ranchi', '3', '#8765', 'Pankaj Mani Tiwari', '9297827636', 'cbdgf@gmail.com', '2022-07-11', '1'),
(18, '4', '3', '#546568', '#BNCH12345', '2', '#00C2', 'Pankaj Mani Tiwari', '9297827636', 'rajesh@gmail.com', '2022-07-11', '1'),
(19, '4', '10', '#122222', '#BNCH12345', '6', '#00C2', 'Ramesh RAjbhar', '9297827636', 'pmt.pankaj29@gmail.com', '2022-07-11', '1'),
(21, '3', '3', '#546568', 'ranchi', '2', '#00C2', 'Pankaj Mani Tiwari', '9297827636', 'rajesh@gmail.com', '2022-07-22', '1'),
(22, '6', '3', '#BATCH-9876', 'Ranchi', '2', '#00C2', 'Pankaj Mani Tiwari', '9297827636', 'admin@gmail.com', '2022-08-18', '1'),
(23, '4', '1', '#45978', '#BNCH12345', '1', '#00C2', 'Pankaj Mani Tiwari', '9297827636', 'mohan@gmail.com', '2022-08-19', '1'),
(24, '3', '4', 'Mohan', 'Ranchi', '2', 'Ranchi', 'Pankaj Mani Tiwari', '9297827636', 'mohan@gmail.com', '2022-08-30', '1');

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
  `ac_no` varchar(200) DEFAULT NULL,
  `type_of_account` varchar(100) DEFAULT NULL,
  `ifsc_code` varchar(100) DEFAULT NULL,
  `confirm_1` varchar(5) DEFAULT NULL,
  `confirm_2` varchar(5) DEFAULT NULL,
  `confirm_3` varchar(5) DEFAULT NULL,
  `confirm_4` varchar(5) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `signature` varchar(200) DEFAULT NULL,
  `aadhar` varchar(200) DEFAULT NULL,
  `pan` varchar(200) DEFAULT NULL,
  `bank_account` varchar(200) DEFAULT NULL,
  `security_e_receipt` varchar(200) DEFAULT NULL,
  `processing_receipt` varchar(200) DEFAULT NULL,
  `training_receipt` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_team`
--

INSERT INTO `stk_team` (`id`, `user_id`, `state`, `depart_id`, `post_id`, `batch_no`, `Join_in_branch`, `branch_code`, `mobile_no`, `email_id`, `service_did`, `officer_first_name`, `officer_middle_name`, `officer_last_name`, `father_first`, `father_middle`, `father_last`, `query`, `mother_occupation`, `m_annual_encome`, `father_occupation`, `f_annual_income`, `gender`, `nationality`, `marriage_status`, `dob`, `aadhar_no`, `pan_no`, `security_rs_amount`, `security_transaction_id`, `date`, `processing_rs_amount`, `processing_rs_transaction`, `processing_rs_date`, `training_rs`, `training_transaction`, `training_date`, `total_deposit`, `bank_name`, `branch_name`, `ac_no`, `type_of_account`, `ifsc_code`, `confirm_1`, `confirm_2`, `confirm_3`, `confirm_4`, `image`, `signature`, `aadhar`, `pan`, `bank_account`, `security_e_receipt`, `processing_receipt`, `training_receipt`, `added_on`, `status`) VALUES
(11, '15', '4', '2', '3', '#546568', 'Ranchi', '#00C2', '9297827636', 'pmt.pankaj29@gmail.com', '100112345', 'Pankaj', 'Mani', 'Tiwari', 'raju', 'jjhhhh', 'yyhhhh', 'ranchi\r\nRancho\r\ndfgdfg', 'House Wife', '2000', 'Teahcrer', '7845125', 'Male', 'Indian', 'Single', '2022-07-07', '123456789458', 'PAN1234', '200', 'TRNS584858222', '2022-07-19', '200', '#452558858', '2022-07-14', '5000', 'TD584693322', '2022-07-19', 'Panjab National Bank', 'Panjab National Bank', 'Ranchi', '958487584586985', 'Saving', 'UP5584858585', '1', '1', '1', '1', '/assets/uploads/team/1658210838.png', '/assets/uploads/team/16582108381.png', '/assets/uploads/team/1658210838.jpg', '/assets/uploads/team/16582108382.png', '/assets/uploads/team/16582108383.png', '/assets/uploads/team/16582108381.jpg', '/assets/uploads/team/16582108384.png', '/assets/uploads/team/16582108382.jpg', '2022-07-19', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stk_transaction`
--

CREATE TABLE `stk_transaction` (
  `id` int(11) NOT NULL,
  `member_id` varchar(200) DEFAULT NULL,
  `trans_details_id` varchar(200) DEFAULT NULL,
  `account_no` varchar(200) DEFAULT NULL,
  `trans_type` varchar(200) DEFAULT NULL,
  `trans_amount` decimal(10,2) DEFAULT NULL,
  `trans_amount_in_word` varchar(200) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_transaction`
--

INSERT INTO `stk_transaction` (`id`, `member_id`, `trans_details_id`, `account_no`, `trans_type`, `trans_amount`, `trans_amount_in_word`, `added_on`, `status`) VALUES
(36, '1', '29', 'SATYA1000001', 'Credit', '2000.00', 'Two Thousand Only', '2022-08-05 13:55:52', 1),
(37, '1', '30', 'SATYA1000002', 'Credit', '2000.00', 'Two Thousand Only', '2022-08-05 14:38:47', 1),
(38, '1', '31', 'SATYA1000002', 'Credit', '2000.00', 'Two Thousand Only', '2022-08-05 14:41:53', 1),
(39, '1', '32', 'SATYA1000002', 'Credit', '2000.00', 'Two Thousand Only', '2022-08-05 00:00:00', 1),
(40, '1', '33', 'SATYA1000002', 'Credit', '2000.00', 'Two Thousand Only', '2022-07-05 00:00:00', 1),
(41, '1', '34', 'SATYA1000002', 'Credit', '2000.00', 'Two Thousand Only', '2022-07-14 00:00:00', 1),
(42, '1', '35', 'SATYA1000002', 'Credit', '2000.00', 'Two Thousand Only', '2022-04-05 00:00:00', 1),
(43, '3', '36', 'SATYA1000003', 'Credit', '2000.00', 'Two Thousand Only', '2022-02-17 00:00:00', 1),
(44, '3', '37', 'SATYA1000003', 'Credit', '100.00', 'One Hundred Only', '2022-08-06 00:00:00', 1),
(45, '1', '38', 'SATYA1000002', 'Credit', '500.00', 'Five Hundered Only', '2022-04-22 00:00:00', 1),
(46, '3', '39', 'SATYA1000003', 'Credit', '100.00', 'One Hundred Only', '2022-04-29 00:00:00', 1),
(47, '3', '40', 'SATYA1000003', 'Credit', '100.00', 'One Hundred Only', '2022-04-04 00:00:00', 1),
(48, '3', '41', 'SATYA1000003', 'Credit', '100.00', 'One Hundred Only', '2022-04-11 00:00:00', 1),
(49, '3', '42', 'SATYA1000003', 'Credit', '100.00', 'One Hundred Only', '2022-08-06 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stk_transaction_details`
--

CREATE TABLE `stk_transaction_details` (
  `id` int(11) NOT NULL,
  `deposit_date` date DEFAULT NULL,
  `deposit_session` varchar(200) DEFAULT NULL,
  `meeting_no` varchar(200) DEFAULT NULL,
  `recept_no` varchar(200) DEFAULT NULL,
  `account_no` varchar(200) DEFAULT NULL,
  `account_holder_name` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `user_id_no` varchar(100) DEFAULT NULL,
  `state_unit_code` varchar(200) DEFAULT NULL,
  `division_unit` varchar(200) DEFAULT NULL,
  `district_branch` varchar(200) DEFAULT NULL,
  `sponsor_id` varchar(200) DEFAULT NULL,
  `group_name` varchar(200) DEFAULT NULL,
  `collective_saving_form_no` varchar(200) DEFAULT NULL,
  `manual_receipt_no` int(11) NOT NULL,
  `banking_upi_no` varchar(200) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_transaction_details`
--

INSERT INTO `stk_transaction_details` (`id`, `deposit_date`, `deposit_session`, `meeting_no`, `recept_no`, `account_no`, `account_holder_name`, `mobile_no`, `email`, `username`, `user_id_no`, `state_unit_code`, `division_unit`, `district_branch`, `sponsor_id`, `group_name`, `collective_saving_form_no`, `manual_receipt_no`, `banking_upi_no`, `added_on`, `status`) VALUES
(29, '2022-08-05', '2022-2023', '45786958', 'REC-1', 'SATYA1000001', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'admin', '784525695848', '4', '11', 'Ranchi', '1', 'Mohan', '123455', 4578, '5565656566', '2022-08-05 13:55:52', '1'),
(30, '2022-08-05', '2022-2023', '45786958', 'REC-2', 'SATYA1000002', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'Mohan', 'MEMBER12345', '4', '12', 'Ranchi', '1', 'Mohan', '123455', 4578, '5565656566', '2022-08-05 14:38:47', '1'),
(31, '2022-07-05', '2022-2023', '1223', 'REC-3', 'SATYA1000002', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'Mohan', 'MEMBER12345', '4', '12', 'Ranchi', '1', 'Mohan', '12345512', 457811, '5565656566', '2022-08-05 14:41:53', '1'),
(32, '2022-08-05', '2022-2023', '45786958', 'REC-4', 'SATYA1000002', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'Mohan', 'MEMBER12345', '4', '12', 'Ranchi', '1', 'Mohan', '123455', 4578, '5565656566', '2022-08-05 14:47:14', '1'),
(33, '2022-07-05', '2022-2023', '325678', 'REC-5', 'SATYA1000002', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'Mohan', 'MEMBER12345', '4', '12', 'Ranchi', '1', 'Mohan', '12345523', 4578, '5565656566', '2022-08-05 14:49:16', '1'),
(34, '2022-07-14', '2022-2023', '456787', 'REC-6', 'SATYA1000002', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'Mohan', 'MEMBER12345', '4', '12', 'Ranchi', '1', 'Mohan', '3465', 4578, '5565656566', '2022-08-05 14:50:34', '1'),
(35, '2022-04-05', '2022-2023', '45786958', 'REC-7', 'SATYA1000002', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'Mohan', 'MEMBER12345', '4', '12', 'Ranchi', '1', 'Mohan', '12345522', 4578, '5565656566', '2022-08-05 14:55:52', '1'),
(36, '2022-02-17', '2022-2023', '45786958', 'REC-8', 'SATYA1000003', 'Madhuraya Singh', '9297827636', 'singh', 'singh', 'MEM-55245858', '4', '12', 'Ranchi', '3', 'Group 1', '123455', 4578, '5848695847', '2022-08-06 09:15:16', '1'),
(37, '2022-08-06', '2022-2023', '45786958', 'REC-9', 'SATYA1000003', 'Madhuraya Singh', '9297827636', 'singh', 'singh', 'MEM-55245858', '4', '12', 'Ranchi', '3', 'Group 1', '3465', 4578, '5848695847', '2022-08-06 09:16:51', '1'),
(38, '2022-04-22', '2022-2023', '12345', 'REC-10', 'SATYA1000002', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'Mohan', 'MEMBER12345', '4', '12', 'Ranchi', '1', 'Mohan', '346523', 457812, '5565656566', '2022-08-06 09:25:49', '1'),
(39, '2022-04-29', '2022-2023', '12345', 'REC-11', 'SATYA1000003', 'Madhuraya Singh', '9297827636', 'singh', 'singh', 'MEM-55245858', '4', '12', 'Ranchi', '3', 'Group 1', '3465', 4578, '5848695847', '2022-08-06 09:29:03', '1'),
(40, '2022-04-04', '2022-2023', '1234512', 'REC-12', 'SATYA1000003', 'Madhuraya Singh', '9297827636', 'singh', 'singh', 'MEM-55245858', '4', '12', 'Ranchi', '3', 'Group 1', '2323', 234323, '5848695847', '2022-08-06 09:30:32', '1'),
(41, '2022-04-11', '2022-2023', '45915', 'REC-13', 'SATYA1000003', 'Madhuraya Singh', '9297827636', 'singh', 'singh', 'MEM-55245858', '4', '12', 'Ranchi', '3', 'Group 1', '47582', 4526, '5848695847', '2022-08-06 09:31:34', '1'),
(42, '2022-08-06', '2022-2023', '23453', 'REC-14', 'SATYA1000003', 'Madhuraya Singh', '9297827636', 'singh', 'singh', 'MEM-55245858', '4', '12', 'Ranchi', '3', 'Group 1', '346532', 12343, '5848695847', '2022-08-06 09:32:06', '1');

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
(3, '', '', '', '', '---SELECT---', '', '', '', '2', '#546568', '2022-05-16', '1'),
(4, 'Ranchi', 'Check Value', '12:15', '120', 'Home', '120', '50', 'success', '15', '0001', '2022-07-01', '1'),
(5, 'Ramgarh', 'Jharkhand', '02:15', '50', 'Home', '120', '50', 'success', '15', '0001', '2022-07-01', '1');

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
(1, '', '', '', '', '---SELECT---', '', '', '', '15', '0001', '2022-07-01', '1');

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
(1, '1', '/assets/vacency/photo/1658834171.jpeg', '/assets/vacency/sign/1658834171.jpeg', '/assets/vacency/documents/1658834171.jpeg', '/assets/vacency/documents/16588341711.jpeg', '/assets/vacency/documents/16588341712.jpeg', '/assets/vacency/documents/16588341713.jpeg', '/assets/vacency/documents/16588341714.jpeg', '2022-07-26', '1'),
(2, '2', '/assets/vacency/photo/1659007798.jpeg', '/assets/vacency/sign/1659007798.jpeg', '/assets/vacency/documents/1659007798.jpeg', '/assets/vacency/documents/16590077981.jpeg', '/assets/vacency/documents/16590077982.jpeg', '/assets/vacency/documents/16590077983.jpeg', '/assets/vacency/documents/16590077984.jpeg', '2022-07-28', '1'),
(4, '4', '/assets/vacency/photo/1659185345.jpg', '/assets/vacency/sign/1659185345.jpg', '/assets/vacency/documents/1659185345.jpg', '/assets/vacency/documents/16591853451.jpg', '/assets/vacency/documents/16591853452.jpg', '/assets/vacency/documents/16591853453.jpg', '/assets/vacency/documents/16591853454.jpg', '2022-07-30', '1'),
(5, '5', '/assets/vacency/photo/1659521788.jpg', '/assets/vacency/sign/1659521788.jpg', '/assets/vacency/documents/1659521788.jpeg', '/assets/vacency/documents/16595217881.jpeg', '/assets/vacency/documents/1659521788.jpg', '/assets/vacency/documents/16595217881.jpg', '/assets/vacency/documents/16595217882.jpg', '2022-08-03', '1'),
(7, '7', '/assets/vacency/photo/1660375790.jpg', '/assets/vacency/sign/1660375790.jpg', '/assets/vacency/documents/1660375790.jpg', '/assets/vacency/documents/16603757901.jpg', NULL, '/assets/vacency/documents/16603757902.jpg', '/assets/vacency/documents/1660375790.jpeg', '2022-08-13', '1'),
(8, '8', '/assets/vacency/photo/1660375864.jpg', '/assets/vacency/sign/1660375864.jpg', '/assets/vacency/documents/1660375864.jpg', '/assets/vacency/documents/16603758641.jpg', '/assets/vacency/documents/16603758642.jpg', '/assets/vacency/documents/16603758643.jpg', '/assets/vacency/documents/16603758644.jpg', '2022-08-13', '1'),
(9, '9', '/assets/vacency/photo/1660635567.jpeg', '/assets/vacency/sign/1660635567.jpeg', '/assets/vacency/documents/1660635567.jpeg', '/assets/vacency/documents/16606355671.jpeg', NULL, '/assets/vacency/documents/16606355672.jpeg', '/assets/vacency/documents/16606355673.jpeg', '2022-08-16', '1'),
(10, '10', '/assets/vacency/photo/1660640642.jpeg', '/assets/vacency/sign/1660640642.jpeg', '/assets/vacency/documents/1660640642.jpeg', '/assets/vacency/documents/16606406421.jpeg', NULL, '/assets/vacency/documents/16606406422.jpeg', '/assets/vacency/documents/16606406423.jpeg', '2022-08-16', '1'),
(11, '11', '/assets/vacency/photo/1660641086.jpeg', '/assets/vacency/sign/1660641086.jpeg', '/assets/vacency/documents/1660641086.jpeg', '/assets/vacency/documents/16606410861.jpeg', NULL, '/assets/vacency/documents/16606410862.jpeg', '/assets/vacency/documents/16606410863.jpeg', '2022-08-16', '1'),
(12, '12', '/assets/vacency/photo/1660716459.jpeg', '/assets/vacency/sign/1660716459.jpeg', '/assets/vacency/documents/1660716459.jpeg', '/assets/vacency/documents/16607164591.jpeg', NULL, '/assets/vacency/documents/16607164592.jpeg', '/assets/vacency/documents/16607164593.jpeg', '2022-08-17', '1'),
(13, '13', '/assets/vacency/photo/1660728361.jpg', '/assets/vacency/sign/1660728361.jpg', '/assets/vacency/documents/1660728361.jpg', '/assets/vacency/documents/1660728361.jpeg', NULL, '/assets/vacency/documents/16607283611.jpg', '/assets/vacency/documents/16607283612.jpg', '2022-08-17', '1'),
(14, '14', '/assets/vacency/photo/1660731739.jpeg', '/assets/vacency/sign/1660731739.jpeg', '/assets/vacency/documents/1660731739.jpeg', '/assets/vacency/documents/16607317391.jpeg', NULL, '/assets/vacency/documents/16607317392.jpeg', '/assets/vacency/documents/16607317393.jpeg', '2022-08-17', '1'),
(15, '15', '/assets/vacency/photo/1660751072.jpeg', '/assets/vacency/sign/1660751072.jpeg', '/assets/vacency/documents/1660751072.jpeg', '/assets/vacency/documents/16607510721.jpeg', NULL, '/assets/vacency/documents/16607510722.jpeg', '/assets/vacency/documents/16607510723.jpeg', '2022-08-17', '1'),
(16, '16', '/assets/vacency/photo/1660751126.jpeg', '/assets/vacency/sign/1660751126.jpeg', '/assets/vacency/documents/1660751126.jpeg', '/assets/vacency/documents/16607511261.jpeg', NULL, '/assets/vacency/documents/16607511262.jpeg', '/assets/vacency/documents/16607511263.jpeg', '2022-08-17', '1'),
(17, '17', '/assets/vacency/photo/1660751188.jpeg', '/assets/vacency/sign/1660751188.jpeg', '/assets/vacency/documents/1660751188.jpeg', '/assets/vacency/documents/16607511881.jpeg', NULL, '/assets/vacency/documents/16607511882.jpeg', '/assets/vacency/documents/16607511883.jpeg', '2022-08-17', '1'),
(18, '18', '/assets/vacency/photo/1660796550.jpg', '/assets/vacency/sign/1660796550.jpg', '/assets/vacency/documents/1660796550.jpg', '/assets/vacency/documents/16607965501.jpg', NULL, '/assets/vacency/documents/16607965502.jpg', '/assets/vacency/documents/16607965503.jpg', '2022-08-18', '1'),
(19, '19', '/assets/vacency/photo/1660897597.jpg', '/assets/vacency/sign/1660897597.jpg', '/assets/vacency/documents/1660897597.jpg', '/assets/vacency/documents/16608975971.jpg', NULL, '/assets/vacency/documents/16608975972.jpg', '/assets/vacency/documents/16608975973.jpg', '2022-08-19', '1'),
(24, '24', '/assets/vacency/photo/1661410389.jpg', '/assets/vacency/sign/1661410390.jpg', '/assets/vacency/documents/1661410390.jpg', '/assets/vacency/documents/16614103901.jpg', '/assets/vacency/documents/16614103902.jpg', '/assets/vacency/documents/1661410391.jpg', '/assets/vacency/documents/16614103911.jpg', '2022-08-25', '1');

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
  `election_id_card_back` varchar(200) DEFAULT NULL,
  `pan_card` varchar(200) DEFAULT NULL,
  `passbook_bank` varchar(200) DEFAULT NULL,
  `qualification_certificate` varchar(200) DEFAULT NULL,
  `sponser_id` varchar(200) DEFAULT NULL,
  `member_details_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_upload_member_docs`
--

INSERT INTO `stk_upload_member_docs` (`id`, `image`, `member_sign`, `member_right_hand_thumb`, `aadhar_front`, `aadhar_back`, `election_id_card`, `election_id_card_back`, `pan_card`, `passbook_bank`, `qualification_certificate`, `sponser_id`, `member_details_id`) VALUES
(1, '/assets/uploads/member/1655549368.jpg', '/assets/uploads/member/16555493682.jpg', '/assets/uploads/member/16555493681.jpg', '/assets/uploads/member/16555493683.jpg', '/assets/uploads/member/16555493684.jpg', '/assets/uploads/member/16555493685.jpg', NULL, '/assets/uploads/member/16555493686.jpg', '/assets/uploads/member/16555493687.jpg', '/assets/uploads/member/16555493688.jpg', NULL, '1'),
(2, '/assets/uploads/member/1655552062.jpg', '/assets/uploads/member/16555520622.jpg', '/assets/uploads/member/16555520621.jpg', '/assets/uploads/member/16555520623.jpg', '/assets/uploads/member/16555520624.jpg', '/assets/uploads/member/16555520625.jpg', NULL, '/assets/uploads/member/16555520626.jpg', '/assets/uploads/member/16555520627.jpg', '/assets/uploads/member/1655552063.jpg', NULL, '2'),
(3, '/assets/uploads/member/1655552370.jpg', '/assets/uploads/member/16555523702.jpg', '/assets/uploads/member/16555523701.jpg', '/assets/uploads/member/16555523703.jpg', '/assets/uploads/member/16555523704.jpg', '/assets/uploads/member/1655552370.png', NULL, '/assets/uploads/member/16555523705.jpg', '/assets/uploads/member/16555523706.jpg', '/assets/uploads/member/16555523707.jpg', NULL, '3'),
(4, '/assets/uploads/member/1655554511.png', '/assets/uploads/member/16555545111.jpg', '/assets/uploads/member/1655554511.jpg', '/assets/uploads/member/16555545112.jpg', '/assets/uploads/member/16555545113.jpg', '/assets/uploads/member/16555545114.jpg', NULL, '/assets/uploads/member/16555545115.jpg', '/assets/uploads/member/16555545116.jpg', '/assets/uploads/member/16555545117.jpg', NULL, '5'),
(9, '/assets/uploads/member/1655698136.jpg', '/assets/uploads/member/16556981362.jpg', '/assets/uploads/member/16556981361.jpg', '/assets/uploads/member/16556981363.jpg', '/assets/uploads/member/1655698136.png', '/assets/uploads/member/16556981364.jpg', NULL, '/assets/uploads/member/16556981361.png', '/assets/uploads/member/16556981365.jpg', '/assets/uploads/member/16556981366.jpg', NULL, '4'),
(11, '/assets/uploads/member/1655700052.jpg', '/assets/uploads/member/16557000522.jpg', '/assets/uploads/member/16557000521.jpg', '/assets/uploads/member/16557000523.jpg', '/assets/uploads/member/1655700052.png', '/assets/uploads/member/16557000524.jpg', NULL, '/assets/uploads/member/16557000525.jpg', '/assets/uploads/member/16557000526.jpg', '/assets/uploads/member/16557000527.jpg', NULL, '7'),
(12, NULL, '/assets/uploads/member/16557006841.jpg', '/assets/uploads/member/1655700684.jpg', '/assets/uploads/member/16557006842.jpg', '/assets/uploads/member/16557006843.jpg', '/assets/uploads/member/16557006844.jpg', NULL, '/assets/uploads/member/16557006845.jpg', '/assets/uploads/member/16557006846.jpg', '/assets/uploads/member/16557006847.jpg', NULL, '8'),
(13, '/assets/uploads/member/1655715915.jpg', '/assets/uploads/member/1655715919.jpg', '/assets/uploads/member/1655715916.jpg', '/assets/uploads/member/16557159191.jpg', '/assets/uploads/member/1655715920.jpg', '/assets/uploads/member/1655715920.png', NULL, '/assets/uploads/member/16557159201.png', '/assets/uploads/member/16557159201.jpg', '/assets/uploads/member/16557159202.jpg', NULL, '10'),
(14, NULL, '/assets/uploads/member/16557197061.jpg', '/assets/uploads/member/1655719706.jpg', '/assets/uploads/member/16557197062.jpg', '/assets/uploads/member/16557197063.jpg', '/assets/uploads/member/16557197064.jpg', NULL, '/assets/uploads/member/16557197065.jpg', '/assets/uploads/member/16557197066.jpg', '/assets/uploads/member/1655719707.jpg', NULL, '12'),
(15, '/assets/uploads/member/1655720421.jpg', '/assets/uploads/member/16557204212.jpg', '/assets/uploads/member/16557204211.jpg', '/assets/uploads/member/16557204213.jpg', '/assets/uploads/member/16557204214.jpg', '/assets/uploads/member/16557204215.jpg', NULL, '/assets/uploads/member/16557204216.jpg', '/assets/uploads/member/1655720422.jpg', '/assets/uploads/member/16557204221.jpg', NULL, '13'),
(16, '/assets/uploads/member/1655796397.jpg', '/assets/uploads/member/16557963972.jpg', '/assets/uploads/member/16557963971.jpg', '/assets/uploads/member/16557963973.jpg', '/assets/uploads/member/16557963974.jpg', '/assets/uploads/member/16557963975.jpg', NULL, '/assets/uploads/member/16557963976.jpg', '/assets/uploads/member/16557963977.jpg', '/assets/uploads/member/16557963978.jpg', NULL, '14'),
(17, '/assets/uploads/member/1655796893.jpg', '/assets/uploads/member/16557968932.jpg', '/assets/uploads/member/16557968931.jpg', '/assets/uploads/member/16557968933.jpg', '/assets/uploads/member/16557968934.jpg', '/assets/uploads/member/16557968935.jpg', NULL, '/assets/uploads/member/16557968936.jpg', '/assets/uploads/member/16557968937.jpg', '/assets/uploads/member/16557968938.jpg', NULL, '15'),
(18, '/assets/uploads/member/1655797487.jpg', '/assets/uploads/member/16557974872.jpg', '/assets/uploads/member/16557974871.jpg', '/assets/uploads/member/16557974873.jpg', '/assets/uploads/member/16557974874.jpg', '/assets/uploads/member/16557974875.jpg', NULL, '/assets/uploads/member/16557974876.jpg', '/assets/uploads/member/16557974877.jpg', '/assets/uploads/member/16557974878.jpg', NULL, '18'),
(19, '/assets/uploads/member/1655802543.jpg', '/assets/uploads/member/16558025432.jpg', '/assets/uploads/member/16558025431.jpg', '/assets/uploads/member/16558025433.jpg', '/assets/uploads/member/16558025434.jpg', '/assets/uploads/member/16558025435.jpg', NULL, '/assets/uploads/member/16558025436.jpg', '/assets/uploads/member/16558025437.jpg', '/assets/uploads/member/16558025438.jpg', NULL, '22'),
(20, '/assets/uploads/member/1655802888.jpg', '/assets/uploads/member/16558028882.jpg', '/assets/uploads/member/16558028881.jpg', '/assets/uploads/member/16558028883.jpg', '/assets/uploads/member/16558028884.jpg', '/assets/uploads/member/16558028885.jpg', NULL, '/assets/uploads/member/16558028886.jpg', '/assets/uploads/member/16558028887.jpg', '/assets/uploads/member/16558028888.jpg', NULL, '23'),
(21, '/assets/uploads/member/1655803948.jpg', '/assets/uploads/member/16558039482.jpg', '/assets/uploads/member/16558039481.jpg', '/assets/uploads/member/16558039483.jpg', '/assets/uploads/member/16558039484.jpg', '/assets/uploads/member/16558039485.jpg', NULL, '/assets/uploads/member/16558039486.jpg', '/assets/uploads/member/16558039487.jpg', '/assets/uploads/member/16558039488.jpg', NULL, '36'),
(22, '/assets/uploads/member/1655808333.jpg', '/assets/uploads/member/16558083332.jpg', '/assets/uploads/member/16558083331.jpg', '/assets/uploads/member/16558083333.jpg', '/assets/uploads/member/16558083334.jpg', '/assets/uploads/member/1655808334.jpg', NULL, '/assets/uploads/member/16558083341.jpg', '/assets/uploads/member/16558083342.jpg', '/assets/uploads/member/16558083343.jpg', NULL, '44'),
(23, '/assets/uploads/member/1655809554.jpg', '/assets/uploads/member/1655809555.jpg', '/assets/uploads/member/16558095541.jpg', '/assets/uploads/member/16558095551.jpg', '/assets/uploads/member/16558095552.jpg', '/assets/uploads/member/16558095553.jpg', NULL, '/assets/uploads/member/16558095554.jpg', '/assets/uploads/member/16558095555.jpg', '/assets/uploads/member/16558095556.jpg', NULL, '47'),
(24, '/assets/uploads/member/1655810644.jpg', '/assets/uploads/member/16558106442.jpg', '/assets/uploads/member/16558106441.jpg', '/assets/uploads/member/16558106443.jpg', '/assets/uploads/member/16558106444.jpg', '/assets/uploads/member/16558106445.jpg', NULL, '/assets/uploads/member/16558106446.jpg', '/assets/uploads/member/16558106447.jpg', '/assets/uploads/member/16558106448.jpg', NULL, '51'),
(34, '/assets/uploads/member/1655878641.jpg', '/assets/uploads/member/16558786412.jpg', '/assets/uploads/member/16558786411.jpg', '/assets/uploads/member/16558786413.jpg', '/assets/uploads/member/16558786414.jpg', '/assets/uploads/member/16558786415.jpg', NULL, '/assets/uploads/member/16558786416.jpg', '/assets/uploads/member/16558786417.jpg', '/assets/uploads/member/16558786418.jpg', NULL, '6');

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
(1, '2', 'Danish Ahmad ', 'Jaynarayan Mishra', 'Farmer', 'Radha Devi', 'HouseWife', '100000', 'male', 'Tardiha,madhepur \r\nPin-847408 (Bihar)', 'Tardiha,madhepur \r\nPin-847408 (Bihar)', 'rural', 'Indian ', 'gen', 'Mole On Face', '417523225956', 'CMKPM3168D', 'Married', '1', '10TH', 'BSEB', '2010-05-22', '500', '347', 'Ist', '69.4', '1', '525', 'dyIeiEcXzu2q4k6', NULL, NULL, 0, '2022-07-26', '1'),
(2, '5', 'gita kumari', 'Ram kumar singh', 'Farmer', 'PUNITA DEVI', 'housewife', '00', 'male', 'GOHOPKI[PIOFHJ\'H', 'JKBMLMHIUC', 'rural', 'INDIAN', 'obc', 'Mole on face', '123546874112', 'pan12gd1', 'Married', '1', 'ISC', 'bseb', '2022-07-28', '500', '390', '1st', '89', '1', '325', '3RMhUq2kp0aFOAS', 'pay_JylrPevmSbA0MP', '{\"razorpay_payment_id\":\"pay_JylrPevmSbA0MP\",\"merchant_order_id\":\"LKOW2318\",\"merchant_trans_id\":\"1659007901\",\"merchant_product_info_id\":\"Order From Customer\",\"merchant_surl_id\":\"https:\\/\\/indiasatyakam.com\\/website\\/success\\/\",\"merchant_furl_id\":\"https:\\/\\/indiasatyakam.com\\/website\\/success\\/\",\"card_holder_name_id\":\"gita kumari\",\"merchant_total\":\"32500\",\"merchant_amount\":\"325\",\"order_id\":\"LKOW2318\",\"user_id\":\"\"}', 1, '2022-07-28', '1'),
(4, '11', 'TANUJA KUMARI', 'YOGENDRA PODDAR', 'FARMER', 'ANITA DEVI', 'HOME WIFE', '80000', 'female', 'SIMRAHA WARD NO 35 SAHARSA', 'SIMRAHA WARD NO 35 SAHARSA', 'rural', 'INDIAN', 'obc', 'A MOLE MARK ON FACE', '563711327093', 'LYOPK9058F', 'Married', '0', '10', 'BSEB PATNA', '2011-05-25', '500', '191', '3RD', '38.2', '1', '325', '9oN3sP0jEimqQZp', 'pay_JzaIjQEL8j8nRh', '{\"razorpay_payment_id\":\"pay_JzaIjQEL8j8nRh\",\"merchant_order_id\":\"GWHE8296\",\"merchant_trans_id\":\"1659185620\",\"merchant_product_info_id\":\"Order From Customer\",\"merchant_surl_id\":\"https:\\/\\/indiasatyakam.com\\/website\\/success\\/\",\"merchant_furl_id\":\"https:\\/\\/indiasatyakam.com\\/website\\/success\\/\",\"card_holder_name_id\":\"TANUJA KUMARI\",\"merchant_total\":\"32500\",\"merchant_amount\":\"325\",\"order_id\":\"GWHE8296\",\"user_id\":\"\"}', 1, '2022-07-30', '1'),
(5, '14', 'Md Shoaib hasan', 'Md hasan', 'Farmer', 'Jarina khatun', 'Housewife', '120000', 'male', 'Village- Narayanpur buzurag\r\nPost -Birna lakhan sen \r\nDist- Vaishali', 'Vill- Narayanpur buzurag \r\nPost -Birna lakhan sen\r\nDist -Vaishali', 'rural', 'Indain', 'gen', 'A mole of right hand', '626075568339', 'BFEPH7460B', 'Unmarried', '0', '10th', 'BSEB', '2017-06-22', '500', '308', '1st', '61.6', '1', '1025', 'FYzQL9JdaBWbUPx', NULL, NULL, 0, '2022-08-03', '1'),
(9, '27', 'Shahbaz Ahmad', 'Naushad Ahmad', 'Business', 'Raziyz bano', 'HouseWife', '100000', 'male', 'Dhobi tola Ward No-09 Surat ganj\r\nMadhubani(Bihar)', 'Dhobi tola Ward No-09 Surat ganj\r\nMadhubani(Bihar)', 'rural', 'Indian ', 'gen', 'Mole On nose ', '656286721889', 'EFCPA9464K', 'Unmarried', '1', '10TH', 'BSEB', '2010-05-21', '500', '347', 'Ist', '69.4', '1', '325', 'alhRrLpKm6eTj8k', NULL, NULL, 0, '2022-08-16', '1'),
(10, '28', 'Shahbaz Ahmad', 'Naushad Ahmad', 'Business', 'Raziyz bano', 'HouseWife', '100000', 'male', 'Dhobi tola Ward No-09 Surat ganj\r\nMadhubani(Bihar) 847211', 'Dhobi tola Ward No-09 Surat ganj\r\nMadhubani(Bihar) 847211', 'rural', 'Indian ', 'gen', 'Mole On nose ', '656286721889', 'EFCPA9464K', 'Unmarried', '1', '10TH', 'BSEB', '2010-05-21', '500', '347', 'Ist', '69.4', '1', '325', 'z6qvl2NfhuobORP', NULL, NULL, 0, '2022-08-16', '1'),
(11, '28', 'Shahbaz Ahmad', 'Naushad Ahmad', 'Business', 'Raziyz bano', 'HouseWife', '100000', 'male', 'Dhobi tola Ward No-09 Surat ganj\r\nMadhubani(Bihar) 847211', 'Dhobi tola Ward No-09 Surat ganj\r\nMadhubani(Bihar) 847211', 'rural', 'Indian ', 'gen', 'Mole On nose ', '656286721889', 'EFCPA9464K', 'Unmarried', '1', '', '', '0000-00-00', '', '', '', '', '1', '325', '1cqUlTH6ptWQGP4', NULL, NULL, 0, '2022-08-16', '1'),
(12, '30', 'prem kumar', 'Naushad Ahmad', 'Farmer', 'Radha Devi', 'HouseWife', '00', 'male', 'vill-godamtol ladania madhubani bihar', 'vill-godamtol ladania madhubani bihar', 'rural', 'Indian ', 'obc', 'Mole On Face', '656286721889', 'CMKPM3168D', 'Married', '1', '10TH', 'BSEB', '2010-05-21', '500', '347', 'Ist', '69.4', '1', '325', '157W4Pk6nASgCJw', NULL, NULL, 0, '2022-08-17', '1'),
(13, '32', 'Manohar Mahto', 'Rishav Singh', 'Teacher', 'Rumma Sharma', 'House Wife', '2000', 'other', 'ranchi', 'Rancho', 'rural', 'Indian', 'obc', 'Black Mole On Right Hend', '7854613254', 'PAN547812', 'Unmarried', '0', '', '', '0000-00-00', '', '', '', '', '1', '1025', 'qxdsKuUkaiFeNO6', NULL, NULL, 0, '2022-08-17', '1'),
(14, '33', 'Salman ali', 'Jaynarayan Mishra', 'Farmer', 'Radha Devi', 'HouseWife', '100000', 'male', 'sriram pathak gali dubbay coloni katni (MP)', 'sriram pathak gali dubbay coloni katni (MP)', 'rural', 'Indian ', 'gen', 'Mole On Face', '417523225956', 'CMKPM2168D', 'Married', '1', '10TH', 'BSEB', '2010-05-21', '500', '347', 'Ist', '69.4', '1', '325', 'LDkuI2aFKJxqpCV', 'pay_K6fMzyn3Rx4BPf', '{\"razorpay_payment_id\":\"pay_K6fMzyn3Rx4BPf\",\"merchant_order_id\":\"YBVF5471\",\"merchant_trans_id\":\"1660731846\",\"merchant_product_info_id\":\"Order From Customer\",\"merchant_surl_id\":\"https:\\/\\/indiasatyakam.com\\/website\\/success\\/\",\"merchant_furl_id\":\"https:\\/\\/indiasatyakam.com\\/website\\/success\\/\",\"card_holder_name_id\":\"Salman ali\",\"merchant_total\":\"32500\",\"merchant_amount\":\"325\",\"order_id\":\"YBVF5471\",\"user_id\":\"\"}', 1, '2022-08-17', '1'),
(15, '35', 'Santosh Kumar Singh', 'Ramchandra Singh', 'B.A', 'Sakuntala Devi', 'Tenth', '110000', 'male', 'Malhanma Bhatsimar Rajnagar Madhubani Bihar,847235', 'Malhanma Bhatsimar Rajnagar Madhubani Bihar,847235', 'rural', 'Indian', 'obc', 'Left Hand Finger Cut Mark', '928848721625', 'CBBPS2101N', 'Married', '1', 'B.C.A', 'Y.C.M.O.U.NASHIK', '2018-03-09', '1849', '2900', '1st', '63.76%', NULL, '525', '8pDgoUQXmM5Ow3r', NULL, NULL, 0, '2022-08-17', '1'),
(16, '35', 'Santosh Kumar Singh', 'Ramchandra Singh', 'B.A', 'Sakuntala Devi', 'Tenth', '110000', 'male', 'Malhanma Bhatsimar Rajnagar Madhubani Bihar,847235', 'Malhanma Bhatsimar Rajnagar Madhubani Bihar,847235', 'rural', 'Indian', 'obc', 'Left Hand Finger Cut Mark', '928848721625', 'CBBPS2101N', 'Married', '1', 'B.C.A', 'Y.C.M.O.U.NASHIK', '2018-03-09', '1849', '2900', '1st', '63.76%', NULL, '525', 'pW3aqLgHEhTw1zn', NULL, NULL, 0, '2022-08-17', '1'),
(17, '35', 'Santosh Kumar Singh', 'Ramchandra Singh', 'B.A', 'Sakuntala Devi', 'Tenth', '110000', 'male', 'Malhanma Bhatsimar Rajnagar Madhubani Bihar,847235', 'Malhanma Bhatsimar Rajnagar Madhubani Bihar,847235', 'rural', 'Indian', 'obc', 'Left Hand Finger Cut Mark', '928848721625', 'CBBPS2101N', 'Married', '1', '', '', '0000-00-00', '', '', '', '', '1', '525', 'uDhm3eRsBvy1L8z', NULL, NULL, 0, '2022-08-17', '1'),
(18, '36', 'KUNDAN KUMAR THAKUR', 'BHUVNESHWAR THAKUR', 'FARMER', 'PUNAM DEVI ', 'HOUSEWIFE', '100000', 'male', 'AT PATORI WARD NO 08   POST PANCHGACHIYA PS BIHRA DIST SAHARSA  ', 'AT PATORI WARD NO 08   POST PANCHGACHIYA PS BIHRA DIST SAHARSA  ', 'rural', 'INDIAN ', 'obc', 'A MOLE MARK ON UPER LIPS ', '709233574137', 'ASCPT5037G', 'Married', '1', 'BA', 'BNMU MADHEPURA', '2015-04-27', '1500', '850', '1ST ', '56.6%', '1', '525', '1N4cat9WiMXsKzf', 'pay_K6xkyv8LFGsQQo', '{\"razorpay_payment_id\":\"pay_K6xkyv8LFGsQQo\",\"merchant_order_id\":\"DEHA6140\",\"merchant_trans_id\":\"1660796550\",\"merchant_product_info_id\":\"Order From Customer\",\"merchant_surl_id\":\"https:\\/\\/indiasatyakam.com\\/website\\/success\\/\",\"merchant_furl_id\":\"https:\\/\\/indiasatyakam.com\\/website\\/success\\/\",\"card_holder_name_id\":\"KUNDAN KUMAR THAKUR\",\"merchant_total\":\"52500\",\"merchant_amount\":\"525\",\"order_id\":\"DEHA6140\",\"user_id\":\"\"}', 1, '2022-08-18', '1'),
(19, '38', 'SANTOSH KUMAR', 'JAYKANT MAHTO', 'FARMER', 'GITA DEVI ', 'HOUSE WIFE ', '125000', 'male', 'At-Vijay Nagar, Po-Chanka, Ps-K.Nagar, Pin No- 854304, District - Purnea (Bihar)', 'At-Vijay Nagar, Po-Chanka, Ps-K.Nagar, Pin No- 854304, District - Purnea (Bihar)', 'rural', 'INDIAN ', 'obc', 'A CUT MARKS ON FEFT HAND FINGER ', '511922230053', 'HBJPK1951H', 'Unmarried', '0', 'HONORS ', 'BNMU MADHEPURA ', '2018-07-05', '1500', '857', '2nd', '57.13', '1', '525', 'Zq49oBNLbUY1MTX', NULL, NULL, 0, '2022-08-19', '1');

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
(1, '2022-07-26', '5', '24', 'MOHD ALAMGEER', '2001-07-16', '7052385212', 'alamgeerkhan061@gmail.com', NULL, '2', '3', '1025', 'CANDSF-261', '0722126', '2022-07-26', '1'),
(2, '2022-07-26', '3', '5', 'Danish Ahmad ', '2002-01-10', '9472624681', 'shabazahmad17299@gmail.com', NULL, '9', '20', '525', 'CANDSF-262', '072226226', '2022-07-26', '1'),
(3, '2022-07-28', '3', '5', 'Sonu jha', '1996-12-18', '9702526840', 'sonujha440@gmail.com', NULL, '2', '3', '1025', 'CANDSF-283', '072228328', '2022-07-28', '1'),
(4, '2022-07-28', '3', '8', 'Md', '2022-07-28', '7000450267', 'masudalam79031@gmail.com', NULL, '9', '20', '525', 'CANDSF-284', '072228428', '2022-07-28', '1'),
(5, '2022-07-28', '3', '8', 'gita kumari', '1989-02-28', '9123134362', 'hira1985@gamil.com', NULL, '9', '23', '325', 'CANDSF-285', '072228528', '2022-07-28', '1'),
(6, '2022-07-30', '3', '6', 'Sanjeev kumar', '1997-06-08', '7546064421', 'sanjeevkumar08868@gmail.com', NULL, '9', '19', '1025', 'CANDSF-306', '072230630', '2022-07-30', '1'),
(7, '2022-07-30', '3', '7', 'Jivan Kumar Ray', '2001-04-24', '8969809653', 'jivanoo2970@gmail.com', NULL, '2', '3', '1025', 'CANDSF-307', '072230730', '2022-07-30', '1'),
(8, '2022-07-30', '3', '8', 'Manoj Kumar', '1996-06-01', '7082780696', 'manojz987dft@gmail.com', NULL, '8', '16', '1025', 'CANDSF-308', '072230830', '2022-07-30', '1'),
(9, '2022-07-30', '3', '1', 'Sujeet kumar', '1993-12-02', '8102128749', 'sujeetsoni212@gmail.com', NULL, '7', '12', '1025', 'CANDSF-309', '072230930', '2022-07-30', '1'),
(11, '2022-07-30', '3', '6', 'TANUJA KUMARI', '1996-04-21', '6200739346', 'tanuja6200739346@gmail.com', NULL, '9', '23', '325', 'CANDSF-3011', '0722301130', '2022-07-30', '1'),
(12, '2022-07-30', '3', '7', 'Prakash roy', '2001-06-04', '9682554759', 'Prakashkumarroy4444@gmail.com', NULL, '1', '2', '1025', 'CANDSF-3012', '0722301230', '2022-07-30', '1'),
(13, '2022-08-03', '3', '5', 'Rajesh Kumar yadav ', '1998-02-09', '8969063334', 'raj852411@gmail.com', NULL, '9', '19', '1025', 'CANDSF-313', '082231303', '2022-08-03', '1'),
(14, '2022-08-03', '3', '3', 'Md Shoaib hasan', '2002-01-20', '7050451470', 'mdshoaib2012002@gmail.com', NULL, '4', '6', '1025', 'CANDSF-314', '082231403', '2022-08-03', '1'),
(15, '2022-08-03', '3', '3', 'Guddu kumar', '1994-07-07', '8709305459', 'gudduguru369@gmail.com', NULL, '9', '19', '1025', 'CANDSF-315', '082231503', '2022-08-03', '1'),
(16, '2022-08-03', '3', '5', 'Ashwany Kumar Jha', '1998-05-12', '6202675187', 'jhaashwany4@gmail.com', NULL, '8', '16', '1025', 'CANDSF-316', '082231603', '2022-08-03', '1'),
(17, '2022-08-03', '4', 'Division :', 'MD SADDAM HUSSAIN', '1996-02-03', '8340333989', 'hsaddammd@gmail.com', NULL, '8', '15', '1025', 'CANDSF-317', '082231703', '2022-08-03', '1'),
(18, '2022-08-03', '3', '8', 'Santosh kumar ', '1995-07-06', '9709799285', 'santoshraj99285@gmail.com', NULL, '9', '19', '1025', 'CANDSF-318', '082231803', '2022-08-03', '1'),
(19, '2022-08-04', '3', '10', 'Niranjan kumar', '1992-01-01', '9503392988', 'niranjankr9503392@gmail.com', NULL, '2', '3', '1025', 'CANDSF-419', '082241904', '2022-08-04', '1'),
(20, '2022-08-04', '5', '24', 'Govind dhuriya', '1996-10-10', '7701850294', 'govind906000@gmail.com', NULL, '2', '4', '1025', 'CANDSF-420', '082242004', '2022-08-04', '1'),
(21, '2022-08-04', '5', '19', 'Rahul Bhardwaj ', '1993-07-15', '7275995098', 'rahulbhardwajup50@gmail.com', NULL, '7', '12', '1025', 'CANDSF-421', '082242104', '2022-08-04', '1'),
(22, '2022-08-07', '3', '1', 'Tapu paswan', '1997-12-25', '7050922869', 'tapu251297@gmail.com', NULL, '9', '22', '525', 'CANDSF-722', '082272207', '2022-08-07', '1'),
(25, '2022-08-14', '3', '5', 'Ravi Shankar ', '1987-07-14', '7004194490', 'ravishankarsinghydv@gmail.com', NULL, '8', '15', '1025', 'CANDSF-1425', '0822142514', '2022-08-14', '1'),
(26, '2022-08-15', '3', '5', 'BABLOO KUMAR RAM', '1990-09-07', '8757001245', 'arjunkr.6624@gmail.com', NULL, '8', '17', '325', 'CANDSF-1526', '0822152615', '2022-08-15', '1'),
(27, '2022-08-16', '3', '5', 'Shahbaz Ahmad', '2001-01-02', '9939858340', 'shabazahmad17299@gmail.com', NULL, '9', '23', '325', 'CANDSF-1627', '0822162716', '2022-08-16', '1'),
(28, '2022-08-16', '3', '5', 'Shahbaz Ahmad', '2001-03-01', '9031023060', 'shabazahmad17299@gmail.com', NULL, '9', '23', '325', 'CANDSF-1628', '0822162816', '2022-08-16', '1'),
(29, '2022-08-16', '3', '5', 'Mukesh kumar yadav', '1991-09-17', '8178092073', 'mkyadav1709@gmail.com', NULL, '9', '23', '325', 'CANDSF-1629', '0822162916', '2022-08-16', '1'),
(30, '2022-08-17', '3', '5', 'prem kumar', '1995-02-04', '7004411514', 'sfdgsgxjhckc@gmail.com', NULL, '4', '7', '325', 'CANDSF-1730', '0822173017', '2022-08-17', '1'),
(31, '2022-08-17', '3', '5', 'Jitendra Kumar Sahani ', '1993-08-05', '6299277630', 'jitendrakr51293@gmail.com', NULL, '1', '1', '1025', 'CANDSF-1731', '0822173117', '2022-08-17', '1'),
(32, '2022-08-04', '4', '15', 'Manohar Mahto', '1998-07-24', '6204133279', 'manohar@gmail.com', NULL, '1', '2', '1025', 'CANDSF-1732', '0822173217', '2022-08-17', '1'),
(33, '2022-08-17', '3', '5', 'Salman ali', '2001-12-01', '9507041886', 'shabazahmad17299@gmail.com', NULL, '9', '23', '325', 'CANDSF-1733', '0822173317', '2022-08-17', '1'),
(34, '2022-08-17', '3', '6', 'SWEETY KUMARI', '1995-06-11', '6202224399', 'sweetykumari1161995@gmail.com', NULL, '9', '23', '325', 'CANDSF-1734', '0822173417', '2022-08-17', '1'),
(35, '2022-08-17', '3', '5', 'Santosh Kumar Singh', '1987-06-15', '7250314797', 'singhsk469@gmail.com', NULL, '9', '22', '525', 'CANDSF-1735', '0822173517', '2022-08-17', '1'),
(36, '2022-08-18', '3', '6', 'KUNDAN KUMAR THAKUR', '1991-05-04', '9341176840', 'kundankumar.patory@gmail.com', NULL, '9', '20', '525', 'CANDSF-1836', '0822183618', '2022-08-18', '1'),
(37, '2022-08-18', '3', '7', 'Bimlendu Kumar Jha', '1990-08-25', '9835844350', 'bimlendukrjha@gmail.com', NULL, '9', '19', '1025', 'CANDSF-1837', '0822183718', '2022-08-18', '1'),
(38, '2022-08-19', '3', '7', 'SANTOSH KUMAR', '1995-02-05', '7549870907', 'sugf1396@gmail.com', NULL, '9', '20', '525', 'CANDSF-1938', '0822193819', '2022-08-19', '1'),
(46, '2022-08-12', '4', '12', 'Mohan Rajbhar', '2022-09-01', '9297827636', 'testing@gmail.com', NULL, '5', '30', '375', 'CANDSF-2939', '0822293929', '2022-08-29', '1');

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

-- --------------------------------------------------------

--
-- Table structure for table `stk_withdraw_details`
--

CREATE TABLE `stk_withdraw_details` (
  `id` int(11) NOT NULL,
  `recept_no` varchar(200) DEFAULT NULL,
  `withdraw_form_no` varchar(200) DEFAULT NULL,
  `withdraw_date` date DEFAULT NULL,
  `account_no` varchar(200) DEFAULT NULL,
  `account_holder_name` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `user_id_no` varchar(200) DEFAULT NULL,
  `state_unit_code` varchar(200) DEFAULT NULL,
  `division_unit` varchar(200) DEFAULT NULL,
  `district_branch` varchar(200) DEFAULT NULL,
  `sponsor_id` varchar(200) DEFAULT NULL,
  `group_name` varchar(200) DEFAULT NULL,
  `banking_upi_no` varchar(200) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stk_withdraw_details`
--

INSERT INTO `stk_withdraw_details` (`id`, `recept_no`, `withdraw_form_no`, `withdraw_date`, `account_no`, `account_holder_name`, `mobile_no`, `email`, `username`, `user_id_no`, `state_unit_code`, `division_unit`, `district_branch`, `sponsor_id`, `group_name`, `banking_upi_no`, `added_on`, `status`) VALUES
(1, NULL, 'rdgfre', '2022-07-22', 'SATYA1000001', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'admin', '784525695848', '4', '11', 'Ranchi', '3', 'Mohan', '5565656566', NULL, '1'),
(2, NULL, 'rdgfre', '2022-07-22', 'SATYA1000001', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'admin', '784525695848', '4', '11', 'Ranchi', '3', 'Mohan', '5565656566', NULL, '1'),
(3, NULL, 'rdgfre', '2022-07-22', 'SATYA1000001', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'admin', '784525695848', '4', '11', 'Ranchi', '3', 'Mohan', '5565656566', NULL, '1'),
(4, NULL, 'rdgfre', '2022-07-22', 'SATYA1000001', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'admin', '784525695848', '4', '11', 'Ranchi', '3', 'Mohan', '5565656566', NULL, '1'),
(5, NULL, 'rdgfre', '2022-07-22', 'SATYA1000001', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'admin', '784525695848', '4', '11', 'Ranchi', '3', 'Mohan', '5565656566', NULL, '1'),
(6, NULL, 'rdgfre', '2022-07-22', 'SATYA1000001', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'admin', '784525695848', '4', '11', 'Ranchi', '3', 'Mohan', '5565656566', NULL, '1'),
(7, NULL, '4585858', '2022-07-25', 'SATYA1000001', 'Pankaj Mani Tiwari', '9297827636', 'pmt.pankaj29@gmail.com', 'admin', '784525695848', '4', '11', 'Ranchi', '1', 'Mohan', '5565656566', NULL, '1');

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
-- Indexes for table `stk_club_details`
--
ALTER TABLE `stk_club_details`
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
-- Indexes for table `stk_loan_group`
--
ALTER TABLE `stk_loan_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_loan_member`
--
ALTER TABLE `stk_loan_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_member_certificate`
--
ALTER TABLE `stk_member_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_member_club_report`
--
ALTER TABLE `stk_member_club_report`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `check_no` (`check_no`);

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
-- Indexes for table `stk_transaction`
--
ALTER TABLE `stk_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_transaction_details`
--
ALTER TABLE `stk_transaction_details`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_details_id` (`member_details_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `stk_vecency`
--
ALTER TABLE `stk_vecency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stk_withdraw_details`
--
ALTER TABLE `stk_withdraw_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stk_account_details`
--
ALTER TABLE `stk_account_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `stk_admitcard`
--
ALTER TABLE `stk_admitcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `stk_club_details`
--
ALTER TABLE `stk_club_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stk_club_report`
--
ALTER TABLE `stk_club_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `stk_club_report_team`
--
ALTER TABLE `stk_club_report_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `stk_generalgroup`
--
ALTER TABLE `stk_generalgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stk_group_details`
--
ALTER TABLE `stk_group_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stk_group_report`
--
ALTER TABLE `stk_group_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `stk_group_report_team`
--
ALTER TABLE `stk_group_report_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stk_group_resource`
--
ALTER TABLE `stk_group_resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stk_group_signup`
--
ALTER TABLE `stk_group_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `stk_loan_group`
--
ALTER TABLE `stk_loan_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stk_loan_member`
--
ALTER TABLE `stk_loan_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stk_member_certificate`
--
ALTER TABLE `stk_member_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_member_club_report`
--
ALTER TABLE `stk_member_club_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stk_member_details`
--
ALTER TABLE `stk_member_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stk_myreport`
--
ALTER TABLE `stk_myreport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stk_officer_details`
--
ALTER TABLE `stk_officer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stk_result`
--
ALTER TABLE `stk_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stk_revenue_report`
--
ALTER TABLE `stk_revenue_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stk_revenue_report_team`
--
ALTER TABLE `stk_revenue_report_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_security_report`
--
ALTER TABLE `stk_security_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stk_security_report_team`
--
ALTER TABLE `stk_security_report_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_sidebar`
--
ALTER TABLE `stk_sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `stk_signup`
--
ALTER TABLE `stk_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stk_transaction`
--
ALTER TABLE `stk_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `stk_transaction_details`
--
ALTER TABLE `stk_transaction_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `stk_travelling_report`
--
ALTER TABLE `stk_travelling_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stk_travelling_report_team`
--
ALTER TABLE `stk_travelling_report_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_upload_candidate_vacency`
--
ALTER TABLE `stk_upload_candidate_vacency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `stk_upload_member_docs`
--
ALTER TABLE `stk_upload_member_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `stk_users`
--
ALTER TABLE `stk_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stk_vacency_candidate_details`
--
ALTER TABLE `stk_vacency_candidate_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `stk_vacency_signup`
--
ALTER TABLE `stk_vacency_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `stk_vecency`
--
ALTER TABLE `stk_vecency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `stk_withdraw_details`
--
ALTER TABLE `stk_withdraw_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
