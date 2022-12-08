-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 05:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `what`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(20) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `aemail` varchar(20) NOT NULL,
  `apassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aemail`, `apassword`) VALUES
(2, 'ahmed', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `covidtest`
--

CREATE TABLE `covidtest` (
  `tid` int(11) NOT NULL,
  `orderno` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `gmail` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `cnic` int(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `timeslot` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `covidtest`
--

INSERT INTO `covidtest` (`tid`, `orderno`, `name`, `mobile`, `gmail`, `dob`, `cnic`, `address`, `state`, `timeslot`, `hospital`, `remarks`) VALUES
(1, 786184, 'ahmed', 315884242, 'momo@gmail.com', '1954-11-22', 2147483647, '321312312', 'karachi', '2022-12-07T14:27', '0', '0'),
(2, 549154, 'Eden Freeman', 2147483647, 'Sequi ullam laborum ', '1980-12-26', 0, 'Incididunt quia ulla', 'Quia nemo deleniti s', '2010-09-11T08:42', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `mid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`mid`, `name`, `email`, `subject`, `message`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `hemail` varchar(20) NOT NULL,
  `hpassword` varchar(20) NOT NULL,
  `hphone` int(11) NOT NULL,
  `haddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `hname`, `hemail`, `hpassword`, `hphone`, `haddress`) VALUES
(7, 'Agha Khan University Hospital Karachi', 'hospital@gmail', 'hospital123', 212121, 'Karachi'),
(8, 'Dow Hospital, Ojha Campus Karachi', 'hospital@gmail.com', 'hospital123', 212121, 'Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `pmobile` int(11) NOT NULL,
  `pgmail` varchar(20) NOT NULL,
  `ppass` varchar(20) NOT NULL,
  `pdob` date NOT NULL,
  `pcnic` int(13) NOT NULL,
  `paddress` int(50) NOT NULL,
  `pstate` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pname`, `pmobile`, `pgmail`, `ppass`, `pdob`, `pcnic`, `paddress`, `pstate`) VALUES
(3, 'Ahmed', 336010101, 'patient@gmail.com', 'patient123', '2023-01-03', 2147483647, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `apointmentid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `gmail` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `cnic` int(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `vaccineid` int(11) NOT NULL,
  `hospitalid` int(11) NOT NULL,
  `timeslot` varchar(20) NOT NULL,
  `status` varchar(202) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`apointmentid`, `name`, `mobile`, `gmail`, `dob`, `cnic`, `address`, `state`, `vaccineid`, `hospitalid`, `timeslot`, `status`, `remarks`) VALUES
(1, 'Amena Woodward', 1815555555, 'Aut non veniam sit', '1980-11-24', 0, 'Voluptas ad perferen', 'Ut aliquid tenetur m', 2, 3, '2021-05-19T11:10', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `vid` int(11) NOT NULL,
  `vaccine` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`vid`, `vaccine`) VALUES
(4, 'Pfizer'),
(5, 'omicron'),
(6, 'Moderna'),
(7, 'Convidecia'),
(8, 'AstraZeneca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `covidtest`
--
ALTER TABLE `covidtest`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`apointmentid`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `covidtest`
--
ALTER TABLE `covidtest`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `apointmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
