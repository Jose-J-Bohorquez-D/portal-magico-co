<?php 

class AdminCtlr
{
	public function ingreso_ctlr()
	{
		if (isset($_POST['usu_ing']) && isset($_POST['pwd_ing'])) {

			if (!empty($_POST['usu_ing']) && !empty($_POST['pwd_ing'])) {

				$dts_form_ing_ctlr = array(
			        'usu' => $_POST['usu_ing'],
			        'pwd' => $_POST['pwd_ing']
			    );

			    #$rta = AdminMdl::ingreso_mdl($dts_form_ing_ctlr);
			    var_dump($dts_form_ing_ctlr);

			} 
		} 
	} 
}

 ?>