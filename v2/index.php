<?php 


require_once("Controladores/Ctlr.Mvc.php");
require_once("Controladores/Ctlr.Servicios.php");
require_once("Controladores/Ctlr.Usuarios.php");

require_once("Modelos/Mdl.Mvc.php");
require_once("Modelos/Mdl.Servicios.php");
require_once("Modelos/Mdl.Usuarios.php");


$mvc = new Ctlr_Mvc();
$mvc -> llamando_plantilla_ctlr();

 ?>