@extends('layouts.app')

@section('content')
  <div class="container" id="registro-visitor">
    <div class="row-fluid">
      <h3>REGISTROS DE VISITANTES</h3>
			<form method="POST" action="{{route('new-visitor')}}">
        {{ csrf_field() }}
				<div class="col-lg-12">
					<div class="row">
          <div class="inputs">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nombre</span>
                  </div>
                  <input type="text" name="vi_nombre" id="vi_nombre" class="form-control" required onkeypress="return sololetras(event)"> 
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Apellido</span>
                    </div>
                    <input type="text" name="vi_apellido" id="vi_apellido" class="form-control" required onkeypress="return sololetras(event)">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">C&eacute;dula</span>
                    </div>
                    <input type="text" name="vi_cedula" id="vi_cedula" class="form-control" required onkeypress="return solonumeros(event)">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Contacto</span>
                  </div>
                    <input type="text" name="vi_telefono" id="vi_telefono" class="form-control" required onkeypress="return solonumeros(event)">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Domicilio</span>
                  </div>
                  <textarea class="form-control domi"  name="vi_domicilio" id="vi_domicilio" aria-label="With textarea" required onkeypress="return sololetras(event)"></textarea>
                </div>
                <!--div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nro Carnet</span>
                  </div>
                    <input type="number" name="vi_carnet" id="Nrocar" class="form-control" required>
                </div-->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">&Aacute;rea a ingresar</span>
                  </div>
                  <select name="vi_dep_id" id="vi_dep_id" class="form-control select custom-select" >
                    <option value="0">Seleccione &aacute;rea</option>
                    <option value="1">Desarrollo de proyectos</option>
                    <option value="3">Presidencia</option>
                    <option value="">Despacho de la presidencia</option>
                    <option value="">Atencion al ciudadano</option>
                    <option value="">Atencion al ciudadano (CPC)</option>
                    <option value="">Gerencia de talento humano</option>
                    <option value="">Gerencia de talento humano jubilados y pensionados</option>
                    <option value="">Auditoria Interna</option>
                    <option value="">Consultoria juridica</option>
                    <option value="">Seguridad integral</option>
                    <option value="">Formacion socialista</option>
                    <option value="">Desarrollo estrategico y comunicacional</option>
                    <option value="">Vicepresidencia de gestion interna</option>
                    <option value="">Planificacion presuspuesto y organizacion</option>
                    <option value="">Administracion y contabilidad</option>
                    <option value="">Servicios generales</option>
                    <option value="">Mercadeo y asuntos publicos</option>
                    <option value="">Finanzas</option>
                    <option value="">Vicepresidencia de gestion productiva</option>
                    <option value="">Sede oriente (Anzoategui)</option>
                    <option value="">Sede llanos (Apure)</option>
                    <option value="">Sede orinoco (Bolivar)</option>
                    <option value="">Sede andes (Tachira)</option>
                    <option value="">Sede occidentes (Zulia)</option>
                    <option value="">Produccion Integral</option>
                    <option value="">Produccion Integral (Ficcion y Animacion)</option>
                    <option value="">Programacion</option>
                    <option value="">Programacion</option>
                    <option value="">Produccion independiente</option>
                    <option value="">Comunicacion popular</option>
                    <option value="">Imagen y promocion</option>
                    <option value="">vicepresidencia de gestion para el DES .TEC</option>
                    <option value="">Gerencia de tecnologia de informacion</option>
                    <option value="">Gerencia de ingieneria</option>
                    <option value="">Transporte</option>
                    <option value="">Servicios a la produccion</option>
                    <option value="">Gerencia de operaciones tecnicas</option>
                    <option value="">123 TV</option>
                    <option value="">Consejo de contenido editorial</option>
                    <option value="">Vicepresidencia de gestion de operaciones</option>
                    <option value="">Gerencia de comunicaciones</option>
                    <option value="">Seguridad integral</option>
                    <option value="">Gerencia de post produccion</option>
                    <option value="">Vicepresidencia de gestion de operaciones y desarrollo tecnologico</option>
                    <option value="">Gerencia de administracion y contabilidad</option>
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text">Responsable</span>
                  </div>
                  <input type="text" name="vi_responsable" id="vi_responsable" class="form-control" required onkeypress="return sololetras(event)">
              </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">M&oacute;tivo</span>
                  </div>
                  <select name="vi_mt_id" id="vi_mt_id" class="form-control select custom-select" >
                    <option value="0">Seleccione m&oacute;tivo</option>
                    <option value="2">Entrervista de trabajo</option>
                    <option value="3">Entrega de curriculum</option>
                    <option value="4">Prueba psicologica</option>
                  </select>
                </div>
                <!--fieldset class="oculto" id="oculto" aria-hidden="true">
                  <legend>Registros de equipos</legend>
                    <div class="input-group mb-3" >
                      <div class="input-group-prepend">
                        <span class="input-group-text">Tipo</span>
                      </div>
                        <input type="text" name="" id="T" class="form-control" onkeypress="return sololetras(event)">
                    </div>
                    <div class="input-group mb-3 " >
                      <div class="input-group-prepend ">
                        <span class="input-group-text">Descripci&oacute;n</span>
                      </div>
                      <textarea class="form-control domi" aria-label="With textarea" placeholder="Descripcion" ></textarea>
                    </div>
                </fieldset-->
                <button type="button" id="RE" class="btn RE">Registro de equipos<i class="fas fa-laptop"></i>  <i class="fas fa-tools"></i> </button>
                <button type="reset" id="oculto2" class="btn CL">Ocultar<i class="far fa-eye-slash"></i></i> </button>
              </div>
						<!--div class="col-lg-6">
							<fieldset class="form-group">
								<div class="row">
									<div class="form-check radio_check" style="display: none;">
										<input class="form-check-input" type="radio" name="radio_select" id="radiosfoto" value="1" checked style="display: none;">
										<label class="form-check-label" for="radiosfoto">Seleccionar Foto</label>
                  </div>
									<div class="btn btnFoto">
										<input class="form-check-input" type="radio" name="radio_select" id="radiotfoto" value="0" >
                    <label class="form-check-label"  for="radiotfoto" >Tomar foto<i class="fas fa-camera"></i></label>
									</div>
								</div>
							</fieldset>
							<div class="container_radio" style="display: none;" >
								<input type="file" class="form-control-file video_container" name="archivo" id="subirfoto" accept="image/*">
								<video id="video" autoplay="autoplay" class="video_container none"></video>
							</div>
						</div>
            
					</div>
          <canvas id="canvas" class="none"></canvas>
        </div-->
        <button type="submit" class="btn save" id="btn_save">Guardar <i class="fas fa-save"></i></button>
			</form>
		</div>
  </div>
  <!--script>
    //Script para mostrar registro de de equipos
    var btnRE = document.getElementById('RE'),
        mostrar = document.getElementById('oculto'),
        btnocultar = document.getElementById('oculto2');
        container= document.getElementById('registro-visitor')

    btnRE.addEventListener('click', function(){
  	  mostrar.classList.add('active');
	    btnocultar.classList.add('active');
      btnRE.classList.add('active');
      container.classList.add('active');
    })
    btnocultar.addEventListener('click', function(e){
	    e.preventDefault();
	    mostrar.classList.remove('active');
	    btnocultar.classList.remove('active');
      btnRE.classList.remove('active');
      container.classList.remove('active');
    });	
  </script-->
@endsection