<?php 

class Mdl_Usuarios
{

	public static function ingreso_usuario_mdl($datosFormIngMdl)
	{
		$stmt = Mdl_Conexion_BD::conectarBD()->prepare("SELECT * FROM usuarios WHERE usu_usu = :usu_usu");
		$stmt -> bindParam(":usu_usu", $datosFormIngMdl['usuario']);
		if ($stmt->execute()) {
			return $stmt->fetch();
		}else{
			return "pailas";
		}

		$stmt->close();
	}

}

 ?>