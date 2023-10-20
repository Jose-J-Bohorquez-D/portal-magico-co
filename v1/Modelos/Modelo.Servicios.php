<?php 
	require_once("Modelo.conexion.php");

	class Mld_servicios extends Mdl_Conexion_BD
	{
		public static function crear_servicio_mdl($dts_fi_mdl)
		{
			$stmt = Mdl_Conexion_BD::conectarBD()->prepare("
				INSERT INTO servicios (nombre_servicio,descripcion_servicio,imagen_servicio,valor_servicio,link_contacto)
				VALUES(:nombre_servicio, :descripcion_servicio, :imagen_servicio, :valor_servicio, :link_contacto)");
			
			$stmt -> bindParam(":nombre_servicio",$dts_fi_mdl["nombre"]);
			$stmt -> bindParam(":descripcion_servicio",$dts_fi_mdl["descripcion"]);
			$stmt -> bindParam(":imagen_servicio",$dts_fi_mdl["valor"]);
			$stmt -> bindParam(":valor_servicio",$dts_fi_mdl["imagen"]);
			$stmt -> bindParam(":link_contacto",$dts_fi_mdl["link"]);

			if ( $stmt -> execute() ) {
				return "cpz";
			}else{
				return "...|.";
			}
		}
	}
	
 ?>