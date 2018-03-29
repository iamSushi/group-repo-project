-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 10:05 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attend_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attend_id`, `staff_id`) VALUES
(1, 1),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_details`
--

CREATE TABLE `attendance_details` (
  `attenDetails_id` bigint(20) NOT NULL,
  `attend_id` bigint(20) DEFAULT NULL,
  `schedDetails_id` bigint(20) DEFAULT NULL,
  `tardiness` int(11) DEFAULT NULL,
  `overtime` int(11) DEFAULT NULL,
  `absences` int(11) DEFAULT NULL,
  `holiday` bit(1) DEFAULT NULL,
  `holidayName` varchar(50) DEFAULT NULL,
  `dailyTotalHours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_details`
--

INSERT INTO `attendance_details` (`attenDetails_id`, `attend_id`, `schedDetails_id`, `tardiness`, `overtime`, `absences`, `holiday`, `holidayName`, `dailyTotalHours`) VALUES
(5, 1, 1, 1, 1, 1, b'1', 'Christmas', 8),
(7, 1, 1, 1, 1, 1, b'1', 'Christmas', 8),
(12, 1, 1, 0, 0, 0, b'1', 'daWD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `college_background`
--

CREATE TABLE `college_background` (
  `staff_id` bigint(20) DEFAULT NULL,
  `course` varchar(50) NOT NULL,
  `schoolName` varchar(255) NOT NULL,
  `schoolAdd` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postCode` int(11) NOT NULL,
  `yearEnd` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `percentage` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_background`
--

INSERT INTO `college_background` (`staff_id`, `course`, `schoolName`, `schoolAdd`, `state`, `country`, `city`, `postCode`, `yearEnd`, `status`, `percentage`) VALUES
(6, 'BSIT', 'Misamis Oriental General Comprehesive High School', 'Don Apolinar Velez', 'Misamis Oriental', 'Philippines', 'Cagayan De Oro City', 9000, '0000-00-00', '', 1.8),
(NULL, 'Bachelor of Theology in Missions and Music', 'Cebu Bible Seminary', 'Cantonville, San Isidro', 'Cebu', 'Philippines', 'Talisay City', 6095, '2016-10-18', 'Single', 1),
(16, 'Bachelor of Theology in Music and Missions', 'Cebu Bible Seminary', 'Cantonville, San Isidro', 'Cebu', 'Philippines', 'Talisay City', 6095, '2015-04-01', 'Single', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_person`
--

CREATE TABLE `contact_person` (
  `staff_id` bigint(20) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contactNum` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_person`
--

INSERT INTO `contact_person` (`staff_id`, `fname`, `mname`, `lname`, `contactNum`, `address`, `gender`, `email`, `birthdate`) VALUES
(6, 'Marissa', 'Omamalin', 'Sinadjan', '09368727409', '187 Zone 1 Centro Kolambog Lapasan, CDOC', '', 'marissa@gmail.com', '2018-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `current_address`
--

CREATE TABLE `current_address` (
  `staff_id` bigint(20) DEFAULT NULL,
  `addOne` varchar(50) DEFAULT NULL,
  `addTwo` varchar(50) DEFAULT NULL,
  `addTre` varchar(50) DEFAULT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `postCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_address`
--

INSERT INTO `current_address` (`staff_id`, `addOne`, `addTwo`, `addTre`, `state`, `city`, `country`, `postCode`) VALUES
(6, '187 Zone 6', 'Centro Kolambog', 'Lapasan', 'Misamis Oriental', 'Cagayan de Oro City', 'Philippines', 9000),
(16, 'BongBongon', 'Di Makita', 'Street', 'Misamis Oriental', 'Cagayan de Oro City', 'Philippines', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `deduction_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deduction`
--

INSERT INTO `deduction` (`deduction_id`, `staff_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `deduction_details`
--

CREATE TABLE `deduction_details` (
  `deductDetails_id` bigint(20) NOT NULL,
  `deduction_id` bigint(20) DEFAULT NULL,
  `attenDetails_id` bigint(20) DEFAULT NULL,
  `leave_id` bigint(20) DEFAULT NULL,
  `sss` int(11) DEFAULT NULL,
  `pagibig` int(11) DEFAULT NULL,
  `philhealth` int(11) DEFAULT NULL,
  `bir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `depart_id` int(11) NOT NULL,
  `depart_name` varchar(255) NOT NULL,
  `depart_head` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`depart_id`, `depart_name`, `depart_head`) VALUES
(1, 'Lab', NULL),
(2, '', '1111-11-11'),
(3, 'nurse', '3');

-- --------------------------------------------------------

--
-- Table structure for table `family_details`
--

CREATE TABLE `family_details` (
  `staff_id` bigint(20) DEFAULT NULL,
  `fathers_fname` varchar(50) DEFAULT NULL,
  `fathers_mname` varchar(50) NOT NULL,
  `fathers_lname` varchar(50) NOT NULL,
  `mothers_fname` varchar(50) DEFAULT NULL,
  `mothers_mname` varchar(50) NOT NULL,
  `mothers_lname` varchar(50) NOT NULL,
  `fathers_birthdate` date DEFAULT NULL,
  `mothers_birthdate` date DEFAULT NULL,
  `fathers_occupation` varchar(50) NOT NULL,
  `mothers_occupation` varchar(50) NOT NULL,
  `fathers_contnum` varchar(50) NOT NULL,
  `mothers_contnum` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `siblings` int(11) DEFAULT NULL,
  `spouse_fname` varchar(50) DEFAULT NULL,
  `spouse_mname` varchar(50) NOT NULL,
  `spouse_lname` varchar(50) NOT NULL,
  `spouse_birthdate` date NOT NULL,
  `spouse_contnum` varchar(50) NOT NULL,
  `spouse_occupation` varchar(50) NOT NULL,
  `numOfChildren` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_details`
--

INSERT INTO `family_details` (`staff_id`, `fathers_fname`, `fathers_mname`, `fathers_lname`, `mothers_fname`, `mothers_mname`, `mothers_lname`, `fathers_birthdate`, `mothers_birthdate`, `fathers_occupation`, `mothers_occupation`, `fathers_contnum`, `mothers_contnum`, `status`, `siblings`, `spouse_fname`, `spouse_mname`, `spouse_lname`, `spouse_birthdate`, `spouse_contnum`, `spouse_occupation`, `numOfChildren`) VALUES
(6, 'Danilo', 'Alsa', 'Sinadjan', 'Marissa', 'Omamalin', 'Sinadjan', '2018-03-28', '2018-03-14', 'Mechanical Enginner', 'Doctor', '09653214568', '09175263456', 'Married', 4, 'Lorylee Jane', 'Malinao', 'Sinadjan', '2018-03-14', '09141431431', 'Architect', 12),
(16, 'Eddie', 'Gardose', 'Garbosa', 'Edna', 'Kong', 'Garbosa', '2018-01-10', '2018-03-13', 'Farmer', 'Fruit Vendor', '09262917371', '09393045449', 'Single', 4, 'Angelique', 'Samson', 'Mugot', '2018-03-05', '09262917371', 'Architec', 2);

-- --------------------------------------------------------

--
-- Table structure for table `highschool_background`
--

CREATE TABLE `highschool_background` (
  `staff_id` bigint(20) DEFAULT NULL,
  `schoolName` varchar(50) NOT NULL,
  `schoolAdd` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `postCode` int(11) NOT NULL,
  `year_end` date NOT NULL,
  `average` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highschool_background`
--

INSERT INTO `highschool_background` (`staff_id`, `schoolName`, `schoolAdd`, `state`, `city`, `country`, `postCode`, `year_end`, `average`) VALUES
(6, 'Misamis Oriental General Comprehesive High School', 'Don Apolinar', 'Misamis Oriental', 'Cagayan de Oro City', 'Philippines', 9000, '2018-03-13', 2.1),
(NULL, 'Digos City National High School', 'Rizal Ave., Zone 1', 'Davao del Sur', 'Digos City', 'Philippines', 8002, '2017-07-10', 95),
(16, 'Digos City National High School', 'Rizal Ave., Zone 1', 'Davao del Sur', 'Digos City', 'Philippines', 8002, '2011-03-30', 95);

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `staff_id` bigint(20) DEFAULT NULL,
  `salaryWage` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `allowance` int(11) DEFAULT NULL,
  `employmentStatus` varchar(50) NOT NULL,
  `deptHead` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_details`
--

CREATE TABLE `leave_details` (
  `leave_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) DEFAULT NULL,
  `typeOfabsence` varchar(50) NOT NULL,
  `deptHead` varchar(50) NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  `moreInfo` text NOT NULL,
  `extendedLeave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_details`
--

INSERT INTO `leave_details` (`leave_id`, `staff_id`, `typeOfabsence`, `deptHead`, `dateStart`, `dateEnd`, `moreInfo`, `extendedLeave`) VALUES
(1, 1, '1', '', '0000-00-00', '0000-00-00', '1', 1),
(2, 1, '1', '', '0000-00-00', '0000-00-00', '1', 1),
(3, 1, '1', '1', '0000-00-00', '0000-00-00', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permanent_address`
--

CREATE TABLE `permanent_address` (
  `staff_id` bigint(20) DEFAULT NULL,
  `addOne` varchar(50) DEFAULT NULL,
  `addTwo` varchar(50) DEFAULT NULL,
  `addTre` varchar(50) DEFAULT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `postCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permanent_address`
--

INSERT INTO `permanent_address` (`staff_id`, `addOne`, `addTwo`, `addTre`, `state`, `city`, `country`, `postCode`) VALUES
(1, '1', '1', '14', '1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salary_details`
--

CREATE TABLE `salary_details` (
  `salary_id` bigint(20) DEFAULT NULL,
  `deductDetails_id` bigint(20) DEFAULT NULL,
  `salaryWage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary_report`
--

CREATE TABLE `salary_report` (
  `salary_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sched_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_id`, `staff_id`) VALUES
(1, 1),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_details`
--

CREATE TABLE `schedule_details` (
  `schedDetails_id` bigint(20) NOT NULL,
  `sched_id` bigint(20) DEFAULT NULL,
  `day` varchar(50) NOT NULL,
  `morningTimein` int(11) DEFAULT NULL,
  `morningTimeout` int(11) DEFAULT NULL,
  `afternoonTimein` int(11) DEFAULT NULL,
  `afternoonTimeout` int(11) DEFAULT NULL,
  `totalHours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_details`
--

INSERT INTO `schedule_details` (`schedDetails_id`, `sched_id`, `day`, `morningTimein`, `morningTimeout`, `afternoonTimein`, `afternoonTimeout`, `totalHours`) VALUES
(1, 1, '1', 73, 12, 13, 5, 8),
(2, 2, '2', 103, 13, 3, 73, 8);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` bigint(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `cellnum` varchar(50) NOT NULL,
  `telnum` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `fname`, `mname`, `lname`, `birthdate`, `cellnum`, `telnum`, `email`, `status`, `gender`, `type`, `department`, `password`) VALUES
(1, 'joshua', 'omagap', 'perater', '0000-00-00', '09169947508', 'wala', '', 'taken', 'male', '', '', ''),
(2, 'joshua', 'omagap', 'perater', '1999-01-01', '09', '09', '', 'taken', 'male', '', '', ''),
(3, 'Joshua', 'Omagap', 'Perater', '1999-01-01', '09658965241', 'wala', 'perater@gmail.com', 'Single', 'Male', 'Admin', '', '1234'),
(4, 'Gwapo', 'joshua', 'Perater', '2018-02-07', '091', '031', '', 'Taken', 'Male', '', '', ''),
(6, 'James Kenneth Mark', 'Omamalin', 'Sinadjan', '1990-08-11', '09368727400', 'wala', 'jamessinadjan5@gmail.com', 'Married', 'Male', 'Staff', '', 'masaya'),
(15, 'Christian', 'Gwapo', 'Cat-Awan', '1994-11-05', '09365268941', 'wala', 'catawan@gmail.com', 'Married', 'Male', 'Head', 'Cardiology', '1233'),
(16, 'Ezekiel', 'Kong', 'Garbosa', '2018-03-07', '09652651456', 'wala', 'garbosa@gmail.com', 'Single', 'Male', 'Staff', '', '1235'),
(26, 'Zynarrah', '', 'Dizon', '0000-00-00', '', '', 'dizon@gmail.com', '', '', 'Staff', '', '1233'),
(28, 'Jane', 'Marie', 'Go', '2018-03-16', '', '', 'mariego@gmail.com', 'Divorced', 'Female', 'Staff', 'Cardiology', 'Password'),
(29, 'Donna', 'Claire', 'Pepito', '2018-03-13', '', '', 'pepito@gmail.com', 'Single', 'Female', 'Staff', 'Cardiology', 'Password'),
(30, 'Loura', 'Jane', 'Kim', '2018-03-17', '', '', 'kimloura@gmail.com', 'Married', 'Female', 'Head', 'Ophthalmology', 'Password'),
(31, 'kenneth', 'Go', 'Kim', '2018-03-27', '', '', 'gokim@gmail.com', 'Widowed', 'Male', 'Staff', '', 'Password'),
(32, 'Jhon', 'Doe', 'Dee', '2018-03-14', '', '', 'doedee@gmail.com', 'Single', 'Male', 'Staff', '', 'Password'),
(33, 'Jhon', 'Doe', 'Dee', '2018-03-10', '', '', 'doedee@gmail.com', 'Single', 'Male', 'Staff', '', 'Password'),
(34, 'Mark', 'Kim', 'Domingo', '2018-03-21', '', '', 'domingokim@gmail.com', 'Single', 'Male', 'Staff', '', 'Password');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `staff_id` bigint(20) DEFAULT NULL,
  `companyName` varchar(50) DEFAULT NULL,
  `employerName` varchar(50) DEFAULT NULL,
  `employerAdd` varchar(50) DEFAULT NULL,
  `employerCellnum` varchar(50) DEFAULT NULL,
  `employerTelnum` varchar(50) DEFAULT NULL,
  `companyStart` date DEFAULT NULL,
  `companyEnd` date DEFAULT NULL,
  `jobTitle` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `workArea` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `moreInfo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`staff_id`, `companyName`, `employerName`, `employerAdd`, `employerCellnum`, `employerTelnum`, `companyStart`, `companyEnd`, `jobTitle`, `department`, `workArea`, `state`, `city`, `country`, `moreInfo`) VALUES
(1, '1', '1', '1', '1', '1', '2018-02-02', '2018-02-07', '1', '1', '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attend_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `attendance_details`
--
ALTER TABLE `attendance_details`
  ADD PRIMARY KEY (`attenDetails_id`),
  ADD KEY `attend_id` (`attend_id`),
  ADD KEY `schedDetails_id` (`schedDetails_id`);

--
-- Indexes for table `college_background`
--
ALTER TABLE `college_background`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `contact_person`
--
ALTER TABLE `contact_person`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `current_address`
--
ALTER TABLE `current_address`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`deduction_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `deduction_details`
--
ALTER TABLE `deduction_details`
  ADD PRIMARY KEY (`deductDetails_id`),
  ADD KEY `deduction_id` (`deduction_id`),
  ADD KEY `attenDetails_id` (`attenDetails_id`),
  ADD KEY `leave_id` (`leave_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`depart_id`);

--
-- Indexes for table `family_details`
--
ALTER TABLE `family_details`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `highschool_background`
--
ALTER TABLE `highschool_background`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `leave_details`
--
ALTER TABLE `leave_details`
  ADD PRIMARY KEY (`leave_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `permanent_address`
--
ALTER TABLE `permanent_address`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `salary_details`
--
ALTER TABLE `salary_details`
  ADD KEY `salary_id` (`salary_id`),
  ADD KEY `deductDetails_id` (`deductDetails_id`);

--
-- Indexes for table `salary_report`
--
ALTER TABLE `salary_report`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `schedule_details`
--
ALTER TABLE `schedule_details`
  ADD PRIMARY KEY (`schedDetails_id`),
  ADD KEY `sched_id` (`sched_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD KEY `staff_id` (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attend_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance_details`
--
ALTER TABLE `attendance_details`
  MODIFY `attenDetails_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `deduction_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `depart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave_details`
--
ALTER TABLE `leave_details`
  MODIFY `leave_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salary_report`
--
ALTER TABLE `salary_report`
  MODIFY `salary_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule_details`
--
ALTER TABLE `schedule_details`
  MODIFY `schedDetails_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `attendance_details`
--
ALTER TABLE `attendance_details`
  ADD CONSTRAINT `attendance_details_ibfk_1` FOREIGN KEY (`attend_id`) REFERENCES `attendance` (`attend_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_details_ibfk_2` FOREIGN KEY (`schedDetails_id`) REFERENCES `schedule_details` (`schedDetails_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `college_background`
--
ALTER TABLE `college_background`
  ADD CONSTRAINT `college_background_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `contact_person`
--
ALTER TABLE `contact_person`
  ADD CONSTRAINT `contact_person_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `current_address`
--
ALTER TABLE `current_address`
  ADD CONSTRAINT `current_address_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `deduction`
--
ALTER TABLE `deduction`
  ADD CONSTRAINT `deduction_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `deduction_details`
--
ALTER TABLE `deduction_details`
  ADD CONSTRAINT `deduction_details_ibfk_1` FOREIGN KEY (`deduction_id`) REFERENCES `deduction` (`deduction_id`),
  ADD CONSTRAINT `deduction_details_ibfk_2` FOREIGN KEY (`attenDetails_id`) REFERENCES `attendance_details` (`attenDetails_id`),
  ADD CONSTRAINT `deduction_details_ibfk_3` FOREIGN KEY (`leave_id`) REFERENCES `leave_details` (`leave_id`);

--
-- Constraints for table `family_details`
--
ALTER TABLE `family_details`
  ADD CONSTRAINT `family_details_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `highschool_background`
--
ALTER TABLE `highschool_background`
  ADD CONSTRAINT `highschool_background_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `job_details`
--
ALTER TABLE `job_details`
  ADD CONSTRAINT `job_details_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leave_details`
--
ALTER TABLE `leave_details`
  ADD CONSTRAINT `leave_details_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `permanent_address`
--
ALTER TABLE `permanent_address`
  ADD CONSTRAINT `permanent_address_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `salary_details`
--
ALTER TABLE `salary_details`
  ADD CONSTRAINT `salary_details_ibfk_1` FOREIGN KEY (`salary_id`) REFERENCES `salary_report` (`salary_id`),
  ADD CONSTRAINT `salary_details_ibfk_2` FOREIGN KEY (`deductDetails_id`) REFERENCES `deduction_details` (`deductDetails_id`);

--
-- Constraints for table `salary_report`
--
ALTER TABLE `salary_report`
  ADD CONSTRAINT `salary_report_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `schedule_details`
--
ALTER TABLE `schedule_details`
  ADD CONSTRAINT `schedule_details_ibfk_1` FOREIGN KEY (`sched_id`) REFERENCES `schedule` (`sched_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD CONSTRAINT `work_experience_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
