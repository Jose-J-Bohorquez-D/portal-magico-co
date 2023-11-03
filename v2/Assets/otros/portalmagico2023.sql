-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2023 a las 01:33:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portalmagico2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` varchar(50) DEFAULT NULL,
  `descripcion_servicio` varchar(50) DEFAULT NULL,
  `imagen_servicio` varchar(50) DEFAULT NULL,
  `valor_servicio` varchar(50) DEFAULT NULL,
  `link_contacto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`, `descripcion_servicio`, `imagen_servicio`, `valor_servicio`, `link_contacto`) VALUES
(24, 'salamiento', 'le sala hasta el aghua', 'sal', '100 usd', 'wppkaskajskajskajskajskj'),
(26, 'buena suerte', 'se gana la loteria', 'suerte', '90 usd', 'wpplakslakslkaslk'),
(27, 'putas', 'mas putas', '999', 'reputas', 'putas solo putas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usu` varchar(50) DEFAULT NULL,
  `apellido_usu` varchar(50) DEFAULT NULL,
  `tel_usu` bigint(20) DEFAULT NULL,
  `correo_usu` varchar(50) DEFAULT NULL,
  `usu_usu` varchar(50) DEFAULT NULL,
  `pwd_usu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usu`, `apellido_usu`, `tel_usu`, `correo_usu`, `usu_usu`, `pwd_usu`) VALUES
(1, 'jose', 'b', 3178773186, 'bd@gmail.com', 'bd', 'abc123'),
(2, 'luis', 'b', 3023031831, 'lebd@gmail.com', 'luis', 'cba321'),
(3, 'ia', 'auto', 0, 'osiris@gmail.com', 'osiris', 'osiris');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
