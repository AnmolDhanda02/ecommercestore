-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 09:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback form`
--

CREATE TABLE `feedback form` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone No` int(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback form`
--

INSERT INTO `feedback form` (`ID`, `Name`, `Email`, `Phone No`, `Subject`, `Feedback`) VALUES
(1, 'tanya sood', 'tanutanya92@gmail.com', 2147483647, 'love life', 'I love you'),
(2, 'tanvi', 'tanvi83@outlook.com', 2147483647, 'Sex', 'I wanna sex with you'),
(3, 'Garima', 'garimagandhi@outllok.com', 2147483647, 'Flirting Skills', 'Can u pls marry me'),
(4, 'Prabhjot Kaur', 'prabhjotkaur29@outlook.com', 2147483647, 'Project Improve', 'I just wanna say u anmol to improve your project othewise u have to face a reappear of it\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback form`
--
ALTER TABLE `feedback form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback form`
--
ALTER TABLE `feedback form`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
