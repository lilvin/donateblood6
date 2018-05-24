-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 04:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donate blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE IF NOT EXISTS `adminreg` (
  `ID` int(8) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `empID` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `empID` (`empID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`ID`, `firstname`, `lastname`, `email`, `mobile`, `empID`, `password`) VALUES
(31025957, 'lilian', 'kirito', 'liliankirito@gmail.com', 705895190, 2, 'a0bbaaa6c8608db42d807d321845240d');

-- --------------------------------------------------------

--
-- Table structure for table `donatedblood`
--

CREATE TABLE IF NOT EXISTS `donatedblood` (
  `ID` int(8) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `serial` int(20) NOT NULL,
  `hospital` int(20) NOT NULL,
  `ddate` date NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatedblood`
--

INSERT INTO `donatedblood` (`ID`, `gender`, `serial`, `hospital`, `ddate`) VALUES
(32108924, 'female', 482017, 101, '2017-04-12'),
(33108924, 'female', 482018, 101, '2017-04-12'),
(34108924, 'male', 482019, 101, '2017-04-12'),
(31025957, 'male', 0, 101, '2017-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `donorsappointments`
--

CREATE TABLE IF NOT EXISTS `donorsappointments` (
  `ID` int(8) NOT NULL,
  `mobile` int(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `hospital` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorsappointments`
--

INSERT INTO `donorsappointments` (`ID`, `mobile`, `location`, `hospital`, `date`) VALUES
(32108924, 706535448, 'Nairobi', 101, '2017-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `donorsreg`
--

CREATE TABLE IF NOT EXISTS `donorsreg` (
  `ID` int(8) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorsreg`
--

INSERT INTO `donorsreg` (`ID`, `firstname`, `lastname`, `email`, `mobile`, `password`) VALUES
(31025957, 'lilian', 'kirito', 'liliankirito@gmail.com', 705895190, 'a0bbaaa6c8608db42d807d321845240d');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE IF NOT EXISTS `hospitals` (
  `ID` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `telephone` int(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`ID`, `name`, `telephone`, `location`) VALUES
(101, ' The Aga Khan Hospital', 706535448, 'Kisumu');

-- --------------------------------------------------------

--
-- Table structure for table `processedblood`
--

CREATE TABLE IF NOT EXISTS `processedblood` (
  `ID` int(8) NOT NULL,
  `serial` int(20) NOT NULL,
  `hospital` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `edate` date NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processedblood`
--

INSERT INTO `processedblood` (`ID`, `serial`, `hospital`, `type`, `status`, `edate`) VALUES
(32108924, 482017, 101, 'A+', 'negative', '2017-04-14'),
(34108924, 482019, 101, 'A+', 'negative', '2017-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `recipientsappointments`
--

CREATE TABLE IF NOT EXISTS `recipientsappointments` (
  `ID` int(8) NOT NULL,
  `mobile` int(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `hospital` int(20) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipientsappointments`
--

INSERT INTO `recipientsappointments` (`ID`, `mobile`, `location`, `hospital`, `blood`, `date`) VALUES
(32108924, 706535448, 'Kisumu', 101, 'A+', '2017-05-10'),
(31025957, 705895190, 'Nairobi', 101, '0+', '2017-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `recipientsreg`
--

CREATE TABLE IF NOT EXISTS `recipientsreg` (
  `ID` int(8) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipientsreg`
--

INSERT INTO `recipientsreg` (`ID`, `firstname`, `lastname`, `email`, `mobile`, `password`) VALUES
(31025957, 'lil', 'kir', 'liliankirito@gmail.com', 705895190, 'a0bbaaa6c8608db42d807d321845240d');

-- --------------------------------------------------------

--
-- Table structure for table `transfusedblood`
--

CREATE TABLE IF NOT EXISTS `transfusedblood` (
  `ID` int(8) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `serial` int(20) NOT NULL,
  `hospital` int(20) NOT NULL,
  `tdate` date NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfusedblood`
--

INSERT INTO `transfusedblood` (`ID`, `gender`, `serial`, `hospital`, `tdate`, `type`) VALUES
(32108924, 'female', 482017, 101, '2017-04-17', 'A+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
