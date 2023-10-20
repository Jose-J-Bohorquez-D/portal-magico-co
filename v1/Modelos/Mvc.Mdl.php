|<?php 

class MvcModelo
{
	public static function redirecciones_mdl($url_mdl)
	{
		if ($url_mdl == "ingreso") {
			
			$pagina = "Vistas/Paginas/". $url_mdl . ".php";
		}elseif ($url_mdl == "index") {
			return $pagina="Vistas/plantilla.php";
		}else{
			return $pagina="Vistas/Paginas/404.php";
		}
	}
}

 ?>