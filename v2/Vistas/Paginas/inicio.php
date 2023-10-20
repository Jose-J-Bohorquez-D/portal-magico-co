<h4 id="inicio"></h4>
<div class="row">
    <h6 class="text-center">Categorias</h6>
    <div class="row">
        <div class="col">
<?php 
$ing = new Ctlr_Usuarios();
$ing -> ingreso_usuario_ctlr();
if (isset($_GET['act'])) {
    if ($_GET['act'] == "falloIng") {
        echo '
        <script type="text/javascript">
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Usuario Y contraseña incorectos!",
          footer: "verifica o contacta a soporte!"
          });
        </script>';
    }
}
 ?>
        </div>
    </div>
</div>