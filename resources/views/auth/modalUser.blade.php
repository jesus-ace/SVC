 <div class="modal fade" id="modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" id="esc"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h3></h3>
				<div class="acomodar">
					<div class="contenido">
						<!--Formulario par editar un usuario-->
						<form id='formeditar' class="Editar-usuario" method="POST" action="">
							{{ csrf_field() }}
							{{method_field('PUT')}}
							<input type="text" name="us_id" id="us_id" class="form-control" id="cedula" value="" hidden="">
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text">Nombre:</span>
								</div>
								<input type="text" name="us_nombre" id="us_nombre" class="form-control" id="cedula" value="" onkeypress="return solonumeros(event)" maxlength="9" >
							</div>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text">Apellido:</span>
								</div>
								<input type="text" name="us_apellido" id="us_apellido" class="form-control" value="" onkeypress="return solonumeros(event)" maxlength="9" >
							</div>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text">C&eacute;dula:</span>
								</div>
								<input type="text" name="us_cedula" id="us_cedula" class="form-control" value="" onkeypress="return solonumeros(event)" maxlength="9" >
							</div>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text">User name</span>
								</div>
								<input type="text" name="us_user" id="us_user" class="form-control" value="" >
							</div>  
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text">correo</span>
								</div>
								<input type="text" name="us_correo" id="us_correo" class="form-control"  value="" >
							</div>
							<button type="submit" class="btn regisE" id="edit">Guardar<i class="fas fa-save"></i></button>
						</form>
						<!--Formulario para eliminar usuario (cambia la columna us_estatus a 0 y con condiciones en la rutas no le permitira el acceso a las vistas)-->
						<form method="POST" action="" class="Eliminar-usuario" id="formeliminar">
							{{ csrf_field() }}
							{{method_field('PATCH')}}
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">¿Eliminar?</span>
								</div>
								<select name="us_estatus" id="us_estatus" class="form-control select custom-select">
									<option value="">No</option>
									<option value="0">Si</option>
								</select>
							</div>
							<button type="submit" style="display: block;" class="btn regisE" id="btnRA">Aceptar<i class="fas fa-save"></i></button>
						</form>
					</div>
					<div class="box-photo1" >
						<img  alt="Foto de perfil" id="box_photo">
						<button type="button" class="Editar"  id="edit" data-toggle="modal" data-target="#edit">Editar<i class="far fa-edit"></i></button>
						<button type="button" class="Eliminar" id="delete" data-toggle="modal" data-target="#formeliminar">Eliminar<i class="fas fa-user-slash"></i></button>
						<button type="button" class="btn regisNV" id="no-eliminar" >No Eliminar<i class="fas fa-ban"></i></button>
						<button class="btn regisNE" id="btnRNE" onclick="desactivar();" >No Editar<i class="fas fa-ban"></i></button>  
					</div>
					<button class="btn regisNE" id="esc" >Cancelar<i class="fas fa-ban"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>