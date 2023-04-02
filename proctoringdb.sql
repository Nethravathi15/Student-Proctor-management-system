-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 05:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proctoringdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `proctoring_admin`
--

CREATE TABLE `proctoring_admin` (
  `id` int(10) NOT NULL,
  `proctoring_admin_name` varchar(200) NOT NULL,
  `proctoring_admin_email` varchar(200) NOT NULL,
  `proctoring_admin_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proctoring_admin`
--

INSERT INTO `proctoring_admin` (`id`, `proctoring_admin_name`, `proctoring_admin_email`, `proctoring_admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `proctoring_faculty`
--

CREATE TABLE `proctoring_faculty` (
  `id` int(10) NOT NULL,
  `proctoring_faculty_name` varchar(255) NOT NULL,
  `proctoring_faculty_gender` varchar(255) NOT NULL,
  `proctoring_faculty_fid` varchar(255) NOT NULL,
  `proctoring_faculty_semester` varchar(255) NOT NULL,
  `proctoring_faculty_department` varchar(255) NOT NULL,
  `proctoring_faculty_subject` varchar(255) NOT NULL,
  `proctoring_faculty_phone` varchar(255) NOT NULL,
  `proctoring_faculty_email` varchar(255) NOT NULL,
  `proctoring_faculty_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proctoring_faculty`
--

INSERT INTO `proctoring_faculty` (`id`, `proctoring_faculty_name`, `proctoring_faculty_gender`, `proctoring_faculty_fid`, `proctoring_faculty_semester`, `proctoring_faculty_department`, `proctoring_faculty_subject`, `proctoring_faculty_phone`, `proctoring_faculty_email`, `proctoring_faculty_password`) VALUES
(15, 'Raghavendra Rao RV', 'male', 'Fa101', '', '', '', '9980016705', 'rr.mca@bmsce.ac.in', 'rr@1234'),
(17, 'Raghavendra Rao RV', 'male', 'Fa101', '', '', '', '9980016705', 'rr.mca@bmsce.ac.in', 'ragha123');

-- --------------------------------------------------------

--
-- Table structure for table `proctoring_marks`
--

CREATE TABLE `proctoring_marks` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `internals` varchar(50) DEFAULT NULL,
  `marks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proctoring_student`
--

CREATE TABLE `proctoring_student` (
  `id` int(10) NOT NULL,
  `proctoring_student_name` varchar(255) NOT NULL,
  `proctoring_student_gender` varchar(255) NOT NULL,
  `proctoring_student_usn` varchar(255) NOT NULL,
  `proctoring_student_semester` varchar(255) NOT NULL,
  `proctoring_student_department` varchar(255) NOT NULL,
  `proctoring_student_phone` varchar(255) NOT NULL,
  `proctoring_student_email` varchar(255) NOT NULL,
  `Pswd` varchar(50) NOT NULL,
  `Proctor` varchar(50) NOT NULL DEFAULT '--'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proctoring_student`
--

INSERT INTO `proctoring_student` (`id`, `proctoring_student_name`, `proctoring_student_gender`, `proctoring_student_usn`, `proctoring_student_semester`, `proctoring_student_department`, `proctoring_student_phone`, `proctoring_student_email`, `Pswd`, `Proctor`) VALUES
(17, 'Pragna M', 'female', '1BM20MC035', '', '', '9740628098', 'pragna.mca20@bmsce.ac.in', 'Password123', '--'),
(18, 'Nethravathi K', 'female', '1BM20MC031', '', '', '7411508395', 'nethravathi.mca20@bmsce.ac.in', 'Password123', 'Raghavendra Rao RV');

-- --------------------------------------------------------

--
-- Table structure for table `proctoring_studentdetails`
--

CREATE TABLE `proctoring_studentdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `dob` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `USN` varchar(250) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `pAddress` varchar(250) DEFAULT NULL,
  `Father` varchar(250) DEFAULT NULL,
  `foccupation` varchar(250) DEFAULT NULL,
  `fnum` varchar(250) DEFAULT NULL,
  `Mother` varchar(250) DEFAULT NULL,
  `moccupation` varchar(250) DEFAULT NULL,
  `mnum` varchar(250) DEFAULT NULL,
  `lgname` varchar(250) DEFAULT NULL,
  `loccupation` varchar(250) DEFAULT NULL,
  `lnum` varchar(250) DEFAULT NULL,
  `Accommodation` varchar(250) DEFAULT NULL,
  `MOA` varchar(250) DEFAULT NULL,
  `Rank` varchar(250) DEFAULT NULL,
  `KMAT` varchar(250) DEFAULT NULL,
  `Class10` varchar(250) DEFAULT NULL,
  `Class10Board` varchar(250) DEFAULT NULL,
  `Class10per` varchar(250) DEFAULT NULL,
  `Class10cgpa` varchar(250) DEFAULT NULL,
  `Class12` varchar(250) DEFAULT NULL,
  `Class12Board` varchar(250) DEFAULT NULL,
  `Class12per` varchar(250) DEFAULT NULL,
  `Class12cgpa` varchar(250) DEFAULT NULL,
  `DegreeSpecilization` varchar(250) DEFAULT NULL,
  `yop` varchar(250) DEFAULT NULL,
  `dboard` varchar(250) DEFAULT NULL,
  `degmarks` varchar(250) DEFAULT NULL,
  `degcgpa` varchar(250) DEFAULT NULL,
  `Scholarship` varchar(250) DEFAULT NULL,
  `Achievements` varchar(250) DEFAULT NULL,
  `ExtraCurricilarAchievements` varchar(250) DEFAULT NULL,
  `Health` varchar(250) DEFAULT NULL,
  `other` varchar(250) DEFAULT NULL,
  `Class10School` varchar(50) NOT NULL,
  `Class12College` varchar(50) NOT NULL,
  `DegreeCollege` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proctoring_studentdetails`
--

INSERT INTO `proctoring_studentdetails` (`id`, `name`, `dob`, `phone`, `email`, `USN`, `Address`, `pAddress`, `Father`, `foccupation`, `fnum`, `Mother`, `moccupation`, `mnum`, `lgname`, `loccupation`, `lnum`, `Accommodation`, `MOA`, `Rank`, `KMAT`, `Class10`, `Class10Board`, `Class10per`, `Class10cgpa`, `Class12`, `Class12Board`, `Class12per`, `Class12cgpa`, `DegreeSpecilization`, `yop`, `dboard`, `degmarks`, `degcgpa`, `Scholarship`, `Achievements`, `ExtraCurricilarAchievements`, `Health`, `other`, `Class10School`, `Class12College`, `DegreeCollege`) VALUES
(4, 'Nethravathi K', '2000-06-15', '7411508395', 'nethravathi.mca20@bmsce.ac.in', '1BM20MC031', 'No 156, Kariyanpalya, BSK, 6th Stage, 2nd Block, Bangalore - 98', 'No 156, Kariyanpalya, BSK, 6th Stage, 2nd Block, Bangalore - 98', 'Kariyallappa', 'Farmer', '9611255258', 'Rajamma', 'Home Maker', '8217890578', 'Kariyallappa', 'Farmer', '9611255258', 'Day Scholar', 'PGCET', '245', 'NA', '2015', 'SSLC Board', '75', '7.8', '2017', 'PUC', '56', '5.8', 'Bachelor of Computer Applications', '2020', 'Bangalore University', '82', '7.66', 'NA', 'NA', '', 'NA', 'NA', 'Gosepel International School', 'RNS College', 'RNS Degree College');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proctoring_admin`
--
ALTER TABLE `proctoring_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proctoring_faculty`
--
ALTER TABLE `proctoring_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proctoring_marks`
--
ALTER TABLE `proctoring_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proctoring_student`
--
ALTER TABLE `proctoring_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proctoring_studentdetails`
--
ALTER TABLE `proctoring_studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proctoring_admin`
--
ALTER TABLE `proctoring_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proctoring_faculty`
--
ALTER TABLE `proctoring_faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `proctoring_marks`
--
ALTER TABLE `proctoring_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `proctoring_student`
--
ALTER TABLE `proctoring_student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `proctoring_studentdetails`
--
ALTER TABLE `proctoring_studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
