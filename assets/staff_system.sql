-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 03:24 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

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
  `tardiness` tinyint(4) DEFAULT NULL,
  `overtime` tinyint(4) DEFAULT NULL,
  `absences` tinyint(4) DEFAULT NULL,
  `holiday` bit(1) DEFAULT NULL,
  `holidayName` tinytext,
  `dailyTotalHours` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_details`
--

INSERT INTO `attendance_details` (`attenDetails_id`, `attend_id`, `schedDetails_id`, `tardiness`, `overtime`, `absences`, `holiday`, `holidayName`, `dailyTotalHours`) VALUES
(5, 1, 1, 1, 1, 1, b'1111111111111111111111111111111', 'Christmas', 8),
(7, 1, 1, 1, 1, 1, b'1111111111111111111111111111111', 'Christmas', 8),
(12, 1, 1, 0, 0, 0, b'1111111111111111111111111111111', 'daWD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `college_background`
--

CREATE TABLE `college_background` (
  `staff_id` bigint(20) DEFAULT NULL,
  `course` tinytext NOT NULL,
  `schoolName` tinytext NOT NULL,
  `schoolAdd` tinytext NOT NULL,
  `yearEnd` date NOT NULL,
  `status` tinytext NOT NULL,
  `percentage` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_background`
--

INSERT INTO `college_background` (`staff_id`, `course`, `schoolName`, `schoolAdd`, `yearEnd`, `status`, `percentage`) VALUES
(1, 'BIST', 'USTP', 'LAPASAN', '2018-02-01', 'GOOD', 100),
(4, 'BSPOGI', 'HARVARD', 'MARS', '2018-02-02', 'GWAPO NA GWAPO', 101),
(3, 's', 's', 's', '0000-00-00', 's', 1),
(1, 's', 's', 's', '0000-00-00', 's', 1),
(3, 'Secret', 'Secret', 'schoolAdd', '0000-00-00', 'Secret', 100);

-- --------------------------------------------------------

--
-- Table structure for table `contact_person`
--

CREATE TABLE `contact_person` (
  `staff_id` bigint(20) DEFAULT NULL,
  `name` tinytext NOT NULL,
  `contactNum` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `gender` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_person`
--

INSERT INTO `contact_person` (`staff_id`, `name`, `contactNum`, `address`, `gender`) VALUES
(1, 'GWAPO KO', 'SECRET', 'MARS', 'LALAKI');

-- --------------------------------------------------------

--
-- Table structure for table `current_address`
--

CREATE TABLE `current_address` (
  `staff_id` bigint(20) DEFAULT NULL,
  `addOne` tinytext,
  `addTwo` tinytext,
  `addTre` tinytext,
  `state` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `country` tinytext NOT NULL,
  `postCode` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_address`
--

INSERT INTO `current_address` (`staff_id`, `addOne`, `addTwo`, `addTre`, `state`, `city`, `country`, `postCode`) VALUES
(1, '12', '13', '14', '15', '16', '16', 0);

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
-- Table structure for table `family_details`
--

CREATE TABLE `family_details` (
  `staff_id` bigint(20) DEFAULT NULL,
  `fathersName` tinytext,
  `mothersName` tinytext,
  `fathersAge` tinyint(4) DEFAULT NULL,
  `mothersAge` tinyint(4) DEFAULT NULL,
  `siblings` tinyint(4) DEFAULT NULL,
  `spouseName` tinytext,
  `numOfChildren` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_details`
--

INSERT INTO `family_details` (`staff_id`, `fathersName`, `mothersName`, `fathersAge`, `mothersAge`, `siblings`, `spouseName`, `numOfChildren`) VALUES
(1, 'john', 'melinda', 0, 21, 1, 'wala', 0);

-- --------------------------------------------------------

--
-- Table structure for table `highschool_background`
--

CREATE TABLE `highschool_background` (
  `staff_id` bigint(20) DEFAULT NULL,
  `schoolName` tinytext NOT NULL,
  `schoolAdd` tinytext NOT NULL,
  `yearEnd` date NOT NULL,
  `status` tinytext NOT NULL,
  `percentage` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highschool_background`
--

INSERT INTO `highschool_background` (`staff_id`, `schoolName`, `schoolAdd`, `yearEnd`, `status`, `percentage`) VALUES
(1, '1', '1', '0000-00-00', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `staff_id` bigint(20) DEFAULT NULL,
  `salaryWage` tinyint(4) NOT NULL,
  `department` tinytext NOT NULL,
  `allowance` tinyint(4) DEFAULT NULL,
  `employmentStatus` tinytext NOT NULL,
  `deptHead` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`staff_id`, `salaryWage`, `department`, `allowance`, `employmentStatus`, `deptHead`) VALUES
(1, 1, '1', 1, '1', ''),
(1, 1, '1', 1, '1', ''),
(1, 1, '1', 1, '1', ''),
(1, 1, '1', 1, '1', ''),
(1, 1, '1', 1, '1', '1'),
(1, 2, '3', 3, '4', '5'),
(1, 1, '1', 1, 'DAWDAW', 'QEQ2E'),
(1, 0, 'EQ2', 0, 'DAWD', 'FEFF');

-- --------------------------------------------------------

--
-- Table structure for table `leave_details`
--

CREATE TABLE `leave_details` (
  `leave_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) DEFAULT NULL,
  `typeOfabsence` tinytext NOT NULL,
  `deptHead` tinytext NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  `moreInfo` text NOT NULL,
  `extendedLeave` tinyint(4) NOT NULL
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
  `addOne` tinytext,
  `addTwo` tinytext,
  `addTre` tinytext,
  `state` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `country` tinytext NOT NULL,
  `postCode` tinyint(4) NOT NULL
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
  `salaryWage` tinyint(4) NOT NULL
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
  `day` tinytext NOT NULL,
  `morningTimein` tinyint(4) DEFAULT NULL,
  `morningTimeout` tinyint(4) DEFAULT NULL,
  `afternoonTimein` tinyint(4) DEFAULT NULL,
  `afternoonTimeout` tinyint(4) DEFAULT NULL,
  `totalHours` tinyint(4) NOT NULL
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
  `fname` tinytext NOT NULL,
  `mname` tinytext,
  `lname` tinytext NOT NULL,
  `birthdate` date NOT NULL,
  `cellnum` tinytext NOT NULL,
  `telnum` tinytext,
  `status` tinytext NOT NULL,
  `gender` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `fname`, `mname`, `lname`, `birthdate`, `cellnum`, `telnum`, `status`, `gender`) VALUES
(1, 'joshua', 'omagap', 'perater', '0000-00-00', '09169947508', 'wala', 'taken', 'male'),
(2, 'joshua', 'omagap', 'perater', '1999-01-01', '09', '09', 'taken', 'male'),
(3, 'Joshua', 'Omagap', 'Perater', '1999-01-01', '093', '091', 'Single', 'Male'),
(4, 'Gwapo', 'joshua', 'Perater', '2018-02-07', '091', '031', 'Taken', 'Male'),
(5, '1', '11', '1', '2018-02-13', '1', '1', '11', '1'),
(6, 'james', 'kaka', 'waka', '2018-02-14', '09362650656', 'wala', 'Single', 'Male'),
(7, '', '', '', '0000-00-00', '', '', '', ''),
(8, 'daws', 'qsad', 'dawds', '2018-02-09', 'dadw', 'sda', 'cscas', 'wad'),
(9, 'q', 'wq', 'dwa', '2018-02-11', 'daw', 'dawd', 'sda', 'wdaw'),
(10, 'try', 'dawdad', 'dawd', '2018-02-21', 'Sqs', 'sQS', 'SQS', 'Sqs'),
(11, 'jsohua', 'baia', 'perste', '2018-02-15', '21', '2132', 'sdae', 'dawdf'),
(12, 'Jiosg', 'awda', 'defs', '2018-02-21', 'dawd', 'czsd', 'dawd', '121212'),
(13, 'Jiosg', 'awda', 'defs', '2018-02-21', 'dawd', 'czsd', 'dawd', '121212'),
(14, '21', '212', 'wqeqe', '2018-02-01', 'dwqd', 'dqwd', 'eq2', 'e2q');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `staff_id` bigint(20) DEFAULT NULL,
  `companyName` tinytext,
  `employerName` tinytext,
  `employerAdd` tinytext,
  `employerCellnum` tinytext,
  `employerTelnum` tinytext,
  `companyStart` date DEFAULT NULL,
  `companyEnd` date DEFAULT NULL,
  `jobTitle` tinytext,
  `department` tinytext,
  `workArea` tinytext,
  `state` tinytext,
  `city` tinytext,
  `country` tinytext,
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
  MODIFY `staff_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
  ADD CONSTRAINT `attendance_details_ibfk_1` FOREIGN KEY (`attend_id`) REFERENCES `attendance` (`attend_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_details_ibfk_2` FOREIGN KEY (`schedDetails_id`) REFERENCES `schedule_details` (`schedDetails_id`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `job_details_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

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
  ADD CONSTRAINT `schedule_details_ibfk_1` FOREIGN KEY (`sched_id`) REFERENCES `schedule` (`sched_id`);

--
-- Constraints for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD CONSTRAINT `work_experience_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
