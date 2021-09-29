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
							<input type="text" name="us_id" id="vi_id" class="form-control" id="cedula" value="" hidden="">
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text">Nombre:</span>
								</div>
								<input type="text" name="vi_nombre" id="vi_nombre" class="form-control" id="cedula" value=""  maxlength="9" >
							</div>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text">Apellido:</span>
								</div>
								<input type="text" name="vi_apellido" id="vi_apellido" class="form-control" value=""  maxlength="9" >
							</div>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text">C&eacute;dula:</span>
								</div>
								<input type="text" name="vi_cedula" id="vi_cedula" class="form-control" value="" onkeypress="return solonumeros(event)" maxlength="9" >
							</div>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<span class="input-group-text">Telefono</span>
								</div>
								<input type="text" name="vi_telefono" id="vi_telefono" class="form-control" value="" >
							</div> 
							<div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Domicilio</span>
                                </div>
                                <input type="text" name="vi_domicilio" id="vi_domicilio" class="form-control" value="" disabled='disabled'>
                             </div> 
                             <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Responsable</span>
                                </div>
                                <input type="text" name="vi_responsable" id="vi_responsable" class="form-control" value="" disabled='disabled'>
                             </div>
                             <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Motivo</span>
                                </div>
                                <input type="text" name="mt_motivo" id="mt_motivo" class="form-control" value="" disabled='disabled'>
                             </div> 
                             <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Nro Carnet</span>
                                </div>
                                <input type="text" name="vi_card_id" id="vi_card_id" class="form-control" value="" disabled='disabled'>
                             </div> 
							<button type="submit" class="btn regisE" id="edit">Guardar<i class="fas fa-save"></i></button>
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