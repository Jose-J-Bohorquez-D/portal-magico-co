<?php
class MvcCtlr{
    public function llamado_plantilla_ctlr()
    {
        require_once("Vistas/plantilla.php");
    }

    public function redirecciones_ctlr()
    {
        if (isset($_GET['a'])) {
            if (!empty($_GET['a'])) {
                $url_ctlr = $_GET['a'];
            }else{
                $url_ctlr = "index";
            }

            $rta = MvcModelo::redirecciones_mdl($url_ctlr);
            var_dump($rta);
        }
    }
}
?>