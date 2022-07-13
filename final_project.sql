-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 11:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `assessment_id` int(11) NOT NULL,
  `assessment_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`assessment_id`, `assessment_name`) VALUES
(1, 'Physics Test I'),
(2, 'Chemistry Test'),
(3, 'Maths Test');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `userid`, `name`, `email`, `mobile`, `message`) VALUES
(1, 2, 'Manshu Kerniya', 'manshu@gmail.com', '9876543210', 'Project khatm ho jaye bas!!!!!!!'),
(2, 0, 'Manshu Kerniya', 'm@gmail.com', '7889506341', 'Teacher'),
(3, 1, 'Manshu Kerniya', 'm@gmail.com', '9876543210', 'Heloooo!!!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `medium` varchar(20) NOT NULL,
  `class` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `hour` varchar(20) NOT NULL,
  `mode` varchar(15) NOT NULL,
  `salary` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `t_id`, `medium`, `class`, `subject`, `hour`, `mode`, `salary`, `location`) VALUES
(1, 1, 'ENGLISH', 'TENTH - TWELFTH', 'MATHEMATICS', '0 - 2 HOURS', 'ONLINE', '10000 - 12000', 'UDAIPUR'),
(2, 4, 'ENGLISH', 'TENTH - TWELFTH', 'MATHEMATICS', '0 - 2 HOURS', 'ONLINE', '10000 - 12000', 'UDAIPUR'),
(3, 5, 'ENGLISH', 'FIFTH - EIGHTH', 'MATHEMATICS', '0 - 2 HOURS', 'ONLINE', '10000 - 12000', 'UDAIPUR'),
(4, 12, 'HINDI', 'FIRST - FIFTH', 'HINDI', '0 - 1 HOURS', 'ONLINE', '10000 - 12000', 'UDAIPUR'),
(5, 5, 'ENGLISH', 'TENTH - TWELFTH', 'SCIENCE', '0 - 1 HOURS', 'ONLINE', '10000 - 12000', 'UDAIPUR'),
(6, 8, 'ENGLISH', 'EIGHTH - TENTH', 'SOCIAL STUDIES', '2 - 4 HOURS', 'OFFLINE', '5000 - 10000', 'JAIPUR'),
(8, 1, 'ENGLISH', 'TENTH - TWELFTH', 'PHYSICS', '0 - 1 HOURS', 'ONLINE', '5000 - 10000', 'UDAIPUR'),
(9, 4, 'ENGLISH', 'TENTH - TWELFTH', 'CHEMISTRY', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'UDAIPUR'),
(10, 1, 'ENGLISH', 'TENTH - TWELFTH', 'BIOLOGY', '0 - 2 HOURS', 'ONLINE', '10000 - 12000', 'UDAIPUR'),
(11, 9, 'ENGLISH', 'EIGHTH - TENTH', 'SCIENCE', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'UDAIPUR'),
(12, 1, 'ENGLISH', 'TENTH - TWELFTH', 'SOCIAL STUDIES', '0 - 2 HOURS', 'ONLINE', '10000 - 12000', 'UDAIPUR'),
(13, 9, 'ENGLISH', 'FIFTH - EIGHTH', 'SOCIAL STUDIES', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'JAIPUR'),
(14, 1, 'ENGLISH', 'FIFTH - EIGHTH', 'SCIENCE', '0 - 2 HOURS', 'OFFLINE', '10000 - 12000', 'UDAIPUR'),
(15, 1, 'HINDI', 'FIFTH - EIGHTH', 'HINDI', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'DELHI'),
(16, 4, 'ENGLISH', 'EIGHTH - TENTH', 'PHYSICS', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'MUMBAI'),
(17, 9, 'ENGLISH', 'EIGHTH - TENTH', 'CHEMISTRY', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'DELHI'),
(18, 1, 'ENGLISH', 'EIGHTH - TENTH', 'CHEMISTRY', '0 - 2 HOURS', 'OFFLINE', '5000 - 10000', 'UDAIPUR'),
(19, 4, 'ENGLISH', 'EIGHTH - TENTH', 'BIOLOGY', '0 - 2 HOURS', 'OFFLINE', '10000 - 12000', 'UDAIPUR'),
(20, 1, 'ENGLISH', 'TENTH - TWELFTH', 'SOCIAL STUDIES', '2 - 4 HOURS', 'ONLINE', '5000 - 10000', 'DELHI'),
(21, 1, 'ENGLISH', 'FIFTH - EIGHTH', 'SCIENCE', '2 - 4 HOURS', 'OFFLINE', '10000 - 12000', 'MUMBAI'),
(22, 4, 'ENGLISH', 'EIGHTH - TENTH', 'CHEMISTRY', '0 - 2 HOURS', 'OFFLINE', '5000 - 10000', 'MUMBAI'),
(23, 1, 'ENGLISH', 'EIGHTH - TENTH', 'BIOLOGY', '0 - 2 HOURS', 'ONLINE', '0 - 5000', 'DELHI'),
(24, 4, 'ENGLISH', 'FIFTH - EIGHTH', 'PHYSICS', '0 - 1 HOURS', 'ONLINE', '5000 - 10000', 'JAIPUR'),
(25, 1, 'HINDI', 'FIFTH - EIGHTH', 'PHYSICS', '2 - 4 HOURS', 'ONLINE', '5000 - 10000', 'DELHI'),
(26, 9, 'ENGLISH', 'FIRST - FIFTH', 'PHYSICS', '4 - 6 HOURS', 'ONLINE', '0 - 5000', 'DELHI'),
(27, 1, 'ENGLISH', 'FIRST - FIFTH', 'SCIENCE', '0 - 2 HOURS', 'ONLINE', '10000 - 12000', 'DELHI'),
(28, 1, 'HINDI', 'FIFTH - EIGHTH', 'PHYSICS', '4 - 6 HOURS', 'ONLINE', '0 - 5000', 'JAIPUR'),
(29, 1, 'ENGLISH', 'FIFTH - EIGHTH', 'ENGLISH', '4 - 6 HOURS', 'ONLINE', '0 - 5000', 'JAIPUR'),
(30, 1, 'ENGLISH', 'EIGHTH - TENTH', 'PHYSICS', '2 - 4 HOURS', 'OFFLINE', '5000 - 10000', 'UDAIPUR'),
(31, 1, 'ENGLISH', 'FIFTH - EIGHTH', 'CHEMISTRY', '2 - 4 HOURS', 'ONLINE', '10000 - 12000', 'DELHI'),
(32, 1, 'HINDI', 'TENTH - TWELFTH', 'CHEMISTRY', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'JAIPUR'),
(33, 1, 'HINDI', 'FIFTH - EIGHTH', 'SOCIAL STUDIES', '0 - 1 HOURS', 'ONLINE', '10000 - 12000', 'JAIPUR'),
(34, 1, 'HINDI', 'EIGHTH - TENTH', 'BIOLOGY', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'JAIPUR'),
(35, 1, 'ENGLISH', 'FIFTH - EIGHTH', 'BIOLOGY', '0 - 1 HOURS', 'ONLINE', '5000 - 10000', 'UDAIPUR'),
(36, 1, 'ENGLISH', 'FIRST - FIFTH', 'PHYSICS', '0 - 2 HOURS', 'ONLINE', '0 - 5000', 'DELHI'),
(37, 1, 'HINDI', 'FIFTH - EIGHTH', 'HINDI', '0 - 2 HOURS', 'ONLINE', '0 - 5000', 'MUMBAI'),
(38, 1, 'ENGLISH', 'EIGHTH - TENTH', 'CHEMISTRY', '0 - 1 HOURS', 'ONLINE', '10000 - 12000', 'JAIPUR'),
(39, 1, 'ENGLISH', 'FIRST - FIFTH', 'BIOLOGY', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'JAIPUR'),
(40, 1, 'ENGLISH', 'FIFTH - EIGHTH', 'SCIENCE', '2 - 4 HOURS', 'ONLINE', '10000 - 12000', 'JAIPUR'),
(41, 1, 'ENGLISH', 'EIGHTH - TENTH', 'ENGLISH', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'JAIPUR'),
(42, 1, 'HINDI', 'FIRST - FIFTH', 'MATHEMATICS', '4 - 6 HOURS', 'ONLINE', '10000 - 12000', 'UDAIPUR'),
(43, 1, 'ENGLISH', 'FIFTH - EIGHTH', 'MATHEMATICS', '0 - 2 HOURS', 'OFFLINE', '5000 - 10000', 'MUMBAI'),
(44, 1, 'ENGLISH', 'FIFTH - EIGHTH', 'ENGLISH', '2 - 4 HOURS', 'OFFLINE', '0 - 5000', 'MUMBAI'),
(45, 1, 'ENGLISH', 'FIFTH - EIGHTH', 'MATHEMATICS', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'JAIPUR'),
(46, 1, 'ENGLISH', 'FIRST - FIFTH', 'HINDI', '2 - 4 HOURS', 'OFFLINE', '5000 - 10000', 'DELHI'),
(47, 1, 'HINDI', 'FIFTH - EIGHTH', 'CHEMISTRY', '2 - 4 HOURS', 'ONLINE', '5000 - 10000', 'UDAIPUR'),
(48, 1, 'ENGLISH', 'EIGHTH - TENTH', 'BIOLOGY', '4 - 6 HOURS', 'ONLINE', '0 - 5000', 'DELHI'),
(49, 1, 'ENGLISH', 'EIGHTH - TENTH', 'BIOLOGY', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'JAIPUR'),
(50, 1, 'ENGLISH', 'FIRST - FIFTH', 'MATHEMATICS', '0 - 1 HOURS', 'OFFLINE', '0 - 5000', 'DELHI'),
(51, 1, 'HINDI', 'FIRST - FIFTH', 'BIOLOGY', '2 - 4 HOURS', 'OFFLINE', '10000 - 12000', 'UDAIPUR'),
(52, 1, 'ENGLISH', 'EIGHTH - TENTH', 'MATHEMATICS', '0 - 2 HOURS', 'ONLINE', '5000 - 10000', 'MUMBAI');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sno` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sno`, `username`, `email`, `mobile`, `userType`, `gender`, `password`, `address`) VALUES
(1, 'Manshu Kerniya', 'm@gmail.com', '9876543210', 'Teacher', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Udaipur'),
(3, 'Abhishek Sharma', 'abhi@gmail.com', '6367267800', 'Student', 'Male', '5fb6e2a60c9da41e0a94fe6157ddb93f', 'CTAE, Udaipur'),
(4, 'Divyesh Panchal', 'divyesh@gmail.com', '8290667314', 'Teacher', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Udaipur'),
(5, 'Aashi Khemawat', 'Aashi@gmail.com', '7791999430', 'Student', 'Female', 'c70f8ceb217c836d7a1f725f42c289b6', 'Udaipur'),
(6, 'Nikhilesh Sharma', 'nikhilesh@gmail.com', '9782828056', 'Student', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Jaipur'),
(7, 'Abhishek Sharma', 'abhishek@gmail.com', '8675934743', 'Student', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Jaipur'),
(8, 'Tribhuvan singh ranawat', 'tribhuvan@gmail.com', '9799528991', 'Teacher', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Udaipur'),
(9, 'Nisheeka Choudhary', 'nisheeka@gmail.com', '8955696041', 'Teacher', 'Female', 'c70f8ceb217c836d7a1f725f42c289b6', 'Jaipur'),
(10, 'aayushi yadav', 'aayushi@gmail.com', '8734928711', 'Teacher', 'Female', 'c70f8ceb217c836d7a1f725f42c289b6', 'Delhi'),
(11, 'Mudit Jogani', 'mudit@gmail.com', '9856476636', 'Teacher', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Jaipur'),
(12, 'Arun sharma', 'arun@gmail.com', '8756473921', 'Teacher', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Delhi'),
(13, 'Pradhuman singh chouhan', 'pradhuman@gmail.com', '9354753647', 'Teacher', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Udaipur'),
(14, 'Varun vyas', 'varun@gmail.com', '8576937583', 'Teacher', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'udaipur'),
(15, 'Rashi biyani', 'rashi@gmail.com', '8465745492', 'Teacher', 'Female', 'c70f8ceb217c836d7a1f725f42c289b6', 'udaipur'),
(16, 'Tanmay Dashora', 'tanmay@gmail.com', '9567485636', 'Teacher', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Udaipur'),
(17, 'Sakshi shrimali', 'sakshi@gmail.com', '9564785693', 'Teacher', 'Female', 'c70f8ceb217c836d7a1f725f42c289b6', 'Udaipur'),
(18, 'Pallavi Sharma', 'pallavi@gmail.com', '9456578648', 'Teacher', 'Female', 'c70f8ceb217c836d7a1f725f42c289b6', 'Udaipur'),
(19, 'Harshad jain', 'harshad@gmail.com', '9867453421', 'Teacher', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Udaipur'),
(20, 'Jai Prakash', 'jai@gmail.com', '9566846372', 'Teacher', 'Male', 'c70f8ceb217c836d7a1f725f42c289b6', 'Udaipur'),
(23, 'jai', 'jai001@gmail.com', '2352436737', 'Student', 'Male', '8df351a8ccfddb64a7904248b29b398c', 'ctae');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_first_name` varchar(20) NOT NULL,
  `student_last_name` varchar(20) DEFAULT NULL,
  `student_contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_first_name`, `student_last_name`, `student_contact`) VALUES
(1, 'Ram', 'Kishore', '9611686002'),
(2, 'Rishi ', 'Shah', '9611686067'),
(3, 'Rushit ', 'Mehta', '9611686002'),
(4, 'Kiran ', 'Javkar', '1111234567'),
(5, 'Mintu', 'Dutta', '9065786756'),
(6, 'suraj', 'nair', '89373737737'),
(7, 'Siddharth', 'Vora', '9821350649'),
(8, 'Bhabesh', 'Chandra', '9089786756'),
(9, 'Girish', 'Chandra', '9012386756'),
(10, 'Mintu', 'Dutta', '8089786756'),
(11, 'Bhabesh', 'Jain', '9089722256'),
(12, 'Pranav', 'Shah', '9089789880'),
(13, 'Kundan', 'Kumar', '2323786756'),
(14, 'Karan', 'Chandra', '9089786234'),
(15, 'Tushar', 'Shah', '9089744756'),
(16, 'Mayank', 'Khair', '9087686756'),
(17, 'Bhabesh', 'Bisht', '9089786756'),
(18, 'Ankit', 'Chandra', '9089786756'),
(19, 'Jay', 'Chandra', '9089786756'),
(20, 'Jay', 'Shah', '9089700756'),
(21, 'Rakesh', 'Roshan', '9876543217'),
(22, 'Abhishek', 'Sharma', '6367267800'),
(23, 'dffgxf', 'fdg', '4364757');

-- --------------------------------------------------------

--
-- Table structure for table `student_assessment`
--

CREATE TABLE `student_assessment` (
  `assessment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_assessment`
--

INSERT INTO `student_assessment` (`assessment_id`, `student_id`, `status`) VALUES
(1, 2, 1),
(1, 5, 1),
(1, 6, 1),
(1, 11, 0),
(1, 15, 0),
(2, 1, 1),
(2, 3, 0),
(2, 12, 0),
(2, 19, 0),
(2, 20, 1),
(3, 1, 0),
(3, 2, 0),
(3, 10, 0),
(3, 18, 0),
(3, 19, 1),
(4, 22, 0),
(56, 22, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`assessment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_assessment`
--
ALTER TABLE `student_assessment`
  ADD PRIMARY KEY (`assessment_id`,`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
