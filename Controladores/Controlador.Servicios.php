<?php 

class Ctlr_Servicios
{

	public function crear_servicio_ctlr()
	{
	    // Comprobar si los campos requeridos están establecidos en el POST
	    if (isset($_POST['ns_fcs']) && isset($_POST['ds_fcs']) && isset($_POST['vs_fcs']) && isset($_POST['is_fcs']) && isset($_POST['ls_fcs'])) {
	        // Verificar que los campos no estén vacíos
	        if (!empty($_POST['ns_fcs']) && !empty($_POST['ds_fcs']) && !empty($_POST['vs_fcs']) && !empty($_POST['is_fcs']) && !empty($_POST['ls_fcs'])) {
	            // Crear un array asociativo con los datos
	            $dts_fi_ctlr = array(
	                'nombre' => $_POST['ns_fcs'],
	                'descripcion' => $_POST['ds_fcs'],
	                'valor' => $_POST['vs_fcs'],
	                'imagen' => $_POST['is_fcs'],
	                'link' => $_POST['ls_fcs']
	            );

	            // Puedes imprimir o hacer lo que necesites con el array
	            #var_dump($dts_form_ing);

	            //enviamos los datos al modelo
	            $rtaCs = Mld_servicios::crear_servicio_mdl($dts_fi_ctlr);
	            var_dump($rtaCs);
	            if ( $rtaCs == "cpz") {
	            	header("location=index.php?act=okCns");
	            	unset($_POST);
	            }
	        }
	    }
	}


}



 ?>