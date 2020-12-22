@extends('layouts.app')

@section('content')
<!--script>

 var promisifiedOldGUM = function(constraints, successCallback, errorCallback) {

// First get ahold of getUserMedia, if present
var getUserMedia = (navigator.getUserMedia ||
    navigator.webkitGetUserMedia ||
    navigator.mozGetUserMedia);

// Some browsers just don't implement it - return a rejected promise with an error
// to keep a consistent interface
if(!getUserMedia) {
  return Promise.reject(new Error('getUserMedia is not implemented in this browser'));
}

// Otherwise, wrap the call to the old navigator.getUserMedia with a Promise
return new Promise(function(successCallback, errorCallback) {
  getUserMedia.call(navigator, constraints, successCallback, errorCallback);
});

}

// Older browsers might not implement mediaDevices at all, so we set an empty object first
if(navigator.mediaDevices === undefined) {
navigator.mediaDevices = {};
}

// Some browsers partially implement mediaDevices. We can't just assign an object
// with getUserMedia as it would overwrite existing properties.
// Here, we will just add the getUserMedia property if it's missing.
if(navigator.mediaDevices.getUserMedia === undefined) {
navigator.mediaDevices.getUserMedia = promisifiedOldGUM;
}


// Prefer camera resolution nearest to 1280x720.
var constraints = { audio: true, video: { width: 1280, height: 720 } };

navigator.mediaDevices.getUserMedia(constraints)
.then(function(stream) {
var video = document.querySelector('video');
video.src = window.URL.createObjectURL(stream);
video.onloadedmetadata = function(e) {
  video.play();
};
})
.catch(function(err) {
console.log(err.name + ": " + err.message);
});
</script-->

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
                    @foreach( $departments as $departamento)
                      <option value="{{$departamento->dep_id}}">{{$departamento->dep_nombre}}</option>
                    @endforeach
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
                    @foreach( $reasons as $motivo)
                      <option value="{{$motivo->mt_id}}">{{$motivo->mt_motivo}}</option>
                    @endforeach
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
                  <video id="video" autoplay playsinline></video>
                </div>
                <button type="button" class="btn btn-secondary tfoto" id="snap">Tomar Foto <i class="fas fa-camera"></i></button>
                <canvas id="canvas" width="240" height="240" name="vi_photo" style="display: none;"></canvas>
            </div>
            </div> 
            <input type="hidden" name="asi_entrada" value="<?php echo date("h:i", strtotime("- 1 minute"));?>">
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
navigator.mediaDevices.getUserMedia({ audio: false, video:{width: { ideal: 1280 }, height: { ideal: 720 }} })
.then(function(stream) {
  var video = document.getElementById('video');
  // Older browsers may not have srcObject
  if ("srcObject" in video) {
    video.srcObject = stream;
  } else {
    // Avoid using this in new browsers, as it is going away.
    video.src = window.URL.createObjectURL(stream);
  }
  video.onloadedmetadata = function(e) {
    video.play();
  };
})
.catch(function(err) {
  console.log(err.name + ": " + err.message);
});
</script>

  
@endsection