<?php 

	class Ctlr_Admin
	{
		public function ingreso()
		{
			if ( isset( $_GET['ui'] )  && isset( $_GET['pi'] ) ) {
				if ( !empty( $_GET['ui'] ) && !empty( $_GET['pi'] ) ) {
					$dts_form_ing = array('usu_ing' => $_GET['ui'], "pass_ing" => $_GET['pi'] );
					var_dump($dts_form_ing);
				}
			}
		}
	}

 ?>