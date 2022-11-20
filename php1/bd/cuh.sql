-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-07-2022 a las 19:03:02
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula` varchar(8) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `edad` int(2) DEFAULT '18',
  `carrera` varchar(30) DEFAULT NULL
) ENGINE=InnoDB;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`matricula`, `nombre`, `edad`, `carrera`) VALUES
('2020202', 'LuisAlvaro', 2222, 'Educación'),
('2201', 'Laura Pérez', 20, 'Derecho'),
('5522', 'Javier Nuñez', 33, 'Derecho'),
('554', 'Fernando Torres', 20, 'Educación'),
('8844', 'Diana Vargas', 28, 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catcarreras`
--

CREATE TABLE `catcarreras` (
  `idCarrera` int(2) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB;

--
-- Volcado de datos para la tabla `catcarreras`
--

INSERT INTO `catcarreras` (`idCarrera`, `nombre`) VALUES
(1, 'Psicología'),
(2, 'Educación'),
(3, 'Sistemas computacionales'),
(4, 'Derecho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `idDocente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `idCarrera` int(2) NOT NULL,
  `estatus` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`idDocente`, `nombre`, `idCarrera`, `estatus`) VALUES
(1, 'Kevin', 3, 1),
(2, 'Diana Vargas', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `catcarreras`
--
ALTER TABLE `catcarreras`
  ADD PRIMARY KEY (`idCarrera`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`idDocente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catcarreras`
--
ALTER TABLE `catcarreras`
  MODIFY `idCarrera` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `idDocente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
