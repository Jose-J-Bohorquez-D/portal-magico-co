<?php 
ob_start(); 
require_once("Controladores/Controlador.Mvc.php");
<<<<<<< HEAD
require_once("Controladores/Controlador.Admin.php");
require_once("Controladores/Controlador.Servicios.php");

require_once("Modelos/Modelo.Servicios.php");


$mvc = new Mvc(); $mvc->llamado_plantilla();

=======
require_once("Controladores/Admin.Ctlr.php");

require_once("Modelos/Mvc.Mdl.php");


$mvc = new MvcCtlr(); $mvc->llamado_plantilla_ctlr();
>>>>>>> 0f59b9d665029845f9f8635619250fd2c34b3884

?>