<?php 

class Mdl_Mvc
{

	public static function redirecciones_mdl($red_mdl)
	{
		if ($red_mdl == "inicio" || $red_mdl == "contacto" || $red_mdl == "ayuda" ||
			$red_mdl == "historia" || $red_mdl == "nosotros" || $red_mdl == "salir" || 
			$red_mdl == "servicios" || $red_mdl == "admin") {
			$mod = "Vistas/Admin/Paginas/".$red_mdl.".php";
		}elseif ($red_mdl == "csOk") {
			$mod = "Vistas/Admin/Paginas/admin.php";
		}elseif ($red_mdl == "falloIng") {
			$mod = "Vistas/Admin/Paginas/inicio.php";
		}else{
			$mod = "Vistas/Admins/Paginas/404.php";
		}
		return $mod;
		$stmt->close();
	}

}

 ?>