@extends('layouts.app')

@section('content')
<div class="container" id="registro-visitor">
          <form class="registro" method="POST" action="{{ route('new-visitor') }}" enctype="multipart/form-data"> 
            <h3>REGISTROS DE VISITANTES</h3>
            {{ csrf_field() }}
            <div class="formulario" id="formulario">
              <div class="inputs">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nombre</span>
                  </div>
                  <input type="text" name="vi_nombre" id="vi_nombre" class="form-control" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Apellido</span>
                    </div>
                    <input type="text" name="vi_apellido" id="vi_apellido" class="form-control" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">C&eacute;dula</span>
                    </div>
                    <input type="text" name="vi_cedula" id="vi_cedula" class="form-control" required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Contacto</span>
                  </div>
                    <input type="text" name="vi_telefono" id="vi_telefono" class="form-control" required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Domicilio</span>
                  </div>
                  <textarea name="vi_domicilio" id="vi_domicilio" class="form-control domi" aria-label="With textarea" required></textarea>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nro Carnet</span>
                  </div>
                  <select name="vi_car_id" id="vi_car_id" class="form-control select custom-select">
                    <option value="">Seleccione carnet</option>
                    <option value="1">Nro-1</option>
                    <option value="2">Nro-2</option>
                    <option value="3">Nro-3</option>
                    <option value="4">Nro-4</option>
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">&Aacute;rea a ingresar</span>
                  </div>
                  <select name="asi_dep_id"  class="form-control select custom-select">
                    <option value="">Seleccione &aacute;rea</option>
                    <option value="1">Desarrollo de proyectos</option>
                    <option value="2">Presidencia</option>
                    <option value="3">Despacho de la presidencia</option>
                    <option value="4">Atencion al ciudadano</option>
                    <option value="6">Atencion al ciudadano (CPC)</option>
                    <option value="7">Gerencia de talento humano</option>
                    <option value="8">Gerencia de talento humano jubilados y pensionados</option>
                    <option value="9">Auditoria Interna</option>
                    <option value="10">Consultoria juridica</option>
                    <option value="11">Seguridad integral</option>
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
                  <input type="text" name="vi_responsable" id="vi_responsable" class="form-control" required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">M&oacute;tivo</span>
                  </div>
                  <select name="vi_mt_id" id="vi_mt_id" class="form-control select custom-select">
                    <option value="">Seleccione m&oacute;tivo</option>
                    <option value="1">Entrervista de trabajo</option>
                    <option value="2">Entrega de curriculum</option>
                    <option value="3">Prueba psicologica</option>
                  </select>
                </div>
                <fieldset class="oculto" id="oculto" aria-hidden="true">
                  <legend>Registros de equipos</legend>
                    <div class="input-group mb-3" >
                      <div class="input-group-prepend">
                        <span class="input-group-text">Tipo</span>
                      </div>
                        <input type="text" name="eq_nombre" id="eq_nombre" class="form-control">
                    </div>
                    <div class="input-group mb-3 " >
                      <div class="input-group-prepend ">
                        <span class="input-group-text">Descripci&oacute;n</span>
                      </div>
                      <textarea name="eq_descripcion" class="form-control domi" aria-label="With textarea" placeholder="Descripcion"></textarea>
                    </div>
                </fieldset>
                <button type="button" id="RE" class="btn RE">Registro de equipos<i class="fas fa-laptop"></i>  <i class="fas fa-tools"></i> </button>
                <button type="button" id="oculto2" class="btn CL">Ocultar<i class="far fa-eye-slash"></i></i> </button>
              </div>
              <div class="box-photo">
                <div class="photo">
                  <video id="video" playsinline autoplay></video>
                </div>
                <button type="button" class="btn btn-secondary tfoto" id="snap">Tomar Foto <i class="fas fa-camera"></i></button>
                <canvas id="canvas" width="240" height="240" name="vi_photo"></canvas>
            </div>
            </div> 
            <input type="text" name="asi_entrada" value="<?php echo date("h:i", strtotime("- 1 minute"));?>">
            <button type="submit" class="btn save">Guardar <i class="fas fa-save"></i></button>
          </form> 
        </div>
  <script>
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
  </script>
  <script>
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const snap = document.getElementById("snap");
        const errorMsgElement = document.querySelector('span#errorMsg');

        const constraints = {
            audio: true,
            video: {
                width: 260, height: 260
            }
        };

        // Access webcam
        async function init() {
            try {
                const stream = await navigator.mediaDevices.getUserMedia(constraints);
                handleSuccess(stream);
            } catch (e) {
            errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
            }
        }

        // Success
        function handleSuccess(stream) {
            window.stream = stream;
            video.srcObject = stream;
        }

        // Load init
        init();

        // Draw image
        var context = canvas.getContext('2d');
        snap.addEventListener("click", function() {
            context.drawImage(video, 0, 0, 640, 480);
        });
    </script>
@endsection