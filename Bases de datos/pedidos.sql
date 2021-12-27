-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-12-2021 a las 14:37:34
-- Versión del servidor: 10.5.12-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u819747409_elforastero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `UsuarioID` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodcutoID` int(11) NOT NULL,
  `nombreProduc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `UsuarioID`, `nombre`, `apellido`, `prodcutoID`, `nombreProduc`, `cantidad`, `precio`, `fecha`, `hora`) VALUES
(512, 346, 'Braian ', 'Frediani Guelffi', 2, '02. CAMISAS DE VESTIR', 1, 1600, '2021-12-24', '00:17:23'),
(513, 346, 'Braian ', 'Frediani Guelffi', 3, '03. MEDIAS ROMBOS', 1, 330, '2021-12-24', '00:17:24'),
(514, 346, 'Braian ', 'Frediani Guelffi', 4, '04. REMERAS CON CABALLOS', 1, 900, '2021-12-24', '00:17:25'),
(515, 346, 'Braian ', 'Frediani Guelffi', 5, '05. GORROS DE GRÁFA', 1, 600, '2021-12-24', '00:17:26'),
(516, 346, 'Braian ', 'Frediani Guelffi', 2, '02. CAMISAS DE VESTIR', 1, 1600, '2021-12-24', '00:33:00'),
(517, 346, 'Braian ', 'Frediani Guelffi', 3, '03. MEDIAS ROMBOS', 1, 330, '2021-12-24', '00:33:01'),
(518, 346, 'Braian ', 'Frediani Guelffi', 2, '02. CAMISAS DE VESTIR', 1, 1600, '2021-12-24', '00:33:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=519;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
