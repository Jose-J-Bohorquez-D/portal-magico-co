<div class="container-fluid">
	<div class="container">
		<h4 class="text-center">pagina de administracion de servicios</h4><br>
		<div class="row">
			
			<div class="col">
				<div class="table-responsive">
					<table class="table">
						<div class="row d-flex justify-content-center">
							<div class="col">
								<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#crearServicio">
							  	Crear Nuevo Servicio
								</button>
								<?php 
									$cs = new Ctlr_Servicios;
									$cs -> crear_servicio_ctlr();
								 ?>
							</div><br><br>
						</div>
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Nombre Servicio</th>
					      <th scope="col">Descripcion</th>
					      <th scope="col">Ruta Imagen</th>
					      <th scope="col">Valor</th>
					      <th scope="col">Link</th>
					      <th scope="col" colspan="2">Acciones</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					      <td>@fat</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td colspan="2">Larry the Bird</td>
					      <td>@twitter</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="crearServicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Nuevo Servicio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post"> 
      	<div class="form-group">
      		<input class="form-control" type="text" name="ns_fcs" placeholder="nombre"><br>
      		<input class="form-control" type="text" name="ds_fcs" placeholder="descripcion"><br>
      		<input class="form-control" type="text" name="vs_fcs" placeholder="valor"><br>
      		<input class="form-control" type="text" name="is_fcs" placeholder="imagen"><br>
      		<input class="form-control" type="text" name="ls_fcs" placeholder="link"><br>
      	</div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" value="Crear Servicio">
      </div>
      </form>
    </div>
  </div>
</div>

