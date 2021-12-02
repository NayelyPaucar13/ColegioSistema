-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 05:17:34
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `ID` int(11) NOT NULL,
  `NOMBRES` varchar(150) NOT NULL,
  `APELLIDOS` varchar(150) NOT NULL,
  `CORREO` varchar(150) NOT NULL,
  `REGION` varchar(100) NOT NULL,
  `DISTRITO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`ID`, `NOMBRES`, `APELLIDOS`, `CORREO`, `REGION`, `DISTRITO`) VALUES
(2, 'Lorena Bia', 'Paredes Medina', 'gonzalesmari25@gmail.com', 'Lima', 'Los Olivos'),
(3, 'Maria', 'Perez Gonzales', 'maria47@hotmail.com', 'Ica', 'Ica'),
(4, 'Nahomi', 'Pineda Gonzales', 'pinedanahomi58@gmail.com', 'Ica', 'Subtanjalla'),
(5, 'Vicente', 'Morales Cuba', 'cubamorales@gmail.com', 'Ica', 'Guadalupe'),
(6, 'Oscar Luis', 'Muñoz Injante', 'injaente45mu@gmail.com', 'Ica', 'Los Aquijes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `ID` int(11) NOT NULL,
  `Departamento` varchar(150) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`ID`, `Departamento`, `Estado`) VALUES
(1, 'Ica', 0),
(2, 'Lima', 0),
(3, 'Ayacucho', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
