<?php 
ob_start(); 
require_once("Controladores/Controlador.Mvc.php");
require_once("Controladores/Controlador.Admin.php");
require_once("Controladores/Controlador.Servicios.php");

require_once("Modelos/Modelo.Servicios.php");


$mvc = new Mvc(); $mvc->llamado_plantilla();


?>