-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 21:52:17
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cereso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_prisioneros`
--

CREATE TABLE `tbl_prisioneros` (
  `idpreso` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `fechaN` date NOT NULL,
  `direccion` varchar(123) NOT NULL,
  `motivoEnc` varchar(123) NOT NULL,
  `sexo` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_prisioneros`
--

INSERT INTO `tbl_prisioneros` (`idpreso`, `nombre`, `apellido`, `estado`, `fechaN`, `direccion`, `motivoEnc`, `sexo`) VALUES
(8, 'Grecia', 'Barraza', 'Chih', '2023-11-10', 'Deming340', 'Asesinato', 'Femenino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_prisioneros`
--
ALTER TABLE `tbl_prisioneros`
  ADD PRIMARY KEY (`idpreso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_prisioneros`
--
ALTER TABLE `tbl_prisioneros`
  MODIFY `idpreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
