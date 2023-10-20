<?php 

class Ctlr_Mvc
{

	public function llamando_plantilla_ctlr()
	{
		require_once("Vistas/plantilla.php");
	}


	public function redirecciones_ctlr()
	{
		if (isset($_SESSION['sesionActivaUsu']) && $_SESSION['sesionActivaUsu'] == "true") {
			if (isset($_GET['act'])) {
				$red_ctlr = $_GET['act'];
			}else{
				$red_ctlr = "index";
			}
			$rta = Mdl_Mvc::redirecciones_mdl($red_ctlr);
			include $rta;
		}
	}

}

 ?>