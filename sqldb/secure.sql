-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 09:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secure`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `idClientes` int(3) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `seguro` varchar(20) NOT NULL,
  `edad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`idClientes`, `nombre`, `apellido`, `rut`, `seguro`, `edad`) VALUES
(1, 'Falcon', 'Bleck', '1', 'Algo', 18),
(2, 'Fawful', 'Bleck', '2', 'Algo', 29),
(3, 'Noob', 'Level', '1313', 'Algo', 60);

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `idClientes` int(3) NOT NULL,
  `item` varchar(15) NOT NULL,
  `cant` int(3) NOT NULL,
  `precio` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`idClientes`, `item`, `cant`, `precio`) VALUES
(1, 'Pikmin 3', 2, 10000),
(3, 'Mario Kart 8', 1, 45000),
(3, 'Mario U', 1, 10000),
(1, 'Watch Dogs', 1, 15000),
(2, 'Zombi U', 2, 8000),
(1, 'Splatoon', 1, 45000),
(1, 'Mario Maker', 1, 30000),
(1, 'Wii Party U', 1, 14000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
