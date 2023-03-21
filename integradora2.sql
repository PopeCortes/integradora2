-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2023 a las 18:05:33
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

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
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE `musica` (
  `id_cantante` bigint(20) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `cantante` varchar(50) NOT NULL,
  `cancion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `musica`
--

INSERT INTO `musica` (`id_cantante`, `imagen`, `cantante`, `cancion`) VALUES
(1, './assets/img/cantantes/michele.png', 'michelle', './assets/audio/michele/cancion1.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrousuario`
--

CREATE TABLE `registrousuario` (
  `id_Registrar` bigint(20) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Privilegio` varchar(50) NOT NULL DEFAULT 'cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registrousuario`
--

INSERT INTO `registrousuario` (`id_Registrar`, `Usuario`, `Correo`, `Password`, `Privilegio`) VALUES
(3, 'pope', 'pope@gmail.com', '1234567890', 'Admin'),
(4, 'raul', 'raul@gmail.com', 'qwertyuiop', 'cliente'),
(5, 'juan', 'juan@gmail.com', 'juan123', 'cliente'),
(6, 'Huervo', 'huervo@gmail.com', '123', 'cliente'),
(7, 'cesar', 'cesar@correo.com', '123', 'cliente');

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
-- Indices de la tabla `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id_cantante`);

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
-- AUTO_INCREMENT de la tabla `musica`
--
ALTER TABLE `musica`
  MODIFY `id_cantante` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id_Registrar` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
