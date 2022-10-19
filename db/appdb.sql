-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2022 a las 18:05:44
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `age` varchar(3) COLLATE utf8mb4_spanish_ci NOT NULL,
  `grade` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `entity` varchar(120) COLLATE utf8mb4_spanish_ci NOT NULL,
  `state` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `grade`, `entity`, `state`) VALUES
(23123132, 'Mateo Jose Maldonado Salazar', '18', '10B', 'Insecaldas', 'Sin Almorzar'),
(114443556, 'Camilo Estaban Manjarres', '16', '11B', 'Insecaldas', 'Sin Almorzar'),
(1001852619, 'Leyman Alexander Vergara Lopez', '19', '11B', 'SanJose', 'Sin Almorzar'),
(1043664898, 'Juan David Riquett Muñoz', '17', '11C', 'SanJose', 'Sin Almorzar'),
(1044612757, 'Daniel Jose Sanjuan Thomas', '17', '11C', 'SanJose', 'Sin Almorzar'),
(1144435312, 'Valeria Maria Polo de Castro', '16', '11D', 'SanJose', 'Sin Almorzar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `user` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL,
  `entity` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `entity`, `password`) VALUES
(2, 'Insecaldas', 'Insecaldas', '12345'),
(1, 'SanJose', 'SanJose', 's4njos3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`entity`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`entity`) REFERENCES `students` (`entity`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
