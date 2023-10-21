<?php 

class Ctlr_Servicios
{
	public function listar_servicios_ctlr()
	{
		$rta = Mdl_Servicios::listar_servicios_Mdl("servicios");
		#var_dump($rta);
		foreach ($rta as $row => $item) {
		echo '
		<tr>
			<td>'.$item["nombre_servicio"].'</td>
			<td>'.$item["descripcion_servicio"].'</td>
			<td>'.$item["imagen_servicio"].'</td>
			<td>'.$item["valor_servicio"].'</td>
			<td>'.$item["link_contacto"].'</td>
			<td><button class="btn btn-sm btn-warning">Editar</button></td>
			<td><button class="btn btn-sm btn-danger">Eliminar</button></td>
		</tr>';
		}

	}

	public function registro_servicio_ctlr()
	{

		if (isset($_POST['ns_fcs'])) {
		    // Recibir los datos del formulario en un array asociativo
		    if (!empty($_POST['ns_fcs'])) {
		    	$datosFormRegistroServicioCtlr = array(
		        'ns_fcs' => $_POST['ns_fcs'],
		        'ds_fcs' => $_POST['ds_fcs'],
		        'vs_fcs' => $_POST['vs_fcs'],
		        'is_fcs' => $_POST['is_fcs'],
		        'ls_fcs' => $_POST['ls_fcs']
		    );
		    // Hacer lo que necesites con los datos, como guardarlos en una base de datos, procesarlos, etc.
		    $rta = Mdl_Servicios::registro_servicio_mdl($datosFormRegistroServicioCtlr);
		    if ($rta == "cpz") {
		    	header("location:index.php?act=csOk");
		    }else{
		    	header("location:index.php");
		    }
		  } 
		}
	}



}

 ?>