-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 12:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `childcase`
--

-- --------------------------------------------------------

--
-- Table structure for table `casetable`
--

CREATE TABLE `casetable` (
  `CaseID` int(11) NOT NULL,
  `Name` varchar(126) NOT NULL,
  `Age` int(11) NOT NULL,
  `Class` varchar(126) NOT NULL,
  `Institute` varchar(126) NOT NULL,
  `Shelter` varchar(126) NOT NULL,
  `Father` varchar(126) NOT NULL,
  `Mother` varchar(126) NOT NULL,
  `Guardian` varchar(126) NOT NULL,
  `ContactNo` varchar(100) NOT NULL,
  `Home` varchar(126) NOT NULL,
  `BirthDate` date NOT NULL,
  `isBirthCertificate` varchar(5) NOT NULL,
  `BirthCertificaion` varchar(126) NOT NULL,
  `ReferedBy` varchar(126) NOT NULL,
  `DataCollector` varchar(126) NOT NULL,
  `Details` text NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `Occupation` varchar(126) NOT NULL,
  `CurrentAddress` varchar(126) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `isDisableCertificate` varchar(5) NOT NULL,
  `DisabilityCertificaion` varchar(126) NOT NULL,
  `LearningSector` varchar(126) NOT NULL,
  `BirthPlace` varchar(126) NOT NULL,
  `imgLoc` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casetable`
--

INSERT INTO `casetable` (`CaseID`, `Name`, `Age`, `Class`, `Institute`, `Shelter`, `Father`, `Mother`, `Guardian`, `ContactNo`, `Home`, `BirthDate`, `isBirthCertificate`, `BirthCertificaion`, `ReferedBy`, `DataCollector`, `Details`, `Gender`, `Occupation`, `CurrentAddress`, `Nationality`, `Religion`, `isDisableCertificate`, `DisabilityCertificaion`, `LearningSector`, `BirthPlace`, `imgLoc`) VALUES
(1, 'Rakib Uddin', 8, '7', 'Daffodil Institute of Social Sciences', 'LEEDO', 'Shakib Ali', 'Rabeya Begom', 'Abdullah Mia', '0', 'Tangail', '2014-01-07', 'No', '0', 'Afrida', 'Afrida', 'This boy was shelter-less before LEEDO found him on 2019. He was lost when he was only 5 years old from the bus stand.', 'Male', 'Tokai', 'Ghatail bus stand', 'Bangladesh', 'unknown', 'No', '0', 'General', 'Mymensingh', '00001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `srl` int(11) NOT NULL,
  `Name` varchar(126) NOT NULL,
  `EmployeeID` varchar(65) NOT NULL,
  `Designation` varchar(125) NOT NULL,
  `Post` varchar(85) NOT NULL,
  `Office` varchar(126) NOT NULL,
  `Mail` varchar(126) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `ExtraNo` varchar(100) NOT NULL,
  `Password` varchar(125) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Privilege` varchar(30) NOT NULL,
  `Image` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`srl`, `Name`, `EmployeeID`, `Designation`, `Post`, `Office`, `Mail`, `Contact`, `ExtraNo`, `Password`, `Privilege`, `Image`) VALUES
(1, 'admin', '18115 ', '', 'Admin', 'DIU', '', '', '', '21232f297a57a5a743894a0e4a801fc3', 'Super', 'admin.jpg'),
(2, 'Chaity', '11019', 'Manager', 'Admin', 'DIU', 'chaity@nomail.com', '01824244296', '', 'a55841fa94be4edd2aeee235c080a285', 'Editor', '11019.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casetable`
--
ALTER TABLE `casetable`
  ADD PRIMARY KEY (`CaseID`),
  ADD UNIQUE KEY `CaseID` (`CaseID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`srl`),
  ADD UNIQUE KEY `EmployeeID` (`EmployeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `srl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
