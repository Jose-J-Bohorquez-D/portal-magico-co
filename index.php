<?php 
require_once("Controladores/Controlador.Mvc.php");
require_once("Controladores/Admin.Ctlr.php");

require_once("Modelos/Mvc.Mdl.php");


$mvc = new MvcCtlr(); $mvc->llamado_plantilla_ctlr();

?>