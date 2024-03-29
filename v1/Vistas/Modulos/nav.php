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
      <button type="button" class="btn btn-outline-success" style="margin-left: auto;" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        Ingresar
      </button>
    </div>
  </div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title text-center">Ingreso Para Administracion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        <form method="get">
          <div class="form-group text-center">
            <label for="exampleInputEmail1" class="form-label mt-4">Usuario</label>
            <input name="ui" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group text-center">
            <label for="exampleInputPassword1" class="form-label mt-4">Contraseña</label>
            <input name="pi" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
          </div>
      </div>
      <br>
      <div class="modal-footer justify-content-between">
        <input type="submit" class="btn btn-primary" value="Ingresar">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </form>

        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingreso Para Administracion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <form method="post">
        <div class="modal-body text-center">
          <label class="">Usuario</label>
          <input type="text" name="usu_ing" class="form-control" placeholder="example@example.com"><br>
          <label class="">Contraseña</label>
          <input type="password" name="pwd_ing" class="form-control" placeholder="examplepassword"><br>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-primary" value="Ingresar">
        </div>
      </form>
    </div>
  </div>
</div>