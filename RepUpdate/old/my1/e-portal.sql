-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 08:56 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `WEEK` int(20) NOT NULL,
  `coursedesc` varchar(2000) NOT NULL,
  `Cdept` varchar(50) NOT NULL,
  `dept_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `course_name`, `start_date`, `end_date`, `WEEK`, `coursedesc`, `Cdept`, `dept_id`) VALUES
('COM101', 'COMMERCE', '2018-11-24', '2018-12-01', 1, 'COMMERCE CONTENT', 'COMMERCE', 'COM101'),
('CS101', 'PHP', '2018-11-24', '2018-12-01', 1, 'PHP CONTENT', 'COMPUTER SCIENCE', 'CS101'),
('HUM101', 'PSYCHOLOGY', '2018-11-24', '2018-12-15', 3, 'PSYCHOLOGY CONTENT', 'HUMANITIES', 'HUM101'),
('LAW101', 'LAW', '2018-11-24', '2018-12-01', 1, 'LAW CONTENT', 'LAW', 'LAW101'),
('LS101', 'Biotech', '2018-11-24', '2018-12-08', 2, 'BIOTECH CONTENTS', 'LIFE SCIENCE', 'LS101'),
('MGT101', 'Management', '2018-11-24', '2018-12-08', 2, 'MANAGEMENT CONTENT', 'MANAGEMENT', 'MGMT101');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` varchar(10) NOT NULL,
  `dept_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
('COM101', 'COMMERCE'),
('CS101', 'COMPUTER SCIENCE'),
('HUM101', 'HUMANITIES'),
('LAW101', 'LAW'),
('LS101', 'LIFE SCIENCE'),
('MGMT101', 'MANAGEMENT');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `Regno` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Cid` varchar(20) NOT NULL,
  `Coursename` varchar(30) NOT NULL,
  `Cdept_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `existing`
--

CREATE TABLE `existing` (
  `regno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `existing`
--

INSERT INTO `existing` (`regno`, `email`) VALUES
('16cs1a416', '16cs1a416@kristujayanti.com'),
('16cs1a418', '16cs1a418@kristujayanti.com');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `lecture_id` int(10) NOT NULL,
  `type` varchar(30) NOT NULL,
  `path_lecture` varchar(300) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `week` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `lecture_number` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `question_id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` enum('1','2','3','4') NOT NULL,
  `week` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `part` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `dept`, `regno`, `phone`, `email`, `otp`) VALUES
('Stephen Abraham', 'CS', '16cs1a416', 7739472433, '16cs1a416@kristujayanti.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Name`, `Username`, `Password`, `Department`) VALUES
('Mohan', 'mohan@gmail.com', 'hellomohan', 'LS'),
('Suresh', 'suresh@gmail.com', 'hellosuresh', 'CS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`),
  ADD UNIQUE KEY `course_name` (`course_name`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_name` (`dept_name`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD KEY `Regno` (`Regno`),
  ADD KEY `Cid` (`Cid`),
  ADD KEY `Cdept` (`Cdept_id`),
  ADD KEY `Coursename` (`Coursename`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`lecture_id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `lecture_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `Cdept` FOREIGN KEY (`Cdept_id`) REFERENCES `course` (`dept_id`),
  ADD CONSTRAINT `Cid` FOREIGN KEY (`Cid`) REFERENCES `course` (`course_code`) ON DELETE CASCADE,
  ADD CONSTRAINT `Regno` FOREIGN KEY (`Regno`) REFERENCES `student` (`regno`) ON DELETE CASCADE;

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `course_code` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`) ON DELETE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `UserFk` FOREIGN KEY (`Username`) REFERENCES `student` (`regno`) ON DELETE CASCADE;

--
-- Constraints for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD CONSTRAINT `quizfk` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
