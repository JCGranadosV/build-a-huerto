-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2021 a las 09:40:19
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `huerto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechariego`
--

CREATE TABLE `fechariego` (
  `ID` int(11) NOT NULL,
  `ultriego` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fechariego`
--

INSERT INTO `fechariego` (`ID`, `ultriego`) VALUES
(1, '2028-10-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huertos`
--

CREATE TABLE `huertos` (
  `ID` int(11) NOT NULL,
  `usuario` bigint(20),
  `tipoPlanta` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `solosombra` varchar(200) NOT NULL,
  `riego` int(11) NOT NULL,
  `cosecha` varchar(200) NOT NULL,
  `tamano` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `ubicacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `huertos`
--

INSERT INTO `huertos` (`ID`, `tipoPlanta`, `nombre`, `fecha`, `solosombra`, `riego`, `cosecha`, `tamano`, `costo`, `ubicacion`) VALUES
(1, '', 'marco', '2021-10-22', 'sol', 2, 'noviembre', 1, 40, '0'),
(2, '', 'ramona', '2020-11-23', 'sombra', 1, 'febrero', 1, 300, '0'),
(3, '', 'ramoncita', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(4, '', 'dolores', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(5, '', 'clotilde', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(6, '', 'clotilde', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(7, '', 'clotilde', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(8, '', 'clotilde', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(9, '', 'clotilde', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(10, '', 'clotilde', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(11, '', 'clotilde', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(12, '', 'clotilde', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(13, '', 'clotilde', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(14, '', 'clotilde', '2020-11-23', 'sombra', 1, 'mayo', 1, 100, '0'),
(15, 'hortaliza', 'clotilde', '1998-10-22', 'sol', 1, 'mayo', 1, 133, '0'),
(16, 'hortaliza', 'zanahoria1', '2021-04-23', 'sol', 4, 'enero', 5, 350, 'Huerto 1 izquierda'),
(17, 'hortaliza', 'rafiki', '2001-10-31', 'sombra', 3, 'febrero', 2, 50, 'ultimo cuarto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fechariego`
--
ALTER TABLE `fechariego`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `huertos`
--
ALTER TABLE `huertos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fechariego`
--
ALTER TABLE `fechariego`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `huertos`
--
ALTER TABLE `huertos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE `usuarios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userid` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4