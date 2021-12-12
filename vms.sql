-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 10:47 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `center_id` int(11) NOT NULL,
  `province` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL,
  `residents` int(100) NOT NULL,
  `vaccination_capacity` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`center_id`, `province`, `district`, `division`, `residents`, `vaccination_capacity`) VALUES
(2, 'southern', 'Ampara', 'Galle', 10000, 6000),
(10, 'Central', 'Batticaloa', 'Kithulagoda', 25000, 1000),
(11, 'Eastern', 'Ampara', 'Kithulagoda', 25000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(20) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `slmcNumber` varchar(15) NOT NULL,
  `ContactNumber` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `firstName`, `lastName`, `nic`, `slmcNumber`, `ContactNumber`, `email`, `qualification`, `dob`, `address`, `gender`) VALUES
(2, 'ABCD', 'DERF', '000000000V', '12345663939', '+94000000000', 'ABCD@gmail.com', 'MBBS', '1997-10-09', '  No:187/3 ,Galle road , Matara  ', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `id` int(20) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `ContactNumber` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `firstName`, `lastName`, `nic`, `position`, `ContactNumber`, `email`, `qualification`, `dob`, `address`, `gender`) VALUES
(2, 'bagavan', 'logan', '000000000v', 'Head Nurse', '+94000000000', 'dhcjhb@gmail.com', 'hopebagavan', '2021-09-07', 'urupirai', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `ds` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `nic`, `ContactNumber`, `email`, `dob`, `address`, `gender`, `province`, `district`, `ds`) VALUES
(11, 'abcd efgh', '000000000V', '+94000000000', 'abcd@gmail.com', '1998-10-09', '  No:187/3 , galle road , kaluthara ', 'male', 'Western Province', 'Kalutara', 'Kalutara');

-- --------------------------------------------------------

--
-- Table structure for table `phis`
--

CREATE TABLE `phis` (
  `id` int(20) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `ContactNumber` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phis`
--

INSERT INTO `phis` (`id`, `firstName`, `lastName`, `nic`, `ContactNumber`, `email`, `qualification`, `dob`, `address`, `gender`) VALUES
(1, 'jinthu', 'bhai', '000000000v', '+94000000000', 'jinthu@gmail.com', 'Vetti boss', '2021-09-23', 'veedu illa', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(11) NOT NULL,
  `mobilenum` varchar(12) NOT NULL,
  `s_name` varchar(25) NOT NULL,
  `s_dose` int(11) NOT NULL,
  `s_center` varchar(25) NOT NULL,
  `s_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `nic`, `name`, `age`, `mobilenum`, `s_name`, `s_dose`, `s_center`, `s_datetime`) VALUES
(27, '000000000V', 'abcd', '1998-01-03', '+94000000000', 'Phizer', 1, 'Walallavita', '2021-12-10 12:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockID` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Dosage` int(10) NOT NULL,
  `LotNum` varchar(20) NOT NULL,
  `capacity` int(20) NOT NULL,
  `issCapacity` int(20) NOT NULL,
  `avaCapacity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockID`, `Name`, `Brand`, `Dosage`, `LotNum`, `capacity`, `issCapacity`, `avaCapacity`) VALUES
(1, 'Phizer', 'BioNtech', 10, 'L01', 300000, 100000, 200000),
(3, 'Moderna', 'MNA', 10, '23', 300000, 300000, 0),
(20, 'Sinopharm BIBP', 'Sinopharm', 8, '45', 120000, 23400, 96600),
(21, 'CoronaVac', 'Bharath Biotech', 13, '4', 335000, 300000, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`id`, `name`, `nic`, `ContactNumber`, `email`, `address`, `username`, `password`) VALUES
(1, 'sarmi', '000000000v', '+94000000000', 'srm@gmail.com', 'veedu irukku', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinate_tbl`
--

CREATE TABLE `vaccinate_tbl` (
  `nic` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(11) NOT NULL,
  `mobilenum` varchar(30) NOT NULL,
  `v_name` varchar(20) NOT NULL,
  `v_dosage` int(11) NOT NULL,
  `v_dose` int(11) NOT NULL,
  `v_center` varchar(20) NOT NULL,
  `v_datetime` datetime NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccinate_tbl`
--

INSERT INTO `vaccinate_tbl` (`nic`, `name`, `age`, `mobilenum`, `v_name`, `v_dosage`, `v_dose`, `v_center`, `v_datetime`, `comments`) VALUES
('199736500635', 'GIhan Nipuna', '1997', '+94000000000', 'Moderna', 5, 1, 'Kaduwela', '2021-12-11 03:08:00', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`center_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phis`
--
ALTER TABLE `phis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockID`);

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccinate_tbl`
--
ALTER TABLE `vaccinate_tbl`
  ADD PRIMARY KEY (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `center_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `phis`
--
ALTER TABLE `phis`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `system`
--
ALTER TABLE `system`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
