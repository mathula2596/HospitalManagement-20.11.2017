-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 01:50 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` varchar(10) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `L_Name` varchar(50) NOT NULL,
  `Phone` int(14) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOJ` date NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `F_Name`, `L_Name`, `Phone`, `DOB`, `Age`, `Address`, `Gender`, `Email`, `DOJ`, `username`, `password`) VALUES
('A-1001', 'a', '1', 1, '2017-10-05', 0, 'q', 'Male', 'mathu1152@gmail.com', '2017-10-05', '', ''),
('A-1002', 'a', 'a', 1, '2017-10-05', 0, '  1', 'Female', 'mathu000@gmail.com', '2017-10-05', 'A-1002', 'q'),
('A-1003', 'a', 'a', 771234567, '2017-11-07', 0, 'q', 'Male', 'hi44eert@gmail.com', '2017-11-07', 'A-1003', 'aaaaaaaaaaaaaaaa'),
('A-1004', 'efszg', 'sdd', 7712345, '2017-11-20', 0, 'dsgsd', 'Male', 'hi44eert@gmail.com', '2017-11-20', 'A-1004', '11111'),
('A-1005', 'rewrwe', 'rwerw', 22222, '2017-11-20', 0, '', 'Male', '', '0000-00-00', 'A-1005', '1111'),
('A-1006', 'w', 'w', 1111111111, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 'A-1006', '1111'),
('A-1007', 'q', 'q', 11, '0000-00-00', 0, '', 'Male', '', '2017-11-20', 'A-1007', 'qqqq'),
('A-1008', 'm', 'l', 1, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 'A-1008', '1111'),
('A-1009', 'hH', 'h', 9, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 'A-1009', 'aaaa'),
('A-1010', 'sdsd', 'dsd', 1, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 'A-1010', 'ssss'),
('A-1011', 'a', 'a', 1, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 'A-1011', 'aaaa'),
('A-1012', 'g', 'g', 11, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 'A-1012', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `A_ID` text NOT NULL,
  `P_ID` varchar(100) NOT NULL,
  `Reason` text NOT NULL,
  `Doctor_Type` varchar(10) NOT NULL,
  `Doctor_ID` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`A_ID`, `P_ID`, `Reason`, `Doctor_Type`, `Doctor_ID`, `Date`, `Time`) VALUES
('A-1032', 'p-1000', '', '2', 'D-1002', '2017-10-04', '00:00:00'),
('A-1033', 'p-1000', '', 'Choose the', '', '2017-10-02', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doctor_ID` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `type_id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_ID`, `first_name`, `last_name`, `phone`, `dob`, `age`, `address`, `gender`, `email`, `doj`, `type_id`, `username`, `password`) VALUES
('D-1000', 'aaaaaaaaaaaaa', 'a', 111, '2017-11-14', 0, '  ', 'Male', '', '0000-00-00', 4, '', 'aaaa'),
('D-1001', 'a', 'l', 54, '0000-00-00', 0, '  ', 'Male', '', '0000-00-00', 1, 'D-1001', '1111'),
('D-1002', 'aa', 'aa', 111, '0000-00-00', 0, '  ', 'Male', '', '0000-00-00', 3, 'D-1002', 'aaaa'),
('D-1003', 'aa', 'aa', 4, '2017-11-07', 0, ' nnnn', 'Male', 'hi44eert@gmail.com', '2017-11-07', 7, 'D-1003', '1111'),
('D-1004', 'a', 'a', 771234567, '2017-11-07', 0, 'sss', 'Male', 'hi44eert@gmail.com', '2017-11-07', 1, 'D-1004', 'aaaaaaaaaa'),
('D-1005', 'a', 'a', 1, '2017-11-07', 0, 'a', 'Male', 'hi44eert@gmail.com', '2017-11-07', 1, 'D-1005', 'a'),
('D-1006', 'a', 'a', 771234567, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1006', 'a'),
('D-1007', 'a', 'a', 771234567, '2017-11-07', 0, '', 'Male', '', '0000-00-00', 1, 'D-1007', 'a'),
('D-1008', 'a', 'a', 771289586, '2017-11-07', 0, 'a', 'Male', '', '0000-00-00', 1, 'D-1008', 'a'),
('D-1009', 'a', 'a', 1, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1009', 'a'),
('D-1010', 'a', 'a', 771234567, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1010', 'aaaaaaaa'),
('D-1011', 'a', 'a', 771234567, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1011', 'aaaaaaaa'),
('D-1012', 'a', 'a', 1, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1012', 'aaaaaaaaaaaaaaaa'),
('D-1013', 'a', 'a', 771234567, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1013', 'aaaaaaaaaaaaaaaa'),
('D-1014', 'a', 'u', 8, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1014', '1111'),
('D-1015', 'a', 'a', 1, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1015', '1111'),
('D-1016', 'mathu', 'la', 1, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1016', '1111'),
('D-1017', 'mathula', 'la', 1, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1017', '1234'),
('D-1018', 'a', 'aa', 1, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1018', 'aaaa'),
('D-1019', 'sangeetha', 'a', 1, '0000-00-00', 0, '', 'Male', '', '0000-00-00', 1, 'D-1019', '1111'),
('D-1020', 'aa', 'aa', 1, '0000-00-00', 0, '', 'Male', '', '2017-11-13', 1, 'D-1020', '1111'),
('D-1021', 'sada', 'dsadsa', 34234, '2017-11-20', 0, 'wert', 'Male', 'hi44eert@gmail.com', '2017-11-20', 2, 'D-1021', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_sch`
--

CREATE TABLE IF NOT EXISTS `doctor_sch` (
  `ID` varchar(10) NOT NULL,
  `M_I` time NOT NULL,
  `M_O` time NOT NULL,
  `Tu_I` time NOT NULL,
  `Tu_O` time NOT NULL,
  `W_I` time NOT NULL,
  `W_O` time NOT NULL,
  `Th_I` time NOT NULL,
  `Th_O` time NOT NULL,
  `F_I` time NOT NULL,
  `F_O` time NOT NULL,
  `Sa_I` time NOT NULL,
  `Sa_O` time NOT NULL,
  `Su_I` time NOT NULL,
  `Su_O` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_sch`
--

INSERT INTO `doctor_sch` (`ID`, `M_I`, `M_O`, `Tu_I`, `Tu_O`, `W_I`, `W_O`, `Th_I`, `Th_O`, `F_I`, `F_O`, `Sa_I`, `Sa_O`, `Su_I`, `Su_O`) VALUES
('1', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
('2', '00:22:23', '10:20:00', '11:30:00', '12:30:00', '14:00:00', '15:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
('3', '14:10:00', '18:10:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '10:10:00', '12:10:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
('4', '10:00:00', '12:00:00', '14:10:00', '15:10:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
('D-1001', '12:00:00', '14:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doc_type`
--

CREATE TABLE IF NOT EXISTS `doc_type` (
  `type_id` int(3) NOT NULL AUTO_INCREMENT,
  `doctype` varchar(30) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `h_no` varchar(10) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `d_id` varchar(10) NOT NULL,
  `symptoms` text NOT NULL,
  `history` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`h_no`, `p_id`, `d_id`, `symptoms`, `history`) VALUES
('H-1', 'sdsd', 'dsdsd', ' sdsdsds', ' dddddddddddddd'),
('H-2', 'p-1000', '1', 'sdad', ' aaaaaaaaaaaaaa'),
('H-3', 'p-1000', '2', 'qwfg ', ' 33thjefsdfsdfsdfsdfsdfdsfdsfddddddddddddddddddddddddddd'),
('H-4', 'p-1000', 'D-1000', 'dsfg', 'bn'),
('H-5', 'p-1000', 'D-1000', 'qwertyu', 'sdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `position`) VALUES
('A001', 'a', '1', 'admin'),
('D001', 'b', '2', 'doctor'),
('R001', 'c', '3', 'reception'),
('D-1013', 'D-1013', '1', 'Doctor'),
('D-1014', 'D-1014', 'a', 'Doctor'),
('R-1003', 'R-1003', 'aaa', 'Reception'),
('A-1002', 'A-1002', 'q', 'Admin'),
('D-1013', 'D-1013', 's', 'Doctor'),
('D-1014', 'D-1014', 'aaa', 'Doctor'),
('D-1015', 'D-1015', 'a', 'Doctor'),
('D-1015', 'D-1015', 'aa', 'Doctor'),
('D-1016', 'D-1016', 'kundi', 'Doctor'),
('D-1015', 'D-1015', 'a', 'Doctor'),
('D-1016', 'D-1016', 'a', 'Doctor'),
('D-1017', 'D-1017', 'aa', 'Doctor'),
('R-1003', 'R-1003', 'h', 'Reception'),
('D-1017', 'D-1017', '1', 'Doctor'),
('D-1018', 'D-1018', 'a', 'Doctor'),
('D-1020', 'D-1020', '1', 'Doctor'),
('D-1001', 'D-1001', '1111', 'Doctor'),
('D-1002', 'D-1002', 'aaaa', 'Doctor'),
('D-1003', 'D-1003', '1111', 'Doctor'),
('D-1004', 'D-1004', 'aaaaaaaaaa', 'Doctor'),
('D-1005', 'D-1005', 'a', 'Doctor'),
('D-1006', 'D-1006', 'a', 'Doctor'),
('D-1007', 'D-1007', 'a', 'Doctor'),
('D-1008', 'D-1008', 'a', 'Doctor'),
('D-1009', 'D-1009', 'a', 'Doctor'),
('D-1010', 'D-1010', 'aaaaaaaa', 'Doctor'),
('D-1011', 'D-1011', 'aaaaaaaa', 'Doctor'),
('D-1012', 'D-1012', 'aaaaaaaaaaaaaaaa', 'Doctor'),
('D-1013', 'D-1013', 'aaaaaaaaaaaaaaaa', 'Doctor'),
('A-1003', 'A-1003', 'aaaaaaaaaaaaaaaa', 'Admin'),
('D-1014', 'D-1014', '1111', 'Doctor'),
('D-1015', 'D-1015', '1111', 'Doctor'),
('D-1016', 'D-1016', '1111', 'Doctor'),
('D-1017', 'D-1017', '1234', 'Doctor'),
('D-1018', 'D-1018', 'aaaa', 'Doctor'),
('D-1019', 'D-1019', '1111', 'Doctor'),
('D-1020', 'D-1020', '1111', 'Doctor'),
('D-1021', 'D-1021', '1111', 'Doctor'),
('A-1004', 'A-1004', '11111', 'Admin'),
('A-1005', 'A-1005', '1111', 'Admin'),
('A-1006', 'A-1006', '1111', 'Admin'),
('A-1007', 'A-1007', 'qqqq', 'Admin'),
('A-1008', 'A-1008', '1111', 'Admin'),
('A-1009', 'A-1009', 'aaaa', 'Admin'),
('A-1010', 'A-1010', 'ssss', 'Admin'),
('A-1011', 'A-1011', 'aaaa', 'Admin'),
('A-1012', 'A-1012', '1111', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `ID` varchar(10) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `L_Name` varchar(50) NOT NULL,
  `Phone` int(14) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOJ` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `ID` varchar(20) NOT NULL,
  `F_Name` varchar(30) NOT NULL,
  `L_Name` varchar(30) NOT NULL,
  `C_N1` int(14) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `DOA` date NOT NULL,
  `Reason` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `F_Name`, `L_Name`, `C_N1`, `DOB`, `Age`, `Address`, `Gender`, `DOA`, `Reason`) VALUES
('P-1000', 'Mathula', 'Shan', 34567, '2005-07-06', 12, '  1111111111', 'Male', '2017-09-06', '         sdasdadafsdgf'),
('P-1001', 'swdfg', 'FG', 234, '2017-09-07', 0, '11', 'Female', '2017-09-07', '  sdsdsdaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('P-1002', 'dd', 'sdsdsds', 5565, '2008-09-07', 9, '  sdsdadadasadadadadadadadadadad', 'Female', '2017-09-07', '  sdsdsdsdsdsdsdsdsdsdsdsdsdsd'),
('P-1003', 'wqert', 'erty', 23456, '2017-09-07', 0, ' 2345', 'Male', '2017-09-07', ' 23456'),
('P-1004', 'erty', 'tyui', 7689, '2017-09-07', 0, 'tfyuio', 'Male', '2017-09-06', 'tyui'),
('P-1005', 'mathula', 'la', 123, '2017-09-08', 0, ' 1', 'Female', '2017-09-08', ' a'),
('P-1006', 'mathula', 'la', 123, '2017-09-07', 0, '  a', 'Other', '2017-09-08', '  a'),
('P-1007', 'aaa', 'retyu', 45678, '2017-09-08', 0, '45678', 'Female', '2017-09-07', '45678'),
('P-1008', 'QW', 'qwqwe', 223, '2017-10-12', 0, 'eqwe', 'Male', '2017-10-12', 'qqwq'),
('P-1009', 'qwef', 'wwwwwwww', 2147483647, '2017-10-12', 0, '22222222222', 'Male', '2017-10-12', '22222222222222'),
('P-1010', 'mathula', 'qwerty', 2345678, '2014-11-20', 3, ' wrer', 'Male', '2017-11-20', ' qqerety');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `ID` int(11) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `P_ID` varchar(10) NOT NULL,
  `Total` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `C_ID`, `P_ID`, `Total`, `date`) VALUES
(0, '', '', '', '0000-00-00'),
(0, '', '', '', '0000-00-00'),
(0, '', '', '', '0000-00-00'),
(1, 'a', 'P-', '$0.00', '0000-00-00'),
(1, 'a', 'P-', '', '0000-00-00'),
(1, 'a', 'P-', '$0.00', '0000-00-00'),
(1, 'a', 'P-', '', '0000-00-00'),
(1, 'a', 'P-', '', '0000-00-00'),
(2, 'a', 'P-', '', '0000-00-00'),
(3, 'a', 'P-', '$100.00', '0000-00-00'),
(4, 'a', 'P-', '$2.00', '0000-00-00'),
(5, 'a', 'P-', '$2.00', '0000-00-00'),
(6, 'a', 'P-', '$2.00', '0000-00-00'),
(7, 'a', 'P-', 'Enter total', '0000-00-00'),
(8, 'a', 'P-', 'Enter total', '0000-00-00'),
(9, 'a', 'P-', 'Enter total', 'October 25, 2017'),
(10, 'a', 'p-1000', '$100.00', 'November 11, 2017'),
(11, 'a', 'p-1000', '$-9.00', 'November 20, 2017'),
(12, 'a', 'P-1001', '$11.00', 'November 20, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `receiptionist`
--

CREATE TABLE IF NOT EXISTS `receiptionist` (
  `ID` varchar(10) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `L_Name` varchar(50) NOT NULL,
  `Phone` int(14) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOJ` date NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiptionist`
--

INSERT INTO `receiptionist` (`ID`, `F_Name`, `L_Name`, `Phone`, `DOB`, `Age`, `Address`, `Gender`, `Email`, `DOJ`, `username`, `password`) VALUES
('R-1000', 'a', '1', 771289586, '2013-10-05', 4, '  ssss', 'Male', 'mathu000@gmail.com', '2017-10-05', '', '1'),
('R-1001', 'a', '1', 1, '2017-10-05', 0, 'a', 'Male', 'mathu1152@gmail.com', '2017-10-05', '', ''),
('R-1002', '', 'a', 0, '0000-00-00', 0, '  aaaa', 'Male', '', '0000-00-00', 'R-1002', '000'),
('R-1003', 'rtyu', 'tyuio', 6789, '2017-10-21', 0, '789', 'Male', 'hi44eert@gmail.com', '2017-10-21', 'R-1003', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `rec_sch`
--

CREATE TABLE IF NOT EXISTS `rec_sch` (
  `ID` varchar(10) NOT NULL,
  `M_I` time NOT NULL,
  `M_O` time NOT NULL,
  `Tu_I` time NOT NULL,
  `Tu_O` time NOT NULL,
  `W_I` time NOT NULL,
  `W_O` time NOT NULL,
  `Th_I` time NOT NULL,
  `Th_O` time NOT NULL,
  `F_I` time NOT NULL,
  `F_O` time NOT NULL,
  `Sa_I` time NOT NULL,
  `Sa_O` time NOT NULL,
  `Su_I` time NOT NULL,
  `Su_O` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rec_sch`
--

INSERT INTO `rec_sch` (`ID`, `M_I`, `M_O`, `Tu_I`, `Tu_O`, `W_I`, `W_O`, `Th_I`, `Th_O`, `F_I`, `F_O`, `Sa_I`, `Sa_O`, `Su_I`, `Su_O`) VALUES
('1', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
('2', '10:00:00', '11:00:00', '11:00:00', '12:00:00', '01:00:00', '02:00:00', '11:00:00', '12:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
('R-1000', '17:24:00', '19:25:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '17:25:00', '21:25:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `resign_doc`
--

CREATE TABLE IF NOT EXISTS `resign_doc` (
  `doctor_ID` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `type_id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resign_doc`
--

INSERT INTO `resign_doc` (`doctor_ID`, `first_name`, `last_name`, `phone`, `dob`, `age`, `address`, `gender`, `email`, `doj`, `type_id`, `username`, `password`) VALUES
('', '', '', 0, '0000-00-00', 0, '', '', '', '0000-00-00', 0, '', ''),
('D-1005', '', '', 0, '0000-00-00', 0, '', '', '', '0000-00-00', 0, '', ''),
('D-1006', '', '', 0, '0000-00-00', 0, '', '', '', '0000-00-00', 0, '', ''),
('D-1007, f_', '', '', 0, '0000-00-00', 0, '', '', '', '0000-00-00', 0, '', ''),
('D-1008 f_n', '', '', 0, '0000-00-00', 0, '', '', '', '0000-00-00', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `scan`
--

CREATE TABLE IF NOT EXISTS `scan` (
  `s_id` varchar(10) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `d_id` varchar(10) NOT NULL,
  `parts` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scan`
--

INSERT INTO `scan` (`s_id`, `p_id`, `d_id`, `parts`, `date`, `time`, `payment`) VALUES
('S-1', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE IF NOT EXISTS `theater` (
  `o_no` varchar(10) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `d_id` varchar(10) NOT NULL,
  `parts` varchar(20) NOT NULL,
  `Reason` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`o_no`, `p_id`, `d_id`, `parts`, `Reason`, `date`, `time`) VALUES
('O-5', 'p-1000', '1a', 'Right Hand', '   1asasasas', '2017-10-19', '14:58:00'),
('O-6', 'P-1001', '2', 'Head', 'www', '2017-11-01', '19:10:00'),
('O-7', '0', '1', 'Left Hand', 'sd', '2017-11-18', '07:27:00'),
('O-8', '1', '1', 'Right Leg', 'q', '2017-11-18', '09:23:00'),
('O-9', 'p-1000', 'D-1000', 'Left Hand', 'jrkjhr', '2017-11-20', '11:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `therapists`
--

CREATE TABLE IF NOT EXISTS `therapists` (
  `ID` varchar(10) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `L_Name` varchar(50) NOT NULL,
  `Phone` int(14) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOJ` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(3) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type`) VALUES
(1, 'General'),
(2, 'Dentist '),
(3, 'Surgen'),
(4, 'Eye specialist'),
(5, 'Neurologist'),
(6, 'Physiatrist'),
(7, 'Chemist');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE IF NOT EXISTS `ward` (
  `Ad_No` varchar(10) NOT NULL,
  `P_ID` varchar(10) NOT NULL,
  `Reason` text NOT NULL,
  `Days` varchar(10) NOT NULL,
  `W_No` varchar(10) NOT NULL,
  `D_O_A` date NOT NULL,
  KEY `W_No` (`W_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`Ad_No`, `P_ID`, `Reason`, `Days`, `W_No`, `D_O_A`) VALUES
('W-3', 'p-1001', '', '1', '1', '2017-11-02'),
('W-4', 'p-1000', 'fsfsd', '10', '12', '2017-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `ward_no`
--

CREATE TABLE IF NOT EXISTS `ward_no` (
  `bed` int(11) NOT NULL,
  PRIMARY KEY (`bed`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward_no`
--

INSERT INTO `ward_no` (`bed`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30);

-- --------------------------------------------------------

--
-- Table structure for table `xray`
--

CREATE TABLE IF NOT EXISTS `xray` (
  `x_id` varchar(10) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `d_id` varchar(10) NOT NULL,
  `part` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xray`
--

INSERT INTO `xray` (`x_id`, `p_id`, `d_id`, `part`, `date`, `time`, `payment`) VALUES
('X-1', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('', '', '', '', '0000-00-00', '00:00:00', ''),
('<br /><b>N', 'sss', 'sssssss', '04:48', '0000-00-00', '00:00:00', '2019-12-21'),
('', '', '', '', '0000-00-00', '00:00:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
