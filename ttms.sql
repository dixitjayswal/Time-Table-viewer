-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 08:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttms`
--

-- --------------------------------------------------------

--
-- Table structure for table `t001`
--

CREATE TABLE `t001` (
  `DAY` varchar(100) DEFAULT NULL,
  `PERIOD1` varchar(100) DEFAULT NULL,
  `PERIOD2` varchar(100) DEFAULT NULL,
  `PERIOD3` varchar(100) DEFAULT NULL,
  `PERIOD4` varchar(100) DEFAULT NULL,
  `PERIOD5` varchar(100) DEFAULT NULL,
  `PERIOD6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t001`
--

INSERT INTO `t001` (`DAY`, `PERIOD1`, `PERIOD2`, `PERIOD3`, `PERIOD4`, `PERIOD5`, `PERIOD6`) VALUES
('MON', NULL, '4CSE2:MPCO<br>326', NULL, NULL, '4CSE1:DBMS-B<br>313', '4CSE1:DBMS-B<br>313'),
('TUE', '4CSE2:DBMS-C<br>108', '4CSE2:DBMS-C<br>108', '4CSE2:MPCO<br>326', NULL, '4CSE2:PP-A<br>303', '4CSE2:PP-A<br>303'),
('WED', NULL, NULL, '4CSE2:DBMS-A<br>304', '4CSE2:DBMS-A<br>304', NULL, NULL),
('THU', '4CSE1:DBMS-B<br>314/B', '4CSE1:DBMS-B<br>314/B', '4CSE2:DBMS-C<br>CC2/A', '4CSE2:DBMS-C<br>CC2/A', NULL, NULL),
('FRI', NULL, NULL, NULL, NULL, '4CSE2:DBMS-A<br>313', '4CSE2:DBMS-A<br>313'),
('SAT', '4CSE2:SGP-D<br>314/B', '4CSE2:SGP-D<br>314/B', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t002`
--

CREATE TABLE `t002` (
  `DAY` varchar(100) DEFAULT NULL,
  `PERIOD1` varchar(100) DEFAULT NULL,
  `PERIOD2` varchar(100) DEFAULT NULL,
  `PERIOD3` varchar(100) DEFAULT NULL,
  `PERIOD4` varchar(100) DEFAULT NULL,
  `PERIOD5` varchar(100) DEFAULT NULL,
  `PERIOD6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t002`
--

INSERT INTO `t002` (`DAY`, `PERIOD1`, `PERIOD2`, `PERIOD3`, `PERIOD4`, `PERIOD5`, `PERIOD6`) VALUES
('MON', NULL, NULL, '6CSE 1 & 2:MN<br>225', NULL, '2CSE1:OOPC-B <br> 314', NULL),
('TUE', '6CSE1:MN-D<br>205', '6CSE1:MN-D<br>205', NULL, NULL, '6CSE1 & 2:MN<br>323', NULL),
('WED', '4IT1:SGP-D<br>CC1/B', '4IT1:SGP-D<br>CC1/B', NULL, NULL, '6CE1:CN-B<br>207', '6CE1:CN-B<br>207'),
('THU', NULL, NULL, '6CE1:CN-D<br>105', '6CE1:CN-D<br>105', NULL, NULL),
('FRI', '6CSE2:MN-D<br>205', '6CSE2:MN-D<br>205', NULL, NULL, NULL, NULL),
('SAT', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t003`
--

CREATE TABLE `t003` (
  `DAY` varchar(100) DEFAULT NULL,
  `PERIOD1` varchar(100) DEFAULT NULL,
  `PERIOD2` varchar(100) DEFAULT NULL,
  `PERIOD3` varchar(100) DEFAULT NULL,
  `PERIOD4` varchar(100) DEFAULT NULL,
  `PERIOD5` varchar(100) DEFAULT NULL,
  `PERIOD6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t003`
--

INSERT INTO `t003` (`DAY`, `PERIOD1`, `PERIOD2`, `PERIOD3`, `PERIOD4`, `PERIOD5`, `PERIOD6`) VALUES
('MON', '6CSE2:SE-B<br>314/B', '6CSE2:SE-B<br>314/B', NULL, NULL, NULL, NULL),
('TUE', '6CSE1:VAR-A<br>206', '6CSE1:VAR-A<br>206', NULL, NULL, NULL, '6CSE1:SE<br>323'),
('WED', '6CSE1:SE-B<br>317/B', '6CSE1:SE-B<br>317/B', NULL, NULL, NULL, '6CSE2:SE<br>325'),
('THU', '6CSE1:SE-D<br>306', '6CSE1:SE-D<br>306', NULL, NULL, '6CSE2:SE-D<br>317/B', '6CSE2:SE-D<br>317/B'),
('FRI', '6IT:SE-C<br>313', '6IT:SE-C<br>313', '6IT:SE-A<br>314/A', '6IT:SE-A<br>314/A', NULL, NULL),
('SAT', '4CSE1:SGP-C<br>317', '4CSE1:SGP-C<br>317', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t004`
--

CREATE TABLE `t004` (
  `DAY` varchar(100) DEFAULT NULL,
  `PERIOD1` varchar(100) DEFAULT NULL,
  `PERIOD2` varchar(100) DEFAULT NULL,
  `PERIOD3` varchar(100) DEFAULT NULL,
  `PERIOD4` varchar(100) DEFAULT NULL,
  `PERIOD5` varchar(100) DEFAULT NULL,
  `PERIOD6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t004`
--

INSERT INTO `t004` (`DAY`, `PERIOD1`, `PERIOD2`, `PERIOD3`, `PERIOD4`, `PERIOD5`, `PERIOD6`) VALUES
('MON', '4CSE1:MPCO<br>325', NULL, NULL, NULL, '4CSE2:MPCO-B<br>CC2/B', '4CSE2:MPCO-B<br>CC2/B'),
('TUE', NULL, NULL, '4IT1:CAMI-B<br>317', '4IT1:CAMI-B<br>317', '4CSE2:MPCO-D<br>313', '4CSE2:MPCO-D<br>313'),
('WED', NULL, '4CSE2:MPCO<br>326', '4CSE1:MPCO-B<br>317', '4CSE1:MPCO-B<br>317', NULL, NULL),
('THU', '4CSE1:MPCO-D<br>317/B', '4CSE1:MPCO-D<br>317/B', NULL, NULL, '4IT2:CAMI<br>211', '4IT2:CAMI<br>211'),
('FRI', '4CSE2:MPCO<br>225', NULL, '4CSE1:MPCO<br>326', NULL, '4CSE1:SGP-D<br>314/B', '4CSE1:SGP-D<br>314/B'),
('SAT', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t005`
--

CREATE TABLE `t005` (
  `DAY` varchar(100) DEFAULT NULL,
  `PERIOD1` varchar(100) DEFAULT NULL,
  `PERIOD2` varchar(100) DEFAULT NULL,
  `PERIOD3` varchar(100) DEFAULT NULL,
  `PERIOD4` varchar(100) DEFAULT NULL,
  `PERIOD5` varchar(100) DEFAULT NULL,
  `PERIOD6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t005`
--

INSERT INTO `t005` (`DAY`, `PERIOD1`, `PERIOD2`, `PERIOD3`, `PERIOD4`, `PERIOD5`, `PERIOD6`) VALUES
('MON', NULL, NULL, NULL, NULL, '2CSE1:OOPC-A <br> 211', NULL),
('TUE', '4CSE2:DSA-B<br>211', '4CSE2:DSA-B<br>211', NULL, NULL, NULL, NULL),
('WED', NULL, NULL, '4CSE2:DSA-D<br>313', '4CSE2:DSA-D<br>313', NULL, NULL),
('THU', '4CE2:DSA-D<br>205', '4CE2:DSA-D<br>205', NULL, NULL, NULL, NULL),
('FRI', '4CSE:DSA<br>326', NULL, '4CE2:DSA-A<br>CC2/A', '4CE2:DSA-A<br>CC2/A', '4CSE1:SGP-C<br>314/A', '4CSE1:SGP-C<br>314/A'),
('SAT', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t006`
--

CREATE TABLE `t006` (
  `DAY` varchar(100) DEFAULT NULL,
  `PERIOD1` varchar(100) DEFAULT NULL,
  `PERIOD2` varchar(100) DEFAULT NULL,
  `PERIOD3` varchar(100) DEFAULT NULL,
  `PERIOD4` varchar(100) DEFAULT NULL,
  `PERIOD5` varchar(100) DEFAULT NULL,
  `PERIOD6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t006`
--

INSERT INTO `t006` (`DAY`, `PERIOD1`, `PERIOD2`, `PERIOD3`, `PERIOD4`, `PERIOD5`, `PERIOD6`) VALUES
('MON', NULL, NULL, NULL, NULL, '4CSE1:DSA -D<br>317/B', '4CSE1:DSA -D<br>317/B'),
('TUE', NULL, NULL, '2CSE2:OOPC-A<br> 316', NULL, NULL, NULL),
('WED', NULL, NULL, NULL, NULL, NULL, NULL),
('THU', NULL, NULL, '4CSE2:SGP-B<br>314/B', '4CSE2:SGP-B<br>314/B', NULL, NULL),
('FRI', NULL, NULL, NULL, NULL, '4CSE1:DSA-B<br>317/B', '4CSE1:DSA-B<br>317/B'),
('SAT', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t007`
--

CREATE TABLE `t007` (
  `DAY` varchar(100) DEFAULT NULL,
  `PERIOD1` varchar(100) DEFAULT NULL,
  `PERIOD2` varchar(100) DEFAULT NULL,
  `PERIOD3` varchar(100) DEFAULT NULL,
  `PERIOD4` varchar(100) DEFAULT NULL,
  `PERIOD5` varchar(100) DEFAULT NULL,
  `PERIOD6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t007`
--

INSERT INTO `t007` (`DAY`, `PERIOD1`, `PERIOD2`, `PERIOD3`, `PERIOD4`, `PERIOD5`, `PERIOD6`) VALUES
('MON', NULL, '4CSE2:MPCO<br>326', NULL, NULL, '4CSE1:DBMS-B<br>313', '4CSE1:DBMS-B<br>313'),
('TUE', '4CSE2:DBMS-C<br>108', '4CSE2:DBMS-C<br>108', '4CSE2:MPCO<br>326', NULL, '4CSE2:PP-A<br>303', '4CSE2:PP-A<br>303'),
('WED', NULL, NULL, '4CSE2:DBMS-A<br>304', '4CSE2:DBMS-A<br>304', NULL, NULL),
('THU', '4CSE1:DBMS-B<br>314/B', '4CSE1:DBMS-B<br>314/B', '4CSE2:DBMS-C<br>CC2/A', '4CSE2:DBMS-C<br>CC2/A', NULL, NULL),
('FRI', NULL, NULL, NULL, NULL, '4CSE2:DBMS-A<br>313', '4CSE2:DBMS-A<br>313'),
('SAT', '4CSE2:SGP-D<br>314/B', '4CSE2:SGP-D<br>314/B', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t008`
--

CREATE TABLE `t008` (
  `DAY` varchar(100) DEFAULT NULL,
  `PERIOD1` varchar(100) DEFAULT NULL,
  `PERIOD2` varchar(100) DEFAULT NULL,
  `PERIOD3` varchar(100) DEFAULT NULL,
  `PERIOD4` varchar(100) DEFAULT NULL,
  `PERIOD5` varchar(100) DEFAULT NULL,
  `PERIOD6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t008`
--

INSERT INTO `t008` (`DAY`, `PERIOD1`, `PERIOD2`, `PERIOD3`, `PERIOD4`, `PERIOD5`, `PERIOD6`) VALUES
('MON', NULL, NULL, NULL, NULL, NULL, NULL),
('TUE', '6CSE2:ML-C<br>314', '6CSE2:ML-C<br>314', NULL, '6CSE2:ML<br>324', '4CSE1:SGP-B<br>CC2/B', '4CSE1:SGP-B<br>CC2/B'),
('WED', '6CSE1:ML-C<br>316', '6CSE1:ML-C<br>316', '6IT:ML-C<br>104', '6IT:ML-C<br>104', NULL, '6CSE1: TOC<br>323'),
('THU', '6CSE1:ML-A<br>316', '6CSE1:ML-A<br>316', NULL, NULL, '6CSE2:ML-A<br>314/A', '6CSE2:ML-A<br>314/A'),
('FRI', '6CSE1: ML<br>323', NULL, '6IT:ML-B<br>105', '6IT:ML-B<br>105', '6CSE2: TOC<br>324', NULL),
('SAT', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t009`
--

CREATE TABLE `t009` (
  `DAY` varchar(100) DEFAULT NULL,
  `PERIOD1` varchar(100) DEFAULT NULL,
  `PERIOD2` varchar(100) DEFAULT NULL,
  `PERIOD3` varchar(100) DEFAULT NULL,
  `PERIOD4` varchar(100) DEFAULT NULL,
  `PERIOD5` varchar(100) DEFAULT NULL,
  `PERIOD6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t009`
--

INSERT INTO `t009` (`DAY`, `PERIOD1`, `PERIOD2`, `PERIOD3`, `PERIOD4`, `PERIOD5`, `PERIOD6`) VALUES
('MON', NULL, NULL, NULL, NULL, '4CSE1:DSA -D<br>317/B', '4CSE1:DSA -D<br>317/B'),
('TUE', NULL, NULL, '2CSE2:OOPC-A<br>cc2', NULL, NULL, NULL),
('WED', NULL, NULL, NULL, NULL, NULL, NULL),
('THU', NULL, NULL, '4CSE2:SGP-B<br>314/B', '4CSE2:SGP-B<br>314/B', NULL, NULL),
('FRI', NULL, NULL, NULL, NULL, '4CSE1:DSA-B<br>317/B', '4CSE1:DSA-B<br>317/B'),
('SAT', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t010`
--

CREATE TABLE `t010` (
  `DAY` varchar(100) DEFAULT NULL,
  `PERIOD1` varchar(100) DEFAULT NULL,
  `PERIOD2` varchar(100) DEFAULT NULL,
  `PERIOD3` varchar(100) DEFAULT NULL,
  `PERIOD4` varchar(100) DEFAULT NULL,
  `PERIOD5` varchar(100) DEFAULT NULL,
  `PERIOD6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t010`
--

INSERT INTO `t010` (`DAY`, `PERIOD1`, `PERIOD2`, `PERIOD3`, `PERIOD4`, `PERIOD5`, `PERIOD6`) VALUES
('MON', '4CSE2:DSA<br>326', NULL, NULL, NULL, '4CSE1:DSA-C<br>317/A', '4CSE1:DSA-C<br>317/A'),
('TUE', '4CSE2:DSA-A<br>313', '4CSE2:DSA-A<br>313', NULL, NULL, '4CSE1:SGP-A<br>CC2/A', '4CSE1:SGP-A<br>CC2/A'),
('WED', NULL, NULL, '4CSE2:DSA-C<br>312', '4CSE2:DSA-C<br>312', NULL, NULL),
('THU', NULL, NULL, NULL, NULL, NULL, NULL),
('FRI', NULL, NULL, '4CE2:DSA-C<br>CC2/B', '4CE2:DSA-C<br>CC2/B', NULL, NULL),
('SAT', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `faculty_number` varchar(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `ALIAS` varchar(100) NOT NULL,
  `DESIGNATION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`faculty_number`, `NAME`, `ALIAS`, `DESIGNATION`) VALUES
('T001', 'AIRSHWARYA BUDHRANI', 'ASB', 'PROFESSOR'),
('T002', 'BANSARI PATEL', 'BBP', 'PROFESSOR'),
('T003', 'BRIJESH PANCHAL ', 'BYP', 'PROFESSOR'),
('T004', 'GAURANG PATEL', 'GKP', 'PROFESSOR'),
('T005', 'MOHINI DAARJI', 'MPD', 'PROFESSOR'),
('T006', 'NAINA PARMAR', 'NNP', 'PROFESSOR'),
('T007', 'PRIYAL VAGHELA', 'PBV', 'PROFESSOR'),
('T008', 'PARTH SINGH', 'PRS', 'PROFESSOR'),
('T009', 'SHIVANJI MEHTA', 'SJM', 'PROFESSOR'),
('T010', 'URVI BHATT', 'UYB', 'PROFESSOR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
