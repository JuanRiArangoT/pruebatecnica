-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2023 a las 01:54:12
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebatecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

CREATE TABLE `employee` (
  `dni` int(11) NOT NULL,
  `dni_type` varchar(400) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `first_name` varchar(400) NOT NULL,
  `last_name` varchar(400) NOT NULL,
  `gender` varchar(400) NOT NULL,
  `date_born` date NOT NULL,
  `telephone` int(12) NOT NULL,
  `blood_type` varchar(400) NOT NULL,
  `address` varchar(400) NOT NULL,
  `contact` varchar(400) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`dni`, `dni_type`, `photo`, `first_name`, `last_name`, `gender`, `date_born`, `telephone`, `blood_type`, `address`, `contact`, `created_at`, `updated_at`, `status`) VALUES
(1002147855, 'Cedula', 'foto prueba', 'Juan', 'Arango', 'Masculino', '2013-07-31', 2147483647, 'A+', 'Calle 64BB #106-51', 'iesjuanricardo@gmail.com', '2023-12-19', '0000-00-00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`dni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
