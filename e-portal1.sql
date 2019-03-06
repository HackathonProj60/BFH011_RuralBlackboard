-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 05:57 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-portal1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(30) NOT NULL,
  `admin_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `admin_name`) VALUES
(1, 'administrator', 'HOD');

-- --------------------------------------------------------

--
-- Table structure for table `admin_sec`
--

CREATE TABLE `admin_sec` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(30) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_sec`
--

INSERT INTO `admin_sec` (`id`, `admin_id`, `pass`) VALUES
(1, 'administrator', '$2y$10$Nj.99bvU60pbjkOOo9M2zOvSivwNQvgADqF65Tgob.mdkrrGVVSKi');

-- --------------------------------------------------------

--
-- Table structure for table `college_entity`
--

CREATE TABLE `college_entity` (
  `id` int(11) NOT NULL,
  `entity_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_entity`
--

INSERT INTO `college_entity` (`id`, `entity_name`) VALUES
(1, 'AUTONOMOUS'),
(2, 'MANAGEMENT'),
(3, 'LAW');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL DEFAULT '010',
  `course_name` varchar(50) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `course_desc` varchar(500) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `week` int(11) NOT NULL,
  `dept_id` varchar(30) NOT NULL,
  `staff_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `Author`, `course_desc`, `pic`, `start_date`, `end_date`, `week`, `dept_id`, `staff_id`) VALUES
(6, 'BCA202', 'HTML', 'Author1', 'HTML desc', '', '2018-12-06', '2019-02-28', 2, 'CS101', '1101'),
(7, 'BCA203', 'php', 'Author2', 'php', '', '2018-11-29', '2019-02-28', 8, 'CS101', '1101'),
(8, 'BCA204', 'Python', 'Author 3', 'python', '', '2018-11-30', '2019-02-28', 6, 'CS101', '1101'),
(13, 'BCA205', 'PyCharm', 'Author 4', 'ash', '', '2019-01-01', '2019-02-28', 4, 'CS101', '1101'),
(1, 'com101', 'commerce', 'Author 5', 'commerce descibe', '', '2018-11-29', '2019-02-28', 4, 'COMDEPT101', '1101'),
(3, 'HUMi101', 'humanity', 'Author 6', 'humanity describe', '', '2018-11-29', '2019-02-28', 2, 'HUM101', '1101'),
(4, 'Life102', 'Life Science-2', 'Author 7 ', 'life science 2 describe', '', '2018-11-29', '2019-02-28', 5, 'LS101', '1101'),
(5, 'MGT101', 'Management ', 'Author 8', 'management decribe', '', '2018-11-29', '2019-02-28', 3, 'MGTDEPT101', '1101');

-- --------------------------------------------------------

--
-- Table structure for table `deanery`
--

CREATE TABLE `deanery` (
  `id` int(11) NOT NULL,
  `dean_id` varchar(30) NOT NULL,
  `dean_name` varchar(50) NOT NULL,
  `entity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deanery`
--

INSERT INTO `deanery` (`id`, `dean_id`, `dean_name`, `entity_id`) VALUES
(3, 'COMMGT101', 'DEANERY OF COMMERCE AND MANAGEMENT', 1),
(2, 'HUMANITIES101', 'DEANERY OF HUMANITIES', 1),
(1, 'SCIENCE101', 'DEANERY OF SCIENCE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept_id` varchar(30) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `dean_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_id`, `dept_name`, `dean_id`) VALUES
(4, 'COMDEPT101', 'COMMERCE', 'COMMGT101'),
(1, 'CS101', 'COMPUTER SCIENCE', 'SCIENCE101'),
(5, 'HUM101', 'PSYCHOLOGY', 'HUMANITIES101'),
(2, 'LS101', 'LIFE SCIENCE', 'SCIENCE101'),
(3, 'MGTDEPT101', 'MANAGEMENT', 'COMMGT101');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `id` int(11) NOT NULL,
  `enroll_code` varchar(25) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `week` int(3) NOT NULL DEFAULT '0',
  `lect` int(3) NOT NULL DEFAULT '0',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`id`, `enroll_code`, `reg_no`, `course_code`, `week`, `lect`, `start_date`, `end_date`) VALUES
(13, '17cs1a1014BCA202', '17cs1a1014', 'BCA202', 1, 7, '0000-00-00', '2019-01-31'),
(22, '17cs1a4192BCA202', '17cs1a4192', 'BCA202', 0, 0, '2019-02-16', '2019-03-02'),
(21, '17cs1a4192BCA203', '17cs1a4192', 'BCA203', 0, 0, '2019-02-16', '2019-04-13'),
(16, '17cs1a4199BCA204', '17cs1a4199', 'BCA204', 13, 7, '2019-01-03', '2019-01-08'),
(2, '17cs1h4216com1012', '17cs1h4216', 'com101', 1, 1, '0000-00-00', '2019-01-08'),
(3, '18cs2h4224HUMi1013', '18cs2h4224', 'HUMi101', 1, 1, '0000-00-00', '2019-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `path` varchar(100) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `week` int(11) NOT NULL,
  `lect_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id`, `type`, `path`, `course_code`, `week`, `lect_no`) VALUES
(19, 'application/pdf', 'Departments/CS101/BCA202/1/1/portable.pdf', 'BCA202', 1, 1),
(20, 'application/pdf', 'Departments/CS101/BCA202/1/2/portable.pdf', 'BCA202', 1, 2),
(21, 'application/pdf', 'Departments/CS101/BCA202/1/3/portable.pdf', 'BCA202', 1, 3),
(22, 'application/pdf', 'Departments/CS101/BCA202/1/4/portable.pdf', 'BCA202', 1, 4),
(23, 'application/pdf', 'Departments/CS101/BCA204/1/1/portable.pdf', 'BCA204', 1, 1),
(24, 'application/pdf', 'Departments/CS101/BCA204/1/2/portable.pdf', 'BCA204', 1, 2),
(25, 'application/pdf', 'Departments/CS101/BCA204/1/3/portable.pdf', 'BCA204', 1, 3),
(26, 'application/pdf', 'Departments/CS101/BCA204/1/4/portable.pdf', 'BCA204', 1, 4),
(27, 'application/pdf', 'Departments/COMDEPT101/com101/1/1/portable.pdf', 'com101', 1, 1),
(28, 'application/pdf', 'Departments/COMDEPT101/com101/1/2/portable.pdf', 'com101', 1, 2),
(29, 'application/pdf', 'Departments/COMDEPT101/com101/1/3/portable.pdf', 'com101', 1, 3),
(30, 'application/pdf', 'Departments/COMDEPT101/com101/1/4/portable.pdf', 'com101', 1, 4),
(31, 'application/pdf', 'Departments/HUM101/HUMi101/1/1/portable.pdf', 'HUMi101', 1, 1),
(32, 'application/pdf', 'Departments/HUM101/HUMi101/1/2/portable.pdf', 'HUMi101', 1, 2),
(33, 'application/pdf', 'Departments/HUM101/HUMi101/1/3/portable.pdf', 'HUMi101', 1, 3),
(34, 'application/pdf', 'Departments/HUM101/HUMi101/1/4/portable.pdf', 'HUMi101', 1, 4),
(37, 'video/mp4', 'Departments/CS101/BCA202/2/1/video.mp4', 'BCA202', 2, 1),
(38, 'application/pdf', 'Departments/CS101/BCA202/2/2/portable.pdf', 'BCA202', 2, 2),
(39, 'video/mp4', 'Departments/CS101/BCA202/2/3/video.mp4', 'BCA202', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `ques` varchar(500) NOT NULL,
  `opt1` varchar(30) NOT NULL,
  `opt2` varchar(30) NOT NULL,
  `opt3` varchar(30) NOT NULL,
  `opt4` varchar(30) NOT NULL,
  `ans` enum('1','2','3','4') NOT NULL,
  `week` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `course_code`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `week`) VALUES
(13, 'BCA202', 'what is html ?', 'scripting language', 'programming language', 'complier', 'debugger', '1', '1'),
(14, 'BCA202', 'what is a tag?', '<>', '!!', '@@', '$$', '1', '1'),
(15, 'BCA202', 'full form of html?', 'hyper test language', 'markup language', 'hyper text markup language', 'none of the above', '3', '1'),
(16, 'BCA204', 'arshad kaisa hai', 'aacha', 'gandha', 'bahut gandha', 'apram par hai', '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `reg_no`, `email`, `dept`, `name`) VALUES
(6, '16cs1a416', '16cs1a416@kristujayanti.com', 'cs', 'Stephen'),
(2, '17cs1a1011', '17cs1a1011@kristujayanti.com', 'CS', 'Anwesha Saha'),
(5, '17cs1a1014', '17cs1a1014@kristujayanti.com', 'cs', 'Harsh'),
(1, '17cs1a4192', '17cs1a4192@kristujayanti.com', 'CS', 'Ashish Kumar'),
(4, '17CS1A4194', '17CS1A4194@kristujayanti.com', 'cs', 'Harisha'),
(7, '17cs1a4199', '17cs1a4199@kristuijayanti.com', 'cs', 'Arshad'),
(8, '17cs1h4216', '17cs1h4216@kristujayanti.com', 'cs', 'rahil'),
(3, '17cs3h1023', '17cs3h1023@kristujayanti.com', 'cs', 'Akshay');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `enroll_code` varchar(25) NOT NULL,
  `week` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `attempt` int(1) NOT NULL DEFAULT '0',
  `score` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `enroll_code`, `week`, `attempt`, `score`) VALUES
(684, '17cs1a1014BCA202', '1', 1, 1),
(685, '17cs1a1014BCA202', '2', 0, 1),
(701, '17cs1a4199BCA204', '1', 0, 0),
(702, '17cs1a4199BCA204', '2', 0, 0),
(703, '17cs1a4199BCA204', '3', 0, 0),
(704, '17cs1a4199BCA204', '4', 0, 0),
(705, '17cs1a4199BCA204', '5', 0, 0),
(706, '17cs1a4199BCA204', '6', 0, 0),
(711, '17cs1a4192BCA203', '1', 0, 0),
(712, '17cs1a4192BCA203', '2', 0, 0),
(713, '17cs1a4192BCA203', '3', 0, 0),
(714, '17cs1a4192BCA203', '4', 0, 0),
(715, '17cs1a4192BCA203', '5', 0, 0),
(716, '17cs1a4192BCA203', '6', 0, 0),
(717, '17cs1a4192BCA203', '7', 0, 0),
(718, '17cs1a4192BCA203', '8', 0, 0),
(719, '17cs1a4192BCA202', '1', 0, 0),
(720, '17cs1a4192BCA202', '2', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `staff_name` char(50) NOT NULL,
  `dept_id` varchar(30) NOT NULL,
  `privelege` enum('000','001','010','100','101','110','111','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `staff_name`, `dept_id`, `privelege`) VALUES
(1, '1101', 'SPA', 'CS101', '000'),
(2, '16cs1a416@kristujayanti.com', 'new', 'CS101', '110');

-- --------------------------------------------------------

--
-- Table structure for table `staff_sec`
--

CREATE TABLE `staff_sec` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(30) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_sec`
--

INSERT INTO `staff_sec` (`id`, `staff_id`, `pass`) VALUES
(1, '1101', '$2y$10$Nj.99bvU60pbjkOOo9M2zOvSivwNQvgADqF65Tgob.mdkrrGVVSKi'),
(2, '16cs1a416@kristujayanti.com', 'newpassword7');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `stud_name` char(50) NOT NULL,
  `dept_id` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `reg_no`, `stud_name`, `dept_id`, `phone`, `email`, `img_path`) VALUES
(10, '17cs1a1014', 'Harsh Sharma', 'CS101', 7760891643, '17cs1a1014@kristujayanti.com', 'ProfilePic/17cs1a1014.jpg'),
(6, '17cs1a4192', 'Ashish Kumar', 'CS101', 9110679711, '17CS1A4192@kristujayanti.com', 'ProfilePic/17cs1a4192.jpg'),
(8, '17cs1a4194', 'Harisha', 'CS101', 7899790063, '17cs1a4194@kristujayanti.com', NULL),
(11, '17cs1a4199', 'Arshad Ahamad', 'CS101', 9821140433, '17cs1a4199@kristujayanti.com', NULL),
(1, '17cs1h4216', 'Mohammed Rahil Ovaiz', 'COMDEPT101', 8197508522, '17cs1h4216@kristujayanti.', ''),
(7, '17cs3h1023', 'Akshay', 'CS101', 8310028834, '17cs3h1023@kristujayanti.com', NULL),
(3, '18cs2h4224', 'Shashi Kant', 'HUM101', 7899284215, '18cs2h4224@kristujayanti.', '');

-- --------------------------------------------------------

--
-- Table structure for table `stud_sec`
--

CREATE TABLE `stud_sec` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_sec`
--

INSERT INTO `stud_sec` (`id`, `reg_no`, `pass`) VALUES
(2, '17cs1h4216', 'kjc@com'),
(3, '18cs2h4224', 'kjc@com'),
(4, '17cs1a4192', '$2y$10$CFEzR5e9er7f8jq1rlAye.NM3nXlqmosX9hSGNjalr0jDE/LNEOUW'),
(5, '17cs3h1023', '$2y$10$F.RtDswZQCgyxwylYPxbH.T5eLZH5m0o0FXauGIySK9yKYyPxYHwC'),
(6, '17cs1a4194', '$2y$10$2jTnlc8aOe7Vgn1mJNEg.O1gYazo7k3TWl/tlK1K9t54OuKUlRsHS'),
(7, '17cs1a1014', '$2y$10$XVeeUwruk6zvkCm3Xd.HROmfykyJRlAHR7bdyyiIpAiQq2uZeecfK'),
(8, '17cs1a4199', '$2y$10$JvjHZ2Mx7AJuY34gJJX9TOJi1PK3FoeccPX2RJQQcYD.5fTGqqk82');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `admin_sec`
--
ALTER TABLE `admin_sec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `college_entity`
--
ALTER TABLE `college_entity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `course_name` (`course_name`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `deanery`
--
ALTER TABLE `deanery`
  ADD PRIMARY KEY (`dean_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `entity_id` (`entity_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `dean_id` (`dean_id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_code`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `course_code` (`course_code`),
  ADD KEY `reg_no` (`reg_no`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`reg_no`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enroll_code` (`enroll_code`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `staff_sec`
--
ALTER TABLE `staff_sec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `stud_sec`
--
ALTER TABLE `stud_sec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reg_no` (`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_sec`
--
ALTER TABLE `admin_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `college_entity`
--
ALTER TABLE `college_entity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `deanery`
--
ALTER TABLE `deanery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=721;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff_sec`
--
ALTER TABLE `staff_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `stud_sec`
--
ALTER TABLE `stud_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_sec`
--
ALTER TABLE `admin_sec`
  ADD CONSTRAINT `admin_sec_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE;

--
-- Constraints for table `deanery`
--
ALTER TABLE `deanery`
  ADD CONSTRAINT `deanery_ibfk_1` FOREIGN KEY (`entity_id`) REFERENCES `college_entity` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`dean_id`) REFERENCES `deanery` (`dean_id`) ON DELETE CASCADE;

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `courses` (`course_code`) ON DELETE CASCADE,
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`) ON DELETE CASCADE;

--
-- Constraints for table `lecture`
--
ALTER TABLE `lecture`
  ADD CONSTRAINT `lecture_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `courses` (`course_code`) ON DELETE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `courses` (`course_code`) ON DELETE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`enroll_code`) REFERENCES `enroll` (`enroll_code`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `staff_sec`
--
ALTER TABLE `staff_sec`
  ADD CONSTRAINT `staff_sec_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `stud_sec`
--
ALTER TABLE `stud_sec`
  ADD CONSTRAINT `stud_sec_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
