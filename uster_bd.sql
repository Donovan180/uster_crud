-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2024 a las 01:53:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uster_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `license` varchar(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `surname`, `license`, `created_at`, `updated_at`) VALUES
(5, 'Jorge', 'López', '3', '2024-04-06 19:40:41', '2024-04-07 07:34:20'),
(7, 'Eduardo', 'Guerrero', '2', '2024-04-06 23:08:37', '2024-04-07 05:08:37'),
(8, 'José Carlos', 'Montes de Oca Luna', '4', '2024-04-08 17:42:10', '2024-04-08 23:42:10'),
(9, 'Juan', 'Hernández Romero', '8', '2024-04-08 18:23:40', '2024-04-09 00:23:40'),
(10, 'Donovan Eduardo', 'Hernández Guerrero', '4', '2024-04-08 18:25:05', '2024-04-09 00:25:05'),
(11, 'Carlos', 'Terrones', '1', '2024-04-08 18:46:25', '2024-04-09 00:46:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trip`
--

CREATE TABLE `trip` (
  `idTrip` int(11) NOT NULL,
  `vehicle` varchar(30) NOT NULL,
  `driver` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trip`
--

INSERT INTO `trip` (`idTrip`, `vehicle`, `driver`, `date`, `created_at`, `updated_at`) VALUES
(1, 'hatchback', 'Donovan Eduardo', '2024-04-09', '2024-04-05 23:52:18', '2024-04-05 23:52:18'),
(2, 'fiesta', 'Juan', '2024-04-19', '2024-04-05 23:52:18', '2024-04-09 05:40:50'),
(3, 'sentra', 'José Carlos', '2024-04-09', '2024-04-06 16:11:50', '2024-04-06 16:11:50'),
(4, 'fiesta', 'Juan', '2024-04-18', '2024-04-06 16:11:50', '2024-04-06 16:11:50'),
(5, 'A3', 'Eduardo', '2024-04-24', '2024-04-06 23:13:50', '2024-04-09 05:39:26'),
(6, 'hatchback', 'Jorge', '2024-04-30', '2024-04-07 00:24:04', '2024-04-09 05:47:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `model` varchar(20) NOT NULL,
  `plate` varchar(20) NOT NULL,
  `licenseRiquered` varchar(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehicles`
--

INSERT INTO `vehicles` (`id`, `brand`, `model`, `plate`, `licenseRiquered`, `created_at`, `updated_at`) VALUES
(3, 'nissan', 'sentra', 'gruesa', '4', '2024-04-05 15:46:04', '2024-04-06 07:22:45'),
(4, 'jac', 'Sei6', 'ligero', '1', '2024-04-05 15:46:04', '2024-04-06 07:23:01'),
(5, 'lincoln', 'aviator', 'media', '1', '2024-04-05 19:30:27', '2024-04-06 01:30:42'),
(6, 'ford', 'fiesta', 'gruesa', '8', '2024-04-06 00:50:46', '2024-04-06 07:23:15'),
(7, 'audi', 'A3', 'gruesa', '2', '2024-04-06 19:55:52', '2024-04-07 01:55:52'),
(8, 'mazda', 'hatchback', 'media', '3', '2024-04-07 01:37:35', '2024-04-09 05:46:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`idTrip`);

--
-- Indices de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `trip`
--
ALTER TABLE `trip`
  MODIFY `idTrip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
