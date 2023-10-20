<?php 

class Mdl_Mvc
{

	public function redirecciones_mdl($red_mdl)
	{
		if ($red_mdl == "inicio" || $red_mdl == "contacto" || $red_mdl == "ayuda" ||
			$red_mdl == "historia" || $red_mdl == "nosotros" || $red_mdl == "salir" || 
			$red_mdl == "servicios") {
			$mod = "Vistas/Paginas/".$red_mdl.".php";
		}elseif ($red_mdl == "csOk") {
			$mod = "Vistas/Paginas/admin.php";
		}elseif ($red_mdl == "falloIng") {
			$mod = "Vistas/Paginas/inicio.php";
		}else{
			$mod = "Vistas/Paginas/inicio.php";
		}
		return $mod;
		$stmt->close();
	}

}

 ?>