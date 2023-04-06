-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 10:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwms`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients_tbl`
--

CREATE TABLE `clients_tbl` (
  `clientID` int(11) NOT NULL,
  `ClientName` varchar(100) NOT NULL,
  `ClientEmail` varchar(100) NOT NULL,
  `clientPhone` varchar(100) NOT NULL,
  `Project_choose` varchar(100) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lastModifiedDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_tbl`
--

CREATE TABLE `projects_tbl` (
  `projectID` int(11) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `project_loc` varchar(50) NOT NULL,
  `project_size` varchar(100) NOT NULL,
  `pro_img` varchar(50) NOT NULL,
  `pro_img2` varchar(50) NOT NULL,
  `pro_img3` varchar(50) NOT NULL,
  `pro_img4` varchar(50) NOT NULL,
  `pro_desc` varchar(100) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `userID` int(11) NOT NULL,
  `UserFirstName` varchar(50) NOT NULL,
  `UserLastName` varchar(50) NOT NULL,
  `UserFullName` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `userRole` int(11) NOT NULL,
  `UserPass` varchar(50) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `LastModifiedDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`userID`, `UserFirstName`, `UserLastName`, `UserFullName`, `UserEmail`, `userRole`, `UserPass`, `CreatedDate`, `LastModifiedDate`) VALUES
(1, 'Hajira', 'Fatima', 'Hajira Fatima', 'Hajira@gmail.com', 1, 'admin', '2023-03-16 16:53:01', '2023-03-16 16:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `venders_tbl`
--

CREATE TABLE `venders_tbl` (
  `venderID` int(11) NOT NULL,
  `venderName` varchar(100) NOT NULL,
  `venderEmail` varchar(100) NOT NULL,
  `venderPhone` varchar(100) NOT NULL,
  `venderProject` varchar(100) NOT NULL,
  `proImg1` varchar(100) NOT NULL,
  `proImg2` varchar(100) NOT NULL,
  `proImg3` varchar(100) NOT NULL,
  `proImg4` varchar(100) NOT NULL,
  `vederDesc` varchar(100) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `venders_tbl`
--

INSERT INTO `venders_tbl` (`venderID`, `venderName`, `venderEmail`, `venderPhone`, `venderProject`, `proImg1`, `proImg2`, `proImg3`, `proImg4`, `vederDesc`, `createdDate`) VALUES
(13, 'test', 'test@gmail.com', '455789', 'Test PRJ', '1644828063597.jpg', '1644828063597.jpg', '1644828063597.jpg', '1658554945529.jpg', 'test', '2023-03-16 16:57:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients_tbl`
--
ALTER TABLE `clients_tbl`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `projects_tbl`
--
ALTER TABLE `projects_tbl`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `venders_tbl`
--
ALTER TABLE `venders_tbl`
  ADD PRIMARY KEY (`venderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients_tbl`
--
ALTER TABLE `clients_tbl`
  MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects_tbl`
--
ALTER TABLE `projects_tbl`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venders_tbl`
--
ALTER TABLE `venders_tbl`
  MODIFY `venderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
