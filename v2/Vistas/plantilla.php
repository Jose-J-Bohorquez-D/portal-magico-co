<?php ob_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal-Magico</title>
  <link href="Vistas/Dep/bootstrap/bootstrap.css.map" rel="stylesheet">
  <link href="Vistas/Dep/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="Vistas/Dep/css/sweetalert2.min.css" rel="stylesheet">
  <script type="text/javascript" src="Vistas/Dep/js/sweetalert2.all.min.js"></script>
</head>
<body>
  <?php require_once("Vistas/Modulos/nav.php"); ?>
  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example p-3 rounded-2" tabindex="0">
    <?php 
      if (isset($_SESSION['sesionActivaUsu']) && $_SESSION['sesionActivaUsu'] == "true") {
        require_once("Vistas/Admin/Paginas/admin.php");
        $admin = new Ctlr_Mvc();
        $admin -> redirecciones_ctlr();
      } else {
        require_once("Vistas/Public/Paginas/inicio.php");
        require_once("Vistas/Public/Paginas/historia.php");
        require_once("Vistas/Public/Paginas/nosotros.php");
        require_once("Vistas/Public/Paginas/servicios.php");
        require_once("Vistas/Public/Paginas/contacto.php");
        require_once("Vistas/Public/Paginas/ayuda.php");
      }


    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
</body>
</html>
<?php
ob_end_flush();
?>
