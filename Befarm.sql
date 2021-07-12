-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 09:15 PM
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
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `F_Name` varchar(128) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Phone_number` varchar(40) NOT NULL,
  `Location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`F_Name`, `Email`, `password`, `Phone_number`, `Location`) VALUES
('Mwangi Kinuthia', 'kinuthiamwangi@outlook.com', '1234', '0736224031', 'Kisii'),
('Philip Waweru', 'phil1290githii@gmail.com', '2341', '0758306408', 'Nairobi');

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
  `County` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`Farmer_Name`, `Email`, `Password`, `Phone_Number`, `Farmer_Category`, `County`) VALUES
('Alex Gathathai', 'gathathi@gmail.com', 'qwerty', '0799253866', 'maize farmer', 'Machakos'),
('Njoroge Gikonyore', 'gikonyore@gmail.com', '1234', '078274034', 'Potato farmer', 'Embu'),
('James Kamau', 'jymokamau@gmail.com', 'kamau45', '076543566', 'Potato farmer', 'Kirinyanga'),
('brain mwania', 'kamau@gmail.com', '3456', '0712345634', 'Potato farmer', 'Nakuru'),
('kamau', 'kamau@outlook.com', '1256', '07896534', 'Potato farmer', 'Tharaka-nithi'),
('Kimere Iteere', 'Kimereitere45@outlook.com', 'kimere34', '0978563412', 'maize farmer', 'Machakos'),
('Sufuria Kimotho', 'kimotho@gmail.com', 'kimotho23', '0786345126', 'maize farmer', 'Nakuru'),
('Micheal Kinuthia', 'mike45@foo.com', '1234', '0738466834', 'maize', 'KIAMBU'),
(' Kinuthia Njoroge', 'njoroge@gmail.com', '3412', '0789653412', 'maize farmer', 'Meru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
