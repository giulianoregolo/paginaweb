-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2018 a las 23:10:46
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plantavszombies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartas`
--

CREATE TABLE `cartas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Clase` varchar(20) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Coste` int(10) NOT NULL,
  `Ataque` int(10) NOT NULL,
  `Salud` int(10) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Rareza` varchar(20) NOT NULL,
  `Tribu` varchar(20) NOT NULL,
  `Tribu2` varchar(20) NOT NULL,
  `Tribu3` varchar(20) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cartas`
--

INSERT INTO `cartas` (`id`, `Nombre`, `Clase`, `Tipo`, `Coste`, `Ataque`, `Salud`, `Descripcion`, `Rareza`, `Expansion`, `Tribu`, `Tribu2`, `Tribu3`) VALUES
(0, 'Ajo', 'Guardián', 'Planta', 1, 1, 5, 'Cuando un Zombi le inflige daño, mueve a ese Zombi a la izquierda. Si es un Vampidito, lo destruye.', 'Evento', '', '', '', ''),
(1, 'Nuezmeolvides', 'Guardián', 'Planta', 1, 2, 1, 'Los Trucos Zombis cuestan 1 mas.', 'Evento', '', '', '', ''),
(2, 'Platanosaurio Rex', 'gigante', 'planta', 4, 3, 3, 'Doble impacto. Dinorrugido: obtiene +1/+1', 'Legendaria', 'Prémium', '', '', '');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantavszombies`
--

CREATE TABLE `plantavszombies` (
  `id` int(255) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `password` int(10) NOT NULL,
  `emal` varchar(30) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `continente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
