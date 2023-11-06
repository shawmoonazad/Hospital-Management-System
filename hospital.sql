-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 05:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `admission_id` int(6) NOT NULL,
  `patient_id` int(6) DEFAULT NULL,
  `room_number` int(6) DEFAULT NULL,
  `bed_number` int(6) DEFAULT NULL,
  `admission_date` date DEFAULT NULL,
  `release_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`admission_id`, `patient_id`, `room_number`, `bed_number`, `admission_date`, `release_date`) VALUES
(191, 3001, 1010, 700, '2021-04-02', NULL),
(192, 3002, 1010, 701, '2021-04-03', '2021-05-15'),
(193, 3003, 1010, 702, '2021-04-15', '2021-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `sl` int(6) DEFAULT NULL,
  `room_number` int(6) NOT NULL,
  `bed_number` int(6) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`sl`, `room_number`, `bed_number`, `status`) VALUES
(1, 1010, 700, 'Available'),
(2, 1010, 701, 'Available'),
(3, 1010, 702, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(6) NOT NULL,
  `patient_id` int(6) DEFAULT NULL,
  `admission_id` int(6) DEFAULT NULL,
  `bill_date` date DEFAULT NULL,
  `total_amount` double(8,2) DEFAULT NULL,
  `discount` smallint(6) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `patient_id`, `admission_id`, `bill_date`, `total_amount`, `discount`, `status`) VALUES
(1, 3001, 191, '2021-05-10', 100000.00, 5000, 'Paid'),
(2, 3002, 192, '2021-05-08', 50000.00, 2000, 'Due'),
(3, 3003, 193, '2021-05-08', 63500.00, 2000, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_name` varchar(50) NOT NULL,
  `d_location` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_name`, `d_location`, `status`) VALUES
('Biochemistry', '2nd floor North Building', 'Availbale'),
('General Medicine', '2nd floor North Building', 'Availbale'),
('Medical Record Center', '1st floor South building', 'Open'),
('Microbiology', '2nd floor North Building', 'Closed'),
('Pharmacy', '1st floor, South Building', 'Available'),
('Radiotherapy', '1st floor South Building', 'Closed'),
('Surgery', '1st floor South Building', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(6) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `department_name` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `blood_group` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `first_name`, `last_name`, `department_name`, `sex`, `blood_group`) VALUES
(101, 'Dr.Jahirul', 'Islam', 'General Medicine', 'Male', 'O+'),
(102, 'Dr.Shakib', 'Ahmed', 'Biochemistry', 'Male', 'AB+'),
(103, 'Dr.Shawmoon', 'Azad', 'Surgery', 'Male', 'O+'),
(104, 'Dr.Tanmoon', 'Hossain', 'Microbiology', 'Female', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(6) NOT NULL,
  `document_title` varchar(50) NOT NULL,
  `doctor_id` int(6) DEFAULT NULL,
  `patient_id` int(6) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `document_title`, `doctor_id`, `patient_id`, `date`, `updated_by`) VALUES
(1, 'Medical prescription', 101, 3001, '2021-05-07', 'Akash'),
(2, 'Medical Test Report', 102, 3001, '2021-05-05', 'Akash');

-- --------------------------------------------------------

--
-- Table structure for table `dshedule`
--

CREATE TABLE `dshedule` (
  `sl` int(6) NOT NULL,
  `doctor_id` int(6) DEFAULT NULL,
  `department` varchar(50) NOT NULL,
  `day` varchar(50) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dshedule`
--

INSERT INTO `dshedule` (`sl`, `doctor_id`, `department`, `day`, `start_time`, `end_time`, `status`) VALUES
(1, 101, 'General Medicine', 'Sunday-Tuesday-Wednesday', '08:00:00', '12:00:00', 'Available'),
(2, 102, 'Biochemistry', 'Sunday-Tuesday-Wednesday', '08:00:00', '12:00:00', 'Available'),
(3, 103, 'Surgery', 'Saturday-Monday-Thursday', '09:00:00', '01:00:00', 'Available'),
(4, 104, 'Microbiology', 'Saturday-Monday-Thursday', '09:00:00', '01:00:00', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(6) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `start_date` date DEFAULT NULL,
  `department_name` varchar(50) NOT NULL,
  `mobile_number` varchar(11) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `designation` varchar(50) NOT NULL,
  `blood_group` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `start_date`, `department_name`, `mobile_number`, `sex`, `designation`, `blood_group`) VALUES
(201, 'Rezwan', 'Hossin', '2017-09-15', 'Medical Record Center', '01718221437', 'Male', 'Coordirector', 'O+'),
(202, 'Akash', 'Khan', '2019-02-17', 'Medical Record Center', '01918321435', 'Male', 'Senior Officer', 'AB+'),
(203, 'Rashed', 'Bhuiyan', '2019-09-15', 'Medical Record Center', '01318281436', 'Male', 'Assostant Officer', 'A+'),
(204, 'Sharif', 'Islam', '2019-09-15', 'Medical Record Center', '01918721434', 'Male', 'Assostant Officer', 'O+'),
(205, 'Fahim', 'Abrar', '2021-05-21', 'Biochemistry', '0174642', 'male', 'Lab Assistant ', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `eshedule`
--

CREATE TABLE `eshedule` (
  `sl` int(6) NOT NULL,
  `employee_id` int(6) DEFAULT NULL,
  `room_number` int(6) DEFAULT NULL,
  `day` varchar(50) DEFAULT NULL,
  `shift` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eshedule`
--

INSERT INTO `eshedule` (`sl`, `employee_id`, `room_number`, `day`, `shift`, `status`) VALUES
(1, 201, 8001, 'Sunday - Thursday', 'Morning', 'Available'),
(2, 203, 9001, 'Sunday - Thursday', 'Morning', 'Available'),
(3, 203, 7001, 'Sunday - Thursday', 'Morning', 'Available'),
(4, 204, 6001, 'Sunday - Thursday', 'Evening', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `sl` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `notice` varchar(500) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `assign_by` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`sl`, `department_name`, `notice`, `end_date`, `assign_by`, `status`) VALUES
(1, 'Biochemistry', 'Biochemistry Department will Remain Close Due to Maintanence from 1st April to 3rd April', '2021-04-01', 'Rezwan Hossin', 'Important'),
(2, 'Microbiology', 'The department of microbiology is hiring intern microbiologists.', '2021-06-10', 'Rezwan', 'Open'),
(3, 'General Medicine', 'Free checkup For world health day', '2021-05-07', 'Akash', 'Upto 40 people');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(6) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile_number` varchar(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `addmission` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `first_name`, `last_name`, `mobile_number`, `address`, `sex`, `addmission`) VALUES
(3001, 'Araf', 'Mahi', '01798281474', 'Road no-5, Block-A, Banasree, Rampura, Dhaka, Dhaka, Bangladesh', 'male', '2021-05-02'),
(3002, 'Rojin', 'Islam', '01854691698', 'Road no -1,Dhanmodi, 1209 Dhaka, Bangladesh', 'Male', '2021-05-04'),
(3003, 'Faiza', 'Rahman', '01719211475', 'New Baily Road, Dhaka, Bangladesh', 'Female', '2021-05-07'),
(3004, 'Fatema', 'Karim', '01935625874', 'Bir Uttam A K Khondokar road, Gulshan, 1213 Dhaka, Bangladesh', 'Female', '2021-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `sl` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `patient_id` int(6) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rate` double(6,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sl`, `service_name`, `patient_id`, `description`, `quantity`, `rate`, `status`) VALUES
(1, 'Ultrasound', 3003, 'Ultrasound for Pregnancy', 1, 500.00, 'Done'),
(2, 'Root canal', 3002, 'Root canal of a molar teeth', 1, 2000.00, 'Done'),
(3, 'X-Ray', 3001, 'Both the Hands X-Ray', 2, 500.00, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `employee_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `password`, `employee_id`) VALUES
(123, 'abc', 201);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`admission_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `bed_number` (`bed_number`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`bed_number`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `admission_id` (`admission_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_name`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_name` (`department_name`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `dshedule`
--
ALTER TABLE `dshedule`
  ADD PRIMARY KEY (`sl`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_name` (`department_name`);

--
-- Indexes for table `eshedule`
--
ALTER TABLE `eshedule`
  ADD PRIMARY KEY (`sl`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`sl`),
  ADD KEY `department_name` (`department_name`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sl`) USING BTREE,
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`) USING BTREE,
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `admission_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dshedule`
--
ALTER TABLE `dshedule`
  MODIFY `sl` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `eshedule`
--
ALTER TABLE `eshedule`
  MODIFY `sl` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3005;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admission`
--
ALTER TABLE `admission`
  ADD CONSTRAINT `admission_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `admission_ibfk_2` FOREIGN KEY (`bed_number`) REFERENCES `bed` (`bed_number`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`admission_id`) REFERENCES `admission` (`admission_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`department_name`) REFERENCES `department` (`department_name`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`),
  ADD CONSTRAINT `document_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`);

--
-- Constraints for table `dshedule`
--
ALTER TABLE `dshedule`
  ADD CONSTRAINT `dshedule_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`department_name`) REFERENCES `department` (`department_name`);

--
-- Constraints for table `eshedule`
--
ALTER TABLE `eshedule`
  ADD CONSTRAINT `eshedule_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);

--
-- Constraints for table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`department_name`) REFERENCES `department` (`department_name`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
