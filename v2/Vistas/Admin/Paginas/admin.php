<?php 
if (!isset($_SESSION['sesionActivaUsu']) || $_SESSION['sesionActivaUsu'] !== true) {
    // La variable de sesión 'sesionActivaUsu' no existe o no es verdadera.
    // Puedes realizar una acción, como redirigir al usuario a la página de inicio de sesión.
	header("location:index.php");
} else {
    // La variable de sesión existe y es verdadera, por lo que puedes continuar con el código para usuarios activos.
}

 ?>

<div class="container-fluid">
	<div class="container-fluid">
		<h4 class="text-center">Administracion de Servicios</h4><br>
		<div class="row">
			<div class="col">
				<div class="table-responsive">
					<table class="table table-sm">
						<div class="row d-flex justify-content-center">
							<div class="col">
								<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#crearServicio">
							  	Crear Nuevo Servicio
								</button>
								<?php 
									$crearServicio = new Ctlr_Servicios();
									$crearServicio -> registro_servicio_ctlr();
									if (isset($_GET['act'])) {
										if ($_GET['act'] == "csOk") {
											echo '
											<script type="text/javascript">
											  Swal.fire({
											    title: "Felicidades!",
											    text: "Creaste un nuevo servicio",
											    icon: "success"
											  });
											</script>';
										}
									}
								 ?>
							</div><br><br>
							<?php 
							$listar = new Ctlr_Servicios();
							$listar -> listar_servicios_ctlr();
							 ?>
						</div>
					  <thead>
					    <tr>
					      <th scope="col">Nombre Servicio</th>
					      <th scope="col">Descripcion</th>
					      <th scope="col">Ruta Imagen</th>
					      <th scope="col">Valor</th>
					      <th scope="col">Link</th>
					      <th scope="col" colspan="2">Acciones</th>
					    </tr>
					  </thead>
					  <tbody>
					    
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<form method="post"> 
<!-- Modal -->
<div class="modal fade" id="crearServicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Nuevo Servicio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">      
      	<div class="form-group">
      		<label>Nombre:</label>
      		<input class="form-control form-control-sm" type="text" name="ns_fcs" placeholder="ingrese nombre"><br>
      		<label>Descripcion:</label>
      		<input class="form-control form-control-sm" type="text" name="ds_fcs" placeholder="ingrese descripcion"><br>
      		<label>Valor:</label>
      		<input class="form-control form-control-sm" type="text" name="vs_fcs" placeholder="ingrese valor"><br>
      		<label>Imagen:</label>
      		<input class="form-control form-control-sm" type="text" name="is_fcs" placeholder="ingrese imagen"><br>
      		<label>Link:</label>
      		<input class="form-control form-control-sm" type="text" name="ls_fcs" placeholder="ingrese link"><br>
      	</div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Crear Servicio</button>
      </div>
    </div>
  </div>
</div>
</form>