      <?php 
      
      if (!isset($_SESSION['sesionActivaUsu'])) {
        echo '
        <nav id="navbar-example2" class="navbar navbar-expand-lg bg-dark sticky-top px-3 mb-3" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand text-success" href="#">Portal-Magico</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="#inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#historia">Historia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#nosotros">Nosotros</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                  aria-expanded="false">Servicios</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Dinero</a>
                  <a class="dropdown-item" href="#">Amor</a>
                  <a class="dropdown-item" href="#">Venganza</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Ayuda</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#contacto">Contacto</a>
              </li>
            </ul>

        <button type="button" class="btn btn-outline-success" style="margin-left: auto;" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ingresar
        </button>';
      }else{
        echo '
        <nav id="navbar-example2" class="navbar navbar-expand-lg bg-dark sticky-top px-3 mb-3" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand text-success" href="#">Portal-Magico</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="nav nav-pills">
            </ul>

        <a href="index.php?act=salir" style="margin-left: auto;">
          <button type="button" class="btn btn-outline-danger">
            Salir
          </button>
        </a>
        ';
      }


       ?>
      
    </div>
  </div>
</nav>

<form method="post">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingreso Al Sistema</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <label>Usuario:</label>
          <input type="text" class="form-control form-control-sm" name="formIngUsu" placeholder="Ingrese usuario"><br>
          <label>Contraseña:</label>
          <input type="text" class="form-control form-control-sm" name="formIngPwd" placeholder="Ingrese contraseña"><br>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Ingresar</button>
      </div>
    </div>
  </div>
</div>
</form>