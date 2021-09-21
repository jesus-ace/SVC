@extends('layouts.sidebar')

@section('content')

<div class="row justify-content-center align-items-center h-100 mx-auto mt-5 px-0">
  <div class="col-11   justify-content-center px-0  bg-login">
    <form class="registro col-11 col-md-11 " method="POST" action="{{ route('new-visitor') }}" enctype="multipart/form-data">
      <h3>REGISTROS DE VISITANTES</h3>
      {{ csrf_field() }}
      <div class=" row d-md-flex justify-content-around ">
        <div class="col-11 col-md-6 mx-auto mb-3" id="formulario">
          <div class="row">
            <div class="col-12">
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
                <input type="text" name="vi_cedula" id="vi_cedula" class="form-control" required onkeypress="return solonumeros(event)" maxlength="9">
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
                  <option> Seleccione Carnets Disponibles</option>
                  @foreach( $ingreso as $card)
                    @if($card->car_status==0)
                      <option value="{{$card->car_id}}">{{$card->car_id}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">&Aacute;rea a ingresar</span>
                </div>
                <select name="asi_dep_id" class="form-control select custom-select">
                  @foreach( $departments as $departamento)
                  <option value="{{$departamento->dep_id}}">{{$departamento->dep_nombre}}</option>
                  @endforeach
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
                <select name="vi_mt_id" id="vi_mt_id" class="form-control select custom-select">
                  @foreach( $reasons as $motivo)
                  <option value="{{$motivo->mt_id}}">{{$motivo->mt_motivo}}</option>
                  @endforeach
                </select>
              </div>
              <fieldset class="oculto " id="oculto" aria-hidden="true">
                <legend>Registros de equipos</legend>
                <input type="hidden">
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
              <button type="button" id="RE" class="btn RE">Registro de equipos<i class="fas fa-laptop"></i> <i class="fas fa-tools"></i> </button>
              <button type="button" id="oculto2" class="btn CL">Ocultar<i class="far fa-eye-slash"></i></i> </button>
            </div>
          </div>
        </div>
        <div class="col-md-5 justify-content-center mx-auto ">
          
            <video id="video" autoplay playsinline class="photo col-12 h-50 px-0 mx-auto"></video>
         
          <button type="button" class="btn btn-secondary tfoto d-flex justify-content-center mx-auto" id="snap">Tomar Foto <i class="fas fa-camera"></i></button>
          <!--div class="col-11">
            <img src="image/pruebas2.jpeg" alt="foto" class="col-11 px-0 mx-0">
          </div-->
          <canvas id="canvas" width='320px' height='240px' class="justify-content-center img-responsive" style='border: 1px solid #CCC;'></canvas>
          <input type="hidden" id="base64" name="base64">
        </div>
        <button type="submit" class="btn save " id="submit">Guardar <i class="fas fa-save"></i></button>
      </div>
    </form>
  </div>
</div>

<script>
  //Script para mostrar registro de de equipos
  var btnRE = document.getElementById('RE'),
    mostrar = document.getElementById('oculto'),
    btnocultar = document.getElementById('oculto2');
  container = document.getElementById('registro-visitor')
  divInput = document.getElementById("divtipo")
  divTextarea = document.getElementById("divtexarea")

  btnRE.addEventListener('click', function() {
    mostrar.classList.add('active');
    btnocultar.classList.add('active');
    btnRE.classList.add('active');
    container.classList.add('active');
  })

  btnocultar.addEventListener('click', function(e) {
    e.preventDefault();
    mostrar.classList.remove('active');
    btnocultar.classList.remove('active');
    btnRE.classList.remove('active');
    container.classList.remove('active');
  });
</script>

<script>
  navigator.mediaDevices.getUserMedia({
      audio: false,
      video: {
        width: {
          ideal: 320
        },
        height: {
          ideal: 240
        }
      }
    }).then(function(stream) {
      var video = document.getElementById('video');
      if ("srcObject" in video) {
        video.srcObject = stream;
      } else {
        video.src = window.URL.createObjectURL(stream);
      }
      video.onloadedmetadata = function(e) {
        video.play();
      };
    })
    .catch(function(err) {
      console.log(err.name + ": " + err.message);
    });
  const $canvas = document.getElementById('canvas');
  var dataURL = canvas.toDataURL();
  const snap = document.getElementById("snap");

  var context = canvas.getContext('2d');
  snap.addEventListener("click", function() {
    context.drawImage(video, 0, 0, 320, 240);
    var image = canvas.toDataURL(); // data:image/png....
    document.getElementById('base64').value = image;
  }, false);
</script>

  @section('js')
    <script src="/js/validaciones.js"></script>
  @endsection


@endsection