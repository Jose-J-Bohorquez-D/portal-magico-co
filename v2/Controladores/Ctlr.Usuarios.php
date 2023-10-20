<?php 

class Ctlr_Usuarios
{

	public function ingreso_usuario_ctlr()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    $datosFormIngCtlr = array(
		        'usuario' => $_POST['formIngUsu'],
		        'contrasena' => $_POST['formIngPwd']
		    );

		    // Ahora tienes los datos en un array asociativo llamado $datos
		    // Puedes acceder a los valores así: $datos['usuario'] y $datos['contrasena']
		    $rta = Mdl_Usuarios::ingreso_usuario_mdl($datosFormIngCtlr);
		    var_dump($rta);
		    if ($rta["usu_usu"] == $_POST['formIngUsu'] && $rta["pwd_usu"] == $_POST['formIngPwd']) {

		    	session_start();
		    	$_SESSION['sesionActivaUsu'] = true;
		    	header("location:index.php?act=admin");
		    }else{
		    	header("location:index.php?act=falloIng");
		    }
		}
	}

}

 ?>