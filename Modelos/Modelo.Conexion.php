<?php 

	class Mdl_Conexion_BD
	{
		public static function conectarBD()
		{
			$con = new PDO("mysql:host=localhost;dbname=portalmagico2023","root","");
			#var_dump($con);
			return $con;
		}
	}

#$test = new Mdl_Conexion_BD;
#$test -> conectarBD();

 ?>