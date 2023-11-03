-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2023 at 09:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalmagico2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE `estados` (
  `id_est` int NOT NULL,
  `nombre_est` varchar(50) COLLATE utf16_spanish_ci NOT NULL DEFAULT '',
  `desc_est` varchar(255) COLLATE utf16_spanish_ci NOT NULL DEFAULT '',
  `fecha_crea_est` datetime DEFAULT NULL,
  `fecha_update_est` int DEFAULT NULL,
  `fecha_del_est` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`id_est`, `nombre_est`, `desc_est`, `fecha_crea_est`, `fecha_update_est`, `fecha_del_est`) VALUES
(1, 'Activo', 'representa un estado de actividad positivo en el aplicativo', '2023-11-03 15:58:08', NULL, NULL),
(2, 'Inactivo', 'representa un estado de inactividad negativo en el aplicativo', '2023-11-03 15:58:31', NULL, NULL),
(3, 'Baneado', 'representa que no podra volver a acceder al aplicativo', '2023-11-03 15:59:17', NULL, NULL),
(4, 'Activo', 'Usuario con acceso completo', '2023-11-03 16:32:22', NULL, NULL),
(5, 'Inactivo', 'Usuario con acceso desactivado', '2023-11-03 16:32:22', NULL, NULL),
(6, 'Bloqueado', 'Usuario bloqueado por violación de términos', '2023-11-03 16:32:23', NULL, NULL),
(7, 'Pendiente', 'Usuario con registro pendiente de aprobación', '2023-11-03 16:32:24', NULL, NULL),
(8, 'Administrador', 'Rol de administrador con todos los privilegios', '2023-11-03 16:32:25', NULL, NULL),
(9, 'Editor', 'Rol de editor con permisos de edición', '2023-11-03 16:32:25', NULL, NULL),
(10, 'Invitado', 'Rol de invitado con acceso limitado', '2023-11-03 16:32:26', NULL, NULL),
(11, 'Moderador', 'Rol de moderador con permisos de moderación', '2023-11-03 16:32:27', NULL, NULL),
(12, 'Cliente', 'Rol de cliente con acceso a servicios', '2023-11-03 16:32:30', NULL, NULL),
(13, 'Supervisor', 'Rol de supervisor con funciones de supervisión', '2023-11-03 16:32:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_rol` int NOT NULL,
  `nombre_rol` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `desc_rol` varchar(255) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `estado_rol` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `fecha_crea_rol` datetime DEFAULT NULL,
  `fecha_update_rol` datetime DEFAULT NULL,
  `fecha_del_rol` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`, `desc_rol`, `estado_rol`, `fecha_crea_rol`, `fecha_update_rol`, `fecha_del_rol`) VALUES
(2, 'SuperAdmin', 'este rol tiene accesos totales y sin reestricciones sobre la informacion de la base de datos y el aplicativo en general XD', 'Inactivo', '2023-11-03 16:07:02', NULL, NULL),
(3, 'Administrador-General', 'este rol administrador-general tiene permisos generales solo sobre el sistema, pero no podra eliminar datos', 'Inactivo', '2023-11-03 16:16:42', '2023-11-03 16:18:21', NULL),
(4, 'Admin', 'este rol admin tiene permisos de edicion y actualizacion en el sistema', 'Activo', '2023-11-03 16:16:55', NULL, NULL),
(5, 'visitante', 'este rol tiene permisos solo de vista o visualizacion en el sistema', 'Activo', '2023-11-03 16:18:02', NULL, NULL),
(6, 'Administrador', 'Rol con privilegios de administración', 'Activo', '2023-11-03 16:33:03', NULL, NULL),
(7, 'Usuario Estándar', 'Rol de usuario común', 'Activo', '2023-11-03 16:33:13', NULL, NULL),
(8, 'Editor', 'Rol con permisos de edición', 'Inactivo', '2023-11-03 16:33:08', NULL, NULL),
(9, 'Invitado', 'Rol con acceso limitado', 'Inactivo', '2023-11-03 16:33:09', NULL, NULL),
(10, 'Supervisor', 'Rol de supervisión', 'Activo', '2023-11-03 16:33:12', NULL, NULL),
(11, 'Gerente', 'Rol de gerencia', 'Activo', '2023-11-03 16:33:06', NULL, NULL),
(12, 'Moderador', 'Rol de moderación', 'Activo', '2023-11-03 16:33:10', NULL, NULL),
(13, 'Analista', 'Rol de análisis de datos', 'Activo', '2023-11-03 16:33:04', NULL, NULL),
(14, 'Cliente', 'Rol de cliente', 'Activo', '2023-11-03 16:33:05', NULL, NULL),
(15, 'Soporte Técnico', 'Rol de soporte técnico', 'Activo', '2023-11-03 16:33:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int NOT NULL,
  `nombre_servicio` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `descripcion_servicio` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `imagen_servicio` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `valor_servicio` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `link_contacto` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `fecha_crea_serv` datetime DEFAULT NULL,
  `fecha_update_serv` datetime DEFAULT NULL,
  `fecha_del_serv` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Dumping data for table `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`, `descripcion_servicio`, `imagen_servicio`, `valor_servicio`, `link_contacto`, `fecha_crea_serv`, `fecha_update_serv`, `fecha_del_serv`) VALUES
(24, 'salamiento', 'le sala hasta el aghua', 'sal', '100', 'wppkaskajskajskajskajskj', '2023-11-03 16:26:50', NULL, NULL),
(26, 'buena suerte', 'se gana la loteria', 'suerte', '90 ', 'wpplakslakslkaslk', '2023-11-03 16:26:52', NULL, NULL),
(27, 'putas', 'mas putas', '999', '10', 'putas solo putas', '2023-11-03 16:26:53', NULL, NULL),
(28, 'Lectura de Tarot', 'Lectura de cartas para obtener orientación espiritual', 'tarot.jpg', '50.00', NULL, '2023-11-03 16:26:54', NULL, NULL),
(29, 'Astrología Natal', 'Análisis de la carta astral para comprender la personalidad', 'astrologia.jpg', '60.00', NULL, '2023-11-03 16:26:55', NULL, NULL),
(30, 'Limpieza Energética', 'Limpieza y armonización de energías negativas', 'limpieza_energetica.jpg', '70.00', NULL, '2023-11-03 16:26:55', NULL, NULL),
(31, 'Mediumnidad', 'Comunicación con el mundo espiritual', 'mediumnidad.jpg', '80.00', NULL, '2023-11-03 16:26:56', NULL, NULL),
(32, 'Numerología', 'Estudio de los números para revelar aspectos de la vida', 'numerologia.jpg', '45.00', NULL, '2023-11-03 16:26:57', NULL, NULL),
(33, 'Cristaloterapia', 'Uso de cristales para sanación y equilibrio energético', 'cristaloterapia.jpg', '55.00', NULL, '2023-11-03 16:26:58', NULL, NULL),
(34, 'Reiki', 'Transmisión de energía curativa a través de las manos', 'reiki.jpg', '65.00', NULL, '2023-11-03 16:26:59', NULL, NULL),
(35, 'Runas', 'Lectura de runas para recibir guía espiritual', 'runas.jpg', '50.00', NULL, '2023-11-03 16:27:00', NULL, NULL),
(36, 'Aromaterapia', 'Uso de aceites esenciales para la salud y bienestar', 'aromaterapia.jpg', '40.00', NULL, '2023-11-03 16:27:01', NULL, NULL),
(37, 'Meditación Guiada', 'Sesiones de meditación para la relajación y el crecimiento espiritual', 'meditacion.jpg', '30.00', NULL, '2023-11-03 16:27:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `nombre_usu` varchar(50) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `apellido_usu` varchar(50) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `tel_usu` bigint DEFAULT NULL,
  `correo_usu` varchar(50) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `usu_usu` varchar(50) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `pwd_usu` varchar(50) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `rol_usu` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usu`, `apellido_usu`, `tel_usu`, `correo_usu`, `usu_usu`, `pwd_usu`, `rol_usu`) VALUES
(1, 'jose', 'b', 3178773186, 'bd@gmail.com', 'bd', 'abc123', 2),
(2, 'luis', 'b', 3023031831, 'lebd@gmail.com', 'luis', 'cba321', 2),
(3, 'ia', 'auto', 0, 'osiris@gmail.com', 'osiris', 'osiris', 2),
(4, 'John', 'Doe', 5551234567, 'john@example.com', 'johndoe', 'password1', NULL),
(5, 'Jane', 'Smith', 5559876543, 'jane@example.com', 'janesmith', 'password2', NULL),
(6, 'Robert', 'Johnson', 5555678901, 'robert@example.com', 'robertjohnson', 'password3', NULL),
(7, 'Emily', 'Davis', 5552345678, 'emily@example.com', 'emilydavis', 'password4', NULL),
(8, 'William', 'Wilson', 5558765432, 'william@example.com', 'williamwilson', 'password5', NULL),
(9, 'Sarah', 'Brown', 5553456789, 'sarah@example.com', 'sarahbrown', 'password6', NULL),
(10, 'Michael', 'Anderson', 5556543210, 'michael@example.com', 'michaelanderson', 'password7', NULL),
(11, 'Olivia', 'Lee', 5554321098, 'olivia@example.com', 'oliviale', 'password8', NULL),
(12, 'David', 'Martinez', 5552109876, 'david@example.com', 'davidmartinez', 'password9', NULL),
(13, 'Ava', 'Garcia', 5557890123, 'ava@example.com', 'avagarcia', 'password10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_est`),
  ADD KEY `nombre_est` (`nombre_est`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`),
  ADD KEY `FK_roles_estados` (`estado_rol`);

--
-- Indexes for table `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `FK_usuarios_roles` (`rol_usu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `id_est` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `FK_roles_estados` FOREIGN KEY (`estado_rol`) REFERENCES `estados` (`nombre_est`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_usuarios_roles` FOREIGN KEY (`rol_usu`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
