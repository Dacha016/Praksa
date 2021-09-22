-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 03:18 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

/*Create database*/
CREATE DATABASE IF NOT EXISTS praksa;

--
-- Database: `praksa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentori`
--

CREATE TABLE `mentori` (
  `idMentora` int(11) NOT NULL,
  `Ime` varchar(50) NOT NULL,
  `Prezime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentori`
--

INSERT INTO `mentori` (`idMentora`, `Ime`, `Prezime`) VALUES
(1, 'Bosko', 'Stupar');

-- --------------------------------------------------------

--
-- Table structure for table `praktikanti`
--

CREATE TABLE `praktikanti` (
  `idPraktikanta` int(11) NOT NULL,
  `Ime` varchar(45) NOT NULL,
  `Prezime` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `praktikanti`
--

INSERT INTO `praktikanti` (`idPraktikanta`, `Ime`, `Prezime`) VALUES
(1, 'Pera', 'Peric');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentori`
--
ALTER TABLE `mentori`
  ADD PRIMARY KEY (`idMentora`);

--
-- Indexes for table `praktikanti`
--
ALTER TABLE `praktikanti`
  ADD PRIMARY KEY (`idPraktikanta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentori`
--
ALTER TABLE `mentori`
  MODIFY `idMentora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `praktikanti`
--
ALTER TABLE `praktikanti`
  MODIFY `idPraktikanta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
