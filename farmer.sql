-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 11:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be_farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `Farmer_Name` varchar(128) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Phone_Number` varchar(128) NOT NULL,
  `Farmer_Category` varchar(128) NOT NULL,
  `County` varchar(128) NOT NULL,
  `Constituency` varchar(128) NOT NULL,
  `Ward` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`Farmer_Name`, `Email`, `Password`, `Phone_Number`, `Farmer_Category`, `County`, `Constituency`, `Ward`) VALUES
('eve wachira', 'evewachira@outlook.com', '1234', '0738466834', 'maize', 'KIAMBU', 'Lari', 'Kinale'),
('Micheal Kinuthia', 'mike45@foo.com', '1234', '0738466834', 'maize', 'KIAMBU', 'Lari', 'Kinale');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
