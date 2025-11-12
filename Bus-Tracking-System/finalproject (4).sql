-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2022 at 04:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_admin`
--

CREATE TABLE `add_admin` (
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Phone_Number` bigint(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_admin`
--

INSERT INTO `add_driver` (`Bus_No`, `Driver_Name`, `Email`, `Cont_Num`, `Address`, `Photo`) VALUES
(45, 'Abhishek Choudhary', 'abhishekchaudhary3e@gmail.com', 7499194796, '72CW+W5X, Atlanta Residency, Kamatghar - Anjurphata Rd, Opp. Oswal School, Kamatghar, Bhiwandi, Maharashtra 421302', 'abhishek.jpg'),
(18, 'Maggi Choudhary', 'maggi.choudhary@gmail.com', 7499194797, '72CW+W5X, Atlanta Residency, Kamatghar - Anjurphata Rd, Opp. Oswal School, Kamatghar, Bhiwandi, Maharashtra 421302', 'maggi.jpg'),
(20, 'Raju Choudhary', 'raju.choudhary@gmail.com', 7499194798, '72CW+W5X, Atlanta Residency, Kamatghar - Anjurphata Rd, Opp. Oswal School, Kamatghar, Bhiwandi, Maharashtra 421302', 'raju.jpg'),
(22, 'Suman Choudhary', 'suman.choudhary@gmail.com', 7499194799, '72CW+W5X, Atlanta Residency, Kamatghar - Anjurphata Rd, Opp. Oswal School, Kamatghar, Bhiwandi, Maharashtra 421302', 'suman.jpg'),
(40, 'Rita Choudhary', 'rita.choudhary@gmail.com', 7499194800, '72CW+W5X, Atlanta Residency, Kamatghar - Anjurphata Rd, Opp. Oswal School, Kamatghar, Bhiwandi, Maharashtra 421302', 'rita.jpg'),
(55, 'Ravi Choudhary', 'ravi.choudhary@gmail.com', 7499194801, '72CW+W5X, Atlanta Residency, Kamatghar - Anjurphata Rd, Opp. Oswal School, Kamatghar, Bhiwandi, Maharashtra 421302', 'ravi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_driver`
--

CREATE TABLE `add_driver` (
  `Bus_No` int(20) NOT NULL,
  `Driver_Name` varchar(30) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Cont_Num` bigint(10) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Photo` text NOT NULL,
  `Password` varchar(10) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_driver`
--

INSERT INTO `add_driver` (`Bus_No`, `Driver_Name`, `Email`, `Cont_Num`, `Address`, `Photo`) VALUES
(45, 'Abhishek Choudhary', 'abhishekchaudhary3e@gmail.com', 7499194796, '72CW+W5X, Atlanta Residency, Kamatghar - Anjurphata Rd, Opp. Oswal School, Kamatghar, Bhiwandi, Maharashtra 421302', 'abhishek.jpg'),
(55, 'Ravi Choudhary', 'avi.choudhary@gmail.com', 7499194801, '72CW+W5X, Atlanta Residency, Kamatghar - Anjurphata Rd, Opp. Oswal School, Kamatghar, Bhiwandi, Maharashtra 421302', 'ravi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_parent`
--

CREATE TABLE `add_parent` (
  `Roll_No` int(15) NOT NULL,
  `Student_Name` varchar(30) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Father_Name` varchar(30) NOT NULL,
  `Mother_Name` varchar(30) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Contact_Num` bigint(10) NOT NULL,
  `Home_Add` varchar(150) NOT NULL,
  `Bus_stop` varchar(20) NOT NULL,
  `Bus_No` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Language` varchar(20) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_parent`
--

INSERT INTO `add_parent` (`Roll_No`, `Student_Name`, `Class`, `Father_Name`, `Mother_Name`, `Email`, `Contact_Num`, `Home_Add`, `Bus_stop`, `Bus_No`, `Password`, `Language`, `token`, `status`) VALUES
(101, 'Swasti', '2nd', 'Deepak', 'Mamta', 'sdhkesarwani18@gmail.com', 9372592588, 'Room no 14, chawl no 10, Chiraguddin chawl, chirag nagar, Ghatkopar Weat', 'Ghatkopar Stop', '301', 'klwhlr', 'English', 'bcb27aa016af56787f758d0889ce03', 'active'),
(102, 'Avika', '2nd', 'Raju', 'Reema', 'tannu@gmail.com', 8879923335, 'Chirag Nagar', 'Ghatkopar', '302', 'abcde', 'English', 'hsvjhsgkbksb', 'active'),
(103, 'Vini', '1st', 'Rahul', 'Poonam', 'ranikesarwani01@gmail.com', 8879923335, 'Chirag Nagar', 'Vidhyavihar Stop', '301', 'jyi003', 'English', 'a80cc0a2325069624c649318b77f17', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('Abhishek', '1703'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `driver_att`
--

CREATE TABLE `driver_att` (
  `Date` date NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `BusNo` varchar(100) NOT NULL,
  `Attendance` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Stopped_Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_att`
--

INSERT INTO `driver_att` (`Date`, `Time`, `Name`, `BusNo`, `Attendance`, `status`, `Stopped_Time`) VALUES
('2022-04-10', '18:27:58 PM', 'Piyush', '301', 'Present', 'inactive', '18:28:06 PM'),
('2022-04-09', '14:27:58 PM', 'Piyush', '301', 'Present', 'inactive', '16:27:58 PM'),
('2022-04-08', '10:00:58 AM', 'Piyush', '301', 'Present', 'inactive', '11:30:58 AM'),
('2022-04-08', '10:00:58 AM', 'Shiv', '301', 'Present', 'inactive', '11:30:58 AM'),
('2022-04-16', '14:15:45 PM', 'Piyush', '301', 'Present', 'inactive', '14:22:01 PM'),
('2022-04-16', '14:39:57 PM', 'Aryan', '302', 'Present', 'active', ''),
('2022-04-16', '14:40:47 PM', 'Piyush', '301', 'Present', 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Bus_No` varchar(10) NOT NULL,
  `Driver_Name` varchar(255) NOT NULL,
  `Efficient` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `Safety` varchar(255) NOT NULL,
  `Suggestion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Bus_No`, `Driver_Name`, `Efficient`, `Experience`, `Safety`, `Suggestion`) VALUES
('Piyush', '301', '3', '4', '5', 'Good'),
('Piyush', '301', '3', '4', '5', 'Good'),
('Piyush', '301', '3', '2', '4', 'good');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
