-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 02:06 PM
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
-- Database: `corona`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `vaccine` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `name`, `city`, `password`, `vaccine`, `phone`, `quantity`) VALUES
(16, 'Ziauddin', 'lahore', '123', 'sinoform', '032122121', 25),
(17, 'Aga Khan', 'karachi', '123', 'pfizer', '021420452052', 15);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `cnic` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `query` varchar(100) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `hospital` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `vac_name` varchar(100) DEFAULT NULL,
  `time_slot` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `name`, `phone`, `cnic`, `gender`, `email`, `address`, `query`, `city`, `hospital`, `dob`, `vac_name`, `time_slot`) VALUES
(2, 'yahya', 321203220, 321, 'male', 'extra@gmail.com', 'nazimabad', 'vaccination', 'karachi', 'Ziauddin', '2005-02-22', 'pfizer', '2022-12-16T19:06'),
(3, 'bilal', 321203220, 21, 'male', 'bilal@gmail.com', 'nagan', 'covid-test', 'karachi', 'Ziauddin', '2000-11-22', 'no', '2022-12-19T19:09'),
(4, 'marium', 321252525, 222, 'female', 'marium@gmail.com', 'lakhnow', 'vaccination', 'lahore', 'Aga Khan', '2000-06-15', 'moderna', '2022-12-31T20:41');

-- --------------------------------------------------------

--
-- Table structure for table `p_user`
--

CREATE TABLE `p_user` (
  `w_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(110) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_user`
--

INSERT INTO `p_user` (`w_id`, `name`, `email`, `password`, `phone`, `city`) VALUES
(6, 'Usman', 'usmanshams31@gmail.com', '123', '0321203220', 'Karachi'),
(9, 'sudais', 'etr@gmail.com', '123', '0321203220', 'Karachi'),
(10, 'bilal', 'bilal@gmail.com', '123', '0321203210', 'Peshawar'),
(15, 'ahmed', 'extra@gmail.com', '123', '2222222222', 'Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `username`, `password`, `phone`, `email`, `role`, `image`) VALUES
(15, 'usman shams', 'usman', '123', 2147483647, 'werfwef@gmail.com', '1', 'product6.jpg'),
(16, 'bilal shams', 'bilal1', '123', 2147483647, 'tooba@gmail.com', '0', 'testimonial-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `v_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`v_id`, `name`, `quantity`) VALUES
(1, 'pfizer', 0),
(2, 'moderna', 0),
(3, 'sinoform', 0),
(4, 'sinovac', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `p_user`
--
ALTER TABLE `p_user`
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p_user`
--
ALTER TABLE `p_user`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
