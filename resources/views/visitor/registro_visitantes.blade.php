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
                    <input type="text" name="vi_telefono" id="vi_telefono" class="form-control" required maxlength="11">
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
                    @foreach( $ingreso as $card)
                      <option value="{{$card->car_id}}">{{$card->car_id}}</option>
                    @endforeach
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
                  <input type="hidden" >
                    <div class="input-group mb-3" id="divtipo">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Tipo</span>
                      </div>
                        <input type="text" name="eq_nombre" id="eq_nombre" class="form-control">
                    </div>
                    <div class="input-group mb-3 " id="divtexarea">
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
                <canvas id="canvas"  width='320px' height='240px' name="vi_photo"  style='border: 1px solid #CCC; background-color: rgb(163, 53, 90);'></canvas>
                <input type="hidden" id="base64" name="base64">
            </div>
            </div> 
            <input type="hidden" name="asi_entrada" value="<?php echo date("h:i", strtotime("- 1 minute"));?>">
            <button type="submit" class="btn save" id="submit">Guardar <i class="fas fa-save"></i></button>
          </form> 
        </div>

  <script>
    //Script para mostrar registro de de equipos
    var btnRE = document.getElementById('RE'),
        mostrar = document.getElementById('oculto'),
        btnocultar = document.getElementById('oculto2');
        container= document.getElementById('registro-visitor')
        divInput =document.getElementById("divtipo")
        divTextarea =document.getElementById("divtexarea")

    btnRE.addEventListener('click', function(){
  	  mostrar.classList.add('active');
	    btnocultar.classList.add('active');
      btnRE.classList.add('active');
      container.classList.add('active');
     var newelement1 = document.createElement('input');
            newelement1 .setAttribute('name','eq_nombre');
            newelement1 .setAttribute('class','form-control');
            newelement1 .setAttribute('id','eq_nombre');

            var newElement2  = document.createElement('textarea');
            newElement2 .setAttribute('name','eq_descripcion');
            newElement2 .setAttribute('class','form-control domi');

            divInput.appendChild(newelement1);
            divTextarea.appendChild(newElement2);
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
  document.getElementById('snap').addEventListener("click",function(){
    var canvas = document.getElementById("canvas");
    var image = canvas.toDataURL(); // data:image/png....
    document.getElementById('base64').value = image;
  },false);

  navigator.mediaDevices.getUserMedia({ audio: false, video:{ width: {ideal : 320}, height:{ideal : 240} } })
  .then(function(stream)
  {
    var video = document.getElementById('video');
  
    if ("srcObject" in video) 
    {
      video.srcObject = stream;
    }  
    else 
    {
      video.src = window.URL.createObjectURL(stream);
    }
    video.onloadedmetadata = function(e)
    {
      video.play();
    };
  }).catch(function(err) {
      console.log(err.name + ": " + err.message);
    });

  const $canvas = document.getElementById('canvas');
  var dataURL=canvas.toDataURL();
  const snap = document.getElementById("snap");

  var context = canvas.getContext('2d');
    snap.addEventListener("click", function() {
      context.drawImage(video, 0, 0, 320, 240);
    }); 
</script>
  
@endsection