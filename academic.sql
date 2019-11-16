-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2019 at 09:04 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'aryan', 'aryan');

-- --------------------------------------------------------

--
-- Table structure for table `depatment`
--

DROP TABLE IF EXISTS `depatment`;
CREATE TABLE IF NOT EXISTS `depatment` (
  `dname` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_credit` varchar(50) NOT NULL,
  `syllabus` varchar(50) NOT NULL,
  PRIMARY KEY (`dname`,`course_id`) USING BTREE,
  UNIQUE KEY `course_id` (`course_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depatment`
--

INSERT INTO `depatment` (`dname`, `course_id`, `course_name`, `course_credit`, `syllabus`) VALUES
('cse', 'cspc24', 'dbms', '3', 'WhatsApp Image 2019-09-10 at 10.46.49 PM.jpeg'),
('ece', 'epc24', 'networking', '4', 'not avi');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `batch` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `exam_date` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `test_type` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY (`batch`,`course_id`,`test_type`),
  KEY `department` (`department`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

DROP TABLE IF EXISTS `fee`;
CREATE TABLE IF NOT EXISTS `fee` (
  `rollno` varchar(50) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  PRIMARY KEY (`trans_id`,`rollno`) USING BTREE,
  UNIQUE KEY `trans_id` (`trans_id`),
  KEY `rollno` (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`rollno`, `trans_id`, `sem`, `total`) VALUES
('cse17u004', 'dfghjk', '8', '88000');

-- --------------------------------------------------------

--
-- Table structure for table `lib`
--

DROP TABLE IF EXISTS `lib`;
CREATE TABLE IF NOT EXISTS `lib` (
  `rollno` varchar(50) NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `issued_date` varchar(50) NOT NULL,
  `return_date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`issued_date`,`rollno`,`book_id`) USING BTREE,
  KEY `rollno` (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib`
--

INSERT INTO `lib` (`rollno`, `book_id`, `book_name`, `issued_date`, `return_date`) VALUES
('cse17u004', 'sdfghj', 'dbms', '4.5.19', '');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

DROP TABLE IF EXISTS `ques`;
CREATE TABLE IF NOT EXISTS `ques` (
  `course_id` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `test_type` varchar(50) NOT NULL,
  `paper` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`course_id`,`date`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`course_id`, `duration`, `date`, `test_type`, `paper`) VALUES
('cspc24', '3', '25.3.2019', 'ct2', 'Front Page-Final-DS.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `rollno` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_grade` varchar(50) NOT NULL,
  `status` varchar(60) NOT NULL,
  `test_type` varchar(50) NOT NULL,
  PRIMARY KEY (`rollno`,`course_id`,`test_type`) USING BTREE,
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rollno`, `course_id`, `course_grade`, `status`, `test_type`) VALUES
('cse17u004', 'cspc24', 'a++', 'pass  ', 'ct2');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `batch` varchar(20) DEFAULT NULL,
  `dept` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dept` (`dept`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `dob`, `address`, `mobile_no`, `e-mail`, `batch`, `dept`) VALUES
('cse17u004', 'aryan', '24-9-1998', 'trichy', '999999999999', 'svg@db.com', '2017', 'cse'),
('cse17u013', 'Nikit', '15-06-1998', 'trichy', '5555555555', 'svttg@db.com', '2017', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

DROP TABLE IF EXISTS `student1`;
CREATE TABLE IF NOT EXISTS `student1` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `batch` varchar(40) NOT NULL,
  `dept` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dept` (`dept`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dname` varchar(40) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `mob` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salaray` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dname` (`dname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `dname`, `dob`, `addr`, `mob`, `email`, `salaray`) VALUES
('8', 'sk pandey', 'cse', '24-9-1998', 'trichy', '95878714289', 'asdfghj@dcv.com', '88000'),
('aryan', 'aryan', 'cse', '1-4-1998', '5vgvg', '45599159', 'bgvgv@gvvs.com', '5165');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`department`) REFERENCES `depatment` (`dname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `depatment` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lib`
--
ALTER TABLE `lib`
  ADD CONSTRAINT `lib_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ques`
--
ALTER TABLE `ques`
  ADD CONSTRAINT `ques_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `depatment` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `depatment` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dept`) REFERENCES `depatment` (`dname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`dname`) REFERENCES `depatment` (`dname`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
