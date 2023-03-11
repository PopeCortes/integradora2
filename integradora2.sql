-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2023 a las 01:13:16
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integradora2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrousuario`
--

CREATE TABLE `registrousuario` (
  `id_Registrar` bigint(20) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariocomentario`
--

CREATE TABLE `usuariocomentario` (
  `id_Comentario` bigint(20) NOT NULL,
  `NombreCancion` varchar(100) NOT NULL,
  `NombreArtista` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vistaadmin`
--

CREATE TABLE `vistaadmin` (
  `id_Admin` bigint(20) NOT NULL,
  `Imagen` blob NOT NULL,
  `NombreMusica` varchar(100) NOT NULL,
  `NombreArtista` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  ADD PRIMARY KEY (`id_Registrar`);

--
-- Indices de la tabla `usuariocomentario`
--
ALTER TABLE `usuariocomentario`
  ADD PRIMARY KEY (`id_Comentario`);

--
-- Indices de la tabla `vistaadmin`
--
ALTER TABLE `vistaadmin`
  ADD PRIMARY KEY (`id_Admin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id_Registrar` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuariocomentario`
--
ALTER TABLE `usuariocomentario`
  MODIFY `id_Comentario` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vistaadmin`
--
ALTER TABLE `vistaadmin`
  MODIFY `id_Admin` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
