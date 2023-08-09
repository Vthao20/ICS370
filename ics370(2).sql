-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Aug 09, 2023 at 03:29 AM
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
-- Database: `ics370`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `BusinessName` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `BusinessAccount` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountID`, `Email`, `BusinessName`, `Password`, `BusinessAccount`) VALUES
(11, 'james@gmail.com', 'jamesllc', '1234', '0'),
(38, 'walmart@gmail.com', 'walmart', '123', 'Y'),
(39, 'loan@gmail.com', 'LoanOfficer', '123', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `loanapplication`
--

CREATE TABLE `loanapplication` (
  `applicationID` int(11) NOT NULL,
  `GrantID` int(11) NOT NULL,
  `bName` varchar(50) NOT NULL,
  `bEmail` varchar(50) NOT NULL,
  `Scope` text NOT NULL,
  `stat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loanapplication`
--

INSERT INTO `loanapplication` (`applicationID`, `GrantID`, `bName`, `bEmail`, `Scope`, `stat`) VALUES
(36, 22, 'walmart', 'walmart@gmail.com', 'need money', ''),
(75, 32, 'walmart', 'walmart@gmail.com', 'need funding', '');

-- --------------------------------------------------------

--
-- Table structure for table `loanlist`
--

CREATE TABLE `loanlist` (
  `GrantID` int(11) NOT NULL,
  `IssuerName` varchar(30) DEFAULT NULL,
  `Amount` int(11) NOT NULL,
  `Qualifications` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loanlist`
--

INSERT INTO `loanlist` (`GrantID`, `IssuerName`, `Amount`, `Qualifications`) VALUES
(22, 'loan', 1, 'must be located in MN'),
(32, 'loan', 2147483647, 'need to be a family owned business'),
(38, 'loan', 1231231, 'must be as small company');

-- --------------------------------------------------------

--
-- Table structure for table `moneytracker`
--

CREATE TABLE `moneytracker` (
  `accountID` int(11) DEFAULT NULL,
  `InitialTot` int(11) DEFAULT NULL,
  `AmountUsed` int(11) DEFAULT NULL,
  `FinalAmount` int(11) DEFAULT NULL,
  `trackerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moneytracker`
--

INSERT INTO `moneytracker` (`accountID`, `InitialTot`, `AmountUsed`, `FinalAmount`, `trackerID`) VALUES
(11, 0, 0, 0, 39);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `loanapplication`
--
ALTER TABLE `loanapplication`
  ADD PRIMARY KEY (`applicationID`),
  ADD KEY `GrantID` (`GrantID`);

--
-- Indexes for table `loanlist`
--
ALTER TABLE `loanlist`
  ADD PRIMARY KEY (`GrantID`);

--
-- Indexes for table `moneytracker`
--
ALTER TABLE `moneytracker`
  ADD PRIMARY KEY (`trackerID`),
  ADD KEY `accountID` (`accountID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `loanapplication`
--
ALTER TABLE `loanapplication`
  MODIFY `applicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `loanlist`
--
ALTER TABLE `loanlist`
  MODIFY `GrantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `moneytracker`
--
ALTER TABLE `moneytracker`
  MODIFY `trackerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loanapplication`
--
ALTER TABLE `loanapplication`
  ADD CONSTRAINT `loanapplication_ibfk_1` FOREIGN KEY (`GrantID`) REFERENCES `loanlist` (`GrantID`);

--
-- Constraints for table `moneytracker`
--
ALTER TABLE `moneytracker`
  ADD CONSTRAINT `moneytracker_ibfk_1` FOREIGN KEY (`accountID`) REFERENCES `account` (`accountID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
