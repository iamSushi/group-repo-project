-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 08:05 PM
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
-- Table structure for table `awol`
--

CREATE TABLE `awol` (
  `staff_id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `absences` int(11) NOT NULL,
  `late` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'BSIT', 'USTP', 'Recto Ave Lapasan, Cagayan de Oro City', 'Misamis Oriental', 'Philippines', 'Cagayan de Oro City', 9000, '2018-04-10', 'Honor', 1.8);

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
(3, 'Masaya', 'Siya', 'Saiba', '09362566143', 'Lapasan, Cagayan de Oro City', 'Male', 'masaya@gmail.com', '2018-04-18');

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
(3, 'Gusa', 'Galaxy', 'Ngitngit Street', 'Misamis Oriental', 'Cagayan De Oro City', 'Philippines', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'Angkol', 'asdajn', 'jnsakjdn', 'jknaskjdn', 'kjnskajdn', 'kjnsakjdn', '2018-04-03', '2018-04-09', 'asdas', 'asdas', 'sada', '', '', NULL, NULL, '', '', '0000-00-00', '', '', NULL),
(3, 'asda', 'asda', 'asda', 'asda', 'asda', 'sada', '2018-04-12', '2018-04-13', 'asda', 'sadasd', 'asdag', 'jhgjhgjh', 'ghgjhg', 5, 'jhjh', 'hbjhb', 'jhbmhb', '2018-04-16', '643513546', 'a5sdasda', 12);

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
(3, 'asdasda', '35131', 'Misamis Oriental', 'Cagayan de Oro City', 'Philippines', 9000, '2018-04-10', 85);

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `staff_id` bigint(20) DEFAULT NULL,
  `salaryWage` int(11) NOT NULL,
  `allowance` int(11) DEFAULT NULL,
  `deptHead` varchar(50) NOT NULL,
  `sss` int(11) NOT NULL,
  `pagibig` int(11) NOT NULL,
  `philhealth` int(11) NOT NULL,
  `bir` int(11) NOT NULL
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
-- Table structure for table `schedule_details`
--

CREATE TABLE `schedule_details` (
  `sched_id` bigint(20) NOT NULL,
  `staff_id` bigint(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `morningTimein` int(11) DEFAULT NULL,
  `morningTimeout` int(11) DEFAULT NULL,
  `afternoonTimein` int(11) DEFAULT NULL,
  `afternoonTimeout` int(11) DEFAULT NULL,
  `totalHours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'Joshua', 'Omagap', 'Perater', '1999-01-01', '09658965241', 'wala', 'perater@gmail.com', 'Single', 'Male', 'Admin', '', '1234');

-- --------------------------------------------------------

--
-- Stand-in structure for view `staffjob`
-- (See below for the actual view)
--
CREATE TABLE `staffjob` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `staffsched`
-- (See below for the actual view)
--
CREATE TABLE `staffsched` (
`sched_id` bigint(20)
,`fname` varchar(50)
,`mname` varchar(50)
,`lname` varchar(50)
,`day` varchar(50)
,`morningTimein` int(11)
,`morningTimeout` int(11)
,`afternoonTimein` int(11)
,`afternoonTimeout` int(11)
,`totalHours` int(11)
);

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
(3, 'hkhhghg', 'hgjhg', 'jhgjhgjhg', '+56554', '5454', '2018-04-03', '2018-04-25', ',jhkjh', 'jhhjjh', 'hkhh', 'kjhkjhkjh', 'kjhkjhkjh', 'kjhkj', 'jklljgdsdfghjhgfdsa');

-- --------------------------------------------------------

--
-- Structure for view `staffjob`
--
DROP TABLE IF EXISTS `staffjob`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staffjob`  AS  select `job_details`.`staff_id` AS `staff_id`,`staff`.`fname` AS `fname`,`staff`.`mname` AS `mname`,`staff`.`lname` AS `lname`,`job_details`.`salaryWage` AS `salaryWage`,`job_details`.`allowance` AS `allowance`,`job_details`.`deptHead` AS `deptHead`,`job_details`.`sss` AS `sss`,`job_details`.`pagibig` AS `pagibig`,`job_details`.`philhealth` AS `philhealth`,`job_details`.`bir` AS `bir`,`job_details`.`absences` AS `absences`,`job_details`.`late` AS `late` from (`job_details` left join `staff` on((`job_details`.`staff_id` = `staff`.`staff_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `staffsched`
--
DROP TABLE IF EXISTS `staffsched`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `staffsched`  AS  select `schedule_details`.`sched_id` AS `sched_id`,`staff`.`fname` AS `fname`,`staff`.`mname` AS `mname`,`staff`.`lname` AS `lname`,`schedule_details`.`day` AS `day`,`schedule_details`.`morningTimein` AS `morningTimein`,`schedule_details`.`morningTimeout` AS `morningTimeout`,`schedule_details`.`afternoonTimein` AS `afternoonTimein`,`schedule_details`.`afternoonTimeout` AS `afternoonTimeout`,`schedule_details`.`totalHours` AS `totalHours` from (`schedule_details` left join `staff` on((`schedule_details`.`staff_id` = `staff`.`staff_id`))) ;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

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
-- Indexes for table `schedule_details`
--
ALTER TABLE `schedule_details`
  ADD PRIMARY KEY (`sched_id`),
  ADD KEY `staff_id` (`staff_id`);

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
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `schedule_details`
--
ALTER TABLE `schedule_details`
  MODIFY `sched_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `salary_report`
--
ALTER TABLE `salary_report`
  ADD CONSTRAINT `salary_report_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD CONSTRAINT `work_experience_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
