-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2021 at 05:12 PM
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

INSERT INTO `add_admin` (`First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Password`, `Confirm_password`) VALUES
('Abhishek', 'Pathak', 'xyz@gmail.com ', 8879923335, '1234', '1234'),

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

INSERT INTO `add_driver` (`Bus_No`, `Driver_Name`, `Email`, `Cont_Num`, `Address`, `Photo`, `Password`, `token`, `status`) VALUES
(45, 'Driver', 'kajol@12gmail.com', 1234564543, 'Room no 14, chawl no 10, chiraguddin chawl, chirag nagar, Ghatkopar West, Mumbai 400086', '.driver.jfif', 'dedvbn', '0b3b1b56d976ca59f61845b9fc6102', 'inactive');

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
  `Password` varchar(10) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_parent`
--
INSERT INTO `add_driver` (`Bus_No`, `Driver_Name`, `Email`, `Cont_Num`, `Address`, `Photo`) VALUES
(45, 'Abhishek Choudhary', 'abhishekchaudhary3e@gmail.com', 7499194796, '72CW+W5X, Atlanta Residency, Kamatghar - Anjurphata Rd, Opp. Oswal School, Kamatghar, Bhiwandi, Maharashtra 421302', 'abhishek.jpg'),


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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
