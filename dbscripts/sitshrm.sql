-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 06:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitshrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `configtable`
--

CREATE TABLE `configtable` (
  `ID` int(10) UNSIGNED NOT NULL,
  `OptionType` varchar(20) DEFAULT NULL,
  `OptionValue` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configtable`
--

INSERT INTO `configtable` (`ID`, `OptionType`, `OptionValue`) VALUES
(1, 'Department', 'HR'),
(2, 'Department', 'IT'),
(3, 'Active', 'No'),
(4, 'Active', 'Yes'),
(5, 'JobBand', 'A1'),
(6, 'JobBand', 'A2'),
(7, 'JobBand', 'A3'),
(8, 'BusinessTitle', 'Recruiter'),
(9, 'BusinessTitle', 'Senior Recruiter'),
(10, 'BusinessTitle', 'Team Lead'),
(11, 'BusinessTitle', 'Manager'),
(12, 'BusinessTitle', 'VP'),
(13, 'BusinessTitle', 'CEO'),
(14, 'BusinessTitle', 'Developer'),
(15, 'BusinessTitle', 'Senior Developer'),
(16, 'EmploymentType', 'Consultant'),
(17, 'EmploymentType', 'Permanent'),
(18, 'EmploymentType', 'Contract'),
(19, 'Period', 'Weekly'),
(20, 'Period', 'Fortnightly'),
(21, 'Period', 'Monthly'),
(22, 'CompanyID', 'SUSPL'),
(23, 'CompanyID', 'SITS'),
(24, 'CompanyID', 'USG');

-- --------------------------------------------------------

--
-- Table structure for table `employeemaster`
--

CREATE TABLE `employeemaster` (
  `EmpID` int(5) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(25) DEFAULT NULL,
  `LastName` varchar(25) DEFAULT NULL,
  `Initial` varchar(4) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `SpouseName` varchar(50) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Department` varchar(4) NOT NULL,
  `JoiningDate` date NOT NULL,
  `BusinessTitle` varchar(30) NOT NULL,
  `MobileNo` int(10) NOT NULL,
  `AlternateContactNo` int(10) NOT NULL,
  `EsiNo` int(12) DEFAULT NULL,
  `PanNo` varchar(10) NOT NULL,
  `AadhaarNo` int(12) NOT NULL,
  `PfUan` varchar(16) DEFAULT NULL,
  `PassportNo` varchar(10) DEFAULT NULL,
  `JobBand` varchar(4) NOT NULL,
  `EmploymentType` varchar(20) NOT NULL,
  `CompanyID` varchar(10) NOT NULL,
  `LeavingDate` date DEFAULT NULL,
  `ResignationDate` date DEFAULT NULL,
  `ReportingPerson` varchar(5) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `PersonalEmailID` varchar(50) NOT NULL,
  `BloodGroup` varchar(9) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Active` varchar(3) NOT NULL,
  `IsSuperAdmin` varchar(3) NOT NULL,
  `EmergencyContactName` varchar(50) NOT NULL,
  `EmergencyContactNumber` int(10) NOT NULL,
  `EmergencyContactRelationship` varchar(20) NOT NULL,
  `CreatedBy` varchar(20) NOT NULL,
  `CreatedDateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedDateTime` timestamp NULL DEFAULT NULL,
  `UpdatedBy` varchar(20) DEFAULT NULL,
  `BankName` varchar(100) NOT NULL,
  `BankAccountNumber` int(12) NOT NULL,
  `IFSCCode` varchar(12) NOT NULL,
  `Shift` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `ID` int(11) NOT NULL,
  `EmpID` int(5) NOT NULL,
  `UserID` varchar(75) NOT NULL,
  `UserPassword` varchar(50) NOT NULL,
  `Role` char(2) NOT NULL,
  `Department` varchar(4) NOT NULL,
  `MobileNumber` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configtable`
--
ALTER TABLE `configtable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`EmpID`),
  ADD UNIQUE KEY `EmpID` (`EmpID`),
  ADD UNIQUE KEY `MobileNo` (`MobileNo`),
  ADD UNIQUE KEY `EmailID` (`EmailID`),
  ADD UNIQUE KEY `PersonalEmailID` (`PersonalEmailID`),
  ADD UNIQUE KEY `BankAccountNumber` (`BankAccountNumber`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserID` (`UserID`),
  ADD UNIQUE KEY `EmpID` (`EmpID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configtable`
--
ALTER TABLE `configtable`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
