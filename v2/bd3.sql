-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla portalmagico2023.servicios: ~2 rows (aproximadamente)
INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`, `descripcion_servicio`, `imagen_servicio`, `valor_servicio`, `link_contacto`) VALUES
	(24, 'salamiento', 'le sala hasta el aghua', 'sal', '100 usd', 'wppkaskajskajskajskajskj'),
	(26, 'buena suerte', 'se gana la loteria', 'suerte', '90 usd', 'wpplakslakslkaslk');

-- Volcando datos para la tabla portalmagico2023.usuarios: ~3 rows (aproximadamente)
INSERT INTO `usuarios` (`id_usuario`, `nombre_usu`, `apellido_usu`, `tel_usu`, `correo_usu`, `usu_usu`, `pwd_usu`) VALUES
	(1, 'jose', 'b', '3178773186', 'bd@gmail.com', 'bd', 'abc123'),
	(2, 'luis', 'b', '3023031831', 'lebd@gmail.com', 'luis', 'cba321'),
	(3, 'ia', 'auto', '0000000000', 'osiris@gmail.com', 'osiris', 'osiris');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
