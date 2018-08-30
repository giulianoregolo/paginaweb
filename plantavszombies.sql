-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 11:36 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantavszombies`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartas`
--

CREATE TABLE `cartas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  `clase` varchar(20) CHARACTER SET latin1 NOT NULL,
  `tipo` varchar(20) CHARACTER SET latin1 NOT NULL,
  `coste` int(10) NOT NULL,
  `ataque` int(10) NOT NULL,
  `salud` int(10) NOT NULL,
  `descripcion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `rareza` varchar(20) CHARACTER SET latin1 NOT NULL,
  `expamsion` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Dumping data for table `cartas`
--

INSERT INTO `cartas` (`id`, `nombre`, `clase`, `tipo`, `coste`, `ataque`, `salud`, `descripcion`, `rareza`, `expamsion`) VALUES
(0, 'lanzaguisantes', 'gigante', 'planta', 1, 1, 1, '', 'comun', ''),
(1, 'lanzaguisantes', 'gigante', 'planta', 1, 1, 1, '-', 'comun', '-'),
(2, 'Platanosaurio Rex', 'gigante', 'planta', 4, 3, 3, 'Doble impacto. Dinorrugido: otiene +1/+1', 'Legendaria', 'Prémium');

-- --------------------------------------------------------

--
-- Table structure for table `plantavszombies`
--

CREATE TABLE `plantavszombies` (
  `id` int(255) NOT NULL,
  `Nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` int(10) NOT NULL,
  `emal` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(20) CHARACTER SET latin1 NOT NULL,
  `continente` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
