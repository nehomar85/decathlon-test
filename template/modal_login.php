<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Acceso Deportista</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
		<form id="loginForm">
		  <div class="modal-body">
				<div class="control-group">
					<div class="form-group floating-label-form-group controls">
						<label>Correo Electrónico</label>
						<input class="form-control" type="email" id="email" name="email" placeholder="Correo Electrónico" required >
					</div>
				</div>
				<div class="control-group">
					<div class="form-group floating-label-form-group controls"><label>Contraseña</label>
						<input class="form-control" type="password" id="password" name="password" placeholder="Contraseña" required >
					</div>
				</div>
                <div class="text-center">
                    <small><a class="nav-link text-primary" href="registro.php">Nuevo Deportista ?</a></small>
                </div>
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary">Ingresar</button>
		  </div>
		</form>
	</div>
  </div>
</div>