<?php 

require_once("Mdl.Con.php");

class Mdl_Servicios extends Mdl_Conexion_BD
{ 
	public static function listar_servicios_Mdl($tabla)
	{
		$stmt = Mdl_Conexion_BD::conectarBD()->prepare("SELECT * FROM $tabla");
		if ($stmt->execute()) {
			return $stmt->fetchAll();
		}else{
			return "pailas";
		}
		$stmt->close();
	}

	public static function registro_servicio_mdl($datosFormRegistroServicioMdl)
	{
		$stmt = Mdl_Conexion_BD::conectarBD()->prepare(
			"INSERT INTO servicios 
			(nombre_servicio, descripcion_servicio, imagen_servicio, valor_servicio, link_contacto)
			VALUES
			(:nombre_servicio, :descripcion_servicio, :imagen_servicio, :valor_servicio, :link_contacto)");

		$stmt -> bindParam(":nombre_servicio", $datosFormRegistroServicioMdl['ns_fcs']);
		$stmt -> bindParam(":descripcion_servicio", $datosFormRegistroServicioMdl['ds_fcs']);
		$stmt -> bindParam(":imagen_servicio", $datosFormRegistroServicioMdl['vs_fcs']);
		$stmt -> bindParam(":valor_servicio", $datosFormRegistroServicioMdl['is_fcs']);
		$stmt -> bindParam(":link_contacto", $datosFormRegistroServicioMdl['ls_fcs']);

		if ($stmt->execute()) {
			return "cpz";
		}else{
			return "paila beiby";
		}
		$stmt->close();
	}

}

 ?>